# Node Description Batch 15 of 212

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

- "components_rich_editor_kp": "kp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, get(), node(), posAtCoords(), resolve(), Sn()]
- "components_rich_editor_lo": "lo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, find(), forEach(), Km(), resolve(), setAttribute()]
- "components_rich_editor_nm": "Nm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ec(), copy(), ct(), e(), from()]
- "components_rich_editor_ow": "ow()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, contentMatchAt(), createAndFill(), findWrapping(), from(), index()]
- "components_rich_editor_posatcoords": "posAtCoords()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, by(), dragover(), Ec(), handleDrop(), kp()]
- "components_rich_editor_remove": "remove()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, deselectNode(), destroy(), flush(), Gg(), hide()]
- "components_rich_editor_rm": "rm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Im(), om(), child(), create(), createAndFill()]
- "components_rich_editor_updatestate": "updateState()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, createView(), cu(), dispatchTransaction(), flush(), registerPlugin()]
- "components_rich_editor_uy": "Uy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, jy(), contentMatchAt(), domSelectionRange(), fromSchema(), index()]
- "components_rich_editor_vd": "vd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, blockRange(), child(), create(), delete(), endOfTextblock()]
- "components_rich_editor_vr": "vr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, cy(), ey(), move(), up(), eq()]
- "components_rich_editor_xg": "xg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, wd(), canReplace(), child(), compatibleContent(), delete()]
- "components_rich_editor_zp": "Zp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Em(), tm(), colCount(), createAndFill(), insert()]
- "components_select_dn": "dn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ct(), Dt(), Kt(), lt(), Rt()]
- "components_select_lt": "lt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, de(), dn(), fn(), Ft(), gi()]
- "components_select_opendropdown": "openDropdown()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, handleSelectButtonKeydown(), filterOptions(), getVisibleOptions(), hideLoadingState(), populateLabelRepositoryFromOptions()]
- "concept_module_manifest": "module.json manifest" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[liberu-module Composer package, Module manager (provider lifecycle auth…, Capability declarations (provides / req…, Module categories, Explicit module enablement, theme.json manifest]
- "concept_presentation_neutral_core": "Presentation-neutral domain core" | kind=entity | source=modules/real-estate-parties/README.md | neighbors=[Core/API/Filament/Livewire Package Split, Minimal public Livewire component state, No App\ Namespace Dependency, Provider-neutral portal integration bou…, Replaceable Integration Services, Real Estate Properties Module]
- "concept_theme_json_manifest": "theme.json manifest" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[liberu-theme Composer package, module.json manifest, Theme parent inheritance chain, ThemeManager service, Vite theme asset auto-discovery, Theme Architecture]
- "controllers_valuationcontroller_valuationcontroller": "ValuationController" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L20 | neighbors=[ValuationController.php, .comparables(), .complete(), .convert(), .destroy(), .index()]
- "controllers_viewingcontroller_viewingcontroller": "ViewingController" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L20 | neighbors=[ViewingController.php, .cancel(), .complete(), .confirm(), .destroy(), .index()]
- "doc_search_architecture": "Advanced Search Architecture" | kind=entity | source=docs/SEARCH_ARCHITECTURE.md | neighbors=[Advanced search across users, posts and…, Eager loading to avoid N+1, Group model, Enforced pagination limits, Post model, Search API endpoints]
- "doc_search_functionality": "Advanced Search Functionality" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[Advanced search across users, posts and…, Group model, modules/search package, liberusoftware/module-search-demo, Enforced pagination limits, Post model]
- "doc_search_optimization": "Search Performance Optimization" | kind=entity | source=docs/SEARCH_OPTIMIZATION.md | neighbors=[Implementation Summary, Eager loading to avoid N+1, Full-text indexes, Enforced pagination limits, Full-text search engine migration path, Search database indexes]
- "doc_theme_quick_reference": "Theme System Quick Reference" | kind=entity | source=docs/THEME_QUICK_REFERENCE.md | neighbors=[Theme Project Implementation Summary, Theme Blade directives, Theme helper functions, theme.json manifest, ThemeManager service, Theme preference persistence]
- "filament_echo_r": "r()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, Be(), ei(), le(), ni(), oi()]
- "filament_echo_t": "t()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, De(), Dt(), e(), Ht(), Me()]
- "integrations_module": "Liberu Integrations" | kind=entity | source=modules/integrations/README.md | neighbors=[Liberu Google Analytics, Liberu Meta Server-Side Tracking, Liberu Social Identity, Liberu Import and Export, Liberu API Access, Capability: foundation.integrations]
- "real_estate_instructions_api_openapi": "Real Estate Instructions OpenAPI v1" | kind=entity | source=modules/real-estate-instructions-api/openapi/v1/real-estate-instructions.yaml | neighbors=[Real Estate Instructions API, API Error Schema, Idempotency-Key Header, Instruction Record, Instruction Status Lifecycle, PaginationMeta Schema]
- "service_provider_registration": "Manifest Service Provider" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration, Liberu Module Manager, Liberu Notifications]
- "standalone_package_test_suite": "Standalone Package Test Suite" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration, Liberu Module Manager, Liberu Notifications]
- "stat_chart_createresolver": "createResolver()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, configure(), constructor(), mn(), Mt(), S()]
- "stat_chart_determinedatalimits": "determineDataLimits()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, endOf(), _getLabelBounds(), getLabels(), getMinMax(), getUserBounds()]
- "stat_chart_generate": "_generate()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), add(), Bt(), diff(), getDataTimestamps()]
- "stat_chart_pt": "pt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, dataset(), index(), nearest(), point(), ha()]
- "stat_chart_resolveanimations": "_resolveAnimations()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, createResolver(), datasetAnimationScopeKeys(), getContext(), getDataset(), getOptionScopes()]
- "stat_chart_updateelements": "updateElements()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _insertElements(), _update(), applyStack(), Bt(), getBasePixel()]
- "support_support_la": "la()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), Bt(), pt(), rn(), sa()]
- "support_support_ls": "ls()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ae(), cs(), kn(), Mt(), os()]
- "support_support_xe": "Xe()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, I(), Io(), ls(), Or(), wo()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-014.json

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
