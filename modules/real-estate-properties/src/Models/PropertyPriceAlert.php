<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

final class PropertyPriceAlert extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_property_price_alerts';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['initial_price' => 'float', 'alert_percentage' => 'float', 'is_active' => 'boolean'];
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    /**
     * @return BelongsTo<Model, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'user_id');
    }

    public function scopeForUser(Builder $query, int|string $teamId, int|string $userId): Builder
    {
        return $query->where('team_id', $teamId)->where('user_id', $userId);
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }
}
