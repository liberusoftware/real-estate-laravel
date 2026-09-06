<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Offers\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Offers\Domain\OfferStatus;

final class Offer extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_offers';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => OfferStatus::class, 'terms' => 'array', 'qualification' => 'array', 'negotiation' => 'array', 'proof' => 'array', 'decision_history' => 'array', 'accepted_controls' => 'array', 'amount' => 'decimal:2', 'offered_at' => 'datetime', 'responded_at' => 'datetime'];
    }

    public function scopeForTeam($query, int|string $teamId)
    {
        return $query->where('team_id', $teamId);
    }

    public function events(): HasMany
    {
        return $this->hasMany(OfferEvent::class)->oldest('occurred_at')->oldest('id');
    }

    public function canTransitionTo(OfferStatus $status): bool
    {
        return match ($this->status) {
            OfferStatus::Draft => in_array($status, [OfferStatus::Submitted, OfferStatus::Withdrawn], true),
            OfferStatus::Submitted, OfferStatus::Countered => in_array($status, [OfferStatus::Countered, OfferStatus::Accepted, OfferStatus::Rejected, OfferStatus::Withdrawn], true),
            OfferStatus::Accepted, OfferStatus::Rejected, OfferStatus::Withdrawn => false,
        };
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
