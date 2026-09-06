# Node Description Batch 22 of 212

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
For an entity node (any other kind — e.g. a person, place, event, object),
describe what the entity is and its role, grounded in its type, its
relations (neighbors) and the provided citations/evidence — e.g.
"Lady Carfax, a wealthy heiress who disappears en route to Lausanne.".
Ground entity descriptions in the citations/evidence when present; do not
speculate beyond the context, so a node with no supporting context may be
left out of the reply.
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "components_rich_editor_bk": "bk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, at(), kn(), ro(), Xn(), xp()]
- "components_rich_editor_bl": "bl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, forEach(), near(), resolve(), setSelection(), $g()]
- "components_rich_editor_blockrange": "blockRange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, end(), node(), Cd(), kd(), sd()]
- "components_rich_editor_cc": "Cc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, child(), Mc(), NS(), sameMarkup(), Se()]
- "components_rich_editor_co": "co()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, eq(), Kt(), ps(), qt(), tr()]
- "components_rich_editor_createview": "createView()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, dispatchTransaction(), injectCSS(), prependClass(), reconfigure(), transformPastedHTML()]
- "components_rich_editor_dm": "Dm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Dc(), before(), endOfTextblock(), index(), indexAfter()]
- "components_rich_editor_ek": "Ek()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, at(), kn(), ro(), Xn(), xp()]
- "components_rich_editor_endoftextblock": "endOfTextblock()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, $d(), dd(), Dm(), Jg(), pd()]
- "components_rich_editor_findfittable": "findFittable()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, compatibleContent(), fillBefore(), findWrapping(), from(), ks()]
- "components_rich_editor_fromarray": "fromArray()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, cn(), from(), sameMarkup(), slice(), withText()]
- "components_rich_editor_gn": "gn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L131 | neighbors=[rich-editor.js, dx(), Ne(), pp(), sx(), Xn()]
- "components_rich_editor_gt": "Gt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, after(), before(), canReplace(), index(), maybeChild()]
- "components_rich_editor_hd": "hd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, create(), fr(), hasFocus(), mu(), scrollIntoView()]
- "components_rich_editor_ig": "ig()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, create(), from(), nodeAt(), replaceWith(), step()]
- "components_rich_editor_im": "Im()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, ct(), e(), eat(), err(), pc()]
- "components_rich_editor_iy": "iy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, cl(), domSelectionRange(), focus(), gr(), gu()]
- "components_rich_editor_jo": "jo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), Ho(), join(), Ke(), qu()]
- "components_rich_editor_kl": "kl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, fromSchema(), ku(), serializeFragment(), setAttribute(), someProp()]
- "components_rich_editor_lr": "lr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, close(), closeFrontierNode(), append(), copy(), replaceChild()]
- "components_rich_editor_ok": "ok()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, apply(), fromReplace(), forEach(), ro(), We()]
- "components_rich_editor_pt": "pt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, canReplace(), cutByIndex(), index(), indexAfter(), node()]
- "components_rich_editor_py": "py()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, hy(), join(), ku(), querySelector(), querySelectorAll()]
- "components_rich_editor_rowselection": "rowSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, map(), findCell(), get(), node(), resolve()]
- "components_rich_editor_sc": "Sc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, findDiffStart(), child(), end(), Mc(), sameMarkup()]
- "components_rich_editor_scrolltoselection": "scrollToSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, flush(), Ad(), coordsAtPos(), domAfterPos(), domSelectionRange()]
- "components_rich_editor_setattribute": "setAttribute()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, constructor(), Gg(), kl(), lo(), of()]
- "components_rich_editor_stop": "stop()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), done(), focus(), disconnectSelection(), updateStateInner()]
- "components_rich_editor_synctomarks": "syncToMarks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, create(), destroyBetween(), destroyRest(), isLocked(), matchesMark()]
- "components_rich_editor_text": "text()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, addTextNode(), fromJSON(), ignoreFallback(), insertText(), Sl()]
- "components_rich_editor_validcontent": "validContent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, checkContent(), ig(), Oe(), qt(), allowsMarks()]
- "components_rich_editor_vl": "vl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, ay(), my(), ty(), dn(), find()]
- "components_rich_editor_vy": "vy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, my(), before(), create(), isSelectable(), node()]
- "components_rich_editor_yc": "yc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, constructor(), enterInner(), append(), copy(), fillBefore()]
- "components_rich_editor_ys": "Ys()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, xy(), end(), indexAfter(), maybeChild(), node()]
- "components_select_at": "At()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Dt(), ye(), fi(), gn(), Si()]
- "components_select_ft": "Ft()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn(), ci(), Dt(), lt(), yt()]
- "components_select_updateselecteddisplay": "updateSelectedDisplay()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, render(), selectOption(), addBadgesForSelectedOptions(), addSingleSelectionDisplay(), deferPositionDropdown()]
- "components_select_vn": "vn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ct(), Dt(), Kt(), lt(), Tt()]
- "composer_unprefixed_naming": "Composer Unprefixed / GitHub module- Prefix" | kind=entity | source=modules/real-estate-listings/README.md | neighbors=[Real Estate Listings API, Real Estate Listings Filament, Real Estate Listings Livewire, Real Estate Listings, Real Estate Matching, Real Estate Media and Documents API]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-021.json

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
