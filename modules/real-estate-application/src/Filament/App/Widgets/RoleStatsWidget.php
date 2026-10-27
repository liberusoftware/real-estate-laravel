<?php

namespace Liberu\RealEstate\Application\Filament\App\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Liberu\RealEstate\Application\Models\User;
use Liberu\RealEstate\Lettings\Models\LeaseAgreement;
use Liberu\RealEstate\Lettings\Models\Letting;
use Liberu\RealEstate\Lettings\Models\RentalApplication;
use Liberu\RealEstate\Listings\Models\Listing;
use Liberu\RealEstate\Offers\Models\Offer;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\Properties\Models\PropertyFavorite;
use Liberu\RealEstate\Properties\Models\PropertySavedSearch;
use Liberu\RealEstate\PropertyManagement\Models\Inspection;
use Liberu\RealEstate\PropertyManagement\Models\MaintenanceRequest;
use Liberu\RealEstate\PropertyManagement\Models\WorkOrder;
use Liberu\RealEstate\Viewings\Models\Viewing;

final class RoleStatsWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        $user = auth()->user();

        if (! $user instanceof User || $user->current_team_id === null) {
            return [];
        }

        $teamId = $user->current_team_id;

        return match ($user->dashboardRole()) {
            'seller' => [
                Stat::make('My properties', Property::query()->where('team_id', $teamId)->count())->icon('heroicon-o-building-office-2')->color('primary'),
                Stat::make('Listings', Listing::query()->where('team_id', $teamId)->count())->icon('heroicon-o-megaphone')->color('success'),
                Stat::make('Offers received', Offer::query()->where('team_id', $teamId)->count())->icon('heroicon-o-banknotes')->color('warning'),
            ],
            'landlord' => [
                Stat::make('Managed lettings', Letting::query()->where('team_id', $teamId)->count())->icon('heroicon-o-home-modern')->color('primary'),
                Stat::make('Open maintenance', MaintenanceRequest::query()->where('team_id', $teamId)->whereNotIn('status', ['completed', 'cancelled'])->count())->icon('heroicon-o-wrench-screwdriver')->color('warning'),
                Stat::make('Inspections', Inspection::query()->where('team_id', $teamId)->count())->icon('heroicon-o-clipboard-document-check')->color('success'),
            ],
            'tenant' => [
                Stat::make('Applications', RentalApplication::query()->where('team_id', $teamId)->count())->icon('heroicon-o-document-text')->color('primary'),
                Stat::make('Lease agreements', LeaseAgreement::query()->where('team_id', $teamId)->count())->icon('heroicon-o-document-check')->color('success'),
                Stat::make('Open requests', MaintenanceRequest::query()->where('team_id', $teamId)->whereNotIn('status', ['completed', 'cancelled'])->count())->icon('heroicon-o-wrench-screwdriver')->color('warning'),
            ],
            'contractor' => [
                Stat::make('Assigned work', WorkOrder::query()->where('team_id', $teamId)->where('assigned_to', $user->id)->count())->icon('heroicon-o-clipboard-document-list')->color('primary'),
                Stat::make('Scheduled work', WorkOrder::query()->where('team_id', $teamId)->where('assigned_to', $user->id)->where('status', 'scheduled')->count())->icon('heroicon-o-calendar-days')->color('success'),
                Stat::make('Open requests', MaintenanceRequest::query()->where('team_id', $teamId)->whereNotIn('status', ['completed', 'cancelled'])->count())->icon('heroicon-o-wrench-screwdriver')->color('warning'),
            ],
            'staff', 'admin', 'super_admin' => [
                Stat::make('Properties', Property::query()->where('team_id', $teamId)->count())->icon('heroicon-o-building-office-2')->color('primary'),
                Stat::make('Pending applications', RentalApplication::query()->where('team_id', $teamId)->whereIn('status', ['submitted', 'under_review'])->count())->icon('heroicon-o-document-text')->color('warning'),
                Stat::make('Upcoming viewings', Viewing::query()->where('team_id', $teamId)->where('starts_at', '>=', now())->count())->icon('heroicon-o-calendar-days')->color('success'),
            ],
            default => [
                Stat::make('Saved properties', PropertyFavorite::query()->where('team_id', $teamId)->where('user_id', $user->id)->count())->icon('heroicon-o-heart')->color('primary'),
                Stat::make('Saved searches', PropertySavedSearch::query()->where('team_id', $teamId)->where('user_id', $user->id)->count())->icon('heroicon-o-bookmark')->color('success'),
                Stat::make('Available properties', Property::query()->where('team_id', $teamId)->where('status', 'available')->count())->icon('heroicon-o-home-modern')->color('warning'),
            ],
        };
    }
}
