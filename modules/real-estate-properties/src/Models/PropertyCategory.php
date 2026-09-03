<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Liberu\Foundation\Organizations\Models\Team;

final class PropertyCategory extends Model
{
    protected $table = 'real_estate_property_categories';

    protected $guarded = ['id'];

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class, 'property_category_id');
    }

    public function scopeForTeam(Builder $query, int|string $teamId): Builder
    {
        return $query->where('team_id', $teamId);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
