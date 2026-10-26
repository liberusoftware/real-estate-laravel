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
use Liberu\RealEstate\Properties\Models\District;
use Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource\Pages\CreateDistrict;
use Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource\Pages\EditDistrict;
use Liberu\RealEstate\PropertiesFilament\Resources\DistrictResource\Pages\ListDistricts;

/** Global reference data (not team-scoped) — see RegionResource. */
final class DistrictResource extends Resource
{
    protected static ?string $model = District::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.district.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.district.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-map-pin';

    public static function getNavigationGroup(): ?string
    {
        return __('filament.nav_groups.property_configuration');
    }

    public static function canViewAny(): bool
    {
        return auth()->user()?->can('ViewAny:District') ?? false;
    }

    public static function canCreate(): bool
    {
        return auth()->user()?->can('Create:District') ?? false;
    }

    public static function canEdit(Model $record): bool
    {
        return auth()->user()?->can('Update:District') ?? false;
    }

    public static function canDelete(Model $record): bool
    {
        return auth()->user()?->can('Delete:District') ?? false;
    }

    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.district.sections.details'))
                ->description(__('filament.district.sections.details_description'))
                ->columns(2)
                ->schema([
                    Select::make('city_id')
                        ->label(__('filament.district.fields.city_id'))
                        ->options(fn (): array => City::query()->orderBy('name')->pluck('name', 'id')->all())
                        ->searchable()
                        ->required(),
                    TextInput::make('name')->label(__('filament.district.fields.name'))->required()->maxLength(120),
                    TextInput::make('slug')->label(__('filament.district.fields.slug'))->maxLength(140)->helperText('Leave blank to derive from the name.'),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label(__('filament.district.fields.name'))->searchable()->sortable(),
            TextColumn::make('city.name')->label(__('filament.district.fields.city_id'))->sortable(),
            TextColumn::make('slug')->label(__('filament.district.fields.slug'))->searchable(),
            TextColumn::make('created_at')->label(__('filament.district.fields.created_at'))->dateTime()->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDistricts::route('/'),
            'create' => CreateDistrict::route('/create'),
            'edit' => EditDistrict::route('/{record}/edit'),
        ];
    }
}
