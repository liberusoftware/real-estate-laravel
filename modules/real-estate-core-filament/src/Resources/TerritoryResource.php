<?php

declare(strict_types=1);

namespace Liberu\RealEstate\CoreFilament\Resources;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Core\Models\Territory;
use Liberu\RealEstate\CoreFilament\Resources\TerritoryResource\Pages\CreateTerritory;
use Liberu\RealEstate\CoreFilament\Resources\TerritoryResource\Pages\EditTerritory;
use Liberu\RealEstate\CoreFilament\Resources\TerritoryResource\Pages\ListTerritories;

final class TerritoryResource extends Resource
{
    protected static ?string $model = Territory::class;

    protected static ?string $modelLabel = 'Территория';

    protected static ?string $pluralModelLabel = 'Территории';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-map';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('code')->required()->maxLength(20)->dehydrateStateUsing(fn (?string $state): ?string => $state !== null ? mb_strtoupper($state) : null),
            Textarea::make('boundary')->helperText('Optional JSON boundary metadata.')->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('code')->badge(),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListTerritories::route('/'), 'create' => CreateTerritory::route('/create'), 'edit' => EditTerritory::route('/{record}/edit')];
    }
}
