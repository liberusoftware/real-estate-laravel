# Node Description Batch 58 of 212

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

- "capability_foundation_localization": "Optional capability: foundation.localization" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)] | lang=en
- "capability_lettings": "Real Estate capability: Lettings" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 3: lettings, management,…, Framework-neutral core boundary, 'planned' as an explicit backlog marker, Liberu Real Estate scope] | lang=en
- "capability_property_management": "Real Estate capability: Property Management" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 3: lettings, management,…, Framework-neutral core boundary, 'planned' as an explicit backlog marker, Liberu Real Estate scope] | lang=en
- "columns_select_addsinglebadge": "addSingleBadge()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, createBadgeElement(), getSelectedOptionLabel(), selectOption()] | lang=en
- "columns_select_applydisabledstate": "applyDisabledState()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, disable(), enable(), render()] | lang=en
- "columns_select_ci": "ci()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, re(), U(), Ft()] | lang=en
- "columns_select_hidemaxitemsmessage": "hideMaxItemsMessage()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown(), selectOption(), showMaxItemsMessage()] | lang=en
- "columns_select_i": "$i()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, F(), _n(), zn()] | lang=en
- "columns_select_je": "je()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, b(), we(), _n()] | lang=en
- "columns_select_mn": "mn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, gi(), gn(), $t()] | lang=en
- "columns_select_nt": "nt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, A(), we(), xn()] | lang=en
- "columns_select_oi": "oi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Et(), ii(), Vt()] | lang=en
- "columns_select_showloadingstate": "showLoadingState()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, openDropdown(), deferPositionDropdown(), hideLoadingState()] | lang=en
- "columns_select_showmaxitemsmessage": "showMaxItemsMessage()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, selectOption(), deferPositionDropdown(), hideMaxItemsMessage()] | lang=en
- "columns_select_shownooptionsmessage": "showNoOptionsMessage()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, renderOptions(), deferPositionDropdown(), hideLoadingState()] | lang=en
- "columns_select_si": "Si()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, gn(), At(), it()] | lang=en
- "columns_select_toggledropdown": "toggleDropdown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown(), hasAvailableOptions(), openDropdown()] | lang=en
- "columns_select_v": "v()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, E(), gt(), Rn()] | lang=en
- "columns_select_vt": "Vt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), oi(), sn()] | lang=en
- "columns_select_we": "we()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, At(), je(), nt()] | lang=en
- "columns_select_wi": "wi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, gi(), U(), Xt()] | lang=en
- "columns_select_xn": "xn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ht(), An(), nt()] | lang=en
- "columns_select_yi": "yi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, dn(), vn(), de()] | lang=en
- "columns_select_zn": "zn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Bt(), F(), $i()] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0094406e1e1e055b3611e5e3103e9f287c45ce5f": "0094406 Add contractor maintenance workflow API" | kind=Commit | source=git | neighbors=[main, 377dc79 Complete sales progression life…, api.php, 1e400f2 Harden organisation role manage…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0755a5bfae345300f4ddb1862bea6446efe4bc7e": "0755a5b feat(design): acceptance sweep across every public page" | kind=Commit | source=git | neighbors=[main, d85600d fix(design): complete the prima…, web.php, 32b3ede fix(design): comparison search …] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0b4ddca6799b1d8a470880c28349a22c44fb1dc4": "0b4ddca Expand real estate agency API scope" | kind=Commit | source=git | neighbors=[main, d025ed4 Add property matching and letti…, api.php, 482a093 Implement core real estate prod…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0b515d43e945f9ca299b1ae8adc8ae90e1be255d": "0b515d4 Add property marketing and email campaigns" | kind=Commit | source=git | neighbors=[main, 8dbc079 Add property media management A…, api.php, c1810e1 Add saved reports and dashboard…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@0e035e4aaa4f312e3c6ec7f0b165241779572a9d": "0e035e4 Fix ExampleTest to properly set up team for Filament tenancy and add Re…" | kind=Commit | source=git | neighbors=[main, 95899d0 Add PropertyValuationFactory to…, ExampleTest.php, 38e3b5f Fix route parameter mismatches …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@13a78a4adaad7613ba8a1c9b8c28d18e57968c0c": "13a78a4 Schedule tenant portal synchronisation" | kind=Commit | source=git | neighbors=[main, 1736251 Dispatch core workflow notifica…, console.php, d456865 Complete regional setup defaults] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@13e015d758c989bc110965659e1d5ec92c7fe79b": "13e015d Complete agency performance reporting" | kind=Commit | source=git | neighbors=[main, 5a076f5 Search current property viewings, api.php, 8acab4b Process property media uploads] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@16c9a273a057f4465be4da49ed32ef05a147e962": "16c9a27 Add unified calendar and task collaboration" | kind=Commit | source=git | neighbors=[main, d954291 Add document versioning and sig…, api.php, fb32daf Add external accounting integra…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1736251d61b74e153679f2285d6b530632e585d1": "1736251 Dispatch core workflow notifications" | kind=Commit | source=git | neighbors=[13a78a4 Schedule tenant portal synchron…, main, 0a56ed3 Add branch and currency to list…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1b9b63974fab4d8eb3eaded5ac969baa67934c99": "1b9b639 Add tenant application referencing API" | kind=Commit | source=git | neighbors=[main, 98c8894 Complete viewing lifecycle API, api.php, 377dc79 Complete sales progression life…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1dcc78a23e7e74ba3cc0539f3134f9ebfbea7bc0": "1dcc78a Add operational service integrations API" | kind=Commit | source=git | neighbors=[main, 815ced2 Add property compliance managem…, api.php, 96fc310 Add staff and department manage…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@1e400f23ae8a201ea6a01fd6d56a53591ff79c03": "1e400f2 Harden organisation role management" | kind=Commit | source=git | neighbors=[main, 0094406 Add contractor maintenance work…, api.php, 815ced2 Add property compliance managem…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@222cd2ec21a62293a9233dfc553338e44c002f46": "222cd2e fix: serve the media the app actually writes, and six review findings" | kind=Commit | source=git | neighbors=[main, 086ae2d feat(listings): pair a result w…, web.php, 53be7b8 feat(listings): show every room…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@2acd19dc9574e097c1fc6428ce64f78820e4933c": "2acd19d feat(design): styleguide route and the shared Survey Sheet components" | kind=Commit | source=git | neighbors=[main, e364fb3 fix(design): remove a CDN regre…, web.php, f0209b9 fix(design): bind dark: to the …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@377dc79ea1ffc02590882b463d8cbdc2a88ba992": "377dc79 Complete sales progression lifecycle API" | kind=Commit | source=git | neighbors=[0094406 Add contractor maintenance work…, main, 1b9b639 Add tenant application referenc…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@719b3c1cccc5a824edad17fba97b208590c888ff": "719b3c1 Complete applicant property matching" | kind=Commit | source=git | neighbors=[main, f6d9c68 Expand agency automation actions, api.php, c556af5 Add meetings and reminders to c…] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-057.json

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
