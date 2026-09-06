# Node Description Batch 112 of 212

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

- "stat_chart_endof": "endOf()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), wt()]
- "stat_chart_ensurescaleshaveids": "ensureScalesHaveIDs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, W(), _updateScales()]
- "stat_chart_es": "es()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, rgb(), Zi()]
- "stat_chart_exec": "_exec()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, L(), we()]
- "stat_chart_fi": "fi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, qa(), za()]
- "stat_chart_first": "first()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Pn(), sn()]
- "stat_chart_fl": "fl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), ul()]
- "stat_chart_formats": "formats()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, wt(), init()]
- "stat_chart_ga": "ga()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, addEventListener(), qs()]
- "stat_chart_getallparsedvalues": "getAllParsedValues()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, T(), getDataTimestamps()]
- "stat_chart_getbaseposition": "getBasePosition()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getBaseValue(), getPointPositionForValue()]
- "stat_chart_getdecimalforvalue": "getDecimalForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getPixelForValue(), initOffsets()]
- "stat_chart_getlabelandvalue": "getLabelAndValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getLabelForValue(), getParsed()]
- "stat_chart_getlabelbounds": "_getLabelBounds()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), getLabelTimestamps()]
- "stat_chart_getlabelitems": "getLabelItems()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawLabels(), _computeLabelItems()]
- "stat_chart_getlinewidthforvalue": "getLineWidthForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getContext(), _isVisible()]
- "stat_chart_getmeta": "getMeta()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), getDatasetMeta()]
- "stat_chart_getpixelfordecimal": "getPixelForDecimal()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ft(), getPixelForValue()]
- "stat_chart_getsorteddatasetmetas": "_getSortedDatasetMetas()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Bn(), getSortedVisibleDatasetMetas()]
- "stat_chart_getticklimit": "getTickLimit()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), computeTickLimit()]
- "stat_chart_getxaxislabelalignment": "_getXAxisLabelAlignment()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), nt()]
- "stat_chart_getyaxislabelalignment": "_getYAxisLabelAlignment()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), _getLabelSizes()]
- "stat_chart_gs": "gs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ko(), wo()]
- "stat_chart_handletickrangeoptions": "handleTickRangeOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), getUserBounds()]
- "stat_chart_ho": "ho()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, fo(), Ze()]
- "stat_chart_hs": "hs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, pa(), qs()]
- "stat_chart_in": "In()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _generate(), Pe()]
- "stat_chart_index": "index()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getSortedVisibleDatasetMetas(), pt()]
- "stat_chart_inrange": "inRange()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ai(), getProps()]
- "stat_chart_is": "Is()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, xi(), q()]
- "stat_chart_isattached": "isAttached()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bindResponsiveEvents(), Re()]
- "stat_chart_it": "It()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, init(), wo()]
- "stat_chart_ja": "Ja()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, removeEventListener(), li()]
- "stat_chart_ji": "ji()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), sr()]
- "stat_chart_jo": "Jo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), Rs()]
- "stat_chart_jt": "Jt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, As(), _computeLabelSizes()]
- "stat_chart_ke": "ke()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, da(), S()]
- "stat_chart_kn": "Kn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ir(), zr()]
- "stat_chart_layers": "_layers()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _isVisible(), P()]
- "stat_chart_le": "Le()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, tr(), un()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-111.json

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
