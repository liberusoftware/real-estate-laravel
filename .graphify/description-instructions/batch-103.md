# Node Description Batch 104 of 212

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

- "domain_propertiescapabilitydefinition": "PropertiesCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-properties/src/Domain/PropertiesCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, PropertiesCapabilityDefinition]
- "domain_propertiescapabilitydefinition_propertiescapabilitydefinition": "PropertiesCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-properties/src/Domain/PropertiesCapabilityDefinition.php:L7 | neighbors=[PropertiesCapabilityDefinition.php, .all(), .behaviors()]
- "domain_salesprogressioncapabilitydefinition": "SalesProgressionCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Domain/SalesProgressionCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, SalesProgressionCapabilityDefinition]
- "domain_valuationscapabilitydefinition": "ValuationsCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, ValuationsCapabilityDefinition]
- "domain_valuationscapabilitydefinition_valuationscapabilitydefinition": "ValuationsCapabilityDefinition" | kind=code-symbol | source=modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php:L7 | neighbors=[ValuationsCapabilityDefinition.php, .all(), .define()]
- "domain_viewingscapabilitydefinition": "ViewingsCapabilityDefinition.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Domain/ViewingsCapabilityDefinition.php:L1 | neighbors=[12bd6e1 Conform real estate modules to …, 799806e Conform real estate modules to …, ViewingsCapabilityDefinition]
- "entity_config_modules": "config/modules.php env overrides" | kind=entity | source=CLAUDE.md | neighbors=[Manifest default_enabled, Discovery and enablement derive from ma…, ModuleRegistry::resolve]
- "entity_fleet_script": "scripts/fleet" | kind=entity | source=CLAUDE.md | neighbors=[Module-repo-first source of truth (§3.1), ModuleValidator, scripts/publish-components (removed)]
- "entity_module_boundaries_test": "tests/Architecture/ModuleBoundariesTest" | kind=entity | source=CLAUDE.md | neighbors=[Architecture rules relocated (12 → 8), A rule that cannot fire is not coverage, liberusoftware/package-testbench]
- "entity_module_manager_provider": "ModuleManagerServiceProvider" | kind=entity | source=CLAUDE.md | neighbors=[Module system, module.json manifest, ModuleRegistry::resolve]
- "entity_module_registry": "ModuleRegistry::resolve" | kind=entity | source=CLAUDE.md | neighbors=[ModuleManagerServiceProvider, config/modules.php env overrides, ThemeDiscovery (Composer-driven)]
- "entity_module_validate_commands": "module:validate, theme:validate, foundation:doctor, module:cache" | kind=entity | source=docs/FOUNDATION_MODULE_MATRIX.md | neighbors=[Foundation verification gates, Foundation module implementation matrix, ModuleValidator]
- "entity_spatie_permission": "Spatie Permission (team-scoped roles)" | kind=entity | source=CLAUDE.md | neighbors=[Admin user-management enhancement, Tenancy rules that bite, Known upgrade blockers]
- "entity_theme_colors": "App\\Support\\ThemeColors" | kind=entity | source=CLAUDE.md | neighbors=[foundation-filament dissolved, Operations stack (Horizon, Octane, Tele…, Theme packages and inheritance]
- "factories_userfactory": "UserFactory.php" | kind=code-symbol | source=database/factories/UserFactory.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, UserFactory]
- "feature_realestatecoreactionstest": "RealEstateCoreActionsTest.php" | kind=code-symbol | source=tests/Feature/RealEstateCoreActionsTest.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "feature_realestatelettingslifecycletest": "RealEstateLettingsLifecycleTest.php" | kind=code-symbol | source=tests/Feature/RealEstateLettingsLifecycleTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3735f58 Complete letting and property m…, 8cf045c Implement real estate module co…]
- "feature_realestatepropertymanagementlifecycletest": "RealEstatePropertyManagementLifecycleTest.php" | kind=code-symbol | source=tests/Feature/RealEstatePropertyManagementLifecycleTest.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3735f58 Complete letting and property m…, 8cf045c Implement real estate module co…]
- "feature_searcherregistrytest_searcherregistrytest_registerwidgets": ".registerWidgets()" | kind=code-symbol | source=modules/search/tests/Feature/SearcherRegistryTest.php:L57 | neighbors=[SearcherRegistryTest, .test_a_registered_searcher_joins_searc…, .test_search_all_honours_a_requested_su…]
- "filament_app_g": "G()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js, P(), Y()]
- "filament_app_setupresizeobserver": "setUpResizeObserver()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js, init(), close()]
- "filament_echo_de": "De()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, t(), ze()]
- "filament_echo_g": "g()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, i(), P()]
- "filament_echo_h": "H()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js, ji(), pt()]
- "filament_echo_me": "Me()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, t(), rr()]
- "filament_echo_mt": "Mt()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, Fe(), t()]
- "filament_echo_nr": "nr()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js, Dt(), rt()]
- "filament_echo_oi": "oi()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js, ii(), r()]
- "filament_echo_ti": "ti()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js, r(), te()]
- "filament_moduleplugins_moduleplugins": "ModulePlugins" | kind=code-symbol | source=app/Filament/ModulePlugins.php:L9 | neighbors=[ModulePlugins.php, .__construct(), .forPanel()]
- "finding_analytics_inert": "Both analytics adapters are inert and nothing says so" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Manifest default_enabled, Contract packages (analytics-contracts,…]
- "finding_module_prefix_missing": "Composer basename and installer name lack the module- prefix" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, ADR exceptions: none (§6), Packagist names drop the module- prefix]
- "finding_reusable_workflow_main": "All 44 callers pin the reusable workflow to @main" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, Package CI: three workflows, not three …, Third-party actions not pinned to commi…]
- "finding_unpinned_actions": "Third-party actions not pinned to commit SHAs" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Daily Dependabot updates, Code-level conformance audit, All 44 callers pin the reusable workflo…]
- "finding_users_table_unowned": "Three packages migrate the users table none of them owns" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[Code-level conformance audit, TestUser / UsesTestUser, Host boundary: /app is composition only]
- "fixtures_organizationuser_organizationuser": "OrganizationUser" | kind=code-symbol | source=modules/organizations-teams-filament/tests/Fixtures/OrganizationUser.php:L18 | neighbors=[OrganizationUser.php, .belongsToTeam(), .ownsTeam()]
- "fortify_createnewuser_createnewuser": "CreateNewUser" | kind=code-symbol | source=modules/jetstream-bridge/src/Actions/Fortify/CreateNewUser.php:L16 | neighbors=[CreateNewUser.php, .__construct(), .create()]
- "health_readinesscheck": "ReadinessCheck.php" | kind=code-symbol | source=modules/application/src/Health/ReadinessCheck.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, name(), ready()]
- "instruction_entity": "Instruction Record" | kind=entity | source=modules/real-estate-instructions/README.md | neighbors=[Branch Resource, Real Estate Instructions OpenAPI v1, Real Estate Instructions]
- "instruction_status_lifecycle": "Instruction Status Lifecycle" | kind=entity | source=modules/real-estate-instructions-api/openapi/v1/real-estate-instructions.yaml | neighbors=[Letting Lifecycle Capabilities, Real Estate Instructions OpenAPI v1, Real Estate Instructions]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-103.json

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
