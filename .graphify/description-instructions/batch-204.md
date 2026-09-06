# Node Description Batch 205 of 212

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

- "src_onthemarketapiserviceprovider_onthemarketapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-onthemarket-api/src/OnTheMarketApiServiceProvider.php:L11 | neighbors=[OnTheMarketApiServiceProvider]
- "src_onthemarketfilamentplugin_onthemarketfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentPlugin.php:L19 | neighbors=[OnTheMarketFilamentPlugin]
- "src_onthemarketfilamentplugin_onthemarketfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentPlugin.php:L12 | neighbors=[OnTheMarketFilamentPlugin]
- "src_onthemarketfilamentplugin_onthemarketfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentPlugin.php:L17 | neighbors=[OnTheMarketFilamentPlugin]
- "src_onthemarketfilamentserviceprovider_onthemarketfilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/OnTheMarketFilamentServiceProvider.php:L11 | neighbors=[OnTheMarketFilamentServiceProvider]
- "src_onthemarketlivewireserviceprovider_onthemarketlivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/src/OnTheMarketLivewireServiceProvider.php:L12 | neighbors=[OnTheMarketLivewireServiceProvider]
- "src_onthemarketserviceprovider_onthemarketserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/OnTheMarketServiceProvider.php:L11 | neighbors=[OnTheMarketServiceProvider]
- "src_organizationsfilamentplugin_organizationsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentPlugin.php:L26 | neighbors=[OrganizationsFilamentPlugin]
- "src_organizationsfilamentplugin_organizationsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentPlugin.php:L16 | neighbors=[OrganizationsFilamentPlugin]
- "src_organizationsfilamentplugin_organizationsfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentPlugin.php:L11 | neighbors=[OrganizationsFilamentPlugin]
- "src_organizationsfilamentplugin_organizationsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentPlugin.php:L21 | neighbors=[OrganizationsFilamentPlugin]
- "src_organizationsfilamentserviceprovider_organizationsfilamentserviceprovider": "OrganizationsFilamentServiceProvider" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentServiceProvider.php:L7 | neighbors=[OrganizationsFilamentServiceProvider.php]
- "src_organizationsserviceprovider_organizationsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/organizations-teams/src/OrganizationsServiceProvider.php:L22 | neighbors=[OrganizationsServiceProvider]
- "src_organizationsserviceprovider_organizationsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/organizations-teams/src/OrganizationsServiceProvider.php:L15 | neighbors=[OrganizationsServiceProvider]
- "src_partiesapiserviceprovider_partiesapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-parties-api/src/PartiesApiServiceProvider.php:L11 | neighbors=[PartiesApiServiceProvider]
- "src_partiesfilamentplugin_partiesfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentPlugin.php:L28 | neighbors=[PartiesFilamentPlugin]
- "src_partiesfilamentplugin_partiesfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentPlugin.php:L18 | neighbors=[PartiesFilamentPlugin]
- "src_partiesfilamentplugin_partiesfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentPlugin.php:L13 | neighbors=[PartiesFilamentPlugin]
- "src_partiesfilamentplugin_partiesfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentPlugin.php:L23 | neighbors=[PartiesFilamentPlugin]
- "src_partiesfilamentserviceprovider_partiesfilamentserviceprovider": "PartiesFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentServiceProvider.php:L9 | neighbors=[PartiesFilamentServiceProvider.php]
- "src_partieslivewireserviceprovider_partieslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-parties-livewire/src/PartiesLivewireServiceProvider.php:L12 | neighbors=[PartiesLivewireServiceProvider]
- "src_partiesserviceprovider_partiesserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-parties/src/PartiesServiceProvider.php:L18 | neighbors=[PartiesServiceProvider]
- "src_partiesserviceprovider_partiesserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-parties/src/PartiesServiceProvider.php:L11 | neighbors=[PartiesServiceProvider]
- "src_portalsreportingapiserviceprovider_portalsreportingapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-portals-reporting-api/src/PortalsReportingApiServiceProvider.php:L11 | neighbors=[PortalsReportingApiServiceProvider]
- "src_portalsreportingfilamentplugin_portalsreportingfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentPlugin.php:L19 | neighbors=[PortalsReportingFilamentPlugin]
- "src_portalsreportingfilamentplugin_portalsreportingfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentPlugin.php:L12 | neighbors=[PortalsReportingFilamentPlugin]
- "src_portalsreportingfilamentplugin_portalsreportingfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentPlugin.php:L17 | neighbors=[PortalsReportingFilamentPlugin]
- "src_portalsreportingfilamentserviceprovider_portalsreportingfilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/PortalsReportingFilamentServiceProvider.php:L11 | neighbors=[PortalsReportingFilamentServiceProvider]
- "src_portalsreportinglivewireserviceprovider_portalsreportinglivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/src/PortalsReportingLivewireServiceProvider.php:L12 | neighbors=[PortalsReportingLivewireServiceProvider]
- "src_portalsreportingserviceprovider_portalsreportingserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/PortalsReportingServiceProvider.php:L11 | neighbors=[PortalsReportingServiceProvider]
- "src_profilesserviceprovider_profilesserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/profiles/src/ProfilesServiceProvider.php:L9 | neighbors=[ProfilesServiceProvider]
- "src_propertiesapiserviceprovider_propertiesapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-properties-api/src/PropertiesApiServiceProvider.php:L11 | neighbors=[PropertiesApiServiceProvider]
- "src_propertiesfilamentplugin_propertiesfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php:L30 | neighbors=[PropertiesFilamentPlugin]
- "src_propertiesfilamentplugin_propertiesfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php:L18 | neighbors=[PropertiesFilamentPlugin]
- "src_propertiesfilamentplugin_propertiesfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php:L13 | neighbors=[PropertiesFilamentPlugin]
- "src_propertiesfilamentplugin_propertiesfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php:L23 | neighbors=[PropertiesFilamentPlugin]
- "src_propertiesfilamentserviceprovider_propertiesfilamentserviceprovider": "PropertiesFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentServiceProvider.php:L9 | neighbors=[PropertiesFilamentServiceProvider.php]
- "src_propertieslivewireserviceprovider_propertieslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-properties-livewire/src/PropertiesLivewireServiceProvider.php:L12 | neighbors=[PropertiesLivewireServiceProvider]
- "src_propertiesserviceprovider_propertiesserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-properties/src/PropertiesServiceProvider.php:L16 | neighbors=[PropertiesServiceProvider]
- "src_propertiesserviceprovider_propertiesserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-properties/src/PropertiesServiceProvider.php:L11 | neighbors=[PropertiesServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-204.json

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
