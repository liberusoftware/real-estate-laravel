<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MarketingFilament\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Marketing\Models\NewsArticle;

final class NewsArticleResource extends Resource
{
    protected static ?string $model = NewsArticle::class;

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('title')->required(), TextInput::make('slug')->required(), Textarea::make('content')->required(), DateTimePicker::make('published_at')]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('title')->searchable(), TextColumn::make('published_at')->dateTime(), TextColumn::make('is_featured')->boolean()]);
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->visibleToTeam($teamId)->whereNotNull('published_at');
    }
}
