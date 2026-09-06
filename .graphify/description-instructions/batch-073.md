# Node Description Batch 74 of 212

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

- "concept_search_indexes": "Search database indexes" | kind=entity | source=docs/SEARCH_OPTIMIZATION.md | neighbors=[Full-text indexes, Implementation Summary, Advanced Search Architecture, Search Performance Optimization]
- "concept_search_rate_limiting": "Search API rate limiting" | kind=entity | source=docs/SEARCH_OPTIMIZATION.md | neighbors=[Search API endpoints, Translation caching, Implementation Summary, Search Performance Optimization]
- "concept_theme_release_upgrade": "Theme release and upgrade flow" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Module release workflow, Tracked installed package directories, Theme Architecture, Theme System Guide]
- "concept_theme_resolution_precedence": "Theme selection precedence" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Capability declarations (provides / req…, SetLocale middleware, ThemeManager service, Theme Architecture]
- "concept_user_form_tabs": "Tabbed user form" | kind=entity | source=docs/IMPLEMENTATION_SUMMARY.md | neighbors=[Admin user-management enhancement, Password auto-hashing on save, Implementation Summary, Admin Panel Quick Reference Guide]
- "concept_valuation_workflow_transitions": "Valuation Workflow Transitions" | kind=entity | source=modules/real-estate-valuations-api/openapi/v1/real-estate-valuations.yaml | neighbors=[Rightmove Sync Operation, Viewing Lifecycle Transitions, Valuations API v1 OpenAPI Spec, Real Estate Valuations Filament Adapter]
- "concept_vendor_decision": "Composer vendor stays liberusoftware/ (§3.2)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[ADR exceptions: none (§6), Package naming: -core marks provider-ne…, Packagist names drop the module- prefix, Conformance spec and migration plan]
- "concept_vendor_naming_decision": "liberusoftware vs liberu vendor prefix" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[docs/CONFORMANCE.md, liberusoftware/package-testbench, Handoff: Conformance Map (2026-08-04), Handoff: Step 4 Testbench Migration (20…]
- "concept_versioned_real_estate_api_namespace": "/api/v1/real-estate versioned namespace" | kind=entity | source=modules/real-estate-properties-api/README.md | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, OpenAPI v1: Real Estate Portals and Rep…, Real Estate Parties API, Real Estate Properties API]
- "concept_wayfinder_map_612": "Wayfinder map issue #612" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[docs/CONFORMANCE.md, Wayfinder map and child tickets, Handoff: Conformance Map (2026-08-04), Handoff: Step 4 Testbench Migration (20…]
- "config_database": "database.php" | kind=code-symbol | source=config/database.php:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, f72c39d Upgrade to Laravel 13, PHPUnit …]
- "config_jetstream": "jetstream.php" | kind=code-symbol | source=config/jetstream.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, aca82ae Merge branch 'main' of github.c…, b16f206 Update dependencies including t…, e3c21d0 bugfixes and updates. joelbutch…]
- "config_modules": "modules.php" | kind=code-symbol | source=modules/module-manager/config/modules.php:L1 | neighbors=[0812f9b Update main workflow Docker wit…, 30d2b7d Add socialstream, Docker/k8s up…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "config_services": "services.php" | kind=code-symbol | source=config/services.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…, f358830 chore: trim the comments, and w…]
- "conformance_step_5_test_redistribution": "Conformance Step 5 — Test Redistribution" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Blocker: theme discovery is not Compose…, docs/CONFORMANCE.md — Conformance Plan, liberu-module Composer package type, Handoff: Conformance Step 5 (Test Redis…]
- "contracts_integrationadapter": "IntegrationAdapter.php" | kind=code-symbol | source=modules/integrations/src/Contracts/IntegrationAdapter.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, capabilities(), name(), test()]
- "contracts_onthemarkettransport": "OnTheMarketTransport.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Contracts/OnTheMarketTransport.php:L1 | neighbors=[bd4b1dc Add independent property portal…, branchPropertyList(), removeProperty(), sendProperty()]
- "contracts_rightmovetransport": "RightmoveTransport.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Contracts/RightmoveTransport.php:L1 | neighbors=[bd4b1dc Add independent property portal…, branchPropertyList(), removeProperty(), sendProperty()]
- "contracts_searchindexer": "SearchIndexer.php" | kind=code-symbol | source=modules/search/src/Contracts/SearchIndexer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, flush(), index(), remove()]
- "contracts_settingdefinition": "SettingDefinition.php" | kind=code-symbol | source=modules/settings/src/Contracts/SettingDefinition.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, key(), secret(), validate()]
- "contracts_zooplatransport": "ZooplaTransport.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Contracts/ZooplaTransport.php:L1 | neighbors=[bd4b1dc Add independent property portal…, branchPropertyList(), removeProperty(), sendProperty()]
- "controllers_branchcontroller": "BranchController.php" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, BranchController]
- "controllers_marketingcampaigncontroller": "MarketingCampaignController.php" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, 8cf045c Implement real estate module co…, MarketingCampaignController]
- "controllers_partycontroller": "PartyController.php" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 73659b3 Add real estate parties module …, bd5c605 Add explicit API response resou…, PartyController]
- "controllers_portalreportcontroller": "PortalReportController.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, bd5c605 Add explicit API response resou…, PortalReportController]
- "controllers_salesprogressioncontroller": "SalesProgressionController.php" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, bd5c605 Add explicit API response resou…, SalesProgressionController]
- "core_module_index": "Core module index" | kind=entity | source=modules/core/README.md | neighbors=[Capability boundary discipline, Liberu platform project scope, One core package per adapter, Real Estate project scope]
- "delivery_phase_2": "Delivery phase 2: progression, portals, marketing, reporting, documents" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Real Estate capability: Marketing, Real Estate capability: Portals and Rep…, Real Estate capability: Sales Progressi…, Real Estate delivery order (three phase…]
- "discovery_themediscovery_themediscovery": "ThemeDiscovery" | kind=code-symbol | source=modules/theme-support/src/Discovery/ThemeDiscovery.php:L10 | neighbors=[ThemeDiscovery.php, .__construct(), .discover(), .installedPaths()]
- "doc_agents_domain": "Agent Domain Docs Convention" | kind=entity | source=docs/agents/domain.md | neighbors=[docs/adr/ decision records, CONTEXT.md glossary, Single-context domain docs, Handoff: Conformance Map (2026-08-04)]
- "doc_agents_issue_tracker": "Agent Issue Tracker Convention" | kind=entity | source=docs/agents/issue-tracker.md | neighbors=[GitHub Issues as the issue tracker, PRs-as-request-surface flag, Wayfinder map and child tickets, Handoff: Conformance Map (2026-08-04)]
- "doc_gemini_md": "GEMINI.md" | kind=entity | source=GEMINI.md | neighbors=[Laravel Boost guidelines, lerd local PHP development environment, AGENTS.md, lerd twelve grouped MCP tools]
- "entity_contract_packages": "Contract packages (analytics-contracts, localization-contracts)" | kind=entity | source=CLAUDE.md | neighbors=[Foundation capability → package matrix, Module system, localization-mymemory adapter, Both analytics adapters are inert and n…]
- "entity_module_json": "module.json manifest" | kind=entity | source=CLAUDE.md | neighbors=[Manifest default_enabled, App\Filament\ModulePlugins, ModuleManagerServiceProvider, ModuleValidator]
- "entity_module_validator": "ModuleValidator" | kind=entity | source=CLAUDE.md | neighbors=[scripts/fleet, module:validate, theme:validate, founda…, ModuleValidationGuard, module.json manifest]
- "entity_theme_real_estate_default": "theme-real-estate-default" | kind=entity | source=README.md | neighbors=[Liberu Real Estate host application, Liberu Real Estate README, Theme packages and inheritance, ThemeManager::inheritanceChain]
- "feature_realestateofferstest": "RealEstateOffersTest.php" | kind=code-symbol | source=tests/Feature/RealEstateOffersTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…]
- "feature_realestatepropertyactionstest": "RealEstatePropertyActionsTest.php" | kind=code-symbol | source=tests/Feature/RealEstatePropertyActionsTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 70e3a0a Harden real estate property pac…, 73659b3 Add real estate parties module …, 8cf045c Implement real estate module co…]
- "feature_realestatevaluationstest": "RealEstateValuationsTest.php" | kind=code-symbol | source=tests/Feature/RealEstateValuationsTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…]
- "feature_realestateviewingstest": "RealEstateViewingsTest.php" | kind=code-symbol | source=tests/Feature/RealEstateViewingsTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-073.json

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
