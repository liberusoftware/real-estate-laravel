<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PartiesFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Parties\Application\CreatePartyRelationship;
use Liberu\RealEstate\Parties\Application\ManagePartyConsent;
use Liberu\RealEstate\Parties\Domain\PartyType;
use Liberu\RealEstate\Parties\Models\Party;
use Liberu\RealEstate\PartiesFilament\Resources\PartyResource\Pages\CreateParty;
use Liberu\RealEstate\PartiesFilament\Resources\PartyResource\Pages\EditParty;
use Liberu\RealEstate\PartiesFilament\Resources\PartyResource\Pages\ListParties;

final class PartyResource extends Resource
{
    protected static ?string $model = Party::class;

    protected static ?string $modelLabel = 'Контрагент';

    protected static ?string $pluralModelLabel = 'Контрагенты';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('type')->options(collect(PartyType::cases())->mapWithKeys(fn ($type) => [$type->value => ucfirst($type->value)])->all())->required(),
            TextInput::make('name')->required()->maxLength(255),
            TextInput::make('email')->email(),
            TextInput::make('phone')->maxLength(50),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('type')->badge(),
                TextColumn::make('email')->searchable(),
                TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('grant_consent')->requiresConfirmation()->action(fn (Party $record): Party => app(ManagePartyConsent::class)->handle($record, (int) auth()->user()->current_team_id, true)),
                Action::make('revoke_consent')->requiresConfirmation()->action(fn (Party $record): Party => app(ManagePartyConsent::class)->handle($record, (int) auth()->user()->current_team_id, false)),
                Action::make('relationship')->form([TextInput::make('related_party_id')->numeric()->required(), TextInput::make('relationship')->required()->maxLength(60)])->action(fn (Party $record, array $data): mixed => app(CreatePartyRelationship::class)->handle($record, (int) auth()->user()->current_team_id, $data)),
                DeleteAction::make(),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => ListParties::route('/'),
            'create' => CreateParty::route('/create'),
            'edit' => EditParty::route('/{record}/edit'),
        ];
    }
}
