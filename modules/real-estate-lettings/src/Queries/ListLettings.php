<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Queries;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Liberu\RealEstate\Lettings\Models\Letting;

final class ListLettings
{
    public function handle(int|string $teamId, ?string $capability = null, int $perPage = 25): LengthAwarePaginator
    {
        return Letting::query()->forTeam($teamId)->when($capability !== null, fn ($query) => $query->where('capability', $capability))->latest()->paginate(max(1, min($perPage, 100)));
    }
}
