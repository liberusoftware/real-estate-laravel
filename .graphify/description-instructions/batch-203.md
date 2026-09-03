# Node Description Batch 204 of 212

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

- "src_matchingfilamentplugin_matchingfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentPlugin.php:L13 | neighbors=[MatchingFilamentPlugin]
- "src_matchingfilamentplugin_matchingfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentPlugin.php:L18 | neighbors=[MatchingFilamentPlugin]
- "src_matchingfilamentserviceprovider_matchingfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentServiceProvider.php:L11 | neighbors=[MatchingFilamentServiceProvider]
- "src_matchinglivewireserviceprovider_matchinglivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-matching-livewire/src/MatchingLivewireServiceProvider.php:L12 | neighbors=[MatchingLivewireServiceProvider]
- "src_matchingserviceprovider_matchingserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-matching/src/MatchingServiceProvider.php:L11 | neighbors=[MatchingServiceProvider]
- "src_mediaanddocumentsapiserviceprovider_mediaanddocumentsapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-media-and-documents-api/src/MediaAndDocumentsApiServiceProvider.php:L11 | neighbors=[MediaAndDocumentsApiServiceProvider]
- "src_mediaanddocumentsfilamentplugin_mediaanddocumentsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentPlugin.php:L23 | neighbors=[MediaAndDocumentsFilamentPlugin]
- "src_mediaanddocumentsfilamentplugin_mediaanddocumentsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentPlugin.php:L13 | neighbors=[MediaAndDocumentsFilamentPlugin]
- "src_mediaanddocumentsfilamentplugin_mediaanddocumentsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentPlugin.php:L18 | neighbors=[MediaAndDocumentsFilamentPlugin]
- "src_mediaanddocumentsfilamentserviceprovider_mediaanddocumentsfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/MediaAndDocumentsFilamentServiceProvider.php:L11 | neighbors=[MediaAndDocumentsFilamentServiceProvider]
- "src_mediaanddocumentslivewireserviceprovider_mediaanddocumentslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/src/MediaAndDocumentsLivewireServiceProvider.php:L12 | neighbors=[MediaAndDocumentsLivewireServiceProvider]
- "src_mediaanddocumentsserviceprovider_mediaanddocumentsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/MediaAndDocumentsServiceProvider.php:L11 | neighbors=[MediaAndDocumentsServiceProvider]
- "src_modulediscovery_modulediscovery_discover": ".discover()" | kind=code-symbol | source=modules/module-manager/src/ModuleDiscovery.php:L11 | neighbors=[ModuleDiscovery]
- "src_modulemanagerfilamentplugin_modulemanagerfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentPlugin.php:L26 | neighbors=[ModuleManagerFilamentPlugin]
- "src_modulemanagerfilamentplugin_modulemanagerfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentPlugin.php:L16 | neighbors=[ModuleManagerFilamentPlugin]
- "src_modulemanagerfilamentplugin_modulemanagerfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentPlugin.php:L11 | neighbors=[ModuleManagerFilamentPlugin]
- "src_modulemanagerfilamentplugin_modulemanagerfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentPlugin.php:L21 | neighbors=[ModuleManagerFilamentPlugin]
- "src_modulemanagerfilamentserviceprovider_modulemanagerfilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentServiceProvider.php:L9 | neighbors=[ModuleManagerFilamentServiceProvider]
- "src_modulemanagerserviceprovider_modulemanagerserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/module-manager/src/ModuleManagerServiceProvider.php:L44 | neighbors=[ModuleManagerServiceProvider]
- "src_modulemanagerserviceprovider_modulemanagerserviceprovider_register": ".register()" | kind=code-symbol | source=modules/module-manager/src/ModuleManagerServiceProvider.php:L17 | neighbors=[ModuleManagerServiceProvider]
- "src_moduleregistry_moduleregistry_all": ".all()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L36 | neighbors=[ModuleRegistry]
- "src_moduleregistry_moduleregistry_construct": ".__construct()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L12 | neighbors=[ModuleRegistry]
- "src_moduleregistry_moduleregistry_get": ".get()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L19 | neighbors=[ModuleRegistry]
- "src_moduleregistry_moduleregistry_has": ".has()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L14 | neighbors=[ModuleRegistry]
- "src_moduleregistry_moduleregistry_providingfeature": ".providingFeature()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L63 | neighbors=[ModuleRegistry]
- "src_moduleregistry_moduleregistry_searchfeatures": ".searchFeatures()" | kind=code-symbol | source=modules/module-manager/src/ModuleRegistry.php:L42 | neighbors=[ModuleRegistry]
- "src_modulevalidationguard_modulevalidationguard_construct": ".__construct()" | kind=code-symbol | source=modules/module-manager/src/ModuleValidationGuard.php:L7 | neighbors=[ModuleValidationGuard]
- "src_modulevalidationguard_modulevalidationguard_ensurevalid": ".ensureValid()" | kind=code-symbol | source=modules/module-manager/src/ModuleValidationGuard.php:L9 | neighbors=[ModuleValidationGuard]
- "src_modulevalidator_modulevalidator_validate": ".validate()" | kind=code-symbol | source=modules/module-manager/src/ModuleValidator.php:L12 | neighbors=[ModuleValidator]
- "src_mymemoryserviceprovider_mymemoryserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/localization-mymemory/src/MyMemoryServiceProvider.php:L10 | neighbors=[MyMemoryServiceProvider]
- "src_notificationsserviceprovider_notificationsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/notifications/src/NotificationsServiceProvider.php:L9 | neighbors=[NotificationsServiceProvider]
- "src_observabilityserviceprovider_observabilityserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/observability/src/ObservabilityServiceProvider.php:L25 | neighbors=[ObservabilityServiceProvider]
- "src_observabilityserviceprovider_observabilityserviceprovider_register": ".register()" | kind=code-symbol | source=modules/observability/src/ObservabilityServiceProvider.php:L17 | neighbors=[ObservabilityServiceProvider]
- "src_offersapiserviceprovider_offersapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-offers-api/src/OffersApiServiceProvider.php:L11 | neighbors=[OffersApiServiceProvider]
- "src_offersfilamentplugin_offersfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentPlugin.php:L23 | neighbors=[OffersFilamentPlugin]
- "src_offersfilamentplugin_offersfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentPlugin.php:L13 | neighbors=[OffersFilamentPlugin]
- "src_offersfilamentplugin_offersfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentPlugin.php:L18 | neighbors=[OffersFilamentPlugin]
- "src_offersfilamentserviceprovider_offersfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-offers-filament/src/OffersFilamentServiceProvider.php:L11 | neighbors=[OffersFilamentServiceProvider]
- "src_offerslivewireserviceprovider_offerslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/OffersLivewireServiceProvider.php:L12 | neighbors=[OffersLivewireServiceProvider]
- "src_offersserviceprovider_offersserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-offers/src/OffersServiceProvider.php:L11 | neighbors=[OffersServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-203.json

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
