# Node Description Batch 7 of 212

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

- "components_chart_add": "add()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _each(), _getAnims(), ve(), average(), bi()]
- "components_chart_format": "format()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, cg(), E(), formatToParts(), Q(), toJSDate()]
- "components_chart_getlabels": "getLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildTicks(), determineDataLimits(), generateTickLabels(), getLabelAndValue(), isHorizontal()]
- "components_chart_initialize": "initialize()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, beforeUpdate(), constructor(), addElements(), bindEvents(), configure()]
- "components_chart_invalid": "invalid()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Cm(), diff(), fromFormat(), fromFormatParser(), fromISO()]
- "components_chart_plus": "plus()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, after(), Am(), constructor(), endOf(), minus()]
- "components_chart_resolvedataelementoptions": "resolveDataElementOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeAngle(), getMaxBorderWidth(), getMaxOffset(), getMaxOverflow(), getSharedOptions()]
- "components_code_editor_changes": "changes()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, apply(), changeByRange(), applyChanges(), facet(), iterChangedRanges()]
- "components_code_editor_compare": "compare()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, eq(), iterGaps(), Rh(), Zh(), Ds()]
- "components_code_editor_tostring": "toString()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, addInfoPane(), constructor(), fd(), flushIOSKey(), newName()]
- "components_markdown_editor_co": "co()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Ae(), al(), ao(), ar(), bo()]
- "components_markdown_editor_io": "io()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, bl(), el(), Ac(), Ae(), ce()]
- "components_markdown_editor_kt": "kt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, cd(), dr(), de(), H(), y()]
- "components_markdown_editor_pe": "Pe()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ca(), fd(), jo(), lf(), ls()]
- "components_markdown_editor_zt": "Zt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ao(), ar(), ff(), ho(), pf()]
- "components_rich_editor_at": "at()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, dp(), Gi(), Ne(), Ye(), bk()]
- "components_rich_editor_jp": "jp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Hs(), colCount(), domAtPos(), e(), get()]
- "components_rich_editor_ls": "Ls()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, append(), before(), child(), createAndFill(), e()]
- "components_rich_editor_mg": "Mg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, Cd(), append(), canReplace(), child(), copy()]
- "components_rich_editor_mo": "mo()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, by(), dragover(), after(), before(), canReplace()]
- "components_rich_editor_parse": "parse()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, cn(), constructor(), gy(), n0(), addAll()]
- "components_rich_editor_replacechild": "replaceChild()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), bu(), dl(), Ec(), lr()]
- "components_rich_editor_se": "Se()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Cc(), dS(), Hs(), Ls(), OS()]
- "components_rich_editor_setnodemarkup": "setNodeMarkup()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Ac(), AS(), Lm(), Ms(), OS()]
- "components_rich_editor_valid": "valid()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, addInner(), findGapCursorFrom(), map(), mapInner(), No()]
- "concept_team_scoping": "Team-scoped domain records" | kind=entity | source=modules/real-estate-parties/README.md | neighbors=[Real Estate Properties Module, Real Estate Property Management Module, Real Estate Rightmove Module, Real Estate Sales Progression Module, Real Estate Valuations Module, Real Estate Viewings Module]
- "doc_messaging_developer_notes": "Messaging Developer Notes" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[Alpine.js for the messaging UI, Separate API (Sanctum) and web (session…, Conversation query indexes, CSRF protection on state-changing reque…, Layered authorization, Eager loading to avoid N+1]
- "doc_theme_system": "Theme System Guide" | kind=entity | source=docs/THEME_SYSTEM.md | neighbors=[Theme Project Implementation Summary, Theme System Quick Reference, liberu-theme Composer package, Semantic design tokens, Theme Blade directives, Theme helper functions]
- "handoff_2026_08_06_step_5_test_redistribution": "Handoff: Conformance Step 5 (Test Redistribution)" | kind=entity | source=docs/handoffs/2026-08-06-step-5-test-redistribution.md | neighbors=[Blocker: theme discovery is not Compose…, Conformance Step 5 — Test Redistribution, docs/CONFORMANCE.md — Conformance Plan, Handoff: Conformance Step 4 (Testbench …, liberusoftware/package-testbench, Risk: package CI has not been observed …]
- "models_user_user": "User" | kind=code-symbol | source=app/Models/User.php:L38 | neighbors=[User.php, .authorizationIdentifier(), .authorizationType(), .canAccessPanel(), .canAccessTenant(), .getActivitylogOptions()]
- "module_manager_filament_module": "Liberu Module Manager Administration" | kind=entity | source=modules/module-manager-filament/README.md | neighbors=[Capability: foundation.module-manager.f…, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration, Filament 5]
- "schemas_schemas": "schemas.js" | kind=code-symbol | source=public/js/filament/schemas/schemas.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, f72c39d Upgrade to Laravel 13, PHPUnit …, destroy()]
- "stat_chart_getdatasetmeta": "getDatasetMeta()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, afterDatasetsUpdate(), buildOrUpdateControllers(), dataset(), getMeta(), il()]
- "stat_chart_p": "P()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeGridLineItems(), _createDescriptors(), _generate(), gr(), jn()]
- "tables_tables_e": "E()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), A(), B(), F(), I()]
- "columns_select_xt": "Xt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, de(), dn(), pn(), vn(), b()]
- "components_chart_ae": "ae()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ce(), create(), instance(), parseSpecifier(), defaultZone()]
- "components_chart_calculatebarindexpixels": "_calculateBarIndexPixels()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, au(), _getAxis(), _getAxisCount(), getDataset(), getFirstScaleIdForIndexAxis()]
- "components_chart_fromdatetimes": "fromDateTimes()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, after(), before(), Cm(), fromISO(), intersection()]
- "components_chart_getdataset": "getDataset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildOrUpdateElements(), _calculateBarIndexPixels(), configure(), _dataCheck(), getContext()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-006.json

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
