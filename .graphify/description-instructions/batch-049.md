# Node Description Batch 50 of 212

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

- "components_rich_editor_iscolselection": "isColSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, content(), index(), node(), map()]
- "components_rich_editor_ju": "Ju()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, find(), nodesBetween(), re(), qo()]
- "components_rich_editor_k": "_k()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, from(), join(), slice(), Yl()]
- "components_rich_editor_kd": "kd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, blockRange(), En(), scrollIntoView(), wrap()]
- "components_rich_editor_ks": "ks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, dropNode(), findFittable(), node(), openMore()]
- "components_rich_editor_locals": "locals()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, localsInner(), slice(), Tl(), qg()]
- "components_rich_editor_m": "$m()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, err(), hasRequiredAttrs(), join(), parse()]
- "components_rich_editor_mark": "mark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, insertNode(), create(), placeNodes(), replaceSelectionWith()]
- "components_rich_editor_mt": "mt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, Ad(), forEach(), join(), replace()]
- "components_rich_editor_mx": "mx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, Hi(), accepts(), ga(), slice()]
- "components_rich_editor_n0": "n0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, fromSchema(), parse(), toJSON(), Uo()]
- "components_rich_editor_onselectionchange": "onSelectionChange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, domSelectionRange(), flush(), flushSoon(), wt()]
- "components_rich_editor_parent": "parent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addAttributes(), node(), resolve(), start()]
- "components_rich_editor_popevent": "popEvent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, fw(), forEach(), get(), remapping()]
- "components_rich_editor_qp": "Qp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Lc(), child(), nodesBetween(), sameMarkup()]
- "components_rich_editor_reconfigure": "reconfigure()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, createView(), init(), registerPlugin(), unregisterPlugin()]
- "components_rich_editor_recreatewrapper": "recreateWrapper()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, create(), destroy(), eq(), updateNextNode()]
- "components_rich_editor_registermutation": "registerMutation()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, flush(), ignoreMutation(), localPosFromDOM(), nearestDesc()]
- "components_rich_editor_removenodemark": "removeNodeMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, isInSet(), nodeAt(), removeFromSet(), step()]
- "components_rich_editor_removestoredmark": "removeStoredMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, handleExit(), ensureMarks(), marks(), removeFromSet()]
- "components_rich_editor_replacerange": "replaceRange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, by(), hg(), replace(), fg()]
- "components_rich_editor_replacerangewith": "replaceRangeWith()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, by(), insertText(), hg(), replaceWith()]
- "components_rich_editor_rk": "rk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, ik(), Ne(), Ye(), Yi()]
- "components_rich_editor_ry": "ry()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, domFromPos(), domSelectionRange(), isText(), updateStateInner()]
- "components_rich_editor_sameset": "sameSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, check(), ensureMarks(), hasMarkup(), eq()]
- "components_rich_editor_setcursor": "setCursor()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, dragleave(), dragover(), updateOverlay(), update()]
- "components_rich_editor_setoptions": "setOptions()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, constructor(), setEditable(), setProps(), updateState()]
- "components_rich_editor_textblockfromcontext": "textblockFromContext()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, insertNode(), contentMatchAt(), indexAfter(), node()]
- "components_rich_editor_tg": "tg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, En(), child(), findWrapping(), matchType()]
- "components_rich_editor_tl": "Tl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, locals(), copy(), slice(), Ud()]
- "components_rich_editor_toformattedstring": "toFormattedString()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, render(), toFormattedObject(), get(), toString()]
- "components_rich_editor_toobject": "toObject()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, endIndex(), startIndex(), toHref(), toString()]
- "components_rich_editor_tw": "tw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, child(), indexAfter(), node(), valid()]
- "components_rich_editor_ty": "ty()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, domSelectionRange(), someProp(), vl(), wt()]
- "components_rich_editor_unmount": "unmount()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, destroy(), emit(), querySelectorAll(), remove()]
- "components_rich_editor_uo": "Uo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, n0(), r0(), t0(), jo()]
- "components_rich_editor_vi": "Vi()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, Fx(), Ha(), Kx(), vx()]
- "components_rich_editor_virtualelement": "virtualElement()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js, b1(), Gl(), nodeDOM(), querySelector()]
- "components_rich_editor_wg": "Wg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, posAtCoords(), bl(), lu(), nearestDesc()]
- "components_rich_editor_wy": "wy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, destroy(), done(), nearestDesc(), stop()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-049.json

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
