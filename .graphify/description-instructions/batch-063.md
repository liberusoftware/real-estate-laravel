# Node Description Batch 64 of 212

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

- "components_code_editor_c": "_c()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, addLeafElement(), slice(), finishLeaf()]
- "components_code_editor_canshift": "canShift()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, hasAction(), reduce(), stateSlot()]
- "components_code_editor_clip": "clip()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, cursor(), constructor(), update()]
- "components_code_editor_close": "close()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, emitContext(), emitLookAhead(), stackToTree()]
- "components_code_editor_cm": "cm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, advance(), ct(), Jx()]
- "components_code_editor_co": "cO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, EY(), mQ(), ws()]
- "components_code_editor_combine": "combine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, xe(), extend(), resolve()]
- "components_code_editor_commit": "commit()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, dispatch(), eq(), of()]
- "components_code_editor_complete": "complete()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L31 | neighbors=[code-editor.js, addLeafElement(), finish(), nextLine()]
- "components_code_editor_computeblockgapdeco": "computeBlockGapDeco()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, lineBlockAt(), replace(), updateDeco()]
- "components_code_editor_continue": "continue()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, Qu(), Document(), Element()]
- "components_code_editor_coordsforchar": "coordsForChar()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, isLine(), readMeasured(), resolveBlock()]
- "components_code_editor_coordsinwidget": "coordsInWidget()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsAt(), coordsIn(), pn()]
- "components_code_editor_countcolumn": "countColumn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, column(), Ye(), lineIndent()]
- "components_code_editor_countindent": "countIndent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, forwardInner(), gP(), moveBase()]
- "components_code_editor_createhostedview": "createHostedView()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, add(), create(), mount()]
- "components_code_editor_createtooltip": "createTooltip()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, add(), create(), mount()]
- "components_code_editor_d0": "d0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, changeByRange(), update(), l0()]
- "components_code_editor_destroyinfo": "destroyInfo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, addInfoPane(), destroy(), updateSel()]
- "components_code_editor_dirat": "dirAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, bidiSpansAt(), find(), scan()]
- "components_code_editor_docviewupdate": "docViewUpdate()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, requestMeasure(), measure(), update()]
- "components_code_editor_domposfor": "domPosFor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, domAtPos(), domIn(), Nt()]
- "components_code_editor_draw": "draw()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, adjust(), replace(), update()]
- "components_code_editor_emit": "emit()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addLineStartIfNotCovered(), spans(), run()]
- "components_code_editor_emphasis": "Emphasis()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), char(), slice()]
- "components_code_editor_ensurelinegaps": "ensureLineGaps()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), measure(), update()]
- "components_code_editor_ep": "EP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, Nt(), Vt(), findPointInside()]
- "components_code_editor_extend": "extend()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, configure(), constructor(), combine()]
- "components_code_editor_externalsibling": "externalSibling()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, nextChild(), nextSibling(), prevSibling()]
- "components_code_editor_ey": "EY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, cO(), zt(), MY()]
- "components_code_editor_f0": "f0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, changeByRange(), update(), l0()]
- "components_code_editor_fa": "fa()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addComposition(), get(), setDOM()]
- "components_code_editor_fi": "Fi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, enforceCursorAssoc(), kP(), readSelectionRange()]
- "components_code_editor_findmounts": "findMounts()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, moveTo(), prop(), startInner()]
- "components_code_editor_findwidget": "findWidget()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, endLine(), compare(), updateDOM()]
- "components_code_editor_finishchunk": "finishChunk()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, addChunk(), addInner(), finishInner()]
- "components_code_editor_flushioskey": "flushIOSKey()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, ni(), toString(), yo()]
- "components_code_editor_fm": "fm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, advance(), ct(), Jx()]
- "components_code_editor_fo": "FO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, replace(), slice(), sliceString()]
- "components_code_editor_forceflush": "forceFlush()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, flush(), keydown(), measure()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-063.json

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
