# Node Description Batch 116 of 212

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

- "views_valuation_list_blade": "valuation-list.blade.php" | kind=code-symbol | source=modules/real-estate-valuations-livewire/resources/views/valuation-list.blade.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3172546 Add valuations Filament and Liv…, d07b218 Harden real estate Livewire lis…]
- "views_welcome_blade": "welcome.blade.php" | kind=code-symbol | source=resources/views/welcome.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, system]
- "views_zoopla_sync_list_blade": "zoopla-sync-list.blade.php" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/resources/views/zoopla-sync-list.blade.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…]
- "website_feed": "Website feed (phase 1 deliverable)" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Real Estate capability: Listings, Real Estate capability: Portals and Rep…, Delivery phase 1: core transaction chai…]
- "actions_acceptinvitation": "AcceptInvitation.php" | kind=code-symbol | source=modules/organizations-teams/src/Actions/AcceptInvitation.php:L1 | neighbors=[AcceptInvitation, 75f7818 Bootstrap application from Libe…]
- "actions_acceptinvitation_acceptinvitation": "AcceptInvitation" | kind=code-symbol | source=modules/organizations-teams/src/Actions/AcceptInvitation.php:L9 | neighbors=[AcceptInvitation.php, .handle()]
- "actions_actions_restorepreviouslyfocusedelement": "restorePreviouslyFocusedElement()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js, syncActionModals()]
- "actions_createconnectedaccount": "CreateConnectedAccount.php" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateConnectedAccount.php:L1 | neighbors=[CreateConnectedAccount, 75f7818 Bootstrap application from Libe…]
- "actions_createconnectedaccount_createconnectedaccount": "CreateConnectedAccount" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateConnectedAccount.php:L12 | neighbors=[CreateConnectedAccount.php, .create()]
- "actions_createuserfromprovider": "CreateUserFromProvider.php" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateUserFromProvider.php:L1 | neighbors=[CreateUserFromProvider, 75f7818 Bootstrap application from Libe…]
- "actions_createuserfromprovider_createuserfromprovider_create": ".create()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateUserFromProvider.php:L31 | neighbors=[CreateUserFromProvider, .createTeam()]
- "actions_createuserfromprovider_createuserfromprovider_createteam": ".createTeam()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateUserFromProvider.php:L57 | neighbors=[CreateUserFromProvider, .create()]
- "actions_generateredirectforprovider": "GenerateRedirectForProvider.php" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/GenerateRedirectForProvider.php:L1 | neighbors=[GenerateRedirectForProvider, 75f7818 Bootstrap application from Libe…]
- "actions_generateredirectforprovider_generateredirectforprovider": "GenerateRedirectForProvider" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/GenerateRedirectForProvider.php:L9 | neighbors=[GenerateRedirectForProvider.php, .generate()]
- "actions_handleinvalidstate": "HandleInvalidState.php" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/HandleInvalidState.php:L1 | neighbors=[HandleInvalidState, 75f7818 Bootstrap application from Libe…]
- "actions_handleinvalidstate_handleinvalidstate": "HandleInvalidState" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/HandleInvalidState.php:L9 | neighbors=[HandleInvalidState.php, .handle()]
- "actions_invitemember": "InviteMember.php" | kind=code-symbol | source=modules/organizations-teams/src/Actions/InviteMember.php:L1 | neighbors=[InviteMember, 75f7818 Bootstrap application from Libe…]
- "actions_invitemember_invitemember": "InviteMember" | kind=code-symbol | source=modules/organizations-teams/src/Actions/InviteMember.php:L8 | neighbors=[InviteMember.php, .handle()]
- "actions_resolvesocialiteuser": "ResolveSocialiteUser.php" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/ResolveSocialiteUser.php:L1 | neighbors=[ResolveSocialiteUser, 75f7818 Bootstrap application from Libe…]
- "actions_resolvesocialiteuser_resolvesocialiteuser": "ResolveSocialiteUser" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/ResolveSocialiteUser.php:L11 | neighbors=[ResolveSocialiteUser.php, .resolve()]
- "actions_transferownership": "TransferOwnership.php" | kind=code-symbol | source=modules/organizations-teams/src/Actions/TransferOwnership.php:L1 | neighbors=[TransferOwnership, 75f7818 Bootstrap application from Libe…]
- "actions_transferownership_transferownership": "TransferOwnership" | kind=code-symbol | source=modules/organizations-teams/src/Actions/TransferOwnership.php:L9 | neighbors=[TransferOwnership.php, .handle()]
- "actions_updateconnectedaccount": "UpdateConnectedAccount.php" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/UpdateConnectedAccount.php:L1 | neighbors=[UpdateConnectedAccount, 75f7818 Bootstrap application from Libe…]
- "actions_updateprofile": "UpdateProfile.php" | kind=code-symbol | source=modules/profiles/src/Actions/UpdateProfile.php:L1 | neighbors=[UpdateProfile, 75f7818 Bootstrap application from Libe…]
- "actions_updateprofile_updateprofile": "UpdateProfile" | kind=code-symbol | source=modules/profiles/src/Actions/UpdateProfile.php:L8 | neighbors=[UpdateProfile.php, .handle()]
- "api_pagination_meta_schema": "Shared PaginationMeta Schema" | kind=entity | source=modules/real-estate-listings-api/openapi/v1/real-estate-listings.yaml | neighbors=[API Error Schema, Real Estate Zoopla Sync API (OpenAPI v1)]
- "application_calculatecomparables_calculatecomparables": "CalculateComparables" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CalculateComparables.php:L10 | neighbors=[CalculateComparables.php, .handle()]
- "application_cancelviewing_cancelviewing": "CancelViewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CancelViewing.php:L12 | neighbors=[CancelViewing.php, .handle()]
- "application_completevaluation_completevaluation": "CompleteValuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CompleteValuation.php:L12 | neighbors=[CompleteValuation.php, .handle()]
- "application_completeviewing_completeviewing": "CompleteViewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CompleteViewing.php:L12 | neighbors=[CompleteViewing.php, .handle()]
- "application_confirmviewing_confirmviewing": "ConfirmViewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/ConfirmViewing.php:L12 | neighbors=[ConfirmViewing.php, .handle()]
- "application_convertvaluation_convertvaluation": "ConvertValuation" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/ConvertValuation.php:L12 | neighbors=[ConvertValuation.php, .handle()]
- "application_createagency_createagency": "CreateAgency" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateAgency.php:L11 | neighbors=[CreateAgency.php, .handle()]
- "application_createbranch": "CreateBranch.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateBranch.php:L1 | neighbors=[CreateBranch, 0b733c9 Add real estate core module sur…]
- "application_createbranch_createbranch": "CreateBranch" | kind=code-symbol | source=modules/real-estate-core/src/Application/CreateBranch.php:L11 | neighbors=[CreateBranch.php, .handle()]
- "application_createinstruction_createinstruction": "CreateInstruction" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/CreateInstruction.php:L12 | neighbors=[CreateInstruction.php, .handle()]
- "application_createletting_createletting": "CreateLetting" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/CreateLetting.php:L14 | neighbors=[CreateLetting.php, .handle()]
- "application_createlisting_createlisting": "CreateListing" | kind=code-symbol | source=modules/real-estate-listings/src/Application/CreateListing.php:L12 | neighbors=[CreateListing.php, .handle()]
- "application_createmanagementrecord_createmanagementrecord": "CreateManagementRecord" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/CreateManagementRecord.php:L14 | neighbors=[CreateManagementRecord.php, .handle()]
- "application_createmarketingcampaign_createmarketingcampaign": "CreateMarketingCampaign" | kind=code-symbol | source=modules/real-estate-marketing/src/Application/CreateMarketingCampaign.php:L12 | neighbors=[CreateMarketingCampaign.php, .handle()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-115.json

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
