# Node Description Batch 210 of 212

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

- "support_metadestination_metadestination_name": ".name()" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaDestination.php:L13 | neighbors=[MetaDestination]
- "support_notificationpolicy_notificationpolicy_channels": ".channels()" | kind=code-symbol | source=modules/notifications/src/Support/NotificationPolicy.php:L10 | neighbors=[NotificationPolicy]
- "support_notificationpolicy_notificationpolicy_isquiet": ".isQuiet()" | kind=code-symbol | source=modules/notifications/src/Support/NotificationPolicy.php:L17 | neighbors=[NotificationPolicy]
- "support_nullmetrics_nullmetrics_increment": ".increment()" | kind=code-symbol | source=modules/observability/src/Support/NullMetrics.php:L9 | neighbors=[NullMetrics]
- "support_nullmetrics_nullmetrics_observe": ".observe()" | kind=code-symbol | source=modules/observability/src/Support/NullMetrics.php:L11 | neighbors=[NullMetrics]
- "support_redactor_redactor_redact": ".redact()" | kind=code-symbol | source=modules/observability/src/Support/Redactor.php:L7 | neighbors=[Redactor]
- "support_rejectinginvitationvalidator_rejectinginvitationvalidator_valid": ".valid()" | kind=code-symbol | source=modules/identity-core/src/Support/RejectingInvitationValidator.php:L9 | neighbors=[RejectingInvitationValidator]
- "support_rejectingmalwarescanner_rejectingmalwarescanner_clean": ".clean()" | kind=code-symbol | source=modules/files-media/src/Support/RejectingMalwareScanner.php:L9 | neighbors=[RejectingMalwareScanner]
- "support_retryschedule_retryschedule_seconds": ".seconds()" | kind=code-symbol | source=modules/webhooks/src/Support/RetrySchedule.php:L7 | neighbors=[RetrySchedule]
- "support_sloregistry_sloregistry_all": ".all()" | kind=code-symbol | source=modules/observability/src/Support/SloRegistry.php:L18 | neighbors=[SloRegistry]
- "support_sloregistry_sloregistry_register": ".register()" | kind=code-symbol | source=modules/observability/src/Support/SloRegistry.php:L11 | neighbors=[SloRegistry]
- "support_support_acquirescrolllock": "acquireScrollLock()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js]
- "support_support_bs": "bs()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_di": "di()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_dr": "Dr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_focusinput": "focusInput()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js]
- "support_support_ga": "Ga()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_getfirstemptyinputindex": "getFirstEmptyInputIndex()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js]
- "support_support_gs": "gs()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_istopmost": "isTopmost()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js]
- "support_support_mi": "mi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_mo": "Mo()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_oi": "Oi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_onend": "onEnd()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_p": "p()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js]
- "support_support_qa": "qa()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_ra": "Ra()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_rt": "Rt()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js]
- "support_support_setuptextselectioncloseprevention": "setUpTextSelectionClosePrevention()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js]
- "support_support_ua": "Ua()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_va": "Va()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_xs": "xs()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_ya": "Ya()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js]
- "support_support_z": "Z()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js]
- "support_support_ze": "ze()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js]
- "support_systemclock_systemclock_now": ".now()" | kind=code-symbol | source=modules/application/src/Support/SystemClock.php:L9 | neighbors=[SystemClock]
- "support_themecolors_themecolors_construct": ".__construct()" | kind=code-symbol | source=app/Support/ThemeColors.php:L10 | neighbors=[ThemeColors]
- "support_themecolors_themecolors_forsite": ".forSite()" | kind=code-symbol | source=app/Support/ThemeColors.php:L12 | neighbors=[ThemeColors]
- "support_uploadpolicy_uploadpolicy_assert": ".assert()" | kind=code-symbol | source=modules/files-media/src/Support/UploadPolicy.php:L10 | neighbors=[UploadPolicy]
- "support_uuididentifierfactory_uuididentifierfactory_make": ".make()" | kind=code-symbol | source=modules/application/src/Support/UuidIdentifierFactory.php:L10 | neighbors=[UuidIdentifierFactory]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-209.json

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
