<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Lettings\Domain\LettingCapability;
use Liberu\RealEstate\Lettings\Models\Letting;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource\Pages\CreateLetting;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource\Pages\EditLetting;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource\Pages\ListLettings;

final class LettingResource extends Resource
{
    protected static ?string $model = Letting::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.letting.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.letting.plural');
    }

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.letting.sections.basic'))
                ->description(__('filament.letting.sections.basic_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('subject')->label(__('filament.letting.fields.subject'))->required()->maxLength(255)->columnSpanFull(),
                    Select::make('capability')->label(__('filament.letting.fields.capability'))->options(collect(LettingCapability::cases())->mapWithKeys(fn ($c) => [$c->value => __('filament.letting.capabilities.'.$c->value)])->all())->required(),
                    Select::make('status')->label(__('filament.letting.fields.status'))->options(['draft' => __('filament.letting.statuses.draft'), 'in_progress' => __('filament.letting.statuses.in_progress'), 'completed' => __('filament.letting.statuses.completed'), 'cancelled' => __('filament.letting.statuses.cancelled')])->required(),
                ]),
            Section::make(__('filament.letting.sections.details'))
                ->description(__('filament.letting.sections.details_description'))
                ->schema([
                    Textarea::make('failure_reason')->label(__('filament.letting.fields.failure_reason'))->maxLength(2000)->columnSpanFull(),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->label(__('filament.letting.fields.subject'))->searchable(), TextColumn::make('capability')->label(__('filament.letting.fields.capability'))->badge(), TextColumn::make('status')->label(__('filament.letting.fields.status'))->badge(), TextColumn::make('created_at')->label(__('filament.letting.fields.created_at'))->dateTime()->sortable()])->defaultSort('created_at', 'desc');
    }

    public static function getEloquentQuery(): Builder
    {
        $team = auth()->user()?->current_team_id;

        return parent::getEloquentQuery()->when($team === null, fn (Builder $q) => $q->whereRaw('1=0'), fn (Builder $q) => $q->forTeam($team));
    }

    public static function getPages(): array
    {
        return ['index' => ListLettings::route('/'), 'create' => CreateLetting::route('/create'), 'edit' => EditLetting::route('/{record}/edit')];
    }
}
