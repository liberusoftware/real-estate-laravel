<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament\Resources;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\PropertyManagement\Domain\InspectionType;
use Liberu\RealEstate\PropertyManagement\Models\Inspection;
use Liberu\RealEstate\PropertyManagementFilament\Resources\InspectionResource\Pages\CreateInspection;
use Liberu\RealEstate\PropertyManagementFilament\Resources\InspectionResource\Pages\EditInspection;
use Liberu\RealEstate\PropertyManagementFilament\Resources\InspectionResource\Pages\ListInspections;

final class InspectionResource extends Resource
{
    protected static ?string $model = Inspection::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.inspection.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.inspection.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-check';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.inspection.sections.basic'))
                ->description(__('filament.inspection.sections.basic_description'))
                ->columns(3)
                ->schema([
                    TextInput::make('property_id')->label(__('filament.inspection.fields.property_id'))->required()->numeric(),
                    Select::make('type')->label(__('filament.inspection.fields.type'))->options(collect(InspectionType::cases())->mapWithKeys(fn ($case) => [$case->value => __('filament.inspection.types.'.$case->value)])->all())->required(),
                    Select::make('status')->label(__('filament.inspection.fields.status'))->options(['scheduled' => __('filament.inspection.statuses.scheduled'), 'in_progress' => __('filament.inspection.statuses.in_progress'), 'completed' => __('filament.inspection.statuses.completed'), 'cancelled' => __('filament.inspection.statuses.cancelled')])->required(),
                ]),
            Section::make(__('filament.inspection.sections.schedule'))
                ->description(__('filament.inspection.sections.schedule_description'))
                ->schema([
                    DateTimePicker::make('scheduled_at')->label(__('filament.inspection.fields.scheduled_at'))->required(),
                ]),
            Section::make(__('filament.inspection.sections.findings'))
                ->description(__('filament.inspection.sections.findings_description'))
                ->schema([
                    Textarea::make('notes')->label(__('filament.inspection.fields.notes'))->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('property_id')->label(__('filament.inspection.fields.property_id'))->sortable(), TextColumn::make('type')->label(__('filament.inspection.fields.type'))->badge(), TextColumn::make('status')->label(__('filament.inspection.fields.status'))->badge(), TextColumn::make('scheduled_at')->label(__('filament.inspection.fields.scheduled_at'))->dateTime()->sortable()])->defaultSort('scheduled_at');
    }

    /**
     * Inspection has no team() relationship — it's scoped by a plain
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
        return ['index' => ListInspections::route('/'), 'create' => CreateInspection::route('/create'), 'edit' => EditInspection::route('/{record}/edit')];
    }
}
