<?php

use App\Models\User;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Liberu\Foundation\Currency\Services\CurrencyConverter;
use Liberu\Foundation\Identity\Socialstream\Actions\VerifyTelegramAuthPayload;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Core\Models\Territory;
use Liberu\RealEstate\Leads\Application\CreateLead;
use Liberu\RealEstate\Leads\Application\UpdateLead;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;
use Liberu\RealEstate\Marketing\Application\SendMarketingCampaign;
use Liberu\RealEstate\Marketing\Mail\CampaignMail;
use Liberu\RealEstate\Marketing\Models\MarketingCampaign;
use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;
use Liberu\RealEstate\Offers\Domain\Events\OfferStatusChanged;
use Liberu\RealEstate\Offers\Domain\OfferStatus;
use Liberu\RealEstate\Offers\Models\Offer;
use Liberu\RealEstate\Parties\Domain\Events\ContactMessageReceived;
use Liberu\RealEstate\Parties\Models\ContactMessage;
use Liberu\RealEstate\Parties\Models\Party;
use Liberu\RealEstate\Properties\Application\CheckSavedSearchAlerts;
use Liberu\RealEstate\Properties\Application\CreateProperty;
use Liberu\RealEstate\Properties\Application\TransitionProperty;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Mail\SavedSearchAlertMail;
use Liberu\RealEstate\Properties\Models\City;
use Liberu\RealEstate\Properties\Models\District;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;
use Liberu\RealEstate\Properties\Models\Region;
use Liberu\RealEstate\PropertiesApi\Http\Resources\PublicPropertyResource;
use Liberu\RealEstate\PropertiesFilament\Widgets\RealEstateOverview;
use Liberu\RealEstate\Viewings\Domain\Events\ViewingCreated;
use Liberu\RealEstate\Viewings\Models\Viewing;

it('uses a configurable property reference prefix while preserving the year and record number', function () {
    $property = new Property(['created_at' => '2026-01-01']);
    $property->id = 15;

    config(['app.property_reference_prefix' => 'RE']);
    expect($property->reference())->toBe('RE-2026-00015');

    config(['app.property_reference_prefix' => 'CUSTOM']);
    expect($property->reference())->toBe('CUSTOM-2026-00015');
});

it('uses the configured currency for dashboard prices without averaging different currencies', function () {
    config(['app.currency' => 'USD']);
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $this->actingAs($user);
    Filament::setTenant($team);
    foreach (['USD' => 1000, 'EUR' => 3000] as $currency => $price) {
        Property::create([
            'team_id' => $team->id, 'created_by' => $user->id, 'address' => 'Example Street',
            'property_type' => 'house', 'status' => PropertyStatus::Published, 'currency' => $currency, 'price' => $price,
        ]);
    }

    $widget = new RealEstateOverview();
    $stats = (new ReflectionMethod($widget, 'getStats'))->invoke($widget);

    expect($stats[2]->getValue())->toBe(2)
        ->and($stats[3]->getValue())->toBe('$1,000.00');
});

it('browses properties by legacy territory codes and city slugs with geographic names', function () {
    $team = Team::factory()->create();
    $otherTeam = Team::factory()->create();
    $user = User::factory()->create();
    $region = Region::create(['name' => 'Example Region', 'slug' => 'example-region']);
    $city = City::create(['region_id' => $region->id, 'name' => 'Example City', 'slug' => 'example-city']);
    $district = District::create(['city_id' => $city->id, 'name' => 'Example District', 'slug' => 'example-district']);
    $territory = Territory::create(['team_id' => $team->id, 'name' => 'Legacy Territory', 'code' => 'LEGACY']);
    $attributes = [
        'created_by' => $user->id, 'address' => 'Example Street', 'property_type' => 'house', 'status' => PropertyStatus::Published,
        'region_id' => $region->id, 'city_id' => $city->id, 'district_id' => $district->id,
    ];
    $property = Property::create(['team_id' => $team->id, 'territory_id' => $territory->id, ...$attributes]);
    Property::create(['team_id' => $otherTeam->id, ...$attributes]);
    Property::create(['team_id' => $team->id, ...$attributes, 'status' => PropertyStatus::Draft]);

    foreach (['legacy', 'EXAMPLE-CITY'] as $location) {
        $this->getJson('/api/v1/public/properties?territory='.$location)
            ->assertSuccessful()->assertJsonCount(1, 'data')
            ->assertJsonPath('data.0.id', $property->id)
            ->assertJsonPath('data.0.territory_code', 'LEGACY')
            ->assertJsonPath('data.0.region', $region->name)
            ->assertJsonPath('data.0.city', $city->name)
            ->assertJsonPath('data.0.district', $district->name);
    }

    $this->getJson('/api/v1/public/properties/'.$property->id)
        ->assertSuccessful()->assertJsonPath('data.city', $city->name);
});

