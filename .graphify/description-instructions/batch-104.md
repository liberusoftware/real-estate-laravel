# Node Description Batch 105 of 212

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

- "liberu_api_modules_scope": "Liberu API Modules Scope" | kind=entity | source=projects/liberu/api/README.md | neighbors=[Versioned openapi/v1 Adapter Contract, Liberu Webhooks, Liberu Platform Scope]
- "liberu_composer_installer": "liberusoftware/composer-installer" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Installation does not imply enablement, liberu-module Composer package type, Tracked modules/ Directory with Compose…]
- "liberu_platform_project_scope": "Liberu platform project scope" | kind=entity | source=modules/api/README.md | neighbors=[API module index, Core module index, Filament module index]
- "liberu_platform_scope": "Liberu Platform Scope" | kind=entity | source=projects/liberu/README.md | neighbors=[Liberu Application Composition, Liberu API Modules Scope, Liberu Core Modules Scope]
- "mcp_mcp": "mcp.json" | kind=code-symbol | source=.junie/mcp/mcp.json:L1 | neighbors=[75f7818 Bootstrap application from Libe…, laravel-boost, lerd]
- "middleware_idempotency": "Idempotency.php" | kind=code-symbol | source=modules/api-access/src/Http/Middleware/Idempotency.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, Idempotency]
- "middleware_idempotency_idempotency": "Idempotency" | kind=code-symbol | source=modules/api-access/src/Http/Middleware/Idempotency.php:L12 | neighbors=[Idempotency.php, .__construct(), .handle()]
- "middleware_setlocale_setlocale": "SetLocale" | kind=code-symbol | source=modules/localization-core/src/Http/Middleware/SetLocale.php:L13 | neighbors=[SetLocale.php, .__construct(), .handle()]
- "migrations_0001_01_01_000001_create_cache_table": "0001_01_01_000001_create_cache_table.php" | kind=code-symbol | source=database/migrations/0001_01_01_000001_create_cache_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_0001_01_01_000002_create_jobs_table": "0001_01_01_000002_create_jobs_table.php" | kind=code-symbol | source=database/migrations/0001_01_01_000002_create_jobs_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_0001_01_01_000003_create_sessions_table": "0001_01_01_000003_create_sessions_table.php" | kind=code-symbol | source=modules/sessions-devices/database/migrations/0001_01_01_000003_create_sessions_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2020_05_21_100000_create_teams_table": "2020_05_21_100000_create_teams_table.php" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_100000_create_teams_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2020_05_21_200000_create_team_user_table": "2020_05_21_200000_create_team_user_table.php" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_200000_create_team_user_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2020_05_21_300000_create_team_invitations_table": "2020_05_21_300000_create_team_invitations_table.php" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_300000_create_team_invitations_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_02_14_000003_add_search_indexes_to_users_table": "2026_02_14_000003_add_search_indexes_to_users_table.php" | kind=code-symbol | source=modules/search/database/migrations/2026_02_14_000003_add_search_indexes_to_users_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_02_16_000001_add_locale_to_users_table": "2026_02_16_000001_add_locale_to_users_table.php" | kind=code-symbol | source=modules/profiles/database/migrations/2026_02_16_000001_add_locale_to_users_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_02_16_215049_add_theme_preference_to_users_table": "2026_02_16_215049_add_theme_preference_to_users_table.php" | kind=code-symbol | source=modules/profiles/database/migrations/2026_02_16_215049_add_theme_preference_to_users_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_06_29_123952_add_two_factor_columns_to_users_table": "2026_06_29_123952_add_two_factor_columns_to_users_table.php" | kind=code-symbol | source=modules/two-factor-authentication/database/migrations/2026_06_29_123952_add_two_factor_columns_to_users_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_06_29_123953_create_passkeys_table": "2026_06_29_123953_create_passkeys_table.php" | kind=code-symbol | source=modules/identity-core/database/migrations/2026_06_29_123953_create_passkeys_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_06_29_123955_create_connected_accounts_table": "2026_06_29_123955_create_connected_accounts_table.php" | kind=code-symbol | source=modules/identity-socialstream/database/migrations/2026_06_29_123955_create_connected_accounts_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_06_29_124047_create_telescope_entries_table_getconnection": "getConnection()" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124047_create_telescope_entries_table.php:L12 | neighbors=[2026_06_29_124047_create_telescope_entr…, down(), up()]
- "migrations_2026_06_29_124052_create_pulse_tables": "2026_06_29_124052_create_pulse_tables.php" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124052_create_pulse_tables.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_06_29_124225_create_permission_tables": "2026_06_29_124225_create_permission_tables.php" | kind=code-symbol | source=modules/roles-permissions/database/migrations/2026_06_29_124225_create_permission_tables.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_000000_add_timezone_to_users_table": "2026_08_01_000000_add_timezone_to_users_table.php" | kind=code-symbol | source=modules/profiles/database/migrations/2026_08_01_000000_add_timezone_to_users_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_010000_create_notification_foundation_tables": "2026_08_01_010000_create_notification_foundation_tables.php" | kind=code-symbol | source=modules/notifications/database/migrations/2026_08_01_010000_create_notification_foundation_tables.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_020000_create_feature_flags_table": "2026_08_01_020000_create_feature_flags_table.php" | kind=code-symbol | source=modules/feature-flags/database/migrations/2026_08_01_020000_create_feature_flags_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_020100_create_api_idempotency_keys_table": "2026_08_01_020100_create_api_idempotency_keys_table.php" | kind=code-symbol | source=modules/api-access/database/migrations/2026_08_01_020100_create_api_idempotency_keys_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_030000_create_webhook_tables": "2026_08_01_030000_create_webhook_tables.php" | kind=code-symbol | source=modules/webhooks/database/migrations/2026_08_01_030000_create_webhook_tables.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_030100_create_integration_connections_table": "2026_08_01_030100_create_integration_connections_table.php" | kind=code-symbol | source=modules/integrations/database/migrations/2026_08_01_030100_create_integration_connections_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_040000_create_analytics_deliveries_table": "2026_08_01_040000_create_analytics_deliveries_table.php" | kind=code-symbol | source=modules/analytics-core/database/migrations/2026_08_01_040000_create_analytics_deliveries_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_050000_create_data_transfers_table": "2026_08_01_050000_create_data_transfers_table.php" | kind=code-symbol | source=modules/import-export/database/migrations/2026_08_01_050000_create_data_transfers_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_050100_create_activity_comment_tables": "2026_08_01_050100_create_activity_comment_tables.php" | kind=code-symbol | source=modules/activity-comments/database/migrations/2026_08_01_050100_create_activity_comment_tables.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_060000_create_two_factor_trusted_devices_table": "2026_08_01_060000_create_two_factor_trusted_devices_table.php" | kind=code-symbol | source=modules/two-factor-authentication/database/migrations/2026_08_01_060000_create_two_factor_trusted_devices_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_061000_harden_organization_memberships": "2026_08_01_061000_harden_organization_memberships.php" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2026_08_01_061000_harden_organization_memberships.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_062000_create_break_glass_grants_table": "2026_08_01_062000_create_break_glass_grants_table.php" | kind=code-symbol | source=modules/roles-permissions/database/migrations/2026_08_01_062000_create_break_glass_grants_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_063000_create_currency_context_tables": "2026_08_01_063000_create_currency_context_tables.php" | kind=code-symbol | source=modules/currency-context/database/migrations/2026_08_01_063000_create_currency_context_tables.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_063100_create_scoped_settings_table": "2026_08_01_063100_create_scoped_settings_table.php" | kind=code-symbol | source=modules/settings/database/migrations/2026_08_01_063100_create_scoped_settings_table.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_064000_create_notification_templates_and_inbox": "2026_08_01_064000_create_notification_templates_and_inbox.php" | kind=code-symbol | source=modules/notifications/database/migrations/2026_08_01_064000_create_notification_templates_and_inbox.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_064100_add_tamper_evidence_to_activity_log": "2026_08_01_064100_add_tamper_evidence_to_activity_log.php" | kind=code-symbol | source=modules/audit/database/migrations/2026_08_01_064100_add_tamper_evidence_to_activity_log.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]
- "migrations_2026_08_01_064200_create_api_service_identities": "2026_08_01_064200_create_api_service_identities.php" | kind=code-symbol | source=modules/api-access/database/migrations/2026_08_01_064200_create_api_service_identities.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, down(), up()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-104.json

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
