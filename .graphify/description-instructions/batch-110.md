# Node Description Batch 111 of 212

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
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "src_viewingsfilamentplugin": "ViewingsFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentPlugin.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, ViewingsFilamentPlugin]
- "src_viewingsfilamentserviceprovider": "ViewingsFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, ViewingsFilamentServiceProvider]
- "src_viewingsserviceprovider_viewingsserviceprovider": "ViewingsServiceProvider" | kind=code-symbol | source=modules/real-estate-viewings/src/ViewingsServiceProvider.php:L9 | neighbors=[ViewingsServiceProvider.php, .boot(), .register()]
- "src_zooplaserviceprovider": "ZooplaServiceProvider.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/ZooplaServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, bd4b1dc Add independent property portal…, ZooplaServiceProvider]
- "stat_chart_acquirecontext": "acquireContext()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getContext(), constructor()]
- "stat_chart_active": "active()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), _createAnimations()]
- "stat_chart_afterautoskip": "afterAutoSkip()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, initOffsets(), _update()]
- "stat_chart_afterbuildticks": "afterBuildTicks()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()]
- "stat_chart_aftercalculatelabelrotation": "afterCalculateLabelRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_afterdatalimits": "afterDataLimits()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()]
- "stat_chart_afterdatasetsupdate": "afterDatasetsUpdate()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), isDatasetVisible()]
- "stat_chart_afterfit": "afterFit()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_aftersetdimensions": "afterSetDimensions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_afterticktolabelconversion": "afterTickToLabelConversion()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _convertTicksToLabels()]
- "stat_chart_afterupdate": "afterUpdate()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_al": "al()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Pn(), ri()]
- "stat_chart_an": "an()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Fe(), _update()]
- "stat_chart_animateoptions": "_animateOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _createAnimations(), ya()]
- "stat_chart_applystack": "applyStack()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Bn(), updateElements()]
- "stat_chart_beforebuildticks": "beforeBuildTicks()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()]
- "stat_chart_beforecalculatelabelrotation": "beforeCalculateLabelRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_beforedatalimits": "beforeDataLimits()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()]
- "stat_chart_beforedraw": "beforeDraw()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getSortedVisibleDatasetMetas(), updateControlPoints()]
- "stat_chart_beforefit": "beforeFit()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_beforesetdimensions": "beforeSetDimensions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_beforeticktolabelconversion": "beforeTickToLabelConversion()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _convertTicksToLabels()]
- "stat_chart_beforeupdate": "beforeUpdate()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), _update()]
- "stat_chart_bindresponsiveevents": "bindResponsiveEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bindEvents(), isAttached()]
- "stat_chart_binduserevents": "bindUserEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bindEvents(), W()]
- "stat_chart_bn": "Bn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, applyStack(), _getSortedDatasetMetas()]
- "stat_chart_bo": "bo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, mo(), constructor()]
- "stat_chart_br": "br()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getPlugin(), _createDescriptors()]
- "stat_chart_buildorupdatescales": "buildOrUpdateScales()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, W(), _updateScales()]
- "stat_chart_cachedscopes": "_cachedScopes()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, get(), getOptionScopes()]
- "stat_chart_chartoptionscopes": "chartOptionScopes()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), _update()]
- "stat_chart_darken": "darken()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, be(), ti()]
- "stat_chart_dataset": "dataset()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), pt()]
- "stat_chart_di": "di()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _dataCheck(), _destroy()]
- "stat_chart_drawbackground": "drawBackground()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, draw(), getDistanceFromCenterForValue()]
- "stat_chart_ea": "Ea()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, La(), ti()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-110.json

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
