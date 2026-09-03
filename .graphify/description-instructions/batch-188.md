# Node Description Batch 189 of 212

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

- "migrations_2022_12_14_083707_create_settings_table_up": "up()" | kind=code-symbol | source=modules/settings/database/migrations/2022_12_14_083707_create_settings_table.php:L9 | neighbors=[2022_12_14_083707_create_settings_table…]
- "migrations_2026_02_14_000003_add_search_indexes_to_users_table_down": "down()" | kind=code-symbol | source=modules/search/database/migrations/2026_02_14_000003_add_search_indexes_to_users_table.php:L18 | neighbors=[2026_02_14_000003_add_search_indexes_to…]
- "migrations_2026_02_14_000003_add_search_indexes_to_users_table_up": "up()" | kind=code-symbol | source=modules/search/database/migrations/2026_02_14_000003_add_search_indexes_to_users_table.php:L9 | neighbors=[2026_02_14_000003_add_search_indexes_to…]
- "migrations_2026_02_16_000001_add_locale_to_users_table_down": "down()" | kind=code-symbol | source=modules/profiles/database/migrations/2026_02_16_000001_add_locale_to_users_table.php:L22 | neighbors=[2026_02_16_000001_add_locale_to_users_t…]
- "migrations_2026_02_16_000001_add_locale_to_users_table_up": "up()" | kind=code-symbol | source=modules/profiles/database/migrations/2026_02_16_000001_add_locale_to_users_table.php:L12 | neighbors=[2026_02_16_000001_add_locale_to_users_t…]
- "migrations_2026_02_16_215049_add_theme_preference_to_users_table_down": "down()" | kind=code-symbol | source=modules/profiles/database/migrations/2026_02_16_215049_add_theme_preference_to_users_table.php:L22 | neighbors=[2026_02_16_215049_add_theme_preference_…]
- "migrations_2026_02_16_215049_add_theme_preference_to_users_table_up": "up()" | kind=code-symbol | source=modules/profiles/database/migrations/2026_02_16_215049_add_theme_preference_to_users_table.php:L12 | neighbors=[2026_02_16_215049_add_theme_preference_…]
- "migrations_2026_06_29_123952_add_two_factor_columns_to_users_table_down": "down()" | kind=code-symbol | source=modules/two-factor-authentication/database/migrations/2026_06_29_123952_add_two_factor_columns_to_users_table.php:L32 | neighbors=[2026_06_29_123952_add_two_factor_column…]
- "migrations_2026_06_29_123952_add_two_factor_columns_to_users_table_up": "up()" | kind=code-symbol | source=modules/two-factor-authentication/database/migrations/2026_06_29_123952_add_two_factor_columns_to_users_table.php:L12 | neighbors=[2026_06_29_123952_add_two_factor_column…]
- "migrations_2026_06_29_123953_create_passkeys_table_down": "down()" | kind=code-symbol | source=modules/identity-core/database/migrations/2026_06_29_123953_create_passkeys_table.php:L31 | neighbors=[2026_06_29_123953_create_passkeys_table…]
- "migrations_2026_06_29_123953_create_passkeys_table_up": "up()" | kind=code-symbol | source=modules/identity-core/database/migrations/2026_06_29_123953_create_passkeys_table.php:L13 | neighbors=[2026_06_29_123953_create_passkeys_table…]
- "migrations_2026_06_29_123955_create_connected_accounts_table_down": "down()" | kind=code-symbol | source=modules/identity-socialstream/database/migrations/2026_06_29_123955_create_connected_accounts_table.php:L38 | neighbors=[2026_06_29_123955_create_connected_acco…]
- "migrations_2026_06_29_123955_create_connected_accounts_table_up": "up()" | kind=code-symbol | source=modules/identity-socialstream/database/migrations/2026_06_29_123955_create_connected_accounts_table.php:L12 | neighbors=[2026_06_29_123955_create_connected_acco…]
- "migrations_2026_06_29_124052_create_pulse_tables_down": "down()" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124052_create_pulse_tables.php:L78 | neighbors=[2026_06_29_124052_create_pulse_tables.p…]
- "migrations_2026_06_29_124052_create_pulse_tables_up": "up()" | kind=code-symbol | source=modules/observability/database/migrations/2026_06_29_124052_create_pulse_tables.php:L12 | neighbors=[2026_06_29_124052_create_pulse_tables.p…]
- "migrations_2026_06_29_124053_create_activity_log_table_up": "up()" | kind=code-symbol | source=modules/audit/database/migrations/2026_06_29_124053_create_activity_log_table.php:L9 | neighbors=[2026_06_29_124053_create_activity_log_t…]
- "migrations_2026_06_29_124053_create_media_table_up": "up()" | kind=code-symbol | source=modules/files-media/database/migrations/2026_06_29_124053_create_media_table.php:L9 | neighbors=[2026_06_29_124053_create_media_table.php]
- "migrations_2026_06_29_124225_create_permission_tables_down": "down()" | kind=code-symbol | source=modules/roles-permissions/database/migrations/2026_06_29_124225_create_permission_tables.php:L125 | neighbors=[2026_06_29_124225_create_permission_tab…]
- "migrations_2026_06_29_124225_create_permission_tables_up": "up()" | kind=code-symbol | source=modules/roles-permissions/database/migrations/2026_06_29_124225_create_permission_tables.php:L12 | neighbors=[2026_06_29_124225_create_permission_tab…]
- "migrations_2026_08_01_000000_add_timezone_to_users_table_down": "down()" | kind=code-symbol | source=modules/profiles/database/migrations/2026_08_01_000000_add_timezone_to_users_table.php:L16 | neighbors=[2026_08_01_000000_add_timezone_to_users…]
- "migrations_2026_08_01_000000_add_timezone_to_users_table_up": "up()" | kind=code-symbol | source=modules/profiles/database/migrations/2026_08_01_000000_add_timezone_to_users_table.php:L9 | neighbors=[2026_08_01_000000_add_timezone_to_users…]
- "migrations_2026_08_01_010000_create_notification_foundation_tables_down": "down()" | kind=code-symbol | source=modules/notifications/database/migrations/2026_08_01_010000_create_notification_foundation_tables.php:L35 | neighbors=[2026_08_01_010000_create_notification_f…]
- "migrations_2026_08_01_010000_create_notification_foundation_tables_up": "up()" | kind=code-symbol | source=modules/notifications/database/migrations/2026_08_01_010000_create_notification_foundation_tables.php:L9 | neighbors=[2026_08_01_010000_create_notification_f…]
- "migrations_2026_08_01_020000_create_feature_flags_table_down": "down()" | kind=code-symbol | source=modules/feature-flags/database/migrations/2026_08_01_020000_create_feature_flags_table.php:L22 | neighbors=[2026_08_01_020000_create_feature_flags_…]
- "migrations_2026_08_01_020000_create_feature_flags_table_up": "up()" | kind=code-symbol | source=modules/feature-flags/database/migrations/2026_08_01_020000_create_feature_flags_table.php:L9 | neighbors=[2026_08_01_020000_create_feature_flags_…]
- "migrations_2026_08_01_020100_create_api_idempotency_keys_table_down": "down()" | kind=code-symbol | source=modules/api-access/database/migrations/2026_08_01_020100_create_api_idempotency_keys_table.php:L24 | neighbors=[2026_08_01_020100_create_api_idempotenc…]
- "migrations_2026_08_01_020100_create_api_idempotency_keys_table_up": "up()" | kind=code-symbol | source=modules/api-access/database/migrations/2026_08_01_020100_create_api_idempotency_keys_table.php:L9 | neighbors=[2026_08_01_020100_create_api_idempotenc…]
- "migrations_2026_08_01_030000_create_webhook_tables_down": "down()" | kind=code-symbol | source=modules/webhooks/database/migrations/2026_08_01_030000_create_webhook_tables.php:L37 | neighbors=[2026_08_01_030000_create_webhook_tables…]
- "migrations_2026_08_01_030000_create_webhook_tables_up": "up()" | kind=code-symbol | source=modules/webhooks/database/migrations/2026_08_01_030000_create_webhook_tables.php:L9 | neighbors=[2026_08_01_030000_create_webhook_tables…]
- "migrations_2026_08_01_030100_create_integration_connections_table_down": "down()" | kind=code-symbol | source=modules/integrations/database/migrations/2026_08_01_030100_create_integration_connections_table.php:L27 | neighbors=[2026_08_01_030100_create_integration_co…]
- "migrations_2026_08_01_030100_create_integration_connections_table_up": "up()" | kind=code-symbol | source=modules/integrations/database/migrations/2026_08_01_030100_create_integration_connections_table.php:L9 | neighbors=[2026_08_01_030100_create_integration_co…]
- "migrations_2026_08_01_040000_create_analytics_deliveries_table_down": "down()" | kind=code-symbol | source=modules/analytics-core/database/migrations/2026_08_01_040000_create_analytics_deliveries_table.php:L26 | neighbors=[2026_08_01_040000_create_analytics_deli…]
- "migrations_2026_08_01_040000_create_analytics_deliveries_table_up": "up()" | kind=code-symbol | source=modules/analytics-core/database/migrations/2026_08_01_040000_create_analytics_deliveries_table.php:L9 | neighbors=[2026_08_01_040000_create_analytics_deli…]
- "migrations_2026_08_01_050000_create_data_transfers_table_down": "down()" | kind=code-symbol | source=modules/import-export/database/migrations/2026_08_01_050000_create_data_transfers_table.php:L31 | neighbors=[2026_08_01_050000_create_data_transfers…]
- "migrations_2026_08_01_050000_create_data_transfers_table_up": "up()" | kind=code-symbol | source=modules/import-export/database/migrations/2026_08_01_050000_create_data_transfers_table.php:L9 | neighbors=[2026_08_01_050000_create_data_transfers…]
- "migrations_2026_08_01_050100_create_activity_comment_tables_down": "down()" | kind=code-symbol | source=modules/activity-comments/database/migrations/2026_08_01_050100_create_activity_comment_tables.php:L43 | neighbors=[2026_08_01_050100_create_activity_comme…]
- "migrations_2026_08_01_050100_create_activity_comment_tables_up": "up()" | kind=code-symbol | source=modules/activity-comments/database/migrations/2026_08_01_050100_create_activity_comment_tables.php:L9 | neighbors=[2026_08_01_050100_create_activity_comme…]
- "migrations_2026_08_01_060000_create_two_factor_trusted_devices_table_down": "down()" | kind=code-symbol | source=modules/two-factor-authentication/database/migrations/2026_08_01_060000_create_two_factor_trusted_devices_table.php:L24 | neighbors=[2026_08_01_060000_create_two_factor_tru…]
- "migrations_2026_08_01_060000_create_two_factor_trusted_devices_table_up": "up()" | kind=code-symbol | source=modules/two-factor-authentication/database/migrations/2026_08_01_060000_create_two_factor_trusted_devices_table.php:L9 | neighbors=[2026_08_01_060000_create_two_factor_tru…]
- "migrations_2026_08_01_061000_harden_organization_memberships_down": "down()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2026_08_01_061000_harden_organization_memberships.php:L40 | neighbors=[2026_08_01_061000_harden_organization_m…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-188.json

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
