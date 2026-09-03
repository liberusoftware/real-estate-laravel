# Node Description Batch 101 of 212

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

- "components_rich_editor_y": "_y()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, flush(), has()]
- "components_rich_editor_y0": "y0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, between(), resolve()]
- "components_rich_editor_yk": "yk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Gh(), querySelector()]
- "components_rich_editor_yl": "Yl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, _k(), replace()]
- "components_rich_editor_zg": "zg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, updateStateInner(), iu()]
- "components_rich_editor_zo": "zo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, createDoc(), cn()]
- "components_select_a": "A()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ot(), Y()]
- "components_select_cn": "cn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, U(), Xt()]
- "components_select_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, render(), setUpEventListeners()]
- "components_select_createbadgeelement": "createBadgeElement()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, addSingleBadge(), createRemoveButton()]
- "components_select_disable": "disable()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, applyDisabledState(), closeDropdown()]
- "components_select_e": "E()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, jn(), v()]
- "components_select_en": "en()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, On(), ii()]
- "components_select_getlabelforsingleselection": "getLabelForSingleSelection()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, getSelectedOptionLabel(), updateSelectedDisplay()]
- "components_select_getlabelsformultipleselection": "getLabelsForMultipleSelection()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, getSelectedOptionLabels(), updateSelectedDisplay()]
- "components_select_getselectedoptionlabel": "getSelectedOptionLabel()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, addSingleBadge(), getLabelForSingleSelection()]
- "components_select_gt": "gt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, jn(), v()]
- "components_select_handlesearch": "handleSearch()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, filterOptions(), renderOptions()]
- "components_select_hi": "hi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Dt(), Si()]
- "components_select_ie": "Ie()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ni(), Ze()]
- "components_select_ii": "ii()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, en(), oi()]
- "components_select_le": "Le()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn(), Te()]
- "components_select_maintainfocusinmultiplemode": "maintainFocusInMultipleMode()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, getVisibleOptions(), selectOption()]
- "components_select_me": "Me()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, nt(), Si()]
- "components_select_pe": "pe()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, k(), S()]
- "components_select_populatelabelrepositoryfromoptions": "populateLabelRepositoryFromOptions()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, openDropdown(), render()]
- "components_select_positiondropdown": "positionDropdown()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, filterOptions(), openDropdown()]
- "components_select_scrolloptionintoview": "scrollOptionIntoView()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, focusNextOption(), focusPreviousOption()]
- "components_select_w": "w()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, S(), Z()]
- "components_select_xn": "Xn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Kn(), ot()]
- "components_select_y": "Y()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, A(), ht()]
- "components_slider_ar": "ar()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, ir(), Tt()]
- "components_slider_le": "Le()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, G(), Me()]
- "components_slider_oe": "Oe()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Ee(), G()]
- "components_slider_t": "$t()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, R(), ye()]
- "components_slider_tt": "Tt()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, ar(), St()]
- "components_slider_ue": "Ue()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, _e(), xt()]
- "components_slider_ye": "ye()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, ir(), $t()]
- "components_slider_ze": "ze()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, R(), we()]
- "components_textarea": "textarea.js" | kind=code-symbol | source=public/js/filament/forms/components/textarea.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, n()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-100.json

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
