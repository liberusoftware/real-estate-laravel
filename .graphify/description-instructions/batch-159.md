# Node Description Batch 160 of 212

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

- "transport_zooplaclient_zooplaclient_branchpropertylist": ".branchPropertyList()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Transport/ZooplaClient.php:L45 | neighbors=[ZooplaClient, .request()]
- "transport_zooplaclient_zooplaclient_removeproperty": ".removeProperty()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Transport/ZooplaClient.php:L37 | neighbors=[ZooplaClient, .request()]
- "transport_zooplaclient_zooplaclient_sendproperty": ".sendProperty()" | kind=code-symbol | source=modules/real-estate-zoopla/src/Transport/ZooplaClient.php:L29 | neighbors=[ZooplaClient, .request()]
- "trap_define_environment_must_call_parent": "Trap: defineEnvironment() overrides must call parent" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Handoff: Conformance Step 5 (Test Redis…, liberusoftware/package-testbench]
- "trusteddevices_trusteddevicemanager": "TrustedDeviceManager.php" | kind=code-symbol | source=modules/two-factor-authentication/src/TrustedDevices/TrustedDeviceManager.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TrustedDeviceManager]
- "unit_exampletest": "ExampleTest.php" | kind=code-symbol | source=tests/Unit/ExampleTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ExampleTest]
- "unit_exampletest_exampletest": "ExampleTest" | kind=code-symbol | source=tests/Unit/ExampleTest.php:L7 | neighbors=[ExampleTest.php, .test_that_true_is_true()]
- "unit_modulefilamentpluginstest": "ModuleFilamentPluginsTest.php" | kind=code-symbol | source=tests/Unit/ModuleFilamentPluginsTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, registryDeclaring()]
- "unit_moduleregistrycoveragetest": "ModuleRegistryCoverageTest.php" | kind=code-symbol | source=modules/module-manager/tests/Unit/ModuleRegistryCoverageTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, makeCoverageManifest()]
- "unit_thememanagercoveragebranchestest": "ThemeManagerCoverageBranchesTest.php" | kind=code-symbol | source=modules/theme-support/tests/Unit/ThemeManagerCoverageBranchesTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, cacheThemes()]
- "unit_usercontractstest": "UserContractsTest.php" | kind=code-symbol | source=tests/Unit/UserContractsTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b034339 Harden release verification and…]
- "validate_modules_command": "ValidateModulesCommand" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager, Declared Public Boundary]
- "valueobjects_currency": "Currency.php" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Currency.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Currency]
- "valueobjects_currency_currency": "Currency" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Currency.php:L7 | neighbors=[Currency.php, .__construct()]
- "valueobjects_exchangerate": "ExchangeRate.php" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/ExchangeRate.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ExchangeRate]
- "valueobjects_money": "Money.php" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Money.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, Money]
- "valueobjects_money_money_add": ".add()" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Money.php:L11 | neighbors=[Money, .assertSameCurrency()]
- "valueobjects_money_money_subtract": ".subtract()" | kind=code-symbol | source=modules/currency-context/src/ValueObjects/Money.php:L18 | neighbors=[Money, .assertSameCurrency()]
- "zoopla_sync_record": "Zoopla Sync Record" | kind=entity | source=modules/real-estate-zoopla/README.md | neighbors=[Real Estate Zoopla, Real Estate Zoopla Sync API (OpenAPI v1)]
- "accessibility_thememarkuptest": "ThemeMarkupTest.php" | kind=code-symbol | source=themes/real-estate-default/tests/Accessibility/ThemeMarkupTest.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "actions_acceptinvitation_acceptinvitation_handle": ".handle()" | kind=code-symbol | source=modules/organizations-teams/src/Actions/AcceptInvitation.php:L11 | neighbors=[AcceptInvitation]
- "actions_actions_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js]
- "actions_actions_getactionnestingindexfrommodalid": "getActionNestingIndexFromModalId()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js]
- "actions_actions_init": "init()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js]
- "actions_createconnectedaccount_createconnectedaccount_create": ".create()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateConnectedAccount.php:L17 | neighbors=[CreateConnectedAccount]
- "actions_createuserfromprovider_createuserfromprovider_construct": ".__construct()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateUserFromProvider.php:L23 | neighbors=[CreateUserFromProvider]
- "actions_generateredirectforprovider_generateredirectforprovider_generate": ".generate()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/GenerateRedirectForProvider.php:L14 | neighbors=[GenerateRedirectForProvider]
- "actions_handleinvalidstate_handleinvalidstate_handle": ".handle()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/HandleInvalidState.php:L14 | neighbors=[HandleInvalidState]
- "actions_invitemember_invitemember_handle": ".handle()" | kind=code-symbol | source=modules/organizations-teams/src/Actions/InviteMember.php:L10 | neighbors=[InviteMember]
- "actions_resolvesocialiteuser_resolvesocialiteuser_resolve": ".resolve()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/ResolveSocialiteUser.php:L16 | neighbors=[ResolveSocialiteUser]
- "actions_transferownership_transferownership_handle": ".handle()" | kind=code-symbol | source=modules/organizations-teams/src/Actions/TransferOwnership.php:L11 | neighbors=[TransferOwnership]
- "actions_updateconnectedaccount_updateconnectedaccount_update": ".update()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/UpdateConnectedAccount.php:L16 | neighbors=[UpdateConnectedAccount]
- "actions_updateconnectedaccount_updateconnectedaccount_updaterefreshtoken": ".updateRefreshToken()" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/UpdateConnectedAccount.php:L39 | neighbors=[UpdateConnectedAccount]
- "actions_updateprofile_updateprofile_handle": ".handle()" | kind=code-symbol | source=modules/profiles/src/Actions/UpdateProfile.php:L10 | neighbors=[UpdateProfile]
- "application_calculatecomparables_calculatecomparables_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CalculateComparables.php:L13 | neighbors=[CalculateComparables]
- "application_cancelviewing_cancelviewing_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CancelViewing.php:L14 | neighbors=[CancelViewing]
- "application_completevaluation_completevaluation_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CompleteValuation.php:L15 | neighbors=[CompleteValuation]
- "application_completeviewing_completeviewing_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CompleteViewing.php:L14 | neighbors=[CompleteViewing]
- "application_confirmviewing_confirmviewing_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/ConfirmViewing.php:L14 | neighbors=[ConfirmViewing]
- "application_convertvaluation_convertvaluation_handle": ".handle()" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/ConvertValuation.php:L15 | neighbors=[ConvertValuation]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-159.json

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
