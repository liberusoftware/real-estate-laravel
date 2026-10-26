<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource\Pages;

use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource;

final class EditNewsArticle extends EditRecord
{
    protected static string $resource = NewsArticleResource::class;

    protected function getHeaderActions(): array
    {
        return [DeleteAction::make()];
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $teamId = auth()->user()?->current_team_id;
        // team_id === null means a shared/global article (see
        // NewsArticle::scopeVisibleToTeam()) — any team that can see it via
        // that scope may also edit it; a team-owned article still requires
        // ownership.
        abort_unless(
            $teamId !== null && ($record->team_id === null || (string) $teamId === (string) $record->team_id),
            403,
        );

        $record->update([
            'title' => $data['title'],
            'slug' => filled($data['slug'] ?? null) ? $data['slug'] : str($data['title'])->slug()->toString(),
            'excerpt' => $data['excerpt'] ?? null,
            'content' => $data['content'],
            'featured_image' => $data['featured_image'] ?? null,
            'is_featured' => $data['is_featured'] ?? false,
            'published_at' => $data['published_at'] ?? null,
        ]);

        return $record;
    }
}
