<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocumentsApi\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

final class DocumentEnvelopeResource extends JsonResource
{
    /** @return array<string, mixed> */
    public function toArray(Request $request): array
    {
        return $this->resource->only(['id', 'team_id', 'document_template_id', 'created_by', 'subject', 'status', 'values', 'rendered_content', 'content_hash', 'sent_at', 'completed_at', 'expires_at', 'created_at', 'updated_at']) + ['template' => $this->whenLoaded('template'), 'participants' => $this->whenLoaded('participants'), 'signatures' => DocumentEnvelopeSignatureResource::collection($this->whenLoaded('signatures'))];
    }
}
