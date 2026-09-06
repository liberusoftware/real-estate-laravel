<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Domain;

enum DealType: string
{
    case Sale = 'sale';
    case Rent = 'rent';
}
