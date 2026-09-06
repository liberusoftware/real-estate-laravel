# Node Description Batch 102 of 212

Graphify is running in assistant/skill mode (no API key). You are the host
assistant (Claude Code / Codex / Gemini CLI). Read the prompt below and write
your JSON answer to the answer file.

## Prompt

You are documenting nodes in a knowledge graph.
For each entry below, write ONE concise factual plain-language sentence
describing what it is or does. Use only the provided context.
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

- "concept_activity_notification": "ActivityNotification" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Queued notification delivery (ShouldQue…, Implementation Summary, Real-Time Notifications Documentation]
- "concept_admin_panel": "Admin Filament panel" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Admin user-management enhancement, App\Filament\ModulePlugins, Module Development Guide]
- "concept_adr_exceptions_none": "ADR exceptions: none (§6)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Composer vendor stays liberusoftware/ (…, Conformance spec and migration plan, Composer basename and installer name la…]
- "concept_advanced_search": "Advanced search across users, posts and groups" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[Implementation Summary, Advanced Search Architecture, Advanced Search Functionality]
- "concept_alpinejs_frontend_choice": "Alpine.js for the messaging UI" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[Messaging web interface, Private Messaging System Architecture, Messaging Developer Notes]
- "concept_api_vs_web_route_split": "Separate API (Sanctum) and web (session) routes" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[Messaging web interface, Sanctum API authentication, Messaging Developer Notes]
- "concept_broadcasting_pusher": "Pusher broadcasting driver" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Alternative broadcast services, Real-time notification system, Real-Time Notifications Documentation]
- "concept_code_audit": "Code-level conformance audit" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Audit sliced by catching mechanism, Finding ranks and the security flag, Code-level conformance audit]
- "concept_composer_install_clobber_trap": "Root composer install clobbers tracked packages" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[Tracked installed package directories, §6.2 zero-diff gate, Handoff: Conformance Map (2026-08-04)]
- "concept_composer_unprefixed_package_naming": "Composer name unprefixed, GitHub repo carries module- prefix" | kind=entity | source=modules/real-estate-offers/README.md | neighbors=[Real Estate Offers Filament, Real Estate Offers Livewire, Real Estate Offers]
- "concept_contract_package": "Contract packages" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[TranslationService (MyMemory), No informal cross-module integration, Module Development Guide]
- "concept_csrf_protection": "CSRF protection on state-changing requests" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[Messaging web interface, Private Messaging System Architecture, Messaging Developer Notes]
- "concept_dashboard_widgets": "Admin dashboard widgets" | kind=entity | source=docs/IMPLEMENTATION_SUMMARY.md | neighbors=[Admin user-management enhancement, Implementation Summary, Admin Panel Quick Reference Guide]
- "concept_divergence_audit": "48-of-48 divergence audit" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Module-repo-first source of truth (§3.1), §6.2 zero-diff gate, Conformance spec and migration plan]
- "concept_filament_plugin_declaration": "filament_plugins manifest declaration" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Companion *-filament presentation module, App\Filament\ModulePlugins, Module Development Guide]
- "concept_filament_presentation_module": "Companion *-filament presentation module" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[filament_plugins manifest declaration, Module categories, Module Development Guide]
- "concept_foundation_boundaries": "Three foundation boundaries" | kind=entity | source=docs/FOUNDATION_COMPLIANCE.md | neighbors=[Composition host, Foundation capability → package matrix, Foundation compliance]
- "concept_foundation_filament_dissolved": "foundation-filament dissolved" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Package naming: -core marks provider-ne…, App\Support\ThemeColors, Conformance spec and migration plan]
- "concept_friend_request_notification": "FriendRequestNotification" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Queued notification delivery (ShouldQue…, Implementation Summary, Real-Time Notifications Documentation]
- "concept_github_issue_tracker": "GitHub Issues as the issue tracker" | kind=entity | source=docs/agents/issue-tracker.md | neighbors=[Canonical triage labels, Wayfinder map and child tickets, Agent Issue Tracker Convention]
- "concept_host_measures_host": "The host measures the host" | kind=entity | source=CLAUDE.md | neighbors=[Host CI gates, Packages are standalone-testable, CLAUDE.md — project instructions]
- "concept_language_switcher": "LanguageSwitcher Livewire component" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[Localization module split, config('app.supported_locales'), Multi-Language Support Documentation]
- "concept_laravel_echo_client": "Laravel Echo client listener" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Browser push notifications, Private user broadcast channels, Real-Time Notifications Documentation]
- "concept_localization_modules": "Localization module split" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[LanguageSwitcher Livewire component, liberu-module Composer package, Multi-Language Support Documentation]
- "concept_manifest_derived_enablement": "Discovery and enablement derive from manifests (§3.6)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Manifest default_enabled, config/modules.php env overrides, Conformance spec and migration plan]
- "concept_messaging_api_endpoints": "Messaging REST API endpoints" | kind=entity | source=docs/MESSAGING.md | neighbors=[Sanctum API authentication, Private Messaging System (API reference), Messaging Setup Instructions]
- "concept_messaging_tests": "Messaging test suites" | kind=entity | source=docs/MESSAGING_ARCHITECTURE.md | neighbors=[Private Messaging System, Private Messaging System Architecture, Messaging Developer Notes]
- "concept_migrate_testbench_script": "scripts/migrate-testbench" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Handoffs live in docs/handoffs/, liberusoftware/package-testbench, Handoff: Step 4 Testbench Migration (20…]
- "concept_module_categories": "Module categories" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Companion *-filament presentation module, module.json manifest, Module Development Guide]
- "concept_no_conversation_table": "No conversations table" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[messages table schema, Unified /themes root directory, Messaging Developer Notes]
- "concept_no_laravel_auto_discovery": "No extra.laravel.providers auto-discovery" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Host architecture boundary rules, Module manager (provider lifecycle auth…, Module Development Guide]
- "concept_packagist_blocker": "Packagist namespace registration blocker" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[liberusoftware/package-testbench, Packagist token stays out of the session, Handoff: Step 4 Testbench Migration (20…]
- "concept_password_auto_hashing": "Password auto-hashing on save" | kind=entity | source=docs/IMPLEMENTATION_SUMMARY.md | neighbors=[Tabbed user form, Implementation Summary, Admin Panel Quick Reference Guide]
- "concept_provider_neutral_portal_integration": "Provider-neutral portal integration boundary" | kind=entity | source=modules/real-estate-onthemarket/README.md | neighbors=[Presentation-neutral domain core, Real Estate OnTheMarket (core module), Real Estate Portals and Reporting (core…]
- "concept_search_controller": "SearchController" | kind=entity | source=docs/SEARCH_ARCHITECTURE.md | neighbors=[Search API endpoints, SearchService, Advanced Search Architecture]
- "concept_selective_column_loading": "Selective column loading" | kind=entity | source=docs/SEARCH_OPTIMIZATION.md | neighbors=[SearchService, Implementation Summary, Search Performance Optimization]
- "concept_shared_pint_phpstan": "Shared Pint and PHPStan configs via --config" | kind=entity | source=CLAUDE.md | neighbors=[CLAUDE.md — project instructions, liberusoftware/package-testbench, declare(strict_types=1) absent almost e…]
- "concept_supported_locales_config": "config('app.supported_locales')" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[LanguageSwitcher Livewire component, SetLocale middleware, Multi-Language Support Documentation]
- "concept_tenancy_rules": "Tenancy rules that bite" | kind=entity | source=CLAUDE.md | neighbors=[Filament Shield, Spatie Permission (team-scoped roles), CLAUDE.md — project instructions]
- "concept_theme_accessibility_requirements": "Theme accessibility requirements" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Multi-language support, Semantic design tokens, Theme Architecture]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-101.json

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
