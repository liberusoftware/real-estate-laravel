<?php

declare(strict_types=1);

namespace Liberu\RealEstate\MatchingFilament\Resources;

use Filament\Actions\Action;
use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Matching\Application\CalculateMatchScore;
use Liberu\RealEstate\Matching\Application\RankPropertyRecommendations;
use Liberu\RealEstate\Matching\Models\MatchProfile;
use Liberu\RealEstate\MatchingFilament\Resources\MatchProfileResource\Pages\CreateMatchProfile;
use Liberu\RealEstate\MatchingFilament\Resources\MatchProfileResource\Pages\EditMatchProfile;
use Liberu\RealEstate\MatchingFilament\Resources\MatchProfileResource\Pages\ListMatchProfiles;

final class MatchProfileResource extends Resource
{
    protected static ?string $model = MatchProfile::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.match_profile.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.match_profile.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static string|\UnitEnum|null $navigationGroup = 'Real Estate';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.match_profile.sections.basic'))
                ->columns(3)
                ->schema([
                    TextInput::make('subject')->label(__('filament.match_profile.fields.subject'))->required()->maxLength(255),
                    TextInput::make('score')->label(__('filament.match_profile.fields.score'))->numeric()->minValue(0)->maxValue(100),
                    TextInput::make('party_id')->label(__('filament.match_profile.fields.party_id'))->numeric(),
                ]),
            Section::make(__('filament.match_profile.sections.criteria'))
                ->description(__('filament.match_profile.sections.criteria_description'))
                ->schema([
                    Textarea::make('requirements')->label(__('filament.match_profile.fields.requirements'))->json()->columnSpanFull(),
                    Textarea::make('affordability')->label(__('filament.match_profile.fields.affordability'))->json()->columnSpanFull(),
                    Textarea::make('preferences')->label(__('filament.match_profile.fields.preferences'))->json()->columnSpanFull(),
                    Textarea::make('exclusions')->label(__('filament.match_profile.fields.exclusions'))->json()->columnSpanFull(),
                ]),
            Section::make(__('filament.match_profile.sections.tracking'))
                ->schema([
                    Textarea::make('alerts')->label(__('filament.match_profile.fields.alerts'))->json()->columnSpanFull(),
                    Textarea::make('feedback')->label(__('filament.match_profile.fields.feedback'))->json()->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.match_profile.fields.subject'))->searchable(), TextColumn::make('score')->label(__('filament.match_profile.fields.score'))->sortable(), TextColumn::make('created_at')->label(__('filament.match_profile.fields.created_at'))->dateTime()->sortable()])->recordActions([
            EditAction::make(),
            Action::make('calculate_score')->form([Textarea::make('criteria')->json()->required(), Textarea::make('property')->json()->required()])->action(fn (MatchProfile $record, array $data): MatchProfile => tap($record, function (MatchProfile $record) use ($data): void {
                $score = app(CalculateMatchScore::class)->handle($data['criteria'], $data['property']);
                $record->forceFill(['score' => (int) round($score['match_score'])])->save();
            })),
            Action::make('recommend_properties')
                ->label('Recommend properties')
                ->form([Textarea::make('criteria')->json()->required(), Textarea::make('properties')->json()->required(), TextInput::make('limit')->numeric()->minValue(1)->maxValue(100)->default(6)])
                ->action(function (array $data): void {
                    $recommendations = app(RankPropertyRecommendations::class)->handle($data['criteria'], $data['properties'], (int) $data['limit']);
                    Notification::make()->title(count($recommendations).' properties recommended')->success()->send();
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
        return ['index' => ListMatchProfiles::route('/'), 'create' => CreateMatchProfile::route('/create'), 'edit' => EditMatchProfile::route('/{record}/edit')];
    }
}
