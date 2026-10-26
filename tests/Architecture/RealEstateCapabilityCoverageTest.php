<?php

declare(strict_types=1);

use Liberu\RealEstate\Core\Domain\CoreCapabilityDefinition;
use Liberu\RealEstate\Instructions\Domain\InstructionsCapabilityDefinition;
use Liberu\RealEstate\Lettings\Domain\LettingCapabilityDefinition;
use Liberu\RealEstate\Listings\Domain\ListingsCapabilityDefinition;
use Liberu\RealEstate\Marketing\Domain\MarketingCapabilityDefinition;
use Liberu\RealEstate\Matching\Domain\MatchingCapabilityDefinition;
use Liberu\RealEstate\MediaAndDocuments\Domain\MediaAndDocumentsCapabilityDefinition;
use Liberu\RealEstate\Offers\Domain\OffersCapabilityDefinition;
use Liberu\RealEstate\Parties\Domain\PartiesCapabilityDefinition;
use Liberu\RealEstate\PortalsReporting\Domain\PortalsReportingCapabilityDefinition;
use Liberu\RealEstate\Properties\Domain\PropertiesCapabilityDefinition;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementCapabilityDefinition;
use Liberu\RealEstate\SalesProgression\Domain\SalesProgressionCapabilityDefinition;
use Liberu\RealEstate\Valuations\Domain\ValuationsCapabilityDefinition;
use Liberu\RealEstate\Viewings\Domain\ViewingsCapabilityDefinition;

it('keeps every open real-estate issue feature represented by its domain boundary', function (): void {
    $root = dirname(__DIR__, 2);
    $definitions = [
        'real-estate-core' => CoreCapabilityDefinition::class,
        'real-estate-parties' => PartiesCapabilityDefinition::class,
        'real-estate-properties' => PropertiesCapabilityDefinition::class,
        'real-estate-instructions' => InstructionsCapabilityDefinition::class,
        'real-estate-listings' => ListingsCapabilityDefinition::class,
        'real-estate-lettings' => LettingCapabilityDefinition::class,
        'real-estate-property-management' => ManagementCapabilityDefinition::class,
        'real-estate-matching' => MatchingCapabilityDefinition::class,
        'real-estate-viewings' => ViewingsCapabilityDefinition::class,
        'real-estate-offers' => OffersCapabilityDefinition::class,
        'real-estate-sales-progression' => SalesProgressionCapabilityDefinition::class,
        'real-estate-marketing' => MarketingCapabilityDefinition::class,
        'real-estate-portals-reporting' => PortalsReportingCapabilityDefinition::class,
        'real-estate-valuations' => ValuationsCapabilityDefinition::class,
        'real-estate-media-and-documents' => MediaAndDocumentsCapabilityDefinition::class,
    ];

    foreach ($definitions as $module => $definition) {
        $manifest = json_decode(file_get_contents("{$root}/modules/{$module}/module.json"), true, flags: JSON_THROW_ON_ERROR);
        $features = array_values(array_map(
            static fn (array $capability): string => $capability['label'],
            $definition::all(),
        ));

        expect($features)->toBe($manifest['features'], "{$module} has drifted from its issue feature scope.");
    }
});

it('keeps Packagist names free of the source repository module prefix', function (): void {
    $root = dirname(__DIR__, 2);

    foreach (glob("{$root}/modules/real-estate-*/composer.json") ?: [] as $composerFile) {
        $package = json_decode(file_get_contents($composerFile), true, flags: JSON_THROW_ON_ERROR);

        expect($package['name'])->not->toContain('/module-');
    }
});

it('requires authenticated, throttled API boundaries and OpenAPI 3.1 contracts', function (): void {
    $root = dirname(__DIR__, 2);

    foreach (glob("{$root}/modules/real-estate-*-api/routes/api.php") ?: [] as $routeFile) {
        $routes = file_get_contents($routeFile);

        expect($routes)->toContain("'auth:sanctum'")
            ->and($routes)->toContain("'throttle:api'");
    }

    foreach (glob("{$root}/modules/real-estate-*-api/openapi/v1/*.yaml") ?: [] as $openApiFile) {
        $openApi = file_get_contents($openApiFile);

        expect($openApi)->toContain('openapi: 3.1.0')
            ->and($openApi)->toContain('securitySchemes:')
            ->and($openApi)->toContain('operationId:')
            ->and($openApi)->toContain('security:')
            ->and($openApi)->toContain('schemas:')
            ->and($openApi)->toContain('Error:')
            ->and($openApi)->toContain('PaginationMeta:')
            ->and($openApi)->toContain('Idempotency-Key');
    }
});

