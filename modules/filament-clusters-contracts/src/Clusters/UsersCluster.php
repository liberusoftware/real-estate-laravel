<?php

namespace Liberu\Foundation\FilamentClusters\Clusters;

use Filament\Clusters\Cluster;

class UsersCluster extends Cluster
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    public static function getNavigationLabel(): string
    {
        return __('filament.resources.user.plural');
    }
}
