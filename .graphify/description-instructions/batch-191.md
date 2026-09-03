# Node Description Batch 192 of 212

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

- "models_membership_membership": "Membership" | kind=code-symbol | source=modules/organizations-teams/src/Models/Membership.php:L7 | neighbors=[Membership.php]
- "models_offer_offer_cantransitionto": ".canTransitionTo()" | kind=code-symbol | source=modules/real-estate-offers/src/Models/Offer.php:L35 | neighbors=[Offer]
- "models_offer_offer_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-offers/src/Models/Offer.php:L20 | neighbors=[Offer]
- "models_offer_offer_events": ".events()" | kind=code-symbol | source=modules/real-estate-offers/src/Models/Offer.php:L30 | neighbors=[Offer]
- "models_offer_offer_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-offers/src/Models/Offer.php:L25 | neighbors=[Offer]
- "models_offerevent_offerevent_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-offers/src/Models/OfferEvent.php:L16 | neighbors=[OfferEvent]
- "models_offerevent_offerevent_offer": ".offer()" | kind=code-symbol | source=modules/real-estate-offers/src/Models/OfferEvent.php:L21 | neighbors=[OfferEvent]
- "models_onthemarketsync_onthemarketsync_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Models/OnTheMarketSync.php:L20 | neighbors=[OnTheMarketSync]
- "models_onthemarketsync_onthemarketsync_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Models/OnTheMarketSync.php:L25 | neighbors=[OnTheMarketSync]
- "models_organization_organization_casts": ".casts()" | kind=code-symbol | source=modules/organizations-teams/src/Models/Organization.php:L12 | neighbors=[Organization]
- "models_organization_organization_teams": ".teams()" | kind=code-symbol | source=modules/organizations-teams/src/Models/Organization.php:L17 | neighbors=[Organization]
- "models_party_party_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-parties/src/Models/Party.php:L20 | neighbors=[Party]
- "models_party_party_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-parties/src/Models/Party.php:L29 | neighbors=[Party]
- "models_party_party_team": ".team()" | kind=code-symbol | source=modules/real-estate-parties/src/Models/Party.php:L33 | neighbors=[Party]
- "models_permission_permission": "Permission" | kind=code-symbol | source=modules/roles-permissions/src/Models/Permission.php:L9 | neighbors=[Permission.php]
- "models_portalreport_portalreport_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Models/PortalReport.php:L20 | neighbors=[PortalReport]
- "models_portalreport_portalreport_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Models/PortalReport.php:L25 | neighbors=[PortalReport]
- "models_property_property_canbepublished": ".canBePublished()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L52 | neighbors=[Property]
- "models_property_property_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L21 | neighbors=[Property]
- "models_property_property_history": ".history()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L42 | neighbors=[Property]
- "models_property_property_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L47 | neighbors=[Property]
- "models_property_property_team": ".team()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L56 | neighbors=[Property]
- "models_property_property_territory": ".territory()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/Property.php:L60 | neighbors=[Property]
- "models_propertyhistory_propertyhistory_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/PropertyHistory.php:L16 | neighbors=[PropertyHistory]
- "models_propertyhistory_propertyhistory_property": ".property()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/PropertyHistory.php:L21 | neighbors=[PropertyHistory]
- "models_propertyhistory_propertyhistory_team": ".team()" | kind=code-symbol | source=modules/real-estate-properties/src/Models/PropertyHistory.php:L25 | neighbors=[PropertyHistory]
- "models_rightmovesync_rightmovesync_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Models/RightmoveSync.php:L20 | neighbors=[RightmoveSync]
- "models_rightmovesync_rightmovesync_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Models/RightmoveSync.php:L25 | neighbors=[RightmoveSync]
- "models_role_role": "Role" | kind=code-symbol | source=modules/roles-permissions/src/Models/Role.php:L9 | neighbors=[Role.php]
- "models_salesprogression_salesprogression_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Models/SalesProgression.php:L20 | neighbors=[SalesProgression]
- "models_salesprogression_salesprogression_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Models/SalesProgression.php:L25 | neighbors=[SalesProgression]
- "models_team_team_getactivitylogoptions": ".getActivitylogOptions()" | kind=code-symbol | source=modules/organizations-teams/src/Models/Team.php:L26 | neighbors=[Team]
- "models_team_team_newfactory": ".newFactory()" | kind=code-symbol | source=modules/organizations-teams/src/Models/Team.php:L21 | neighbors=[Team]
- "models_teaminvitation_teaminvitation_casts": ".casts()" | kind=code-symbol | source=modules/organizations-teams/src/Models/TeamInvitation.php:L27 | neighbors=[TeamInvitation]
- "models_teaminvitation_teaminvitation_team": ".team()" | kind=code-symbol | source=modules/organizations-teams/src/Models/TeamInvitation.php:L37 | neighbors=[TeamInvitation]
- "models_territory_territory_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Territory.php:L21 | neighbors=[Territory]
- "models_territory_territory_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Territory.php:L31 | neighbors=[Territory]
- "models_territory_territory_team": ".team()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Territory.php:L26 | neighbors=[Territory]
- "models_user_user_authorizationidentifier": ".authorizationIdentifier()" | kind=code-symbol | source=app/Models/User.php:L170 | neighbors=[User]
- "models_user_user_authorizationtype": ".authorizationType()" | kind=code-symbol | source=app/Models/User.php:L175 | neighbors=[User]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-191.json

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
