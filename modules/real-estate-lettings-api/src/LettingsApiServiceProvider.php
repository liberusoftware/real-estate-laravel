<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsApi;

use Illuminate\Support\ServiceProvider;

final class LettingsApiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
    }
}
