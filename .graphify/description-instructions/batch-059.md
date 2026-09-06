# Node Description Batch 60 of 212

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

- "components_chart_beforedraw": "beforeDraw()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ar(), getSortedVisibleDatasetMetas(), updateControlPoints()]
- "components_chart_bf": "Bf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, at(), Ia(), buildTicks()]
- "components_chart_bi": "bi()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, add(), get(), inRange()]
- "components_chart_buildlabels": "buildLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterUpdate(), W(), _update()]
- "components_chart_calculatepadding": "_calculatePadding()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getPixelForTick(), isHorizontal(), fit()]
- "components_chart_cf": "cf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Dt(), interpolate(), lf()]
- "components_chart_checkeventbindings": "_checkEventBindings()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bindEvents(), unbindEvents(), _update()]
- "components_chart_clearcache": "clearCache()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, clear(), _destroy(), _update()]
- "components_chart_cm": "Cm()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, invalid(), toISO(), fromDateTimes()]
- "components_chart_color": "color()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Be(), hexString(), mix()]
- "components_chart_cu": "cu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarValuePixels(), Ei(), isHorizontal()]
- "components_chart_dataset": "dataset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), ir(), sr()]
- "components_chart_descriptors": "_descriptors()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _createDescriptors(), _notifyStateChanges(), _notify()]
- "components_chart_df": "df()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ff(), gf(), hf()]
- "components_chart_di": "Di()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Os(), ld(), st()]
- "components_chart_ds": "Ds()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ca(), Fo(), Un()]
- "components_chart_er": "er()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarValuePixels(), getLabelAndValue(), updateElements()]
- "components_chart_formatdatetime": "formatDateTime()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dtFormatter(), format(), toLocaleString()]
- "components_chart_formatdatetimeparts": "formatDateTimeParts()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dtFormatter(), formatToParts(), toLocaleParts()]
- "components_chart_formatinterval": "formatInterval()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dtFormatter(), toJSDate(), toLocaleString()]
- "components_chart_formatwithsystemdefault": "formatWithSystemDefault()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dtFormatter(), format(), redefaultToSystem()]
- "components_chart_fromformatexplain": "fromFormatExplain()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromOpts(), Ic(), fromStringExplain()]
- "components_chart_fromisotime": "fromISOTime()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromObject(), invalid(), wm()]
- "components_chart_fromseconds": "fromSeconds()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ae(), ce(), fromObject()]
- "components_chart_ga": "Ga()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), Cs(), N()]
- "components_chart_ge": "ge()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, nh(), ut(), zn()]
- "components_chart_getallparsedvalues": "getAllParsedValues()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Y(), getDataTimestamps(), nu()]
- "components_chart_getbasevalue": "getBaseValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getBasePixel(), getBasePosition(), nf()]
- "components_chart_getcenterpoint": "getCenterPoint()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getProps(), nearest(), tooltipPosition()]
- "components_chart_getcircumference": "_getCircumference()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _circumference(), ut(), _getRotationExtents()]
- "components_chart_getdecimalforvalue": "getDecimalForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ji(), getPixelForValue(), initOffsets()]
- "components_chart_getfooter": "getFooter()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Rt(), Zt(), _update()]
- "components_chart_getlinewidthforvalue": "getLineWidthForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarValuePixels(), getContext(), _isVisible()]
- "components_chart_getmaxoverflow": "getMaxOverflow()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), size(), _update()]
- "components_chart_getringweight": "_getRingWeight()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, P(), _getRingWeightOffset(), _update()]
- "components_chart_getrotation": "_getRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ut(), _getRotationExtents(), updateElements()]
- "components_chart_getsorteddatasetmetas": "_getSortedDatasetMetas()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, generateLabels(), getSortedVisibleDatasetMetas(), Wa()]
- "components_chart_getstackcount": "_getStackCount()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _getRuler(), _getStacks()]
- "components_chart_gettitle": "getTitle()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Rt(), Zt(), _update()]
- "components_chart_getvalueforpixel": "getValueForPixel()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarValuePixels(), getDecimalForPixel(), ji()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-059.json

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
