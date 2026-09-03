# Node Description Batch 34 of 212

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

- "components_code_editor_domin": "domIn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, domAtPos(), domPosFor(), isText(), resolveInline(), inlineDOMNearPos()]
- "components_code_editor_dr": "dr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, changeByRange(), dispatch(), of(), phrase(), update()]
- "components_code_editor_ds": "Ds()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, compare(), spans(), forward(), goto(), next()]
- "components_code_editor_empty": "empty()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Ah(), constructor(), Hg(), measure(), update()]
- "components_code_editor_ex": "Ex()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, getChild(), slice(), sliceDoc(), Ti(), yP()]
- "components_code_editor_finishcontext": "finishContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, advance(), finish(), addChild(), pop(), toTree()]
- "components_code_editor_getbuffer": "getBuffer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addInlineWidget(), cursorGet(), flushBuffer(), get(), find()]
- "components_code_editor_getcompositioncontext": "getCompositionContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, aP(), get(), isLine(), of(), run()]
- "components_code_editor_gf": "Gf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, get(), Nt(), Qn(), Vt(), ld()]
- "components_code_editor_gotoinner": "gotoInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, forward(), goto(), chunkEnd(), findIndex(), setRangeIndex()]
- "components_code_editor_highlight": "highlight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), finish(), pi(), Qi(), update()]
- "components_code_editor_indentedcode": "IndentedCode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), findColumn(), finish(), nextLine(), writeElements()]
- "components_code_editor_ip": "iP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, create(), ia(), slice(), sort(), of()]
- "components_code_editor_ji": "ji()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ya(), onSelectionChange(), readChange(), readSelectionRange(), updateSelection()]
- "components_code_editor_ka": "ka()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, gP(), mP(), pP(), QP(), wa()]
- "components_code_editor_kg": "Kg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Ah(), create(), facet(), ta(), Lh()]
- "components_code_editor_languagedataat": "languageDataAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, charCategorizer(), $f(), facet(), ol(), update()]
- "components_code_editor_ld": "ld()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, get(), Gf(), isText(), lP(), yP()]
- "components_code_editor_lr": "Lr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L3 | neighbors=[code-editor.js, decompose(), facet(), slice(), replace(), yh()]
- "components_code_editor_mapdesc": "mapDesc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Ah(), changeByRange(), f1(), Hg(), Fs()]
- "components_code_editor_mapeffects": "mapEffects()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, addChanges(), Ah(), changeByRange(), f1(), Hg()]
- "components_code_editor_ml": "ml()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, lineAt(), of(), phrase(), slice(), sliceDoc()]
- "components_code_editor_ol": "ol()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, i1(), f1(), languageDataAt(), selection(), slice()]
- "components_code_editor_point": "point()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, addBlock(), addLineDeco(), lineAt(), span(), spans()]
- "components_code_editor_pt": "pt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, Ju(), Ku(), Nu(), eq(), Qt()]
- "components_code_editor_pu": "pu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, column(), lineBlockAt(), match(), slice(), wX()]
- "components_code_editor_qy": "qY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, create(), RY(), sliceString(), zr(), vY()]
- "components_code_editor_sc": "sc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L18 | neighbors=[code-editor.js, reuse(), ct(), Gb(), peek(), shift()]
- "components_code_editor_scantile": "scanTile()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, ja(), isComposite(), isText(), scan(), scanText()]
- "components_code_editor_showoptions": "showOptions()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), addEventListener(), createListBox(), update(), updateSel()]
- "components_code_editor_single": "single()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, constructor(), create(), DP(), fd(), ta()]
- "components_code_editor_startcontext": "startContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, Blockquote(), BulletList(), OrderedList(), startComposite(), create()]
- "components_code_editor_stateflag": "stateFlag()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, c0(), forceAll(), reduce(), shift(), stateSlot()]
- "components_code_editor_token": "token()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, acceptToken(), PQ(), reset(), resolveOffset(), updateCachedToken()]
- "components_code_editor_u": "U$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, create(), join(), replace(), wg(), Vt()]
- "components_code_editor_u0": "u0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, reduce(), resolveInner(), slice(), sliceDoc(), W()]
- "components_code_editor_updategutters": "updateGutters()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, update(), destroy(), eq(), facet(), getDOMAfter()]
- "components_code_editor_updateinner": "updateInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), update(), ignore(), isWidget(), updateGaps()]
- "components_code_editor_updateviewportlines": "updateViewportLines()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), measure(), update(), forEachLine(), setDoc()]
- "components_code_editor_usenode": "useNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advanceStack(), pushState(), reset(), reuse(), updateContext()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-033.json

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
