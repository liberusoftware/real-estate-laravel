# Node Description Batch 47 of 212

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

- "components_code_editor_qn": "Qn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ef(), Gf(), get(), readRange()]
- "components_code_editor_qu": "Qu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, continue(), create(), yX(), XX()]
- "components_code_editor_readchange": "readChange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, flush(), ji(), processRecords(), update()]
- "components_code_editor_readnext": "readNext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), constructor(), getChunk(), reset()]
- "components_code_editor_readtextnode": "readTextNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, readNode(), append(), lineBreak(), slice()]
- "components_code_editor_replacerange": "replaceRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, constructor(), lP(), create(), slice()]
- "components_code_editor_replaceselection": "replaceSelection()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, lP(), pd(), changeByRange(), toText()]
- "components_code_editor_result": "result()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, match(), De(), ret(), Se()]
- "components_code_editor_scanline": "scanLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L32 | neighbors=[code-editor.js, peekLine(), readLine(), lineChunkAt(), slice()]
- "components_code_editor_scrollanchorat": "scrollAnchorAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure(), lineBlockAtHeight(), scrollSnapshot(), update()]
- "components_code_editor_setdoc": "setDoc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, applyChanges(), constructor(), update(), updateViewportLines()]
- "components_code_editor_setmarkers": "setMarkers()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, destroy(), compare(), toDOM(), update()]
- "components_code_editor_setselection": "setSelection()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, reset(), toContextPos(), updateSelection(), update()]
- "components_code_editor_shiftcontext": "shiftContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, recoverByInsert(), shift(), reset(), updateContext()]
- "components_code_editor_stackid": "stackID()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), advanceStack(), runRecovery(), get()]
- "components_code_editor_stacktotree": "stackToTree()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), build(), close(), create()]
- "components_code_editor_startquery": "startQuery()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, accept(), constructor(), resolve(), startUpdate()]
- "components_code_editor_syncclasses": "syncClasses()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), add(), split(), update()]
- "components_code_editor_to": "To()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, move(), readMeasure(), scrollIntoView(), facet()]
- "components_code_editor_tojson": "toJSON()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, between(), field(), flatten(), sliceDoc()]
- "components_code_editor_tr": "tr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, lX(), resolve(), resolveInner(), enter()]
- "components_code_editor_ts": "TS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, bd(), create(), lineAt(), split()]
- "components_code_editor_uc": "Uc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, BulletList(), jP(), ct(), skipSpace()]
- "components_code_editor_ui": "Ui()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, match(), N$(), nextOverlapping(), facet()]
- "components_code_editor_updatecontext": "updateContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, reduceContext(), shiftContext(), emitContext(), useNode()]
- "components_code_editor_updatetooltipclass": "updateTooltipClass()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), update(), add(), split()]
- "components_code_editor_vc": "Vc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, HorizontalRule(), jP(), ct(), tm()]
- "components_code_editor_vn": "Vn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, ff(), Ns(), pd(), facet()]
- "components_code_editor_vr": "vr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, advance(), finish(), skipSpace(), ct()]
- "components_code_editor_widget": "widget()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, init(), syncGutters(), addElement(), facet()]
- "components_code_editor_ws": "ws()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, bi(), cO(), of(), zt()]
- "components_code_editor_wt": "Wt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, addActions(), allActions(), hasAction(), nextStates()]
- "components_code_editor_wx": "wX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, pu(), childAfter(), lineAt(), slice()]
- "components_code_editor_xf": "Xf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, updateAttrs(), facet(), iterRange(), Qo()]
- "components_code_editor_xw": "Xw()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, resolveInner(), sliceDoc(), Tw(), W()]
- "components_code_editor_zi": "zi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, elementAtHeight(), lineBlockAt(), lineBlockAtHeight(), toDOM()]
- "components_code_editor_zr": "zr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, Lg(), qY(), RY(), sliceString()]
- "components_file_upload_yl": "yl()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, Ei(), om(), Bp(), rl()]
- "components_instructionlist": "InstructionList.php" | kind=code-symbol | source=modules/real-estate-instructions-livewire/src/Components/InstructionList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, d07b218 Harden real estate Livewire lis…, InstructionList]
- "components_listinglist": "ListingList.php" | kind=code-symbol | source=modules/real-estate-listings-livewire/src/Components/ListingList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, d07b218 Harden real estate Livewire lis…, ListingList]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-046.json

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
