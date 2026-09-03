# Node Description Batch 134 of 212

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

- "components_rich_editor_ra": "Ra()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, $i()]
- "components_rich_editor_rangehasmark": "rangeHasMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, nodesBetween()]
- "components_rich_editor_rc": "Rc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, toString()]
- "components_rich_editor_removealllisteners": "removeAllListeners()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, destroy()]
- "components_rich_editor_rn": "Rn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, wd()]
- "components_rich_editor_rr": "Rr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, buildProps()]
- "components_rich_editor_rx": "Rx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, addProseMirrorPlugins()]
- "components_rich_editor_s": "$S()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Sn()]
- "components_rich_editor_s0": "s0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, tf()]
- "components_rich_editor_selection": "selection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, slice()]
- "components_rich_editor_serializeforclipboard": "serializeForClipboard()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, kl()]
- "components_rich_editor_setdocattribute": "setDocAttribute()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, step()]
- "components_rich_editor_setmirror": "setMirror()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, appendMap()]
- "components_rich_editor_setnodeattribute": "setNodeAttribute()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, step()]
- "components_rich_editor_setstoredmarks": "setStoredMarks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, ensureMarks()]
- "components_rich_editor_show": "show()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_suppressselectionupdates": "suppressSelectionUpdates()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, jy()]
- "components_rich_editor_sx": "sx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L131 | neighbors=[rich-editor.js, gn()]
- "components_rich_editor_ta": "ta()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L131 | neighbors=[rich-editor.js, tt()]
- "components_rich_editor_tb": "tb()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, updateStateInner()]
- "components_rich_editor_td": "td()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_textcontent": "textContent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, textBetween()]
- "components_rich_editor_tk": "tk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, nk()]
- "components_rich_editor_to": "to()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, end()]
- "components_rich_editor_touches": "touches()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, Fc()]
- "components_rich_editor_transformpastedhtml": "transformPastedHTML()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, createView()]
- "components_rich_editor_u1": "u1()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L149 | neighbors=[rich-editor.js, replace()]
- "components_rich_editor_ui": "Ui()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn()]
- "components_rich_editor_uk": "Uk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Vk()]
- "components_rich_editor_um": "Um()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, matchTag()]
- "components_rich_editor_updateattributes": "updateAttributes()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L31 | neighbors=[rich-editor.js, ea()]
- "components_rich_editor_updateposition": "updatePosition()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_view": "view()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, updatePluginViews()]
- "components_rich_editor_vk": "Vk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Uk()]
- "components_rich_editor_vu": "vu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, find()]
- "components_rich_editor_wk": "Wk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, jk()]
- "components_rich_editor_wm": "wm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, createAndFill()]
- "components_rich_editor_wo": "Wo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, jo()]
- "components_rich_editor_x": "_x()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, $a()]
- "components_rich_editor_xk": "xk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-133.json

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
