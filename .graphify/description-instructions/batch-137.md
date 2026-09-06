# Node Description Batch 138 of 212

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

- "console_listfeaturescommand_listfeaturescommand": "ListFeaturesCommand" | kind=code-symbol | source=modules/module-manager/src/Console/ListFeaturesCommand.php:L8 | neighbors=[ListFeaturesCommand.php, .handle()]
- "console_listmodulescommand": "ListModulesCommand.php" | kind=code-symbol | source=modules/module-manager/src/Console/ListModulesCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ListModulesCommand]
- "console_listmodulescommand_listmodulescommand": "ListModulesCommand" | kind=code-symbol | source=modules/module-manager/src/Console/ListModulesCommand.php:L8 | neighbors=[ListModulesCommand.php, .handle()]
- "console_modulestatuscommand": "ModuleStatusCommand.php" | kind=code-symbol | source=modules/module-manager/src/Console/ModuleStatusCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModuleStatusCommand]
- "console_modulestatuscommand_modulestatuscommand": "ModuleStatusCommand" | kind=code-symbol | source=modules/module-manager/src/Console/ModuleStatusCommand.php:L8 | neighbors=[ModuleStatusCommand.php, .handle()]
- "console_reindexcommand": "ReindexCommand.php" | kind=code-symbol | source=modules/search/src/Console/ReindexCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ReindexCommand]
- "console_reindexcommand_reindexcommand": "ReindexCommand" | kind=code-symbol | source=modules/search/src/Console/ReindexCommand.php:L9 | neighbors=[ReindexCommand.php, .handle()]
- "console_themecachecommand": "ThemeCacheCommand.php" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeCacheCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeCacheCommand]
- "console_themecachecommand_themecachecommand": "ThemeCacheCommand" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeCacheCommand.php:L9 | neighbors=[ThemeCacheCommand.php, .handle()]
- "console_themeclearcommand": "ThemeClearCommand.php" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeClearCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeClearCommand]
- "console_themeclearcommand_themeclearcommand": "ThemeClearCommand" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeClearCommand.php:L8 | neighbors=[ThemeClearCommand.php, .handle()]
- "console_themevalidatecommand": "ThemeValidateCommand.php" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeValidateCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeValidateCommand]
- "console_themevalidatecommand_themevalidatecommand": "ThemeValidateCommand" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeValidateCommand.php:L8 | neighbors=[ThemeValidateCommand.php, .handle()]
- "console_validatemodulescommand": "ValidateModulesCommand.php" | kind=code-symbol | source=modules/module-manager/src/Console/ValidateModulesCommand.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ValidateModulesCommand]
- "console_validatemodulescommand_validatemodulescommand": "ValidateModulesCommand" | kind=code-symbol | source=modules/module-manager/src/Console/ValidateModulesCommand.php:L10 | neighbors=[ValidateModulesCommand.php, .handle()]
- "context_localecontext": "LocaleContext.php" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleContext.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LocaleContext]
- "context_localeresolver": "LocaleResolver.php" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleResolver.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LocaleResolver]
- "context_localeresolver_localeresolver": "LocaleResolver" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleResolver.php:L5 | neighbors=[LocaleResolver.php, .resolve()]
- "contracts_activityauthorizer": "ActivityAuthorizer.php" | kind=code-symbol | source=modules/activity-comments/src/Contracts/ActivityAuthorizer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, allowed()]
- "contracts_auditrecorder": "AuditRecorder.php" | kind=code-symbol | source=modules/audit/src/Contracts/AuditRecorder.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, record()]
- "contracts_clock": "Clock.php" | kind=code-symbol | source=modules/application/src/Contracts/Clock.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, now()]
- "contracts_connectedaccountowner": "ConnectedAccountOwner.php" | kind=code-symbol | source=modules/identity-socialstream/src/Contracts/ConnectedAccountOwner.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ownsConnectedAccount()]
- "contracts_exchangerateprovider": "ExchangeRateProvider.php" | kind=code-symbol | source=modules/currency-context/src/Contracts/ExchangeRateProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, rate()]
- "contracts_googletransport": "GoogleTransport.php" | kind=code-symbol | source=modules/analytics-google/src/Contracts/GoogleTransport.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, send()]
- "contracts_identifierfactory": "IdentifierFactory.php" | kind=code-symbol | source=modules/application/src/Contracts/IdentifierFactory.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, make()]
- "contracts_invitationvalidator": "InvitationValidator.php" | kind=code-symbol | source=modules/identity-core/src/Contracts/InvitationValidator.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, valid()]
- "contracts_malwarescanner": "MalwareScanner.php" | kind=code-symbol | source=modules/files-media/src/Contracts/MalwareScanner.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, clean()]
- "contracts_mediaaccess": "MediaAccess.php" | kind=code-symbol | source=modules/files-media/src/Contracts/MediaAccess.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, authorized()]
- "contracts_mediatransformer": "MediaTransformer.php" | kind=code-symbol | source=modules/files-media/src/Contracts/MediaTransformer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, transform()]
- "contracts_metatransport": "MetaTransport.php" | kind=code-symbol | source=modules/analytics-meta/src/Contracts/MetaTransport.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, send()]
- "contracts_observabilityactor": "ObservabilityActor.php" | kind=code-symbol | source=modules/observability/src/Contracts/ObservabilityActor.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, isAdmin()]
- "contracts_transferauthorizer": "TransferAuthorizer.php" | kind=code-symbol | source=modules/import-export/src/Contracts/TransferAuthorizer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, allowed()]
- "contracts_twofactorrecovery": "TwoFactorRecovery.php" | kind=code-symbol | source=modules/two-factor-authentication/src/Contracts/TwoFactorRecovery.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, recover()]
- "controllers_agencycontroller_agencycontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L26 | neighbors=[AgencyController, .rules()]
- "controllers_agencycontroller_agencycontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L41 | neighbors=[AgencyController, .rules()]
- "controllers_readinesscontroller": "ReadinessController.php" | kind=code-symbol | source=modules/application/src/Http/Controllers/ReadinessController.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ReadinessController]
- "controllers_readinesscontroller_readinesscontroller": "ReadinessController" | kind=code-symbol | source=modules/application/src/Http/Controllers/ReadinessController.php:L8 | neighbors=[ReadinessController.php, .__invoke()]
- "controllers_searchcontroller": "SearchController.php" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearchController]
- "controllers_searchcontroller_searchcontroller_validateallfilters": ".validateAllFilters()" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L95 | neighbors=[SearchController, .all()]
- "controllers_searchcontroller_searchcontroller_validateuserfilters": ".validateUserFilters()" | kind=code-symbol | source=modules/search-api/src/Http/Controllers/SearchController.php:L72 | neighbors=[SearchController, .users()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-137.json

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
