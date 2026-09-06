# Node Description Batch 180 of 212

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

- "contracts_settingdefinition_secret": "secret()" | kind=code-symbol | source=modules/settings/src/Contracts/SettingDefinition.php:L11 | neighbors=[SettingDefinition.php]
- "contracts_settingdefinition_validate": "validate()" | kind=code-symbol | source=modules/settings/src/Contracts/SettingDefinition.php:L9 | neighbors=[SettingDefinition.php]
- "contracts_transferauthorizer_allowed": "allowed()" | kind=code-symbol | source=modules/import-export/src/Contracts/TransferAuthorizer.php:L7 | neighbors=[TransferAuthorizer.php]
- "contracts_twofactorrecovery_recover": "recover()" | kind=code-symbol | source=modules/two-factor-authentication/src/Contracts/TwoFactorRecovery.php:L9 | neighbors=[TwoFactorRecovery.php]
- "contracts_zooplatransport_branchpropertylist": "branchPropertyList()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Contracts/ZooplaTransport.php:L13 | neighbors=[ZooplaTransport.php]
- "contracts_zooplatransport_removeproperty": "removeProperty()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Contracts/ZooplaTransport.php:L11 | neighbors=[ZooplaTransport.php]
- "contracts_zooplatransport_sendproperty": "sendProperty()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Contracts/ZooplaTransport.php:L9 | neighbors=[ZooplaTransport.php]
- "controllers_agencycontroller_agencycontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L48 | neighbors=[AgencyController]
- "controllers_agencycontroller_agencycontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L18 | neighbors=[AgencyController]
- "controllers_agencycontroller_agencycontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/AgencyController.php:L34 | neighbors=[AgencyController]
- "controllers_branchcontroller_branchcontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L64 | neighbors=[BranchController]
- "controllers_branchcontroller_branchcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L18 | neighbors=[BranchController]
- "controllers_branchcontroller_branchcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L42 | neighbors=[BranchController]
- "controllers_branchcontroller_branchcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L26 | neighbors=[BranchController]
- "controllers_branchcontroller_branchcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-core-api/src/Http/Controllers/BranchController.php:L49 | neighbors=[BranchController]
- "controllers_instructioncontroller_instructioncontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L52 | neighbors=[InstructionController]
- "controllers_instructioncontroller_instructioncontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L18 | neighbors=[InstructionController]
- "controllers_instructioncontroller_instructioncontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L36 | neighbors=[InstructionController]
- "controllers_instructioncontroller_instructioncontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L27 | neighbors=[InstructionController]
- "controllers_instructioncontroller_instructioncontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-instructions-api/src/Http/Controllers/InstructionController.php:L43 | neighbors=[InstructionController]
- "controllers_lettingcontroller_lettingcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L19 | neighbors=[LettingController]
- "controllers_lettingcontroller_lettingcontroller_recordfailure": ".recordFailure()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L61 | neighbors=[LettingController]
- "controllers_lettingcontroller_lettingcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L36 | neighbors=[LettingController]
- "controllers_lettingcontroller_lettingcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L27 | neighbors=[LettingController]
- "controllers_lettingcontroller_lettingcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L43 | neighbors=[LettingController]
- "controllers_lettingcontroller_lettingcontroller_updatedetails": ".updateDetails()" | kind=code-symbol | source=modules/real-estate-lettings-api/src/Http/Controllers/LettingController.php:L52 | neighbors=[LettingController]
- "controllers_listingcontroller_listingcontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L52 | neighbors=[ListingController]
- "controllers_listingcontroller_listingcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L18 | neighbors=[ListingController]
- "controllers_listingcontroller_listingcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L36 | neighbors=[ListingController]
- "controllers_listingcontroller_listingcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L27 | neighbors=[ListingController]
- "controllers_listingcontroller_listingcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-listings-api/src/Http/Controllers/ListingController.php:L43 | neighbors=[ListingController]
- "controllers_managementrecordcontroller_managementrecordcontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L19 | neighbors=[ManagementRecordController]
- "controllers_managementrecordcontroller_managementrecordcontroller_recordfailure": ".recordFailure()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L61 | neighbors=[ManagementRecordController]
- "controllers_managementrecordcontroller_managementrecordcontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L36 | neighbors=[ManagementRecordController]
- "controllers_managementrecordcontroller_managementrecordcontroller_store": ".store()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L27 | neighbors=[ManagementRecordController]
- "controllers_managementrecordcontroller_managementrecordcontroller_update": ".update()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L43 | neighbors=[ManagementRecordController]
- "controllers_managementrecordcontroller_managementrecordcontroller_updatedetails": ".updateDetails()" | kind=code-symbol | source=modules/real-estate-property-management-api/src/Http/Controllers/ManagementRecordController.php:L52 | neighbors=[ManagementRecordController]
- "controllers_marketingcampaigncontroller_marketingcampaigncontroller_destroy": ".destroy()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L52 | neighbors=[MarketingCampaignController]
- "controllers_marketingcampaigncontroller_marketingcampaigncontroller_index": ".index()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L18 | neighbors=[MarketingCampaignController]
- "controllers_marketingcampaigncontroller_marketingcampaigncontroller_show": ".show()" | kind=code-symbol | source=modules/real-estate-marketing-api/src/Http/Controllers/MarketingCampaignController.php:L36 | neighbors=[MarketingCampaignController]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-179.json

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
