# Node Description Batch 24 of 212

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

- "support_support_tn": "Tn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Ea(), ma(), Bt(), Ni(), rn()]
- "support_support_x": "x()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, En(), Gt(), c(), m(), u()]
- "support_theme_helpers": "theme_helpers.php" | kind=code-symbol | source=modules/theme-support/src/Support/theme_helpers.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, active_theme(), set_theme(), theme(), theme_asset(), theme_layout()]
- "tables_tables_selectrecords": "selectRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, handleCheckboxClick(), deselectAllRecords(), isRecordSelected(), updatedSelectedRecords(), toggleSelectedRecord()]
- "theme_rename_liberu_base_to_base": "Theme rename: liberu-base becomes base (2.0)" | kind=entity | source=themes/base/UPGRADING.md | neighbors=[Liberu Base theme UPGRADING 1.x to 2.0, Child-theme relative CSS import across …, Host-controlled theme selection (config…, standards/THEMES.md, base theme (Liberu Base), ThemeDiscovery realpath dedupe]
- "theme_support_module": "Liberu Theme Support" | kind=entity | source=modules/theme-support/README.md | neighbors=[Liberu Settings Administration, Liberu Settings, Liberu Theme Support Livewire, Capability: foundation.theme-support, Category: presentation, liberu-module Composer package type]
- "webhooks_module": "Liberu Webhooks" | kind=entity | source=modules/webhooks/README.md | neighbors=[Liberu API Modules Scope, Liberu Scheduler and Queues, Capability: foundation.webhooks, Category: foundation, liberu-module Composer package type, liberusoftware/module-manager]
- "analytics_google_module": "Liberu Google Analytics" | kind=entity | source=modules/analytics-google/README.md | neighbors=[liberusoftware/analytics-contracts, Liberu Analytics Core, Capability: analytics.google, Contract: GoogleTransport, Liberu Integrations, liberu-module Composer package type]
- "analytics_meta_module": "Liberu Meta Server-Side Tracking" | kind=entity | source=modules/analytics-meta/README.md | neighbors=[liberusoftware/analytics-contracts, Liberu Analytics Core, Capability: analytics.meta, Contract: MetaTransport, Liberu Integrations, liberu-module Composer package type]
- "api_access_module": "Liberu API Access" | kind=entity | source=modules/api-access/README.md | neighbors=[Capability: foundation.api-access, Liberu Identity, laravel/sanctum, liberu-module Composer package type, Module category: foundation, API module index]
- "api_contract_real_estate_onthemarket_v1": "OpenAPI v1: Real Estate OnTheMarket Sync API" | kind=entity | source=modules/real-estate-onthemarket-api/openapi/v1/real-estate-onthemarket.yaml | neighbors=[x-liberu-idempotency-header (Idempotenc…, Sanctum bearer security scheme, /api/v1/real-estate versioned namespace, Real Estate Portals and Reporting (core…, Error schema (message, code, errors), PaginationMeta schema]
- "audit_module": "Liberu Audit" | kind=entity | source=modules/audit/README.md | neighbors=[Liberu Activity and Comments, Liberu Analytics Core, Capability: foundation.audit, Contract: AuditRecorder, liberu-module Composer package type, Module category: foundation]
- "bootstrap_app": "app.php" | kind=code-symbol | source=bootstrap/app.php:L1 | neighbors=[0812f9b Update main workflow Docker wit…, 30d2b7d Add socialstream, Docker/k8s up…, 3df11b3 Claude, 4b07ee8 Update main workflow Docker wit…, 750c68d Add socialstream, agent role, k…, 75f7818 Bootstrap application from Libe…]
- "capability_instructions": "Real Estate capability: Instructions" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-instructions, liberusoftware/real-estate-instructions…, liberusoftware/real-estate-instructions…]
- "capability_marketing": "Real Estate capability: Marketing" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 2: progression, portals,…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-marketing, liberusoftware/real-estate-marketing-api, liberusoftware/real-estate-marketing-fi…]
- "capability_matching": "Real Estate capability: Matching" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-matching, liberusoftware/real-estate-matching-api, liberusoftware/real-estate-matching-fil…]
- "capability_media_and_documents": "Real Estate capability: Media and Documents" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-media-and-do…, liberusoftware/real-estate-media-and-do…, liberusoftware/real-estate-media-and-do…]
- "capability_offers": "Real Estate capability: Offers" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-offers, liberusoftware/real-estate-offers-api, liberusoftware/real-estate-offers-filam…]
- "capability_parties": "Real Estate capability: Parties" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-parties, liberusoftware/real-estate-parties-api, liberusoftware/real-estate-parties-fila…]
- "capability_real_estate_core": "Real Estate capability: Real Estate Core" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-core, liberusoftware/real-estate-core-api, liberusoftware/real-estate-core-filament]
- "capability_sales_progression": "Real Estate capability: Sales Progression" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 2: progression, portals,…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-sales-progre…, liberusoftware/real-estate-sales-progre…, liberusoftware/real-estate-sales-progre…]
- "capability_valuations": "Real Estate capability: Valuations" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-valuations, liberusoftware/real-estate-valuations-a…, liberusoftware/real-estate-valuations-f…]
- "capability_viewings": "Real Estate capability: Viewings" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Delivery phase 1: core transaction chai…, Framework-neutral core boundary, Liberu Real Estate scope, liberusoftware/real-estate-viewings, liberusoftware/real-estate-viewings-api, liberusoftware/real-estate-viewings-fil…]
- "category_foundation": "Category: foundation" | kind=entity | source=modules/search/README.md:Architecture and integration | neighbors=[liberusoftware/roles-permissions, Liberu Scheduler and Queues, Liberu Search, Liberu Sessions and Devices, Liberu Settings, Liberu Two-Factor Authentication]
- "columns_select_de": "de()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Kt(), lt(), Xt(), fn(), un()]
- "columns_select_deferpositiondropdown": "deferPositionDropdown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, selectOption(), showLoadingState(), showMaxItemsMessage(), showNoOptionsMessage(), showNoResultsMessage()]
- "columns_select_dt": "Dt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, At(), dn(), di(), Ft(), hi()]
- "columns_select_hideloadingstate": "hideLoadingState()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown(), openDropdown(), renderOptions(), showLoadingState(), showNoOptionsMessage()]
- "columns_select_rn": "Rn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, b(), F(), ht(), Ln(), _n()]
- "columns_select_rt": "Rt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, dn(), pn(), bi(), ct(), vi()]
- "columns_select_tt": "Tt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, dn(), fi(), gn(), se(), it()]
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e02669d5a0dfee668d263049463a2348112a2b0c": "e02669d Update vite and plugins to latest" | kind=Commit | source=git | neighbors=[aca82ae Merge branch 'main' of github.c…, main, b16f206 Update dependencies including t…, chart.js, file-upload.js, app.js]
- "components_actions": "actions.js" | kind=code-symbol | source=public/js/filament/schemas/components/actions.js:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, destroy(), disableSticky(), enableSticky(), init()]
- "components_chart_buildorupdateelements": "buildOrUpdateElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, As(), _dataCheck(), getDataset(), Kn(), _resyncElements()]
- "components_chart_computelabelsizes": "_computeLabelSizes()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, B(), I(), qu(), _resolveTickFontOptions(), ze()]
- "components_chart_computetitleheight": "_computeTitleHeight()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, adjustHitBoxes(), st(), X(), draw(), drawTitle()]
- "components_chart_createanimations": "_createAnimations()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _animateOptions(), active(), cancel(), get(), now()]
- "components_chart_drawbody": "drawBody()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, draw(), _drawColorBox(), N(), ne(), textAlign()]
- "components_chart_endof": "endOf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), minus(), plus(), startOf(), ve()]
- "components_chart_getdistancefromcenterforvalue": "getDistanceFromCenterForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawBackground(), drawGrid(), I(), getPointPositionForValue(), gf()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-023.json

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
