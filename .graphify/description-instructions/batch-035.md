# Node Description Batch 36 of 212

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

- "components_rich_editor_addprosemirrorplugins": "addProseMirrorPlugins()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, Cx(), If(), Rx(), Sw(), vx()]
- "components_rich_editor_al": "al()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, after(), before(), findFrom(), resolve(), $d()]
- "components_rich_editor_appendmap": "appendMap()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addStep(), setMirror(), slice(), appendMapping(), appendMappingInverted()]
- "components_rich_editor_cellsinrect": "cellsInRect()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, constructor(), forEachCell(), OS(), P(), Zn()]
- "components_rich_editor_ch": "Ch()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, accepts(), replace(), slice(), ux(), Hi()]
- "components_rich_editor_checkcontent": "checkContent()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, check(), slice(), toString(), validContent(), createChecked()]
- "components_rich_editor_coordsatpos": "coordsAtPos()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, au(), Fd(), Gl(), scrollToSelection(), updateOverlay()]
- "components_rich_editor_createdoc": "createDoc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, constructor(), Bo(), create(), emit(), zo()]
- "components_rich_editor_deleterange": "deleteRange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, deleteNode(), pg(), fg(), insertText(), replaceWith()]
- "components_rich_editor_domatpos": "domAtPos()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, domFromPos(), element(), jd(), jp(), Us()]
- "components_rich_editor_domselection": "domSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, cl(), domSelectionRange(), jy(), ny(), qg()]
- "components_rich_editor_done": "done()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, start(), stop(), move(), up(), wy()]
- "components_rich_editor_dragover": "dragover()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, mo(), nodeAt(), posAtCoords(), scheduleRemoval(), setCursor()]
- "components_rich_editor_dx": "dx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, bx(), Ee(), Ft(), gn(), ph()]
- "components_rich_editor_dy": "dy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, ay(), cy(), $d(), Fd(), Ln()]
- "components_rich_editor_eg": "eg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, canReplaceWith(), contentMatchAt(), findWrapping(), kr(), En()]
- "components_rich_editor_em": "Em()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ct(), e(), Ec(), Zp(), replace()]
- "components_rich_editor_extend": "extend()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, cl(), configure(), constructor(), e(), setSelection()]
- "components_rich_editor_ey": "ey()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, child(), eq(), slice(), vr(), localCompositionInfo()]
- "components_rich_editor_fd": "Fd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, dy(), coordsAtPos(), end(), resolve(), start()]
- "components_rich_editor_fo": "Fo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, child(), childAfter(), childBefore(), find(), start()]
- "components_rich_editor_gg": "Gg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, add(), remove(), setAttribute(), split(), uu()]
- "components_rich_editor_go": "Go()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, forEach(), from(), join(), replace(), split()]
- "components_rich_editor_handleexit": "handleExit()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, end(), find(), insertText(), marks(), removeStoredMark()]
- "components_rich_editor_handlepaste": "handlePaste()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, dispatchEvent(), forEach(), from(), querySelectorAll(), setEditable()]
- "components_rich_editor_hl": "Hl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, find(), marks(), nodesBetween(), nt(), qo()]
- "components_rich_editor_ho": "Ho()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, find(), forEach(), marks(), nt(), jo()]
- "components_rich_editor_ignoremutation": "ignoreMutation()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, an(), from(), Or(), ignoreSelectionChange(), registerMutation()]
- "components_rich_editor_kr": "kr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, eg(), ly(), Md(), ng(), sy()]
- "components_rich_editor_kt": "Kt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, co(), sameMarkup(), withText(), Oc(), tr()]
- "components_rich_editor_l0": "l0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, allowsMarkType(), isInSet(), marks(), _n(), slice()]
- "components_rich_editor_merge": "merge()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addTransform(), append(), eq(), getMap(), invert()]
- "components_rich_editor_mustmoveinline": "mustMoveInline()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, fit(), after(), end(), findCloseLevel(), Ss()]
- "components_rich_editor_os": "OS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, cellsInRect(), ct(), Se(), setNodeMarkup(), Zn()]
- "components_rich_editor_parseslice": "parseSlice()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, cn(), addAll(), finish(), maxOpen(), Sl()]
- "components_rich_editor_pm": "Pm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, Bm(), child(), err(), isInGroup(), uc()]
- "components_rich_editor_po": "Po()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, dn(), find(), P(), q(), split()]
- "components_rich_editor_positionat": "positionAt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, AS(), jp(), child(), vp(), Zp()]
- "components_rich_editor_pr": "pr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, au(), forEach(), marks(), nodesBetween(), resolve()]
- "components_rich_editor_pu": "pu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, descAt(), selectNode(), zd(), updateStateInner(), wt()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-035.json

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
