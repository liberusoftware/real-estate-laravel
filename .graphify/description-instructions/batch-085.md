# Node Description Batch 86 of 212

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

- "components_chart_beforedatalimits": "beforeDataLimits()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()]
- "components_chart_beforedatasetsdraw": "beforeDatasetsDraw()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ar(), getSortedVisibleDatasetMetas()]
- "components_chart_beforefit": "beforeFit()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _update()]
- "components_chart_beforesetdimensions": "beforeSetDimensions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _update()]
- "components_chart_beforeticktolabelconversion": "beforeTickToLabelConversion()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _convertTicksToLabels()]
- "components_chart_bindresponsiveevents": "bindResponsiveEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bindEvents(), isAttached()]
- "components_chart_binduserevents": "bindUserEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bindEvents(), N()]
- "components_chart_br": "br()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ld(), oa()]
- "components_chart_bu": "bu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _tickSize(), xu()]
- "components_chart_buildorupdatescales": "buildOrUpdateScales()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, N(), _updateScales()]
- "components_chart_cachedscopes": "_cachedScopes()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, get(), getOptionScopes()]
- "components_chart_calculatetotal": "calculateTotal()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDataVisibility(), _update()]
- "components_chart_cc": "cc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromObject(), Ll()]
- "components_chart_cg": "cg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, format(), offset()]
- "components_chart_ch": "Ch()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, add(), yo()]
- "components_chart_chartoptionscopes": "chartOptionScopes()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), _update()]
- "components_chart_ci": "Ci()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ee(), fd()]
- "components_chart_createitems": "_createItems()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, N(), _update()]
- "components_chart_cs": "Cs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ga(), vu()]
- "components_chart_ct": "Ct()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, get(), Rm()]
- "components_chart_darken": "darken()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, oi(), hi()]
- "components_chart_dc": "dc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, formatToParts(), offsetName()]
- "components_chart_dg": "dg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), get()]
- "components_chart_diffnow": "diffNow()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, diff(), now()]
- "components_chart_divideequally": "divideEqually()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, length(), splitBy()]
- "components_chart_drawargs": "_drawArgs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), isHorizontal()]
- "components_chart_drawcaret": "drawCaret()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawBackground(), getCaretPosition()]
- "components_chart_ef": "ef()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ft(), tf()]
- "components_chart_eg": "eg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildTicks(), diff()]
- "components_chart_eh": "Eh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, li(), Yn()]
- "components_chart_ei": "Ei()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, cu(), instance()]
- "components_chart_en": "En()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, listingMode(), Vf()]
- "components_chart_ensurescaleshaveids": "ensureScalesHaveIDs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, N(), _updateScales()]
- "components_chart_eu": "eu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ft(), getContext()]
- "components_chart_exec": "_exec()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), ws()]
- "components_chart_expandformat": "expandFormat()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromObject(), parseFormat()]
- "components_chart_explainfromtokens": "explainFromTokens()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromFormatParser(), Ic()]
- "components_chart_extract": "extract()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dtFormatter(), formatToParts()]
- "components_chart_fc": "fc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Gn(), mapUnits()]
- "components_chart_fg": "fg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), get()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-085.json

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
