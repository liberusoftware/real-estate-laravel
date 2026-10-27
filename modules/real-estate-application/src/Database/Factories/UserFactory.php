<?php

namespace Liberu\RealEstate\Application\Database\Factories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use JoelButcher\Socialstream\Providers;
use Laravel\Jetstream\Features as JetstreamFeatures;
use Liberu\Foundation\Identity\Socialstream\Models\ConnectedAccount;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\UsersRoles\Database\Factories\UserFactory as BaseUserFactory;
use LogicException;

class UserFactory extends BaseUserFactory
{
    /**
     * Indicate that the user should have a personal team.
     */
    public function withPersonalTeam(?callable $callback = null): static
    {
        if (! JetstreamFeatures::hasTeamFeatures()) {
            return $this->state([]);
        }

        return $this->has(
            Team::factory()
                ->state(function (array $attributes, ?Model $user): array {
                    if (! $user instanceof User) {
                        throw new LogicException('A personal team requires a parent user.');
                    }

                    return [
                        'name' => $user->getAttribute('name').'\'s Team',
                        'user_id' => $user->getKey(),
                        'personal_team' => true,
                    ];
                })
                ->when(is_callable($callback), $callback),
            'ownedTeams'
        );
    }

    /**
     * Indicate that the user should have a connected account for the given provider.
     */
    public function withConnectedAccount(string $provider, ?callable $callback = null): static
    {
        if (! Providers::enabled($provider)) {
            return $this->state([]);
        }

        return $this->has(
            ConnectedAccount::factory()
                ->state(function (array $attributes, ?Model $user) use ($provider): array {
                    if (! $user instanceof User) {
                        throw new LogicException('A connected account requires a parent user.');
                    }

                    return [
                        'provider' => $provider,
                        'user_id' => $user->getKey(),
                    ];
                })
                ->when(is_callable($callback), $callback),
            'ownedTeams'
        );
    }
}
