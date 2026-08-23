<?php

declare(strict_types=1);

namespace Liberu\RealEstate\LettingsFilament\Resources;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
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

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-home-modern';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([TextInput::make('subject')->required()->maxLength(255), Select::make('capability')->options(collect(LettingCapability::cases())->mapWithKeys(fn ($c) => [$c->value => str($c->value)->replace('_', ' ')->title()])->all())->required(), Select::make('status')->options(['draft' => 'Draft', 'in_progress' => 'In progress', 'completed' => 'Completed', 'cancelled' => 'Cancelled'])->required(), Textarea::make('failure_reason')->maxLength(2000)->columnSpanFull()]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([TextColumn::make('subject')->searchable(), TextColumn::make('capability')->badge(), TextColumn::make('status')->badge(), TextColumn::make('created_at')->dateTime()->sortable()])->defaultSort('created_at', 'desc');
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
