<?php

namespace Liberu\Foundation\IdentityFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\Foundation\FilamentClusters\Clusters\UsersCluster;
use Liberu\Foundation\IdentityFilament\Resources\UserResource;

final class IdentityFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'liberu-identity';
    }

    public function register(Panel $panel): void
    {
        $panel->discoverClusters(in: dirname((new \ReflectionClass(UsersCluster::class))->getFileName()), for: 'Liberu\\Foundation\\FilamentClusters\\Clusters');
        $panel->resources([UserResource::class]);
    }

    public function boot(Panel $panel): void {}
}
