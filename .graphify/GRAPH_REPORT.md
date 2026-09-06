# Graph Report - .  (2026-08-30)

## Corpus Check
- Large corpus: 1565 files · ~285,861 words. Semantic extraction will be expensive (many Claude tokens). Consider running on a subfolder, or use --no-semantic to run AST-only.

## Summary
- 8466 nodes · 20046 edges · 345 communities detected
- Extraction: 99% EXTRACTED · 1% INFERRED · 0% AMBIGUOUS · INFERRED: 187 edges (avg confidence: 0.78)
- Token cost: 0 input · 0 output
- Edge kinds: calls: 9618 · contains: 5571 · MODIFIES: 1729 · method: 1051 · references: 918 · implements: 465 · PARENT_OF: 214 · ON_BRANCH: 200 · conceptually_related_to: 155 · semantically_similar_to: 59 · cites: 42 · shares_data_with: 24


## Input Scope
- Requested: auto
- Resolved: committed (source: default-auto)
- Included files: 1565 · Candidates: 2010
- Excluded: 5491 untracked · 63365 ignored · 15 sensitive · 1 missing committed
- Recommendation: Use --scope all or graphify.yaml inputs.corpus for a knowledge-base folder.

## Graph Freshness
- Built from Git commit: `2f18670`
- Compare this hash to `git rev-parse HEAD` before trusting freshness-sensitive graph output.
## God Nodes (most connected - your core abstractions)
1. `update()` - 136 edges
2. `constructor()` - 103 edges
3. `resolve()` - 86 edges
4. `slice()` - 85 edges
5. `facet()` - 82 edges
6. `_update()` - 82 edges
7. `of()` - 77 edges
8. `node()` - 74 edges
9. `y()` - 72 edges
10. `slice()` - 70 edges

## Surprising Connections (you probably didn't know these)
- `Replaceable provider credentials and transport` --semantically_similar_to--> `Safe theme fallback`  [INFERRED] [semantically similar]
  projects/real-estate/integrations/README.md → themes/base/README.md
- `Session handoffs in docs/handoffs/` --conceptually_related_to--> `lerd local PHP development environment`  [AMBIGUOUS]
  CLAUDE.md → AGENTS.md
- `Package CI: three workflows, not three jobs (§3.9)` --semantically_similar_to--> `Host CI gates`  [INFERRED] [semantically similar]
  docs/CONFORMANCE.md → .github/workflows/tests.yml
- `lerd local PHP development environment` --semantically_similar_to--> `Container deployment topology`  [INFERRED] [semantically similar]
  AGENTS.md → docker-compose.yml
- `'planned' as an explicit backlog marker` --semantically_similar_to--> `Unpublished theme preview image`  [INFERRED] [semantically similar]
  projects/real-estate/core/README.md → themes/base/README.md

## Hyperedges (group relationships)
- **Manifest-driven module enablement** — entity_module_json, entity_module_manager_provider, entity_module_registry, concept_default_enabled, entity_config_modules [EXTRACTED 0.95]
- **Package release pipeline and its gates** — entity_fleet_script, concept_module_repo_first, concept_zero_diff_gate, wf_install, entity_module_validator, concept_coverage_ratchet [EXTRACTED 0.90]
- **Filament panel composition in the host** — entity_admin_panel_provider, entity_app_panel_provider, entity_module_plugins, entity_theme_colors, entity_user_model [EXTRACTED 0.95]
- **Message send request flow (UI to encrypted row)** — concept_messaging_web_interface, concept_message_controller, concept_message_policy, concept_message_encryption_at_rest, concept_message_model, concept_messages_table, concept_sanctum_authentication [EXTRACTED 0.95]
- **Module composition pipeline (manifest to Filament panel)** — concept_liberu_module_package, concept_module_manifest, concept_module_capabilities, concept_module_manager, concept_module_enablement, concept_filament_plugin_declaration, concept_module_plugins_composer, concept_admin_panel, concept_app_panel [EXTRACTED 0.95]
- **Theme resolution and asset build pipeline** — concept_liberu_theme_package, concept_theme_json_manifest, concept_theme_inheritance, concept_theme_service_provider, concept_theme_manager, concept_theme_blade_directives, concept_vite_theme_asset_discovery, concept_theme_resolution_precedence [EXTRACTED 0.90]
- **Analytics delivery pipeline: core routes, adapters transport** — analytics_core_module, analytics_google_module, analytics_meta_module, analytics_contracts_package, integrations_module [INFERRED 0.85]
- **Authentication and access stack** — identity_module, identity_socialstream_module, jetstream_bridge_module, api_access_module, identity_filament_module, roles_permissions_module [INFERRED 0.80]
- **Layered module index pattern: feature spec to core to adapters** — feature_module_index, core_module_index, api_module_index, filament_module_index, one_core_per_adapter_rule [EXTRACTED 1.00]
- **Real Estate Core: core plus API, Filament and Livewire adapters** — real_estate_core_module, real_estate_core_api_module, real_estate_core_filament_module, real_estate_core_livewire_module, presentation_neutral_core, team_scoping [INFERRED 0.85]
- **Real Estate Instructions: core plus API, Filament and Livewire adapters** — real_estate_instructions_module, real_estate_instructions_api_module, real_estate_instructions_filament_module, real_estate_instructions_livewire_module, instruction_status_lifecycle, composer_name_unprefixed [INFERRED 0.85]
- **Module manifest declaration pattern shared by every liberu-module package** — liberu_module_package_type, capability_declaration, service_provider_registration, composer_installer, installation_not_enablement, enabled_by_default_declaration, declared_public_boundary, standalone_package_test_suite [EXTRACTED 1.00]
- **Listings Four-Package Domain/API/Filament/Livewire Split** — real_estate_listings_module, real_estate_listings_api, real_estate_listings_filament, real_estate_listings_livewire, openapi_real_estate_listings [EXTRACTED 0.90]
- **Shared v1 API Contract Across Real Estate Adapters** — openapi_real_estate_listings, openapi_real_estate_marketing, openapi_real_estate_matching, openapi_real_estate_media_and_documents, openapi_real_estate_offers, sanctum_bearer_security_scheme, idempotency_key_header, api_error_schema, api_pagination_meta_schema, api_v1_versioning [EXTRACTED 0.95]
- **Provider-Neutral, Team-Scoped Domain Core** — real_estate_marketing_module, real_estate_media_and_documents_module, real_estate_listings_module, real_estate_matching_module, provider_neutral_domain, team_scoping [INFERRED 0.80]
- **Core + API + Filament + Livewire package quadruple (Parties)** — real_estate_parties_module, real_estate_parties_api_module, real_estate_parties_filament_module, real_estate_parties_livewire_module [INFERRED 0.88]
- **Shared v1 API conventions across real-estate contracts** — api_contract_real_estate_onthemarket_v1, api_contract_real_estate_parties_v1, api_contract_real_estate_portals_reporting_v1, api_contract_real_estate_properties_v1, concept_sanctum_bearer_security_scheme, concept_idempotency_key_header, schema_error_envelope, schema_pagination_meta [EXTRACTED 0.95]
- **Team-scoped real-estate domain cores** — real_estate_offers_module, real_estate_onthemarket_module, real_estate_parties_module, real_estate_portals_reporting_module, concept_team_scoping [EXTRACTED 0.90]
- **Valuations domain shipped as core plus three adapters** — re_valuations_module, re_valuations_api_module, re_valuations_filament_module, re_valuations_livewire_module, openapi_real_estate_valuations_v1 [EXTRACTED 0.95]
- **Shared real-estate API envelope: Sanctum bearer, Idempotency-Key, Error and PaginationMeta on every v1 spec** — openapi_real_estate_rightmove_v1, openapi_real_estate_sales_progression_v1, openapi_real_estate_valuations_v1, openapi_real_estate_viewings_v1, concept_sanctum_bearer_security, concept_idempotency_key_header, concept_error_schema, concept_pagination_meta_schema [EXTRACTED 0.95]
- **Domain cores kept presentation-neutral while surfaces ship separately** — re_properties_module, re_sales_progression_module, re_rightmove_module, re_valuations_module, re_viewings_module, concept_presentation_neutral_core, concept_four_package_adapter_split, concept_team_scoping [INFERRED 0.85]
- **Zoopla Four-Index Package Stack** — re_zoopla_module, re_zoopla_api_module, re_zoopla_filament_module, re_zoopla_livewire_module, re_zoopla_openapi_spec, four_implementation_indexes [EXTRACTED 0.90]
- **Foundation Core Plus Presentation Adapter Pattern** — search_module, search_api_module, settings_module, settings_filament_module, theme_support_module, theme_support_livewire_module, roles_permissions_module, roles_permissions_filament_module, sessions_devices_module, sessions_devices_filament_module, category_foundation, category_presentation [INFERRED 0.85]
- **Packages Extending the Unowned users Table** — search_module, two_factor_authentication_module, migration_add_search_indexes_to_users_table, migration_add_two_factor_columns_to_users_table, shared_users_table [INFERRED 0.80]
- **One core boundary plus its one-to-one API, Filament and Livewire adapters** — capability_properties, pkg_real_estate_properties, pkg_real_estate_properties_api, pkg_real_estate_properties_filament, pkg_real_estate_properties_livewire, one_to_one_adapter_rule [EXTRACTED 0.95]
- **real-estate-default inherits default, then base, then host fallback** — theme_real_estate_default, theme_default, theme_base, theme_inheritance, theme_fallback, host_theme_selection [EXTRACTED 0.95]
- **Measure standalone, ratchet the gate upward, then fan the release across repositories** — measure_coverage, set_coverage_thresholds, measure_phpstan, set_phpstan_levels, package_tests_yml, quality_ratchet, fleet [INFERRED 0.80]

## Communities

### Community 141 - "Management Record Policy"
Cohesion: 0.22
Nodes (7): lerd, lerd, laravel-boost, php, lerd, laravel-boost, /usr/local/bin/php

### Community 239 - "Community 239"
Cohesion: 0.50
Nodes (1): ModulePlugins

### Community 17 - "Composition Host Boundaries"
Cohesion: 0.03
Nodes (29): AdminPanelProvider, AppPanelProvider, DatabaseSeeder, RolesSeeder, TeamSeeder, UserSeeder, system, menuButton (+21 more)

