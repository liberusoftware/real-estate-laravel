# Node Description Batch 37 of 212

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

- "components_rich_editor_q": "q()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, extendNodeSchema(), options(), Po(), e(), storage()]
- "components_rich_editor_qi": "qi()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn(), Ja(), qa(), Xe(), Xh()]
- "components_rich_editor_qt": "qt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, co(), Ec(), Oc(), copy(), validContent()]
- "components_rich_editor_r": "$r()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, gw(), before(), node(), resolve(), yw()]
- "components_rich_editor_r0": "r0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L12 | neighbors=[rich-editor.js, fromJSON(), jl(), Ko(), replace(), Uo()]
- "components_rich_editor_render": "render()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, defaultRender(), get(), getObj(), toFormattedString(), toHref()]
- "components_rich_editor_ro": "ro()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, bk(), Ek(), ok(), Ve(), zi()]
- "components_rich_editor_serializefragment": "serializeFragment()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, Ir(), kl(), forEach(), so(), serializeNodeInner()]
- "components_rich_editor_serializenodeinner": "serializeNodeInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, serializeNode(), lo(), name(), serializeFragment(), so()]
- "components_rich_editor_setcurselection": "setCurSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, cl(), ignoreSelectionChange(), domSelectionRange(), updateStateInner(), wt()]
- "components_rich_editor_setfrom": "setFrom()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, create(), createAndFill(), createChecked(), slice(), text()]
- "components_rich_editor_sm": "sm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, AS(), ct(), e(), get(), nodeAt()]
- "components_rich_editor_sr": "sr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, dropNode(), placeNodes(), copy(), cutByIndex(), replaceChild()]
- "components_rich_editor_textbetween": "textBetween()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, jy(), kl(), nodesBetween(), slice(), textContent()]
- "components_rich_editor_toformattedobject": "toFormattedObject()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, $i(), endIndex(), startIndex(), toFormattedHref(), toFormattedString()]
- "components_rich_editor_tohref": "toHref()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, render(), toFormattedHref(), hasProtocol(), toString(), toObject()]
- "components_rich_editor_tokenize": "tokenize()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L131 | neighbors=[rich-editor.js, d1(), join(), slice(), split(), zr()]
- "components_rich_editor_updateouterdeco": "updateOuterDeco()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, update(), updateInner(), il(), uu(), updateStateInner()]
- "components_rich_editor_updateoverlay": "updateOverlay()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, setCursor(), update(), coordsAtPos(), nodeDOM(), resolve()]
- "components_rich_editor_updatepluginviews": "updatePluginViews()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, constructor(), destroyPluginViews(), update(), view(), updateStateInner()]
- "components_rich_editor_wi": "Wi()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, $a(), ik(), jx(), Fx(), Wx()]
- "components_rich_editor_withtext": "withText()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, append(), cut(), finish(), fromArray(), Kt()]
- "components_rich_editor_wu": "wu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, append(), contentMatchAt(), copy(), fillBefore(), replaceChild()]
- "components_rich_editor_ww": "ww()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, add(), bw(), find(), remove(), Vf()]
- "components_rich_editor_xc": "xc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, marksFromSchema(), nodesFromSchema(), canReplace(), index(), start()]
- "components_rich_editor_xy": "xy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, cut(), eq(), resolve(), stopEvent(), Ys()]
- "components_rich_editor_yp": "yp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Sp(), at(), e(), We(), Ye()]
- "components_rich_editor_zc": "zc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, constructor(), create(), end(), node(), start()]
- "components_rich_editor_zn": "Zn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, cellsInRect(), ct(), forEach(), OS(), Se()]
- "components_select_ae": "ae()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, it(), nt(), gn(), Si(), ui()]
- "components_select_b": "b()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, je(), k(), Kt(), Rn(), St()]
- "components_select_filteroptions": "filterOptions()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, positionDropdown(), renderOptions(), showNoResultsMessage(), handleSearch(), openDropdown()]
- "components_select_handleselectbuttonkeydown": "handleSelectButtonKeydown()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, closeDropdown(), focusNextOption(), focusPreviousOption(), getVisibleOptions(), openDropdown()]
- "components_select_jn": "jn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, E(), gt(), St(), ve(), x()]
- "components_select_ni": "ni()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Ie(), Te(), ut(), yt(), zt()]
- "components_select_pn": "pn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, gi(), ct(), ht(), Rt(), Xt()]
- "components_select_render": "render()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, constructor(), applyDisabledState(), populateLabelRepositoryFromOptions(), renderOptions(), updateSelectedDisplay()]
- "components_select_s": "S()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, D(), ht(), k(), pe(), w()]
- "components_select_ti": "ti()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn(), Ft(), k(), oe(), St()]
- "components_select_ui": "ui()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Si(), ae(), At(), ct(), $t()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-036.json

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
