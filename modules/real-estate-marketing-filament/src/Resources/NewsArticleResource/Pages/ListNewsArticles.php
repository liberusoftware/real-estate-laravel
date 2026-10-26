<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource;

final class ListNewsArticles extends ListRecords
{
    protected static string $resource = NewsArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [CreateAction::make()];
    }
}
