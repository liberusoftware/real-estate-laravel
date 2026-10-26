<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\PropertyManagement\Models\MaintenanceRequest;
use Liberu\RealEstate\PropertyManagementFilament\Resources\MaintenanceRequestResource\Pages\CreateMaintenanceRequest;
use Liberu\RealEstate\PropertyManagementFilament\Resources\MaintenanceRequestResource\Pages\EditMaintenanceRequest;
use Liberu\RealEstate\PropertyManagementFilament\Resources\MaintenanceRequestResource\Pages\ListMaintenanceRequests;

final class MaintenanceRequestResource extends Resource
{
    protected static ?string $model = MaintenanceRequest::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.maintenance_request.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.maintenance_request.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.maintenance_request.sections.basic'))
                ->description(__('filament.maintenance_request.sections.basic_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('property_id')->label(__('filament.maintenance_request.fields.property_id'))->required()->numeric(),
                    TextInput::make('title')->label(__('filament.maintenance_request.fields.title'))->required()->maxLength(255)->columnSpanFull(),
                    Select::make('priority')->label(__('filament.maintenance_request.fields.priority'))->options(['low' => __('filament.maintenance_request.priorities.low'), 'normal' => __('filament.maintenance_request.priorities.normal'), 'high' => __('filament.maintenance_request.priorities.high'), 'urgent' => __('filament.maintenance_request.priorities.urgent')])->required(),
                    Select::make('status')->label(__('filament.maintenance_request.fields.status'))->options(['pending' => __('filament.maintenance_request.statuses.pending'), 'in_progress' => __('filament.maintenance_request.statuses.in_progress'), 'completed' => __('filament.maintenance_request.statuses.completed'), 'cancelled' => __('filament.maintenance_request.statuses.cancelled')])->required(),
                ]),
            Section::make(__('filament.maintenance_request.sections.details'))
                ->description(__('filament.maintenance_request.sections.details_description'))
                ->schema([
                    Textarea::make('description')->label(__('filament.maintenance_request.fields.description'))->required()->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('title')->label(__('filament.maintenance_request.fields.title'))->searchable(), TextColumn::make('priority')->label(__('filament.maintenance_request.fields.priority'))->badge(), TextColumn::make('status')->label(__('filament.maintenance_request.fields.status'))->badge(), TextColumn::make('requested_date')->label(__('filament.maintenance_request.fields.requested_date'))->date()->sortable()])->defaultSort('requested_date', 'desc');
    }

    /**
     * MaintenanceRequest has no team() relationship — it's scoped by a plain
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
        return ['index' => ListMaintenanceRequests::route('/'), 'create' => CreateMaintenanceRequest::route('/create'), 'edit' => EditMaintenanceRequest::route('/{record}/edit')];
    }
}
