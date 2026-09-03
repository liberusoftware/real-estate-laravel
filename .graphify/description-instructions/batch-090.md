# Node Description Batch 91 of 212

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

- "components_code_editor_comparepoint": "comparePoint()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ri(), Rh()]
- "components_code_editor_comparerange": "compareRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ri(), Rh()]
- "components_code_editor_composedesc": "composeDesc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Uh(), f1()]
- "components_code_editor_createcontainer": "createContainer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), update()]
- "components_code_editor_createdeco": "createDeco()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, finish(), updateDeco()]
- "components_code_editor_createset": "createSet()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Fs(), Uh()]
- "components_code_editor_cursorat": "cursorAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, get(), moveTo()]
- "components_code_editor_cursorget": "cursorGet()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, get(), getBuffer()]
- "components_code_editor_cx": "cX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, build(), Pc()]
- "components_code_editor_dd": "dd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, of(), fd()]
- "components_code_editor_df": "Df()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, bidiSpans(), gP()]
- "components_code_editor_dm": "dm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, reuseFragment(), takeNodes()]
- "components_code_editor_document": "Document()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, continue(), lineIndent()]
- "components_code_editor_domeventhandlers": "domEventHandlers()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, define(), lu()]
- "components_code_editor_dp": "DP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), single()]
- "components_code_editor_dragover": "dragover()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, posAtCoords(), setDropPos()]
- "components_code_editor_du": "Du()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, addChanges(), f1()]
- "components_code_editor_dy": "DY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, CY(), IY()]
- "components_code_editor_e": "E$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, charCategorizer(), sliceDoc()]
- "components_code_editor_element": "Element()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, continue(), lineIndent()]
- "components_code_editor_emitcontext": "emitContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, close(), updateContext()]
- "components_code_editor_emitlookahead": "emitLookAhead()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, close(), setLookAhead()]
- "components_code_editor_enterunfinishednodesbefore": "enterUnfinishedNodesBefore()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, childBefore(), XX()]
- "components_code_editor_entity": "Entity()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), slice()]
- "components_code_editor_eo": "Eo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), create()]
- "components_code_editor_escape": "Escape()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), char()]
- "components_code_editor_eu": "eu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dX(), startInner()]
- "components_code_editor_fe": "Fe()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), phrase()]
- "components_code_editor_findcolumn": "findColumn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, IndentedCode(), moveBaseColumn()]
- "components_code_editor_findpointinside": "findPointInside()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, EP(), readNode()]
- "components_code_editor_findregions": "findRegions()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, facet(), W()]
- "components_code_editor_flatten": "flatten()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L2 | neighbors=[code-editor.js, from(), toJSON()]
- "components_code_editor_fn": "Fn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, between(), facet()]
- "components_code_editor_forward2": "forward2()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, forward(), Uh()]
- "components_code_editor_g": "g$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, resolveInner(), W()]
- "components_code_editor_getdomafter": "getDOMAfter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), updateGutters()]
- "components_code_editor_getnodetype": "getNodeType()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, elt(), startComposite()]
- "components_code_editor_getreplacement": "getReplacement()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, replace(), unquote()]
- "components_code_editor_getrules": "getRules()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, join(), mount()]
- "components_code_editor_go": "GO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, advance(), YY()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-090.json

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
