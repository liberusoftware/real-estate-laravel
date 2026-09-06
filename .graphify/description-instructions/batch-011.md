# Node Description Batch 12 of 212

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

- "components_code_editor_mount": "mount()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L6 | neighbors=[code-editor.js, constructor(), createHostedView(), createTooltip(), bf(), getRules()]
- "components_code_editor_requestmeasure": "requestMeasure()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, addInfoPane(), constructor(), docViewUpdate(), flush(), maybeMeasure()]
- "components_code_editor_runrecovery": "runRecovery()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), advanceFully(), forceReduce(), getName(), mQ()]
- "components_code_editor_scrollintoview": "scrollIntoView()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, _i(), measure(), coordsAt(), cP(), cursor()]
- "components_code_editor_se": "Se()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, c0(), constructor(), l0(), match(), ms()]
- "components_code_editor_spans": "spans()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, build(), computeVisibleRanges(), Ds(), emit(), of()]
- "components_code_editor_stateslot": "stateSlot()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, addActions(), advanceStack(), allActions(), canShift(), deadEnd()]
- "components_code_editor_work": "work()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, apply(), init(), checkAsyncSchedule(), dispatch(), field()]
- "components_markdown_editor_ca": "ca()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, $c(), da(), _e(), ei(), G()]
- "components_markdown_editor_ga": "ga()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ae(), at(), ci(), je(), no()]
- "components_markdown_editor_il": "il()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Eo(), co(), Dn(), fo(), gi()]
- "components_markdown_editor_pd": "pd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, En(), es(), In(), n(), ne()]
- "components_markdown_editor_qr": "Qr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ga(), jo(), lf(), Oa(), bo()]
- "components_markdown_editor_re": "re()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, ce(), ge(), he(), j(), D()]
- "components_markdown_editor_s": "S()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L26 | neighbors=[markdown-editor.js, b(), $c(), D(), G(), j()]
- "components_markdown_editor_uf": "uf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, f(), je(), ki(), kt(), _l()]
- "components_markdown_editor_xt": "Xt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, lf(), O(), pf(), sf(), vd()]
- "components_markdown_editor_yt": "Yt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, cd(), Do(), of(), oo(), sl()]
- "components_rich_editor_add": "add()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addInner(), create(), AS(), constructor(), Gg()]
- "components_rich_editor_addelement": "addElement()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L3 | neighbors=[rich-editor.js, addDOM(), addAll(), addElementByRule(), findInside(), ignoreFallback()]
- "components_rich_editor_dc": "Dc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Bm(), between(), Dm(), eat(), gS()]
- "components_rich_editor_foreachcell": "forEachCell()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, cellsInRect(), e(), get(), node(), nodeAt()]
- "components_rich_editor_gp": "gp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Dk(), get(), nextCell(), node(), resolve()]
- "components_rich_editor_gs": "gS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Dc(), colCount(), create(), get(), getState()]
- "components_rich_editor_maybechild": "maybeChild()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), childAfter(), Cs(), Gt(), marks()]
- "components_rich_editor_oc": "Oc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ec(), co(), createAndFill(), index(), Kt()]
- "components_rich_editor_qg": "qg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, Jg(), child(), cu(), cut(), domSelection()]
- "components_rich_editor_replacewith": "replaceWith()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Ac(), ig(), insert(), replaceSelectionWith(), deleteRange()]
- "components_rich_editor_setmeta": "setMeta()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, applyTransaction(), by(), Fm(), fw(), js()]
- "components_rich_editor_updatechildren": "updateChildren()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, addNode(), dd(), addTextblockHacks(), destroyRest(), du()]
- "components_rich_editor_ve": "Ve()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, gp(), kn(), kp(), lk(), ro()]
- "components_rich_editor_wl": "wl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, flush(), jy(), domSelectionRange(), isSelectable(), nearestDesc()]
- "components_rich_editor_wp": "wp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, gp(), kn(), colCount(), createAndFill(), insert()]
- "components_rich_editor_xl": "xl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, by(), Gd(), wl(), between(), canReplaceWith()]
- "components_rich_editor_ye": "Ye()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, at(), bk(), Ek(), Fk(), gp()]
- "components_rich_editor_yr": "yr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Ml(), deleteSelection(), eq(), forceFlush(), node()]
- "components_rich_editor_zm": "zm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, parse(), after(), append(), before(), copy()]
- "components_select_closedropdown": "closeDropdown()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, getVisibleOptions(), hideLoadingState(), hideMaxItemsMessage(), destroy(), disable()]
- "components_select_it": "it()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ae(), gi(), gn(), re(), U()]
- "components_select_si": "Si()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ae(), At(), ct(), hi(), it()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-011.json

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
