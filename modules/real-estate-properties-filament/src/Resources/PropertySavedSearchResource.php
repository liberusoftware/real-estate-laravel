<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertySavedSearchResource\Pages\CreatePropertySavedSearch;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertySavedSearchResource\Pages\EditPropertySavedSearch;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertySavedSearchResource\Pages\ListPropertySavedSearches;

final class PropertySavedSearchResource extends Resource
{
    protected static ?string $model = PropertySavedSearch::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.property_saved_search.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.property_saved_search.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-bookmark';

    protected static string|\UnitEnum|null $navigationGroup = 'Real Estate';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.property_saved_search.sections.details'))
                ->description(__('filament.property_saved_search.sections.details_description'))
                ->schema([
                    TextInput::make('name')->label(__('filament.property_saved_search.fields.name'))->required()->maxLength(120),
                    Textarea::make('criteria')->label(__('filament.property_saved_search.fields.criteria'))->required()->helperText('JSON representation of the property filters.')->formatStateUsing(fn (mixed $state): string => is_array($state) ? (json_encode($state, JSON_PRETTY_PRINT) ?: '{}') : (string) $state)->dehydrateStateUsing(fn (mixed $state): array => is_array($state) ? $state : (json_decode((string) $state, true) ?: []))->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label(__('filament.property_saved_search.fields.name'))->searchable()->sortable(),
            TextColumn::make('user_id')->label(__('filament.property_saved_search.fields.user_id')),
            TextColumn::make('created_at')->label(__('filament.property_saved_search.fields.created_at'))->dateTime()->sortable(),
        ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        return parent::getEloquentQuery()->when($user?->current_team_id === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forUser($user->current_team_id, $user->getAuthIdentifier()));
    }

    public static function getPages(): array
    {
        return ['index' => ListPropertySavedSearches::route('/'), 'create' => CreatePropertySavedSearch::route('/create'), 'edit' => EditPropertySavedSearch::route('/{record}/edit')];
    }
}
