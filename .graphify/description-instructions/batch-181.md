# Node Description Batch 182 of 212

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

- "controllers_propertycontroller_propertycontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Controllers/PropertyController.php:L75 | neighbors=[PropertyController]
- "controllers_readinesscontroller_readinesscontroller_invoke": ".__invoke()" | kind=code-symbol | source=modules/application/src/Http/Controllers/ReadinessController.php:L10 | neighbors=[ReadinessController]
- "controllers_rightmovesynccontroller_rightmovesynccontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L60 | neighbors=[RightmoveSyncController]
- "controllers_rightmovesynccontroller_rightmovesynccontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L19 | neighbors=[RightmoveSyncController]
- "controllers_rightmovesynccontroller_rightmovesynccontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L36 | neighbors=[RightmoveSyncController]
- "controllers_rightmovesynccontroller_rightmovesynccontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L27 | neighbors=[RightmoveSyncController]
- "controllers_rightmovesynccontroller_rightmovesynccontroller_sync": ".sync()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L43 | neighbors=[RightmoveSyncController]
- "controllers_rightmovesynccontroller_rightmovesynccontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Controllers/RightmoveSyncController.php:L51 | neighbors=[RightmoveSyncController]
- "controllers_salesprogressioncontroller_salesprogressioncontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L52 | neighbors=[SalesProgressionController]
- "controllers_salesprogressioncontroller_salesprogressioncontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L18 | neighbors=[SalesProgressionController]
- "controllers_salesprogressioncontroller_salesprogressioncontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L36 | neighbors=[SalesProgressionController]
- "controllers_salesprogressioncontroller_salesprogressioncontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L27 | neighbors=[SalesProgressionController]
- "controllers_salesprogressioncontroller_salesprogressioncontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/Http/Controllers/SalesProgressionController.php:L43 | neighbors=[SalesProgressionController]
- "controllers_searchcontroller_searchcontroller_construct": ".__construct()" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L19 | neighbors=[SearchController]
- "controllers_territorycontroller_territorycontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L48 | neighbors=[TerritoryController]
- "controllers_territorycontroller_territorycontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L18 | neighbors=[TerritoryController]
- "controllers_territorycontroller_territorycontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L34 | neighbors=[TerritoryController]
- "controllers_valuationcontroller_valuationcontroller_comparables": ".comparables()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L89 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_complete": ".complete()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L73 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_convert": ".convert()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L81 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L56 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L22 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_schedule": ".schedule()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L65 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L40 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L31 | neighbors=[ValuationController]
- "controllers_valuationcontroller_valuationcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/Http/Controllers/ValuationController.php:L47 | neighbors=[ValuationController]
- "controllers_viewingcontroller_viewingcontroller_cancel": ".cancel()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L81 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_complete": ".complete()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L73 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_confirm": ".confirm()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L65 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L56 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L22 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_noshow": ".noShow()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L89 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L40 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L31 | neighbors=[ViewingController]
- "controllers_viewingcontroller_viewingcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/Http/Controllers/ViewingController.php:L47 | neighbors=[ViewingController]
- "controllers_zooplasynccontroller_zooplasynccontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L60 | neighbors=[ZooplaSyncController]
- "controllers_zooplasynccontroller_zooplasynccontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L19 | neighbors=[ZooplaSyncController]
- "controllers_zooplasynccontroller_zooplasynccontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L36 | neighbors=[ZooplaSyncController]
- "controllers_zooplasynccontroller_zooplasynccontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L27 | neighbors=[ZooplaSyncController]
- "controllers_zooplasynccontroller_zooplasynccontroller_sync": ".sync()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L43 | neighbors=[ZooplaSyncController]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-181.json

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
