# Node Description Batch 178 of 212

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

- "config_application_core": "application-core.php" | kind=code-symbol | source=modules/application/config/application-core.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_backup": "backup.php" | kind=code-symbol | source=config/backup.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_currency": "currency.php" | kind=code-symbol | source=modules/currency-context/config/currency.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_identity": "identity.php" | kind=code-symbol | source=modules/identity-core/config/identity.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_localization": "localization.php" | kind=code-symbol | source=modules/localization-core/config/localization.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_onthemarket": "onthemarket.php" | kind=code-symbol | source=modules/real-estate-onthemarket/config/onthemarket.php:L1 | neighbors=[bd4b1dc Add independent property portal…]
- "config_permission": "permission.php" | kind=code-symbol | source=config/permission.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_rightmove": "rightmove.php" | kind=code-symbol | source=modules/real-estate-rightmove/config/rightmove.php:L1 | neighbors=[bd4b1dc Add independent property portal…]
- "config_search": "search.php" | kind=code-symbol | source=modules/search/config/search.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_sessions_devices": "sessions-devices.php" | kind=code-symbol | source=modules/sessions-devices/config/sessions-devices.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_settings": "settings.php" | kind=code-symbol | source=config/settings.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_telescope": "telescope.php" | kind=code-symbol | source=config/telescope.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_theme": "theme.php" | kind=code-symbol | source=config/theme.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_two_factor": "two-factor.php" | kind=code-symbol | source=modules/two-factor-authentication/config/two-factor.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "config_zoopla": "zoopla.php" | kind=code-symbol | source=modules/real-estate-zoopla/config/zoopla.php:L1 | neighbors=[bd4b1dc Add independent property portal…]
- "console_cachemodulescommand_cachemodulescommand_handle": ".handle()" | kind=code-symbol | source=modules/module-manager/src/Console/CacheModulesCommand.php:L15 | neighbors=[CacheModulesCommand]
- "console_clearmodulescommand_clearmodulescommand_handle": ".handle()" | kind=code-symbol | source=modules/module-manager/src/Console/ClearModulesCommand.php:L14 | neighbors=[ClearModulesCommand]
- "console_foundationdoctorcommand_foundationdoctorcommand_handle": ".handle()" | kind=code-symbol | source=modules/developer-experience/src/Console/FoundationDoctorCommand.php:L16 | neighbors=[FoundationDoctorCommand]
- "console_listfeaturescommand_listfeaturescommand_handle": ".handle()" | kind=code-symbol | source=modules/module-manager/src/Console/ListFeaturesCommand.php:L14 | neighbors=[ListFeaturesCommand]
- "console_listmodulescommand_listmodulescommand_handle": ".handle()" | kind=code-symbol | source=modules/module-manager/src/Console/ListModulesCommand.php:L14 | neighbors=[ListModulesCommand]
- "console_modulestatuscommand_modulestatuscommand_handle": ".handle()" | kind=code-symbol | source=modules/module-manager/src/Console/ModuleStatusCommand.php:L14 | neighbors=[ModuleStatusCommand]
- "console_reindexcommand_reindexcommand_handle": ".handle()" | kind=code-symbol | source=modules/search/src/Console/ReindexCommand.php:L15 | neighbors=[ReindexCommand]
- "console_themecachecommand_themecachecommand_handle": ".handle()" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeCacheCommand.php:L15 | neighbors=[ThemeCacheCommand]
- "console_themeclearcommand_themeclearcommand_handle": ".handle()" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeClearCommand.php:L14 | neighbors=[ThemeClearCommand]
- "console_themevalidatecommand_themevalidatecommand_handle": ".handle()" | kind=code-symbol | source=modules/theme-support/src/Console/ThemeValidateCommand.php:L14 | neighbors=[ThemeValidateCommand]
- "console_validatemodulescommand_validatemodulescommand_handle": ".handle()" | kind=code-symbol | source=modules/module-manager/src/Console/ValidateModulesCommand.php:L16 | neighbors=[ValidateModulesCommand]
- "context_localecontext_localecontext_construct": ".__construct()" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleContext.php:L7 | neighbors=[LocaleContext]
- "context_localecontext_localecontext_payload": ".payload()" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleContext.php:L9 | neighbors=[LocaleContext]
- "context_localeresolver_localeresolver_resolve": ".resolve()" | kind=code-symbol | source=modules/localization-core/src/Context/LocaleResolver.php:L7 | neighbors=[LocaleResolver]
- "contract_activity_authorizer": "Contract: ActivityAuthorizer" | kind=entity | source=modules/activity-comments/README.md:src/Contracts/ActivityAuthorizer.php | neighbors=[Liberu Activity and Comments]
- "contract_audit_recorder": "Contract: AuditRecorder" | kind=entity | source=modules/audit/README.md:src/Contracts/AuditRecorder.php | neighbors=[Liberu Audit]
- "contract_clock": "Contract: Clock" | kind=entity | source=modules/application/README.md:src/Contracts/Clock.php | neighbors=[Liberu Application Core]
- "contract_connected_account_owner": "Contract: ConnectedAccountOwner" | kind=entity | source=modules/identity-socialstream/README.md:src/Contracts/ConnectedAccountOwner.php | neighbors=[Liberu Social Identity]
- "contract_exchange_rate_provider": "Contract: ExchangeRateProvider" | kind=entity | source=modules/currency-context/README.md:src/Contracts/ExchangeRateProvider.php | neighbors=[Liberu Currency Context]
- "contract_google_transport": "Contract: GoogleTransport" | kind=entity | source=modules/analytics-google/README.md:src/Contracts/GoogleTransport.php | neighbors=[Liberu Google Analytics]
- "contract_identifier_factory": "Contract: IdentifierFactory" | kind=entity | source=modules/application/README.md:src/Contracts/IdentifierFactory.php | neighbors=[Liberu Application Core]
- "contract_integration_adapter": "Contract: IntegrationAdapter" | kind=entity | source=modules/integrations/README.md:src/Contracts/IntegrationAdapter.php | neighbors=[Liberu Integrations]
- "contract_invitation_validator": "Contract: InvitationValidator" | kind=entity | source=modules/identity-core/README.md:src/Contracts/InvitationValidator.php | neighbors=[Liberu Identity]
- "contract_malware_scanner": "Contract: MalwareScanner" | kind=entity | source=modules/files-media/README.md:src/Contracts/MalwareScanner.php | neighbors=[Liberu Files and Media]
- "contract_media_access": "Contract: MediaAccess" | kind=entity | source=modules/files-media/README.md:src/Contracts/MediaAccess.php | neighbors=[Liberu Files and Media]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-177.json

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
