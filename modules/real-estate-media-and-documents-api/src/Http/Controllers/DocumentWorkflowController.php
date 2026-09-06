<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocumentsApi\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Liberu\RealEstate\MediaAndDocuments\Application\CreateDocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Application\SignDocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentParticipant;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentTemplate;

final class DocumentWorkflowController
{
    public function store(Request $request, DocumentTemplate $documentTemplate, CreateDocumentEnvelope $create): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null, 403);
        $data = $request->validate([
            'values' => ['required', 'array'],
            'participants' => ['required', 'array', 'min:1'],
            'participants.*.party_id' => ['nullable'],
            'participants.*.user_id' => ['required'],
            'participants.*.name' => ['required', 'string', 'max:255'],
            'participants.*.email' => ['nullable', 'email', 'max:255'],
            'participants.*.role' => ['required', 'string', 'max:80'],
            'participants.*.signing_order' => ['nullable', 'integer', 'min:1'],
        ]);

        $envelope = $create->handle($user->current_team_id, $user->getAuthIdentifier(), $documentTemplate, $data['values'], $data['participants']);

        return response()->json(['data' => $envelope], 201);
    }

    public function show(Request $request, DocumentEnvelope $documentEnvelope): JsonResponse
    {
        abort_unless((string) $request->user()?->current_team_id === (string) $documentEnvelope->team_id, 404);

        return response()->json(['data' => $documentEnvelope->load(['template', 'participants', 'signatures'])]);
    }

    public function sign(Request $request, DocumentEnvelope $documentEnvelope, DocumentParticipant $documentParticipant, SignDocumentEnvelope $sign): JsonResponse
    {
        $user = $request->user();
        abort_unless($user?->current_team_id !== null, 403);
        $data = $request->validate([
            'signature' => ['required', 'string', 'max:100000'],
            'method' => ['required', Rule::in(['drawn', 'typed', 'uploaded'])],
        ]);
        $signature = $sign->handle($documentEnvelope, $documentParticipant, $user->current_team_id, $user->getAuthIdentifier(), $data['signature'], $data['method'], $request->ip(), $request->userAgent());

        return response()->json(['data' => $signature->load('participant')]);
    }
}
