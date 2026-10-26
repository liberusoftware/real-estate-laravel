<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesLivewire\Components;

use Illuminate\Contracts\View\View;
use Illuminate\Validation\Rule;
use Liberu\RealEstate\Properties\Application\DeletePropertySearch;
use Liberu\RealEstate\Properties\Application\SavePropertySearch;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertyCategory;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;
use Liberu\RealEstate\Properties\Models\PropertyTemplate;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithPagination;

final class AdvancedPropertySearch extends Component
{
    use WithPagination;

    protected $queryString = [
        'search' => ['except' => ''],
        'minPrice' => ['except' => null],
        'maxPrice' => ['except' => null],
        'minBedrooms' => ['except' => null],
        'propertyType' => ['except' => null],
        'sortBy' => ['except' => 'created_at'],
        'energyRating' => ['except' => null],
        'minEnergyScore' => ['except' => null],
        'minWalkabilityScore' => ['except' => null],
        'minTransitScore' => ['except' => null],
        'minBikeScore' => ['except' => null],
        'featuredOnly' => ['except' => false],
        'country' => ['except' => null],
    ];

    #[Validate('nullable|string|max:255')]
    public string $search = '';

    public ?string $postalCode = null;

    public bool $needsSyncingOnly = false;

    public ?float $minPrice = null;

    public ?float $maxPrice = null;

    public ?int $minBedrooms = null;

    public ?int $maxBedrooms = null;

    public ?int $minBathrooms = null;

    public ?int $maxBathrooms = null;

    public ?float $minArea = null;

    public ?float $maxArea = null;

    public ?int $minYearBuilt = null;

    public ?int $maxYearBuilt = null;

    public ?string $propertyType = null;

    public ?string $status = null;

    public string $sortBy = 'created_at';

    public string $sortDirection = 'desc';

    public ?int $propertyCategoryId = null;

    public ?int $propertyTemplateId = null;

    public ?string $country = null;

    public ?string $energyRating = null;

    public ?int $minEnergyScore = null;

    public ?int $minWalkabilityScore = null;

    public ?int $minTransitScore = null;

    public ?int $minBikeScore = null;

    /** @var array<int, string> */
    public array $selectedAmenities = [];

    public ?float $latitude = null;

    public ?float $longitude = null;

    public ?float $radius = null;

    public bool $featuredOnly = false;

    public string $savedSearchName = '';

