<?php

declare(strict_types=1);

namespace Liberu\RealEstate\CoreFilament\Resources;

use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\RealEstate\Core\Models\Branch;
use Liberu\RealEstate\CoreFilament\Resources\BranchResource\Pages\CreateBranch;
use Liberu\RealEstate\CoreFilament\Resources\BranchResource\Pages\EditBranch;
use Liberu\RealEstate\CoreFilament\Resources\BranchResource\Pages\ListBranches;

final class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.branch.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.branch.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-building-office';

    protected static string|\UnitEnum|null $navigationGroup = 'Недвижимость';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make(__('filament.branch_form.sections.details'))
                ->description(__('filament.branch_form.sections.details_description'))
                ->columns(2)
                ->schema([
                    TextInput::make('name')->label(__('filament.branch_form.fields.name'))->required()->maxLength(255),
                    TextInput::make('code')->label(__('filament.branch_form.fields.code'))->required()->maxLength(20)->dehydrateStateUsing(fn (?string $state): ?string => $state !== null ? mb_strtoupper($state) : null),
                    TextInput::make('email')->label(__('filament.branch_form.fields.email'))->email(),
                    TextInput::make('phone')->label(__('filament.branch_form.fields.phone'))->maxLength(50),
                ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('filament.branch_form.fields.name'))->searchable(),
                TextColumn::make('code')->label(__('filament.branch_form.fields.code'))->badge(),
                TextColumn::make('email')->label(__('filament.branch_form.fields.email'))->searchable(),
                TextColumn::make('created_at')->label(__('filament.branch_form.fields.created_at'))->dateTime()->sortable(),
            ])
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

    public static function getPages(): array
    {
        return [
            'index' => ListBranches::route('/'),
            'create' => CreateBranch::route('/create'),
            'edit' => EditBranch::route('/{record}/edit'),
        ];
    }
}
