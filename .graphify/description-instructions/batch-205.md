# Node Description Batch 206 of 212

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

- "src_propertymanagementapiserviceprovider_propertymanagementapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/PropertyManagementApiServiceProvider.php:L11 | neighbors=[PropertyManagementApiServiceProvider]
- "src_propertymanagementfilamentplugin_propertymanagementfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentPlugin.php:L23 | neighbors=[PropertyManagementFilamentPlugin]
- "src_propertymanagementfilamentplugin_propertymanagementfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentPlugin.php:L13 | neighbors=[PropertyManagementFilamentPlugin]
- "src_propertymanagementfilamentplugin_propertymanagementfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentPlugin.php:L18 | neighbors=[PropertyManagementFilamentPlugin]
- "src_propertymanagementfilamentserviceprovider_propertymanagementfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/PropertyManagementFilamentServiceProvider.php:L11 | neighbors=[PropertyManagementFilamentServiceProvid…]
- "src_propertymanagementlivewireserviceprovider_propertymanagementlivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-property-management-livewire/src/PropertyManagementLivewireServiceProvider.php:L12 | neighbors=[PropertyManagementLivewireServiceProvid…]
- "src_propertymanagementserviceprovider_propertymanagementserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-property-management/src/PropertyManagementServiceProvider.php:L19 | neighbors=[PropertyManagementServiceProvider]
- "src_propertymanagementserviceprovider_propertymanagementserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-property-management/src/PropertyManagementServiceProvider.php:L14 | neighbors=[PropertyManagementServiceProvider]
- "src_realestatecoreapiserviceprovider_realestatecoreapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-core-api/src/RealEstateCoreApiServiceProvider.php:L11 | neighbors=[RealEstateCoreApiServiceProvider]
- "src_realestatecorefilamentplugin_realestatecorefilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentPlugin.php:L30 | neighbors=[RealEstateCoreFilamentPlugin]
- "src_realestatecorefilamentplugin_realestatecorefilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentPlugin.php:L20 | neighbors=[RealEstateCoreFilamentPlugin]
- "src_realestatecorefilamentplugin_realestatecorefilamentplugin_make": ".make()" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentPlugin.php:L15 | neighbors=[RealEstateCoreFilamentPlugin]
- "src_realestatecorefilamentplugin_realestatecorefilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentPlugin.php:L25 | neighbors=[RealEstateCoreFilamentPlugin]
- "src_realestatecorefilamentserviceprovider_realestatecorefilamentserviceprovider": "RealEstateCoreFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentServiceProvider.php:L9 | neighbors=[RealEstateCoreFilamentServiceProvider.p…]
- "src_realestatecorelivewireserviceprovider_realestatecorelivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-core-livewire/src/RealEstateCoreLivewireServiceProvider.php:L12 | neighbors=[RealEstateCoreLivewireServiceProvider]
- "src_realestatecoreserviceprovider_realestatecoreserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-core/src/RealEstateCoreServiceProvider.php:L24 | neighbors=[RealEstateCoreServiceProvider]
- "src_realestatecoreserviceprovider_realestatecoreserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-core/src/RealEstateCoreServiceProvider.php:L11 | neighbors=[RealEstateCoreServiceProvider]
- "src_realestatedefaultthemeserviceprovider_realestatedefaultthemeserviceprovider_boot": ".boot()" | kind=code-symbol | source=themes/real-estate-default/src/RealEstateDefaultThemeServiceProvider.php:L11 | neighbors=[RealEstateDefaultThemeServiceProvider]
- "src_rightmoveapiserviceprovider_rightmoveapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-rightmove-api/src/RightmoveApiServiceProvider.php:L11 | neighbors=[RightmoveApiServiceProvider]
- "src_rightmovefilamentplugin_rightmovefilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentPlugin.php:L19 | neighbors=[RightmoveFilamentPlugin]
- "src_rightmovefilamentplugin_rightmovefilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentPlugin.php:L12 | neighbors=[RightmoveFilamentPlugin]
- "src_rightmovefilamentplugin_rightmovefilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentPlugin.php:L17 | neighbors=[RightmoveFilamentPlugin]
- "src_rightmovefilamentserviceprovider_rightmovefilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/RightmoveFilamentServiceProvider.php:L11 | neighbors=[RightmoveFilamentServiceProvider]
- "src_rightmovelivewireserviceprovider_rightmovelivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/src/RightmoveLivewireServiceProvider.php:L12 | neighbors=[RightmoveLivewireServiceProvider]
- "src_rightmoveserviceprovider_rightmoveserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-rightmove/src/RightmoveServiceProvider.php:L11 | neighbors=[RightmoveServiceProvider]
- "src_rolespermissionsfilamentplugin_rolespermissionsfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/roles-permissions-filament/src/RolesPermissionsFilamentPlugin.php:L9 | neighbors=[RolesPermissionsFilamentPlugin]
- "src_rolespermissionsfilamentserviceprovider_rolespermissionsfilamentserviceprovider": "RolesPermissionsFilamentServiceProvider" | kind=code-symbol | source=modules/roles-permissions-filament/src/RolesPermissionsFilamentServiceProvider.php:L7 | neighbors=[RolesPermissionsFilamentServiceProvider…]
- "src_rolespermissionsserviceprovider_rolespermissionsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/roles-permissions/src/RolesPermissionsServiceProvider.php:L21 | neighbors=[RolesPermissionsServiceProvider]
- "src_rolespermissionsserviceprovider_rolespermissionsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/roles-permissions/src/RolesPermissionsServiceProvider.php:L15 | neighbors=[RolesPermissionsServiceProvider]
- "src_salesprogressionapiserviceprovider_salesprogressionapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-sales-progression-api/src/SalesProgressionApiServiceProvider.php:L11 | neighbors=[SalesProgressionApiServiceProvider]
- "src_salesprogressionfilamentplugin_salesprogressionfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentPlugin.php:L19 | neighbors=[SalesProgressionFilamentPlugin]
- "src_salesprogressionfilamentplugin_salesprogressionfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentPlugin.php:L12 | neighbors=[SalesProgressionFilamentPlugin]
- "src_salesprogressionfilamentplugin_salesprogressionfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentPlugin.php:L17 | neighbors=[SalesProgressionFilamentPlugin]
- "src_salesprogressionfilamentserviceprovider_salesprogressionfilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/SalesProgressionFilamentServiceProvider.php:L11 | neighbors=[SalesProgressionFilamentServiceProvider]
- "src_salesprogressionlivewireserviceprovider_salesprogressionlivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/src/SalesProgressionLivewireServiceProvider.php:L12 | neighbors=[SalesProgressionLivewireServiceProvider]
- "src_salesprogressionserviceprovider_salesprogressionserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/SalesProgressionServiceProvider.php:L11 | neighbors=[SalesProgressionServiceProvider]
- "src_schedulerqueuesserviceprovider_schedulerqueuesserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/scheduler-queues/src/SchedulerQueuesServiceProvider.php:L10 | neighbors=[SchedulerQueuesServiceProvider]
- "src_searchapiserviceprovider_searchapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/search-api/src/SearchApiServiceProvider.php:L9 | neighbors=[SearchApiServiceProvider]
- "src_sessionsdevicesfilamentplugin_sessionsdevicesfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentPlugin.php:L26 | neighbors=[SessionsDevicesFilamentPlugin]
- "src_sessionsdevicesfilamentplugin_sessionsdevicesfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentPlugin.php:L16 | neighbors=[SessionsDevicesFilamentPlugin]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-205.json

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
