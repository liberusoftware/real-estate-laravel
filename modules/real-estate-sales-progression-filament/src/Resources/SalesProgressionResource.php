<?php

declare(strict_types=1);

namespace Liberu\RealEstate\SalesProgressionFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\SalesProgression\Application\DeleteSalesProgression;
use Liberu\RealEstate\SalesProgression\Application\TransitionSalesProgression;
use Liberu\RealEstate\SalesProgression\Application\UpdateSalesProgressionSection;
use Liberu\RealEstate\SalesProgression\Domain\SalesProgressionSection;
use Liberu\RealEstate\SalesProgression\Domain\SalesProgressionStatus;
use Liberu\RealEstate\SalesProgression\Models\SalesProgression;
use Liberu\RealEstate\SalesProgressionFilament\Resources\SalesProgressionResource\Pages\CreateSalesProgression;
use Liberu\RealEstate\SalesProgressionFilament\Resources\SalesProgressionResource\Pages\EditSalesProgression;
use Liberu\RealEstate\SalesProgressionFilament\Resources\SalesProgressionResource\Pages\ListSalesProgressions;

final class SalesProgressionResource extends Resource
{
    protected static ?string $model = SalesProgression::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.sales_progression.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.sales_progression.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.sales_progression.sections.overview'))
                ->description(__('filament.sales_progression.sections.overview_description'))
                ->columns(3)
                ->schema([
                    TextInput::make('subject')->label(__('filament.sales_progression.fields.subject'))->required()->maxLength(255),
                    TextInput::make('property_id')->label(__('filament.sales_progression.fields.property_id'))->numeric(),
                    TextInput::make('offer_id')->label(__('filament.sales_progression.fields.offer_id'))->numeric(),
                ]),
            Section::make(__('filament.sales_progression.sections.status'))
                ->description(__('filament.sales_progression.sections.status_description'))
                ->schema([
                    TextInput::make('status')->label(__('filament.sales_progression.fields.status'))->required(),
                    Textarea::make('notes')->label(__('filament.sales_progression.fields.notes'))->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.sales_progression.fields.subject'))->searchable(), TextColumn::make('status')->label(__('filament.sales_progression.fields.status'))->badge(), TextColumn::make('created_at')->label(__('filament.sales_progression.fields.created_at'))->dateTime()])->recordActions([
            EditAction::make(),
            Action::make('exchange')->requiresConfirmation()->action(fn (Model $record): SalesProgression => app(TransitionSalesProgression::class)->handle($record, (int) auth()->user()->current_team_id, SalesProgressionStatus::Exchanged)),
            Action::make('complete')->requiresConfirmation()->action(fn (Model $record): SalesProgression => app(TransitionSalesProgression::class)->handle($record, (int) auth()->user()->current_team_id, SalesProgressionStatus::Completed)),
            Action::make('section')->form([TextInput::make('section')->required(), Textarea::make('value')->json()->required()])->action(fn (Model $record, array $data): SalesProgression => app(UpdateSalesProgressionSection::class)->handle($record, (int) auth()->user()->current_team_id, SalesProgressionSection::from($data['section']), $data['value'])),
            DeleteAction::make()->action(function (Model $record): void {
                $teamId = auth()->user()?->current_team_id;
                abort_unless($teamId !== null, 403);
                app(DeleteSalesProgression::class)->handle($record, $teamId);
            }),
        ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListSalesProgressions::route('/'), 'create' => CreateSalesProgression::route('/create'), 'edit' => EditSalesProgression::route('/{record}/edit')];
    }
}
