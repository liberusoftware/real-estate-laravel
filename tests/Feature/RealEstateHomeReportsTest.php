<?php

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Storage;
use Liberu\RealEstate\MediaAndDocuments\Application\CreateHomeReport;
use Liberu\RealEstate\MediaAndDocuments\Application\UpdateHomeReportConditions;
use Liberu\RealEstate\MediaAndDocuments\Application\UploadHomeReportFile;
use Liberu\RealEstate\MediaAndDocuments\Models\HomeReport;
use Liberu\RealEstate\Properties\Application\CreateProperty;

beforeEach(function (): void {
    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));
    Storage::fake('public');
});

it('creates and evaluates a home report', function (): void {
    $property = app(CreateProperty::class)->handle(10, 20, ['address' => '1 High Street']);
    $report = app(CreateHomeReport::class)->handle($property, 20, [
        'survey_date' => now()->toDateString(),
        'expiry_date' => now()->addYear()->toDateString(),
        'energy_band' => 'C',
        'energy_current_score' => 68,
        'energy_potential_score' => 81,
        'property_condition' => '1',
    ]);

    expect($report->isValid())->toBeTrue()
        ->and($report->isExpired())->toBeFalse()
        ->and($report->conditionLabel())->toBe('No action required')
        ->and($report->energyImprovementPoints())->toBe(13);

    $updated = app(UpdateHomeReportConditions::class)->handle($report, 10, ['structure' => 2, 'roof_outside' => 3]);

    expect($updated->overallCondition())->toBe('3')
        ->and($updated->condition_categories)->toMatchArray(['structure' => 2, 'roof_outside' => 3]);
});

it('rejects invalid report ratings and accepts expired reports in the expired scope', function (): void {
    $property = app(CreateProperty::class)->handle(10, 20, ['address' => '1 High Street']);
    $expired = app(CreateHomeReport::class)->handle($property, 20, [
        'survey_date' => now()->subYear()->toDateString(),
        'expiry_date' => now()->subDay()->toDateString(),
    ]);

    expect($expired->isExpired())->toBeTrue()
        ->and($expired->isValid())->toBeFalse()
        ->and(HomeReport::query()->forTeam(10)->expired()->count())->toBe(1)
        ->and(HomeReport::query()->forTeam(10)->valid()->count())->toBe(0);

    expect(fn () => app(CreateHomeReport::class)->handle($property, 20, ['energy_band' => 'Z']))
        ->toThrow(InvalidArgumentException::class)
        ->and(fn () => app(UpdateHomeReportConditions::class)->handle($expired, 10, ['cellar' => 4]))
        ->toThrow(InvalidArgumentException::class);
});

it('uploads and replaces a home-report PDF', function (): void {
    $property = app(CreateProperty::class)->handle(10, 20, ['address' => '1 High Street']);
    $report = app(CreateHomeReport::class)->handle($property, 20, []);
    $first = app(UploadHomeReportFile::class)->handle($report, 10, UploadedFile::fake()->create('first.pdf', 100, 'application/pdf'));
    $oldPath = $first->file_path;
    $second = app(UploadHomeReportFile::class)->handle($first, 10, UploadedFile::fake()->create('second.pdf', 100, 'application/pdf'));

    expect($second->file_path)->not->toBe($oldPath)
        ->and($second->file_url)->toBeString();
    Storage::disk('public')->assertMissing($oldPath);
    Storage::disk('public')->assertExists($second->file_path);
});

it('serves team-scoped home reports through the API', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(10, $user->getKey(), ['address' => '1 High Street']);

    $this->actingAs($user, 'sanctum')
        ->postJson('/api/v1/real-estate/properties/'.$property->getKey().'/home-reports', [
            'survey_date' => '2026-08-01', 'energy_band' => 'B', 'property_condition' => '2',
        ])
        ->assertCreated()
        ->assertJsonPath('data.energy_band', 'B')
        ->assertJsonPath('data.is_valid', true);

    $this->actingAs($user, 'sanctum')
        ->getJson('/api/v1/real-estate/properties/'.$property->getKey().'/home-reports')
        ->assertOk()
        ->assertJsonPath('data.0.property_id', $property->getKey());
});

it('does not expose home reports from another team', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(20, $user->getKey(), ['address' => 'Private Street']);

    $this->actingAs($user, 'sanctum')
        ->getJson('/api/v1/real-estate/properties/'.$property->getKey().'/home-reports')
        ->assertNotFound();
});
