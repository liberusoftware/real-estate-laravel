# Node Description Batch 151 of 212

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

- "src_moduleregistry_moduleregistry_resolve": ".resolve()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L74 | neighbors=[ModuleRegistry, .enabled()]
- "src_modulevalidationguard": "ModuleValidationGuard.php" | kind=code-symbol | source=modules/module-manager/src/ModuleValidationGuard.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleValidationGuard]
- "src_modulevalidator": "ModuleValidator.php" | kind=code-symbol | source=modules/module-manager/src/ModuleValidator.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleValidator]
- "src_modulevalidator_modulevalidator": "ModuleValidator" | kind=code-symbol | source=modules/module-manager/src/ModuleValidator.php:L9 | neighbors=[ModuleValidator.php, .validate()]
- "src_mymemoryserviceprovider": "MyMemoryServiceProvider.php" | kind=code-symbol | source=modules/localization-mymemory/src/MyMemoryServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, MyMemoryServiceProvider]
- "src_mymemoryserviceprovider_mymemoryserviceprovider": "MyMemoryServiceProvider" | kind=code-symbol | source=modules/localization-mymemory/src/MyMemoryServiceProvider.php:L8 | neighbors=[MyMemoryServiceProvider.php, .boot()]
- "src_notificationsserviceprovider": "NotificationsServiceProvider.php" | kind=code-symbol | source=modules/notifications/src/NotificationsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, NotificationsServiceProvider]
- "src_notificationsserviceprovider_notificationsserviceprovider": "NotificationsServiceProvider" | kind=code-symbol | source=modules/notifications/src/NotificationsServiceProvider.php:L7 | neighbors=[NotificationsServiceProvider.php, .boot()]
- "src_observabilityserviceprovider": "ObservabilityServiceProvider.php" | kind=code-symbol | source=modules/observability/src/ObservabilityServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ObservabilityServiceProvider]
- "src_offersapiserviceprovider_offersapiserviceprovider": "OffersApiServiceProvider" | kind=code-symbol | source=modules/real-estate-offers-api/src/OffersApiServiceProvider.php:L9 | neighbors=[OffersApiServiceProvider.php, .boot()]
- "src_offersfilamentserviceprovider_offersfilamentserviceprovider": "OffersFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentServiceProvider.php:L9 | neighbors=[OffersFilamentServiceProvider.php, .register()]
- "src_offerslivewireserviceprovider_offerslivewireserviceprovider": "OffersLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/OffersLivewireServiceProvider.php:L10 | neighbors=[OffersLivewireServiceProvider.php, .boot()]
- "src_offersserviceprovider_offersserviceprovider": "OffersServiceProvider" | kind=code-symbol | source=modules/real-estate-offers/src/OffersServiceProvider.php:L9 | neighbors=[OffersServiceProvider.php, .boot()]
- "src_onthemarketapiserviceprovider": "OnTheMarketApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/OnTheMarketApiServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, OnTheMarketApiServiceProvider]
- "src_onthemarketapiserviceprovider_onthemarketapiserviceprovider": "OnTheMarketApiServiceProvider" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/OnTheMarketApiServiceProvider.php:L9 | neighbors=[OnTheMarketApiServiceProvider.php, .boot()]
- "src_onthemarketfilamentplugin": "OnTheMarketFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentPlugin.php:L1 | neighbors=[1cdd121 Add independent property portal…, OnTheMarketFilamentPlugin]
- "src_onthemarketfilamentserviceprovider": "OnTheMarketFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, OnTheMarketFilamentServiceProvider]
- "src_onthemarketfilamentserviceprovider_onthemarketfilamentserviceprovider": "OnTheMarketFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentServiceProvider.php:L9 | neighbors=[OnTheMarketFilamentServiceProvider.php, .boot()]
- "src_onthemarketlivewireserviceprovider_onthemarketlivewireserviceprovider": "OnTheMarketLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/src/OnTheMarketLivewireServiceProvider.php:L10 | neighbors=[OnTheMarketLivewireServiceProvider.php, .boot()]
- "src_onthemarketserviceprovider_onthemarketserviceprovider": "OnTheMarketServiceProvider" | kind=code-symbol | source=modules/real-estate-onthemarket/src/OnTheMarketServiceProvider.php:L9 | neighbors=[OnTheMarketServiceProvider.php, .boot()]
- "src_organizationsfilamentplugin": "OrganizationsFilamentPlugin.php" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentPlugin.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, OrganizationsFilamentPlugin]
- "src_organizationsfilamentserviceprovider": "OrganizationsFilamentServiceProvider.php" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, OrganizationsFilamentServiceProvider]
- "src_organizationsserviceprovider": "OrganizationsServiceProvider.php" | kind=code-symbol | source=modules/organizations-teams/src/OrganizationsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, OrganizationsServiceProvider]
- "src_partiesapiserviceprovider": "PartiesApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-parties-api/src/PartiesApiServiceProvider.php:L1 | neighbors=[73659b3 Add real estate parties module …, PartiesApiServiceProvider]
- "src_partiesapiserviceprovider_partiesapiserviceprovider": "PartiesApiServiceProvider" | kind=code-symbol | source=modules/real-estate-parties-api/src/PartiesApiServiceProvider.php:L9 | neighbors=[PartiesApiServiceProvider.php, .boot()]
- "src_partiesfilamentplugin": "PartiesFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentPlugin.php:L1 | neighbors=[73659b3 Add real estate parties module …, PartiesFilamentPlugin]
- "src_partiesfilamentserviceprovider": "PartiesFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentServiceProvider.php:L1 | neighbors=[73659b3 Add real estate parties module …, PartiesFilamentServiceProvider]
- "src_partieslivewireserviceprovider_partieslivewireserviceprovider": "PartiesLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-parties-livewire/src/PartiesLivewireServiceProvider.php:L10 | neighbors=[PartiesLivewireServiceProvider.php, .boot()]
- "src_partiesserviceprovider": "PartiesServiceProvider.php" | kind=code-symbol | source=modules/real-estate-parties/src/PartiesServiceProvider.php:L1 | neighbors=[73659b3 Add real estate parties module …, PartiesServiceProvider]
- "src_portalsreportingapiserviceprovider": "PortalsReportingApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/PortalsReportingApiServiceProvider.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, PortalsReportingApiServiceProvider]
- "src_portalsreportingapiserviceprovider_portalsreportingapiserviceprovider": "PortalsReportingApiServiceProvider" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/PortalsReportingApiServiceProvider.php:L9 | neighbors=[PortalsReportingApiServiceProvider.php, .boot()]
- "src_portalsreportingfilamentplugin": "PortalsReportingFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentPlugin.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, PortalsReportingFilamentPlugin]
- "src_portalsreportingfilamentserviceprovider": "PortalsReportingFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentServiceProvider.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, PortalsReportingFilamentServiceProvider]
- "src_portalsreportingfilamentserviceprovider_portalsreportingfilamentserviceprovider": "PortalsReportingFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentServiceProvider.php:L9 | neighbors=[PortalsReportingFilamentServiceProvider…, .boot()]
- "src_portalsreportinglivewireserviceprovider_portalsreportinglivewireserviceprovider": "PortalsReportingLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/src/PortalsReportingLivewireServiceProvider.php:L10 | neighbors=[PortalsReportingLivewireServiceProvider…, .boot()]
- "src_portalsreportingserviceprovider": "PortalsReportingServiceProvider.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/PortalsReportingServiceProvider.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, PortalsReportingServiceProvider]
- "src_portalsreportingserviceprovider_portalsreportingserviceprovider": "PortalsReportingServiceProvider" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/PortalsReportingServiceProvider.php:L9 | neighbors=[PortalsReportingServiceProvider.php, .boot()]
- "src_profilesserviceprovider": "ProfilesServiceProvider.php" | kind=code-symbol | source=modules/profiles/src/ProfilesServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ProfilesServiceProvider]
- "src_profilesserviceprovider_profilesserviceprovider": "ProfilesServiceProvider" | kind=code-symbol | source=modules/profiles/src/ProfilesServiceProvider.php:L7 | neighbors=[ProfilesServiceProvider.php, .boot()]
- "src_propertiesapiserviceprovider": "PropertiesApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-properties-api/src/PropertiesApiServiceProvider.php:L1 | neighbors=[75d6371 Add real estate properties modu…, PropertiesApiServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-150.json

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
