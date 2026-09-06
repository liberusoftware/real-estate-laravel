<?php

declare(strict_types=1);

use Illuminate\Foundation\Testing\RefreshDatabase;
use Liberu\RealEstate\MediaAndDocuments\Application\DocumentTemplateCatalogue;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentCategory;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentTemplate;
use Liberu\RealEstate\MediaAndDocuments\Models\MediaDocument;

uses(RefreshDatabase::class);

it('organizes media documents into team-scoped categories', function (): void {
    $category = DocumentCategory::query()->create(['team_id' => 1, 'name' => 'Contracts', 'description' => 'Legal documents']);
    $document = MediaDocument::query()->create(['team_id' => 1, 'kind' => 'document', 'path' => 'contracts/lease.pdf']);
    $category->documents()->attach($document);

    expect($category->documents)->toHaveCount(1)->and($document->fresh()->categories)->toHaveCount(1)->and(DocumentCategory::query()->forTeam(1)->first()->name)->toBe('Contracts');
});

it('extracts and safely replaces document template fields', function (): void {
    $template = DocumentTemplate::query()->create(['team_id' => 1, 'name' => 'Offer', 'type' => 'offer', 'content' => '<p>Hello {{ recipient }}</p><p>{{ amount }}</p>']);

    expect($template->getCustomFields())->toBe(['recipient', 'amount'])
        ->and($template->generateDocument(['recipient' => '<Buyer>', 'amount' => '£300,000']))->toContain('&lt;Buyer&gt;')->toContain('£300,000')
        ->and($template->renderContent(['recipient' => 'Buyer']))->toContain('Buyer');
});

it('provides UK and generic demonstrations for the document workflow', function (): void {
    $catalogue = app(DocumentTemplateCatalogue::class);

    expect($catalogue->for('tenancy_agreement', 'en-GB'))->toHaveCount(1)
        ->and($catalogue->for('sales_memorandum', 'en-GB'))->toHaveCount(1)
        ->and($catalogue->for('tenancy_agreement', 'en'))->toHaveCount(1)
        ->and($catalogue->demonstrations())->each->toHaveKeys([
            'slug', 'name', 'description', 'document_type', 'locale', 'variables', 'sections', 'content',
        ]);
});
