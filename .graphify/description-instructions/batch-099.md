# Node Description Batch 100 of 212

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

- "components_rich_editor_qm": "qm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, Km(), canReplace()]
- "components_rich_editor_qr": "Qr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Jh(), replace()]
- "components_rich_editor_qu": "qu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, jo(), from()]
- "components_rich_editor_re": "re()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Ju(), Ke()]
- "components_rich_editor_removebetween": "removeBetween()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, invert(), Tc()]
- "components_rich_editor_removemark": "removeMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, jy(), Ym()]
- "components_rich_editor_renderhtml": "renderHTML()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, join(), o1()]
- "components_rich_editor_renderspec": "renderSpec()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, create(), lo()]
- "components_rich_editor_replaceselection": "replaceSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, replace(), wr()]
- "components_rich_editor_resolvecached": "resolveCached()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, resolve(), get()]
- "components_rich_editor_rg": "rg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, nodesBetween(), setBlockType()]
- "components_rich_editor_ri": "ri()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, dw(), fw()]
- "components_rich_editor_ru": "Ru()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addInner(), No()]
- "components_rich_editor_sameparent": "sameParent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, jy(), vd()]
- "components_rich_editor_sb": "sb()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, lb(), split()]
- "components_rich_editor_schemarules": "schemaRules()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, fromSchema(), forEach()]
- "components_rich_editor_selectnode": "selectNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, pu(), add()]
- "components_rich_editor_serializenode": "serializeNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, serializeMark(), serializeNodeInner()]
- "components_rich_editor_setblocktype": "setBlockType()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, js(), rg()]
- "components_rich_editor_setupextensions": "setupExtensions()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, constructor(), forEach()]
- "components_rich_editor_storage": "storage()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, P(), q()]
- "components_rich_editor_sy": "sy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, cl(), kr()]
- "components_rich_editor_th": "Th()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, Ah(), Ax()]
- "components_rich_editor_tojson": "toJSON()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, getJSON(), n0()]
- "components_rich_editor_tostringinner": "toStringInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, toString(), join()]
- "components_rich_editor_u": "$u()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, ensureMarks(), marks()]
- "components_rich_editor_uc": "uc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, o1(), Pm()]
- "components_rich_editor_ud": "Ud()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Tl(), on()]
- "components_rich_editor_ug": "ug()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, fg(), cu()]
- "components_rich_editor_un": "un()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, edge(), hasRequiredAttrs()]
- "components_rich_editor_updateallowdefault": "updateAllowDefault()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, move(), up()]
- "components_rich_editor_updatenodeat": "updateNodeAt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, destroyBetween(), update()]
- "components_rich_editor_us": "Us()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, child(), domAtPos()]
- "components_rich_editor_uw": "uw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, dw(), forEach()]
- "components_rich_editor_vc": "vc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Cc(), Sc()]
- "components_rich_editor_wc": "wc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, insertNode(), allowsMarkType()]
- "components_rich_editor_wh": "Wh()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L139 | neighbors=[rich-editor.js, join(), ok()]
- "components_rich_editor_wn": "Wn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L26 | neighbors=[rich-editor.js, forEach(), up()]
- "components_rich_editor_wrap": "wrap()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, kd(), ng()]
- "components_rich_editor_xa": "Xa()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Sp(), We()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-099.json

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
