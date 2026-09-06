# Node Description Batch 130 of 212

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

- "components_file_upload_op": "Op()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, rl()]
- "components_file_upload_registerlisteners": "registerListeners()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, constructor()]
- "components_file_upload_rm": "rm()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le()]
- "components_file_upload_st": "St()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, Ee()]
- "components_file_upload_um": "um()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, Fl()]
- "components_file_upload_wt": "Wt()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, q()]
- "components_input_blade": "input.blade.php" | kind=code-symbol | source=resources/views/components/input.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_input_error_blade": "input-error.blade.php" | kind=code-symbol | source=resources/views/components/input-error.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_instructionlist_instructionlist": "InstructionList" | kind=code-symbol | source=modules/real-estate-instructions-livewire/src/Components/InstructionList.php:L12 | neighbors=[InstructionList.php, .render()]
- "components_label_blade": "label.blade.php" | kind=code-symbol | source=resources/views/components/label.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_lettinglist_lettinglist": "LettingList" | kind=code-symbol | source=modules/real-estate-lettings-livewire/src/Components/LettingList.php:L12 | neighbors=[LettingList.php, .render()]
- "components_listinglist_listinglist": "ListingList" | kind=code-symbol | source=modules/real-estate-listings-livewire/src/Components/ListingList.php:L12 | neighbors=[ListingList.php, .render()]
- "components_managementrecordlist_managementrecordlist": "ManagementRecordList" | kind=code-symbol | source=modules/real-estate-property-management-livewire/src/Components/ManagementRecordList.php:L12 | neighbors=[ManagementRecordList.php, .render()]
- "components_markdown_editor_bn": "Bn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, on()]
- "components_markdown_editor_cc": "Cc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Sn()]
- "components_markdown_editor_dd": "dd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, jl()]
- "components_markdown_editor_dt": "dt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, y()]
- "components_markdown_editor_ea": "Ea()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, $c()]
- "components_markdown_editor_ec": "Ec()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Sn()]
- "components_markdown_editor_gc": "Gc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, zc()]
- "components_markdown_editor_id": "Id()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L34 | neighbors=[markdown-editor.js, qi()]
- "components_markdown_editor_if": "If()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, nf()]
- "components_markdown_editor_kc": "Kc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Fr()]
- "components_markdown_editor_kn": "kn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, jl()]
- "components_markdown_editor_la": "La()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, $c()]
- "components_markdown_editor_ld": "ld()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, sd()]
- "components_markdown_editor_mc": "Mc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Sn()]
- "components_markdown_editor_mt": "mt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Fr()]
- "components_markdown_editor_od": "od()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, yl()]
- "components_markdown_editor_pc": "Pc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, xa()]
- "components_markdown_editor_qf": "qf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ff()]
- "components_markdown_editor_qi": "qi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L34 | neighbors=[markdown-editor.js, Id()]
- "components_markdown_editor_rc": "Rc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, y()]
- "components_markdown_editor_rd": "rd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, xl()]
- "components_markdown_editor_uc": "Uc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ca()]
- "components_markdown_editor_wc": "Wc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Hc()]
- "components_markdown_editor_yf": "yf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, vf()]
- "components_markdown_editor_zc": "zc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Gc()]
- "components_marketingcampaignlist_marketingcampaignlist": "MarketingCampaignList" | kind=code-symbol | source=modules/real-estate-marketing-livewire/src/Components/MarketingCampaignList.php:L11 | neighbors=[MarketingCampaignList.php, .render()]
- "components_matchprofilelist_matchprofilelist": "MatchProfileList" | kind=code-symbol | source=modules/real-estate-matching-livewire/src/Components/MatchProfileList.php:L12 | neighbors=[MatchProfileList.php, .render()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-129.json

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
