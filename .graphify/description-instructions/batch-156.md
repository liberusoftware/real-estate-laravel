# Node Description Batch 157 of 212

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

- "support_databaseauditrecorder": "DatabaseAuditRecorder.php" | kind=code-symbol | source=modules/audit/src/Support/DatabaseAuditRecorder.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DatabaseAuditRecorder]
- "support_databaseauditrecorder_databaseauditrecorder": "DatabaseAuditRecorder" | kind=code-symbol | source=modules/audit/src/Support/DatabaseAuditRecorder.php:L8 | neighbors=[DatabaseAuditRecorder.php, .record()]
- "support_deliveryretry": "DeliveryRetry.php" | kind=code-symbol | source=modules/notifications/src/Support/DeliveryRetry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DeliveryRetry]
- "support_destinationregistry": "DestinationRegistry.php" | kind=code-symbol | source=modules/analytics-core/src/Support/DestinationRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DestinationRegistry]
- "support_environmentdoctor": "EnvironmentDoctor.php" | kind=code-symbol | source=modules/developer-experience/src/Support/EnvironmentDoctor.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EnvironmentDoctor]
- "support_environmentdoctor_environmentdoctor": "EnvironmentDoctor" | kind=code-symbol | source=modules/developer-experience/src/Support/EnvironmentDoctor.php:L5 | neighbors=[EnvironmentDoctor.php, .inspect()]
- "support_environmentvalidator": "EnvironmentValidator.php" | kind=code-symbol | source=modules/application/src/Support/EnvironmentValidator.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EnvironmentValidator]
- "support_environmentvalidator_environmentvalidator": "EnvironmentValidator" | kind=code-symbol | source=modules/application/src/Support/EnvironmentValidator.php:L7 | neighbors=[EnvironmentValidator.php, .validate()]
- "support_eventrouter": "EventRouter.php" | kind=code-symbol | source=modules/analytics-core/src/Support/EventRouter.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EventRouter]
- "support_eventsanitizer": "EventSanitizer.php" | kind=code-symbol | source=modules/analytics-core/src/Support/EventSanitizer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EventSanitizer]
- "support_flagevaluator": "FlagEvaluator.php" | kind=code-symbol | source=modules/feature-flags/src/Support/FlagEvaluator.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, FlagEvaluator]
- "support_flagevaluator_flagevaluator": "FlagEvaluator" | kind=code-symbol | source=modules/feature-flags/src/Support/FlagEvaluator.php:L5 | neighbors=[FlagEvaluator.php, .enabled()]
- "support_googledestination": "GoogleDestination.php" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleDestination.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, GoogleDestination]
- "support_googleeventmapper": "GoogleEventMapper.php" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleEventMapper.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, GoogleEventMapper]
- "support_googleeventmapper_googleeventmapper": "GoogleEventMapper" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleEventMapper.php:L8 | neighbors=[GoogleEventMapper.php, .map()]
- "support_idempotencystore": "IdempotencyStore.php" | kind=code-symbol | source=modules/api-access/src/Support/IdempotencyStore.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IdempotencyStore]
- "support_identifiernormalizer": "IdentifierNormalizer.php" | kind=code-symbol | source=modules/identity-core/src/Support/IdentifierNormalizer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IdentifierNormalizer]
- "support_identifiernormalizer_identifiernormalizer": "IdentifierNormalizer" | kind=code-symbol | source=modules/identity-core/src/Support/IdentifierNormalizer.php:L5 | neighbors=[IdentifierNormalizer.php, .email()]
- "support_integrationregistry": "IntegrationRegistry.php" | kind=code-symbol | source=modules/integrations/src/Support/IntegrationRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IntegrationRegistry]
- "support_jobpolicy": "JobPolicy.php" | kind=code-symbol | source=modules/scheduler-queues/src/Support/JobPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, JobPolicy]
- "support_metacustomernormalizer": "MetaCustomerNormalizer.php" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaCustomerNormalizer.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, MetaCustomerNormalizer]
- "support_metadestination": "MetaDestination.php" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaDestination.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, MetaDestination]
- "support_notificationpolicy": "NotificationPolicy.php" | kind=code-symbol | source=modules/notifications/src/Support/NotificationPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, NotificationPolicy]
- "support_nullmetrics": "NullMetrics.php" | kind=code-symbol | source=modules/observability/src/Support/NullMetrics.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, NullMetrics]
- "support_redactor": "Redactor.php" | kind=code-symbol | source=modules/observability/src/Support/Redactor.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Redactor]
- "support_redactor_redactor": "Redactor" | kind=code-symbol | source=modules/observability/src/Support/Redactor.php:L5 | neighbors=[Redactor.php, .redact()]
- "support_rejectinginvitationvalidator": "RejectingInvitationValidator.php" | kind=code-symbol | source=modules/identity-core/src/Support/RejectingInvitationValidator.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RejectingInvitationValidator]
- "support_rejectinginvitationvalidator_rejectinginvitationvalidator": "RejectingInvitationValidator" | kind=code-symbol | source=modules/identity-core/src/Support/RejectingInvitationValidator.php:L7 | neighbors=[RejectingInvitationValidator.php, .valid()]
- "support_rejectingmalwarescanner": "RejectingMalwareScanner.php" | kind=code-symbol | source=modules/files-media/src/Support/RejectingMalwareScanner.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RejectingMalwareScanner]
- "support_rejectingmalwarescanner_rejectingmalwarescanner": "RejectingMalwareScanner" | kind=code-symbol | source=modules/files-media/src/Support/RejectingMalwareScanner.php:L7 | neighbors=[RejectingMalwareScanner.php, .clean()]
- "support_retryschedule": "RetrySchedule.php" | kind=code-symbol | source=modules/webhooks/src/Support/RetrySchedule.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RetrySchedule]
- "support_retryschedule_retryschedule": "RetrySchedule" | kind=code-symbol | source=modules/webhooks/src/Support/RetrySchedule.php:L5 | neighbors=[RetrySchedule.php, .seconds()]
- "support_rowvalidator": "RowValidator.php" | kind=code-symbol | source=modules/import-export/src/Support/RowValidator.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RowValidator]
- "support_rowvalidator_rowvalidator_matches": ".matches()" | kind=code-symbol | source=modules/import-export/src/Support/RowValidator.php:L25 | neighbors=[RowValidator, .validate()]
- "support_rowvalidator_rowvalidator_validate": ".validate()" | kind=code-symbol | source=modules/import-export/src/Support/RowValidator.php:L10 | neighbors=[RowValidator, .matches()]
- "support_sloregistry": "SloRegistry.php" | kind=code-symbol | source=modules/observability/src/Support/SloRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SloRegistry]
- "support_support_ai": "ai()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Ka()]
- "support_support_ao": "Ao()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, as()]
- "support_support_b": "B()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, W()]
- "support_support_closequietly": "closeQuietly()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, close()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-156.json

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
