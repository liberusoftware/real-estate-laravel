<?php

declare(strict_types=1);

namespace Liberu\RealEstate\ViewingsFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
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
use Liberu\RealEstate\Viewings\Application\CancelViewing;
use Liberu\RealEstate\Viewings\Application\CompleteViewing;
use Liberu\RealEstate\Viewings\Application\ConfirmViewing;
use Liberu\RealEstate\Viewings\Application\MarkViewingNoShow;
use Liberu\RealEstate\Viewings\Domain\ViewingStatus;
use Liberu\RealEstate\Viewings\Models\Viewing;
use Liberu\RealEstate\ViewingsFilament\Resources\ViewingResource\Pages\CreateViewing;
use Liberu\RealEstate\ViewingsFilament\Resources\ViewingResource\Pages\EditViewing;
use Liberu\RealEstate\ViewingsFilament\Resources\ViewingResource\Pages\ListViewings;

final class ViewingResource extends Resource
{
    protected static ?string $model = Viewing::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.viewing.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.viewing.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-calendar-days';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.viewing.sections.basic'))
                ->columns(2)
                ->schema([
                    TextInput::make('subject')->label(__('filament.viewing.fields.subject'))->required()->maxLength(255)->columnSpanFull(),
                    Select::make('status')->label(__('filament.viewing.fields.status'))->options(['requested' => __('filament.viewing.statuses.requested'), 'confirmed' => __('filament.viewing.statuses.confirmed'), 'completed' => __('filament.viewing.statuses.completed'), 'cancelled' => __('filament.viewing.statuses.cancelled'), 'no_show' => __('filament.viewing.statuses.no_show')])->required(),
                    DateTimePicker::make('starts_at')->label(__('filament.viewing.fields.starts_at')),
                    DateTimePicker::make('ends_at')->label(__('filament.viewing.fields.ends_at')),
                ]),
            Section::make(__('filament.viewing.sections.details'))
                ->schema([
                    Textarea::make('access')->label(__('filament.viewing.fields.access'))->helperText('JSON access instructions.')->columnSpanFull(),
                    Textarea::make('accompaniment')->label(__('filament.viewing.fields.accompaniment'))->helperText('JSON accompaniment details.')->columnSpanFull(),
                    Textarea::make('reminders')->label(__('filament.viewing.fields.reminders'))->helperText('JSON reminder settings.')->columnSpanFull(),
                    Textarea::make('feedback')->label(__('filament.viewing.fields.feedback'))->helperText('JSON feedback.')->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.viewing.fields.subject'))->searchable(), TextColumn::make('status')->label(__('filament.viewing.fields.status'))->badge(), TextColumn::make('starts_at')->label(__('filament.viewing.fields.starts_at'))->dateTime()->sortable(), TextColumn::make('created_at')->label(__('filament.viewing.fields.created_at'))->dateTime()])
            ->recordActions([
                EditAction::make(),
                Action::make('confirm')
                    ->label('Confirm')
                    ->action(fn (Viewing $record): Viewing => app(ConfirmViewing::class)->handle($record, auth()->user()->current_team_id))
                    ->visible(fn (Viewing $record): bool => $record->status === ViewingStatus::Requested),
                Action::make('complete')
                    ->label('Complete')
                    ->action(fn (Viewing $record): Viewing => app(CompleteViewing::class)->handle($record, auth()->user()->current_team_id))
                    ->visible(fn (Viewing $record): bool => $record->status === ViewingStatus::Confirmed),
                Action::make('cancel')
                    ->label('Cancel')
                    ->action(fn (Viewing $record): Viewing => app(CancelViewing::class)->handle($record, auth()->user()->current_team_id))
                    ->visible(fn (Viewing $record): bool => in_array($record->status, [ViewingStatus::Requested, ViewingStatus::Confirmed], true)),
                Action::make('no_show')
                    ->label('Mark no-show')
                    ->action(fn (Viewing $record): Viewing => app(MarkViewingNoShow::class)->handle($record, auth()->user()->current_team_id))
                    ->visible(fn (Viewing $record): bool => $record->status === ViewingStatus::Confirmed),
                DeleteAction::make(),
            ])->defaultSort('starts_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListViewings::route('/'), 'create' => CreateViewing::route('/create'), 'edit' => EditViewing::route('/{record}/edit')];
    }
}
