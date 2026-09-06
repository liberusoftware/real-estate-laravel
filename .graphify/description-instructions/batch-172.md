# Node Description Batch 173 of 212

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

- "components_file_upload_ng": "Ng()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js]
- "components_file_upload_oe": "Oe()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js]
- "components_file_upload_play": "play()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js]
- "components_file_upload_ra": "ra()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js]
- "components_file_upload_setheight": "setHeight()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js]
- "components_file_upload_setwidth": "setWidth()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js]
- "components_file_upload_sm": "sm()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js]
- "components_file_upload_timeupdate": "timeUpdate()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js]
- "components_file_upload_xl": "xl()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js]
- "components_guest_layout_blade": "guest-layout.blade.php" | kind=code-symbol | source=resources/views/components/guest-layout.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "components_instructionlist_instructionlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-instructions-livewire/src/Components/InstructionList.php:L17 | neighbors=[InstructionList]
- "components_key_value_a": "a()" | kind=code-symbol | source=public/js/filament/forms/components/key-value.js:L1 | neighbors=[key-value.js]
- "components_lettinglist_lettinglist_render": ".render()" | kind=code-symbol | source=modules/real-estate-lettings-livewire/src/Components/LettingList.php:L17 | neighbors=[LettingList]
- "components_listinglist_listinglist_render": ".render()" | kind=code-symbol | source=modules/real-estate-listings-livewire/src/Components/ListingList.php:L17 | neighbors=[ListingList]
- "components_managementrecordlist_managementrecordlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-property-management-livewire/src/Components/ManagementRecordList.php:L17 | neighbors=[ManagementRecordList]
- "components_markdown_editor_bd": "bd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L19 | neighbors=[markdown-editor.js]
- "components_markdown_editor_bi": "Bi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L40 | neighbors=[markdown-editor.js]
- "components_markdown_editor_hd": "hd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js]
- "components_markdown_editor_ji": "ji()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L40 | neighbors=[markdown-editor.js]
- "components_markdown_editor_jn": "jn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js]
- "components_markdown_editor_kd": "kd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L24 | neighbors=[markdown-editor.js]
- "components_markdown_editor_qd": "qd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L34 | neighbors=[markdown-editor.js]
- "components_markdown_editor_ri": "Ri()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L40 | neighbors=[markdown-editor.js]
- "components_markdown_editor_rs": "rs()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L15 | neighbors=[markdown-editor.js]
- "components_markdown_editor_vi": "Vi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L40 | neighbors=[markdown-editor.js]
- "components_markdown_editor_xc": "Xc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js]
- "components_markdown_editor_yd": "yd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L19 | neighbors=[markdown-editor.js]
- "components_markdown_editor_yi": "yi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js]
- "components_marketingcampaignlist_marketingcampaignlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-marketing-livewire/src/Components/MarketingCampaignList.php:L16 | neighbors=[MarketingCampaignList]
- "components_matchprofilelist_matchprofilelist_render": ".render()" | kind=code-symbol | source=modules/real-estate-matching-livewire/src/Components/MatchProfileList.php:L17 | neighbors=[MatchProfileList]
- "components_mediadocumentlist_mediadocumentlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/src/Components/MediaDocumentList.php:L17 | neighbors=[MediaDocumentList]
- "components_offerlist_offerlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L46 | neighbors=[OfferList]
- "components_onthemarketsynclist_onthemarketsynclist_render": ".render()" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/src/Components/OnTheMarketSyncList.php:L16 | neighbors=[OnTheMarketSyncList]
- "components_partylist_partylist_render": ".render()" | kind=code-symbol | source=modules/real-estate-parties-livewire/src/Components/PartyList.php:L17 | neighbors=[PartyList]
- "components_portalreportlist_portalreportlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/src/Components/PortalReportList.php:L16 | neighbors=[PortalReportList]
- "components_property_card_blade": "property-card.blade.php" | kind=code-symbol | source=themes/real-estate-default/resources/views/components/property-card.blade.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "components_property_grid_blade": "property-grid.blade.php" | kind=code-symbol | source=themes/real-estate-default/resources/views/components/property-grid.blade.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "components_propertylist_propertylist_render": ".render()" | kind=code-symbol | source=modules/real-estate-properties-livewire/src/Components/PropertyList.php:L17 | neighbors=[PropertyList]
- "components_rich_editor_addcommands": "addCommands()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js]
- "components_rich_editor_addnodeview": "addNodeView()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L127 | neighbors=[rich-editor.js]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-172.json

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
