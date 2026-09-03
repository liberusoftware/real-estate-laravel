# Node Description Batch 181 of 212

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

- "controllers_marketingcampaigncontroller_marketingcampaigncontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L27 | neighbors=[MarketingCampaignController]
- "controllers_marketingcampaigncontroller_marketingcampaigncontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L43 | neighbors=[MarketingCampaignController]
- "controllers_matchprofilecontroller_matchprofilecontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L52 | neighbors=[MatchProfileController]
- "controllers_matchprofilecontroller_matchprofilecontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L18 | neighbors=[MatchProfileController]
- "controllers_matchprofilecontroller_matchprofilecontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L36 | neighbors=[MatchProfileController]
- "controllers_matchprofilecontroller_matchprofilecontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L27 | neighbors=[MatchProfileController]
- "controllers_matchprofilecontroller_matchprofilecontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Controllers/MatchProfileController.php:L43 | neighbors=[MatchProfileController]
- "controllers_mediadocumentcontroller_mediadocumentcontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L61 | neighbors=[MediaDocumentController]
- "controllers_mediadocumentcontroller_mediadocumentcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L18 | neighbors=[MediaDocumentController]
- "controllers_mediadocumentcontroller_mediadocumentcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L45 | neighbors=[MediaDocumentController]
- "controllers_mediadocumentcontroller_mediadocumentcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L27 | neighbors=[MediaDocumentController]
- "controllers_mediadocumentcontroller_mediadocumentcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Controllers/MediaDocumentController.php:L52 | neighbors=[MediaDocumentController]
- "controllers_offercontroller_offercontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L56 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L22 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_proof": ".proof()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L75 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L40 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L31 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_timeline": ".timeline()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L83 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_transition": ".transition()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L65 | neighbors=[OfferController]
- "controllers_offercontroller_offercontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L47 | neighbors=[OfferController]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L60 | neighbors=[OnTheMarketSyncController]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L19 | neighbors=[OnTheMarketSyncController]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L36 | neighbors=[OnTheMarketSyncController]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L27 | neighbors=[OnTheMarketSyncController]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller_sync": ".sync()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L43 | neighbors=[OnTheMarketSyncController]
- "controllers_onthemarketsynccontroller_onthemarketsynccontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Controllers/OnTheMarketSyncController.php:L51 | neighbors=[OnTheMarketSyncController]
- "controllers_partycontroller_partycontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L65 | neighbors=[PartyController]
- "controllers_partycontroller_partycontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L18 | neighbors=[PartyController]
- "controllers_partycontroller_partycontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L43 | neighbors=[PartyController]
- "controllers_partycontroller_partycontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L27 | neighbors=[PartyController]
- "controllers_partycontroller_partycontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Controllers/PartyController.php:L50 | neighbors=[PartyController]
- "controllers_portalreportcontroller_portalreportcontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L52 | neighbors=[PortalReportController]
- "controllers_portalreportcontroller_portalreportcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L18 | neighbors=[PortalReportController]
- "controllers_portalreportcontroller_portalreportcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L36 | neighbors=[PortalReportController]
- "controllers_portalreportcontroller_portalreportcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L27 | neighbors=[PortalReportController]
- "controllers_portalreportcontroller_portalreportcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Controllers/PortalReportController.php:L43 | neighbors=[PortalReportController]
- "controllers_propertycontroller_propertycontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L114 | neighbors=[PropertyController]
- "controllers_propertycontroller_propertycontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L18 | neighbors=[PropertyController]
- "controllers_propertycontroller_propertycontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L68 | neighbors=[PropertyController]
- "controllers_propertycontroller_propertycontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L28 | neighbors=[PropertyController]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-180.json

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
