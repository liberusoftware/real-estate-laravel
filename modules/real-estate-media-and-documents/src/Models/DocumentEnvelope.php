<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Liberu\RealEstate\MediaAndDocuments\Domain\DocumentEnvelopeStatus;

final class DocumentEnvelope extends Model
{
    protected $table = 'real_estate_document_envelopes';

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'status' => DocumentEnvelopeStatus::class,
            'values' => 'array',
            'sent_at' => 'datetime',
            'completed_at' => 'datetime',
            'expires_at' => 'datetime',
        ];
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(DocumentTemplate::class, 'document_template_id');
    }

    public function participants(): HasMany
    {
        return $this->hasMany(DocumentParticipant::class)->orderBy('signing_order');
    }

    public function signatures(): HasMany
    {
        return $this->hasMany(DocumentEnvelopeSignature::class, 'document_envelope_id');
    }

    public function scopeForTeam(Builder $query, int|string $teamId): Builder
    {
        return $query->where('team_id', $teamId);
    }

    public function isComplete(): bool
    {
        return $this->participants()->where('status', '!=', 'signed')->doesntExist();
    }
}
