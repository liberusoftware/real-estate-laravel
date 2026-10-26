<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Properties\Domain;

enum PropertyStatus: string
{
    case Draft = 'draft';
    case Moderation = 'moderation';
    case Published = 'published';
    case Archive = 'archive';
    case Available = 'available';
    case UnderOffer = 'under_offer';
    case Sold = 'sold';
    case Let = 'let';
    case Withdrawn = 'withdrawn';
    case ForSale = 'For Sale';
    case ForRent = 'For Rent';
    case ToLet = 'to_let';
    case LetAgreed = 'let_agreed';
    case SoldStc = 'sold_stc';
    case Sstc = 'sstc';
    case Exchanged = 'exchanged';
    case Archived = 'archived';
    case ComingSoon = 'coming_soon';
    case Rented = 'Rented';

    public function isPublic(): bool
    {
        return in_array($this, [self::Published, self::Available, self::UnderOffer, self::ForSale, self::ForRent, self::ToLet, self::ComingSoon], true);
    }
}
