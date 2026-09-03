<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Matching\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;

final class MatchProfile extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_match_profiles';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['requirements' => 'array', 'affordability' => 'array', 'preferences' => 'array', 'alerts' => 'array', 'feedback' => 'array', 'exclusions' => 'array'];
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
