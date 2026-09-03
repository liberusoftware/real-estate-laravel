<?php

declare(strict_types=1);

namespace Liberu\RealEstate\ValuationsFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Valuations\Application\CalculateMortgage;
use Liberu\RealEstate\Valuations\Application\CalculateRentalYield;
use Liberu\RealEstate\Valuations\Application\CompleteValuation;
use Liberu\RealEstate\Valuations\Application\ConvertValuation;
use Liberu\RealEstate\Valuations\Application\GeneratePropertyValuation;
use Liberu\RealEstate\Valuations\Application\ScheduleValuation;
use Liberu\RealEstate\Valuations\Domain\ValuationStatus;
use Liberu\RealEstate\Valuations\Models\Valuation;
use Liberu\RealEstate\ValuationsFilament\Resources\ValuationResource\Pages\CreateValuation;
use Liberu\RealEstate\ValuationsFilament\Resources\ValuationResource\Pages\EditValuation;
use Liberu\RealEstate\ValuationsFilament\Resources\ValuationResource\Pages\ListValuations;

final class ValuationResource extends Resource
{
    protected static ?string $model = Valuation::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-calculator';

    protected static string|\UnitEnum|null $navigationGroup = 'Real Estate';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('subject')->required()->maxLength(255), Select::make('status')->options(['draft' => 'Draft', 'scheduled' => 'Scheduled', 'completed' => 'Completed', 'converted' => 'Converted', 'cancelled' => 'Cancelled'])->required(), TextInput::make('valued_amount')->numeric()->minValue(0), TextInput::make('fee_amount')->numeric()->minValue(0), TextInput::make('currency')->length(3)->default('GBP'), Textarea::make('comparable_data')->helperText('JSON comparable evidence.')->columnSpanFull(), Textarea::make('recommendation')->helperText('JSON recommendation and follow-up notes.')->columnSpanFull(), DateTimePicker::make('scheduled_at'), DateTimePicker::make('follow_up_at')]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->searchable(), TextColumn::make('status')->badge(), TextColumn::make('valued_amount')->money('GBP'), TextColumn::make('created_at')->dateTime()->sortable()])
            ->recordActions([
                EditAction::make(),
                Action::make('schedule')
                    ->form([DateTimePicker::make('scheduled_at')->required()->after('now')])
                    ->action(function (Valuation $record, array $data): void {
                        app(ScheduleValuation::class)->handle($record, auth()->user()->current_team_id, $data['scheduled_at']);
                    })
                    ->visible(fn (Valuation $record): bool => $record->status === ValuationStatus::Draft),
                Action::make('complete')
                    ->form([TextInput::make('valued_amount')->required()->numeric()->minValue(0)])
                    ->action(function (Valuation $record, array $data): void {
                        app(CompleteValuation::class)->handle($record, auth()->user()->current_team_id, $data);
                    })
                    ->visible(fn (Valuation $record): bool => $record->status === ValuationStatus::Scheduled),
                Action::make('convert')
                    ->form([TextInput::make('type')->required()->maxLength(80)])
                    ->action(function (Valuation $record, array $data): void {
                        app(ConvertValuation::class)->handle($record, auth()->user()->current_team_id, $data);
                    })
                    ->visible(fn (Valuation $record): bool => $record->status === ValuationStatus::Completed),
                Action::make('property_estimate')
                    ->label('Estimate property value')
                    ->form([
                        TextInput::make('area_sqft')->required()->numeric()->minValue(0.01),
                        TextInput::make('bedrooms')->required()->numeric()->minValue(0),
                        TextInput::make('bathrooms')->required()->numeric()->minValue(0),
                        TextInput::make('year_built')->required()->numeric()->minValue(1000),
                        TextInput::make('property_type')->required()->maxLength(40),
                        TextInput::make('address')->maxLength(500),
                        TextInput::make('comparables_count')->numeric()->minValue(0)->default(0),
                    ])
                    ->action(function (Valuation $record, array $data): void {
                        $estimate = app(GeneratePropertyValuation::class)->handle($data, (int) ($data['comparables_count'] ?? 0));
                        Notification::make()
                            ->title('Estimated value: '.number_format((float) $estimate['estimated_value'], 2))
                            ->warning()
                            ->send();
                    }),
                Action::make('mortgage_estimate')
                    ->label('Estimate mortgage')
                    ->form([
                        TextInput::make('property_price')->required()->numeric()->minValue(0.01),
                        TextInput::make('loan_amount')->required()->numeric()->minValue(0.01),
                        TextInput::make('interest_rate')->required()->numeric()->minValue(0)->maxValue(100),
                        TextInput::make('loan_term_years')->required()->numeric()->minValue(1)->maxValue(50)->default(25),
                    ])
                    ->action(function (array $data): void {
                        $result = app(CalculateMortgage::class)->handle((float) $data['property_price'], (float) $data['loan_amount'], (float) $data['interest_rate'], (int) $data['loan_term_years']);
                        Notification::make()
                            ->title('Estimated payment: '.number_format((float) $result['monthly_payment'], 2).' per month')
                            ->warning()
                            ->send();
                    }),
                Action::make('rental_yield_estimate')
                    ->label('Estimate rental yield')
                    ->form([
                        TextInput::make('property_value')->required()->numeric()->minValue(0.01),
                        TextInput::make('annual_rental_income')->required()->numeric()->minValue(0),
                        TextInput::make('annual_expenses')->numeric()->minValue(0)->default(0),
                    ])
                    ->action(function (array $data): void {
                        $result = app(CalculateRentalYield::class)->handle((float) $data['property_value'], (float) $data['annual_rental_income'], (float) ($data['annual_expenses'] ?? 0));
                        Notification::make()
                            ->title('Estimated net yield: '.number_format((float) $result['net_yield'], 2).'%')
                            ->warning()
                            ->send();
                    }),
                DeleteAction::make(),
            ])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return ['index' => ListValuations::route('/'), 'create' => CreateValuation::route('/create'), 'edit' => EditValuation::route('/{record}/edit')];
    }
}
