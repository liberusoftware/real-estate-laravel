# Node Description Batch 56 of 212

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

- "stat_chart_has": "has()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getOptionScopes(), _getAnims(), ko(), render()]
- "stat_chart_i": "_i()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, cr(), fn(), kr(), Mt()]
- "stat_chart_interpolate": "interpolate()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, dn(), Si(), vo(), tl()]
- "stat_chart_isdatasetvisible": "isDatasetVisible()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, afterDatasetsUpdate(), buildOrUpdateControllers(), il(), getDatasetMeta()]
- "stat_chart_ispointinarea": "isPointInArea()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ai(), _eventHandler(), Z(), ti()]
- "stat_chart_je": "Je()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, be(), go(), co(), po()]
- "stat_chart_jn": "jn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getPointPosition(), P(), pr(), _update()]
- "stat_chart_js": "js()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, aa(), ia(), oa(), updateControlPoints()]
- "stat_chart_kl": "kl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Fs(), values(), zs(), wl()]
- "stat_chart_kr": "kr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _i(), getBasePixel(), getPixelForValue(), S()]
- "stat_chart_normalize": "normalize()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getDataTimestamps(), getLabelTimestamps(), _getTimestampsForTable(), ws()]
- "stat_chart_pathsegment": "pathSegment()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ei(), Ui(), Pn(), sn()]
- "stat_chart_pi": "pi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ma(), mi(), ba(), ti()]
- "stat_chart_pn": "Pn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, al(), first(), pathSegment(), Xe()]
- "stat_chart_po": "po()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, hslString(), et(), Je(), qi()]
- "stat_chart_qe": "Qe()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, be(), fo(), go(), Ze()]
- "stat_chart_qr": "qr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ol(), getBaseValue(), S(), tl()]
- "stat_chart_r": "_r()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _createDescriptors(), getContext(), xr(), yr()]
- "stat_chart_resolvenamedoptions": "resolveNamedOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _resolveElementOptions(), createResolver(), mn(), Mt()]
- "stat_chart_resyncelements": "_resyncElements()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateElements(), _insertElements(), parse(), _removeElements()]
- "stat_chart_rotate": "rotate()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawLabels(), Ls(), go(), vo()]
- "stat_chart_sr": "sr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, er(), ar(), ji(), ms()]
- "stat_chart_tickformatfunction": "_tickFormatFunction()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, generateTickLabels(), _getLabelCapacity(), format(), L()]
- "stat_chart_ticksize": "_tickSize()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ir(), _getLabelSizes(), isHorizontal(), nt()]
- "stat_chart_updatedataset": "_updateDataset()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), notifyPlugins(), _update(), _updateDatasets()]
- "stat_chart_updatehoverstyles": "_updateHoverStyles()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _handleEvent(), setActiveElements(), _update(), updateHoverStyle()]
- "stat_chart_updatescales": "_updateScales()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _update(), buildOrUpdateScales(), ensureScalesHaveIDs(), W()]
- "stat_chart_ve": "ve()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ko(), A(), S(), wo()]
- "stat_chart_vi": "vi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ko(), qo(), add(), Te()]
- "stat_chart_vo": "vo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, interpolate(), et(), lt(), rotate()]
- "stat_chart_wi": "wi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, jr(), Si(), ua(), y()]
- "stat_chart_wo": "wo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, gs(), It(), S(), ve()]
- "stat_chart_xi": "xi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Is(), N(), S(), zs()]
- "stat_chart_ze": "Ze()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ho(), Qe(), uo(), P()]
- "stat_chart_zi": "Zi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), rgb(), es(), lt()]
- "stat_chart_zo": "zo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), describe(), route(), S()]
- "support_support_close": "close()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, closeQuietly(), releaseScrollLock(), restorePreviouslyFocusedElement(), syncAria()]
- "support_support_dn": "Dn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), Ji(), _n(), Vn()]
- "support_support_ea": "Ea()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, br(), Tn(), Tt(), eo()]
- "support_support_gi": "Gi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Cn(), ht(), Tt(), Ia()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-055.json

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
