# Node Description Batch 179 of 212

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

- "contract_media_transformer": "Contract: MediaTransformer" | kind=entity | source=modules/files-media/README.md:src/Contracts/MediaTransformer.php | neighbors=[Liberu Files and Media]
- "contract_meta_transport": "Contract: MetaTransport" | kind=entity | source=modules/analytics-meta/README.md:src/Contracts/MetaTransport.php | neighbors=[Liberu Meta Server-Side Tracking]
- "contract_registration_policy": "Contract: RegistrationPolicy" | kind=entity | source=modules/identity-core/README.md:src/Contracts/RegistrationPolicy.php | neighbors=[Liberu Identity]
- "contract_transfer_authorizer": "Contract: TransferAuthorizer" | kind=entity | source=modules/import-export/README.md:src/Contracts/TransferAuthorizer.php | neighbors=[Liberu Import and Export]
- "contracts_activityauthorizer_allowed": "allowed()" | kind=code-symbol | source=modules/activity-comments/src/Contracts/ActivityAuthorizer.php:L7 | neighbors=[ActivityAuthorizer.php]
- "contracts_auditrecorder_record": "record()" | kind=code-symbol | source=modules/audit/src/Contracts/AuditRecorder.php:L9 | neighbors=[AuditRecorder.php]
- "contracts_clock_now": "now()" | kind=code-symbol | source=modules/application/src/Contracts/Clock.php:L7 | neighbors=[Clock.php]
- "contracts_connectedaccountowner_ownsconnectedaccount": "ownsConnectedAccount()" | kind=code-symbol | source=modules/identity-socialstream/src/Contracts/ConnectedAccountOwner.php:L8 | neighbors=[ConnectedAccountOwner.php]
- "contracts_exchangerateprovider_rate": "rate()" | kind=code-symbol | source=modules/currency-context/src/Contracts/ExchangeRateProvider.php:L11 | neighbors=[ExchangeRateProvider.php]
- "contracts_googletransport_send": "send()" | kind=code-symbol | source=modules/analytics-google/src/Contracts/GoogleTransport.php:L7 | neighbors=[GoogleTransport.php]
- "contracts_identifierfactory_make": "make()" | kind=code-symbol | source=modules/application/src/Contracts/IdentifierFactory.php:L7 | neighbors=[IdentifierFactory.php]
- "contracts_integrationadapter_capabilities": "capabilities()" | kind=code-symbol | source=modules/integrations/src/Contracts/IntegrationAdapter.php:L9 | neighbors=[IntegrationAdapter.php]
- "contracts_integrationadapter_name": "name()" | kind=code-symbol | source=modules/integrations/src/Contracts/IntegrationAdapter.php:L7 | neighbors=[IntegrationAdapter.php]
- "contracts_integrationadapter_test": "test()" | kind=code-symbol | source=modules/integrations/src/Contracts/IntegrationAdapter.php:L11 | neighbors=[IntegrationAdapter.php]
- "contracts_invitationvalidator_valid": "valid()" | kind=code-symbol | source=modules/identity-core/src/Contracts/InvitationValidator.php:L7 | neighbors=[InvitationValidator.php]
- "contracts_malwarescanner_clean": "clean()" | kind=code-symbol | source=modules/files-media/src/Contracts/MalwareScanner.php:L7 | neighbors=[MalwareScanner.php]
- "contracts_mediaaccess_authorized": "authorized()" | kind=code-symbol | source=modules/files-media/src/Contracts/MediaAccess.php:L7 | neighbors=[MediaAccess.php]
- "contracts_mediatransformer_transform": "transform()" | kind=code-symbol | source=modules/files-media/src/Contracts/MediaTransformer.php:L7 | neighbors=[MediaTransformer.php]
- "contracts_metatransport_send": "send()" | kind=code-symbol | source=modules/analytics-meta/src/Contracts/MetaTransport.php:L7 | neighbors=[MetaTransport.php]
- "contracts_metrics_increment": "increment()" | kind=code-symbol | source=modules/observability/src/Contracts/Metrics.php:L7 | neighbors=[Metrics.php]
- "contracts_metrics_observe": "observe()" | kind=code-symbol | source=modules/observability/src/Contracts/Metrics.php:L9 | neighbors=[Metrics.php]
- "contracts_observabilityactor_isadmin": "isAdmin()" | kind=code-symbol | source=modules/observability/src/Contracts/ObservabilityActor.php:L7 | neighbors=[ObservabilityActor.php]
- "contracts_onthemarkettransport_branchpropertylist": "branchPropertyList()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Contracts/OnTheMarketTransport.php:L13 | neighbors=[OnTheMarketTransport.php]
- "contracts_onthemarkettransport_removeproperty": "removeProperty()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Contracts/OnTheMarketTransport.php:L11 | neighbors=[OnTheMarketTransport.php]
- "contracts_onthemarkettransport_sendproperty": "sendProperty()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Contracts/OnTheMarketTransport.php:L9 | neighbors=[OnTheMarketTransport.php]
- "contracts_organizationactor_belongstoteam": "belongsToTeam()" | kind=code-symbol | source=modules/organizations-teams/src/Contracts/OrganizationActor.php:L8 | neighbors=[OrganizationActor.php]
- "contracts_organizationactor_ownsteam": "ownsTeam()" | kind=code-symbol | source=modules/organizations-teams/src/Contracts/OrganizationActor.php:L11 | neighbors=[OrganizationActor.php]
- "contracts_privilegedactor_authorizationidentifier": "authorizationIdentifier()" | kind=code-symbol | source=modules/roles-permissions/src/Contracts/PrivilegedActor.php:L7 | neighbors=[PrivilegedActor.php]
- "contracts_privilegedactor_authorizationtype": "authorizationType()" | kind=code-symbol | source=modules/roles-permissions/src/Contracts/PrivilegedActor.php:L9 | neighbors=[PrivilegedActor.php]
- "contracts_privilegedactor_hasroleinanyteam": "hasRoleInAnyTeam()" | kind=code-symbol | source=modules/roles-permissions/src/Contracts/PrivilegedActor.php:L12 | neighbors=[PrivilegedActor.php]
- "contracts_privilegedactor_issuperadmin": "isSuperAdmin()" | kind=code-symbol | source=modules/roles-permissions/src/Contracts/PrivilegedActor.php:L14 | neighbors=[PrivilegedActor.php]
- "contracts_registrationpolicy_permitsselfregistration": "permitsSelfRegistration()" | kind=code-symbol | source=modules/identity-core/src/Contracts/RegistrationPolicy.php:L7 | neighbors=[RegistrationPolicy.php]
- "contracts_registrationpolicy_requiresinvitation": "requiresInvitation()" | kind=code-symbol | source=modules/identity-core/src/Contracts/RegistrationPolicy.php:L9 | neighbors=[RegistrationPolicy.php]
- "contracts_rightmovetransport_branchpropertylist": "branchPropertyList()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Contracts/RightmoveTransport.php:L13 | neighbors=[RightmoveTransport.php]
- "contracts_rightmovetransport_removeproperty": "removeProperty()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Contracts/RightmoveTransport.php:L11 | neighbors=[RightmoveTransport.php]
- "contracts_rightmovetransport_sendproperty": "sendProperty()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Contracts/RightmoveTransport.php:L9 | neighbors=[RightmoveTransport.php]
- "contracts_searchindexer_flush": "flush()" | kind=code-symbol | source=modules/search/src/Contracts/SearchIndexer.php:L13 | neighbors=[SearchIndexer.php]
- "contracts_searchindexer_index": "index()" | kind=code-symbol | source=modules/search/src/Contracts/SearchIndexer.php:L9 | neighbors=[SearchIndexer.php]
- "contracts_searchindexer_remove": "remove()" | kind=code-symbol | source=modules/search/src/Contracts/SearchIndexer.php:L11 | neighbors=[SearchIndexer.php]
- "contracts_settingdefinition_key": "key()" | kind=code-symbol | source=modules/settings/src/Contracts/SettingDefinition.php:L7 | neighbors=[SettingDefinition.php]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-178.json

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
