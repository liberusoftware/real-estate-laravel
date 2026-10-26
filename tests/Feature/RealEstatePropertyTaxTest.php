<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Liberu\RealEstate\Properties\Application\CreateProperty;
use Liberu\RealEstate\Properties\Application\EstimatePropertyTax;
use Liberu\RealEstate\PropertiesLivewire\Components\PropertyTaxEstimator;
use Livewire\Livewire;

it('returns an explicitly marked UK tax estimate with legacy cost bands', function (): void {
    $estimate = app(EstimatePropertyTax::class)->handle(300000, 'GB', ['buyer_type' => 'home_mover']);

    expect($estimate['estimated'])->toBeTrue()
        ->and($estimate['country'])->toBe('United Kingdom')
        ->and($estimate['total_tax'])->toBe(2500.0)
        ->and($estimate['total_additional_costs'])->toBe(2670.0)
        ->and($estimate['total_cost'])->toBe(305170.0);
});

it('rejects negative purchase prices and falls back to a safe UK buyer type', function (): void {
    expect(fn () => app(EstimatePropertyTax::class)->handle(-1))->toThrow(InvalidArgumentException::class);

    $estimate = app(EstimatePropertyTax::class)->handle(100000, 'UK', ['buyer_type' => 'unknown']);

    expect($estimate['buyer_type'])->toBe('home_mover');
});

it('serves estimates through the authenticated API boundary', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));

    $this->actingAs($user, 'sanctum')
        ->postJson('/api/v1/real-estate/properties/tax-estimate', [
            'purchase_price' => 300000,
            'country' => 'GB',
            'buyer_type' => 'home_mover',
        ])
        ->assertOk()
        ->assertJsonPath('estimated', true)
        ->assertJsonPath('total_tax', 2500);
});

it('calculates a tenant-scoped estimate through Livewire', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(10, $user->getKey(), [
        'address' => 'Tax Street',
        'title' => 'Tax home',
        'price' => 300000,
        'country' => 'GB',
    ]);

    $this->actingAs($user);
    Livewire::component('test-property-tax-estimator', PropertyTaxEstimator::class);

    Livewire::test('test-property-tax-estimator', ['propertyId' => $property->getKey()])
        ->assertSee('Property tax estimate')
        ->call('calculateTax')
        ->assertSet('estimate.estimated', true)
        ->assertSet('estimate.total_tax', 2500)
        ->call('resetCalculation')
        ->assertSet('estimate', null);
});
