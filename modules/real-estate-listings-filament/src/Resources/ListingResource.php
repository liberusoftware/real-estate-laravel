<?php

declare(strict_types=1);

namespace Liberu\RealEstate\ListingsFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Listings\Application\TransitionListing;
use Liberu\RealEstate\Listings\Application\UpdateListingSection;
use Liberu\RealEstate\Listings\Domain\ListingSection;
use Liberu\RealEstate\Listings\Domain\ListingStatus;
use Liberu\RealEstate\Listings\Models\Listing;
use Liberu\RealEstate\ListingsFilament\Resources\ListingResource\Pages\CreateListing;
use Liberu\RealEstate\ListingsFilament\Resources\ListingResource\Pages\EditListing;
use Liberu\RealEstate\ListingsFilament\Resources\ListingResource\Pages\ListListings;

final class ListingResource extends Resource
{
    protected static ?string $model = Listing::class;

    protected static ?string $modelLabel = 'Объявление';

    protected static ?string $pluralModelLabel = 'Объявления';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-megaphone';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('title')->required()->maxLength(255), Select::make('status')->options(['draft' => 'Draft', 'ready' => 'Ready', 'published' => 'Published', 'suspended' => 'Suspended', 'withdrawn' => 'Withdrawn'])->disabled()->dehydrated(false), TextInput::make('price')->numeric()->minValue(0), DatePicker::make('available_from')]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('title')->searchable(), TextColumn::make('status')->badge(), TextColumn::make('price')->money('GBP'), TextColumn::make('created_at')->dateTime()->sortable()])
            ->recordActions([
                EditAction::make(),
                Action::make('section')->form([TextInput::make('section')->required(), TextInput::make('value')->required()])->action(fn (Listing $record, array $data): Listing => app(UpdateListingSection::class)->handle($record, (int) auth()->user()->current_team_id, ListingSection::from($data['section']), ['value' => $data['value']])),
                Action::make('ready')
                    ->label('Mark ready')
                    ->action(fn (Listing $record): Listing => app(TransitionListing::class)->handle($record, auth()->user()->current_team_id, ListingStatus::Ready))
                    ->visible(fn (Listing $record): bool => $record->status === ListingStatus::Draft),
                Action::make('publish')
                    ->label('Publish')
                    ->action(fn (Listing $record): Listing => app(TransitionListing::class)->handle($record, auth()->user()->current_team_id, ListingStatus::Published))
                    ->visible(fn (Listing $record): bool => in_array($record->status, [ListingStatus::Ready, ListingStatus::Suspended], true)),
                Action::make('suspend')
                    ->label('Suspend')
                    ->action(fn (Listing $record): Listing => app(TransitionListing::class)->handle($record, auth()->user()->current_team_id, ListingStatus::Suspended))
                    ->visible(fn (Listing $record): bool => $record->status === ListingStatus::Published),
                Action::make('withdraw')
                    ->label('Withdraw')
                    ->action(fn (Listing $record): Listing => app(TransitionListing::class)->handle($record, auth()->user()->current_team_id, ListingStatus::Withdrawn))
                    ->visible(fn (Listing $record): bool => in_array($record->status, [ListingStatus::Ready, ListingStatus::Published, ListingStatus::Suspended], true)),
                DeleteAction::make(),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListListings::route('/'), 'create' => CreateListing::route('/create'), 'edit' => EditListing::route('/{record}/edit')];
    }
}
