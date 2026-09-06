# Node Description Batch 119 of 212

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

- "application_updateviewing_updateviewing": "UpdateViewing" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/UpdateViewing.php:L11 | neighbors=[UpdateViewing.php, .handle()]
- "application_updatezooplasync": "UpdateZooplaSync.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/UpdateZooplaSync.php:L1 | neighbors=[UpdateZooplaSync, 1cdd121 Add independent property portal…]
- "application_updatezooplasync_updatezooplasync": "UpdateZooplaSync" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/UpdateZooplaSync.php:L10 | neighbors=[UpdateZooplaSync.php, .handle()]
- "blocker_theme_discovery_not_composer_driven": "Blocker: theme discovery is not Composer-driven" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Conformance Step 5 — Test Redistribution, Handoff: Conformance Step 5 (Test Redis…]
- "cache_registrycache": "RegistryCache.php" | kind=code-symbol | source=modules/module-manager/src/Cache/RegistryCache.php:L1 | neighbors=[RegistryCache, 75f7818 Bootstrap application from Libe…]
- "cache_themecache": "ThemeCache.php" | kind=code-symbol | source=modules/theme-support/src/Cache/ThemeCache.php:L1 | neighbors=[ThemeCache, 75f7818 Bootstrap application from Libe…]
- "cap_foundation_authorization": "Capability: foundation.authorization" | kind=entity | source=modules/roles-permissions/README.md:Capabilities | neighbors=[Capability: foundation.authorization.fi…, liberusoftware/roles-permissions]
- "cap_foundation_authorization_filament": "Capability: foundation.authorization.filament" | kind=entity | source=modules/roles-permissions-filament/README.md:Capabilities | neighbors=[Capability: foundation.authorization, Liberu Authorization Filament]
- "cap_foundation_search": "Capability: foundation.search" | kind=entity | source=modules/search/README.md:Capabilities | neighbors=[Capability: foundation.search.api, Liberu Search]
- "cap_foundation_search_api": "Capability: foundation.search.api" | kind=entity | source=modules/search-api/README.md:Capabilities | neighbors=[Capability: foundation.search, Liberu Search API]
- "cap_foundation_sessions_devices_filament": "Capability: foundation.sessions-devices.filament" | kind=entity | source=modules/sessions-devices-filament/README.md:Capabilities | neighbors=[Capability: identity.sessions, Liberu Sessions and Devices Administrat…]
- "cap_foundation_settings": "Capability: foundation.settings" | kind=entity | source=modules/settings/README.md:Capabilities | neighbors=[Capability: foundation.settings.filament, Liberu Settings]
- "cap_foundation_settings_filament": "Capability: foundation.settings.filament" | kind=entity | source=modules/settings-filament/README.md:Capabilities | neighbors=[Capability: foundation.settings, Liberu Settings Administration]
- "cap_foundation_teams": "Capability: foundation.teams" | kind=entity | source=modules/organizations-teams/README.md | neighbors=[liberusoftware/organizations-teams, Team-Scoped Boundary]
- "cap_foundation_theme_support": "Capability: foundation.theme-support" | kind=entity | source=modules/theme-support/README.md:Capabilities | neighbors=[Capability: foundation.theme-support.li…, Liberu Theme Support]
- "cap_foundation_theme_support_livewire": "Capability: foundation.theme-support.livewire" | kind=entity | source=modules/theme-support-livewire/README.md:Capabilities | neighbors=[Capability: foundation.theme-support, Liberu Theme Support Livewire]
- "cap_identity_profiles": "Capability: identity.profiles" | kind=entity | source=modules/profiles/README.md | neighbors=[Capability: foundation.localization, Liberu Profiles]
- "cap_identity_sessions": "Capability: identity.sessions" | kind=entity | source=modules/sessions-devices/README.md:Capabilities | neighbors=[Capability: foundation.sessions-devices…, Liberu Sessions and Devices]
- "capability_boundary": "Capability Boundary Integration" | kind=entity | source=modules/roles-permissions/README.md:Feature scope | neighbors=[Installation Does Not Imply Enablement, Shared users Table]
- "capability_boundary_discipline": "Capability boundary discipline" | kind=entity | source=modules/activity-comments/README.md | neighbors=[liberu-module Composer package type, Core module index]
- "child_theme_relative_asset_import": "Child-theme relative CSS import across install dirs" | kind=entity | source=themes/base/UPGRADING.md | neighbors=[Theme parent inheritance chain, Theme rename: liberu-base becomes base …]
- "columns_select_addbadgesforselectedoptions": "addBadgesForSelectedOptions()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, updateSelectedDisplay()]
- "columns_select_addsingleselectiondisplay": "addSingleSelectionDisplay()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, updateSelectedDisplay()]
- "columns_select_an": "An()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, xn()]
- "columns_select_bn": "bn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, bi()]
- "columns_select_bt": "Bt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, zn()]
- "columns_select_ce": "Ce()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn()]
- "columns_select_createoptionelement": "createOptionElement()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, renderOptions()]
- "columns_select_createremovebutton": "createRemoveButton()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, createBadgeElement()]
- "columns_select_d": "D()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, x()]
- "columns_select_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown()]
- "columns_select_enable": "enable()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, applyDisabledState()]
- "columns_select_getselectedoptionlabels": "getSelectedOptionLabels()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getLabelsForMultipleSelection()]
- "columns_select_hasavailableoptions": "hasAvailableOptions()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, toggleDropdown()]
- "columns_select_ln": "Ln()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Rn()]
- "columns_select_oe": "oe()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ti()]
- "columns_select_on": "On()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, en()]
- "columns_select_q": "Q()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Y()]
- "columns_select_renderoptiongroup": "renderOptionGroup()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, renderOptions()]
- "columns_select_s": "S()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, jn()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-118.json

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
