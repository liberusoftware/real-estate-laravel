# Node Description Batch 61 of 212

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

- "components_chart_getweekenddays": "getWeekendDays()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getWeekSettings(), getWeekendWeekdays(), isWeekend()]
- "components_chart_gi": "gi()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, contains(), ye(), Vf()]
- "components_chart_gs": "gs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ps(), sh(), Xc()]
- "components_chart_hasvalue": "hasValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, average(), se(), nearest()]
- "components_chart_hd": "hd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, create(), pr(), Ya()]
- "components_chart_hexstring": "hexString()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, color(), $c(), hi()]
- "components_chart_ht": "Ht()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeGridLineItems(), drawBorder(), getPixelForDecimal()]
- "components_chart_ic": "Ic()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromFormatExplain(), explainFromTokens(), jm()]
- "components_chart_ig": "ig()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, add(), startOf(), va()]
- "components_chart_index": "index()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getSortedVisibleDatasetMetas(), ir(), sr()]
- "components_chart_insertelements": "_insertElements()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, parse(), updateElements(), _resyncElements()]
- "components_chart_instance": "instance()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ae(), Ei(), toUTC()]
- "components_chart_isenglish": "isEnglish()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, sc(), listingMode(), relFormatter()]
- "components_chart_ispointinarea": "isPointInArea()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _eventHandler(), ir(), sr()]
- "components_chart_ji": "ji()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getDecimalForValue(), getValueForPixel(), initOffsets()]
- "components_chart_kd": "kd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, K(), wd(), xi()]
- "components_chart_ke": "ke()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), B(), _update()]
- "components_chart_kh": "kh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, B(), ee(), vh()]
- "components_chart_ld": "ld()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, br(), Di(), re()]
- "components_chart_leftforltr": "leftForLtr()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, adjustHitBoxes(), draw(), _drawColorBox()]
- "components_chart_length": "length()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, divideEqually(), get(), toDuration()]
- "components_chart_listingmode": "listingMode()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, En(), formatDateTimeFromString(), isEnglish()]
- "components_chart_lt": "Lt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, oh(), parseObjectData(), pi()]
- "components_chart_mapunits": "mapUnits()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fc(), Gt(), splitBy()]
- "components_chart_maxdigits": "_maxDigits()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildTicks(), isHorizontal(), _resolveTickFontOptions()]
- "components_chart_mg": "mg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getWeekSettings(), get(), pn()]
- "components_chart_mh": "mh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, I(), rotate(), $t()]
- "components_chart_nd": "nd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _createDescriptors(), getContext(), rd()]
- "components_chart_negate": "negate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, diff(), minus(), Gt()]
- "components_chart_nf": "nf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, gf(), E(), getBaseValue()]
- "components_chart_ni": "Ni()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, interpolate(), jd(), Ri()]
- "components_chart_num": "num()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, format(), numberFormatter(), Q()]
- "components_chart_o": "_o()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Jn(), $h(), Y()]
- "components_chart_offsetname": "offsetName()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, dc(), offsetNameLong(), offsetNameShort()]
- "components_chart_override": "override()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ca(), Tn(), register()]
- "components_chart_parsearraydata": "parseArrayData()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, parse(), P(), resolveDataElementOptions()]
- "components_chart_parseprimitivedata": "parsePrimitiveData()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, parse(), getLabels(), resolveDataElementOptions()]
- "components_chart_pd": "pd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, path(), W(), Xa()]
- "components_chart_pe": "pe()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, init(), me(), So()]
- "components_chart_pg": "pg()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), resolvedOptions(), zr()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-060.json

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
