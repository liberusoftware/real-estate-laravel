# Node Description Batch 207 of 212

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

- "src_sessionsdevicesfilamentplugin_sessionsdevicesfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentPlugin.php:L11 | neighbors=[SessionsDevicesFilamentPlugin]
- "src_sessionsdevicesfilamentplugin_sessionsdevicesfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentPlugin.php:L21 | neighbors=[SessionsDevicesFilamentPlugin]
- "src_sessionsdevicesfilamentserviceprovider_sessionsdevicesfilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentServiceProvider.php:L9 | neighbors=[SessionsDevicesFilamentServiceProvider]
- "src_sessionsdevicesserviceprovider_sessionsdevicesserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/sessions-devices/src/SessionsDevicesServiceProvider.php:L14 | neighbors=[SessionsDevicesServiceProvider]
- "src_sessionsdevicesserviceprovider_sessionsdevicesserviceprovider_register": ".register()" | kind=code-symbol | source=modules/sessions-devices/src/SessionsDevicesServiceProvider.php:L9 | neighbors=[SessionsDevicesServiceProvider]
- "src_settingsfilamentplugin_settingsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentPlugin.php:L26 | neighbors=[SettingsFilamentPlugin]
- "src_settingsfilamentplugin_settingsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentPlugin.php:L16 | neighbors=[SettingsFilamentPlugin]
- "src_settingsfilamentplugin_settingsfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentPlugin.php:L11 | neighbors=[SettingsFilamentPlugin]
- "src_settingsfilamentplugin_settingsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentPlugin.php:L21 | neighbors=[SettingsFilamentPlugin]
- "src_settingsfilamentserviceprovider_settingsfilamentserviceprovider": "SettingsFilamentServiceProvider" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentServiceProvider.php:L7 | neighbors=[SettingsFilamentServiceProvider.php]
- "src_settingsserviceprovider_settingsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/settings/src/SettingsServiceProvider.php:L9 | neighbors=[SettingsServiceProvider]
- "src_themesupportlivewireserviceprovider_themesupportlivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/theme-support-livewire/src/ThemeSupportLivewireServiceProvider.php:L11 | neighbors=[ThemeSupportLivewireServiceProvider]
- "src_translationservice_translationservice_islanguagesupported": ".isLanguageSupported()" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L118 | neighbors=[TranslationService]
- "src_translationservice_translationservice_name": ".name()" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L12 | neighbors=[TranslationService]
- "src_twofactorserviceprovider_twofactorserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/two-factor-authentication/src/TwoFactorServiceProvider.php:L14 | neighbors=[TwoFactorServiceProvider]
- "src_twofactorserviceprovider_twofactorserviceprovider_register": ".register()" | kind=code-symbol | source=modules/two-factor-authentication/src/TwoFactorServiceProvider.php:L9 | neighbors=[TwoFactorServiceProvider]
- "src_valuationsapiserviceprovider_valuationsapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-valuations-api/src/ValuationsApiServiceProvider.php:L11 | neighbors=[ValuationsApiServiceProvider]
- "src_valuationsfilamentplugin_valuationsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentPlugin.php:L23 | neighbors=[ValuationsFilamentPlugin]
- "src_valuationsfilamentplugin_valuationsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentPlugin.php:L13 | neighbors=[ValuationsFilamentPlugin]
- "src_valuationsfilamentplugin_valuationsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentPlugin.php:L18 | neighbors=[ValuationsFilamentPlugin]
- "src_valuationsfilamentserviceprovider_valuationsfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentServiceProvider.php:L11 | neighbors=[ValuationsFilamentServiceProvider]
- "src_valuationslivewireserviceprovider_valuationslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-valuations-livewire/src/ValuationsLivewireServiceProvider.php:L12 | neighbors=[ValuationsLivewireServiceProvider]
- "src_valuationsserviceprovider_valuationsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-valuations/src/ValuationsServiceProvider.php:L11 | neighbors=[ValuationsServiceProvider]
- "src_valuationsserviceprovider_valuationsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-valuations/src/ValuationsServiceProvider.php:L16 | neighbors=[ValuationsServiceProvider]
- "src_viewingsapiserviceprovider_viewingsapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-viewings-api/src/ViewingsApiServiceProvider.php:L11 | neighbors=[ViewingsApiServiceProvider]
- "src_viewingsfilamentplugin_viewingsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentPlugin.php:L23 | neighbors=[ViewingsFilamentPlugin]
- "src_viewingsfilamentplugin_viewingsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentPlugin.php:L13 | neighbors=[ViewingsFilamentPlugin]
- "src_viewingsfilamentplugin_viewingsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentPlugin.php:L18 | neighbors=[ViewingsFilamentPlugin]
- "src_viewingsfilamentserviceprovider_viewingsfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentServiceProvider.php:L11 | neighbors=[ViewingsFilamentServiceProvider]
- "src_viewingslivewireserviceprovider_viewingslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/ViewingsLivewireServiceProvider.php:L12 | neighbors=[ViewingsLivewireServiceProvider]
- "src_viewingsserviceprovider_viewingsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-viewings/src/ViewingsServiceProvider.php:L11 | neighbors=[ViewingsServiceProvider]
- "src_viewingsserviceprovider_viewingsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-viewings/src/ViewingsServiceProvider.php:L16 | neighbors=[ViewingsServiceProvider]
- "src_webhooksserviceprovider_webhooksserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/webhooks/src/WebhooksServiceProvider.php:L9 | neighbors=[WebhooksServiceProvider]
- "src_zooplaapiserviceprovider_zooplaapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/ZooplaApiServiceProvider.php:L11 | neighbors=[ZooplaApiServiceProvider]
- "src_zooplafilamentplugin_zooplafilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentPlugin.php:L19 | neighbors=[ZooplaFilamentPlugin]
- "src_zooplafilamentplugin_zooplafilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentPlugin.php:L12 | neighbors=[ZooplaFilamentPlugin]
- "src_zooplafilamentplugin_zooplafilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentPlugin.php:L17 | neighbors=[ZooplaFilamentPlugin]
- "src_zooplafilamentserviceprovider_zooplafilamentserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentServiceProvider.php:L11 | neighbors=[ZooplaFilamentServiceProvider]
- "src_zooplalivewireserviceprovider_zooplalivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/src/ZooplaLivewireServiceProvider.php:L12 | neighbors=[ZooplaLivewireServiceProvider]
- "src_zooplaserviceprovider_zooplaserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-zoopla/src/ZooplaServiceProvider.php:L11 | neighbors=[ZooplaServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-206.json

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
