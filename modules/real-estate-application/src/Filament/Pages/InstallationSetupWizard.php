<?php

namespace Liberu\RealEstate\Application\Filament\Pages;

use Filament\Facades\Filament;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Wizard\Step;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Liberu\Foundation\Settings\Services\ScopedSettings;
use Liberu\Foundation\Settings\Settings\SiteSettings;
use Liberu\RealEstate\Application\Filament\App\Pages\AccountSetupWizard;
use Liberu\RealEstate\Application\Models\User;
use Liberu\RealEstate\Application\Support\InstallationSettings;

final class InstallationSetupWizard extends AccountSetupWizard
{
    protected static ?string $navigationLabel = 'Installation setup';

    protected static ?string $title = 'Set up your real estate platform';

    protected static string|\UnitEnum|null $navigationGroup = 'Settings';

    protected static ?string $slug = 'installation-setup';

    public static function canAccess(): bool
    {
        $user = auth()->user();

        return $user instanceof User && $user->isSuperAdmin();
    }

    public function mount(): void
    {
        abort_unless(self::canAccess(), 403);
        // The selected admin tenant can differ from the user's default workspace.
        abort_unless($this->team() !== null && auth()->user()->canAccessTenant($this->team()), 403);
        $settings = app(SiteSettings::class);
        $installation = app(ScopedSettings::class)->resolve('platform.installation', ['global' => '0'], []);
        parent::mount();
        $this->data['installation_mode'] = $installation['mode'] ?? 'dedicated';
        $this->data['site_name'] = $settings->site_name;
        $this->data['site_email'] = $settings->site_email;
    }

    protected function setupSteps(): array
    {
        return [
            Step::make('Installation')
                ->description('Configure platform identity and hosting context')
                ->schema([
                    Select::make('installation_mode')->label('Installation type')
                        ->options(['saas' => 'SaaS — multiple workspaces', 'dedicated' => 'Dedicated installation'])
                        ->required()->helperText('Records your hosting context. Workspace data remains isolated in either mode.'),
                    TextInput::make('site_name')->label('Platform name')->required()->maxLength(255),
                    TextInput::make('site_email')->label('Support email')->email()->required()->maxLength(255),
                ]),
            ...parent::setupSteps(),
        ];
    }

    public function save(): void
    {
        abort_unless(self::canAccess(), 403);
        abort_unless($this->team() !== null && auth()->user()->canAccessTenant($this->team()), 403);
        $state = $this->form->getState();

        DB::transaction(function () use ($state): void {
            $settings = app(SiteSettings::class);
            $settings->site_name = $state['site_name'];
            $settings->site_email = $state['site_email'];
            $settings->save();
            app(ScopedSettings::class)->put(new InstallationSettings(), 'global', '0', [
                'mode' => $state['installation_mode'],
                'completed_at' => now()->toIso8601String(),
            ]);
            parent::save();
        });

        $this->redirect(Filament::getPanel('admin')->getUrl($this->team()), navigate: true);
    }

    protected function canManageWorkspace(): bool
    {
        return self::canAccess() && $this->team() !== null
            && auth()->user()->canAccessTenant($this->team());
    }

    protected function team(): ?Model
    {
        return Filament::getTenant() ?? parent::team();
    }

    public static function isComplete(): bool
    {
        return filled(app(ScopedSettings::class)->resolve('platform.installation', ['global' => '0'], [])['completed_at'] ?? null);
    }
}
