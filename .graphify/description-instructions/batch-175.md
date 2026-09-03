# Node Description Batch 176 of 212

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

- "components_rich_editor_parsemarkdown": "parseMarkdown()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js]
- "components_rich_editor_plugins": "plugins()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js]
- "components_rich_editor_posafter": "posAfter()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js]
- "components_rich_editor_posatend": "posAtEnd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js]
- "components_rich_editor_positionhandle": "positionHandle()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js]
- "components_rich_editor_props": "props()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_q0": "Q0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js]
- "components_rich_editor_qx": "qx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js]
- "components_rich_editor_range": "range()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js]
- "components_rich_editor_rendermarkdown": "renderMarkdown()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js]
- "components_rich_editor_rendertext": "renderText()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L129 | neighbors=[rich-editor.js]
- "components_rich_editor_rf": "rf()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js]
- "components_rich_editor_rl": "Rl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_root": "root()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_schema": "schema()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js]
- "components_rich_editor_scrolledintoview": "scrolledIntoView()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js]
- "components_rich_editor_selectionset": "selectionSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js]
- "components_rich_editor_set": "set()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_settime": "setTime()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js]
- "components_rich_editor_sf": "sf()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js]
- "components_rich_editor_side": "side()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js]
- "components_rich_editor_size": "size()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js]
- "components_rich_editor_spec": "spec()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_state": "state()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_storedmarksset": "storedMarksSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js]
- "components_rich_editor_textoffset": "textOffset()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js]
- "components_rich_editor_top": "top()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js]
- "components_rich_editor_u0": "U0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js]
- "components_rich_editor_updateoptions": "updateOptions()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js]
- "components_rich_editor_updateroot": "updateRoot()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js]
- "components_rich_editor_vh": "vh()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js]
- "components_rich_editor_vm": "Vm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js]
- "components_rich_editor_vw": "vw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js]
- "components_rich_editor_whitespace": "whitespace()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js]
- "components_rich_editor_yg": "yg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js]
- "components_rightmovesynclist_rightmovesynclist_render": ".render()" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/src/Components/RightmoveSyncList.php:L16 | neighbors=[RightmoveSyncList]
- "components_salesprogressionlist_salesprogressionlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/src/Components/SalesProgressionList.php:L16 | neighbors=[SalesProgressionList]
- "components_search_form_blade": "search-form.blade.php" | kind=code-symbol | source=themes/real-estate-default/resources/views/components/search-form.blade.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "components_select_be": "be()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_fe": "Fe()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-175.json

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
