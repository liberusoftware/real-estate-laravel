# Node Description Batch 10 of 212

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

- "components_code_editor_iswidget": "isWidget()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, aP(), blockPosCovered(), coordsAt(), domAtPos(), endLine()]
- "components_code_editor_nextsibling": "nextSibling()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, dX(), highlightRange(), iterate(), Nd(), externalSibling()]
- "components_code_editor_parent": "parent()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, fX(), highlightRange(), iterate(), move(), moveTo()]
- "components_code_editor_parse": "parse()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, $f(), JT(), addDelimiter(), addElement(), advance()]
- "components_code_editor_posatcoords": "posAtCoords()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, dragover(), ff(), jP(), kf(), mousedown()]
- "components_code_editor_readselectionrange": "readSelectionRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), enforceCursorAssoc(), flush(), onSelectionChange(), eq()]
- "components_code_editor_sort": "sort()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, advance(), $f(), init(), iP(), normalized()]
- "components_code_editor_startinner": "startInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, advance(), eu(), find(), findMounts(), firstChild()]
- "components_code_editor_todom": "toDOM()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, docHeight(), endLine(), of(), setMarkers(), B()]
- "components_code_editor_updateheight": "updateHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, applyChanges(), finish(), measure(), balanced(), heightForGap()]
- "components_file_upload_le": "le()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, De(), Ee(), Fl(), q(), rt()]
- "components_markdown_editor_f": "f()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, D(), dr(), he(), ko(), lr()]
- "components_markdown_editor_ie": "Ie()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, cd(), D(), V(), y(), md()]
- "components_markdown_editor_oe": "Oe()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ge(), mr(), Be(), de(), fe()]
- "components_markdown_editor_se": "se()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, gd(), ge(), he(), nd(), nl()]
- "components_markdown_editor_te": "te()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ke(), ce(), fe(), Le(), n()]
- "components_rich_editor_addelementbyrule": "addElementByRule()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElement(), addAll(), create(), enter(), findAround()]
- "components_rich_editor_as": "AS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, add(), child(), create(), delete(), has()]
- "components_rich_editor_canreplacewith": "canReplaceWith()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, allowsMarks(), contentMatchAt(), matchFragment(), matchType(), cg()]
- "components_rich_editor_cut": "cut()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), copy(), slice(), withText(), Ec()]
- "components_rich_editor_delete": "delete()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Ac(), AS(), cm(), replace(), jy()]
- "components_rich_editor_find": "find()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, findInner(), Fo(), handleExit(), Hl(), Ho()]
- "components_rich_editor_findfrom": "findFrom()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, al(), between(), $d(), after(), before()]
- "components_rich_editor_findindex": "findIndex()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), childAfter(), childBefore(), child(), io()]
- "components_rich_editor_hs": "Hs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, edge(), findCell(), from(), get(), hasRequiredAttrs()]
- "components_rich_editor_insertnode": "insertNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addElementByRule(), addTextNode(), addToSet(), allowsMarkType(), closeExtra()]
- "components_rich_editor_inserttext": "insertText()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, handleExit(), deleteRange(), deleteSelection(), marks(), marksAcross()]
- "components_rich_editor_isselectable": "isSelectable()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, by(), cy(), $d(), findGapCursorFrom(), Nn()]
- "components_rich_editor_kn": "kn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, bk(), Dk(), Ek(), Ne(), Ve()]
- "components_rich_editor_ms": "Ms()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, apply(), child(), colCount(), copy(), delete()]
- "components_rich_editor_ne": "Ne()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, ak(), at(), dp(), gn(), kn()]
- "components_rich_editor_oe": "Oe()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, cg(), canReplace(), canReplaceWith(), create(), cutByIndex()]
- "components_rich_editor_rs": "RS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Dc(), after(), before(), child(), createAndFill()]
- "components_rich_editor_samemarkup": "sameMarkup()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, append(), by(), Cc(), eq(), fg()]
- "components_rich_editor_vp": "vp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, createAndFill(), findCell(), Fk(), forEach(), insert()]
- "components_rich_editor_we": "We()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, bp(), Hk(), kn(), kp(), lk()]
- "components_rich_editor_xs": "Xs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), destroy(), updateStateInner(), after(), before()]
- "components_select_ct": "ct()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, bi(), re(), U(), dn(), fi()]
- "components_select_nt": "nt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ae(), bi(), gn(), Me(), mi()]
- "components_select_renderoptions": "renderOptions()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, filterOptions(), handleSearch(), openDropdown(), render(), closeDropdown()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-009.json

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
