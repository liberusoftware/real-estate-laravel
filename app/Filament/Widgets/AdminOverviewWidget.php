<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Liberu\Foundation\Organizations\Models\Team;
use Liberu\RealEstate\Lettings\Models\RentalApplication;
use Liberu\RealEstate\Properties\Models\Property;
use Liberu\RealEstate\PropertyManagement\Models\MaintenanceRequest;
use Liberu\RealEstate\Viewings\Models\Viewing;

final class AdminOverviewWidget extends StatsOverviewWidget
{
    protected function getHeading(): string
    {
        return __('filament.admin_overview.heading');
    }

    protected function getStats(): array
    {
        $teamId = auth()->user()?->current_team_id;

        if ($teamId === null) {
            return [];
        }

        return [
            Stat::make(__('filament.admin_overview.team_members'), User::query()->whereHas('teams', fn ($query) => $query->whereKey($teamId))->count())->icon('heroicon-o-user-group')->color('primary'),
            Stat::make(__('filament.admin_overview.properties'), Property::query()->where('team_id', $teamId)->count())->icon('heroicon-o-building-office-2')->color('success'),
            Stat::make(__('filament.admin_overview.pending_applications'), RentalApplication::query()->where('team_id', $teamId)->whereIn('status', ['submitted', 'under_review'])->count())->icon('heroicon-o-document-text')->color('warning'),
            Stat::make(__('filament.admin_overview.open_maintenance'), MaintenanceRequest::query()->where('team_id', $teamId)->whereNotIn('status', ['completed', 'cancelled'])->count())->icon('heroicon-o-wrench-screwdriver')->color('danger'),
            Stat::make(__('filament.admin_overview.upcoming_viewings'), Viewing::query()->where('team_id', $teamId)->where('starts_at', '>=', now())->count())->icon('heroicon-o-calendar-days')->color('info'),
            Stat::make(__('filament.admin_overview.workspaces'), Team::query()->whereKey($teamId)->count())->icon('heroicon-o-squares-2x2')->color('gray'),
        ];
    }
}
