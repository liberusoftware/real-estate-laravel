<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Queries;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class ListManagementRecords
{
    public function handle(int|string $teamId, ?string $capability = null, int $perPage = 25): LengthAwarePaginator
    {
        return ManagementRecord::query()->forTeam($teamId)->when($capability !== null, fn ($query) => $query->where('capability', $capability))->latest()->paginate(max(1, min($perPage, 100)));
    }
}
