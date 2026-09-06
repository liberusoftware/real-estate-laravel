# Node Description Batch 193 of 212

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

- "models_user_user_canaccesstenant": ".canAccessTenant()" | kind=code-symbol | source=app/Models/User.php:L135 | neighbors=[User]
- "models_user_user_getactivitylogoptions": ".getActivitylogOptions()" | kind=code-symbol | source=app/Models/User.php:L211 | neighbors=[User]
- "models_user_user_getdefaulttenant": ".getDefaultTenant()" | kind=code-symbol | source=app/Models/User.php:L195 | neighbors=[User]
- "models_user_user_gettenants": ".getTenants()" | kind=code-symbol | source=app/Models/User.php:L130 | neighbors=[User]
- "models_user_user_latestteam": ".latestTeam()" | kind=code-symbol | source=app/Models/User.php:L203 | neighbors=[User]
- "models_user_user_profilephotourl": ".profilePhotoUrl()" | kind=code-symbol | source=app/Models/User.php:L117 | neighbors=[User]
- "models_valuation_valuation_cantransitionto": ".canTransitionTo()" | kind=code-symbol | source=modules/real-estate-valuations/src/Models/Valuation.php:L29 | neighbors=[Valuation]
- "models_valuation_valuation_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-valuations/src/Models/Valuation.php:L19 | neighbors=[Valuation]
- "models_valuation_valuation_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-valuations/src/Models/Valuation.php:L24 | neighbors=[Valuation]
- "models_viewing_viewing_cantransitionto": ".canTransitionTo()" | kind=code-symbol | source=modules/real-estate-viewings/src/Models/Viewing.php:L29 | neighbors=[Viewing]
- "models_viewing_viewing_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-viewings/src/Models/Viewing.php:L19 | neighbors=[Viewing]
- "models_viewing_viewing_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-viewings/src/Models/Viewing.php:L24 | neighbors=[Viewing]
- "models_zooplasync_zooplasync_casts": ".casts()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Models/ZooplaSync.php:L20 | neighbors=[ZooplaSync]
- "models_zooplasync_zooplasync_scopeforteam": ".scopeForTeam()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Models/ZooplaSync.php:L25 | neighbors=[ZooplaSync]
- "module_category_presentation": "Module category: presentation" | kind=entity | source=modules/identity-core-filament/README.md | neighbors=[Liberu Identity Administration (identit…]
- "module_status_command": "ModuleStatusCommand" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager]
- "notification_templates_and_inbox": "Notification Templates and Inbox Tables" | kind=entity | source=modules/notifications/README.md | neighbors=[Liberu Notifications]
- "notifications_notifications_body": "body()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_close": "close()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_color": "color()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_disabled": "disabled()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_dispatchdirection": "dispatchDirection()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_dispatchtocomponent": "dispatchToComponent()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_extraattributes": "extraAttributes()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_icon": "icon()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_iconcolor": "iconColor()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_iconposition": "iconPosition()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_id": "id()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_label": "label()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_markasread": "markAsRead()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_markasunread": "markAsUnread()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_openurlinnewtab": "openUrlInNewTab()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_outlined": "outlined()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_size": "size()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_title": "title()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_tooltip": "tooltip()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_url": "url()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "notifications_notifications_viewdata": "viewData()" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[notifications.js]
- "offer_transition_endpoints": "Offer Transition, Proof and Timeline Operations" | kind=entity | source=modules/real-estate-offers-api/openapi/v1/real-estate-offers.yaml | neighbors=[Idempotency-Key Header]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-192.json

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
