<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagement\Domain;

enum ManagementCapability: string
{
    case RentSchedule = 'rent_schedule';
    case Statements = 'statements';
    case Inspections = 'inspections';
    case Compliance = 'compliance';
    case Maintenance = 'maintenance';
    case Contractors = 'contractors';
    case OwnerApprovals = 'owner_approvals';
}
