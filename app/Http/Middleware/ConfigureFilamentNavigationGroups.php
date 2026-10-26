<?php

namespace App\Http\Middleware;

use App\Providers\Filament\NavigationGroups;
use Closure;
use Filament\Facades\Filament;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Assigns each resource/page's navigation group and sort order for the
 * current request. Was previously done via ->bootUsing() on the panel, but
 * that callback fires before this middleware group runs — before SetLocale
 * has resolved the visitor's locale — so any __() call inside the group
 * labels froze on whatever locale was active at panel boot instead of the
 * visitor's actual one. Placed after SetLocale so both this assignment and
 * the labels registered via ->navigationGroups() (also deferred, via
 * NavigationGroup::make(Closure)) resolve against the same, correct locale.
 */
final class ConfigureFilamentNavigationGroups
{
    public function handle(Request $request, Closure $next): Response
    {
        if (($panel = Filament::getCurrentPanel()) !== null) {
            NavigationGroups::configure($panel);
        }

        return $next($request);
    }
}
