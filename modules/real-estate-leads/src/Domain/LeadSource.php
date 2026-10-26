<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Leads\Domain;

enum LeadSource: string
{
    case ContactForm = 'contact_form';
    case Manual = 'manual';
    case PhoneCall = 'phone_call';
    case Referral = 'referral';
    case Other = 'other';
}
