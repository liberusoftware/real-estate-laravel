<?php

use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Schema;
use Liberu\RealEstate\Marketing\Models\NewsArticle;
use Liberu\RealEstate\MarketingLivewire\Components\LatestNews;
use Liberu\RealEstate\MarketingLivewire\Components\NewsDetail;
use Livewire\Livewire;

beforeEach(function (): void {
    Livewire::component('test-latest-news', LatestNews::class);
    Livewire::component('test-news-detail', NewsDetail::class);
});

it('serves only published team-visible news with bounded feeds', function (): void {
    expect(Schema::hasTable('real_estate_marketing_news'))->toBeTrue();

    $user = User::factory()->create(['current_team_id' => 10]);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Published story', 'content' => '<p>Story</p>', 'published_at' => now()->subDay(), 'slug' => 'published-story']);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Draft story', 'content' => 'Draft']);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Scheduled story', 'content' => 'Later', 'published_at' => now()->addDay()]);

    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));
    $this->actingAs($user, 'sanctum')
        ->getJson('/api/v1/real-estate/news')
        ->assertOk()
        ->assertJsonCount(1, 'data')
        ->assertJsonPath('data.0.slug', 'published-story');

    $this->getJson('/api/v1/real-estate/news/published-story')->assertOk()->assertJsonPath('data.title', 'Published story');
    $this->getJson('/api/v1/real-estate/news/draft-story')->assertNotFound();
});

it('supports latest and featured news feeds', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Featured', 'content' => 'Featured', 'published_at' => now()->subDay(), 'is_featured' => true]);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Regular', 'content' => 'Regular', 'published_at' => now()->subDays(2)]);

    RateLimiter::for('api', static fn (): Limit => Limit::perMinute(1000));
    $this->actingAs($user, 'sanctum')->getJson('/api/v1/real-estate/news/featured?limit=1')->assertOk()->assertJsonCount(1, 'data')->assertJsonPath('data.0.title', 'Featured');
});

it('renders featured latest news and related article detail', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Featured', 'content' => 'Featured body', 'published_at' => now()->subDay(), 'is_featured' => true, 'slug' => 'featured']);
    NewsArticle::query()->create(['team_id' => null, 'title' => 'Related', 'content' => 'Related body', 'published_at' => now()->subDays(2), 'slug' => 'related']);

    Livewire::actingAs($user)->test('test-latest-news')
        ->assertSee('Featured')
        ->assertDontSee('Related');

    Livewire::actingAs($user)->test('test-news-detail', ['slug' => 'featured'])
        ->assertSee('Featured body')
        ->assertSee('Related');
});

it('escapes scripts and event handlers in published news content', function (): void {
    $user = User::factory()->create(['current_team_id' => 10]);
    $content = '<script>alert(document.cookie)</script><img src=x onerror=alert(1)>';
    NewsArticle::query()->create(['team_id' => 10, 'title' => 'Unsafe story', 'content' => $content, 'published_at' => now()->subDay(), 'slug' => 'unsafe-story']);

    Livewire::actingAs($user)->test('test-news-detail', ['slug' => 'unsafe-story'])
        ->assertSee($content)
        ->assertDontSee($content, false);
});
