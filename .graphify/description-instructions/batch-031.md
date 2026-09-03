# Node Description Batch 32 of 212

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

- "components_chart_cancel": "cancel()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _notify(), now(), tick(), _createAnimations(), stop()]
- "components_chart_clear": "clear()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Ti(), clearCache(), draw(), resetCache(), vg()]
- "components_chart_computeticklimit": "computeTickLimit()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, isHorizontal(), kr(), _resolveTickFontOptions(), ut(), getTickLimit()]
- "components_chart_converttickstolabels": "_convertTicksToLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, afterTickToLabelConversion(), beforeTickToLabelConversion(), generateTickLabels(), I(), _update()]
- "components_chart_count": "count()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, diff(), get(), reconfigure(), startOf(), valueOf()]
- "components_chart_createdescriptors": "_createDescriptors()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, nd(), P(), sd(), _descriptors(), _notify()]
- "components_chart_da": "da()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, notifyPlugins(), Rt(), W(), Zt(), render()]
- "components_chart_describe": "describe()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, constructor(), Tn(), gh(), hh(), qu()]
- "components_chart_drawbackground": "drawBackground()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), drawCaret(), getDistanceFromCenterForValue(), jt(), rl()]
- "components_chart_drawdataset": "_drawDataset()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), He(), notifyPlugins(), zi(), _drawDatasets()]
- "components_chart_drawgrid": "drawGrid()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), _computeGridLineItems(), getDistanceFromCenterForValue(), getPointLabelContext(), getPointPosition()]
- "components_chart_ee": "ee()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, createResolver(), Ci(), kh(), resolveNamedOptions(), sh()]
- "components_chart_eventhandler": "_eventHandler()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _handleEvent(), isPointInArea(), notifyPlugins(), render(), _update()]
- "components_chart_formatdatetimefromstring": "formatDateTimeFromString()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, kl(), listingMode(), parseFormat(), Rn(), toFormat()]
- "components_chart_fromformat": "fromFormat()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromOpts(), invalid(), jm(), ss(), fromString()]
- "components_chart_fromformatparser": "fromFormatParser()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, equals(), explainFromTokens(), fromOpts(), invalid(), ss()]
- "components_chart_fromopts": "fromOpts()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildFormatParser(), fromFormat(), fromFormatExplain(), fromFormatParser(), create()]
- "components_chart_getdatatimestamps": "getDataTimestamps()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, _generate(), getAllParsedValues(), getMatchingVisibleMetas(), normalize(), _getTimestampsForTable()]
- "components_chart_getdatavisibility": "getDataVisibility()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarValuePixels(), calculateTotal(), _circumference(), _computeAngle(), updateElements()]
- "components_chart_getlabelandvalue": "getLabelAndValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, er(), getLabelForValue(), getLabels(), getParsed(), of()]
- "components_chart_getlabelcapacity": "_getLabelCapacity()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildTicks(), _generate(), _getLabelSize(), isHorizontal(), _tickFormatFunction()]
- "components_chart_getlabeltimestamps": "getLabelTimestamps()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildTicks(), _getLabelBounds(), getLabels(), normalize(), _getTimestampsForTable()]
- "components_chart_getmindaysinfirstweek": "getMinDaysInFirstWeek()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ar(), getWeekSettings(), getMinimumDaysInFirstWeek(), weeksInLocalWeekYear(), xl()]
- "components_chart_getpixelfordecimal": "getPixelForDecimal()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculateBarValuePixels(), Ht(), Ln(), getPixelForValue(), updateElements()]
- "components_chart_getpixelfortick": "getPixelForTick()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _calculatePadding(), _computeLabelItems(), getPixelForValue(), ru(), zu()]
- "components_chart_getpointlabelcontext": "getPointLabelContext()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawGrid(), _f(), getContext(), tg(), kf()]
- "components_chart_getpointpositionforvalue": "getPointPositionForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getBasePosition(), getDistanceFromCenterForValue(), getPointPosition(), gf(), updateElements()]
- "components_chart_getrotationextents": "_getRotationExtents()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _getCircumference(), getDatasetMeta(), _getRotation(), isDatasetVisible(), _update()]
- "components_chart_getruler": "_getRuler()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getParsed(), getPixelForValue(), _getStackCount(), ru(), updateElements()]
- "components_chart_getsharedoptions": "getSharedOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, includeOptions(), resolveDataElementOptions(), updateSharedOptions(), _setStyle(), updateElements()]
- "components_chart_getstyle": "getStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), resolveDatasetElementOptions(), labelColor(), labelPointStyle(), _setStyle()]
- "components_chart_gf": "gf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, df(), getDistanceFromCenterForValue(), getLabels(), getPointPositionForValue(), nf()]
- "components_chart_init": "init()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, formats(), getContext(), getLabels(), parse(), pe()]
- "components_chart_jd": "jd()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, beforeLayout(), Ni(), Qi(), Ri(), wr()]
- "components_chart_jf": "jf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, _f(), I(), jt(), st(), values()]
- "components_chart_kr": "kr()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, computeTickLimit(), P(), st(), setDimensions(), Zf()]
- "components_chart_lc": "lc()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromObject(), fn(), offset(), pn(), Ll()]
- "components_chart_lr": "lr()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, pathSegment(), pf(), va(), wr(), mf()]
- "components_chart_ne": "ne()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, adjustHitBoxes(), draw(), drawBody(), drawFooter(), drawTitle()]
- "components_chart_nearest": "nearest()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getCenterPoint(), hasValue(), ir(), _s(), tooltipPosition()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-031.json

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
