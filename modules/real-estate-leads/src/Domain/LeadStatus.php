<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Domain;

enum LeadStatus: string
{
    case New = 'new';
    case Contacted = 'contacted';
    case Qualified = 'qualified';
    case Viewing = 'viewing';
    case Offer = 'offer';
    case Won = 'won';
    case Lost = 'lost';

    /**
     * Pipeline position, used to stop an automatic transition (from a
     * viewing being booked or an offer being made) from moving a lead
     * backwards past a stage it has already reached manually.
     */
    public function rank(): int
    {
        return match ($this) {
            self::New => 0,
            self::Contacted => 1,
            self::Qualified => 2,
            self::Viewing => 3,
            self::Offer => 4,
            self::Won, self::Lost => 5,
        };
    }
}
