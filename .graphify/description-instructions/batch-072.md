# Node Description Batch 73 of 212

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

- "components_select_zn": "zn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Bt(), $i(), k()]
- "components_slider_e": "_e()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, G(), R(), Ue()]
- "components_slider_g": "G()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, _e(), Le(), Oe()]
- "components_slider_it": "it()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Ne(), R(), we()]
- "components_slider_we": "we()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, it(), rt(), ze()]
- "components_tags_input": "tags-input.js" | kind=code-symbol | source=public/js/filament/forms/components/tags-input.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, r()]
- "components_territorylist": "TerritoryList.php" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/TerritoryList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…, TerritoryList]
- "components_validation_errors_blade": "validation-errors.blade.php" | kind=code-symbol | source=resources/views/components/validation-errors.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…]
- "components_viewinglist_viewinglist_runforcurrentteam": ".runForCurrentTeam()" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L49 | neighbors=[ViewingList, .cancelViewing(), .confirmViewing(), .markNoShow()]
- "components_zooplasynclist": "ZooplaSyncList.php" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/src/Components/ZooplaSyncList.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, ZooplaSyncList]
- "concept_archive_instead_of_delete": "Archive Instead of Hard Delete" | kind=entity | source=modules/real-estate-rightmove-api/openapi/v1/real-estate-rightmove.yaml | neighbors=[Immutable Property History Entries, Migration Owns Only the Package's Tables, Rightmove Sync API v1 OpenAPI Spec, Sales Progression API v1 OpenAPI Spec]
- "concept_ci_three_workflows": "Package CI: three workflows, not three jobs (§3.9)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Per-package coverage ratchet, Host CI gates, Conformance spec and migration plan, All 44 callers pin the reusable workflo…]
- "concept_domain_docs_single_context": "Single-context domain docs" | kind=entity | source=docs/agents/domain.md | neighbors=[docs/adr/ decision records, docs/CONFORMANCE.md, CONTEXT.md glossary, Agent Domain Docs Convention]
- "concept_error_schema": "Shared Error Schema" | kind=entity | source=modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml | neighbors=[Rightmove Sync API v1 OpenAPI Spec, Sales Progression API v1 OpenAPI Spec, Valuations API v1 OpenAPI Spec, Viewings API v1 OpenAPI Spec]
- "concept_foundation_module_matrix": "Foundation capability → package matrix" | kind=entity | source=docs/FOUNDATION_MODULE_MATRIX.md | neighbors=[Three foundation boundaries, Six out-of-scope packages exiled (§3.4), Contract packages (analytics-contracts,…, Foundation module implementation matrix]
- "concept_host_boundary": "Host boundary: /app is composition only" | kind=entity | source=docs/FOUNDATION_MODULE_MATRIX.md | neighbors=[Admin user-management enhancement, Composition host, Foundation module implementation matrix, Three packages migrate the users table …]
- "concept_host_ci_gates": "Host CI gates" | kind=entity | source=.github/workflows/tests.yml | neighbors=[Package CI: three workflows, not three …, The host measures the host, Per-package PHPStan level ratchet, Foundation verification gates]
- "concept_laravel_boost_guidelines": "Laravel Boost guidelines" | kind=entity | source=AGENTS.md | neighbors=[Operations stack (Horizon, Octane, Tele…, AGENTS.md, CLAUDE.md — project instructions, GEMINI.md]
- "concept_liberu_real_estate": "Liberu Real Estate host application" | kind=entity | source=README.md | neighbors=[Composition host, Portal synchronization modules (Rightmo…, theme-real-estate-default, Liberu Real Estate README]
- "concept_message_model": "Message Model" | kind=entity | source=docs/MESSAGING.md | neighbors=[MessageController, messages table schema, Private Messaging System (API reference), Private Messaging System Architecture]
- "concept_module_capabilities": "Capability declarations (provides / requires)" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[module.json manifest, module:validate command, Theme selection precedence, Module Development Guide]
- "concept_module_plugins_composer": "App\\Filament\\ModulePlugins" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Admin Filament panel, App Filament panel, filament_plugins manifest declaration, Module Development Guide]
- "concept_module_release_workflow": "Module release workflow" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[module:validate command, Publishing mirrors all packages, not ju…, Theme release and upgrade flow, Module Development Guide]
- "concept_module_search": "modules/search package" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[liberu-module Composer package, liberusoftware/module-search-demo, SearchService, Advanced Search Functionality]
- "concept_module_system": "Module system" | kind=entity | source=CLAUDE.md | neighbors=[Composition host, ModuleManagerServiceProvider, CLAUDE.md — project instructions, Contract packages (analytics-contracts,…]
- "concept_module_validate_command": "module:validate command" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Module release workflow, Capability declarations (provides / req…, module.json manifest, Module Development Guide]
- "concept_modules_is_composer_output": "modules/ is Composer output" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Tracked installed package directories, Publishing mirrors all packages, not ju…, composer.json version fields are load-b…, Handoff: Step 4 Testbench Migration (20…]
- "concept_multi_language_support": "Multi-language support" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[SetLocale middleware, TranslationService (MyMemory), Theme accessibility requirements, Multi-Language Support Documentation]
- "concept_new_message_notification": "NewMessageNotification" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Queued notification delivery (ShouldQue…, Private Messaging System, Implementation Summary, Real-Time Notifications Documentation]
- "concept_openapi_31_versioned_contract": "OpenAPI 3.1.0 Versioned API Contract" | kind=entity | source=modules/real-estate-rightmove-api/openapi/v1/real-estate-rightmove.yaml | neighbors=[Rightmove Sync API v1 OpenAPI Spec, Sales Progression API v1 OpenAPI Spec, Valuations API v1 OpenAPI Spec, Viewings API v1 OpenAPI Spec]
- "concept_package_exile": "Six out-of-scope packages exiled (§3.4)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Foundation capability → package matrix, Migration sequence (steps −1 to 9), search-demo package, Conformance spec and migration plan]
- "concept_package_naming": "Package naming: -core marks provider-neutrality (§3.3)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[foundation-filament dissolved, Namespace decisions (§3.5), Composer vendor stays liberusoftware/ (…, Conformance spec and migration plan]
- "concept_packagist_naming": "Packagist names drop the module- prefix" | kind=entity | source=CLAUDE.md | neighbors=[Composer vendor stays liberusoftware/ (…, Real-estate package naming convention, CLAUDE.md — project instructions, Composer basename and installer name la…]
- "concept_pagination_meta_schema": "Shared PaginationMeta Schema" | kind=entity | source=modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml | neighbors=[Rightmove Sync API v1 OpenAPI Spec, Sales Progression API v1 OpenAPI Spec, Valuations API v1 OpenAPI Spec, Viewings API v1 OpenAPI Spec]
- "concept_publish_whole_fleet": "Publishing mirrors all packages, not just changed ones" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Module release workflow, modules/ is Composer output, A tag whose commit predates a fix, Handoff: Step 4 Testbench Migration (20…]
- "concept_rule_relocation": "Architecture rules relocated (12 → 8)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[A rule that cannot fire is not coverage, tests/Architecture/ModuleBoundariesTest, liberusoftware/package-testbench, Conformance spec and migration plan]
- "concept_sanctum_bearer_security": "Sanctum Bearer Security Scheme" | kind=entity | source=modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml | neighbors=[Rightmove Sync API v1 OpenAPI Spec, Sales Progression API v1 OpenAPI Spec, Valuations API v1 OpenAPI Spec, Viewings API v1 OpenAPI Spec]
- "concept_sanctum_bearer_security_scheme": "Sanctum bearer security scheme" | kind=entity | source=modules/real-estate-parties-api/openapi/v1/real-estate-parties.yaml | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, OpenAPI v1: Real Estate Parties API, OpenAPI v1: Real Estate Portals and Rep…, OpenAPI v1: Real Estate Properties API]
- "concept_scout_elasticsearch_future": "Full-text search engine migration path" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[Message encryption at rest, Full-text indexes, Advanced Search Functionality, Search Performance Optimization]
- "concept_search_api_endpoints": "Search API endpoints" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[SearchController, Search API rate limiting, Advanced Search Architecture, Advanced Search Functionality]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-072.json

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
