<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Valuations\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Valuations\Domain\ValuationStatus;

final class Valuation extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_valuations';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['status' => ValuationStatus::class, 'comparable_data' => 'array', 'recommendation' => 'array', 'conversion' => 'array', 'fee_amount' => 'decimal:2', 'valued_amount' => 'decimal:2', 'scheduled_at' => 'datetime', 'completed_at' => 'datetime', 'follow_up_at' => 'datetime'];
    }

    public function scopeForTeam($query, int|string $teamId)
    {
        return $query->where('team_id', $teamId);
    }

    public function canTransitionTo(ValuationStatus $status): bool
    {
        return match ($this->status) {
            ValuationStatus::Draft => in_array($status, [ValuationStatus::Scheduled, ValuationStatus::Cancelled], true),
            ValuationStatus::Scheduled => in_array($status, [ValuationStatus::Completed, ValuationStatus::Cancelled], true),
            ValuationStatus::Completed => in_array($status, [ValuationStatus::Converted, ValuationStatus::Cancelled], true),
            ValuationStatus::Converted, ValuationStatus::Cancelled => false,
        };
    }

    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }
}
