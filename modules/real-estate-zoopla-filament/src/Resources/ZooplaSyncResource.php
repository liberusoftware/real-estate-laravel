<?php

declare(strict_types=1);

namespace Liberu\RealEstate\ZooplaFilament\Resources;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Zoopla\Application\DeleteZooplaSync;
use Liberu\RealEstate\Zoopla\Models\ZooplaSync;
use Liberu\RealEstate\ZooplaFilament\Resources\ZooplaSyncResource\Pages\CreateZooplaSync;
use Liberu\RealEstate\ZooplaFilament\Resources\ZooplaSyncResource\Pages\EditZooplaSync;
use Liberu\RealEstate\ZooplaFilament\Resources\ZooplaSyncResource\Pages\ListZooplaSyncs;

final class ZooplaSyncResource extends Resource
{
    protected static ?string $model = ZooplaSync::class;

    protected static ?string $modelLabel = 'Синхронизация Zoopla';

    protected static ?string $pluralModelLabel = 'Синхронизации Zoopla';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('listing_id')->required()->numeric(), TextInput::make('property_id')->numeric(), TextInput::make('external_id'), TextInput::make('status')->required()]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('listing_id')->searchable(), TextColumn::make('external_id')->searchable(), TextColumn::make('status')->badge(), TextColumn::make('last_synced_at')->dateTime()])->recordActions([
            EditAction::make(),
            DeleteAction::make()->action(function (Model $record): void {
                $teamId = auth()->user()?->current_team_id;
                abort_unless($teamId !== null, 403);
                app(DeleteZooplaSync::class)->handle($record, $teamId);
            }),
        ]);
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListZooplaSyncs::route('/'), 'create' => CreateZooplaSync::route('/create'), 'edit' => EditZooplaSync::route('/{record}/edit')];
    }
}
