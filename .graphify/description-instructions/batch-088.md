# Node Description Batch 89 of 212

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
Write every description in English (en). Do not switch languages.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "components_chart_or": "or()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), oc()]
- "components_chart_ou": "ou()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarIndexPixels(), I()]
- "components_chart_parseformatforopts": "parseFormatForOpts()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Ec(), fromObject()]
- "components_chart_path": "path()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, xr(), pd()]
- "components_chart_positionchanged": "_positionChanged()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, _handleEvent(), setActiveElements()]
- "components_chart_qc": "qc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Sn(), Xc()]
- "components_chart_qd": "qd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, I(), Y()]
- "components_chart_qf": "qf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, rl(), uf()]
- "components_chart_qh": "qh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _animateOptions(), getUserBounds()]
- "components_chart_redefaulttoen": "redefaultToEN()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, clone(), toFormat()]
- "components_chart_redefaulttosystem": "redefaultToSystem()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, formatWithSystemDefault(), clone()]
- "components_chart_resetcache": "resetCache()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, clear(), resetCaches()]
- "components_chart_resetcaches": "resetCaches()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, resetCache(), vg()]
- "components_chart_resetelements": "_resetElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, reset(), N()]
- "components_chart_rf": "rf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, P(), tf()]
- "components_chart_ro": "ro()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Kc(), ps()]
- "components_chart_route": "route()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, gh(), bs()]
- "components_chart_s": "_s()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, nearest(), No()]
- "components_chart_saturate": "saturate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, hi(), oi()]
- "components_chart_setcenterpoint": "setCenterPoint()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, _f(), fit()]
- "components_chart_setdatasetvisibility": "setDatasetVisibility()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), _updateVisibility()]
- "components_chart_shifttoall": "shiftToAll()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, rescale(), shiftTo()]
- "components_chart_show": "show()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, onClick(), _updateVisibility()]
- "components_chart_size": "size()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), getMaxOverflow()]
- "components_chart_ta": "Ta()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, _update(), _updateAnimationTarget()]
- "components_chart_tg": "tg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getPointLabelContext(), Ft()]
- "components_chart_th": "th()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), add()]
- "components_chart_tick": "tick()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, cancel(), _notify()]
- "components_chart_tohuman": "toHuman()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, format(), listFormatter()]
- "components_chart_toisotime": "toISOTime()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromMillis(), toMillis()]
- "components_chart_tomillis": "toMillis()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, toISOTime(), valueOf()]
- "components_chart_torelativecalendar": "toRelativeCalendar()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, Fl(), fromObject()]
- "components_chart_tosql": "toSQL()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, toSQLDate(), toSQLTime()]
- "components_chart_ts": "Ts()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), _drawColorBox()]
- "components_chart_ui": "ui()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, nh(), zn()]
- "components_chart_updatehoverstyle": "updateHoverStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDatasetMeta(), _updateHoverStyles()]
- "components_chart_updateindex": "updateIndex()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), As()]
- "components_chart_updatemetasets": "_updateMetasets()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), _destroyDatasetMeta()]
- "components_chart_updateradius": "_updateRadius()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _update(), getVisibleDatasetCount()]
- "components_chart_us": "us()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, rs(), to()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-088.json

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
