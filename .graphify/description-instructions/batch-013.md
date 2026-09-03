# Node Description Batch 14 of 212

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

- "components_code_editor_keydown": "keydown()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, handleEvent(), bd(), delayAndroidKey(), field(), find()]
- "components_code_editor_line": "line()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, blockAt(), iterLines(), jS(), addElement(), lineInner()]
- "components_code_editor_lineindent": "lineIndent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, baseIndentFor(), Document(), Element(), Fc(), JSXElement()]
- "components_code_editor_ns": "Ns()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, apply(), iterChangedRanges(), iterChanges(), append(), join()]
- "components_code_editor_onselectionchange": "onSelectionChange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, Ci(), facet(), flush(), flushSoon(), ignoreEvent()]
- "components_code_editor_pd": "pd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, changeByRange(), dispatch(), facet(), of(), replaceSelection()]
- "components_code_editor_posfromdom": "posFromDOM()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), enforceCursorAssoc(), posAtDOM(), get(), isComposite()]
- "components_code_editor_rh": "Rh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, compare(), activeForPoint(), boundChange(), comparePoint(), compareRange()]
- "components_code_editor_select": "select()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, mount(), move(), scroll(), cd(), dispatch()]
- "components_code_editor_setstate": "setState()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, clear(), destroy(), ensureHandlers(), facet(), focus()]
- "components_code_editor_shift": "shift()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, apply(), get(), Hv(), pushState(), read()]
- "components_code_editor_starthover": "startHover()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, checkHover(), activateHover(), bidiSpans(), coordsAtPos(), find()]
- "components_code_editor_taketree": "takeTree()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, apply(), changes(), init(), reset(), addTree()]
- "components_code_editor_textdirectionat": "textDirectionAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, bidiSpans(), ja(), jP(), sf(), facet()]
- "components_code_editor_uh": "Uh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, compose(), composeDesc(), be(), create(), createSet()]
- "components_code_editor_updatesel": "updateSel()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, mount(), update(), addInfoPane(), destroyInfo(), facet()]
- "components_markdown_editor_a": "_a()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ae(), ar(), is(), je(), Jr()]
- "components_markdown_editor_an": "An()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, el(), Eo(), Fn(), qc(), hf()]
- "components_markdown_editor_ar": "ar()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, _a(), Zt(), bf(), ci(), co()]
- "components_markdown_editor_ff": "ff()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Ae(), ce(), gl(), Ia(), qf()]
- "components_markdown_editor_g": "G()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ca(), ef(), S(), to(), y()]
- "components_markdown_editor_kf": "kf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, df(), el(), il(), it(), je()]
- "components_markdown_editor_mo": "mo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, as(), Ae(), er(), Fc(), go()]
- "components_markdown_editor_n": "n()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, he(), w(), y(), pd(), ql()]
- "components_markdown_editor_of": "of()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, af(), Ba(), H(), it(), je()]
- "components_markdown_editor_sd": "sd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, cd(), Ee(), he(), ld(), R()]
- "components_markdown_editor_si": "si()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, cf(), Ae(), bl(), ce(), Do()]
- "components_markdown_editor_tt": "Tt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, al(), es(), Fr(), ge(), md()]
- "components_markdown_editor_vf": "vf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ir(), bf(), kf(), ne(), Pe()]
- "components_markdown_editor_wn": "wn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, da(), ga(), vd(), wf(), Ae()]
- "components_markdown_editor_x": "x()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, D(), ge(), M(), q(), w()]
- "components_markdown_editor_xn": "Xn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, ns(), vd(), Ae(), ne(), Oe()]
- "components_rich_editor_bu": "bu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, append(), contentMatchAt(), copy(), e0(), from()]
- "components_rich_editor_check": "check()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addToSet(), checkAttrs(), checkContent(), forEach(), get()]
- "components_rich_editor_d": "$d()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, al(), descAt(), endOfTextblock(), findFrom(), isSelectable()]
- "components_rich_editor_finish": "finish()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, closeExtra(), append(), create(), fillBefore(), from()]
- "components_rich_editor_fit": "fit()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, close(), dropNode(), end(), findFittable(), mustMoveInline()]
- "components_rich_editor_focus": "focus()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, by(), cu(), start(), stop(), wt()]
- "components_rich_editor_fromjson": "fromJSON()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, checkAttrs(), create(), forEach(), fromArray(), nodeType()]
- "components_rich_editor_fromschema": "fromSchema()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, cn(), marksFromSchema(), nodesFromSchema(), schemaRules(), Ir()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-013.json

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
