# Node Description Batch 96 of 212

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

- "components_file_upload_kp": "kp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, da(), sl()]
- "components_file_upload_mouseup": "mouseUp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, clickPercent(), movePlayhead()]
- "components_file_upload_nm": "nm()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, rt(), ya()]
- "components_file_upload_om": "om()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le(), yl()]
- "components_file_upload_p": "p()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, c(), s()]
- "components_file_upload_qe": "qe()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le(), q()]
- "components_file_upload_rl": "rl()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, Op(), yl()]
- "components_file_upload_s": "s()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, c(), p()]
- "components_file_upload_timelineclicked": "timelineClicked()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, clickPercent(), movePlayhead()]
- "components_file_upload_vp": "Vp()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, sl(), da()]
- "components_file_upload_xt": "xt()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, _e(), rt()]
- "components_key_value": "key-value.js" | kind=code-symbol | source=public/js/filament/forms/components/key-value.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, a()]
- "components_markdown_editor_aa": "Aa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Jc(), qc()]
- "components_markdown_editor_ac": "Ac()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ni(), io()]
- "components_markdown_editor_ad": "ad()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, Rl(), yl()]
- "components_markdown_editor_ba": "Ba()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ls(), of()]
- "components_markdown_editor_bc": "bc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L40 | neighbors=[markdown-editor.js, gi(), zi()]
- "components_markdown_editor_bl": "bl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, io(), si()]
- "components_markdown_editor_br": "br()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, co(), Zt()]
- "components_markdown_editor_cr": "Cr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, V(), y()]
- "components_markdown_editor_dc": "Dc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ni(), io()]
- "components_markdown_editor_di": "di()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ao(), Zt()]
- "components_markdown_editor_ed": "ed()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, un(), _l()]
- "components_markdown_editor_et": "Et()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ye(), Yt()]
- "components_markdown_editor_fc": "Fc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, oo(), mo()]
- "components_markdown_editor_fl": "fl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ne(), Mf()]
- "components_markdown_editor_ft": "Ft()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, y(), Pe()]
- "components_markdown_editor_gf": "gf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, mi(), vd()]
- "components_markdown_editor_ha": "Ha()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ci(), ua()]
- "components_markdown_editor_hf": "hf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, An(), vd()]
- "components_markdown_editor_ic": "Ic()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ai(), jf()]
- "components_markdown_editor_ii": "ii()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, oo(), Sa()]
- "components_markdown_editor_ja": "ja()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Mn(), Ra()]
- "components_markdown_editor_kr": "Kr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ge(), y()]
- "components_markdown_editor_lc": "Lc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ae(), pf()]
- "components_markdown_editor_na": "Na()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ls(), Qr()]
- "components_markdown_editor_nc": "Nc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ai(), za()]
- "components_markdown_editor_nf": "nf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, If(), of()]
- "components_markdown_editor_nt": "nt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Fr(), y()]
- "components_markdown_editor_oi": "oi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, oo(), Sa()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-095.json

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
