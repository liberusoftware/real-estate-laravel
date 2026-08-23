<?php

declare(strict_types=1);

namespace Liberu\RealEstate\Lettings\Policies;

use Liberu\RealEstate\Lettings\Models\Letting;

final class LettingPolicy
{
    public function view($user, Letting $letting): bool
    {
        return (string) $user?->current_team_id === (string) $letting->team_id;
    }

    public function update($user, Letting $letting): bool
    {
        return $this->view($user, $letting);
    }

    public function delete($user, Letting $letting): bool
    {
        return $this->view($user, $letting);
    }
}
