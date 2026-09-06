<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\RealEstate\MediaAndDocuments\Domain\DocumentParticipantStatus;

final class DocumentParticipant extends Model
{
    protected $table = 'real_estate_document_participants';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'status' => DocumentParticipantStatus::class,
            'invited_at' => 'datetime',
            'viewed_at' => 'datetime',
            'signed_at' => 'datetime',
        ];
    }

    public function envelope(): BelongsTo
    {
        return $this->belongsTo(DocumentEnvelope::class, 'document_envelope_id');
    }
}
