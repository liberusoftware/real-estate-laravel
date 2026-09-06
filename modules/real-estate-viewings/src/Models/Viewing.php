<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Viewings\Domain\ViewingStatus;

final class Viewing extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_viewings';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => ViewingStatus::class, 'access' => 'array', 'accompaniment' => 'array', 'reminders' => 'array', 'feedback' => 'array', 'no_show' => 'boolean', 'starts_at' => 'datetime', 'ends_at' => 'datetime', 'guests_count' => 'integer'];
    }

    public function scopeForTeam(Builder $query, int|string $teamId): Builder
    {
        return $query->where('team_id', $teamId);
    }

    public function scopeForProperty(Builder $query, int|string|null $propertyId): Builder
    {
        return $query->where('property_id', $propertyId);
    }

    public function canTransitionTo(ViewingStatus $status): bool
    {
        return match ($this->status) {
            ViewingStatus::Requested => in_array($status, [ViewingStatus::Confirmed, ViewingStatus::Cancelled], true),
            ViewingStatus::Confirmed => in_array($status, [ViewingStatus::Completed, ViewingStatus::Cancelled, ViewingStatus::NoShow], true),
            ViewingStatus::Completed, ViewingStatus::Cancelled, ViewingStatus::NoShow => false,
        };
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function canBeCancelled(): bool
    {
        return $this->canTransitionTo(ViewingStatus::Cancelled) && $this->starts_at?->gt(now()->addDay());
    }

    public function canBeRescheduled(): bool
    {
        return false;
    }
}
