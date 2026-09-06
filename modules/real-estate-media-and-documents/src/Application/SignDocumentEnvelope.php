<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\MediaAndDocuments\Domain\DocumentEnvelopeStatus;
use Liberu\RealEstate\MediaAndDocuments\Domain\DocumentParticipantStatus;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentEnvelopeSignature;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentParticipant;

final class SignDocumentEnvelope
{
    public function handle(DocumentEnvelope $envelope, DocumentParticipant $participant, int|string $teamId, int|string $actorId, string $signatureData, string $method = 'drawn', ?string $ip = null, ?string $userAgent = null): DocumentEnvelopeSignature
    {
        if ((string) $envelope->team_id !== (string) $teamId || $participant->document_envelope_id !== $envelope->getKey()) {
            throw ValidationException::withMessages(['document' => 'Document access was denied.']);
        }
        if ($participant->user_id === null || (string) $participant->user_id !== (string) $actorId) {
            throw ValidationException::withMessages(['participant' => 'Only the assigned participant can sign this document.']);
        }
        if ($envelope->status === DocumentEnvelopeStatus::Voided || $envelope->status === DocumentEnvelopeStatus::Completed) {
            throw ValidationException::withMessages(['document' => 'This document is no longer available for signing.']);
        }
        if ($participant->status === DocumentParticipantStatus::Signed) {
            throw ValidationException::withMessages(['participant' => 'This participant has already signed.']);
        }
        if ($envelope->participants()->where('signing_order', '<', $participant->signing_order)->where('status', '!=', DocumentParticipantStatus::Signed)->exists()) {
            throw ValidationException::withMessages(['participant' => 'The previous signer must sign first.']);
        }
        if (trim($signatureData) === '' || ! in_array($method, ['drawn', 'typed', 'uploaded'], true)) {
            throw ValidationException::withMessages(['signature' => 'A valid signature and signing method are required.']);
        }

        return DB::transaction(function () use ($envelope, $participant, $teamId, $signatureData, $method, $ip, $userAgent): DocumentEnvelopeSignature {
            $now = now();
            $signature = DocumentEnvelopeSignature::query()->create([
                'document_envelope_id' => $envelope->getKey(),
                'document_participant_id' => $participant->getKey(),
                'team_id' => $teamId,
                'method' => $method,
                'signature_data' => $signatureData,
                'signature_hash' => hash('sha256', $signatureData),
                'content_hash' => $envelope->content_hash,
                'consented_at' => $now,
                'signed_at' => $now,
                'ip_address' => $ip,
                'user_agent' => $userAgent,
            ]);
            $participant->forceFill(['status' => DocumentParticipantStatus::Signed, 'signed_at' => $now])->save();
            $complete = $envelope->participants()->where('status', '!=', DocumentParticipantStatus::Signed)->doesntExist();
            $envelope->forceFill(['status' => $complete ? DocumentEnvelopeStatus::Completed : DocumentEnvelopeStatus::PartiallySigned, 'completed_at' => $complete ? $now : null])->save();

            return $signature;
        });
    }
}
