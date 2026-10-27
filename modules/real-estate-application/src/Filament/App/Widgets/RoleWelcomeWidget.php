<?php

namespace Liberu\RealEstate\Application\Filament\App\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\Widget;
use Liberu\RealEstate\Application\Models\User;

final class RoleWelcomeWidget extends Widget
{
    protected string $view = 'real-estate-application::app.widgets.role-welcome';

    protected int|string|array $columnSpan = 'full';

    public function role(): string
    {
        $user = auth()->user();

        return $user instanceof User ? $user->dashboardRole() : 'buyer';
    }

    public function roleLabel(): string
    {
        return str($this->role())->headline()->toString();
    }

    /** @return array<int, array{label: string, description: string, url: string, icon: string}> */
    public function quickLinks(): array
    {
        $links = [
            ['label' => 'Browse properties', 'description' => 'Explore homes and opportunities.', 'url' => route('property.list'), 'icon' => 'heroicon-o-home-modern'],
            ['label' => 'Search properties', 'description' => 'Find a property by your criteria.', 'url' => route('property.search'), 'icon' => 'heroicon-o-magnifying-glass'],
            ['label' => 'Calculators', 'description' => 'Estimate costs and affordability.', 'url' => route('calculators'), 'icon' => 'heroicon-o-calculator'],
        ];

        if (in_array($this->role(), ['staff', 'admin', 'super_admin'], true)) {
            $user = auth()->user();
            $adminUrl = $user instanceof User && $user->latestTeam !== null
                ? Filament::getPanel('admin')->getUrl($user->latestTeam)
                : Filament::getPanel('admin')->getUrl();

            $links[] = ['label' => 'Open admin workspace', 'description' => 'Manage properties and workflows.', 'url' => $adminUrl, 'icon' => 'heroicon-o-squares-2x2'];
        }

        return $links;
    }
}
