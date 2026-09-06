# Node Description Batch 107 of 212

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

- "notifications_notifications_init": "init()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js, configureAnimations(), configureTransitions()]
- "observability_actor_contract": "ObservabilityActor Contract" | kind=entity | source=modules/observability/README.md | neighbors=[liberusoftware/localization-contracts, Liberu Module Manager Administration, Liberu Observability]
- "package_category_presentation": "Package Category: presentation" | kind=entity | source=modules/localization-core-livewire/README.md | neighbors=[Liberu Localization Livewire, Liberu Module Manager Administration, Liberu Organizations Administration]
- "pages_createagency": "CreateAgency.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/CreateAgency.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, CreateAgency]
- "pages_createproperty": "CreateProperty.php" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/CreateProperty.php:L1 | neighbors=[3f6a64e Route property adapters through…, 75d6371 Add real estate properties modu…, CreateProperty]
- "pages_createterritory": "CreateTerritory.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/CreateTerritory.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, CreateTerritory]
- "pages_editagency": "EditAgency.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/EditAgency.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, EditAgency]
- "pages_editproperty": "EditProperty.php" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/EditProperty.php:L1 | neighbors=[3f6a64e Route property adapters through…, 75d6371 Add real estate properties modu…, EditProperty]
- "pages_editterritory": "EditTerritory.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/EditTerritory.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, EditTerritory]
- "pages_foundationoperations_foundationoperations": "FoundationOperations" | kind=code-symbol | source=modules/module-manager-filament/src/Pages/FoundationOperations.php:L9 | neighbors=[FoundationOperations.php, .canAccess(), .mount()]
- "pages_listagencies": "ListAgencies.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource/Pages/ListAgencies.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, ListAgencies]
- "pages_listinstructions": "ListInstructions.php" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource/Pages/ListInstructions.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, ListInstructions]
- "pages_listlistings": "ListListings.php" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource/Pages/ListListings.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, ListListings]
- "pages_listmatchprofiles": "ListMatchProfiles.php" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource/Pages/ListMatchProfiles.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, ListMatchProfiles]
- "pages_listmediadocuments": "ListMediaDocuments.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/ListMediaDocuments.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, ListMediaDocuments]
- "pages_listoffers": "ListOffers.php" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/ListOffers.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, ListOffers]
- "pages_listterritories": "ListTerritories.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/TerritoryResource/Pages/ListTerritories.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, ListTerritories]
- "pages_listvaluations": "ListValuations.php" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/ListValuations.php:L1 | neighbors=[3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, ListValuations]
- "pages_listviewings": "ListViewings.php" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/ListViewings.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, ListViewings]
- "pkg_filament_filament": "filament/filament ^5.x" | kind=entity | source=modules/settings-filament/README.md:Requirements and installation | neighbors=[Liberu Authorization Filament, Liberu Sessions and Devices Administrat…, Liberu Settings Administration]
- "pkg_real_estate_core_api": "liberusoftware/real-estate-core-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Real Estate Core, liberusoftware/real-estate-core]
- "pkg_real_estate_core_filament": "liberusoftware/real-estate-core-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Real Estate Core, liberusoftware/real-estate-core]
- "pkg_real_estate_core_livewire": "liberusoftware/real-estate-core-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Real Estate Core, liberusoftware/real-estate-core]
- "pkg_real_estate_instructions_api": "liberusoftware/real-estate-instructions-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Instructions, liberusoftware/real-estate-instructions]
- "pkg_real_estate_instructions_filament": "liberusoftware/real-estate-instructions-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Instructions, liberusoftware/real-estate-instructions]
- "pkg_real_estate_instructions_livewire": "liberusoftware/real-estate-instructions-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Instructions, liberusoftware/real-estate-instructions]
- "pkg_real_estate_listings_api": "liberusoftware/real-estate-listings-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Listings, liberusoftware/real-estate-listings]
- "pkg_real_estate_listings_filament": "liberusoftware/real-estate-listings-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Listings, liberusoftware/real-estate-listings]
- "pkg_real_estate_listings_livewire": "liberusoftware/real-estate-listings-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Listings, liberusoftware/real-estate-listings]
- "pkg_real_estate_marketing_api": "liberusoftware/real-estate-marketing-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Marketing, liberusoftware/real-estate-marketing]
- "pkg_real_estate_marketing_filament": "liberusoftware/real-estate-marketing-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Marketing, liberusoftware/real-estate-marketing]
- "pkg_real_estate_marketing_livewire": "liberusoftware/real-estate-marketing-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Marketing, liberusoftware/real-estate-marketing]
- "pkg_real_estate_matching_api": "liberusoftware/real-estate-matching-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Matching, liberusoftware/real-estate-matching]
- "pkg_real_estate_matching_filament": "liberusoftware/real-estate-matching-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Matching, liberusoftware/real-estate-matching]
- "pkg_real_estate_matching_livewire": "liberusoftware/real-estate-matching-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Matching, liberusoftware/real-estate-matching]
- "pkg_real_estate_media_and_documents_api": "liberusoftware/real-estate-media-and-documents-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Media and Docum…, liberusoftware/real-estate-media-and-do…]
- "pkg_real_estate_media_and_documents_filament": "liberusoftware/real-estate-media-and-documents-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Media and Docum…, liberusoftware/real-estate-media-and-do…]
- "pkg_real_estate_media_and_documents_livewire": "liberusoftware/real-estate-media-and-documents-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Media and Docum…, liberusoftware/real-estate-media-and-do…]
- "pkg_real_estate_offers_api": "liberusoftware/real-estate-offers-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Offers, liberusoftware/real-estate-offers]
- "pkg_real_estate_offers_filament": "liberusoftware/real-estate-offers-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Offers, liberusoftware/real-estate-offers]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-106.json

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
