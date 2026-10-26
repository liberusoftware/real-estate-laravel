<?php

declare(strict_types=1);

namespace Liberu\RealEstate\OffersFilament\Resources;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
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

    public static function getModelLabel(): string
    {
        return __('filament.resources.offer.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.offer.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-banknotes';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.offer.sections.basic'))
                ->columns(2)
                ->schema([
                    TextInput::make('subject')->label(__('filament.offer.fields.subject'))->required()->maxLength(255)->columnSpanFull(),
                    TextInput::make('amount')->label(__('filament.offer.fields.amount'))->numeric()->minValue(0)->required(),
                    TextInput::make('currency')->label(__('filament.offer.fields.currency'))->default(config('app.currency', 'USD'))->length(3),
                    Select::make('status')->label(__('filament.offer.fields.status'))->options(['draft' => __('filament.offer.statuses.draft'), 'submitted' => __('filament.offer.statuses.submitted'), 'countered' => __('filament.offer.statuses.countered'), 'accepted' => __('filament.offer.statuses.accepted'), 'rejected' => __('filament.offer.statuses.rejected'), 'withdrawn' => __('filament.offer.statuses.withdrawn')])->disabled()->dehydrated(false)->columnSpanFull(),
                ]),
            Section::make(__('filament.offer.sections.details'))
                ->schema([
                    Textarea::make('terms')->label(__('filament.offer.fields.terms'))->json()->columnSpanFull(),
                    Textarea::make('qualification')->label(__('filament.offer.fields.qualification'))->json()->columnSpanFull(),
                    Textarea::make('negotiation')->label(__('filament.offer.fields.negotiation'))->json()->columnSpanFull(),
                    Textarea::make('proof')->label(__('filament.offer.fields.proof'))->json()->columnSpanFull(),
                    Textarea::make('conditions')->label(__('filament.offer.fields.conditions'))->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.offer.fields.subject'))->searchable(), TextColumn::make('amount')->label(__('filament.offer.fields.amount'))->money(), TextColumn::make('status')->label(__('filament.offer.fields.status'))->badge(), TextColumn::make('created_at')->label(__('filament.offer.fields.created_at'))->dateTime()->sortable()])->recordActions([EditAction::make(), DeleteAction::make()])->defaultSort('created_at', 'desc');
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
