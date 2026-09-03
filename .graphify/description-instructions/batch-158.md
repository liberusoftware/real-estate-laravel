# Node Description Batch 159 of 212

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

- "support_support_xo": "xo()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, kn()]
- "support_support_ye": "ye()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, pe()]
- "support_support_za": "za()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, rs()]
- "support_systemclock": "SystemClock.php" | kind=code-symbol | source=modules/application/src/Support/SystemClock.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SystemClock]
- "support_systemclock_systemclock": "SystemClock" | kind=code-symbol | source=modules/application/src/Support/SystemClock.php:L7 | neighbors=[SystemClock.php, .now()]
- "support_theme_helpers_set_theme": "set_theme()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L62 | neighbors=[theme_helpers.php, theme()]
- "support_theme_helpers_theme_layout": "theme_layout()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L78 | neighbors=[theme_helpers.php, theme()]
- "support_theme_helpers_theme_path": "theme_path()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L42 | neighbors=[theme_helpers.php, theme()]
- "support_theme_helpers_theme_views_path": "theme_views_path()" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L52 | neighbors=[theme_helpers.php, theme()]
- "support_themecolors": "ThemeColors.php" | kind=code-symbol | source=app/Support/ThemeColors.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ThemeColors]
- "support_uploadpolicy": "UploadPolicy.php" | kind=code-symbol | source=modules/files-media/src/Support/UploadPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, UploadPolicy]
- "support_uploadpolicy_uploadpolicy": "UploadPolicy" | kind=code-symbol | source=modules/files-media/src/Support/UploadPolicy.php:L7 | neighbors=[UploadPolicy.php, .assert()]
- "support_uuididentifierfactory": "UuidIdentifierFactory.php" | kind=code-symbol | source=modules/application/src/Support/UuidIdentifierFactory.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, UuidIdentifierFactory]
- "support_uuididentifierfactory_uuididentifierfactory": "UuidIdentifierFactory" | kind=code-symbol | source=modules/application/src/Support/UuidIdentifierFactory.php:L8 | neighbors=[UuidIdentifierFactory.php, .make()]
- "support_visibility": "Visibility.php" | kind=code-symbol | source=modules/activity-comments/src/Support/Visibility.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, visible()]
- "support_webhooksigner": "WebhookSigner.php" | kind=code-symbol | source=modules/webhooks/src/Support/WebhookSigner.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, WebhookSigner]
- "support_webhooksigner_webhooksigner_sign": ".sign()" | kind=code-symbol | source=modules/webhooks/src/Support/WebhookSigner.php:L7 | neighbors=[WebhookSigner, .verify()]
- "support_webhooksigner_webhooksigner_verify": ".verify()" | kind=code-symbol | source=modules/webhooks/src/Support/WebhookSigner.php:L12 | neighbors=[WebhookSigner, .sign()]
- "tables_tables_he": "He()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, v()]
- "tables_tables_isgroupcollapsed": "isGroupCollapsed()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, toggleCollapseGroup()]
- "tables_tables_qe": "qe()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, C()]
- "tables_tables_selectallrecords": "selectAllRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, updatedSelectedRecords()]
- "tables_tables_togglecollapsegroup": "toggleCollapseGroup()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, isGroupCollapsed()]
- "tables_tables_z": "Z()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, fn()]
- "tables_tables_ze": "ze()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, A()]
- "team_scoped_auditable_records": "Team-scoped, authorization-aware, auditable records" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Portal integrations are independently r…, Liberu Real Estate scope]
- "tests_helpers_coveragethemepackage": "coverageThemePackage()" | kind=code-symbol | source=modules/theme-support/tests/Helpers.php:L49 | neighbors=[Helpers.php, writeCoverageTheme()]
- "tests_helpers_writecoveragetheme": "writeCoverageTheme()" | kind=code-symbol | source=modules/theme-support/tests/Helpers.php:L17 | neighbors=[Helpers.php, coverageThemePackage()]
- "tests_pest": "Pest.php" | kind=code-symbol | source=themes/real-estate-default/tests/Pest.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…, 75f7818 Bootstrap application from Libe…]
- "tests_testcase_testcase_discoveredproviders": ".discoveredProviders()" | kind=code-symbol | source=modules/settings-filament/tests/TestCase.php:L79 | neighbors=[TestCase, .getPackageProviders()]
- "tests_testcase_testcase_getpackageproviders": ".getPackageProviders()" | kind=code-symbol | source=modules/settings-filament/tests/TestCase.php:L53 | neighbors=[TestCase, .discoveredProviders()]
- "theme_discovery_realpath_dedupe": "ThemeDiscovery realpath dedupe" | kind=entity | source=themes/base/UPGRADING.md | neighbors=[liberusoftware/composer-installer, Theme rename: liberu-base becomes base …]
- "tracked_modules_directory": "Tracked modules/ Directory with Composer as Version Truth" | kind=entity | source=modules/search-api/README.md:Requirements and installation | neighbors=[liberusoftware/composer-installer, Installation Does Not Imply Enablement]
- "translation_translationregistry": "TranslationRegistry.php" | kind=code-symbol | source=modules/localization-core/src/Translation/TranslationRegistry.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TranslationRegistry]
- "transport_onthemarketclient_onthemarketclient_branchpropertylist": ".branchPropertyList()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Transport/OnTheMarketClient.php:L45 | neighbors=[OnTheMarketClient, .request()]
- "transport_onthemarketclient_onthemarketclient_removeproperty": ".removeProperty()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Transport/OnTheMarketClient.php:L37 | neighbors=[OnTheMarketClient, .request()]
- "transport_onthemarketclient_onthemarketclient_sendproperty": ".sendProperty()" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Transport/OnTheMarketClient.php:L29 | neighbors=[OnTheMarketClient, .request()]
- "transport_rightmoveclient_rightmoveclient_branchpropertylist": ".branchPropertyList()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Transport/RightmoveClient.php:L48 | neighbors=[RightmoveClient, .request()]
- "transport_rightmoveclient_rightmoveclient_removeproperty": ".removeProperty()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Transport/RightmoveClient.php:L39 | neighbors=[RightmoveClient, .request()]
- "transport_rightmoveclient_rightmoveclient_sendproperty": ".sendProperty()" | kind=code-symbol | source=modules/real-estate-rightmove/src/Transport/RightmoveClient.php:L30 | neighbors=[RightmoveClient, .request()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-158.json

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
