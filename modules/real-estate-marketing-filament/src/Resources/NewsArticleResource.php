<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MarketingFilament\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Marketing\Models\NewsArticle;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource\Pages\CreateNewsArticle;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource\Pages\EditNewsArticle;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource\Pages\ListNewsArticles;

final class NewsArticleResource extends Resource
{
    protected static ?string $model = NewsArticle::class;

    /**
     * NewsArticle has no team() relationship — it's scoped by a plain
     * team_id column via NewsArticle::scopeVisibleToTeam() (team_id null =
     * shared/global article), handled manually in getEloquentQuery() below.
     * Without this override, Filament's tenant global scope tries to call
     * $model->team() during every query and throws
     * "The model [...NewsArticle] does not have a relationship named
     * [team]" the instant the resource is opened (see CLAUDE.md's
     * "Tenancy rules that bite").
     */
    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function getModelLabel(): string
    {
        return __('filament.resources.news_article.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.news_article.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-newspaper';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.news_article.sections.details'))
                ->description(__('filament.news_article.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('title')
                        ->label(__('filament.news_article.fields.title'))
                        ->required()
                        ->maxLength(255)
                        ->columnSpanFull(),
                    TextInput::make('slug')
                        ->label(__('filament.news_article.fields.slug'))
                        ->maxLength(255)
                        ->helperText('Leave blank to derive from the title.'),
                    Toggle::make('is_featured')
                        ->label(__('filament.news_article.fields.is_featured')),
                    Textarea::make('excerpt')
                        ->label(__('filament.news_article.fields.excerpt'))
                        ->maxLength(500)
                        ->columnSpanFull(),
                    Textarea::make('content')
                        ->label(__('filament.news_article.fields.content'))
                        ->required()
                        ->columnSpanFull(),
                    FileUpload::make('featured_image')
                        ->label(__('filament.news_article.fields.featured_image'))
                        ->image()
                        ->imageEditor()
                        ->disk('public')
                        ->directory('news-articles')
                        ->visibility('public')
                        ->columnSpanFull(),
                    DateTimePicker::make('published_at')
                        ->label(__('filament.news_article.fields.published_at')),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('title')
                ->label(__('filament.news_article.fields.title'))
                ->searchable()
                ->sortable(),
            IconColumn::make('is_featured')
                ->label(__('filament.news_article.fields.is_featured'))
                ->boolean(),
            TextColumn::make('published_at')
                ->label(__('filament.news_article.fields.published_at'))
                ->dateTime()
                ->sortable()
                ->placeholder('Draft'),
            TextColumn::make('created_at')
                ->label(__('filament.news_article.fields.created_at'))
                ->dateTime()
                ->sortable()
                ->toggleable(isToggledHiddenByDefault: true),
        ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        // Admin needs to see and edit drafts too, so the public
        // `published_at` gate that scopePublished()/the old query used here
        // is deliberately NOT applied — that's for the public site, not this
        // panel. visibleToTeam() still keeps a team from touching another
        // team's articles (team_id null = shared/global article).
        return parent::getEloquentQuery()->visibleToTeam($teamId);
    }

    /**
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
        return [
            'index' => ListNewsArticles::route('/'),
            'create' => CreateNewsArticle::route('/create'),
            'edit' => EditNewsArticle::route('/{record}/edit'),
        ];
    }
}
