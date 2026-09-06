# Node Description Batch 94 of 212

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

- "components_code_editor_scheduleaccept": "scheduleAccept()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, accept(), facet()]
- "components_code_editor_scroll": "scroll()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, maybeMeasure(), select()]
- "components_code_editor_set": "set()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, of(), setBuffer()]
- "components_code_editor_setdom": "setDOM()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addComposition(), fa()]
- "components_code_editor_setdone": "setDone()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), reset()]
- "components_code_editor_setmeasuredheight": "setMeasuredHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, setHeight(), updateHeight()]
- "components_code_editor_setrange": "setRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, readSelectionRange(), Vt()]
- "components_code_editor_setrangeindex": "setRangeIndex()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, gotoInner(), next()]
- "components_code_editor_setroot": "setRoot()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, mountStyles(), setWindow()]
- "components_code_editor_setscrollspeed": "setScrollSpeed()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, destroy(), move()]
- "components_code_editor_setselafter": "setSelAfter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, h1(), Iu()]
- "components_code_editor_setselected": "setSelected()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, j$(), update()]
- "components_code_editor_showannouncements": "showAnnouncements()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, is(), update()]
- "components_code_editor_side": "side()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, pP(), visualLineSide()]
- "components_code_editor_sp": "sP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, Lf(), sync()]
- "components_code_editor_startcomposite": "startComposite()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, getNodeType(), startContext()]
- "components_code_editor_startspan": "startSpan()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, highlightRange(), flush()]
- "components_code_editor_stop": "stop()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, destroy(), ignore()]
- "components_code_editor_t1": "t1()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, slice(), sliceDoc()]
- "components_code_editor_takecontent": "takeContent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, LinkEnd(), resolveMarkers()]
- "components_code_editor_textbit": "textBit()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, slice(), Uh()]
- "components_code_editor_theme": "theme()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, newName(), of()]
- "components_code_editor_tooltip": "tooltip()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, findIndex(), plugin()]
- "components_code_editor_touches": "touches()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, touchesRange(), update()]
- "components_code_editor_tp": "tP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Pc(), sliceDoc()]
- "components_code_editor_tu": "tu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, findChild(), nextChild()]
- "components_code_editor_tw": "Tw()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, create(), Xw()]
- "components_code_editor_tx": "tX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, compare(), update()]
- "components_code_editor_ty": "tY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, advance(), Mc()]
- "components_code_editor_ul": "Ul()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, mousedown(), create()]
- "components_code_editor_uo": "uo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, line(), syncGutters()]
- "components_code_editor_up": "UP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, destroy(), select()]
- "components_code_editor_updateblockwrappers": "updateBlockWrappers()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, getBlockPos(), goto()]
- "components_code_editor_updatedom": "updateDOM()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, findWidget(), toDOM()]
- "components_code_editor_updateeditcontextformatting": "updateEditContextFormatting()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, update(), is()]
- "components_code_editor_updatefor": "updateFor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, update(), mapPos()]
- "components_code_editor_updateviewport": "updateViewport()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, update(), reset()]
- "components_code_editor_validaction": "validAction()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, forceReduce(), allActions()]
- "components_code_editor_vf": "Vf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, initialSpacer(), updateSpacer()]
- "components_code_editor_vg": "vg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, getChild(), sliceString()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-093.json

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
