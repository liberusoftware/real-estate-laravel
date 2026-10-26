<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Lettings\Models\RentalApplication;
use Liberu\RealEstate\LettingsFilament\Resources\RentalApplicationResource\Pages\CreateRentalApplication;
use Liberu\RealEstate\LettingsFilament\Resources\RentalApplicationResource\Pages\EditRentalApplication;
use Liberu\RealEstate\LettingsFilament\Resources\RentalApplicationResource\Pages\ListRentalApplications;

final class RentalApplicationResource extends Resource
{
    protected static ?string $model = RentalApplication::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.rental_application.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.rental_application.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.rental_application.sections.basic'))
                ->description(__('filament.rental_application.sections.basic_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('property_id')->label(__('filament.rental_application.fields.property_id'))->required()->numeric(),
                    TextInput::make('party_id')->label(__('filament.rental_application.fields.party_id'))->numeric(),
                    Select::make('status')->label(__('filament.rental_application.fields.status'))->options(['draft' => __('filament.rental_application.statuses.draft'), 'submitted' => __('filament.rental_application.statuses.submitted'), 'under_review' => __('filament.rental_application.statuses.under_review'), 'approved' => __('filament.rental_application.statuses.approved'), 'rejected' => __('filament.rental_application.statuses.rejected')])->required()->columnSpanFull(),
                ]),
            Section::make(__('filament.rental_application.sections.details'))
                ->description(__('filament.rental_application.sections.details_description'))
                ->columns(3)
                ->schema([
                    TextInput::make('employment_status')->label(__('filament.rental_application.fields.employment_status'))->maxLength(50),
                    TextInput::make('annual_income')->label(__('filament.rental_application.fields.annual_income'))->numeric()->minValue(0),
                    DatePicker::make('desired_move_in_date')->label(__('filament.rental_application.fields.desired_move_in_date')),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('property_id')->label(__('filament.rental_application.fields.property_id'))->sortable(), TextColumn::make('status')->label(__('filament.rental_application.fields.status'))->badge(), TextColumn::make('employment_status')->label(__('filament.rental_application.fields.employment_status')), TextColumn::make('desired_move_in_date')->label(__('filament.rental_application.fields.desired_move_in_date'))->date()->sortable()])->defaultSort('created_at', 'desc');
    }

    /**
     * RentalApplication has no team() relationship — it's scoped by a plain
     * team_id column via scopeForTeam(), handled manually in
     * getEloquentQuery() below (see CLAUDE.md's "Tenancy rules that bite").
     */
    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function getEloquentQuery(): Builder
    {
        $team = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($team === null, fn (Builder $q) => $q->whereRaw('1=0'), fn (Builder $q) => $q->forTeam($team));
    }

    public static function getPages(): array
    {
        return ['index' => ListRentalApplications::route('/'), 'create' => CreateRentalApplication::route('/create'), 'edit' => EditRentalApplication::route('/{record}/edit')];
    }
}
