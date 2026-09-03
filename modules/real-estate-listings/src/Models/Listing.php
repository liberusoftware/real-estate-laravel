<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Listings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Listings\Domain\ListingStatus;

final class Listing extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_listings';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => ListingStatus::class, 'channel_content' => 'array', 'publication_rules' => 'array', 'portal_feeds' => 'array', 'reconciliation' => 'array', 'price' => 'decimal:2', 'available_from' => 'date', 'published_at' => 'datetime'];
    }

    public function scopeForTeam($query, int|string $teamId)
    {
        return $query->where('team_id', $teamId);
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