    public ?string $savedSearchMessage = null;

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function saveSearch(SavePropertySearch $save): void
    {
        $this->validate(['savedSearchName' => ['required', 'string', 'max:120']]);
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null, 403);
        $save->handle($user->current_team_id, $user->getAuthIdentifier(), $this->savedSearchName, $this->criteria());
        $this->savedSearchMessage = __('Search saved successfully.');
        $this->savedSearchName = '';
    }

    public function loadSearch(int $savedSearchId): void
    {
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null, 403);
        $savedSearch = PropertySavedSearch::query()->forUser($user->current_team_id, $user->getAuthIdentifier())->findOrFail($savedSearchId);
        foreach ($savedSearch->criteria as $property => $value) {
            if (property_exists($this, $property)) {
                $this->{$property} = $value;
            }
        }
        $this->savedSearchMessage = __('Loaded :name.', ['name' => $savedSearch->name]);
        $this->resetPage();
    }

    public function deleteSearch(int $savedSearchId, DeletePropertySearch $delete): void
    {
        $user = auth()->user();
        abort_unless($user?->current_team_id !== null, 403);
        $delete->handle($user->current_team_id, $user->getAuthIdentifier(), $savedSearchId);
        $this->savedSearchMessage = __('Saved search deleted.');
    }

    /** @return array<string, mixed> */
    private function criteria(): array
    {
        $criteria = [
            'search' => $this->search, 'postalCode' => $this->postalCode, 'minPrice' => $this->minPrice, 'maxPrice' => $this->maxPrice,
            'minBedrooms' => $this->minBedrooms, 'maxBedrooms' => $this->maxBedrooms, 'minBathrooms' => $this->minBathrooms, 'maxBathrooms' => $this->maxBathrooms,
            'minArea' => $this->minArea, 'maxArea' => $this->maxArea, 'minYearBuilt' => $this->minYearBuilt, 'maxYearBuilt' => $this->maxYearBuilt,
            'propertyType' => $this->propertyType, 'status' => $this->status, 'sortBy' => $this->sortBy, 'sortDirection' => $this->sortDirection,
            'propertyCategoryId' => $this->propertyCategoryId, 'propertyTemplateId' => $this->propertyTemplateId, 'country' => $this->country,
            'energyRating' => $this->energyRating, 'minEnergyScore' => $this->minEnergyScore, 'minWalkabilityScore' => $this->minWalkabilityScore,
            'minTransitScore' => $this->minTransitScore, 'minBikeScore' => $this->minBikeScore, 'selectedAmenities' => $this->selectedAmenities,
            'latitude' => $this->latitude, 'longitude' => $this->longitude, 'radius' => $this->radius, 'featuredOnly' => $this->featuredOnly,
            'needsSyncingOnly' => $this->needsSyncingOnly,
        ];

        return array_filter($criteria, static fn (mixed $value): bool => $value !== null && $value !== '' && $value !== []);
    }

    public function applyFilters(): void
    {
        $this->validate([
            'minPrice' => ['nullable', 'numeric', 'min:0'],
            'maxPrice' => ['nullable', 'numeric', 'min:0', 'gte:minPrice'],
            'minBedrooms' => ['nullable', 'integer', 'min:0'],
            'maxBedrooms' => ['nullable', 'integer', 'min:0', 'gte:minBedrooms'],
            'minBathrooms' => ['nullable', 'integer', 'min:0'],
            'maxBathrooms' => ['nullable', 'integer', 'min:0', 'gte:minBathrooms'],
            'minArea' => ['nullable', 'numeric', 'min:0'],
            'maxArea' => ['nullable', 'numeric', 'min:0', 'gte:minArea'],
            'minYearBuilt' => ['nullable', ...Property::yearBuiltRules()],
            'maxYearBuilt' => ['nullable', ...Property::yearBuiltRules(), 'gte:minYearBuilt'],
            'propertyType' => ['nullable', 'string', 'max:40'],
            'status' => ['nullable', 'string', Rule::enum(PropertyStatus::class)],
            'sortBy' => ['required', 'string', 'in:created_at,updated_at,price,year_built,bedrooms,bathrooms,area_sqft,address'],
            'sortDirection' => ['required', 'string', 'in:asc,desc'],
            'propertyCategoryId' => ['nullable', 'integer', 'exists:real_estate_property_categories,id'],
            'propertyTemplateId' => ['nullable', 'integer', 'exists:real_estate_property_templates,id'],
            'postalCode' => ['nullable', 'string', 'max:20'],
            'country' => ['nullable', 'string', 'size:2'],
            'energyRating' => ['nullable', 'string', 'max:10'],
            'minEnergyScore' => ['nullable', 'integer', 'between:0,100'],
            'minWalkabilityScore' => ['nullable', 'integer', 'between:0,100'],
            'minTransitScore' => ['nullable', 'integer', 'between:0,100'],
            'minBikeScore' => ['nullable', 'integer', 'between:0,100'],
            'selectedAmenities' => ['array', 'max:20'],
            'selectedAmenities.*' => ['string', 'max:80'],
            'latitude' => ['nullable', 'numeric', 'between:-90,90'],
            'longitude' => ['nullable', 'numeric', 'between:-180,180'],
            'radius' => ['nullable', 'numeric', 'gt:0', 'max:500'],
            'featuredOnly' => ['boolean'],
            'needsSyncingOnly' => ['boolean'],
        ]);

        $this->resetPage();
    }

    public function render(): View
    {
        $teamId = auth()->user()?->current_team_id;
        $propertyTypes = Property::TYPES;
        $categories = $teamId === null ? collect() : PropertyCategory::query()->forTeam($teamId)->orderBy('name')->get();
        $templates = $teamId === null ? collect() : PropertyTemplate::query()->forTeam($teamId)->orderBy('name')->get();
        $savedSearches = $teamId === null ? collect() : PropertySavedSearch::query()->forUser($teamId, auth()->id())->latest()->get();
        $properties = $teamId === null
            ? Property::query()->whereRaw('1 = 0')->paginate(12)
            : Property::query()->forTeam($teamId)
                ->search($this->search)
                ->postalCode($this->postalCode)
                ->when($this->needsSyncingOnly, fn ($query) => $query->needsSyncing())
                ->priceRange($this->minPrice, $this->maxPrice)
                ->bedrooms($this->minBedrooms, $this->maxBedrooms)
                ->bathrooms($this->minBathrooms, $this->maxBathrooms)
                ->areaRange($this->minArea, $this->maxArea)
                ->yearBuiltRange($this->minYearBuilt, $this->maxYearBuilt)
                ->propertyType($this->propertyType)
                ->status($this->status)
                ->category($this->propertyCategoryId)
                ->when($this->propertyTemplateId !== null, fn ($query) => $query->where('property_template_id', $this->propertyTemplateId))
                ->country($this->country)
                ->energyRating($this->energyRating)
                ->minEnergyScore($this->minEnergyScore)
                ->walkabilityScore($this->minWalkabilityScore)
                ->transitScore($this->minTransitScore)
                ->bikeScore($this->minBikeScore)
                ->hasAmenities($this->selectedAmenities)
                ->when($this->latitude !== null && $this->longitude !== null && $this->radius !== null, fn ($query) => $query->nearby($this->latitude, $this->longitude, $this->radius))
                ->when($this->featuredOnly, fn ($query) => $query->featured())
                ->sorted($this->sortBy, $this->sortDirection)->paginate(12);

        $mapPoints = PropertyMap::points($properties->getCollection());

        return view('real-estate-properties-livewire::advanced-property-search', compact('properties', 'categories', 'templates', 'propertyTypes', 'savedSearches', 'mapPoints'));
    }
}
