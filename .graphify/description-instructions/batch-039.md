# Node Description Batch 40 of 212

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

- "resources_zooplasyncresource_zooplasyncresource": "ZooplaSyncResource" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource.php:L22 | neighbors=[ZooplaSyncResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "services_searchservice_searchservice": "SearchService" | kind=code-symbol | source=modules/search/src/Services/SearchService.php:L8 | neighbors=[SearchService.php, .__construct(), .searchAll(), .searchUsers(), .toInt(), .toString()]
- "sessions_devices_module": "Liberu Sessions and Devices" | kind=entity | source=modules/sessions-devices/README.md | neighbors=[Liberu Sessions and Devices Administrat…, Capability: identity.sessions, Category: foundation, liberu-module Composer package type, liberusoftware/identity, Liberu Two-Factor Authentication]
- "set_coverage_thresholds": "set-coverage-thresholds" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, measure-coverage, storage/app/coverage.tsv, Non-interactive, fail-on-error commands, per-package tests.yml workflow inputs, Upward-only quality ratchet]
- "set_phpstan_levels": "set-phpstan-levels" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, measure-phpstan, Non-interactive, fail-on-error commands, per-package tests.yml workflow inputs, storage/app/phpstan.tsv, Upward-only quality ratchet]
- "settings_filament_module": "Liberu Settings Administration" | kind=entity | source=modules/settings-filament/README.md | neighbors=[Capability: foundation.settings.filament, Category: presentation, filament/filament ^5.x, filament/spatie-laravel-settings-plugin…, Liberu Settings, Liberu Theme Support]
- "stat_chart_buildorupdateelements": "buildOrUpdateElements()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _dataCheck(), getDataset(), _resyncElements(), tn(), _update()]
- "stat_chart_computelabelsizes": "_computeLabelSizes()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), cr(), Jt(), _resolveTickFontOptions(), _getLabelSizes()]
- "stat_chart_createanimations": "_createAnimations()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _animateOptions(), active(), cancel(), get(), _update()]
- "stat_chart_createdescriptors": "_createDescriptors()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, br(), P(), _r(), _descriptors(), _notify()]
- "stat_chart_describe": "describe()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), ei(), gr(), ro(), zo()]
- "stat_chart_dl": "dl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), ai(), bs(), diff(), li()]
- "stat_chart_drawdataset": "_drawDataset()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Ae(), draw(), notifyPlugins(), Oe(), _drawDatasets()]
- "stat_chart_ee": "ee()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawLabels(), drawTitle(), A(), No(), wl()]
- "stat_chart_el": "el()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, il(), qn(), sl(), T(), ri()]
- "stat_chart_en": "En()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Bt(), parse(), startOf(), T(), getLabelTimestamps()]
- "stat_chart_er": "er()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ir(), nr(), or(), sr(), _update()]
- "stat_chart_eventhandler": "_eventHandler()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _handleEvent(), isPointInArea(), notifyPlugins(), render(), _update()]
- "stat_chart_getdatatimestamps": "getDataTimestamps()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _generate(), getAllParsedValues(), getMatchingVisibleMetas(), normalize(), _getTimestampsForTable()]
- "stat_chart_getindexangle": "getIndexAngle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawLabels(), N(), nt(), getPointPosition(), pl()]
- "stat_chart_getminmax": "getMinMax()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), getMatchingVisibleMetas(), _getOtherScale(), getUserBounds(), updateRangeFromParsed()]
- "stat_chart_gr": "gr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, describe(), get(), P(), pr(), register()]
- "stat_chart_init": "init()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, formats(), getContext(), getLabels(), It(), parse()]
- "stat_chart_jr": "jr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ei(), qn(), Si(), wi(), Xe()]
- "stat_chart_linkscales": "linkScales()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), initialize(), getDataset(), getScaleForId(), P()]
- "stat_chart_lt": "lt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, alpha(), fo(), qt(), vo(), Zi()]
- "stat_chart_mn": "mn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, createResolver(), get(), getProps(), Te(), resolveNamedOptions()]
- "stat_chart_mt": "Mt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, createResolver(), _i(), qo(), resolveNamedOptions(), Xo()]
- "stat_chart_q": "q()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), Ds(), initOffsets(), Is(), S()]
- "stat_chart_qo": "qo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Mt(), Ns(), S(), vi(), Xo()]
- "stat_chart_qs": "qs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, fa(), ga(), getMatchingVisibleMetas(), hs(), segments()]
- "stat_chart_qt": "qt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, et(), greyscale(), lt(), qi(), Xt()]
- "stat_chart_register": "register()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), gr(), mr(), override(), vn()]
- "stat_chart_resolvedataelementoptions": "resolveDataElementOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getMaxOverflow(), getSharedOptions(), getStyle(), _resolveElementOptions(), updateElements()]
- "stat_chart_sn": "sn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, first(), pathSegment(), Xe(), x(), y()]
- "stat_chart_startof": "startOf()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), En(), _generate(), ol(), wt()]
- "stat_chart_stop": "stop()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, cancel(), _destroyDatasetMeta(), get(), _notify(), remove()]
- "stat_chart_sync": "_sync()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _onDataPop(), _onDataPush(), _onDataShift(), _onDataSplice(), _onDataUnshift()]
- "stat_chart_un": "un()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), fit(), A(), kt(), Le()]
- "stat_chart_updatedatasets": "_updateDatasets()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _update(), configure(), getDatasetMeta(), notifyPlugins(), _updateDataset()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-039.json

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
