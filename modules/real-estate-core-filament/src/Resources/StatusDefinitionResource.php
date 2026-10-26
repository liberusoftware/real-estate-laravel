<?php

declare(strict_types=1);

namespace Liberu\RealEstate\CoreFilament\Resources;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Core\Models\StatusDefinition;
use Liberu\RealEstate\CoreFilament\Resources\StatusDefinitionResource\Pages\CreateStatusDefinition;
use Liberu\RealEstate\CoreFilament\Resources\StatusDefinitionResource\Pages\EditStatusDefinition;
use Liberu\RealEstate\CoreFilament\Resources\StatusDefinitionResource\Pages\ListStatusDefinitions;

final class StatusDefinitionResource extends Resource
{
    protected static ?string $model = StatusDefinition::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.status_definition.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.status_definition.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.status_definition_form.sections.details'))
                ->description(__('filament.status_definition_form.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('entity')->label(__('filament.status_definition_form.fields.entity'))->required()->maxLength(80),
                    TextInput::make('key')->label(__('filament.status_definition_form.fields.key'))->required()->maxLength(80),
                    TextInput::make('label')->label(__('filament.status_definition_form.fields.label'))->required()->maxLength(255),
                    Toggle::make('active')->label(__('filament.status_definition_form.fields.active'))->default(true),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('entity')->label(__('filament.status_definition_form.fields.entity'))->searchable(), TextColumn::make('key')->label(__('filament.status_definition_form.fields.key'))->searchable(), TextColumn::make('label')->label(__('filament.status_definition_form.fields.label')), TextColumn::make('active')->label(__('filament.status_definition_form.fields.active'))->badge()->color(fn (bool $state): string => $state ? 'success' : 'danger')->formatStateUsing(fn (bool $state): string => $state ? 'Да' : 'Нет')])->recordActions([EditAction::make(), DeleteAction::make()])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListStatusDefinitions::route('/'), 'create' => CreateStatusDefinition::route('/create'), 'edit' => EditStatusDefinition::route('/{record}/edit')];
    }
}
