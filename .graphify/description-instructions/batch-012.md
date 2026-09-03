# Node Description Batch 13 of 212

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

- "concept_search_service": "SearchService" | kind=entity | source=docs/SEARCH_FUNCTIONALITY.md | neighbors=[modules/search package, SearchController, Eager loading to avoid N+1, Group model, Enforced pagination limits, Post model] | lang=en
- "doc_notifications": "Real-Time Notifications Documentation" | kind=entity | source=docs/NOTIFICATIONS.md | neighbors=[Implementation Summary, ActivityNotification, Alternative broadcast services, Pusher broadcasting driver, Browser push notifications, FriendRequestNotification] | lang=en
- "enabled_by_default_declaration": "Enabled By Default Declaration" | kind=entity | source=modules/module-manager/README.md | neighbors=[Installation Does Not Imply Enablement, Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration, Liberu Module Manager] | lang=en
- "identity_socialstream_module": "Liberu Social Identity" | kind=entity | source=modules/identity-socialstream/README.md | neighbors=[bursteri/socialstream ^7.0, Capability: identity.socialstream, Contract: ConnectedAccountOwner, Liberu Identity, Liberu Integrations, laravel/socialite ^5.0] | lang=en
- "routes_web": "web.php" | kind=code-symbol | source=routes/web.php:L1 | neighbors=[0755a5b feat(design): acceptance sweep …, 222cd2e fix: serve the media the app ac…, 2acd19d feat(design): styleguide route …, 3df11b3 Claude, 4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…] | lang=en
- "stat_chart_each": "_each()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), addControllers(), addElements(), addPlugins(), addScales()] | lang=en
- "stat_chart_fit": "fit()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _calculatePadding(), _getLabelSizes(), _handleMargins(), isHorizontal(), _isVisible()] | lang=en
- "stat_chart_getlabels": "getLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks(), Cn(), determineDataLimits(), generateTickLabels(), isHorizontal()] | lang=en
- "support_support_ct": "ct()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, eo(), ht(), ki(), Ni(), Nt()] | lang=en
- "support_support_tt": "Tt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Bi(), ca(), Cn(), Ea(), eo()] | lang=en
- "tables_tables_je": "je()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, A(), B(), C(), E(), F()] | lang=en
- "tables_tables_t": "T()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), je(), re(), Se(), G()] | lang=en
- "boilerplate_scripts_package": "liberusoftware/boilerplate-scripts" | kind=entity | source=scripts/README.md | neighbors=[scripts/fleet, .liberu-meta.json meta-repository config, measure-coverage, measure-phpstan, set-coverage-thresholds, set-phpstan-levels] | lang=en
- "capability_portals_reporting": "Real Estate capability: Portals and Reporting" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 2: progression, portals,…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-portals-repo…, liberusoftware/real-estate-portals-repo…, liberusoftware/real-estate-portals-repo…] | lang=en
- "columns_select_dn": "dn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ct(), Dt(), Kt(), lt(), Rt()] | lang=en
- "columns_select_lt": "lt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, de(), dn(), fn(), Ft(), gi()] | lang=en
- "columns_select_opendropdown": "openDropdown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, handleSelectButtonKeydown(), filterOptions(), getVisibleOptions(), hideLoadingState(), populateLabelRepositoryFromOptions()] | lang=en
- "columns_select_xi": "xi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ae(), At(), ct(), hi(), Me()] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0812f9b3ad78683d4f1394412695984d1088dbe2": "0812f9b Update main workflow Docker with prerequisite of tests and update Docke…" | kind=Commit | source=git | neighbors=[login.blade.php, register.blade.php, app.php, main, addbb82 Update dependencies, modules.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0910e2b64dee781e9d4087ecc6da623c19c5748c": "0910e2b Add real estate media and documents core module" | kind=Commit | source=git | neighbors=[CreateMediaDocument.php, DeleteMediaDocument.php, UpdateMediaDocument.php, main, 11d0aae Add real estate media documents…, RealEstateMediaDocumentsTest.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@3f6a64e00bfc38ef1dd4d68b0863ac3efc0d1994": "3f6a64e Route property adapters through core actions" | kind=Commit | source=git | neighbors=[main, 70e3a0a Harden real estate property pac…, PropertyList.php, PropertyController.php, CreateProperty.php, EditProperty.php] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@aca82ae21b2f0f726b65eb46d5b3f3a05d6caad8": "aca82ae Merge branch 'main' of github.com:liberu-real-estate/real-estate-laravel" | kind=Commit | source=git | neighbors=[10d943c Update UserSeeder and RoleSeeder, main, e02669d Update vite and plugins to late…, app.php, filament-shield.php, jetstream.php] | lang=en
- "components_chart_createresolver": "createResolver()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, configure(), constructor(), ca(), E(), ee()] | lang=en
- "components_chart_fromdurationlike": "fromDurationLike()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, after(), before(), ce(), fromMillis(), fromObject()] | lang=en
- "components_chart_frommillis": "fromMillis()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Am(), fromDurationLike(), ae(), ce(), fromObject()] | lang=en
- "components_chart_ft": "Ft()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ef(), eu(), create(), getContext(), gu()] | lang=en
- "components_chart_handleevent": "_handleEvent()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _eventHandler(), An(), _getLegendItemAt(), kf(), _positionChanged()] | lang=en
- "components_chart_minus": "minus()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, before(), endOf(), hasSame(), lastDateTime(), Al()] | lang=en
- "components_chart_render": "render()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _eventHandler(), da(), draw(), has(), notifyPlugins()] | lang=en
- "components_chart_ss": "ss()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromFormat(), fromFormatParser(), fromHTTP(), fromISO(), fromRFC2822()] | lang=en
- "components_chart_t": "$t()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), drawLabels(), drawTitle(), kf(), B()] | lang=en
- "components_code_editor_accept": "accept()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, dispatch(), facet(), field(), find(), hasResult()] | lang=en
- "components_code_editor_atxheading": "ATXHeading()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), ct(), em(), finish(), nextLine()] | lang=en
- "components_code_editor_bidispans": "bidiSpans()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, Df(), gP(), Mf(), textDirectionAt(), bidiSpansAt()] | lang=en
- "components_code_editor_cd": "cd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L8 | neighbors=[code-editor.js, activateHover(), create(), cursor(), facet(), find()] | lang=en
- "components_code_editor_charcategorizer": "charCategorizer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, languageDataAt(), OP(), cP(), E$(), getDeco()] | lang=en
- "components_code_editor_childafter": "childAfter()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, child(), enterChild(), nextChild(), dX(), eS()] | lang=en
- "components_code_editor_gp": "gP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, bidiSpans(), coordsAtPos(), countIndent(), cursor(), Df()] | lang=en
- "components_code_editor_hg": "Hg()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, create(), empty(), facet(), Fg(), Lh()] | lang=en
- "components_code_editor_join": "join()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, addToSet(), childString(), getRules(), lineAt(), Mf()] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-012.json

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
