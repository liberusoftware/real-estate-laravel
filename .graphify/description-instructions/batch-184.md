# Node Description Batch 185 of 212

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
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "feature_activityloggingtest": "ActivityLoggingTest.php" | kind=code-symbol | source=tests/Feature/ActivityLoggingTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_adminaccesstest": "AdminAccessTest.php" | kind=code-symbol | source=tests/Feature/AdminAccessTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_adminpanelaccesstest": "AdminPanelAccessTest.php" | kind=code-symbol | source=tests/Feature/AdminPanelAccessTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_adminpanelrenderstest": "AdminPanelRendersTest.php" | kind=code-symbol | source=tests/Feature/AdminPanelRendersTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_adminpaneltenancytest": "AdminPanelTenancyTest.php" | kind=code-symbol | source=tests/Feature/AdminPanelTenancyTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_authpagesstyletest": "AuthPagesStyleTest.php" | kind=code-symbol | source=tests/Feature/AuthPagesStyleTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_backupscheduletest": "BackupScheduleTest.php" | kind=code-symbol | source=tests/Feature/BackupScheduleTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_databaseseedertest": "DatabaseSeederTest.php" | kind=code-symbol | source=tests/Feature/DatabaseSeederTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_exampletest_exampletest_test_the_application_returns_a_successful_response": ".test_the_application_returns_a_successful_response()" | kind=code-symbol | source=tests/Feature/ExampleTest.php:L13 | neighbors=[ExampleTest]
- "feature_languageswitchertest": "LanguageSwitcherTest.php" | kind=code-symbol | source=modules/localization-core-livewire/tests/Feature/LanguageSwitcherTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_localemiddlewareregistrationtest": "LocaleMiddlewareRegistrationTest.php" | kind=code-symbol | source=tests/Feature/LocaleMiddlewareRegistrationTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_loginlandingredirecttest_seedteamuser": "seedTeamUser()" | kind=code-symbol | source=tests/Feature/LoginLandingRedirectTest.php:L10 | neighbors=[LoginLandingRedirectTest.php]
- "feature_managesitesettingspagetest": "ManageSiteSettingsPageTest.php" | kind=code-symbol | source=tests/Feature/ManageSiteSettingsPageTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_managesitesettingstest": "ManageSiteSettingsTest.php" | kind=code-symbol | source=modules/settings-filament/tests/Feature/ManageSiteSettingsTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_managesitesettingsthemetest": "ManageSiteSettingsThemeTest.php" | kind=code-symbol | source=tests/Feature/ManageSiteSettingsThemeTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_moduleintegrationcoveragetest_key": "key()" | kind=code-symbol | source=tests/Feature/ModuleIntegrationCoverageTest.php:L121 | neighbors=[ModuleIntegrationCoverageTest.php]
- "feature_moduleintegrationcoveragetest_secret": "secret()" | kind=code-symbol | source=tests/Feature/ModuleIntegrationCoverageTest.php:L131 | neighbors=[ModuleIntegrationCoverageTest.php]
- "feature_moduleintegrationcoveragetest_validate": "validate()" | kind=code-symbol | source=tests/Feature/ModuleIntegrationCoverageTest.php:L126 | neighbors=[ModuleIntegrationCoverageTest.php]
- "feature_operationalcoveragetest": "OperationalCoverageTest.php" | kind=code-symbol | source=tests/Feature/OperationalCoverageTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_panelthemecolorstest_setsitetheme": "setSiteTheme()" | kind=code-symbol | source=tests/Feature/PanelThemeColorsTest.php:L10 | neighbors=[PanelThemeColorsTest.php]
- "feature_realestatemarketingtest": "RealEstateMarketingTest.php" | kind=code-symbol | source=tests/Feature/RealEstateMarketingTest.php:L1 | neighbors=[4fd850d Add real estate marketing modul…]
- "feature_realestatemediadocumentstest": "RealEstateMediaDocumentsTest.php" | kind=code-symbol | source=tests/Feature/RealEstateMediaDocumentsTest.php:L1 | neighbors=[0910e2b Add real estate media and docum…]
- "feature_realestatepartyactionstest": "RealEstatePartyActionsTest.php" | kind=code-symbol | source=tests/Feature/RealEstatePartyActionsTest.php:L1 | neighbors=[73659b3 Add real estate parties module …]
- "feature_realestateportalsreportingtest": "RealEstatePortalsReportingTest.php" | kind=code-symbol | source=tests/Feature/RealEstatePortalsReportingTest.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…]
- "feature_realestatesalesprogressiontest": "RealEstateSalesProgressionTest.php" | kind=code-symbol | source=tests/Feature/RealEstateSalesProgressionTest.php:L1 | neighbors=[6385f28 Add sales progression modules a…]
- "feature_rolespermissionsfilamentplugintest": "RolesPermissionsFilamentPluginTest.php" | kind=code-symbol | source=modules/roles-permissions-filament/tests/Feature/RolesPermissionsFilamentPluginTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_searchalltest": "SearchAllTest.php" | kind=code-symbol | source=tests/Feature/SearchAllTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_searchapisecuritytest": "SearchApiSecurityTest.php" | kind=code-symbol | source=tests/Feature/SearchApiSecurityTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_searcherregistrytest_searcherregistrytest_test_search_all_returns_only_the_types_the_composition_registered": ".test_search_all_returns_only_the_types_the_composition_registered()" | kind=code-symbol | source=modules/search/tests/Feature/SearcherRegistryTest.php:L21 | neighbors=[SearcherRegistryTest]
- "feature_searchservicetest": "SearchServiceTest.php" | kind=code-symbol | source=modules/search/tests/Feature/SearchServiceTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_searchtest": "SearchTest.php" | kind=code-symbol | source=tests/Feature/SearchTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_searchuserstest": "SearchUsersTest.php" | kind=code-symbol | source=tests/Feature/SearchUsersTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_securityheaderstest": "SecurityHeadersTest.php" | kind=code-symbol | source=tests/Feature/SecurityHeadersTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_seederadminownershiptest": "SeederAdminOwnershipTest.php" | kind=code-symbol | source=tests/Feature/SeederAdminOwnershipTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_setlocalemiddlewaretest": "SetLocaleMiddlewareTest.php" | kind=code-symbol | source=modules/localization-core/tests/Feature/SetLocaleMiddlewareTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_sitesettingsactivethemetest": "SiteSettingsActiveThemeTest.php" | kind=code-symbol | source=modules/settings/tests/Feature/SiteSettingsActiveThemeTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_sitesettingsdefaultstest": "SiteSettingsDefaultsTest.php" | kind=code-symbol | source=modules/settings/tests/Feature/SiteSettingsDefaultsTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_sitesettingstest": "SiteSettingsTest.php" | kind=code-symbol | source=modules/settings/tests/Feature/SiteSettingsTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_socialstreamregistrationtest": "SocialstreamRegistrationTest.php" | kind=code-symbol | source=tests/Feature/SocialstreamRegistrationTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_superadminaccesstest": "SuperAdminAccessTest.php" | kind=code-symbol | source=tests/Feature/SuperAdminAccessTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-184.json

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
