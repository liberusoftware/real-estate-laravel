# Node Description Batch 152 of 212

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

- "src_propertiesapiserviceprovider_propertiesapiserviceprovider": "PropertiesApiServiceProvider" | kind=code-symbol | source=modules/real-estate-properties-api/src/PropertiesApiServiceProvider.php:L9 | neighbors=[PropertiesApiServiceProvider.php, .boot()]
- "src_propertiesfilamentserviceprovider": "PropertiesFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentServiceProvider.php:L1 | neighbors=[75d6371 Add real estate properties modu…, PropertiesFilamentServiceProvider]
- "src_propertieslivewireserviceprovider_propertieslivewireserviceprovider": "PropertiesLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php:L10 | neighbors=[PropertiesLivewireServiceProvider.php, .boot()]
- "src_propertiesserviceprovider": "PropertiesServiceProvider.php" | kind=code-symbol | source=modules/real-estate-properties/src/PropertiesServiceProvider.php:L1 | neighbors=[75d6371 Add real estate properties modu…, PropertiesServiceProvider]
- "src_propertymanagementapiserviceprovider": "PropertyManagementApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-property-management-api/src/PropertyManagementApiServiceProvider.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, PropertyManagementApiServiceProvider]
- "src_propertymanagementapiserviceprovider_propertymanagementapiserviceprovider": "PropertyManagementApiServiceProvider" | kind=code-symbol | source=modules/real-estate-property-management-api/src/PropertyManagementApiServiceProvider.php:L9 | neighbors=[PropertyManagementApiServiceProvider.php, .boot()]
- "src_propertymanagementfilamentplugin": "PropertyManagementFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentPlugin.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, PropertyManagementFilamentPlugin]
- "src_propertymanagementfilamentserviceprovider": "PropertyManagementFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentServiceProvider.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, PropertyManagementFilamentServiceProvid…]
- "src_propertymanagementfilamentserviceprovider_propertymanagementfilamentserviceprovider": "PropertyManagementFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentServiceProvider.php:L9 | neighbors=[PropertyManagementFilamentServiceProvid…, .register()]
- "src_propertymanagementlivewireserviceprovider_propertymanagementlivewireserviceprovider": "PropertyManagementLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-property-management-livewire/src/PropertyManagementLivewireServiceProvider.php:L10 | neighbors=[PropertyManagementLivewireServiceProvid…, .boot()]
- "src_realestatecoreapiserviceprovider": "RealEstateCoreApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-core-api/src/RealEstateCoreApiServiceProvider.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, RealEstateCoreApiServiceProvider]
- "src_realestatecoreapiserviceprovider_realestatecoreapiserviceprovider": "RealEstateCoreApiServiceProvider" | kind=code-symbol | source=modules/real-estate-core-api/src/RealEstateCoreApiServiceProvider.php:L9 | neighbors=[RealEstateCoreApiServiceProvider.php, .boot()]
- "src_realestatecorefilamentserviceprovider": "RealEstateCoreFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentServiceProvider.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, RealEstateCoreFilamentServiceProvider]
- "src_realestatecorelivewireserviceprovider_realestatecorelivewireserviceprovider": "RealEstateCoreLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-core-livewire/src/RealEstateCoreLivewireServiceProvider.php:L10 | neighbors=[RealEstateCoreLivewireServiceProvider.p…, .boot()]
- "src_realestatedefaultthemeserviceprovider": "RealEstateDefaultThemeServiceProvider.php" | kind=code-symbol | source=themes/real-estate-default/src/RealEstateDefaultThemeServiceProvider.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…, RealEstateDefaultThemeServiceProvider]
- "src_realestatedefaultthemeserviceprovider_realestatedefaultthemeserviceprovider": "RealEstateDefaultThemeServiceProvider" | kind=code-symbol | source=themes/real-estate-default/src/RealEstateDefaultThemeServiceProvider.php:L9 | neighbors=[RealEstateDefaultThemeServiceProvider.p…, .boot()]
- "src_rightmoveapiserviceprovider": "RightmoveApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/RightmoveApiServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, RightmoveApiServiceProvider]
- "src_rightmoveapiserviceprovider_rightmoveapiserviceprovider": "RightmoveApiServiceProvider" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/RightmoveApiServiceProvider.php:L9 | neighbors=[RightmoveApiServiceProvider.php, .boot()]
- "src_rightmovefilamentplugin": "RightmoveFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentPlugin.php:L1 | neighbors=[1cdd121 Add independent property portal…, RightmoveFilamentPlugin]
- "src_rightmovefilamentserviceprovider": "RightmoveFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, RightmoveFilamentServiceProvider]
- "src_rightmovefilamentserviceprovider_rightmovefilamentserviceprovider": "RightmoveFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentServiceProvider.php:L9 | neighbors=[RightmoveFilamentServiceProvider.php, .boot()]
- "src_rightmovelivewireserviceprovider_rightmovelivewireserviceprovider": "RightmoveLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/src/RightmoveLivewireServiceProvider.php:L10 | neighbors=[RightmoveLivewireServiceProvider.php, .boot()]
- "src_rightmoveserviceprovider_rightmoveserviceprovider": "RightmoveServiceProvider" | kind=code-symbol | source=modules/real-estate-rightmove/src/RightmoveServiceProvider.php:L9 | neighbors=[RightmoveServiceProvider.php, .boot()]
- "src_rolespermissionsfilamentplugin": "RolesPermissionsFilamentPlugin.php" | kind=code-symbol | source=modules/roles-permissions-filament/src/RolesPermissionsFilamentPlugin.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RolesPermissionsFilamentPlugin]
- "src_rolespermissionsfilamentplugin_rolespermissionsfilamentplugin": "RolesPermissionsFilamentPlugin" | kind=code-symbol | source=modules/roles-permissions-filament/src/RolesPermissionsFilamentPlugin.php:L7 | neighbors=[RolesPermissionsFilamentPlugin.php, .make()]
- "src_rolespermissionsfilamentserviceprovider": "RolesPermissionsFilamentServiceProvider.php" | kind=code-symbol | source=modules/roles-permissions-filament/src/RolesPermissionsFilamentServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RolesPermissionsFilamentServiceProvider]
- "src_rolespermissionsserviceprovider": "RolesPermissionsServiceProvider.php" | kind=code-symbol | source=modules/roles-permissions/src/RolesPermissionsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RolesPermissionsServiceProvider]
- "src_salesprogressionapiserviceprovider": "SalesProgressionApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/SalesProgressionApiServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, SalesProgressionApiServiceProvider]
- "src_salesprogressionapiserviceprovider_salesprogressionapiserviceprovider": "SalesProgressionApiServiceProvider" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/SalesProgressionApiServiceProvider.php:L9 | neighbors=[SalesProgressionApiServiceProvider.php, .boot()]
- "src_salesprogressionfilamentplugin": "SalesProgressionFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentPlugin.php:L1 | neighbors=[6385f28 Add sales progression modules a…, SalesProgressionFilamentPlugin]
- "src_salesprogressionfilamentserviceprovider": "SalesProgressionFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, SalesProgressionFilamentServiceProvider]
- "src_salesprogressionfilamentserviceprovider_salesprogressionfilamentserviceprovider": "SalesProgressionFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentServiceProvider.php:L9 | neighbors=[SalesProgressionFilamentServiceProvider…, .boot()]
- "src_salesprogressionlivewireserviceprovider_salesprogressionlivewireserviceprovider": "SalesProgressionLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/src/SalesProgressionLivewireServiceProvider.php:L10 | neighbors=[SalesProgressionLivewireServiceProvider…, .boot()]
- "src_salesprogressionserviceprovider": "SalesProgressionServiceProvider.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/SalesProgressionServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, SalesProgressionServiceProvider]
- "src_salesprogressionserviceprovider_salesprogressionserviceprovider": "SalesProgressionServiceProvider" | kind=code-symbol | source=modules/real-estate-sales-progression/src/SalesProgressionServiceProvider.php:L9 | neighbors=[SalesProgressionServiceProvider.php, .boot()]
- "src_schedulerqueuesserviceprovider": "SchedulerQueuesServiceProvider.php" | kind=code-symbol | source=modules/scheduler-queues/src/SchedulerQueuesServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SchedulerQueuesServiceProvider]
- "src_schedulerqueuesserviceprovider_schedulerqueuesserviceprovider": "SchedulerQueuesServiceProvider" | kind=code-symbol | source=modules/scheduler-queues/src/SchedulerQueuesServiceProvider.php:L8 | neighbors=[SchedulerQueuesServiceProvider.php, .boot()]
- "src_searchapiserviceprovider": "SearchApiServiceProvider.php" | kind=code-symbol | source=modules/search-api/src/SearchApiServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearchApiServiceProvider]
- "src_searchapiserviceprovider_searchapiserviceprovider": "SearchApiServiceProvider" | kind=code-symbol | source=modules/search-api/src/SearchApiServiceProvider.php:L7 | neighbors=[SearchApiServiceProvider.php, .boot()]
- "src_searchserviceprovider": "SearchServiceProvider.php" | kind=code-symbol | source=modules/search/src/SearchServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearchServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-151.json

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
