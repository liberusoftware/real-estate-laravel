# Node Description Batch 59 of 212

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

- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@748a88befd294da5e38028108867dff3c8db1445": "748a88b Add multichannel notification delivery" | kind=Commit | source=git | neighbors=[main, c556af5 Add meetings and reminders to c…, api.php, f91ec3a Complete valuation workflow API] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@78f4c58b1e039a9d9731c097d9b58c16c1af09d8": "78f4c58 Complete real estate OpenAPI contract metadata" | kind=Commit | source=git | neighbors=[RealEstateCapabilityCoverageTest.php, main, d07b218 Harden real estate Livewire lis…, bd5c605 Add explicit API response resou…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@815ced21518c30cb272b91d29661d05c51e40b67": "815ced2 Add property compliance management API" | kind=Commit | source=git | neighbors=[1dcc78a Add operational service integra…, main, 1e400f2 Harden organisation role manage…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@81d16005f6566aac8c80c178ae8fccfb6379a233": "81d1600 Add CRM document access controls" | kind=Commit | source=git | neighbors=[main, 9c4619e Complete property record details, api.php, f6d9c68 Expand agency automation actions] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@863be5bcb2d4aba19139c9ada1039a06c786a319": "863be5b Add agency automation and notification APIs" | kind=Commit | source=git | neighbors=[main, 6ea3c29 Add granular agency permissions…, api.php, d025ed4 Add property matching and letti…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@881febfd8081dfdfdeb99ac1603828933943ab7d": "881febf Normalize module package names for Packagist" | kind=Commit | source=git | neighbors=[75d6371 Add real estate properties modu…, main, 2affb83 Lock published module package n…, submit-packagist.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8a81cb0b7486bb984a786454c2827720989072c8": "8a81cb0 Update dependencies including to Laravel 13, PHP 8.5, Filament 5 and Li…" | kind=Commit | source=git | neighbors=[main, 66b36a4 Update dependencies including t…, daadd43 Update test workflow for covera…, b16f206 Update dependencies including t…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8c6e4648bf71d001e802718cb2e527c74953a5ad": "8c6e464 fix: apply two rounds of review findings" | kind=Commit | source=git | neighbors=[8069a15 feat(footer): publish the agenc…, main, dc5fd78 fix(currency): one currency on …, web.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@8dbc079aa660901ef9342023eda0913c23d03fbb": "8dbc079 Add property media management API" | kind=Commit | source=git | neighbors=[0b515d4 Add property marketing and emai…, main, 96fc310 Add staff and department manage…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@97a79a89fc1e351eeb52eaf59abec94919339cdb": "97a79a8 Add offer negotiation history API" | kind=Commit | source=git | neighbors=[main, a579db4 Add contact relationship manage…, api.php, 98c8894 Complete viewing lifecycle API] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@98c88943b082dbbd23cc5bfa8ed20e4ace0ebb76": "98c8894 Complete viewing lifecycle API" | kind=Commit | source=git | neighbors=[1b9b639 Add tenant application referenc…, main, 97a79a8 Add offer negotiation history A…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@9cbd3b9d98206823682d18e49cb4181fbff3a1f5": "9cbd3b9 fix(design): sold stock badged new, type filter returning nothing, dead…" | kind=Commit | source=git | neighbors=[6d09bd2 feat(design): contact form, and…, main, 1902f33 feat(design): search, applied f…, web.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@a2736f96454f745ebbd888e3aadd7b98d813d855": "a2736f9 Merge main into real estate conformance" | kind=Commit | source=git | neighbors=[12bd6e1 Conform real estate modules to …, 5eb4712 Harden real estate Filament bou…, main, f95c7dd Pin published real estate modul…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@a579db46364557f9277d93ac50986358655b6bf8": "a579db4 Add contact relationship management API" | kind=Commit | source=git | neighbors=[97a79a8 Add offer negotiation history A…, main, f91ec3a Complete valuation workflow API, api.php] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@b03433978c210855ee7d12a210fdb48a4fd0e780": "b034339 Harden release verification and API contracts" | kind=Commit | source=git | neighbors=[main, 8f64baf Refresh published module refere…, UserContractsTest.php, bd4b1dc Add independent property portal…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@bcedb3e3e46e9f16ac5dc8869508fbca4837e0c3": "bcedb3e Add unified property portal integrations" | kind=Commit | source=git | neighbors=[6ea3c29 Add granular agency permissions…, main, fb32daf Add external accounting integra…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@bdf23d61d8c631cd8aa47f05c3bb24eb6c9f956b": "bdf23d6 Merge pull request #1255 from liberu-real-estate/copilot/fix-property-s…" | kind=Commit | source=git | neighbors=[afd0be1 Merge pull request #1254 from l…, main, f79fa72 Merge branch 'main' of github.c…, c02ebae Fix: Accept application/x-empty…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@c1810e1911f2f0ebdcc9693fc1c6e26fd1afa62d": "c1810e1 Add saved reports and dashboard layouts" | kind=Commit | source=git | neighbors=[main, 0b515d4 Add property marketing and emai…, api.php, d954291 Add document versioning and sig…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@c556af576afd6d67e795a1cfe5429cfa579297ae": "c556af5 Add meetings and reminders to calendar" | kind=Commit | source=git | neighbors=[748a88b Add multichannel notification d…, main, 719b3c1 Complete applicant property mat…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d025ed4b39c07d1543e579eb54a1553ba6043f4e": "d025ed4 Add property matching and lettings lifecycle APIs" | kind=Commit | source=git | neighbors=[0b4ddca Expand real estate agency API s…, main, 863be5b Add agency automation and notif…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d9542910369b5bdeb8ec11a74554cea37edd40bd": "d954291 Add document versioning and signatures" | kind=Commit | source=git | neighbors=[16c9a27 Add unified calendar and task c…, main, c1810e1 Add saved reports and dashboard…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@da0ba47991e9ab34f33637693b3bce10aacf8875": "da0ba47 Merge pull request #1256 from liberu-real-estate/copilot/fix-workflows-…" | kind=Commit | source=git | neighbors=[cc67307 Fix main.yml: correct docker ac…, d97e09c Update dependencies, main, dd84f8a Update setup.sh branding to Lib…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@dd84f8ab7f5941b202547fe0119bcb7dac890995": "dd84f8a Update setup.sh branding to Liberu Real Estate" | kind=Commit | source=git | neighbors=[da0ba47 Merge pull request #1256 from l…, main, e3c21d0 bugfixes and updates. joelbutch…, fd0635b Merge branch 'main' of github.c…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@ddade0b046f5c6cb01be64a05866c3614161a6b5": "ddade0b feat(property): put every control on the property page on the design sy…" | kind=Commit | source=git | neighbors=[aaa5e6e fix(dashboard): link a super_ad…, main, df84b98 Merge pull request #1300 from l…, e90c0cd fix(panels): let every role ope…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@de6d29dc8390dc03588c6212f16bd1ccbb4f14d9": "de6d29d Merge pull request #1250 from liberu-real-estate/copilot/fix-workflows-…" | kind=Commit | source=git | neighbors=[d77f367 Fix MySQL CI failures by using …, main, 3f51796 Merge pull request #1251 from l…, fc92cc8 Initial plan] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@df84b985876c048b2a7a398fe3468fbf5c5134a7": "df84b98 Merge pull request #1300 from liberusoftware/public-site-nav-and-forms" | kind=Commit | source=git | neighbors=[98dde9e Merge pull request #1299 from l…, ddade0b feat(property): put every contr…, main, 45479e6 Merge pull request #1301 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f5a62bfa7233db035e90112a160d5576014272e7": "f5a62bf Fix failing tests and logic issues" | kind=Commit | source=git | neighbors=[1174981 Initial plan: fix failing tests, main, 5d4dc0c Address code review: extract co…, User.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@fb32dafb020d5b7e305d2018fd4cdc4a377192d2": "fb32daf Add external accounting integration boundary" | kind=Commit | source=git | neighbors=[bcedb3e Add unified property portal int…, main, 16c9a27 Add unified calendar and task c…, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@fd0635b6bbb5319fdee75504925b16a5287e368c": "fd0635b Merge branch 'main' of github.com:liberu-real-estate/real-estate-laravel" | kind=Commit | source=git | neighbors=[9ab0bd1 Update Dockerfile to PHP 8.5, dd84f8a Update setup.sh branding to Lib…, main, 10d943c Update UserSeeder and RoleSeeder] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@fdf2553c613a080a99d8600325f0819682d2a5ad": "fdf2553 Document full real estate scope audit" | kind=Commit | source=git | neighbors=[5e788ce Add bilingual organisation loca…, main, 98dde9e Merge pull request #1299 from l…, d1188ad feat(design): Survey Sheet foun…] | lang=en
- "components_agencylist": "AgencyList.php" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/AgencyList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…, AgencyList] | lang=en
- "components_authentication_card_blade": "authentication-card.blade.php" | kind=code-symbol | source=resources/views/components/authentication-card.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…] | lang=en
- "components_authentication_card_logo_blade": "authentication-card-logo.blade.php" | kind=code-symbol | source=resources/views/components/authentication-card-logo.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…] | lang=en
- "components_branchlist": "BranchList.php" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/BranchList.php:L1 | neighbors=[0b733c9 Add real estate core module sur…, 2f18670 Conform real estate modules and…, d07b218 Harden real estate Livewire lis…, BranchList] | lang=en
- "components_chart_addeventlistener": "addEventListener()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, removeEventListener(), fu(), pu()] | lang=en
- "components_chart_afterdatasetsupdate": "afterDatasetsUpdate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), isDatasetVisible(), tf()] | lang=en
- "components_chart_afterdraw": "afterDraw()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, draw(), notifyPlugins(), _willRender()] | lang=en
- "components_chart_animateoptions": "_animateOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _createAnimations(), qh(), Zh()] | lang=en
- "components_chart_applystack": "applyStack()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Wa(), _calculateBarValuePixels(), updateElements()] | lang=en
- "components_chart_average": "average()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, add(), hasValue(), tooltipPosition()] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-058.json

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
