<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Core\Models\Branch;
use Liberu\RealEstate\Properties\Application\EstimatePropertyTax;
use Liberu\RealEstate\Properties\Application\RecordPropertyKey;
use Liberu\RealEstate\Properties\Application\TogglePropertyFavorite;
use Liberu\RealEstate\Properties\Application\TransitionProperty;
use Liberu\RealEstate\Properties\Application\UpsertPropertyUnit;
use Liberu\RealEstate\Properties\Domain\PropertyStatus;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertyCategory;
use Liberu\RealEstate\Properties\Models\PropertyTemplate;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyResource\Pages\CreateProperty;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyResource\Pages\EditProperty;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyResource\Pages\ListProperties;

final class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $modelLabel = 'Объект недвижимости';

    protected static ?string $pluralModelLabel = 'Объекты недвижимости';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-office-2';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('title')->maxLength(255),
            Select::make('status')->options(collect(PropertyStatus::cases())->mapWithKeys(fn (PropertyStatus $status): array => [$status->value => str($status->value)->headline()->toString()])->all())->disabled()->dehydrated(false),
            Textarea::make('address')->required()->columnSpanFull(),
            Select::make('branch_id')
                ->label('Branch')
                ->options(fn (): array => Branch::query()
                    ->forTeam(auth()->user()?->current_team_id ?? 0)
                    ->orderBy('name')
                    ->pluck('name', 'id')
                    ->all())
                ->searchable()
                ->nullable(),
            Textarea::make('description')->columnSpanFull(),
            Textarea::make('internal_notes')->label('Internal notes')->columnSpanFull(),
            TextInput::make('price')->numeric()->minValue(0),
            TextInput::make('currency')->length(3)->default('TJS'),
            TextInput::make('bedrooms')->numeric()->minValue(0),
            TextInput::make('bathrooms')->numeric()->minValue(0),
            TextInput::make('reception_rooms')->numeric()->minValue(0),
            TextInput::make('area_sqft')->numeric()->minValue(0),
            TextInput::make('year_built')
                ->numeric()
                ->minValue(Property::EARLIEST_YEAR_BUILT)
                ->maxValue(Property::latestYearBuilt())
                ->helperText(Property::yearBuiltMessage()),
            Select::make('property_type')
                ->label('Тип недвижимости')
                ->options([
                    'apartment' => 'Квартира',
                    'house' => 'Дом',
                    'guesthouse' => 'Гестхаус',
                    'hostel' => 'Хостел',
                    'hunting-lodge' => 'Охотничий домик',
                    'land' => 'Земельный участок',
                    'commercial' => 'Коммерческая',
                    'cottage' => 'Дача',
                ])
                ->required(),
            Select::make('property_category_id')
                ->label('Category')
                ->options(fn (): array => PropertyCategory::query()->forTeam(auth()->user()?->current_team_id ?? 0)->orderBy('name')->pluck('name', 'id')->all())
                ->searchable()
                ->nullable(),
            Select::make('property_template_id')
                ->label('Listing template')
                ->options(fn (): array => PropertyTemplate::query()->forTeam(auth()->user()?->current_team_id ?? 0)->orderBy('name')->pluck('name', 'id')->all())
                ->searchable()
                ->nullable(),
            TextInput::make('postal_code')->maxLength(20),
            TextInput::make('country')->length(2),
            TextInput::make('tenure')->maxLength(40),
            TextInput::make('council_tax_band')->maxLength(10),
            TextInput::make('energy_rating')->maxLength(10),
            TextInput::make('energy_score')->numeric()->minValue(0)->maxValue(100),
            TextInput::make('walkability_score')->numeric()->minValue(0)->maxValue(100),
            TextInput::make('transit_score')->numeric()->minValue(0)->maxValue(100),
            TextInput::make('bike_score')->numeric()->minValue(0)->maxValue(100),
            TextInput::make('virtual_tour_url')->url()->maxLength(2048),
            TextInput::make('virtual_tour_provider')->maxLength(40),
            Toggle::make('live_tour_available'),
            TextInput::make('model_3d_url')->url()->maxLength(2048),
            TextInput::make('floor_plan_image')->url()->maxLength(2048),
            Toggle::make('is_featured'),
            Toggle::make('ar_tour_enabled'),
            Toggle::make('holographic_enabled'),
            TextInput::make('holographic_tour_url')->url()->maxLength(2048),
            TextInput::make('holographic_provider')->maxLength(255),
            TagsInput::make('features')->separator(','),
            TextInput::make('insurance_policy_id')->numeric()->minValue(1),
            TextInput::make('insurance_coverage_amount')->numeric()->minValue(0),
            TextInput::make('insurance_premium')->numeric()->minValue(0),
            DatePicker::make('insurance_expiry_date'),
            Section::make('🏔️ Региональные особенности')
                ->schema([
                    Toggle::make('has_generator')
                        ->label('Генератор')
                        ->default(false),
                    Toggle::make('has_wifi')
                        ->label('Wi-Fi')
                        ->default(false),
                    Toggle::make('has_parking')
                        ->label('Парковка')
                        ->default(false),
                    Select::make('mountain_view')
                        ->label('Вид на горы')
                        ->options([
                            'pamir' => 'Памир',
                            'fan' => 'Фанские горы',
                            'hissar' => 'Гиссарский хребет',
                            'other' => 'Другие',
                        ])
                        ->nullable(),
                    TextInput::make('altitude')
                        ->label('Высота над уровнем моря (м)')
                        ->numeric()
                        ->nullable(),
                    Select::make('water_source')
                        ->label('Источник воды')
                        ->options([
                            'well' => 'Скважина',
                            'river' => 'Река',
                            'spring' => 'Родник',
                            'other' => 'Другой',
                        ])
                        ->nullable(),
                    TextInput::make('max_guests')
                        ->label('Максимальное количество гостей')
                        ->numeric()
                        ->minValue(1)
                        ->nullable(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(function (Builder $query): Builder {
                $teamId = auth()->user()?->current_team_id;

                return $teamId === null ? $query->whereRaw('1 = 0') : $query->forTeam($teamId);
            })
            ->columns([
                TextColumn::make('reference')->label('Номер')->state(fn (Property $record): string => $record->reference())->sortable(query: fn (Builder $query, string $direction): Builder => $query->orderBy('id', $direction)),
                TextColumn::make('address')->label('Адрес')->searchable()->sortable()->wrap(),
                TextColumn::make('property_type')->label('Тип')->searchable()->sortable(),
                TextColumn::make('status')->label('Статус')->badge(),
                TextColumn::make('price')->label('Цена')->numeric()->sortable(),
                TextColumn::make('bedrooms')->label('Спален')->sortable(),
                TextColumn::make('bathrooms')->label('Санузлов')->sortable(),
                // Column name says "sqft" (upstream template default), but
                // every value in this table is actually square metres — the
                // frontend renders area_sqft as "{value} м²" throughout, and
                // this label matches that real usage, not the column name.
                TextColumn::make('area_sqft')->label('Площадь, м²')->sortable(),
                TextColumn::make('year_built')->label('Год постройки')->sortable(),
                TextColumn::make('price_per_square_foot')->label('Цена за м²')->state(fn (Property $record): ?float => $record->pricePerSquareFoot())->numeric(decimalPlaces: 2),
                TextColumn::make('days_listed')->label('Дней в продаже')->state(fn (Property $record): ?int => $record->daysListed())->numeric(),
                TextColumn::make('views_count')->label('Просмотры')->numeric()->sortable(),
                TextColumn::make('floor_plan_image')->label('План этажа')->formatStateUsing(fn (?string $state): string => filled($state) ? 'Есть' : 'Не загружен'),
                TextColumn::make('created_at')->label('Создано')->dateTime()->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')->options(collect(PropertyStatus::cases())->mapWithKeys(fn (PropertyStatus $status): array => [$status->value => str($status->value)->headline()->toString()])->all()),
                SelectFilter::make('property_template_id')
                    ->label('Template')
                    ->options(fn (): array => PropertyTemplate::query()->forTeam(auth()->user()?->current_team_id ?? 0)->orderBy('name')->pluck('name', 'id')->all()),
                Filter::make('minimum_scores')
                    ->form([
                        TextInput::make('energy_score')->numeric()->minValue(0)->maxValue(100),
                        TextInput::make('walkability_score')->numeric()->minValue(0)->maxValue(100),
                        TextInput::make('transit_score')->numeric()->minValue(0)->maxValue(100),
                        TextInput::make('bike_score')->numeric()->minValue(0)->maxValue(100),
                    ])
                    ->query(fn (Builder $query, array $data): Builder => $query
                        ->minEnergyScore($data['energy_score'] ?? null)
                        ->walkabilityScore($data['walkability_score'] ?? null)
                        ->transitScore($data['transit_score'] ?? null)
                        ->bikeScore($data['bike_score'] ?? null)),
                Filter::make('favorites_only')
                    ->label('My favorites')
                    ->query(fn (Builder $query): Builder => auth()->user()?->current_team_id === null
                        ? $query->whereRaw('1 = 0')
                        : $query->favoritedBy(auth()->user()->current_team_id, auth()->id())),
            ])
            ->recordActions([
                EditAction::make(),
                Action::make('favorite')
                    ->label('Toggle favorite')
                    ->action(fn (Property $record): bool => app(TogglePropertyFavorite::class)->handle($record->team_id, auth()->id(), $record->getKey())),
                Action::make('similar')
                    ->label('Similar properties')
                    ->action(function (Property $record): void {
                        Notification::make()
                            ->title($record->similarProperties()->count().' similar properties found')
                            ->success()
                            ->send();
                    }),
                Action::make('tax_estimate')
                    ->label('Estimate tax')
                    ->form([
                        Select::make('buyer_type')->options([
                            'first_time_buyer' => 'First-time buyer',
                            'home_mover' => 'Home mover',
                            'additional_property' => 'Additional property',
                        ])->required()->default('home_mover'),
                        TextInput::make('country')->required()->maxLength(80)->default('GB'),
                    ])
                    ->action(function (Property $record, array $data): void {
                        $estimate = app(EstimatePropertyTax::class)->handle((float) $record->price, (string) $data['country'], $data);
                        Notification::make()
                            ->title('Estimated tax: '.number_format((float) $estimate['total_tax'], 2))
                            ->warning()
                            ->send();
                    })
                    ->visible(fn (Property $record): bool => $record->price !== null),
                Action::make('unit')->form([TextInput::make('label')->required()->maxLength(80), TextInput::make('bedrooms')->numeric()->minValue(0), TextInput::make('bathrooms')->numeric()->minValue(0), TextInput::make('area_sqft')->numeric()->minValue(0)])->action(fn (Property $record, array $data): mixed => app(UpsertPropertyUnit::class)->handle($record, (int) auth()->user()->current_team_id, $data)),
                Action::make('key')->form([TextInput::make('key_reference')->required()->maxLength(80), TextInput::make('quantity')->numeric()->required()->minValue(1), Textarea::make('notes')])->action(fn (Property $record, array $data): mixed => app(RecordPropertyKey::class)->handle($record, (int) auth()->user()->current_team_id, $data)),
                Action::make('available')
                    ->label('Publish')
                    ->action(fn (Property $record): Property => app(TransitionProperty::class)->handle($record->team_id, auth()->id(), $record->getKey(), PropertyStatus::Available))
                    ->visible(fn (Property $record): bool => $record->status === PropertyStatus::Draft),
                Action::make('under_offer')
                    ->label('Mark under offer')
                    ->action(fn (Property $record): Property => app(TransitionProperty::class)->handle($record->team_id, auth()->id(), $record->getKey(), PropertyStatus::UnderOffer))
                    ->visible(fn (Property $record): bool => $record->status === PropertyStatus::Available),
                Action::make('sold')
                    ->label('Mark sold')
                    ->action(fn (Property $record): Property => app(TransitionProperty::class)->handle($record->team_id, auth()->id(), $record->getKey(), PropertyStatus::Sold))
                    ->visible(fn (Property $record): bool => in_array($record->status, [PropertyStatus::Available, PropertyStatus::UnderOffer], true)),
                Action::make('withdraw')
                    ->label('Withdraw')
                    ->action(fn (Property $record): Property => app(TransitionProperty::class)->handle($record->team_id, auth()->id(), $record->getKey(), PropertyStatus::Withdrawn))
                    ->visible(fn (Property $record): bool => in_array($record->status, [PropertyStatus::Draft, PropertyStatus::Available, PropertyStatus::UnderOffer], true)),
                DeleteAction::make(),
            ])
            ->toolbarActions([BulkActionGroup::make([DeleteBulkAction::make()])])
            ->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when(
            $teamId === null,
            fn (Builder $query): Builder => $query->whereRaw('1 = 0'),
            fn (Builder $query): Builder => $query->forTeam($teamId),
        );
    }

    /** @return array<string, PageRegistration> */
    public static function getPages(): array
    {
        return [
            'index' => ListProperties::route('/'),
            'create' => CreateProperty::route('/create'),
            'edit' => EditProperty::route('/{record}/edit'),
        ];
    }
}
