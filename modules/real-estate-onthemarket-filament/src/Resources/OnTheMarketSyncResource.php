<?php

declare(strict_types=1);

namespace Liberu\RealEstate\OnTheMarketFilament\Resources;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\OnTheMarket\Application\DeleteOnTheMarketSync;
use Liberu\RealEstate\OnTheMarket\Models\OnTheMarketSync;
use Liberu\RealEstate\OnTheMarketFilament\Resources\OnTheMarketSyncResource\Pages\CreateOnTheMarketSync;
use Liberu\RealEstate\OnTheMarketFilament\Resources\OnTheMarketSyncResource\Pages\EditOnTheMarketSync;
use Liberu\RealEstate\OnTheMarketFilament\Resources\OnTheMarketSyncResource\Pages\ListOnTheMarketSyncs;

final class OnTheMarketSyncResource extends Resource
{
    protected static ?string $model = OnTheMarketSync::class;

    protected static ?string $modelLabel = 'Синхронизация OnTheMarket';

    protected static ?string $pluralModelLabel = 'Синхронизации OnTheMarket';

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
                app(DeleteOnTheMarketSync::class)->handle($record, $teamId);
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
        return ['index' => ListOnTheMarketSyncs::route('/'), 'create' => CreateOnTheMarketSync::route('/create'), 'edit' => EditOnTheMarketSync::route('/{record}/edit')];
    }
}