it('keeps API controllers behind explicit response resources', function (): void {
    $root = dirname(__DIR__, 2);

    foreach (glob("{$root}/modules/real-estate-*-api/src/Http/Controllers/*Controller.php") ?: [] as $controllerFile) {
        $controller = file_get_contents($controllerFile);

        expect($controller)->toContain('Http\\Resources\\');
    }
});

it('keeps Livewire list surfaces validated and stateful', function (): void {
    $root = dirname(__DIR__, 2);

    foreach (glob("{$root}/modules/real-estate-*-livewire/src/Components/*.php") ?: [] as $componentFile) {
        if (preg_match('/(List|Search)\.php$/', $componentFile) === 1) {
            expect(file_get_contents($componentFile))->toContain("#[Validate('nullable|string|max:255')]");
        }
    }

    foreach (glob("{$root}/modules/real-estate-*-livewire/resources/views/*.blade.php") ?: [] as $viewFile) {
        if (preg_match('/(list|search)\.blade\.php$/', $viewFile) !== 1) {
            continue;
        }

        $view = file_get_contents($viewFile);

        expect($view)->toContain('wire:loading')->and($view)->toContain('@empty');
    }
});

it('keeps advanced Livewire search ordering bounded', function (): void {
    $source = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/AdvancedPropertySearch.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/advanced-property-search.blade.php'));

    expect($source)->toContain('public string $sortBy = \'created_at\';')
        ->toContain("'sortBy' => ['required', 'string', 'in:created_at,updated_at,price,year_built,bedrooms,bathrooms,area_sqft,address']")
        ->toContain('->sorted($this->sortBy, $this->sortDirection)')
        ->and($view)->toContain('advanced-sort-by')
        ->toContain('advanced-sort-direction');
});

it('preserves Livewire property filters in the URL', function (): void {
    $propertyList = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyList.php'));
    $advancedSearch = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/AdvancedPropertySearch.php'));

    expect($propertyList)->toContain('protected $queryString = [')
        ->toContain("'selectedAmenities' => ['except' => []]")
        ->toContain("'sortDirection' => ['except' => 'desc']")
        ->and($advancedSearch)->toContain('protected $queryString = [')
        ->toContain("'sortBy' => ['except' => 'created_at']")
        ->toContain("'featuredOnly' => ['except' => false]");
});

it('keeps the API property response aligned with legacy listing data', function (): void {
    $resource = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Resources/PropertyResource.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));

    foreach (['title', 'description', 'currency', 'reception_rooms', 'year_built', 'postal_code', 'energy_score', 'list_date', 'is_featured', 'ar_tour_enabled', 'insurance_expiry_date', 'rightmove_id', 'zoopla_id', 'onthemarket_id'] as $field) {
        expect($resource)->toContain("'{$field}'");
        expect($openApi)->toContain($field);
    }

    expect($openApi)->toContain('#/components/schemas/PropertyPage')
        ->toContain('#/components/schemas/PropertyResponse');
});

it('does not narrow advanced Livewire search when no template is selected', function (): void {
    $source = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/AdvancedPropertySearch.php'));

    expect($source)->toContain('->when($this->propertyTemplateId !== null, fn ($query) => $query->where(\'property_template_id\', $this->propertyTemplateId))');
});

it('keeps property template filters available across API and Filament', function (): void {
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));
    $filament = file_get_contents(base_path('modules/real-estate-properties-filament/src/Resources/PropertyResource.php'));

    expect($api)->toContain("'property_template_id' => ['sometimes', 'nullable'")
        ->toContain('where(\'property_template_id\', $filters[\'property_template_id\'])')
        ->and($openApi)->toContain('name: property_template_id')
        ->and($filament)->toContain("SelectFilter::make('property_template_id')")
        ->toContain('PropertyTemplate::query()->forTeam');
});

