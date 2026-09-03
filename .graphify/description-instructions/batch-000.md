# Node Description Batch 1 of 212

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

- "components_code_editor": "code-editor.js" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, code-editor.js, a$(), aa()]
- "components_rich_editor": "rich-editor.js" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[45479e6 Merge pull request #1301 from l…, 4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, e90c0cd fix(panels): let every role ope…]
- "components_chart": "chart.js" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e02669d Update vite and plugins to late…, f72c39d Upgrade to Laravel 13, PHPUnit …, $a()]
- "stat_chart": "chart.js" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, f72c39d Upgrade to Laravel 13, PHPUnit …, chart.js]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@75f781861fc8bd8544f7c0ae6cdf81aa2fa8ad87": "75f7818 Bootstrap application from Liberu Laravel Boilerplate" | kind=Commit | source=git | neighbors=[0cf7b7c Fix permissions seeder completi…, AcceptInvitation.php, actions.js, CreateConnectedAccount.php, CreateUserFromProvider.php, GenerateRedirectForProvider.php]
- "components_markdown_editor": "markdown-editor.js" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[45479e6 Merge pull request #1301 from l…, 4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, e90c0cd fix(panels): let every role ope…]
- "support_support": "support.js" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, f72c39d Upgrade to Laravel 13, PHPUnit …, support.js]
- "branch:repo:github.com/liberu-real-estate/real-estate-laravel#main": "main" | kind=Branch | source=git | neighbors=[000ccd5 fix: close the media route, and…, 0094406 Add contractor maintenance work…, 052e63b Update dependencies, 056e34b Fix PermissionsSeeder to use sh…, 0755a5b feat(design): acceptance sweep …, 0812f9b Update main workflow Docker wit…]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@2f186703fc88af88eb8333701cacf2a29ead66f9": "2f18670 Conform real estate modules and harden presentation boundaries" | kind=Commit | source=git | neighbors=[12bd6e1 Conform real estate modules to …, CalculateComparables.php, CancelViewing.php, CompleteValuation.php, CompleteViewing.php, ConfirmViewing.php]
- "components_select": "select.js" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, A(), addBadgesForSelectedOptions(), addSingleBadge()]
- "columns_select": "select.js" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[A(), addBadgesForSelectedOptions(), addSingleBadge(), addSingleSelectionDisplay(), ae(), An()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@6385f2869f3dfab5526e1dedf599bf246ed37a3b": "6385f28 Add sales progression modules and format package code" | kind=Commit | source=git | neighbors=[42c9c7f Add real estate offers module s…, CreateInstruction.php, CreateListing.php, CreateMatchProfile.php, CreateOffer.php, CreateSalesProgression.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8cf045c321ce7d0b7980241877da532006ce2d9b": "8cf045c Implement real estate module conformance" | kind=Commit | source=git | neighbors=[10d5d92 Pin module sources to HTTPS con…, CalculateComparables.php, CancelViewing.php, CompleteValuation.php, CompleteViewing.php, ConfirmViewing.php]
- "components_code_editor_update": "update()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, accept(), addElement(), constructor(), d0(), dispatch()]
- "components_code_editor_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, add(), addEventListener(), addWindowListeners(), advance(), applyChanges()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@b16f206f76f26285695366ce303af44640c1d7c9": "b16f206 Update dependencies including to Laravel 13, PHP 8.5, Filament 5 and Li…" | kind=Commit | source=git | neighbors=[actions.js, login.blade.php, register.blade.php, two-factor-challenge.blade.php, verify-email.blade.php, app.php]
- "components_rich_editor_resolve": "resolve()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), after(), ag(), al(), apply()]
- "components_code_editor_slice": "slice()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, advance(), applyTransaction(), ATXHeading(), _c(), c0()]
- "components_chart_update": "_update()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, reset(), $a(), add(), addElements(), afterAutoSkip()]
- "components_code_editor_facet": "facet()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, accept(), applyTransaction(), au(), bd(), bf()]
- "components_code_editor_of": "of()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, accept(), addComposition(), addText(), balanced(), baseTheme()]
- "components_file_upload": "file-upload.js" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e02669d Update vite and plugins to late…, e3f0f4c Update dependencies, f72c39d Upgrade to Laravel 13, PHPUnit …]
- "components_rich_editor_node": "node()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ag(), apply(), blockRange(), Bs(), Cd()]
- "tables_tables": "tables.js" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, tables.js, A(), ae()]
- "components_markdown_editor_y": "y()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, al(), at(), Cn(), Cr(), Ct()]
- "components_rich_editor_slice": "slice()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addTextNode(), addToSet(), addTransform(), ag(), allowedMarks()]
- "filament_echo": "echo.js" | kind=code-symbol | source=public/js/filament/filament/echo.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, echo.js, a(), ar()]
- "components_rich_editor_create": "create()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, add(), addElementByRule(), addNode(), addTextNode(), apply()]
- "components_code_editor_lineat": "lineAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, applyChanges(), as(), baseIndentFor(), bidiSpansAt(), blankContent()]
- "components_code_editor_create": "create()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, addRange(), advance(), aP(), cc(), cd()]
- "components_rich_editor_foreach": "forEach()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addElementByRule(), addInner(), attachHandles(), aw(), bl()]
- "stat_chart_update": "_update()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, reset(), add(), afterAutoSkip(), afterBuildTicks(), afterCalculateLabelRotation()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1cdd1218e9ade2ba2d506df311a44f09d3d7bb82": "1cdd121 Add independent property portal integrations" | kind=Commit | source=git | neighbors=[CreateOnTheMarketSync.php, CreateRightmoveSync.php, CreateZooplaSync.php, DeleteOnTheMarketSync.php, DeleteRightmoveSync.php, DeleteZooplaSync.php]
- "components_rich_editor_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, add(), applyInitialSize(), attachHandles(), before(), Bo()]
- "notifications_notifications": "notifications.js" | kind=code-symbol | source=public/js/filament/notifications/notifications.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e02669d Update vite and plugins to late…, e3f0f4c Update dependencies, f72c39d Upgrade to Laravel 13, PHPUnit …]
- "routes_api": "api.php" | kind=code-symbol | source=routes/api.php:L1 | neighbors=[0094406 Add contractor maintenance work…, 0812f9b Update main workflow Docker wit…, 0b4ddca Expand real estate agency API s…, 0b515d4 Add property marketing and emai…, 0b733c9 Add real estate core module sur…, 11d0aae Add real estate media documents…]
- "components_code_editor_advance": "advance()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addNode(), advanceStack(), break(), cm(), create()]
- "components_rich_editor_from": "from()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, apply(), bu(), cg(), compress(), constructor()]
- "components_rich_editor_child": "child()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, AS(), canReplace(), Cc(), cg(), childBefore()]
- "components_slider": "slider.js" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, Ae(), ar(), Be()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-000.json

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
