# Node Description Batch 120 of 212

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

- "columns_select_setupeventlisteners": "setUpEventListeners()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, constructor()]
- "columns_select_tn": "tn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ei()]
- "columns_select_updateoptionlabelinlist": "updateOptionLabelInList()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getVisibleOptions()]
- "columns_select_ve": "ve()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, jn()]
- "columns_select_yn": "yn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, it()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@529d0fd80c8be60a3925138e4377ce1446f2ddd6": "529d0fd Update docker" | kind=Commit | source=git | neighbors=[main, d1b5534 Update installer and setup]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d77f367c54bc638894935795741d7e5cf41076f3": "d77f367 Fix MySQL CI failures by using service container instead of /etc/init.d…" | kind=Commit | source=git | neighbors=[main, de6d29d Merge pull request #1250 from l…]
- "components_action_link_blade": "action-link.blade.php" | kind=code-symbol | source=resources/views/components/action-link.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_actions_init": "init()" | kind=code-symbol | source=public/js/filament/schemas/components/actions.js:L1 | neighbors=[actions.js, updateWidth()]
- "components_actions_updatewidth": "updateWidth()" | kind=code-symbol | source=public/js/filament/schemas/components/actions.js:L1 | neighbors=[actions.js, init()]
- "components_agencylist_agencylist": "AgencyList" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/AgencyList.php:L12 | neighbors=[AgencyList.php, .render()]
- "components_branchlist_branchlist": "BranchList" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/BranchList.php:L12 | neighbors=[BranchList.php, .render()]
- "components_button_blade": "button.blade.php" | kind=code-symbol | source=resources/views/components/button.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "components_chart_addcontrollers": "addControllers()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _each()]
- "components_chart_addplugins": "addPlugins()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _each()]
- "components_chart_addscales": "addScales()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _each()]
- "components_chart_alpha": "alpha()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Kt()]
- "components_chart_an": "An()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _handleEvent()]
- "components_chart_aspectratio": "aspectRatio()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, I()]
- "components_chart_bc": "Bc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor()]
- "components_chart_bd": "bd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _updateHiddenIndices()]
- "components_chart_beforedatasetdraw": "beforeDatasetDraw()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ar()]
- "components_chart_beforelayout": "beforeLayout()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, jd()]
- "components_chart_bg": "bg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor()]
- "components_chart_bh": "bh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, $t()]
- "components_chart_bo": "bo()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Un()]
- "components_chart_bt": "Bt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Xn()]
- "components_chart_buildformatparser": "buildFormatParser()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromOpts()]
- "components_chart_buildlookuptable": "buildLookupTable()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, initOffsets()]
- "components_chart_c": "$c()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, hexString()]
- "components_chart_calculatecircumference": "calculateCircumference()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _circumference()]
- "components_chart_cd": "cd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, aa()]
- "components_chart_co": "co()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Yc()]
- "components_chart_computelabelarea": "_computeLabelArea()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, drawLabels()]
- "components_chart_contains": "contains()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, gi()]
- "components_chart_countvisibleelements": "countVisibleElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, updateElements()]
- "components_chart_d": "_d()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, sd()]
- "components_chart_data": "data()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Za()]
- "components_chart_datasetanimationscopekeys": "datasetAnimationScopeKeys()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _resolveAnimations()]
- "components_chart_datasetelementscopekeys": "datasetElementScopeKeys()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _resolveElementOptions()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-119.json

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
