# Node Description Batch 109 of 212

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
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "real_estate_instructions_filament_module": "Real Estate Instructions Filament" | kind=entity | source=modules/real-estate-instructions-filament/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Filament 5, Real Estate Instructions]
- "real_estate_listings_api": "Real Estate Listings API" | kind=entity | source=modules/real-estate-listings-api/README.md | neighbors=[Composer Unprefixed / GitHub module- Pr…, Real Estate Listings, Team-Scoped Boundary]
- "real_estate_listings_filament": "Real Estate Listings Filament" | kind=entity | source=modules/real-estate-listings-filament/README.md | neighbors=[Composer Unprefixed / GitHub module- Pr…, Filament 5 Resource Adapter, Real Estate Listings]
- "real_estate_offers_api": "Real Estate Offers API" | kind=entity | source=modules/real-estate-offers-api/README.md | neighbors=[Composer Unprefixed / GitHub module- Pr…, Real Estate Offers, Team-Scoped Boundary]
- "real_estate_onthemarket_api_module": "Real Estate OnTheMarket API" | kind=entity | source=modules/real-estate-onthemarket-api/README.md | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, Real Estate OnTheMarket (core module), Real Estate Portals and Reporting API]
- "real_estate_portals_reporting_api_module": "Real Estate Portals and Reporting API" | kind=entity | source=modules/real-estate-portals-reporting-api/README.md | neighbors=[Real Estate OnTheMarket API, OpenAPI v1: Real Estate Portals and Rep…, Real Estate Portals and Reporting (core…]
- "real_estate_properties_api_module": "Real Estate Properties API" | kind=entity | source=modules/real-estate-properties-api/README.md | neighbors=[OpenAPI v1: Real Estate Properties API, /api/v1/real-estate versioned namespace, Real Estate Properties (core module)]
- "real_estate_properties_filament_module": "Real Estate Properties Filament" | kind=entity | source=modules/real-estate-properties-filament/README.md | neighbors=[Host-attached Filament plugin, Presentation-neutral domain core, Real Estate Properties (core module)]
- "real_estate_properties_livewire_module": "Real Estate Properties Livewire" | kind=entity | source=modules/real-estate-properties-livewire/README.md | neighbors=[Minimal public Livewire component state, Team-scoped domain records, Real Estate Properties (core module)]
- "real_estate_properties_module": "Real Estate Properties (core module)" | kind=entity | source=modules/real-estate-properties-api/README.md | neighbors=[Real Estate Properties API, Real Estate Properties Filament, Real Estate Properties Livewire]
- "registry_indexableregistry_indexableregistry": "IndexableRegistry" | kind=code-symbol | source=modules/search/src/Registry/IndexableRegistry.php:L7 | neighbors=[IndexableRegistry.php, .all(), .register()]
- "registry_permissionregistry_permissionregistry": "PermissionRegistry" | kind=code-symbol | source=modules/roles-permissions/src/Registry/PermissionRegistry.php:L7 | neighbors=[PermissionRegistry.php, .all(), .declare()]
- "resources_agencyresource": "AgencyResource.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, AgencyResource]
- "resources_offereventresource": "OfferEventResource.php" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Resources/OfferEventResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, bd5c605 Add explicit API response resou…, OfferEventResource]
- "resources_territoryresource": "TerritoryResource.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, TerritoryResource]
- "scripts_submit_packagist": "submit-packagist.php" | kind=code-symbol | source=scripts/submit-packagist.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 881febf Normalize module package names …, request()]
- "search_api_module": "Liberu Search API" | kind=entity | source=modules/search-api/README.md | neighbors=[Capability: foundation.search.api, Category: presentation, Liberu Search]
- "services_breakglass_breakglass": "BreakGlass" | kind=code-symbol | source=modules/roles-permissions/src/Services/BreakGlass.php:L8 | neighbors=[BreakGlass.php, .active(), .grant()]
- "services_currencycontext_currencycontext": "CurrencyContext" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyContext.php:L8 | neighbors=[CurrencyContext.php, .__construct(), .for()]
- "services_currencyregistry_currencyregistry": "CurrencyRegistry" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyRegistry.php:L8 | neighbors=[CurrencyRegistry.php, .__construct(), .get()]
- "services_moneyformatter_moneyformatter": "MoneyFormatter" | kind=code-symbol | source=modules/currency-context/src/Services/MoneyFormatter.php:L8 | neighbors=[MoneyFormatter.php, .__construct(), .format()]
- "services_scopedsettings_scopedsettings": "ScopedSettings" | kind=code-symbol | source=modules/settings/src/Services/ScopedSettings.php:L10 | neighbors=[ScopedSettings.php, .put(), .resolve()]
- "services_searchservice_searchservice_searchusers": ".searchUsers()" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L18 | neighbors=[SearchService, .toInt(), .toString()]
- "services_thememanager_thememanager_activeentries": ".activeEntries()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L198 | neighbors=[ThemeManager, .activeCssEntry(), .getThemeJs()]
- "services_thememanager_thememanager_getthemecss": ".getThemeCss()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L188 | neighbors=[ThemeManager, .activeCssEntry(), .firstAsset()]
- "services_thememanager_thememanager_getthemejs": ".getThemeJs()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L193 | neighbors=[ThemeManager, .activeEntries(), .firstAsset()]
- "services_thememanager_thememanager_getthemepath": ".getThemePath()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L134 | neighbors=[ThemeManager, .getThemeAssetPath(), .getThemeViewsPath()]
- "services_thememanager_thememanager_hascustomlayout": ".hasCustomLayout()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L264 | neighbors=[ThemeManager, .getThemeViewsPath(), .inheritanceChain()]
- "services_thememanager_thememanager_loadthemes": ".loadThemes()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L40 | neighbors=[ThemeManager, .__construct(), .inheritanceChain()]
- "soft_archive_on_delete": "Archive Instead of Destroy on DELETE" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Idempotency-Key Header, Real Estate Core OpenAPI v1, Real Estate Instructions OpenAPI v1]
- "src_analyticsserviceprovider_analyticsserviceprovider": "AnalyticsServiceProvider" | kind=code-symbol | source=modules/analytics-core/src/AnalyticsServiceProvider.php:L9 | neighbors=[AnalyticsServiceProvider.php, .boot(), .register()]
- "src_apiaccessserviceprovider_apiaccessserviceprovider": "ApiAccessServiceProvider" | kind=code-symbol | source=modules/api-access/src/ApiAccessServiceProvider.php:L8 | neighbors=[ApiAccessServiceProvider.php, .boot(), .register()]
- "src_applicationcoreserviceprovider_applicationcoreserviceprovider": "ApplicationCoreServiceProvider" | kind=code-symbol | source=modules/application/src/ApplicationCoreServiceProvider.php:L13 | neighbors=[ApplicationCoreServiceProvider.php, .boot(), .register()]
- "src_auditserviceprovider_auditserviceprovider": "AuditServiceProvider" | kind=code-symbol | source=modules/audit/src/AuditServiceProvider.php:L9 | neighbors=[AuditServiceProvider.php, .boot(), .register()]
- "src_currencyserviceprovider_currencyserviceprovider": "CurrencyServiceProvider" | kind=code-symbol | source=modules/currency-context/src/CurrencyServiceProvider.php:L10 | neighbors=[CurrencyServiceProvider.php, .boot(), .register()]
- "src_filesmediaserviceprovider_filesmediaserviceprovider": "FilesMediaServiceProvider" | kind=code-symbol | source=modules/files-media/src/FilesMediaServiceProvider.php:L9 | neighbors=[FilesMediaServiceProvider.php, .boot(), .register()]
- "src_identityserviceprovider_identityserviceprovider": "IdentityServiceProvider" | kind=code-symbol | source=modules/identity-core/src/IdentityServiceProvider.php:L16 | neighbors=[IdentityServiceProvider.php, .boot(), .register()]
- "src_instructionsapiserviceprovider": "InstructionsApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-instructions-api/src/InstructionsApiServiceProvider.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, InstructionsApiServiceProvider]
- "src_instructionsfilamentplugin": "InstructionsFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentPlugin.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, InstructionsFilamentPlugin]
- "src_instructionsfilamentserviceprovider": "InstructionsFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentServiceProvider.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, InstructionsFilamentServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-108.json

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
