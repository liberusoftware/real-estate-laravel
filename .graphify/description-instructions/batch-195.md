# Node Description Batch 196 of 212

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

- "pkg_filament_spatie_laravel_settings_plugin": "filament/spatie-laravel-settings-plugin ^5.0" | kind=entity | source=modules/settings-filament/README.md:Requirements and installation | neighbors=[Liberu Settings Administration]
- "pkg_spatie_laravel_permission": "spatie/laravel-permission ^7.0" | kind=entity | source=modules/roles-permissions/README.md:Requirements and installation | neighbors=[liberusoftware/roles-permissions]
- "pkg_spatie_laravel_settings": "spatie/laravel-settings ^3.0" | kind=entity | source=modules/settings/README.md:Requirements and installation | neighbors=[Liberu Settings]
- "pkg_theme_base": "liberusoftware/theme-base" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base)]
- "pkg_theme_clear_signal": "liberusoftware/theme-clear-signal" | kind=entity | source=themes/clear-signal/README.md | neighbors=[clear-signal theme (Clear Signal)]
- "pkg_theme_dark": "liberusoftware/theme-dark" | kind=entity | source=themes/dark/README.md | neighbors=[dark theme (Liberu Dark)]
- "pkg_theme_default": "liberusoftware/theme-default" | kind=entity | source=themes/default/README.md | neighbors=[default theme (Liberu Default)]
- "pkg_theme_real_estate_default": "liberusoftware/theme-real-estate-default" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "policies_connectedaccountpolicy_connectedaccountpolicy_create": ".create()" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L32 | neighbors=[ConnectedAccountPolicy]
- "policies_connectedaccountpolicy_connectedaccountpolicy_delete": ".delete()" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L48 | neighbors=[ConnectedAccountPolicy]
- "policies_connectedaccountpolicy_connectedaccountpolicy_update": ".update()" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L40 | neighbors=[ConnectedAccountPolicy]
- "policies_connectedaccountpolicy_connectedaccountpolicy_view": ".view()" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L24 | neighbors=[ConnectedAccountPolicy]
- "policies_connectedaccountpolicy_connectedaccountpolicy_viewany": ".viewAny()" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L16 | neighbors=[ConnectedAccountPolicy]
- "policies_rolepolicy_rolepolicy_create": ".create()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L25 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_delete": ".delete()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L35 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_deleteany": ".deleteAny()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L40 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_forcedelete": ".forceDelete()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L50 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_forcedeleteany": ".forceDeleteAny()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L55 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_reorder": ".reorder()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L70 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_replicate": ".replicate()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L65 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_restore": ".restore()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L45 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_restoreany": ".restoreAny()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L60 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_update": ".update()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L30 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_view": ".view()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L20 | neighbors=[RolePolicy]
- "policies_rolepolicy_rolepolicy_viewany": ".viewAny()" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L15 | neighbors=[RolePolicy]
- "policies_teampolicy_teampolicy_create": ".create()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L25 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_delete": ".delete()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L35 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_deleteany": ".deleteAny()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L40 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_forcedelete": ".forceDelete()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L50 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_forcedeleteany": ".forceDeleteAny()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L55 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_reorder": ".reorder()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L70 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_replicate": ".replicate()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L65 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_restore": ".restore()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L45 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_restoreany": ".restoreAny()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L60 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_update": ".update()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L30 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_view": ".view()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L20 | neighbors=[TeamPolicy]
- "policies_teampolicy_teampolicy_viewany": ".viewAny()" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L15 | neighbors=[TeamPolicy]
- "properties_show_blade": "show.blade.php" | kind=code-symbol | source=themes/real-estate-default/resources/views/modules/real-estate/properties/show.blade.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "providers_fortifyserviceprovider_fortifyserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/jetstream-bridge/src/Providers/FortifyServiceProvider.php:L31 | neighbors=[FortifyServiceProvider]
- "providers_fortifyserviceprovider_fortifyserviceprovider_register": ".register()" | kind=code-symbol | source=modules/jetstream-bridge/src/Providers/FortifyServiceProvider.php:L23 | neighbors=[FortifyServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-195.json

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
