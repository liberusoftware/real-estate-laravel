<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocumentsApi\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class DocumentEnvelopeSignatureResource extends JsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return $this->resource->only(['id', 'document_envelope_id', 'document_participant_id', 'team_id', 'method', 'signature_data', 'signature_hash', 'content_hash', 'consented_at', 'signed_at', 'ip_address', 'user_agent', 'metadata', 'created_at', 'updated_at']) + ['participant' => $this->whenLoaded('participant')];
    }
}
