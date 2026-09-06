# Node Description Batch 201 of 212

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

- "schemas_schemas_handleformvalidationerror": "handleFormValidationError()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]
- "schemas_schemas_isstatechanged": "isStateChanged()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]
- "schemas_schemas_state": "$state()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]
- "scripts_submit_packagist_request": "request()" | kind=code-symbol | source=scripts/submit-packagist.php:L92 | neighbors=[submit-packagist.php]
- "seeders_databaseseeder_databaseseeder_run": ".run()" | kind=code-symbol | source=database/seeders/DatabaseSeeder.php:L15 | neighbors=[DatabaseSeeder]
- "seeders_rolesseeder_rolesseeder_run": ".run()" | kind=code-symbol | source=database/seeders/RolesSeeder.php:L16 | neighbors=[RolesSeeder]
- "seeders_teamseeder_teamseeder_run": ".run()" | kind=code-symbol | source=database/seeders/TeamSeeder.php:L14 | neighbors=[TeamSeeder]
- "seeders_userseeder_userseeder_run": ".run()" | kind=code-symbol | source=database/seeders/UserSeeder.php:L18 | neighbors=[UserSeeder]
- "services_anyteamrolelookup_anyteamrolelookup_hasroleinanyteam": ".hasRoleInAnyTeam()" | kind=code-symbol | source=modules/roles-permissions/src/Services/AnyTeamRoleLookup.php:L11 | neighbors=[AnyTeamRoleLookup]
- "services_breakglass_breakglass_active": ".active()" | kind=code-symbol | source=modules/roles-permissions/src/Services/BreakGlass.php:L19 | neighbors=[BreakGlass]
- "services_breakglass_breakglass_grant": ".grant()" | kind=code-symbol | source=modules/roles-permissions/src/Services/BreakGlass.php:L10 | neighbors=[BreakGlass]
- "services_currencycontext_currencycontext_construct": ".__construct()" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyContext.php:L11 | neighbors=[CurrencyContext]
- "services_currencycontext_currencycontext_for": ".for()" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyContext.php:L13 | neighbors=[CurrencyContext]
- "services_currencypreferenceresolver_currencypreferenceresolver_resolve": ".resolve()" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyPreferenceResolver.php:L9 | neighbors=[CurrencyPreferenceResolver]
- "services_currencyregistry_currencyregistry_construct": ".__construct()" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyRegistry.php:L11 | neighbors=[CurrencyRegistry]
- "services_currencyregistry_currencyregistry_get": ".get()" | kind=code-symbol | source=modules/currency-context/src/Services/CurrencyRegistry.php:L13 | neighbors=[CurrencyRegistry]
- "services_currentteamresolver_currentteamresolver_resolve": ".resolve()" | kind=code-symbol | source=modules/organizations-teams/src/Services/CurrentTeamResolver.php:L11 | neighbors=[CurrentTeamResolver]
- "services_localsearchindexer_localsearchindexer_flush": ".flush()" | kind=code-symbol | source=modules/search/src/Services/LocalSearchIndexer.php:L14 | neighbors=[LocalSearchIndexer]
- "services_localsearchindexer_localsearchindexer_index": ".index()" | kind=code-symbol | source=modules/search/src/Services/LocalSearchIndexer.php:L10 | neighbors=[LocalSearchIndexer]
- "services_localsearchindexer_localsearchindexer_remove": ".remove()" | kind=code-symbol | source=modules/search/src/Services/LocalSearchIndexer.php:L12 | neighbors=[LocalSearchIndexer]
- "services_moneyformatter_moneyformatter_construct": ".__construct()" | kind=code-symbol | source=modules/currency-context/src/Services/MoneyFormatter.php:L11 | neighbors=[MoneyFormatter]
- "services_moneyformatter_moneyformatter_format": ".format()" | kind=code-symbol | source=modules/currency-context/src/Services/MoneyFormatter.php:L13 | neighbors=[MoneyFormatter]
- "services_scopedsettings_scopedsettings_put": ".put()" | kind=code-symbol | source=modules/settings/src/Services/ScopedSettings.php:L12 | neighbors=[ScopedSettings]
- "services_scopedsettings_scopedsettings_resolve": ".resolve()" | kind=code-symbol | source=modules/settings/src/Services/ScopedSettings.php:L20 | neighbors=[ScopedSettings]
- "services_searchservice_searchservice_construct": ".__construct()" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L10 | neighbors=[SearchService]
- "services_searchservice_searchservice_searchall": ".searchAll()" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L71 | neighbors=[SearchService]
- "services_separationofduty_separationofduty_permits": ".permits()" | kind=code-symbol | source=modules/roles-permissions/src/Services/SeparationOfDuty.php:L7 | neighbors=[SeparationOfDuty]
- "services_thememanager_thememanager_asseturl": ".assetUrl()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L203 | neighbors=[ThemeManager]
- "services_thememanager_thememanager_clearcache": ".clearCache()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L256 | neighbors=[ThemeManager]
- "services_thememanager_thememanager_getactivetheme": ".getActiveTheme()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L88 | neighbors=[ThemeManager]
- "services_thememanager_thememanager_getlayout": ".getLayout()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L275 | neighbors=[ThemeManager]
- "services_thememanager_thememanager_getthemes": ".getThemes()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L105 | neighbors=[ThemeManager]
- "services_thememanager_thememanager_providers": ".providers()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L110 | neighbors=[ThemeManager]
- "services_thememanager_thememanager_themeexists": ".themeExists()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L115 | neighbors=[ThemeManager]
- "settings_2025_12_10_102854_create_site_settings_up": "up()" | kind=code-symbol | source=modules/settings/database/settings/2025_12_10_102854_create_site_settings.php:L7 | neighbors=[2025_12_10_102854_create_site_settings.…]
- "settings_2026_07_01_000000_add_active_theme_to_site_settings_up": "up()" | kind=code-symbol | source=modules/settings/database/settings/2026_07_01_000000_add_active_theme_to_site_settings.php:L7 | neighbors=[2026_07_01_000000_add_active_theme_to_s…]
- "settings_sitesettings_sitesettings_group": ".group()" | kind=code-symbol | source=modules/settings/src/Settings/SiteSettings.php:L35 | neighbors=[SiteSettings]
- "shared_users_table": "Shared users Table" | kind=entity | source=modules/search/README.md:Persistence and permissions | neighbors=[Capability Boundary Integration]
- "spatie_activitylog": "spatie/laravel-activitylog" | kind=entity | source=modules/organizations-teams/README.md | neighbors=[liberusoftware/organizations-teams]
- "src_activitycommentsserviceprovider_activitycommentsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/activity-comments/src/ActivityCommentsServiceProvider.php:L9 | neighbors=[ActivityCommentsServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-200.json

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
