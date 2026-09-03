# Node Description Batch 140 of 212

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

- "entity_filament_shield": "Filament Shield" | kind=entity | source=CLAUDE.md | neighbors=[Admin user-management enhancement, Tenancy rules that bite]
- "entity_language_switcher": "LanguageSwitcher (localization-core-livewire)" | kind=entity | source=CLAUDE.md | neighbors=[SetLocale middleware, Livewire aliases are not package-qualif…]
- "entity_localization_mymemory": "localization-mymemory adapter" | kind=entity | source=CLAUDE.md | neighbors=[Manifest default_enabled, Contract packages (analytics-contracts,…]
- "entity_module_plugins": "App\\Filament\\ModulePlugins" | kind=entity | source=CLAUDE.md | neighbors=[A rule that cannot fire is not coverage, module.json manifest]
- "entity_module_validation_guard": "ModuleValidationGuard" | kind=entity | source=CLAUDE.md | neighbors=[A rule that cannot fire is not coverage, ModuleValidator]
- "entity_publish_components": "scripts/publish-components (removed)" | kind=entity | source=CLAUDE.md | neighbors=[scripts/fleet, Migration sequence (steps −1 to 9)]
- "entity_search_demo": "search-demo package" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Six out-of-scope packages exiled (§3.4), SearcherRegistry]
- "entity_test_user": "TestUser / UsesTestUser" | kind=entity | source=CLAUDE.md | neighbors=[liberusoftware/package-testbench, Three packages migrate the users table …]
- "entity_theme_discovery": "ThemeDiscovery (Composer-driven)" | kind=entity | source=CLAUDE.md | neighbors=[Theme packages and inheritance, ModuleRegistry::resolve]
- "entity_theme_json": "theme.json manifest" | kind=entity | source=CLAUDE.md | neighbors=[Theme packages and inheritance, Vite inputs are derived, not listed]
- "entity_theme_manager": "ThemeManager::inheritanceChain" | kind=entity | source=CLAUDE.md | neighbors=[Theme packages and inheritance, theme-real-estate-default]
- "events_identityevent": "IdentityEvent.php" | kind=code-symbol | source=modules/identity-core/src/Events/IdentityEvent.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, IdentityEvent]
- "events_identityevent_identityevent": "IdentityEvent" | kind=code-symbol | source=modules/identity-core/src/Events/IdentityEvent.php:L7 | neighbors=[IdentityEvent.php, .__construct()]
- "events_lettingcreated": "LettingCreated.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/Events/LettingCreated.php:L1 | neighbors=[3735f58 Complete letting and property m…, LettingCreated]
- "events_lettingcreated_lettingcreated": "LettingCreated" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/Events/LettingCreated.php:L9 | neighbors=[LettingCreated.php, .__construct()]
- "events_lettingstatuschanged": "LettingStatusChanged.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/Events/LettingStatusChanged.php:L1 | neighbors=[3735f58 Complete letting and property m…, LettingStatusChanged]
- "events_lettingstatuschanged_lettingstatuschanged": "LettingStatusChanged" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/Events/LettingStatusChanged.php:L10 | neighbors=[LettingStatusChanged.php, .__construct()]
- "events_managementrecordcreated": "ManagementRecordCreated.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/Events/ManagementRecordCreated.php:L1 | neighbors=[3735f58 Complete letting and property m…, ManagementRecordCreated]
- "events_managementrecordcreated_managementrecordcreated": "ManagementRecordCreated" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/Events/ManagementRecordCreated.php:L9 | neighbors=[ManagementRecordCreated.php, .__construct()]
- "events_managementrecordstatuschanged": "ManagementRecordStatusChanged.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/Events/ManagementRecordStatusChanged.php:L1 | neighbors=[3735f58 Complete letting and property m…, ManagementRecordStatusChanged]
- "events_managementrecordstatuschanged_managementrecordstatuschanged": "ManagementRecordStatusChanged" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/Events/ManagementRecordStatusChanged.php:L10 | neighbors=[ManagementRecordStatusChanged.php, .__construct()]
- "exceptions_currencymismatch": "CurrencyMismatch.php" | kind=code-symbol | source=modules/currency-context/src/Exceptions/CurrencyMismatch.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, CurrencyMismatch]
- "exceptions_dependencyresolutionfailed": "DependencyResolutionFailed.php" | kind=code-symbol | source=modules/module-manager/src/Exceptions/DependencyResolutionFailed.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, DependencyResolutionFailed]
- "exceptions_invalidmanifest": "InvalidManifest.php" | kind=code-symbol | source=modules/module-manager/src/Exceptions/InvalidManifest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, InvalidManifest]
- "exceptions_invalidtheme": "InvalidTheme.php" | kind=code-symbol | source=modules/theme-support/src/Exceptions/InvalidTheme.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, InvalidTheme]
- "exceptions_unknowncurrency": "UnknownCurrency.php" | kind=code-symbol | source=modules/currency-context/src/Exceptions/UnknownCurrency.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, UnknownCurrency]
- "factories_connectedaccountfactory": "ConnectedAccountFactory.php" | kind=code-symbol | source=modules/identity-socialstream/database/factories/ConnectedAccountFactory.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ConnectedAccountFactory]
- "factories_connectedaccountfactory_connectedaccountfactory": "ConnectedAccountFactory" | kind=code-symbol | source=modules/identity-socialstream/database/factories/ConnectedAccountFactory.php:L13 | neighbors=[ConnectedAccountFactory.php, .definition()]
- "factories_teamfactory": "TeamFactory.php" | kind=code-symbol | source=modules/organizations-teams/database/factories/TeamFactory.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TeamFactory]
- "factories_teamfactory_teamfactory": "TeamFactory" | kind=code-symbol | source=modules/organizations-teams/database/factories/TeamFactory.php:L11 | neighbors=[TeamFactory.php, .definition()]
- "feature_exampletest_exampletest": "ExampleTest" | kind=code-symbol | source=tests/Feature/ExampleTest.php:L8 | neighbors=[ExampleTest.php, .test_the_application_returns_a_success…]
- "feature_loginlandingredirecttest": "LoginLandingRedirectTest.php" | kind=code-symbol | source=tests/Feature/LoginLandingRedirectTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, seedTeamUser()]
- "feature_module_index": "Feature module index" | kind=entity | source=modules/features/README.md | neighbors=[One core package per adapter, Real Estate project scope]
- "feature_panelthemecolorstest": "PanelThemeColorsTest.php" | kind=code-symbol | source=tests/Feature/PanelThemeColorsTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, setSiteTheme()]
- "feature_realestateinstructionstest": "RealEstateInstructionsTest.php" | kind=code-symbol | source=tests/Feature/RealEstateInstructionsTest.php:L1 | neighbors=[522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…]
- "feature_realestatelistingstest": "RealEstateListingsTest.php" | kind=code-symbol | source=tests/Feature/RealEstateListingsTest.php:L1 | neighbors=[6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…]
- "feature_realestatematchingtest": "RealEstateMatchingTest.php" | kind=code-symbol | source=tests/Feature/RealEstateMatchingTest.php:L1 | neighbors=[6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…]
- "feature_realestateportalintegrationstest": "RealEstatePortalIntegrationsTest.php" | kind=code-symbol | source=tests/Feature/RealEstatePortalIntegrationsTest.php:L1 | neighbors=[1cdd121 Add independent property portal…, bd4b1dc Add independent property portal…]
- "feature_searcherregistrytest": "SearcherRegistryTest.php" | kind=code-symbol | source=modules/search/tests/Feature/SearcherRegistryTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SearcherRegistryTest]
- "feature_searcherregistrytest_searcherregistrytest_emptypage": ".emptyPage()" | kind=code-symbol | source=modules/search/tests/Feature/SearcherRegistryTest.php:L68 | neighbors=[SearcherRegistryTest, .test_a_type_cannot_be_claimed_twice()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-139.json

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
