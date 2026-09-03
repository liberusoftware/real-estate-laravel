# Node Description Batch 144 of 212

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

- "notifications_notifications_emit": "emit()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatch()]
- "notifications_notifications_emitself": "emitSelf()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatchSelf()]
- "notifications_notifications_emitto": "emitTo()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatchTo()]
- "notifications_notifications_event": "event()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatch()]
- "notifications_notifications_eventdata": "eventData()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatch()]
- "notifications_notifications_grouped": "grouped()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, view()]
- "notifications_notifications_iconbutton": "iconButton()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, view()]
- "notifications_notifications_info": "info()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, status()]
- "notifications_notifications_link": "link()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, view()]
- "notifications_notifications_name": "name()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, constructor()]
- "notifications_notifications_persistent": "persistent()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, duration()]
- "notifications_notifications_seconds": "seconds()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, duration()]
- "notifications_notifications_send": "send()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, toJSON()]
- "notifications_notifications_success": "success()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, status()]
- "notifications_notifications_tojson": "toJSON()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, send()]
- "notifications_notifications_warning": "warning()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, status()]
- "openapi_v1_versioned_contract": "Versioned openapi/v1 Adapter Contract" | kind=entity | source=modules/real-estate-zoopla-api/openapi/v1/real-estate-zoopla.yaml | neighbors=[Liberu API Modules Scope, Real Estate Zoopla Sync API (OpenAPI v1)]
- "package_tests_yml": "per-package tests.yml workflow inputs" | kind=entity | source=scripts/README.md | neighbors=[set-coverage-thresholds, set-phpstan-levels]
- "packagist_credentials_env": "Packagist credentials from the environment" | kind=entity | source=scripts/README.md | neighbors=[submit-packagist.php, update.sh]
- "pages_accountsecurity": "AccountSecurity.php" | kind=code-symbol | source=modules/sessions-devices-filament/src/Pages/AccountSecurity.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AccountSecurity]
- "pages_createagency_createagency": "CreateAgency" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/CreateAgency.php:L12 | neighbors=[CreateAgency.php, .handleRecordCreation()]
- "pages_createbranch": "CreateBranch.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/CreateBranch.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, CreateBranch]
- "pages_createbranch_createbranch": "CreateBranch" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource/Pages/CreateBranch.php:L12 | neighbors=[CreateBranch.php, .handleRecordCreation()]
- "pages_createinstruction_createinstruction": "CreateInstruction" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/CreateInstruction.php:L12 | neighbors=[CreateInstruction.php, .handleRecordCreation()]
- "pages_createletting_createletting": "CreateLetting" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource/Pages/CreateLetting.php:L12 | neighbors=[CreateLetting.php, .handleRecordCreation()]
- "pages_createlisting_createlisting": "CreateListing" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/CreateListing.php:L12 | neighbors=[CreateListing.php, .handleRecordCreation()]
- "pages_createmanagementrecord_createmanagementrecord": "CreateManagementRecord" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource/Pages/CreateManagementRecord.php:L12 | neighbors=[CreateManagementRecord.php, .handleRecordCreation()]
- "pages_createmarketingcampaign_createmarketingcampaign": "CreateMarketingCampaign" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource/Pages/CreateMarketingCampaign.php:L12 | neighbors=[CreateMarketingCampaign.php, .handleRecordCreation()]
- "pages_creatematchprofile_creatematchprofile": "CreateMatchProfile" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/CreateMatchProfile.php:L12 | neighbors=[CreateMatchProfile.php, .handleRecordCreation()]
- "pages_createmediadocument_createmediadocument": "CreateMediaDocument" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/CreateMediaDocument.php:L12 | neighbors=[CreateMediaDocument.php, .handleRecordCreation()]
- "pages_createoffer_createoffer": "CreateOffer" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/CreateOffer.php:L12 | neighbors=[CreateOffer.php, .handleRecordCreation()]
- "pages_createonthemarketsync_createonthemarketsync": "CreateOnTheMarketSync" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/CreateOnTheMarketSync.php:L12 | neighbors=[CreateOnTheMarketSync.php, .handleRecordCreation()]
- "pages_createparty": "CreateParty.php" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/CreateParty.php:L1 | neighbors=[73659b3 Add real estate parties module …, CreateParty]
- "pages_createparty_createparty": "CreateParty" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/CreateParty.php:L12 | neighbors=[CreateParty.php, .handleRecordCreation()]
- "pages_createportalreport_createportalreport": "CreatePortalReport" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/CreatePortalReport.php:L12 | neighbors=[CreatePortalReport.php, .handleRecordCreation()]
- "pages_createproperty_createproperty": "CreateProperty" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/CreateProperty.php:L12 | neighbors=[CreateProperty.php, .handleRecordCreation()]
- "pages_createrightmovesync_createrightmovesync": "CreateRightmoveSync" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/CreateRightmoveSync.php:L12 | neighbors=[CreateRightmoveSync.php, .handleRecordCreation()]
- "pages_createsalesprogression_createsalesprogression": "CreateSalesProgression" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/CreateSalesProgression.php:L12 | neighbors=[CreateSalesProgression.php, .handleRecordCreation()]
- "pages_createteam": "CreateTeam.php" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/CreateTeam.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CreateTeam]
- "pages_createterritory_createterritory": "CreateTerritory" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/CreateTerritory.php:L12 | neighbors=[CreateTerritory.php, .handleRecordCreation()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-143.json

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
