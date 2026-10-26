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

    public static function getModelLabel(): string
    {
        return __('filament.resources.onthemarket_sync.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.onthemarket_sync.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('listing_id')->label(__('filament.onthemarket_sync.fields.listing_id'))->required()->numeric(),
            TextInput::make('property_id')->label(__('filament.onthemarket_sync.fields.property_id'))->numeric(),
            TextInput::make('external_id')->label(__('filament.onthemarket_sync.fields.external_id')),
            TextInput::make('status')->label(__('filament.onthemarket_sync.fields.status'))->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('listing_id')->label(__('filament.onthemarket_sync.fields.listing_id'))->searchable(), TextColumn::make('external_id')->label(__('filament.onthemarket_sync.fields.external_id'))->searchable(), TextColumn::make('status')->label(__('filament.onthemarket_sync.fields.status'))->badge(), TextColumn::make('last_synced_at')->label(__('filament.onthemarket_sync.fields.last_synced_at'))->dateTime()])->recordActions([
            EditAction::make(),
            DeleteAction::make()->action(function (Model $record): void {
                $teamId = auth()->user()?->current_team_id;
                abort_unless($teamId !== null, 403);
                app(DeleteOnTheMarketSync::class)->handle($record, $teamId);
            }),
        ]);
    }

    /**
     * OnTheMarketSync has no team() relationship — it's scoped by a plain
     * team_id column via scopeForTeam(), handled manually in
     * getEloquentQuery() below (see CLAUDE.md's "Tenancy rules that bite").
     */
    public static function isScopedToTenant(): bool
    {
        return false;
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
