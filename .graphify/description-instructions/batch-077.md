# Node Description Batch 78 of 212

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

- "stat_chart_clear": "clear()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bi(), clearCache(), draw()]
- "stat_chart_clearcache": "clearCache()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, clear(), _destroy(), _update()]
- "stat_chart_color": "color()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, hexString(), mi(), mix()]
- "stat_chart_descriptors": "_descriptors()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _createDescriptors(), _notifyStateChanges(), _notify()]
- "stat_chart_diff": "diff()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, wt(), dl(), _generate()]
- "stat_chart_dn": "dn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, interpolate(), _getLabelSizes(), _update()]
- "stat_chart_ft": "ft()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeGridLineItems(), drawBorder(), getPixelForDecimal()]
- "stat_chart_getbasevalue": "getBaseValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getBasePixel(), getBasePosition(), qr()]
- "stat_chart_getlabelforvalue": "getLabelForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getLabelAndValue(), De(), format()]
- "stat_chart_getmaxoverflow": "getMaxOverflow()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), size(), _update()]
- "stat_chart_getparsed": "getParsed()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getContext(), getLabelAndValue(), updateElements()]
- "stat_chart_getstyle": "getStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), resolveDatasetElementOptions(), _setStyle()]
- "stat_chart_gl": "gl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), As(), pl()]
- "stat_chart_gt": "Gt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ei(), get(), route()]
- "stat_chart_hexstring": "hexString()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, color(), oo(), ti()]
- "stat_chart_ia": "ia()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ii(), isHorizontal(), js()]
- "stat_chart_ie": "ie()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), A(), _update()]
- "stat_chart_il": "il()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, el(), getDatasetMeta(), isDatasetVisible()]
- "stat_chart_insertelements": "_insertElements()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, parse(), updateElements(), _resyncElements()]
- "stat_chart_ir": "ir()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, er(), Kn(), _tickSize()]
- "stat_chart_ki": "ki()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), P(), ra()]
- "stat_chart_li": "li()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, dl(), Ja(), T()]
- "stat_chart_ls": "Ls()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, rotate(), ta(), ts()]
- "stat_chart_ma": "ma()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, pi(), S(), pa()]
- "stat_chart_maxdigits": "_maxDigits()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), isHorizontal(), _resolveTickFontOptions()]
- "stat_chart_mo": "mo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bo(), fo(), _o()]
- "stat_chart_nl": "nl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, isHorizontal(), T(), sl()]
- "stat_chart_oa": "oa()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, js(), na(), sa()]
- "stat_chart_oe": "Oe()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _drawDataset(), drawLabels(), ri()]
- "stat_chart_pa": "pa()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, hs(), getContext(), ma()]
- "stat_chart_qn": "qn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, el(), jr(), A()]
- "stat_chart_re": "Re()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, da(), isAttached(), za()]
- "stat_chart_remove": "remove()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each(), stop(), unregister()]
- "stat_chart_removeeventlistener": "removeEventListener()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, addEventListener(), Ja(), ua()]
- "stat_chart_reset": "reset()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, notifyPlugins(), _resetElements(), _update()]
- "stat_chart_resolvedatasetelementoptions": "resolveDatasetElementOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getStyle(), _resolveElementOptions(), _update()]
- "stat_chart_rgb": "rgb()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, es(), et(), Zi()]
- "stat_chart_running": "running()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, render(), resize(), get()]
- "stat_chart_se": "Se()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bl(), calculateLabelRotation(), pl()]
- "stat_chart_si": "Si()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, interpolate(), jr(), wi()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-077.json

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
