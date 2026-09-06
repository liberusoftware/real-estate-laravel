# Node Description Batch 66 of 212

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

- "components_code_editor_md": "md()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), of(), OS()]
- "components_code_editor_measuretextsize": "measureTextSize()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, measure(), blockTiles(), ignore()]
- "components_code_editor_mf": "Mf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, bidiSpans(), facet(), join()]
- "components_code_editor_mg": "Mg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L3 | neighbors=[code-editor.js, IY(), MY(), of()]
- "components_code_editor_mo": "Mo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), facet(), update()]
- "components_code_editor_mouseleave": "mouseleave()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dispatch(), of(), watchTooltipLeave()]
- "components_code_editor_mousemove": "mousemove()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dispatch(), of(), posAtCoords()]
- "components_code_editor_movebase": "moveBase()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, Blockquote(), countIndent(), [y.Blockquote]()]
- "components_code_editor_na": "na()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, eq(), oa(), Rh()]
- "components_code_editor_nextinner": "nextInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L3 | neighbors=[code-editor.js, next(), pop(), slice()]
- "components_code_editor_nextmatch": "nextMatch()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, nextOverlapping(), pi(), Qi()]
- "components_code_editor_nextstates": "nextStates()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, stateSlot(), Wt(), recoverByInsert()]
- "components_code_editor_o": "O$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, _i(), facet(), ot()]
- "components_code_editor_oa": "oa()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, eq(), na(), Rh()]
- "components_code_editor_onscroll": "onScroll()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, flush(), onScrollChanged(), requestMeasure()]
- "components_code_editor_onscrollchanged": "onScrollChanged()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, onScroll(), measure(), runHandlers()]
- "components_code_editor_p0": "p0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, B(), field(), of()]
- "components_code_editor_parsedialect": "parseDialect()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, configure(), constructor(), split()]
- "components_code_editor_pf": "Pf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, Ci(), domAtPos(), pS()]
- "components_code_editor_pn": "pn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsAtPos(), coordsIn(), coordsInWidget()]
- "components_code_editor_posandsideatcoords": "posAndSideAtCoords()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, OS(), ja(), readMeasured()]
- "components_code_editor_posbefore": "posBefore()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, posAfter(), posAtStart(), readMutation()]
- "components_code_editor_q0": "Q0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, facet(), lineAt(), touchesRange()]
- "components_code_editor_q1": "Q1()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, eS(), prop(), sliceDoc()]
- "components_code_editor_qc": "qc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, OrderedList(), ct(), skipSpace()]
- "components_code_editor_qo": "Qo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), wP(), Xf()]
- "components_code_editor_qp": "QP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ka(), iterChangedRanges(), Lf()]
- "components_code_editor_reducecontext": "reduceContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, reduce(), reset(), updateContext()]
- "components_code_editor_removeactive": "removeActive()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, forward(), next(), Er()]
- "components_code_editor_resolvemarkers": "resolveMarkers()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, parseInline(), elt(), takeContent()]
- "components_code_editor_resolveoffset": "resolveOffset()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, acceptToken(), peek(), token()]
- "components_code_editor_resolvestack": "resolveStack()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, lX(), vX(), XX()]
- "components_code_editor_revertpending": "revertPending()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, applyEdits(), sliceString(), toContextPos()]
- "components_code_editor_rg": "Rg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, jg(), advance(), Zg()]
- "components_code_editor_ri": "ri()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, boundChange(), comparePoint(), compareRange()]
- "components_code_editor_rt": "RT()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), slice(), sort()]
- "components_code_editor_scantext": "scanText()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, scan(), ue(), scanTile()]
- "components_code_editor_scrollsnapshot": "scrollSnapshot()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, cursor(), of(), scrollAnchorAt()]
- "components_code_editor_scrub": "scrub()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, advance(), nextLine(), slice()]
- "components_code_editor_selection": "selection()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, f1(), Iu(), ol()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-065.json

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
