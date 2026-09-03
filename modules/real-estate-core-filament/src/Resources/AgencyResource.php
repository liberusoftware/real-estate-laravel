<?php

declare(strict_types=1);

namespace Liberu\RealEstate\CoreFilament\Resources;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Core\Models\Agency;
use Liberu\RealEstate\CoreFilament\Resources\AgencyResource\Pages\CreateAgency;
use Liberu\RealEstate\CoreFilament\Resources\AgencyResource\Pages\EditAgency;
use Liberu\RealEstate\CoreFilament\Resources\AgencyResource\Pages\ListAgencies;

final class AgencyResource extends Resource
{
    protected static ?string $model = Agency::class;

    protected static ?string $modelLabel = 'Агентство';

    protected static ?string $pluralModelLabel = 'Агентства';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-office';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('code')->required()->maxLength(20)->dehydrateStateUsing(fn (?string $state): ?string => $state !== null ? mb_strtoupper($state) : null),
            Checkbox::make('active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->searchable(),
            TextColumn::make('code')->badge(),
            IconColumn::make('active')->boolean(),
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
        return ['index' => ListAgencies::route('/'), 'create' => CreateAgency::route('/create'), 'edit' => EditAgency::route('/{record}/edit')];
    }
}
