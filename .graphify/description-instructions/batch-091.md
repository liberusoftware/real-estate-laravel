# Node Description Batch 92 of 212

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

- "components_code_editor_gs": "GS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, kf(), T0()]
- "components_code_editor_gt": "gT()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, sliceDoc(), pi()]
- "components_code_editor_gu": "gu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, changes(), mapPos()]
- "components_code_editor_hardbreak": "HardBreak()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), char()]
- "components_code_editor_heightforgap": "heightForGap()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, lineAt(), updateHeight()]
- "components_code_editor_hi": "Hi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsIn(), ln()]
- "components_code_editor_hm": "hm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, advance(), Jx()]
- "components_code_editor_hp": "hP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), facet()]
- "components_code_editor_ht": "hT()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, getDeco(), sliceDoc()]
- "components_code_editor_htmltag": "HTMLTag()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), slice()]
- "components_code_editor_ignoreevent": "ignoreEvent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, jP(), onSelectionChange()]
- "components_code_editor_image": "Image()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), char()]
- "components_code_editor_inlinecode": "InlineCode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append(), char()]
- "components_code_editor_invert": "invert()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, fromTransaction(), slice()]
- "components_code_editor_isactiveat": "isActiveAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, au(), prop()]
- "components_code_editor_isdone": "isDone()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, scheduleWork(), work()]
- "components_code_editor_iter": "iter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, from(), goto()]
- "components_code_editor_iterlines": "iterLines()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, iterRange(), line()]
- "components_code_editor_j0": "j0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, QQ(), PQ()]
- "components_code_editor_jg": "jg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, advance(), Rg()]
- "components_code_editor_jq": "JQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L18 | neighbors=[code-editor.js, getChild(), read()]
- "components_code_editor_jt": "JT()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, j$(), parse()]
- "components_code_editor_kh": "kh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, Ls(), wh()]
- "components_code_editor_kn": "Kn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, field(), pop()]
- "components_code_editor_lf": "Lf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, QP(), sP()]
- "components_code_editor_linehaswidget": "lineHasWidget()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, fd(), resolveBlock()]
- "components_code_editor_lineinner": "lineInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, line(), lineAt()]
- "components_code_editor_lk": "Lk()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, Ac(), peek()]
- "components_code_editor_lo": "LO()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, mh(), vi()]
- "components_code_editor_mainblock": "mainBlock()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, blockAt(), lineAt()]
- "components_code_editor_matchall": "matchAll()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, pi(), Qi()]
- "components_code_editor_matchbefore": "matchBefore()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, lineAt(), slice()]
- "components_code_editor_matches": "matches()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, prop(), reuseFragment()]
- "components_code_editor_maybenext": "maybeNext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), next()]
- "components_code_editor_mh": "mh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, advance(), LO()]
- "components_code_editor_mn": "Mn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, between(), field()]
- "components_code_editor_movebychar": "moveByChar()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, sf(), ua()]
- "components_code_editor_movebygroup": "moveByGroup()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, sf(), ua()]
- "components_code_editor_moverangei": "moveRangeI()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L32 | neighbors=[code-editor.js, nextLine(), reuseFragment()]
- "components_code_editor_movetolineboundary": "moveToLineBoundary()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, aO(), jP()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-091.json

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