it('keeps the property detail disclosure contract across adapters', function (): void {
    $model = file_get_contents(base_path('modules/real-estate-properties/src/Models/Property.php'));
    $definition = file_get_contents(base_path('modules/real-estate-properties/src/Domain/PropertiesCapabilityDefinition.php'));
    $resource = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Resources/PropertyResource.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));
    $detail = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyDetail.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/property-detail.blade.php'));
    $filament = file_get_contents(base_path('modules/real-estate-properties-filament/src/Resources/PropertyResource.php'));

    expect($model)->toContain('public function daysListed(): ?int')
        ->toContain('public function model3dUrl(): ?string')
        ->toContain('public function pricePerSquareFoot(): ?float')
        ->toContain('public function disclosureFacts(): array')
        ->and($definition)->toContain('Property detail disclosures')
        ->and($resource)->toContain("'disclosure_facts' => \$this->resource->disclosureFacts()")
        ->and($openApi)->toContain('days_listed:')
        ->toContain('price_per_square_foot:')
        ->toContain('disclosure_facts:')
        ->and($provider)->toContain("property-detail', Components\\PropertyDetail::class")
        ->and($detail)->toContain('forTeam($teamId)')
        ->toContain('property-viewing-requested')
        ->toContain('toggle3dModel')
        ->and($view)->toContain('Property facts')
        ->toContain('Book a viewing')
        ->toContain('loading="lazy"')
        ->toContain('preload="none"')
        ->and($filament)->toContain("TextColumn::make('price_per_square_foot')")
        ->toContain("TextColumn::make('days_listed')")
        ->toContain("TextColumn::make('floor_plan_image')");
});

it('keeps the property gallery contract connected to the media boundary', function (): void {
    $property = file_get_contents(base_path('modules/real-estate-properties/src/Models/Property.php'));
    $galleryItem = file_get_contents(base_path('modules/real-estate-properties/src/Domain/PropertyGalleryItem.php'));
    $detail = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyDetail.php'));
    $media = file_get_contents(base_path('modules/real-estate-media-and-documents/src/Models/MediaDocument.php'));
    $mediaCreate = file_get_contents(base_path('modules/real-estate-media-and-documents/src/Application/CreateMediaDocument.php'));

    expect($property)->toContain('public function galleryItems(array $mediaItems = []): array')
        ->and($galleryItem)->toContain('public function alt(): string')
        ->toContain('public function isPlan(): bool')
        ->and($detail)->toContain('MediaDocument::query()')
        ->toContain("whereIn('kind', ['photo', 'floorplan', 'siteplan'])")
        ->and($media)->toContain('public const GALLERY_KINDS')
        ->toContain('public function publicUrl(): ?string')
        ->toContain('public function isVideo(): bool')
        ->and($mediaCreate)->toContain("'siteplan'");
});

it('keeps the property comparison contract tenant-scoped across core, API, and Livewire', function (): void {
    $model = file_get_contents(base_path('modules/real-estate-properties/src/Models/Property.php'));
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-properties-api/routes/api.php'));
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyComparison.php'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));

    expect($model)->toContain('public function comparisonData(): array')
        ->and($api)->toContain('public function compare(Request $request): JsonResponse')
        ->toContain('forTeam($teamId)')
        ->and($routes)->toContain("'/compare'")
        ->and($component)->toContain('count($this->propertyIds) >= 4')
        ->toContain('whereNotIn')
        ->toContain('teamId()')
        ->and($provider)->toContain("property-comparison', Components\\PropertyComparison::class");
});

it('keeps property tax estimates available across the modular adapters', function (): void {
    $core = file_get_contents(base_path('modules/real-estate-properties/src/Application/EstimatePropertyTax.php'));
    $definition = file_get_contents(base_path('modules/real-estate-properties/src/Domain/PropertiesCapabilityDefinition.php'));
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-properties-api/routes/api.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyTaxEstimator.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/property-tax-estimator.blade.php'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));
    $filament = file_get_contents(base_path('modules/real-estate-properties-filament/src/Resources/PropertyResource.php'));

    expect($core)->toContain('public const BUYER_TYPES')
        ->toContain("'estimated' => true")
        ->toContain('United Kingdom')
        ->and($definition)->toContain('Property tax estimates')
        ->and($api)->toContain('public function taxEstimate(Request $request, EstimatePropertyTax $estimate)')
        ->toContain('purchase_price')
        ->and($routes)->toContain("'/tax-estimate'")
        ->and($openApi)->toContain('/api/v1/real-estate/properties/tax-estimate')
        ->toContain('real.estate.properties.taxEstimate')
        ->and($component)->toContain('forTeam($this->teamId())')
        ->toContain('calculateTax')
        ->and($view)->toContain('qualified adviser')
        ->toContain('wire:click="calculateTax"')
        ->and($provider)->toContain("property-tax-estimator', Components\\PropertyTaxEstimator::class")
        ->and($filament)->toContain("Action::make('tax_estimate')")
        ->toContain('EstimatePropertyTax');
});

