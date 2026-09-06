# Node Description Batch 188 of 212

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

- "livewire_languageswitcher_languageswitcher_mount": ".mount()" | kind=code-symbol | source=modules/localization-core-livewire/src/Livewire/LanguageSwitcher.php:L18 | neighbors=[LanguageSwitcher]
- "livewire_languageswitcher_languageswitcher_render": ".render()" | kind=code-symbol | source=modules/localization-core-livewire/src/Livewire/LanguageSwitcher.php:L39 | neighbors=[LanguageSwitcher]
- "livewire_languageswitcher_languageswitcher_switchlanguage": ".switchLanguage()" | kind=code-symbol | source=modules/localization-core-livewire/src/Livewire/LanguageSwitcher.php:L24 | neighbors=[LanguageSwitcher]
- "livewire_theme_switcher_blade": "theme-switcher.blade.php" | kind=code-symbol | source=modules/theme-support-livewire/resources/views/livewire/theme-switcher.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "livewire_themeswitcher_themeswitcher_mount": ".mount()" | kind=code-symbol | source=modules/theme-support-livewire/src/Livewire/ThemeSwitcher.php:L16 | neighbors=[ThemeSwitcher]
- "livewire_themeswitcher_themeswitcher_render": ".render()" | kind=code-symbol | source=modules/theme-support-livewire/src/Livewire/ThemeSwitcher.php:L42 | neighbors=[ThemeSwitcher]
- "livewire_themeswitcher_themeswitcher_switchtheme": ".switchTheme()" | kind=code-symbol | source=modules/theme-support-livewire/src/Livewire/ThemeSwitcher.php:L23 | neighbors=[ThemeSwitcher]
- "manifests_thememanifest_thememanifest_assets": ".assets()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L63 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_construct": ".__construct()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L9 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_fromfile": ".fromFile()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L11 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_name": ".name()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L33 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_optionalcapabilities": ".optionalCapabilities()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L73 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_parent": ".parent()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L58 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_provider": ".provider()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L48 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_requiredcapabilities": ".requiredCapabilities()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L68 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_type": ".type()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L53 | neighbors=[ThemeManifest]
- "manifests_thememanifest_thememanifest_version": ".version()" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L43 | neighbors=[ThemeManifest]
- "mcp_command_php": "php" | kind=code-symbol | source=.cursor/mcp.json:L1 | neighbors=[laravel-boost]
- "mcp_command_usr_local_bin_php": "/usr/local/bin/php" | kind=code-symbol | source=.junie/mcp/mcp.json:L1 | neighbors=[laravel-boost]
- "metrics_contract": "Metrics Contract" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Observability]
- "middleware_correlationid_correlationid_handle": ".handle()" | kind=code-symbol | source=modules/observability/src/Http/Middleware/CorrelationId.php:L13 | neighbors=[CorrelationId]
- "middleware_idempotency_idempotency_construct": ".__construct()" | kind=code-symbol | source=modules/api-access/src/Http/Middleware/Idempotency.php:L14 | neighbors=[Idempotency]
- "middleware_idempotency_idempotency_handle": ".handle()" | kind=code-symbol | source=modules/api-access/src/Http/Middleware/Idempotency.php:L16 | neighbors=[Idempotency]
- "middleware_securityheaders_securityheaders_handle": ".handle()" | kind=code-symbol | source=modules/application/src/Http/Middleware/SecurityHeaders.php:L18 | neighbors=[SecurityHeaders]
- "middleware_setlocale_setlocale_construct": ".__construct()" | kind=code-symbol | source=modules/localization-core/src/Http/Middleware/SetLocale.php:L17 | neighbors=[SetLocale]
- "middleware_setlocale_setlocale_handle": ".handle()" | kind=code-symbol | source=modules/localization-core/src/Http/Middleware/SetLocale.php:L23 | neighbors=[SetLocale]
- "migrations_0001_01_01_000000_create_users_table_down": "down()" | kind=code-symbol | source=database/migrations/0001_01_01_000000_create_users_table.php:L37 | neighbors=[0001_01_01_000000_create_users_table.php]
- "migrations_0001_01_01_000000_create_users_table_up": "up()" | kind=code-symbol | source=database/migrations/0001_01_01_000000_create_users_table.php:L12 | neighbors=[0001_01_01_000000_create_users_table.php]
- "migrations_0001_01_01_000001_create_cache_table_down": "down()" | kind=code-symbol | source=database/migrations/0001_01_01_000001_create_cache_table.php:L30 | neighbors=[0001_01_01_000001_create_cache_table.php]
- "migrations_0001_01_01_000001_create_cache_table_up": "up()" | kind=code-symbol | source=database/migrations/0001_01_01_000001_create_cache_table.php:L12 | neighbors=[0001_01_01_000001_create_cache_table.php]
- "migrations_0001_01_01_000002_create_jobs_table_down": "down()" | kind=code-symbol | source=database/migrations/0001_01_01_000002_create_jobs_table.php:L53 | neighbors=[0001_01_01_000002_create_jobs_table.php]
- "migrations_0001_01_01_000002_create_jobs_table_up": "up()" | kind=code-symbol | source=database/migrations/0001_01_01_000002_create_jobs_table.php:L12 | neighbors=[0001_01_01_000002_create_jobs_table.php]
- "migrations_0001_01_01_000003_create_sessions_table_down": "down()" | kind=code-symbol | source=modules/sessions-devices/database/migrations/0001_01_01_000003_create_sessions_table.php:L21 | neighbors=[0001_01_01_000003_create_sessions_table…]
- "migrations_0001_01_01_000003_create_sessions_table_up": "up()" | kind=code-symbol | source=modules/sessions-devices/database/migrations/0001_01_01_000003_create_sessions_table.php:L9 | neighbors=[0001_01_01_000003_create_sessions_table…]
- "migrations_2020_05_21_100000_create_teams_table_down": "down()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_100000_create_teams_table.php:L26 | neighbors=[2020_05_21_100000_create_teams_table.php]
- "migrations_2020_05_21_100000_create_teams_table_up": "up()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_100000_create_teams_table.php:L12 | neighbors=[2020_05_21_100000_create_teams_table.php]
- "migrations_2020_05_21_200000_create_team_user_table_down": "down()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_200000_create_team_user_table.php:L28 | neighbors=[2020_05_21_200000_create_team_user_tabl…]
- "migrations_2020_05_21_200000_create_team_user_table_up": "up()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_200000_create_team_user_table.php:L12 | neighbors=[2020_05_21_200000_create_team_user_tabl…]
- "migrations_2020_05_21_300000_create_team_invitations_table_down": "down()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_300000_create_team_invitations_table.php:L28 | neighbors=[2020_05_21_300000_create_team_invitatio…]
- "migrations_2020_05_21_300000_create_team_invitations_table_up": "up()" | kind=code-symbol | source=modules/organizations-teams/database/migrations/2020_05_21_300000_create_team_invitations_table.php:L12 | neighbors=[2020_05_21_300000_create_team_invitatio…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-187.json

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
