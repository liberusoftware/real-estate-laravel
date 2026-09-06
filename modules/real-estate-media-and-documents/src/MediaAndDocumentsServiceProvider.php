<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MediaAndDocuments;

use Illuminate\Support\ServiceProvider;

final class MediaAndDocumentsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/document-templates.php', 'document-templates');

        $this->app->singleton(Application\DocumentTemplateCatalogue::class);
        $this->app->singleton(Application\GeneratePropertyBrochure::class);
        $this->app->singleton(Application\CreateHomeReport::class);
        $this->app->singleton(Application\UpdateHomeReportConditions::class);
        $this->app->singleton(Application\UploadHomeReportFile::class);
    }

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }
}
