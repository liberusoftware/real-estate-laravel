# Node Description Batch 28 of 212

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

- "components_rich_editor_dn": "dn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addGlobalAttributes(), $l(), markViews(), nodeViews(), Po()]
- "components_rich_editor_domfrompos": "domFromPos()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, au(), domAfterPos(), domAtPos(), pd(), ry()]
- "components_rich_editor_enterinner": "enterInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, enter(), closeExtra(), matchType(), yc(), findPlace()]
- "components_rich_editor_err": "err()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Bm(), Im(), $m(), parse(), pc()]
- "components_rich_editor_findcloselevel": "findCloseLevel()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, close(), after(), end(), resolve(), Ss()]
- "components_rich_editor_findplace": "findPlace()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, enter(), enterInner(), findWrapping(), sync(), ignoreFallback()]
- "components_rich_editor_fy": "fy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, contentMatchAt(), forEach(), from(), index(), node()]
- "components_rich_editor_has": "has()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L131 | neighbors=[rich-editor.js, AS(), Ck(), findNodeMatch(), ignoreSelectionChange(), tf()]
- "components_rich_editor_hasrequiredattrs": "hasRequiredAttrs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, computeWrapping(), defaultType(), gy(), Hs(), $m()]
- "components_rich_editor_ie": "Ie()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, canReplace(), index(), resolve(), vg(), wd()]
- "components_rich_editor_ignoreselectionchange": "ignoreSelectionChange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, flush(), add(), has(), ignoreMutation(), nearestDesc()]
- "components_rich_editor_ik": "ik()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, $a(), gp(), join(), rk(), slice()]
- "components_rich_editor_isinset": "isInSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, invert(), eq(), l0(), marks(), marksAcross()]
- "components_rich_editor_isrowselection": "isRowSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, content(), colCount(), get(), node(), start()]
- "components_rich_editor_js": "js()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, getState(), nodeAt(), nodesBetween(), scrollIntoView(), setBlockType()]
- "components_rich_editor_lg": "lg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, gc(), allowsMarks(), child(), compatibleContent(), contentMatchAt()]
- "components_rich_editor_lm": "Lm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Dm(), Bm(), eat(), forEachCell(), Im()]
- "components_rich_editor_my": "my()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, querySelectorAll(), replaceChild(), someProp(), vl(), vy()]
- "components_rich_editor_nd": "nd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, forEach(), near(), resolve(), setSelection(), replace()]
- "components_rich_editor_ng": "ng()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, create(), from(), kr(), matchFragment(), step()]
- "components_rich_editor_nn": "Nn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, atEnd(), atStart(), findFrom(), child(), create()]
- "components_rich_editor_no": "No()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, create(), forEach(), Nu(), Ru(), valid()]
- "components_rich_editor_openfrontiernode": "openFrontierNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, close(), create(), from(), lr(), matchType()]
- "components_rich_editor_oy": "oy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, Ln(), cl(), domSelectionRange(), gr(), gu()]
- "components_rich_editor_p": "P()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, extendNodeSchema(), options(), cellsInRect(), nodeAt(), Po()]
- "components_rich_editor_posfromdom": "posFromDOM()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, $g(), posAtDOM(), getDesc(), localPosFromDOM(), vg()]
- "components_rich_editor_rebased": "rebased()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, dw(), append(), compress(), emptyItemCount(), forEach()]
- "components_rich_editor_rectbetween": "rectBetween()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, constructor(), content(), ct(), forEachCell(), Hs()]
- "components_rich_editor_replaceselectionwith": "replaceSelectionWith()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, insertText(), mark(), marks(), marksAcross(), replaceWith()]
- "components_rich_editor_rw": "rw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, isSelectable(), nodeAt(), posAtCoords(), resolve(), setSelection()]
- "components_rich_editor_su": "su()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, $g(), before(), create(), isSelectable(), node()]
- "components_rich_editor_ti": "ti()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, after(), before(), endOfTextblock(), findGapCursorFrom(), resolve()]
- "components_rich_editor_updatenextnode": "updateNextNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, destroyBetween(), get(), isLocked(), recreateWrapper(), update()]
- "components_rich_editor_vo": "vo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, iy(), oy(), before(), e(), node()]
- "components_rich_editor_wf": "Wf()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, before(), create(), _f(), node(), resolve()]
- "components_rich_editor_xd": "xd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, create(), end(), node(), setSelection(), someProp()]
- "components_rich_editor_xi": "Xi()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, hp(), lk(), Sp(), Ve(), We()]
- "components_rich_editor_xn": "Xn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, bk(), Ek(), gn(), lk(), pp()]
- "components_rich_editor_yn": "Yn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Dk(), Ek(), kn(), at(), bp()]
- "components_rich_editor_zr": "zr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L20 | neighbors=[rich-editor.js, tokenize(), De(), findIndex(), join(), slice()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-027.json

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
