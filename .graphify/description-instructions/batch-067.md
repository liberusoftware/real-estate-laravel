# Node Description Batch 68 of 212

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

- "components_file_upload_pe": "pe()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le(), q(), yt()]
- "components_file_upload_ya": "ya()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, Ea(), nm(), yt()]
- "components_lettinglist": "LettingList.php" | kind=code-symbol | source=modules/real-estate-lettings-livewire/src/Components/LettingList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, e8b93fc Implement remaining real estate…, LettingList]
- "components_managementrecordlist": "ManagementRecordList.php" | kind=code-symbol | source=modules/real-estate-property-management-livewire/src/Components/ManagementRecordList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, e8b93fc Implement remaining real estate…, ManagementRecordList]
- "components_markdown_editor_af": "af()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, hl(), to(), of()]
- "components_markdown_editor_dl": "dl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ce(), fo(), pf()]
- "components_markdown_editor_ee": "Ee()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Fn(), ge(), sd()]
- "components_markdown_editor_es": "es()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, En(), pd(), Tt()]
- "components_markdown_editor_gr": "Gr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, V(), y(), wn()]
- "components_markdown_editor_hc": "Hc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Wc(), y(), Z()]
- "components_markdown_editor_hl": "hl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, af(), Rl(), pl()]
- "components_markdown_editor_hr": "Hr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, de(), H(), y()]
- "components_markdown_editor_i": "_i()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, md(), ud(), yl()]
- "components_markdown_editor_in": "In()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ll(), ol(), pd()]
- "components_markdown_editor_is": "is()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L15 | neighbors=[markdown-editor.js, _a(), ne(), _l()]
- "components_markdown_editor_ko": "ko()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L7 | neighbors=[markdown-editor.js, f(), _l(), so()]
- "components_markdown_editor_lo": "lo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, mi(), Sn(), mr()]
- "components_markdown_editor_ma": "ma()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, uo(), Vc(), va()]
- "components_markdown_editor_mn": "Mn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ja(), mi(), vd()]
- "components_markdown_editor_nd": "nd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, gl(), Ie(), se()]
- "components_markdown_editor_oc": "Oc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, _a(), Bt(), xa()]
- "components_markdown_editor_ol": "ol()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, dr(), In(), yo()]
- "components_markdown_editor_pn": "Pn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, bf(), Ae(), ua()]
- "components_markdown_editor_qo": "qo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, pd(), pl(), Nn()]
- "components_markdown_editor_rr": "Rr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, dr(), V(), y()]
- "components_markdown_editor_tc": "Tc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ae(), Oe(), wn()]
- "components_markdown_editor_ti": "ti()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, de(), H(), y()]
- "components_markdown_editor_ut": "Ut()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, cd(), y(), yl()]
- "components_markdown_editor_vc": "Vc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ma(), D(), qa()]
- "components_markdown_editor_wa": "wa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, li(), ka(), Zt()]
- "components_markdown_editor_wo": "wo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L7 | neighbors=[markdown-editor.js, cd(), ud(), yl()]
- "components_markdown_editor_xe": "Xe()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, go(), q(), ye()]
- "components_markdown_editor_ya": "ya()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, io(), ff(), to()]
- "components_markdown_editor_yc": "Yc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, uo(), Ln(), y()]
- "components_markdown_editor_yo": "yo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, bo(), ol(), pd()]
- "components_markdown_editor_zi": "zi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, _a(), _l(), bc()]
- "components_markdown_editor_zl": "zl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, on(), ne(), ot()]
- "components_marketingcampaignlist": "MarketingCampaignList.php" | kind=code-symbol | source=modules/real-estate-marketing-livewire/src/Components/MarketingCampaignList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, d07b218 Harden real estate Livewire lis…, MarketingCampaignList]
- "components_offerlist_offerlist_transition": ".transition()" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L34 | neighbors=[OfferList, .acceptOffer(), .rejectOffer(), .submitOffer()]
- "components_onthemarketsynclist": "OnTheMarketSyncList.php" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/src/Components/OnTheMarketSyncList.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, OnTheMarketSyncList]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-067.json

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
