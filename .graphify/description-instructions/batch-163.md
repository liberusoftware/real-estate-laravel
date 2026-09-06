# Node Description Batch 164 of 212

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

- "clear_modules_command": "ClearModulesCommand" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager]
- "columns_checkbox_a": "a()" | kind=code-symbol | source=public/js/filament/tables/components/columns/checkbox.js:L1 | neighbors=[checkbox.js]
- "columns_select_be": "be()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_fe": "Fe()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_ge": "Ge()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_hn": "hn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_in": "In()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_ke": "Ke()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_kn": "Kn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_pt": "pt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_qe": "qe()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_ri": "Ri()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_wn": "Wn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_select_zi": "zi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js]
- "columns_text_input_a": "a()" | kind=code-symbol | source=public/js/filament/tables/components/columns/text-input.js:L1 | neighbors=[text-input.js]
- "columns_toggle_a": "a()" | kind=code-symbol | source=public/js/filament/tables/components/columns/toggle.js:L1 | neighbors=[toggle.js]
- "components_actions_destroy": "destroy()" | kind=code-symbol | source=public/js/filament/schemas/components/actions.js:L1 | neighbors=[actions.js]
- "components_actions_disablesticky": "disableSticky()" | kind=code-symbol | source=public/js/filament/schemas/components/actions.js:L1 | neighbors=[actions.js]
- "components_actions_enablesticky": "enableSticky()" | kind=code-symbol | source=public/js/filament/schemas/components/actions.js:L1 | neighbors=[actions.js]
- "components_agencylist_agencylist_render": ".render()" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/AgencyList.php:L17 | neighbors=[AgencyList]
- "components_branchlist_branchlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/BranchList.php:L17 | neighbors=[BranchList]
- "components_chart_abutsend": "abutsEnd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_abutsstart": "abutsStart()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_afterevent": "afterEvent()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js]
- "components_chart_afterinit": "afterInit()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_bn": "Bn()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js]
- "components_chart_boolean": "boolean()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js]
- "components_chart_callback": "callback()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_cl": "Cl()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_clearer": "clearer()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js]
- "components_chart_date_full": "DATE_FULL()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_date_huge": "DATE_HUGE()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_date_med": "DATE_MED()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_date_med_with_weekday": "DATE_MED_WITH_WEEKDAY()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_date_short": "DATE_SHORT()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_datetime_full": "DATETIME_FULL()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_datetime_full_with_seconds": "DATETIME_FULL_WITH_SECONDS()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_datetime_huge": "DATETIME_HUGE()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_datetime_huge_with_seconds": "DATETIME_HUGE_WITH_SECONDS()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]
- "components_chart_datetime_med": "DATETIME_MED()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-163.json

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
