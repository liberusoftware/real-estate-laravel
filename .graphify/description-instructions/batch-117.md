# Node Description Batch 118 of 212

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

- "application_deleteviewing_deleteviewing": "DeleteViewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/DeleteViewing.php:L9 | neighbors=[DeleteViewing.php, .handle()]
- "application_deletezooplasync": "DeleteZooplaSync.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/DeleteZooplaSync.php:L1 | neighbors=[DeleteZooplaSync, 1cdd121 Add independent property portal…]
- "application_deletezooplasync_deletezooplasync": "DeleteZooplaSync" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/DeleteZooplaSync.php:L10 | neighbors=[DeleteZooplaSync.php, .handle()]
- "application_markviewingnoshow_markviewingnoshow": "MarkViewingNoShow" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/MarkViewingNoShow.php:L12 | neighbors=[MarkViewingNoShow.php, .handle()]
- "application_recordlettingfailure": "RecordLettingFailure.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/RecordLettingFailure.php:L1 | neighbors=[RecordLettingFailure, 3735f58 Complete letting and property m…]
- "application_recordlettingfailure_recordlettingfailure": "RecordLettingFailure" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/RecordLettingFailure.php:L10 | neighbors=[RecordLettingFailure.php, .handle()]
- "application_recordmanagementfailure": "RecordManagementFailure.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/RecordManagementFailure.php:L1 | neighbors=[RecordManagementFailure, 3735f58 Complete letting and property m…]
- "application_recordmanagementfailure_recordmanagementfailure": "RecordManagementFailure" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/RecordManagementFailure.php:L10 | neighbors=[RecordManagementFailure.php, .handle()]
- "application_recordofferproof_recordofferproof": "RecordOfferProof" | kind=code-symbol | source=modules/real-estate-offers/src/Application/RecordOfferProof.php:L10 | neighbors=[RecordOfferProof.php, .handle()]
- "application_schedulevaluation_schedulevaluation": "ScheduleValuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/ScheduleValuation.php:L12 | neighbors=[ScheduleValuation.php, .handle()]
- "application_transitionletting_transitionletting": "TransitionLetting" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/TransitionLetting.php:L12 | neighbors=[TransitionLetting.php, .handle()]
- "application_transitionmanagementrecord_transitionmanagementrecord": "TransitionManagementRecord" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/TransitionManagementRecord.php:L12 | neighbors=[TransitionManagementRecord.php, .handle()]
- "application_transitionoffer_transitionoffer": "TransitionOffer" | kind=code-symbol | source=modules/real-estate-offers/src/Application/TransitionOffer.php:L12 | neighbors=[TransitionOffer.php, .handle()]
- "application_updateagency_updateagency": "UpdateAgency" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateAgency.php:L11 | neighbors=[UpdateAgency.php, .handle()]
- "application_updatebranch": "UpdateBranch.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateBranch.php:L1 | neighbors=[UpdateBranch, 0b733c9 Add real estate core module sur…]
- "application_updatebranch_updatebranch": "UpdateBranch" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateBranch.php:L11 | neighbors=[UpdateBranch.php, .handle()]
- "application_updateinstruction_updateinstruction": "UpdateInstruction" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/UpdateInstruction.php:L10 | neighbors=[UpdateInstruction.php, .handle()]
- "application_updatelettingdetails": "UpdateLettingDetails.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLettingDetails.php:L1 | neighbors=[UpdateLettingDetails, 3735f58 Complete letting and property m…]
- "application_updatelettingdetails_updatelettingdetails": "UpdateLettingDetails" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLettingDetails.php:L12 | neighbors=[UpdateLettingDetails.php, .handle()]
- "application_updatelisting_updatelisting": "UpdateListing" | kind=code-symbol | source=modules/real-estate-listings/src/Application/UpdateListing.php:L10 | neighbors=[UpdateListing.php, .handle()]
- "application_updatemanagementdetails": "UpdateManagementDetails.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementDetails.php:L1 | neighbors=[UpdateManagementDetails, 3735f58 Complete letting and property m…]
- "application_updatemanagementdetails_updatemanagementdetails": "UpdateManagementDetails" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementDetails.php:L12 | neighbors=[UpdateManagementDetails.php, .handle()]
- "application_updatemarketingcampaign": "UpdateMarketingCampaign.php" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/UpdateMarketingCampaign.php:L1 | neighbors=[UpdateMarketingCampaign, 4fd850d Add real estate marketing modul…]
- "application_updatemarketingcampaign_updatemarketingcampaign": "UpdateMarketingCampaign" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/UpdateMarketingCampaign.php:L10 | neighbors=[UpdateMarketingCampaign.php, .handle()]
- "application_updatematchprofile_updatematchprofile": "UpdateMatchProfile" | kind=code-symbol | source=modules/real-estate-matching/src/Application/UpdateMatchProfile.php:L10 | neighbors=[UpdateMatchProfile.php, .handle()]
- "application_updatemediadocument_updatemediadocument": "UpdateMediaDocument" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/UpdateMediaDocument.php:L10 | neighbors=[UpdateMediaDocument.php, .handle()]
- "application_updateoffer_updateoffer": "UpdateOffer" | kind=code-symbol | source=modules/real-estate-offers/src/Application/UpdateOffer.php:L10 | neighbors=[UpdateOffer.php, .handle()]
- "application_updateonthemarketsync": "UpdateOnTheMarketSync.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/UpdateOnTheMarketSync.php:L1 | neighbors=[UpdateOnTheMarketSync, 1cdd121 Add independent property portal…]
- "application_updateonthemarketsync_updateonthemarketsync": "UpdateOnTheMarketSync" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/UpdateOnTheMarketSync.php:L10 | neighbors=[UpdateOnTheMarketSync.php, .handle()]
- "application_updateparty": "UpdateParty.php" | kind=code-symbol | source=modules/real-estate-parties/src/Application/UpdateParty.php:L1 | neighbors=[UpdateParty, 73659b3 Add real estate parties module …]
- "application_updateparty_updateparty": "UpdateParty" | kind=code-symbol | source=modules/real-estate-parties/src/Application/UpdateParty.php:L11 | neighbors=[UpdateParty.php, .handle()]
- "application_updateportalreport": "UpdatePortalReport.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/UpdatePortalReport.php:L1 | neighbors=[UpdatePortalReport, 3c98a2a Add real estate portals reporti…]
- "application_updateportalreport_updateportalreport": "UpdatePortalReport" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/UpdatePortalReport.php:L10 | neighbors=[UpdatePortalReport.php, .handle()]
- "application_updateproperty_updateproperty": "UpdateProperty" | kind=code-symbol | source=modules/real-estate-properties/src/Application/UpdateProperty.php:L11 | neighbors=[UpdateProperty.php, .handle()]
- "application_updaterightmovesync": "UpdateRightmoveSync.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/UpdateRightmoveSync.php:L1 | neighbors=[UpdateRightmoveSync, 1cdd121 Add independent property portal…]
- "application_updaterightmovesync_updaterightmovesync": "UpdateRightmoveSync" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/UpdateRightmoveSync.php:L10 | neighbors=[UpdateRightmoveSync.php, .handle()]
- "application_updatesalesprogression": "UpdateSalesProgression.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/UpdateSalesProgression.php:L1 | neighbors=[UpdateSalesProgression, 6385f28 Add sales progression modules a…]
- "application_updatesalesprogression_updatesalesprogression": "UpdateSalesProgression" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/UpdateSalesProgression.php:L10 | neighbors=[UpdateSalesProgression.php, .handle()]
- "application_updateterritory_updateterritory": "UpdateTerritory" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateTerritory.php:L11 | neighbors=[UpdateTerritory.php, .handle()]
- "application_updatevaluation_updatevaluation": "UpdateValuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/UpdateValuation.php:L11 | neighbors=[UpdateValuation.php, .handle()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-117.json

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
