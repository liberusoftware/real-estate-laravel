# Node Description Batch 177 of 212

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

- "components_select_ge": "Ge()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_hn": "hn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_in": "In()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_ke": "Ke()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_pt": "pt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_qe": "qe()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_ri": "Ri()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_yn": "Yn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_select_zi": "zi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js]
- "components_slider_be": "Be()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_ce": "Ce()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_er": "er()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_ft": "Ft()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_ge": "Ge()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_ie": "Ie()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_jt": "jt()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_nr": "nr()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_pe": "Pe()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_qe": "qe()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_rr": "rr()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_tr": "tr()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_ve": "Ve()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_xe": "Xe()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_slider_zt": "zt()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js]
- "components_tabs_x": "x()" | kind=code-symbol | source=public/js/filament/schemas/components/tabs.js:L1 | neighbors=[tabs.js]
- "components_tags_input_r": "r()" | kind=code-symbol | source=public/js/filament/forms/components/tags-input.js:L1 | neighbors=[tags-input.js]
- "components_territorylist_territorylist_render": ".render()" | kind=code-symbol | source=modules/real-estate-core-livewire/src/Components/TerritoryList.php:L17 | neighbors=[TerritoryList]
- "components_textarea_n": "n()" | kind=code-symbol | source=public/js/filament/forms/components/textarea.js:L1 | neighbors=[textarea.js]
- "components_valuationlist_valuationlist_render": ".render()" | kind=code-symbol | source=modules/real-estate-valuations-livewire/src/Components/ValuationList.php:L17 | neighbors=[ValuationList]
- "components_viewinglist_viewinglist_render": ".render()" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/Components/ViewingList.php:L40 | neighbors=[ViewingList]
- "components_wizard_l": "l()" | kind=code-symbol | source=public/js/filament/schemas/components/wizard.js:L1 | neighbors=[wizard.js]
- "components_zooplasynclist_zooplasynclist_render": ".render()" | kind=code-symbol | source=modules/real-estate-zoopla-livewire/src/Components/ZooplaSyncList.php:L16 | neighbors=[ZooplaSyncList]
- "composer_semver": "composer/semver" | kind=entity | source=modules/module-manager/README.md | neighbors=[Liberu Module Manager]
- "concept_dependency_automation": "Daily Dependabot updates" | kind=entity | source=.github/dependabot.yml | neighbors=[Third-party actions not pinned to commi…]
- "concept_dual_filament_panels": "Dual Filament panels" | kind=entity | source=CLAUDE.md | neighbors=[CLAUDE.md — project instructions]
- "concept_host_attached_filament_plugin": "Host-attached Filament plugin" | kind=entity | source=modules/real-estate-properties-filament/README.md | neighbors=[Real Estate Properties Filament]
- "concept_release_gate": "Release is a claim about the tree" | kind=entity | source=.github/workflows/release.yml | neighbors=[Module-repo-first source of truth (§3.1)]
- "concept_reverb_unwired": "Reverb is installed but not wired" | kind=entity | source=CLAUDE.md | neighbors=[CLAUDE.md — project instructions]
- "concept_vite_theme_inputs": "Vite inputs are derived, not listed" | kind=entity | source=CLAUDE.md | neighbors=[theme.json manifest]
- "config_api_access": "api-access.php" | kind=code-symbol | source=modules/api-access/config/api-access.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-176.json

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
