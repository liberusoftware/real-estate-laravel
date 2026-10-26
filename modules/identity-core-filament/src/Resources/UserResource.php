<?php

namespace Liberu\Foundation\IdentityFilament\Resources;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\PageRegistration;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Liberu\Foundation\FilamentClusters\Clusters\UsersCluster;
use Liberu\Foundation\IdentityFilament\Resources\UserResource\Pages\CreateUser;
use Liberu\Foundation\IdentityFilament\Resources\UserResource\Pages\EditUser;
use Liberu\Foundation\IdentityFilament\Resources\UserResource\Pages\ListUsers;

class UserResource extends Resource
{
    protected static ?string $cluster = UsersCluster::class;

    public static function getModel(): string
    {
        return config('auth.providers.users.model');
    }

    public static function getModelLabel(): string
    {
        return __('filament.resources.user.singular');
    }

    public static function getPluralModelLabel(): string
    {
        return __('filament.resources.user.plural');
    }

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-user-group';

    protected static string|\UnitEnum|null $navigationGroup = 'Администрирование';

    protected static ?string $navigationLabel = 'Пользователи';

    protected static ?string $recordTitleAttribute = 'name';

    /**
     * User's tenancy is owned + member teams (no single team() belongsTo),
     * so the tenant panel can't scope the resource query to one team.
     */
    public static function isScopedToTenant(): bool
    {
        return false;
    }

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make(__('filament.user_form.sections.profile'))
                    ->description(__('filament.user_form.sections.profile_description'))
                    ->columns(2)
                    ->schema([
                        FileUpload::make('profile_photo_path')
                            ->label(__('filament.user_form.fields.profile_photo_path'))
                            ->avatar()
                            ->imageEditor()
                            // Matches Jetstream's own HasProfilePhoto::updateProfilePhoto()
                            // disk/directory, so photos uploaded here and from the user's
                            // own profile page land in — and are servable from — the same place.
                            ->disk('public')
                            ->directory('profile-photos')
                            ->visibility('public')
                            ->columnSpanFull(),
                        TextInput::make('name')
                            ->label(__('filament.user_form.fields.name'))
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label(__('filament.user_form.fields.email'))
                            ->email()
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        TextInput::make('password')
                            ->label(__('filament.user_form.fields.password'))
                            ->password()
                            ->dehydrateStateUsing(fn (string $state) => Hash::make($state))
                            ->dehydrated(fn (?string $state) => filled($state))
                            ->required(fn (string $operation) => $operation === 'create')
                            ->maxLength(255)
                            ->helperText('Leave blank to keep the current password.'),
                        DateTimePicker::make('email_verified_at')
                            ->label(__('filament.user_form.fields.email_verified_at')),
                    ]),
                Section::make(__('filament.user_form.sections.localization'))
                    ->description(__('filament.user_form.sections.localization_description'))
                    ->columns(3)
                    ->schema([
                        Select::make('locale')
                            ->label(__('filament.user_form.fields.locale'))
                            ->options((array) config('app.supported_locales', []))
                            ->native(false),
                        TextInput::make('timezone')
                            ->label(__('filament.user_form.fields.timezone'))
                            ->datalist(timezone_identifiers_list())
                            ->maxLength(255),
                        TextInput::make('theme_preference')
                            ->label(__('filament.user_form.fields.theme_preference'))
                            ->maxLength(255)
                            ->helperText('Theme package name, e.g. "default", "dark", "clear-signal".'),
                    ]),
                Section::make(__('filament.user_form.sections.roles'))
                    ->description(__('filament.user_form.sections.roles_description'))
                    ->schema([
                        Select::make('roles')
                            ->label(__('filament.user_form.fields.roles'))
                            ->relationship('roles', 'name')
                            ->multiple()
                            ->preload()
                            ->searchable()
                            // Only an existing super_admin may grant (or keep) the
                            // super_admin role — otherwise a user holding any other
                            // role with Update:User permission could promote
                            // themselves via this very field. disableOptionWhen()
                            // isn't just a UI hint: Select::getInValidationRuleValues()
                            // turns it into a server-side `in:` rule, so a tampered
                            // request submitting the disabled value still fails
                            // validation before saveRelationshipsUsing() ever runs.
                            ->disableOptionWhen(fn (string $label): bool => $label === config('filament-shield.super_admin.name', 'super_admin')
                                && ! (Auth::user()?->isSuperAdmin() ?? false))
                            // Filament's default relationship sync is a plain
                            // BelongsToMany::sync() call, which doesn't know to fill
                            // model_has_roles.team_id — Spatie only injects that
                            // pivot value inside its own assignRole()/syncRoles()
                            // helpers (see HasRoles::assignRole()). Route the save
                            // through those instead, or every save 500s with
                            // "Field 'team_id' doesn't have a default value".
                            ->saveRelationshipsUsing(function (Select $component, Model $record): void {
                                $record->syncRoles($component->getState() ?? []);
                            }),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label(__('filament.user_form.fields.name'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label(__('filament.user_form.fields.email'))
                    ->searchable()
                    ->sortable(),
                TextColumn::make('roles.name')
                    ->label(__('filament.user_form.fields.roles'))
                    ->badge(),
                IconColumn::make('email_verified_at')
                    ->label(__('filament.user_form.fields.email_verified_at'))
                    ->boolean()
                    ->getStateUsing(fn (Model $record): bool => $record->email_verified_at !== null),
                TextColumn::make('created_at')
                    ->label(__('filament.user_form.fields.created_at'))
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
            'index' => ListUsers::route('/'),
            'create' => CreateUser::route('/create'),
            'edit' => EditUser::route('/{record}/edit'),
        ];
    }
}
