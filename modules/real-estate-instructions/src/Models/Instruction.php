<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Instructions\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Instructions\Domain\InstructionStatus;

final class Instruction extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_instructions';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => InstructionStatus::class, 'ownership_check' => 'array', 'terms' => 'array', 'disclosures' => 'array', 'approved_at' => 'datetime', 'withdrawn_at' => 'datetime'];
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
