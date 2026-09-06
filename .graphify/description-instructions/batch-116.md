# Node Description Batch 117 of 212

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

- "application_creatematchprofile_creatematchprofile": "CreateMatchProfile" | kind=code-symbol | source=modules/real-estate-matching/src/Application/CreateMatchProfile.php:L11 | neighbors=[CreateMatchProfile.php, .handle()]
- "application_createmediadocument": "CreateMediaDocument.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/CreateMediaDocument.php:L1 | neighbors=[CreateMediaDocument, 0910e2b Add real estate media and docum…]
- "application_createmediadocument_createmediadocument": "CreateMediaDocument" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/CreateMediaDocument.php:L11 | neighbors=[CreateMediaDocument.php, .handle()]
- "application_createoffer_createoffer": "CreateOffer" | kind=code-symbol | source=modules/real-estate-offers/src/Application/CreateOffer.php:L12 | neighbors=[CreateOffer.php, .handle()]
- "application_createonthemarketsync_createonthemarketsync": "CreateOnTheMarketSync" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/CreateOnTheMarketSync.php:L11 | neighbors=[CreateOnTheMarketSync.php, .handle()]
- "application_createparty": "CreateParty.php" | kind=code-symbol | source=modules/real-estate-parties/src/Application/CreateParty.php:L1 | neighbors=[CreateParty, 73659b3 Add real estate parties module …]
- "application_createparty_createparty": "CreateParty" | kind=code-symbol | source=modules/real-estate-parties/src/Application/CreateParty.php:L12 | neighbors=[CreateParty.php, .handle()]
- "application_createportalreport_createportalreport": "CreatePortalReport" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/CreatePortalReport.php:L12 | neighbors=[CreatePortalReport.php, .handle()]
- "application_createproperty_createproperty": "CreateProperty" | kind=code-symbol | source=modules/real-estate-properties/src/Application/CreateProperty.php:L12 | neighbors=[CreateProperty.php, .handle()]
- "application_createrightmovesync_createrightmovesync": "CreateRightmoveSync" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/CreateRightmoveSync.php:L11 | neighbors=[CreateRightmoveSync.php, .handle()]
- "application_createsalesprogression_createsalesprogression": "CreateSalesProgression" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/CreateSalesProgression.php:L12 | neighbors=[CreateSalesProgression.php, .handle()]
- "application_createterritory_createterritory": "CreateTerritory" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateTerritory.php:L11 | neighbors=[CreateTerritory.php, .handle()]
- "application_createvaluation_createvaluation": "CreateValuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CreateValuation.php:L12 | neighbors=[CreateValuation.php, .handle()]
- "application_createviewing_createviewing": "CreateViewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CreateViewing.php:L12 | neighbors=[CreateViewing.php, .handle()]
- "application_createzooplasync_createzooplasync": "CreateZooplaSync" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/CreateZooplaSync.php:L11 | neighbors=[CreateZooplaSync.php, .handle()]
- "application_deleteagency_deleteagency": "DeleteAgency" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteAgency.php:L10 | neighbors=[DeleteAgency.php, .handle()]
- "application_deletebranch": "DeleteBranch.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteBranch.php:L1 | neighbors=[DeleteBranch, 0b733c9 Add real estate core module sur…]
- "application_deletebranch_deletebranch": "DeleteBranch" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteBranch.php:L10 | neighbors=[DeleteBranch.php, .handle()]
- "application_deleteinstruction_deleteinstruction": "DeleteInstruction" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/DeleteInstruction.php:L9 | neighbors=[DeleteInstruction.php, .handle()]
- "application_deletelisting_deletelisting": "DeleteListing" | kind=code-symbol | source=modules/real-estate-listings/src/Application/DeleteListing.php:L9 | neighbors=[DeleteListing.php, .handle()]
- "application_deletemarketingcampaign": "DeleteMarketingCampaign.php" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/DeleteMarketingCampaign.php:L1 | neighbors=[DeleteMarketingCampaign, 4fd850d Add real estate marketing modul…]
- "application_deletemarketingcampaign_deletemarketingcampaign": "DeleteMarketingCampaign" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/DeleteMarketingCampaign.php:L10 | neighbors=[DeleteMarketingCampaign.php, .handle()]
- "application_deletematchprofile_deletematchprofile": "DeleteMatchProfile" | kind=code-symbol | source=modules/real-estate-matching/src/Application/DeleteMatchProfile.php:L9 | neighbors=[DeleteMatchProfile.php, .handle()]
- "application_deletemediadocument": "DeleteMediaDocument.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/DeleteMediaDocument.php:L1 | neighbors=[DeleteMediaDocument, 0910e2b Add real estate media and docum…]
- "application_deletemediadocument_deletemediadocument": "DeleteMediaDocument" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/DeleteMediaDocument.php:L9 | neighbors=[DeleteMediaDocument.php, .handle()]
- "application_deleteoffer_deleteoffer": "DeleteOffer" | kind=code-symbol | source=modules/real-estate-offers/src/Application/DeleteOffer.php:L9 | neighbors=[DeleteOffer.php, .handle()]
- "application_deleteonthemarketsync": "DeleteOnTheMarketSync.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/DeleteOnTheMarketSync.php:L1 | neighbors=[DeleteOnTheMarketSync, 1cdd121 Add independent property portal…]
- "application_deleteonthemarketsync_deleteonthemarketsync": "DeleteOnTheMarketSync" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/DeleteOnTheMarketSync.php:L10 | neighbors=[DeleteOnTheMarketSync.php, .handle()]
- "application_deleteparty": "DeleteParty.php" | kind=code-symbol | source=modules/real-estate-parties/src/Application/DeleteParty.php:L1 | neighbors=[DeleteParty, 73659b3 Add real estate parties module …]
- "application_deleteparty_deleteparty": "DeleteParty" | kind=code-symbol | source=modules/real-estate-parties/src/Application/DeleteParty.php:L10 | neighbors=[DeleteParty.php, .handle()]
- "application_deleteportalreport": "DeletePortalReport.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/DeletePortalReport.php:L1 | neighbors=[DeletePortalReport, 3c98a2a Add real estate portals reporti…]
- "application_deleteportalreport_deleteportalreport": "DeletePortalReport" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/DeletePortalReport.php:L10 | neighbors=[DeletePortalReport.php, .handle()]
- "application_deleteproperty": "DeleteProperty.php" | kind=code-symbol | source=modules/real-estate-properties/src/Application/DeleteProperty.php:L1 | neighbors=[DeleteProperty, f4845d1 Complete real estate property m…]
- "application_deleteproperty_deleteproperty": "DeleteProperty" | kind=code-symbol | source=modules/real-estate-properties/src/Application/DeleteProperty.php:L10 | neighbors=[DeleteProperty.php, .handle()]
- "application_deleterightmovesync": "DeleteRightmoveSync.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/DeleteRightmoveSync.php:L1 | neighbors=[DeleteRightmoveSync, 1cdd121 Add independent property portal…]
- "application_deleterightmovesync_deleterightmovesync": "DeleteRightmoveSync" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/DeleteRightmoveSync.php:L10 | neighbors=[DeleteRightmoveSync.php, .handle()]
- "application_deletesalesprogression": "DeleteSalesProgression.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/DeleteSalesProgression.php:L1 | neighbors=[DeleteSalesProgression, 6385f28 Add sales progression modules a…]
- "application_deletesalesprogression_deletesalesprogression": "DeleteSalesProgression" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/DeleteSalesProgression.php:L10 | neighbors=[DeleteSalesProgression.php, .handle()]
- "application_deleteterritory_deleteterritory": "DeleteTerritory" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteTerritory.php:L10 | neighbors=[DeleteTerritory.php, .handle()]
- "application_deletevaluation_deletevaluation": "DeleteValuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/DeleteValuation.php:L9 | neighbors=[DeleteValuation.php, .handle()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-116.json

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
