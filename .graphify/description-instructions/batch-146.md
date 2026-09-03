# Node Description Batch 147 of 212

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

- "providers_themeserviceprovider": "ThemeServiceProvider.php" | kind=code-symbol | source=modules/theme-support/src/Providers/ThemeServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeServiceProvider]
- "providers_themeserviceprovider_themeserviceprovider_determineactivetheme": ".determineActiveTheme()" | kind=code-symbol | source=modules/theme-support/src/Providers/ThemeServiceProvider.php:L60 | neighbors=[ThemeServiceProvider, .boot()]
- "providers_themeserviceprovider_themeserviceprovider_registerbladedirectives": ".registerBladeDirectives()" | kind=code-symbol | source=modules/theme-support/src/Providers/ThemeServiceProvider.php:L81 | neighbors=[ThemeServiceProvider, .boot()]
- "public_index": "index.php" | kind=code-symbol | source=public/index.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "publish_components": "publish-components (removed)" | kind=entity | source=scripts/README.md | neighbors=[scripts/fleet, Component repositories are the source o…]
- "queries_listlettings": "ListLettings.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Queries/ListLettings.php:L1 | neighbors=[3735f58 Complete letting and property m…, ListLettings]
- "queries_listlettings_listlettings": "ListLettings" | kind=code-symbol | source=modules/real-estate-lettings/src/Queries/ListLettings.php:L10 | neighbors=[ListLettings.php, .handle()]
- "queries_listmanagementrecords": "ListManagementRecords.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Queries/ListManagementRecords.php:L1 | neighbors=[3735f58 Complete letting and property m…, ListManagementRecords]
- "queries_listmanagementrecords_listmanagementrecords": "ListManagementRecords" | kind=code-symbol | source=modules/real-estate-property-management/src/Queries/ListManagementRecords.php:L10 | neighbors=[ListManagementRecords.php, .handle()]
- "queries_sessionreader": "SessionReader.php" | kind=code-symbol | source=modules/sessions-devices/src/Queries/SessionReader.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SessionReader]
- "queries_sessionreader_sessionreader_foractor": ".forActor()" | kind=code-symbol | source=modules/sessions-devices/src/Queries/SessionReader.php:L11 | neighbors=[SessionReader, .summarizeIp()]
- "queries_sessionreader_sessionreader_summarizeip": ".summarizeIp()" | kind=code-symbol | source=modules/sessions-devices/src/Queries/SessionReader.php:L41 | neighbors=[SessionReader, .forActor()]
- "re_rightmove_api_module": "Real Estate Rightmove API Adapter" | kind=entity | source=modules/real-estate-rightmove-api/README.md | neighbors=[Rightmove Sync API v1 OpenAPI Spec, Real Estate Rightmove Module]
- "re_sales_progression_api_module": "Real Estate Sales Progression API Adapter" | kind=entity | source=modules/real-estate-sales-progression-api/README.md | neighbors=[Sales Progression API v1 OpenAPI Spec, Real Estate Sales Progression Module]
- "re_theme_asset_budgets": "Asset budgets: 80 KiB CSS / 40 KiB JS compressed" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Host Vite build of theme entry points, real-estate-default theme]
- "re_theme_color_modes": "Light/dark, high-contrast and forced-colors modes" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Semantic design tokens (Tailwind v4 + C…, real-estate-default theme]
- "re_theme_empty_state_fallback": "Empty server-rendered state when a module is absent" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Safe theme fallback, real-estate-default theme]
- "re_theme_semver_breaking_surface": "Semantic versioning over tokens, slots, view names, entry points" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Upward-only quality ratchet, real-estate-default theme]
- "re_valuations_livewire_module": "Real Estate Valuations Livewire Adapter" | kind=entity | source=modules/real-estate-valuations-livewire/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Real Estate Valuations Module]
- "re_viewings_filament_module": "Real Estate Viewings Filament Adapter" | kind=entity | source=modules/real-estate-viewings-filament/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Real Estate Viewings Module]
- "re_viewings_livewire_module": "Real Estate Viewings Livewire Adapter" | kind=entity | source=modules/real-estate-viewings-livewire/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Real Estate Viewings Module]
- "re_zoopla_api_module": "Real Estate Zoopla API" | kind=entity | source=modules/real-estate-zoopla-api/README.md | neighbors=[Real Estate Zoopla, Real Estate Zoopla Sync API (OpenAPI v1)]
- "real_estate_marketing_filament": "Real Estate Marketing Filament" | kind=entity | source=modules/real-estate-marketing-filament/README.md | neighbors=[Filament 5 Resource Adapter, Real Estate Marketing]
- "real_estate_marketing_livewire": "Real Estate Marketing Livewire" | kind=entity | source=modules/real-estate-marketing-livewire/README.md | neighbors=[Livewire 4 List Adapter, Real Estate Marketing]
- "real_estate_matching_filament": "Real Estate Matching Filament" | kind=entity | source=modules/real-estate-matching-filament/README.md | neighbors=[Filament 5 Resource Adapter, Real Estate Matching]
- "real_estate_matching_livewire": "Real Estate Matching Livewire" | kind=entity | source=modules/real-estate-matching-livewire/README.md | neighbors=[Livewire 4 List Adapter, Real Estate Matching]
- "real_estate_media_and_documents_api": "Real Estate Media and Documents API" | kind=entity | source=modules/real-estate-media-and-documents-api/README.md | neighbors=[Composer Unprefixed / GitHub module- Pr…, Real Estate Media and Documents]
- "real_estate_media_and_documents_filament": "Real Estate Media and Documents Filament" | kind=entity | source=modules/real-estate-media-and-documents-filament/README.md | neighbors=[Filament 5 Resource Adapter, Real Estate Media and Documents]
- "real_estate_media_and_documents_livewire": "Real Estate Media and Documents Livewire" | kind=entity | source=modules/real-estate-media-and-documents-livewire/README.md | neighbors=[Livewire 4 List Adapter, Real Estate Media and Documents]
- "real_estate_offers_filament_module": "Real Estate Offers Filament" | kind=entity | source=modules/real-estate-offers-filament/README.md | neighbors=[Composer name unprefixed, GitHub repo c…, Real Estate Offers]
- "real_estate_offers_livewire_module": "Real Estate Offers Livewire" | kind=entity | source=modules/real-estate-offers-livewire/README.md | neighbors=[Composer name unprefixed, GitHub repo c…, Real Estate Offers]
- "real_estate_parties_filament_module": "Real Estate Parties Filament" | kind=entity | source=modules/real-estate-parties-filament/README.md | neighbors=[Team-scoped domain records, Real Estate Parties (core module)]
- "real_estate_parties_livewire_module": "Real Estate Parties Livewire" | kind=entity | source=modules/real-estate-parties-livewire/README.md | neighbors=[Team-scoped domain records, Real Estate Parties (core module)]
- "recovery_recoverycodehasher": "RecoveryCodeHasher.php" | kind=code-symbol | source=modules/two-factor-authentication/src/Recovery/RecoveryCodeHasher.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RecoveryCodeHasher]
- "registry_indexableregistry": "IndexableRegistry.php" | kind=code-symbol | source=modules/search/src/Registry/IndexableRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IndexableRegistry]
- "registry_permissionregistry": "PermissionRegistry.php" | kind=code-symbol | source=modules/roles-permissions/src/Registry/PermissionRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, PermissionRegistry]
- "registry_searcherregistry": "SearcherRegistry.php" | kind=code-symbol | source=modules/search/src/Registry/SearcherRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearcherRegistry]
- "replaceable_provider_adapters": "Replaceable provider integration adapters" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Portal integrations are independently r…, Liberu Real Estate scope]
- "resources_offereventresource_offereventresource": "OfferEventResource" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Resources/OfferEventResource.php:L10 | neighbors=[OfferEventResource.php, .toArray()]
- "resources_teamresource": "TeamResource.php" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TeamResource]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-146.json

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
