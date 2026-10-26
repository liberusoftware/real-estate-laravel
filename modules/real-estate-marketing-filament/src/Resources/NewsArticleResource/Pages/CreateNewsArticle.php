<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Marketing\Models\NewsArticle;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource;

final class CreateNewsArticle extends CreateRecord
{
    protected static string $resource = NewsArticleResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $teamId = auth()->user()?->current_team_id;
        abort_unless($teamId !== null, 403);

        return NewsArticle::query()->create([
            'team_id' => $teamId,
            'title' => $data['title'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['title'])->slug()->toString(),
            'excerpt' => $data['excerpt'] ?? null,
            'content' => $data['content'],
            'featured_image' => $data['featured_image'] ?? null,
            'is_featured' => $data['is_featured'] ?? false,
            'published_at' => $data['published_at'] ?? null,
        ]);
    }
}
