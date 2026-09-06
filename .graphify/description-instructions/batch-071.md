# Node Description Batch 72 of 212

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

- "components_rich_editor_ux": "ux()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, Ch(), jx(), slice()]
- "components_rich_editor_validate": "validate()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, Bc(), get(), toString()]
- "components_rich_editor_vf": "Vf()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, nodesBetween(), Wf(), ww()]
- "components_rich_editor_vn": "Vn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, forEach(), o0(), yw()]
- "components_rich_editor_vx": "vx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, addProseMirrorPlugins(), Ha(), Vi()]
- "components_rich_editor_widget": "widget()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, gS(), iw(), Yd()]
- "components_rich_editor_ws": "wS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, create(), forEachCell(), getState()]
- "components_rich_editor_wx": "Wx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, lk(), $a(), Wi()]
- "components_rich_editor_xm": "Xm()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addMark(), forEach(), nodesBetween()]
- "components_rich_editor_xo": "Xo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, forEach(), join(), split()]
- "components_rich_editor_xp": "xp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, bk(), Ek(), slice()]
- "components_rich_editor_yi": "Yi()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, rk(), wp(), Xi()]
- "components_rich_editor_yu": "yu()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, bu(), create(), from()]
- "components_rich_editor_yy": "Yy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, jy(), findDiffEnd(), findDiffStart()]
- "components_rich_editor_zi": "zi()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, kn(), ro(), Ye()]
- "components_rich_editor_zl": "zl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addKeyboardShortcuts(), $b(), forEach()]
- "components_rich_editor_zs": "zS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, resolve(), setSelection(), Sn()]
- "components_rightmovesynclist": "RightmoveSyncList.php" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/src/Components/RightmoveSyncList.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, RightmoveSyncList]
- "components_salesprogressionlist": "SalesProgressionList.php" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/src/Components/SalesProgressionList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, d07b218 Harden real estate Livewire lis…, SalesProgressionList]
- "components_select_addsinglebadge": "addSingleBadge()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, createBadgeElement(), getSelectedOptionLabel(), selectOption()]
- "components_select_applydisabledstate": "applyDisabledState()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, disable(), enable(), render()]
- "components_select_ci": "ci()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, re(), U(), Ft()]
- "components_select_et": "Et()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, gi(), oi(), Xt()]
- "components_select_hidemaxitemsmessage": "hideMaxItemsMessage()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, closeDropdown(), selectOption(), showMaxItemsMessage()]
- "components_select_i": "$i()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, k(), _n(), zn()]
- "components_select_je": "je()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, b(), ye(), _n()]
- "components_select_mn": "mn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, gi(), gn(), $t()]
- "components_select_oi": "oi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Et(), ii(), Vt()]
- "components_select_ot": "ot()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, A(), ye(), Xn()]
- "components_select_showloadingstate": "showLoadingState()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, openDropdown(), deferPositionDropdown(), hideLoadingState()]
- "components_select_showmaxitemsmessage": "showMaxItemsMessage()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, selectOption(), deferPositionDropdown(), hideMaxItemsMessage()]
- "components_select_shownooptionsmessage": "showNoOptionsMessage()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, renderOptions(), deferPositionDropdown(), hideLoadingState()]
- "components_select_st": "St()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, jn(), b(), ti()]
- "components_select_toggledropdown": "toggleDropdown()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, closeDropdown(), hasAvailableOptions(), openDropdown()]
- "components_select_v": "v()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, E(), gt(), Rn()]
- "components_select_vi": "vi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Rt(), it(), Xt()]
- "components_select_vt": "Vt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, fn(), oi(), sn()]
- "components_select_wi": "wi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, dn(), vn(), de()]
- "components_select_ye": "ye()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, At(), je(), ot()]
- "components_select_yi": "yi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, gi(), Xt(), U()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-071.json

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
