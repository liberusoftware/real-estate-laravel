<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments\Domain;

enum DocumentTemplateStatus: string
{
    case Draft = 'draft';
    case Published = 'published';
    case Archived = 'archived';
}