### Community 123 - "Viewings Package Family"
Cohesion: 0.19
Nodes (1): User

### Community 285 - "Community 285"
Cohesion: 0.50
Nodes (1): ThemeColors

### Community 3 - "Real Estate API Contracts"
Cohesion: 0.01
Nodes (41): CurrencyMismatch, UnknownCurrency, FoundationDoctorCommand, IdentityFilamentServiceProvider, CreateUser, RoledUser, CreateConnectedAccount, GenerateRedirectForProvider (+33 more)

### Community 60 - "Listing Controller"
Cohesion: 0.07
Nodes (14): i(), e(), r(), init(), updateWidth(), themeInputs, 056e34b Fix PermissionsSeeder to use shield:generate instead of missing permissions:sync command, 3df11b3 Claude (+6 more)

### Community 166 - "Meta Analytics Destination"
Cohesion: 0.33
Nodes (1): UserFactory

### Community 348 - "Community 348"
Cohesion: 0.67
Nodes (1): ActivityCommentsServiceProvider

### Community 260 - "Community 260"
Cohesion: 0.50
Nodes (1): AnalyticsServiceProvider

### Community 369 - "Community 369"
Cohesion: 0.67
Nodes (1): ConsentPolicy

### Community 220 - "Community 220"
Cohesion: 0.40
Nodes (1): DestinationRegistry

### Community 277 - "Community 277"
Cohesion: 0.50
Nodes (1): EventRouter

### Community 278 - "Community 278"
Cohesion: 0.50
Nodes (1): EventSanitizer

