<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
use Liberu\RealEstate\Marketing\Application\DispatchScheduledCampaigns;
use Liberu\RealEstate\Properties\Application\CheckPriceAlerts;
use Liberu\RealEstate\Properties\Application\CheckSavedSearchAlerts;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

// CheckPriceAlerts existed since 2026-08-30 but was never scheduled — price
// alerts silently never fired. CheckSavedSearchAlerts is new (see
// modules/real-estate-properties). Both only email when something actually
// matched, so hourly is cheap and keeps alerts close to real-time.
Schedule::call(fn () => app(CheckPriceAlerts::class)->handle())->name('check-price-alerts')->hourly()->onOneServer()->withoutOverlapping();
Schedule::call(fn () => app(CheckSavedSearchAlerts::class)->handle())->name('check-saved-search-alerts')->hourly()->onOneServer()->withoutOverlapping();

// MarketingCampaign records could be created and scheduled but never
// actually sent anything — 'content'/'audience' were free-form JSON with no
// dispatch path. This only sends the 'email' channel (see
// SendMarketingCampaign); every other channel value stays inert.
Schedule::call(fn () => app(DispatchScheduledCampaigns::class)->handle())->name('dispatch-scheduled-campaigns')->everyFiveMinutes()->onOneServer()->withoutOverlapping();

// Database + user-upload backups (see config/backup.php for what's actually
// included — deliberately not the codebase, which already lives in git).
Schedule::command('backup:run')->dailyAt('03:00')->onOneServer()->withoutOverlapping();
Schedule::command('backup:clean')->dailyAt('03:30')->onOneServer()->withoutOverlapping();
Schedule::command('backup:monitor')->dailyAt('04:00')->onOneServer()->withoutOverlapping();