it('persists a lead score supplied by the creation form', function () {
    $team = Team::factory()->create();
    $lead = app(CreateLead::class)->handle($team->id, ['name' => 'Example', 'email' => 'example@example.com', 'score' => 75]);

    expect($lead->fresh()->score)->toBe(75);
});

it('keeps square foot prices and adds correctly converted metric prices', function () {
    $property = new Property(['price' => 1000, 'area_sqft' => 100, 'currency' => 'EUR']);

    expect($property->pricePerSquareFoot())->toBe(10.0)
        ->and($property->pricePerSquareMeter())->toBe(107.64)
        ->and($property->currencySymbol())->toBe('€');
});

it('converts registered currencies using cached rates when enabled', function () {
    config(['currency.exchange_rates_enabled' => true]);
    Http::fake(['*' => Http::response(['result' => 'success', 'rates' => ['USD' => 1.25], 'time_last_update_unix' => now()->timestamp])]);

    expect(app(CurrencyConverter::class)->convertAmount(100, 'GBP', 'USD'))->toBe(125.0)
        ->and(app(CurrencyConverter::class)->convertAmount(20, 'GBP', 'USD'))->toBe(25.0);
    Http::assertSentCount(1);
});

it('does not make exchange requests when rates are disabled', function () {
    config(['currency.exchange_rates_enabled' => false]);
    Http::fake();

    expect(app(CurrencyConverter::class)->convertAmount(100, 'GBP', 'USD'))->toBeNull();
    Http::assertNothingSent();
});

it('retains AR configuration while saving regional amenities and geography', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $region = Region::create(['name' => 'Region', 'slug' => 'region']);
    $city = City::create(['region_id' => $region->id, 'name' => 'City', 'slug' => 'city']);
    $property = app(CreateProperty::class)->handle($team->id, $user->id, [
        'address' => '10 Example Street', 'ar_tour_enabled' => true,
        'ar_model_scale' => 1.5, 'has_generator' => true, 'region_id' => $region->id,
        'city_id' => $city->id,
    ]);

    expect($property->ar_tour_enabled)->toBeTrue()
        ->and($property->ar_model_scale)->toBe(1.5)
        ->and($property->has_generator)->toBeTrue()
        ->and($property->city->region_id)->toBe($region->id);
});

it('rejects mismatched geographic parents', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $region = Region::create(['name' => 'One', 'slug' => 'one']);
    $otherRegion = Region::create(['name' => 'Two', 'slug' => 'two']);
    $city = City::create(['region_id' => $otherRegion->id, 'name' => 'City', 'slug' => 'city']);

    expect(fn () => app(CreateProperty::class)->handle($team->id, $user->id, [
        'address' => '10 Example Street', 'region_id' => $region->id, 'city_id' => $city->id,
    ]))->toThrow(ValidationException::class);
});

it('prevents a lead update from moving records between teams', function () {
    $team = Team::factory()->create();
    $otherTeam = Team::factory()->create();
    $lead = app(CreateLead::class)->handle($team->id, ['name' => 'Example', 'email' => 'example@example.com']);
    app(UpdateLead::class)->handle($lead, $team->id, ['team_id' => $otherTeam->id, 'status' => LeadStatus::Contacted->value]);

    expect($lead->refresh()->team_id)->toBe($team->id)
        ->and($lead->status)->toBe(LeadStatus::Contacted);
});

it('notifies saved searches once for newly published matching properties', function () {
    Mail::fake();
    $team = Team::factory()->create();
    $user = User::factory()->create();
    PropertySavedSearch::create(['team_id' => $team->id, 'user_id' => $user->id, 'name' => 'Homes', 'criteria' => ['maxPrice' => 200000], 'created_at' => now()->subDay()]);
    Property::create(['team_id' => $team->id, 'created_by' => $user->id, 'address' => 'Example', 'property_type' => 'house', 'status' => PropertyStatus::Available, 'price' => 100000, 'published_at' => now()]);

    expect(app(CheckSavedSearchAlerts::class)->handle($team->id))->toBe(1)
        ->and(app(CheckSavedSearchAlerts::class)->handle($team->id))->toBe(0);
    Mail::assertQueued(SavedSearchAlertMail::class, 1);
});

it('supports bounding boxes crossing the date line', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    foreach ([179, -179, 0] as $longitude) {
        Property::create(['team_id' => $team->id, 'created_by' => $user->id, 'address' => 'Example '.$longitude, 'property_type' => 'house', 'status' => PropertyStatus::Available, 'latitude' => 0, 'longitude' => $longitude]);
    }

    expect(Property::withinBounds(-5, 170, 5, -170)->count())->toBe(2);
});

