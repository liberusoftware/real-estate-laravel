<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Application;

use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\RealEstate\MediaAndDocuments\Domain\DocumentEnvelopeStatus;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentEnvelope;
use Liberu\RealEstate\MediaAndDocuments\Models\DocumentTemplate;

final class CreateDocumentEnvelope
{
    /** @param array<string, mixed> $values */
    public function handle(int|string $teamId, int|string $actorId, DocumentTemplate $template, array $values, array $participants = []): DocumentEnvelope
    {
        if ($participants === []) {
            throw ValidationException::withMessages(['participants' => 'At least one signing participant is required.']);
        }
        if ((string) $template->team_id !== (string) $teamId || $template->status->value !== 'published') {
            throw ValidationException::withMessages(['template' => 'Only a published template from the current team can be used.']);
        }

        $template->validateValues($values);
        $content = $template->generateDocument($values);

        return DB::transaction(function () use ($teamId, $actorId, $template, $values, $content, $participants): DocumentEnvelope {
            $envelope = DocumentEnvelope::query()->create([
                'team_id' => $teamId,
                'document_template_id' => $template->getKey(),
                'property_id' => $values['property_id'] ?? null,
                'transaction_type' => $template->document_type,
                'status' => DocumentEnvelopeStatus::Draft,
                'values' => $values,
                'rendered_content' => $content,
                'content_hash' => hash('sha256', $content),
                'created_by' => $actorId,
            ]);

            foreach ($participants as $index => $participant) {
                $envelope->participants()->create([
                    'team_id' => $teamId,
                    'party_id' => $participant['party_id'] ?? null,
                    'user_id' => $participant['user_id'] ?? null,
                    'name' => $participant['name'],
                    'email' => $participant['email'] ?? null,
                    'role' => $participant['role'],
                    'signing_order' => $participant['signing_order'] ?? $index + 1,
                ]);
            }

            return $envelope->load('participants');
        });
    }
}
