<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Lettings\Domain\LeaseAgreementStatus;
use Liberu\RealEstate\Lettings\Models\LeaseAgreement;
use Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource\Pages\CreateLeaseAgreement;
use Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource\Pages\EditLeaseAgreement;
use Liberu\RealEstate\LettingsFilament\Resources\LeaseAgreementResource\Pages\ListLeaseAgreements;

final class LeaseAgreementResource extends Resource
{
    protected static ?string $model = LeaseAgreement::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.lease_agreement.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.lease_agreement.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-check';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.lease_agreement.sections.details'))
                ->description(__('filament.lease_agreement.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('property_id')->label(__('filament.lease_agreement.fields.property_id'))->numeric()->required(),
                    TextInput::make('tenant_party_id')->label(__('filament.lease_agreement.fields.tenant_party_id'))->numeric(),
                    TextInput::make('landlord_party_id')->label(__('filament.lease_agreement.fields.landlord_party_id'))->numeric(),
                    Select::make('status')->label(__('filament.lease_agreement.fields.status'))->options(collect(LeaseAgreementStatus::cases())->mapWithKeys(fn (LeaseAgreementStatus $status): array => [$status->value => __('filament.lease_agreement.statuses.'.$status->value)])->all())->required(),
                ]),
            Section::make(__('filament.lease_agreement.sections.term'))
                ->description(__('filament.lease_agreement.sections.term_description'))
                ->columns(3)
                ->schema([
                    DatePicker::make('start_date')->label(__('filament.lease_agreement.fields.start_date'))->required(),
                    DatePicker::make('end_date')->label(__('filament.lease_agreement.fields.end_date'))->required(),
                    TextInput::make('payment_frequency')->label(__('filament.lease_agreement.fields.payment_frequency'))->maxLength(40),
                    TextInput::make('monthly_rent')->label(__('filament.lease_agreement.fields.monthly_rent'))->numeric()->required()->prefix(config('app.currency')),
                    TextInput::make('security_deposit')->label(__('filament.lease_agreement.fields.security_deposit'))->numeric()->prefix(config('app.currency')),
                ]),
            Section::make(__('filament.lease_agreement.sections.deposit_and_signatures'))
                ->description(__('filament.lease_agreement.sections.deposit_and_signatures_description'))
                ->columns(3)
                ->schema([
                    TextInput::make('deposit_scheme')->label(__('filament.lease_agreement.fields.deposit_scheme'))->maxLength(80),
                    TextInput::make('deposit_reference')->label(__('filament.lease_agreement.fields.deposit_reference'))->maxLength(80),
                    Toggle::make('landlord_signed')->label(__('filament.lease_agreement.fields.landlord_signed')),
                    Toggle::make('tenant_signed')->label(__('filament.lease_agreement.fields.tenant_signed')),
                    Textarea::make('terms')->label(__('filament.lease_agreement.fields.terms'))->columnSpanFull(),
                ]),
            Section::make(__('filament.lease_agreement.sections.notice_and_termination'))
                ->description(__('filament.lease_agreement.sections.notice_and_termination_description'))
                ->columns(3)
                ->schema([
                    TextInput::make('notice_type')->label(__('filament.lease_agreement.fields.notice_type'))->maxLength(40),
                    DatePicker::make('notice_served_at')->label(__('filament.lease_agreement.fields.notice_served_at')),
                    DatePicker::make('notice_expires_at')->label(__('filament.lease_agreement.fields.notice_expires_at')),
                    DatePicker::make('ended_at')->label(__('filament.lease_agreement.fields.ended_at')),
                    Textarea::make('end_reason')->label(__('filament.lease_agreement.fields.end_reason'))->maxLength(2000)->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('property_id')->label(__('filament.lease_agreement.fields.property_id'))->sortable(),
            TextColumn::make('status')->label(__('filament.lease_agreement.fields.status'))->badge(),
            TextColumn::make('start_date')->label(__('filament.lease_agreement.fields.start_date'))->date()->sortable(),
            TextColumn::make('end_date')->label(__('filament.lease_agreement.fields.end_date'))->date()->sortable(),
            TextColumn::make('monthly_rent')->label(__('filament.lease_agreement.fields.monthly_rent'))->money(config('app.currency'))->sortable(),
            TextColumn::make('created_at')->label(__('filament.lease_agreement.fields.created_at'))->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
        ])->defaultSort('created_at', 'desc');
    }

    /**
     * LeaseAgreement has no team() relationship — it's scoped by a plain
     * team_id column via scopeForTeam(), handled manually in
     * getEloquentQuery() below (see CLAUDE.md's "Tenancy rules that bite").
     */
    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function getEloquentQuery(): Builder
    {
        $teamId = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($teamId === null, fn (Builder $query): Builder => $query->whereRaw('1 = 0'), fn (Builder $query): Builder => $query->forTeam($teamId));
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLeaseAgreements::route('/'),
            'create' => CreateLeaseAgreement::route('/create'),
            'edit' => EditLeaseAgreement::route('/{record}/edit'),
        ];
    }
}
