# Node Description Batch 163 of 212

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

- "bursteri_socialstream_package": "bursteri/socialstream ^7.0" | kind=entity | source=modules/identity-socialstream/README.md | neighbors=[Liberu Social Identity]
- "cache_modules_command": "CacheModulesCommand" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager]
- "cache_registrycache_registrycache_clear": ".clear()" | kind=code-symbol | source=modules/module-manager/src/Cache/RegistryCache.php:L45 | neighbors=[RegistryCache]
- "cache_registrycache_registrycache_construct": ".__construct()" | kind=code-symbol | source=modules/module-manager/src/Cache/RegistryCache.php:L14 | neighbors=[RegistryCache]
- "cache_registrycache_registrycache_load": ".load()" | kind=code-symbol | source=modules/module-manager/src/Cache/RegistryCache.php:L19 | neighbors=[RegistryCache]
- "cache_registrycache_registrycache_write": ".write()" | kind=code-symbol | source=modules/module-manager/src/Cache/RegistryCache.php:L33 | neighbors=[RegistryCache]
- "cache_themecache_themecache_clear": ".clear()" | kind=code-symbol | source=modules/theme-support/src/Cache/ThemeCache.php:L35 | neighbors=[ThemeCache]
- "cache_themecache_themecache_construct": ".__construct()" | kind=code-symbol | source=modules/theme-support/src/Cache/ThemeCache.php:L12 | neighbors=[ThemeCache]
- "cache_themecache_themecache_load": ".load()" | kind=code-symbol | source=modules/theme-support/src/Cache/ThemeCache.php:L17 | neighbors=[ThemeCache]
- "cache_themecache_themecache_write": ".write()" | kind=code-symbol | source=modules/theme-support/src/Cache/ThemeCache.php:L27 | neighbors=[ThemeCache]
- "cap_foundation_localization_livewire": "Capability: foundation.localization.livewire" | kind=entity | source=modules/localization-core-livewire/README.md | neighbors=[Liberu Localization Livewire]
- "cap_foundation_module_manager_filament": "Capability: foundation.module-manager.filament" | kind=entity | source=modules/module-manager-filament/README.md | neighbors=[Liberu Module Manager Administration]
- "cap_foundation_modules": "Capability: foundation.modules" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager]
- "cap_foundation_notifications": "Capability: foundation.notifications" | kind=entity | source=modules/notifications/README.md | neighbors=[Liberu Notifications]
- "cap_foundation_observability": "Capability: foundation.observability" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Observability]
- "cap_foundation_organizations": "Capability: foundation.organizations" | kind=entity | source=modules/organizations-teams/README.md | neighbors=[liberusoftware/organizations-teams]
- "cap_foundation_organizations_filament": "Capability: foundation.organizations.filament" | kind=entity | source=modules/organizations-teams-filament/README.md | neighbors=[Liberu Organizations Administration]
- "cap_foundation_scheduler_queues": "Capability: foundation.scheduler-queues" | kind=entity | source=modules/scheduler-queues/README.md:Capabilities | neighbors=[Liberu Scheduler and Queues]
- "cap_foundation_webhooks": "Capability: foundation.webhooks" | kind=entity | source=modules/webhooks/README.md:Capabilities | neighbors=[Liberu Webhooks]
- "cap_identity_two_factor": "Capability: identity.two-factor" | kind=entity | source=modules/two-factor-authentication/README.md:Capabilities | neighbors=[Liberu Two-Factor Authentication]
- "cap_localization_machine_translation_mymemory": "Capability: localization.machine-translation.mymemory" | kind=entity | source=modules/localization-mymemory/README.md | neighbors=[Liberu MyMemory Translation]
- "capability_analytics_google": "Capability: analytics.google" | kind=entity | source=modules/analytics-google/README.md | neighbors=[Liberu Google Analytics]
- "capability_analytics_meta": "Capability: analytics.meta" | kind=entity | source=modules/analytics-meta/README.md | neighbors=[Liberu Meta Server-Side Tracking]
- "capability_analytics_route": "Capability: analytics.route" | kind=entity | source=modules/analytics-core/README.md | neighbors=[Liberu Analytics Core]
- "capability_blog_publish": "Optional capability: blog.publish" | kind=entity | source=themes/clear-signal/README.md | neighbors=[clear-signal theme (Clear Signal)]
- "capability_foundation_activity_comments": "Capability: foundation.activity-comments" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Liberu Activity and Comments]
- "capability_foundation_api_access": "Capability: foundation.api-access" | kind=entity | source=modules/api-access/README.md | neighbors=[Liberu API Access]
- "capability_foundation_application_core": "Capability: foundation.application-core" | kind=entity | source=modules/application/README.md | neighbors=[Liberu Application Core]
- "capability_foundation_audit": "Capability: foundation.audit" | kind=entity | source=modules/audit/README.md | neighbors=[Liberu Audit]
- "capability_foundation_currency": "Capability: foundation.currency" | kind=entity | source=modules/currency-context/README.md | neighbors=[Liberu Currency Context]
- "capability_foundation_developer_experience": "Capability: foundation.developer-experience" | kind=entity | source=modules/developer-experience/README.md | neighbors=[Liberu Developer Experience]
- "capability_foundation_feature_flags": "Capability: foundation.feature-flags" | kind=entity | source=modules/feature-flags/README.md | neighbors=[Liberu Feature Flags]
- "capability_foundation_files_media": "Capability: foundation.files-media" | kind=entity | source=modules/files-media/README.md | neighbors=[Liberu Files and Media]
- "capability_foundation_identity_filament": "Capability: foundation.identity.filament" | kind=entity | source=modules/identity-core-filament/README.md | neighbors=[Liberu Identity Administration (identit…]
- "capability_foundation_import_export": "Capability: foundation.import-export" | kind=entity | source=modules/import-export/README.md | neighbors=[Liberu Import and Export]
- "capability_foundation_integrations": "Capability: foundation.integrations" | kind=entity | source=modules/integrations/README.md | neighbors=[Liberu Integrations]
- "capability_foundation_jetstream_bridge": "Capability: foundation.jetstream-bridge" | kind=entity | source=modules/jetstream-bridge/README.md | neighbors=[Liberu Jetstream Bridge]
- "capability_identity_authenticate": "Capability: identity.authenticate" | kind=entity | source=modules/identity-core/README.md | neighbors=[Liberu Identity]
- "capability_identity_recover": "Capability: identity.recover" | kind=entity | source=modules/identity-core/README.md | neighbors=[Liberu Identity]
- "capability_identity_socialstream": "Capability: identity.socialstream" | kind=entity | source=modules/identity-socialstream/README.md | neighbors=[Liberu Social Identity]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-162.json

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
