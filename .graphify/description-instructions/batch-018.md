# Node Description Batch 19 of 212

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

- "filament_apppanelprovider": "AppPanelProvider.php" | kind=code-symbol | source=app/Providers/Filament/AppPanelProvider.php:L1 | neighbors=[675053f Add modules system, security ha…, 75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, aca82ae Merge branch 'main' of github.c…, b16f206 Update dependencies including t…]
- "jetstream_bridge_module": "Liberu Jetstream Bridge" | kind=entity | source=modules/jetstream-bridge/README.md | neighbors=[Capability: foundation.jetstream-bridge, Liberu Identity, Liberu Social Identity, laravel/fortify ^1.0, laravel/jetstream ^5.1, liberu-module Composer package type]
- "real_estate_core_api_openapi": "Real Estate Core OpenAPI v1" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Real Estate Core API, API Error Schema, Idempotency-Key Header, PaginationMeta Schema, Agency Resource, Branch Resource]
- "real_estate_core_module": "Real Estate Core" | kind=entity | source=modules/real-estate-core/README.md | neighbors=[Real Estate Core API, Real Estate Core Filament, Real Estate Core Livewire, liberu-module Composer package type, liberusoftware/organizations-teams, Presentation-Neutral Core Package]
- "real_estate_instructions_module": "Real Estate Instructions" | kind=entity | source=modules/real-estate-instructions/README.md | neighbors=[Real Estate Instructions API, Real Estate Instructions Filament, Real Estate Instructions Livewire, Unprefixed Composer Name vs module- Git…, Instruction Record, Instruction Status Lifecycle]
- "src_moduleregistry_moduleregistry": "ModuleRegistry" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L9 | neighbors=[ModuleRegistry.php, .all(), .__construct(), .enabled(), .get(), .has()]
- "stat_chart_be": "be()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), get(), Je(), Qe(), darken()]
- "stat_chart_computegridlineitems": "_computeGridLineItems()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ft(), getContext(), getPixelForValue(), isHorizontal(), lr()]
- "stat_chart_drawlabels": "drawLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, draw(), Ae(), _computeLabelArea(), ee(), getIndexAngle()]
- "stat_chart_fo": "fo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, get(), ho(), lt(), Qe(), ts()]
- "stat_chart_getdataset": "getDataset()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateElements(), configure(), _dataCheck(), getContext(), linkScales()]
- "stat_chart_getsortedvisibledatasetmetas": "getSortedVisibleDatasetMetas()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, beforeDatasetsDraw(), beforeDraw(), De(), _drawDatasets(), getMatchingVisibleMetas()]
- "stat_chart_initialize": "initialize()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), addElements(), bindEvents(), configure(), isPluginEnabled()]
- "stat_chart_notify": "_notify()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, cancel(), _createDescriptors(), _descriptors(), L(), _notifyStateChanges()]
- "stat_chart_nt": "nt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), computeTickLimit(), fit(), getIndexAngle(), _getLabelSize()]
- "stat_chart_render": "render()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _eventHandler(), draw(), has(), notifyPlugins(), running()]
- "support_support_apply": "apply()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, go(), Mt(), po(), S(), $t()]
- "support_support_bt": "Bt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, _a(), qi(), ca(), ja(), Ji()]
- "support_support_c": "c()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Gt(), I(), J(), L(), _n()]
- "support_support_ca": "ca()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Bt(), Cn(), Ji(), rn(), Tt()]
- "support_support_en": "En()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, J(), S(), un(), Ur(), Vr()]
- "support_support_eo": "eo()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Bi(), ct(), Ea(), ht(), Ji()]
- "support_support_ji": "Ji()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ca(), eo(), _a(), Bt(), Dn()]
- "support_support_mt": "Mt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fs(), I(), it(), ls(), apply()]
- "support_support_n": "_n()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), c(), Dn(), it(), jt()]
- "tables_tables_ae": "ae()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, C(), E(), ee(), le(), M()]
- "analytics_core_module": "Liberu Analytics Core" | kind=entity | source=modules/analytics-core/README.md | neighbors=[liberusoftware/analytics-contracts, Capability: analytics.route, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager, Liberu Google Analytics]
- "architecture_realestatecapabilitycoveragetest": "RealEstateCapabilityCoverageTest.php" | kind=code-symbol | source=tests/Architecture/RealEstateCapabilityCoverageTest.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 78f4c58 Complete real estate OpenAPI co…, 799806e Conform real estate modules to …, 8cf045c Implement real estate module co…]
- "capability_listings": "Real Estate capability: Listings" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-listings, liberusoftware/real-estate-listings-api, liberusoftware/real-estate-listings-fil…]
- "capability_properties": "Real Estate capability: Properties" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-properties, liberusoftware/real-estate-properties-a…, liberusoftware/real-estate-properties-f…]
- "columns_select_at": "At()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Dt(), we(), fi(), gn(), Si()]
- "columns_select_ft": "Ft()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), ci(), Dt(), lt(), wt()]
- "columns_select_gi": "gi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Et(), fn(), lt(), pn(), un()]
- "columns_select_gn": "gn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ae(), At(), it(), se(), Si()]
- "columns_select_updateselecteddisplay": "updateSelectedDisplay()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, render(), selectOption(), addBadgesForSelectedOptions(), addSingleSelectionDisplay(), deferPositionDropdown()]
- "columns_select_vn": "vn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ct(), Dt(), Kt(), lt(), Tt()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e90c0cd162cdab1afd02d5923dfb73da87f67da6": "e90c0cd fix(panels): let every role open the panel it is sent to" | kind=Commit | source=git | neighbors=[ddade0b feat(property): put every contr…, main, 45479e6 Merge pull request #1301 from l…, markdown-editor.js, rich-editor.js, filament-shield.php]
- "components_chart_as": "As()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, get(), shiftTo(), buildOrUpdateElements(), _dataCheck(), _destroy()]
- "components_chart_callhooks": "_callHooks()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterBuildTicks(), afterDataLimits(), beforeBuildTicks(), beforeDataLimits(), getContext()]
- "components_chart_ce": "ce()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ae(), constructor(), fromDurationLike(), fromMillis(), fromSeconds()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-018.json

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
