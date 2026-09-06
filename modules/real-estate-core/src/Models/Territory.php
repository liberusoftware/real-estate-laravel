<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Core\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;

final class Territory extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_territories';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['boundary' => 'array', 'metadata' => 'array'];
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    public function scopeForTeam(Builder $query, int|string $teamId): Builder
    {
        return $query->where('team_id', $teamId);
    }
    
}

