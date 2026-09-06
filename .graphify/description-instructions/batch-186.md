# Node Description Batch 187 of 212

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

- "filament_echo_v": "v()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_x": "x()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_yn": "Yn()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_yt": "yt()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_moduleplugins_moduleplugins_construct": ".__construct()" | kind=code-symbol | source=app/Filament/ModulePlugins.php:L11 | neighbors=[ModulePlugins]
- "filament_moduleplugins_moduleplugins_forpanel": ".forPanel()" | kind=code-symbol | source=app/Filament/ModulePlugins.php:L14 | neighbors=[ModulePlugins]
- "fixtures_roleduser_roleduser": "RoledUser" | kind=code-symbol | source=modules/identity-core-filament/tests/Fixtures/RoledUser.php:L14 | neighbors=[RoledUser.php]
- "fixtures_searchableuser_searchableuser": "SearchableUser" | kind=code-symbol | source=modules/search/tests/Fixtures/SearchableUser.php:L14 | neighbors=[SearchableUser.php]
- "fixtures_testpanelprovider_testpanelprovider_panel": ".panel()" | kind=code-symbol | source=modules/settings-filament/tests/Fixtures/TestPanelProvider.php:L20 | neighbors=[TestPanelProvider]
- "formatting_localeformatter_localeformatter_date": ".date()" | kind=code-symbol | source=modules/localization-core/src/Formatting/LocaleFormatter.php:L9 | neighbors=[LocaleFormatter]
- "formatting_localeformatter_localeformatter_list": ".list()" | kind=code-symbol | source=modules/localization-core/src/Formatting/LocaleFormatter.php:L23 | neighbors=[LocaleFormatter]
- "formatting_localeformatter_localeformatter_number": ".number()" | kind=code-symbol | source=modules/localization-core/src/Formatting/LocaleFormatter.php:L16 | neighbors=[LocaleFormatter]
- "fortify_createnewuser_createnewuser_construct": ".__construct()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/CreateNewUser.php:L20 | neighbors=[CreateNewUser]
- "fortify_createnewuser_createnewuser_create": ".create()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/CreateNewUser.php:L33 | neighbors=[CreateNewUser]
- "fortify_updateuserprofileinformation_updateuserprofileinformation_construct": ".__construct()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/UpdateUserProfileInformation.php:L16 | neighbors=[UpdateUserProfileInformation]
- "foundation_doctor_command": "FoundationDoctorCommand" | kind=entity | source=modules/developer-experience/README.md:src/Console/FoundationDoctorCommand.php | neighbors=[Liberu Developer Experience]
- "handoff_2026_08_05_step_4_testbench_migration": "Handoff: Conformance Step 4 (Testbench Migration)" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…]
- "health_readinesscheck_name": "name()" | kind=code-symbol | source=modules/application/src/Health/ReadinessCheck.php:L7 | neighbors=[ReadinessCheck.php]
- "health_readinesscheck_ready": "ready()" | kind=code-symbol | source=modules/application/src/Health/ReadinessCheck.php:L9 | neighbors=[ReadinessCheck.php]
- "health_readinessregistry_readinessregistry_register": ".register()" | kind=code-symbol | source=modules/application/src/Health/ReadinessRegistry.php:L11 | neighbors=[ReadinessRegistry]
- "host_real_estate_laravel": "liberusoftware/real-estate-laravel host" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[real-estate-default theme]
- "identity_event": "IdentityEvent" | kind=entity | source=modules/identity-core/README.md:src/Events/IdentityEvent.php | neighbors=[Liberu Identity]
- "jetstream_deleteuser_deleteuser_construct": ".__construct()" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Jetstream/DeleteUser.php:L25 | neighbors=[DeleteUser]
- "js_app_closemenu": "closeMenu()" | kind=code-symbol | source=themes/real-estate-default/resources/js/app.js:L4 | neighbors=[app.js]
- "js_app_menu": "menu" | kind=code-symbol | source=themes/real-estate-default/resources/js/app.js:L2 | neighbors=[app.js]
- "js_app_menubutton": "menuButton" | kind=code-symbol | source=themes/real-estate-default/resources/js/app.js:L1 | neighbors=[app.js]
- "laravel_fortify_package": "laravel/fortify ^1.0" | kind=entity | source=modules/jetstream-bridge/README.md | neighbors=[Liberu Jetstream Bridge]
- "laravel_horizon": "laravel/horizon" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Observability]
- "laravel_jetstream_package": "laravel/jetstream ^5.1" | kind=entity | source=modules/jetstream-bridge/README.md | neighbors=[Liberu Jetstream Bridge]
- "laravel_sanctum_package": "laravel/sanctum" | kind=entity | source=modules/api-access/README.md | neighbors=[Liberu API Access]
- "laravel_socialite_package": "laravel/socialite ^5.0" | kind=entity | source=modules/identity-socialstream/README.md | neighbors=[Liberu Social Identity]
- "lettings_api_specification": "Lettings API Specification" | kind=entity | source=modules/real-estate-lettings/README.md | neighbors=[Real Estate Lettings]
- "lettings_domain_specification": "Lettings Domain Specification" | kind=entity | source=modules/real-estate-lettings/README.md | neighbors=[Real Estate Lettings]
- "lettings_filament_specification": "Lettings Filament Specification" | kind=entity | source=modules/real-estate-lettings/README.md | neighbors=[Real Estate Lettings]
- "liberu_livewire_project_index": "Liberu Platform Livewire Project Index" | kind=entity | source=projects/liberu/livewire/README.md | neighbors=[Livewire Module Index]
- "liberu_meta_json": ".liberu-meta.json meta-repository config" | kind=entity | source=scripts/README.md | neighbors=[liberusoftware/boilerplate-scripts]
- "liberu_security_disclosure_policy": "Liberu security disclosure policy" | kind=entity | source=modules/activity-comments/README.md | neighbors=[liberu-module Composer package type]
- "list_modules_command": "ListModulesCommand" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager]
- "listeners_emitauthenticationevent_emitauthenticationevent_handle": ".handle()" | kind=code-symbol | source=modules/identity-core/src/Listeners/EmitAuthenticationEvent.php:L12 | neighbors=[EmitAuthenticationEvent]
- "livewire_language_switcher_blade": "language-switcher.blade.php" | kind=code-symbol | source=modules/localization-core-livewire/resources/views/livewire/language-switcher.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-186.json

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
