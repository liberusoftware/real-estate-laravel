<?php

namespace Liberu\Foundation\OrganizationsFilament\Resources;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Liberu\Foundation\FilamentClusters\Clusters\UsersCluster;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\OrganizationsFilament\Resources\TeamResource\Pages\CreateTeam;
use Liberu\Foundation\OrganizationsFilament\Resources\TeamResource\Pages\EditTeam;
use Liberu\Foundation\OrganizationsFilament\Resources\TeamResource\Pages\ListTeams;

class TeamResource extends Resource
{
    protected static ?string $cluster = UsersCluster::class;

    protected static ?string $model = Team::class;

    public static function getModelLabel(): string
    {
        return __('filament.resources.team.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.team.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static string|\UnitEnum|null $navigationGroup = 'Администрирование';

    protected static ?string $navigationLabel = 'Команды';

    protected static ?string $recordTitleAttribute = 'name';

    /**
     * Team is the tenant model itself — it has no team() relation to scope by.
     */
    public static function isScopedToTenant(): bool
    {
        return false;
    }

    /**
     * isScopedToTenant() being false only opts this resource OUT of
     * Filament's automatic "current tenant" scope — it does not, by itself,
     * limit the list to teams the user actually belongs to. Without this,
     * any admin/staff user (not just super_admin) could list, edit and
     * delete every team in the system, not just their own — team_user
     * membership is Jetstream's real ownership boundary here, so it's what
     * this query enforces. super_admin bypasses it, matching every other
     * resource's super_admin-sees-everything behaviour.
     */
    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        if ($user?->isSuperAdmin()) {
            return parent::getEloquentQuery();
        }

        return parent::getEloquentQuery()->whereIn('id', $user?->allTeams()->pluck('id') ?? []);
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('filament.team_form.sections.details'))
                    ->description(__('filament.team_form.sections.details_description'))
                    ->columns(2)
                    ->schema([
                        TextInput::make('name')
                            ->label(__('filament.team_form.fields.name'))
                            ->required()
                            ->maxLength(255),
                        Select::make('user_id')
                            ->label(__('filament.team_form.fields.user_id'))
                            ->relationship('owner', 'name')
                            ->required()
                            ->searchable()
                            ->preload(),
                        Toggle::make('personal_team')
                            ->label(__('filament.team_form.fields.personal_team')),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.team_form.fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('owner.name')
                    ->label(__('filament.team_form.fields.user_id'))
                    ->searchable()
                    ->sortable(),
                IconColumn::make('personal_team')
                    ->label(__('filament.team_form.fields.personal_team'))
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label(__('filament.team_form.fields.created_at'))
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
    }

    /**
     * @return array<string, PageRegistration>
     */
    public static function getPages(): array
    {
        return [
            'index' => ListTeams::route('/'),
            'create' => CreateTeam::route('/create'),
            'edit' => EditTeam::route('/{record}/edit'),
        ];
    }
}
