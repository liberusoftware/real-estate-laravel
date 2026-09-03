# Node Description Batch 27 of 212

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

- "components_code_editor_zh": "Zh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, compare(), eq(), add(), get(), mapPos()]
- "components_code_editor_zp": "zP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, of(), charCategorizer(), cursor(), lineAt(), slice()]
- "components_code_editor_zq": "zQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, add(), cursor(), firstChild(), get(), iterate()]
- "components_file_upload_q": "q()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, De(), le(), pe(), qe(), Wt()]
- "components_file_upload_rt": "rt()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, Ea(), le(), nm(), ca(), xt()]
- "components_file_upload_yt": "yt()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, De(), le(), pe(), q(), rt()]
- "components_markdown_editor_at": "at()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, H(), V(), y(), ga(), ro()]
- "components_markdown_editor_b": "b()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L26 | neighbors=[markdown-editor.js, S(), $c(), K(), _l(), pi()]
- "components_markdown_editor_bt": "Bt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, bf(), hi(), Oc(), Sn(), w()]
- "components_markdown_editor_cd": "cd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, Ie(), kt(), Ut(), wo(), Yt()]
- "components_markdown_editor_cl": "cl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, it(), je(), ne(), xr(), ye()]
- "components_markdown_editor_dn": "Dn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, co(), er(), Eo(), il(), rn()]
- "components_markdown_editor_el": "el()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, An(), Do(), io(), ml(), ye()]
- "components_markdown_editor_en": "En()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, it(), Ra(), es(), gd(), pd()]
- "components_markdown_editor_fn": "Fn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, An(), co(), Ee(), Nn(), pf()]
- "components_markdown_editor_fr": "Fr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Kc(), Gt(), mt(), nt(), Tt()]
- "components_markdown_editor_gi": "gi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L7 | neighbors=[markdown-editor.js, Ae(), ar(), bc(), P(), ui()]
- "components_markdown_editor_hi": "hi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L7 | neighbors=[markdown-editor.js, Eo(), Bt(), Jr(), il(), rn()]
- "components_markdown_editor_ll": "ll()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ef(), In(), j(), ne(), y()]
- "components_markdown_editor_ln": "Ln()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, da(), fa(), y(), ye(), uo()]
- "components_markdown_editor_ls": "ls()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L19 | neighbors=[markdown-editor.js, Ae(), Ba(), Na(), Pe(), po()]
- "components_markdown_editor_mi": "mi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, gf(), lo(), ne(), xd(), Mn()]
- "components_markdown_editor_pl": "pl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, hl(), qo(), so(), xo(), Tt()]
- "components_markdown_editor_pt": "Pt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, fd(), ls(), ne(), y(), vf()]
- "components_markdown_editor_ro": "ro()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, at(), no(), pa(), va(), wf()]
- "components_markdown_editor_rt": "Rt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, kl(), pf(), de(), ge(), H()]
- "components_markdown_editor_va": "va()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, fa(), at(), ma(), no(), pa()]
- "components_rich_editor_a": "$a()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, $h(), Wi(), _x(), ik(), jx()]
- "components_rich_editor_addall": "addAll()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addDOM(), findAtPoint(), addElement(), addElementByRule(), parse()]
- "components_rich_editor_allowsmarks": "allowsMarks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, allowsMarkType(), canReplace(), canReplaceWith(), dg(), lg()]
- "components_rich_editor_allowsmarktype": "allowsMarkType()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, allowedMarks(), allowsMarks(), insertNode(), l0(), Ts()]
- "components_rich_editor_applytransaction": "applyTransaction()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, apply(), applyInner(), filterTransaction(), setMeta(), slice()]
- "components_rich_editor_bm": "Bm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Dc(), eat(), err(), Pm(), replace()]
- "components_rich_editor_bo": "Bo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, atEnd(), atStart(), create(), tt(), constructor()]
- "components_rich_editor_cm": "cm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, after(), before(), delete(), e(), node()]
- "components_rich_editor_colselection": "colSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, findCell(), get(), node(), resolve(), start()]
- "components_rich_editor_cs": "Cs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, apply(), indexAfter(), maybeChild(), node(), resolve()]
- "components_rich_editor_de": "De()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Ck(), split(), fn(), Gh(), Xh()]
- "components_rich_editor_destroybetween": "destroyBetween()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, destroy(), destroyRest(), findNodeMatch(), syncToMarks(), updateNextNode()]
- "components_rich_editor_dl": "dl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, append(), contentMatchAt(), copy(), fillBefore(), replaceChild()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-026.json

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