it('loads storefront gallery documents in one batch', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $properties = collect();
    foreach (range(1, 3) as $index) {
        $property = Property::create(['team_id' => $team->id, 'created_by' => $user->id, 'address' => 'Example '.$index, 'property_type' => 'house', 'status' => PropertyStatus::Available]);
        MediaDocument::create(['team_id' => $team->id, 'property_id' => $property->id, 'kind' => 'photo', 'title' => 'Photo', 'path' => 'https://example.com/photo.jpg']);
        $properties->push($property);
    }

    DB::enableQueryLog();
    DB::flushQueryLog();
    $data = PublicPropertyResource::collection($properties)->resolve();
    $galleryQueries = collect(DB::getQueryLog())->filter(fn (array $query): bool => str_contains($query['query'], 'from "real_estate_media_documents"'));
    DB::disableQueryLog();

    expect($data)->toHaveCount(3)
        ->and($data[0]['gallery'][0]['url'])->toBe('https://example.com/photo.jpg')
        ->and($galleryQueries)->toHaveCount(1);
});

it('rehydrates a bearer authenticated user without requiring a session', function () {
    $user = User::factory()->create();
    $token = $user->createToken('test')->plainTextToken;

    $this->withToken($token)->getJson('/api/v1/auth/user')->assertSuccessful()
        ->assertJsonPath('user.id', $user->id)->assertJsonPath('user.roles', []);
});

it('verifies Telegram signatures and rejects future or malformed payloads', function () {
    $verifier = new VerifyTelegramAuthPayload('example-bot-token');
    $payload = ['id' => '123', 'first_name' => 'Example', 'auth_date' => (string) now()->timestamp];
    ksort($payload);
    $check = collect($payload)->map(fn ($value, $key): string => $key.'='.$value)->implode("\n");
    $payload['hash'] = hash_hmac('sha256', $check, hash('sha256', 'example-bot-token', true));

    expect($verifier->verify(Request::create('/', 'GET', $payload)))->not->toBeNull();
    $payload['first_name'] = ['malformed'];
    expect($verifier->verify(Request::create('/', 'GET', $payload)))->toBeNull();
});

it('captures contact enquiries as leads for the property team', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $property = app(CreateProperty::class)->handle($team->id, $user->id, ['address' => 'Example']);
    $message = ContactMessage::create(['name' => 'Buyer', 'email' => 'buyer@example.com', 'message' => 'Please contact me', 'property_id' => $property->id]);
    event(new ContactMessageReceived($message));

    $lead = Lead::where('source_contact_message_id', $message->id)->firstOrFail();
    expect($lead->team_id)->toBe($team->id)->and($lead->property_id)->toBe($property->id);
});

it('advances the matching lead from viewing through accepted offer', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $property = app(CreateProperty::class)->handle($team->id, $user->id, ['address' => 'Example']);
    $party = Party::create(['team_id' => $team->id, 'created_by' => $user->id, 'type' => 'buyer', 'name' => 'Buyer', 'email' => 'buyer@example.com']);
    $lead = app(CreateLead::class)->handle($team->id, ['name' => 'Buyer', 'email' => $party->email, 'property_id' => $property->id]);
    $viewing = new Viewing(['team_id' => $team->id, 'party_id' => $party->id, 'property_id' => $property->id]);
    event(new ViewingCreated($viewing));
    expect($lead->refresh()->status)->toBe(LeadStatus::Viewing);

    $offer = new Offer(['team_id' => $team->id, 'party_id' => $party->id, 'property_id' => $property->id]);
    event(new OfferStatusChanged($offer, OfferStatus::Submitted, OfferStatus::Accepted));
    expect($lead->refresh()->status)->toBe(LeadStatus::Won);
});

it('does not resend a campaign through a stale model instance', function () {
    Mail::fake();
    $team = Team::factory()->create();
    $campaign = MarketingCampaign::create(['team_id' => $team->id, 'name' => 'Homes', 'channel' => 'email', 'status' => 'active', 'audience' => ['emails' => ['reader@example.com', 'reader@example.com']], 'content' => ['subject' => 'New homes', 'body' => '<p>New homes available</p>']]);
    $stale = $campaign->fresh();
    app(SendMarketingCampaign::class)->handle($campaign);
    expect(fn () => app(SendMarketingCampaign::class)->handle($stale))->toThrow(ValidationException::class);
    Mail::assertQueued(CampaignMail::class, 1);
});

it('keeps publication moderation additive to existing status workflows', function () {
    $team = Team::factory()->create();
    $user = User::factory()->create();
    $property = app(CreateProperty::class)->handle($team->id, $user->id, ['address' => 'Example']);
    $transition = app(TransitionProperty::class);
    $transition->handle($team->id, $user->id, $property->id, PropertyStatus::Moderation);
    $published = $transition->handle($team->id, $user->id, $property->id, PropertyStatus::Published);

    expect($published->published_at)->not->toBeNull()->and($published->status->isPublic())->toBeTrue();
    $transition->handle($team->id, $user->id, $property->id, PropertyStatus::Archive);
    expect(PropertyStatus::Available->isPublic())->toBeTrue();
});
