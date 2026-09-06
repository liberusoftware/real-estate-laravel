# Node Description Batch 70 of 212

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

- "components_rich_editor_getdesc": "getDesc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, nearestDesc(), posFromDOM(), protectLocalComposition()]
- "components_rich_editor_getmeta": "getMeta()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, apply(), dispatchTransaction(), dw()]
- "components_rich_editor_getmirror": "getMirror()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, appendMapping(), appendMappingInverted(), map()]
- "components_rich_editor_gh": "Gh()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), De(), yk()]
- "components_rich_editor_gl": "Gl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, coordsAtPos(), tt(), virtualElement()]
- "components_rich_editor_gw": "gw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, pw(), $r(), yw()]
- "components_rich_editor_hasmarkup": "hasMarkup()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ao(), sameSet(), sameMarkup()]
- "components_rich_editor_hp": "hp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, at(), Xi(), Sp()]
- "components_rich_editor_hu": "hu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, hasFocus(), mu(), wt()]
- "components_rich_editor_ic": "Ic()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, constructor(), child(), create()]
- "components_rich_editor_ignorefallback": "ignoreFallback()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElement(), findPlace(), text()]
- "components_rich_editor_it": "It()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, $d(), scrollIntoView(), setSelection()]
- "components_rich_editor_ja": "Ja()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), Ki(), qi()]
- "components_rich_editor_jd": "jd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, dl(), domAtPos(), Sl()]
- "components_rich_editor_ji": "Ji()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), bk(), Zh()]
- "components_rich_editor_jx": "jx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, $a(), Wi(), ux()]
- "components_rich_editor_ke": "Ke()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, jo(), nodesBetween(), re()]
- "components_rich_editor_ki": "Ki()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), Ja(), Xh()]
- "components_rich_editor_kk": "kk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), setMeta(), slice()]
- "components_rich_editor_km": "Km()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, get(), qm(), lo()]
- "components_rich_editor_l": "$l()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, dn(), forEach(), nodesBetween()]
- "components_rich_editor_lb": "lb()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, create(), sb(), Mr()]
- "components_rich_editor_leaffallback": "leafFallback()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L3 | neighbors=[rich-editor.js, addElement(), addElementByRule(), addTextNode()]
- "components_rich_editor_ln": "Ln()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, dy(), iy(), oy()]
- "components_rich_editor_localposfromdom": "localPosFromDOM()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, posBeforeChild(), posFromDOM(), registerMutation()]
- "components_rich_editor_lt": "Lt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, au(), $g(), nl()]
- "components_rich_editor_lu": "lu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, bl(), Mr(), Wg()]
- "components_rich_editor_mapinner": "mapInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, map(), valid(), zy()]
- "components_rich_editor_matchescontext": "matchesContext()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, split(), matchStyle(), matchTag()]
- "components_rich_editor_matchesnode": "matchesNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, findNodeMatch(), eq(), updateStateInner()]
- "components_rich_editor_matchstyle": "matchStyle()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, matchesContext(), slice(), readStyles()]
- "components_rich_editor_matchtag": "matchTag()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, addElement(), matchesContext(), Um()]
- "components_rich_editor_maybestep": "maybeStep()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, addStep(), apply(), step()]
- "components_rich_editor_mm": "mm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, createAndFill(), createChecked(), s1()]
- "components_rich_editor_mount": "mount()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, constructor(), createView(), emit()]
- "components_rich_editor_mr": "Mr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, lu(), El(), lb()]
- "components_rich_editor_mu": "mu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, hd(), hu(), domSelectionRange()]
- "components_rich_editor_nc": "Nc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, compatibleContent(), Oc(), ps()]
- "components_rich_editor_nodeafter": "nodeAfter()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, child(), cut(), index()]
- "components_rich_editor_nodebefore": "nodeBefore()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, child(), cut(), index()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-069.json

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
