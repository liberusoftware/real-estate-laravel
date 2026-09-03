# Node Description Batch 46 of 212

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

- "components_code_editor_ho": "hO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, between(), init(), moveSelection(), update()]
- "components_code_editor_hu": "hu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), facet(), ut(), update()]
- "components_code_editor_i1": "i1()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, changes(), lineAt(), ol(), slice()]
- "components_code_editor_ih": "ih()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, cursor(), moveTo(), Lg(), vY()]
- "components_code_editor_inlinedomnearpos": "inlineDOMNearPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, blockTiles(), domAtPos(), domIn(), updateSelection()]
- "components_code_editor_iscomposite": "isComposite()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, advance(), hd(), posFromDOM(), scanTile()]
- "components_code_editor_isuserevent": "isUserEvent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, annotation(), slice(), L$(), update()]
- "components_code_editor_iterrange": "iterRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, constructor(), iterLines(), IX(), Xf()]
- "components_code_editor_ix": "IX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, iterRange(), resolveInner(), sliceDoc(), ut()]
- "components_code_editor_j": "j$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, build(), JT(), of(), setSelected()]
- "components_code_editor_kf": "kf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, GS(), lineAt(), posAtCoords(), Ye()]
- "components_code_editor_lg": "Lg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, ih(), wh(), zr(), Xh()]
- "components_code_editor_li": "Li()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, cd(), between(), lP(), ua()]
- "components_code_editor_linebreak": "lineBreak()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, facet(), readNode(), readRange(), readTextNode()]
- "components_code_editor_linkend": "LinkEnd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, Jx(), skipSpace(), slice(), takeContent()]
- "components_code_editor_ln": "ln()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, facet(), Hi(), vX(), yP()]
- "components_code_editor_ls": "Ls()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, compare(), kh(), vh(), wh()]
- "components_code_editor_lu": "lu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, between(), domEventHandlers(), of(), update()]
- "components_code_editor_map": "map()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, create(), Fs(), mapPos(), touchesRange()]
- "components_code_editor_maybemeasure": "maybeMeasure()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), requestMeasure(), scroll(), update()]
- "components_code_editor_movebasecolumn": "moveBaseColumn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, BulletList(), findColumn(), OrderedList(), [y.ListItem]()]
- "components_code_editor_moveselection": "moveSelection()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, dispatch(), field(), hO(), of()]
- "components_code_editor_mp": "mP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ka(), cursor(), get(), iterate()]
- "components_code_editor_ms": "ms()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, De(), Se(), slice(), sliceString()]
- "components_code_editor_nc": "Nc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, baseIndentFor(), childBefore(), is(), lineIndent()]
- "components_code_editor_nextfragment": "nextFragment()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), moveTo(), pop(), nodeAt()]
- "components_code_editor_no": "NO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, applyTransaction(), changeByRange(), Hg(), ta()]
- "components_code_editor_nodeat": "nodeAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advanceStack(), nextFragment(), pop(), prop()]
- "components_code_editor_ny": "nY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, eg(), resolveInner(), sliceDoc(), W()]
- "components_code_editor_orderedlist": "OrderedList()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), moveBaseColumn(), qc(), startContext()]
- "components_code_editor_ou": "Ou()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, lX(), next(), applyChanges(), slice()]
- "components_code_editor_p": "_P()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, create(), lineAt(), sliceString(), update()]
- "components_code_editor_passprop": "passProp()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, getCoords(), offset(), overlap(), resize()]
- "components_code_editor_pc": "Pc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, cX(), Ti(), tP(), yP()]
- "components_code_editor_preserve": "preserve()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, advance(), kP(), skip(), run()]
- "components_code_editor_prevlineend": "prevLineEnd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, addNode(), FencedCode(), HTMLBlock(), nextLine()]
- "components_code_editor_prevmatchinrange": "prevMatchInRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, prevMatch(), nextOverlapping(), pi(), Qi()]
- "components_code_editor_processrecords": "processRecords()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, clear(), pendingRecords(), readMutation(), readChange()]
- "components_code_editor_ps": "pS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, addEventListener(), Pf(), split(), readSelectionRange()]
- "components_code_editor_pushstate": "pushState()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, recoverByInsert(), reduce(), shift(), useNode()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-045.json

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
