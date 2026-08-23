<?php

use Illuminate\Support\Facades\Route;
use Liberu\RealEstate\PropertyManagementApi\Http\Controllers\ManagementRecordController;

Route::middleware('api')->prefix('api/real-estate/property-management')->group(function (): void {
    Route::get('/', [ManagementRecordController::class, 'index']);
    Route::post('/', [ManagementRecordController::class, 'store']);
    Route::get('/{record}', [ManagementRecordController::class, 'show']);
    Route::patch('/{record}', [ManagementRecordController::class, 'update']);
});
