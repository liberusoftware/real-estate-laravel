<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Domain\Events;

use Liberu\RealEstate\Lettings\Models\Letting;

final readonly class LettingCreated
{
    public function __construct(public Letting $letting, public int|string $actorId) {}
}
