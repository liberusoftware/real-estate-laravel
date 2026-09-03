# Node Description Batch 75 of 212

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

- "filament_5": "Filament 5" | kind=entity | source=modules/module-manager-filament/README.md | neighbors=[Liberu Module Manager Administration, Liberu Organizations Administration, Real Estate Core Filament, Real Estate Instructions Filament]
- "filament_echo_be": "Be()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, i(), r(), Ut()]
- "filament_echo_dt": "Dt()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, t(), Fe(), nr()]
- "filament_echo_i": "i()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, Be(), e(), g()]
- "filament_echo_st": "St()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, ar(), cr(), qt()]
- "filament_echo_ze": "ze()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, Fe(), Ce(), De()]
- "fleet": "scripts/fleet" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, Component repositories are the source o…, Non-interactive, fail-on-error commands, publish-components (removed)]
- "formatting_localeformatter_localeformatter": "LocaleFormatter" | kind=code-symbol | source=modules/localization-core/src/Formatting/LocaleFormatter.php:L7 | neighbors=[LocaleFormatter.php, .date(), .list(), .number()]
- "fortify_updateuserprofileinformation_updateuserprofileinformation": "UpdateUserProfileInformation" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/UpdateUserProfileInformation.php:L14 | neighbors=[UpdateUserProfileInformation.php, .__construct(), .update(), .updateVerifiedUser()]
- "foundation_vs_product_scope": "Foundation adapters vs product scope" | kind=entity | source=projects/liberu/filament/README.md | neighbors=[Liberu Filament modules README, Liberu Livewire modules README, Filament adapter tier, Livewire adapter tier]
- "health_readinessregistry_readinessregistry": "ReadinessRegistry" | kind=code-symbol | source=modules/application/src/Health/ReadinessRegistry.php:L7 | neighbors=[ReadinessRegistry.php, .ready(), .register(), .report()]
- "host_boilerplate_laravel": "liberusoftware/boilerplate-laravel host" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "host_theme_selection": "Host-controlled theme selection (config/theme.php, THEME_* env)" | kind=entity | source=themes/base/UPGRADING.md | neighbors=[Presentation-only package boundary, Do not edit installed files under theme…, real-estate-default theme, Theme rename: liberu-base becomes base …]
- "jetstream_deleteuser_deleteuser": "DeleteUser" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Jetstream/DeleteUser.php:L11 | neighbors=[DeleteUser.php, .__construct(), .delete(), .deleteTeams()]
- "liberu_application_composition": "Liberu Application Composition" | kind=entity | source=projects/LIBERU.md | neighbors=[Four Implementation Indexes (core / api…, Liberu Platform Scope, Packagist Names Omit the module- Prefix, Real Estate Zoopla]
- "livewire_4": "Livewire 4" | kind=entity | source=modules/livewire/README.md | neighbors=[Livewire Module Index, Liberu Localization Livewire, Real Estate Core Livewire, Real Estate Instructions Livewire]
- "livewire_languageswitcher_languageswitcher": "LanguageSwitcher" | kind=code-symbol | source=modules/localization-core-livewire/src/Livewire/LanguageSwitcher.php:L11 | neighbors=[LanguageSwitcher.php, .mount(), .render(), .switchLanguage()]
- "livewire_module_index": "Livewire Module Index" | kind=entity | source=modules/livewire/README.md | neighbors=[Adapter Over One Matching Core Package, Liberu Platform Livewire Project Index, Livewire 4, Real Estate Livewire Project Index]
- "livewire_themeswitcher_themeswitcher": "ThemeSwitcher" | kind=code-symbol | source=modules/theme-support-livewire/src/Livewire/ThemeSwitcher.php:L9 | neighbors=[ThemeSwitcher.php, .mount(), .render(), .switchTheme()]
- "localization_contracts_package": "liberusoftware/localization-contracts" | kind=entity | source=modules/localization-core/README.md | neighbors=[Capability: foundation.localization, ObservabilityActor Contract, Liberu Localization, Liberu MyMemory Translation]
- "migrations_0001_01_01_000000_create_users_table": "0001_01_01_000000_create_users_table.php" | kind=code-symbol | source=database/migrations/0001_01_01_000000_create_users_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, down(), up()]
- "migrations_2026_06_29_124047_create_telescope_entries_table": "2026_06_29_124047_create_telescope_entries_table.php" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124047_create_telescope_entries_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), getConnection(), up()]
- "migrations_2026_08_23_000004_create_real_estate_media_documents_table": "2026_08_23_000004_create_real_estate_media_documents_table.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/database/migrations/2026_08_23_000004_create_real_estate_media_documents_table.php:L1 | neighbors=[0910e2b Add real estate media and docum…, 6385f28 Add sales progression modules a…, down(), up()]
- "migrations_2026_08_23_000005_create_real_estate_valuations_table": "2026_08_23_000005_create_real_estate_valuations_table.php" | kind=code-symbol | source=modules/real-estate-valuations/database/migrations/2026_08_23_000005_create_real_estate_valuations_table.php:L1 | neighbors=[44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…, down(), up()]
- "migrations_2026_08_23_000006_create_real_estate_instructions_table": "2026_08_23_000006_create_real_estate_instructions_table.php" | kind=code-symbol | source=modules/real-estate-instructions/database/migrations/2026_08_23_000006_create_real_estate_instructions_table.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, down(), up()]
- "migrations_2026_08_23_000007_create_real_estate_listings_table": "2026_08_23_000007_create_real_estate_listings_table.php" | kind=code-symbol | source=modules/real-estate-listings/database/migrations/2026_08_23_000007_create_real_estate_listings_table.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, down(), up()]
- "migrations_2026_08_23_000008_create_real_estate_match_profiles_table": "2026_08_23_000008_create_real_estate_match_profiles_table.php" | kind=code-symbol | source=modules/real-estate-matching/database/migrations/2026_08_23_000008_create_real_estate_match_profiles_table.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, down(), up()]
- "migrations_2026_08_23_000009_create_real_estate_viewings_table": "2026_08_23_000009_create_real_estate_viewings_table.php" | kind=code-symbol | source=modules/real-estate-viewings/database/migrations/2026_08_23_000009_create_real_estate_viewings_table.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, down(), up()]
- "migrations_2026_08_23_000010_create_real_estate_offers_table": "2026_08_23_000010_create_real_estate_offers_table.php" | kind=code-symbol | source=modules/real-estate-offers/database/migrations/2026_08_23_000010_create_real_estate_offers_table.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, down(), up()]
- "migrations_2026_08_23_000020_create_real_estate_lettings_table": "2026_08_23_000020_create_real_estate_lettings_table.php" | kind=code-symbol | source=modules/real-estate-lettings/database/migrations/2026_08_23_000020_create_real_estate_lettings_table.php:L1 | neighbors=[3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…, down(), up()]
- "migrations_2026_08_23_000021_create_property_management_records_table": "2026_08_23_000021_create_property_management_records_table.php" | kind=code-symbol | source=modules/real-estate-property-management/database/migrations/2026_08_23_000021_create_property_management_records_table.php:L1 | neighbors=[3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…, down(), up()]
- "migrations_2026_08_24_000001_add_legacy_property_attributes": "2026_08_24_000001_add_legacy_property_attributes.php" | kind=code-symbol | source=modules/real-estate-properties/database/migrations/2026_08_24_000001_add_legacy_property_attributes.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, down(), up()]
- "migrations_2026_08_24_000002_create_real_estate_agencies_and_territories": "2026_08_24_000002_create_real_estate_agencies_and_territories.php" | kind=code-symbol | source=modules/real-estate-core/database/migrations/2026_08_24_000002_create_real_estate_agencies_and_territories.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, down(), up()]
- "migrations_2026_08_24_000003_add_valuation_workflow_fields": "2026_08_24_000003_add_valuation_workflow_fields.php" | kind=code-symbol | source=modules/real-estate-valuations/database/migrations/2026_08_24_000003_add_valuation_workflow_fields.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, down(), up()]
- "migrations_2026_08_24_000004_add_offer_workflow_fields": "2026_08_24_000004_add_offer_workflow_fields.php" | kind=code-symbol | source=modules/real-estate-offers/database/migrations/2026_08_24_000004_add_offer_workflow_fields.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, down(), up()]
- "models_agency_agency": "Agency" | kind=code-symbol | source=modules/real-estate-core/src/Models/Agency.php:L13 | neighbors=[Agency.php, .casts(), .scopeForTeam(), .team()]
- "models_branch": "Branch.php" | kind=code-symbol | source=modules/real-estate-core/src/Models/Branch.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, Branch]
- "models_branch_branch": "Branch" | kind=code-symbol | source=modules/real-estate-core/src/Models/Branch.php:L13 | neighbors=[Branch.php, .casts(), .scopeForTeam(), .team()]
- "models_party_party": "Party" | kind=code-symbol | source=modules/real-estate-parties/src/Models/Party.php:L12 | neighbors=[Party.php, .casts(), .scopeForTeam(), .team()]
- "models_propertyhistory_propertyhistory": "PropertyHistory" | kind=code-symbol | source=modules/real-estate-properties/src/Models/PropertyHistory.php:L10 | neighbors=[PropertyHistory.php, .casts(), .property(), .team()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-074.json

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
