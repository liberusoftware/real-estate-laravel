# Node Description Batch 142 of 212

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

- "filament_moduleplugins": "ModulePlugins.php" | kind=code-symbol | source=app/Filament/ModulePlugins.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ModulePlugins]
- "finding_jetstream_bridge_types": "Seven packages call members their declared type does not have" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Per-package PHPStan level ratchet]
- "finding_livewire_aliases": "Livewire aliases are not package-qualified" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, LanguageSwitcher (localization-core-liv…]
- "finding_missing_context_docs": "CLAUDE.md describes a domain-doc layout that does not exist" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, CLAUDE.md — project instructions]
- "finding_service_locator": "Service-locator prohibition has no rule and is violated" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Per-package PHPStan level ratchet]
- "finding_strict_types": "declare(strict_types=1) absent almost everywhere" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Shared Pint and PHPStan configs via --c…]
- "fixtures_organizationuser": "OrganizationUser.php" | kind=code-symbol | source=modules/organizations-teams-filament/tests/Fixtures/OrganizationUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, OrganizationUser]
- "fixtures_organizationuser_organizationuser_belongstoteam": ".belongsToTeam()" | kind=code-symbol | source=modules/organizations-teams-filament/tests/Fixtures/OrganizationUser.php:L23 | neighbors=[OrganizationUser, .ownsTeam()]
- "fixtures_organizationuser_organizationuser_ownsteam": ".ownsTeam()" | kind=code-symbol | source=modules/organizations-teams-filament/tests/Fixtures/OrganizationUser.php:L29 | neighbors=[OrganizationUser, .belongsToTeam()]
- "fixtures_roleduser": "RoledUser.php" | kind=code-symbol | source=modules/identity-core-filament/tests/Fixtures/RoledUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RoledUser]
- "fixtures_searchableuser": "SearchableUser.php" | kind=code-symbol | source=modules/search/tests/Fixtures/SearchableUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearchableUser]
- "fixtures_testpanelprovider": "TestPanelProvider.php" | kind=code-symbol | source=modules/settings-filament/tests/Fixtures/TestPanelProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TestPanelProvider]
- "fixtures_testpanelprovider_testpanelprovider": "TestPanelProvider" | kind=code-symbol | source=modules/settings-filament/tests/Fixtures/TestPanelProvider.php:L18 | neighbors=[TestPanelProvider.php, .panel()]
- "formatting_localeformatter": "LocaleFormatter.php" | kind=code-symbol | source=modules/localization-core/src/Formatting/LocaleFormatter.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LocaleFormatter]
- "fortify_createnewuser": "CreateNewUser.php" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/CreateNewUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CreateNewUser]
- "fortify_updateuserprofileinformation": "UpdateUserProfileInformation.php" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/UpdateUserProfileInformation.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, UpdateUserProfileInformation]
- "fortify_updateuserprofileinformation_updateuserprofileinformation_update": ".update()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/UpdateUserProfileInformation.php:L25 | neighbors=[UpdateUserProfileInformation, .updateVerifiedUser()]
- "fortify_updateuserprofileinformation_updateuserprofileinformation_updateverifieduser": ".updateVerifiedUser()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/UpdateUserProfileInformation.php:L59 | neighbors=[UpdateUserProfileInformation, .update()]
- "four_implementation_indexes": "Four Implementation Indexes (core / api / filament / livewire)" | kind=entity | source=projects/LIBERU.md | neighbors=[Liberu Application Composition, Real Estate Zoopla]
- "health_readinessregistry": "ReadinessRegistry.php" | kind=code-symbol | source=modules/application/src/Health/ReadinessRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ReadinessRegistry]
- "health_readinessregistry_readinessregistry_ready": ".ready()" | kind=code-symbol | source=modules/application/src/Health/ReadinessRegistry.php:L23 | neighbors=[ReadinessRegistry, .report()]
- "health_readinessregistry_readinessregistry_report": ".report()" | kind=code-symbol | source=modules/application/src/Health/ReadinessRegistry.php:L18 | neighbors=[ReadinessRegistry, .ready()]
- "identity_core_module": "Liberu Identity" | kind=entity | source=modules/profiles/README.md | neighbors=[Liberu Profiles, Shared users Table Extension]
- "installation_does_not_imply_enablement": "Installation does not imply enablement" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Liberu Feature Flags, liberusoftware/composer-installer]
- "jetstream_deleteuser": "DeleteUser.php" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Jetstream/DeleteUser.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DeleteUser]
- "jetstream_deleteuser_deleteuser_delete": ".delete()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Jetstream/DeleteUser.php:L36 | neighbors=[DeleteUser, .deleteTeams()]
- "jetstream_deleteuser_deleteuser_deleteteams": ".deleteTeams()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Jetstream/DeleteUser.php:L56 | neighbors=[DeleteUser, .delete()]
- "laravel_jetstream": "laravel/jetstream" | kind=entity | source=modules/organizations-teams/README.md | neighbors=[liberusoftware/organizations-teams, Teams, Membership and Invitation Tables]
- "laravel_pulse": "laravel/pulse" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Observability, Telescope and Pulse Tables]
- "laravel_telescope": "laravel/telescope" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Observability, Telescope and Pulse Tables]
- "layouts_app_blade": "app.blade.php" | kind=code-symbol | source=themes/real-estate-default/resources/views/layouts/app.blade.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…, 75f7818 Bootstrap application from Libe…]
- "letting_lifecycle": "Letting Lifecycle Capabilities" | kind=entity | source=modules/real-estate-lettings/README.md | neighbors=[Instruction Status Lifecycle, Real Estate Lettings]
- "lettings_livewire_specification": "Lettings Livewire Specification" | kind=entity | source=modules/real-estate-lettings/README.md | neighbors=[Adapter Over One Matching Core Package, Real Estate Lettings]
- "listeners_emitauthenticationevent": "EmitAuthenticationEvent.php" | kind=code-symbol | source=modules/identity-core/src/Listeners/EmitAuthenticationEvent.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, EmitAuthenticationEvent]
- "listeners_emitauthenticationevent_emitauthenticationevent": "EmitAuthenticationEvent" | kind=code-symbol | source=modules/identity-core/src/Listeners/EmitAuthenticationEvent.php:L10 | neighbors=[EmitAuthenticationEvent.php, .handle()]
- "livewire_languageswitcher": "LanguageSwitcher.php" | kind=code-symbol | source=modules/localization-core-livewire/src/Livewire/LanguageSwitcher.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, LanguageSwitcher]
- "livewire_themeswitcher": "ThemeSwitcher.php" | kind=code-symbol | source=modules/theme-support-livewire/src/Livewire/ThemeSwitcher.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeSwitcher]
- "manifests_thememanifest": "ThemeManifest.php" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeManifest]
- "manifests_thememanifest_thememanifest_displayname": ".displayName()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L38 | neighbors=[ThemeManifest, .toArray()]
- "manifests_thememanifest_thememanifest_toarray": ".toArray()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L78 | neighbors=[ThemeManifest, .displayName()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-141.json

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
