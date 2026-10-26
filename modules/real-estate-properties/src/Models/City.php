<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class City extends Model
{
    protected $table = 'real_estate_cities';

    protected $guarded = ['id'];

    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    public function districts(): HasMany
    {
        return $this->hasMany(District::class);
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
