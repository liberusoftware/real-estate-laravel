# Node Description Batch 209 of 212

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

- "stat_chart_tobase64image": "toBase64Image()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js]
- "stat_chart_toggledatavisibility": "toggleDataVisibility()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js]
- "stat_chart_type": "type()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js]
- "stat_chart_us": "Us()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js]
- "stat_chart_valid": "valid()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js]
- "support_auditcontext_auditcontext_construct": ".__construct()" | kind=code-symbol | source=modules/audit/src/Support/AuditContext.php:L7 | neighbors=[AuditContext]
- "support_configuredregistrationpolicy_configuredregistrationpolicy_construct": ".__construct()" | kind=code-symbol | source=modules/identity-core/src/Support/ConfiguredRegistrationPolicy.php:L9 | neighbors=[ConfiguredRegistrationPolicy]
- "support_configuredregistrationpolicy_configuredregistrationpolicy_permitsselfregistration": ".permitsSelfRegistration()" | kind=code-symbol | source=modules/identity-core/src/Support/ConfiguredRegistrationPolicy.php:L11 | neighbors=[ConfiguredRegistrationPolicy]
- "support_configuredregistrationpolicy_configuredregistrationpolicy_requiresinvitation": ".requiresInvitation()" | kind=code-symbol | source=modules/identity-core/src/Support/ConfiguredRegistrationPolicy.php:L16 | neighbors=[ConfiguredRegistrationPolicy]
- "support_consentpolicy_consentpolicy_permits": ".permits()" | kind=code-symbol | source=modules/analytics-core/src/Support/ConsentPolicy.php:L7 | neighbors=[ConsentPolicy]
- "support_databaseauditrecorder_databaseauditrecorder_record": ".record()" | kind=code-symbol | source=modules/audit/src/Support/DatabaseAuditRecorder.php:L10 | neighbors=[DatabaseAuditRecorder]
- "support_deliveryretry_deliveryretry_delay": ".delay()" | kind=code-symbol | source=modules/notifications/src/Support/DeliveryRetry.php:L7 | neighbors=[DeliveryRetry]
- "support_deliveryretry_deliveryretry_exhausted": ".exhausted()" | kind=code-symbol | source=modules/notifications/src/Support/DeliveryRetry.php:L12 | neighbors=[DeliveryRetry]
- "support_destinationregistry_destinationregistry_all": ".all()" | kind=code-symbol | source=modules/analytics-core/src/Support/DestinationRegistry.php:L25 | neighbors=[DestinationRegistry]
- "support_destinationregistry_destinationregistry_get": ".get()" | kind=code-symbol | source=modules/analytics-core/src/Support/DestinationRegistry.php:L20 | neighbors=[DestinationRegistry]
- "support_destinationregistry_destinationregistry_register": ".register()" | kind=code-symbol | source=modules/analytics-core/src/Support/DestinationRegistry.php:L13 | neighbors=[DestinationRegistry]
- "support_environmentdoctor_environmentdoctor_inspect": ".inspect()" | kind=code-symbol | source=modules/developer-experience/src/Support/EnvironmentDoctor.php:L8 | neighbors=[EnvironmentDoctor]
- "support_environmentvalidator_environmentvalidator_validate": ".validate()" | kind=code-symbol | source=modules/application/src/Support/EnvironmentValidator.php:L9 | neighbors=[EnvironmentValidator]
- "support_eventrouter_eventrouter_construct": ".__construct()" | kind=code-symbol | source=modules/analytics-core/src/Support/EventRouter.php:L9 | neighbors=[EventRouter]
- "support_eventrouter_eventrouter_route": ".route()" | kind=code-symbol | source=modules/analytics-core/src/Support/EventRouter.php:L11 | neighbors=[EventRouter]
- "support_eventsanitizer_eventsanitizer_pseudonymize": ".pseudonymize()" | kind=code-symbol | source=modules/analytics-core/src/Support/EventSanitizer.php:L13 | neighbors=[EventSanitizer]
- "support_eventsanitizer_eventsanitizer_sanitize": ".sanitize()" | kind=code-symbol | source=modules/analytics-core/src/Support/EventSanitizer.php:L8 | neighbors=[EventSanitizer]
- "support_flagevaluator_flagevaluator_enabled": ".enabled()" | kind=code-symbol | source=modules/feature-flags/src/Support/FlagEvaluator.php:L8 | neighbors=[FlagEvaluator]
- "support_googledestination_googledestination_construct": ".__construct()" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleDestination.php:L11 | neighbors=[GoogleDestination]
- "support_googledestination_googledestination_deliver": ".deliver()" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleDestination.php:L18 | neighbors=[GoogleDestination]
- "support_googledestination_googledestination_name": ".name()" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleDestination.php:L13 | neighbors=[GoogleDestination]
- "support_googleeventmapper_googleeventmapper_map": ".map()" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleEventMapper.php:L10 | neighbors=[GoogleEventMapper]
- "support_idempotencystore_idempotencystore_begin": ".begin()" | kind=code-symbol | source=modules/api-access/src/Support/IdempotencyStore.php:L10 | neighbors=[IdempotencyStore]
- "support_idempotencystore_idempotencystore_complete": ".complete()" | kind=code-symbol | source=modules/api-access/src/Support/IdempotencyStore.php:L23 | neighbors=[IdempotencyStore]
- "support_identifiernormalizer_identifiernormalizer_email": ".email()" | kind=code-symbol | source=modules/identity-core/src/Support/IdentifierNormalizer.php:L7 | neighbors=[IdentifierNormalizer]
- "support_integrationregistry_integrationregistry_all": ".all()" | kind=code-symbol | source=modules/integrations/src/Support/IntegrationRegistry.php:L24 | neighbors=[IntegrationRegistry]
- "support_integrationregistry_integrationregistry_get": ".get()" | kind=code-symbol | source=modules/integrations/src/Support/IntegrationRegistry.php:L19 | neighbors=[IntegrationRegistry]
- "support_integrationregistry_integrationregistry_register": ".register()" | kind=code-symbol | source=modules/integrations/src/Support/IntegrationRegistry.php:L12 | neighbors=[IntegrationRegistry]
- "support_jobpolicy_jobpolicy_assertidempotencykey": ".assertIdempotencyKey()" | kind=code-symbol | source=modules/scheduler-queues/src/Support/JobPolicy.php:L14 | neighbors=[JobPolicy]
- "support_jobpolicy_jobpolicy_backoff": ".backoff()" | kind=code-symbol | source=modules/scheduler-queues/src/Support/JobPolicy.php:L9 | neighbors=[JobPolicy]
- "support_metacustomernormalizer_metacustomernormalizer_email": ".email()" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaCustomerNormalizer.php:L7 | neighbors=[MetaCustomerNormalizer]
- "support_metacustomernormalizer_metacustomernormalizer_externalid": ".externalId()" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaCustomerNormalizer.php:L17 | neighbors=[MetaCustomerNormalizer]
- "support_metacustomernormalizer_metacustomernormalizer_phone": ".phone()" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaCustomerNormalizer.php:L12 | neighbors=[MetaCustomerNormalizer]
- "support_metadestination_metadestination_construct": ".__construct()" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaDestination.php:L11 | neighbors=[MetaDestination]
- "support_metadestination_metadestination_deliver": ".deliver()" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaDestination.php:L18 | neighbors=[MetaDestination]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-208.json

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
