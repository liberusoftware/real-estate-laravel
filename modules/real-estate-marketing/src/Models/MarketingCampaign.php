<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Marketing\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Marketing\Domain\MarketingCampaignStatus;

final class MarketingCampaign extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_marketing_campaigns';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['status' => MarketingCampaignStatus::class, 'audience' => 'array', 'content' => 'array', 'schedule' => 'array', 'metrics' => 'array'];
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
