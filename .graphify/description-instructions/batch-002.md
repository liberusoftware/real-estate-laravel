# Node Description Batch 3 of 212

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
LANGUAGE: each entry has a `lang=` marker giving the language of its source.
Write that entry's description in EXACTLY that language. Do not translate to
a single common language — match each node's source language individually.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "components_rich_editor_e": "e()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, Ac(), cm(), constructor(), create(), split()] | lang=en
- "components_rich_editor_end": "end()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, blockRange(), after(), node(), resolveDepth(), start()] | lang=en
- "filament_app": "app.js" | kind=code-symbol | source=public/js/filament/filament/app.js:L1 | neighbors=[45479e6 Merge pull request #1301 from l…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, e02669d Update vite and plugins to late…, e3f0f4c Update dependencies, e90c0cd fix(panels): let every role ope…] | lang=en
- "stat_chart_s": "S()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeGridLineItems(), _computeLabelItems(), configure(), createResolver(), _dataCheck()] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@73659b34b295a456c7779377751f81381b7a5d83": "73659b3 Add real estate parties module surfaces" | kind=Commit | source=git | neighbors=[70e3a0a Harden real estate property pac…, CreateParty.php, DeleteParty.php, UpdateParty.php, ModuleBoundariesTest.php, main] | lang=en
- "components_code_editor_slicestring": "sliceString()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, c0(), constructor(), eS(), $f(), fd()] | lang=en
- "components_rich_editor_copy": "copy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), bu(), constructor(), content(), cut()] | lang=en
- "components_markdown_editor_ce": "ce()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, re(), V(), Cn(), df(), dl()] | lang=en
- "components_rich_editor_append": "append()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, Ac(), addMaps(), addTransform(), sameMarkup(), slice()] | lang=en
- "components_rich_editor_join": "join()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, B0(), d1(), f1(), ff(), Go()] | lang=en
- "support_support_fn": "fn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Cn(), aa(), ba(), da(), Dn()] | lang=en
- "theme_base": "base theme (Liberu Base)" | kind=entity | source=themes/base/README.md | neighbors=[Liberu Base theme README, liberusoftware/theme-base, Semantic design tokens (Tailwind v4 + C…, Optional capability: foundation.localiz…, liberusoftware/composer-installer, liberusoftware/boilerplate-laravel host] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@3c98a2ad0b6e19d7f2e6b7c61641934031747b2f": "3c98a2a Add real estate portals reporting module surfaces" | kind=Commit | source=git | neighbors=[CreatePortalReport.php, DeletePortalReport.php, UpdatePortalReport.php, main, 1cdd121 Add independent property portal…, PortalReportList.php] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@42c9c7ff3e293eb4f30cb54241280e89f35d891c": "42c9c7f Add real estate offers module surfaces" | kind=Commit | source=git | neighbors=[CreateOffer.php, DeleteOffer.php, UpdateOffer.php, main, 6385f28 Add sales progression modules a…, OfferList.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@4b07ee8cfc27c17605e3e4076406194d6cfc64fa": "4b07ee8 Update main workflow Docker with prerequisite of tests and update Docke…" | kind=Commit | source=git | neighbors=[app.php, main, 0812f9b Update main workflow Docker wit…, chart.js, date-time-picker.js, file-upload.js] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@4fd850d77d6fb0641027c18c3ffc861b68c37d8d": "4fd850d Add real estate marketing module surfaces" | kind=Commit | source=git | neighbors=[CreateMarketingCampaign.php, DeleteMarketingCampaign.php, UpdateMarketingCampaign.php, main, 3c98a2a Add real estate portals reporti…, MarketingCampaignList.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@522809b4a9eb0764120f6e58aa8cfadf6e538b7e": "522809b Add real estate instructions module surfaces" | kind=Commit | source=git | neighbors=[3172546 Add valuations Filament and Liv…, CreateInstruction.php, DeleteInstruction.php, UpdateInstruction.php, main, b9f8ca5 Add real estate listings module…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@6ad060bc5f0bcc88273241b5caf127152a7f8ac3": "6ad060b Add real estate viewings module surfaces" | kind=Commit | source=git | neighbors=[64de88e Add real estate matching module…, CreateViewing.php, DeleteViewing.php, UpdateViewing.php, main, 42c9c7f Add real estate offers module s…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@b9f8ca5be98ca6779f2df9c5dbf8d85c76009beb": "b9f8ca5 Add real estate listings module surfaces" | kind=Commit | source=git | neighbors=[522809b Add real estate instructions mo…, CreateListing.php, DeleteListing.php, UpdateListing.php, main, 64de88e Add real estate matching module…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@bd4b1dc1d7a441b8d55e9af4bf68f0858755f38f": "bd4b1dc Add independent property portal transport sync" | kind=Commit | source=git | neighbors=[1cdd121 Add independent property portal…, SyncOnTheMarketListing.php, SyncRightmoveListing.php, SyncZooplaListing.php, main, b034339 Harden release verification and…] | lang=en
- "components_chart_getcontext": "getContext()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, acquireContext(), _callHooks(), _computeGridLineItems(), _computeLabelItems(), configure()] | lang=en
- "components_code_editor_find": "find()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, accept(), addLineStart(), addText(), baseDirAt(), cd()] | lang=en
- "components_code_editor_pop": "pop()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, advance(), blockTiles(), decompose(), Er(), finish()] | lang=en
- "components_rich_editor_split": "split()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, addTextNode(), $b(), cg(), constructor(), d1()] | lang=en
- "stat_chart_l": "L()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, afterCalculateLabelRotation(), afterFit(), afterSetDimensions(), afterTickToLabelConversion(), afterUpdate()] | lang=en
- "adapter_tier_livewire": "Livewire adapter tier" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Adapters stay planned until core contra…, Framework-neutral core boundary, One-to-one adapter rule, Real Estate Livewire modules README, Foundation adapters vs product scope, liberusoftware/real-estate-core-livewire] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0b733c921ed6eef0b2f18be591dfa54c475e7153": "0b733c9 Add real estate core module surfaces" | kind=Commit | source=git | neighbors=[CreateBranch.php, DeleteBranch.php, UpdateBranch.php, main, 0910e2b Add real estate media and docum…, BranchList.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@64de88e544083249b573691eeb91e37ae47822c4": "64de88e Add real estate matching module surfaces" | kind=Commit | source=git | neighbors=[CreateMatchProfile.php, DeleteMatchProfile.php, UpdateMatchProfile.php, main, 6ad060b Add real estate viewings module…, MatchProfileList.php] | lang=nl
- "components_chart_p": "P()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), _computeGridLineItems(), _createDescriptors(), draw(), _generate()] | lang=en
- "components_chart_parse": "parse()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ba(), getPixelForValue(), init(), _insertElements(), lu()] | lang=en
- "components_chart_w": "W()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterCalculateLabelRotation(), afterFit(), afterSetDimensions(), afterTickToLabelConversion(), afterUpdate()] | lang=en
- "components_code_editor_eq": "eq()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L1 | neighbors=[code-editor.js, addComposition(), bS(), commit(), compare(), ensureMarks()] | lang=en
- "components_code_editor_split": "split()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L2 | neighbors=[code-editor.js, addNamespaceObject(), advanceStack(), constructor(), create(), $f()] | lang=en
- "components_markdown_editor_de": "de()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Ae(), as(), T(), V(), y()] | lang=en
- "components_markdown_editor_o": "O()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Cn(), ge(), H(), lf(), Ae()] | lang=en
- "components_markdown_editor_ye": "ye()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, cl(), Cn(), el(), Et(), fd()] | lang=en
- "components_rich_editor_by": "by()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Cr(), deleteSelection(), eq(), Eu(), fl()] | lang=en
- "components_rich_editor_wd": "wd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, blockRange(), canReplace(), contentMatchAt(), copy(), create()] | lang=en
- "module_manager_module": "Liberu Module Manager" | kind=entity | source=modules/module-manager/README.md | neighbors=[liberusoftware/composer-installer, Liberu Localization, Liberu Module Manager Administration, CacheModulesCommand, Capability: foundation.modules, Capability Declaration] | lang=en
- "real_estate_scope": "Liberu Real Estate scope" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[Real Estate capability: Instructions, Real Estate capability: Lettings, Real Estate capability: Listings, Real Estate capability: Marketing, Real Estate capability: Matching, Real Estate capability: Media and Docum…] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-002.json

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
