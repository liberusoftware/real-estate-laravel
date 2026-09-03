<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Parties\Domain;

enum PartyType: string
{
    case Applicant = 'applicant';
    case Buyer = 'buyer';
    case Vendor = 'vendor';
    case Landlord = 'landlord';
    case Tenant = 'tenant';
    case Solicitor = 'solicitor';
    case Contractor = 'contractor';
    case Tourist = 'tourist';
    case Guide = 'guide';
}
