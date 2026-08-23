<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Domain;

enum LettingStatus: string
{
    case Draft = 'draft';
    case InProgress = 'in_progress';
    case Completed = 'completed';
    case Cancelled = 'cancelled';
}
