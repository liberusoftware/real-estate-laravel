# Node Description Batch 183 of 212

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

- "controllers_zooplasynccontroller_zooplasynccontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-zoopla-api/src/Http/Controllers/ZooplaSyncController.php:L51 | neighbors=[ZooplaSyncController]
- "data_profileupdate_profileupdate_construct": ".__construct()" | kind=code-symbol | source=modules/profiles/src/Data/ProfileUpdate.php:L7 | neighbors=[ProfileUpdate]
- "data_transferschema_transferschema_construct": ".__construct()" | kind=code-symbol | source=modules/import-export/src/Data/TransferSchema.php:L10 | neighbors=[TransferSchema]
- "discovery_themediscovery_themediscovery_construct": ".__construct()" | kind=code-symbol | source=modules/theme-support/src/Discovery/ThemeDiscovery.php:L16 | neighbors=[ThemeDiscovery]
- "doc_issue_template": "Issue template" | kind=entity | source=.github/issue_template.md | neighbors=[Sweep issue template]
- "doc_liberu_filament_modules": "Liberu Filament modules README" | kind=entity | source=projects/liberu/filament/README.md | neighbors=[Foundation adapters vs product scope]
- "doc_liberu_livewire_modules": "Liberu Livewire modules README" | kind=entity | source=projects/liberu/livewire/README.md | neighbors=[Foundation adapters vs product scope]
- "doc_meta_repository_scripts": "Liberu Meta Repository Scripts README" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts]
- "doc_property_management_api_spec": "Property Management API Specification" | kind=entity | source=modules/real-estate-property-management/README.md | neighbors=[Real Estate Property Management Module]
- "doc_property_management_domain_spec": "Property Management Domain Specification" | kind=entity | source=modules/real-estate-property-management/README.md | neighbors=[Real Estate Property Management Module]
- "doc_property_management_filament_spec": "Property Management Filament Specification" | kind=entity | source=modules/real-estate-property-management/README.md | neighbors=[Real Estate Property Management Module]
- "doc_property_management_livewire_spec": "Property Management Livewire Specification" | kind=entity | source=modules/real-estate-property-management/README.md | neighbors=[Real Estate Property Management Module]
- "doc_real_estate_api_modules": "Real Estate API modules README" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier]
- "doc_real_estate_filament_modules": "Real Estate Filament modules README" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier]
- "doc_real_estate_integrations": "Real Estate Portal Integrations README" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Portal integrations are independently r…]
- "doc_real_estate_livewire_modules": "Real Estate Livewire modules README" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier]
- "doc_real_estate_scope": "Liberu Real Estate scope (REAL-ESTATE.md)" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Liberu Real Estate scope]
- "doc_theme_base_readme": "Liberu Base theme README" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base)]
- "doc_theme_base_upgrading": "Liberu Base theme UPGRADING 1.x to 2.0" | kind=entity | source=themes/base/UPGRADING.md | neighbors=[Theme rename: liberu-base becomes base …]
- "doc_theme_clear_signal_readme": "Clear Signal theme README" | kind=entity | source=themes/clear-signal/README.md | neighbors=[clear-signal theme (Clear Signal)]
- "doc_theme_dark_readme": "Liberu Dark theme README" | kind=entity | source=themes/dark/README.md | neighbors=[dark theme (Liberu Dark)]
- "doc_theme_default_readme": "Liberu Default theme README" | kind=entity | source=themes/default/README.md | neighbors=[default theme (Liberu Default)]
- "doc_theme_real_estate_default_readme": "Liberu Real Estate Default theme README" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "domain_corecapabilitydefinition_corecapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-core/src/Domain/CoreCapabilityDefinition.php:L10 | neighbors=[CoreCapabilityDefinition]
- "domain_corecapabilitydefinition_corecapabilitydefinition_define": ".define()" | kind=code-symbol | source=modules/real-estate-core/src/Domain/CoreCapabilityDefinition.php:L16 | neighbors=[CoreCapabilityDefinition]
- "domain_instructionscapabilitydefinition_instructionscapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-instructions/src/Domain/InstructionsCapabilityDefinition.php:L10 | neighbors=[InstructionsCapabilityDefinition]
- "domain_lettingcapability": "LettingCapability.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/LettingCapability.php:L1 | neighbors=[e8b93fc Implement remaining real estate…]
- "domain_lettingcapabilitydefinition_lettingcapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/LettingCapabilityDefinition.php:L10 | neighbors=[LettingCapabilityDefinition]
- "domain_lettingstatus": "LettingStatus.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/LettingStatus.php:L1 | neighbors=[e8b93fc Implement remaining real estate…]
- "domain_listingscapabilitydefinition_listingscapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-listings/src/Domain/ListingsCapabilityDefinition.php:L10 | neighbors=[ListingsCapabilityDefinition]
- "domain_managementcapability": "ManagementCapability.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/ManagementCapability.php:L1 | neighbors=[e8b93fc Implement remaining real estate…]
- "domain_managementcapabilitydefinition_managementcapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/ManagementCapabilityDefinition.php:L10 | neighbors=[ManagementCapabilityDefinition]
- "domain_managementstatus": "ManagementStatus.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/ManagementStatus.php:L1 | neighbors=[e8b93fc Implement remaining real estate…]
- "domain_marketingcampaignstatus": "MarketingCampaignStatus.php" | kind=code-symbol | source=modules/real-estate-marketing/src/Domain/MarketingCampaignStatus.php:L1 | neighbors=[4fd850d Add real estate marketing modul…]
- "domain_marketingcapabilitydefinition_marketingcapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-marketing/src/Domain/MarketingCapabilityDefinition.php:L10 | neighbors=[MarketingCapabilityDefinition]
- "domain_matchingcapabilitydefinition_matchingcapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-matching/src/Domain/MatchingCapabilityDefinition.php:L10 | neighbors=[MatchingCapabilityDefinition]
- "domain_mediaanddocumentscapabilitydefinition_mediaanddocumentscapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Domain/MediaAndDocumentsCapabilityDefinition.php:L10 | neighbors=[MediaAndDocumentsCapabilityDefinition]
- "domain_offerscapabilitydefinition_offerscapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-offers/src/Domain/OffersCapabilityDefinition.php:L10 | neighbors=[OffersCapabilityDefinition]
- "domain_onthemarketsyncstatus": "OnTheMarketSyncStatus.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Domain/OnTheMarketSyncStatus.php:L1 | neighbors=[1cdd121 Add independent property portal…]
- "domain_partiescapabilitydefinition_partiescapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-parties/src/Domain/PartiesCapabilityDefinition.php:L10 | neighbors=[PartiesCapabilityDefinition]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-182.json

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