it('keeps the legacy saved-property wishlist connected across property adapters', function (): void {
    $core = file_get_contents(base_path('modules/real-estate-properties/src/Application/RemovePropertyFavorite.php'));
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-properties-api/routes/api.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/WishlistManager.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/wishlist-manager.blade.php'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));
    $filament = file_get_contents(base_path('modules/real-estate-properties-filament/src/Resources/PropertyResource.php'));

    expect($core)->toContain('class RemovePropertyFavorite')->toContain('team_id')->toContain('user_id')
        ->and($api)->toContain('public function favorites(Request $request)')->toContain('public function removeFavorite')
        ->and($routes)->toContain("'/favorites'")->toContain("'/favorites/{property}'")
        ->and($openApi)->toContain('/api/v1/real-estate/properties/favorites')
        ->toContain('real.estate.properties.favorites')
        ->and($component)->toContain('class WishlistManager')->toContain('removeFavorite')
        ->and($view)->toContain('Saved properties')->toContain('No saved properties yet')
        ->and($provider)->toContain("wishlist-manager', Components\\WishlistManager::class")
        ->and($filament)->toContain("Filter::make('favorites_only')")->toContain('favoritedBy');
});

it('keeps saved-search persistence connected across property adapters', function (): void {
    $core = file_get_contents(base_path('modules/real-estate-properties/src/Models/PropertySavedSearch.php'));
    $save = file_get_contents(base_path('modules/real-estate-properties/src/Application/SavePropertySearch.php'));
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/PropertySavedSearchController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-properties-api/routes/api.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/AdvancedPropertySearch.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/advanced-property-search.blade.php'));
    $filament = file_get_contents(base_path('modules/real-estate-properties-filament/src/Resources/PropertySavedSearchResource.php'));
    $plugin = file_get_contents(base_path('modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php'));

    expect($core)->toContain('class PropertySavedSearch')->toContain('ForUser')
        ->and($save)->toContain('class SavePropertySearch')->toContain('criteria')
        ->and($api)->toContain('class PropertySavedSearchController')->toContain('public function store')
        ->and($routes)->toContain('property-saved-searches')
        ->and($openApi)->toContain('/api/v1/real-estate/property-saved-searches')
        ->toContain('real.estate.properties.saveSearch')
        ->and($component)->toContain('public function saveSearch')->toContain('loadSearch')->toContain('deleteSearch')
        ->and($view)->toContain('Saved searches')->toContain('wire:click="saveSearch"')
        ->and($filament)->toContain('class PropertySavedSearchResource')->toContain('getEloquentQuery')
        ->and($plugin)->toContain('PropertySavedSearchResource::class');
});

it('keeps community event proximity behavior connected to the property API boundary', function (): void {
    $model = file_get_contents(base_path('modules/real-estate-properties/src/Models/CommunityEvent.php'));
    $property = file_get_contents(base_path('modules/real-estate-properties/src/Models/Property.php'));
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/CommunityEventController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-properties-api/routes/api.php'));
    $resource = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Resources/CommunityEventResource.php'));

    expect($model)->toContain('class CommunityEvent')->toContain('scopeUpcoming')->toContain('scopeNearby')
        ->and($property)->toContain('getNearbyCommunityEvents')
        ->and($api)->toContain('class CommunityEventController')->toContain('property_id')
        ->and($routes)->toContain('real-estate/community-events')
        ->and($resource)->toContain('class CommunityEventResource');
});

