# Node Description Batch 162 of 212

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

- "application_recordmanagementfailure_recordmanagementfailure_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/RecordManagementFailure.php:L12 | neighbors=[RecordManagementFailure]
- "application_recordofferproof_recordofferproof_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-offers/src/Application/RecordOfferProof.php:L12 | neighbors=[RecordOfferProof]
- "application_schedulevaluation_schedulevaluation_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/ScheduleValuation.php:L14 | neighbors=[ScheduleValuation]
- "application_synconthemarketlisting_synconthemarketlisting_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/SyncOnTheMarketListing.php:L12 | neighbors=[SyncOnTheMarketListing]
- "application_synconthemarketlisting_synconthemarketlisting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/SyncOnTheMarketListing.php:L14 | neighbors=[SyncOnTheMarketListing]
- "application_syncrightmovelisting_syncrightmovelisting_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/SyncRightmoveListing.php:L12 | neighbors=[SyncRightmoveListing]
- "application_syncrightmovelisting_syncrightmovelisting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/SyncRightmoveListing.php:L14 | neighbors=[SyncRightmoveListing]
- "application_synczooplalisting_synczooplalisting_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/SyncZooplaListing.php:L12 | neighbors=[SyncZooplaListing]
- "application_synczooplalisting_synczooplalisting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/SyncZooplaListing.php:L14 | neighbors=[SyncZooplaListing]
- "application_transitionletting_transitionletting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/TransitionLetting.php:L14 | neighbors=[TransitionLetting]
- "application_transitionmanagementrecord_transitionmanagementrecord_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/TransitionManagementRecord.php:L14 | neighbors=[TransitionManagementRecord]
- "application_transitionoffer_transitionoffer_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-offers/src/Application/TransitionOffer.php:L14 | neighbors=[TransitionOffer]
- "application_updateagency_updateagency_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateAgency.php:L14 | neighbors=[UpdateAgency]
- "application_updatebranch_updatebranch_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateBranch.php:L14 | neighbors=[UpdateBranch]
- "application_updateinstruction_updateinstruction_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/UpdateInstruction.php:L12 | neighbors=[UpdateInstruction]
- "application_updateletting_updateletting_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLetting.php:L14 | neighbors=[UpdateLetting]
- "application_updateletting_updateletting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLetting.php:L16 | neighbors=[UpdateLetting]
- "application_updatelettingdetails_updatelettingdetails_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLettingDetails.php:L14 | neighbors=[UpdateLettingDetails]
- "application_updatelisting_updatelisting_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-listings/src/Application/UpdateListing.php:L12 | neighbors=[UpdateListing]
- "application_updatemanagementdetails_updatemanagementdetails_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementDetails.php:L14 | neighbors=[UpdateManagementDetails]
- "application_updatemanagementrecord_updatemanagementrecord_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementRecord.php:L14 | neighbors=[UpdateManagementRecord]
- "application_updatemanagementrecord_updatemanagementrecord_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementRecord.php:L16 | neighbors=[UpdateManagementRecord]
- "application_updatemarketingcampaign_updatemarketingcampaign_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/UpdateMarketingCampaign.php:L12 | neighbors=[UpdateMarketingCampaign]
- "application_updatematchprofile_updatematchprofile_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-matching/src/Application/UpdateMatchProfile.php:L12 | neighbors=[UpdateMatchProfile]
- "application_updatemediadocument_updatemediadocument_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/UpdateMediaDocument.php:L13 | neighbors=[UpdateMediaDocument]
- "application_updateoffer_updateoffer_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-offers/src/Application/UpdateOffer.php:L12 | neighbors=[UpdateOffer]
- "application_updateonthemarketsync_updateonthemarketsync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/UpdateOnTheMarketSync.php:L12 | neighbors=[UpdateOnTheMarketSync]
- "application_updateparty_updateparty_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-parties/src/Application/UpdateParty.php:L14 | neighbors=[UpdateParty]
- "application_updateportalreport_updateportalreport_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/UpdatePortalReport.php:L12 | neighbors=[UpdatePortalReport]
- "application_updateproperty_updateproperty_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-properties/src/Application/UpdateProperty.php:L14 | neighbors=[UpdateProperty]
- "application_updaterightmovesync_updaterightmovesync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/UpdateRightmoveSync.php:L12 | neighbors=[UpdateRightmoveSync]
- "application_updatesalesprogression_updatesalesprogression_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/UpdateSalesProgression.php:L12 | neighbors=[UpdateSalesProgression]
- "application_updateterritory_updateterritory_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateTerritory.php:L14 | neighbors=[UpdateTerritory]
- "application_updatevaluation_updatevaluation_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/UpdateValuation.php:L13 | neighbors=[UpdateValuation]
- "application_updateviewing_updateviewing_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/UpdateViewing.php:L13 | neighbors=[UpdateViewing]
- "application_updatezooplasync_updatezooplasync_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/UpdateZooplaSync.php:L12 | neighbors=[UpdateZooplaSync]
- "architecture_moduleboundariestest_moduledirectories": "moduleDirectories()" | kind=code-symbol | source=tests/Architecture/ModuleBoundariesTest.php:L16 | neighbors=[ModuleBoundariesTest.php]
- "architecture_moduleboundariestest_modulephpfiles": "modulePhpFiles()" | kind=code-symbol | source=tests/Architecture/ModuleBoundariesTest.php:L37 | neighbors=[ModuleBoundariesTest.php]
- "architecture_moduleboundariestest_packagevendor": "packageVendor()" | kind=code-symbol | source=tests/Architecture/ModuleBoundariesTest.php:L32 | neighbors=[ModuleBoundariesTest.php]
- "bootstrap_providers": "providers.php" | kind=code-symbol | source=bootstrap/providers.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-161.json

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
