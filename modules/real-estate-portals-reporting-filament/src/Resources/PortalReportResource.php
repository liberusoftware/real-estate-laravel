<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PortalsReportingFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\PortalsReporting\Application\DeletePortalReport;
use Liberu\RealEstate\PortalsReporting\Application\RecordPortalMetric;
use Liberu\RealEstate\PortalsReporting\Application\TransitionPortalReport;
use Liberu\RealEstate\PortalsReporting\Domain\PortalMetric;
use Liberu\RealEstate\PortalsReporting\Domain\PortalReportStatus;
use Liberu\RealEstate\PortalsReporting\Models\PortalReport;
use Liberu\RealEstate\PortalsReportingFilament\Resources\PortalReportResource\Pages\CreatePortalReport;
use Liberu\RealEstate\PortalsReportingFilament\Resources\PortalReportResource\Pages\EditPortalReport;
use Liberu\RealEstate\PortalsReportingFilament\Resources\PortalReportResource\Pages\ListPortalReports;

final class PortalReportResource extends Resource
{
    protected static ?string $model = PortalReport::class;

    protected static ?string $modelLabel = 'Отчёт портала';

    protected static ?string $pluralModelLabel = 'Отчёты порталов';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('portal')->required()->maxLength(120), TextInput::make('report_type')->required()->maxLength(120), TextInput::make('property_id')->numeric(), TextInput::make('listing_id')->numeric(), TextInput::make('status')->required(), Textarea::make('error')->columnSpanFull()]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('portal')->searchable(), TextColumn::make('report_type')->searchable(), TextColumn::make('status')->badge(), TextColumn::make('generated_at')->dateTime()])->recordActions([
            EditAction::make(),
            Action::make('queue')->requiresConfirmation()->action(fn (Model $record): PortalReport => app(TransitionPortalReport::class)->handle($record, (int) auth()->user()->current_team_id, PortalReportStatus::Queued)),
            Action::make('publish')->requiresConfirmation()->action(fn (Model $record): PortalReport => app(TransitionPortalReport::class)->handle($record, (int) auth()->user()->current_team_id, PortalReportStatus::Published)),
            Action::make('metric')->form([TextInput::make('metric')->required(), TextInput::make('value')->numeric()->required()])->action(fn (PortalReport $record, array $data): PortalReport => app(RecordPortalMetric::class)->handle($record, (int) auth()->user()->current_team_id, PortalMetric::from($data['metric']), $data['value'])),
            DeleteAction::make()->action(function (Model $record): void {
                $teamId = auth()->user()?->current_team_id;
                abort_unless($teamId !== null, 403);
                app(DeletePortalReport::class)->handle($record, $teamId);
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
        return ['index' => ListPortalReports::route('/'), 'create' => CreatePortalReport::route('/create'), 'edit' => EditPortalReport::route('/{record}/edit')];
    }
}
