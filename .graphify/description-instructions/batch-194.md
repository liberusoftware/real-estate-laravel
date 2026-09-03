# Node Description Batch 195 of 212

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

- "pages_editparty_editparty_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/EditParty.php:L16 | neighbors=[EditParty]
- "pages_editportalreport_editportalreport_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/EditPortalReport.php:L16 | neighbors=[EditPortalReport]
- "pages_editproperty_editproperty_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/EditProperty.php:L17 | neighbors=[EditProperty]
- "pages_editrightmovesync_editrightmovesync_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/EditRightmoveSync.php:L16 | neighbors=[EditRightmoveSync]
- "pages_editsalesprogression_editsalesprogression_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/EditSalesProgression.php:L16 | neighbors=[EditSalesProgression]
- "pages_editteam_editteam_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/EditTeam.php:L16 | neighbors=[EditTeam]
- "pages_editterritory_editterritory_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/EditTerritory.php:L16 | neighbors=[EditTerritory]
- "pages_edituser_edituser_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/EditUser.php:L16 | neighbors=[EditUser]
- "pages_editvaluation_editvaluation_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/EditValuation.php:L14 | neighbors=[EditValuation]
- "pages_editviewing_editviewing_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/EditViewing.php:L14 | neighbors=[EditViewing]
- "pages_editzooplasync_editzooplasync_handlerecordupdate": ".handleRecordUpdate()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/EditZooplaSync.php:L16 | neighbors=[EditZooplaSync]
- "pages_foundation_operations_blade": "foundation-operations.blade.php" | kind=code-symbol | source=modules/module-manager-filament/resources/views/pages/foundation-operations.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "pages_foundationoperations_foundationoperations_canaccess": ".canAccess()" | kind=code-symbol | source=modules/module-manager-filament/src/Pages/FoundationOperations.php:L26 | neighbors=[FoundationOperations]
- "pages_foundationoperations_foundationoperations_mount": ".mount()" | kind=code-symbol | source=modules/module-manager-filament/src/Pages/FoundationOperations.php:L21 | neighbors=[FoundationOperations]
- "pages_home_blade": "home.blade.php" | kind=code-symbol | source=themes/real-estate-default/resources/views/pages/home.blade.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "pages_listagencies_listagencies": "ListAgencies" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/ListAgencies.php:L10 | neighbors=[ListAgencies.php]
- "pages_listbranches_listbranches": "ListBranches" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/ListBranches.php:L10 | neighbors=[ListBranches.php]
- "pages_listinstructions_listinstructions_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/ListInstructions.php:L13 | neighbors=[ListInstructions]
- "pages_listlettings_listlettings_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/ListLettings.php:L15 | neighbors=[ListLettings]
- "pages_listlistings_listlistings_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/ListListings.php:L13 | neighbors=[ListListings]
- "pages_listmanagementrecords_listmanagementrecords_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/ListManagementRecords.php:L15 | neighbors=[ListManagementRecords]
- "pages_listmarketingcampaigns_listmarketingcampaigns": "ListMarketingCampaigns" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/ListMarketingCampaigns.php:L10 | neighbors=[ListMarketingCampaigns.php]
- "pages_listmatchprofiles_listmatchprofiles_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/ListMatchProfiles.php:L13 | neighbors=[ListMatchProfiles]
- "pages_listmediadocuments_listmediadocuments_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/ListMediaDocuments.php:L13 | neighbors=[ListMediaDocuments]
- "pages_listoffers_listoffers_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/ListOffers.php:L13 | neighbors=[ListOffers]
- "pages_listonthemarketsyncs_listonthemarketsyncs": "ListOnTheMarketSyncs" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/ListOnTheMarketSyncs.php:L10 | neighbors=[ListOnTheMarketSyncs.php]
- "pages_listparties_listparties": "ListParties" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/ListParties.php:L10 | neighbors=[ListParties.php]
- "pages_listportalreports_listportalreports": "ListPortalReports" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/ListPortalReports.php:L10 | neighbors=[ListPortalReports.php]
- "pages_listproperties_listproperties_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/ListProperties.php:L15 | neighbors=[ListProperties]
- "pages_listrightmovesyncs_listrightmovesyncs": "ListRightmoveSyncs" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/ListRightmoveSyncs.php:L10 | neighbors=[ListRightmoveSyncs.php]
- "pages_listsalesprogressions_listsalesprogressions": "ListSalesProgressions" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/ListSalesProgressions.php:L10 | neighbors=[ListSalesProgressions.php]
- "pages_listteams_listteams_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/ListTeams.php:L16 | neighbors=[ListTeams]
- "pages_listterritories_listterritories": "ListTerritories" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/ListTerritories.php:L10 | neighbors=[ListTerritories.php]
- "pages_listusers_listusers_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/ListUsers.php:L16 | neighbors=[ListUsers]
- "pages_listvaluations_listvaluations_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/ListValuations.php:L13 | neighbors=[ListValuations]
- "pages_listviewings_listviewings_getheaderactions": ".getHeaderActions()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/ListViewings.php:L13 | neighbors=[ListViewings]
- "pages_listzooplasyncs_listzooplasyncs": "ListZooplaSyncs" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/ListZooplaSyncs.php:L10 | neighbors=[ListZooplaSyncs.php]
- "pages_managesitesettings_managesitesettings_form": ".form()" | kind=code-symbol | source=modules/settings-filament/src/Pages/ManageSiteSettings.php:L26 | neighbors=[ManageSiteSettings]
- "passkeys_table_migration": "passkeys table migration" | kind=entity | source=modules/identity-core/README.md:database/migrations/2026_06_29_123953_create_passkeys_table.php | neighbors=[Liberu Identity]
- "pkg_bezhansalleh_filament_shield": "bezhansalleh/filament-shield ~4.0" | kind=entity | source=modules/roles-permissions-filament/README.md:Requirements and installation | neighbors=[Liberu Authorization Filament]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-194.json

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
