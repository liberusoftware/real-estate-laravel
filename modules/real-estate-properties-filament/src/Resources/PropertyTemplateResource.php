<?php

declare(strict_types=1);

namespace Liberu\RealEstate\PropertiesFilament\Resources;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Properties\Models\PropertyTemplate;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyTemplateResource\Pages\CreatePropertyTemplate;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyTemplateResource\Pages\EditPropertyTemplate;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyTemplateResource\Pages\ListPropertyTemplates;

final class PropertyTemplateResource extends Resource
{
    protected static ?string $model = PropertyTemplate::class;

    protected static ?string $modelLabel = 'Шаблон объекта';

    protected static ?string $pluralModelLabel = 'Шаблоны объектов';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required()->maxLength(120),
            Textarea::make('content')->required()->maxLength(100000)->rows(12)->helperText('Use placeholders such as {title}, {description}, {price}, and {address}.'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->modifyQueryUsing(function (Builder $query): Builder {
            $teamId = auth()->user()?->current_team_id;

            return $teamId === null ? $query->whereRaw('1 = 0') : $query->forTeam($teamId);
        })->columns([
            TextColumn::make('name')->searchable()->sortable(),
            TextColumn::make('created_at')->dateTime()->sortable(),
        ]);
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

    public static function getPages(): array
    {
        return [
            'index' => ListPropertyTemplates::route('/'),
            'create' => CreatePropertyTemplate::route('/create'),
            'edit' => EditPropertyTemplate::route('/{record}/edit'),
        ];
    }
}
