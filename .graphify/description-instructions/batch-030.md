# Node Description Batch 31 of 212

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

- "api_contract_real_estate_portals_reporting_v1": "OpenAPI v1: Real Estate Portals and Reporting API" | kind=entity | source=modules/real-estate-portals-reporting-api/openapi/v1/real-estate-portals-reporting.yaml | neighbors=[x-liberu-idempotency-header (Idempotenc…, Sanctum bearer security scheme, /api/v1/real-estate versioned namespace, Error schema (message, code, errors), PaginationMeta schema, Real Estate Portals and Reporting API] | lang=en
- "application_core_module": "Liberu Application Core" | kind=entity | source=modules/application/README.md | neighbors=[Capability: foundation.application-core, Contract: Clock, Contract: IdentifierFactory, liberu-module Composer package type, Module category: foundation, liberusoftware/module-manager] | lang=en
- "application_createoffer": "CreateOffer.php" | kind=code-symbol | source=modules/real-estate-offers/src/Application/CreateOffer.php:L1 | neighbors=[CreateOffer, 2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, e9bffaf Apply complete module formatting] | lang=en
- "application_createvaluation": "CreateValuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/CreateValuation.php:L1 | neighbors=[CreateValuation, 2f18670 Conform real estate modules and…, 44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, e9bffaf Apply complete module formatting] | lang=en
- "application_createviewing": "CreateViewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/CreateViewing.php:L1 | neighbors=[CreateViewing, 2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, e9bffaf Apply complete module formatting] | lang=en
- "category_presentation": "Category: presentation" | kind=entity | source=modules/settings-filament/README.md:Architecture and integration | neighbors=[Liberu Authorization Filament, Liberu Search API, Liberu Sessions and Devices Administrat…, Liberu Settings Administration, Liberu Theme Support Livewire, Liberu Theme Support] | lang=en
- "columns_select_b": "b()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, F(), je(), Kt(), Rn(), Xt()] | lang=en
- "columns_select_et": "Et()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, re(), U(), gi(), oi(), Xt()] | lang=en
- "columns_select_filteroptions": "filterOptions()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, positionDropdown(), renderOptions(), showNoResultsMessage(), handleSearch(), openDropdown()] | lang=en
- "columns_select_handleselectbuttonkeydown": "handleSelectButtonKeydown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown(), focusNextOption(), focusPreviousOption(), getVisibleOptions(), openDropdown()] | lang=en
- "columns_select_ht": "ht()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, xn(), pn(), Rn(), x(), Y()] | lang=en
- "columns_select_kt": "Kt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, de(), dn(), b(), un(), vn()] | lang=en
- "columns_select_ni": "ni()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Ie(), Te(), ut(), wt(), zt()] | lang=en
- "columns_select_pn": "pn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, gi(), ct(), ht(), Rt(), Xt()] | lang=en
- "columns_select_render": "render()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, constructor(), applyDisabledState(), populateLabelRepositoryFromOptions(), renderOptions(), updateSelectedDisplay()] | lang=en
- "columns_select_sn": "sn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), ut(), Vt(), wt(), zt()] | lang=en
- "columns_select_ui": "ui()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ae(), At(), ct(), $t(), xi()] | lang=en
- "columns_select_un": "un()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, gi(), de(), it(), Kt(), lt()] | lang=en
- "columns_select_wt": "wt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ei(), fn(), Ft(), ni(), sn()] | lang=en
- "columns_select_x": "x()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, D(), F(), ht(), pe(), Y()] | lang=en
- "columns_select_ze": "Ze()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), Ft(), Ie(), Te(), zt()] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@10d943c6e8b006463fbe56863361c1eb5ea19d3f": "10d943c Update UserSeeder and RoleSeeder" | kind=Commit | source=git | neighbors=[main, aca82ae Merge branch 'main' of github.c…, RolesSeeder.php, TeamSeeder.php, UserSeeder.php, fd0635b Merge branch 'main' of github.c…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@11d0aaeb5ba642a036010a9495d75c69e2cd3192": "11d0aae Add real estate media documents API adapter" | kind=Commit | source=git | neighbors=[0910e2b Add real estate media and docum…, main, 72d35f5 Add media documents Filament an…, MediaDocumentController.php, api.php, MediaAndDocumentsApiServiceProvider.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@188c376fe11ba83eb7913375f6df8392b1ca2cbb": "188c376 Add real estate valuations API adapter" | kind=Commit | source=git | neighbors=[main, 3172546 Add valuations Filament and Liv…, ValuationController.php, api.php, ValuationsApiServiceProvider.php, 44c2353 Add real estate valuations core…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@3da31ff5fa936b1594f186d399b86d7589a24d93": "3da31ff Merge pull request #1252 from liberu-real-estate/copilot/fix-broken-tes…" | kind=Commit | source=git | neighbors=[main, 5e30f72 Initial plan, a78602e Merge pull request #1253 from l…, ExampleTest.php, 3f51796 Merge pull request #1251 from l…, 95899d0 Add PropertyValuationFactory to…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@3df11b380049c03e1e12f819e86394e81e850bc4": "3df11b3 Claude" | kind=Commit | source=git | neighbors=[app.php, main, f72c39d Upgrade to Laravel 13, PHPUnit …, console.php, web.php, 66b36a4 Update dependencies including t…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@675053f2bc5005807ad80df19fc1b133819cdd82": "675053f Add modules system, security hardening, and Socialstream integration" | kind=Commit | source=git | neighbors=[login.blade.php, main, 056e34b Fix PermissionsSeeder to use sh…, AdminPanelProvider.php, AppPanelProvider.php, 750c68d Add socialstream, agent role, k…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@70e3a0abe259f98f9004b10ac2d5c948943c4ce9": "70e3a0a Harden real estate property package release" | kind=Commit | source=git | neighbors=[3f6a64e Route property adapters through…, main, 73659b3 Add real estate parties module …, RealEstatePropertyActionsTest.php, 2026_08_23_000001_create_real_estate_pr…, Property.php] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@a78602e921c1722e6099321eefc197fd3f42d068": "a78602e Merge pull request #1253 from liberu-real-estate/copilot/fix-tests-and-…" | kind=Commit | source=git | neighbors=[3da31ff Merge pull request #1252 from l…, 5d4dc0c Address code review: extract co…, main, 56a64b2 Initial plan, afd0be1 Merge pull request #1254 from l…, User.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f630dc784c2b0af5d2fa21aeeabcf8f6840b9b7d": "f630dc7 Fix security audit findings" | kind=Commit | source=git | neighbors=[e3f0f4c Update dependencies, main, 482a093 Implement core real estate prod…, session.php, api.php, web.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f79fa7271a51f00b072836520260fde34c0bb496": "f79fa72 Merge branch 'main' of github.com:liberu-real-estate/real-estate-laravel" | kind=Commit | source=git | neighbors=[4cf221a Update workflows, bdf23d6 Merge pull request #1255 from l…, main, d97e09c Update dependencies, ExampleTest.php, User.php] | lang=en
- "components_chart_addelements": "addElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _dataCheck(), _each(), getElement(), initialize(), _update()] | lang=en
- "components_chart_adjusthitboxes": "adjustHitBoxes()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeTitleHeight(), isHorizontal(), leftForLtr(), ne(), afterUpdate()] | lang=en
- "components_chart_al": "Al()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fn(), fromObject(), offset(), minus(), plus()] | lang=en
- "components_chart_am": "Am()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromMillis(), fromObject(), plus(), shiftTo(), diff()] | lang=en
- "components_chart_apply": "apply()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), parse(), Rt(), W(), zn()] | lang=en
- "components_chart_ba": "Ba()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, B(), lu(), parse(), parseObjectData(), zo()] | lang=en
- "components_chart_beforeupdate": "beforeUpdate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, configure(), get(), initialize(), W(), _update()] | lang=en
- "components_chart_bm": "bm()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, create(), hs(), nm(), to(), fromRFC2822()] | lang=en
- "components_chart_ca": "ca()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ds(), get(), override(), createResolver(), resolveNamedOptions()] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-030.json

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
