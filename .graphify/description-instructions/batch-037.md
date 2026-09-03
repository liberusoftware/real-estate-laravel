# Node Description Batch 38 of 212

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

- "components_select_un": "un()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, gi(), de(), Kt(), lt(), nt()]
- "components_select_yt": "yt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ei(), fn(), Ft(), ni(), sn()]
- "components_select_ze": "Ze()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn(), Ft(), Ie(), Te(), zt()]
- "components_viewinglist": "ViewingList.php" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…, ViewingList]
- "components_viewinglist_viewinglist": "ViewingList" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L15 | neighbors=[ViewingList.php, .cancelViewing(), .confirmViewing(), .markNoShow(), .render(), .runForCurrentTeam()]
- "concept_composer_installer_plugin": "liberusoftware/composer-installer" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[liberu-module Composer package, liberu-theme Composer package, Tracked installed package directories, docs/CONFORMANCE.md, Handoff: Conformance Map (2026-08-04), Theme Architecture]
- "concept_default_enabled": "Manifest default_enabled" | kind=entity | source=CLAUDE.md | neighbors=[config/modules.php env overrides, Installation never implies boot, Discovery and enablement derive from ma…, localization-mymemory adapter, module.json manifest, Both analytics adapters are inert and n…]
- "concept_group_model": "Group model" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[liberusoftware/module-search-demo, Reusable Eloquent search scopes, SearchService, Implementation Summary, Advanced Search Architecture, Advanced Search Functionality]
- "concept_liberu_module_package": "liberu-module Composer package" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[liberusoftware/composer-installer, module.json manifest, Localization module split, modules/search package, liberusoftware/module-search-demo, Module Development Guide]
- "concept_messaging_web_interface": "Messaging web interface" | kind=entity | source=docs/MESSAGING_ARCHITECTURE.md | neighbors=[Separate API (Sanctum) and web (session…, Alpine.js for the messaging UI, CSRF protection on state-changing reque…, @json() directive for JS contexts, Private Messaging System (API reference), Private Messaging System Architecture]
- "concept_module_repo_first": "Module-repo-first source of truth (§3.1)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[48-of-48 divergence audit, §6.2 zero-diff gate, Release is a claim about the tree, Conformance spec and migration plan, liberusoftware/composer-installer, scripts/fleet]
- "concept_notification_queueing": "Queued notification delivery (ShouldQueue)" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[ActivityNotification, FriendRequestNotification, NewMessageNotification, Real-time notification system, Implementation Summary, Real-Time Notifications Documentation]
- "concept_phpstan_ratchet": "Per-package PHPStan level ratchet" | kind=entity | source=CLAUDE.md | neighbors=[Per-package coverage ratchet, Host CI gates, liberusoftware/package-testbench, CLAUDE.md — project instructions, Seven packages call members their decla…, Service-locator prohibition has no rule…]
- "concept_search_scopes": "Reusable Eloquent search scopes" | kind=entity | source=docs/SEARCH_OPTIMIZATION.md | neighbors=[Group model, Post model, SearchService, Advanced Search Architecture, Advanced Search Functionality, Search Performance Optimization]
- "concept_theme_helpers": "Theme helper functions" | kind=entity | source=docs/THEME_QUICK_REFERENCE.md | neighbors=[ThemeManager service, Livewire theme switcher, Theme Project Implementation Summary, Theme System Quick Reference, Theme System Guide, Theme System Visual Overview]
- "concept_theme_inheritance": "Theme parent inheritance chain" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Host architecture boundary rules, theme.json manifest, ThemeManager service, theme:validate / theme:cache / theme:cl…, Theme Architecture, Theme System Guide]
- "concept_theme_preference_persistence": "Theme preference persistence" | kind=entity | source=docs/THEME_VISUAL_OVERVIEW.md | neighbors=[SetLocale middleware, ThemeServiceProvider, Livewire theme switcher, Theme Project Implementation Summary, Theme System Quick Reference, Theme System Visual Overview]
- "concept_theme_switcher_component": "Livewire theme switcher" | kind=entity | source=docs/THEME_VISUAL_OVERVIEW.md | neighbors=[Theme helper functions, Theme preference persistence, Theme Project Implementation Summary, Theme System Quick Reference, Theme System Guide, Theme System Visual Overview]
- "concept_theme_system": "Theme packages and inheritance" | kind=entity | source=CLAUDE.md | neighbors=[ThemeDiscovery (Composer-driven), theme.json manifest, ThemeManager::inheritanceChain, CLAUDE.md — project instructions, App\Support\ThemeColors, theme-real-estate-default]
- "concept_tracked_installed_directories": "Tracked installed package directories" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Root composer install clobbers tracked …, liberusoftware/composer-installer, modules/ is Composer output, Theme release and upgrade flow, Handoff: Conformance Map (2026-08-04), Theme Architecture]
- "concept_zero_diff_gate": "§6.2 zero-diff gate" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Root composer install clobbers tracked …, docs/CONFORMANCE.md, Module-repo-first source of truth (§3.1), 48-of-48 divergence audit, Conformance spec and migration plan, Handoff: Conformance Map (2026-08-04)]
- "config_filament_shield": "filament-shield.php" | kind=code-symbol | source=config/filament-shield.php:L1 | neighbors=[45479e6 Merge pull request #1301 from l…, 75f7818 Bootstrap application from Libe…, aca82ae Merge branch 'main' of github.c…, b16f206 Update dependencies including t…, e3c21d0 bugfixes and updates. joelbutch…, e90c0cd fix(panels): let every role ope…]
- "controllers_branchcontroller_branchcontroller": "BranchController" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L16 | neighbors=[BranchController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_instructioncontroller_instructioncontroller": "InstructionController" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L16 | neighbors=[InstructionController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_listingcontroller_listingcontroller": "ListingController" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L16 | neighbors=[ListingController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_marketingcampaigncontroller_marketingcampaigncontroller": "MarketingCampaignController" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L16 | neighbors=[MarketingCampaignController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_matchprofilecontroller_matchprofilecontroller": "MatchProfileController" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L16 | neighbors=[MatchProfileController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_mediadocumentcontroller_mediadocumentcontroller": "MediaDocumentController" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L16 | neighbors=[MediaDocumentController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_offercontroller": "OfferController.php" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, OfferController]
- "controllers_partycontroller_partycontroller": "PartyController" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L16 | neighbors=[PartyController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_portalreportcontroller_portalreportcontroller": "PortalReportController" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L16 | neighbors=[PortalReportController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_propertycontroller": "PropertyController.php" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3f6a64e Route property adapters through…, 75d6371 Add real estate properties modu…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, PropertyController]
- "controllers_propertycontroller_propertycontroller": "PropertyController" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L16 | neighbors=[PropertyController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_salesprogressioncontroller_salesprogressioncontroller": "SalesProgressionController" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L16 | neighbors=[SalesProgressionController.php, .destroy(), .index(), .show(), .store(), .update()]
- "controllers_valuationcontroller": "ValuationController.php" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L1 | neighbors=[188c376 Add real estate valuations API …, 2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, ValuationController]
- "controllers_viewingcontroller": "ViewingController.php" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, ViewingController]
- "doc_readme": "Liberu Real Estate README" | kind=entity | source=README.md | neighbors=[Liberu Real Estate host application, Portal synchronization modules (Rightmo…, Real-estate package naming convention, AGENTS.md, Foundation compliance, theme-real-estate-default]
- "feature_exampletest": "ExampleTest.php" | kind=code-symbol | source=tests/Feature/ExampleTest.php:L1 | neighbors=[0e035e4 Fix ExampleTest to properly set…, 3da31ff Merge pull request #1252 from l…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, f79fa72 Merge branch 'main' of github.c…, ExampleTest]
- "feature_moduleintegrationcoveragetest": "ModuleIntegrationCoverageTest.php" | kind=code-symbol | source=tests/Feature/ModuleIntegrationCoverageTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 75f7818 Bootstrap application from Libe…, 8cf045c Implement real estate module co…, key(), secret(), validate()]
- "idempotency_key_header": "Idempotency-Key Header" | kind=entity | source=modules/real-estate-instructions-api/openapi/v1/real-estate-instructions.yaml | neighbors=[Offer Transition, Proof and Timeline Op…, Liberu Scheduler and Queues, Archive Instead of Destroy on DELETE, Real Estate Zoopla Sync API (OpenAPI v1), Real Estate Core OpenAPI v1, Real Estate Instructions OpenAPI v1]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-037.json

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
