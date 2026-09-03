# Node Description Batch 135 of 212

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

- "components_rich_editor_xr": "xr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, eq()]
- "components_rich_editor_xu": "Xu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, forEach()]
- "components_rich_editor_xw": "xw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, Sw()]
- "components_rich_editor_yh": "Yh()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, fn()]
- "components_rich_editor_z0": "z0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L31 | neighbors=[rich-editor.js, from()]
- "components_rich_editor_zh": "Zh()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, Ji()]
- "components_rich_editor_zk": "Zk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Gk()]
- "components_rich_editor_zu": "zu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, mapResult()]
- "components_rightmovesynclist_rightmovesynclist": "RightmoveSyncList" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/src/Components/RightmoveSyncList.php:L11 | neighbors=[RightmoveSyncList.php, .render()]
- "components_salesprogressionlist_salesprogressionlist": "SalesProgressionList" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/src/Components/SalesProgressionList.php:L11 | neighbors=[SalesProgressionList.php, .render()]
- "components_secondary_button_blade": "secondary-button.blade.php" | kind=code-symbol | source=resources/views/components/secondary-button.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_select_addbadgesforselectedoptions": "addBadgesForSelectedOptions()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, updateSelectedDisplay()]
- "components_select_addsingleselectiondisplay": "addSingleSelectionDisplay()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, updateSelectedDisplay()]
- "components_select_an": "An()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, sn()]
- "components_select_bn": "bn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, bi()]
- "components_select_bt": "Bt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, zn()]
- "components_select_ce": "Ce()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn()]
- "components_select_createoptionelement": "createOptionElement()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, renderOptions()]
- "components_select_createremovebutton": "createRemoveButton()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, createBadgeElement()]
- "components_select_d": "D()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, S()]
- "components_select_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, closeDropdown()]
- "components_select_enable": "enable()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, applyDisabledState()]
- "components_select_getselectedoptionlabels": "getSelectedOptionLabels()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, getLabelsForMultipleSelection()]
- "components_select_hasavailableoptions": "hasAvailableOptions()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, toggleDropdown()]
- "components_select_kn": "Kn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Xn()]
- "components_select_ln": "Ln()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Rn()]
- "components_select_oe": "oe()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ti()]
- "components_select_on": "On()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, en()]
- "components_select_renderoptiongroup": "renderOptionGroup()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, renderOptions()]
- "components_select_setupeventlisteners": "setUpEventListeners()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, constructor()]
- "components_select_tn": "tn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ei()]
- "components_select_updateoptionlabelinlist": "updateOptionLabelInList()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, getVisibleOptions()]
- "components_select_ve": "ve()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, jn()]
- "components_select_wn": "wn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, nt()]
- "components_select_x": "x()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, jn()]
- "components_select_z": "Z()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, w()]
- "components_slider_ae": "Ae()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Bt()]
- "components_slider_bt": "Bt()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Ae()]
- "components_slider_de": "De()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, ir()]
- "components_slider_ee": "Ee()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, Oe()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-134.json

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
