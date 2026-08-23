<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Domain;

enum LettingCapability: string
{
    case Applications = 'applications';
    case Referencing = 'referencing';
    case Deposits = 'deposits';
    case Agreements = 'agreements';
    case MoveInOut = 'move_in_out';
    case Renewals = 'renewals';
    case RentChanges = 'rent_changes';
    case Notices = 'notices';
}
