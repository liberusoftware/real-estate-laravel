<?php

use Illuminate\Support\Facades\Route;
use Liberu\RealEstate\CoreApi\Http\Controllers\AgencyController;
use Liberu\RealEstate\CoreApi\Http\Controllers\BranchController;
use Liberu\RealEstate\CoreApi\Http\Controllers\CalendarEntryController;
use Liberu\RealEstate\CoreApi\Http\Controllers\CommunicationController;
use Liberu\RealEstate\CoreApi\Http\Controllers\CoreConfigurationController;
use Liberu\RealEstate\CoreApi\Http\Controllers\NumberingController;
use Liberu\RealEstate\CoreApi\Http\Controllers\PublicTerritoryController;

// Anonymous, read-only — the storefront's territory picker/filter. Not
// team-scoped by request user (there isn't one); see PublicTerritoryController.
Route::get('api/v1/public/territories', [PublicTerritoryController::class, 'index'])
    ->middleware(['api', 'throttle:api'])
    ->name('public.territories.index');

Route::prefix('api/v1/real-estate/calendar-entries')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::post('/', [CalendarEntryController::class, 'store']);
    Route::match(['put', 'patch'], '/{calendarEntry}', [CalendarEntryController::class, 'update']);
    Route::delete('/{calendarEntry}', [CalendarEntryController::class, 'destroy']);
});
Route::prefix('api/v1/real-estate/communications')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::post('/', [CommunicationController::class, 'store']);
    Route::match(['put', 'patch'], '/{communication}', [CommunicationController::class, 'update']);
    Route::delete('/{communication}', [CommunicationController::class, 'destroy']);
});

Route::middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('api/v1/real-estate/core/{kind}', [CoreConfigurationController::class, 'list'])->whereIn('kind', ['terminology', 'statuses', 'audit']);
    Route::put('api/v1/real-estate/core/terminology/{key}', [CoreConfigurationController::class, 'terminology']);
    Route::post('api/v1/real-estate/core/statuses', [CoreConfigurationController::class, 'status']);
    Route::post('api/v1/real-estate/core/audit', [CoreConfigurationController::class, 'audit']);
});
use Liberu\RealEstate\CoreApi\Http\Controllers\TerritoryController;

Route::post('api/v1/real-estate/numbering/{key}/next', [NumberingController::class, 'next'])
    ->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])
    ->where('key', '[A-Za-z0-9_.-]{1,80}')
    ->name('real-estate.numbering.next');

Route::prefix('api/v1/real-estate/branches')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [BranchController::class, 'index'])->name('real-estate.branches.index');
    Route::post('/', [BranchController::class, 'store'])->name('real-estate.branches.store');
    Route::get('/{branch}', [BranchController::class, 'show'])->name('real-estate.branches.show');
    Route::match(['put', 'patch'], '/{branch}', [BranchController::class, 'update'])->name('real-estate.branches.update');
    Route::delete('/{branch}', [BranchController::class, 'destroy'])->name('real-estate.branches.destroy');
});

Route::prefix('api/v1/real-estate/agencies')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [AgencyController::class, 'index']);
    Route::post('/', [AgencyController::class, 'store']);
    Route::get('/{agency}', [AgencyController::class, 'show']);
    Route::match(['put', 'patch'], '/{agency}', [AgencyController::class, 'update']);
    Route::delete('/{agency}', [AgencyController::class, 'destroy']);
});

Route::prefix('api/v1/real-estate/territories')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [TerritoryController::class, 'index']);
    Route::post('/', [TerritoryController::class, 'store']);
    Route::get('/{territory}', [TerritoryController::class, 'show']);
    Route::match(['put', 'patch'], '/{territory}', [TerritoryController::class, 'update']);
    Route::delete('/{territory}', [TerritoryController::class, 'destroy']);
});
