<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
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

    protected static ?string $modelLabel = 'Категория объекта';

    protected static ?string $pluralModelLabel = 'Категории объектов';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-tag';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(120),
            TextInput::make('slug')->maxLength(140)->helperText('Leave blank to derive from the name.'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->modifyQueryUsing(function (Builder $query): Builder {
            $teamId = auth()->user()?->current_team_id;

            return $teamId === null ? $query->whereRaw('1 = 0') : $query->forTeam($teamId);
        })->columns([
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('slug')->searchable(),
            TextColumn::make('created_at')->dateTime()->sortable(),
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
