# Node Description Batch 77 of 212

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

- "services_thememanager_thememanager_themeiscompatible": ".themeIsCompatible()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L120 | neighbors=[ThemeManager, .getSiteTheme(), .setTheme(), .enabledCapabilities()]
- "sessions_devices_filament_module": "Liberu Sessions and Devices Administration" | kind=entity | source=modules/sessions-devices-filament/README.md | neighbors=[Capability: foundation.sessions-devices…, Category: presentation, filament/filament ^5.x, Liberu Sessions and Devices]
- "src_apiaccessserviceprovider": "ApiAccessServiceProvider.php" | kind=code-symbol | source=modules/api-access/src/ApiAccessServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 75f7818 Bootstrap application from Libe…, 8cf045c Implement real estate module co…, ApiAccessServiceProvider]
- "src_instructionsfilamentplugin_instructionsfilamentplugin": "InstructionsFilamentPlugin" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentPlugin.php:L11 | neighbors=[InstructionsFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_lettingsfilamentplugin_lettingsfilamentplugin": "LettingsFilamentPlugin" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentPlugin.php:L11 | neighbors=[LettingsFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_lettingslivewireserviceprovider": "LettingsLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-lettings-livewire/src/LettingsLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, LettingsLivewireServiceProvider]
- "src_listingsfilamentplugin_listingsfilamentplugin": "ListingsFilamentPlugin" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentPlugin.php:L11 | neighbors=[ListingsFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_marketingfilamentplugin_marketingfilamentplugin": "MarketingFilamentPlugin" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentPlugin.php:L10 | neighbors=[MarketingFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_marketinglivewireserviceprovider": "MarketingLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-marketing-livewire/src/MarketingLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, 8cf045c Implement real estate module co…, MarketingLivewireServiceProvider]
- "src_matchingfilamentplugin_matchingfilamentplugin": "MatchingFilamentPlugin" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentPlugin.php:L11 | neighbors=[MatchingFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_mediaanddocumentsfilamentplugin_mediaanddocumentsfilamentplugin": "MediaAndDocumentsFilamentPlugin" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentPlugin.php:L11 | neighbors=[MediaAndDocumentsFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_offersfilamentplugin_offersfilamentplugin": "OffersFilamentPlugin" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentPlugin.php:L11 | neighbors=[OffersFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_onthemarketfilamentplugin_onthemarketfilamentplugin": "OnTheMarketFilamentPlugin" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentPlugin.php:L10 | neighbors=[OnTheMarketFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_onthemarketlivewireserviceprovider": "OnTheMarketLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/src/OnTheMarketLivewireServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, OnTheMarketLivewireServiceProvider]
- "src_partieslivewireserviceprovider": "PartiesLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-parties-livewire/src/PartiesLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 73659b3 Add real estate parties module …, 8cf045c Implement real estate module co…, PartiesLivewireServiceProvider]
- "src_portalsreportingfilamentplugin_portalsreportingfilamentplugin": "PortalsReportingFilamentPlugin" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentPlugin.php:L10 | neighbors=[PortalsReportingFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_portalsreportinglivewireserviceprovider": "PortalsReportingLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/src/PortalsReportingLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, 8cf045c Implement real estate module co…, PortalsReportingLivewireServiceProvider]
- "src_propertieslivewireserviceprovider": "PropertiesLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 75d6371 Add real estate properties modu…, 8cf045c Implement real estate module co…, PropertiesLivewireServiceProvider]
- "src_propertymanagementfilamentplugin_propertymanagementfilamentplugin": "PropertyManagementFilamentPlugin" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentPlugin.php:L11 | neighbors=[PropertyManagementFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_propertymanagementlivewireserviceprovider": "PropertyManagementLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-property-management-livewire/src/PropertyManagementLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, PropertyManagementLivewireServiceProvid…]
- "src_realestatecorefilamentplugin": "RealEstateCoreFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentPlugin.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, RealEstateCoreFilamentPlugin]
- "src_realestatecorelivewireserviceprovider": "RealEstateCoreLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-core-livewire/src/RealEstateCoreLivewireServiceProvider.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, RealEstateCoreLivewireServiceProvider]
- "src_realestatecoreserviceprovider": "RealEstateCoreServiceProvider.php" | kind=code-symbol | source=modules/real-estate-core/src/RealEstateCoreServiceProvider.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, RealEstateCoreServiceProvider]
- "src_rightmovefilamentplugin_rightmovefilamentplugin": "RightmoveFilamentPlugin" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentPlugin.php:L10 | neighbors=[RightmoveFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_rightmovelivewireserviceprovider": "RightmoveLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/src/RightmoveLivewireServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, RightmoveLivewireServiceProvider]
- "src_salesprogressionfilamentplugin_salesprogressionfilamentplugin": "SalesProgressionFilamentPlugin" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentPlugin.php:L10 | neighbors=[SalesProgressionFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_salesprogressionlivewireserviceprovider": "SalesProgressionLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/src/SalesProgressionLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, SalesProgressionLivewireServiceProvider]
- "src_valuationsfilamentplugin_valuationsfilamentplugin": "ValuationsFilamentPlugin" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentPlugin.php:L11 | neighbors=[ValuationsFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_viewingsfilamentplugin_viewingsfilamentplugin": "ViewingsFilamentPlugin" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentPlugin.php:L11 | neighbors=[ViewingsFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_zooplafilamentplugin_zooplafilamentplugin": "ZooplaFilamentPlugin" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentPlugin.php:L10 | neighbors=[ZooplaFilamentPlugin.php, .boot(), .getId(), .register()]
- "src_zooplalivewireserviceprovider": "ZooplaLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/src/ZooplaLivewireServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, ZooplaLivewireServiceProvider]
- "stat_chart_aa": "aa()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _e(), Z(), js()]
- "stat_chart_addelements": "addElements()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _dataCheck(), _each(), initialize()]
- "stat_chart_addeventlistener": "addEventListener()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, removeEventListener(), ga(), ya()]
- "stat_chart_ae": "Ae()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _drawDataset(), drawLabels(), ri()]
- "stat_chart_as": "As()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), Jt(), gl()]
- "stat_chart_ba": "ba()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ye(), za(), pi()]
- "stat_chart_bi": "bi()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getContext(), clear(), _destroy()]
- "stat_chart_calculatepadding": "_calculatePadding()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getPixelForTick(), isHorizontal(), fit()]
- "stat_chart_checkeventbindings": "_checkEventBindings()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bindEvents(), unbindEvents(), _update()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-076.json

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
