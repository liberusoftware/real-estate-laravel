# Node Description Batch 17 of 212

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

- "components_code_editor_getblockpos": "getBlockPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addBlockWidget(), addLine(), addLineStart(), append(), eq()]
- "components_code_editor_getdeco": "getDeco()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), charCategorizer(), facet(), hT(), lineBlockAt()]
- "components_code_editor_goto": "goto()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, eq(), Ds(), gotoInner(), iter(), Rh()]
- "components_code_editor_ignore": "ignore()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, focus(), clear(), start(), stop(), measureTextSize()]
- "components_code_editor_iterate": "iterate()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, AQ(), eg(), cursor(), firstChild(), nextSibling()]
- "components_code_editor_ja": "ja()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, gP(), coordsAt(), elementAtHeight(), lineAt(), scanTile()]
- "components_code_editor_readmeasured": "readMeasured()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, coordsAtPos(), coordsForChar(), elementAtHeight(), lineBlockAtHeight(), posAndSideAtCoords()]
- "components_code_editor_run": "run()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addComposition(), clear(), emit(), endLine(), forward()]
- "components_code_editor_skipspace": "skipSpace()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, FencedCode(), forwardInner(), gP(), Jx(), LinkEnd()]
- "components_code_editor_ue": "ue()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, cS(), Hr(), Hs(), pP(), scanText()]
- "components_code_editor_updatedeco": "updateDeco()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), update(), computeBlockGapDeco(), createDeco(), facet()]
- "components_code_editor_vt": "Vt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ef(), EP(), fP(), Gf(), posFromDOM()]
- "components_code_editor_writeelements": "writeElements()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, addLeafElement(), ATXHeading(), FencedCode(), finishLeaf(), HTMLBlock()]
- "components_markdown_editor_bf": "bf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ar(), Bt(), Cn(), ht(), mr()]
- "components_markdown_editor_c": "$c()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, b(), Ea(), La(), M(), oo()]
- "components_markdown_editor_ci": "ci()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ar(), Ha(), ho(), T(), ui()]
- "components_markdown_editor_cn": "Cn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, bf(), ce(), O(), tn(), V()]
- "components_markdown_editor_dr": "dr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ge(), kt(), ol(), Rr(), V()]
- "components_markdown_editor_e": "_e()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ca(), D(), he(), w(), ge()]
- "components_markdown_editor_eo": "Eo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, An(), Dn(), hi(), il(), rn()]
- "components_markdown_editor_fo": "fo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Ae(), ce(), dl(), er(), ht()]
- "components_markdown_editor_jr": "Jr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, _a(), hi(), V(), y(), mr()]
- "components_markdown_editor_ke": "ke()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, Be(), ge(), de(), H(), te()]
- "components_markdown_editor_me": "Me()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, fe(), go(), ge(), R(), V()]
- "components_markdown_editor_q": "q()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, f(), ge(), j(), D(), _e()]
- "components_markdown_editor_rn": "rn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Eo(), f(), gd(), il(), pd()]
- "components_markdown_editor_so": "so()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, bf(), gd(), pl(), Ae(), it()]
- "components_markdown_editor_t": "T()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ci(), de(), ge(), R(), se()]
- "components_markdown_editor_tr": "tr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ga(), jo(), ka(), lf(), Oa()]
- "components_markdown_editor_ul": "ul()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, md(), Ae(), An(), Eo(), kt()]
- "components_markdown_editor_xr": "xr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, cl(), io(), Mf(), ml(), si()]
- "components_markdown_editor_ze": "ze()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, D(), ge(), he(), _l(), lf()]
- "components_rich_editor_addtoset": "addToSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addStoredMark(), eq(), excludes(), slice(), apply()]
- "components_rich_editor_addtransform": "addTransform()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, append(), aw(), get(), invert(), merge()]
- "components_rich_editor_between": "between()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, findFrom(), near(), Dc(), getBookmark(), map()]
- "components_rich_editor_cl": "cl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, domSelection(), extend(), ly(), setCurSelection(), someProp()]
- "components_rich_editor_close": "close()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, closeFrontierNode(), fillBefore(), findCloseLevel(), index(), lr()]
- "components_rich_editor_cn": "cn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, append(), check(), fromArray(), fromSchema(), parse()]
- "components_rich_editor_colcount": "colCount()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, gS(), isRowSelection(), jp(), Ms(), qs()]
- "components_rich_editor_compatiblecontent": "compatibleContent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, canAppend(), compatible(), findFittable(), lg(), Nc()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-016.json

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
