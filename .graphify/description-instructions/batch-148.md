# Node Description Batch 149 of 212

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
For an entity node (any other kind — e.g. a person, place, event, object),
describe what the entity is and its role, grounded in its type, its
relations (neighbors) and the provided citations/evidence — e.g.
"Lady Carfax, a wealthy heiress who disappears en route to Lausanne.".
Ground entity descriptions in the citations/evidence when present; do not
speculate beyond the context, so a node with no supporting context may be
left out of the reply.
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "settings_sitesettings": "SiteSettings.php" | kind=code-symbol | source=modules/settings/src/Settings/SiteSettings.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SiteSettings]
- "settings_sitesettings_sitesettings": "SiteSettings" | kind=code-symbol | source=modules/settings/src/Settings/SiteSettings.php:L7 | neighbors=[SiteSettings.php, .group()]
- "setup_sh": "setup.sh" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, Non-interactive, fail-on-error commands]
- "socialstream_icons_bitbucket_blade": "bitbucket.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/bitbucket.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_facebook_blade": "facebook.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/facebook.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_github_blade": "github.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/github.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_gitlab_blade": "gitlab.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/gitlab.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_google_blade": "google.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/google.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_linkedin_blade": "linkedin.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/linkedin.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_slack_blade": "slack.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/slack.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "socialstream_icons_twitter_blade": "twitter.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/twitter.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "src_activitycommentsserviceprovider": "ActivityCommentsServiceProvider.php" | kind=code-symbol | source=modules/activity-comments/src/ActivityCommentsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ActivityCommentsServiceProvider]
- "src_activitycommentsserviceprovider_activitycommentsserviceprovider": "ActivityCommentsServiceProvider" | kind=code-symbol | source=modules/activity-comments/src/ActivityCommentsServiceProvider.php:L7 | neighbors=[ActivityCommentsServiceProvider.php, .boot()]
- "src_analyticsgoogleserviceprovider": "AnalyticsGoogleServiceProvider.php" | kind=code-symbol | source=modules/analytics-google/src/AnalyticsGoogleServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AnalyticsGoogleServiceProvider]
- "src_analyticsgoogleserviceprovider_analyticsgoogleserviceprovider": "AnalyticsGoogleServiceProvider" | kind=code-symbol | source=modules/analytics-google/src/AnalyticsGoogleServiceProvider.php:L10 | neighbors=[AnalyticsGoogleServiceProvider.php, .boot()]
- "src_analyticsmetaserviceprovider": "AnalyticsMetaServiceProvider.php" | kind=code-symbol | source=modules/analytics-meta/src/AnalyticsMetaServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AnalyticsMetaServiceProvider]
- "src_analyticsmetaserviceprovider_analyticsmetaserviceprovider": "AnalyticsMetaServiceProvider" | kind=code-symbol | source=modules/analytics-meta/src/AnalyticsMetaServiceProvider.php:L10 | neighbors=[AnalyticsMetaServiceProvider.php, .boot()]
- "src_analyticsserviceprovider": "AnalyticsServiceProvider.php" | kind=code-symbol | source=modules/analytics-core/src/AnalyticsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AnalyticsServiceProvider]
- "src_applicationcoreserviceprovider": "ApplicationCoreServiceProvider.php" | kind=code-symbol | source=modules/application/src/ApplicationCoreServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ApplicationCoreServiceProvider]
- "src_auditserviceprovider": "AuditServiceProvider.php" | kind=code-symbol | source=modules/audit/src/AuditServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AuditServiceProvider]
- "src_basethemeserviceprovider": "BaseThemeServiceProvider.php" | kind=code-symbol | source=themes/base/src/BaseThemeServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, BaseThemeServiceProvider]
- "src_clearsignalthemeserviceprovider": "ClearSignalThemeServiceProvider.php" | kind=code-symbol | source=themes/clear-signal/src/ClearSignalThemeServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ClearSignalThemeServiceProvider]
- "src_currencyserviceprovider": "CurrencyServiceProvider.php" | kind=code-symbol | source=modules/currency-context/src/CurrencyServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CurrencyServiceProvider]
- "src_darkthemeserviceprovider": "DarkThemeServiceProvider.php" | kind=code-symbol | source=themes/dark/src/DarkThemeServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DarkThemeServiceProvider]
- "src_defaultthemeserviceprovider": "DefaultThemeServiceProvider.php" | kind=code-symbol | source=themes/default/src/DefaultThemeServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DefaultThemeServiceProvider]
- "src_developerexperienceserviceprovider": "DeveloperExperienceServiceProvider.php" | kind=code-symbol | source=modules/developer-experience/src/DeveloperExperienceServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DeveloperExperienceServiceProvider]
- "src_developerexperienceserviceprovider_developerexperienceserviceprovider": "DeveloperExperienceServiceProvider" | kind=code-symbol | source=modules/developer-experience/src/DeveloperExperienceServiceProvider.php:L8 | neighbors=[DeveloperExperienceServiceProvider.php, .boot()]
- "src_featureflagsserviceprovider": "FeatureFlagsServiceProvider.php" | kind=code-symbol | source=modules/feature-flags/src/FeatureFlagsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, FeatureFlagsServiceProvider]
- "src_featureflagsserviceprovider_featureflagsserviceprovider": "FeatureFlagsServiceProvider" | kind=code-symbol | source=modules/feature-flags/src/FeatureFlagsServiceProvider.php:L7 | neighbors=[FeatureFlagsServiceProvider.php, .boot()]
- "src_filesmediaserviceprovider": "FilesMediaServiceProvider.php" | kind=code-symbol | source=modules/files-media/src/FilesMediaServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, FilesMediaServiceProvider]
- "src_identityfilamentplugin": "IdentityFilamentPlugin.php" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentPlugin.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IdentityFilamentPlugin]
- "src_identityfilamentserviceprovider": "IdentityFilamentServiceProvider.php" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IdentityFilamentServiceProvider]
- "src_identityserviceprovider": "IdentityServiceProvider.php" | kind=code-symbol | source=modules/identity-core/src/IdentityServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IdentityServiceProvider]
- "src_importexportserviceprovider": "ImportExportServiceProvider.php" | kind=code-symbol | source=modules/import-export/src/ImportExportServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ImportExportServiceProvider]
- "src_importexportserviceprovider_importexportserviceprovider": "ImportExportServiceProvider" | kind=code-symbol | source=modules/import-export/src/ImportExportServiceProvider.php:L7 | neighbors=[ImportExportServiceProvider.php, .boot()]
- "src_instructionsapiserviceprovider_instructionsapiserviceprovider": "InstructionsApiServiceProvider" | kind=code-symbol | source=modules/real-estate-instructions-api/src/InstructionsApiServiceProvider.php:L9 | neighbors=[InstructionsApiServiceProvider.php, .boot()]
- "src_instructionsfilamentserviceprovider_instructionsfilamentserviceprovider": "InstructionsFilamentServiceProvider" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/InstructionsFilamentServiceProvider.php:L9 | neighbors=[InstructionsFilamentServiceProvider.php, .register()]
- "src_instructionslivewireserviceprovider_instructionslivewireserviceprovider": "InstructionsLivewireServiceProvider" | kind=code-symbol | source=modules/real-estate-instructions-livewire/src/InstructionsLivewireServiceProvider.php:L10 | neighbors=[InstructionsLivewireServiceProvider.php, .boot()]
- "src_instructionsserviceprovider_instructionsserviceprovider": "InstructionsServiceProvider" | kind=code-symbol | source=modules/real-estate-instructions/src/InstructionsServiceProvider.php:L9 | neighbors=[InstructionsServiceProvider.php, .boot()]
- "src_integrationsserviceprovider": "IntegrationsServiceProvider.php" | kind=code-symbol | source=modules/integrations/src/IntegrationsServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IntegrationsServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-148.json

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
