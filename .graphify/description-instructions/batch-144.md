# Node Description Batch 145 of 212

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

- "pages_createuser": "CreateUser.php" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/CreateUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CreateUser]
- "pages_createvaluation_createvaluation": "CreateValuation" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/CreateValuation.php:L10 | neighbors=[CreateValuation.php, .handleRecordCreation()]
- "pages_createviewing_createviewing": "CreateViewing" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/CreateViewing.php:L10 | neighbors=[CreateViewing.php, .handleRecordCreation()]
- "pages_createzooplasync_createzooplasync": "CreateZooplaSync" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/CreateZooplaSync.php:L12 | neighbors=[CreateZooplaSync.php, .handleRecordCreation()]
- "pages_editagency_editagency": "EditAgency" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/EditAgency.php:L12 | neighbors=[EditAgency.php, .handleRecordUpdate()]
- "pages_editbranch": "EditBranch.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/EditBranch.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, EditBranch]
- "pages_editbranch_editbranch": "EditBranch" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/EditBranch.php:L12 | neighbors=[EditBranch.php, .handleRecordUpdate()]
- "pages_editinstruction_editinstruction": "EditInstruction" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/EditInstruction.php:L12 | neighbors=[EditInstruction.php, .handleRecordUpdate()]
- "pages_editletting_editletting": "EditLetting" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/EditLetting.php:L12 | neighbors=[EditLetting.php, .handleRecordUpdate()]
- "pages_editlisting_editlisting": "EditListing" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/EditListing.php:L12 | neighbors=[EditListing.php, .handleRecordUpdate()]
- "pages_editmanagementrecord_editmanagementrecord": "EditManagementRecord" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/EditManagementRecord.php:L12 | neighbors=[EditManagementRecord.php, .handleRecordUpdate()]
- "pages_editmarketingcampaign_editmarketingcampaign": "EditMarketingCampaign" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/EditMarketingCampaign.php:L12 | neighbors=[EditMarketingCampaign.php, .handleRecordUpdate()]
- "pages_editmatchprofile_editmatchprofile": "EditMatchProfile" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/EditMatchProfile.php:L12 | neighbors=[EditMatchProfile.php, .handleRecordUpdate()]
- "pages_editmediadocument_editmediadocument": "EditMediaDocument" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/EditMediaDocument.php:L12 | neighbors=[EditMediaDocument.php, .handleRecordUpdate()]
- "pages_editoffer_editoffer": "EditOffer" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/EditOffer.php:L12 | neighbors=[EditOffer.php, .handleRecordUpdate()]
- "pages_editonthemarketsync_editonthemarketsync": "EditOnTheMarketSync" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/EditOnTheMarketSync.php:L12 | neighbors=[EditOnTheMarketSync.php, .handleRecordUpdate()]
- "pages_editparty": "EditParty.php" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/EditParty.php:L1 | neighbors=[73659b3 Add real estate parties module …, EditParty]
- "pages_editparty_editparty": "EditParty" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/EditParty.php:L12 | neighbors=[EditParty.php, .handleRecordUpdate()]
- "pages_editportalreport_editportalreport": "EditPortalReport" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/EditPortalReport.php:L12 | neighbors=[EditPortalReport.php, .handleRecordUpdate()]
- "pages_editproperty_editproperty": "EditProperty" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/EditProperty.php:L12 | neighbors=[EditProperty.php, .handleRecordUpdate()]
- "pages_editrightmovesync_editrightmovesync": "EditRightmoveSync" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/EditRightmoveSync.php:L12 | neighbors=[EditRightmoveSync.php, .handleRecordUpdate()]
- "pages_editsalesprogression_editsalesprogression": "EditSalesProgression" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/EditSalesProgression.php:L12 | neighbors=[EditSalesProgression.php, .handleRecordUpdate()]
- "pages_editteam": "EditTeam.php" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/EditTeam.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EditTeam]
- "pages_editteam_editteam": "EditTeam" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/EditTeam.php:L9 | neighbors=[EditTeam.php, .getHeaderActions()]
- "pages_editterritory_editterritory": "EditTerritory" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/EditTerritory.php:L12 | neighbors=[EditTerritory.php, .handleRecordUpdate()]
- "pages_edituser": "EditUser.php" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/EditUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EditUser]
- "pages_edituser_edituser": "EditUser" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/EditUser.php:L9 | neighbors=[EditUser.php, .getHeaderActions()]
- "pages_editvaluation_editvaluation": "EditValuation" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/EditValuation.php:L10 | neighbors=[EditValuation.php, .handleRecordUpdate()]
- "pages_editviewing_editviewing": "EditViewing" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/EditViewing.php:L10 | neighbors=[EditViewing.php, .handleRecordUpdate()]
- "pages_editzooplasync_editzooplasync": "EditZooplaSync" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/EditZooplaSync.php:L12 | neighbors=[EditZooplaSync.php, .handleRecordUpdate()]
- "pages_foundationoperations": "FoundationOperations.php" | kind=code-symbol | source=modules/module-manager-filament/src/Pages/FoundationOperations.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, FoundationOperations]
- "pages_listbranches": "ListBranches.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/ListBranches.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, ListBranches]
- "pages_listinstructions_listinstructions": "ListInstructions" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/ListInstructions.php:L9 | neighbors=[ListInstructions.php, .getHeaderActions()]
- "pages_listlettings": "ListLettings.php" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/ListLettings.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, ListLettings]
- "pages_listlettings_listlettings": "ListLettings" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/ListLettings.php:L11 | neighbors=[ListLettings.php, .getHeaderActions()]
- "pages_listlistings_listlistings": "ListListings" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/ListListings.php:L9 | neighbors=[ListListings.php, .getHeaderActions()]
- "pages_listmanagementrecords": "ListManagementRecords.php" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/ListManagementRecords.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, ListManagementRecords]
- "pages_listmanagementrecords_listmanagementrecords": "ListManagementRecords" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/ListManagementRecords.php:L11 | neighbors=[ListManagementRecords.php, .getHeaderActions()]
- "pages_listmarketingcampaigns": "ListMarketingCampaigns.php" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/ListMarketingCampaigns.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, ListMarketingCampaigns]
- "pages_listmatchprofiles_listmatchprofiles": "ListMatchProfiles" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/ListMatchProfiles.php:L9 | neighbors=[ListMatchProfiles.php, .getHeaderActions()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-144.json

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
