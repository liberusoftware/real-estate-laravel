<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertyManagementFilament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
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

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('subject')->required()->maxLength(255), Select::make('capability')->options(collect(ManagementCapability::cases())->mapWithKeys(fn ($c) => [$c->value => str($c->value)->replace('_', ' ')->title()])->all())->required(), Select::make('status')->options(['draft' => 'Draft', 'in_progress' => 'In progress', 'completed' => 'Completed', 'cancelled' => 'Cancelled'])->required()]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->searchable(), TextColumn::make('capability')->badge(), TextColumn::make('status')->badge(), TextColumn::make('created_at')->dateTime()->sortable()])->defaultSort('created_at', 'desc');
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
