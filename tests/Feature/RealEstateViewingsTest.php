<?php

declare(strict_types=1);

use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Viewings\Application\CancelViewing;
use Liberu\RealEstate\Viewings\Application\CompleteViewing;
use Liberu\RealEstate\Viewings\Application\ConfirmViewing;
use Liberu\RealEstate\Viewings\Application\CreateViewing;
use Liberu\RealEstate\Viewings\Application\DeleteViewing;
use Liberu\RealEstate\Viewings\Application\MarkViewingNoShow;
use Liberu\RealEstate\Viewings\Application\UpdateViewing;
use Liberu\RealEstate\Viewings\Models\Viewing;
use Liberu\RealEstate\Viewings\Queries\AvailableViewingSlots;
use Liberu\RealEstate\Viewings\Queries\ViewingCalendarExport;

uses(RefreshDatabase::class);

beforeEach(function (): void {
    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));
});

it('creates a requested viewing with access metadata', function (): void {
    $viewing = app(CreateViewing::class)->handle(1, 5, ['subject' => 'Property viewing', 'starts_at' => now()->addDay()->startOfHour(), 'access' => ['key_holder' => 'agent']]);
    expect($viewing->status->value)->toBe('requested')->and($viewing->access['key_holder'])->toBe('agent');
});
it('requires a start time and archives a viewing for its team', function (): void {
    expect(fn () => app(CreateViewing::class)->handle(1, 5, ['subject' => 'Viewing']))->toThrow(ValidationException::class);
    $viewing = Viewing::query()->create(['team_id' => 1, 'subject' => 'Viewing', 'status' => 'requested', 'starts_at' => '2026-09-01 10:00']);
    app(DeleteViewing::class)->handle($viewing, 1);
    expect(Viewing::withTrashed()->find($viewing->id)->deleted_at)->not->toBeNull();
});

it('guards viewing availability and supports confirmation, completion, feedback, and no-shows', function (): void {
    $startsAt = now()->addDays(2)->startOfHour();
    $viewing = app(CreateViewing::class)->handle(1, 5, [
        'subject' => 'Viewing workflow',
        'property_id' => 7,
        'starts_at' => $startsAt,
    ]);

    expect(fn () => app(CreateViewing::class)->handle(1, 6, [
        'subject' => 'Overlapping viewing',
        'property_id' => 7,
        'starts_at' => $startsAt->copy()->addMinutes(15),
    ]))->toThrow(ValidationException::class);

    $viewing = app(ConfirmViewing::class)->handle($viewing, 1);
    $viewing = app(CompleteViewing::class)->handle($viewing, 1, ['rating' => 5]);

    expect($viewing->status->value)->toBe('completed')
        ->and($viewing->feedback['rating'])->toBe(5);

    $noShow = app(CreateViewing::class)->handle(1, 5, [
        'subject' => 'No-show workflow',
        'property_id' => 8,
        'starts_at' => $startsAt->copy()->addDay(),
    ]);
    $noShow = app(ConfirmViewing::class)->handle($noShow, 1);
    $noShow = app(MarkViewingNoShow::class)->handle($noShow, 1, 'Party did not attend.');

    expect($noShow->status->value)->toBe('no_show')
        ->and($noShow->no_show)->toBeTrue()
        ->and($noShow->feedback['no_show_note'])->toBe('Party did not attend.');

    expect(fn () => app(CancelViewing::class)->handle($viewing, 1))->toThrow(ValidationException::class);
});

it('returns weekday slots and removes requested or confirmed overlaps', function (): void {
    $date = CarbonImmutable::now()->addDays(2)->startOfDay();
    $viewing = app(CreateViewing::class)->handle(1, 5, [
        'subject' => 'Already booked',
        'property_id' => 7,
        'starts_at' => $date->setTime(10, 0),
    ]);

    $slots = app(AvailableViewingSlots::class)->handle(1, 7, $date);

    expect($slots)->toContain($date->setTime(9, 0)->toIso8601String())
        ->not->toContain($viewing->starts_at->toIso8601String())
        ->toContain($date->setTime(11, 0)->toIso8601String());

    expect(app(AvailableViewingSlots::class)->handle(1, 7, $date->next(CarbonImmutable::SATURDAY)->startOfDay()))
        ->toBe([]);
});

it('keeps viewing updates inside the future, valid, non-overlapping schedule', function (): void {
    $startsAt = now()->addDays(3)->startOfHour();
    $viewing = app(CreateViewing::class)->handle(1, 5, [
        'subject' => 'Existing viewing',
        'property_id' => 12,
        'starts_at' => $startsAt,
    ]);
    $other = app(CreateViewing::class)->handle(1, 6, [
        'subject' => 'Other property viewing',
        'property_id' => 13,
        'starts_at' => $startsAt,
    ]);

    expect(fn () => app(UpdateViewing::class)->handle($viewing, 1, [
        'starts_at' => $startsAt->copy()->subMinute(),
        'property_id' => $other->property_id,
    ]))->toThrow(ValidationException::class);

    expect(fn () => app(UpdateViewing::class)->handle($viewing, 1, [
        'starts_at' => now()->subMinute(),
    ]))->toThrow(ValidationException::class);

    expect(fn () => app(UpdateViewing::class)->handle($viewing, 1, [
        'starts_at' => $startsAt,
        'ends_at' => $startsAt,
    ]))->toThrow(ValidationException::class);
});

it('preserves the legacy cancellation and rescheduling notice periods', function (): void {
    $viewing = Viewing::query()->create([
        'team_id' => 1,
        'subject' => 'Short notice viewing',
        'status' => 'requested',
        'starts_at' => now()->addHours(12),
    ]);

    expect($viewing->canBeCancelled())->toBeFalse()->and($viewing->canBeRescheduled())->toBeFalse();
    expect(fn () => app(CancelViewing::class)->handle($viewing, 1))->toThrow(ValidationException::class);
    expect(fn () => app(UpdateViewing::class)->handle($viewing, 1, ['starts_at' => now()->addDays(3)]))->toThrow(ValidationException::class);
});

it('exports a team-scoped viewing calendar file', function (): void {
    $viewing = Viewing::query()->create([
        'team_id' => 10,
        'subject' => 'Garden viewing, phase 2',
        'status' => 'confirmed',
        'starts_at' => '2026-09-01 10:00:00',
        'ends_at' => '2026-09-01 11:00:00',
    ]);

    expect(app(ViewingCalendarExport::class)->handle($viewing))
        ->toContain('BEGIN:VCALENDAR')
        ->toContain('SUMMARY:Garden viewing\\, phase 2')
        ->toContain('DTSTART:20260901T100000Z');

    $user = User::factory()->create(['current_team_id' => 11]);
    $this->actingAs($user, 'sanctum')->getJson('/api/v1/real-estate/viewings/'.$viewing->getKey().'/calendar')->assertNotFound();
});
