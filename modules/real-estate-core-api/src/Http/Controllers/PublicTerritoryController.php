<?php

declare(strict_types=1);

namespace Liberu\RealEstate\CoreApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Core\Models\Territory;
use Liberu\RealEstate\CoreApi\Http\Resources\TerritoryResource;

/**
 * Anonymous, read-only territory listing for the public storefront
 * (ihona-frontend). TerritoryController's index() is deliberately
 * team-scoped to $request->user()->current_team_id, which an anonymous
 * visitor doesn't have — this resolves the storefront's public team the
 * same way the rest of the composition is effectively single-tenant today
 * (the earliest-created team), rather than exposing every tenant's data.
 */
final class PublicTerritoryController
{
    public function index(): JsonResponse
    {
        $team = Team::query()->oldest()->first();

        if (! $team) {
            return TerritoryResource::collection(collect())->response();
        }

        return TerritoryResource::collection(
            Territory::query()->forTeam($team->id)->orderBy('name')->get(),
        )->response();
    }
}
