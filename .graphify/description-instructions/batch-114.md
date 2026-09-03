# Node Description Batch 115 of 212

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

- "support_themecolors_themecolors": "ThemeColors" | kind=code-symbol | source=app/Support/ThemeColors.php:L8 | neighbors=[ThemeColors.php, .__construct(), .forSite()]
- "support_webhooksigner_webhooksigner": "WebhookSigner" | kind=code-symbol | source=modules/webhooks/src/Support/WebhookSigner.php:L5 | neighbors=[WebhookSigner.php, .sign(), .verify()]
- "tables_tables_deselectallrecords": "deselectAllRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, updatedSelectedRecords(), selectRecords()]
- "tables_tables_ee": "ee()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), Ne()]
- "tables_tables_getrecordsonpage": "getRecordsOnPage()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, canSelectAllRecords(), toggleSelectRecordsOnPage()]
- "tables_tables_getselectedrecordscount": "getSelectedRecordsCount()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, areRecordsToggleable(), canSelectAllRecords()]
- "tables_tables_isrecordselected": "isRecordSelected()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, selectRecords(), toggleSelectedRecord()]
- "tables_tables_p": "P()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, be(), Fe()]
- "tables_tables_pe": "pe()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, F(), Se()]
- "tables_tables_te": "te()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, fn(), le()]
- "teams_membership_tables": "Teams, Membership and Invitation Tables" | kind=entity | source=modules/organizations-teams/README.md | neighbors=[liberusoftware/organizations-teams, Team-Scoped Boundary, laravel/jetstream]
- "telescope_pulse_tables": "Telescope and Pulse Tables" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Observability, laravel/pulse, laravel/telescope]
- "tests_helpers": "Helpers.php" | kind=code-symbol | source=modules/theme-support/tests/Helpers.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, coverageThemePackage(), writeCoverageTheme()]
- "tests_testcase": "TestCase.php" | kind=code-symbol | source=tests/TestCase.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, TestCase]
- "transport_onthemarketclient": "OnTheMarketClient.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Transport/OnTheMarketClient.php:L1 | neighbors=[bd4b1dc Add independent property portal…, e9bffaf Apply complete module formatting, OnTheMarketClient]
- "transport_rightmoveclient": "RightmoveClient.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Transport/RightmoveClient.php:L1 | neighbors=[bd4b1dc Add independent property portal…, e9bffaf Apply complete module formatting, RightmoveClient]
- "transport_zooplaclient": "ZooplaClient.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Transport/ZooplaClient.php:L1 | neighbors=[bd4b1dc Add independent property portal…, e9bffaf Apply complete module formatting, ZooplaClient]
- "trap_do_not_tag_before_running_shipped_artifact": "Trap: do not tag before something has run the shipped artifact" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…, liberusoftware/package-testbench, Trap: an empty tests/ directory does no…]
- "trap_empty_tests_directory_does_not_publish": "Trap: an empty tests/ directory does not publish" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…, Trap: do not tag before something has r…, liberusoftware/package-testbench]
- "unit_eventroutertest": "EventRouterTest.php" | kind=code-symbol | source=modules/analytics-core/tests/Unit/EventRouterTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, deliver(), name()]
- "update_sh": "update.sh" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, Non-interactive, fail-on-error commands, Packagist credentials from the environm…]
- "users_table_shared_extension": "Shared users Table Extension" | kind=entity | source=modules/profiles/README.md | neighbors=[Liberu Profiles, Capability: foundation.localization, Liberu Identity]
- "valueobjects_exchangerate_exchangerate": "ExchangeRate" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/ExchangeRate.php:L8 | neighbors=[ExchangeRate.php, .__construct(), .isStale()]
- "valueobjects_money_money_assertsamecurrency": ".assertSameCurrency()" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Money.php:L42 | neighbors=[Money, .add(), .subtract()]
- "views_agency_list_blade": "agency-list.blade.php" | kind=code-symbol | source=modules/real-estate-core-livewire/resources/views/agency-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…]
- "views_branch_list_blade": "branch-list.blade.php" | kind=code-symbol | source=modules/real-estate-core-livewire/resources/views/branch-list.blade.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…]
- "views_instruction_list_blade": "instruction-list.blade.php" | kind=code-symbol | source=modules/real-estate-instructions-livewire/resources/views/instruction-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, d07b218 Harden real estate Livewire lis…]
- "views_letting_list_blade": "letting-list.blade.php" | kind=code-symbol | source=modules/real-estate-lettings-livewire/resources/views/letting-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, e8b93fc Implement remaining real estate…]
- "views_listing_list_blade": "listing-list.blade.php" | kind=code-symbol | source=modules/real-estate-listings-livewire/resources/views/listing-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, b9f8ca5 Add real estate listings module…, d07b218 Harden real estate Livewire lis…]
- "views_marketing_campaign_list_blade": "marketing-campaign-list.blade.php" | kind=code-symbol | source=modules/real-estate-marketing-livewire/resources/views/marketing-campaign-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, d07b218 Harden real estate Livewire lis…]
- "views_match_profile_list_blade": "match-profile-list.blade.php" | kind=code-symbol | source=modules/real-estate-matching-livewire/resources/views/match-profile-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 64de88e Add real estate matching module…, d07b218 Harden real estate Livewire lis…]
- "views_media_document_list_blade": "media-document-list.blade.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/resources/views/media-document-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 72d35f5 Add media documents Filament an…, d07b218 Harden real estate Livewire lis…]
- "views_onthemarket_sync_list_blade": "onthemarket-sync-list.blade.php" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/resources/views/onthemarket-sync-list.blade.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…]
- "views_party_list_blade": "party-list.blade.php" | kind=code-symbol | source=modules/real-estate-parties-livewire/resources/views/party-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 73659b3 Add real estate parties module …, d07b218 Harden real estate Livewire lis…]
- "views_portal_report_list_blade": "portal-report-list.blade.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/resources/views/portal-report-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, d07b218 Harden real estate Livewire lis…]
- "views_property_list_blade": "property-list.blade.php" | kind=code-symbol | source=modules/real-estate-properties-livewire/resources/views/property-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 75d6371 Add real estate properties modu…, d07b218 Harden real estate Livewire lis…]
- "views_record_list_blade": "record-list.blade.php" | kind=code-symbol | source=modules/real-estate-property-management-livewire/resources/views/record-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, e8b93fc Implement remaining real estate…]
- "views_rightmove_sync_list_blade": "rightmove-sync-list.blade.php" | kind=code-symbol | source=modules/real-estate-rightmove-livewire/resources/views/rightmove-sync-list.blade.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…]
- "views_sales_progression_list_blade": "sales-progression-list.blade.php" | kind=code-symbol | source=modules/real-estate-sales-progression-livewire/resources/views/sales-progression-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, d07b218 Harden real estate Livewire lis…]
- "views_territory_list_blade": "territory-list.blade.php" | kind=code-symbol | source=modules/real-estate-core-livewire/resources/views/territory-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-114.json

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
