# Node Description Batch 29 of 212

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

- "components_rich_editor_zy": "zy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, mapInner(), findIndex(), forEach(), maybeChild(), No()]
- "components_select_de": "de()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Kt(), lt(), Xt(), fn(), un()]
- "components_select_deferpositiondropdown": "deferPositionDropdown()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, selectOption(), showLoadingState(), showMaxItemsMessage(), showNoOptionsMessage(), showNoResultsMessage()]
- "components_select_dt": "Dt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, At(), dn(), di(), Ft(), hi()]
- "components_select_hideloadingstate": "hideLoadingState()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, closeDropdown(), openDropdown(), renderOptions(), showLoadingState(), showNoOptionsMessage()]
- "components_select_kt": "Kt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, de(), dn(), b(), it(), un()]
- "components_select_rn": "Rn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, b(), ht(), k(), Ln(), _n()]
- "components_select_rt": "Rt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, dn(), pn(), bi(), ct(), vi()]
- "components_select_sn": "sn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn(), An(), ut(), Vt(), yt()]
- "components_select_tt": "Tt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, dn(), fi(), gn(), se(), nt()]
- "concept_four_package_adapter_split": "Core/API/Filament/Livewire Package Split" | kind=entity | source=modules/real-estate-sales-progression/README.md | neighbors=[Presentation-neutral domain core, Real Estate Properties Module, Real Estate Property Management Module, Real Estate Rightmove Module, Real Estate Sales Progression Module, Real Estate Valuations Module]
- "concept_lerd_environment": "lerd local PHP development environment" | kind=entity | source=AGENTS.md | neighbors=[Session handoffs in docs/handoffs/, Container deployment topology, lerd twelve grouped MCP tools, AGENTS.md, GitHub Copilot instructions, GEMINI.md]
- "concept_messages_table": "messages table schema" | kind=entity | source=docs/MESSAGING.md | neighbors=[Message encryption at rest, Message Model, Conversation query indexes, No conversations table, Implementation Summary, Private Messaging System (API reference)]
- "concept_post_model": "Post model" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[Full-text indexes, liberusoftware/module-search-demo, Reusable Eloquent search scopes, SearchService, Implementation Summary, Advanced Search Architecture]
- "concept_realtime_notifications": "Real-time notification system" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Pusher broadcasting driver, Queued notification delivery (ShouldQue…, notifications table, Private user broadcast channels, Private Messaging System, Implementation Summary]
- "config_app": "app.php" | kind=code-symbol | source=config/app.php:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 750c68d Add socialstream, agent role, k…, 75f7818 Bootstrap application from Libe…, aca82ae Merge branch 'main' of github.c…, b16f206 Update dependencies including t…, e3c21d0 bugfixes and updates. joelbutch…]
- "controllers_agencycontroller_agencycontroller": "AgencyController" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L16 | neighbors=[AgencyController.php, .destroy(), .index(), .rules(), .show(), .store()]
- "controllers_lettingcontroller_lettingcontroller": "LettingController" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L17 | neighbors=[LettingController.php, .index(), .recordFailure(), .show(), .store(), .update()]
- "controllers_managementrecordcontroller_managementrecordcontroller": "ManagementRecordController" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L17 | neighbors=[ManagementRecordController.php, .index(), .recordFailure(), .show(), .store(), .update()]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller": "OnTheMarketSyncController" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L17 | neighbors=[OnTheMarketSyncController.php, .destroy(), .index(), .show(), .store(), .sync()]
- "controllers_rightmovesynccontroller_rightmovesynccontroller": "RightmoveSyncController" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L17 | neighbors=[RightmoveSyncController.php, .destroy(), .index(), .show(), .store(), .sync()]
- "controllers_searchcontroller_searchcontroller": "SearchController" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L13 | neighbors=[SearchController.php, .all(), .__construct(), .projectUsers(), .users(), .validateAllFilters()]
- "controllers_territorycontroller_territorycontroller": "TerritoryController" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L16 | neighbors=[TerritoryController.php, .destroy(), .index(), .rules(), .show(), .store()]
- "controllers_zooplasynccontroller_zooplasynccontroller": "ZooplaSyncController" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L17 | neighbors=[ZooplaSyncController.php, .destroy(), .index(), .show(), .store(), .sync()]
- "developer_experience_module": "Liberu Developer Experience" | kind=entity | source=modules/developer-experience/README.md | neighbors=[Capability: foundation.developer-experi…, FoundationDoctorCommand, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager, liberusoftware/package-testbench]
- "doc_quick_reference": "Admin Panel Quick Reference Guide" | kind=entity | source=docs/QUICK_REFERENCE.md | neighbors=[Admin user-management enhancement, Admin dashboard widgets, Filament Shield role-based access, Password auto-hashing on save, Tabbed user form, Users table filters and badges]
- "doc_setup_messaging": "Messaging Setup Instructions" | kind=entity | source=docs/SETUP_MESSAGING.md | neighbors=[Implementation Summary, Private Messaging System Architecture, Message encryption at rest, Messaging REST API endpoints, Private Messaging System, Sanctum API authentication]
- "entity_lerd_mcp_tools": "lerd twelve grouped MCP tools" | kind=entity | source=AGENTS.md | neighbors=[lerd local PHP development environment, Driving optimisation from real traffic, lerd git worktree subdomains, AGENTS.md, GitHub Copilot instructions, GEMINI.md]
- "entity_package_testbench": "liberusoftware/package-testbench" | kind=entity | source=CLAUDE.md | neighbors=[Migration sequence (steps −1 to 9), Per-package PHPStan level ratchet, Architecture rules relocated (12 → 8), Packages are standalone-testable, tests/Architecture/ModuleBoundariesTest, Shared Pint and PHPStan configs via --c…]
- "feature_searcherregistrytest_searcherregistrytest": "SearcherRegistryTest" | kind=code-symbol | source=modules/search/tests/Feature/SearcherRegistryTest.php:L19 | neighbors=[SearcherRegistryTest.php, .emptyPage(), .registerWidgets(), .test_a_registered_searcher_joins_searc…, .test_a_type_cannot_be_claimed_twice(), .test_search_all_honours_a_requested_su…]
- "files_media_module": "Liberu Files and Media" | kind=entity | source=modules/files-media/README.md | neighbors=[Capability: foundation.files-media, Contract: MalwareScanner, Contract: MediaAccess, Contract: MediaTransformer, liberu-module Composer package type, Module category: foundation]
- "identity_filament_module": "Liberu Identity Administration (identity-filament)" | kind=entity | source=modules/identity-core-filament/README.md | neighbors=[Filament module index, Capability: foundation.identity.filament, filament/filament ^5.1, Liberu Identity, liberu-module Composer package type, Module category: presentation]
- "models_property_property": "Property" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L13 | neighbors=[Property.php, .canBePublished(), .casts(), .history(), .scopeForTeam(), .team()]
- "openapi_real_estate_sales_progression_v1": "Sales Progression API v1 OpenAPI Spec" | kind=entity | source=modules/real-estate-sales-progression-api/openapi/v1/real-estate-sales-progression.yaml | neighbors=[Archive Instead of Hard Delete, Shared Error Schema, x-liberu-idempotency-header (Idempotenc…, OpenAPI 3.1.0 Versioned API Contract, Shared PaginationMeta Schema, Sanctum Bearer Security Scheme]
- "openapi_real_estate_valuations_v1": "Valuations API v1 OpenAPI Spec" | kind=entity | source=modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml | neighbors=[Shared Error Schema, x-liberu-idempotency-header (Idempotenc…, OpenAPI 3.1.0 Versioned API Contract, Shared PaginationMeta Schema, Sanctum Bearer Security Scheme, Valuation Workflow Transitions]
- "openapi_real_estate_viewings_v1": "Viewings API v1 OpenAPI Spec" | kind=entity | source=modules/real-estate-viewings-api/openapi/v1/real-estate-viewings.yaml | neighbors=[Shared Error Schema, x-liberu-idempotency-header (Idempotenc…, OpenAPI 3.1.0 Versioned API Contract, Shared PaginationMeta Schema, Sanctum Bearer Security Scheme, Viewing Lifecycle Transitions]
- "package_category_foundation": "Package Category: foundation" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Localization, Liberu Module Manager, Liberu Notifications, Liberu Observability, liberusoftware/organizations-teams, Presentation-Neutral Core Package]
- "presentation_only_package": "Presentation-only package boundary" | kind=entity | source=themes/base/README.md | neighbors=[Host-controlled theme selection (config…, Framework-neutral core boundary, base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "re_properties_module": "Real Estate Properties Module" | kind=entity | source=modules/real-estate-properties/README.md | neighbors=[Core/API/Filament/Livewire Package Split, Immutable Property History Entries, Migration Owns Only the Package's Tables, No App\ Namespace Dependency, Presentation-neutral domain core, Team-scoped domain records]
- "re_zoopla_module": "Real Estate Zoopla" | kind=entity | source=modules/real-estate-zoopla/README.md | neighbors=[Liberu Application Composition, Real Estate Zoopla API, Real Estate Zoopla Filament, Real Estate Zoopla Livewire, Four Implementation Indexes (core / api…, Zoopla Sync Record]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-028.json

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
