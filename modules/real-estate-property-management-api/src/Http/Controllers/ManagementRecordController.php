<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Liberu\RealEstate\PropertyManagement\Application\CreateManagementRecord;
use Liberu\RealEstate\PropertyManagement\Application\TransitionManagementRecord;
use Liberu\RealEstate\PropertyManagement\Domain\ManagementStatus;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;

final class ManagementRecordController
{
    public function index(Request $request): JsonResponse
    {
        $team = $request->user()?->current_team_id;
        abort_unless($team !== null, 403);

        return response()->json(['data' => ManagementRecord::query()->forTeam($team)->latest()->paginate(min(100, max(1, $request->integer('page_size', 25))))]);
    }

    public function store(Request $request, CreateManagementRecord $create): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null, 403);
        $data = $request->validate(['subject' => 'required|string|max:255', 'capability' => 'required|string', 'property_id' => 'nullable|integer', 'party_id' => 'nullable|integer', 'details' => 'sometimes|array']);

        return response()->json(['data' => $create->handle($user->current_team_id, $user->getAuthIdentifier(), $data)], 201);
    }

    public function show(Request $request, ManagementRecord $record): JsonResponse
    {
        abort_unless((string) $request->user()?->current_team_id === (string) $record->team_id, 404);

        return response()->json(['data' => $record]);
    }

    public function update(Request $request, ManagementRecord $record, TransitionManagementRecord $transition): JsonResponse
    {
        $user = $request->user();
        abort_unless((string) $user?->current_team_id === (string) $record->team_id, 404);
        $data = $request->validate(['status' => 'required|string|in:draft,in_progress,completed,cancelled']);

        return response()->json(['data' => $transition->handle($record, $user->current_team_id, $user->getAuthIdentifier(), ManagementStatus::from($data['status']))]);
    }
}
