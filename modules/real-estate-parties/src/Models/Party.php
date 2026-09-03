<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Parties\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\RealEstate\Parties\Domain\PartyType;

final class Party extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_parties';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'type' => PartyType::class,
            'metadata' => 'array',
            'consent_at' => 'datetime',
        ];
    }

    public function scopeForTeam(Builder $query, int|string $teamId): Builder
    {
        return $query->where('team_id', $teamId);
    }
    public function team()
    {
        return $this->belongsTo(\Liberu\Foundation\Organizations\Models\Team::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(PartyReview::class);
    }

    public function averageReviewRating(): float
    {
        return round((float) ($this->reviews()->approved()->avg('rating') ?? 0), 2);
    }

    public function approvedReviewCount(): int
    {
        return $this->reviews()->approved()->count();
    }
}
