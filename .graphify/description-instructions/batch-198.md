# Node Description Batch 199 of 212

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

- "resources_matchprofileresource_matchprofileresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php:L45 | neighbors=[MatchProfileResource]
- "resources_matchprofileresource_matchprofileresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php:L33 | neighbors=[MatchProfileResource]
- "resources_matchprofileresource_matchprofileresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-matching-api/src/Http/Resources/MatchProfileResource.php:L13 | neighbors=[MatchProfileResource]
- "resources_mediadocumentresource_mediadocumentresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource.php:L29 | neighbors=[MediaDocumentResource]
- "resources_mediadocumentresource_mediadocumentresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource.php:L39 | neighbors=[MediaDocumentResource]
- "resources_mediadocumentresource_mediadocumentresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource.php:L46 | neighbors=[MediaDocumentResource]
- "resources_mediadocumentresource_mediadocumentresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource.php:L34 | neighbors=[MediaDocumentResource]
- "resources_mediadocumentresource_mediadocumentresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/Http/Resources/MediaDocumentResource.php:L13 | neighbors=[MediaDocumentResource]
- "resources_offereventresource_offereventresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Resources/OfferEventResource.php:L13 | neighbors=[OfferEventResource]
- "resources_offerresource_offerresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource.php:L30 | neighbors=[OfferResource]
- "resources_offerresource_offerresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource.php:L40 | neighbors=[OfferResource]
- "resources_offerresource_offerresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource.php:L47 | neighbors=[OfferResource]
- "resources_offerresource_offerresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource.php:L35 | neighbors=[OfferResource]
- "resources_offerresource_offerresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Resources/OfferResource.php:L13 | neighbors=[OfferResource]
- "resources_onthemarketsyncresource_onthemarketsyncresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource.php:L26 | neighbors=[OnTheMarketSyncResource]
- "resources_onthemarketsyncresource_onthemarketsyncresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource.php:L43 | neighbors=[OnTheMarketSyncResource]
- "resources_onthemarketsyncresource_onthemarketsyncresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource.php:L50 | neighbors=[OnTheMarketSyncResource]
- "resources_onthemarketsyncresource_onthemarketsyncresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource.php:L31 | neighbors=[OnTheMarketSyncResource]
- "resources_onthemarketsyncresource_onthemarketsyncresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/Http/Resources/OnTheMarketSyncResource.php:L13 | neighbors=[OnTheMarketSyncResource]
- "resources_partyresource_partyresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource.php:L30 | neighbors=[PartyResource]
- "resources_partyresource_partyresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource.php:L53 | neighbors=[PartyResource]
- "resources_partyresource_partyresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource.php:L64 | neighbors=[PartyResource]
- "resources_partyresource_partyresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource.php:L40 | neighbors=[PartyResource]
- "resources_partyresource_partyresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-parties-api/src/Http/Resources/PartyResource.php:L13 | neighbors=[PartyResource]
- "resources_portalreportresource_portalreportresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource.php:L27 | neighbors=[PortalReportResource]
- "resources_portalreportresource_portalreportresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource.php:L44 | neighbors=[PortalReportResource]
- "resources_portalreportresource_portalreportresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource.php:L51 | neighbors=[PortalReportResource]
- "resources_portalreportresource_portalreportresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource.php:L32 | neighbors=[PortalReportResource]
- "resources_portalreportresource_portalreportresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/Http/Resources/PortalReportResource.php:L13 | neighbors=[PortalReportResource]
- "resources_propertyresource_propertyresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource.php:L37 | neighbors=[PropertyResource]
- "resources_propertyresource_propertyresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource.php:L127 | neighbors=[PropertyResource]
- "resources_propertyresource_propertyresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource.php:L139 | neighbors=[PropertyResource]
- "resources_propertyresource_propertyresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource.php:L108 | neighbors=[PropertyResource]
- "resources_propertyresource_propertyresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-properties-api/src/Http/Resources/PropertyResource.php:L13 | neighbors=[PropertyResource]
- "resources_rightmovesyncresource_rightmovesyncresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource.php:L26 | neighbors=[RightmoveSyncResource]
- "resources_rightmovesyncresource_rightmovesyncresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource.php:L43 | neighbors=[RightmoveSyncResource]
- "resources_rightmovesyncresource_rightmovesyncresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource.php:L50 | neighbors=[RightmoveSyncResource]
- "resources_rightmovesyncresource_rightmovesyncresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource.php:L31 | neighbors=[RightmoveSyncResource]
- "resources_rightmovesyncresource_rightmovesyncresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/Http/Resources/RightmoveSyncResource.php:L13 | neighbors=[RightmoveSyncResource]
- "resources_salesprogressionresource_salesprogressionresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource.php:L27 | neighbors=[SalesProgressionResource]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-198.json

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
