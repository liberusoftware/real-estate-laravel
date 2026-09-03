<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;

final class PropertySavedSearch extends Model
{
    protected $table = 'real_estate_property_saved_searches';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['criteria' => 'array'];
    }

    public function scopeForUser(Builder $query, int|string $teamId, int|string $userId): Builder
    {
        return $query->where('team_id', $teamId)->where('user_id', $userId);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
