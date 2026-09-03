# Node Description Batch 137 of 212

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
LANGUAGE: each entry has a `lang=` marker giving the language of its source.
Write that entry's description in EXACTLY that language. Do not translate to
a single common language — match each node's source language individually.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "concept_no_app_namespace_dependency": "No App\\ Namespace Dependency" | kind=entity | source=modules/real-estate-properties/README.md | neighbors=[Presentation-neutral domain core, Real Estate Properties Module] | lang=en
- "concept_no_cross_module_table_access": "No informal cross-module integration" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Contract packages, Module Development Guide] | lang=en
- "concept_notifications_table": "notifications table" | kind=entity | source=docs/IMPLEMENTATION_SUMMARY.md | neighbors=[Real-time notification system, Implementation Summary] | lang=en
- "concept_offer_decision_lifecycle": "Offer qualification, negotiation, proof and decision history" | kind=entity | source=modules/real-estate-offers/README.md | neighbors=[x-liberu-idempotency-header (Idempotenc…, Real Estate Offers] | lang=en
- "concept_package_must_run_own_tree": "A package must run against its own dependency tree" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Packages are standalone-testable, Conformance spec and migration plan] | lang=pt
- "concept_packagist_token_handling": "Packagist token stays out of the session" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Packagist namespace registration blocker, Handoff: Step 4 Testbench Migration (20…] | lang=en
- "concept_portal_sync_modules": "Portal synchronization modules (Rightmove, Zoopla, OnTheMarket)" | kind=entity | source=README.md | neighbors=[Liberu Real Estate host application, Liberu Real Estate README] | lang=en
- "concept_pr_triage_surface_flag": "PRs-as-request-surface flag" | kind=entity | source=docs/agents/issue-tracker.md | neighbors=[Canonical triage labels, Agent Issue Tracker Convention] | lang=en
- "concept_real_estate_naming": "Real-estate package naming convention" | kind=entity | source=README.md | neighbors=[Packagist names drop the module- prefix, Liberu Real Estate README] | lang=en
- "concept_replaceable_integration_services": "Replaceable Integration Services" | kind=entity | source=modules/real-estate-rightmove/README.md | neighbors=[Presentation-neutral domain core, Real Estate Rightmove Module] | lang=en
- "concept_reproducible_composition": "Reproducible composition from the lockfile" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Explicit module enablement, Module Development Guide] | lang=en
- "concept_reusable_workflows": "liberusoftware/.github reusable workflows" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[liberusoftware/package-testbench, Handoff: Step 4 Testbench Migration (20…] | lang=en
- "concept_rightmove_sync_operation": "Rightmove Sync Operation" | kind=entity | source=modules/real-estate-rightmove-api/openapi/v1/real-estate-rightmove.yaml | neighbors=[Valuation Workflow Transitions, Rightmove Sync API v1 OpenAPI Spec] | lang=en
- "concept_tag_predating_fix": "A tag whose commit predates a fix" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Publishing mirrors all packages, not ju…, Handoff: Step 4 Testbench Migration (20…] | lang=pt
- "concept_theme_clear_signal": "liberusoftware/theme-clear-signal" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[liberusoftware/theme-base, Theme Architecture] | lang=en
- "concept_theme_default": "liberusoftware/theme-default" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[liberusoftware/theme-base, Theme Architecture] | lang=en
- "concept_translate_generate_command": "translate:generate artisan command" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[TranslationService (MyMemory), Multi-Language Support Documentation] | lang=en
- "concept_verify_before_asserting": "Verify before asserting" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[Host architecture boundary rules, Handoff: Conformance Map (2026-08-04)] | lang=en
- "concept_viewing_lifecycle_transitions": "Viewing Lifecycle Transitions" | kind=entity | source=modules/real-estate-viewings-api/openapi/v1/real-estate-viewings.yaml | neighbors=[Valuation Workflow Transitions, Viewings API v1 OpenAPI Spec] | lang=en
- "concept_xss_prevention_json_directive": "@json() directive for JS contexts" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[Messaging web interface, Messaging Developer Notes] | lang=en
- "concerns_searchable_scopesearch": "scopeSearch()" | kind=code-symbol | source=modules/search/src/Concerns/Searchable.php:L25 | neighbors=[Searchable.php, searchableColumns()] | lang=en
- "concerns_searchable_searchablecolumns": "searchableColumns()" | kind=code-symbol | source=modules/search/src/Concerns/Searchable.php:L42 | neighbors=[Searchable.php, scopeSearch()] | lang=en
- "config_auth": "auth.php" | kind=code-symbol | source=config/auth.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_broadcasting": "broadcasting.php" | kind=code-symbol | source=config/broadcasting.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_cache": "cache.php" | kind=code-symbol | source=config/cache.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_filesystems": "filesystems.php" | kind=code-symbol | source=config/filesystems.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_fortify": "fortify.php" | kind=code-symbol | source=config/fortify.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_horizon": "horizon.php" | kind=code-symbol | source=config/horizon.php:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, f72c39d Upgrade to Laravel 13, PHPUnit …] | lang=en
- "config_logging": "logging.php" | kind=code-symbol | source=config/logging.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_mail": "mail.php" | kind=code-symbol | source=config/mail.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_octane": "octane.php" | kind=code-symbol | source=config/octane.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_queue": "queue.php" | kind=code-symbol | source=config/queue.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…] | lang=en
- "config_reverb": "reverb.php" | kind=code-symbol | source=config/reverb.php:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, f72c39d Upgrade to Laravel 13, PHPUnit …] | lang=en
- "console_cachemodulescommand": "CacheModulesCommand.php" | kind=code-symbol | source=modules/module-manager/src/Console/CacheModulesCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CacheModulesCommand] | lang=en
- "console_cachemodulescommand_cachemodulescommand": "CacheModulesCommand" | kind=code-symbol | source=modules/module-manager/src/Console/CacheModulesCommand.php:L9 | neighbors=[CacheModulesCommand.php, .handle()] | lang=en
- "console_clearmodulescommand": "ClearModulesCommand.php" | kind=code-symbol | source=modules/module-manager/src/Console/ClearModulesCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ClearModulesCommand] | lang=en
- "console_clearmodulescommand_clearmodulescommand": "ClearModulesCommand" | kind=code-symbol | source=modules/module-manager/src/Console/ClearModulesCommand.php:L8 | neighbors=[ClearModulesCommand.php, .handle()] | lang=en
- "console_foundationdoctorcommand": "FoundationDoctorCommand.php" | kind=code-symbol | source=modules/developer-experience/src/Console/FoundationDoctorCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, FoundationDoctorCommand] | lang=en
- "console_foundationdoctorcommand_foundationdoctorcommand": "FoundationDoctorCommand" | kind=code-symbol | source=modules/developer-experience/src/Console/FoundationDoctorCommand.php:L10 | neighbors=[FoundationDoctorCommand.php, .handle()] | lang=en
- "console_listfeaturescommand": "ListFeaturesCommand.php" | kind=code-symbol | source=modules/module-manager/src/Console/ListFeaturesCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ListFeaturesCommand] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-136.json

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
