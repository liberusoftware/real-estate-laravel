<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Domain\Events;

use Illuminate\Database\Eloquent\Collection;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;

final class SavedSearchAlertTriggered
{
    /** @param Collection<int, Property> $properties */
    public function __construct(
        public readonly PropertySavedSearch $savedSearch,
        public readonly Collection $properties,
    ) {}
}
