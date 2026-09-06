# Node Description Batch 76 of 212

Graphify is running in assistant/skill mode (no API key). You are the host
assistant (Claude Code / Codex / Gemini CLI). Read the prompt below and write
your JSON answer to the answer file.

## Prompt

You are documenting nodes in a knowledge graph.
For each entry below, write ONE concise factual plain-language sentence
describing what it is or does. Use only the provided context.
For a code symbol (kind=code-symbol — a function, class, or constant),
describe what the function/symbol does based on its name, source location
and neighbors — e.g. "Resolves the configured ontology profile from graphify.yaml.".
For an entity node (any other kind — e.g. a person, place, event, object),
describe what the entity is and its role, grounded in its type, its
relations (neighbors) and the provided citations/evidence — e.g.
"Lady Carfax, a wealthy heiress who disappears en route to Lausanne.".
Ground entity descriptions in the citations/evidence when present; do not
speculate beyond the context, so a node with no supporting context may be
left out of the reply.
LANGUAGE: each entry has a `lang=` marker giving the language of its source.
Write that entry's description in EXACTLY that language. Do not translate to
a single common language — match each node's source language individually.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "models_territory_territory": "Territory" | kind=code-symbol | source=modules/real-estate-core/src/Models/Territory.php:L13 | neighbors=[Territory.php, .casts(), .scopeForTeam(), .team()] | lang=en
- "models_valuation_valuation": "Valuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Models/Valuation.php:L11 | neighbors=[Valuation.php, .canTransitionTo(), .casts(), .scopeForTeam()] | lang=en
- "models_viewing_viewing": "Viewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Models/Viewing.php:L11 | neighbors=[Viewing.php, .canTransitionTo(), .casts(), .scopeForTeam()] | lang=en
- "one_core_per_adapter_rule": "One core package per adapter" | kind=entity | source=modules/api/README.md | neighbors=[API module index, Core module index, Feature module index, Filament module index] | lang=it
- "one_to_one_adapter_rule": "One-to-one adapter rule" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[API adapter tier, Filament adapter tier, Livewire adapter tier, Liberu Real Estate scope] | lang=en
- "pages_accountsecurity_accountsecurity": "AccountSecurity" | kind=code-symbol | source=modules/sessions-devices-filament/src/Pages/AccountSecurity.php:L9 | neighbors=[AccountSecurity.php, .canAccess(), .mount(), .revoke()] | lang=en
- "pages_createmarketingcampaign": "CreateMarketingCampaign.php" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/CreateMarketingCampaign.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, 5eb4712 Harden real estate Filament bou…, CreateMarketingCampaign] | lang=en
- "pages_createonthemarketsync": "CreateOnTheMarketSync.php" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/CreateOnTheMarketSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, CreateOnTheMarketSync] | lang=en
- "pages_createportalreport": "CreatePortalReport.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/CreatePortalReport.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, 5eb4712 Harden real estate Filament bou…, CreatePortalReport] | lang=en
- "pages_createrightmovesync": "CreateRightmoveSync.php" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/CreateRightmoveSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, CreateRightmoveSync] | lang=en
- "pages_createsalesprogression": "CreateSalesProgression.php" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/CreateSalesProgression.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 6385f28 Add sales progression modules a…, CreateSalesProgression] | lang=en
- "pages_createzooplasync": "CreateZooplaSync.php" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/CreateZooplaSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, CreateZooplaSync] | lang=en
- "pkg_liberusoftware_identity": "liberusoftware/identity" | kind=entity | source=modules/sessions-devices/README.md:Requirements and installation | neighbors=[Liberu Core Modules Scope, Liberu Search, Liberu Sessions and Devices, Liberu Two-Factor Authentication] | lang=en
- "planned_backlog_marker": "'planned' as an explicit backlog marker" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Real Estate capability: Lettings, Real Estate capability: Property Manage…, Real Estate core modules README, Unpublished theme preview image] | lang=en
- "policies_lettingpolicy_lettingpolicy": "LettingPolicy" | kind=code-symbol | source=modules/real-estate-lettings/src/Policies/LettingPolicy.php:L9 | neighbors=[LettingPolicy.php, .delete(), .update(), .view()] | lang=en
- "policies_managementrecordpolicy_managementrecordpolicy": "ManagementRecordPolicy" | kind=code-symbol | source=modules/real-estate-property-management/src/Policies/ManagementRecordPolicy.php:L9 | neighbors=[ManagementRecordPolicy.php, .delete(), .update(), .view()] | lang=en
- "presentation_neutral_core": "Presentation-Neutral Core Package" | kind=entity | source=modules/real-estate-core/README.md | neighbors=[Package Category: foundation, Real Estate Core, Real Estate Instructions, Real Estate Lettings] | lang=en
- "provider_neutral_domain": "Provider-Neutral Domain, Replaceable Adapters" | kind=entity | source=modules/real-estate-marketing/README.md | neighbors=[Filament 5 Resource Adapter, Livewire 4 List Adapter, Real Estate Marketing, Real Estate Media and Documents] | lang=en
- "providers_telescopedashboardserviceprovider_telescopedashboardserviceprovider": "TelescopeDashboardServiceProvider" | kind=code-symbol | source=modules/observability/src/Providers/TelescopeDashboardServiceProvider.php:L11 | neighbors=[TelescopeDashboardServiceProvider.php, .gate(), .hideSensitiveRequestDetails(), .register()] | lang=en
- "re_theme_do_not_edit_installed_files": "Do not edit installed files under themes/" | kind=entity | source=themes/real-estate-default/UPGRADING.md | neighbors=[Real Estate Default theme UPGRADING to …, Component repositories are the source o…, liberusoftware/composer-installer, Host-controlled theme selection (config…] | lang=pt
- "real_estate_core_api_module": "Real Estate Core API" | kind=entity | source=modules/real-estate-core-api/README.md | neighbors=[Branch Resource, Real Estate Core OpenAPI v1, Real Estate Core, Team-Scoped Boundary] | lang=en
- "real_estate_core_filament_module": "Real Estate Core Filament" | kind=entity | source=modules/real-estate-core-filament/README.md | neighbors=[Filament 5, Branch Resource, Real Estate Core, Team-Scoped Boundary] | lang=en
- "real_estate_delivery_order": "Real Estate delivery order (three phases)" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Delivery phase 1: core transaction chai…, Delivery phase 2: progression, portals,…, Delivery phase 3: lettings, management,…, Liberu Real Estate scope] | lang=en
- "real_estate_instructions_api_module": "Real Estate Instructions API" | kind=entity | source=modules/real-estate-instructions-api/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Real Estate Instructions OpenAPI v1, Real Estate Instructions, Team-Scoped Boundary] | lang=en
- "real_estate_listings_livewire": "Real Estate Listings Livewire" | kind=entity | source=modules/real-estate-listings-livewire/README.md | neighbors=[Composer Unprefixed / GitHub module- Pr…, Livewire 4 List Adapter, Real Estate Listings, Team-Scoped Boundary] | lang=en
- "real_estate_parties_api_module": "Real Estate Parties API" | kind=entity | source=modules/real-estate-parties-api/README.md | neighbors=[OpenAPI v1: Real Estate Parties API, Team-scoped domain records, /api/v1/real-estate versioned namespace, Real Estate Parties (core module)] | lang=en
- "real_estate_project_scope": "Real Estate project scope" | kind=entity | source=modules/features/README.md | neighbors=[API module index, Core module index, Feature module index, Filament module index] | lang=en
- "recovery_recoverycodehasher_recoverycodehasher": "RecoveryCodeHasher" | kind=code-symbol | source=modules/two-factor-authentication/src/Recovery/RecoveryCodeHasher.php:L7 | neighbors=[RecoveryCodeHasher.php, .__construct(), .hash(), .verifyAndConsume()] | lang=en
- "registry_searcherregistry_searcherregistry": "SearcherRegistry" | kind=code-symbol | source=modules/search/src/Registry/SearcherRegistry.php:L20 | neighbors=[SearcherRegistry.php, .all(), .register(), .types()] | lang=en
- "resources_branchresource": "BranchResource.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, BranchResource] | lang=en
- "schema_error_envelope": "Error schema (message, code, errors)" | kind=entity | source=modules/real-estate-parties-api/openapi/v1/real-estate-parties.yaml | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, OpenAPI v1: Real Estate Parties API, OpenAPI v1: Real Estate Portals and Rep…, OpenAPI v1: Real Estate Properties API] | lang=en
- "schema_pagination_meta": "PaginationMeta schema" | kind=entity | source=modules/real-estate-parties-api/openapi/v1/real-estate-parties.yaml | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, OpenAPI v1: Real Estate Parties API, OpenAPI v1: Real Estate Portals and Rep…, OpenAPI v1: Real Estate Properties API] | lang=en
- "seeders_databaseseeder": "DatabaseSeeder.php" | kind=code-symbol | source=database/seeders/DatabaseSeeder.php:L1 | neighbors=[750c68d Add socialstream, agent role, k…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, DatabaseSeeder] | lang=en
- "seeders_teamseeder": "TeamSeeder.php" | kind=code-symbol | source=database/seeders/TeamSeeder.php:L1 | neighbors=[10d943c Update UserSeeder and RoleSeeder, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, TeamSeeder] | lang=en
- "seeders_userseeder": "UserSeeder.php" | kind=code-symbol | source=database/seeders/UserSeeder.php:L1 | neighbors=[10d943c Update UserSeeder and RoleSeeder, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, UserSeeder] | lang=en
- "services_localsearchindexer_localsearchindexer": "LocalSearchIndexer" | kind=code-symbol | source=modules/search/src/Services/LocalSearchIndexer.php:L8 | neighbors=[LocalSearchIndexer.php, .flush(), .index(), .remove()] | lang=en
- "services_thememanager_thememanager_activecssentry": ".activeCssEntry()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L227 | neighbors=[ThemeManager, .getThemeCss(), .viteHasAsset(), .activeEntries()] | lang=en
- "services_thememanager_thememanager_firstasset": ".firstAsset()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L212 | neighbors=[ThemeManager, .inheritanceChain(), .getThemeCss(), .getThemeJs()] | lang=en
- "services_thememanager_thememanager_getthemeviewspath": ".getThemeViewsPath()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L141 | neighbors=[ThemeManager, .getThemePath(), .hasCustomLayout(), .registerThemePaths()] | lang=en
- "services_thememanager_thememanager_registerthemepaths": ".registerThemePaths()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L170 | neighbors=[ThemeManager, .getThemeViewsPath(), .inheritanceChain(), .setTheme()] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-075.json

Keep each description factual and concise (one sentence). No markdown, no prose
outside the JSON object. It is acceptable to omit a node if context is
insufficient — but include every node you can ground confidently.

Example answer format:
```json
{
  "node_id_1": "Resolves the configured ontology profile from graphify.yaml.",
  "node_id_2": "Colonel James Barclay, an antagonist in The Crooked Man."
}
```
