# Node Description Batch 90 of 212

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

- "components_chart_we": "We()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _handleEvent(), setActiveElements()]
- "components_chart_weekdaysformat": "weekdaysFormat()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, create(), weekdays()]
- "components_chart_wh": "Wh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ri(), Wo()]
- "components_chart_wl": "wl()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Qs(), Qr()]
- "components_chart_wm": "wm()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromISOTime(), hs()]
- "components_chart_wo": "Wo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ri(), Wh()]
- "components_chart_xd": "xd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, sd(), tt()]
- "components_chart_xe": "xe()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, inRange(), tt()]
- "components_chart_xf": "xf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _f(), wf()]
- "components_chart_xh": "Xh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _update(), E()]
- "components_chart_xm": "xm()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromISO(), hs()]
- "components_chart_xo": "xo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ri(), Zs()]
- "components_chart_xplus": "xPlus()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), _drawColorBox()]
- "components_chart_yi": "yi()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _dataCheck(), _destroy()]
- "components_chart_ym": "ym()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromHTTP(), hs()]
- "components_chart_yu": "yu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ir(), Zs()]
- "components_chart_ze": "ze()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeLabelSizes(), Wn()]
- "components_chart_zi": "zi()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ar(), _drawDataset()]
- "components_chart_zu": "zu()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getPixelForTick(), wi()]
- "components_checkbox_list": "checkbox-list.js" | kind=code-symbol | source=public/js/filament/forms/components/checkbox-list.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, c()]
- "components_code_editor_activatehover": "activateHover()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, cd(), startHover()]
- "components_code_editor_activeforpoint": "activeForPoint()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, Rh(), spans()]
- "components_code_editor_addactive": "addActive()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, Ar(), next()]
- "components_code_editor_addchunk": "addChunk()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, finishChunk(), update()]
- "components_code_editor_adddelimiter": "addDelimiter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), parse()]
- "components_code_editor_addgaps": "addGaps()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, sm(), finish()]
- "components_code_editor_addlinedeco": "addLineDeco()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, ensureLine(), point()]
- "components_code_editor_addtoset": "addToSet()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, join(), update()]
- "components_code_editor_adjust": "adjust()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, draw(), update()]
- "components_code_editor_ag": "Ag()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, advance(), wh()]
- "components_code_editor_allows": "allows()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, PQ(), updateCachedToken()]
- "components_code_editor_assingle": "asSingle()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, applyTransaction(), create()]
- "components_code_editor_atlastnode": "atLastNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, zo(), move()]
- "components_code_editor_bidiin": "bidiIn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, bidiSpansAt(), scan()]
- "components_code_editor_blockposcovered": "blockPosCovered()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addLineStartIfNotCovered(), isWidget()]
- "components_code_editor_boundchange": "boundChange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ri(), Rh()]
- "components_code_editor_bs": "bS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, eq(), of()]
- "components_code_editor_cc": "cc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L18 | neighbors=[code-editor.js, bi(), create()]
- "components_code_editor_checkasyncschedule": "checkAsyncSchedule()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, update(), work()]
- "components_code_editor_childstring": "childString()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, join(), toString()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-089.json

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
