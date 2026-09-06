# Node Description Batch 186 of 212

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

- "feature_superadmingateteamagnostictest_makesuperadmin": "makeSuperAdmin()" | kind=code-symbol | source=tests/Feature/SuperAdminGateTeamAgnosticTest.php:L15 | neighbors=[SuperAdminGateTeamAgnosticTest.php]
- "feature_teampolicytest": "TeamPolicyTest.php" | kind=code-symbol | source=tests/Feature/TeamPolicyTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_teamresourcetest": "TeamResourceTest.php" | kind=code-symbol | source=tests/Feature/TeamResourceTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_teamscopedpermissiontest": "TeamScopedPermissionTest.php" | kind=code-symbol | source=tests/Feature/TeamScopedPermissionTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_thememanifesttest": "ThemeManifestTest.php" | kind=code-symbol | source=themes/real-estate-default/tests/Feature/ThemeManifestTest.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "feature_themeprovidertest": "ThemeProviderTest.php" | kind=code-symbol | source=themes/real-estate-default/tests/Feature/ThemeProviderTest.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "feature_themeserviceprovidertest": "ThemeServiceProviderTest.php" | kind=code-symbol | source=tests/Feature/ThemeServiceProviderTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_themesiteresolutiontest": "ThemeSiteResolutionTest.php" | kind=code-symbol | source=tests/Feature/ThemeSiteResolutionTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_themeswitchertest": "ThemeSwitcherTest.php" | kind=code-symbol | source=modules/theme-support-livewire/tests/Feature/ThemeSwitcherTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_themevitedirectivetest": "ThemeViteDirectiveTest.php" | kind=code-symbol | source=tests/Feature/ThemeViteDirectiveTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_userresourcetest": "UserResourceTest.php" | kind=code-symbol | source=tests/Feature/UserResourceTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "feature_welcomelandingtest": "WelcomeLandingTest.php" | kind=code-symbol | source=tests/Feature/WelcomeLandingTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "filament_adminpanelprovider_adminpanelprovider_panel": ".panel()" | kind=code-symbol | source=app/Providers/Filament/AdminPanelProvider.php:L29 | neighbors=[AdminPanelProvider]
- "filament_app_collapsegroup": "collapseGroup()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_e": "E()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_f": "F()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_groupiscollapsed": "groupIsCollapsed()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_h": "H()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_j": "J()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_open": "open()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_togglecollapsedgroup": "toggleCollapsedGroup()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_u": "U()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_app_v": "V()" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[app.js]
- "filament_apppanelprovider_apppanelprovider_panel": ".panel()" | kind=code-symbol | source=app/Providers/Filament/AppPanelProvider.php:L27 | neighbors=[AppPanelProvider]
- "filament_echo_at": "at()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js]
- "filament_echo_b": "b()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_c": "C()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_gt": "gt()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_ie": "Ie()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_ir": "ir()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_kt": "Kt()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js]
- "filament_echo_n": "N()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_ot": "ot()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_pr": "Pr()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js]
- "filament_echo_qe": "qe()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_re": "Re()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_tr": "Tr()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js]
- "filament_echo_u": "U()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_ue": "Ue()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[echo.js]
- "filament_echo_ui": "ui()" | kind=code-symbol | source=public/js/filament/filament/echo.js:L2 | neighbors=[echo.js]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-185.json

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
