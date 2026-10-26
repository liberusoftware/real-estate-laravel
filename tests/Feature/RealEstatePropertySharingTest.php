<?php

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Liberu\RealEstate\Properties\Application\CreateProperty;
use Liberu\RealEstate\Properties\Application\SendPropertyToFriend;

beforeEach(function (): void {
    Mail::fake();
    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));
});

it('builds an escaped property sharing email', function (): void {
    $property = app(CreateProperty::class)->handle(10, 20, [
        'address' => '1 High Street', 'title' => 'Bright home', 'price' => 350000,
        'bedrooms' => 3, 'bathrooms' => 2,
    ]);

    $data = app(SendPropertyToFriend::class)->buildEmailData($property, 'Jane', 'John', 'john@example.com', '<script>alert(1)</script>');

    expect($data['subject'])->toContain('John')
        ->and($data['body'])->toContain('Jane')
        ->and($data['body'])->toContain('Bright home')
        ->and($data['body'])->not->toContain('<script>');
});

it('rejects invalid sender and recipient email addresses', function (): void {
    $property = app(CreateProperty::class)->handle(10, 20, ['address' => '1 High Street']);
    $service = app(SendPropertyToFriend::class);

    expect(fn () => $service->handle($property, 'not-an-email', 'Jane', 'John', 'john@example.com'))
        ->toThrow(InvalidArgumentException::class)
        ->and(fn () => $service->handle($property, 'jane@example.com', 'Jane', 'John', 'not-an-email'))
        ->toThrow(InvalidArgumentException::class);
});

it('sends a team-scoped property share through the API', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(10, $user->getKey(), ['address' => '1 High Street', 'title' => 'Shared home']);

    $this->actingAs($user, 'sanctum')
        ->postJson('/api/v1/real-estate/properties/'.$property->getKey().'/share', [
            'recipient_email' => 'jane@example.com', 'recipient_name' => 'Jane Doe',
            'sender_name' => 'John Smith', 'sender_email' => 'john@example.com',
            'personal_message' => 'Take a look at this one.',
        ])
        ->assertOk()
        ->assertJsonPath('data.sent', true)
        ->assertJsonPath('data.property_id', $property->getKey());

    Mail::assertSentCount(1);
});

it('does not share a property belonging to another team', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $property = app(CreateProperty::class)->handle(20, $user->getKey(), ['address' => 'Private Street']);

    $this->actingAs($user, 'sanctum')
        ->postJson('/api/v1/real-estate/properties/'.$property->getKey().'/share', [
            'recipient_email' => 'jane@example.com', 'recipient_name' => 'Jane',
            'sender_name' => 'John', 'sender_email' => 'john@example.com',
        ])
        ->assertNotFound();
});
