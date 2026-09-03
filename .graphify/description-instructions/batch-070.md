# Node Description Batch 71 of 212

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

- "components_rich_editor_nodedom": "nodeDOM()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, descAt(), updateOverlay(), virtualElement()]
- "components_rich_editor_o1": "o1()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, child(), uc(), renderHTML()]
- "components_rich_editor_of": "of()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, injectCSS(), querySelector(), setAttribute()]
- "components_rich_editor_og": "og()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, canReplaceWith(), index(), resolve()]
- "components_rich_editor_om": "om()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, ct(), e(), rm()]
- "components_rich_editor_on": "on()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), once(), Ud()]
- "components_rich_editor_ondragstart": "onDragStart()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, closest(), create(), setSelection()]
- "components_rich_editor_pc": "pc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Im(), create(), err()]
- "components_rich_editor_posbeforechild": "posBeforeChild()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, localPosFromDOM(), posAtStart(), posBefore()]
- "components_rich_editor_pp": "pp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, gn(), at(), Xn()]
- "components_rich_editor_protectlocalcomposition": "protectLocalComposition()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, getDesc(), ll(), updateChildren()]
- "components_rich_editor_qd": "Qd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), someProp(), updateStateInner()]
- "components_rich_editor_qo": "qo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, getAttributes(), Hl(), Ju()]
- "components_rich_editor_readstyles": "readStyles()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElement(), create(), matchStyle()]
- "components_rich_editor_recover": "recover()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, map(), Fc(), Gm()]
- "components_rich_editor_registerplugin": "registerPlugin()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, e(), reconfigure(), updateState()]
- "components_rich_editor_remapping": "remapping()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, compress(), popEvent(), forEach()]
- "components_rich_editor_removehandles": "removeHandles()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, handleEditorUpdate(), clear(), forEach()]
- "components_rich_editor_removeinner": "removeInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, remove(), eq(), slice()]
- "components_rich_editor_resolvenocache": "resolveNoCache()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, jy(), Nm(), resolve()]
- "components_rich_editor_s1": "s1()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, createChecked(), i1(), mm()]
- "components_rich_editor_scheduleremoval": "scheduleRemoval()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, dragend(), dragover(), drop()]
- "components_rich_editor_sd": "sd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, constructor(), blockRange(), scrollIntoView()]
- "components_rich_editor_serializemark": "serializeMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, lo(), so(), serializeNode()]
- "components_rich_editor_seteditable": "setEditable()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, handlePaste(), emit(), setOptions()]
- "components_rich_editor_setprops": "setProps()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, createNodeViews(), setOptions(), update()]
- "components_rich_editor_so": "so()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, serializeFragment(), serializeMark(), serializeNodeInner()]
- "components_rich_editor_startindex": "startIndex()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, index(), toFormattedObject(), toObject()]
- "components_rich_editor_stopevent": "stopEvent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, closest(), isSelectable(), xy()]
- "components_rich_editor_sw": "Sw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addProseMirrorPlugins(), kw(), xw()]
- "components_rich_editor_sync": "sync()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElement(), addElementByRule(), findPlace()]
- "components_rich_editor_t0": "t0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, fromJSON(), Ir(), Uo()]
- "components_rich_editor_tf": "tf()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, s0(), has(), parse()]
- "components_rich_editor_tm": "tm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, ct(), e(), Zp()]
- "components_rich_editor_toformattedhref": "toFormattedHref()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, get(), toHref(), toFormattedObject()]
- "components_rich_editor_tu": "Tu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, markParentsDirty(), updateStateInner(), yr()]
- "components_rich_editor_unregisterplugin": "unregisterPlugin()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, forEach(), reconfigure(), updateState()]
- "components_rich_editor_updatedraggednode": "updateDraggedNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, create(), nodeAt(), updateStateInner()]
- "components_rich_editor_updateinner": "updateInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, update(), updateChildren(), updateOuterDeco()]
- "components_rich_editor_uu": "uu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, fu(), updateOuterDeco(), Gg()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-070.json

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
