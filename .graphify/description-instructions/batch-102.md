# Node Description Batch 103 of 212

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

- "concept_theme_dark": "liberusoftware/theme-dark" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Semantic design tokens, liberusoftware/theme-base, Theme Architecture]
- "concept_theme_validate_command": "theme:validate / theme:cache / theme:clear" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Theme parent inheritance chain, Theme Architecture, Theme System Guide]
- "concept_translation_caching": "Translation caching" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[Search API rate limiting, TranslationService (MyMemory), Multi-Language Support Documentation]
- "concept_triage_labels": "Canonical triage labels" | kind=entity | source=docs/agents/triage-labels.md | neighbors=[PRs-as-request-surface flag, GitHub Issues as the issue tracker, Agent Triage Labels]
- "concept_upgrade_blockers": "Known upgrade blockers" | kind=entity | source=CLAUDE.md | neighbors=[Operations stack (Horizon, Octane, Tele…, Spatie Permission (team-scoped roles), CLAUDE.md — project instructions]
- "concept_users_table_filters": "Users table filters and badges" | kind=entity | source=docs/QUICK_REFERENCE.md | neighbors=[Admin user-management enhancement, Filament Shield role-based access, Admin Panel Quick Reference Guide]
- "concept_verification_gates": "Foundation verification gates" | kind=entity | source=docs/FOUNDATION_COMPLIANCE.md | neighbors=[Host CI gates, module:validate, theme:validate, founda…, Foundation compliance]
- "concept_version_fields_load_bearing": "composer.json version fields are load-bearing" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[module.json manifest, modules/ is Composer output, Handoff: Step 4 Testbench Migration (20…]
- "concept_wayfinder_map": "Wayfinder map and child tickets" | kind=entity | source=docs/agents/issue-tracker.md | neighbors=[GitHub Issues as the issue tracker, Wayfinder map issue #612, Agent Issue Tracker Convention]
- "concerns_searchable": "Searchable.php" | kind=code-symbol | source=modules/search/src/Concerns/Searchable.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, scopeSearch(), searchableColumns()]
- "config_session": "session.php" | kind=code-symbol | source=config/session.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, f630dc7 Fix security audit findings]
- "config_socialstream": "socialstream.php" | kind=code-symbol | source=config/socialstream.php:L1 | neighbors=[0812f9b Update main workflow Docker wit…, 30d2b7d Add socialstream, Docker/k8s up…, 75f7818 Bootstrap application from Libe…]
- "context_localecontext_localecontext": "LocaleContext" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleContext.php:L5 | neighbors=[LocaleContext.php, .__construct(), .payload()]
- "contracts_metrics": "Metrics.php" | kind=code-symbol | source=modules/observability/src/Contracts/Metrics.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, increment(), observe()]
- "contracts_organizationactor": "OrganizationActor.php" | kind=code-symbol | source=modules/organizations-teams/src/Contracts/OrganizationActor.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, belongsToTeam(), ownsTeam()]
- "contracts_registrationpolicy": "RegistrationPolicy.php" | kind=code-symbol | source=modules/identity-core/src/Contracts/RegistrationPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, permitsSelfRegistration(), requiresInvitation()]
- "controllers_agencycontroller": "AgencyController.php" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, AgencyController]
- "controllers_agencycontroller_agencycontroller_rules": ".rules()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L57 | neighbors=[AgencyController, .store(), .update()]
- "controllers_searchcontroller_searchcontroller_all": ".all()" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L39 | neighbors=[SearchController, .projectUsers(), .validateAllFilters()]
- "controllers_searchcontroller_searchcontroller_projectusers": ".projectUsers()" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L58 | neighbors=[SearchController, .all(), .users()]
- "controllers_searchcontroller_searchcontroller_users": ".users()" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L28 | neighbors=[SearchController, .projectUsers(), .validateUserFilters()]
- "controllers_territorycontroller": "TerritoryController.php" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, TerritoryController]
- "controllers_territorycontroller_territorycontroller_rules": ".rules()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L57 | neighbors=[TerritoryController, .store(), .update()]
- "cursor_mcp": "mcp.json" | kind=code-symbol | source=.cursor/mcp.json:L1 | neighbors=[75f7818 Bootstrap application from Libe…, laravel-boost, lerd]
- "delivery_phase_3": "Delivery phase 3: lettings, management, accounting, owner/tenant portals" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Real Estate capability: Lettings, Real Estate capability: Property Manage…, Real Estate delivery order (three phase…]
- "doc_copilot_instructions": "GitHub Copilot instructions" | kind=entity | source=.github/copilot-instructions.md | neighbors=[lerd local PHP development environment, AGENTS.md, lerd twelve grouped MCP tools]
- "doc_foundation_compliance": "Foundation compliance" | kind=entity | source=docs/FOUNDATION_COMPLIANCE.md | neighbors=[Three foundation boundaries, Foundation verification gates, Liberu Real Estate README]
- "doc_foundation_module_matrix": "Foundation module implementation matrix" | kind=entity | source=docs/FOUNDATION_MODULE_MATRIX.md | neighbors=[Foundation capability → package matrix, Host boundary: /app is composition only, module:validate, theme:validate, founda…]
- "doc_junie_guidelines": "Junie guidelines" | kind=entity | source=.junie/guidelines.md | neighbors=[lerd local PHP development environment, AGENTS.md, lerd twelve grouped MCP tools]
- "domain_corecapabilitydefinition": "CoreCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-core/src/Domain/CoreCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, CoreCapabilityDefinition]
- "domain_corecapabilitydefinition_corecapabilitydefinition": "CoreCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-core/src/Domain/CoreCapabilityDefinition.php:L7 | neighbors=[CoreCapabilityDefinition.php, .all(), .define()]
- "domain_instructionscapabilitydefinition": "InstructionsCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-instructions/src/Domain/InstructionsCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, InstructionsCapabilityDefinition]
- "domain_listingscapabilitydefinition": "ListingsCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-listings/src/Domain/ListingsCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, ListingsCapabilityDefinition]
- "domain_marketingcapabilitydefinition": "MarketingCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-marketing/src/Domain/MarketingCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, MarketingCapabilityDefinition]
- "domain_matchingcapabilitydefinition": "MatchingCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-matching/src/Domain/MatchingCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, MatchingCapabilityDefinition]
- "domain_mediaanddocumentscapabilitydefinition": "MediaAndDocumentsCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Domain/MediaAndDocumentsCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, MediaAndDocumentsCapabilityDefinition]
- "domain_offerscapabilitydefinition": "OffersCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-offers/src/Domain/OffersCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, OffersCapabilityDefinition]
- "domain_partiescapabilitydefinition": "PartiesCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-parties/src/Domain/PartiesCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, PartiesCapabilityDefinition]
- "domain_partiescapabilitydefinition_partiescapabilitydefinition": "PartiesCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-parties/src/Domain/PartiesCapabilityDefinition.php:L7 | neighbors=[PartiesCapabilityDefinition.php, .all(), .behaviors()]
- "domain_portalsreportingcapabilitydefinition": "PortalsReportingCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Domain/PortalsReportingCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, PortalsReportingCapabilityDefinition]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-102.json

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
