# Node Description Batch 39 of 212

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

- "import_export_module": "Liberu Import and Export" | kind=entity | source=modules/import-export/README.md | neighbors=[Capability: foundation.import-export, Contract: TransferAuthorizer, Liberu Integrations, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager]
- "js_app": "app.js" | kind=code-symbol | source=themes/real-estate-default/resources/js/app.js:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, closeMenu(), menu, menuButton]
- "liberu_core_modules_scope": "Liberu Core Modules Scope" | kind=entity | source=projects/liberu/core/README.md | neighbors=[liberusoftware/identity, liberusoftware/organizations-teams, Liberu Scheduler and Queues, Liberu Search, Liberu Settings, Liberu Platform Scope]
- "notifications_notifications_dispatch": "dispatch()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, event(), eventData(), dispatchSelf(), dispatchTo(), emit()]
- "pkg_liberusoftware_module_manager": "liberusoftware/module-manager" | kind=entity | source=modules/settings/README.md:Requirements and installation | neighbors=[liberusoftware/roles-permissions, Liberu Scheduler and Queues, Liberu Search, Liberu Settings, Liberu Theme Support, Liberu Webhooks]
- "policies_connectedaccountpolicy_connectedaccountpolicy": "ConnectedAccountPolicy" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L9 | neighbors=[ConnectedAccountPolicy.php, .create(), .delete(), .update(), .view(), .viewAny()]
- "re_branch_resource": "Branch Resource" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Instruction Record, Real Estate Core API, Real Estate Core OpenAPI v1, Real Estate Core Filament, Real Estate Core Livewire, Real Estate Core]
- "re_rightmove_module": "Real Estate Rightmove Module" | kind=entity | source=modules/real-estate-rightmove/README.md | neighbors=[Real Estate Rightmove API Adapter, Real Estate Rightmove Filament Adapter, Real Estate Rightmove Livewire Adapter, Core/API/Filament/Livewire Package Split, Replaceable Integration Services, Team-scoped domain records]
- "re_sales_progression_module": "Real Estate Sales Progression Module" | kind=entity | source=modules/real-estate-sales-progression/README.md | neighbors=[Real Estate Sales Progression API Adapt…, Real Estate Sales Progression Filament …, Real Estate Sales Progression Livewire …, Core/API/Filament/Livewire Package Split, Presentation-neutral domain core, Team-scoped domain records]
- "re_valuations_module": "Real Estate Valuations Module" | kind=entity | source=modules/real-estate-valuations/README.md | neighbors=[Real Estate Valuations API Adapter, Real Estate Valuations Filament Adapter, Real Estate Valuations Livewire Adapter, Core/API/Filament/Livewire Package Split, Team-scoped domain records, Unprefixed Composer Name vs module- Git…]
- "re_viewings_module": "Real Estate Viewings Module" | kind=entity | source=modules/real-estate-viewings/README.md | neighbors=[Real Estate Viewings API Adapter, Real Estate Viewings Filament Adapter, Real Estate Viewings Livewire Adapter, Core/API/Filament/Livewire Package Split, Team-scoped domain records, Unprefixed Composer Name vs module- Git…]
- "real_estate_listings_module": "Real Estate Listings" | kind=entity | source=modules/real-estate-listings/README.md | neighbors=[Real Estate Listings API, Real Estate Listings Filament, Real Estate Listings Livewire, Composer Unprefixed / GitHub module- Pr…, Team-Scoped Boundary, Real Estate Marketing]
- "real_estate_matching_module": "Real Estate Matching" | kind=entity | source=modules/real-estate-matching/README.md | neighbors=[Real Estate Matching API, Real Estate Matching Filament, Real Estate Matching Livewire, Composer Unprefixed / GitHub module- Pr…, Real Estate Marketing, Team-Scoped Boundary]
- "real_estate_media_and_documents_module": "Real Estate Media and Documents" | kind=entity | source=modules/real-estate-media-and-documents/README.md | neighbors=[Real Estate Media and Documents API, Real Estate Media and Documents Filament, Real Estate Media and Documents Livewire, Composer Unprefixed / GitHub module- Pr…, Provider-Neutral Domain, Replaceable Ad…, Team-Scoped Boundary]
- "real_estate_offers_module": "Real Estate Offers" | kind=entity | source=modules/real-estate-offers-api/README.md | neighbors=[Real Estate Offers API, Real Estate Offers Filament, Real Estate Offers Livewire, Composer name unprefixed, GitHub repo c…, Offer qualification, negotiation, proof…, Team-scoped domain records]
- "real_estate_onthemarket_module": "Real Estate OnTheMarket (core module)" | kind=entity | source=modules/real-estate-onthemarket/README.md | neighbors=[Real Estate OnTheMarket API, Real Estate OnTheMarket Filament, Real Estate OnTheMarket Livewire, Provider-neutral portal integration bou…, Team-scoped domain records, Real Estate Portals and Reporting (core…]
- "resources_agencyresource_agencyresource": "AgencyResource" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource.php:L20 | neighbors=[AgencyResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_branchresource_branchresource": "BranchResource" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource.php:L18 | neighbors=[BranchResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_instructionresource_instructionresource": "InstructionResource" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource.php:L21 | neighbors=[InstructionResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_lettingresource_lettingresource": "LettingResource" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource.php:L21 | neighbors=[LettingResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_listingresource_listingresource": "ListingResource" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource.php:L21 | neighbors=[ListingResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_managementrecordresource_managementrecordresource": "ManagementRecordResource" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource.php:L21 | neighbors=[ManagementRecordResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_marketingcampaignresource_marketingcampaignresource": "MarketingCampaignResource" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource.php:L23 | neighbors=[MarketingCampaignResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_matchprofileresource_matchprofileresource": "MatchProfileResource" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php:L20 | neighbors=[MatchProfileResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_mediadocumentresource_mediadocumentresource": "MediaDocumentResource" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource.php:L21 | neighbors=[MediaDocumentResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_offerresource": "OfferResource.php" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, OfferResource]
- "resources_offerresource_offerresource": "OfferResource" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource.php:L22 | neighbors=[OfferResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_onthemarketsyncresource_onthemarketsyncresource": "OnTheMarketSyncResource" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource.php:L22 | neighbors=[OnTheMarketSyncResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_partyresource_partyresource": "PartyResource" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource.php:L22 | neighbors=[PartyResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_portalreportresource_portalreportresource": "PortalReportResource" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource.php:L23 | neighbors=[PortalReportResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_propertyresource": "PropertyResource.php" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3f6a64e Route property adapters through…, 75d6371 Add real estate properties modu…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, PropertyResource]
- "resources_propertyresource_propertyresource": "PropertyResource" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource.php:L29 | neighbors=[PropertyResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_rightmovesyncresource_rightmovesyncresource": "RightmoveSyncResource" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource.php:L22 | neighbors=[RightmoveSyncResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_salesprogressionresource_salesprogressionresource": "SalesProgressionResource" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource.php:L23 | neighbors=[SalesProgressionResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_territoryresource_territoryresource": "TerritoryResource" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource.php:L19 | neighbors=[TerritoryResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_userresource_userresource": "UserResource" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource.php:L24 | neighbors=[UserResource.php, .form(), .getModel(), .getPages(), .isScopedToTenant(), .table()]
- "resources_valuationresource": "ValuationResource.php" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, ValuationResource]
- "resources_valuationresource_valuationresource": "ValuationResource" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource.php:L22 | neighbors=[ValuationResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]
- "resources_viewingresource": "ViewingResource.php" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, bd5c605 Add explicit API response resou…, ViewingResource]
- "resources_viewingresource_viewingresource": "ViewingResource" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource.php:L22 | neighbors=[ViewingResource.php, .form(), .getEloquentQuery(), .getPages(), .table(), .toArray()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-038.json

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
