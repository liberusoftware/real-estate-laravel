# Node Description Batch 99 of 212

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

- "components_rich_editor_ko": "Ko()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L12 | neighbors=[rich-editor.js, getText(), r0()]
- "components_rich_editor_ku": "ku()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, kl(), py()]
- "components_rich_editor_kw": "kw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, replace(), Sw()]
- "components_rich_editor_kx": "Kx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, Ha(), Vi()]
- "components_rich_editor_ky": "ky()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, dispatchEvent(), parseRule()]
- "components_rich_editor_lc": "Lc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, descendants(), Qp()]
- "components_rich_editor_lift": "lift()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, vg(), wd()]
- "components_rich_editor_ll": "ll()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, slice(), protectLocalComposition()]
- "components_rich_editor_localcompositioninfo": "localCompositionInfo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, ey(), updateChildren()]
- "components_rich_editor_ly": "ly()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, cl(), kr()]
- "components_rich_editor_mapresult": "mapResult()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, map(), zu()]
- "components_rich_editor_marksfromschema": "marksFromSchema()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, fromSchema(), xc()]
- "components_rich_editor_matchesmark": "matchesMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, eq(), syncToMarks()]
- "components_rich_editor_matcheswidget": "matchesWidget()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, eq(), placeWidget()]
- "components_rich_editor_maxopen": "maxOpen()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, parseSlice(), Sl()]
- "components_rich_editor_mc": "Mc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Cc(), Sc()]
- "components_rich_editor_me": "Me()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addInputRules(), Nx()]
- "components_rich_editor_mw": "mw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, focus(), yw()]
- "components_rich_editor_n": "_n()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, i0(), l0()]
- "components_rich_editor_nextcell": "nextCell()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, gp(), findCell()]
- "components_rich_editor_nk": "nk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, from(), tk()]
- "components_rich_editor_nl": "nl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, Ad(), Lt()]
- "components_rich_editor_nodesfromschema": "nodesFromSchema()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, fromSchema(), xc()]
- "components_rich_editor_nodetype": "nodeType()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, fromJSON(), node()]
- "components_rich_editor_nt": "nt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Hl(), Ho()]
- "components_rich_editor_nu": "Nu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addInner(), No()]
- "components_rich_editor_nx": "Nx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, addInputRules(), Me()]
- "components_rich_editor_ny": "ny()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, domSelection(), wt()]
- "components_rich_editor_o0": "o0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, replace(), Vn()]
- "components_rich_editor_openmore": "openMore()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, fit(), ks()]
- "components_rich_editor_options": "options()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, P(), q()]
- "components_rich_editor_ou": "ou()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, Bg(), hg()]
- "components_rich_editor_ox": "Ox()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, addPasteRules(), ge()]
- "components_rich_editor_parserange": "parseRange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, emptyChildAt(), Uy()]
- "components_rich_editor_pd": "pd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, domFromPos(), endOfTextblock()]
- "components_rich_editor_ph": "ph()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, dx(), join()]
- "components_rich_editor_posatindex": "posAtIndex()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, child(), resolveDepth()]
- "components_rich_editor_pw": "pw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, gw(), forEach()]
- "components_rich_editor_qa": "qa()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), qi()]
- "components_rich_editor_ql": "Ql()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, slice(), split()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-098.json

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
