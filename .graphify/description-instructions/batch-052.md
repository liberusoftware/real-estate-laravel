# Node Description Batch 53 of 212

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
For an entity node (any other kind — e.g. a person, place, event, object),
describe what the entity is and its role, grounded in its type, its
relations (neighbors) and the provided citations/evidence — e.g.
"Lady Carfax, a wealthy heiress who disappears en route to Lausanne.".
Ground entity descriptions in the citations/evidence when present; do not
speculate beyond the context, so a node with no supporting context may be
left out of the reply.
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "models_offer_offer": "Offer" | kind=code-symbol | source=modules/real-estate-offers/src/Models/Offer.php:L12 | neighbors=[Offer.php, .canTransitionTo(), .casts(), .events(), .scopeForTeam()]
- "models_property": "Property.php" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 70e3a0a Harden real estate property pac…, 75d6371 Add real estate properties modu…, 8cf045c Implement real estate module co…, Property]
- "models_valuation": "Valuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Models/Valuation.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, Valuation]
- "models_viewing": "Viewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Models/Viewing.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, Viewing]
- "notifications_notifications_status": "status()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, danger(), info(), success(), warning()]
- "notifications_notifications_view": "view()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, button(), grouped(), iconButton(), link()]
- "package_testbench": "liberusoftware/package-testbench" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Liberu Developer Experience, Handoff: Conformance Step 5 (Test Redis…, Trap: defineEnvironment() overrides mus…, Trap: do not tag before something has r…, Trap: an empty tests/ directory does no…]
- "pages_createinstruction": "CreateInstruction.php" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/CreateInstruction.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, CreateInstruction]
- "pages_createletting": "CreateLetting.php" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/CreateLetting.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, CreateLetting]
- "pages_createlisting": "CreateListing.php" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/CreateListing.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, b9f8ca5 Add real estate listings module…, CreateListing]
- "pages_createmanagementrecord": "CreateManagementRecord.php" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/CreateManagementRecord.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, CreateManagementRecord]
- "pages_creatematchprofile": "CreateMatchProfile.php" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/CreateMatchProfile.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, 8cf045c Implement real estate module co…, CreateMatchProfile]
- "pages_createmediadocument": "CreateMediaDocument.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/CreateMediaDocument.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, 8cf045c Implement real estate module co…, CreateMediaDocument]
- "pages_createoffer": "CreateOffer.php" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/CreateOffer.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, CreateOffer]
- "pages_createvaluation": "CreateValuation.php" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/CreateValuation.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, CreateValuation]
- "pages_createviewing": "CreateViewing.php" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/CreateViewing.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, CreateViewing]
- "pages_editinstruction": "EditInstruction.php" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/EditInstruction.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, EditInstruction]
- "pages_editletting": "EditLetting.php" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/EditLetting.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, EditLetting]
- "pages_editlisting": "EditListing.php" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/EditListing.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, b9f8ca5 Add real estate listings module…, EditListing]
- "pages_editmanagementrecord": "EditManagementRecord.php" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/EditManagementRecord.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, EditManagementRecord]
- "pages_editmarketingcampaign": "EditMarketingCampaign.php" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/EditMarketingCampaign.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, EditMarketingCampaign]
- "pages_editmatchprofile": "EditMatchProfile.php" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/EditMatchProfile.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, 8cf045c Implement real estate module co…, EditMatchProfile]
- "pages_editmediadocument": "EditMediaDocument.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/EditMediaDocument.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, 8cf045c Implement real estate module co…, EditMediaDocument]
- "pages_editoffer": "EditOffer.php" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/EditOffer.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, EditOffer]
- "pages_editonthemarketsync": "EditOnTheMarketSync.php" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/EditOnTheMarketSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, EditOnTheMarketSync]
- "pages_editportalreport": "EditPortalReport.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/EditPortalReport.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, EditPortalReport]
- "pages_editrightmovesync": "EditRightmoveSync.php" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/EditRightmoveSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, EditRightmoveSync]
- "pages_editsalesprogression": "EditSalesProgression.php" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/EditSalesProgression.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, EditSalesProgression]
- "pages_editvaluation": "EditValuation.php" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/EditValuation.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, EditValuation]
- "pages_editviewing": "EditViewing.php" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/EditViewing.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, EditViewing]
- "pages_editzooplasync": "EditZooplaSync.php" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/EditZooplaSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, EditZooplaSync]
- "pkg_real_estate_core": "liberusoftware/real-estate-core" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Real Estate Core, liberusoftware/real-estate-core-api, liberusoftware/real-estate-core-filament, liberusoftware/real-estate-core-livewire]
- "pkg_real_estate_instructions": "liberusoftware/real-estate-instructions" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Instructions, liberusoftware/real-estate-instructions…, liberusoftware/real-estate-instructions…, liberusoftware/real-estate-instructions…]
- "pkg_real_estate_listings": "liberusoftware/real-estate-listings" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Listings, liberusoftware/real-estate-listings-api, liberusoftware/real-estate-listings-fil…, liberusoftware/real-estate-listings-liv…]
- "pkg_real_estate_marketing": "liberusoftware/real-estate-marketing" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Marketing, liberusoftware/real-estate-marketing-api, liberusoftware/real-estate-marketing-fi…, liberusoftware/real-estate-marketing-li…]
- "pkg_real_estate_matching": "liberusoftware/real-estate-matching" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Matching, liberusoftware/real-estate-matching-api, liberusoftware/real-estate-matching-fil…, liberusoftware/real-estate-matching-liv…]
- "pkg_real_estate_media_and_documents": "liberusoftware/real-estate-media-and-documents" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Media and Docum…, liberusoftware/real-estate-media-and-do…, liberusoftware/real-estate-media-and-do…, liberusoftware/real-estate-media-and-do…]
- "pkg_real_estate_offers": "liberusoftware/real-estate-offers" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Offers, liberusoftware/real-estate-offers-api, liberusoftware/real-estate-offers-filam…, liberusoftware/real-estate-offers-livew…]
- "pkg_real_estate_onthemarket": "liberusoftware/real-estate-onthemarket" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Core (domain) tier, Portal provider: OnTheMarket, liberusoftware/real-estate-onthemarket-…, liberusoftware/real-estate-onthemarket-…, liberusoftware/real-estate-onthemarket-…]
- "pkg_real_estate_parties": "liberusoftware/real-estate-parties" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Parties, liberusoftware/real-estate-parties-api, liberusoftware/real-estate-parties-fila…, liberusoftware/real-estate-parties-live…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-052.json

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
