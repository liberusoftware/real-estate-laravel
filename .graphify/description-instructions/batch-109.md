# Node Description Batch 110 of 212

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

- "src_instructionsserviceprovider": "InstructionsServiceProvider.php" | kind=code-symbol | source=modules/real-estate-instructions/src/InstructionsServiceProvider.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, InstructionsServiceProvider]
- "src_integrationsserviceprovider_integrationsserviceprovider": "IntegrationsServiceProvider" | kind=code-symbol | source=modules/integrations/src/IntegrationsServiceProvider.php:L8 | neighbors=[IntegrationsServiceProvider.php, .boot(), .register()]
- "src_lettingsserviceprovider": "LettingsServiceProvider.php" | kind=code-symbol | source=modules/real-estate-lettings/src/LettingsServiceProvider.php:L1 | neighbors=[3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…, LettingsServiceProvider]
- "src_lettingsserviceprovider_lettingsserviceprovider": "LettingsServiceProvider" | kind=code-symbol | source=modules/real-estate-lettings/src/LettingsServiceProvider.php:L12 | neighbors=[LettingsServiceProvider.php, .boot(), .register()]
- "src_listingsapiserviceprovider": "ListingsApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-listings-api/src/ListingsApiServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, ListingsApiServiceProvider]
- "src_listingsfilamentplugin": "ListingsFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentPlugin.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, ListingsFilamentPlugin]
- "src_listingsfilamentserviceprovider": "ListingsFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, ListingsFilamentServiceProvider]
- "src_listingsserviceprovider": "ListingsServiceProvider.php" | kind=code-symbol | source=modules/real-estate-listings/src/ListingsServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, ListingsServiceProvider]
- "src_localizationserviceprovider_localizationserviceprovider": "LocalizationServiceProvider" | kind=code-symbol | source=modules/localization-core/src/LocalizationServiceProvider.php:L10 | neighbors=[LocalizationServiceProvider.php, .boot(), .register()]
- "src_matchingapiserviceprovider": "MatchingApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-matching-api/src/MatchingApiServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, MatchingApiServiceProvider]
- "src_matchingfilamentplugin": "MatchingFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentPlugin.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, MatchingFilamentPlugin]
- "src_matchingfilamentserviceprovider": "MatchingFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, MatchingFilamentServiceProvider]
- "src_matchingserviceprovider": "MatchingServiceProvider.php" | kind=code-symbol | source=modules/real-estate-matching/src/MatchingServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, MatchingServiceProvider]
- "src_mediaanddocumentsfilamentplugin": "MediaAndDocumentsFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentPlugin.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, MediaAndDocumentsFilamentPlugin]
- "src_mediaanddocumentsfilamentserviceprovider": "MediaAndDocumentsFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, MediaAndDocumentsFilamentServiceProvider]
- "src_modulemanagerserviceprovider_modulemanagerserviceprovider": "ModuleManagerServiceProvider" | kind=code-symbol | source=modules/module-manager/src/ModuleManagerServiceProvider.php:L15 | neighbors=[ModuleManagerServiceProvider.php, .boot(), .register()]
- "src_modulevalidationguard_modulevalidationguard": "ModuleValidationGuard" | kind=code-symbol | source=modules/module-manager/src/ModuleValidationGuard.php:L5 | neighbors=[ModuleValidationGuard.php, .__construct(), .ensureValid()]
- "src_observabilityserviceprovider_observabilityserviceprovider": "ObservabilityServiceProvider" | kind=code-symbol | source=modules/observability/src/ObservabilityServiceProvider.php:L15 | neighbors=[ObservabilityServiceProvider.php, .boot(), .register()]
- "src_offersapiserviceprovider": "OffersApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-offers-api/src/OffersApiServiceProvider.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, OffersApiServiceProvider]
- "src_offersfilamentplugin": "OffersFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentPlugin.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, OffersFilamentPlugin]
- "src_offersfilamentserviceprovider": "OffersFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentServiceProvider.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, OffersFilamentServiceProvider]
- "src_offersserviceprovider": "OffersServiceProvider.php" | kind=code-symbol | source=modules/real-estate-offers/src/OffersServiceProvider.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, OffersServiceProvider]
- "src_onthemarketserviceprovider": "OnTheMarketServiceProvider.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/OnTheMarketServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, bd4b1dc Add independent property portal…, OnTheMarketServiceProvider]
- "src_organizationsserviceprovider_organizationsserviceprovider": "OrganizationsServiceProvider" | kind=code-symbol | source=modules/organizations-teams/src/OrganizationsServiceProvider.php:L13 | neighbors=[OrganizationsServiceProvider.php, .boot(), .register()]
- "src_partiesserviceprovider_partiesserviceprovider": "PartiesServiceProvider" | kind=code-symbol | source=modules/real-estate-parties/src/PartiesServiceProvider.php:L9 | neighbors=[PartiesServiceProvider.php, .boot(), .register()]
- "src_propertiesfilamentplugin": "PropertiesFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php:L1 | neighbors=[3f6a64e Route property adapters through…, 75d6371 Add real estate properties modu…, PropertiesFilamentPlugin]
- "src_propertiesserviceprovider_propertiesserviceprovider": "PropertiesServiceProvider" | kind=code-symbol | source=modules/real-estate-properties/src/PropertiesServiceProvider.php:L9 | neighbors=[PropertiesServiceProvider.php, .boot(), .register()]
- "src_propertymanagementserviceprovider": "PropertyManagementServiceProvider.php" | kind=code-symbol | source=modules/real-estate-property-management/src/PropertyManagementServiceProvider.php:L1 | neighbors=[3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…, PropertyManagementServiceProvider]
- "src_propertymanagementserviceprovider_propertymanagementserviceprovider": "PropertyManagementServiceProvider" | kind=code-symbol | source=modules/real-estate-property-management/src/PropertyManagementServiceProvider.php:L12 | neighbors=[PropertyManagementServiceProvider.php, .boot(), .register()]
- "src_realestatecoreserviceprovider_realestatecoreserviceprovider": "RealEstateCoreServiceProvider" | kind=code-symbol | source=modules/real-estate-core/src/RealEstateCoreServiceProvider.php:L9 | neighbors=[RealEstateCoreServiceProvider.php, .boot(), .register()]
- "src_rightmoveserviceprovider": "RightmoveServiceProvider.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/RightmoveServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, bd4b1dc Add independent property portal…, RightmoveServiceProvider]
- "src_rolespermissionsserviceprovider_rolespermissionsserviceprovider": "RolesPermissionsServiceProvider" | kind=code-symbol | source=modules/roles-permissions/src/RolesPermissionsServiceProvider.php:L13 | neighbors=[RolesPermissionsServiceProvider.php, .boot(), .register()]
- "src_searchserviceprovider_searchserviceprovider": "SearchServiceProvider" | kind=code-symbol | source=modules/search/src/SearchServiceProvider.php:L14 | neighbors=[SearchServiceProvider.php, .boot(), .register()]
- "src_sessionsdevicesserviceprovider_sessionsdevicesserviceprovider": "SessionsDevicesServiceProvider" | kind=code-symbol | source=modules/sessions-devices/src/SessionsDevicesServiceProvider.php:L7 | neighbors=[SessionsDevicesServiceProvider.php, .boot(), .register()]
- "src_twofactorserviceprovider_twofactorserviceprovider": "TwoFactorServiceProvider" | kind=code-symbol | source=modules/two-factor-authentication/src/TwoFactorServiceProvider.php:L7 | neighbors=[TwoFactorServiceProvider.php, .boot(), .register()]
- "src_valuationsapiserviceprovider": "ValuationsApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-valuations-api/src/ValuationsApiServiceProvider.php:L1 | neighbors=[188c376 Add real estate valuations API …, 6385f28 Add sales progression modules a…, ValuationsApiServiceProvider]
- "src_valuationsfilamentplugin": "ValuationsFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentPlugin.php:L1 | neighbors=[3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, ValuationsFilamentPlugin]
- "src_valuationsfilamentserviceprovider": "ValuationsFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentServiceProvider.php:L1 | neighbors=[3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, ValuationsFilamentServiceProvider]
- "src_valuationsserviceprovider_valuationsserviceprovider": "ValuationsServiceProvider" | kind=code-symbol | source=modules/real-estate-valuations/src/ValuationsServiceProvider.php:L9 | neighbors=[ValuationsServiceProvider.php, .boot(), .register()]
- "src_viewingsapiserviceprovider": "ViewingsApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-viewings-api/src/ViewingsApiServiceProvider.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, ViewingsApiServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-109.json

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
