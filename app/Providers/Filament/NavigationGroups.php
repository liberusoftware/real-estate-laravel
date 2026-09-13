<?php

namespace App\Providers\Filament;

use App\Filament\App\Pages\AccountSetupWizard;
use BezhanSalleh\FilamentShield\Resources\Roles\RoleResource;
use Filament\Panel;
use Liberu\Foundation\ApplicationFilament\Pages\Overview;
use Liberu\Foundation\AuditFilament\Resources\ActivityLogResource;
use Liberu\Foundation\IdentityFilament\Resources\UserResource;
use Liberu\Foundation\ModuleManagerFilament\Pages\FoundationOperations;
use Liberu\Foundation\OrganizationsFilament\Resources\TeamResource;
use Liberu\Foundation\SessionsDevicesFilament\Pages\AccountSecurity;
use Liberu\Foundation\SettingsFilament\Pages\ManageSiteSettings;
use Liberu\RealEstate\CoreFilament\Resources\AgencyResource;
use Liberu\RealEstate\CoreFilament\Resources\BranchResource;
use Liberu\RealEstate\CoreFilament\Resources\StatusDefinitionResource;
use Liberu\RealEstate\CoreFilament\Resources\TerritoryResource;
use Liberu\RealEstate\InstructionsFilament\Resources\InstructionResource;
use Liberu\RealEstate\LettingsFilament\Resources\LettingResource;
use Liberu\RealEstate\LettingsFilament\Resources\RentalApplicationResource;
use Liberu\RealEstate\ListingsFilament\Resources\ListingResource;
use Liberu\RealEstate\MarketingFilament\Resources\MarketingCampaignResource;
use Liberu\RealEstate\MarketingFilament\Resources\NewsArticleResource;
use Liberu\RealEstate\MatchingFilament\Resources\MatchProfileResource;
use Liberu\RealEstate\MediaAndDocumentsFilament\Resources\MediaDocumentResource;
use Liberu\RealEstate\OffersFilament\Resources\OfferResource;
use Liberu\RealEstate\OnTheMarketFilament\Resources\OnTheMarketSyncResource;
use Liberu\RealEstate\PartiesFilament\Resources\PartyResource;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyCategoryResource;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyResource;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertySavedSearchResource;
use Liberu\RealEstate\PropertiesFilament\Resources\PropertyTemplateResource;
use Liberu\RealEstate\PropertyManagementFilament\Resources\InspectionResource;
use Liberu\RealEstate\RightmoveFilament\Resources\RightmoveSyncResource;
use Liberu\RealEstate\SalesProgressionFilament\Resources\SalesProgressionResource;
use Liberu\RealEstate\ValuationsFilament\Resources\ValuationResource;
use Liberu\RealEstate\ViewingsFilament\Resources\ViewingResource;
use Liberu\RealEstate\ZooplaFilament\Resources\ZooplaSyncResource;

final class NavigationGroups
{
    /**
     * Apply the host application's information architecture after all module
     * plugins have registered their pages and resources.
     */
    public static function configure(Panel $panel): void
    {
        foreach (self::groupsFor($panel->getId()) as $group => $classes) {
            foreach ($classes as $sort => $class) {
                if (class_exists($class) && method_exists($class, 'navigationGroup')) {
                    $class::navigationGroup($group);

                    if (method_exists($class, 'navigationSort')) {
                        $class::navigationSort($sort);
                    }
                }
            }
        }
    }

    /**
     * @return array<string, array<int, class-string>>
     */
    private static function groupsFor(string $panel): array
    {
        if ($panel === 'app') {
            return [
                __('filament.nav_groups.account_support') => [
                    10 => AccountSetupWizard::class,
                    20 => AccountSecurity::class,
                ],
            ];
        }

        return [
            __('filament.nav_groups.sales_lettings') => [
                10 => PropertyResource::class,
                20 => ListingResource::class,
                30 => ViewingResource::class,
                40 => OfferResource::class,
                50 => LettingResource::class,
                60 => RentalApplicationResource::class,
                70 => SalesProgressionResource::class,
            ],
            __('filament.nav_groups.people_relationships') => [
                10 => PartyResource::class,
            ],
            __('filament.nav_groups.property_management') => [
                10 => InspectionResource::class,
            ],
            __('filament.nav_groups.marketing_portals') => [
                10 => MarketingCampaignResource::class,
                20 => NewsArticleResource::class,
                40 => RightmoveSyncResource::class,
                50 => ZooplaSyncResource::class,
                60 => OnTheMarketSyncResource::class,
            ],
            __('filament.nav_groups.insights_tools') => [
                10 => MatchProfileResource::class,
                20 => ValuationResource::class,
                30 => PropertySavedSearchResource::class,
            ],
            __('filament.nav_groups.instructions_media') => [
                10 => InstructionResource::class,
                20 => MediaDocumentResource::class,
            ],
            __('filament.nav_groups.organisation') => [
                10 => TeamResource::class,
                20 => UserResource::class,
                30 => RoleResource::class,
            ],
            __('filament.nav_groups.property_configuration') => [
                10 => AgencyResource::class,
                20 => BranchResource::class,
                30 => TerritoryResource::class,
                40 => StatusDefinitionResource::class,
                50 => PropertyCategoryResource::class,
                60 => PropertyTemplateResource::class,
            ],
            __('filament.nav_groups.platform_settings') => [
                10 => ManageSiteSettings::class,
                20 => Overview::class,
                30 => \Liberu\Foundation\LocalizationCoreFilament\Pages\Overview::class,
                40 => \Liberu\Foundation\CurrencyContextFilament\Pages\Overview::class,
                50 => FoundationOperations::class,
            ],
            __('filament.nav_groups.integrations_api') => [
                10 => \Liberu\Foundation\IntegrationsFilament\Pages\Overview::class,
                20 => \Liberu\Foundation\ApiAccessFilament\Pages\Overview::class,
                30 => \Liberu\Foundation\WebhooksFilament\Pages\Overview::class,
                40 => \Liberu\Foundation\AnalyticsCoreFilament\Pages\Overview::class,
                50 => \Liberu\Foundation\AnalyticsGoogleFilament\Pages\Overview::class,
                60 => \Liberu\Foundation\AnalyticsMetaFilament\Pages\Overview::class,
            ],
            __('filament.nav_groups.operations_diagnostics') => [
                10 => \Liberu\Foundation\SchedulerQueuesFilament\Pages\Overview::class,
                20 => \Liberu\Foundation\ObservabilityFilament\Pages\Overview::class,
                30 => \Liberu\Foundation\NotificationsFilament\Pages\Overview::class,
                40 => \Liberu\Foundation\FilesMediaFilament\Pages\Overview::class,
                50 => \Liberu\Foundation\ImportExportFilament\Pages\Overview::class,
                60 => \Liberu\Foundation\DeveloperExperienceFilament\Pages\Overview::class,
                70 => ActivityLogResource::class,
            ],
        ];
    }
}
