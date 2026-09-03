# Node Description Batch 150 of 212

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

- "src_lettingsapiserviceprovider": "LettingsApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-lettings-api/src/LettingsApiServiceProvider.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, LettingsApiServiceProvider]
- "src_lettingsapiserviceprovider_lettingsapiserviceprovider": "LettingsApiServiceProvider" | kind=code-symbol | source=modules/real-estate-lettings-api/src/LettingsApiServiceProvider.php:L9 | neighbors=[LettingsApiServiceProvider.php, .boot()]
- "src_lettingsfilamentplugin": "LettingsFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentPlugin.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, LettingsFilamentPlugin]
- "src_lettingsfilamentserviceprovider": "LettingsFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentServiceProvider.php:L1 | neighbors=[e8b93fc Implement remaining real estate…, LettingsFilamentServiceProvider]
- "src_lettingsfilamentserviceprovider_lettingsfilamentserviceprovider": "LettingsFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentServiceProvider.php:L9 | neighbors=[LettingsFilamentServiceProvider.php, .register()]
- "src_lettingslivewireserviceprovider_lettingslivewireserviceprovider": "LettingsLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-lettings-livewire/src/LettingsLivewireServiceProvider.php:L10 | neighbors=[LettingsLivewireServiceProvider.php, .boot()]
- "src_listingsapiserviceprovider_listingsapiserviceprovider": "ListingsApiServiceProvider" | kind=code-symbol | source=modules/real-estate-listings-api/src/ListingsApiServiceProvider.php:L9 | neighbors=[ListingsApiServiceProvider.php, .boot()]
- "src_listingsfilamentserviceprovider_listingsfilamentserviceprovider": "ListingsFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentServiceProvider.php:L9 | neighbors=[ListingsFilamentServiceProvider.php, .register()]
- "src_listingslivewireserviceprovider_listingslivewireserviceprovider": "ListingsLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-listings-livewire/src/ListingsLivewireServiceProvider.php:L10 | neighbors=[ListingsLivewireServiceProvider.php, .boot()]
- "src_listingsserviceprovider_listingsserviceprovider": "ListingsServiceProvider" | kind=code-symbol | source=modules/real-estate-listings/src/ListingsServiceProvider.php:L9 | neighbors=[ListingsServiceProvider.php, .boot()]
- "src_localizationlivewireserviceprovider": "LocalizationLivewireServiceProvider.php" | kind=code-symbol | source=modules/localization-core-livewire/src/LocalizationLivewireServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LocalizationLivewireServiceProvider]
- "src_localizationlivewireserviceprovider_localizationlivewireserviceprovider": "LocalizationLivewireServiceProvider" | kind=code-symbol | source=modules/localization-core-livewire/src/LocalizationLivewireServiceProvider.php:L9 | neighbors=[LocalizationLivewireServiceProvider.php, .boot()]
- "src_localizationserviceprovider": "LocalizationServiceProvider.php" | kind=code-symbol | source=modules/localization-core/src/LocalizationServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LocalizationServiceProvider]
- "src_manifest": "Manifest.php" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Manifest]
- "src_marketingapiserviceprovider": "MarketingApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-marketing-api/src/MarketingApiServiceProvider.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, MarketingApiServiceProvider]
- "src_marketingapiserviceprovider_marketingapiserviceprovider": "MarketingApiServiceProvider" | kind=code-symbol | source=modules/real-estate-marketing-api/src/MarketingApiServiceProvider.php:L9 | neighbors=[MarketingApiServiceProvider.php, .boot()]
- "src_marketingfilamentplugin": "MarketingFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentPlugin.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, MarketingFilamentPlugin]
- "src_marketingfilamentserviceprovider": "MarketingFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentServiceProvider.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, MarketingFilamentServiceProvider]
- "src_marketingfilamentserviceprovider_marketingfilamentserviceprovider": "MarketingFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentServiceProvider.php:L9 | neighbors=[MarketingFilamentServiceProvider.php, .boot()]
- "src_marketinglivewireserviceprovider_marketinglivewireserviceprovider": "MarketingLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-marketing-livewire/src/MarketingLivewireServiceProvider.php:L10 | neighbors=[MarketingLivewireServiceProvider.php, .boot()]
- "src_marketingserviceprovider": "MarketingServiceProvider.php" | kind=code-symbol | source=modules/real-estate-marketing/src/MarketingServiceProvider.php:L1 | neighbors=[4fd850d Add real estate marketing modul…, MarketingServiceProvider]
- "src_marketingserviceprovider_marketingserviceprovider": "MarketingServiceProvider" | kind=code-symbol | source=modules/real-estate-marketing/src/MarketingServiceProvider.php:L9 | neighbors=[MarketingServiceProvider.php, .boot()]
- "src_matchingapiserviceprovider_matchingapiserviceprovider": "MatchingApiServiceProvider" | kind=code-symbol | source=modules/real-estate-matching-api/src/MatchingApiServiceProvider.php:L9 | neighbors=[MatchingApiServiceProvider.php, .boot()]
- "src_matchingfilamentserviceprovider_matchingfilamentserviceprovider": "MatchingFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentServiceProvider.php:L9 | neighbors=[MatchingFilamentServiceProvider.php, .register()]
- "src_matchinglivewireserviceprovider_matchinglivewireserviceprovider": "MatchingLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-matching-livewire/src/MatchingLivewireServiceProvider.php:L10 | neighbors=[MatchingLivewireServiceProvider.php, .boot()]
- "src_matchingserviceprovider_matchingserviceprovider": "MatchingServiceProvider" | kind=code-symbol | source=modules/real-estate-matching/src/MatchingServiceProvider.php:L9 | neighbors=[MatchingServiceProvider.php, .boot()]
- "src_mediaanddocumentsapiserviceprovider": "MediaAndDocumentsApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/MediaAndDocumentsApiServiceProvider.php:L1 | neighbors=[11d0aae Add real estate media documents…, MediaAndDocumentsApiServiceProvider]
- "src_mediaanddocumentsapiserviceprovider_mediaanddocumentsapiserviceprovider": "MediaAndDocumentsApiServiceProvider" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/MediaAndDocumentsApiServiceProvider.php:L9 | neighbors=[MediaAndDocumentsApiServiceProvider.php, .boot()]
- "src_mediaanddocumentsfilamentserviceprovider_mediaanddocumentsfilamentserviceprovider": "MediaAndDocumentsFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentServiceProvider.php:L9 | neighbors=[MediaAndDocumentsFilamentServiceProvide…, .register()]
- "src_mediaanddocumentslivewireserviceprovider_mediaanddocumentslivewireserviceprovider": "MediaAndDocumentsLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/src/MediaAndDocumentsLivewireServiceProvider.php:L10 | neighbors=[MediaAndDocumentsLivewireServiceProvide…, .boot()]
- "src_mediaanddocumentsserviceprovider": "MediaAndDocumentsServiceProvider.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/MediaAndDocumentsServiceProvider.php:L1 | neighbors=[0910e2b Add real estate media and docum…, MediaAndDocumentsServiceProvider]
- "src_mediaanddocumentsserviceprovider_mediaanddocumentsserviceprovider": "MediaAndDocumentsServiceProvider" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/MediaAndDocumentsServiceProvider.php:L9 | neighbors=[MediaAndDocumentsServiceProvider.php, .boot()]
- "src_modulediscovery": "ModuleDiscovery.php" | kind=code-symbol | source=modules/module-manager/src/ModuleDiscovery.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleDiscovery]
- "src_modulediscovery_modulediscovery": "ModuleDiscovery" | kind=code-symbol | source=modules/module-manager/src/ModuleDiscovery.php:L8 | neighbors=[ModuleDiscovery.php, .discover()]
- "src_modulemanagerfilamentplugin": "ModuleManagerFilamentPlugin.php" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentPlugin.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleManagerFilamentPlugin]
- "src_modulemanagerfilamentserviceprovider": "ModuleManagerFilamentServiceProvider.php" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleManagerFilamentServiceProvider]
- "src_modulemanagerfilamentserviceprovider_modulemanagerfilamentserviceprovider": "ModuleManagerFilamentServiceProvider" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentServiceProvider.php:L7 | neighbors=[ModuleManagerFilamentServiceProvider.php, .boot()]
- "src_modulemanagerserviceprovider": "ModuleManagerServiceProvider.php" | kind=code-symbol | source=modules/module-manager/src/ModuleManagerServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleManagerServiceProvider]
- "src_moduleregistry": "ModuleRegistry.php" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleRegistry]
- "src_moduleregistry_moduleregistry_enabled": ".enabled()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L24 | neighbors=[ModuleRegistry, .resolve()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-149.json

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
