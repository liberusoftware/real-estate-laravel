# Node Description Batch 153 of 212

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

- "src_searchserviceprovider_searchserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/search/src/SearchServiceProvider.php:L25 | neighbors=[SearchServiceProvider, .register()]
- "src_searchserviceprovider_searchserviceprovider_register": ".register()" | kind=code-symbol | source=modules/search/src/SearchServiceProvider.php:L16 | neighbors=[SearchServiceProvider, .boot()]
- "src_sessionsdevicesfilamentplugin": "SessionsDevicesFilamentPlugin.php" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentPlugin.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SessionsDevicesFilamentPlugin]
- "src_sessionsdevicesfilamentserviceprovider": "SessionsDevicesFilamentServiceProvider.php" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SessionsDevicesFilamentServiceProvider]
- "src_sessionsdevicesfilamentserviceprovider_sessionsdevicesfilamentserviceprovider": "SessionsDevicesFilamentServiceProvider" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentServiceProvider.php:L7 | neighbors=[SessionsDevicesFilamentServiceProvider.…, .boot()]
- "src_sessionsdevicesserviceprovider": "SessionsDevicesServiceProvider.php" | kind=code-symbol | source=modules/sessions-devices/src/SessionsDevicesServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SessionsDevicesServiceProvider]
- "src_settingsfilamentplugin": "SettingsFilamentPlugin.php" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentPlugin.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SettingsFilamentPlugin]
- "src_settingsfilamentserviceprovider": "SettingsFilamentServiceProvider.php" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SettingsFilamentServiceProvider]
- "src_settingsserviceprovider": "SettingsServiceProvider.php" | kind=code-symbol | source=modules/settings/src/SettingsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SettingsServiceProvider]
- "src_settingsserviceprovider_settingsserviceprovider": "SettingsServiceProvider" | kind=code-symbol | source=modules/settings/src/SettingsServiceProvider.php:L7 | neighbors=[SettingsServiceProvider.php, .boot()]
- "src_themesupportlivewireserviceprovider": "ThemeSupportLivewireServiceProvider.php" | kind=code-symbol | source=modules/theme-support-livewire/src/ThemeSupportLivewireServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeSupportLivewireServiceProvider]
- "src_themesupportlivewireserviceprovider_themesupportlivewireserviceprovider": "ThemeSupportLivewireServiceProvider" | kind=code-symbol | source=modules/theme-support-livewire/src/ThemeSupportLivewireServiceProvider.php:L9 | neighbors=[ThemeSupportLivewireServiceProvider.php, .boot()]
- "src_translationservice": "TranslationService.php" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TranslationService]
- "src_translationservice_translationservice_getsupportedlanguages": ".getSupportedLanguages()" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L105 | neighbors=[TranslationService, .supportedLanguages()]
- "src_translationservice_translationservice_supportedlanguages": ".supportedLanguages()" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L110 | neighbors=[TranslationService, .getSupportedLanguages()]
- "src_translationservice_translationservice_translate": ".translate()" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L33 | neighbors=[TranslationService, .translateBatch()]
- "src_translationservice_translationservice_translatebatch": ".translateBatch()" | kind=code-symbol | source=modules/localization-mymemory/src/TranslationService.php:L80 | neighbors=[TranslationService, .translate()]
- "src_twofactorserviceprovider": "TwoFactorServiceProvider.php" | kind=code-symbol | source=modules/two-factor-authentication/src/TwoFactorServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TwoFactorServiceProvider]
- "src_valuationsapiserviceprovider_valuationsapiserviceprovider": "ValuationsApiServiceProvider" | kind=code-symbol | source=modules/real-estate-valuations-api/src/ValuationsApiServiceProvider.php:L9 | neighbors=[ValuationsApiServiceProvider.php, .boot()]
- "src_valuationsfilamentserviceprovider_valuationsfilamentserviceprovider": "ValuationsFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/ValuationsFilamentServiceProvider.php:L9 | neighbors=[ValuationsFilamentServiceProvider.php, .register()]
- "src_valuationslivewireserviceprovider_valuationslivewireserviceprovider": "ValuationsLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-valuations-livewire/src/ValuationsLivewireServiceProvider.php:L10 | neighbors=[ValuationsLivewireServiceProvider.php, .boot()]
- "src_viewingsapiserviceprovider_viewingsapiserviceprovider": "ViewingsApiServiceProvider" | kind=code-symbol | source=modules/real-estate-viewings-api/src/ViewingsApiServiceProvider.php:L9 | neighbors=[ViewingsApiServiceProvider.php, .boot()]
- "src_viewingsfilamentserviceprovider_viewingsfilamentserviceprovider": "ViewingsFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/ViewingsFilamentServiceProvider.php:L9 | neighbors=[ViewingsFilamentServiceProvider.php, .register()]
- "src_viewingslivewireserviceprovider_viewingslivewireserviceprovider": "ViewingsLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/ViewingsLivewireServiceProvider.php:L10 | neighbors=[ViewingsLivewireServiceProvider.php, .boot()]
- "src_webhooksserviceprovider": "WebhooksServiceProvider.php" | kind=code-symbol | source=modules/webhooks/src/WebhooksServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, WebhooksServiceProvider]
- "src_webhooksserviceprovider_webhooksserviceprovider": "WebhooksServiceProvider" | kind=code-symbol | source=modules/webhooks/src/WebhooksServiceProvider.php:L7 | neighbors=[WebhooksServiceProvider.php, .boot()]
- "src_zooplaapiserviceprovider": "ZooplaApiServiceProvider.php" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/ZooplaApiServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, ZooplaApiServiceProvider]
- "src_zooplaapiserviceprovider_zooplaapiserviceprovider": "ZooplaApiServiceProvider" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/ZooplaApiServiceProvider.php:L9 | neighbors=[ZooplaApiServiceProvider.php, .boot()]
- "src_zooplafilamentplugin": "ZooplaFilamentPlugin.php" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentPlugin.php:L1 | neighbors=[1cdd121 Add independent property portal…, ZooplaFilamentPlugin]
- "src_zooplafilamentserviceprovider": "ZooplaFilamentServiceProvider.php" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentServiceProvider.php:L1 | neighbors=[1cdd121 Add independent property portal…, ZooplaFilamentServiceProvider]
- "src_zooplafilamentserviceprovider_zooplafilamentserviceprovider": "ZooplaFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/ZooplaFilamentServiceProvider.php:L9 | neighbors=[ZooplaFilamentServiceProvider.php, .boot()]
- "src_zooplalivewireserviceprovider_zooplalivewireserviceprovider": "ZooplaLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/src/ZooplaLivewireServiceProvider.php:L10 | neighbors=[ZooplaLivewireServiceProvider.php, .boot()]
- "src_zooplaserviceprovider_zooplaserviceprovider": "ZooplaServiceProvider" | kind=code-symbol | source=modules/real-estate-zoopla/src/ZooplaServiceProvider.php:L9 | neighbors=[ZooplaServiceProvider.php, .boot()]
- "stat_chart_addcontrollers": "addControllers()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each()]
- "stat_chart_addplugins": "addPlugins()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each()]
- "stat_chart_addscales": "addScales()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each()]
- "stat_chart_alpha": "alpha()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, lt()]
- "stat_chart_ar": "ar()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, sr()]
- "stat_chart_beforedatasetsdraw": "beforeDatasetsDraw()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getSortedVisibleDatasetMetas()]
- "stat_chart_bs": "bs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, dl()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-152.json

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
