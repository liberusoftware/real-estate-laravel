# Node Description Batch 161 of 212

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

- "application_createagency_createagency_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateAgency.php:L14 | neighbors=[CreateAgency]
- "application_createbranch_createbranch_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateBranch.php:L14 | neighbors=[CreateBranch]
- "application_createinstruction_createinstruction_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/CreateInstruction.php:L14 | neighbors=[CreateInstruction]
- "application_createletting_createletting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/CreateLetting.php:L16 | neighbors=[CreateLetting]
- "application_createlisting_createlisting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-listings/src/Application/CreateListing.php:L14 | neighbors=[CreateListing]
- "application_createmanagementrecord_createmanagementrecord_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/CreateManagementRecord.php:L16 | neighbors=[CreateManagementRecord]
- "application_createmarketingcampaign_createmarketingcampaign_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/CreateMarketingCampaign.php:L14 | neighbors=[CreateMarketingCampaign]
- "application_creatematchprofile_creatematchprofile_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-matching/src/Application/CreateMatchProfile.php:L13 | neighbors=[CreateMatchProfile]
- "application_createmediadocument_createmediadocument_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/CreateMediaDocument.php:L14 | neighbors=[CreateMediaDocument]
- "application_createoffer_createoffer_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-offers/src/Application/CreateOffer.php:L14 | neighbors=[CreateOffer]
- "application_createonthemarketsync_createonthemarketsync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/CreateOnTheMarketSync.php:L13 | neighbors=[CreateOnTheMarketSync]
- "application_createparty_createparty_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-parties/src/Application/CreateParty.php:L15 | neighbors=[CreateParty]
- "application_createportalreport_createportalreport_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/CreatePortalReport.php:L14 | neighbors=[CreatePortalReport]
- "application_createproperty_createproperty_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-properties/src/Application/CreateProperty.php:L15 | neighbors=[CreateProperty]
- "application_createrightmovesync_createrightmovesync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/CreateRightmoveSync.php:L13 | neighbors=[CreateRightmoveSync]
- "application_createsalesprogression_createsalesprogression_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/CreateSalesProgression.php:L14 | neighbors=[CreateSalesProgression]
- "application_createterritory_createterritory_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateTerritory.php:L14 | neighbors=[CreateTerritory]
- "application_createvaluation_createvaluation_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CreateValuation.php:L14 | neighbors=[CreateValuation]
- "application_createviewing_createviewing_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CreateViewing.php:L14 | neighbors=[CreateViewing]
- "application_createzooplasync_createzooplasync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/CreateZooplaSync.php:L13 | neighbors=[CreateZooplaSync]
- "application_deleteagency_deleteagency_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteAgency.php:L12 | neighbors=[DeleteAgency]
- "application_deletebranch_deletebranch_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteBranch.php:L12 | neighbors=[DeleteBranch]
- "application_deleteinstruction_deleteinstruction_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/DeleteInstruction.php:L11 | neighbors=[DeleteInstruction]
- "application_deletelisting_deletelisting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-listings/src/Application/DeleteListing.php:L11 | neighbors=[DeleteListing]
- "application_deletemarketingcampaign_deletemarketingcampaign_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/DeleteMarketingCampaign.php:L12 | neighbors=[DeleteMarketingCampaign]
- "application_deletematchprofile_deletematchprofile_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-matching/src/Application/DeleteMatchProfile.php:L11 | neighbors=[DeleteMatchProfile]
- "application_deletemediadocument_deletemediadocument_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/DeleteMediaDocument.php:L11 | neighbors=[DeleteMediaDocument]
- "application_deleteoffer_deleteoffer_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-offers/src/Application/DeleteOffer.php:L11 | neighbors=[DeleteOffer]
- "application_deleteonthemarketsync_deleteonthemarketsync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/DeleteOnTheMarketSync.php:L12 | neighbors=[DeleteOnTheMarketSync]
- "application_deleteparty_deleteparty_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-parties/src/Application/DeleteParty.php:L12 | neighbors=[DeleteParty]
- "application_deleteportalreport_deleteportalreport_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/DeletePortalReport.php:L12 | neighbors=[DeletePortalReport]
- "application_deleteproperty_deleteproperty_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-properties/src/Application/DeleteProperty.php:L12 | neighbors=[DeleteProperty]
- "application_deleterightmovesync_deleterightmovesync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/DeleteRightmoveSync.php:L12 | neighbors=[DeleteRightmoveSync]
- "application_deletesalesprogression_deletesalesprogression_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/DeleteSalesProgression.php:L12 | neighbors=[DeleteSalesProgression]
- "application_deleteterritory_deleteterritory_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteTerritory.php:L12 | neighbors=[DeleteTerritory]
- "application_deletevaluation_deletevaluation_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/DeleteValuation.php:L11 | neighbors=[DeleteValuation]
- "application_deleteviewing_deleteviewing_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/DeleteViewing.php:L11 | neighbors=[DeleteViewing]
- "application_deletezooplasync_deletezooplasync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/DeleteZooplaSync.php:L12 | neighbors=[DeleteZooplaSync]
- "application_markviewingnoshow_markviewingnoshow_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/MarkViewingNoShow.php:L14 | neighbors=[MarkViewingNoShow]
- "application_recordlettingfailure_recordlettingfailure_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/RecordLettingFailure.php:L12 | neighbors=[RecordLettingFailure]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-160.json

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
