# Node Description Batch 9 of 212

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

- "manifests_thememanifest_thememanifest": "ThemeManifest" | kind=code-symbol | source=modules/theme-support/src/Manifests/ThemeManifest.php:L7 | neighbors=[ThemeManifest.php, .assets(), .__construct(), .displayName(), .fromFile(), .name()]
- "models_user": "User.php" | kind=code-symbol | source=app/Models/User.php:L1 | neighbors=[45479e6 Merge pull request #1301 from l…, 482a093 Implement core real estate prod…, 6ea3c29 Add granular agency permissions…, 75f7818 Bootstrap application from Libe…, 96fc310 Add staff and department manage…, a78602e Merge pull request #1253 from l…]
- "module_category_foundation": "Module category: foundation" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Liberu Activity and Comments, Liberu Analytics Core, Liberu API Access, Liberu Application Core, Liberu Audit, Liberu Currency Context]
- "module_manager_package": "liberusoftware/module-manager" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Liberu Activity and Comments, Liberu Analytics Core, Liberu Application Core, Liberu Audit, Liberu Currency Context, Liberu Developer Experience]
- "notifications_module": "Liberu Notifications" | kind=entity | source=modules/notifications/README.md | neighbors=[Capability: foundation.notifications, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration, Installation Does Not Imply Enablement]
- "policies_rolepolicy_rolepolicy": "RolePolicy" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L11 | neighbors=[RolePolicy.php, .create(), .delete(), .deleteAny(), .forceDelete(), .forceDeleteAny()]
- "policies_teampolicy_teampolicy": "TeamPolicy" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L11 | neighbors=[TeamPolicy.php, .create(), .delete(), .deleteAny(), .forceDelete(), .forceDeleteAny()]
- "profiles_module": "Liberu Profiles" | kind=entity | source=modules/profiles/README.md | neighbors=[Capability: identity.profiles, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration, Liberu Identity]
- "stat_chart_add": "add()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each(), _getAnims(), wt(), be(), _generate()]
- "stat_chart_computelabelitems": "_computeLabelItems()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), getContext(), _getLabelSizes(), getPixelForTick(), getPixelForValue()]
- "stat_chart_get": "get()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, be(), _cachedScopes(), _createAnimations(), fo(), Gt()]
- "stat_chart_w": "W()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bindUserEvents(), buildOrUpdateScales(), cr(), ensureScalesHaveIDs(), _resetElements()]
- "support_support_i": "I()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, _a(), Hi(), c(), Mt(), Or()]
- "support_support_s": "S()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ar(), En(), g(), Hn(), J()]
- "tables_tables_v": "v()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, C(), ce(), ge(), He(), me()]
- "actions_actions": "actions.js" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[closeModal(), destroy(), generateModalId(), getActionNestingIndexFromModalId(), init(), openModal()]
- "columns_select_ct": "ct()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, bi(), re(), U(), dn(), fi()]
- "columns_select_it": "it()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ae(), bi(), gn(), U(), Me()]
- "columns_select_renderoptions": "renderOptions()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, filterOptions(), handleSearch(), openDropdown(), render(), closeDropdown()]
- "columns_select_u": "U()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ci(), cn(), ct(), di(), Et()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@31725468893e94cbf0417f4ca905e47bfff64b78": "3172546 Add valuations Filament and Livewire adapters" | kind=Commit | source=git | neighbors=[188c376 Add real estate valuations API …, main, 522809b Add real estate instructions mo…, ValuationList.php, CreateValuation.php, EditValuation.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@72d35f5433c925aff6e57a30e41a1171bbe95607": "72d35f5 Add media documents Filament and Livewire adapters" | kind=Commit | source=git | neighbors=[11d0aae Add real estate media documents…, main, 44c2353 Add real estate valuations core…, MediaDocumentList.php, CreateMediaDocument.php, EditMediaDocument.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f358830717c3dd5b916bb01d6da2a989a075ed8f": "f358830 chore: trim the comments, and wire the social providers to env" | kind=Commit | source=git | neighbors=[7a789a0 feat(auth): put the sign-in jou…, login.blade.php, register.blade.php, two-factor-challenge.blade.php, verify-email.blade.php, main]
- "components_chart_ar": "ar()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, dn(), getDatasetMeta(), getMinDaysInFirstWeek(), getStartOfWeek(), He()]
- "components_chart_buildorupdatecontrollers": "buildOrUpdateControllers()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _destroyDatasetMeta(), getController(), getDatasetMeta(), getElement(), isDatasetVisible()]
- "components_chart_calculatebarvaluepixels": "_calculateBarValuePixels()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, applyStack(), cu(), er(), getDataVisibility(), getLineWidthForValue()]
- "components_chart_f": "_f()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getIndexAngle(), getPointLabelContext(), getPointPosition(), jf(), ks()]
- "components_chart_ll": "Ll()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ae(), cc(), fromObject(), Gm(), invalid()]
- "components_chart_now": "now()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, cancel(), constructor(), _createAnimations(), determineDataLimits(), diffNow()]
- "components_chart_offset": "offset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Al(), constructor(), formatOffset(), fromObject(), getPossibleOffsets()]
- "components_chart_resolveanimations": "_resolveAnimations()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, createResolver(), datasetAnimationScopeKeys(), getContext(), getDataset(), getOptionScopes()]
- "components_chart_set": "set()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bl(), dn(), fn(), fromDateTimes(), Gt()]
- "components_code_editor_addeventlistener": "addEventListener()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, addWindowListeners(), constructor(), createListBox(), ensureHandlers(), Hs()]
- "components_code_editor_between": "between()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, findIndex(), Fn(), g0(), hO(), K$()]
- "components_code_editor_configure": "configure()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, bi(), create(), define(), extend(), kr()]
- "components_code_editor_ct": "ct()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, ATXHeading(), cm(), cP(), fm(), qc()]
- "components_code_editor_enterchild": "enterChild()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, childAfter(), childBefore(), enter(), findChild(), nextChild()]
- "components_code_editor_es": "eS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, childAfter(), childBefore(), cursor(), focus(), getChild()]
- "components_code_editor_i": "_i()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, constructor(), facet(), field(), Hs(), coordsAtPos()]
- "components_code_editor_is": "is()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, applyTransaction(), constructor(), create(), prop(), slice()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-008.json

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
