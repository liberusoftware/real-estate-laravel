<?php

namespace App\Providers\Filament;

use App\Filament\ModulePlugins;
use App\Filament\Pages\Dashboard;
use App\Http\Middleware\ApplyTeamIntegrationSettings;
use App\Http\Middleware\ConfigureFilamentNavigationGroups;
use App\Support\ThemeColors;
use BezhanSalleh\FilamentShield\Middleware\SyncShieldTenant;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\View\PanelsRenderHook;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\URL;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Liberu\Foundation\ApplicationCore\Http\Middleware\SecurityHeaders;
use Liberu\Foundation\Localization\Http\Middleware\SetLocale;
use Liberu\Foundation\Organizations\Models\Team;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        URL::forceHttps(app()->environment('production'));

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->favicon(asset('favicon.svg'))
            ->brandLogo(asset('favicon.svg'))
            ->brandLogoHeight('2.5rem')
            ->colors(app(ThemeColors::class)->forSite())
            ->renderHook(
                PanelsRenderHook::GLOBAL_SEARCH_AFTER,
                fn (): string => Blade::render(
                    '@livewire(\'language-switcher\', [\'locales\' => $locales])',
                    ['locales' => config('app.supported_locales')],
                ),
            )
            ->renderHook(
                PanelsRenderHook::AUTH_LOGIN_FORM_AFTER,
                fn (): string => view('components.socialstream')->render(),
            )
            ->sidebarCollapsibleOnDesktop()
            ->globalSearch()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            // Labels are deferred (Closures), not eager __() calls: this array is
            // built once at panel registration, before SetLocale middleware has
            // run for the request — an eager translation here would freeze on
            // whatever locale was active at boot. ConfigureFilamentNavigationGroups
            // assigns each resource's group with the same key, evaluated by a
            // middleware placed after SetLocale, so both resolve against the
            // same, correct locale.
            ->navigationGroups([
                NavigationGroup::make(fn (): string => __('filament.nav_groups.sales_lettings')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.people_relationships')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.property_management')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.marketing_portals')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.insights_tools')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.instructions_media')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.organisation')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.property_configuration')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.platform_settings')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.integrations_api')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.operations_diagnostics')),
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
            ->tenant(Team::class, ownershipRelationship: 'team')
            ->tenantMiddleware([
                SyncShieldTenant::class,
            ], isPersistent: true)
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                ApplyTeamIntegrationSettings::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
                SetLocale::class,
                ConfigureFilamentNavigationGroups::class,
                SecurityHeaders::class,
            ])
            ->plugins(app(ModulePlugins::class)->forPanel('admin'))
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
