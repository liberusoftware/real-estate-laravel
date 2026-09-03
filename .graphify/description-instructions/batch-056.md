# Node Description Batch 57 of 212

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

- "support_support_gr": "gr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, aa(), fn(), Yt(), Vi()]
- "support_support_ii": "ii()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Cn(), Hi(), Nt(), Vn()]
- "support_support_io": "Io()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Ot(), Xe(), ws(), ys()]
- "support_support_kn": "kn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ae(), ls(), Xe(), xo()]
- "support_support_ni": "Ni()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ct(), ht(), ri(), Tn()]
- "support_support_o": "_o()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, g(), r(), S(), Ot()]
- "support_support_ot": "Ot()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), Io(), _o(), Tr()]
- "support_support_qi": "qi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Bt(), ct(), yr(), rn()]
- "support_support_ta": "Ta()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Ji(), Bt(), ct(), ri()]
- "tables_tables_canselectallrecords": "canSelectAllRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, areRecordsSelected(), areRecordsToggleable(), getRecordsOnPage(), getSelectedRecordsCount()]
- "tables_tables_g": "G()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ge(), me(), R(), T()]
- "tables_tables_ge": "ge()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, A(), F(), G(), v()]
- "tables_tables_i": "I()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), Se(), we(), Ye()]
- "tables_tables_ie": "Ie()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, be(), A(), C(), U()]
- "tables_tables_ne": "Ne()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, fn(), ee(), j(), Y()]
- "tables_tables_toggleselectrecordsonpage": "toggleSelectRecordsOnPage()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, areRecordsSelected(), deselectRecords(), getRecordsOnPage(), selectRecords()]
- "tables_tables_ue": "Ue()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, be(), A(), K(), v()]
- "tables_tables_updatedselectedrecords": "updatedSelectedRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, deselectAllRecords(), deselectRecords(), selectAllRecords(), selectRecords()]
- "tables_tables_ve": "ve()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, Se(), A(), C(), T()]
- "tables_tables_w": "W()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), oe(), T(), xe()]
- "tests_testcase_testcase": "TestCase" | kind=code-symbol | source=tests/TestCase.php:L7 | neighbors=[TestCase.php, .defineEnvironment(), .discoveredProviders(), .getPackageProviders(), .setUp()]
- "theme_accessibility_baseline": "Theme accessibility baseline" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), real-estate-default theme]
- "theme_declared_entry_points": "Declared asset entry points (resources/css/app.css, resources/js/app.js)" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), real-estate-default theme]
- "theme_inheritance": "Theme parent inheritance chain" | kind=entity | source=themes/base/README.md | neighbors=[clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), Child-theme relative CSS import across …, real-estate-default theme]
- "theme_missing_preview_image": "Unpublished theme preview image" | kind=entity | source=themes/base/README.md | neighbors=['planned' as an explicit backlog marker, base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "theme_support_package": "liberusoftware/theme-support" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), real-estate-default theme]
- "transport_onthemarketclient_onthemarketclient": "OnTheMarketClient" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Transport/OnTheMarketClient.php:L12 | neighbors=[OnTheMarketClient.php, .branchPropertyList(), .removeProperty(), .request(), .sendProperty()]
- "transport_rightmoveclient_rightmoveclient": "RightmoveClient" | kind=code-symbol | source=modules/real-estate-rightmove/src/Transport/RightmoveClient.php:L12 | neighbors=[RightmoveClient.php, .branchPropertyList(), .removeProperty(), .request(), .sendProperty()]
- "transport_zooplaclient_zooplaclient": "ZooplaClient" | kind=code-symbol | source=modules/real-estate-zoopla/src/Transport/ZooplaClient.php:L12 | neighbors=[ZooplaClient.php, .branchPropertyList(), .removeProperty(), .request(), .sendProperty()]
- "unit_modulesupportcoveragetest": "ModuleSupportCoverageTest.php" | kind=code-symbol | source=tests/Unit/ModuleSupportCoverageTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, capabilities(), name(), ready(), test()]
- "unit_translationregistrytest": "TranslationRegistryTest.php" | kind=code-symbol | source=modules/localization-core/tests/Unit/TranslationRegistryTest.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, name(), supportedLanguages(), translate(), translateBatch()]
- "vite_config": "vite.config.js" | kind=code-symbol | source=vite.config.js:L1 | neighbors=[4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, f72c39d Upgrade to Laravel 13, PHPUnit …, themeInputs]
- "actions_createuserfromprovider_createuserfromprovider": "CreateUserFromProvider" | kind=code-symbol | source=modules/identity-socialstream/src/Actions/CreateUserFromProvider.php:L13 | neighbors=[CreateUserFromProvider.php, .__construct(), .create(), .createTeam()]
- "api_error_schema": "API Error Schema" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Shared PaginationMeta Schema, Real Estate Zoopla Sync API (OpenAPI v1), Real Estate Core OpenAPI v1, Real Estate Instructions OpenAPI v1]
- "api_module_index": "API module index" | kind=entity | source=modules/api/README.md | neighbors=[Liberu API Access, Liberu platform project scope, One core package per adapter, Real Estate project scope]
- "application_createinstruction": "CreateInstruction.php" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/CreateInstruction.php:L1 | neighbors=[CreateInstruction, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, e9bffaf Apply complete module formatting]
- "application_createlisting": "CreateListing.php" | kind=code-symbol | source=modules/real-estate-listings/src/Application/CreateListing.php:L1 | neighbors=[CreateListing, 6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…, e9bffaf Apply complete module formatting]
- "application_createproperty": "CreateProperty.php" | kind=code-symbol | source=modules/real-estate-properties/src/Application/CreateProperty.php:L1 | neighbors=[CreateProperty, 2f18670 Conform real estate modules and…, 75d6371 Add real estate properties modu…, 8cf045c Implement real estate module co…]
- "application_updateproperty": "UpdateProperty.php" | kind=code-symbol | source=modules/real-estate-properties/src/Application/UpdateProperty.php:L1 | neighbors=[UpdateProperty, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…, f4845d1 Complete real estate property m…]
- "cap_foundation_localization": "Capability: foundation.localization" | kind=entity | source=modules/localization-core/README.md | neighbors=[Capability: identity.profiles, liberusoftware/localization-contracts, Liberu Localization, Shared users Table Extension]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-056.json

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
