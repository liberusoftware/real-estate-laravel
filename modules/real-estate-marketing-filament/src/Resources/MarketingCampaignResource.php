<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MarketingFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Liberu\RealEstate\Marketing\Application\DeleteMarketingCampaign;
use Liberu\RealEstate\Marketing\Application\SendMarketingCampaign;
use Liberu\RealEstate\Marketing\Application\TransitionMarketingCampaign;
use Liberu\RealEstate\Marketing\Application\UpdateMarketingCampaignSection;
use Liberu\RealEstate\Marketing\Domain\MarketingCampaignSection;
use Liberu\RealEstate\Marketing\Domain\MarketingCampaignStatus;
use Liberu\RealEstate\Marketing\Models\MarketingCampaign;
use Liberu\RealEstate\MarketingFilament\Resources\MarketingCampaignResource\Pages\CreateMarketingCampaign;
use Liberu\RealEstate\MarketingFilament\Resources\MarketingCampaignResource\Pages\EditMarketingCampaign;
use Liberu\RealEstate\MarketingFilament\Resources\MarketingCampaignResource\Pages\ListMarketingCampaigns;

final class MarketingCampaignResource extends Resource
{
    protected static ?string $model = MarketingCampaign::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.marketing_campaign.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.marketing_campaign.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.marketing_campaign.sections.basic'))
                ->columns(3)
                ->schema([
                    TextInput::make('name')->label(__('filament.marketing_campaign.fields.name'))->required()->maxLength(255)->columnSpanFull(),
                    TextInput::make('channel')->label(__('filament.marketing_campaign.fields.channel'))->required()->maxLength(80),
                    TextInput::make('status')->label(__('filament.marketing_campaign.fields.status'))->required(),
                ]),
            Section::make(__('filament.marketing_campaign.sections.details'))
                ->columns(2)
                ->schema([
                    TextInput::make('property_id')->label(__('filament.marketing_campaign.fields.property_id'))->numeric(),
                    TextInput::make('listing_id')->label(__('filament.marketing_campaign.fields.listing_id'))->numeric(),
                    Textarea::make('notes')->label(__('filament.marketing_campaign.fields.notes'))->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('name')->label(__('filament.marketing_campaign.fields.name'))->searchable(), TextColumn::make('channel')->label(__('filament.marketing_campaign.fields.channel'))->badge(), TextColumn::make('status')->label(__('filament.marketing_campaign.fields.status'))->badge(), TextColumn::make('created_at')->label(__('filament.marketing_campaign.fields.created_at'))->dateTime()])->recordActions([
            EditAction::make(),
            Action::make('schedule')->requiresConfirmation()->action(fn (Model $record): MarketingCampaign => app(TransitionMarketingCampaign::class)->handle($record, (int) auth()->user()->current_team_id, MarketingCampaignStatus::Scheduled)),
            Action::make('activate')->requiresConfirmation()->action(fn (Model $record): MarketingCampaign => app(TransitionMarketingCampaign::class)->handle($record, (int) auth()->user()->current_team_id, MarketingCampaignStatus::Active)),
            Action::make('send_now')
                ->label(__('filament.marketing_campaign.actions.send_now'))
                ->visible(fn (MarketingCampaign $record): bool => $record->status === MarketingCampaignStatus::Active && strtolower((string) $record->channel) === 'email')
                ->requiresConfirmation()
                ->action(fn (MarketingCampaign $record): MarketingCampaign => app(SendMarketingCampaign::class)->handle($record)),
            Action::make('update_section')
                ->form([
                    Select::make('section')->options(collect(MarketingCampaignSection::cases())->mapWithKeys(fn (MarketingCampaignSection $section): array => [$section->value => str($section->value)->replace('_', ' ')->title()])->all())->required(),
                    Textarea::make('value')->json()->required()->helperText('JSON object for audience, content, schedule, or metrics.'),
                ])
                ->action(function (Model $record, array $data): void {
                    $teamId = auth()->user()?->current_team_id;
                    abort_unless($teamId !== null, 403);
                    app(UpdateMarketingCampaignSection::class)->handle($record, $teamId, MarketingCampaignSection::from($data['section']), $data['value']);
                }),
            DeleteAction::make()->action(function (Model $record): void {
                $teamId = auth()->user()?->current_team_id;
                abort_unless($teamId !== null, 403);
                app(DeleteMarketingCampaign::class)->handle($record, $teamId);
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
        return ['index' => ListMarketingCampaigns::route('/'), 'create' => CreateMarketingCampaign::route('/create'), 'edit' => EditMarketingCampaign::route('/{record}/edit')];
    }
}