it('keeps property reviews connected to the modular Livewire boundary', function (): void {
    $model = file_get_contents(base_path('modules/real-estate-properties/src/Models/PropertyReview.php'));
    $action = file_get_contents(base_path('modules/real-estate-properties/src/Application/SubmitPropertyReview.php'));
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyReviewForm.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/property-review-form.blade.php'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));

    expect($model)->toContain('class PropertyReview')->toContain('scopeApproved')
        ->and($action)->toContain('class SubmitPropertyReview')->toContain('hasPropertyInteraction')
        ->and($component)->toContain('class PropertyReviewForm')->toContain('submitReview')
        ->and($view)->toContain('aria-label=')->toContain('Submit review')
        ->and($provider)->toContain("property-review-form', Components\\PropertyReviewForm::class");
});

it('keeps role and neighborhood reviews inside their modular boundaries', function (): void {
    $party = file_get_contents(base_path('modules/real-estate-parties/src/Models/Party.php'));
    $partyReview = file_get_contents(base_path('modules/real-estate-parties/src/Models/PartyReview.php'));
    $partyAction = file_get_contents(base_path('modules/real-estate-parties/src/Application/SubmitPartyReview.php'));
    $partyComponent = file_get_contents(base_path('modules/real-estate-parties-livewire/src/Components/PartyReviewForm.php'));
    $partyProvider = file_get_contents(base_path('modules/real-estate-parties-livewire/src/PartiesLivewireServiceProvider.php'));
    $neighborhood = file_get_contents(base_path('modules/real-estate-properties/src/Models/Neighborhood.php'));
    $neighborhoodReview = file_get_contents(base_path('modules/real-estate-properties/src/Models/NeighborhoodReview.php'));
    $neighborhoodAction = file_get_contents(base_path('modules/real-estate-properties/src/Application/SubmitNeighborhoodReview.php'));
    $neighborhoodComponent = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/NeighborhoodReviewForm.php'));

    expect($party)->toContain('function reviews')->toContain('averageReviewRating')
        ->and($partyReview)->toContain('class PartyReview')->toContain('scopeApproved')
        ->and($partyAction)->toContain('class SubmitPartyReview')->toContain('PartyType::Landlord')->toContain('PartyType::Tenant')
        ->and($partyComponent)->toContain('class PartyReviewForm')->toContain('submitReview')
        ->and($partyProvider)->toContain('landlord-review-form')->toContain('tenant-review-form')
        ->and($neighborhood)->toContain('class Neighborhood')->toContain('scopeForTeam')
        ->and($neighborhoodReview)->toContain('class NeighborhoodReview')->toContain('scopeApproved')
        ->and($neighborhoodAction)->toContain('class SubmitNeighborhoodReview')
        ->and($neighborhoodComponent)->toContain('class NeighborhoodReviewForm')->toContain('submitReview');
});

it('keeps property price alerts connected across modular boundaries', function (): void {
    $model = file_get_contents(base_path('modules/real-estate-properties/src/Models/PropertyPriceAlert.php'));
    $action = file_get_contents(base_path('modules/real-estate-properties/src/Application/CheckPriceAlerts.php'));
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PriceAlertManager.php'));
    $api = file_get_contents(base_path('modules/real-estate-properties-api/src/Http/Controllers/PropertyPriceAlertController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-properties-api/routes/api.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml'));

    expect($model)->toContain('class PropertyPriceAlert')->toContain('scopeActive')
        ->and($action)->toContain('class CheckPriceAlerts')->toContain('PriceAlertTriggered')
        ->and($component)->toContain('class PriceAlertManager')->toContain('createAlert')
        ->and($api)->toContain('class PropertyPriceAlertController')->toContain('PropertyPriceAlertResource')
        ->and($routes)->toContain('price-alerts')
        ->and($openApi)->toContain('createPriceAlert')->toContain('PriceAlertInput');
});

it('keeps property submission connected to the modular property and media actions', function (): void {
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertySubmissionForm.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/property-submission-form.blade.php'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));

    expect($component)->toContain('class PropertySubmissionForm')
        ->toContain('CreateProperty')
        ->toContain('CreateMediaDocument')
        ->toContain('generateAIDescription')
        ->toContain('preview')
        ->and($view)->toContain('enctype="multipart/form-data"')->toContain('Submit property')
        ->and($provider)->toContain("property-submission-form', Components\\PropertySubmissionForm::class");
});

