<?php

namespace Liberu\RealEstate\Application\Providers\Filament;

use BezhanSalleh\FilamentShield\Resources\Roles\RoleResource;
use Filament\Panel;
use Liberu\RealEstate\Application\Filament\App\Pages\AccountSetupWizard;

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
                    20 => 'Liberu\\Foundation\\SessionsDevicesFilament\\Pages\\AccountSecurity',
                ],
            ];
        }

        return [
            __('filament.nav_groups.sales_lettings') => [
                10 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\PropertyResource',
                20 => 'Liberu\\RealEstate\\ListingsFilament\\Resources\\ListingResource',
                30 => 'Liberu\\RealEstate\\ViewingsFilament\\Resources\\ViewingResource',
                40 => 'Liberu\\RealEstate\\OffersFilament\\Resources\\OfferResource',
                50 => 'Liberu\\RealEstate\\LettingsFilament\\Resources\\LettingResource',
                60 => 'Liberu\\RealEstate\\LettingsFilament\\Resources\\RentalApplicationResource',
                70 => 'Liberu\\RealEstate\\SalesProgressionFilament\\Resources\\SalesProgressionResource',
            ],
            __('filament.nav_groups.people_relationships') => [
                10 => 'Liberu\\RealEstate\\PartiesFilament\\Resources\\PartyResource',
                20 => 'Liberu\\RealEstate\\LeadsFilament\\Resources\\LeadResource',
            ],
            __('filament.nav_groups.property_management') => [
                10 => 'Liberu\\RealEstate\\PropertyManagementFilament\\Resources\\InspectionResource',
                20 => 'Liberu\\RealEstate\\PropertyManagementFilament\\Resources\\ManagementRecordResource',
                30 => 'Liberu\\RealEstate\\PropertyManagementFilament\\Resources\\MaintenanceRequestResource',
                40 => 'Liberu\\RealEstate\\PropertyManagementFilament\\Resources\\VendorQuoteResource',
                50 => 'Liberu\\RealEstate\\PropertyManagementFilament\\Resources\\WorkOrderResource',
            ],
            __('filament.nav_groups.marketing_portals') => [
                10 => 'Liberu\\RealEstate\\MarketingFilament\\Resources\\MarketingCampaignResource',
                20 => 'Liberu\\RealEstate\\MarketingFilament\\Resources\\NewsArticleResource',
                40 => 'Liberu\\RealEstate\\RightmoveFilament\\Resources\\RightmoveSyncResource',
                50 => 'Liberu\\RealEstate\\ZooplaFilament\\Resources\\ZooplaSyncResource',
                60 => 'Liberu\\RealEstate\\OnTheMarketFilament\\Resources\\OnTheMarketSyncResource',
            ],
            __('filament.nav_groups.insights_tools') => [
                10 => 'Liberu\\RealEstate\\MatchingFilament\\Resources\\MatchProfileResource',
                20 => 'Liberu\\RealEstate\\ValuationsFilament\\Resources\\ValuationResource',
                30 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\PropertySavedSearchResource',
            ],
            __('filament.nav_groups.instructions_media') => [
                10 => 'Liberu\\RealEstate\\InstructionsFilament\\Resources\\InstructionResource',
                20 => 'Liberu\\RealEstate\\MediaAndDocumentsFilament\\Resources\\MediaDocumentResource',
            ],
            __('filament.nav_groups.organisation') => [
                10 => 'Liberu\\Foundation\\OrganizationsFilament\\Resources\\TeamResource',
                20 => 'Liberu\\Foundation\\IdentityFilament\\Resources\\UserResource',
                30 => RoleResource::class,
            ],
            __('filament.nav_groups.property_configuration') => [
                10 => 'Liberu\\RealEstate\\CoreFilament\\Resources\\AgencyResource',
                20 => 'Liberu\\RealEstate\\CoreFilament\\Resources\\BranchResource',
                30 => 'Liberu\\RealEstate\\CoreFilament\\Resources\\TerritoryResource',
                40 => 'Liberu\\RealEstate\\CoreFilament\\Resources\\StatusDefinitionResource',
                50 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\PropertyCategoryResource',
                60 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\PropertyTemplateResource',
                70 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\RegionResource',
                80 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\CityResource',
                90 => 'Liberu\\RealEstate\\PropertiesFilament\\Resources\\DistrictResource',
            ],
            __('filament.nav_groups.platform_settings') => [
                10 => 'Liberu\\Foundation\\SettingsFilament\\Pages\\ManageSiteSettings',
                20 => 'Liberu\\Foundation\\ApplicationFilament\\Pages\\Overview',
                30 => 'Liberu\\Foundation\\LocalizationCoreFilament\\Pages\\Overview',
                40 => 'Liberu\\Foundation\\CurrencyContextFilament\\Pages\\Overview',
                50 => 'Liberu\\Foundation\\ModuleManagerFilament\\Pages\\FoundationOperations',
            ],
            __('filament.nav_groups.integrations_api') => [
                10 => 'Liberu\\Foundation\\IntegrationsFilament\\Pages\\Overview',
                20 => 'Liberu\\Foundation\\ApiAccessFilament\\Pages\\Overview',
                30 => 'Liberu\\Foundation\\WebhooksFilament\\Pages\\Overview',
                40 => 'Liberu\\Foundation\\AnalyticsCoreFilament\\Pages\\Overview',
                50 => 'Liberu\\Foundation\\AnalyticsGoogleFilament\\Pages\\Overview',
                60 => 'Liberu\\Foundation\\AnalyticsMetaFilament\\Pages\\Overview',
            ],
            __('filament.nav_groups.operations_diagnostics') => [
                10 => 'Liberu\\Foundation\\SchedulerQueuesFilament\\Pages\\Overview',
                20 => 'Liberu\\Foundation\\ObservabilityFilament\\Pages\\Overview',
                30 => 'Liberu\\Foundation\\NotificationsFilament\\Pages\\Overview',
                40 => 'Liberu\\Foundation\\FilesMediaFilament\\Pages\\Overview',
                50 => 'Liberu\\Foundation\\ImportExportFilament\\Pages\\Overview',
                60 => 'Liberu\\Foundation\\DeveloperExperienceFilament\\Pages\\Overview',
                70 => 'Liberu\\Foundation\\AuditFilament\\Resources\\ActivityLogResource',
            ],
        ];
    }
}
