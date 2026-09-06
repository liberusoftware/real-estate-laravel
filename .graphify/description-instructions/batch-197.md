# Node Description Batch 198 of 212

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

- "registry_searcherregistry_searcherregistry_all": ".all()" | kind=code-symbol | source=modules/search/src/Registry/SearcherRegistry.php:L40 | neighbors=[SearcherRegistry]
- "registry_searcherregistry_searcherregistry_register": ".register()" | kind=code-symbol | source=modules/search/src/Registry/SearcherRegistry.php:L28 | neighbors=[SearcherRegistry]
- "registry_searcherregistry_searcherregistry_types": ".types()" | kind=code-symbol | source=modules/search/src/Registry/SearcherRegistry.php:L48 | neighbors=[SearcherRegistry]
- "resources_agencyresource_agencyresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource.php:L28 | neighbors=[AgencyResource]
- "resources_agencyresource_agencyresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource.php:L47 | neighbors=[AgencyResource]
- "resources_agencyresource_agencyresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource.php:L54 | neighbors=[AgencyResource]
- "resources_agencyresource_agencyresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/AgencyResource.php:L37 | neighbors=[AgencyResource]
- "resources_agencyresource_agencyresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Resources/AgencyResource.php:L13 | neighbors=[AgencyResource]
- "resources_branchresource_branchresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource.php:L26 | neighbors=[BranchResource]
- "resources_branchresource_branchresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource.php:L48 | neighbors=[BranchResource]
- "resources_branchresource_branchresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource.php:L59 | neighbors=[BranchResource]
- "resources_branchresource_branchresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-core-filament/src/Resources/BranchResource.php:L36 | neighbors=[BranchResource]
- "resources_branchresource_branchresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Resources/BranchResource.php:L13 | neighbors=[BranchResource]
- "resources_instructionresource_instructionresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource.php:L29 | neighbors=[InstructionResource]
- "resources_instructionresource_instructionresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource.php:L39 | neighbors=[InstructionResource]
- "resources_instructionresource_instructionresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource.php:L46 | neighbors=[InstructionResource]
- "resources_instructionresource_instructionresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource.php:L34 | neighbors=[InstructionResource]
- "resources_instructionresource_instructionresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Resources/InstructionResource.php:L13 | neighbors=[InstructionResource]
- "resources_lettingresource_lettingresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource.php:L27 | neighbors=[LettingResource]
- "resources_lettingresource_lettingresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource.php:L37 | neighbors=[LettingResource]
- "resources_lettingresource_lettingresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource.php:L44 | neighbors=[LettingResource]
- "resources_lettingresource_lettingresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource.php:L32 | neighbors=[LettingResource]
- "resources_lettingresource_lettingresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Resources/LettingResource.php:L13 | neighbors=[LettingResource]
- "resources_listingresource_listingresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource.php:L29 | neighbors=[ListingResource]
- "resources_listingresource_listingresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource.php:L39 | neighbors=[ListingResource]
- "resources_listingresource_listingresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource.php:L46 | neighbors=[ListingResource]
- "resources_listingresource_listingresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource.php:L34 | neighbors=[ListingResource]
- "resources_listingresource_listingresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Resources/ListingResource.php:L13 | neighbors=[ListingResource]
- "resources_managementrecordresource_managementrecordresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource.php:L27 | neighbors=[ManagementRecordResource]
- "resources_managementrecordresource_managementrecordresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource.php:L37 | neighbors=[ManagementRecordResource]
- "resources_managementrecordresource_managementrecordresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource.php:L44 | neighbors=[ManagementRecordResource]
- "resources_managementrecordresource_managementrecordresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource.php:L32 | neighbors=[ManagementRecordResource]
- "resources_managementrecordresource_managementrecordresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Resources/ManagementRecordResource.php:L13 | neighbors=[ManagementRecordResource]
- "resources_marketingcampaignresource_marketingcampaignresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource.php:L27 | neighbors=[MarketingCampaignResource]
- "resources_marketingcampaignresource_marketingcampaignresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource.php:L44 | neighbors=[MarketingCampaignResource]
- "resources_marketingcampaignresource_marketingcampaignresource_getpages": ".getPages()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource.php:L51 | neighbors=[MarketingCampaignResource]
- "resources_marketingcampaignresource_marketingcampaignresource_table": ".table()" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource.php:L32 | neighbors=[MarketingCampaignResource]
- "resources_marketingcampaignresource_marketingcampaignresource_toarray": ".toArray()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Resources/MarketingCampaignResource.php:L13 | neighbors=[MarketingCampaignResource]
- "resources_matchprofileresource_matchprofileresource_form": ".form()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php:L28 | neighbors=[MatchProfileResource]
- "resources_matchprofileresource_matchprofileresource_geteloquentquery": ".getEloquentQuery()" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php:L38 | neighbors=[MatchProfileResource]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-197.json

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
