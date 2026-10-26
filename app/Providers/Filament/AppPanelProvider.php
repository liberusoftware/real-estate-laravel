<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\Dashboard;
use App\Filament\ModulePlugins;
use App\Http\Middleware\ApplyTeamIntegrationSettings;
use App\Http\Middleware\ConfigureFilamentNavigationGroups;
use App\Support\ThemeColors;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
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
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Liberu\Foundation\ApplicationCore\Http\Middleware\SecurityHeaders;
use Liberu\Foundation\Localization\Http\Middleware\SetLocale;

class AppPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('app')
            ->path('app')
            ->favicon(asset('favicon.svg'))
            ->colors(app(ThemeColors::class)->forSite())
            ->renderHook(PanelsRenderHook::GLOBAL_SEARCH_AFTER, fn (): string => Blade::render('@livewire(\'language-switcher\')'))
            ->sidebarCollapsibleOnDesktop()
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\Filament\App\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\Filament\App\Pages')
            ->pages([
                Dashboard::class,
            ])
            // Closures throughout (labels and groups): this array is built once
            // at panel registration, before SetLocale middleware runs for the
            // request — eager __() calls here would freeze on whatever locale
            // was active at boot instead of the visitor's actual locale.
            ->navigationGroups([
                NavigationGroup::make(fn (): string => __('filament.nav_groups.browse_discover')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.my_activity')),
                NavigationGroup::make(fn (): string => __('filament.nav_groups.account_support')),
            ])
            ->navigationItems([
                NavigationItem::make(fn (): string => __('filament.app_nav.browse_properties'))
                    ->url(fn (): string => route('property.list'))
                    ->icon('heroicon-o-home-modern')
                    ->group(fn (): string => __('filament.nav_groups.browse_discover'))
                    ->sort(10),
                NavigationItem::make(fn (): string => __('filament.app_nav.search_properties'))
                    ->url(fn (): string => route('property.search'))
                    ->icon('heroicon-o-magnifying-glass')
                    ->group(fn (): string => __('filament.nav_groups.browse_discover'))
                    ->sort(20),
                NavigationItem::make(fn (): string => __('filament.app_nav.news_updates'))
                    ->url(fn (): string => route('news.list'))
                    ->icon('heroicon-o-newspaper')
                    ->group(fn (): string => __('filament.nav_groups.browse_discover'))
                    ->sort(30),
                NavigationItem::make(fn (): string => __('filament.app_nav.calculators'))
                    ->url(fn (): string => route('calculators'))
                    ->icon('heroicon-o-calculator')
                    ->group(fn (): string => __('filament.nav_groups.browse_discover'))
                    ->sort(40),
                NavigationItem::make(fn (): string => __('filament.app_nav.saved_properties'))
                    ->url(fn (): string => route('wishlist'))
                    ->icon('heroicon-o-heart')
                    ->group(fn (): string => __('filament.nav_groups.my_activity'))
                    ->sort(10),
                NavigationItem::make(fn (): string => __('filament.app_nav.contact_support'))
                    ->url(fn (): string => route('contact.show'))
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->group(fn (): string => __('filament.nav_groups.account_support'))
                    ->sort(30),
                NavigationItem::make(fn (): string => __('filament.app_nav.profile'))
                    ->url(fn (): string => route('profile.show'))
                    ->icon('heroicon-o-user-circle')
                    ->group(fn (): string => __('filament.nav_groups.account_support'))
                    ->sort(40),
            ])
            ->discoverWidgets(in: app_path('Filament/App/Widgets'), for: 'App\Filament\App\Widgets')
            ->widgets([
                AccountWidget::class,
                FilamentInfoWidget::class,
            ])
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
            ->plugins(app(ModulePlugins::class)->forPanel('app'))
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
