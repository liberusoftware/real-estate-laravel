# Node Description Batch 30 of 212

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

- "re_zoopla_openapi_spec": "Real Estate Zoopla Sync API (OpenAPI v1)" | kind=entity | source=modules/real-estate-zoopla-api/openapi/v1/real-estate-zoopla.yaml | neighbors=[Real Estate Zoopla API, API Error Schema, Shared PaginationMeta Schema, Idempotency-Key Header, Versioned openapi/v1 Adapter Contract, Sanctum Bearer Security Scheme]
- "real_estate_marketing_module": "Real Estate Marketing" | kind=entity | source=modules/real-estate-marketing/README.md | neighbors=[Real Estate Marketing API, Real Estate Marketing Filament, Real Estate Marketing Livewire, Provider-Neutral Domain, Replaceable Ad…, Real Estate Listings, Team-Scoped Boundary]
- "scheduler_queues_module": "Liberu Scheduler and Queues" | kind=entity | source=modules/scheduler-queues/README.md | neighbors=[Idempotency-Key Header, Liberu Core Modules Scope, Capability: foundation.scheduler-queues, Category: foundation, liberu-module Composer package type, liberusoftware/module-manager]
- "search_module": "Liberu Search" | kind=entity | source=modules/search/README.md | neighbors=[Liberu Core Modules Scope, Liberu Search API, Capability: foundation.search, Category: foundation, liberu-module Composer package type, liberusoftware/identity]
- "src_translationservice_translationservice": "TranslationService" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L10 | neighbors=[TranslationService.php, .getSupportedLanguages(), .isLanguageSupported(), .name(), .supportedLanguages(), .translate()]
- "stat_chart_bl": "bl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getPointPosition(), N(), Se(), vl(), yl()]
- "stat_chart_drawgrid": "drawGrid()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, draw(), _computeGridLineItems(), getDistanceFromCenterForValue(), getPointLabelContext(), getPointPosition()]
- "stat_chart_getlabelcapacity": "_getLabelCapacity()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), _generate(), _getLabelSize(), isHorizontal(), _tickFormatFunction()]
- "stat_chart_getlabeltimestamps": "getLabelTimestamps()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), _getLabelBounds(), En(), getLabels(), normalize()]
- "stat_chart_getmatchingvisiblemetas": "getMatchingVisibleMetas()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getDataTimestamps(), getSortedVisibleDatasetMetas(), getMinMax(), _isVisible(), qs()]
- "stat_chart_getpointposition": "getPointPosition()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bl(), drawGrid(), getIndexAngle(), getPointPositionForValue(), jn()]
- "stat_chart_getuserbounds": "getUserBounds()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), Ds(), getMinMax(), T(), handleTickRangeOptions()]
- "stat_chart_handleevent": "_handleEvent()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _eventHandler(), L(), ni(), ps(), Rr()]
- "stat_chart_initoffsets": "initOffsets()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, afterAutoSkip(), buildTicks(), buildLookupTable(), getDecimalForValue(), _getTimestampsForTable()]
- "stat_chart_isvisible": "_isVisible()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), draw(), fit(), getLineWidthForValue(), getMatchingVisibleMetas()]
- "stat_chart_ko": "ko()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), gs(), has(), S(), ve()]
- "stat_chart_kt": "kt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawTitle(), P(), pl(), _resolveTickFontOptions(), un()]
- "stat_chart_resolveelementoptions": "_resolveElementOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), resolveDatasetElementOptions(), datasetElementScopeKeys(), getDataset(), getOptionScopes()]
- "stat_chart_ri": "ri()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), Ae(), al(), el(), getDatasetMeta()]
- "stat_chart_ti": "ti()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, darken(), Ea(), hexString(), isPointInArea(), pi()]
- "support_support_as": "as()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Ao(), Ee(), Se(), sn(), ss()]
- "support_support_br": "br()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, rn(), rr(), Ea(), ma(), Xi()]
- "support_support_hn": "Hn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, g(), J(), r(), S(), y()]
- "support_support_syncaria": "syncAria()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, close(), open(), setUpAria(), getTrigger(), setAttributeIfChanged()]
- "support_support_v": "V()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, ar(), dt(), me(), Nn(), I()]
- "support_support_yn": "yn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, wn(), c(), I(), J(), Nn()]
- "support_support_yr": "yr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, _a(), ca(), la(), qi(), Nt()]
- "support_support_zn": "zn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ca(), la(), ma(), Vn(), Xi()]
- "support_support_zt": "zt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, At(), Cn(), En(), xt(), apply()]
- "support_theme_helpers_theme": "theme()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L10 | neighbors=[theme_helpers.php, active_theme(), set_theme(), theme_asset(), theme_layout(), theme_path()]
- "tables_tables_be": "be()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, A(), Ie(), P(), R(), Ue()]
- "tables_tables_j": "j()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, Fe(), fn(), C(), K(), R()]
- "tables_tables_m": "M()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), je(), F(), Se(), we()]
- "tables_tables_xe": "xe()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, v(), B(), E(), M(), T()]
- "theme_fallback": "Safe theme fallback" | kind=entity | source=themes/base/README.md | neighbors=[Replaceable provider credentials and tr…, Empty server-rendered state when a modu…, base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "valueobjects_money_money": "Money" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Money.php:L7 | neighbors=[Money.php, .add(), .assertSameCurrency(), .__construct(), .decimal(), .equals()]
- "vite_build_pipeline": "Host Vite build of theme entry points" | kind=entity | source=themes/base/README.md | neighbors=[Asset budgets: 80 KiB CSS / 40 KiB JS c…, base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), real-estate-default theme]
- "actions_actions_syncactionmodals": "syncActionModals()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js, closeModal(), generateModalId(), openModal(), rememberPreviouslyFocusedElement(), restorePreviouslyFocusedElement()]
- "activity_comments_module": "Liberu Activity and Comments" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Capability: foundation.activity-comments, Contract: ActivityAuthorizer, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager, Liberu Audit]
- "adapter_over_matching_core": "Adapter Over One Matching Core Package" | kind=entity | source=modules/livewire/README.md | neighbors=[Declared Public Boundary, Lettings Livewire Specification, Livewire Module Index, Liberu Localization Livewire, Real Estate Core Livewire, Real Estate Instructions Livewire]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-029.json

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
