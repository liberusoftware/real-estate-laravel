# Node Description Batch 65 of 212

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

- "components_code_editor_foreachline": "forEachLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, heightMetrics(), lineAt(), updateViewportLines()]
- "components_code_editor_fromtransaction": "fromTransaction()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, facet(), invert(), update()]
- "components_code_editor_getchildren": "getChildren()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, $f(), Nd(), lP()]
- "components_code_editor_getchunk": "getChunk()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, chunk(), slice(), readNext()]
- "components_code_editor_getcursor": "getCursor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, create(), pi(), Qi()]
- "components_code_editor_getgoto": "getGoto()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advanceStack(), forceReduce(), reduce()]
- "components_code_editor_getline": "getLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), slice(), nextLine()]
- "components_code_editor_getname": "getName()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), advanceStack(), runRecovery()]
- "components_code_editor_gl": "gl()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), update(), updateSel()]
- "components_code_editor_gw": "gw()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, childBefore(), resolveInner(), Xm()]
- "components_code_editor_h0": "h0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, changeByRange(), update(), l0()]
- "components_code_editor_h1": "h1()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, setSelAfter(), slice(), pop()]
- "components_code_editor_hasnode": "hasNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, moveTo(), nextFrag(), startInner()]
- "components_code_editor_hasresult": "hasResult()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, accept(), Qt(), zt()]
- "components_code_editor_hd": "hd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, constructor(), isComposite(), isText()]
- "components_code_editor_horizontalrule": "HorizontalRule()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), nextLine(), Vc()]
- "components_code_editor_hr": "Hr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, ue(), jS(), wP()]
- "components_code_editor_in": "In()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, facet(), W(), XX()]
- "components_code_editor_initialspacer": "initialSpacer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), ga(), Vf()]
- "components_code_editor_instantiate": "instantiate()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, facet(), lineAt(), slice()]
- "components_code_editor_isline": "isLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsForChar(), getCompositionContext(), lineAt()]
- "components_code_editor_iterchanges": "iterChanges()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, applyEdits(), Ns(), updateDeco()]
- "components_code_editor_iy": "IY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, DY(), of(), Mg()]
- "components_code_editor_jd": "jd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, define(), of(), slice()]
- "components_code_editor_jo": "Jo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dX(), prop(), ut()]
- "components_code_editor_js": "jS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, cursor(), Hr(), line()]
- "components_code_editor_k": "K$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, between(), field(), l0()]
- "components_code_editor_kd": "kd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, forRange(), slice(), yS()]
- "components_code_editor_km": "km()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, sliceString(), marker(), zc()]
- "components_code_editor_ko": "Ko()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dX(), prop(), ut()]
- "components_code_editor_kp": "kP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, Fi(), Ti(), preserve()]
- "components_code_editor_l": "L$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, annotation(), isUserEvent(), update()]
- "components_code_editor_lastchild": "lastChild()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, child(), enterChild(), nextChild()]
- "components_code_editor_linechunkat": "lineChunkAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L32 | neighbors=[code-editor.js, chunk(), slice(), scanLine()]
- "components_code_editor_linemarker": "lineMarker()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, line(), ga(), lineAt()]
- "components_code_editor_listenforscroll": "listenForScroll()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), addEventListener(), slice()]
- "components_code_editor_m": "m$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, changes(), slice(), update()]
- "components_code_editor_maplinegaps": "mapLineGaps()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, mapPos(), touchesRange(), update()]
- "components_code_editor_mapviewport": "mapViewport()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, lineAt(), mapPos(), update()]
- "components_code_editor_matchcontext": "matchContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, gX(), vo(), VariableDefinition()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-064.json

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
