# Node Description Batch 143 of 212

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

- "mcp_command_lerd": "lerd" | kind=code-symbol | source=.junie/mcp/mcp.json:L1 | neighbors=[lerd, lerd]
- "mcp_mcp_mcp_server_laravel_boost": "laravel-boost" | kind=code-symbol | source=.junie/mcp/mcp.json:L1 | neighbors=[mcp.json, /usr/local/bin/php]
- "mcp_mcp_mcp_server_lerd": "lerd" | kind=code-symbol | source=.junie/mcp/mcp.json:L1 | neighbors=[mcp.json, lerd]
- "middleware_correlationid": "CorrelationId.php" | kind=code-symbol | source=modules/observability/src/Http/Middleware/CorrelationId.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CorrelationId]
- "middleware_correlationid_correlationid": "CorrelationId" | kind=code-symbol | source=modules/observability/src/Http/Middleware/CorrelationId.php:L11 | neighbors=[CorrelationId.php, .handle()]
- "middleware_securityheaders": "SecurityHeaders.php" | kind=code-symbol | source=modules/application/src/Http/Middleware/SecurityHeaders.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SecurityHeaders]
- "middleware_securityheaders_securityheaders": "SecurityHeaders" | kind=code-symbol | source=modules/application/src/Http/Middleware/SecurityHeaders.php:L9 | neighbors=[SecurityHeaders.php, .handle()]
- "middleware_setlocale": "SetLocale.php" | kind=code-symbol | source=modules/localization-core/src/Http/Middleware/SetLocale.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SetLocale]
- "migrations_2022_12_14_083707_create_settings_table": "2022_12_14_083707_create_settings_table.php" | kind=code-symbol | source=modules/settings/database/migrations/2022_12_14_083707_create_settings_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, up()]
- "migrations_2026_06_29_124047_create_telescope_entries_table_down": "down()" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124047_create_telescope_entries_table.php:L62 | neighbors=[2026_06_29_124047_create_telescope_entr…, getConnection()]
- "migrations_2026_06_29_124047_create_telescope_entries_table_up": "up()" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124047_create_telescope_entries_table.php:L20 | neighbors=[2026_06_29_124047_create_telescope_entr…, getConnection()]
- "migrations_2026_06_29_124053_create_activity_log_table": "2026_06_29_124053_create_activity_log_table.php" | kind=code-symbol | source=modules/audit/database/migrations/2026_06_29_124053_create_activity_log_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, up()]
- "migrations_2026_06_29_124053_create_media_table": "2026_06_29_124053_create_media_table.php" | kind=code-symbol | source=modules/files-media/database/migrations/2026_06_29_124053_create_media_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, up()]
- "models_connectedaccount": "ConnectedAccount.php" | kind=code-symbol | source=modules/identity-socialstream/src/Models/ConnectedAccount.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ConnectedAccount]
- "models_connectedaccount_connectedaccount": "ConnectedAccount" | kind=code-symbol | source=modules/identity-socialstream/src/Models/ConnectedAccount.php:L13 | neighbors=[ConnectedAccount.php, .newFactory()]
- "models_letting": "Letting.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Models/Letting.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, Letting]
- "models_managementrecord": "ManagementRecord.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Models/ManagementRecord.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, ManagementRecord]
- "models_marketingcampaign": "MarketingCampaign.php" | kind=code-symbol | source=modules/real-estate-marketing/src/Models/MarketingCampaign.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, MarketingCampaign]
- "models_mediadocument": "MediaDocument.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Models/MediaDocument.php:L1 | neighbors=[0910e2b Add real estate media and docum…, MediaDocument]
- "models_membership": "Membership.php" | kind=code-symbol | source=modules/organizations-teams/src/Models/Membership.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Membership]
- "models_onthemarketsync": "OnTheMarketSync.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Models/OnTheMarketSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, OnTheMarketSync]
- "models_organization": "Organization.php" | kind=code-symbol | source=modules/organizations-teams/src/Models/Organization.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Organization]
- "models_party": "Party.php" | kind=code-symbol | source=modules/real-estate-parties/src/Models/Party.php:L1 | neighbors=[73659b3 Add real estate parties module …, Party]
- "models_permission": "Permission.php" | kind=code-symbol | source=modules/roles-permissions/src/Models/Permission.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Permission]
- "models_portalreport": "PortalReport.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Models/PortalReport.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, PortalReport]
- "models_propertyhistory": "PropertyHistory.php" | kind=code-symbol | source=modules/real-estate-properties/src/Models/PropertyHistory.php:L1 | neighbors=[75d6371 Add real estate properties modu…, PropertyHistory]
- "models_rightmovesync": "RightmoveSync.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Models/RightmoveSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, RightmoveSync]
- "models_role": "Role.php" | kind=code-symbol | source=modules/roles-permissions/src/Models/Role.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Role]
- "models_salesprogression": "SalesProgression.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Models/SalesProgression.php:L1 | neighbors=[6385f28 Add sales progression modules a…, SalesProgression]
- "models_team": "Team.php" | kind=code-symbol | source=modules/organizations-teams/src/Models/Team.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Team]
- "models_teaminvitation": "TeamInvitation.php" | kind=code-symbol | source=modules/organizations-teams/src/Models/TeamInvitation.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TeamInvitation]
- "models_user_user_canaccesspanel": ".canAccessPanel()" | kind=code-symbol | source=app/Models/User.php:L140 | neighbors=[User, .hasAdminAccess()]
- "models_user_user_isadmin": ".isAdmin()" | kind=code-symbol | source=app/Models/User.php:L223 | neighbors=[User, .isSuperAdmin()]
- "models_zooplasync": "ZooplaSync.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Models/ZooplaSync.php:L1 | neighbors=[1cdd121 Add independent property portal…, ZooplaSync]
- "module_features_command": "module:features Console Command" | kind=entity | source=modules/module-manager/README.md | neighbors=[Capability Declaration, Liberu Module Manager]
- "notifications_notifications_actions": "actions()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, constructor()]
- "notifications_notifications_button": "button()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, view()]
- "notifications_notifications_c": "c()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, configureTransitions()]
- "notifications_notifications_configureanimations": "configureAnimations()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, init()]
- "notifications_notifications_danger": "danger()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, status()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-142.json

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
