<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PortalsReporting\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\PortalsReporting\Domain\PortalReportStatus;

final class PortalReport extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_portal_reports';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['status' => PortalReportStatus::class, 'payload' => 'array', 'metrics' => 'array', 'published_at' => 'datetime', 'generated_at' => 'datetime', 'expires_at' => 'datetime'];
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
