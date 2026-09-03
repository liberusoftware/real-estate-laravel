# Node Description Batch 106 of 212

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

- "migrations_2026_08_01_065000_create_mentions_and_attachments": "2026_08_01_065000_create_mentions_and_attachments.php" | kind=code-symbol | source=modules/activity-comments/database/migrations/2026_08_01_065000_create_mentions_and_attachments.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_23_000002_create_real_estate_parties_table": "2026_08_23_000002_create_real_estate_parties_table.php" | kind=code-symbol | source=modules/real-estate-parties/database/migrations/2026_08_23_000002_create_real_estate_parties_table.php:L1 | neighbors=[73659b3 Add real estate parties module …, down(), up()]
- "migrations_2026_08_23_000003_create_real_estate_branches_table": "2026_08_23_000003_create_real_estate_branches_table.php" | kind=code-symbol | source=modules/real-estate-core/database/migrations/2026_08_23_000003_create_real_estate_branches_table.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, down(), up()]
- "migrations_2026_08_23_000011_create_real_estate_sales_progressions_table": "2026_08_23_000011_create_real_estate_sales_progressions_table.php" | kind=code-symbol | source=modules/real-estate-sales-progression/database/migrations/2026_08_23_000011_create_real_estate_sales_progressions_table.php:L1 | neighbors=[6385f28 Add sales progression modules a…, down(), up()]
- "migrations_2026_08_23_000012_create_real_estate_marketing_campaigns_table": "2026_08_23_000012_create_real_estate_marketing_campaigns_table.php" | kind=code-symbol | source=modules/real-estate-marketing/database/migrations/2026_08_23_000012_create_real_estate_marketing_campaigns_table.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, down(), up()]
- "migrations_2026_08_23_000013_create_real_estate_portal_reports_table": "2026_08_23_000013_create_real_estate_portal_reports_table.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/database/migrations/2026_08_23_000013_create_real_estate_portal_reports_table.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, down(), up()]
- "migrations_2026_08_23_000014_create_real_estate_rightmove_syncs_table": "2026_08_23_000014_create_real_estate_rightmove_syncs_table.php" | kind=code-symbol | source=modules/real-estate-rightmove/database/migrations/2026_08_23_000014_create_real_estate_rightmove_syncs_table.php:L1 | neighbors=[1cdd121 Add independent property portal…, down(), up()]
- "migrations_2026_08_23_000015_create_real_estate_zoopla_syncs_table": "2026_08_23_000015_create_real_estate_zoopla_syncs_table.php" | kind=code-symbol | source=modules/real-estate-zoopla/database/migrations/2026_08_23_000015_create_real_estate_zoopla_syncs_table.php:L1 | neighbors=[1cdd121 Add independent property portal…, down(), up()]
- "migrations_2026_08_23_000016_create_real_estate_onthemarket_syncs_table": "2026_08_23_000016_create_real_estate_onthemarket_syncs_table.php" | kind=code-symbol | source=modules/real-estate-onthemarket/database/migrations/2026_08_23_000016_create_real_estate_onthemarket_syncs_table.php:L1 | neighbors=[1cdd121 Add independent property portal…, down(), up()]
- "models_agency": "Agency.php" | kind=code-symbol | source=modules/real-estate-core/src/Models/Agency.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, Agency]
- "models_instruction": "Instruction.php" | kind=code-symbol | source=modules/real-estate-instructions/src/Models/Instruction.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, Instruction]
- "models_instruction_instruction": "Instruction" | kind=code-symbol | source=modules/real-estate-instructions/src/Models/Instruction.php:L11 | neighbors=[Instruction.php, .casts(), .scopeForTeam()]
- "models_letting_letting": "Letting" | kind=code-symbol | source=modules/real-estate-lettings/src/Models/Letting.php:L11 | neighbors=[Letting.php, .casts(), .scopeForTeam()]
- "models_listing": "Listing.php" | kind=code-symbol | source=modules/real-estate-listings/src/Models/Listing.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, Listing]
- "models_listing_listing": "Listing" | kind=code-symbol | source=modules/real-estate-listings/src/Models/Listing.php:L11 | neighbors=[Listing.php, .casts(), .scopeForTeam()]
- "models_managementrecord_managementrecord": "ManagementRecord" | kind=code-symbol | source=modules/real-estate-property-management/src/Models/ManagementRecord.php:L11 | neighbors=[ManagementRecord.php, .casts(), .scopeForTeam()]
- "models_marketingcampaign_marketingcampaign": "MarketingCampaign" | kind=code-symbol | source=modules/real-estate-marketing/src/Models/MarketingCampaign.php:L12 | neighbors=[MarketingCampaign.php, .casts(), .scopeForTeam()]
- "models_matchprofile": "MatchProfile.php" | kind=code-symbol | source=modules/real-estate-matching/src/Models/MatchProfile.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, MatchProfile]
- "models_matchprofile_matchprofile": "MatchProfile" | kind=code-symbol | source=modules/real-estate-matching/src/Models/MatchProfile.php:L10 | neighbors=[MatchProfile.php, .casts(), .scopeForTeam()]
- "models_mediadocument_mediadocument": "MediaDocument" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Models/MediaDocument.php:L10 | neighbors=[MediaDocument.php, .casts(), .scopeForTeam()]
- "models_offerevent": "OfferEvent.php" | kind=code-symbol | source=modules/real-estate-offers/src/Models/OfferEvent.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, OfferEvent]
- "models_offerevent_offerevent": "OfferEvent" | kind=code-symbol | source=modules/real-estate-offers/src/Models/OfferEvent.php:L10 | neighbors=[OfferEvent.php, .casts(), .offer()]
- "models_onthemarketsync_onthemarketsync": "OnTheMarketSync" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Models/OnTheMarketSync.php:L12 | neighbors=[OnTheMarketSync.php, .casts(), .scopeForTeam()]
- "models_organization_organization": "Organization" | kind=code-symbol | source=modules/organizations-teams/src/Models/Organization.php:L8 | neighbors=[Organization.php, .casts(), .teams()]
- "models_portalreport_portalreport": "PortalReport" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Models/PortalReport.php:L12 | neighbors=[PortalReport.php, .casts(), .scopeForTeam()]
- "models_rightmovesync_rightmovesync": "RightmoveSync" | kind=code-symbol | source=modules/real-estate-rightmove/src/Models/RightmoveSync.php:L12 | neighbors=[RightmoveSync.php, .casts(), .scopeForTeam()]
- "models_salesprogression_salesprogression": "SalesProgression" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Models/SalesProgression.php:L12 | neighbors=[SalesProgression.php, .casts(), .scopeForTeam()]
- "models_team_team": "Team" | kind=code-symbol | source=modules/organizations-teams/src/Models/Team.php:L14 | neighbors=[Team.php, .getActivitylogOptions(), .newFactory()]
- "models_teaminvitation_teaminvitation": "TeamInvitation" | kind=code-symbol | source=modules/organizations-teams/src/Models/TeamInvitation.php:L8 | neighbors=[TeamInvitation.php, .casts(), .team()]
- "models_territory": "Territory.php" | kind=code-symbol | source=modules/real-estate-core/src/Models/Territory.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, Territory]
- "models_user_user_hasadminaccess": ".hasAdminAccess()" | kind=code-symbol | source=app/Models/User.php:L154 | neighbors=[User, .canAccessPanel(), .hasRoleInAnyTeam()]
- "models_user_user_hasroleinanyteam": ".hasRoleInAnyTeam()" | kind=code-symbol | source=app/Models/User.php:L190 | neighbors=[User, .hasAdminAccess(), .isSuperAdmin()]
- "models_user_user_issuperadmin": ".isSuperAdmin()" | kind=code-symbol | source=app/Models/User.php:L164 | neighbors=[User, .isAdmin(), .hasRoleInAnyTeam()]
- "models_zooplasync_zooplasync": "ZooplaSync" | kind=code-symbol | source=modules/real-estate-zoopla/src/Models/ZooplaSync.php:L12 | neighbors=[ZooplaSync.php, .casts(), .scopeForTeam()]
- "module_category_adapter": "Module category: adapter" | kind=entity | source=modules/analytics-google/README.md | neighbors=[Liberu Google Analytics, Liberu Meta Server-Side Tracking, Liberu Social Identity]
- "notifications_notifications_configuretransitions": "configureTransitions()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, c(), init()]
- "notifications_notifications_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, actions(), name()]
- "notifications_notifications_dispatchself": "dispatchSelf()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatch(), emitSelf()]
- "notifications_notifications_dispatchto": "dispatchTo()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, dispatch(), emitTo()]
- "notifications_notifications_duration": "duration()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, persistent(), seconds()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-105.json

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
