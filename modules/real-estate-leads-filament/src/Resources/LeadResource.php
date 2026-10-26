<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LeadsFilament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Grouping\Group;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Leads\Domain\LeadSource;
use Liberu\RealEstate\Leads\Domain\LeadStatus;
use Liberu\RealEstate\Leads\Models\Lead;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource\Pages\CreateLead;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource\Pages\EditLead;
use Liberu\RealEstate\LeadsFilament\Resources\LeadResource\Pages\ListLeads;

final class LeadResource extends Resource
{
    protected static ?string $model = Lead::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.lead.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.lead.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-plus';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.lead.sections.contact'))
                ->description(__('filament.lead.sections.contact_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('name')->label(__('filament.lead.fields.name'))->required()->maxLength(255),
                    TextInput::make('email')->label(__('filament.lead.fields.email'))->email()->required()->maxLength(255),
                    TextInput::make('phone')->label(__('filament.lead.fields.phone'))->tel()->maxLength(50),
                    Select::make('source')->label(__('filament.lead.fields.source'))->options(collect(LeadSource::cases())->mapWithKeys(fn (LeadSource $source): array => [$source->value => __('filament.lead.sources.'.$source->value)])->all())->required(),
                    TextInput::make('property_id')->label(__('filament.lead.fields.property_id'))->numeric(),
                ]),
            Section::make(__('filament.lead.sections.pipeline'))
                ->description(__('filament.lead.sections.pipeline_description'))
                ->columns(3)
                ->schema([
                    Select::make('status')->label(__('filament.lead.fields.status'))->options(collect(LeadStatus::cases())->mapWithKeys(fn (LeadStatus $status): array => [$status->value => __('filament.lead.statuses.'.$status->value)])->all())->required(),
                    TextInput::make('score')->label(__('filament.lead.fields.score'))->numeric()->minValue(0)->maxValue(255),
                    Select::make('assigned_to')
                        ->label(__('filament.lead.fields.assigned_to'))
                        ->relationship(
                            'assignee',
                            'name',
                            modifyQueryUsing: fn (Builder $query): Builder => $query->whereHas('teams', fn (Builder $teams): Builder => $teams->where('teams.id', auth()->user()?->current_team_id)),
                        )
                        ->searchable()
                        ->preload(),
                ]),
            Section::make(__('filament.lead.sections.notes'))
                ->description(__('filament.lead.sections.notes_description'))
                ->schema([
                    Textarea::make('notes')->label(__('filament.lead.fields.notes'))->maxLength(5000)->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('name')->label(__('filament.lead.fields.name'))->searchable(),
            TextColumn::make('email')->label(__('filament.lead.fields.email'))->searchable(),
            TextColumn::make('source')->label(__('filament.lead.fields.source'))->badge(),
            TextColumn::make('status')->label(__('filament.lead.fields.status'))->badge(),
            TextColumn::make('assignee.name')->label(__('filament.lead.fields.assigned_to'))->placeholder('—'),
            TextColumn::make('last_activity_at')->label(__('filament.lead.fields.last_activity_at'))->dateTime()->sortable(),
            TextColumn::make('created_at')->label(__('filament.lead.fields.created_at'))->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
        ])
            ->filters([
                SelectFilter::make('status')->label(__('filament.lead.fields.status'))->options(collect(LeadStatus::cases())->mapWithKeys(fn (LeadStatus $status): array => [$status->value => __('filament.lead.statuses.'.$status->value)])->all()),
            ])
            ->defaultGroup(
                Group::make('status')
                    ->label(__('filament.lead.fields.status'))
                    ->getTitleFromRecordUsing(fn (Lead $record): string => __('filament.lead.statuses.'.$record->status->value)),
            )
            ->defaultSort('last_activity_at', 'desc');
    }

    /**
     * Lead has no team() relationship — it's scoped by a plain team_id
     * column via Lead::scopeForTeam(), handled manually in
     * getEloquentQuery() below. Without this override, Filament's tenant
     * global scope tries to call $model->team() on every query and throws
     * (see CLAUDE.md's "Tenancy rules that bite").
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
            'index' => ListLeads::route('/'),
            'create' => CreateLead::route('/create'),
            'edit' => EditLead::route('/{record}/edit'),
        ];
    }
}
