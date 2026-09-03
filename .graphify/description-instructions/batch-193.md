# Node Description Batch 194 of 212

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

- "organization_actor_contract": "OrganizationActor Contract" | kind=entity | source=modules/organizations-teams/README.md | neighbors=[liberusoftware/organizations-teams]
- "package_category_adapter": "Package Category: adapter" | kind=entity | source=modules/localization-mymemory/README.md | neighbors=[Liberu MyMemory Translation]
- "packagist_module_prefix_omission": "Packagist Names Omit the module- Prefix" | kind=entity | source=projects/LIBERU.md | neighbors=[Liberu Application Composition]
- "pages_account_security_blade": "account-security.blade.php" | kind=code-symbol | source=modules/sessions-devices-filament/resources/views/pages/account-security.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "pages_accountsecurity_accountsecurity_canaccess": ".canAccess()" | kind=code-symbol | source=modules/sessions-devices-filament/src/Pages/AccountSecurity.php:L32 | neighbors=[AccountSecurity]
- "pages_accountsecurity_accountsecurity_mount": ".mount()" | kind=code-symbol | source=modules/sessions-devices-filament/src/Pages/AccountSecurity.php:L21 | neighbors=[AccountSecurity]
- "pages_accountsecurity_accountsecurity_revoke": ".revoke()" | kind=code-symbol | source=modules/sessions-devices-filament/src/Pages/AccountSecurity.php:L26 | neighbors=[AccountSecurity]
- "pages_createagency_createagency_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/CreateAgency.php:L16 | neighbors=[CreateAgency]
- "pages_createbranch_createbranch_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/CreateBranch.php:L16 | neighbors=[CreateBranch]
- "pages_createinstruction_createinstruction_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/CreateInstruction.php:L16 | neighbors=[CreateInstruction]
- "pages_createletting_createletting_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/CreateLetting.php:L16 | neighbors=[CreateLetting]
- "pages_createlisting_createlisting_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/CreateListing.php:L16 | neighbors=[CreateListing]
- "pages_createmanagementrecord_createmanagementrecord_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/CreateManagementRecord.php:L16 | neighbors=[CreateManagementRecord]
- "pages_createmarketingcampaign_createmarketingcampaign_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/CreateMarketingCampaign.php:L16 | neighbors=[CreateMarketingCampaign]
- "pages_creatematchprofile_creatematchprofile_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/CreateMatchProfile.php:L16 | neighbors=[CreateMatchProfile]
- "pages_createmediadocument_createmediadocument_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/CreateMediaDocument.php:L16 | neighbors=[CreateMediaDocument]
- "pages_createoffer_createoffer_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/CreateOffer.php:L16 | neighbors=[CreateOffer]
- "pages_createonthemarketsync_createonthemarketsync_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/CreateOnTheMarketSync.php:L16 | neighbors=[CreateOnTheMarketSync]
- "pages_createparty_createparty_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/CreateParty.php:L16 | neighbors=[CreateParty]
- "pages_createportalreport_createportalreport_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/CreatePortalReport.php:L16 | neighbors=[CreatePortalReport]
- "pages_createproperty_createproperty_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/CreateProperty.php:L16 | neighbors=[CreateProperty]
- "pages_createrightmovesync_createrightmovesync_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/CreateRightmoveSync.php:L16 | neighbors=[CreateRightmoveSync]
- "pages_createsalesprogression_createsalesprogression_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/CreateSalesProgression.php:L16 | neighbors=[CreateSalesProgression]
- "pages_createteam_createteam": "CreateTeam" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/CreateTeam.php:L8 | neighbors=[CreateTeam.php]
- "pages_createterritory_createterritory_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/CreateTerritory.php:L16 | neighbors=[CreateTerritory]
- "pages_createuser_createuser": "CreateUser" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/CreateUser.php:L8 | neighbors=[CreateUser.php]
- "pages_createvaluation_createvaluation_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/CreateValuation.php:L14 | neighbors=[CreateValuation]
- "pages_createviewing_createviewing_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/CreateViewing.php:L14 | neighbors=[CreateViewing]
- "pages_createzooplasync_createzooplasync_handlerecordcreation": ".handleRecordCreation()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/CreateZooplaSync.php:L16 | neighbors=[CreateZooplaSync]
- "pages_editagency_editagency_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/EditAgency.php:L16 | neighbors=[EditAgency]
- "pages_editbranch_editbranch_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/EditBranch.php:L16 | neighbors=[EditBranch]
- "pages_editinstruction_editinstruction_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/EditInstruction.php:L16 | neighbors=[EditInstruction]
- "pages_editletting_editletting_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/EditLetting.php:L16 | neighbors=[EditLetting]
- "pages_editlisting_editlisting_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/EditListing.php:L16 | neighbors=[EditListing]
- "pages_editmanagementrecord_editmanagementrecord_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/EditManagementRecord.php:L16 | neighbors=[EditManagementRecord]
- "pages_editmarketingcampaign_editmarketingcampaign_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/EditMarketingCampaign.php:L16 | neighbors=[EditMarketingCampaign]
- "pages_editmatchprofile_editmatchprofile_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/EditMatchProfile.php:L16 | neighbors=[EditMatchProfile]
- "pages_editmediadocument_editmediadocument_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/EditMediaDocument.php:L16 | neighbors=[EditMediaDocument]
- "pages_editoffer_editoffer_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/EditOffer.php:L16 | neighbors=[EditOffer]
- "pages_editonthemarketsync_editonthemarketsync_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/EditOnTheMarketSync.php:L16 | neighbors=[EditOnTheMarketSync]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-193.json

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
