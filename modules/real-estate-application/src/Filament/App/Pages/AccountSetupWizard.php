<?php

namespace Liberu\RealEstate\Application\Filament\App\Pages;

use Filament\Facades\Filament;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\View;
use Filament\Schemas\Components\Wizard;
use Filament\Schemas\Components\Wizard\Step;
use Filament\Schemas\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\Foundation\Settings\Contracts\SettingDefinition;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\RealEstate\Application\Models\User;
use Liberu\RealEstate\Application\Support\TeamIntegrationSettings;
use Liberu\RealEstate\Core\Models\Branch;
use Livewire\Attributes\Locked;

/**
 * @property-read Schema $form
 */
class AccountSetupWizard extends Page
{
    use InteractsWithForms;

    protected string $view = 'real-estate-application::app.pages.account-setup-wizard';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-sparkles';

    protected static string|\UnitEnum|null $navigationGroup = 'Account';

    protected static ?string $navigationLabel = 'Setup guide';

    protected static ?string $title = 'Get your workspace ready';

    protected static ?string $slug = 'setup';

    #[Locked]
    public ?string $workspaceId = null;

    /** @var array<string, mixed> */
    public array $data = [];

    /** @var array<string, bool> */
    #[Locked]
    public array $configuredIntegrations = [];

    public function mount(): void
    {
        $team = $this->team();
        abort_unless($this->canManageWorkspace(), 403);
        $this->workspaceId = (string) $team->getKey();
        $settings = app(ScopedSettings::class)->resolve(
            'team.integrations',
            ['team' => $team?->getKey()],
            [],
        );

        $this->configuredIntegrations = collect([
            'openai_api_key',
            'walkscore_api_key',
            'rightmove_client_id',
            'rightmove_client_secret',
            'zoopla_certificate',
            'zoopla_key',
            'onthemarket_certificate',
            'onthemarket_key',
            'google_analytics_id',
            'meta_pixel_id',
        ])->mapWithKeys(fn (string $key): array => [$key => filled($settings[$key] ?? null)])->all();

        $this->form->fill([
            'branches' => Branch::query()->forTeam($team?->getKey() ?? 0)->get(['name', 'code', 'email', 'phone'])->toArray(),
            'team_name' => $team?->getAttribute('name'),
            'portal_timeout' => $settings['portal_timeout'] ?? 30,
            'openai_api_key' => '',
            'walkscore_api_key' => '',
            'rightmove_client_id' => '',
            'rightmove_client_secret' => '',
            'zoopla_certificate' => '',
            'zoopla_key' => '',
            'zoopla_key_password' => '',
            'onthemarket_certificate' => '',
            'onthemarket_key' => '',
            'onthemarket_key_password' => '',
            'google_analytics_id' => $settings['google_analytics_id'] ?? '',
            'meta_pixel_id' => $settings['meta_pixel_id'] ?? '',
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->statePath('data')
            ->components([
                Wizard::make($this->setupSteps())->submitAction(view('real-estate-application::app.pages.setup-submit')),
            ]);
    }

    protected function setupSteps(): array
    {
        return [
            Step::make('Workspace')
                ->description('Give your team a clear home')
                ->schema([
                    TextInput::make('team_name')
                        ->label('Workspace name')
                        ->helperText('This is shown to you and your team members.')
                        ->required()
                        ->maxLength(255),
                ]),
            Step::make('Branches')
                ->description('Add the offices your team works from')
                ->schema([
                    Repeater::make('branches')
                        ->helperText('Optional for individual accounts. Codes identify existing branches; removing a row here does not delete an office.')
                        ->schema([
                            TextInput::make('name')->required()->maxLength(255),
                            TextInput::make('code')->required()->maxLength(20)->regex('/^[A-Za-z0-9_-]+$/')->distinct()->helperText('A unique office code, for example LONDON.'),
                            TextInput::make('email')->email()->maxLength(255),
                            TextInput::make('phone')->tel()->maxLength(50),
                        ])->columns(2)->defaultItems(0)->maxItems(50)->addActionLabel('Add branch'),
                ]),
            Step::make('Connections')
                ->description('Add optional service credentials')
                ->schema([
                    TextInput::make('openai_api_key')
                        ->label('OpenAI API key')
                        ->password()
                        ->revealable()
                        ->helperText('Optional. Leave blank to keep an existing key.'),
                    TextInput::make('walkscore_api_key')
                        ->label('Walk Score API key')
                        ->password()
                        ->revealable()
                        ->helperText('Optional. Leave blank to keep an existing key.'),
                    TextInput::make('rightmove_client_id')->label('Rightmove client ID')->helperText('Leave blank to keep the existing credential.'),
                    TextInput::make('rightmove_client_secret')->label('Rightmove client secret')->password()->revealable(),
                    TextInput::make('zoopla_certificate')->label('Zoopla certificate path')->helperText('Use the path available to the application.'),
                    TextInput::make('zoopla_key')->label('Zoopla private key path')->password()->revealable(),
                    TextInput::make('zoopla_key_password')->label('Zoopla key password')->password()->revealable(),
                    TextInput::make('onthemarket_certificate')->label('OnTheMarket certificate path')->helperText('Use the path available to the application.'),
                    TextInput::make('onthemarket_key')->label('OnTheMarket private key path')->password()->revealable(),
                    TextInput::make('onthemarket_key_password')->label('OnTheMarket key password')->password()->revealable(),
                ])
                ->columns(2),
            Step::make('Syncing')
                ->description('Set expectations for portal publishing')
                ->schema([
                    TextInput::make('portal_timeout')->label('Portal request timeout (seconds)')
                        ->numeric()->integer()->minValue(5)->maxValue(120)->required()
                        ->helperText('Applies to Rightmove, Zoopla and OnTheMarket requests for this workspace. Saving setup does not send listings. Start a sync from the portal workspace after checking credentials and branch references.'),
                ]),
            Step::make('Tracking')
                ->description('Connect optional analytics')
                ->schema([
                    TextInput::make('google_analytics_id')
                        ->label('Google Analytics measurement ID')
                        ->placeholder('G-XXXXXXXXXX'),
                    TextInput::make('meta_pixel_id')
                        ->label('Meta Pixel ID'),
                ])
                ->columns(2),
            Step::make('Review')
                ->description('Confirm your setup')
                ->schema([
                    View::make('real-estate-application::app.pages.setup-review'),
                ]),
        ];
    }

    public function save(): void
    {
        $team = $this->team();

        if (! $team instanceof Team) {
            Notification::make()->title('Create a team before continuing.')->warning()->send();

            return;
        }

        if (! $this->canManageWorkspace()) {
            Notification::make()->title('Only the team owner can finish workspace setup.')->warning()->send();

            return;
        }

        abort_unless((string) $team->getKey() === $this->workspaceId, 403);
        $state = $this->form->getState();
        $archivedCodes = Branch::onlyTrashed()->forTeam($team->getKey())
            ->whereIn('code', collect($state['branches'] ?? [])->pluck('code'))->exists();
        if ($archivedCodes) {
            throw ValidationException::withMessages(['data.branches' => 'A branch with this code is archived. Restore it in branch management or choose another code.']);
        }

        DB::transaction(function () use ($team, $state): void {
            $team->update(['name' => $state['team_name']]);
            foreach ($state['branches'] ?? [] as $branch) {
                Branch::query()->updateOrCreate(
                    ['team_id' => $team->getKey(), 'code' => $branch['code']],
                    collect($branch)->only(['name', 'email', 'phone'])->all(),
                );
            }

            $scopedSettings = app(ScopedSettings::class);
            $existing = (array) $scopedSettings->resolve('team.integrations', ['team' => $team->getKey()], []);
            $credentials = collect([
                'portal_timeout' => (int) $state['portal_timeout'],
                'openai_api_key' => $state['openai_api_key'] ?? null,
                'walkscore_api_key' => $state['walkscore_api_key'] ?? null,
                'rightmove_client_id' => $state['rightmove_client_id'] ?? null,
                'rightmove_client_secret' => $state['rightmove_client_secret'] ?? null,
                'zoopla_certificate' => $state['zoopla_certificate'] ?? null,
                'zoopla_key' => $state['zoopla_key'] ?? null,
                'zoopla_key_password' => $state['zoopla_key_password'] ?? null,
                'onthemarket_certificate' => $state['onthemarket_certificate'] ?? null,
                'onthemarket_key' => $state['onthemarket_key'] ?? null,
                'onthemarket_key_password' => $state['onthemarket_key_password'] ?? null,
                'google_analytics_id' => $state['google_analytics_id'] ?? null,
                'meta_pixel_id' => $state['meta_pixel_id'] ?? null,
            ])->filter(fn (mixed $value): bool => filled($value))->all();

            $scopedSettings->put(
                new TeamIntegrationSettings(),
                'team',
                (string) $team->getKey(),
                [...$existing, ...$credentials],
            );

            $scopedSettings->put(
                new class() implements SettingDefinition
                {
                    public function key(): string
                    {
                        return 'team.setup_completed';
                    }

                    public function validate(mixed $value): bool
                    {
                        return is_bool($value);
                    }

                    public function secret(): bool
                    {
                        return false;
                    }
                },
                'team',
                (string) $team->getKey(),
                true,
            );

        });

        Notification::make()->title('Workspace setup saved')->success()->send();
        $this->redirect(Filament::getPanel('app')->getUrl(), navigate: true);
    }

    protected function canManageWorkspace(): bool
    {
        $team = $this->team();

        return $team !== null && (int) $team->user_id === (int) auth()->id();
    }

    /** @return Team|null */
    protected function team(): ?Model
    {
        $user = auth()->user();

        return $user instanceof User ? $user->latestTeam : null;
    }

    /** @return array<string, bool> */
    public function connectionReadiness(): array
    {
        $requirements = [
            'OpenAI' => ['openai_api_key'],
            'Walk Score' => ['walkscore_api_key'],
            'Rightmove' => ['rightmove_client_id', 'rightmove_client_secret'],
            'Zoopla' => ['zoopla_certificate', 'zoopla_key'],
            'OnTheMarket' => ['onthemarket_certificate', 'onthemarket_key'],
            'Google Analytics' => ['google_analytics_id'],
            'Meta Pixel' => ['meta_pixel_id'],
        ];

        return collect($requirements)->map(fn (array $keys): bool => collect($keys)->every(
            fn (string $key): bool => $this->configuredIntegrations[$key] ?? false,
        ))->all();
    }

    /** @return array<string, bool> */
    public function oauthProviders(): array
    {
        return collect([
            'GitHub' => config('services.github.client_id'),
            'Google' => config('services.google.client_id'),
            'Facebook' => config('services.facebook.client_id'),
            'X / Twitter' => config('services.twitter-oauth-2.client_id'),
        ])->map(fn (mixed $clientId): bool => filled($clientId))->all();
    }

    public static function canAccess(): bool
    {
        $user = auth()->user();

        return $user instanceof User && $user->latestTeam !== null
            && (int) $user->latestTeam->user_id === (int) $user->getKey();
    }

    public static function getNavigationBadge(): ?string
    {
        return static::isComplete() ? null : 'Start';
    }

    public static function getNavigationBadgeColor(): string
    {
        return 'warning';
    }

    public static function isComplete(): bool
    {
        $user = auth()->user();
        $team = $user instanceof User ? $user->latestTeam : null;

        return $team !== null && (bool) app(ScopedSettings::class)->resolve(
            'team.setup_completed',
            ['team' => $team->getKey()],
            false,
        );
    }
}
