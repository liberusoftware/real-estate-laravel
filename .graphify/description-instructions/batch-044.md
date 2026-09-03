# Node Description Batch 45 of 212

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

- "components_code_editor_ap": "aP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, create(), get(), isWidget(), getCompositionContext()]
- "components_code_editor_au": "au()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, enter(), facet(), W(), isActiveAt()]
- "components_code_editor_balanced": "balanced()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, of(), setHeight(), replace(), updateHeight()]
- "components_code_editor_blocktiles": "blockTiles()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, pop(), inlineDOMNearPos(), measureTextSize(), resolveBlock()]
- "components_code_editor_blur": "blur()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, facet(), field(), xo(), destroy()]
- "components_code_editor_builddeco": "buildDeco()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, finish(), su(), constructor(), update()]
- "components_code_editor_bulletlist": "BulletList()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), moveBaseColumn(), startContext(), Uc()]
- "components_code_editor_createlistbox": "createListBox()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, add(), addEventListener(), phrase(), showOptions()]
- "components_code_editor_cs": "cS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, coordsAtPos(), slice(), ue(), measure()]
- "components_code_editor_cy": "CY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, addCompletions(), addNamespace(), child(), DY()]
- "components_code_editor_decompose": "decompose()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, Lr(), pop(), slice(), replace()]
- "components_code_editor_dl": "dl()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, create(), facet(), replace(), sliceDoc()]
- "components_code_editor_dt": "Dt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, append(), filter(), Fs(), Uh()]
- "components_code_editor_ed": "Ed()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dispatch(), field(), init(), of()]
- "components_code_editor_ef": "ef()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, Ci(), Nt(), Qn(), Vt()]
- "components_code_editor_eg": "eg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, cursor(), get(), iterate(), nY()]
- "components_code_editor_ensurehandlers": "ensureHandlers()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), addEventListener(), setState(), updatePlugins()]
- "components_code_editor_ensureline": "ensureLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addBlock(), addLineDeco(), addLineStart(), enterLine()]
- "components_code_editor_enterline": "enterLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, addBlock(), ensureLine(), blankContent(), lineAt()]
- "components_code_editor_er": "Er()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, plugin(), pop(), next(), removeActive()]
- "components_code_editor_fc": "Fc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, baseIndentFor(), lineAt(), lineIndent(), sliceDoc()]
- "components_code_editor_filter": "filter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, be(), create(), Dt(), forward()]
- "components_code_editor_findindex": "findIndex()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, addCompletion(), between(), gotoInner(), tooltip()]
- "components_code_editor_finishinner": "finishInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, finish(), create(), finishChunk(), update()]
- "components_code_editor_forceall": "forceAll()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), forceReduce(), stateFlag(), storeNode()]
- "components_code_editor_forrange": "forRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, coordsAtPos(), kd(), yS(), markers()]
- "components_code_editor_forwardinner": "forwardInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, forward(), countIndent(), skipSpace(), reset()]
- "components_code_editor_fp": "fP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, facet(), Nt(), Vt(), readSelectionRange()]
- "components_code_editor_fromclass": "fromClass()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, define(), VS(), Xu(), zd()]
- "components_code_editor_fromdom": "fromDOM()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, elementAtHeight(), lineBlockAtHeight(), visibleBottom(), visibleTop()]
- "components_code_editor_fromjson": "fromJSON()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, create(), init(), of(), slice()]
- "components_code_editor_g0": "g0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, between(), facet(), field(), lineAt()]
- "components_code_editor_ga": "ga()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, facet(), initialSpacer(), lineMarker(), updateSpacer()]
- "components_code_editor_gc": "Gc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, facet(), slice(), Ye(), tm()]
- "components_code_editor_getviewport": "getViewport()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), lineAt(), measure(), update()]
- "components_code_editor_gx": "gX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, matchContext(), prop(), Ti(), highlightRange()]
- "components_code_editor_handleevent": "handleEvent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, ignoreDuringComposition(), keydown(), resolve(), runHandlers()]
- "components_code_editor_hasaction": "hasAction()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, canShift(), stateSlot(), Wt(), recoverByInsert()]
- "components_code_editor_heightmetrics": "heightMetrics()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, blockAt(), forEachLine(), lineAt(), updateHeight()]
- "components_code_editor_hn": "Hn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, addChanges(), slice(), Iu(), update()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-044.json

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
