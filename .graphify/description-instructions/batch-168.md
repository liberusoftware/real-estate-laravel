# Node Description Batch 169 of 212

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

- "components_code_editor_drawcursor": "drawCursor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js]
- "components_code_editor_dynamicslot": "dynamicSlot()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js]
- "components_code_editor_editable": "editable()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_end": "end()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_endside": "endSide()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js]
- "components_code_editor_eofterm": "eofTerm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js]
- "components_code_editor_estimatedheight": "estimatedHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_extension": "extension()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js]
- "components_code_editor_findopeningdelimiter": "findOpeningDelimiter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js]
- "components_code_editor_focuschanged": "focusChanged()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_fork": "fork()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_forstatement": "ForStatement()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js]
- "components_code_editor_geometrychanged": "geometryChanged()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_getdelimiterat": "getDelimiterAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js]
- "components_code_editor_goalcolumn": "goalColumn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js]
- "components_code_editor_gq": "gQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js]
- "components_code_editor_gy": "GY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js]
- "components_code_editor_hasfocus": "hasFocus()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js]
- "components_code_editor_hash": "hash()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js]
- "components_code_editor_hasheight": "hasHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_hasopenlink": "hasOpenLink()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js]
- "components_code_editor_hc": "hc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L18 | neighbors=[code-editor.js]
- "components_code_editor_head": "head()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js]
- "components_code_editor_heightchanged": "heightChanged()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_heightrelevant": "heightRelevant()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_id": "Id()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_inherit": "inherit()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_inverteddesc": "invertedDesc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js]
- "components_code_editor_inview": "inView()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js]
- "components_code_editor_isanonymous": "isAnonymous()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_isblock": "isBlock()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_iscovered": "isCovered()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js]
- "components_code_editor_isempty": "isEmpty()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js]
- "components_code_editor_iserror": "isError()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_ishidden": "isHidden()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]
- "components_code_editor_ispending": "isPending()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js]
- "components_code_editor_isskipped": "isSkipped()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_istop": "isTop()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_isworking": "isWorking()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js]
- "components_code_editor_jh": "Jh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-168.json

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
