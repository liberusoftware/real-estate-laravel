<?php

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Liberu\RealEstate\Properties\Application\CreateProperty;
use Liberu\RealEstate\Properties\Application\GeneratePropertyQrCode;

beforeEach(function (): void {
    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));
});

it('generates property QR-code data with the requested size', function (): void {
    $property = app(CreateProperty::class)->handle(10, 20, [
        'address' => '1 High Street',
        'title' => 'A QR property',
    ]);

    $data = app(GeneratePropertyQrCode::class)->forProperty($property, 320);

    expect($data['property_url'])->toContain('/properties/'.$property->getKey())
        ->and($data['property_title'])->toBe('A QR property')
        ->and($data['size'])->toBe(320)
        ->and($data['url'])->toContain('cht=qr')
        ->and($data['url'])->toContain('chs=320x320');
});

it('rejects empty content and unsafe QR-code sizes', function (): void {
    $service = app(GeneratePropertyQrCode::class);

    expect(fn () => $service->forContent('', 200))->toThrow(InvalidArgumentException::class)
        ->and(fn () => $service->forContent('content', 49))->toThrow(InvalidArgumentException::class)
        ->and(fn () => $service->forContent('content', 1001))->toThrow(InvalidArgumentException::class);
});

it('serves team-scoped property QR-code data through the API', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(10, $user->getKey(), ['address' => '1 High Street']);

    $this->actingAs($user, 'sanctum')
        ->getJson('/api/v1/real-estate/properties/'.$property->getKey().'/qr-code?size=400')
        ->assertOk()
        ->assertJsonPath('data.property_id', $property->getKey())
        ->assertJsonPath('data.size', 400)
        ->assertJsonPath('data.property_url', fn ($url): bool => str_ends_with($url, '/properties/'.$property->getKey()));
});

it('does not expose another team property QR-code data', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(20, $user->getKey(), ['address' => 'Private Street']);

    $this->actingAs($user, 'sanctum')
        ->getJson('/api/v1/real-estate/properties/'.$property->getKey().'/qr-code')
        ->assertNotFound();
});
