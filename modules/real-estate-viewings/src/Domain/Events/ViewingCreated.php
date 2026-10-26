<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Viewings\Domain\Events;

use Liberu\RealEstate\Viewings\Models\Viewing;

final class ViewingCreated
{
    public function __construct(public readonly Viewing $viewing) {}
}
