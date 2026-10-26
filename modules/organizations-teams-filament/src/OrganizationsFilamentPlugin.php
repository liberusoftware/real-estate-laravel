<?php

namespace Liberu\Foundation\OrganizationsFilament;

use Filament\Contracts\Plugin;
use Filament\Panel;
use Liberu\Foundation\FilamentClusters\Clusters\UsersCluster;
use Liberu\Foundation\OrganizationsFilament\Resources\TeamResource;

final class OrganizationsFilamentPlugin implements Plugin
{
    public static function make(): self
    {
        return new self();
    }

    public function getId(): string
    {
        return 'liberu-organizations';
    }

    public function register(Panel $panel): void
    {
        $panel->discoverClusters(in: dirname((new \ReflectionClass(UsersCluster::class))->getFileName()), for: 'Liberu\\Foundation\\FilamentClusters\\Clusters');
        $panel->resources([TeamResource::class]);
    }

    public function boot(Panel $panel): void {}
}
