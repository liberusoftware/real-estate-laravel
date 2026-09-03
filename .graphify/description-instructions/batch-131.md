# Node Description Batch 132 of 212

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

- "components_rich_editor_deletenode": "deleteNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, deleteRange()]
- "components_rich_editor_df": "df()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L31 | neighbors=[rich-editor.js, forEach()]
- "components_rich_editor_doc": "doc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, node()]
- "components_rich_editor_dragend": "dragend()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, scheduleRemoval()]
- "components_rich_editor_dragleave": "dragleave()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, setCursor()]
- "components_rich_editor_drop": "drop()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, scheduleRemoval()]
- "components_rich_editor_du": "du()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, updateChildren()]
- "components_rich_editor_e0": "e0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, bu()]
- "components_rich_editor_el": "El()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Mr()]
- "components_rich_editor_element": "element()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, domAtPos()]
- "components_rich_editor_emptychildat": "emptyChildAt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, parseRange()]
- "components_rich_editor_es": "ES()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Ac()]
- "components_rich_editor_excludes": "excludes()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, addToSet()]
- "components_rich_editor_f": "_f()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, Wf()]
- "components_rich_editor_filtertransaction": "filterTransaction()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, applyTransaction()]
- "components_rich_editor_findaround": "findAround()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElementByRule()]
- "components_rich_editor_findatpoint": "findAtPoint()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addAll()]
- "components_rich_editor_findintext": "findInText()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addTextNode()]
- "components_rich_editor_flushsoon": "flushSoon()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, onSelectionChange()]
- "components_rich_editor_foreachset": "forEachSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, e()]
- "components_rich_editor_getattributes": "getAttributes()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, qo()]
- "components_rich_editor_gethtml": "getHTML()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, Ir()]
- "components_rich_editor_getjson": "getJSON()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, toJSON()]
- "components_rich_editor_getobj": "getObj()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, render()]
- "components_rich_editor_getshouldshow": "getShouldShow()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_gk": "Gk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Zk()]
- "components_rich_editor_gm": "Gm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, recover()]
- "components_rich_editor_handleresizestart": "handleResizeStart()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, add()]
- "components_rich_editor_hasprotocol": "hasProtocol()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, toHref()]
- "components_rich_editor_hk": "Hk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, We()]
- "components_rich_editor_hn": "Hn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, forEach()]
- "components_rich_editor_hr": "Hr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addInputRules()]
- "components_rich_editor_hy": "hy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, py()]
- "components_rich_editor_i0": "i0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, _n()]
- "components_rich_editor_if": "If()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addProseMirrorPlugins()]
- "components_rich_editor_inlinecontext": "inlineContext()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, addTextNode()]
- "components_rich_editor_inparent": "inParent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, update()]
- "components_rich_editor_io": "io()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, findIndex()]
- "components_rich_editor_ip": "ip()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn()]
- "components_rich_editor_isingroup": "isInGroup()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Pm()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-131.json

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
