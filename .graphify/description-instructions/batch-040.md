# Node Description Batch 41 of 212

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

- "stat_chart_updatevisibility": "_updateVisibility()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, hide(), show(), getDatasetMeta(), _resolveAnimations(), setDatasetVisibility()]
- "stat_chart_wa": "wa()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, tn(), getPadding(), on(), S(), Wn()]
- "stat_chart_wl": "wl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawGrid(), ee(), getPointLabelContext(), kl(), kt()]
- "stat_chart_yr": "yr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _r(), createResolver(), getOptionScopes(), pluginScopeKeys(), T()]
- "stat_chart_z": "Z()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, aa(), ai(), draw(), isPointInArea(), xl()]
- "support_support_ba": "ba()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, jt(), Pn(), pt(), xt(), fn()]
- "support_support_ee": "Ee()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, as(), dt(), he(), J(), ve()]
- "support_support_hi": "Hi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, I(), ii(), ja(), r(), Vn()]
- "support_support_li": "Li()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ei(), Pn(), pt(), xt(), Zr()]
- "support_support_lr": "lr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ar(), qt(), sr(), y(), wn()]
- "support_support_ne": "ne()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Cn(), J(), c(), I(), S()]
- "support_support_nn": "Nn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, V(), Yt(), sr(), ue(), yn()]
- "support_support_pn": "Pn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ba(), ei(), fn(), Li(), pt()]
- "support_support_pt": "pt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ba(), fn(), la(), Li(), Pn()]
- "support_support_vi": "Vi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), ei(), gr(), xt(), Zr()]
- "support_support_xi": "Xi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Vn(), br(), Tn(), Tt(), zn()]
- "support_support_zi": "zi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), br(), ht(), Nt(), Tn()]
- "support_support_zr": "Zr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), Li(), Vi(), h(), J()]
- "tables_tables_b": "B()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, C(), E(), je(), v(), xe()]
- "tables_tables_deselectrecords": "deselectRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, updatedSelectedRecords(), handleCheckboxClick(), toggleSelectedRecord(), toggleSelectRecords(), toggleSelectRecordsOnPage()]
- "tables_tables_f": "F()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), ge(), je(), M(), pe()]
- "tables_tables_fn": "fn()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, j(), Ne(), te(), Y(), Z()]
- "tables_tables_u": "U()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), Ie(), je(), q(), R()]
- "tables_tables_we": "we()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, Se(), E(), I(), M(), T()]
- "theme_manifest": "theme.json manifest" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), real-estate-default theme, Theme rename: liberu-base becomes base …]
- "two_factor_authentication_module": "Liberu Two-Factor Authentication" | kind=entity | source=modules/two-factor-authentication/README.md | neighbors=[Liberu Sessions and Devices, Capability: identity.two-factor, Category: foundation, liberu-module Composer package type, liberusoftware/identity, Private Security Disclosure Policy]
- "actions_actions_generatemodalid": "generateModalId()" | kind=code-symbol | source=public/js/filament/actions/actions.js:L1 | neighbors=[actions.js, closeModal(), openModal(), rememberPreviouslyFocusedElement(), syncActionModals()]
- "api_contract_real_estate_parties_v1": "OpenAPI v1: Real Estate Parties API" | kind=entity | source=modules/real-estate-parties-api/openapi/v1/real-estate-parties.yaml | neighbors=[x-liberu-idempotency-header (Idempotenc…, Sanctum bearer security scheme, Error schema (message, code, errors), PaginationMeta schema, Real Estate Parties API]
- "api_contract_real_estate_properties_v1": "OpenAPI v1: Real Estate Properties API" | kind=entity | source=modules/real-estate-properties-api/openapi/v1/real-estate-properties.yaml | neighbors=[x-liberu-idempotency-header (Idempotenc…, Sanctum bearer security scheme, Error schema (message, code, errors), PaginationMeta schema, Real Estate Properties API]
- "application_updatevaluation": "UpdateValuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/UpdateValuation.php:L1 | neighbors=[UpdateValuation, 2f18670 Conform real estate modules and…, 44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…]
- "application_updateviewing": "UpdateViewing.php" | kind=code-symbol | source=modules/real-estate-viewings/src/Application/UpdateViewing.php:L1 | neighbors=[UpdateViewing, 2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…]
- "architecture_moduleboundariestest": "ModuleBoundariesTest.php" | kind=code-symbol | source=tests/Architecture/ModuleBoundariesTest.php:L1 | neighbors=[moduleDirectories(), modulePhpFiles(), packageVendor(), 73659b3 Add real estate parties module …, 75f7818 Bootstrap application from Libe…]
- "auth_two_factor_challenge_blade": "two-factor-challenge.blade.php" | kind=code-symbol | source=resources/views/auth/two-factor-challenge.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…, f358830 chore: trim the comments, and w…]
- "auth_verify_email_blade": "verify-email.blade.php" | kind=code-symbol | source=resources/views/auth/verify-email.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…, f358830 chore: trim the comments, and w…]
- "cache_registrycache_registrycache": "RegistryCache" | kind=code-symbol | source=modules/module-manager/src/Cache/RegistryCache.php:L10 | neighbors=[RegistryCache.php, .clear(), .__construct(), .load(), .write()]
- "cache_themecache_themecache": "ThemeCache" | kind=code-symbol | source=modules/theme-support/src/Cache/ThemeCache.php:L8 | neighbors=[ThemeCache.php, .clear(), .__construct(), .load(), .write()]
- "columns_select_ae": "ae()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, it(), gn(), ui(), xi()]
- "columns_select_bi": "bi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ct(), it(), bn(), Rt()]
- "columns_select_di": "di()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, re(), U(), Dt(), lt()]
- "columns_select_ei": "ei()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, tn(), wt(), zt(), fn()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-040.json

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
