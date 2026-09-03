# Node Description Batch 4 of 212

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

- "stat_chart_getcontext": "getContext()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, acquireContext(), bi(), _callHooks(), _computeGridLineItems(), _computeLabelItems()]
- "theme_clear_signal": "clear-signal theme (Clear Signal)" | kind=entity | source=themes/clear-signal/README.md | neighbors=[Clear Signal theme README, liberusoftware/theme-clear-signal, Optional capability: blog.publish, Optional capability: foundation.localiz…, Optional capability: foundation.theme-s…, liberusoftware/composer-installer]
- "theme_default": "default theme (Liberu Default)" | kind=entity | source=themes/default/README.md | neighbors=[Liberu Default theme README, liberusoftware/theme-default, Optional capability: foundation.localiz…, Optional capability: foundation.theme-s…, liberusoftware/composer-installer, liberusoftware/boilerplate-laravel host]
- "adapter_tier_filament": "Filament adapter tier" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Adapters stay planned until core contra…, Framework-neutral core boundary, One-to-one adapter rule, Real Estate Filament modules README, Foundation adapters vs product scope, liberusoftware/real-estate-core-filament]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@75d6371d9ddadd8f013ecf9f28673b0aa6aff22e": "75d6371 Add real estate properties module surfaces" | kind=Commit | source=git | neighbors=[CreateProperty.php, main, 881febf Normalize module package names …, PropertyList.php, PropertyController.php, PropertyStatus.php]
- "components_chart_b": "B()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ba(), _computeLabelItems(), _computeLabelSizes(), drawTitle(), fd()]
- "components_chart_i": "I()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ao(), aspectRatio(), _calculateBarValuePixels(), _computeLabelSizes(), _convertTicksToLabels()]
- "components_code_editor_dispatch": "dispatch()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, accept(), commit(), update(), dr(), Ed()]
- "components_code_editor_w": "W()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, au(), constructor(), _d(), eS(), eT()]
- "components_rich_editor_apply": "apply()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addToSet(), applyTransaction(), create(), Cs(), fail()]
- "components_rich_editor_contentmatchat": "contentMatchAt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, ag(), bu(), canReplace(), canReplaceWith(), constructor()]
- "components_rich_editor_createandfill": "createAndFill()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, content(), append(), computeAttrs(), fillBefore(), from()]
- "components_rich_editor_someprop": "someProp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Ad(), ay(), by(), cl(), Eu()]
- "framework_neutral_core_boundary": "Framework-neutral core boundary" | kind=entity | source=projects/real-estate/REAL-ESTATE.md | neighbors=[API adapter tier, Core (domain) tier, Filament adapter tier, Livewire adapter tier, Real Estate capability: Instructions, Real Estate capability: Lettings]
- "stat_chart_a": "A()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, active(), ki(), wait(), As(), _computeLabelItems()]
- "theme_dark": "dark theme (Liberu Dark)" | kind=entity | source=themes/dark/README.md | neighbors=[Liberu Dark theme README, liberusoftware/theme-dark, Optional capability: foundation.localiz…, Optional capability: foundation.theme-s…, liberusoftware/composer-installer, liberusoftware/boilerplate-laravel host]
- "adapter_tier_api": "API adapter tier" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[Adapters stay planned until core contra…, Framework-neutral core boundary, One-to-one adapter rule, Real Estate API modules README, liberusoftware/real-estate-core-api, liberusoftware/real-estate-instructions…]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e3f0f4ca21190aa2ad95a0711c00f14257bcdc0b": "e3f0f4c Update dependencies" | kind=Commit | source=git | neighbors=[056e34b Fix PermissionsSeeder to use sh…, actions.js, main, select.js, f630dc7 Fix security audit findings, code-editor.js]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e9bffafe8945a76ae6aa6fbc141bb72ec074f7ae": "e9bffaf Apply complete module formatting" | kind=Commit | source=git | neighbors=[8f64baf Refresh published module refere…, CreateInstruction.php, CreateListing.php, CreateMarketingCampaign.php, CreateOffer.php, CreateOnTheMarketSync.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f72c39d9e734a7e7d30e56767049db10c763d6cd": "f72c39d Upgrade to Laravel 13, PHPUnit 13, Horizon, Reverb, Stripe v20, and fix…" | kind=Commit | source=git | neighbors=[3df11b3 Claude, main, 30d2b7d Add socialstream, Docker/k8s up…, 4b07ee8 Update main workflow Docker wit…, chart.js, date-time-picker.js]
- "components_code_editor_add": "add()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, addInner(), match(), constructor(), createHostedView(), createListBox()]
- "components_code_editor_reduce": "reduce()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advanceStack(), apply(), bd(), build(), canShift()]
- "components_rich_editor_after": "after()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, resolve(), resolveDepth(), al(), Bs(), cg()]
- "components_rich_editor_step": "step()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, addNodeMark(), ag(), cg(), fg(), hd()]
- "doc_claude_md": "CLAUDE.md — project instructions" | kind=entity | source=CLAUDE.md | neighbors=[Session handoffs in docs/handoffs/, Composition host, Dual Filament panels, The host measures the host, Installation never implies boot, Laravel Boost guidelines]
- "organizations_teams_module": "liberusoftware/organizations-teams" | kind=entity | source=modules/identity-socialstream/README.md | neighbors=[Liberu Social Identity, Liberu Jetstream Bridge, Liberu Organizations Administration, Capability: foundation.organizations, Capability: foundation.teams, Capability Declaration]
- "stat_chart_ishorizontal": "isHorizontal()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), calculateLabelRotation(), _calculatePadding(), _computeGridLineItems(), _computeLabelItems()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@12bd6e1206b08b0dda68c71f30826ad244288b74": "12bd6e1 Conform real estate modules to open issue capabilities (#1311)" | kind=Commit | source=git | neighbors=[RealEstateCapabilityCoverageTest.php, main, 2f18670 Conform real estate modules and…, a2736f9 Merge main into real estate con…, CoreCapabilityDefinition.php, InstructionsCapabilityDefinition.php]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@2d8dfb275b53b936c2f6abaff6ee4280fd613494": "2d8dfb2 Integrate real estate theme and Packagist Composer sources (#1306)" | kind=Commit | source=git | neighbors=[27def5a Make release publication idempo…, ThemeMarkupTest.php, main, 5c4aa56 Add Codecov coverage badge (#13…, feature-card.blade.php, property-card.blade.php]
- "components_chart_getdatasetmeta": "getDatasetMeta()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterDatasetsUpdate(), ar(), buildOrUpdateControllers(), dataset(), getMaxBorderWidth()]
- "components_code_editor_lp": "lP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, cP(), changeByRange(), changes(), create(), cursor()]
- "components_code_editor_nextline": "nextLine()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, advance(), ATXHeading(), FencedCode(), HorizontalRule(), HTMLBlock()]
- "components_code_editor_prop": "prop()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, addChild(), advanceStack(), constructor(), eS(), eT()]
- "components_code_editor_resolveinner": "resolveInner()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, _d(), eS(), eT(), g$(), gw()]
- "components_color_picker": "color-picker.js" | kind=code-symbol | source=public/js/filament/forms/components/color-picker.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, color-picker.js, attributeChangedCallback(), color(), colorModel()]
- "components_markdown_editor_r": "R()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Ct(), D(), f(), ge(), gl()]
- "components_markdown_editor_sn": "Sn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, io(), lo(), Bt(), Cc(), Ec()]
- "components_rich_editor_fn": "fn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Ck(), De(), descendants(), from(), Gh()]
- "components_rich_editor_sl": "Sl()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L9 | neighbors=[rich-editor.js, by(), forEach(), from(), fromSchema(), fy()]
- "components_rich_editor_update": "update()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, constructor(), destroy(), setProps(), syncToMarks(), eq()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-003.json

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
