<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Properties\Models\PropertyCategory;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyCategoryResource\Pages\CreatePropertyCategory;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyCategoryResource\Pages\EditPropertyCategory;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyCategoryResource\Pages\ListPropertyCategories;

final class PropertyCategoryResource extends Resource
{
    protected static ?string $model = PropertyCategory::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.property_category.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.property_category.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.property_category.sections.details'))
                ->description(__('filament.property_category.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('name')->label(__('filament.property_category.fields.name'))->required()->maxLength(120),
                    TextInput::make('slug')->label(__('filament.property_category.fields.slug'))->maxLength(140)->helperText('Leave blank to derive from the name.'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->modifyQueryUsing(function (Builder $query): Builder {
            $teamId = auth()->user()?->current_team_id;

            return $teamId === null ? $query->whereRaw('1 = 0') : $query->forTeam($teamId);
        })->columns([
            TextColumn::make('name')->label(__('filament.property_category.fields.name'))->searchable()->sortable(),
            TextColumn::make('slug')->label(__('filament.property_category.fields.slug'))->searchable(),
            TextColumn::make('created_at')->label(__('filament.property_category.fields.created_at'))->dateTime()->sortable(),
        ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when(
            $teamId === null,
            fn (Builder $query): Builder => $query->whereRaw('1 = 0'),
            fn (Builder $query): Builder => $query->forTeam($teamId),
        );
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPropertyCategories::route('/'),
            'create' => CreatePropertyCategory::route('/create'),
            'edit' => EditPropertyCategory::route('/{record}/edit'),
        ];
    }
}
