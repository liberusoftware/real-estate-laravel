# Node Description Batch 44 of 212

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

- "components_chart_pn": "pn()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Kt(), lc(), mg(), sg()]
- "components_chart_rescale": "rescale()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Gt(), normalize(), shiftToAll(), toObject()]
- "components_chart_reset": "reset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, initialize(), notifyPlugins(), _resetElements(), _update()]
- "components_chart_resyncelements": "_resyncElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildOrUpdateElements(), _insertElements(), parse(), _removeElements()]
- "components_chart_rotate": "rotate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, drawLabels(), mh(), oi(), Jc()]
- "components_chart_sc": "sc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, _g(), isEnglish(), get(), resolvedOptions()]
- "components_chart_sd": "sd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _createDescriptors(), _d(), getPlugin(), xd()]
- "components_chart_setdimensions": "setDimensions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, isHorizontal(), kr(), st(), _update()]
- "components_chart_so": "So()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, E(), ko(), pe(), ys()]
- "components_chart_textalign": "textAlign()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), drawBody(), drawFooter(), drawTitle()]
- "components_chart_tickformatfunction": "_tickFormatFunction()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, generateTickLabels(), _getLabelCapacity(), format(), W()]
- "components_chart_ticksize": "_tickSize()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bu(), _getLabelSizes(), isHorizontal(), ut()]
- "components_chart_toformat": "toFormat()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, create(), formatDateTimeFromString(), formatDurationFromString(), redefaultToEN()]
- "components_chart_tojsdate": "toJSDate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, format(), formatInterval(), formatToParts(), toBSON()]
- "components_chart_tolocalestring": "toLocaleString()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, clone(), create(), formatDateTime(), formatInterval()]
- "components_chart_tooltipposition": "tooltipPosition()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, average(), nearest(), getCenterPoint(), getProps()]
- "components_chart_tostring": "toString()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, oi(), ps(), Si(), toISO()]
- "components_chart_uo": "uo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, lo(), rgb(), jo(), tu()]
- "components_chart_updatedataset": "_updateDataset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), notifyPlugins(), _update(), _updateDatasets()]
- "components_chart_updatehoverstyles": "_updateHoverStyles()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _handleEvent(), setActiveElements(), _update(), updateHoverStyle()]
- "components_chart_updatescales": "_updateScales()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _update(), buildOrUpdateScales(), ensureScalesHaveIDs(), N()]
- "components_chart_values": "values()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), _drawColorBox(), jf(), B()]
- "components_chart_vh": "vh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, kh(), add(), has(), Un()]
- "components_chart_vn": "vn()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Jc(), Kc(), oi(), Zc()]
- "components_chart_vo": "vo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, E(), ko(), me(), ys()]
- "components_chart_wd": "wd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, kd(), Os(), Qa(), tl()]
- "components_chart_weekdays": "weekdays()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, weekdayLong(), create(), weekdaysFormat(), weekdayShort()]
- "components_chart_xi": "xi()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, normalize(), nu(), je(), kd()]
- "components_chart_xl": "xl()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromObject(), set(), getMinDaysInFirstWeek(), getStartOfWeek()]
- "components_chart_xu": "xu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ir(), bu(), Ft(), Zs()]
- "components_chart_ya": "Ya()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ud(), _update(), hd(), P()]
- "components_chart_yn": "Yn()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, updateControlPoints(), Eh(), No(), zo()]
- "components_chart_zn": "zn()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), apply(), ge(), ui()]
- "components_chart_zo": "zo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Yn(), Ba(), getLabels(), parse()]
- "components_code_editor_addactions": "addActions()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, putAction(), stateSlot(), Wt(), getActions()]
- "components_code_editor_addchild": "addChild()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, prop(), addElement(), addNode(), finishContext()]
- "components_code_editor_addinfopane": "addInfoPane()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, destroyInfo(), requestMeasure(), toString(), updateSel()]
- "components_code_editor_addinlinewidget": "addInlineWidget()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, append(), ensureMarks(), flushBuffer(), getBuffer()]
- "components_code_editor_addnamespace": "addNamespace()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, addCompletions(), addNamespaceObject(), cg(), CY()]
- "components_code_editor_ao": "aO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, cursor(), lineBlockAt(), moveToLineBoundary(), sliceDoc()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-043.json

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
