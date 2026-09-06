<?php

use Illuminate\Support\Facades\Route;
use Liberu\RealEstate\MediaAndDocumentsApi\Http\Controllers\HomeReportController;
use Liberu\RealEstate\MediaAndDocumentsApi\Http\Controllers\DocumentWorkflowController;
use Liberu\RealEstate\MediaAndDocumentsApi\Http\Controllers\MediaDocumentController;
use Liberu\RealEstate\MediaAndDocumentsApi\Http\Controllers\VirtualStagingController;

Route::prefix('api/v1/real-estate/properties/{property}/home-reports')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::get('/', [HomeReportController::class, 'index']);
    Route::post('/', [HomeReportController::class, 'store']);
});

Route::prefix('api/v1/real-estate/media-and-documents')->middleware(['api', 'auth:sanctum', 'throttle:api', 'api.idempotency'])->group(function (): void {
    Route::post('/templates/{documentTemplate}/envelopes', [DocumentWorkflowController::class, 'store'])->name('real-estate.documents.envelopes.store');
    Route::get('/envelopes/{documentEnvelope}', [DocumentWorkflowController::class, 'show'])->name('real-estate.documents.envelopes.show');
    Route::post('/envelopes/{documentEnvelope}/participants/{documentParticipant}/sign', [DocumentWorkflowController::class, 'sign'])->name('real-estate.documents.envelopes.sign');
    Route::get('/staging/styles', [VirtualStagingController::class, 'styles']);
    Route::post('/staging/upload', [VirtualStagingController::class, 'upload']);
    Route::post('/staging/{mediaDocument}/stage', [VirtualStagingController::class, 'stage']);
    Route::get('/', [MediaDocumentController::class, 'index'])->name('real-estate.media-documents.index');
    Route::post('/', [MediaDocumentController::class, 'store'])->name('real-estate.media-documents.store');
    Route::post('/brochure', [MediaDocumentController::class, 'brochure'])->name('real-estate.media-documents.brochure');
    Route::get('/{mediaDocument}', [MediaDocumentController::class, 'show'])->name('real-estate.media-documents.show');
    Route::match(['put', 'patch'], '/{mediaDocument}', [MediaDocumentController::class, 'update'])->name('real-estate.media-documents.update');
    Route::patch('/{mediaDocument}/rights', [MediaDocumentController::class, 'rights'])->name('real-estate.media-documents.rights');
    Route::patch('/{mediaDocument}/reorder', [MediaDocumentController::class, 'reorder'])->name('real-estate.media-documents.reorder');
    Route::patch('/{mediaDocument}/retention', [MediaDocumentController::class, 'retention'])->name('real-estate.media-documents.retention');
    Route::delete('/{mediaDocument}', [MediaDocumentController::class, 'destroy'])->name('real-estate.media-documents.destroy');
});
