# Node Description Batch 80 of 212

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
Write every description in Portuguese (pt). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "support_support_ja": "ja()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Hi(), Bt(), fo()]
- "support_support_jt": "jt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ba(), fn(), _n()]
- "support_support_ki": "ki()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), ct(), ri()]
- "support_support_le": "le()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, Hn(), W(), Xr()]
- "support_support_me": "me()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, dt(), de(), V()]
- "support_support_pa": "Pa()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Ji(), Cn(), Tt()]
- "support_support_pe": "pe()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, ae(), Ie(), ye()]
- "support_support_ri": "ri()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ki(), Ni(), Ta()]
- "support_support_se": "Se()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, as(), ls(), $t()]
- "support_support_setuparia": "setUpAria()" | kind=code-symbol | source=public/js/filament/support/support.js:L25 | neighbors=[support.js, init(), getTrigger(), syncAria()]
- "support_support_sn": "sn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, as(), ae(), wo()]
- "support_support_sr": "sr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, lr(), J(), Nn()]
- "support_support_t": "$t()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, as(), Se(), apply()]
- "support_support_ti": "ti()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), _n(), ca()]
- "support_support_tr": "Tr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ei(), Ot(), vt()]
- "support_support_u": "u()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, d(), r(), x()]
- "support_support_vt": "vt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, es(), _n(), Tr()]
- "support_support_wn": "wn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, lr(), yn(), xt()]
- "support_support_yt": "Yt()" | kind=code-symbol | source=public/js/filament/support/support.js:L14 | neighbors=[support.js, ar(), gr(), Nn()]
- "tables_tables_arerecordsselected": "areRecordsSelected()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, canSelectAllRecords(), toggleSelectRecords(), toggleSelectRecordsOnPage()]
- "tables_tables_arerecordstoggleable": "areRecordsToggleable()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, getSelectedRecordsCount(), canSelectAllRecords(), handleCheckboxClick()]
- "tables_tables_ce": "ce()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, Fe(), K(), v()]
- "tables_tables_fe": "Fe()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ce(), j(), P()]
- "tables_tables_handlecheckboxclick": "handleCheckboxClick()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, areRecordsToggleable(), deselectRecords(), selectRecords()]
- "tables_tables_k": "K()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ce(), j(), Ue()]
- "tables_tables_le": "le()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), oe(), te()]
- "tables_tables_me": "me()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, E(), G(), v()]
- "tables_tables_oe": "oe()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, le(), R(), W()]
- "tables_tables_q": "q()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, A(), U(), v()]
- "tables_tables_re": "re()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), C(), T()]
- "tables_tables_toggleselectedrecord": "toggleSelectedRecord()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, deselectRecords(), isRecordSelected(), selectRecords()]
- "tables_tables_toggleselectrecords": "toggleSelectRecords()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, areRecordsSelected(), deselectRecords(), selectRecords()]
- "tables_tables_y": "Y()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, ae(), fn(), Ne()]
- "tables_tables_ye": "Ye()" | kind=code-symbol | source=public/js/filament/tables/tables.js:L1 | neighbors=[tables.js, be(), I(), je()]
- "theme_no_bundled_third_party_assets": "No bundled third-party assets without provenance" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "theme_security_disclosure": "Private security disclosure (security@liberusoftware.com)" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "theme_support_livewire_module": "Liberu Theme Support Livewire" | kind=entity | source=modules/theme-support-livewire/README.md | neighbors=[Capability: foundation.theme-support.li…, Category: presentation, livewire/livewire ^4.0, Liberu Theme Support]
- "theme_supported_surfaces": "Declared supported host surfaces" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "theme_testing_expectations": "Theme testing expectations" | kind=entity | source=themes/base/README.md | neighbors=[base theme (Liberu Base), clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "theme_type_public": "Theme type: public" | kind=entity | source=themes/default/README.md | neighbors=[clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default), real-estate-default theme]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-079.json

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
