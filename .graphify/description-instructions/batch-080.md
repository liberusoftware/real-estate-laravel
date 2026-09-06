# Node Description Batch 81 of 212

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

- "translation_translationregistry_translationregistry": "TranslationRegistry" | kind=code-symbol | source=modules/localization-core/src/Translation/TranslationRegistry.php:L9 | neighbors=[TranslationRegistry.php, .all(), .get(), .register()]
- "transport_onthemarketclient_onthemarketclient_request": ".request()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Transport/OnTheMarketClient.php:L14 | neighbors=[OnTheMarketClient, .branchPropertyList(), .removeProperty(), .sendProperty()]
- "transport_rightmoveclient_rightmoveclient_request": ".request()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Transport/RightmoveClient.php:L14 | neighbors=[RightmoveClient, .branchPropertyList(), .removeProperty(), .sendProperty()]
- "transport_zooplaclient_zooplaclient_request": ".request()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Transport/ZooplaClient.php:L14 | neighbors=[ZooplaClient, .branchPropertyList(), .removeProperty(), .sendProperty()]
- "trusteddevices_trusteddevicemanager_trusteddevicemanager": "TrustedDeviceManager" | kind=code-symbol | source=modules/two-factor-authentication/src/TrustedDevices/TrustedDeviceManager.php:L8 | neighbors=[TrustedDeviceManager.php, .issue(), .revokeAll(), .valid()]
- "views_offer_list_blade": "offer-list.blade.php" | kind=code-symbol | source=modules/real-estate-offers-livewire/resources/views/offer-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…]
- "views_viewing_list_blade": "viewing-list.blade.php" | kind=code-symbol | source=modules/real-estate-viewings-livewire/resources/views/viewing-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…]
- "actions_actions_closemodal": "closeModal()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js, generateModalId(), syncActionModals()]
- "actions_actions_openmodal": "openModal()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js, generateModalId(), syncActionModals()]
- "actions_actions_rememberpreviouslyfocusedelement": "rememberPreviouslyFocusedElement()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js, generateModalId(), syncActionModals()]
- "actions_updateconnectedaccount_updateconnectedaccount": "UpdateConnectedAccount" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/UpdateConnectedAccount.php:L11 | neighbors=[UpdateConnectedAccount.php, .update(), .updateRefreshToken()]
- "adapters_wait_for_core_contracts": "Adapters stay planned until core contracts exist" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Filament adapter tier, Livewire adapter tier]
- "analytics_contracts_package": "liberusoftware/analytics-contracts" | kind=entity | source=modules/analytics-core/README.md | neighbors=[Liberu Analytics Core, Liberu Google Analytics, Liberu Meta Server-Side Tracking]
- "application_calculatecomparables": "CalculateComparables.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CalculateComparables.php:L1 | neighbors=[CalculateComparables, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_cancelviewing": "CancelViewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CancelViewing.php:L1 | neighbors=[CancelViewing, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_completevaluation": "CompleteValuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CompleteValuation.php:L1 | neighbors=[CompleteValuation, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_completeviewing": "CompleteViewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CompleteViewing.php:L1 | neighbors=[CompleteViewing, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_confirmviewing": "ConfirmViewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/ConfirmViewing.php:L1 | neighbors=[ConfirmViewing, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_convertvaluation": "ConvertValuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/ConvertValuation.php:L1 | neighbors=[ConvertValuation, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_createagency": "CreateAgency.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateAgency.php:L1 | neighbors=[CreateAgency, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_createletting": "CreateLetting.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/CreateLetting.php:L1 | neighbors=[CreateLetting, 3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…]
- "application_createmanagementrecord": "CreateManagementRecord.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/CreateManagementRecord.php:L1 | neighbors=[CreateManagementRecord, 3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…]
- "application_createmarketingcampaign": "CreateMarketingCampaign.php" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/CreateMarketingCampaign.php:L1 | neighbors=[CreateMarketingCampaign, 4fd850d Add real estate marketing modul…, e9bffaf Apply complete module formatting]
- "application_creatematchprofile": "CreateMatchProfile.php" | kind=code-symbol | source=modules/real-estate-matching/src/Application/CreateMatchProfile.php:L1 | neighbors=[CreateMatchProfile, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…]
- "application_createonthemarketsync": "CreateOnTheMarketSync.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/CreateOnTheMarketSync.php:L1 | neighbors=[CreateOnTheMarketSync, 1cdd121 Add independent property portal…, e9bffaf Apply complete module formatting]
- "application_createportalreport": "CreatePortalReport.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Application/CreatePortalReport.php:L1 | neighbors=[CreatePortalReport, 3c98a2a Add real estate portals reporti…, e9bffaf Apply complete module formatting]
- "application_createrightmovesync": "CreateRightmoveSync.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/CreateRightmoveSync.php:L1 | neighbors=[CreateRightmoveSync, 1cdd121 Add independent property portal…, e9bffaf Apply complete module formatting]
- "application_createsalesprogression": "CreateSalesProgression.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Application/CreateSalesProgression.php:L1 | neighbors=[CreateSalesProgression, 6385f28 Add sales progression modules a…, e9bffaf Apply complete module formatting]
- "application_createterritory": "CreateTerritory.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateTerritory.php:L1 | neighbors=[CreateTerritory, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_createzooplasync": "CreateZooplaSync.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/CreateZooplaSync.php:L1 | neighbors=[CreateZooplaSync, 1cdd121 Add independent property portal…, e9bffaf Apply complete module formatting]
- "application_deleteagency": "DeleteAgency.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteAgency.php:L1 | neighbors=[DeleteAgency, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_deleteinstruction": "DeleteInstruction.php" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/DeleteInstruction.php:L1 | neighbors=[DeleteInstruction, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…]
- "application_deletelisting": "DeleteListing.php" | kind=code-symbol | source=modules/real-estate-listings/src/Application/DeleteListing.php:L1 | neighbors=[DeleteListing, 6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…]
- "application_deletematchprofile": "DeleteMatchProfile.php" | kind=code-symbol | source=modules/real-estate-matching/src/Application/DeleteMatchProfile.php:L1 | neighbors=[DeleteMatchProfile, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…]
- "application_deleteoffer": "DeleteOffer.php" | kind=code-symbol | source=modules/real-estate-offers/src/Application/DeleteOffer.php:L1 | neighbors=[DeleteOffer, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…]
- "application_deleteterritory": "DeleteTerritory.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/DeleteTerritory.php:L1 | neighbors=[DeleteTerritory, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_deletevaluation": "DeleteValuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/DeleteValuation.php:L1 | neighbors=[DeleteValuation, 44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…]
- "application_deleteviewing": "DeleteViewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/DeleteViewing.php:L1 | neighbors=[DeleteViewing, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…]
- "application_markviewingnoshow": "MarkViewingNoShow.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/MarkViewingNoShow.php:L1 | neighbors=[MarkViewingNoShow, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_recordofferproof": "RecordOfferProof.php" | kind=code-symbol | source=modules/real-estate-offers/src/Application/RecordOfferProof.php:L1 | neighbors=[RecordOfferProof, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-080.json

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
