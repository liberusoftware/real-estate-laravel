<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

final class DocumentEnvelopeSignature extends Model
{
    protected $table = 'real_estate_document_envelope_signatures';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return ['consented_at' => 'datetime', 'signed_at' => 'datetime', 'metadata' => 'array'];
    }

    public function envelope(): BelongsTo
    {
        return $this->belongsTo(DocumentEnvelope::class, 'document_envelope_id');
    }

    public function participant(): BelongsTo
    {
        return $this->belongsTo(DocumentParticipant::class, 'document_participant_id');
    }

    public function isValid(): bool
    {
        return hash_equals((string) $this->signature_hash, hash('sha256', (string) $this->signature_data));
    }
}
