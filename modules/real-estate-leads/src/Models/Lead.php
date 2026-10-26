<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Liberu\RealEstate\Leads\Domain\LeadSource;
use Liberu\RealEstate\Leads\Domain\LeadStatus;

final class Lead extends Model
{
    use SoftDeletes;

    protected $table = 'real_estate_leads';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['source' => LeadSource::class, 'status' => LeadStatus::class, 'last_activity_at' => 'datetime'];
    }

    public function scopeForTeam(Builder $query, int|string $teamId): Builder
    {
        return $query->where('team_id', $teamId);
    }

    /**
     * @return BelongsTo<Model, $this>
     */
    public function assignee(): BelongsTo
    {
        return $this->belongsTo(config('auth.providers.users.model'), 'assigned_to');
    }
}
