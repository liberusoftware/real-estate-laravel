<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\RealEstate\Lettings\Domain\LettingStatus;

final class Letting extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_lettings';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => LettingStatus::class, 'details' => 'array', 'audit' => 'array', 'completed_at' => 'datetime', 'cancelled_at' => 'datetime'];
    }

    public function scopeForTeam($query, int|string $teamId)
    {
        return $query->where('team_id', $teamId);
    }
}
