<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Domain\Events;

use Liberu\RealEstate\Lettings\Domain\LettingStatus;
use Liberu\RealEstate\Lettings\Models\Letting;

final readonly class LettingStatusChanged
{
    public function __construct(public Letting $letting, public LettingStatus $from, public LettingStatus $to, public int|string $actorId) {}
}
