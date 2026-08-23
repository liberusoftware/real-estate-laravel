<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Liberu\RealEstate\Lettings\Application\CreateLetting;
use Liberu\RealEstate\Lettings\Application\RecordLettingFailure;
use Liberu\RealEstate\Lettings\Application\TransitionLetting;
use Liberu\RealEstate\Lettings\Application\UpdateLettingDetails;
use Liberu\RealEstate\Lettings\Domain\LettingStatus;
use Liberu\RealEstate\Lettings\Models\Letting;

final class LettingController
{
    public function index(Request $request): JsonResponse
    {
        $team = $request->user()?->current_team_id;
        abort_unless($team !== null, 403);

        return response()->json(['data' => Letting::query()->forTeam($team)->latest()->paginate(min(100, max(1, $request->integer('page_size', 25))))]);
    }

    public function store(Request $request, CreateLetting $create): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null, 403);
        $data = $request->validate(['subject' => 'required|string|max:255', 'capability' => 'required|string', 'property_id' => 'nullable|integer', 'party_id' => 'nullable|integer', 'details' => 'sometimes|array']);

        return response()->json(['data' => $create->handle($user->current_team_id, $user->getAuthIdentifier(), $data)], 201);
    }

    public function show(Request $request, Letting $letting): JsonResponse
    {
        abort_unless((string) $request->user()?->current_team_id === (string) $letting->team_id, 404);

        return response()->json(['data' => $letting]);
    }

    public function update(Request $request, Letting $letting, TransitionLetting $transition): JsonResponse
    {
        $user = $request->user();
        abort_unless((string) $user?->current_team_id === (string) $letting->team_id, 404);
        $data = $request->validate(['status' => 'required|string|in:draft,in_progress,completed,cancelled']);

        return response()->json(['data' => $transition->handle($letting, $user->current_team_id, $user->getAuthIdentifier(), LettingStatus::from($data['status']))]);
    }

    public function updateDetails(Request $request, Letting $letting, UpdateLettingDetails $update): JsonResponse
    {
        $user = $request->user();
        abort_unless((string) $user?->current_team_id === (string) $letting->team_id, 404);
        $data = $request->validate(['details' => 'required|array']);

        return response()->json(['data' => $update->handle($letting, $user->current_team_id, $user->getAuthIdentifier(), $data['details'])]);
    }

    public function recordFailure(Request $request, Letting $letting, RecordLettingFailure $failure): JsonResponse
    {
        $user = $request->user();
        abort_unless((string) $user?->current_team_id === (string) $letting->team_id, 404);
        $data = $request->validate(['reason' => 'required|string|max:2000']);

        return response()->json(['data' => $failure->handle($letting, $user->current_team_id, $user->getAuthIdentifier(), $data['reason'])]);
    }
}
