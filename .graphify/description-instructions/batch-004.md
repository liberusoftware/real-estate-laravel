# Node Description Batch 5 of 212

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

- "adapter_tier_core": "Core (domain) tier" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Framework-neutral core boundary, Real Estate core modules README, liberusoftware/real-estate-core, liberusoftware/real-estate-instructions, liberusoftware/real-estate-listings, liberusoftware/real-estate-marketing]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@799806ef999a9569e22f43b0c93d66e92e5faa8b": "799806e Conform real estate modules to open issue capabilities" | kind=Commit | source=git | neighbors=[3735f58 Complete letting and property m…, RealEstateCapabilityCoverageTest.php, main, 10d5d92 Pin module sources to HTTPS con…, CoreCapabilityDefinition.php, InstructionsCapabilityDefinition.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@98dde9ec422249194fb0df6254ee833b73b1fd2e": "98dde9e Merge pull request #1299 from liberusoftware/survey-sheet-foundation" | kind=Commit | source=git | neighbors=[login.blade.php, register.blade.php, two-factor-challenge.blade.php, verify-email.blade.php, main, 1b76115 fix(nav): give the top navigati…]
- "components_code_editor_f": "$f()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, add(), create(), dispatch(), find(), getChild()]
- "components_code_editor_fd": "fd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, cd(), dd(), dispatch(), facet(), lineAt()]
- "components_code_editor_init": "init()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, Ed(), fromJSON(), add(), create(), facet()]
- "components_code_editor_next": "next()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, addActive(), as(), chunkEnd(), Ds(), Er()]
- "components_markdown_editor_d": "D()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ge(), Ie(), R(), S(), w()]
- "components_markdown_editor_h": "H()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Ae(), at(), ge(), O(), V()]
- "components_rich_editor_ac": "Ac()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, append(), canReplace(), copy(), ct(), cut()]
- "components_rich_editor_canreplace": "canReplace()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), canAppend(), allowsMarks(), child(), contentMatchAt()]
- "components_rich_editor_domselectionrange": "domSelectionRange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, ay(), domSelection(), flush(), iy(), jy()]
- "components_rich_editor_flush": "flush()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, domSelectionRange(), eq(), ignoreSelectionChange(), jy(), markDirty()]
- "components_rich_editor_marks": "marks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addStoredMark(), ensureMarks(), handleExit(), Hl(), Ho()]
- "components_rich_editor_wt": "wt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, flush(), focus(), onSelectionChange(), updateStateInner(), add()]
- "doc_conformance": "Conformance spec and migration plan" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[CLAUDE.md — project instructions, Code-level conformance audit, ADR exceptions: none (§6), Atomic commit does not extend to verifi…, Package CI: three workflows, not three …, Per-package coverage ratchet]
- "doc_module_development": "Module Development Guide" | kind=entity | source=docs/MODULE_DEVELOPMENT.md | neighbors=[Admin Filament panel, App Filament panel, Contract packages, filament_plugins manifest declaration, Companion *-filament presentation module, liberu-module Composer package]
- "observability_module": "Liberu Observability" | kind=entity | source=modules/observability/README.md | neighbors=[Liberu Module Manager Administration, Capability: foundation.observability, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration]
- "stat_chart_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, acquireContext(), apply(), bo(), chartOptionScopes(), configure()]
- "stat_chart_parse": "parse()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, En(), getPixelForValue(), init(), _insertElements(), A()]
- "team_scoping": "Team-Scoped Boundary" | kind=entity | source=modules/real-estate-core/README.md | neighbors=[Real Estate Core API, Real Estate Core Filament, Real Estate Core Livewire, Real Estate Core, Real Estate Instructions API, Real Estate Instructions OpenAPI v1]
- "components_chart_n": "N()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bindUserEvents(), buildOrUpdateScales(), _createItems(), drawBody(), ensureScalesHaveIDs()]
- "components_chart_notifyplugins": "notifyPlugins()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterDraw(), _callHooks(), da(), _destroy(), draw()]
- "components_chart_x": "X()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeTitleHeight(), draw(), drawBody(), _drawColorBox(), drawFooter()]
- "components_code_editor_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, blur(), destroyInfo(), qa(), removeWindowListeners(), setMarkers()]
- "components_code_editor_reset": "reset()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, readLine(), reduceContext(), forwardInner(), pop(), readNext()]
- "components_code_editor_resolve": "resolve()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, applyTransaction(), baseIndentFor(), create(), handleEvent(), lX()]
- "components_markdown_editor_it": "it()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ca(), cl(), En(), de(), H()]
- "components_markdown_editor_je": "je()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, _a(), ca(), cl(), ga(), Ae()]
- "components_rich_editor_indexafter": "indexAfter()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, cg(), constructor(), Cs(), Dm(), endIndex()]
- "components_rich_editor_nodesbetween": "nodesBetween()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, _0(), descendants(), Hl(), js(), Ju()]
- "composer_installer": "liberusoftware/composer-installer" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager, Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration, Liberu Notifications]
- "src_manifest_manifest": "Manifest" | kind=code-symbol | source=modules/module-manager/src/Manifest.php:L7 | neighbors=[Manifest.php, .capabilities(), .category(), .__construct(), .defaultEnabled(), .displayName()]
- "components_chart_buildticks": "buildTicks()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Bf(), eg(), _generate(), _getLabelCapacity(), getLabels()]
- "components_chart_getpixelforvalue": "getPixelForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _calculateBarValuePixels(), _computeGridLineItems(), _computeLabelItems(), getBasePixel()]
- "components_code_editor_changebyrange": "changeByRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, changes(), compose(), create(), mapDesc(), mapEffects()]
- "components_code_editor_coordsatpos": "coordsAtPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, constructor(), bidiSpans(), coordsAt(), find(), lineAt()]
- "components_date_time_picker": "date-time-picker.js" | kind=code-symbol | source=public/js/filament/forms/components/date-time-picker.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e3f0f4c Update dependencies, f72c39d Upgrade to Laravel 13, PHPUnit …, a()]
- "components_markdown_editor_ht": "ht()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, bf(), fa(), fo(), de(), H()]
- "components_markdown_editor_ot": "ot()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, _a(), df(), f(), gl(), jl()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-004.json

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
