<?php

declare(strict_types=1);

namespace Liberu\RealEstate\OffersFilament\Resources;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Offers\Models\Offer;
use Liberu\RealEstate\OffersFilament\Resources\OfferResource\Pages\CreateOffer;
use Liberu\RealEstate\OffersFilament\Resources\OfferResource\Pages\EditOffer;
use Liberu\RealEstate\OffersFilament\Resources\OfferResource\Pages\ListOffers;

final class OfferResource extends Resource
{
    protected static ?string $model = Offer::class;

    protected static ?string $modelLabel = 'Предложение';

    protected static ?string $pluralModelLabel = 'Предложения';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-banknotes';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('subject')->required()->maxLength(255), TextInput::make('amount')->numeric()->minValue(0)->required(), TextInput::make('currency')->default('GBP')->length(3), Textarea::make('terms')->json(), Textarea::make('qualification')->json(), Textarea::make('negotiation')->json(), Textarea::make('proof')->json(), Textarea::make('conditions'), Select::make('status')->options(['draft' => 'Draft', 'submitted' => 'Submitted', 'countered' => 'Countered', 'accepted' => 'Accepted', 'rejected' => 'Rejected', 'withdrawn' => 'Withdrawn'])->disabled()->dehydrated(false)]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->searchable(), TextColumn::make('amount')->money('GBP'), TextColumn::make('status')->badge(), TextColumn::make('created_at')->dateTime()->sortable()])->recordActions([EditAction::make(), DeleteAction::make()])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListOffers::route('/'), 'create' => CreateOffer::route('/create'), 'edit' => EditOffer::route('/{record}/edit')];
    }
}
