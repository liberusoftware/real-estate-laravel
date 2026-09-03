<?php

namespace App\Providers\Filament;

use App\Filament\ModulePlugins;
use App\Filament\Pages\Dashboard;
use App\Http\Middleware\ApplyTeamIntegrationSettings;
use App\Support\ThemeColors;
use BezhanSalleh\FilamentShield\Middleware\SyncShieldTenant;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Support\Facades\URL;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Liberu\Foundation\ApplicationCore\Http\Middleware\SecurityHeaders;
use Liberu\Foundation\Localization\Http\Middleware\SetLocale;
use Liberu\Foundation\Organizations\Models\Team;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        URL::forceScheme('https');

        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->favicon(asset('favicon.svg'))
            ->colors(app(ThemeColors::class)->forSite())
            ->sidebarCollapsibleOnDesktop()
            ->globalSearch()
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->navigationGroups([
                'Sales & lettings',
                'People & relationships',
                'Property management',
                'Marketing & portals',
                'Insights & tools',
                'Instructions & media',
                'Organisation',
                'Property configuration',
                'Platform settings',
                'Integrations & API',
                'Operations & diagnostics',
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
                SecurityHeaders::class,
            ])
            ->plugins(app(ModulePlugins::class)->forPanel('admin'))
            ->bootUsing(fn (Panel $panel): null => NavigationGroups::configure($panel))
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
