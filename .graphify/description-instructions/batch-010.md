# Node Description Batch 11 of 212

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

- "components_select_u": "U()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ci(), cn(), ct(), di(), fn()]
- "concept_admin_user_management": "Admin user-management enhancement" | kind=entity | source=docs/ADMIN_PANEL_ENHANCEMENTS.md | neighbors=[Admin Filament panel, Admin dashboard widgets, Filament Shield role-based access, Host boundary: /app is composition only, Tabbed user form, Users table filters and badges]
- "declared_public_boundary": "Declared Public Boundary" | kind=entity | source=modules/module-manager/README.md | neighbors=[Adapter Over One Matching Core Package, Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration, Liberu Module Manager]
- "delivery_phase_1": "Delivery phase 1: core transaction chain and website feed" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Real Estate capability: Instructions, Real Estate capability: Listings, Real Estate capability: Matching, Real Estate capability: Media and Docum…, Real Estate capability: Offers, Real Estate capability: Parties]
- "doc_messaging": "Private Messaging System (API reference)" | kind=entity | source=docs/MESSAGING.md | neighbors=[Implementation Summary, Message encryption at rest, Message Model, MessagePolicy, messages table schema, Messaging REST API endpoints]
- "doc_theme_project_summary": "Theme Project Implementation Summary" | kind=entity | source=docs/THEME_PROJECT_SUMMARY.md | neighbors=[Theme Blade directives, Theme helper functions, theme.json manifest, ThemeManager service, Theme preference persistence, ThemeServiceProvider]
- "doc_theme_visual_overview": "Theme System Visual Overview" | kind=entity | source=docs/THEME_VISUAL_OVERVIEW.md | neighbors=[Theme Project Implementation Summary, Theme Blade directives, Theme helper functions, theme.json manifest, ThemeManager service, Theme preference persistence]
- "localization_mymemory_module": "Liberu MyMemory Translation" | kind=entity | source=modules/localization-mymemory/README.md | neighbors=[Capability: localization.machine-transl…, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration, Installation Does Not Imply Enablement]
- "organizations_teams_filament_module": "Liberu Organizations Administration" | kind=entity | source=modules/organizations-teams-filament/README.md | neighbors=[Capability: foundation.organizations.fi…, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration, Filament 5]
- "stat_chart_buildorupdatecontrollers": "buildOrUpdateControllers()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _destroyDatasetMeta(), getController(), getDatasetMeta(), getElement(), isDatasetVisible()]
- "stat_chart_configure": "configure()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, createResolver(), datasetScopeKeys(), getContext(), getDataset(), getOptionScopes()]
- "stat_chart_getpixelforvalue": "getPixelForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeGridLineItems(), _computeLabelItems(), Ds(), fr(), getBasePixel()]
- "stat_chart_pl": "pl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, fit(), getIndexAngle(), getPointLabelContext(), getPointPosition(), gl()]
- "stat_chart_t": "T()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), el(), En(), getAllParsedValues(), getUserBounds()]
- "support_support_cn": "Cn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ca(), fn(), Gi(), Ie(), ii()]
- "support_support_ht": "ht()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, _a(), Bi(), eo(), Fa(), Gi()]
- "support_support_vn": "Vn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Hi(), ma(), Cn(), ct(), Dn()]
- "capability_declaration": "Capability Declaration" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, module:features Console Command, Liberu Module Manager Administration, Liberu Module Manager]
- "columns_select_closedropdown": "closeDropdown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getVisibleOptions(), hideLoadingState(), hideMaxItemsMessage(), destroy(), disable()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@44c23532a4b600a6392388836cfc44e89caf4140": "44c2353 Add real estate valuations core module" | kind=Commit | source=git | neighbors=[CreateValuation.php, DeleteValuation.php, UpdateValuation.php, main, 188c376 Add real estate valuations API …, ValuationStatus.php]
- "components_chart_determinedatalimits": "determineDataLimits()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, endOf(), _getLabelBounds(), getLabels(), getMinMax(), getUserBounds()]
- "components_chart_diff": "diff()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, count(), Am(), invalid(), negate(), valueOf()]
- "components_chart_drawtitle": "drawTitle()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), B(), _computeTitleHeight(), E(), isHorizontal()]
- "components_chart_each": "_each()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, add(), addControllers(), addElements(), addPlugins(), addScales()]
- "components_chart_getparsed": "getParsed()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _calculateBarValuePixels(), draw(), getContext(), getLabelAndValue()]
- "components_chart_gt": "Gt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, clone(), mapUnits(), negate(), normalize(), plus()]
- "components_chart_qs": "Qs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dn(), ce(), fromJSDate(), fromObject(), isDateTime()]
- "components_chart_ra": "ra()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), fit(), B(), I(), parse()]
- "components_chart_startof": "startOf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, count(), determineDataLimits(), endOf(), _generate(), hasSame()]
- "components_code_editor_apply": "apply()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, advanceStack(), changes(), mapPos(), Ns(), reduce()]
- "components_code_editor_applychanges": "applyChanges()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, build(), lineAt(), replace(), setDoc(), updateHeight()]
- "components_code_editor_build": "build()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, applyChanges(), cX(), facet(), finish(), j$()]
- "components_code_editor_define": "define()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, configure(), add(), create(), or(), domEventHandlers()]
- "components_code_editor_endline": "endLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addBlockWidget(), addBreak(), addLine(), append(), findWidget()]
- "components_code_editor_enter": "enter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, advance(), au(), enterChild(), findChild(), get()]
- "components_code_editor_firstchild": "firstChild()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, child(), enterChild(), nextChild(), highlightRange(), iterate()]
- "components_code_editor_forcereduce": "forceReduce()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), advanceStack(), forceAll(), findForcedReduction(), getGoto()]
- "components_code_editor_getchild": "getChild()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, eS(), Ex(), $f(), Nd(), ImportStatement()]
- "components_code_editor_highlightrange": "highlightRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, cursor(), enter(), firstChild(), gX(), mX()]
- "components_code_editor_jp": "jP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsAtPos(), cursor(), get(), ignoreEvent(), isWidget()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-010.json

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
