<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Global reference data — not team-scoped, since a region is a fact about
 * geography, not about which team lists properties in it.
 */
final class Region extends Model
{
    protected $table = 'real_estate_regions';

    protected $guarded = ['id'];

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