it('keeps property preview connected to the submission event', function (): void {
    $component = file_get_contents(base_path('modules/real-estate-properties-livewire/src/Components/PropertyPreview.php'));
    $view = file_get_contents(base_path('modules/real-estate-properties-livewire/resources/views/property-preview.blade.php'));
    $provider = file_get_contents(base_path('modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php'));

    expect($component)->toContain('class PropertyPreview')->toContain("On('previewProperty')")
        ->and($view)->toContain('No property selected for preview.')
        ->and($provider)->toContain("property-preview', Components\\PropertyPreview::class");
});

it('keeps VR property design modularized across core, API, and Livewire adapters', function (): void {
    $root = dirname(__DIR__, 2);
    $core = file_get_contents("{$root}/modules/real-estate-vr-design/src/Application/VrDesignService.php");
    $model = file_get_contents("{$root}/modules/real-estate-vr-design/src/Models/VrDesign.php");
    $api = file_get_contents("{$root}/modules/real-estate-vr-design-api/src/Http/Controllers/VrDesignController.php");
    $routes = file_get_contents("{$root}/modules/real-estate-vr-design-api/routes/api.php");
    $openApi = file_get_contents("{$root}/modules/real-estate-vr-design-api/openapi/v1/real-estate-vr-design.yaml");
    $livewire = file_get_contents("{$root}/modules/real-estate-vr-design-livewire/src/Components/DesignStudio.php");
    $definition = file_get_contents("{$root}/modules/real-estate-vr-design/src/Domain/VrDesignCapabilityDefinition.php");

    expect($core)->toContain('class VrDesignService')->toContain('addFurniture')->toContain('uploadThumbnail')->toContain('cloneDesign')
        ->and($model)->toContain('scopeForTeam')->toContain('scopeTemplates')
        ->and($definition)->toContain('Design styles')->toContain('VR exports')
        ->and($api)->toContain('class VrDesignController')->toContain('VrDesignResource')
        ->and($routes)->toContain("'auth:sanctum'")->toContain('vr-design')
        ->and($openApi)->toContain('openapi: 3.1.0')->toContain('operationId:')
        ->and($livewire)->toContain('class DesignStudio')->toContain('saveDesign');
});

it('keeps published news connected to the marketing API boundary', function (): void {
    $model = file_get_contents(base_path('modules/real-estate-marketing/src/Models/NewsArticle.php'));
    $api = file_get_contents(base_path('modules/real-estate-marketing-api/src/Http/Controllers/NewsArticleController.php'));
    $routes = file_get_contents(base_path('modules/real-estate-marketing-api/routes/api.php'));
    $resource = file_get_contents(base_path('modules/real-estate-marketing-api/src/Http/Resources/NewsArticleResource.php'));
    $openApi = file_get_contents(base_path('modules/real-estate-marketing-api/openapi/v1/real-estate-marketing.yaml'));

    expect($model)->toContain('class NewsArticle')->toContain('scopePublished')->toContain('scopeFeatured')
        ->and($api)->toContain('class NewsArticleController')->toContain('public function latest')->toContain('public function featured')
        ->and($routes)->toContain('real-estate/news')
        ->and($resource)->toContain('class NewsArticleResource')
        ->and($openApi)->toContain('real.estate.marketing.news.list');
});

it('keeps published news available through presentation adapters', function (): void {
    $filament = file_get_contents(base_path('modules/real-estate-marketing-filament/src/Resources/NewsArticleResource.php'));
    $plugin = file_get_contents(base_path('modules/real-estate-marketing-filament/src/MarketingFilamentPlugin.php'));
    $livewire = file_get_contents(base_path('modules/real-estate-marketing-livewire/src/Components/NewsArticleList.php'));
    $view = file_get_contents(base_path('modules/real-estate-marketing-livewire/resources/views/news-article-list.blade.php'));

    expect($filament)->toContain('class NewsArticleResource')->toContain('getEloquentQuery')->toContain('published')
        ->and($plugin)->toContain('NewsArticleResource::class')
        ->and($livewire)->toContain('class NewsArticleList')->toContain('published')
        ->and($view)->toContain('wire:model.live')->toContain('@empty');
});

