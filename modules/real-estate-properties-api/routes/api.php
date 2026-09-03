<?php

use Illuminate\Support\Facades\Route;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\CommunityEventController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PropertyArTourController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PropertyCategoryController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PropertyController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PropertyPriceAlertController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PropertySavedSearchController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PropertyTemplateController;
use Liberu\RealEstate\PropertiesApi\Http\Controllers\PublicPropertyController;

// Anonymous, read-only — the storefront's listing/detail pages. Only
// PropertyStatus::Available records, narrower field set (PublicPropertyResource).
Route::prefix('api/v1/public/properties')->middleware(['api', 'throttle:api'])->group(function (): void {
    Route::get('/', [PublicPropertyController::class, 'index'])->name('public.properties.index');
    Route::get('/{property}', [PublicPropertyController::class, 'show'])->name('public.properties.show');
});

Route::prefix('api/v1/real-estate/properties/{property}/ar-tour')->middleware(['api', 'throttle:api'])->group(function (): void {
    Route::get('/config', [PropertyArTourController::class, 'config'])->name('real-estate.properties.ar-tour.config');
    Route::get('/availability', [PropertyArTourController::class, 'availability'])->name('real-estate.properties.ar-tour.availability');
});

Route::prefix('api/v1/real-estate/properties/{property}/ar-tour')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::post('/enable', [PropertyArTourController::class, 'enable'])->name('real-estate.properties.ar-tour.enable');
    Route::post('/disable', [PropertyArTourController::class, 'disable'])->name('real-estate.properties.ar-tour.disable');
    Route::match(['put', 'patch'], '/settings', [PropertyArTourController::class, 'updateSettings'])->name('real-estate.properties.ar-tour.settings');
});

Route::prefix('api/v1/real-estate/property-saved-searches')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [PropertySavedSearchController::class, 'index'])->name('real-estate.property-saved-searches.index');
    Route::post('/', [PropertySavedSearchController::class, 'store'])->name('real-estate.property-saved-searches.store');
    Route::delete('/{savedSearch}', [PropertySavedSearchController::class, 'destroy'])->name('real-estate.property-saved-searches.destroy');
});

Route::prefix('api/v1/real-estate/community-events')->middleware(['api', 'auth:sanctum', 'throttle:api'])->group(function (): void {
    Route::get('/', [CommunityEventController::class, 'index'])->name('real-estate.community-events.index');
    Route::get('/{event}', [CommunityEventController::class, 'show'])->name('real-estate.community-events.show');
});

Route::prefix('api/v1/real-estate/properties')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [PropertyController::class, 'index'])->name('real-estate.properties.index');
    Route::post('/', [PropertyController::class, 'store'])->name('real-estate.properties.store');
    Route::get('/compare', [PropertyController::class, 'compare'])->name('real-estate.properties.compare');
    Route::post('/tax-estimate', [PropertyController::class, 'taxEstimate'])->name('real-estate.properties.tax-estimate');
    Route::get('/favorites', [PropertyController::class, 'favorites'])->name('real-estate.properties.favorites');
    Route::post('/{property}/transition/{status}', [PropertyController::class, 'transition'])->name('real-estate.properties.transition');
    Route::post('/{property}/favorite', [PropertyController::class, 'favorite'])->name('real-estate.properties.favorite');
    Route::delete('/favorites/{property}', [PropertyController::class, 'removeFavorite'])->name('real-estate.properties.favorite-remove');
    Route::get('/{property}/similar', [PropertyController::class, 'similar'])->name('real-estate.properties.similar');
    Route::post('/{property}/walkability', [PropertyController::class, 'walkability'])->name('real-estate.properties.walkability');
    Route::get('/{property}/qr-code', [PropertyController::class, 'qrCode'])->name('real-estate.properties.qr-code');
    Route::post('/{property}/share', [PropertyController::class, 'share'])->name('real-estate.properties.share');
    Route::get('/{property}/history', [PropertyController::class, 'history'])->name('real-estate.properties.history');
    Route::put('/{property}/units', [PropertyController::class, 'unit'])->name('real-estate.properties.units');
    Route::post('/{property}/keys', [PropertyController::class, 'key'])->name('real-estate.properties.keys');
    Route::get('/{property}', [PropertyController::class, 'show'])->name('real-estate.properties.show');
    Route::match(['put', 'patch'], '/{property}', [PropertyController::class, 'update'])->name('real-estate.properties.update');
    Route::delete('/{property}', [PropertyController::class, 'destroy'])->name('real-estate.properties.destroy');
});

Route::prefix('api/v1/real-estate/properties/{property}/price-alerts')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [PropertyPriceAlertController::class, 'index'])->name('real-estate.properties.price-alerts.index');
    Route::post('/', [PropertyPriceAlertController::class, 'store'])->name('real-estate.properties.price-alerts.store');
});

Route::prefix('api/v1/real-estate/price-alerts')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::match(['put', 'patch'], '/{alert}', [PropertyPriceAlertController::class, 'update'])->name('real-estate.price-alerts.update');
    Route::delete('/{alert}', [PropertyPriceAlertController::class, 'destroy'])->name('real-estate.price-alerts.destroy');
});

Route::prefix('api/v1/real-estate/property-categories')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [PropertyCategoryController::class, 'index'])->name('real-estate.property-categories.index');
    Route::post('/', [PropertyCategoryController::class, 'store'])->name('real-estate.property-categories.store');
    Route::match(['put', 'patch'], '/{category}', [PropertyCategoryController::class, 'update'])->name('real-estate.property-categories.update');
    Route::delete('/{category}', [PropertyCategoryController::class, 'destroy'])->name('real-estate.property-categories.destroy');
});

Route::prefix('api/v1/real-estate/property-templates')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [PropertyTemplateController::class, 'index'])->name('real-estate.property-templates.index');
    Route::post('/', [PropertyTemplateController::class, 'store'])->name('real-estate.property-templates.store');
    Route::match(['put', 'patch'], '/{template}', [PropertyTemplateController::class, 'update'])->name('real-estate.property-templates.update');
    Route::delete('/{template}', [PropertyTemplateController::class, 'destroy'])->name('real-estate.property-templates.destroy');
});
