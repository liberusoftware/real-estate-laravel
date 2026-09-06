<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\Dashboard;
use App\Filament\ModulePlugins;
use App\Http\Middleware\ApplyTeamIntegrationSettings;
use App\Support\ThemeColors;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Navigation\NavigationItem;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
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
            ->sidebarCollapsibleOnDesktop()
            ->discoverResources(in: app_path('Filament/App/Resources'), for: 'App\Filament\App\Resources')
            ->discoverPages(in: app_path('Filament/App/Pages'), for: 'App\Filament\App\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->navigationGroups([
                'Browse & discover',
                'My activity',
                'Account & support',
            ])
            ->navigationItems([
                NavigationItem::make('Browse properties')
                    ->url(fn (): string => route('property.list'))
                    ->icon('heroicon-o-home-modern')
                    ->group('Browse & discover')
                    ->sort(10),
                NavigationItem::make('Search properties')
                    ->url(fn (): string => route('property.search'))
                    ->icon('heroicon-o-magnifying-glass')
                    ->group('Browse & discover')
                    ->sort(20),
                NavigationItem::make('News & updates')
                    ->url(fn (): string => route('news.list'))
                    ->icon('heroicon-o-newspaper')
                    ->group('Browse & discover')
                    ->sort(30),
                NavigationItem::make('Calculators')
                    ->url(fn (): string => route('calculators'))
                    ->icon('heroicon-o-calculator')
                    ->group('Browse & discover')
                    ->sort(40),
                NavigationItem::make('Saved properties')
                    ->url(fn (): string => route('wishlist'))
                    ->icon('heroicon-o-heart')
                    ->group('My activity')
                    ->sort(10),
                NavigationItem::make('Contact support')
                    ->url(fn (): string => route('contact.show'))
                    ->icon('heroicon-o-chat-bubble-left-right')
                    ->group('Account & support')
                    ->sort(30),
                NavigationItem::make('Profile')
                    ->url(fn (): string => route('profile.show'))
                    ->icon('heroicon-o-user-circle')
                    ->group('Account & support')
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
                SecurityHeaders::class,
            ])
            ->plugins(app(ModulePlugins::class)->forPanel('app'))
            ->bootUsing(fn (Panel $panel): null => NavigationGroups::configure($panel))
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
