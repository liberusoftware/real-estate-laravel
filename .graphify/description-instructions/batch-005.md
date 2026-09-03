# Node Description Batch 6 of 212

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

- "components_rich_editor_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, destroyPluginViews(), emit(), forEach(), hide(), off()]
- "components_rich_editor_map": "map()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, between(), colSelection(), from(), getMirror(), isColSelection()]
- "components_rich_editor_matchtype": "matchType()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ag(), bu(), canReplaceWith(), computeWrapping(), enterInner()]
- "components_rich_editor_scrollintoview": "scrollIntoView()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, cm(), Dc(), hd(), It(), js()]
- "components_rich_editor_ss": "Ss()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, findCloseLevel(), mustMoveInline(), compatibleContent(), create(), dg()]
- "components_rich_editor_ts": "Ts()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, ag(), clearIncompatible(), allowedMarks(), allowsMarkType(), child()]
- "components_rich_editor_vg": "vg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, Cd(), copy(), create(), e(), end()]
- "doc_handoff_testbench_migration": "Handoff: Step 4 Testbench Migration (2026-08-05)" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Host architecture boundary rules, docs/CONFORMANCE.md, Handoffs live in docs/handoffs/, scripts/migrate-testbench, modules/ is Composer output, Package-owned tests]
- "doc_theme_architecture": "Theme Architecture" | kind=entity | source=docs/THEME_ARCHITECTURE.md | neighbors=[liberusoftware/composer-installer, Deterministic theme builds, liberu-theme Composer package, Semantic design tokens, Theme accessibility requirements, liberusoftware/theme-base]
- "localization_core_module": "Liberu Localization" | kind=entity | source=modules/localization-core/README.md | neighbors=[Liberu Localization Livewire, Capability: foundation.localization, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration]
- "stat_chart_notifyplugins": "notifyPlugins()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _callHooks(), _destroy(), draw(), _drawDataset(), _drawDatasets()]
- "columns_select_fn": "fn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Ce(), de(), ei(), Ft(), Le()]
- "components_chart_computelabelitems": "_computeLabelItems()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, B(), E(), getContext(), _getLabelSizes(), getPixelForTick()]
- "components_chart_configure": "configure()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, beforeUpdate(), createResolver(), datasetScopeKeys(), E(), getContext()]
- "components_chart_fit": "fit()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculatePadding(), _computeTitleHeight(), _fitCols(), _fitRows(), _getLabelSizes()]
- "components_chart_setzone": "setZone()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), hasDST(), hasSame(), ae(), equals()]
- "components_code_editor_addnode": "addNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, addLeafElement(), addChild(), prevLineEnd(), advance(), ATXHeading()]
- "components_code_editor_advancestack": "advanceStack()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advance(), advanceFully(), apply(), forceReduce(), getActions()]
- "components_code_editor_forward": "forward()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, advance(), filter(), Ds(), forwardInner(), gotoInner()]
- "components_code_editor_moveto": "moveTo()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, cursorAt(), findMounts(), hasNode(), ih(), childAfter()]
- "components_code_editor_nextchild": "nextChild()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, childAfter(), childBefore(), enter(), enterChild(), externalSibling()]
- "components_markdown_editor_j": "j()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, cf(), co(), ge(), D(), K()]
- "components_markdown_editor_l": "_l()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, b(), ce(), ed(), ht(), is()]
- "components_markdown_editor_lf": "lf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ar(), go(), ho(), ne(), O()]
- "components_markdown_editor_to": "to()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, af(), ff(), G(), O(), sd()]
- "components_rich_editor_cg": "cg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, after(), before(), canReplaceWith(), child(), create()]
- "components_rich_editor_content": "content()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, child(), copy(), create(), createAndFill(), findCell()]
- "components_rich_editor_ct": "ct()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Ac(), findCell(), get(), node(), rectBetween()]
- "components_rich_editor_ec": "Ec()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, append(), co(), copy(), cut(), index()]
- "components_rich_editor_vs": "vS()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, child(), colCount(), createAndFill(), delete(), get()]
- "components_select_fn": "fn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Ce(), de(), ei(), Ft(), Le()]
- "doc_code_conformance": "Code-level conformance audit" | kind=entity | source=docs/CODE-CONFORMANCE.md | neighbors=[CLAUDE.md — project instructions, Audit sliced by catching mechanism, Code-level conformance audit, Finding ranks and the security flag, Conformance spec and migration plan, Both analytics adapters are inert and n…]
- "doc_handoff_conformance_map": "Handoff: Conformance Map (2026-08-04)" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[Missing config.allow-plugins across pac…, Host architecture boundary rules, Root composer install clobbers tracked …, liberusoftware/composer-installer, docs/CONFORMANCE.md, liberusoftware/package-testbench]
- "doc_messaging_architecture": "Private Messaging System Architecture" | kind=entity | source=docs/MESSAGING_ARCHITECTURE.md | neighbors=[Alpine.js for the messaging UI, CSRF protection on state-changing reque…, MessageController, Message encryption at rest, Message Model, MessagePolicy]
- "stat_chart_buildticks": "buildTicks()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, dl(), fl(), _generate(), _getLabelCapacity(), getLabels()]
- "stat_chart_draw": "draw()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, clear(), drawBackground(), drawBorder(), _drawDatasets(), drawGrid()]
- "support_support_j": "J()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ar(), Cn(), Ee(), En(), Ge()]
- "support_support_r": "r()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, _a(), Hi(), Hn(), I(), J()]
- "support_support_xt": "xt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ba(), fn(), la(), Li(), Vi()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@7a789a0b33a6863a080bc10d7e3cfe68c28b6fd1": "7a789a0 feat(auth): put the sign-in journey on the design system" | kind=Commit | source=git | neighbors=[login.blade.php, register.blade.php, two-factor-challenge.blade.php, verify-email.blade.php, main, f358830 chore: trim the comments, and w…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-005.json

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
