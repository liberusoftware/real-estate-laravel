<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Domain;

enum DocumentParticipantStatus: string
{
    case Pending = 'pending';
    case Viewed = 'viewed';
    case Signed = 'signed';
    case Declined = 'declined';
    case Expired = 'expired';
}
