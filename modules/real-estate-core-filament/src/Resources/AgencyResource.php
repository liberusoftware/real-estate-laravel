<?php

declare(strict_types=1);

namespace Liberu\RealEstate\CoreFilament\Resources;

use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
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

    public static function getModelLabel(): string
    {
        return __('filament.resources.agency.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.agency.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-office';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.agency_form.sections.details'))
                ->description(__('filament.agency_form.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('name')->label(__('filament.agency_form.fields.name'))->required()->maxLength(255),
                    TextInput::make('code')->label(__('filament.agency_form.fields.code'))->required()->maxLength(20)->dehydrateStateUsing(fn (?string $state): ?string => $state !== null ? mb_strtoupper($state) : null),
                    Checkbox::make('active')->label(__('filament.agency_form.fields.active'))->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label(__('filament.agency_form.fields.name'))->searchable(),
            TextColumn::make('code')->label(__('filament.agency_form.fields.code'))->badge(),
            IconColumn::make('active')->label(__('filament.agency_form.fields.active'))->boolean(),
            TextColumn::make('created_at')->label(__('filament.agency_form.fields.created_at'))->dateTime()->sortable(),
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
