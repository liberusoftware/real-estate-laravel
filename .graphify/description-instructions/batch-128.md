# Node Description Batch 129 of 212

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

- "components_code_editor_textafter": "textAfter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, textAfterPos()]
- "components_code_editor_themeclasses": "themeClasses()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, facet()]
- "components_code_editor_tn": "tn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, move()]
- "components_code_editor_top": "top()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, facet()]
- "components_code_editor_um": "Um()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, Ur()]
- "components_code_editor_updategaps": "updateGaps()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, updateInner()]
- "components_code_editor_updateselectedoption": "updateSelectedOption()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, updateSel()]
- "components_code_editor_ur": "Ur()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, Um()]
- "components_code_editor_v": "v$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, of()]
- "components_code_editor_variabledefinition": "VariableDefinition()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, matchContext()]
- "components_code_editor_visiblebottom": "visibleBottom()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, fromDOM()]
- "components_code_editor_visibletop": "visibleTop()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, fromDOM()]
- "components_code_editor_vo": "vo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, matchContext()]
- "components_code_editor_we": "we()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, textDirectionAt()]
- "components_code_editor_writeto": "writeTo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, writeElements()]
- "components_code_editor_xm": "Xm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, gw()]
- "components_code_editor_y": "Y$()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, ug()]
- "components_code_editor_y_listitem": "[y.ListItem]()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, moveBaseColumn()]
- "components_code_editor_yd": "Yd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, of()]
- "components_code_editor_yg": "Yg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, of()]
- "components_code_editor_yr": "yr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, elt()]
- "components_code_editor_zc": "zc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, km()]
- "components_code_editor_zg": "Zg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, Rg()]
- "components_code_editor_zu": "Zu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, of()]
- "components_code_editor_zy": "zy()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, sliceString()]
- "components_color_picker_style": "style()" | kind=code-symbol | source=public/js/filament/forms/components/color-picker.js:L1 | neighbors=[color-picker.js, update()]
- "components_color_picker_update": "update()" | kind=code-symbol | source=public/js/filament/forms/components/color-picker.js:L1 | neighbors=[color-picker.js, style()]
- "components_connected_account_blade": "connected-account.blade.php" | kind=code-symbol | source=resources/views/components/connected-account.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_file_upload_bp": "Bp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, yl()]
- "components_file_upload_ca": "ca()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, rt()]
- "components_file_upload_cp": "Cp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, sl()]
- "components_file_upload_define": "define()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, constructor()]
- "components_file_upload_dm": "dm()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, gm()]
- "components_file_upload_dp": "Dp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, _e()]
- "components_file_upload_ei": "Ei()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, yl()]
- "components_file_upload_gm": "gm()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, dm()]
- "components_file_upload_gp": "Gp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, sl()]
- "components_file_upload_mm": "mm()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le()]
- "components_file_upload_np": "Np()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, sl()]
- "components_file_upload_o": "o()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, c()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-128.json

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
