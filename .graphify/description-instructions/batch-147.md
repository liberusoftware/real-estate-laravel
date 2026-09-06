# Node Description Batch 148 of 212

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

- "resources_userresource": "UserResource.php" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, UserResource]
- "risk_package_ci_never_observed_green": "Risk: package CI has not been observed green" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…, Liberu Developer Experience]
- "routes_channels": "channels.php" | kind=code-symbol | source=routes/channels.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "sanctum_bearer_auth": "Sanctum Bearer Security Scheme" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Real Estate Core OpenAPI v1, Real Estate Instructions OpenAPI v1]
- "schemas_schemas_init": "init()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js, updateWidth()]
- "schemas_schemas_updatewidth": "updateWidth()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js, init()]
- "security_disclosure_policy": "Private Security Disclosure Policy" | kind=entity | source=modules/webhooks/README.md:Security | neighbors=[Liberu Two-Factor Authentication, Liberu Webhooks]
- "seeders_databaseseeder_databaseseeder": "DatabaseSeeder" | kind=code-symbol | source=database/seeders/DatabaseSeeder.php:L8 | neighbors=[DatabaseSeeder.php, .run()]
- "seeders_rolesseeder_rolesseeder": "RolesSeeder" | kind=code-symbol | source=database/seeders/RolesSeeder.php:L11 | neighbors=[RolesSeeder.php, .run()]
- "seeders_teamseeder_teamseeder": "TeamSeeder" | kind=code-symbol | source=database/seeders/TeamSeeder.php:L9 | neighbors=[TeamSeeder.php, .run()]
- "seeders_userseeder_userseeder": "UserSeeder" | kind=code-symbol | source=database/seeders/UserSeeder.php:L13 | neighbors=[UserSeeder.php, .run()]
- "services_anyteamrolelookup": "AnyTeamRoleLookup.php" | kind=code-symbol | source=modules/roles-permissions/src/Services/AnyTeamRoleLookup.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AnyTeamRoleLookup]
- "services_anyteamrolelookup_anyteamrolelookup": "AnyTeamRoleLookup" | kind=code-symbol | source=modules/roles-permissions/src/Services/AnyTeamRoleLookup.php:L8 | neighbors=[AnyTeamRoleLookup.php, .hasRoleInAnyTeam()]
- "services_breakglass": "BreakGlass.php" | kind=code-symbol | source=modules/roles-permissions/src/Services/BreakGlass.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, BreakGlass]
- "services_currencycontext": "CurrencyContext.php" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyContext.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CurrencyContext]
- "services_currencypreferenceresolver": "CurrencyPreferenceResolver.php" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyPreferenceResolver.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CurrencyPreferenceResolver]
- "services_currencypreferenceresolver_currencypreferenceresolver": "CurrencyPreferenceResolver" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyPreferenceResolver.php:L7 | neighbors=[CurrencyPreferenceResolver.php, .resolve()]
- "services_currencyregistry": "CurrencyRegistry.php" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CurrencyRegistry]
- "services_currentteamresolver": "CurrentTeamResolver.php" | kind=code-symbol | source=modules/organizations-teams/src/Services/CurrentTeamResolver.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CurrentTeamResolver]
- "services_currentteamresolver_currentteamresolver": "CurrentTeamResolver" | kind=code-symbol | source=modules/organizations-teams/src/Services/CurrentTeamResolver.php:L9 | neighbors=[CurrentTeamResolver.php, .resolve()]
- "services_localsearchindexer": "LocalSearchIndexer.php" | kind=code-symbol | source=modules/search/src/Services/LocalSearchIndexer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LocalSearchIndexer]
- "services_moneyformatter": "MoneyFormatter.php" | kind=code-symbol | source=modules/currency-context/src/Services/MoneyFormatter.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, MoneyFormatter]
- "services_scopedsettings": "ScopedSettings.php" | kind=code-symbol | source=modules/settings/src/Services/ScopedSettings.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ScopedSettings]
- "services_searchservice": "SearchService.php" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearchService]
- "services_searchservice_searchservice_toint": ".toInt()" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L98 | neighbors=[SearchService, .searchUsers()]
- "services_searchservice_searchservice_tostring": ".toString()" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L90 | neighbors=[SearchService, .searchUsers()]
- "services_separationofduty": "SeparationOfDuty.php" | kind=code-symbol | source=modules/roles-permissions/src/Services/SeparationOfDuty.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SeparationOfDuty]
- "services_separationofduty_separationofduty": "SeparationOfDuty" | kind=code-symbol | source=modules/roles-permissions/src/Services/SeparationOfDuty.php:L5 | neighbors=[SeparationOfDuty.php, .permits()]
- "services_thememanager": "ThemeManager.php" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeManager]
- "services_thememanager_thememanager_construct": ".__construct()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L27 | neighbors=[ThemeManager, .loadThemes()]
- "services_thememanager_thememanager_enabledcapabilities": ".enabledCapabilities()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L280 | neighbors=[ThemeManager, .themeIsCompatible()]
- "services_thememanager_thememanager_getsitetheme": ".getSiteTheme()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L93 | neighbors=[ThemeManager, .themeIsCompatible()]
- "services_thememanager_thememanager_getthemeassetpath": ".getThemeAssetPath()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L146 | neighbors=[ThemeManager, .getThemePath()]
- "services_thememanager_thememanager_getthemeconfig": ".getThemeConfig()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L244 | neighbors=[ThemeManager, .primaryColor()]
- "services_thememanager_thememanager_persisttheme": ".persistTheme()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L66 | neighbors=[ThemeManager, .setTheme()]
- "services_thememanager_thememanager_primarycolor": ".primaryColor()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L249 | neighbors=[ThemeManager, .getThemeConfig()]
- "services_thememanager_thememanager_selectforsurface": ".selectForSurface()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L77 | neighbors=[ThemeManager, .setTheme()]
- "services_thememanager_thememanager_vitehasasset": ".viteHasAsset()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L234 | neighbors=[ThemeManager, .activeCssEntry()]
- "settings_2025_12_10_102854_create_site_settings": "2025_12_10_102854_create_site_settings.php" | kind=code-symbol | source=modules/settings/database/settings/2025_12_10_102854_create_site_settings.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, up()]
- "settings_2026_07_01_000000_add_active_theme_to_site_settings": "2026_07_01_000000_add_active_theme_to_site_settings.php" | kind=code-symbol | source=modules/settings/database/settings/2026_07_01_000000_add_active_theme_to_site_settings.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, up()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-147.json

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
