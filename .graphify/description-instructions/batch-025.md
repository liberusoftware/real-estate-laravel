# Node Description Batch 26 of 212

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

- "components_code_editor_htmlblock": "HTMLBlock()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), finish(), nextLine(), prevLineEnd(), rm()]
- "components_code_editor_istext": "isText()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addText(), domIn(), hd(), ld(), posFromDOM()]
- "components_code_editor_iterchangedranges": "iterChangedRanges()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, changes(), constructor(), Ns(), O1(), QP()]
- "components_code_editor_jx": "Jx()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, char(), cm(), fm(), hm(), skipSpace()]
- "components_code_editor_l0": "l0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, d0(), f0(), h0(), K$(), N$()]
- "components_code_editor_lh": "Lh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Hg(), Ah(), create(), Kg(), ta()]
- "components_code_editor_lineblockatheight": "lineBlockAtHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, find(), fromDOM(), lineAt(), readMeasured(), zi()]
- "components_code_editor_lx": "lX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, get(), Ou(), resolve(), resolveInner(), tr()]
- "components_code_editor_markers": "markers()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, constructor(), cursor(), facet(), forRange(), measure()]
- "components_code_editor_mountstyles": "mountStyles()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, constructor(), facet(), mount(), setRoot(), setState()]
- "components_code_editor_mousedown": "mousedown()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, dispatch(), field(), find(), of(), posAtCoords()]
- "components_code_editor_mq": "mQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advanceFully(), cO(), of(), sameState(), zt()]
- "components_code_editor_nd": "Nd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, getChild(), getChildren(), cursor(), firstChild(), is()]
- "components_code_editor_nearest": "nearest()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, get(), owns(), onSelectionChange(), posFromDOM(), readMutation()]
- "components_code_editor_parseinline": "parseInline()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, ATXHeading(), finish(), finishLeaf(), nextLine(), char()]
- "components_code_editor_plugin": "plugin()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, Er(), find(), get(), update(), tooltip()]
- "components_code_editor_prevsibling": "prevSibling()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dX(), PQ(), externalSibling(), findChild(), nextChild()]
- "components_code_editor_readline": "readLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L32 | neighbors=[code-editor.js, constructor(), nextLine(), forward(), reset(), scanLine()]
- "components_code_editor_readmutation": "readMutation()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, processRecords(), isWidget(), markDirty(), nearest(), posAfter()]
- "components_code_editor_readnode": "readNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, append(), findPointInside(), get(), lineBreak(), readRange()]
- "components_code_editor_scan": "scan()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, add(), baseDirAt(), bidiIn(), dirAt(), scanText()]
- "components_code_editor_schedulework": "scheduleWork()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), focus(), field(), isDone(), update()]
- "components_code_editor_storenode": "storeNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, forceAll(), forceReduce(), recoverByDelete(), recoverByInsert(), reduce()]
- "components_code_editor_sync": "sync()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), destroy(), rf(), sP(), syncDOM()]
- "components_code_editor_ta": "ta()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Kg(), Lh(), facet(), NO(), of()]
- "components_code_editor_ti": "Ti()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, Ex(), gX(), kP(), Pc(), getChild()]
- "components_code_editor_tm": "tm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, nextLine(), blank(), ct(), Gc(), Ye()]
- "components_code_editor_touchesrange": "touchesRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, map(), mapLineGaps(), Q0(), touches(), update()]
- "components_code_editor_ua": "ua()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, moveByChar(), moveByGroup(), moveVertically(), cursor(), facet()]
- "components_code_editor_updatecachedtoken": "updateCachedToken()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, getActions(), allows(), clipPos(), read(), reset()]
- "components_code_editor_updateforviewport": "updateForViewport()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), measure(), update(), lineBlockAt(), sort()]
- "components_code_editor_updateplugins": "updatePlugins()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, measure(), update(), clear(), destroy(), ensureHandlers()]
- "components_code_editor_visuallineside": "visualLineSide()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, sf(), bidiSpans(), cursor(), forward(), side()]
- "components_code_editor_vl": "Vl()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, keydown(), dispatch(), field(), find(), of()]
- "components_code_editor_vx": "vX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, ln(), prop(), resolveInner(), resolveStack(), sliceDoc()]
- "components_code_editor_wd": "wd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, keydown(), Bh(), De(), Se(), sn()]
- "components_code_editor_wordat": "wordAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, getDeco(), $T(), charCategorizer(), lineAt(), slice()]
- "components_code_editor_xu": "Xu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, fromClass(), lineAt(), of(), phrase(), wo()]
- "components_code_editor_xx": "XX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, In(), enterUnfinishedNodesBefore(), Qu(), resolve(), resolveInner()]
- "components_code_editor_yield": "yield()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, enter(), enterChild(), fX(), sibling(), yieldBuf()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-025.json

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
