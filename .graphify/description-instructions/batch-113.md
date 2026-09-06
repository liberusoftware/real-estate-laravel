# Node Description Batch 114 of 212

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

- "stat_chart_yo": "yo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, rgbString(), et()]
- "stat_chart_zn": "zn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), _getLabelCapacity()]
- "stat_chart_zr": "zr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getMatchingVisibleMetas(), Kn()]
- "submit_packagist": "submit-packagist.php" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts, Non-interactive, fail-on-error commands, Packagist credentials from the environm…]
- "support_deliveryretry_deliveryretry": "DeliveryRetry" | kind=code-symbol | source=modules/notifications/src/Support/DeliveryRetry.php:L5 | neighbors=[DeliveryRetry.php, .delay(), .exhausted()]
- "support_eventrouter_eventrouter": "EventRouter" | kind=code-symbol | source=modules/analytics-core/src/Support/EventRouter.php:L7 | neighbors=[EventRouter.php, .__construct(), .route()]
- "support_eventsanitizer_eventsanitizer": "EventSanitizer" | kind=code-symbol | source=modules/analytics-core/src/Support/EventSanitizer.php:L5 | neighbors=[EventSanitizer.php, .pseudonymize(), .sanitize()]
- "support_idempotencystore_idempotencystore": "IdempotencyStore" | kind=code-symbol | source=modules/api-access/src/Support/IdempotencyStore.php:L8 | neighbors=[IdempotencyStore.php, .begin(), .complete()]
- "support_jobpolicy_jobpolicy": "JobPolicy" | kind=code-symbol | source=modules/scheduler-queues/src/Support/JobPolicy.php:L7 | neighbors=[JobPolicy.php, .assertIdempotencyKey(), .backoff()]
- "support_notificationpolicy_notificationpolicy": "NotificationPolicy" | kind=code-symbol | source=modules/notifications/src/Support/NotificationPolicy.php:L7 | neighbors=[NotificationPolicy.php, .channels(), .isQuiet()]
- "support_nullmetrics_nullmetrics": "NullMetrics" | kind=code-symbol | source=modules/observability/src/Support/NullMetrics.php:L7 | neighbors=[NullMetrics.php, .increment(), .observe()]
- "support_rowvalidator_rowvalidator": "RowValidator" | kind=code-symbol | source=modules/import-export/src/Support/RowValidator.php:L7 | neighbors=[RowValidator.php, .matches(), .validate()]
- "support_sloregistry_sloregistry": "SloRegistry" | kind=code-symbol | source=modules/observability/src/Support/SloRegistry.php:L7 | neighbors=[SloRegistry.php, .all(), .register()]
- "support_support_de": "de()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, m(), me()]
- "support_support_es": "es()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ts(), vt()]
- "support_support_fo": "fo()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, uo(), ja()]
- "support_support_fs": "fs()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Mt(), it()]
- "support_support_gettrigger": "getTrigger()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, setUpAria(), syncAria()]
- "support_support_go": "go()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, apply(), Mt()]
- "support_support_init": "init()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, distribute(), setUpAria()]
- "support_support_ir": "ir()" | kind=code-symbol | source=public/js/filament/support/support.js:L11 | neighbors=[support.js, Mt(), zt()]
- "support_support_l": "L()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, J(), c()]
- "support_support_oa": "Oa()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ct(), Vn()]
- "support_support_qr": "Qr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), cr()]
- "support_support_qt": "qt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, lr(), xt()]
- "support_support_releasescrolllock": "releaseScrollLock()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, close(), destroy()]
- "support_support_rs": "rs()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ns(), za()]
- "support_support_ui": "Ui()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ei(), fn()]
- "support_support_ut": "ut()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, _a(), r()]
- "support_support_ve": "ve()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, Ee(), Ge()]
- "support_support_vr": "Vr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, En(), Or()]
- "support_support_w": "W()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, B(), le()]
- "support_support_wo": "wo()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, sn(), Xe()]
- "support_support_wr": "Wr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, En(), At()]
- "support_support_ws": "ws()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Io(), Xe()]
- "support_support_xa": "xa()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, eo(), rn()]
- "support_support_xr": "Xr()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, le(), apply()]
- "support_support_ys": "ys()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Io(), Xe()]
- "support_theme_helpers_active_theme": "active_theme()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L20 | neighbors=[theme_helpers.php, theme(), theme_asset()]
- "support_theme_helpers_theme_asset": "theme_asset()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L30 | neighbors=[theme_helpers.php, active_theme(), theme()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-113.json

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
