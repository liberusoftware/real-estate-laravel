# Node Description Batch 136 of 212

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

- "components_slider_et": "et()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, rt()]
- "components_slider_fe": "Fe()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, R()]
- "components_slider_he": "He()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, R()]
- "components_slider_je": "je()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, rt()]
- "components_slider_ke": "ke()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, ir()]
- "components_slider_l": "L()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, rt()]
- "components_slider_me": "Me()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Le()]
- "components_slider_ne": "Ne()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, it()]
- "components_slider_re": "Re()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, R()]
- "components_slider_st": "St()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Tt()]
- "components_slider_te": "Te()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, R()]
- "components_slider_xt": "xt()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Ue()]
- "components_territorylist_territorylist": "TerritoryList" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/TerritoryList.php:L12 | neighbors=[TerritoryList.php, .render()]
- "components_valuationlist_valuationlist": "ValuationList" | kind=code-symbol | source=modules/real-estate-valuations-livewire/src/Components/ValuationList.php:L12 | neighbors=[ValuationList.php, .render()]
- "components_viewinglist_viewinglist_cancelviewing": ".cancelViewing()" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L28 | neighbors=[ViewingList, .runForCurrentTeam()]
- "components_viewinglist_viewinglist_confirmviewing": ".confirmViewing()" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L22 | neighbors=[ViewingList, .runForCurrentTeam()]
- "components_viewinglist_viewinglist_marknoshow": ".markNoShow()" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L34 | neighbors=[ViewingList, .runForCurrentTeam()]
- "components_zooplasynclist_zooplasynclist": "ZooplaSyncList" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/src/Components/ZooplaSyncList.php:L11 | neighbors=[ZooplaSyncList.php, .render()]
- "concept_adr_directory": "docs/adr/ decision records" | kind=entity | source=docs/agents/domain.md | neighbors=[Single-context domain docs, Agent Domain Docs Convention]
- "concept_agent_handoffs": "Session handoffs in docs/handoffs/" | kind=entity | source=CLAUDE.md | neighbors=[lerd local PHP development environment, CLAUDE.md — project instructions]
- "concept_allow_plugins_defect": "Missing config.allow-plugins across packages" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[Package-owned tests, Handoff: Conformance Map (2026-08-04)]
- "concept_alternative_broadcast_drivers": "Alternative broadcast services" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Pusher broadcasting driver, Real-Time Notifications Documentation]
- "concept_app_panel": "App Filament panel" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[App\Filament\ModulePlugins, Module Development Guide]
- "concept_atomic_commit_limit": "Atomic commit does not extend to verification" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Migration sequence (steps −1 to 9), Conformance spec and migration plan]
- "concept_audit_classes": "Audit sliced by catching mechanism" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Code-level conformance audit]
- "concept_browser_notifications": "Browser push notifications" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Laravel Echo client listener, Real-Time Notifications Documentation]
- "concept_context_md": "CONTEXT.md glossary" | kind=entity | source=docs/agents/domain.md | neighbors=[Single-context domain docs, Agent Domain Docs Convention]
- "concept_conversation_indexes": "Conversation query indexes" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[messages table schema, Messaging Developer Notes]
- "concept_defense_in_depth_authorization": "Layered authorization" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[MessagePolicy, Messaging Developer Notes]
- "concept_deterministic_theme_build": "Deterministic theme builds" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[Vite theme asset auto-discovery, Theme Architecture]
- "concept_docker_deployment": "Container deployment topology" | kind=entity | source=docker-compose.yml | neighbors=[Operations stack (Horizon, Octane, Tele…, lerd local PHP development environment]
- "concept_finding_ranks": "Finding ranks and the security flag" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Code-level conformance audit]
- "concept_handoff_location_rule": "Handoffs live in docs/handoffs/" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[scripts/migrate-testbench, Handoff: Step 4 Testbench Migration (20…]
- "concept_immutable_history_entries": "Immutable Property History Entries" | kind=entity | source=modules/real-estate-properties/README.md | neighbors=[Archive Instead of Hard Delete, Real Estate Properties Module]
- "concept_install_never_boots": "Installation never implies boot" | kind=entity | source=CLAUDE.md | neighbors=[Manifest default_enabled, CLAUDE.md — project instructions]
- "concept_lerd_slow_site": "Driving optimisation from real traffic" | kind=entity | source=AGENTS.md | neighbors=[lerd twelve grouped MCP tools, AGENTS.md]
- "concept_lerd_worktrees": "lerd git worktree subdomains" | kind=entity | source=AGENTS.md | neighbors=[lerd twelve grouped MCP tools, AGENTS.md]
- "concept_minimal_public_component_state": "Minimal public Livewire component state" | kind=entity | source=modules/real-estate-properties-livewire/README.md | neighbors=[Presentation-neutral domain core, Real Estate Properties Livewire]
- "concept_module_owns_own_tables": "Migration Owns Only the Package's Tables" | kind=entity | source=modules/real-estate-properties/README.md | neighbors=[Archive Instead of Hard Delete, Real Estate Properties Module]
- "concept_namespace_decisions": "Namespace decisions (§3.5)" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Package naming: -core marks provider-ne…, Conformance spec and migration plan]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-135.json

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
