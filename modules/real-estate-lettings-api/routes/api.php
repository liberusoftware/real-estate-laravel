<?php

use Illuminate\Support\Facades\Route;
use Liberu\RealEstate\LettingsApi\Http\Controllers\LettingController;

Route::middleware('api')->prefix('api/real-estate/lettings')->group(function (): void {
    Route::get('/', [LettingController::class, 'index']);
    Route::post('/', [LettingController::class, 'store']);
    Route::get('/{letting}', [LettingController::class, 'show']);
    Route::patch('/{letting}', [LettingController::class, 'update']);
});
