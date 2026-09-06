# Node Description Batch 211 of 212

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

- "support_visibility_visible": "visible()" | kind=code-symbol | source=modules/activity-comments/src/Support/Visibility.php:L12 | neighbors=[Visibility.php]
- "tables_tables_arerecordspartiallyselected": "areRecordsPartiallySelected()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "tables_tables_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "tables_tables_init": "init()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "tables_tables_mountaction": "mountAction()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "tables_tables_resetcollapsedgroups": "resetCollapsedGroups()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "tables_tables_togglefiltersdropdown": "toggleFiltersDropdown()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "tables_tables_watchforcheckboxclicks": "watchForCheckboxClicks()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js]
- "task_8_searcher_registry_refactor": "Task #8 — searcher registry in search / search-demo split" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…]
- "task_9_adopt_messaging_blog_tests": "Task #9 — adopt preserved messaging and blog tests" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…]
- "tests_testcase_testcase_defineenvironment": ".defineEnvironment()" | kind=code-symbol | source=modules/settings/tests/TestCase.php:L20 | neighbors=[TestCase]
- "tests_testcase_testcase_setup": ".setUp()" | kind=code-symbol | source=modules/settings-filament/tests/TestCase.php:L29 | neighbors=[TestCase]
- "theme_type_shared": "Theme type: shared" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base)]
- "translation_translationregistry_translationregistry_all": ".all()" | kind=code-symbol | source=modules/localization-core/src/Translation/TranslationRegistry.php:L27 | neighbors=[TranslationRegistry]
- "translation_translationregistry_translationregistry_get": ".get()" | kind=code-symbol | source=modules/localization-core/src/Translation/TranslationRegistry.php:L22 | neighbors=[TranslationRegistry]
- "translation_translationregistry_translationregistry_register": ".register()" | kind=code-symbol | source=modules/localization-core/src/Translation/TranslationRegistry.php:L14 | neighbors=[TranslationRegistry]
- "trap_host_red_between_manifest_bump_and_composer_update": "Trap: host goes red between a manifest bump and composer update" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…]
- "trap_wsl_dns_drops_under_parallel_composer": "Trap: WSL DNS drops under parallel Composer" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…]
- "trusteddevices_trusteddevicemanager_trusteddevicemanager_issue": ".issue()" | kind=code-symbol | source=modules/two-factor-authentication/src/TrustedDevices/TrustedDeviceManager.php:L10 | neighbors=[TrustedDeviceManager]
- "trusteddevices_trusteddevicemanager_trusteddevicemanager_revokeall": ".revokeAll()" | kind=code-symbol | source=modules/two-factor-authentication/src/TrustedDevices/TrustedDeviceManager.php:L30 | neighbors=[TrustedDeviceManager]
- "trusteddevices_trusteddevicemanager_trusteddevicemanager_valid": ".valid()" | kind=code-symbol | source=modules/two-factor-authentication/src/TrustedDevices/TrustedDeviceManager.php:L19 | neighbors=[TrustedDeviceManager]
- "unit_canonicalmodulediscoverytest": "CanonicalModuleDiscoveryTest.php" | kind=code-symbol | source=tests/Unit/CanonicalModuleDiscoveryTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_clearsignalthemetest": "ClearSignalThemeTest.php" | kind=code-symbol | source=tests/Unit/ClearSignalThemeTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_currencycontexttest": "CurrencyContextTest.php" | kind=code-symbol | source=modules/currency-context/tests/Unit/CurrencyContextTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_destinationscoveragetest": "DestinationsCoverageTest.php" | kind=code-symbol | source=modules/analytics-core/tests/Unit/DestinationsCoverageTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_eventroutertest_deliver": "deliver()" | kind=code-symbol | source=modules/analytics-core/tests/Unit/EventRouterTest.php:L17 | neighbors=[EventRouterTest.php]
- "unit_eventroutertest_name": "name()" | kind=code-symbol | source=modules/analytics-core/tests/Unit/EventRouterTest.php:L12 | neighbors=[EventRouterTest.php]
- "unit_exampletest_exampletest_test_that_true_is_true": ".test_that_true_is_true()" | kind=code-symbol | source=tests/Unit/ExampleTest.php:L12 | neighbors=[ExampleTest]
- "unit_googledestinationtest": "GoogleDestinationTest.php" | kind=code-symbol | source=modules/analytics-google/tests/Unit/GoogleDestinationTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_googleeventmappertest": "GoogleEventMapperTest.php" | kind=code-symbol | source=modules/analytics-google/tests/Unit/GoogleEventMapperTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_manifesttest": "ManifestTest.php" | kind=code-symbol | source=modules/module-manager/tests/Unit/ManifestTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_metacustomernormalizertest": "MetaCustomerNormalizerTest.php" | kind=code-symbol | source=modules/analytics-meta/tests/Unit/MetaCustomerNormalizerTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_metadestinationtest": "MetaDestinationTest.php" | kind=code-symbol | source=modules/analytics-meta/tests/Unit/MetaDestinationTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "unit_modulefilamentpluginstest_registrydeclaring": "registryDeclaring()" | kind=code-symbol | source=tests/Unit/ModuleFilamentPluginsTest.php:L34 | neighbors=[ModuleFilamentPluginsTest.php]
- "unit_moduleregistrycoveragetest_makecoveragemanifest": "makeCoverageManifest()" | kind=code-symbol | source=modules/module-manager/tests/Unit/ModuleRegistryCoverageTest.php:L14 | neighbors=[ModuleRegistryCoverageTest.php]
- "unit_modulesupportcoveragetest_capabilities": "capabilities()" | kind=code-symbol | source=tests/Unit/ModuleSupportCoverageTest.php:L217 | neighbors=[ModuleSupportCoverageTest.php]
- "unit_modulesupportcoveragetest_name": "name()" | kind=code-symbol | source=tests/Unit/ModuleSupportCoverageTest.php:L82 | neighbors=[ModuleSupportCoverageTest.php]
- "unit_modulesupportcoveragetest_ready": "ready()" | kind=code-symbol | source=tests/Unit/ModuleSupportCoverageTest.php:L87 | neighbors=[ModuleSupportCoverageTest.php]
- "unit_modulesupportcoveragetest_test": "test()" | kind=code-symbol | source=tests/Unit/ModuleSupportCoverageTest.php:L222 | neighbors=[ModuleSupportCoverageTest.php]
- "unit_resourcedefinitionscoveragetest": "ResourceDefinitionsCoverageTest.php" | kind=code-symbol | source=tests/Unit/ResourceDefinitionsCoverageTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-210.json

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
