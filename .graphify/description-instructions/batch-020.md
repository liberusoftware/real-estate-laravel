# Node Description Batch 21 of 212

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

- "components_code_editor_ot": "ot()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, a$(), _h(), O$(), dispatch(), eq()]
- "components_code_editor_pi": "pi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, getCursor(), highlight(), matchAll(), nextMatch(), charCategorizer()]
- "components_code_editor_pp": "pP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ka(), cursor(), find(), forward(), side()]
- "components_code_editor_qi": "Qi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, getCursor(), highlight(), matchAll(), nextMatch(), prevMatchInRange()]
- "components_code_editor_read": "read()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, JQ(), lP(), moveTo(), slice(), sliceString()]
- "components_code_editor_readrange": "readRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, constructor(), readNode(), findPointBefore(), get(), isWidget()]
- "components_code_editor_recoverbyinsert": "recoverByInsert()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, hasAction(), nextStates(), pushState(), shiftContext(), split()]
- "components_code_editor_resolveblock": "resolveBlock()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsAt(), coordsForChar(), domAtPos(), lineAt(), lineHasWidget()]
- "components_code_editor_reusefragment": "reuseFragment()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L32 | neighbors=[code-editor.js, advance(), dm(), matches(), moveRangeI(), moveTo()]
- "components_code_editor_setdroppos": "setDropPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, dragend(), dragleave(), dragover(), drop(), dispatch()]
- "components_code_editor_sf": "sf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, moveByChar(), moveByGroup(), bidiSpans(), line(), lineAt()]
- "components_code_editor_sibling": "sibling()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, move(), nextSibling(), prevSibling(), findChild(), nextChild()]
- "components_code_editor_start": "start()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addLineStart(), constructor(), create(), ignore(), addEventListener()]
- "components_code_editor_su": "su()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, buildDeco(), cursor(), field(), flush(), highlightRange()]
- "components_code_editor_syncgutters": "syncGutters()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), facet(), finish(), line(), uo()]
- "components_code_editor_takenodes": "takeNodes()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, reuseFragment(), addNode(), dm(), firstChild(), is()]
- "components_code_editor_totext": "toText()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, fd(), lP(), pd(), replaceSelection(), facet()]
- "components_code_editor_totree": "toTree()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, addElement(), finish(), finishContext(), sm(), balance()]
- "components_code_editor_updateattrs": "updateAttrs()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, constructor(), measure(), setState(), update(), facet()]
- "components_code_editor_ut": "ut()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, eS(), hu(), IX(), Jo(), Ko()]
- "components_code_editor_vy": "vY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, advance(), ih(), peek(), qY(), resolveInner()]
- "components_code_editor_wh": "wh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, Lg(), Ag(), kh(), Ls(), vh()]
- "components_code_editor_yo": "yo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, fd(), dispatch(), facet(), flushIOSKey(), ni()]
- "components_markdown_editor_da": "da()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ca(), fa(), Ln(), Vt(), wn()]
- "components_markdown_editor_df": "df()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L7 | neighbors=[markdown-editor.js, ce(), er(), gl(), ot(), ui()]
- "components_markdown_editor_er": "er()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, df(), Dn(), fo(), mo(), sf()]
- "components_markdown_editor_fa": "fa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, da(), ef(), ht(), Ln(), va()]
- "components_markdown_editor_gl": "gl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, df(), ff(), ce(), he(), nd()]
- "components_markdown_editor_go": "go()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Ae(), Me(), ne(), wi(), Xe()]
- "components_markdown_editor_jf": "jf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Ae(), ce(), ge(), Ic(), je()]
- "components_markdown_editor_jo": "jo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L11 | neighbors=[markdown-editor.js, jf(), ce(), ne(), Pe(), Qr()]
- "components_markdown_editor_k": "K()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, ge(), j(), b(), w(), re()]
- "components_markdown_editor_ki": "ki()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, kl(), tn(), ye(), _l(), on()]
- "components_markdown_editor_lr": "lr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, f(), jl(), yn(), md(), uf()]
- "components_markdown_editor_ml": "ml()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, el(), ce(), it(), xi(), xr()]
- "components_markdown_editor_oo": "oo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, $c(), Fc(), ka(), ii(), oi()]
- "components_markdown_editor_vr": "Vr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, as(), to(), vd(), j(), V()]
- "components_markdown_editor_z": "Z()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Hc(), te(), Xn(), ce(), K()]
- "components_markdown_editor_za": "za()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, rf(), si(), ce(), Jr(), mr()]
- "components_rich_editor_au": "au()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, domFromPos(), Lt(), pr(), qs(), replace()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-020.json

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
