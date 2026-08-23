<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\Lettings\Application\CreateLetting;
use Liberu\RealEstate\Lettings\Application\RecordLettingFailure;
use Liberu\RealEstate\Lettings\Application\TransitionLetting;
use Liberu\RealEstate\Lettings\Application\UpdateLettingDetails;
use Liberu\RealEstate\Lettings\Domain\Events\LettingCreated;
use Liberu\RealEstate\Lettings\Domain\Events\LettingStatusChanged;
use Liberu\RealEstate\Lettings\Domain\LettingCapability;
use Liberu\RealEstate\Lettings\Domain\LettingStatus;
use Liberu\RealEstate\Lettings\Models\Letting;

uses(RefreshDatabase::class);

it('supports every letting capability through its validated public boundary', function (): void {
    expect(LettingCapability::cases())->toHaveCount(8);

    $letting = app(CreateLetting::class)->handle(1, 5, ['subject' => 'Application', 'capability' => LettingCapability::Applications->value]);
    expect($letting->status)->toBe(LettingStatus::Draft);

    expect(fn () => app(UpdateLettingDetails::class)->handle($letting, 1, 5, []))->toThrow(ValidationException::class);
    $updated = app(UpdateLettingDetails::class)->handle($letting, 1, 5, ['applicant_id' => 12]);
    expect($updated->details['applicant_id'])->toBe(12);
});

it('emits lifecycle events, records failure recovery evidence, and isolates teams', function (): void {
    Event::fake();
    $letting = app(CreateLetting::class)->handle(1, 5, ['subject' => 'Renewal', 'capability' => LettingCapability::Renewals->value, 'details' => ['renewal_date' => '2027-01-01']]);
    app(TransitionLetting::class)->handle($letting, 1, 5, LettingStatus::Completed);
    app(RecordLettingFailure::class)->handle($letting->refresh(), 1, 5, 'Provider timeout');

    Event::assertDispatched(LettingCreated::class);
    Event::assertDispatched(LettingStatusChanged::class);
    expect($letting->refresh()->failure_reason)->toBe('Provider timeout')->and($letting->audit)->toHaveCount(3);
    expect(Letting::query()->forTeam(2)->count())->toBe(0);
});
