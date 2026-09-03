# Node Description Batch 33 of 212

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

- "components_chart_nh": "nh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, interpolate(), ge(), Kt(), ui(), Wt()]
- "components_chart_nu": "nu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getAllParsedValues(), getMatchingVisibleMetas(), wi(), xi(), ru()]
- "components_chart_parseobjectdata": "parseObjectData()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, parse(), Ba(), Lt(), P(), resolveDataElementOptions()]
- "components_chart_q": "Q()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, format(), il(), ir(), ks(), num()]
- "components_chart_rd": "rd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, nd(), createResolver(), getOptionScopes(), Ka(), pluginScopeKeys()]
- "components_chart_reconfigure": "reconfigure()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, count(), clone(), Gt(), Ie(), setLocale()]
- "components_chart_resolvenamedoptions": "resolveNamedOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _resolveElementOptions(), ca(), createResolver(), ee(), fd()]
- "components_chart_ri": "Ri()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, jd(), Ni(), Wh(), Wo(), xo()]
- "components_chart_rr": "rr()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, inRange(), inXRange(), inYRange(), Dt(), Ka()]
- "components_chart_rt": "Rt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, da(), getFooter(), getTitle(), apply(), B()]
- "components_chart_ru": "ru()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _getRuler(), getPixelForTick(), getPixelForValue(), nu(), removeEventListener()]
- "components_chart_se": "se()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _generate(), hasValue(), ra(), ah(), updateElements()]
- "components_chart_sh": "sh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, rh(), E(), ee(), gs(), Un()]
- "components_chart_si": "Si()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Be(), hi(), jh(), create(), toString()]
- "components_chart_splitby": "splitBy()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, divideEqually(), fromDateTimes(), fromDurationLike(), mapUnits(), plus()]
- "components_chart_su": "su()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getContext(), Es(), Ft(), Is(), wu()]
- "components_chart_sync": "_sync()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _onDataPop(), _onDataPush(), _onDataShift(), _onDataSplice(), _onDataUnshift()]
- "components_chart_tf": "tf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterDatasetsUpdate(), E(), ef(), rf(), Y()]
- "components_chart_tn": "Tn()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, describe(), override(), set(), bs(), me()]
- "components_chart_toiso": "toISO()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Cm(), fromObject(), [Symbol.for("nodejs.util.inspect.custom…, toJSON(), toString()]
- "components_chart_toobject": "toObject()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, normalize(), rescale(), set(), setZone(), shiftTo()]
- "components_chart_updatedatasets": "_updateDatasets()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _update(), configure(), getDatasetMeta(), notifyPlugins(), _updateDataset()]
- "components_chart_updatevisibility": "_updateVisibility()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, hide(), show(), getDatasetMeta(), _resolveAnimations(), setDatasetVisibility()]
- "components_chart_wa": "Wa()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, applyStack(), first(), _getSortedDatasetMetas(), pathSegment(), Qi()]
- "components_chart_wt": "Wt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ih(), Kc(), nh(), rgb(), ps()]
- "components_chart_wu": "wu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, su(), I(), isHorizontal(), ju(), $u()]
- "components_chart_xs": "Xs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), fromJSDate(), fromObject(), Ll(), setZone()]
- "components_chart_ys": "ys()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, So(), vo(), B(), create(), E()]
- "components_code_editor_addchanges": "addChanges()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, compose(), Du(), Hn(), mapEffects(), update()]
- "components_code_editor_bi": "bi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, cc(), configure(), of(), ws(), zm()]
- "components_code_editor_bidispansat": "bidiSpansAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, baseDirAt(), bidiIn(), bidiSpans(), lineAt(), dirAt()]
- "components_code_editor_blockat": "blockAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, heightMetrics(), line(), lineAt(), mainBlock(), elementAtHeight()]
- "components_code_editor_c0": "c0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, De(), Se(), slice(), sliceString(), stateFlag()]
- "components_code_editor_cg": "cg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, addNamespace(), addNamespaceObject(), advance(), peek(), vi()]
- "components_code_editor_chunk": "chunk()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, slice(), syncTo(), getChunk(), lineChunkAt(), peek()]
- "components_code_editor_ci": "Ci()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ef(), onSelectionChange(), Pf(), suppressWidgetCursorChange(), updateSelection()]
- "components_code_editor_column": "column()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, countColumn(), lineAt(), "JSXOpenTag JSXSelfClosingTag"(), "OpenTag CloseTag SelfClosingTag"(), pu()]
- "components_code_editor_compose": "compose()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, addChanges(), Ah(), changeByRange(), Uh(), constructor()]
- "components_code_editor_computevisibleranges": "computeVisibleRanges()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, mapPos(), spans(), constructor(), measure(), update()]
- "components_code_editor_cp": "cP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, charCategorizer(), ct(), lP(), zf(), scrollIntoView()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-032.json

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
