<?php

declare(strict_types=1);

namespace Liberu\RealEstate\ViewingsApi\Http\Controllers;

use Carbon\CarbonImmutable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Viewings\Application\CancelViewing;
use Liberu\RealEstate\Viewings\Application\CompleteViewing;
use Liberu\RealEstate\Viewings\Application\ConfirmViewing;
use Liberu\RealEstate\Viewings\Application\CreateViewing;
use Liberu\RealEstate\Viewings\Application\DeleteViewing;
use Liberu\RealEstate\Viewings\Application\MarkViewingNoShow;
use Liberu\RealEstate\Viewings\Application\UpdateViewing;
use Liberu\RealEstate\Viewings\Models\Viewing;
use Liberu\RealEstate\Viewings\Queries\AvailableViewingSlots;
use Liberu\RealEstate\ViewingsApi\Http\Resources\ViewingResource;

final class ViewingController
{
    public function index(Request $request): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless($teamId !== null, 403);
        $size = max(1, min($request->integer('page_size', 25), 100));

        return ViewingResource::collection(Viewing::query()->forTeam($teamId)->latest('starts_at')->paginate($size))->response();
    }

    public function availability(Request $request, AvailableViewingSlots $slots): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless($teamId !== null, 403);
        $data = $request->validate([
            'property_id' => ['nullable', 'integer'],
            'date' => ['required', 'date', 'after_or_equal:today'],
            'duration_minutes' => ['sometimes', 'integer', 'between:15,240'],
        ]);

        return response()->json([
            'data' => $slots->handle(
                $teamId,
                $data['property_id'] ?? null,
                CarbonImmutable::parse($data['date']),
                $data['duration_minutes'] ?? 60,
            ),
        ]);
    }

    public function store(Request $request, CreateViewing $create): JsonResponse
    {
        $user = $request->user();
        abort_unless($user !== null, 403);
        $data = $request->validate([
            'subject' => ['required', 'string', 'max:255'],
            'property_id' => ['nullable', 'integer'],
            'party_id' => ['nullable', 'integer'],
            'starts_at' => ['required', 'date'],
            'ends_at' => ['nullable', 'date', 'after:starts_at'],
            'guests_count' => ['sometimes', 'nullable', 'integer', 'min:1', 'max:100'],
            'access' => ['sometimes', 'array'],
            'accompaniment' => ['sometimes', 'array'],
            'reminders' => ['sometimes', 'array'],
        ]);

        // A request must land where the *property's* team can see and
        // confirm it, not the requesting visitor's own personal team —
        // Jetstream gives every registered user their own 1-person team,
        // so using $user->current_team_id here (the previous behaviour)
        // silently filed every customer request into a team only that
        // customer could ever see, and made the overlap check below
        // compare a property's bookings only within one requester's team,
        // so two different guests could double-book the same dates without
        // either request ever seeing the other.
        $propertyId = $data['property_id'] ?? null;
        $teamId = $propertyId !== null
            ? Property::query()->whereKey($propertyId)->value('team_id')
            : $user->current_team_id;
        abort_unless($teamId !== null, 422);

        return (new ViewingResource($create->handle($teamId, $user->getAuthIdentifier(), $data)))->response()->setStatusCode(201);
    }

    public function show(Request $request, Viewing $viewing): JsonResponse
    {
        abort_unless($this->canAccessViewing($request->user(), $viewing), 404);

        return (new ViewingResource($viewing))->response();
    }

    public function update(Request $request, Viewing $viewing, UpdateViewing $update): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless((string) $teamId === (string) $viewing->team_id, 404);
        $data = $request->validate(['subject' => ['sometimes', 'string', 'max:255'], 'starts_at' => ['sometimes', 'date'], 'ends_at' => ['nullable', 'date'], 'access' => ['sometimes', 'array'], 'accompaniment' => ['sometimes', 'array'], 'reminders' => ['sometimes', 'array'], 'feedback' => ['sometimes', 'array'], 'no_show' => ['sometimes', 'boolean']]);

        return (new ViewingResource($update->handle($viewing, $teamId, $data)))->response();
    }

    public function destroy(Request $request, Viewing $viewing, DeleteViewing $delete): Response
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless((string) $teamId === (string) $viewing->team_id, 404);
        $delete->handle($viewing, $teamId);

        return response()->noContent();
    }

    public function confirm(Request $request, Viewing $viewing, ConfirmViewing $confirm): JsonResponse
    {
        // Host-only: the guest who requested it must not be able to
        // self-confirm.
        $teamId = $request->user()?->current_team_id;
        abort_unless((string) $teamId === (string) $viewing->team_id, 404);

        return (new ViewingResource($confirm->handle($viewing, $teamId)))->response();
    }

    public function complete(Request $request, Viewing $viewing, CompleteViewing $complete): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless((string) $teamId === (string) $viewing->team_id, 404);

        return (new ViewingResource($complete->handle($viewing, $teamId, $request->validate(['feedback' => ['sometimes', 'array']])['feedback'] ?? [])))->response();
    }

    public function cancel(Request $request, Viewing $viewing, CancelViewing $cancel): JsonResponse
    {
        // Either party may cancel: the host, or the guest who requested it.
        $user = $request->user();
        abort_unless($this->canAccessViewing($user, $viewing), 404);
        $reason = $request->validate(['reason' => ['nullable', 'string', 'max:1000']])['reason'] ?? null;

        // CancelViewing::handle() re-checks team_id itself — pass the
        // viewing's own team_id rather than the caller's, since access was
        // already established above (possibly via created_by, not team).
        return (new ViewingResource($cancel->handle($viewing, $viewing->team_id, $reason)))->response();
    }

    public function noShow(Request $request, Viewing $viewing, MarkViewingNoShow $noShow): JsonResponse
    {
        $teamId = $request->user()?->current_team_id;
        abort_unless((string) $teamId === (string) $viewing->team_id, 404);

        return (new ViewingResource($noShow->handle($viewing, $teamId, $request->validate(['note' => ['nullable', 'string', 'max:1000']])['note'] ?? null)))->response();
    }

    private function canAccessViewing(?object $user, Viewing $viewing): bool
    {
        if ($user === null) {
            return false;
        }

        return (string) $user->current_team_id === (string) $viewing->team_id
            || (string) $user->getAuthIdentifier() === (string) $viewing->created_by;
    }
}
