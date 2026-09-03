# Node Description Batch 69 of 212

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

- "components_partylist": "PartyList.php" | kind=code-symbol | source=modules/real-estate-parties-livewire/src/Components/PartyList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 73659b3 Add real estate parties module …, d07b218 Harden real estate Livewire lis…, PartyList]
- "components_portalreportlist": "PortalReportList.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/src/Components/PortalReportList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, d07b218 Harden real estate Livewire lis…, PortalReportList]
- "components_rich_editor_adddom": "addDOM()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, addAll(), addElement(), addTextNode()]
- "components_rich_editor_addstep": "addStep()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, appendMap(), getMap(), maybeStep()]
- "components_rich_editor_addstoredmark": "addStoredMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, addToSet(), ensureMarks(), marks()]
- "components_rich_editor_an": "an()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addKeyboardShortcuts(), $b(), ignoreMutation()]
- "components_rich_editor_appendmappinginverted": "appendMappingInverted()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, appendMap(), getMirror(), invert()]
- "components_rich_editor_applyinner": "applyInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, apply(), eq(), applyTransaction()]
- "components_rich_editor_attachhandles": "attachHandles()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, forEach(), constructor(), handleEditorUpdate()]
- "components_rich_editor_aw": "aw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addTransform(), forEach(), slice()]
- "components_rich_editor_b": "$b()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, an(), split(), zl()]
- "components_rich_editor_bt": "bt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), move(), up()]
- "components_rich_editor_buildprops": "buildProps()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Rr(), commands(), createCan()]
- "components_rich_editor_bx": "bx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, dx(), px(), Hi()]
- "components_rich_editor_checkattrs": "checkAttrs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, check(), Bc(), fromJSON()]
- "components_rich_editor_childafter": "childAfter()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, findIndex(), maybeChild(), Fo()]
- "components_rich_editor_childbefore": "childBefore()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, child(), findIndex(), Fo()]
- "components_rich_editor_closest": "closest()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, onDragStart(), qs(), stopEvent()]
- "components_rich_editor_compile": "compile()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, create(), forEach(), constructor()]
- "components_rich_editor_computeattrs": "computeAttrs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, create(), createAndFill(), createChecked()]
- "components_rich_editor_configure": "configure()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, addExtensions(), extend(), createExtensionManager()]
- "components_rich_editor_cr": "Cr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, by(), move(), up()]
- "components_rich_editor_d1": "d1()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, join(), split(), tokenize()]
- "components_rich_editor_dd": "dd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, endOfTextblock(), fu(), updateChildren()]
- "components_rich_editor_descat": "descAt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, $d(), nodeDOM(), pu()]
- "components_rich_editor_destroyrest": "destroyRest()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, destroyBetween(), syncToMarks(), updateChildren()]
- "components_rich_editor_dg": "dg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, allowsMarks(), child(), Ss()]
- "components_rich_editor_dispatchevent": "dispatchEvent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, ky(), handleDrop(), handlePaste()]
- "components_rich_editor_dp": "dp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, at(), Gi(), Ne()]
- "components_rich_editor_dropnode": "dropNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, ks(), sr(), fit()]
- "components_rich_editor_eb": "eb()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, sharedDepth(), start(), updateStateInner()]
- "components_rich_editor_endindex": "endIndex()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, indexAfter(), toFormattedObject(), toObject()]
- "components_rich_editor_findinside": "findInside()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElement(), addElementByRule(), addTextNode()]
- "components_rich_editor_findnodematch": "findNodeMatch()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, destroyBetween(), has(), matchesNode()]
- "components_rich_editor_fm": "Fm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, constructor(), setMeta(), split()]
- "components_rich_editor_forchild": "forChild()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, copy(), from(), qg()]
- "components_rich_editor_ft": "Ft()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, dx(), Ee(), slice()]
- "components_rich_editor_gc": "gc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, constructor(), lg(), split()]
- "components_rich_editor_gd": "Gd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, resolve(), xl(), jy()]
- "components_rich_editor_getbookmark": "getBookmark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, dw(), fw(), between()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-068.json

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
