# Node Description Batch 202 of 212

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

- "src_analyticsgoogleserviceprovider_analyticsgoogleserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/analytics-google/src/AnalyticsGoogleServiceProvider.php:L12 | neighbors=[AnalyticsGoogleServiceProvider]
- "src_analyticsmetaserviceprovider_analyticsmetaserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/analytics-meta/src/AnalyticsMetaServiceProvider.php:L12 | neighbors=[AnalyticsMetaServiceProvider]
- "src_analyticsserviceprovider_analyticsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/analytics-core/src/AnalyticsServiceProvider.php:L17 | neighbors=[AnalyticsServiceProvider]
- "src_analyticsserviceprovider_analyticsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/analytics-core/src/AnalyticsServiceProvider.php:L11 | neighbors=[AnalyticsServiceProvider]
- "src_apiaccessserviceprovider_apiaccessserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/api-access/src/ApiAccessServiceProvider.php:L15 | neighbors=[ApiAccessServiceProvider]
- "src_apiaccessserviceprovider_apiaccessserviceprovider_register": ".register()" | kind=code-symbol | source=modules/api-access/src/ApiAccessServiceProvider.php:L10 | neighbors=[ApiAccessServiceProvider]
- "src_applicationcoreserviceprovider_applicationcoreserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/application/src/ApplicationCoreServiceProvider.php:L23 | neighbors=[ApplicationCoreServiceProvider]
- "src_applicationcoreserviceprovider_applicationcoreserviceprovider_register": ".register()" | kind=code-symbol | source=modules/application/src/ApplicationCoreServiceProvider.php:L15 | neighbors=[ApplicationCoreServiceProvider]
- "src_auditserviceprovider_auditserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/audit/src/AuditServiceProvider.php:L16 | neighbors=[AuditServiceProvider]
- "src_auditserviceprovider_auditserviceprovider_register": ".register()" | kind=code-symbol | source=modules/audit/src/AuditServiceProvider.php:L11 | neighbors=[AuditServiceProvider]
- "src_basethemeserviceprovider_basethemeserviceprovider": "BaseThemeServiceProvider" | kind=code-symbol | source=themes/base/src/BaseThemeServiceProvider.php:L7 | neighbors=[BaseThemeServiceProvider.php]
- "src_clearsignalthemeserviceprovider_clearsignalthemeserviceprovider": "ClearSignalThemeServiceProvider" | kind=code-symbol | source=themes/clear-signal/src/ClearSignalThemeServiceProvider.php:L7 | neighbors=[ClearSignalThemeServiceProvider.php]
- "src_currencyserviceprovider_currencyserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/currency-context/src/CurrencyServiceProvider.php:L28 | neighbors=[CurrencyServiceProvider]
- "src_currencyserviceprovider_currencyserviceprovider_register": ".register()" | kind=code-symbol | source=modules/currency-context/src/CurrencyServiceProvider.php:L12 | neighbors=[CurrencyServiceProvider]
- "src_darkthemeserviceprovider_darkthemeserviceprovider": "DarkThemeServiceProvider" | kind=code-symbol | source=themes/dark/src/DarkThemeServiceProvider.php:L7 | neighbors=[DarkThemeServiceProvider.php]
- "src_defaultthemeserviceprovider_defaultthemeserviceprovider": "DefaultThemeServiceProvider" | kind=code-symbol | source=themes/default/src/DefaultThemeServiceProvider.php:L7 | neighbors=[DefaultThemeServiceProvider.php]
- "src_developerexperienceserviceprovider_developerexperienceserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/developer-experience/src/DeveloperExperienceServiceProvider.php:L10 | neighbors=[DeveloperExperienceServiceProvider]
- "src_featureflagsserviceprovider_featureflagsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/feature-flags/src/FeatureFlagsServiceProvider.php:L9 | neighbors=[FeatureFlagsServiceProvider]
- "src_filesmediaserviceprovider_filesmediaserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/files-media/src/FilesMediaServiceProvider.php:L16 | neighbors=[FilesMediaServiceProvider]
- "src_filesmediaserviceprovider_filesmediaserviceprovider_register": ".register()" | kind=code-symbol | source=modules/files-media/src/FilesMediaServiceProvider.php:L11 | neighbors=[FilesMediaServiceProvider]
- "src_identityfilamentplugin_identityfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentPlugin.php:L26 | neighbors=[IdentityFilamentPlugin]
- "src_identityfilamentplugin_identityfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentPlugin.php:L16 | neighbors=[IdentityFilamentPlugin]
- "src_identityfilamentplugin_identityfilamentplugin_make": ".make()" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentPlugin.php:L11 | neighbors=[IdentityFilamentPlugin]
- "src_identityfilamentplugin_identityfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentPlugin.php:L21 | neighbors=[IdentityFilamentPlugin]
- "src_identityfilamentserviceprovider_identityfilamentserviceprovider": "IdentityFilamentServiceProvider" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentServiceProvider.php:L7 | neighbors=[IdentityFilamentServiceProvider.php]
- "src_identityserviceprovider_identityserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/identity-core/src/IdentityServiceProvider.php:L25 | neighbors=[IdentityServiceProvider]
- "src_identityserviceprovider_identityserviceprovider_register": ".register()" | kind=code-symbol | source=modules/identity-core/src/IdentityServiceProvider.php:L18 | neighbors=[IdentityServiceProvider]
- "src_importexportserviceprovider_importexportserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/import-export/src/ImportExportServiceProvider.php:L9 | neighbors=[ImportExportServiceProvider]
- "src_instructionsapiserviceprovider_instructionsapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/InstructionsApiServiceProvider.php:L11 | neighbors=[InstructionsApiServiceProvider]
- "src_instructionsfilamentplugin_instructionsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentPlugin.php:L23 | neighbors=[InstructionsFilamentPlugin]
- "src_instructionsfilamentplugin_instructionsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentPlugin.php:L13 | neighbors=[InstructionsFilamentPlugin]
- "src_instructionsfilamentplugin_instructionsfilamentplugin_register": ".register()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentPlugin.php:L18 | neighbors=[InstructionsFilamentPlugin]
- "src_instructionsfilamentserviceprovider_instructionsfilamentserviceprovider_register": ".register()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentServiceProvider.php:L11 | neighbors=[InstructionsFilamentServiceProvider]
- "src_instructionslivewireserviceprovider_instructionslivewireserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-instructions-livewire/src/InstructionsLivewireServiceProvider.php:L12 | neighbors=[InstructionsLivewireServiceProvider]
- "src_instructionsserviceprovider_instructionsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-instructions/src/InstructionsServiceProvider.php:L11 | neighbors=[InstructionsServiceProvider]
- "src_integrationsserviceprovider_integrationsserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/integrations/src/IntegrationsServiceProvider.php:L15 | neighbors=[IntegrationsServiceProvider]
- "src_integrationsserviceprovider_integrationsserviceprovider_register": ".register()" | kind=code-symbol | source=modules/integrations/src/IntegrationsServiceProvider.php:L10 | neighbors=[IntegrationsServiceProvider]
- "src_lettingsapiserviceprovider_lettingsapiserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/LettingsApiServiceProvider.php:L11 | neighbors=[LettingsApiServiceProvider]
- "src_lettingsfilamentplugin_lettingsfilamentplugin_boot": ".boot()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentPlugin.php:L23 | neighbors=[LettingsFilamentPlugin]
- "src_lettingsfilamentplugin_lettingsfilamentplugin_getid": ".getId()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/LettingsFilamentPlugin.php:L13 | neighbors=[LettingsFilamentPlugin]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-201.json

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
