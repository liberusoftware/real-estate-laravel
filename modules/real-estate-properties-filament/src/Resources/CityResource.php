<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Properties\Models\City;
use Liberu\RealEstate\Properties\Models\Region;
use Liberu\RealEstate\PropertiesFilament\Resources\CityResource\Pages\CreateCity;
use Liberu\RealEstate\PropertiesFilament\Resources\CityResource\Pages\EditCity;
use Liberu\RealEstate\PropertiesFilament\Resources\CityResource\Pages\ListCities;

/** Global reference data (not team-scoped) — see RegionResource. */
final class CityResource extends Resource
{
    protected static ?string $model = City::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.city.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.city.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-office-2';

    public static function getNavigationGroup(): ?string
    {
        return __('filament.nav_groups.property_configuration');
    }

    public static function canViewAny(): bool
    {
        return auth()->user()?->can('ViewAny:City') ?? false;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('Create:City') ?? false;
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()?->can('Update:City') ?? false;
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()?->can('Delete:City') ?? false;
    }

    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.city.sections.details'))
                ->description(__('filament.city.sections.details_description'))
                ->columns(2)
                ->schema([
                    Select::make('region_id')
                        ->label(__('filament.city.fields.region_id'))
                        ->options(fn (): array => Region::query()->orderBy('name')->pluck('name', 'id')->all())
                        ->searchable()
                        ->required(),
                    TextInput::make('name')->label(__('filament.city.fields.name'))->required()->maxLength(120),
                    TextInput::make('slug')->label(__('filament.city.fields.slug'))->maxLength(140)->helperText('Leave blank to derive from the name.'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label(__('filament.city.fields.name'))->searchable()->sortable(),
            TextColumn::make('region.name')->label(__('filament.city.fields.region_id'))->sortable(),
            TextColumn::make('slug')->label(__('filament.city.fields.slug'))->searchable(),
            TextColumn::make('districts_count')->label(__('filament.resources.district.plural'))->counts('districts'),
            TextColumn::make('created_at')->label(__('filament.city.fields.created_at'))->dateTime()->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListCities::route('/'),
            'create' => CreateCity::route('/create'),
            'edit' => EditCity::route('/{record}/edit'),
        ];
    }
}
