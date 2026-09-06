# Node Description Batch 52 of 212

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

- "concept_module_enablement": "Explicit module enablement" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Host architecture boundary rules, Reproducible composition from the lockf…, Module manager (provider lifecycle auth…, module.json manifest, Module Development Guide]
- "concept_module_manager": "Module manager (provider lifecycle authority)" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Explicit module enablement, module.json manifest, No extra.laravel.providers auto-discove…, ThemeManager service, Module Development Guide]
- "concept_module_search_demo": "liberusoftware/module-search-demo" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[Group model, modules/search package, liberu-module Composer package, Post model, Advanced Search Functionality]
- "concept_operations_stack": "Operations stack (Horizon, Octane, Telescope, Pulse)" | kind=entity | source=CLAUDE.md | neighbors=[Container deployment topology, Laravel Boost guidelines, Known upgrade blockers, CLAUDE.md — project instructions, App\Support\ThemeColors]
- "concept_package_owned_tests": "Package-owned tests" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Missing config.allow-plugins across pac…, module.json manifest, liberusoftware/package-testbench, Handoff: Step 4 Testbench Migration (20…, Module Development Guide]
- "concept_pagination_limits": "Enforced pagination limits" | kind=entity | source=docs/SEARCH_OPTIMIZATION.md | neighbors=[SearchService, Implementation Summary, Advanced Search Architecture, Advanced Search Functionality, Search Performance Optimization]
- "concept_private_broadcast_channels": "Private user broadcast channels" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Laravel Echo client listener, MessagePolicy, Real-time notification system, Implementation Summary, Real-Time Notifications Documentation]
- "concept_rule_must_be_able_to_fire": "A rule that cannot fire is not coverage" | kind=entity | source=CLAUDE.md | neighbors=[App\Filament\ModulePlugins, ModuleValidationGuard, Architecture rules relocated (12 → 8), CLAUDE.md — project instructions, tests/Architecture/ModuleBoundariesTest]
- "concept_sanctum_authentication": "Sanctum API authentication" | kind=entity | source=docs/MESSAGING.md | neighbors=[Separate API (Sanctum) and web (session…, Messaging REST API endpoints, Private Messaging System (API reference), Private Messaging System Architecture, Messaging Setup Instructions]
- "concept_semantic_design_tokens": "Semantic design tokens" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Theme accessibility requirements, liberusoftware/theme-base, liberusoftware/theme-dark, Theme Architecture, Theme System Guide]
- "concept_set_locale_middleware": "SetLocale middleware" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[Multi-language support, config('app.supported_locales'), Theme preference persistence, Theme selection precedence, Multi-Language Support Documentation]
- "concept_standalone_testable_packages": "Packages are standalone-testable" | kind=entity | source=CLAUDE.md | neighbors=[The host measures the host, A package must run against its own depe…, liberusoftware/package-testbench, tests/.gitkeep is load-bearing, CLAUDE.md — project instructions]
- "concept_theme_base": "liberusoftware/theme-base" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Semantic design tokens, liberusoftware/theme-clear-signal, liberusoftware/theme-dark, liberusoftware/theme-default, Theme Architecture]
- "concept_theme_blade_directives": "Theme Blade directives" | kind=entity | source=docs/THEME_QUICK_REFERENCE.md | neighbors=[ThemeServiceProvider, Theme Project Implementation Summary, Theme System Quick Reference, Theme System Guide, Theme System Visual Overview]
- "concept_theme_service_provider": "ThemeServiceProvider" | kind=entity | source=docs/THEME_VISUAL_OVERVIEW.md | neighbors=[Theme Blade directives, ThemeManager service, Theme preference persistence, Theme Project Implementation Summary, Theme System Visual Overview]
- "concept_translation_service": "TranslationService (MyMemory)" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[Contract packages, Multi-language support, translate:generate artisan command, Translation caching, Multi-Language Support Documentation]
- "concept_unified_themes_directory": "Unified /themes root directory" | kind=entity | source=docs/THEME_PROJECT_SUMMARY.md | neighbors=[liberu-theme Composer package, No conversations table, Theme Project Implementation Summary, Theme System Quick Reference, Theme System Visual Overview]
- "concept_vite_theme_asset_discovery": "Vite theme asset auto-discovery" | kind=entity | source=docs/THEME_SYSTEM.md | neighbors=[Deterministic theme builds, theme.json manifest, Theme Project Implementation Summary, Theme System Guide, Theme System Visual Overview]
- "contracts_privilegedactor": "PrivilegedActor.php" | kind=code-symbol | source=modules/roles-permissions/src/Contracts/PrivilegedActor.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, authorizationIdentifier(), authorizationType(), hasRoleInAnyTeam(), isSuperAdmin()]
- "controllers_instructioncontroller": "InstructionController.php" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, InstructionController]
- "controllers_lettingcontroller": "LettingController.php" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3735f58 Complete letting and property m…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, LettingController]
- "controllers_listingcontroller": "ListingController.php" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, b9f8ca5 Add real estate listings module…, ListingController]
- "controllers_managementrecordcontroller": "ManagementRecordController.php" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3735f58 Complete letting and property m…, bd5c605 Add explicit API response resou…, e8b93fc Implement remaining real estate…, ManagementRecordController]
- "controllers_matchprofilecontroller": "MatchProfileController.php" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, 8cf045c Implement real estate module co…, MatchProfileController]
- "controllers_mediadocumentcontroller": "MediaDocumentController.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L1 | neighbors=[11d0aae Add real estate media documents…, 2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, MediaDocumentController]
- "controllers_onthemarketsynccontroller": "OnTheMarketSyncController.php" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, bd4b1dc Add independent property portal…, bd5c605 Add explicit API response resou…, OnTheMarketSyncController]
- "controllers_rightmovesynccontroller": "RightmoveSyncController.php" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, bd4b1dc Add independent property portal…, bd5c605 Add explicit API response resou…, RightmoveSyncController]
- "controllers_zooplasynccontroller": "ZooplaSyncController.php" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, bd4b1dc Add independent property portal…, bd5c605 Add explicit API response resou…, ZooplaSyncController]
- "currency_context_module": "Liberu Currency Context" | kind=entity | source=modules/currency-context/README.md | neighbors=[Capability: foundation.currency, Contract: ExchangeRateProvider, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager]
- "factories_userfactory_userfactory": "UserFactory" | kind=code-symbol | source=database/factories/UserFactory.php:L16 | neighbors=[UserFactory.php, .definition(), .unverified(), .withConnectedAccount(), .withPersonalTeam()]
- "feature_flags_module": "Liberu Feature Flags" | kind=entity | source=modules/feature-flags/README.md | neighbors=[Capability: foundation.feature-flags, Installation does not imply enablement, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager]
- "filament_5_resource_adapter": "Filament 5 Resource Adapter" | kind=entity | source=modules/real-estate-listings-filament/README.md | neighbors=[Provider-Neutral Domain, Replaceable Ad…, Real Estate Listings Filament, Real Estate Marketing Filament, Real Estate Matching Filament, Real Estate Media and Documents Filament]
- "filament_echo_e": "e()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, di(), i(), t(), xr()]
- "filament_echo_fe": "Fe()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, Dt(), He(), Mt(), ze()]
- "filament_module_index": "Filament module index" | kind=entity | source=modules/filament/README.md | neighbors=[filament/filament ^5.1, Liberu Identity Administration (identit…, Liberu platform project scope, One core package per adapter, Real Estate project scope]
- "livewire_4_list_adapter": "Livewire 4 List Adapter" | kind=entity | source=modules/real-estate-listings-livewire/README.md | neighbors=[Provider-Neutral Domain, Replaceable Ad…, Real Estate Listings Livewire, Real Estate Marketing Livewire, Real Estate Matching Livewire, Real Estate Media and Documents Livewire]
- "measure_coverage": "measure-coverage" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, storage/app/coverage.tsv, measure-phpstan, Non-interactive, fail-on-error commands, set-coverage-thresholds]
- "measure_phpstan": "measure-phpstan" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, measure-coverage, Non-interactive, fail-on-error commands, storage/app/phpstan.tsv, set-phpstan-levels]
- "migrations_2026_08_23_000001_create_real_estate_properties_tables": "2026_08_23_000001_create_real_estate_properties_tables.php" | kind=code-symbol | source=modules/real-estate-properties/database/migrations/2026_08_23_000001_create_real_estate_properties_tables.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 70e3a0a Harden real estate property pac…, 75d6371 Add real estate properties modu…, down(), up()]
- "models_offer": "Offer.php" | kind=code-symbol | source=modules/real-estate-offers/src/Models/Offer.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, Offer]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-051.json

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
