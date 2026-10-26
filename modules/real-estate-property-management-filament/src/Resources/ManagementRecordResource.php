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
use Liberu\RealEstate\PropertyManagement\Domain\ManagementCapability;
use Liberu\RealEstate\PropertyManagement\Models\ManagementRecord;
use Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource\Pages\CreateManagementRecord;
use Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource\Pages\EditManagementRecord;
use Liberu\RealEstate\PropertyManagementFilament\Resources\ManagementRecordResource\Pages\ListManagementRecords;

final class ManagementRecordResource extends Resource
{
    protected static ?string $model = ManagementRecord::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.management_record.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.management_record.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.management_record.sections.basic'))
                ->description(__('filament.management_record.sections.basic_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('subject')->label(__('filament.management_record.fields.subject'))->required()->maxLength(255)->columnSpanFull(),
                    Select::make('capability')->label(__('filament.management_record.fields.capability'))->options(collect(ManagementCapability::cases())->mapWithKeys(fn ($c) => [$c->value => __('filament.management_record.capabilities.'.$c->value)])->all())->required(),
                    Select::make('status')->label(__('filament.management_record.fields.status'))->options(['draft' => __('filament.management_record.statuses.draft'), 'in_progress' => __('filament.management_record.statuses.in_progress'), 'completed' => __('filament.management_record.statuses.completed'), 'cancelled' => __('filament.management_record.statuses.cancelled')])->required(),
                ]),
            Section::make(__('filament.management_record.sections.details'))
                ->description(__('filament.management_record.sections.details_description'))
                ->schema([
                    Textarea::make('failure_reason')->label(__('filament.management_record.fields.failure_reason'))->maxLength(2000)->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.management_record.fields.subject'))->searchable(), TextColumn::make('capability')->label(__('filament.management_record.fields.capability'))->badge(), TextColumn::make('status')->label(__('filament.management_record.fields.status'))->badge(), TextColumn::make('created_at')->label(__('filament.management_record.fields.created_at'))->dateTime()->sortable()])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $team = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($team === null, fn (Builder $q) => $q->whereRaw('1=0'), fn (Builder $q) => $q->forTeam($team));
    }

    public static function getPages(): array
    {
        return ['index' => ListManagementRecords::route('/'), 'create' => CreateManagementRecord::route('/create'), 'edit' => EditManagementRecord::route('/{record}/edit')];
    }
}
