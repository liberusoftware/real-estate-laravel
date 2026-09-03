# Node Description Batch 190 of 212

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

- "migrations_2026_08_01_061000_harden_organization_memberships_up": "up()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2026_08_01_061000_harden_organization_memberships.php:L9 | neighbors=[2026_08_01_061000_harden_organization_m…]
- "migrations_2026_08_01_062000_create_break_glass_grants_table_down": "down()" | kind=code-symbol | source=modules/roles-permissions/database/migrations/2026_08_01_062000_create_break_glass_grants_table.php:L23 | neighbors=[2026_08_01_062000_create_break_glass_gr…]
- "migrations_2026_08_01_062000_create_break_glass_grants_table_up": "up()" | kind=code-symbol | source=modules/roles-permissions/database/migrations/2026_08_01_062000_create_break_glass_grants_table.php:L9 | neighbors=[2026_08_01_062000_create_break_glass_gr…]
- "migrations_2026_08_01_063000_create_currency_context_tables_down": "down()" | kind=code-symbol | source=modules/currency-context/database/migrations/2026_08_01_063000_create_currency_context_tables.php:L34 | neighbors=[2026_08_01_063000_create_currency_conte…]
- "migrations_2026_08_01_063000_create_currency_context_tables_up": "up()" | kind=code-symbol | source=modules/currency-context/database/migrations/2026_08_01_063000_create_currency_context_tables.php:L9 | neighbors=[2026_08_01_063000_create_currency_conte…]
- "migrations_2026_08_01_063100_create_scoped_settings_table_down": "down()" | kind=code-symbol | source=modules/settings/database/migrations/2026_08_01_063100_create_scoped_settings_table.php:L23 | neighbors=[2026_08_01_063100_create_scoped_setting…]
- "migrations_2026_08_01_063100_create_scoped_settings_table_up": "up()" | kind=code-symbol | source=modules/settings/database/migrations/2026_08_01_063100_create_scoped_settings_table.php:L9 | neighbors=[2026_08_01_063100_create_scoped_setting…]
- "migrations_2026_08_01_064000_create_notification_templates_and_inbox_down": "down()" | kind=code-symbol | source=modules/notifications/database/migrations/2026_08_01_064000_create_notification_templates_and_inbox.php:L33 | neighbors=[2026_08_01_064000_create_notification_t…]
- "migrations_2026_08_01_064000_create_notification_templates_and_inbox_up": "up()" | kind=code-symbol | source=modules/notifications/database/migrations/2026_08_01_064000_create_notification_templates_and_inbox.php:L9 | neighbors=[2026_08_01_064000_create_notification_t…]
- "migrations_2026_08_01_064100_add_tamper_evidence_to_activity_log_down": "down()" | kind=code-symbol | source=modules/audit/database/migrations/2026_08_01_064100_add_tamper_evidence_to_activity_log.php:L20 | neighbors=[2026_08_01_064100_add_tamper_evidence_t…]
- "migrations_2026_08_01_064100_add_tamper_evidence_to_activity_log_up": "up()" | kind=code-symbol | source=modules/audit/database/migrations/2026_08_01_064100_add_tamper_evidence_to_activity_log.php:L9 | neighbors=[2026_08_01_064100_add_tamper_evidence_t…]
- "migrations_2026_08_01_064200_create_api_service_identities_down": "down()" | kind=code-symbol | source=modules/api-access/database/migrations/2026_08_01_064200_create_api_service_identities.php:L23 | neighbors=[2026_08_01_064200_create_api_service_id…]
- "migrations_2026_08_01_064200_create_api_service_identities_up": "up()" | kind=code-symbol | source=modules/api-access/database/migrations/2026_08_01_064200_create_api_service_identities.php:L9 | neighbors=[2026_08_01_064200_create_api_service_id…]
- "migrations_2026_08_01_065000_create_mentions_and_attachments_down": "down()" | kind=code-symbol | source=modules/activity-comments/database/migrations/2026_08_01_065000_create_mentions_and_attachments.php:L27 | neighbors=[2026_08_01_065000_create_mentions_and_a…]
- "migrations_2026_08_01_065000_create_mentions_and_attachments_up": "up()" | kind=code-symbol | source=modules/activity-comments/database/migrations/2026_08_01_065000_create_mentions_and_attachments.php:L9 | neighbors=[2026_08_01_065000_create_mentions_and_a…]
- "migrations_2026_08_23_000001_create_real_estate_properties_tables_down": "down()" | kind=code-symbol | source=modules/real-estate-properties/database/migrations/2026_08_23_000001_create_real_estate_properties_tables.php:L39 | neighbors=[2026_08_23_000001_create_real_estate_pr…]
- "migrations_2026_08_23_000001_create_real_estate_properties_tables_up": "up()" | kind=code-symbol | source=modules/real-estate-properties/database/migrations/2026_08_23_000001_create_real_estate_properties_tables.php:L11 | neighbors=[2026_08_23_000001_create_real_estate_pr…]
- "migrations_2026_08_23_000002_create_real_estate_parties_table_down": "down()" | kind=code-symbol | source=modules/real-estate-parties/database/migrations/2026_08_23_000002_create_real_estate_parties_table.php:L28 | neighbors=[2026_08_23_000002_create_real_estate_pa…]
- "migrations_2026_08_23_000002_create_real_estate_parties_table_up": "up()" | kind=code-symbol | source=modules/real-estate-parties/database/migrations/2026_08_23_000002_create_real_estate_parties_table.php:L11 | neighbors=[2026_08_23_000002_create_real_estate_pa…]
- "migrations_2026_08_23_000003_create_real_estate_branches_table_down": "down()" | kind=code-symbol | source=modules/real-estate-core/database/migrations/2026_08_23_000003_create_real_estate_branches_table.php:L28 | neighbors=[2026_08_23_000003_create_real_estate_br…]
- "migrations_2026_08_23_000003_create_real_estate_branches_table_up": "up()" | kind=code-symbol | source=modules/real-estate-core/database/migrations/2026_08_23_000003_create_real_estate_branches_table.php:L11 | neighbors=[2026_08_23_000003_create_real_estate_br…]
- "migrations_2026_08_23_000004_create_real_estate_media_documents_table_down": "down()" | kind=code-symbol | source=modules/real-estate-media-and-documents/database/migrations/2026_08_23_000004_create_real_estate_media_documents_table.php:L29 | neighbors=[2026_08_23_000004_create_real_estate_me…]
- "migrations_2026_08_23_000004_create_real_estate_media_documents_table_up": "up()" | kind=code-symbol | source=modules/real-estate-media-and-documents/database/migrations/2026_08_23_000004_create_real_estate_media_documents_table.php:L9 | neighbors=[2026_08_23_000004_create_real_estate_me…]
- "migrations_2026_08_23_000005_create_real_estate_valuations_table_down": "down()" | kind=code-symbol | source=modules/real-estate-valuations/database/migrations/2026_08_23_000005_create_real_estate_valuations_table.php:L31 | neighbors=[2026_08_23_000005_create_real_estate_va…]
- "migrations_2026_08_23_000005_create_real_estate_valuations_table_up": "up()" | kind=code-symbol | source=modules/real-estate-valuations/database/migrations/2026_08_23_000005_create_real_estate_valuations_table.php:L9 | neighbors=[2026_08_23_000005_create_real_estate_va…]
- "migrations_2026_08_23_000006_create_real_estate_instructions_table_down": "down()" | kind=code-symbol | source=modules/real-estate-instructions/database/migrations/2026_08_23_000006_create_real_estate_instructions_table.php:L30 | neighbors=[2026_08_23_000006_create_real_estate_in…]
- "migrations_2026_08_23_000006_create_real_estate_instructions_table_up": "up()" | kind=code-symbol | source=modules/real-estate-instructions/database/migrations/2026_08_23_000006_create_real_estate_instructions_table.php:L9 | neighbors=[2026_08_23_000006_create_real_estate_in…]
- "migrations_2026_08_23_000007_create_real_estate_listings_table_down": "down()" | kind=code-symbol | source=modules/real-estate-listings/database/migrations/2026_08_23_000007_create_real_estate_listings_table.php:L31 | neighbors=[2026_08_23_000007_create_real_estate_li…]
- "migrations_2026_08_23_000007_create_real_estate_listings_table_up": "up()" | kind=code-symbol | source=modules/real-estate-listings/database/migrations/2026_08_23_000007_create_real_estate_listings_table.php:L9 | neighbors=[2026_08_23_000007_create_real_estate_li…]
- "migrations_2026_08_23_000008_create_real_estate_match_profiles_table_down": "down()" | kind=code-symbol | source=modules/real-estate-matching/database/migrations/2026_08_23_000008_create_real_estate_match_profiles_table.php:L30 | neighbors=[2026_08_23_000008_create_real_estate_ma…]
- "migrations_2026_08_23_000008_create_real_estate_match_profiles_table_up": "up()" | kind=code-symbol | source=modules/real-estate-matching/database/migrations/2026_08_23_000008_create_real_estate_match_profiles_table.php:L9 | neighbors=[2026_08_23_000008_create_real_estate_ma…]
- "migrations_2026_08_23_000009_create_real_estate_viewings_table_down": "down()" | kind=code-symbol | source=modules/real-estate-viewings/database/migrations/2026_08_23_000009_create_real_estate_viewings_table.php:L32 | neighbors=[2026_08_23_000009_create_real_estate_vi…]
- "migrations_2026_08_23_000009_create_real_estate_viewings_table_up": "up()" | kind=code-symbol | source=modules/real-estate-viewings/database/migrations/2026_08_23_000009_create_real_estate_viewings_table.php:L9 | neighbors=[2026_08_23_000009_create_real_estate_vi…]
- "migrations_2026_08_23_000010_create_real_estate_offers_table_down": "down()" | kind=code-symbol | source=modules/real-estate-offers/database/migrations/2026_08_23_000010_create_real_estate_offers_table.php:L32 | neighbors=[2026_08_23_000010_create_real_estate_of…]
- "migrations_2026_08_23_000010_create_real_estate_offers_table_up": "up()" | kind=code-symbol | source=modules/real-estate-offers/database/migrations/2026_08_23_000010_create_real_estate_offers_table.php:L9 | neighbors=[2026_08_23_000010_create_real_estate_of…]
- "migrations_2026_08_23_000011_create_real_estate_sales_progressions_table_down": "down()" | kind=code-symbol | source=modules/real-estate-sales-progression/database/migrations/2026_08_23_000011_create_real_estate_sales_progressions_table.php:L34 | neighbors=[2026_08_23_000011_create_real_estate_sa…]
- "migrations_2026_08_23_000011_create_real_estate_sales_progressions_table_up": "up()" | kind=code-symbol | source=modules/real-estate-sales-progression/database/migrations/2026_08_23_000011_create_real_estate_sales_progressions_table.php:L11 | neighbors=[2026_08_23_000011_create_real_estate_sa…]
- "migrations_2026_08_23_000012_create_real_estate_marketing_campaigns_table_down": "down()" | kind=code-symbol | source=modules/real-estate-marketing/database/migrations/2026_08_23_000012_create_real_estate_marketing_campaigns_table.php:L32 | neighbors=[2026_08_23_000012_create_real_estate_ma…]
- "migrations_2026_08_23_000012_create_real_estate_marketing_campaigns_table_up": "up()" | kind=code-symbol | source=modules/real-estate-marketing/database/migrations/2026_08_23_000012_create_real_estate_marketing_campaigns_table.php:L10 | neighbors=[2026_08_23_000012_create_real_estate_ma…]
- "migrations_2026_08_23_000013_create_real_estate_portal_reports_table_down": "down()" | kind=code-symbol | source=modules/real-estate-portals-reporting/database/migrations/2026_08_23_000013_create_real_estate_portal_reports_table.php:L33 | neighbors=[2026_08_23_000013_create_real_estate_po…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-189.json

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
