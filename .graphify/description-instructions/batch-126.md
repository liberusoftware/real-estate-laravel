# Node Description Batch 127 of 212

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

- "components_code_editor_kq": "kQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, Jl()]
- "components_code_editor_kr": "kr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, configure()]
- "components_code_editor_ku": "Ku()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, pt()]
- "components_code_editor_ky": "kY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, advance()]
- "components_code_editor_l1": "l1()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, addSelection()]
- "components_code_editor_leaf": "leaf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, parentType()]
- "components_code_editor_length": "length()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, chunkEnd()]
- "components_code_editor_link": "Link()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, append()]
- "components_code_editor_ll": "ll()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, changeByRange()]
- "components_code_editor_mark": "mark()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, init()]
- "components_code_editor_markdirty": "markDirty()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, readMutation()]
- "components_code_editor_marker": "marker()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, km()]
- "components_code_editor_mc": "Mc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, tY()]
- "components_code_editor_measureinfo": "measureInfo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, facet()]
- "components_code_editor_measurevisiblelineheights": "measureVisibleLineHeights()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, measure()]
- "components_code_editor_mt": "mT()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, Qi()]
- "components_code_editor_mu": "mu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, of()]
- "components_code_editor_mustrefreshforheights": "mustRefreshForHeights()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure()]
- "components_code_editor_mustrefreshforwrapping": "mustRefreshForWrapping()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure()]
- "components_code_editor_mx": "mX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, highlightRange()]
- "components_code_editor_newdoc": "newDoc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, apply()]
- "components_code_editor_nextchunk": "nextChunk()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, update()]
- "components_code_editor_nextsignificantparent": "nextSignificantParent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, parent()]
- "components_code_editor_nextstage": "nextStage()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L31 | neighbors=[code-editor.js, advance()]
- "components_code_editor_nf": "nf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, endLine()]
- "components_code_editor_nh": "Nh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, B()]
- "components_code_editor_np": "NP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, move()]
- "components_code_editor_nq": "nQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, sQ()]
- "components_code_editor_nu": "Nu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, pt()]
- "components_code_editor_offset": "offset()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, passProp()]
- "components_code_editor_onprint": "onPrint()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure()]
- "components_code_editor_opentag_closetag_selfclosingtag": "\"OpenTag CloseTag SelfClosingTag\"()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, column()]
- "components_code_editor_or": "or()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, define()]
- "components_code_editor_overlap": "overlap()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, passProp()]
- "components_code_editor_overridedomtext": "overrideDOMText()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, slice()]
- "components_code_editor_ow": "Ow()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, slice()]
- "components_code_editor_owns": "owns()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, nearest()]
- "components_code_editor_parenttype": "parentType()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L32 | neighbors=[code-editor.js, leaf()]
- "components_code_editor_pendingrecords": "pendingRecords()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, processRecords()]
- "components_code_editor_pg": "pg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, Hg()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-126.json

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
