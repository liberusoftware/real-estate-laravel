<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementStatus;

final class ManagementRecord extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_property_management_records';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => ManagementStatus::class, 'details' => 'array', 'audit' => 'array', 'completed_at' => 'datetime', 'cancelled_at' => 'datetime'];
    }

    public function scopeForTeam($query, int|string $teamId)
    {
        return $query->where('team_id', $teamId);
    }
}
