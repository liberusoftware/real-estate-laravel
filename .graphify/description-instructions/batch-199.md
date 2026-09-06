# Node Description Batch 200 of 212

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

- "resources_salesprogressionresource_salesprogressionresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource.php:L44 | neighbors=[SalesProgressionResource]
- "resources_salesprogressionresource_salesprogressionresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource.php:L51 | neighbors=[SalesProgressionResource]
- "resources_salesprogressionresource_salesprogressionresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource.php:L32 | neighbors=[SalesProgressionResource]
- "resources_salesprogressionresource_salesprogressionresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Resources/SalesProgressionResource.php:L13 | neighbors=[SalesProgressionResource]
- "resources_teamresource_teamresource_form": ".form()" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource.php:L43 | neighbors=[TeamResource]
- "resources_teamresource_teamresource_getpages": ".getPages()" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource.php:L94 | neighbors=[TeamResource]
- "resources_teamresource_teamresource_isscopedtotenant": ".isScopedToTenant()" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource.php:L38 | neighbors=[TeamResource]
- "resources_teamresource_teamresource_table": ".table()" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource.php:L61 | neighbors=[TeamResource]
- "resources_territoryresource_territoryresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource.php:L27 | neighbors=[TerritoryResource]
- "resources_territoryresource_territoryresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource.php:L50 | neighbors=[TerritoryResource]
- "resources_territoryresource_territoryresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource.php:L57 | neighbors=[TerritoryResource]
- "resources_territoryresource_territoryresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource.php:L36 | neighbors=[TerritoryResource]
- "resources_territoryresource_territoryresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Resources/TerritoryResource.php:L13 | neighbors=[TerritoryResource]
- "resources_userresource_userresource_form": ".form()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L48 | neighbors=[UserResource]
- "resources_userresource_userresource_getmodel": ".getModel()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L26 | neighbors=[UserResource]
- "resources_userresource_userresource_getpages": ".getPages()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L114 | neighbors=[UserResource]
- "resources_userresource_userresource_isscopedtotenant": ".isScopedToTenant()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L43 | neighbors=[UserResource]
- "resources_userresource_userresource_table": ".table()" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L77 | neighbors=[UserResource]
- "resources_valuationresource_valuationresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource.php:L30 | neighbors=[ValuationResource]
- "resources_valuationresource_valuationresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource.php:L40 | neighbors=[ValuationResource]
- "resources_valuationresource_valuationresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource.php:L47 | neighbors=[ValuationResource]
- "resources_valuationresource_valuationresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource.php:L35 | neighbors=[ValuationResource]
- "resources_valuationresource_valuationresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Resources/ValuationResource.php:L13 | neighbors=[ValuationResource]
- "resources_viewingresource_viewingresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource.php:L30 | neighbors=[ViewingResource]
- "resources_viewingresource_viewingresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource.php:L40 | neighbors=[ViewingResource]
- "resources_viewingresource_viewingresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource.php:L47 | neighbors=[ViewingResource]
- "resources_viewingresource_viewingresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource.php:L35 | neighbors=[ViewingResource]
- "resources_viewingresource_viewingresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Resources/ViewingResource.php:L13 | neighbors=[ViewingResource]
- "resources_zooplasyncresource_zooplasyncresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource.php:L26 | neighbors=[ZooplaSyncResource]
- "resources_zooplasyncresource_zooplasyncresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource.php:L43 | neighbors=[ZooplaSyncResource]
- "resources_zooplasyncresource_zooplasyncresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource.php:L50 | neighbors=[ZooplaSyncResource]
- "resources_zooplasyncresource_zooplasyncresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource.php:L31 | neighbors=[ZooplaSyncResource]
- "resources_zooplasyncresource_zooplasyncresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Resources/ZooplaSyncResource.php:L13 | neighbors=[ZooplaSyncResource]
- "routes_ai": "ai.php" | kind=code-symbol | source=routes/ai.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "routes_health": "health.php" | kind=code-symbol | source=modules/application/routes/health.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "sanctum_bearer_security": "Sanctum Bearer Security Scheme" | kind=entity | source=modules/real-estate-zoopla-api/openapi/v1/real-estate-zoopla.yaml:components.securitySchemes.sanctum | neighbors=[Real Estate Zoopla Sync API (OpenAPI v1)]
- "schemas_schemas_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]
- "schemas_schemas_disablesticky": "disableSticky()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]
- "schemas_schemas_enablesticky": "enableSticky()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]
- "schemas_schemas_handleclientsidestatereset": "handleClientSideStateReset()" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[schemas.js]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-199.json

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