### Community 111 - "Zoopla Client"
Cohesion: 0.11
Nodes (2): RealEstateDefaultThemeServiceProvider, 2d8dfb2 Integrate real estate theme and Packagist Composer sources (#1306)

### Community 349 - "Community 349"
Cohesion: 0.67
Nodes (1): AnalyticsGoogleServiceProvider

### Community 221 - "Community 221"
Cohesion: 0.40
Nodes (1): GoogleDestination

### Community 374 - "Community 374"
Cohesion: 0.67
Nodes (1): GoogleEventMapper

### Community 350 - "Community 350"
Cohesion: 0.67
Nodes (1): AnalyticsMetaServiceProvider

### Community 223 - "Community 223"
Cohesion: 0.40
Nodes (1): MetaCustomerNormalizer

### Community 224 - "Community 224"
Cohesion: 0.40
Nodes (1): MetaDestination

### Community 5 - "Analytics and Core Modules"
Cohesion: 0.01
Nodes (58): ApiAccessServiceProvider, Idempotency, CreateAgency, EditAgency, ListAgencies, CreateTerritory, EditTerritory, ListTerritories (+50 more)

### Community 279 - "Community 279"
Cohesion: 0.50
Nodes (1): IdempotencyStore

### Community 261 - "Community 261"
Cohesion: 0.50
Nodes (1): ApplicationCoreServiceProvider

### Community 208 - "Community 208"
Cohesion: 0.50
Nodes (1): ReadinessRegistry

### Community 292 - "Community 292"
Cohesion: 0.67
Nodes (1): ReadinessController

### Community 304 - "Community 304"
Cohesion: 0.67
Nodes (1): SecurityHeaders

### Community 372 - "Community 372"
Cohesion: 0.67
Nodes (1): EnvironmentValidator

### Community 380 - "Community 380"
Cohesion: 0.67
Nodes (1): SystemClock

### Community 382 - "Community 382"
Cohesion: 0.67
Nodes (1): UuidIdentifierFactory

### Community 262 - "Community 262"
Cohesion: 0.50
Nodes (1): AuditServiceProvider

### Community 368 - "Community 368"
Cohesion: 0.67
Nodes (1): AuditContext

### Community 370 - "Community 370"
Cohesion: 0.67
Nodes (1): DatabaseAuditRecorder

### Community 263 - "Community 263"
Cohesion: 0.50
Nodes (1): CurrencyServiceProvider

### Community 256 - "Community 256"
Cohesion: 0.50
Nodes (1): CurrencyContext

### Community 344 - "Community 344"
Cohesion: 0.67
Nodes (1): CurrencyPreferenceResolver

### Community 257 - "Community 257"
Cohesion: 0.50
Nodes (1): CurrencyRegistry

### Community 258 - "Community 258"
Cohesion: 0.50
Nodes (1): MoneyFormatter

### Community 386 - "Community 386"
Cohesion: 0.67
Nodes (1): Currency

### Community 287 - "Community 287"
Cohesion: 0.50
Nodes (1): ExchangeRate

### Community 147 - "Lettings Filament Plugin"
Cohesion: 0.32
Nodes (1): Money

### Community 351 - "Community 351"
Cohesion: 0.67
Nodes (1): DeveloperExperienceServiceProvider

### Community 371 - "Community 371"
Cohesion: 0.67
Nodes (1): EnvironmentDoctor

### Community 352 - "Community 352"
Cohesion: 0.67
Nodes (1): FeatureFlagsServiceProvider

### Community 373 - "Community 373"
Cohesion: 0.67
Nodes (1): FlagEvaluator

### Community 264 - "Community 264"
Cohesion: 0.50
Nodes (1): FilesMediaServiceProvider

### Community 378 - "Community 378"
Cohesion: 0.67
Nodes (1): RejectingMalwareScanner

### Community 381 - "Community 381"
Cohesion: 0.67
Nodes (1): UploadPolicy

### Community 190 - "Module Integration Coverage Test"
Cohesion: 0.33
Nodes (1): IdentityFilamentPlugin

### Community 158 - "Valuations Filament Plugin"
Cohesion: 0.29
Nodes (1): UserResource

### Community 339 - "Community 339"
Cohesion: 0.67
Nodes (1): EditUser

### Community 341 - "Community 341"
Cohesion: 0.67
Nodes (1): ListUsers

### Community 300 - "Community 300"
Cohesion: 0.67
Nodes (1): TestPanelProvider

### Community 196 - "Set Locale Middleware"
Cohesion: 0.40
Nodes (1): TestCase

### Community 297 - "Community 297"
Cohesion: 0.67
Nodes (1): IdentityEvent

### Community 265 - "Community 265"
Cohesion: 0.50
Nodes (1): IdentityServiceProvider

### Community 302 - "Community 302"
Cohesion: 0.67
Nodes (1): EmitAuthenticationEvent

### Community 219 - "Community 219"
Cohesion: 0.40
Nodes (1): ConfiguredRegistrationPolicy

### Community 375 - "Community 375"
Cohesion: 0.67
Nodes (1): IdentifierNormalizer

### Community 377 - "Community 377"
Cohesion: 0.67
Nodes (1): RejectingInvitationValidator

### Community 298 - "Community 298"
Cohesion: 0.67
Nodes (1): ConnectedAccountFactory

### Community 197 - "Telescope Entries Migration"
Cohesion: 0.50
Nodes (1): CreateUserFromProvider

### Community 232 - "Community 232"
Cohesion: 0.50
Nodes (1): UpdateConnectedAccount

### Community 337 - "Community 337"
Cohesion: 0.67
Nodes (1): ConnectedAccount

### Community 157 - "Sales Progression Filament Plugin"
Cohesion: 0.29
Nodes (1): ConnectedAccountPolicy

### Community 252 - "Community 252"
Cohesion: 0.50
Nodes (1): SocialstreamServiceProvider

### Community 294 - "Community 294"
Cohesion: 0.67
Nodes (1): TransferSchema

### Community 353 - "Community 353"
Cohesion: 0.67
Nodes (1): ImportExportServiceProvider

### Community 283 - "Community 283"
Cohesion: 0.67
Nodes (1): RowValidator

### Community 266 - "Community 266"
Cohesion: 0.50
Nodes (1): IntegrationsServiceProvider

### Community 222 - "Community 222"
Cohesion: 0.40
Nodes (1): IntegrationRegistry

### Community 241 - "Community 241"
Cohesion: 0.50
Nodes (1): CreateNewUser

### Community 207 - "Community 207"
Cohesion: 0.50
Nodes (1): UpdateUserProfileInformation

### Community 209 - "Community 209"
Cohesion: 0.50
Nodes (1): DeleteUser

### Community 250 - "Community 250"
Cohesion: 0.50
Nodes (1): FortifyServiceProvider

### Community 210 - "Community 210"
Cohesion: 0.40
Nodes (1): LanguageSwitcher

### Community 354 - "Community 354"
Cohesion: 0.67
Nodes (1): LocalizationLivewireServiceProvider

### Community 235 - "Community 235"
Cohesion: 0.50
Nodes (1): LocaleContext

### Community 206 - "Community 206"
Cohesion: 0.40
Nodes (1): LocaleFormatter

### Community 242 - "Community 242"
Cohesion: 0.50
Nodes (1): SetLocale

### Community 267 - "Community 267"
Cohesion: 0.50
Nodes (1): LocalizationServiceProvider

### Community 225 - "Community 225"
Cohesion: 0.40
Nodes (1): TranslationRegistry

### Community 358 - "Community 358"
Cohesion: 0.67
Nodes (1): MyMemoryServiceProvider

### Community 145 - "Local Search Indexer"
Cohesion: 0.32
Nodes (1): TranslationService

### Community 191 - "Module Plugins Composer"
Cohesion: 0.33
Nodes (1): ModuleManagerFilamentPlugin

### Community 356 - "Community 356"
Cohesion: 0.67
Nodes (1): ModuleManagerFilamentServiceProvider

### Community 249 - "Community 249"
Cohesion: 0.50
Nodes (1): FoundationOperations

### Community 160 - "Zoopla Filament Plugin"
Cohesion: 0.33
Nodes (1): RegistryCache

### Community 115 - "Matching Package Family"
Cohesion: 0.11
Nodes (1): Manifest

### Community 355 - "Community 355"
Cohesion: 0.67
Nodes (1): ModuleDiscovery

### Community 268 - "Community 268"
Cohesion: 0.50
Nodes (1): ModuleManagerServiceProvider

### Community 137 - "Valuation Model"
Cohesion: 0.22
Nodes (1): ModuleRegistry

### Community 269 - "Community 269"
Cohesion: 0.50
Nodes (1): ModuleValidationGuard

### Community 357 - "Community 357"
Cohesion: 0.67
Nodes (1): ModuleValidator

### Community 359 - "Community 359"
Cohesion: 0.67
Nodes (1): NotificationsServiceProvider

### Community 276 - "Community 276"
Cohesion: 0.50
Nodes (1): DeliveryRetry

### Community 281 - "Community 281"
Cohesion: 0.50
Nodes (1): NotificationPolicy

### Community 243 - "Community 243"
Cohesion: 0.83
Nodes (3): getConnection(), up(), down()

### Community 303 - "Community 303"
Cohesion: 0.67
Nodes (1): CorrelationId

### Community 270 - "Community 270"
Cohesion: 0.50
Nodes (1): ObservabilityServiceProvider

### Community 251 - "Community 251"
Cohesion: 0.50
Nodes (1): HorizonDashboardServiceProvider

### Community 215 - "Community 215"
Cohesion: 0.50
Nodes (1): TelescopeDashboardServiceProvider

### Community 282 - "Community 282"
Cohesion: 0.50
Nodes (1): NullMetrics

### Community 376 - "Community 376"
Cohesion: 0.67
Nodes (1): Redactor

### Community 284 - "Community 284"
Cohesion: 0.50
Nodes (1): SloRegistry

### Community 192 - "Organization User Trait"
Cohesion: 0.33
Nodes (1): OrganizationsFilamentPlugin

### Community 185 - "Sweep AI Automation"
Cohesion: 0.33
Nodes (1): TeamResource

### Community 338 - "Community 338"
Cohesion: 0.67
Nodes (1): EditTeam

### Community 340 - "Community 340"
Cohesion: 0.67
Nodes (1): ListTeams

### Community 240 - "Community 240"
Cohesion: 0.67
Nodes (1): OrganizationUser

### Community 299 - "Community 299"
Cohesion: 0.67
Nodes (1): TeamFactory

### Community 245 - "Community 245"
Cohesion: 0.50
Nodes (1): Organization

### Community 247 - "Community 247"
Cohesion: 0.50
Nodes (1): Team

### Community 246 - "Community 246"
Cohesion: 0.50
Nodes (1): TeamInvitation

### Community 271 - "Community 271"
Cohesion: 0.50
Nodes (1): OrganizationsServiceProvider

### Community 125 - "Theme Discovery"
Cohesion: 0.14
Nodes (1): TeamPolicy

### Community 345 - "Community 345"
Cohesion: 0.67
Nodes (1): CurrentTeamResolver

### Community 293 - "Community 293"
Cohesion: 0.67
Nodes (1): ProfileUpdate

### Community 360 - "Community 360"
Cohesion: 0.67
Nodes (1): ProfilesServiceProvider

### Community 6 - "Module Manager Capabilities"
Cohesion: 0.03
Nodes (147): MediaAndDocumentsApiServiceProvider, CreateMediaDocument, DeleteMediaDocument, MediaAndDocumentsServiceProvider, DeleteProperty, ExampleTest, 000ccd5 fix: close the media route, and eight more review findings, 0094406 Add contractor maintenance workflow API (+139 more)

### Community 148 - "Listings Filament Plugin"
Cohesion: 0.38
Nodes (1): AgencyController

### Community 34 - "Settings Module"
Cohesion: 0.04
Nodes (15): BranchController, RealEstateCoreApiServiceProvider, RealEstateCoreFilamentPlugin, RealEstateCoreFilamentServiceProvider, CreateBranch, EditBranch, ListBranches, BranchList (+7 more)

### Community 154 - "Portals Reporting Filament Plugin"
Cohesion: 0.38
Nodes (1): TerritoryController

### Community 169 - "Module Support Coverage Test"
Cohesion: 0.33
Nodes (1): AgencyResource

### Community 170 - "Translation Registry Test"
Cohesion: 0.33
Nodes (1): BranchResource

### Community 186 - "Core Capability Definition"
Cohesion: 0.33
Nodes (1): TerritoryResource

### Community 33 - "Authorization and Permissions"
Cohesion: 0.04
Nodes (17): OfferEventResource, CreateOnTheMarketSync, CreateRightmoveSync, SalesProgressionController, CreateSalesProgression, SalesProgressionList, ListValuations, ValuationsFilamentPlugin (+9 more)

### Community 56 - "Offer List Component"
Cohesion: 0.06
Nodes (16): CoreCapabilityDefinition, InstructionsCapabilityDefinition, ListingsCapabilityDefinition, MarketingCapabilityDefinition, MatchingCapabilityDefinition, MediaAndDocumentsCapabilityDefinition, OffersCapabilityDefinition, PartiesCapabilityDefinition (+8 more)

### Community 4 - "Theme Packages and Capabilities"
Cohesion: 0.01
Nodes (57): InstructionController, InstructionsApiServiceProvider, InstructionsFilamentPlugin, InstructionsFilamentServiceProvider, CreateInstruction, EditInstruction, ListInstructions, InstructionList (+49 more)

### Community 171 - "Update Connected Account"
Cohesion: 0.33
Nodes (1): InstructionResource

### Community 7 - "ThemeManager Service"
Cohesion: 0.01
Nodes (39): CreateInstruction, CreateListing, OnTheMarketApiServiceProvider, OnTheMarketFilamentPlugin, OnTheMarketFilamentServiceProvider, ListOnTheMarketSyncs, OnTheMarketSyncList, CreateOnTheMarketSync (+31 more)

### Community 13 - "Real Estate Scope and Phases"
Cohesion: 0.02
Nodes (32): LettingsApiServiceProvider, LettingsFilamentPlugin, LettingsFilamentServiceProvider, ListLettings, LettingList, CreateLetting, RecordLettingFailure, TransitionLetting (+24 more)

### Community 149 - "Marketing Filament Plugin"
Cohesion: 0.29
Nodes (1): LettingController

### Community 172 - "OnTheMarket Listing Sync Job"
Cohesion: 0.33
Nodes (1): LettingResource

### Community 213 - "Community 213"
Cohesion: 0.60
Nodes (1): LettingPolicy

### Community 173 - "Rightmove Listing Sync Job"
Cohesion: 0.33
Nodes (1): ListingResource

### Community 38 - "Properties Package Family"
Cohesion: 0.04
Nodes (15): MarketingCampaignController, MarketingApiServiceProvider, MarketingFilamentPlugin, MarketingFilamentServiceProvider, CreateMarketingCampaign, EditMarketingCampaign, ListMarketingCampaigns, MarketingCampaignList (+7 more)

### Community 175 - "Update Letting Action"
Cohesion: 0.33
Nodes (1): MarketingCampaignResource

### Community 39 - "Agency Controller"
Cohesion: 0.04
Nodes (15): MatchProfileController, MatchingApiServiceProvider, MatchingFilamentPlugin, MatchingFilamentServiceProvider, CreateMatchProfile, EditMatchProfile, ListMatchProfiles, MatchProfileList (+7 more)

### Community 176 - "Update Management Record Action"
Cohesion: 0.33
Nodes (1): MatchProfileResource

### Community 151 - "Media Documents Filament Plugin"
Cohesion: 0.29
Nodes (1): MediaDocumentController

### Community 92 - "Theme Cache"
Cohesion: 0.08
Nodes (8): MediaAndDocumentsFilamentPlugin, MediaAndDocumentsFilamentServiceProvider, CreateMediaDocument, EditMediaDocument, ListMediaDocuments, MediaDocumentList, MediaAndDocumentsLivewireServiceProvider, 72d35f5 Add media documents Filament and Livewire adapters

### Community 177 - "Module Boundaries Test"
Cohesion: 0.33
Nodes (1): MediaDocumentResource

### Community 244 - "Community 244"
Cohesion: 0.50
Nodes (1): MediaDocument

### Community 140 - "Letting Policy"
Cohesion: 0.22
Nodes (1): OfferController

### Community 178 - "Locale Context"
Cohesion: 0.33
Nodes (1): OfferResource

### Community 163 - "Google Analytics Destination"
Cohesion: 0.53
Nodes (1): OfferList

### Community 152 - "Offers Filament Plugin"
Cohesion: 0.29
Nodes (1): OnTheMarketSyncController

### Community 179 - "Integration Adapter Contract"
Cohesion: 0.33
Nodes (1): OnTheMarketSyncResource

### Community 226 - "Community 226"
Cohesion: 0.70
Nodes (1): OnTheMarketClient

### Community 40 - "Letting Controller"
Cohesion: 0.04
Nodes (15): PartyController, PartiesApiServiceProvider, PartiesFilamentServiceProvider, CreateParty, EditParty, ListParties, PartyList, PartiesLivewireServiceProvider (+7 more)

### Community 180 - "OnTheMarket Transport Contract"
Cohesion: 0.33
Nodes (1): PartyResource

### Community 193 - "Create New User Action"
Cohesion: 0.33
Nodes (1): PartiesFilamentPlugin

### Community 41 - "Management Record Controller"
Cohesion: 0.04
Nodes (15): PortalReportController, PortalsReportingApiServiceProvider, PortalsReportingFilamentPlugin, PortalsReportingFilamentServiceProvider, CreatePortalReport, EditPortalReport, ListPortalReports, PortalReportList (+7 more)

### Community 181 - "Rightmove Transport Contract"
Cohesion: 0.33
Nodes (1): PortalReportResource

### Community 43 - "Rightmove Sync Controller"
Cohesion: 0.04
Nodes (13): PropertyController, PropertiesApiServiceProvider, PropertiesFilamentPlugin, PropertiesFilamentServiceProvider, CreateProperty, EditProperty, ListProperties, PropertyList (+5 more)

### Community 182 - "Search Indexer Contract"
Cohesion: 0.33
Nodes (1): PropertyResource

### Community 156 - "Rightmove Filament Plugin"
Cohesion: 0.29
Nodes (1): Property

### Community 150 - "Matching Filament Plugin"
Cohesion: 0.29
Nodes (1): ManagementRecordController

### Community 174 - "Zoopla Listing Sync Job"
Cohesion: 0.33
Nodes (1): ManagementRecordResource

### Community 214 - "Community 214"
Cohesion: 0.60
Nodes (1): ManagementRecordPolicy

### Community 153 - "OnTheMarket Filament Plugin"
Cohesion: 0.29
Nodes (1): RightmoveSyncController

### Community 183 - "Setting Definition Contract"
Cohesion: 0.33
Nodes (1): RightmoveSyncResource

### Community 227 - "Community 227"
Cohesion: 0.70
Nodes (1): RightmoveClient

### Community 184 - "Zoopla Transport Contract"
Cohesion: 0.33
Nodes (1): SalesProgressionResource

### Community 135 - "Property History Model"
Cohesion: 0.20
Nodes (1): ValuationController

### Community 187 - "Parties Capability Definition"
Cohesion: 0.33
Nodes (1): ValuationResource

### Community 101 - "Module Manager Filament Plugin"
Cohesion: 0.10
Nodes (5): CreateValuation, DeleteValuation, Valuation, ValuationsServiceProvider, 44c2353 Add real estate valuations core module

### Community 136 - "Territory Model"
Cohesion: 0.20
Nodes (1): ViewingController

### Community 188 - "Properties Capability Definition"
Cohesion: 0.33
Nodes (1): ViewingResource

### Community 164 - "Integration Registry"
Cohesion: 0.53
Nodes (1): ViewingList

### Community 248 - "Community 248"
Cohesion: 0.50
Nodes (1): Viewing

### Community 155 - "Property Management Filament Plugin"
Cohesion: 0.29
Nodes (1): ZooplaSyncController

### Community 189 - "Valuations Capability Definition"
Cohesion: 0.33
Nodes (1): ZooplaSyncResource

### Community 228 - "Community 228"
Cohesion: 0.70
Nodes (1): ZooplaClient

### Community 361 - "Community 361"
Cohesion: 0.67
Nodes (1): RolesPermissionsFilamentPlugin

### Community 124 - "Privileged Actor Contract"
Cohesion: 0.14
Nodes (1): RolePolicy

### Community 254 - "Community 254"
Cohesion: 0.50
Nodes (1): PermissionRegistry

### Community 272 - "Community 272"
Cohesion: 0.50
Nodes (1): RolesPermissionsServiceProvider

### Community 343 - "Community 343"
Cohesion: 0.67
Nodes (1): AnyTeamRoleLookup

### Community 255 - "Community 255"
Cohesion: 0.50
Nodes (1): BreakGlass

### Community 346 - "Community 346"
Cohesion: 0.67
Nodes (1): SeparationOfDuty

### Community 362 - "Community 362"
Cohesion: 0.67
Nodes (1): SchedulerQueuesServiceProvider

### Community 280 - "Community 280"
Cohesion: 0.50
Nodes (1): JobPolicy

### Community 143 - "Recovery Code Hasher"
Cohesion: 0.39
Nodes (1): SearchController

### Community 363 - "Community 363"
Cohesion: 0.67
Nodes (1): SearchApiServiceProvider

### Community 288 - "Community 288"
Cohesion: 1.00
Nodes (2): scopeSearch(), searchableColumns()

### Community 253 - "Community 253"
Cohesion: 0.50
Nodes (1): IndexableRegistry

### Community 217 - "Community 217"
Cohesion: 0.40
Nodes (1): SearcherRegistry

### Community 273 - "Community 273"
Cohesion: 0.67
Nodes (1): SearchServiceProvider

### Community 218 - "Community 218"
Cohesion: 0.40
Nodes (1): LocalSearchIndexer

### Community 159 - "Viewings Filament Plugin"
Cohesion: 0.38
Nodes (1): SearchService

### Community 144 - "Searcher Registry"
Cohesion: 0.36
Nodes (1): SearcherRegistryTest

### Community 212 - "Community 212"
Cohesion: 0.40
Nodes (1): AccountSecurity

### Community 194 - "Frontend Menu Script"
Cohesion: 0.33
Nodes (1): SessionsDevicesFilamentPlugin

### Community 364 - "Community 364"
Cohesion: 0.67
Nodes (1): SessionsDevicesFilamentServiceProvider

### Community 168 - "Trusted Device Manager"
Cohesion: 0.40
Nodes (1): SessionReader

### Community 274 - "Community 274"
Cohesion: 0.50
Nodes (1): SessionsDevicesServiceProvider

### Community 342 - "Community 342"
Cohesion: 0.67
Nodes (1): ManageSiteSettings

### Community 195 - "Idempotency Middleware"
Cohesion: 0.33
Nodes (1): SettingsFilamentPlugin

### Community 259 - "Community 259"
Cohesion: 0.50
Nodes (1): ScopedSettings

### Community 347 - "Community 347"
Cohesion: 0.67
Nodes (1): SiteSettings

### Community 365 - "Community 365"
Cohesion: 0.67
Nodes (1): SettingsServiceProvider

### Community 211 - "Community 211"
Cohesion: 0.40
Nodes (1): ThemeSwitcher

### Community 366 - "Community 366"
Cohesion: 0.67
Nodes (1): ThemeSupportLivewireServiceProvider

### Community 161 - "Configured Registration Policy"
Cohesion: 0.33
Nodes (1): ThemeCache

### Community 205 - "Community 205"
Cohesion: 0.50
Nodes (1): ThemeDiscovery

### Community 122 - "Valuations Package Family"
Cohesion: 0.15
Nodes (1): ThemeManifest

### Community 167 - "Translation Provider Registry"
Cohesion: 0.47
Nodes (1): ThemeServiceProvider

### Community 78 - "Offer Resource"
Cohesion: 0.11
Nodes (1): ThemeManager

### Community 146 - "Instructions Filament Plugin"
Cohesion: 0.50
Nodes (7): theme(), active_theme(), theme_asset(), theme_path(), theme_views_path(), set_theme(), theme_layout()

### Community 383 - "Community 383"
Cohesion: 1.00
Nodes (2): writeCoverageTheme(), coverageThemePackage()

### Community 296 - "Community 296"
Cohesion: 0.67
Nodes (1): TwoFactorPolicy

### Community 216 - "Community 216"
Cohesion: 0.40
Nodes (1): RecoveryCodeHasher

### Community 229 - "Community 229"
Cohesion: 0.40
Nodes (1): TrustedDeviceManager

### Community 275 - "Community 275"
Cohesion: 0.50
Nodes (1): TwoFactorServiceProvider

### Community 379 - "Community 379"
Cohesion: 0.67
Nodes (1): RetrySchedule

### Community 286 - "Community 286"
Cohesion: 0.67
Nodes (1): WebhookSigner

### Community 367 - "Community 367"
Cohesion: 0.67
Nodes (1): WebhooksServiceProvider

### Community 134 - "Party Model"
Cohesion: 0.38
Nodes (6): syncActionModals(), rememberPreviouslyFocusedElement(), restorePreviouslyFocusedElement(), generateModalId(), openModal(), closeModal()

### Community 106 - "Sessions Devices Filament Plugin"
Cohesion: 0.13
Nodes (9): x(), P(), B(), Y(), G(), init(), setUpResizeObserver(), close() (+1 more)

### Community 29 - "Real Estate Host and Themes"
Cohesion: 0.05
Nodes (44): a(), w(), P(), f(), d(), e(), r(), t() (+36 more)

### Community 2 - "Messaging and Notifications Platform"
Cohesion: 0.01
Nodes (72): computeN(), sP(), set(), Lf(), QP(), sync(), posAtStart(), posBefore() (+64 more)

### Community 93 - "Organizations and Teams"
Cohesion: 0.09
Nodes (26): Ag(), Xh(), wh(), Lg(), Ls(), kh(), vh(), yh() (+18 more)

### Community 21 - "Module Layer Indexes"
Cohesion: 0.04
Nodes (92): lineAt(), iterChangedRanges(), iterChanges(), Ns(), join(), getRules(), aP(), coordsAt() (+84 more)

### Community 94 - "User Factory"
Cohesion: 0.09
Nodes (26): line(), lineInner(), ue(), OP(), charCategorizer(), wordAt(), Hr(), widget() (+18 more)

### Community 71 - "Instruction Resource"
Cohesion: 0.09
Nodes (37): append(), find(), addText(), addInlineWidget(), addMark(), addBlockWidget(), addLineStart(), addLine() (+29 more)

### Community 18 - "Theme Manifest Parser"
Cohesion: 0.04
Nodes (102): slice(), languageDataAt(), finish(), Ye(), overrideDOMText(), advance(), $f(), break() (+94 more)

### Community 57 - "Viewing List Component"
Cohesion: 0.06
Nodes (46): eq(), scanIdentical(), iterGaps(), mapPos(), touchesRange(), map(), changes(), compare() (+38 more)

### Community 12 - "Filament Panels and Tenancy"
Cohesion: 0.03
Nodes (120): iterRange(), iterLines(), constructor(), split(), normalized(), Hs(), is(), annotation() (+112 more)

### Community 8 - "Fleet Release Scripts"
Cohesion: 0.02
Nodes (143): toString(), toJSON(), of(), flatten(), Mg(), fromJSON(), create(), invert() (+135 more)

### Community 11 - "Identity and Social Auth"
Cohesion: 0.04
Nodes (123): sliceString(), cursor(), aa(), get(), resolve(), Ng(), tP(), sliceDoc() (+115 more)

### Community 80 - "Party Resource"
Cohesion: 0.10
Nodes (30): nextInner(), next(), length(), filter(), createSet(), be(), Dt(), Fs() (+22 more)

### Community 49 - "Property Model"
Cohesion: 0.06
Nodes (50): lineBreak(), ignoreEvent(), Fi(), ya(), ji(), Ci(), Nt(), Qn() (+42 more)

### Community 59 - "Instruction Controller"
Cohesion: 0.07
Nodes (43): Dg(), Ig(), Se(), Ui(), De(), Bh(), handleEvent(), keydown() (+35 more)

### Community 87 - "Valuation Resource"
Cohesion: 0.11
Nodes (27): empty(), composeDesc(), mapDesc(), compose(), asSingle(), mapEffects(), state(), Fg() (+19 more)

### Community 36 - "MCP Server Config"
Cohesion: 0.06
Nodes (57): apply(), newDoc(), reuse(), build(), resetRange(), reset(), updateViewport(), setSelected() (+49 more)

### Community 118 - "Parties Package Family"
Cohesion: 0.14
Nodes (2): style(), update()

### Community 26 - "Valuation Controller"
Cohesion: 0.05
Nodes (48): rl(), yl(), Op(), ca(), Dp(), sl(), Cp(), Bp() (+40 more)

### Community 28 - "Search Capability and Indexing"
Cohesion: 0.05
Nodes (51): nt(), ma(), zc(), qc(), xa(), Oc(), Pc(), La() (+43 more)

### Community 37 - "Zoopla Portal Integration"
Cohesion: 0.13
Nodes (57): D(), j(), V(), y(), G(), O(), R(), se() (+49 more)

### Community 95 - "Platform Scope Docs"
Cohesion: 0.13
Nodes (26): ce(), to(), Cc(), Ec(), ni(), Sn(), Mc(), Ac() (+18 more)

### Community 62 - "Match Profile Controller"
Cohesion: 0.09
Nodes (41): Pt(), Pe(), ir(), ne(), ye(), Xe(), Et(), Zr() (+33 more)

### Community 83 - "Rightmove Sync Resource"
Cohesion: 0.11
Nodes (29): it(), Bt(), ua(), Fc(), mr(), lo(), so(), za() (+21 more)

### Community 77 - "Media Document Resource"
Cohesion: 0.12
Nodes (31): ot(), Wt(), kt(), Ct(), yn(), Ut(), kn(), _a() (+23 more)

### Community 113 - "Adapter Tier Indexes"
Cohesion: 0.20
Nodes (18): Vt(), Ae(), fa(), da(), wn(), ro(), pa(), no() (+10 more)

### Community 69 - "Agency Resource"
Cohesion: 0.09
Nodes (38): P(), Lc(), ka(), wa(), ai(), Zt(), Nc(), ao() (+30 more)

### Community 0 - "Host Architecture and Conformance"
Cohesion: 0.01
Nodes (159): nodesBetween(), descendants(), textBetween(), toJSON(), textContent(), rangeHasMark(), Lc(), serializeFragment() (+151 more)

### Community 45 - "Territory Controller"
Cohesion: 0.06
Nodes (53): Sc(), Cc(), vc(), Mc(), eq(), findDiffStart(), findDiffEnd(), ao() (+45 more)

### Community 19 - "Role Policy"
Cohesion: 0.03
Nodes (102): constructor(), forEach(), children(), Ic(), compile(), Jc(), ug(), changedRange() (+94 more)

### Community 16 - "Testbench Migration Handoffs"
Cohesion: 0.05
Nodes (108): append(), cut(), replaceChild(), child(), maybeChild(), findIndex(), from(), io() (+100 more)

### Community 24 - "Module Discovery and Enablement"
Cohesion: 0.04
Nodes (75): cutByIndex(), insertAt(), removeBetween(), slice(), replace(), Fm(), invert(), appendMap() (+67 more)

### Community 70 - "Branch Resource"
Cohesion: 0.07
Nodes (38): toString(), toStringInner(), fromJSON(), startIndex(), endIndex(), check(), Rc(), Bc() (+30 more)

### Community 58 - "Branch Controller"
Cohesion: 0.07
Nodes (46): fromArray(), Em(), nodeAt(), parse(), defaultType(), edge(), eat(), err() (+38 more)

### Community 65 - "Portal Report Controller"
Cohesion: 0.08
Nodes (40): setFrom(), maxOpen(), mark(), allowsMarkType(), text(), parseSlice(), matchTag(), matchStyle() (+32 more)

### Community 15 - "Host User Model"
Cohesion: 0.06
Nodes (112): resolveDepth(), parent(), doc(), node(), index(), indexAfter(), start(), end() (+104 more)

### Community 22 - "Architecture Tests and Standalone Packages"
Cohesion: 0.04
Nodes (89): isText(), fr(), hg(), replaceRange(), replaceRangeWith(), hd(), pd(), Md() (+81 more)

### Community 53 - "OnTheMarket Package Family"
Cohesion: 0.09
Nodes (47): bt(), Cr(), up(), move(), updateAllowDefault(), posAtCoords(), Wn(), scheduleRemoval() (+39 more)

### Community 63 - "Media Document Controller"
Cohesion: 0.08
Nodes (29): en(), ii(), Et(), oi(), gt(), On(), E(), x() (+21 more)

### Community 114 - "Instructions Package Family"
Cohesion: 0.21
Nodes (18): Ce(), Vt(), yt(), zt(), Le(), Ie(), ut(), Te() (+10 more)

### Community 68 - "Connected Account Policy"
Cohesion: 0.14
Nodes (39): re(), Dt(), U(), lt(), di(), it(), ct(), ci() (+31 more)

### Community 103 - "Parties Filament Plugin"
Cohesion: 0.13
Nodes (21): ht(), ye(), Z(), b(), k(), Bt(), je(), ot() (+13 more)

### Community 88 - "Viewing Resource"
Cohesion: 0.15
Nodes (27): renderOptions(), renderOptionGroup(), createOptionElement(), updateOptionLabelInList(), handleSelectButtonKeydown(), handleDropdownKeydown(), toggleDropdown(), hasAvailableOptions() (+19 more)

### Community 54 - "Scheduler Queues and Webhooks"
Cohesion: 0.07
Nodes (31): we(), rt(), St(), Ee(), Ae(), R(), it(), L() (+23 more)

### Community 46 - "Zoopla Sync Controller"
Cohesion: 0.05
Nodes (30): c(), init(), configureTransitions(), configureAnimations(), constructor(), actions(), status(), duration() (+22 more)

### Community 162 - "Analytics Destination Registry"
Cohesion: 0.40
Nodes (2): init(), updateWidth()

### Community 25 - "Dev Environment and Agent Configs"
Cohesion: 0.05
Nodes (47): ja(), za(), Ka(), ai(), fo(), uo(), $t(), ns() (+39 more)

### Community 72 - "Letting Resource"
Cohesion: 0.11
Nodes (37): q(), yr(), _a(), _o(), ut(), To(), Ro(), r() (+29 more)

### Community 82 - "Property Resource"
Cohesion: 0.12
Nodes (30): Qr(), jt(), pt(), xt(), Ui(), Zr(), Pn(), ei() (+22 more)

### Community 75 - "Marketing Campaign Resource"
Cohesion: 0.15
Nodes (33): ca(), ki(), zi(), ma(), rn(), ct(), Bt(), qi() (+25 more)

### Community 126 - "Locale Formatter"
Cohesion: 0.18
Nodes (14): apply(), Wa(), po(), go(), Mt(), fs(), it(), Hr() (+6 more)

### Community 138 - "Viewing Model"
Cohesion: 0.24
Nodes (10): Ee(), At(), Wr(), dt(), he(), ve(), Ge(), V() (+2 more)

### Community 64 - "Party Controller"
Cohesion: 0.08
Nodes (27): en(), ii(), oi(), gt(), On(), E(), S(), v() (+19 more)

### Community 116 - "Media Documents Package Family"
Cohesion: 0.23
Nodes (17): Ce(), Vt(), wt(), zt(), Le(), Ie(), ut(), Te() (+9 more)

### Community 67 - "Sales Progression Controller"
Cohesion: 0.13
Nodes (39): Et(), re(), Dt(), U(), lt(), di(), ct(), ci() (+31 more)

### Community 105 - "Real Estate Core Filament Plugin"
Cohesion: 0.15
Nodes (20): xn(), ht(), An(), we(), Q(), b(), F(), Bt() (+12 more)

### Community 86 - "User Resource"
Cohesion: 0.15
Nodes (27): renderOptions(), renderOptionGroup(), createOptionElement(), updateOptionLabelInList(), handleSelectButtonKeydown(), handleDropdownKeydown(), toggleDropdown(), hasAvailableOptions() (+19 more)

### Community 27 - "Viewing Controller"
Cohesion: 0.09
Nodes (61): Z(), j(), Y(), ee(), te(), re(), le(), Fe() (+53 more)

### Community 1 - "Real Estate OpenAPI Specs"
Cohesion: 0.01
Nodes (107): co(), Yc(), ws(), In(), _s(), vs(), numeric(), fh() (+99 more)

### Community 52 - "Money Value Object"
Cohesion: 0.05
Nodes (48): ps(), gs(), Kt(), Wt(), ro(), $c(), Zc(), vn() (+40 more)

### Community 10 - "Module Manifest Parser"
Cohesion: 0.03
Nodes (123): Bc(), constructor(), set(), get(), _getAnims(), listen(), has(), ve() (+115 more)

### Community 51 - "Theme Helper Functions"
Cohesion: 0.07
Nodes (48): th(), sh(), rh(), B(), E(), ys(), ko(), vo() (+40 more)

### Community 48 - "Zoopla Package Family"
Cohesion: 0.06
Nodes (50): interpolate(), We(), An(), bi(), xe(), Dt(), Wo(), xo() (+42 more)

### Community 47 - "Searcher Registry Test"
Cohesion: 0.06
Nodes (51): clone(), En(), Rn(), format(), name(), cg(), hg(), create() (+43 more)

### Community 35 - "Theme Support Module"
Cohesion: 0.05
Nodes (57): negate(), Y(), at(), K(), Ln(), xi(), wi(), ki() (+49 more)

### Community 20 - "Team Policy"
Cohesion: 0.04
Nodes (100): rotate(), I(), ye(), gi(), ah(), se(), mi(), ut() (+92 more)

### Community 31 - "Rightmove Portal Integration"
Cohesion: 0.05
Nodes (62): P(), Lt(), pi(), zo(), Ei(), Wa(), parse(), parsePrimitiveData() (+54 more)

### Community 14 - "Package Naming and Migration ADRs"
Cohesion: 0.03
Nodes (112): W(), N(), Nn(), yi(), vi(), Ti(), Cs(), Ii() (+104 more)

### Community 76 - "Match Profile Resource"
Cohesion: 0.08
Nodes (31): ks(), tt(), ad(), pd(), Xa(), xr(), pathSegment(), path() (+23 more)

### Community 102 - "Organizations Filament Plugin"
Cohesion: 0.11
Nodes (21): zi(), generateLabels(), _updateRadius(), _getSortedDatasetMetas(), getSortedVisibleDatasetMetas(), getVisibleDatasetCount(), updateControlPoints(), ar() (+13 more)

### Community 121 - "Sales Progression Family"
Cohesion: 0.20
Nodes (14): _notify(), stop(), active(), cancel(), tick(), wait(), _animateOptions(), _createAnimations() (+6 more)

### Community 127 - "Update Profile Information"
Cohesion: 0.19
Nodes (13): _refresh(), start(), addBox(), getBasePixel(), getBaseValue(), sf(), nf(), df() (+5 more)

### Community 9 - "CI Ratchets and Conformance Audit"
Cohesion: 0.02
Nodes (95): oo(), be(), hexString(), mix(), lighten(), darken(), saturate(), desaturate() (+87 more)

### Community 79 - "OnTheMarket Sync Resource"
Cohesion: 0.09
Nodes (31): qt(), Xt(), lt(), et(), qi(), co(), Je(), Ze() (+23 more)

### Community 96 - "Offer Model"
Cohesion: 0.09
Nodes (26): so(), constructor(), ks(), Ss(), apply(), Le(), configure(), ka() (+18 more)

### Community 50 - "Translation Service"
Cohesion: 0.05
Nodes (49): ro(), li(), zo(), Gt(), ei(), set(), get(), describe() (+41 more)

### Community 133 - "Branch Model"
Cohesion: 0.22
Nodes (11): interpolate(), hi(), dn(), getBaseValue(), drawBackground(), qr(), tl(), ol() (+3 more)

### Community 61 - "Marketing Campaign Controller"
Cohesion: 0.07
Nodes (42): A(), S(), ve(), gs(), ko(), It(), wo(), Bt() (+34 more)

### Community 73 - "Listing Resource"
Cohesion: 0.09
Nodes (35): T(), Zt(), ws(), _getOtherScale(), parse(), parsePrimitiveData(), parseArrayData(), parseObjectData() (+27 more)

### Community 32 - "Module Registry"
Cohesion: 0.06
Nodes (61): P(), bs(), nt(), Se(), N(), ci(), Pe(), vs() (+53 more)

### Community 74 - "Management Record Resource"
Cohesion: 0.10
Nodes (33): L(), W(), Cs(), _update(), reset(), beforeUpdate(), afterUpdate(), beforeSetDimensions() (+25 more)

### Community 97 - "Theme Service Provider"
Cohesion: 0.10
Nodes (26): ni(), ps(), updateIndex(), getMeta(), getController(), getElement(), xn(), Rr() (+18 more)

### Community 89 - "Zoopla Sync Resource"
Cohesion: 0.11
Nodes (27): ai(), ri(), di(), bi(), Z(), Oe(), Ae(), running() (+19 more)

### Community 81 - "Portal Report Resource"
Cohesion: 0.09
Nodes (30): Te(), Mt(), Xo(), qo(), vi(), Ns(), getMaxOverflow(), getStyle() (+22 more)

### Community 99 - "Team Resource"
Cohesion: 0.11
Nodes (23): ha(), pt(), wi(), Si(), sn(), dataset(), point(), nearest() (+15 more)

### Community 385 - "Community 385"
Cohesion: 0.67
Nodes (1): ExampleTest

### Community 128 - "Readiness Registry"
Cohesion: 0.18
Nodes (13): CLAUDE.md — project instructions, Dual Filament panels, Tenancy rules that bite, Filament Shield, Spatie Permission (team-scoped roles), Packages are standalone-testable, tests/.gitkeep is load-bearing, Reverb is installed but not wired (+5 more)

### Community 131 - "Theme Switcher"
Cohesion: 0.33
Nodes (10): GitHub Copilot instructions, Junie guidelines, App\Support\ThemeColors, Operations stack (Horizon, Octane, Telescope, Pulse), lerd local PHP development environment, lerd twelve grouped MCP tools, Driving optimisation from real traffic, lerd git worktree subdomains (+2 more)

### Community 142 - "Telescope Dashboard Provider"
Cohesion: 0.36
Nodes (8): Liberu Real Estate README, Theme packages and inheritance, theme.json manifest, ThemeManager::inheritanceChain, Vite inputs are derived, not listed, Liberu Real Estate host application, Portal synchronization modules (Rightmove, Zoopla, OnTheMarket), theme-real-estate-default

### Community 107 - "Settings Filament Plugin"
Cohesion: 0.15
Nodes (20): Conformance spec and migration plan, scripts/fleet, scripts/publish-components (removed), Packagist names drop the module- prefix, Module-repo-first source of truth (§3.1), 48-of-48 divergence audit, Composer vendor stays liberusoftware/ (§3.2), Package naming: -core marks provider-neutrality (§3.3) (+12 more)

### Community 117 - "Offers Package Family"
Cohesion: 0.15
Nodes (17): Code-level conformance audit, SetLocale middleware, LanguageSwitcher (localization-core-livewire), Per-package PHPStan level ratchet, Package CI: three workflows, not three jobs (§3.9), Per-package coverage ratchet, scripts/migrate-testbench, scripts/measure-coverage and set-coverage-thresholds (+9 more)

### Community 132 - "Agency Model"
Cohesion: 0.22
Nodes (11): Foundation compliance, Foundation module implementation matrix, Composition host, TestUser / UsesTestUser, Three packages migrate the users table none of them owns, Three foundation boundaries, Foundation verification gates, Foundation capability → package matrix (+3 more)

### Community 100 - "Identity Filament Plugin"
Cohesion: 0.21
Nodes (22): Admin panel user-management enhancements, Admin panel visual comparison, Admin user-management enhancement, Implementation Summary, Real-Time Notifications Documentation, Admin Panel Quick Reference Guide, Real-time notification system, Pusher broadcasting driver (+14 more)

### Community 295 - "Community 295"
Cohesion: 0.67
Nodes (3): Issue template, Sweep issue template, Sweep AI automation

### Community 119 - "Portals Reporting Package Family"
Cohesion: 0.17
Nodes (15): Module system, module.json manifest, ModuleManagerServiceProvider, ModuleRegistry::resolve, Installation never implies boot, Manifest default_enabled, config/modules.php env overrides, App\Filament\ModulePlugins (+7 more)

### Community 165 - "Meta Customer Normalizer"
Cohesion: 0.47
Nodes (6): tests/Architecture/ModuleBoundariesTest, A rule that cannot fire is not coverage, liberusoftware/package-testbench, Shared Pint and PHPStan configs via --config, Architecture rules relocated (12 → 8), declare(strict_types=1) absent almost everywhere

### Community 84 - "Sales Progression Resource"
Cohesion: 0.15
Nodes (29): §6.2 zero-diff gate, Agent Issue Tracker Convention, Agent Triage Labels, Handoff: Conformance Map (2026-08-04), Handoff: Step 4 Testbench Migration (2026-08-05), Package-owned tests, liberusoftware/composer-installer, Tracked installed package directories (+21 more)

### Community 104 - "Properties Filament Plugin"
Cohesion: 0.26
Nodes (21): Private Messaging System (API reference), Private Messaging System Architecture, Messaging Developer Notes, Messaging Setup Instructions, Private Messaging System, Message Model, MessageController, MessagePolicy (+13 more)

### Community 110 - "Rightmove Client"
Cohesion: 0.20
Nodes (19): Module Development Guide, module.json manifest, Capability declarations (provides / requires), Module categories, Explicit module enablement, Module manager (provider lifecycle authority), No extra.laravel.providers auto-discovery, module:validate command (+11 more)

### Community 139 - "Account Security Page"
Cohesion: 0.42
Nodes (9): Multi-Language Support Documentation, Multi-language support, config('app.supported_locales'), SetLocale middleware, TranslationService (MyMemory), Translation caching, translate:generate artisan command, LanguageSwitcher Livewire component (+1 more)

### Community 108 - "Package Test Case"
Cohesion: 0.26
Nodes (20): Advanced Search Architecture, Advanced Search Functionality, Search Performance Optimization, Advanced search across users, posts and groups, SearchService, SearchController, Search API endpoints, Post model (+12 more)

### Community 98 - "Session Reader"
Cohesion: 0.26
Nodes (24): Theme Architecture, Theme Project Implementation Summary, Theme System Quick Reference, Theme System Guide, Theme System Visual Overview, liberu-theme Composer package, theme.json manifest, Theme parent inheritance chain (+16 more)

### Community 234 - "Community 234"
Cohesion: 0.83
Nodes (4): Agent Domain Docs Convention, Single-context domain docs, CONTEXT.md glossary, docs/adr/ decision records

### Community 112 - "Create User From Provider"
Cohesion: 0.16
Nodes (18): Handoff: Conformance Step 5 (Test Redistribution), Handoff: Conformance Step 4 (Testbench Migration), Conformance Step 5 — Test Redistribution, docs/CONFORMANCE.md — Conformance Plan, liberusoftware/package-testbench, Trap: an empty tests/ directory does not publish, Trap: do not tag before something has run the shipped artifact, Trap: defineEnvironment() overrides must call parent (+10 more)

### Community 30 - "Offer Controller"
Cohesion: 0.05
Nodes (62): liberu-module Composer package type, liberusoftware/composer-installer, Installation does not imply enablement, Module category: foundation, Module category: adapter, Liberu security disclosure policy, liberusoftware/module-manager, liberusoftware/analytics-contracts (+54 more)

### Community 129 - "Delete User Action"
Cohesion: 0.26
Nodes (12): Module category: presentation, Capability boundary discipline, API module index, Core module index, Filament module index, Feature module index, Real Estate project scope, Liberu platform project scope (+4 more)

### Community 66 - "Property Controller"
Cohesion: 0.09
Nodes (39): liberusoftware/roles-permissions, Category: foundation, Category: presentation, Private Security Disclosure Policy, Liberu Authorization Filament, Liberu Scheduler and Queues, Liberu Search, Liberu Search API (+31 more)

### Community 42 - "OnTheMarket Sync Controller"
Cohesion: 0.10
Nodes (54): liberusoftware/organizations-teams, Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration, Liberu Module Manager, Liberu Notifications, Liberu Observability (+46 more)

### Community 55 - "Listings Package Family"
Cohesion: 0.08
Nodes (46): Livewire Module Index, Real Estate Core API, Real Estate Core Filament, Real Estate Core Livewire, Real Estate Core, Real Estate Instructions API, Real Estate Instructions Filament, Real Estate Instructions Livewire (+38 more)

### Community 91 - "Registry Cache"
Cohesion: 0.11
Nodes (26): Real Estate Core OpenAPI v1, Real Estate Instructions OpenAPI v1, Sanctum Bearer Security Scheme, Idempotency-Key Header, PaginationMeta Schema, API Error Schema, 429 RateLimited Response, Agency Resource (+18 more)

### Community 23 - "Sessions and Two-Factor Auth"
Cohesion: 0.05
Nodes (75): Real Estate Offers, Real Estate Offers Filament, Real Estate Offers Livewire, Real Estate OnTheMarket (core module), Real Estate OnTheMarket API, Real Estate OnTheMarket Filament, Real Estate OnTheMarket Livewire, Real Estate Parties (core module) (+67 more)

### Community 389 - "Community 389"
Cohesion: 1.00
Nodes (1): Sanctum Bearer Security Scheme

### Community 387 - "Community 387"
Cohesion: 1.00
Nodes (1): /api/v1/real-estate Versioned Routes

### Community 85 - "Territory Resource"
Cohesion: 0.13
Nodes (27): Liberu Filament modules README, Liberu Livewire modules README, Real Estate API modules README, Real Estate Filament modules README, Real Estate Livewire modules README, One-to-one adapter rule, API adapter tier, Filament adapter tier (+19 more)

### Community 90 - "Search Service"
Cohesion: 0.15
Nodes (26): Liberu Real Estate scope (REAL-ESTATE.md), Real Estate core modules README, Liberu Real Estate scope, Framework-neutral core boundary, Core (domain) tier, Real Estate delivery order (three phases), Delivery phase 2: progression, portals, marketing, reporting, documents, Delivery phase 3: lettings, management, accounting, owner/tenant portals (+18 more)

### Community 120 - "Real Estate Core Family"
Cohesion: 0.19
Nodes (15): Real Estate Portal Integrations README, Team-scoped, authorization-aware, auditable records, Replaceable provider integration adapters, Portal integrations are independently releasable, Replaceable provider credentials and transport, Portal provider: Rightmove, liberusoftware/real-estate-rightmove, liberusoftware/real-estate-rightmove-api (+7 more)

### Community 109 - "OnTheMarket Client"
Cohesion: 0.20
Nodes (19): Liberu Meta Repository Scripts README, liberusoftware/boilerplate-scripts, .liberu-meta.json meta-repository config, setup.sh, update.sh, submit-packagist.php, scripts/fleet, publish-components (removed) (+11 more)

### Community 44 - "Search Controller"
Cohesion: 0.09
Nodes (53): Liberu Base theme README, Liberu Base theme UPGRADING 1.x to 2.0, Clear Signal theme README, Liberu Dark theme README, Liberu Default theme README, Liberu Real Estate Default theme README, Real Estate Default theme UPGRADING to 1.0.0, theme.json manifest (+45 more)

### Community 130 - "Language Switcher"
Cohesion: 0.27
Nodes (12): Delivery phase 1: core transaction chain and website feed, Real Estate capability: Instructions, liberusoftware/real-estate-instructions, Real Estate capability: Listings, liberusoftware/real-estate-listings, liberusoftware/real-estate-instructions-api, liberusoftware/real-estate-listings-api, liberusoftware/real-estate-instructions-filament (+4 more)

### Community 201 - "Community 201"
Cohesion: 0.70
Nodes (5): Real Estate capability: Real Estate Core, liberusoftware/real-estate-core, liberusoftware/real-estate-core-api, liberusoftware/real-estate-core-filament, liberusoftware/real-estate-core-livewire

### Community 200 - "Community 200"
Cohesion: 0.70
Nodes (5): Real Estate capability: Parties, liberusoftware/real-estate-parties, liberusoftware/real-estate-parties-api, liberusoftware/real-estate-parties-filament, liberusoftware/real-estate-parties-livewire

### Community 202 - "Community 202"
Cohesion: 0.70
Nodes (5): Real Estate capability: Valuations, liberusoftware/real-estate-valuations, liberusoftware/real-estate-valuations-api, liberusoftware/real-estate-valuations-filament, liberusoftware/real-estate-valuations-livewire

### Community 198 - "Instruction Model"
Cohesion: 0.70
Nodes (5): Real Estate capability: Matching, liberusoftware/real-estate-matching, liberusoftware/real-estate-matching-api, liberusoftware/real-estate-matching-filament, liberusoftware/real-estate-matching-livewire

### Community 203 - "Community 203"
Cohesion: 0.70
Nodes (5): Real Estate capability: Viewings, liberusoftware/real-estate-viewings, liberusoftware/real-estate-viewings-api, liberusoftware/real-estate-viewings-filament, liberusoftware/real-estate-viewings-livewire

### Community 199 - "Letting Model"
Cohesion: 0.70
Nodes (5): Real Estate capability: Offers, liberusoftware/real-estate-offers, liberusoftware/real-estate-offers-api, liberusoftware/real-estate-offers-filament, liberusoftware/real-estate-offers-livewire

## Ambiguous Edges - Review These
- `OpenAPI v1: Real Estate OnTheMarket Sync API` → `Real Estate Portals and Reporting (core module)`  [AMBIGUOUS]
  modules/real-estate-onthemarket-api/openapi/v1/real-estate-onthemarket.yaml · relation: conceptually_related_to
- `liberusoftware/boilerplate-scripts` → `scripts/fleet`  [AMBIGUOUS]
  scripts/README.md · relation: conceptually_related_to
- `Admin user-management enhancement` → `Host boundary: /app is composition only`  [AMBIGUOUS]
  docs/ADMIN_PANEL_ENHANCEMENTS.md · relation: conceptually_related_to
- `Session handoffs in docs/handoffs/` → `lerd local PHP development environment`  [AMBIGUOUS]
  CLAUDE.md · relation: conceptually_related_to
- `Daily Dependabot updates` → `Third-party actions not pinned to commit SHAs`  [AMBIGUOUS]
  .github/dependabot.yml · relation: conceptually_related_to
- `Full-text indexes` → `Post model`  [AMBIGUOUS]
  docs/SEARCH_OPTIMIZATION.md · relation: conceptually_related_to
- `Explicit module enablement` → `Reproducible composition from the lockfile`  [AMBIGUOUS]
  docs/MODULE_DEVELOPMENT.md · relation: conceptually_related_to
- `modules/search package` → `liberusoftware/module-search-demo`  [AMBIGUOUS]
  docs/SEARCH_FUNCTIONALITY.md · relation: conceptually_related_to
- `Real-time notification system` → `Private Messaging System`  [AMBIGUOUS]
  docs/IMPLEMENTATION_SUMMARY.md · relation: shares_data_with
- `Enabled By Default Declaration` → `Installation Does Not Imply Enablement`  [AMBIGUOUS]
  modules/module-manager/README.md · relation: conceptually_related_to
- `Liberu Identity Administration (identity-filament)` → `Liberu Identity`  [AMBIGUOUS]
  modules/identity-core-filament/README.md · relation: conceptually_related_to
- `Instruction Record` → `Branch Resource`  [AMBIGUOUS]
  modules/real-estate-instructions/README.md · relation: conceptually_related_to
- `Liberu Application Composition` → `Real Estate Zoopla`  [AMBIGUOUS]
  projects/LIBERU.md · relation: references
- `Real Estate Property Management Module` → `Real Estate Properties Module`  [AMBIGUOUS]
  modules/real-estate-property-management/README.md · relation: conceptually_related_to
- `real-estate-default theme` → `Real Estate capability: Portals and Reporting`  [AMBIGUOUS]
  themes/real-estate-default/README.md · relation: conceptually_related_to
- `Website feed (phase 1 deliverable)` → `Real Estate capability: Portals and Reporting`  [AMBIGUOUS]
  projects/real-estate/REAL-ESTATE.md · relation: conceptually_related_to

## Knowledge Gaps
- **187 isolated node(s):** `php`, `/usr/local/bin/php`, `CurrencyMismatch`, `UnknownCurrency`, `IdentityFilamentServiceProvider` (+182 more)
  These have ≤1 connection - possible missing edges or undocumented components.
- **Thin community `Community 239`** (1 nodes): `ModulePlugins`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Viewings Package Family`** (1 nodes): `User`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 285`** (1 nodes): `ThemeColors`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Meta Analytics Destination`** (1 nodes): `UserFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 348`** (1 nodes): `ActivityCommentsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 260`** (1 nodes): `AnalyticsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 369`** (1 nodes): `ConsentPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 220`** (1 nodes): `DestinationRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 277`** (1 nodes): `EventRouter`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 278`** (1 nodes): `EventSanitizer`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Zoopla Client`** (2 nodes): `RealEstateDefaultThemeServiceProvider`, `2d8dfb2 Integrate real estate theme and Packagist Composer sources (#1306)`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 349`** (1 nodes): `AnalyticsGoogleServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 221`** (1 nodes): `GoogleDestination`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 374`** (1 nodes): `GoogleEventMapper`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 350`** (1 nodes): `AnalyticsMetaServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 223`** (1 nodes): `MetaCustomerNormalizer`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 224`** (1 nodes): `MetaDestination`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 279`** (1 nodes): `IdempotencyStore`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 261`** (1 nodes): `ApplicationCoreServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 208`** (1 nodes): `ReadinessRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 292`** (1 nodes): `ReadinessController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 304`** (1 nodes): `SecurityHeaders`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 372`** (1 nodes): `EnvironmentValidator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 380`** (1 nodes): `SystemClock`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 382`** (1 nodes): `UuidIdentifierFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 262`** (1 nodes): `AuditServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 368`** (1 nodes): `AuditContext`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 370`** (1 nodes): `DatabaseAuditRecorder`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 263`** (1 nodes): `CurrencyServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 256`** (1 nodes): `CurrencyContext`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 344`** (1 nodes): `CurrencyPreferenceResolver`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 257`** (1 nodes): `CurrencyRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 258`** (1 nodes): `MoneyFormatter`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 386`** (1 nodes): `Currency`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 287`** (1 nodes): `ExchangeRate`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Lettings Filament Plugin`** (1 nodes): `Money`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 351`** (1 nodes): `DeveloperExperienceServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 371`** (1 nodes): `EnvironmentDoctor`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 352`** (1 nodes): `FeatureFlagsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 373`** (1 nodes): `FlagEvaluator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 264`** (1 nodes): `FilesMediaServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 378`** (1 nodes): `RejectingMalwareScanner`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 381`** (1 nodes): `UploadPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Module Integration Coverage Test`** (1 nodes): `IdentityFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Valuations Filament Plugin`** (1 nodes): `UserResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 339`** (1 nodes): `EditUser`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 341`** (1 nodes): `ListUsers`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 300`** (1 nodes): `TestPanelProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Set Locale Middleware`** (1 nodes): `TestCase`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 297`** (1 nodes): `IdentityEvent`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 265`** (1 nodes): `IdentityServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 302`** (1 nodes): `EmitAuthenticationEvent`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 219`** (1 nodes): `ConfiguredRegistrationPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 375`** (1 nodes): `IdentifierNormalizer`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 377`** (1 nodes): `RejectingInvitationValidator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 298`** (1 nodes): `ConnectedAccountFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Telescope Entries Migration`** (1 nodes): `CreateUserFromProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 232`** (1 nodes): `UpdateConnectedAccount`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 337`** (1 nodes): `ConnectedAccount`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Sales Progression Filament Plugin`** (1 nodes): `ConnectedAccountPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 252`** (1 nodes): `SocialstreamServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 294`** (1 nodes): `TransferSchema`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 353`** (1 nodes): `ImportExportServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 283`** (1 nodes): `RowValidator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 266`** (1 nodes): `IntegrationsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 222`** (1 nodes): `IntegrationRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 241`** (1 nodes): `CreateNewUser`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 207`** (1 nodes): `UpdateUserProfileInformation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 209`** (1 nodes): `DeleteUser`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 250`** (1 nodes): `FortifyServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 210`** (1 nodes): `LanguageSwitcher`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 354`** (1 nodes): `LocalizationLivewireServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 235`** (1 nodes): `LocaleContext`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 206`** (1 nodes): `LocaleFormatter`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 242`** (1 nodes): `SetLocale`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 267`** (1 nodes): `LocalizationServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 225`** (1 nodes): `TranslationRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 358`** (1 nodes): `MyMemoryServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Local Search Indexer`** (1 nodes): `TranslationService`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Module Plugins Composer`** (1 nodes): `ModuleManagerFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 356`** (1 nodes): `ModuleManagerFilamentServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 249`** (1 nodes): `FoundationOperations`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Zoopla Filament Plugin`** (1 nodes): `RegistryCache`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Matching Package Family`** (1 nodes): `Manifest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 355`** (1 nodes): `ModuleDiscovery`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 268`** (1 nodes): `ModuleManagerServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Valuation Model`** (1 nodes): `ModuleRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 269`** (1 nodes): `ModuleValidationGuard`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 357`** (1 nodes): `ModuleValidator`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 359`** (1 nodes): `NotificationsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 276`** (1 nodes): `DeliveryRetry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 281`** (1 nodes): `NotificationPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 303`** (1 nodes): `CorrelationId`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 270`** (1 nodes): `ObservabilityServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 251`** (1 nodes): `HorizonDashboardServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 215`** (1 nodes): `TelescopeDashboardServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 282`** (1 nodes): `NullMetrics`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 376`** (1 nodes): `Redactor`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 284`** (1 nodes): `SloRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Organization User Trait`** (1 nodes): `OrganizationsFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Sweep AI Automation`** (1 nodes): `TeamResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 338`** (1 nodes): `EditTeam`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 340`** (1 nodes): `ListTeams`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 240`** (1 nodes): `OrganizationUser`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 299`** (1 nodes): `TeamFactory`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 245`** (1 nodes): `Organization`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 247`** (1 nodes): `Team`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 246`** (1 nodes): `TeamInvitation`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 271`** (1 nodes): `OrganizationsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Theme Discovery`** (1 nodes): `TeamPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 345`** (1 nodes): `CurrentTeamResolver`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 293`** (1 nodes): `ProfileUpdate`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 360`** (1 nodes): `ProfilesServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Listings Filament Plugin`** (1 nodes): `AgencyController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Portals Reporting Filament Plugin`** (1 nodes): `TerritoryController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Module Support Coverage Test`** (1 nodes): `AgencyResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Translation Registry Test`** (1 nodes): `BranchResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Core Capability Definition`** (1 nodes): `TerritoryResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Update Connected Account`** (1 nodes): `InstructionResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Marketing Filament Plugin`** (1 nodes): `LettingController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `OnTheMarket Listing Sync Job`** (1 nodes): `LettingResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 213`** (1 nodes): `LettingPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Rightmove Listing Sync Job`** (1 nodes): `ListingResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Update Letting Action`** (1 nodes): `MarketingCampaignResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Update Management Record Action`** (1 nodes): `MatchProfileResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Media Documents Filament Plugin`** (1 nodes): `MediaDocumentController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Module Boundaries Test`** (1 nodes): `MediaDocumentResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 244`** (1 nodes): `MediaDocument`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Letting Policy`** (1 nodes): `OfferController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Locale Context`** (1 nodes): `OfferResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Google Analytics Destination`** (1 nodes): `OfferList`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Offers Filament Plugin`** (1 nodes): `OnTheMarketSyncController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Integration Adapter Contract`** (1 nodes): `OnTheMarketSyncResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 226`** (1 nodes): `OnTheMarketClient`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `OnTheMarket Transport Contract`** (1 nodes): `PartyResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Create New User Action`** (1 nodes): `PartiesFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Rightmove Transport Contract`** (1 nodes): `PortalReportResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Search Indexer Contract`** (1 nodes): `PropertyResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Rightmove Filament Plugin`** (1 nodes): `Property`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Matching Filament Plugin`** (1 nodes): `ManagementRecordController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Zoopla Listing Sync Job`** (1 nodes): `ManagementRecordResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 214`** (1 nodes): `ManagementRecordPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `OnTheMarket Filament Plugin`** (1 nodes): `RightmoveSyncController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Setting Definition Contract`** (1 nodes): `RightmoveSyncResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 227`** (1 nodes): `RightmoveClient`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Zoopla Transport Contract`** (1 nodes): `SalesProgressionResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Property History Model`** (1 nodes): `ValuationController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Parties Capability Definition`** (1 nodes): `ValuationResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Territory Model`** (1 nodes): `ViewingController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Properties Capability Definition`** (1 nodes): `ViewingResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Integration Registry`** (1 nodes): `ViewingList`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 248`** (1 nodes): `Viewing`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Property Management Filament Plugin`** (1 nodes): `ZooplaSyncController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Valuations Capability Definition`** (1 nodes): `ZooplaSyncResource`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 228`** (1 nodes): `ZooplaClient`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 361`** (1 nodes): `RolesPermissionsFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Privileged Actor Contract`** (1 nodes): `RolePolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 254`** (1 nodes): `PermissionRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 272`** (1 nodes): `RolesPermissionsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 343`** (1 nodes): `AnyTeamRoleLookup`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 255`** (1 nodes): `BreakGlass`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 346`** (1 nodes): `SeparationOfDuty`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 362`** (1 nodes): `SchedulerQueuesServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 280`** (1 nodes): `JobPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Recovery Code Hasher`** (1 nodes): `SearchController`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 363`** (1 nodes): `SearchApiServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 288`** (2 nodes): `scopeSearch()`, `searchableColumns()`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 253`** (1 nodes): `IndexableRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 217`** (1 nodes): `SearcherRegistry`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 273`** (1 nodes): `SearchServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 218`** (1 nodes): `LocalSearchIndexer`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Viewings Filament Plugin`** (1 nodes): `SearchService`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Searcher Registry`** (1 nodes): `SearcherRegistryTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 212`** (1 nodes): `AccountSecurity`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Frontend Menu Script`** (1 nodes): `SessionsDevicesFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 364`** (1 nodes): `SessionsDevicesFilamentServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Trusted Device Manager`** (1 nodes): `SessionReader`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 274`** (1 nodes): `SessionsDevicesServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 342`** (1 nodes): `ManageSiteSettings`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Idempotency Middleware`** (1 nodes): `SettingsFilamentPlugin`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 259`** (1 nodes): `ScopedSettings`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 347`** (1 nodes): `SiteSettings`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 365`** (1 nodes): `SettingsServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 211`** (1 nodes): `ThemeSwitcher`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 366`** (1 nodes): `ThemeSupportLivewireServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Configured Registration Policy`** (1 nodes): `ThemeCache`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 205`** (1 nodes): `ThemeDiscovery`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Valuations Package Family`** (1 nodes): `ThemeManifest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Translation Provider Registry`** (1 nodes): `ThemeServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Offer Resource`** (1 nodes): `ThemeManager`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 383`** (2 nodes): `writeCoverageTheme()`, `coverageThemePackage()`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 296`** (1 nodes): `TwoFactorPolicy`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 216`** (1 nodes): `RecoveryCodeHasher`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 229`** (1 nodes): `TrustedDeviceManager`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 275`** (1 nodes): `TwoFactorServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 379`** (1 nodes): `RetrySchedule`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 286`** (1 nodes): `WebhookSigner`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 367`** (1 nodes): `WebhooksServiceProvider`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Parties Package Family`** (2 nodes): `style()`, `update()`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Analytics Destination Registry`** (2 nodes): `init()`, `updateWidth()`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 385`** (1 nodes): `ExampleTest`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 389`** (1 nodes): `Sanctum Bearer Security Scheme`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.
- **Thin community `Community 387`** (1 nodes): `/api/v1/real-estate Versioned Routes`
  Too small to be a meaningful cluster - may be noise or needs more connections extracted.

## Suggested Questions
_Questions this graph is uniquely positioned to answer:_

- **What is the exact relationship between `OpenAPI v1: Real Estate OnTheMarket Sync API` and `Real Estate Portals and Reporting (core module)`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `liberusoftware/boilerplate-scripts` and `scripts/fleet`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `Admin user-management enhancement` and `Host boundary: /app is composition only`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `Session handoffs in docs/handoffs/` and `lerd local PHP development environment`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `Daily Dependabot updates` and `Third-party actions not pinned to commit SHAs`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `Full-text indexes` and `Post model`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._
- **What is the exact relationship between `Explicit module enablement` and `Reproducible composition from the lockfile`?**
  _Edge tagged AMBIGUOUS (relation: conceptually_related_to) - confidence is low._