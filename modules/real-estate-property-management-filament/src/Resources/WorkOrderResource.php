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
use Liberu\RealEstate\PropertyManagement\Models\WorkOrder;
use Liberu\RealEstate\PropertyManagementFilament\Resources\WorkOrderResource\Pages\CreateWorkOrder;
use Liberu\RealEstate\PropertyManagementFilament\Resources\WorkOrderResource\Pages\EditWorkOrder;
use Liberu\RealEstate\PropertyManagementFilament\Resources\WorkOrderResource\Pages\ListWorkOrders;

final class WorkOrderResource extends Resource
{
    protected static ?string $model = WorkOrder::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.work_order.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.work_order.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-clipboard-document-list';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.work_order.sections.basic'))
                ->description(__('filament.work_order.sections.basic_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('title')->label(__('filament.work_order.fields.title'))->required()->maxLength(255)->columnSpanFull(),
                    Textarea::make('description')->label(__('filament.work_order.fields.description'))->required()->columnSpanFull(),
                    TextInput::make('work_type')->label(__('filament.work_order.fields.work_type'))->required()->maxLength(100),
                ]),
            Section::make(__('filament.work_order.sections.assignment'))
                ->description(__('filament.work_order.sections.assignment_description'))
                ->columns(3)
                ->schema([
                    TextInput::make('property_id')->label(__('filament.work_order.fields.property_id'))->required()->numeric(),
                    TextInput::make('vendor_id')->label(__('filament.work_order.fields.vendor_id'))->numeric(),
                    Select::make('status')->label(__('filament.work_order.fields.status'))->options(['pending' => __('filament.work_order.statuses.pending'), 'approved' => __('filament.work_order.statuses.approved'), 'scheduled' => __('filament.work_order.statuses.scheduled'), 'in_progress' => __('filament.work_order.statuses.in_progress'), 'completed' => __('filament.work_order.statuses.completed'), 'cancelled' => __('filament.work_order.statuses.cancelled')])->required(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('title')->label(__('filament.work_order.fields.title'))->searchable(), TextColumn::make('work_type')->label(__('filament.work_order.fields.work_type')), TextColumn::make('status')->label(__('filament.work_order.fields.status'))->badge(), TextColumn::make('scheduled_date')->label(__('filament.work_order.fields.scheduled_date'))->dateTime()->sortable()])->defaultSort('created_at', 'desc');
    }

    /**
     * WorkOrder has no team() relationship — it's scoped by a plain team_id
     * column via scopeForTeam(), handled manually in getEloquentQuery()
     * below (see CLAUDE.md's "Tenancy rules that bite").
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
        return ['index' => ListWorkOrders::route('/'), 'create' => CreateWorkOrder::route('/create'), 'edit' => EditWorkOrder::route('/{record}/edit')];
    }
}
