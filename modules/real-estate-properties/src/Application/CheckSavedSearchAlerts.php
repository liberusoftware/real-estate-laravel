<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Application;

use Illuminate\Support\Facades\Event;
use Liberu\RealEstate\Properties\Domain\Events\SavedSearchAlertTriggered;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;

/**
 * Scheduled (see routes/console.php): for every saved search, finds
 * properties published since the search's last notification and — if any
 * match — fires SavedSearchAlertTriggered once per search with the whole
 * batch, then advances last_notified_at so the same property is never
 * re-announced on the next run.
 */
final class CheckSavedSearchAlerts
{
    public function handle(int|string|null $teamId = null): int
    {
        $searches = PropertySavedSearch::query()
            ->when($teamId !== null, fn ($query) => $query->where('team_id', $teamId))
            ->with('user')->lazyById(100);
        $notified = 0;

        foreach ($searches as $search) {
            $checkedAt = now();
            $since = $search->last_notified_at ?? $search->created_at;
            $criteria = $search->criteria;

            $matches = Property::query()
                ->forTeam($search->team_id)
                ->whereIn('status', [PropertyStatus::Available->value, PropertyStatus::Published->value])
                ->where('published_at', '>', $since)->where('published_at', '<=', $checkedAt)
                ->search($criteria['search'] ?? null)
                ->priceRange($criteria['minPrice'] ?? null, $criteria['maxPrice'] ?? null)
                ->propertyType($criteria['propertyType'] ?? null)
                ->postalCode($criteria['postalCode'] ?? null)
                ->bedrooms($criteria['minBedrooms'] ?? null, $criteria['maxBedrooms'] ?? null)
                ->bathrooms($criteria['minBathrooms'] ?? null, $criteria['maxBathrooms'] ?? null)
                ->areaRange($criteria['minArea'] ?? null, $criteria['maxArea'] ?? null)
                ->yearBuiltRange($criteria['minYearBuilt'] ?? null, $criteria['maxYearBuilt'] ?? null)
                ->status($criteria['status'] ?? null)
                ->minEnergyScore($criteria['minEnergyScore'] ?? null)
                ->walkabilityScore($criteria['minWalkabilityScore'] ?? null)
                ->transitScore($criteria['minTransitScore'] ?? null)
                ->bikeScore($criteria['minBikeScore'] ?? null)
                ->when($criteria['featuredOnly'] ?? false, fn ($query) => $query->featured())
                ->when($criteria['needsSyncingOnly'] ?? false, fn ($query) => $query->needsSyncing())
                ->when(filled($criteria['propertyCategoryId'] ?? null), fn ($query) => $query->where('property_category_id', $criteria['propertyCategoryId']))
                ->when(filled($criteria['propertyTemplateId'] ?? null), fn ($query) => $query->where('property_template_id', $criteria['propertyTemplateId']))
                ->when(filled($criteria['country'] ?? null), fn ($query) => $query->where('country', strtoupper($criteria['country'])))
                ->when(filled($criteria['energyRating'] ?? null), fn ($query) => $query->where('energy_rating', $criteria['energyRating']))
                ->when(isset($criteria['latitude'], $criteria['longitude'], $criteria['radius']), fn ($query) => $query->nearby($criteria['latitude'], $criteria['longitude'], $criteria['radius']))
                ->when(
                    ! empty($criteria['selectedAmenities']),
                    fn ($query) => $query->hasAmenities($criteria['selectedAmenities']),
                )
                ->latest('published_at')
                ->get();

            if ($matches->isEmpty()) {
                $search->update(['last_notified_at' => $checkedAt]);

                continue;
            }

            Event::dispatch(new SavedSearchAlertTriggered($search, $matches));
            $search->update(['last_notified_at' => $checkedAt]);
            $notified++;
        }

        return $notified;
    }
}
