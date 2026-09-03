# Node Description Batch 191 of 212

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

- "migrations_2026_08_23_000013_create_real_estate_portal_reports_table_up": "up()" | kind=code-symbol | source=modules/real-estate-portals-reporting/database/migrations/2026_08_23_000013_create_real_estate_portal_reports_table.php:L10 | neighbors=[2026_08_23_000013_create_real_estate_po…]
- "migrations_2026_08_23_000014_create_real_estate_rightmove_syncs_table_down": "down()" | kind=code-symbol | source=modules/real-estate-rightmove/database/migrations/2026_08_23_000014_create_real_estate_rightmove_syncs_table.php:L30 | neighbors=[2026_08_23_000014_create_real_estate_ri…]
- "migrations_2026_08_23_000014_create_real_estate_rightmove_syncs_table_up": "up()" | kind=code-symbol | source=modules/real-estate-rightmove/database/migrations/2026_08_23_000014_create_real_estate_rightmove_syncs_table.php:L10 | neighbors=[2026_08_23_000014_create_real_estate_ri…]
- "migrations_2026_08_23_000015_create_real_estate_zoopla_syncs_table_down": "down()" | kind=code-symbol | source=modules/real-estate-zoopla/database/migrations/2026_08_23_000015_create_real_estate_zoopla_syncs_table.php:L30 | neighbors=[2026_08_23_000015_create_real_estate_zo…]
- "migrations_2026_08_23_000015_create_real_estate_zoopla_syncs_table_up": "up()" | kind=code-symbol | source=modules/real-estate-zoopla/database/migrations/2026_08_23_000015_create_real_estate_zoopla_syncs_table.php:L10 | neighbors=[2026_08_23_000015_create_real_estate_zo…]
- "migrations_2026_08_23_000016_create_real_estate_onthemarket_syncs_table_down": "down()" | kind=code-symbol | source=modules/real-estate-onthemarket/database/migrations/2026_08_23_000016_create_real_estate_onthemarket_syncs_table.php:L30 | neighbors=[2026_08_23_000016_create_real_estate_on…]
- "migrations_2026_08_23_000016_create_real_estate_onthemarket_syncs_table_up": "up()" | kind=code-symbol | source=modules/real-estate-onthemarket/database/migrations/2026_08_23_000016_create_real_estate_onthemarket_syncs_table.php:L10 | neighbors=[2026_08_23_000016_create_real_estate_on…]
- "migrations_2026_08_23_000020_create_real_estate_lettings_table_down": "down()" | kind=code-symbol | source=modules/real-estate-lettings/database/migrations/2026_08_23_000020_create_real_estate_lettings_table.php:L33 | neighbors=[2026_08_23_000020_create_real_estate_le…]
- "migrations_2026_08_23_000020_create_real_estate_lettings_table_up": "up()" | kind=code-symbol | source=modules/real-estate-lettings/database/migrations/2026_08_23_000020_create_real_estate_lettings_table.php:L11 | neighbors=[2026_08_23_000020_create_real_estate_le…]
- "migrations_2026_08_23_000021_create_property_management_records_table_down": "down()" | kind=code-symbol | source=modules/real-estate-property-management/database/migrations/2026_08_23_000021_create_property_management_records_table.php:L33 | neighbors=[2026_08_23_000021_create_property_manag…]
- "migrations_2026_08_23_000021_create_property_management_records_table_up": "up()" | kind=code-symbol | source=modules/real-estate-property-management/database/migrations/2026_08_23_000021_create_property_management_records_table.php:L11 | neighbors=[2026_08_23_000021_create_property_manag…]
- "migrations_2026_08_24_000001_add_legacy_property_attributes_down": "down()" | kind=code-symbol | source=modules/real-estate-properties/database/migrations/2026_08_24_000001_add_legacy_property_attributes.php:L44 | neighbors=[2026_08_24_000001_add_legacy_property_a…]
- "migrations_2026_08_24_000001_add_legacy_property_attributes_up": "up()" | kind=code-symbol | source=modules/real-estate-properties/database/migrations/2026_08_24_000001_add_legacy_property_attributes.php:L11 | neighbors=[2026_08_24_000001_add_legacy_property_a…]
- "migrations_2026_08_24_000002_create_real_estate_agencies_and_territories_down": "down()" | kind=code-symbol | source=modules/real-estate-core/database/migrations/2026_08_24_000002_create_real_estate_agencies_and_territories.php:L38 | neighbors=[2026_08_24_000002_create_real_estate_ag…]
- "migrations_2026_08_24_000002_create_real_estate_agencies_and_territories_up": "up()" | kind=code-symbol | source=modules/real-estate-core/database/migrations/2026_08_24_000002_create_real_estate_agencies_and_territories.php:L11 | neighbors=[2026_08_24_000002_create_real_estate_ag…]
- "migrations_2026_08_24_000003_add_valuation_workflow_fields_down": "down()" | kind=code-symbol | source=modules/real-estate-valuations/database/migrations/2026_08_24_000003_add_valuation_workflow_fields.php:L20 | neighbors=[2026_08_24_000003_add_valuation_workflo…]
- "migrations_2026_08_24_000003_add_valuation_workflow_fields_up": "up()" | kind=code-symbol | source=modules/real-estate-valuations/database/migrations/2026_08_24_000003_add_valuation_workflow_fields.php:L11 | neighbors=[2026_08_24_000003_add_valuation_workflo…]
- "migrations_2026_08_24_000004_add_offer_workflow_fields_down": "down()" | kind=code-symbol | source=modules/real-estate-offers/database/migrations/2026_08_24_000004_add_offer_workflow_fields.php:L38 | neighbors=[2026_08_24_000004_add_offer_workflow_fi…]
- "migrations_2026_08_24_000004_add_offer_workflow_fields_up": "up()" | kind=code-symbol | source=modules/real-estate-offers/database/migrations/2026_08_24_000004_add_offer_workflow_fields.php:L9 | neighbors=[2026_08_24_000004_add_offer_workflow_fi…]
- "models_agency_agency_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Agency.php:L21 | neighbors=[Agency]
- "models_agency_agency_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Agency.php:L31 | neighbors=[Agency]
- "models_agency_agency_team": ".team()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Agency.php:L26 | neighbors=[Agency]
- "models_branch_branch_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Branch.php:L21 | neighbors=[Branch]
- "models_branch_branch_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Branch.php:L31 | neighbors=[Branch]
- "models_branch_branch_team": ".team()" | kind=code-symbol | source=modules/real-estate-core/src/Models/Branch.php:L26 | neighbors=[Branch]
- "models_connectedaccount_connectedaccount_newfactory": ".newFactory()" | kind=code-symbol | source=modules/identity-socialstream/src/Models/ConnectedAccount.php:L20 | neighbors=[ConnectedAccount]
- "models_instruction_instruction_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-instructions/src/Models/Instruction.php:L19 | neighbors=[Instruction]
- "models_instruction_instruction_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-instructions/src/Models/Instruction.php:L24 | neighbors=[Instruction]
- "models_letting_letting_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-lettings/src/Models/Letting.php:L19 | neighbors=[Letting]
- "models_letting_letting_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-lettings/src/Models/Letting.php:L24 | neighbors=[Letting]
- "models_listing_listing_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-listings/src/Models/Listing.php:L19 | neighbors=[Listing]
- "models_listing_listing_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-listings/src/Models/Listing.php:L24 | neighbors=[Listing]
- "models_managementrecord_managementrecord_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-property-management/src/Models/ManagementRecord.php:L19 | neighbors=[ManagementRecord]
- "models_managementrecord_managementrecord_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-property-management/src/Models/ManagementRecord.php:L24 | neighbors=[ManagementRecord]
- "models_marketingcampaign_marketingcampaign_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-marketing/src/Models/MarketingCampaign.php:L20 | neighbors=[MarketingCampaign]
- "models_marketingcampaign_marketingcampaign_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-marketing/src/Models/MarketingCampaign.php:L25 | neighbors=[MarketingCampaign]
- "models_matchprofile_matchprofile_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-matching/src/Models/MatchProfile.php:L18 | neighbors=[MatchProfile]
- "models_matchprofile_matchprofile_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-matching/src/Models/MatchProfile.php:L23 | neighbors=[MatchProfile]
- "models_mediadocument_mediadocument_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Models/MediaDocument.php:L18 | neighbors=[MediaDocument]
- "models_mediadocument_mediadocument_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Models/MediaDocument.php:L23 | neighbors=[MediaDocument]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-190.json

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
