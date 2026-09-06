# Node Description Batch 16 of 212

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

- "support_support_y": "y()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ar(), Hn(), I(), lr(), m()]
- "tables_tables_a": "A()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ge(), be(), E(), Ie(), je()]
- "tables_tables_c": "C()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), B(), v(), Ie(), j()]
- "tables_tables_r": "R()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), be(), j(), je(), oe()]
- "tables_tables_se": "Se()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), I(), M(), pe(), R()]
- "auth_login_blade": "login.blade.php" | kind=code-symbol | source=resources/views/auth/login.blade.php:L1 | neighbors=[0812f9b Update main workflow Docker wit…, 30d2b7d Add socialstream, Docker/k8s up…, 675053f Add modules system, security ha…, 75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…]
- "auth_register_blade": "register.blade.php" | kind=code-symbol | source=resources/views/auth/register.blade.php:L1 | neighbors=[0812f9b Update main workflow Docker wit…, 30d2b7d Add socialstream, Docker/k8s up…, 750c68d Add socialstream, agent role, k…, 75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…]
- "columns_select_f": "F()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, b(), $i(), _n(), pe(), Rn()]
- "columns_select_getvisibleoptions": "getVisibleOptions()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown(), focusNextOption(), focusPreviousOption(), handleDropdownKeydown(), handleSelectButtonKeydown()]
- "columns_select_selectoption": "selectOption()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, addSingleBadge(), closeDropdown(), deferPositionDropdown(), hideMaxItemsMessage(), maintainFocusInMultipleMode()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@30d2b7d81ea8934771178f863d968ea3763ed3c4": "30d2b7d Add socialstream, Docker/k8s upgrades, security improvements, and expan…" | kind=Commit | source=git | neighbors=[login.blade.php, register.blade.php, app.php, main, 0812f9b Update main workflow Docker wit…, modules.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@45479e6fb2461997a777defaa9a5d0cb585de3dd": "45479e6 Merge pull request #1301 from liberusoftware/panel-access-and-dashboards" | kind=Commit | source=git | neighbors=[main, 42d4a59 Update dependencies, markdown-editor.js, rich-editor.js, filament-shield.php, app.js]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@750c68dbfdcf8f92eb28c5824717ddfdda4d4a89": "750c68d Add socialstream, agent role, k8s overlays, and comprehensive role perm…" | kind=Commit | source=git | neighbors=[register.blade.php, app.php, main, 675053f Add modules system, security ha…, app.php, api.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e3c21d018992e198c9721be689d645859dcbf405": "e3c21d0 bugfixes and updates. joelbutcher discontinued" | kind=Commit | source=git | neighbors=[dd84f8a Update setup.sh branding to Lib…, main, aca82ae Merge branch 'main' of github.c…, app.php, filament-shield.php, jetstream.php]
- "components_chart_calculatelabelrotation": "calculateLabelRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _getLabelSizes(), isHorizontal(), _isVisible(), K(), ks()]
- "components_chart_clone": "clone()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, create(), Gt(), reconfigure(), redefaultToEN(), redefaultToSystem()]
- "components_chart_computegridlineitems": "_computeGridLineItems()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, E(), getContext(), getPixelForValue(), Ht(), isHorizontal()]
- "components_chart_destroy": "_destroy()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, As(), clearCache(), notifyPlugins(), releaseContext(), Ti()]
- "components_chart_drawcolorbox": "_drawColorBox()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawBody(), E(), jt(), leftForLtr(), Ts()]
- "components_chart_fromiso": "fromISO()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, after(), before(), fromDateTimes(), fromObject(), invalid()]
- "components_chart_generate": "_generate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildTicks(), add(), diff(), getDataTimestamps(), _getLabelCapacity()]
- "components_chart_getmatchingvisiblemetas": "getMatchingVisibleMetas()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, af(), getDataTimestamps(), getSortedVisibleDatasetMetas(), getMinMax(), _getStacks()]
- "components_chart_getoptionscopes": "getOptionScopes()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, configure(), _cachedScopes(), create(), get(), has()]
- "components_chart_getsortedvisibledatasetmetas": "getSortedVisibleDatasetMetas()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, beforeDatasetsDraw(), beforeDraw(), _drawDatasets(), getMatchingVisibleMetas(), _getSortedDatasetMetas()]
- "components_chart_getuserbounds": "getUserBounds()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), Gd(), getMinMax(), at(), Y()]
- "components_chart_hf": "hf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ar(), B(), df(), of(), sl()]
- "components_chart_isdatasetvisible": "isDatasetVisible()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterDatasetsUpdate(), buildOrUpdateControllers(), getMaxBorderWidth(), _getRingWeightOffset(), _getRotationExtents()]
- "components_chart_jt": "jt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), drawBackground(), _drawColorBox(), fd(), getCaretPosition()]
- "components_chart_k": "K()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), Gd(), initOffsets(), kd(), ki()]
- "components_chart_normalize": "normalize()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getDataTimestamps(), getLabelTimestamps(), _getTimestampsForTable(), Gt(), Ml()]
- "components_chart_notify": "_notify()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, cancel(), _createDescriptors(), _descriptors(), W(), _notifyStateChanges()]
- "components_chart_of": "of()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, hf(), af(), getDataset(), getDatasetMeta(), getLabelAndValue()]
- "components_chart_oi": "oi()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, darken(), desaturate(), lighten(), Mn(), rotate()]
- "components_chart_resize": "resize()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, initialize(), getDevicePixelRatio(), getMaximumSize(), Ii(), notifyPlugins()]
- "components_chart_shiftto": "shiftTo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Am(), As(), formatDurationFromString(), ce(), Gt()]
- "components_chart_valueof": "valueOf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, count(), diff(), equals(), fromJSDate(), hasSame()]
- "components_code_editor_char": "char()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, Emphasis(), Escape(), HardBreak(), Image(), InlineCode()]
- "components_code_editor_child": "child()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, addNamespaceObject(), create(), findChild(), childAfter(), childBefore()]
- "components_code_editor_coordsat": "coordsAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsIn(), coordsInWidget(), isWidget(), resolveBlock(), coordsAtPos()]
- "components_code_editor_dx": "dX()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, childAfter(), childBefore(), cursor(), Jo(), Ko()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-015.json

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
