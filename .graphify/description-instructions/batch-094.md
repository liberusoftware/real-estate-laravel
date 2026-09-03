# Node Description Batch 95 of 212

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

- "components_code_editor_vh": "vh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, Ls(), wh()]
- "components_code_editor_vp": "vP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, updateSelection(), compare()]
- "components_code_editor_vs": "VS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, vd(), fromClass()]
- "components_code_editor_wa": "wa()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, ka(), lineBlockAt()]
- "components_code_editor_watchtooltipleave": "watchTooltipLeave()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, mouseleave(), addEventListener()]
- "components_code_editor_wf": "Wf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), measure()]
- "components_code_editor_wg": "wg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, U$(), ph()]
- "components_code_editor_withcontext": "withContext()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, takeTree(), work()]
- "components_code_editor_withouttempskipped": "withoutTempSkipped()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, takeTree(), pop()]
- "components_code_editor_wo": "wo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, of(), Xu()]
- "components_code_editor_wr": "Wr()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, shift(), peek()]
- "components_code_editor_write": "write()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, ATXHeading(), measure()]
- "components_code_editor_writemeasure": "writeMeasure()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, get(), positioned()]
- "components_code_editor_x": "_X()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, update(), between()]
- "components_code_editor_x0": "x0()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, init(), b0()]
- "components_code_editor_xe": "xe()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, combine(), facet()]
- "components_code_editor_xh": "Xh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, wh(), Lg()]
- "components_code_editor_xn": "Xn()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, fd(), flush()]
- "components_code_editor_xo": "xo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, blur(), plugin()]
- "components_code_editor_y_blockquote": "[y.Blockquote]()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, ct(), moveBase()]
- "components_code_editor_ya": "ya()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, constructor(), ji()]
- "components_code_editor_yc": "Yc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, configure(), slice()]
- "components_code_editor_yh": "yh()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, wh(), Lr()]
- "components_code_editor_ym": "Ym()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, configure(), of()]
- "components_code_editor_yt": "YT()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, Vl(), changeByRange()]
- "components_code_editor_yx": "yX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, Qu(), prop()]
- "components_code_editor_zd": "zd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, fromClass(), of()]
- "components_code_editor_zf": "zf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, cP(), measure()]
- "components_code_editor_zm": "zm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, bi(), configure()]
- "components_code_editor_zo": "zo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, atLastNode(), nextChild()]
- "components_date_time_picker_e": "e()" | kind=code-symbol | source=public/js/filament/forms/components/date-time-picker.js:L1 | neighbors=[date-time-picker.js, i(), r()]
- "components_date_time_picker_i": "i()" | kind=code-symbol | source=public/js/filament/forms/components/date-time-picker.js:L1 | neighbors=[date-time-picker.js, e(), r()]
- "components_date_time_picker_r": "r()" | kind=code-symbol | source=public/js/filament/forms/components/date-time-picker.js:L1 | neighbors=[date-time-picker.js, e(), i()]
- "components_file_upload_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, define(), registerListeners()]
- "components_file_upload_da": "da()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, kp(), Vp()]
- "components_file_upload_e": "_e()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, Dp(), xt()]
- "components_file_upload_ea": "Ea()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, rt(), ya()]
- "components_file_upload_ee": "Ee()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le(), St()]
- "components_file_upload_fl": "Fl()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le(), um()]
- "components_file_upload_getposition": "getPosition()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, clickPercent(), movePlayhead()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-094.json

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
