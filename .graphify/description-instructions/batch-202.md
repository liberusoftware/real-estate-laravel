# Node Description Batch 203 of 212

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

- "src_lettingsfilamentplugin_lettingsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentPlugin.php:L18 | neighbors=[LettingsFilamentPlugin]
- "src_lettingsfilamentserviceprovider_lettingsfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentServiceProvider.php:L11 | neighbors=[LettingsFilamentServiceProvider]
- "src_lettingslivewireserviceprovider_lettingslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-lettings-livewire/src/LettingsLivewireServiceProvider.php:L12 | neighbors=[LettingsLivewireServiceProvider]
- "src_lettingsserviceprovider_lettingsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-lettings/src/LettingsServiceProvider.php:L19 | neighbors=[LettingsServiceProvider]
- "src_lettingsserviceprovider_lettingsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-lettings/src/LettingsServiceProvider.php:L14 | neighbors=[LettingsServiceProvider]
- "src_listingsapiserviceprovider_listingsapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-listings-api/src/ListingsApiServiceProvider.php:L11 | neighbors=[ListingsApiServiceProvider]
- "src_listingsfilamentplugin_listingsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentPlugin.php:L23 | neighbors=[ListingsFilamentPlugin]
- "src_listingsfilamentplugin_listingsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentPlugin.php:L13 | neighbors=[ListingsFilamentPlugin]
- "src_listingsfilamentplugin_listingsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentPlugin.php:L18 | neighbors=[ListingsFilamentPlugin]
- "src_listingsfilamentserviceprovider_listingsfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/ListingsFilamentServiceProvider.php:L11 | neighbors=[ListingsFilamentServiceProvider]
- "src_listingslivewireserviceprovider_listingslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-listings-livewire/src/ListingsLivewireServiceProvider.php:L12 | neighbors=[ListingsLivewireServiceProvider]
- "src_listingsserviceprovider_listingsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-listings/src/ListingsServiceProvider.php:L11 | neighbors=[ListingsServiceProvider]
- "src_localizationlivewireserviceprovider_localizationlivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/localization-core-livewire/src/LocalizationLivewireServiceProvider.php:L11 | neighbors=[LocalizationLivewireServiceProvider]
- "src_localizationserviceprovider_localizationserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/localization-core/src/LocalizationServiceProvider.php:L20 | neighbors=[LocalizationServiceProvider]
- "src_localizationserviceprovider_localizationserviceprovider_register": ".register()" | kind=code-symbol | source=modules/localization-core/src/LocalizationServiceProvider.php:L12 | neighbors=[LocalizationServiceProvider]
- "src_manifest_manifest_capabilities": ".capabilities()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L94 | neighbors=[Manifest]
- "src_manifest_manifest_category": ".category()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L78 | neighbors=[Manifest]
- "src_manifest_manifest_construct": ".__construct()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L12 | neighbors=[Manifest]
- "src_manifest_manifest_defaultenabled": ".defaultEnabled()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L88 | neighbors=[Manifest]
- "src_manifest_manifest_displayname": ".displayName()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L73 | neighbors=[Manifest]
- "src_manifest_manifest_features": ".features()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L100 | neighbors=[Manifest]
- "src_manifest_manifest_filamentplugins": ".filamentPlugins()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L132 | neighbors=[Manifest]
- "src_manifest_manifest_fromfile": ".fromFile()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L14 | neighbors=[Manifest]
- "src_manifest_manifest_laravelconstraint": ".laravelConstraint()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L126 | neighbors=[Manifest]
- "src_manifest_manifest_name": ".name()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L63 | neighbors=[Manifest]
- "src_manifest_manifest_phpconstraint": ".phpConstraint()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L121 | neighbors=[Manifest]
- "src_manifest_manifest_provider": ".provider()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L83 | neighbors=[Manifest]
- "src_manifest_manifest_requiredcapabilities": ".requiredCapabilities()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L114 | neighbors=[Manifest]
- "src_manifest_manifest_requiredpackages": ".requiredPackages()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L106 | neighbors=[Manifest]
- "src_manifest_manifest_toarray": ".toArray()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L140 | neighbors=[Manifest]
- "src_manifest_manifest_version": ".version()" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L68 | neighbors=[Manifest]
- "src_marketingapiserviceprovider_marketingapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/MarketingApiServiceProvider.php:L11 | neighbors=[MarketingApiServiceProvider]
- "src_marketingfilamentplugin_marketingfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentPlugin.php:L19 | neighbors=[MarketingFilamentPlugin]
- "src_marketingfilamentplugin_marketingfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentPlugin.php:L12 | neighbors=[MarketingFilamentPlugin]
- "src_marketingfilamentplugin_marketingfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentPlugin.php:L17 | neighbors=[MarketingFilamentPlugin]
- "src_marketingfilamentserviceprovider_marketingfilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/MarketingFilamentServiceProvider.php:L11 | neighbors=[MarketingFilamentServiceProvider]
- "src_marketinglivewireserviceprovider_marketinglivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-marketing-livewire/src/MarketingLivewireServiceProvider.php:L12 | neighbors=[MarketingLivewireServiceProvider]
- "src_marketingserviceprovider_marketingserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-marketing/src/MarketingServiceProvider.php:L11 | neighbors=[MarketingServiceProvider]
- "src_matchingapiserviceprovider_matchingapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-matching-api/src/MatchingApiServiceProvider.php:L11 | neighbors=[MatchingApiServiceProvider]
- "src_matchingfilamentplugin_matchingfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/MatchingFilamentPlugin.php:L23 | neighbors=[MatchingFilamentPlugin]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-202.json

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
