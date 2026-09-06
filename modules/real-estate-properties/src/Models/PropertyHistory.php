<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;

final class PropertyHistory extends Model
{
    protected $table = 'real_estate_property_history';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['changes' => 'array'];
    }

    public function scopeByType(Builder $query, string $type): Builder
    {
        return $query->where('event', $type);
    }

    public function scopePriceChanges(Builder $query): Builder
    {
        return $query->whereIn('event', ['price_change', 'updated'])
            ->where(function (Builder $query): void {
                $query->where('event', 'price_change')
                    ->orWhereJsonContains('changes', ['price']);
            });
    }

    public function scopeSales(Builder $query): Builder
    {
        return $query->whereIn('event', ['sale', 'status_changed'])
            ->where(function (Builder $query): void {
                $query->where('event', 'sale')
                    ->orWhereJsonContains('changes', ['to' => 'sold']);
            });
    }

    public function getPriceChangePercentage(): ?float
    {
        $changes = $this->getAttribute('changes') ?? [];
        $change = $changes['price'] ?? $changes;
        $old = $change['from'] ?? $change['old_value'] ?? null;
        $new = $change['to'] ?? $change['new_value'] ?? null;

        if ($old === null || $new === null || (float) $old <= 0) {
            return null;
        }

        return round((((float) $new - (float) $old) / (float) $old) * 100, 2);
    }

    public function getFormattedDescription(): string
    {
        $changes = $this->getAttribute('changes') ?? [];
        $change = $changes['price'] ?? $changes;
        $old = $change['from'] ?? $change['old_value'] ?? null;
        $new = $change['to'] ?? $change['new_value'] ?? null;

        if (($this->event === 'price_change' || array_key_exists('price', $changes)) && $old !== null && $new !== null) {
            return sprintf('Price changed from %s to %s (%s%.2f%%)', number_format((float) $old, 2), number_format((float) $new, 2), ($this->getPriceChangePercentage() ?? 0) >= 0 ? '+' : '', $this->getPriceChangePercentage() ?? 0);
        }

        if ($this->event === 'status_changed') {
            return sprintf('Status changed from %s to %s', $this->changes['from'] ?? 'unknown', $this->changes['to'] ?? 'unknown');
        }

        return ucfirst(str_replace('_', ' ', $this->event));
    }

    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
