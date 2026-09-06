# Node Description Batch 2 of 212

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

- "components_markdown_editor_v": "V()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Ae(), at(), ce(), Cn(), Cr()]
- "components_rich_editor_index": "index()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ag(), Bs(), cg(), close(), Dm()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d07b2181986c482096dcbb992e36ffb8913cf56a": "d07b218 Harden real estate Livewire list surfaces" | kind=Commit | source=git | neighbors=[78f4c58 Complete real estate OpenAPI co…, RealEstateCapabilityCoverageTest.php, main, 5eb4712 Harden real estate Filament bou…, AgencyList.php, BranchList.php]
- "components_code_editor_get": "get()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, addComposition(), aP(), AQ(), bd(), constructor()]
- "components_markdown_editor_vd": "vd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L15 | neighbors=[markdown-editor.js, Ae(), ar(), as(), ci(), da()]
- "components_code_editor_measure": "measure()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, applyChanges(), Cf(), computeVisibleRanges(), create(), cS()]
- "components_rich_editor_start": "start()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, colSelection(), constructor(), content(), ct(), done()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e8b93fccb7159cc8f9b12e43bc440971da27cab5": "e8b93fc Implement remaining real estate capability modules (#1309)" | kind=Commit | source=git | neighbors=[1331232 Include modules and themes in c…, CreateLetting.php, CreateManagementRecord.php, TransitionLetting.php, TransitionManagementRecord.php, main]
- "components_rich_editor_replace": "replace()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addTextNode(), au(), Bm(), by(), c1()]
- "liberu_module_package_type": "liberu-module Composer package type" | kind=entity | source=modules/activity-comments/README.md | neighbors=[Liberu Activity and Comments, Liberu Analytics Core, Liberu Google Analytics, Liberu Meta Server-Side Tracking, Liberu API Access, Liberu Application Core]
- "components_markdown_editor_ae": "Ae()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, _a(), de(), ge(), H(), V()]
- "components_chart_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, acquireContext(), apply(), Bc(), bg(), ce()]
- "components_chart_draw": "draw()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterDraw(), clear(), _computeTitleHeight(), _drawArgs(), drawBackground()]
- "components_markdown_editor_ge": "ge()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Ae(), D(), dr(), de(), _e()]
- "components_markdown_editor_ne": "ne()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, al(), bo(), cl(), fd(), fl()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@3735f58f5b9bd3df465fdc49703c8e3fc701984a": "3735f58 Complete letting and property management lifecycles (#1310)" | kind=Commit | source=git | neighbors=[CreateLetting.php, CreateManagementRecord.php, RecordLettingFailure.php, RecordManagementFailure.php, TransitionLetting.php, TransitionManagementRecord.php]
- "components_code_editor_cursor": "cursor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, aO(), AQ(), cd(), clip(), constructor()]
- "components_rich_editor_jy": "jy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, flush(), addMark(), after(), before(), child()]
- "components_rich_editor_nodeat": "nodeAt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), apply(), AS(), constructor(), content()]
- "doc_implementation_summary": "Implementation Summary" | kind=entity | source=docs/IMPLEMENTATION_SUMMARY.md | neighbors=[ActivityNotification, Admin user-management enhancement, Advanced search across users, posts and…, Admin dashboard widgets, Eager loading to avoid N+1, Filament Shield role-based access]
- "components_chart_create": "create()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ae(), bm(), bs(), clone(), constructor()]
- "components_rich_editor_get": "get()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, addTransform(), check(), colSelection(), constructor(), content()]
- "components_chart_fromobject": "fromObject()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Al(), Am(), expandFormat(), fromDurationLike(), fromISO()]
- "components_chart_updateelements": "updateElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _insertElements(), _update(), applyStack(), _calculateBarIndexPixels(), _calculateBarValuePixels()]
- "components_rich_editor_eq": "eq()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addToSet(), applyInner(), by(), co(), dispatchTransaction()]
- "services_thememanager_thememanager": "ThemeManager" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L18 | neighbors=[ThemeManager.php, .activeCssEntry(), .activeEntries(), .assetUrl(), .clearCache(), .__construct()]
- "theme_real_estate_default": "real-estate-default theme" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Liberu Real Estate Default theme README, Real Estate Default theme UPGRADING to …, liberusoftware/theme-real-estate-default, Real Estate capability: Portals and Rep…, liberusoftware/composer-installer, liberusoftware/real-estate-laravel host]
- "components_code_editor_slicedoc": "sliceDoc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, aO(), B(), dl(), E$(), eT()]
- "components_chart_get": "get()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ag(), As(), beforeUpdate(), bi(), ca()]
- "components_code_editor_field": "field()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, accept(), active(), blur(), constructor(), Ed()]
- "components_code_editor_finish": "finish()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, addLeafElement(), advance(), ATXHeading(), build(), buildDeco()]
- "components_code_editor_replace": "replace()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, addNamespaceObject(), append(), applyChanges(), computeBlockGapDeco(), dl()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@bd5c605cbdc458d693e7344157639bb73b501363": "bd5c605 Add explicit API response resources" | kind=Commit | source=git | neighbors=[8cf045c Implement real estate module co…, RealEstateCapabilityCoverageTest.php, main, 78f4c58 Complete real estate OpenAPI co…, ManagementRecordController.php, OfferController.php]
- "components_code_editor_append": "append()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, addBlockWidget(), addComposition(), addDelimiter(), addElement(), addInlineWidget()]
- "components_rich_editor_before": "before()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ag(), al(), resolve(), resolveDepth(), cg()]
- "components_rich_editor_setselection": "setSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Ac(), bl(), by(), Dc(), fw()]
- "components_rich_editor_updatestateinner": "updateStateInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, update(), updateState(), Bg(), delaySelUpdate(), destroy()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@5eb471228b2eb54af6b1d8d54090628ef53add73": "5eb4712 Harden real estate Filament boundaries" | kind=Commit | source=git | neighbors=[RealEstateCapabilityCoverageTest.php, main, a2736f9 Merge main into real estate con…, CreateLetting.php, CreateManagementRecord.php, CreateMarketingCampaign.php]
- "components_chart_e": "E()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeGridLineItems(), _computeLabelItems(), configure(), createResolver(), _dataCheck()]
- "components_chart_ishorizontal": "isHorizontal()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, adjustHitBoxes(), buildTicks(), calculateLabelRotation(), _calculatePadding(), _computeGridLineItems()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-001.json

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
