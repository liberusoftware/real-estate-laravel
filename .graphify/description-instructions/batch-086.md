# Node Description Batch 87 of 212

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

- "components_chart_first": "first()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ka(), Wa()]
- "components_chart_fl": "Fl()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, toRelative(), toRelativeCalendar()]
- "components_chart_fo": "Fo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, dh(), Ds()]
- "components_chart_formats": "formats()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ve(), init()]
- "components_chart_fromhttp": "fromHTTP()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ss(), ym()]
- "components_chart_fromrfc2822": "fromRFC2822()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, bm(), ss()]
- "components_chart_fromsql": "fromSQL()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Mm(), ss()]
- "components_chart_fu": "fu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, addEventListener(), updateElements()]
- "components_chart_g": "_g()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fastNumbers(), sc()]
- "components_chart_gc": "Gc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Sn(), Xc()]
- "components_chart_gd": "Gd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getUserBounds(), K()]
- "components_chart_getaxiscount": "_getAxisCount()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _getAxis()]
- "components_chart_getbaseposition": "getBasePosition()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getBaseValue(), getPointPositionForValue()]
- "components_chart_getbody": "getBody()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, N(), _update()]
- "components_chart_getcaretposition": "getCaretPosition()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawCaret(), jt()]
- "components_chart_getelement": "getElement()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, addElements(), buildOrUpdateControllers()]
- "components_chart_getfirstscaleidforindexaxis": "getFirstScaleIdForIndexAxis()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _getAxis()]
- "components_chart_getlabelbounds": "_getLabelBounds()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, determineDataLimits(), getLabelTimestamps()]
- "components_chart_getlabelforvalue": "getLabelForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getLabelAndValue(), format()]
- "components_chart_getlabelitems": "getLabelItems()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, drawLabels(), _computeLabelItems()]
- "components_chart_getlegenditemat": "_getLegendItemAt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Dt(), _handleEvent()]
- "components_chart_getmaxoffset": "getMaxOffset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), _update()]
- "components_chart_getmeta": "getMeta()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), getDatasetMeta()]
- "components_chart_getminimumdaysinfirstweek": "getMinimumDaysInFirstWeek()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, create(), getMinDaysInFirstWeek()]
- "components_chart_getpossibleoffsets": "getPossibleOffsets()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Ie(), offset()]
- "components_chart_getstackindex": "_getStackIndex()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _getStacks()]
- "components_chart_getticklimit": "getTickLimit()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildTicks(), computeTickLimit()]
- "components_chart_getvisibledatasetcount": "getVisibleDatasetCount()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getSortedVisibleDatasetMetas(), _updateRadius()]
- "components_chart_getvisibledatasetweighttotal": "_getVisibleDatasetWeightTotal()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _getRingWeightOffset(), _update()]
- "components_chart_getweekendweekdays": "getWeekendWeekdays()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, create(), getWeekendDays()]
- "components_chart_getxaxislabelalignment": "_getXAxisLabelAlignment()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), ut()]
- "components_chart_getyaxislabelalignment": "_getYAxisLabelAlignment()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), _getLabelSizes()]
- "components_chart_gg": "gg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, create(), resolvedOptions()]
- "components_chart_gh": "gh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, describe(), route()]
- "components_chart_gu": "gu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ft(), _update()]
- "components_chart_handletickrangeoptions": "handleTickRangeOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, determineDataLimits(), getUserBounds()]
- "components_chart_hasdst": "hasDST()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, now(), setZone()]
- "components_chart_hc": "hc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), features()]
- "components_chart_hg": "hg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, formatToParts(), offset()]
- "components_chart_hide": "hide()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _updateVisibility(), onClick()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-086.json

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