it('keeps Filament resources tenant-scoped and lifecycle-delegated', function (): void {
    $root = dirname(__DIR__, 2);

    foreach (glob("{$root}/modules/real-estate-*-filament/src/Resources/*Resource.php") ?: [] as $resourceFile) {
        $resource = file_get_contents($resourceFile);

        if (in_array(basename($resourceFile), ['RegionResource.php', 'CityResource.php', 'DistrictResource.php'], true)) {
            expect($resource)->toContain('isScopedToTenant')->toContain('return false;')
                ->toContain('canViewAny')->toContain('canCreate')->toContain('canEdit')->toContain('canDelete');

            continue;
        }

        expect($resource)->toContain('getEloquentQuery')
            ->and($resource)->toContain('current_team_id');
    }

    foreach (glob("{$root}/modules/real-estate-*-filament/src/Resources/*Resource/Pages/Create*.php") ?: [] as $pageFile) {
        expect(file_get_contents($pageFile))->toContain('handleRecordCreation');
    }

    foreach (glob("{$root}/modules/real-estate-*-filament/src/Resources/*Resource/Pages/Edit*.php") ?: [] as $pageFile) {
        expect(file_get_contents($pageFile))->toContain('handleRecordUpdate');
    }
});

it('keeps property valuation estimates connected across valuation adapters', function (): void {
    $root = dirname(__DIR__, 2);
    $core = file_get_contents("{$root}/modules/real-estate-valuations/src/Application/GeneratePropertyValuation.php");
    $definition = file_get_contents("{$root}/modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php");
    $provider = file_get_contents("{$root}/modules/real-estate-valuations/src/ValuationsServiceProvider.php");
    $api = file_get_contents("{$root}/modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php");
    $routes = file_get_contents("{$root}/modules/real-estate-valuations-api/routes/api.php");
    $openApi = file_get_contents("{$root}/modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml");
    $livewire = file_get_contents("{$root}/modules/real-estate-valuations-livewire/src/Components/PropertyValuationEstimator.php");
    $livewireProvider = file_get_contents("{$root}/modules/real-estate-valuations-livewire/src/ValuationsLivewireServiceProvider.php");
    $filament = file_get_contents("{$root}/modules/real-estate-valuations-filament/src/Resources/ValuationResource.php");

    expect($core)->toContain('public const MODEL_VERSION')
        ->toContain("'estimated' => true")
        ->toContain('featureImportance')
        ->toContain('predictionFactors')
        ->and($definition)->toContain('Property valuation estimates')
        ->and($provider)->toContain('GeneratePropertyValuation')
        ->and($api)->toContain('public function calculateProperty')
        ->toContain('GeneratePropertyValuation')
        ->and($routes)->toContain("'/calculate-property'")
        ->and($openApi)->toContain('/api/v1/real-estate/valuations/calculate-property')
        ->toContain('real.estate.valuations.calculateProperty')
        ->and($livewire)->toContain('generateValuation')
        ->and($livewireProvider)->toContain("property-valuation-estimator', Components\\PropertyValuationEstimator::class")
        ->and($filament)->toContain("Action::make('property_estimate')")
        ->toContain('GeneratePropertyValuation');
});

it('keeps property recommendations connected across matching adapters', function (): void {
    $root = dirname(__DIR__, 2);
    $core = file_get_contents("{$root}/modules/real-estate-matching/src/Application/RankPropertyRecommendations.php");
    $definition = file_get_contents("{$root}/modules/real-estate-matching/src/Domain/MatchingCapabilityDefinition.php");
    $provider = file_get_contents("{$root}/modules/real-estate-matching/src/MatchingServiceProvider.php");
    $api = file_get_contents("{$root}/modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php");
    $routes = file_get_contents("{$root}/modules/real-estate-matching-api/routes/api.php");
    $openApi = file_get_contents("{$root}/modules/real-estate-matching-api/openapi/v1/real-estate-matching.yaml");
    $livewire = file_get_contents("{$root}/modules/real-estate-matching-livewire/src/Components/PropertyRecommendations.php");
    $livewireProvider = file_get_contents("{$root}/modules/real-estate-matching-livewire/src/MatchingLivewireServiceProvider.php");
    $view = file_get_contents("{$root}/modules/real-estate-matching-livewire/resources/views/property-recommendations.blade.php");
    $filament = file_get_contents("{$root}/modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php");

    expect($core)->toContain('class RankPropertyRecommendations')
        ->toContain('recommendation_score')
        ->toContain('array_slice')
        ->and($definition)->toContain('Property recommendations')
        ->and($provider)->toContain('RankPropertyRecommendations')
        ->and($api)->toContain('public function recommendProperties')
        ->toContain('RankPropertyRecommendations')
        ->and($routes)->toContain("'/recommend-properties'")
        ->and($openApi)->toContain('/api/v1/real-estate/matching/recommend-properties')
        ->toContain('real.estate.matching.recommendProperties')
        ->and($livewire)->toContain('updateRecommendations')
        ->toContain('loadMore')
        ->and($livewireProvider)->toContain("property-recommendations', Components\\PropertyRecommendations::class")
        ->and($view)->toContain('Recommended properties')
        ->toContain('Match score')
        ->and($filament)->toContain("Action::make('recommend_properties')")
        ->toContain('RankPropertyRecommendations');
});

