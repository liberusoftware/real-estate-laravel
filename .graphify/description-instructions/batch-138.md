# Node Description Batch 139 of 212

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

- "controllers_territorycontroller_territorycontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L26 | neighbors=[TerritoryController, .rules()]
- "controllers_territorycontroller_territorycontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/TerritoryController.php:L41 | neighbors=[TerritoryController, .rules()]
- "coverage_tsv": "storage/app/coverage.tsv" | kind=entity | source=scripts/README.md | neighbors=[measure-coverage, set-coverage-thresholds]
- "cursor_mcp_mcp_server_laravel_boost": "laravel-boost" | kind=code-symbol | source=.cursor/mcp.json:L1 | neighbors=[mcp.json, php]
- "cursor_mcp_mcp_server_lerd": "lerd" | kind=code-symbol | source=.cursor/mcp.json:L1 | neighbors=[mcp.json, lerd]
- "data_profileupdate": "ProfileUpdate.php" | kind=code-symbol | source=modules/profiles/src/Data/ProfileUpdate.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ProfileUpdate]
- "data_profileupdate_profileupdate": "ProfileUpdate" | kind=code-symbol | source=modules/profiles/src/Data/ProfileUpdate.php:L5 | neighbors=[ProfileUpdate.php, .__construct()]
- "data_transferschema": "TransferSchema.php" | kind=code-symbol | source=modules/import-export/src/Data/TransferSchema.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TransferSchema]
- "data_transferschema_transferschema": "TransferSchema" | kind=code-symbol | source=modules/import-export/src/Data/TransferSchema.php:L7 | neighbors=[TransferSchema.php, .__construct()]
- "discovery_themediscovery": "ThemeDiscovery.php" | kind=code-symbol | source=modules/theme-support/src/Discovery/ThemeDiscovery.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeDiscovery]
- "discovery_themediscovery_themediscovery_discover": ".discover()" | kind=code-symbol | source=modules/theme-support/src/Discovery/ThemeDiscovery.php:L30 | neighbors=[ThemeDiscovery, .installedPaths()]
- "discovery_themediscovery_themediscovery_installedpaths": ".installedPaths()" | kind=code-symbol | source=modules/theme-support/src/Discovery/ThemeDiscovery.php:L81 | neighbors=[ThemeDiscovery, .discover()]
- "doc_admin_panel_enhancements": "Admin panel user-management enhancements" | kind=entity | source=docs/ADMIN_PANEL_ENHANCEMENTS.md | neighbors=[Admin user-management enhancement, Admin panel visual comparison]
- "doc_admin_panel_visual_comparison": "Admin panel visual comparison" | kind=entity | source=docs/ADMIN_PANEL_VISUAL_COMPARISON.md | neighbors=[Admin user-management enhancement, Admin panel user-management enhancements]
- "doc_agents_triage_labels": "Agent Triage Labels" | kind=entity | source=docs/agents/triage-labels.md | neighbors=[Canonical triage labels, Handoff: Conformance Map (2026-08-04)]
- "doc_real_estate_core_modules": "Real Estate core modules README" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, 'planned' as an explicit backlog marker]
- "doc_sweep_issue_template": "Sweep issue template" | kind=entity | source=.github/ISSUE_TEMPLATE/sweep-template.yml | neighbors=[Issue template, Sweep AI automation]
- "doc_theme_real_estate_default_upgrading": "Real Estate Default theme UPGRADING to 1.0.0" | kind=entity | source=themes/real-estate-default/UPGRADING.md | neighbors=[Do not edit installed files under theme…, real-estate-default theme]
- "docs_conformance_plan": "docs/CONFORMANCE.md — Conformance Plan" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Conformance Step 5 — Test Redistribution, Handoff: Conformance Step 5 (Test Redis…]
- "domain_instructionscapabilitydefinition_instructionscapabilitydefinition": "InstructionsCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-instructions/src/Domain/InstructionsCapabilityDefinition.php:L7 | neighbors=[InstructionsCapabilityDefinition.php, .all()]
- "domain_instructionstatus": "InstructionStatus.php" | kind=code-symbol | source=modules/real-estate-instructions/src/Domain/InstructionStatus.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…]
- "domain_lettingcapabilitydefinition": "LettingCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/LettingCapabilityDefinition.php:L1 | neighbors=[3735f58 Complete letting and property m…, LettingCapabilityDefinition]
- "domain_lettingcapabilitydefinition_lettingcapabilitydefinition": "LettingCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/LettingCapabilityDefinition.php:L7 | neighbors=[LettingCapabilityDefinition.php, .all()]
- "domain_listingscapabilitydefinition_listingscapabilitydefinition": "ListingsCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-listings/src/Domain/ListingsCapabilityDefinition.php:L7 | neighbors=[ListingsCapabilityDefinition.php, .all()]
- "domain_listingstatus": "ListingStatus.php" | kind=code-symbol | source=modules/real-estate-listings/src/Domain/ListingStatus.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…]
- "domain_managementcapabilitydefinition": "ManagementCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/ManagementCapabilityDefinition.php:L1 | neighbors=[3735f58 Complete letting and property m…, ManagementCapabilityDefinition]
- "domain_managementcapabilitydefinition_managementcapabilitydefinition": "ManagementCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/ManagementCapabilityDefinition.php:L7 | neighbors=[ManagementCapabilityDefinition.php, .all()]
- "domain_marketingcapabilitydefinition_marketingcapabilitydefinition": "MarketingCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-marketing/src/Domain/MarketingCapabilityDefinition.php:L7 | neighbors=[MarketingCapabilityDefinition.php, .all()]
- "domain_matchingcapabilitydefinition_matchingcapabilitydefinition": "MatchingCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-matching/src/Domain/MatchingCapabilityDefinition.php:L7 | neighbors=[MatchingCapabilityDefinition.php, .all()]
- "domain_mediaanddocumentscapabilitydefinition_mediaanddocumentscapabilitydefinition": "MediaAndDocumentsCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Domain/MediaAndDocumentsCapabilityDefinition.php:L7 | neighbors=[MediaAndDocumentsCapabilityDefinition.p…, .all()]
- "domain_offerscapabilitydefinition_offerscapabilitydefinition": "OffersCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-offers/src/Domain/OffersCapabilityDefinition.php:L7 | neighbors=[OffersCapabilityDefinition.php, .all()]
- "domain_offerstatus": "OfferStatus.php" | kind=code-symbol | source=modules/real-estate-offers/src/Domain/OfferStatus.php:L1 | neighbors=[42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…]
- "domain_portalsreportingcapabilitydefinition_portalsreportingcapabilitydefinition": "PortalsReportingCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Domain/PortalsReportingCapabilityDefinition.php:L7 | neighbors=[PortalsReportingCapabilityDefinition.php, .all()]
- "domain_propertystatus": "PropertyStatus.php" | kind=code-symbol | source=modules/real-estate-properties/src/Domain/PropertyStatus.php:L1 | neighbors=[75d6371 Add real estate properties modu…, isPublic()]
- "domain_salesprogressioncapabilitydefinition_salesprogressioncapabilitydefinition": "SalesProgressionCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Domain/SalesProgressionCapabilityDefinition.php:L7 | neighbors=[SalesProgressionCapabilityDefinition.php, .all()]
- "domain_valuationstatus": "ValuationStatus.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Domain/ValuationStatus.php:L1 | neighbors=[44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…]
- "domain_viewingscapabilitydefinition_viewingscapabilitydefinition": "ViewingsCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-viewings/src/Domain/ViewingsCapabilityDefinition.php:L7 | neighbors=[ViewingsCapabilityDefinition.php, .all()]
- "domain_viewingstatus": "ViewingStatus.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Domain/ViewingStatus.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…]
- "enforcement_twofactorpolicy": "TwoFactorPolicy.php" | kind=code-symbol | source=modules/two-factor-authentication/src/Enforcement/TwoFactorPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TwoFactorPolicy]
- "enforcement_twofactorpolicy_twofactorpolicy": "TwoFactorPolicy" | kind=code-symbol | source=modules/two-factor-authentication/src/Enforcement/TwoFactorPolicy.php:L7 | neighbors=[TwoFactorPolicy.php, .requiredFor()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-138.json

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
