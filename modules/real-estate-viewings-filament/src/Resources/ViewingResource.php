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

    protected static ?string $modelLabel = 'Показ';

    protected static ?string $pluralModelLabel = 'Показы';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-calendar-days';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('subject')->required()->maxLength(255), Select::make('status')->options(['requested' => 'Requested', 'confirmed' => 'Confirmed', 'completed' => 'Completed', 'cancelled' => 'Cancelled', 'no_show' => 'No show'])->required(), DateTimePicker::make('starts_at'), DateTimePicker::make('ends_at'), Textarea::make('access')->helperText('JSON access instructions.')->columnSpanFull(), Textarea::make('accompaniment')->helperText('JSON accompaniment details.')->columnSpanFull(), Textarea::make('reminders')->helperText('JSON reminder settings.')->columnSpanFull(), Textarea::make('feedback')->helperText('JSON feedback.')->columnSpanFull()]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->searchable(), TextColumn::make('status')->badge(), TextColumn::make('starts_at')->dateTime()->sortable(), TextColumn::make('created_at')->dateTime()])
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
