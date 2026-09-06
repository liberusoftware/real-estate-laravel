# Node Description Batch 197 of 212

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

- "providers_horizondashboardserviceprovider_horizondashboardserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/observability/src/Providers/HorizonDashboardServiceProvider.php:L14 | neighbors=[HorizonDashboardServiceProvider]
- "providers_horizondashboardserviceprovider_horizondashboardserviceprovider_gate": ".gate()" | kind=code-symbol | source=modules/observability/src/Providers/HorizonDashboardServiceProvider.php:L28 | neighbors=[HorizonDashboardServiceProvider]
- "providers_socialstreamserviceprovider_socialstreamserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/identity-socialstream/src/Providers/SocialstreamServiceProvider.php:L33 | neighbors=[SocialstreamServiceProvider]
- "providers_socialstreamserviceprovider_socialstreamserviceprovider_register": ".register()" | kind=code-symbol | source=modules/identity-socialstream/src/Providers/SocialstreamServiceProvider.php:L25 | neighbors=[SocialstreamServiceProvider]
- "providers_telescopedashboardserviceprovider_telescopedashboardserviceprovider_gate": ".gate()" | kind=code-symbol | source=modules/observability/src/Providers/TelescopeDashboardServiceProvider.php:L57 | neighbors=[TelescopeDashboardServiceProvider]
- "providers_themeserviceprovider_themeserviceprovider_register": ".register()" | kind=code-symbol | source=modules/theme-support/src/Providers/ThemeServiceProvider.php:L20 | neighbors=[ThemeServiceProvider]
- "queries_listlettings_listlettings_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-lettings/src/Queries/ListLettings.php:L12 | neighbors=[ListLettings]
- "queries_listmanagementrecords_listmanagementrecords_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-property-management/src/Queries/ListManagementRecords.php:L12 | neighbors=[ListManagementRecords]
- "queries_sessionreader_sessionreader_revoke": ".revoke()" | kind=code-symbol | source=modules/sessions-devices/src/Queries/SessionReader.php:L25 | neighbors=[SessionReader]
- "queries_sessionreader_sessionreader_revokeothers": ".revokeOthers()" | kind=code-symbol | source=modules/sessions-devices/src/Queries/SessionReader.php:L35 | neighbors=[SessionReader]
- "rate_limited_response": "429 RateLimited Response" | kind=entity | source=modules/real-estate-instructions-api/openapi/v1/real-estate-instructions.yaml | neighbors=[Real Estate Instructions OpenAPI v1]
- "re_agency_resource": "Agency Resource" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Real Estate Core OpenAPI v1]
- "re_rightmove_filament_module": "Real Estate Rightmove Filament Adapter" | kind=entity | source=modules/real-estate-rightmove-filament/README.md | neighbors=[Real Estate Rightmove Module]
- "re_rightmove_livewire_module": "Real Estate Rightmove Livewire Adapter" | kind=entity | source=modules/real-estate-rightmove-livewire/README.md | neighbors=[Real Estate Rightmove Module]
- "re_sales_progression_filament_module": "Real Estate Sales Progression Filament Adapter" | kind=entity | source=modules/real-estate-sales-progression-filament/README.md | neighbors=[Real Estate Sales Progression Module]
- "re_sales_progression_livewire_module": "Real Estate Sales Progression Livewire Adapter" | kind=entity | source=modules/real-estate-sales-progression-livewire/README.md | neighbors=[Real Estate Sales Progression Module]
- "re_territory_resource": "Territory Resource" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Real Estate Core OpenAPI v1]
- "re_theme_deferred_adapters": "Deferred React/Vue/Nuxt/mobile adapters" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "re_theme_no_js_graceful": "Graceful operation without JavaScript and reduced motion" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "re_theme_pest_and_workflows": "Pest 5 suite and Install/Tests/Visual/Compatibility workflows" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "re_theme_privacy_no_third_party": "No analytics, embeds or external media" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "re_theme_rtl_and_i18n": "LTR/RTL logical properties and translated strings" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "re_zoopla_filament_module": "Real Estate Zoopla Filament" | kind=entity | source=modules/real-estate-zoopla-filament/README.md | neighbors=[Real Estate Zoopla]
- "re_zoopla_livewire_module": "Real Estate Zoopla Livewire" | kind=entity | source=modules/real-estate-zoopla-livewire/README.md | neighbors=[Real Estate Zoopla]
- "real_estate_default_vite_config": "vite.config.js" | kind=code-symbol | source=themes/real-estate-default/vite.config.js:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "real_estate_livewire_project_index": "Real Estate Livewire Project Index" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire Module Index]
- "real_estate_marketing_api": "Real Estate Marketing API" | kind=entity | source=modules/real-estate-marketing-api/README.md | neighbors=[Real Estate Marketing]
- "real_estate_matching_api": "Real Estate Matching API" | kind=entity | source=modules/real-estate-matching-api/README.md | neighbors=[Real Estate Matching]
- "real_estate_onthemarket_filament_module": "Real Estate OnTheMarket Filament" | kind=entity | source=modules/real-estate-onthemarket-filament/README.md | neighbors=[Real Estate OnTheMarket (core module)]
- "real_estate_onthemarket_livewire_module": "Real Estate OnTheMarket Livewire" | kind=entity | source=modules/real-estate-onthemarket-livewire/README.md | neighbors=[Real Estate OnTheMarket (core module)]
- "real_estate_portals_reporting_filament_module": "Real Estate Portals and Reporting Filament" | kind=entity | source=modules/real-estate-portals-reporting-filament/README.md | neighbors=[Real Estate Portals and Reporting (core…]
- "real_estate_portals_reporting_livewire_module": "Real Estate Portals and Reporting Livewire" | kind=entity | source=modules/real-estate-portals-reporting-livewire/README.md | neighbors=[Real Estate Portals and Reporting (core…]
- "recovery_recoverycodehasher_recoverycodehasher_construct": ".__construct()" | kind=code-symbol | source=modules/two-factor-authentication/src/Recovery/RecoveryCodeHasher.php:L9 | neighbors=[RecoveryCodeHasher]
- "recovery_recoverycodehasher_recoverycodehasher_hash": ".hash()" | kind=code-symbol | source=modules/two-factor-authentication/src/Recovery/RecoveryCodeHasher.php:L12 | neighbors=[RecoveryCodeHasher]
- "recovery_recoverycodehasher_recoverycodehasher_verifyandconsume": ".verifyAndConsume()" | kind=code-symbol | source=modules/two-factor-authentication/src/Recovery/RecoveryCodeHasher.php:L18 | neighbors=[RecoveryCodeHasher]
- "rector": "rector.php" | kind=code-symbol | source=rector.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "registry_indexableregistry_indexableregistry_all": ".all()" | kind=code-symbol | source=modules/search/src/Registry/IndexableRegistry.php:L18 | neighbors=[IndexableRegistry]
- "registry_indexableregistry_indexableregistry_register": ".register()" | kind=code-symbol | source=modules/search/src/Registry/IndexableRegistry.php:L11 | neighbors=[IndexableRegistry]
- "registry_permissionregistry_permissionregistry_all": ".all()" | kind=code-symbol | source=modules/roles-permissions/src/Registry/PermissionRegistry.php:L20 | neighbors=[PermissionRegistry]
- "registry_permissionregistry_permissionregistry_declare": ".declare()" | kind=code-symbol | source=modules/roles-permissions/src/Registry/PermissionRegistry.php:L11 | neighbors=[PermissionRegistry]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-196.json

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
