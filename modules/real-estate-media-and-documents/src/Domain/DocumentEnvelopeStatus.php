<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Domain;

enum DocumentEnvelopeStatus: string
{
    case Draft = 'draft';
    case Sent = 'sent';
    case PartiallySigned = 'partially_signed';
    case Completed = 'completed';
    case Voided = 'voided';
    case Expired = 'expired';
}