it('keeps mortgage estimates connected across valuation adapters', function (): void {
    $root = dirname(__DIR__, 2);
    $core = file_get_contents("{$root}/modules/real-estate-valuations/src/Application/CalculateMortgage.php");
    $definition = file_get_contents("{$root}/modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php");
    $api = file_get_contents("{$root}/modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php");
    $routes = file_get_contents("{$root}/modules/real-estate-valuations-api/routes/api.php");
    $openApi = file_get_contents("{$root}/modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml");
    $livewire = file_get_contents("{$root}/modules/real-estate-valuations-livewire/src/Components/MortgageCalculator.php");
    $livewireProvider = file_get_contents("{$root}/modules/real-estate-valuations-livewire/src/ValuationsLivewireServiceProvider.php");
    $filament = file_get_contents("{$root}/modules/real-estate-valuations-filament/src/Resources/ValuationResource.php");

    expect($core)->toContain('class CalculateMortgage')
        ->toContain('amortization_schedule')
        ->toContain('Estimate only')
        ->and($definition)->toContain('Mortgage estimates')
        ->and($api)->toContain('public function calculateMortgage')
        ->toContain('CalculateMortgage')
        ->and($routes)->toContain("'/calculate-mortgage'")
        ->and($openApi)->toContain('/api/v1/real-estate/valuations/calculate-mortgage')
        ->toContain('real.estate.valuations.calculateMortgage')
        ->and($livewire)->toContain('calculateMortgage')
        ->and($livewireProvider)->toContain("mortgage-calculator', Components\\MortgageCalculator::class")
        ->and($filament)->toContain("Action::make('mortgage_estimate')")
        ->toContain('CalculateMortgage');
});

it('keeps rental yield estimates connected across valuation adapters', function (): void {
    $root = dirname(__DIR__, 2);
    $core = file_get_contents("{$root}/modules/real-estate-valuations/src/Application/CalculateRentalYield.php");
    $definition = file_get_contents("{$root}/modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php");
    $api = file_get_contents("{$root}/modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php");
    $routes = file_get_contents("{$root}/modules/real-estate-valuations-api/routes/api.php");
    $openApi = file_get_contents("{$root}/modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml");
    $livewire = file_get_contents("{$root}/modules/real-estate-valuations-livewire/src/Components/RentalYieldCalculator.php");
    $livewireProvider = file_get_contents("{$root}/modules/real-estate-valuations-livewire/src/ValuationsLivewireServiceProvider.php");
    $filament = file_get_contents("{$root}/modules/real-estate-valuations-filament/src/Resources/ValuationResource.php");

    expect($core)->toContain('class CalculateRentalYield')
        ->toContain('gross_yield')->toContain('net_yield')->toContain('disclaimer')
        ->and($definition)->toContain('Rental yield estimates')
        ->and($api)->toContain('public function calculateRentalYield')->toContain('CalculateRentalYield')
        ->and($routes)->toContain("'/calculate-rental-yield'")
        ->and($openApi)->toContain('/api/v1/real-estate/valuations/calculate-rental-yield')
        ->toContain('real.estate.valuations.calculateRentalYield')
        ->and($livewire)->toContain('calculateRentalYield')
        ->and($livewireProvider)->toContain("rental-yield-calculator', Components\\RentalYieldCalculator::class")
        ->and($filament)->toContain("Action::make('rental_yield_estimate')")
        ->toContain('CalculateRentalYield');
});
