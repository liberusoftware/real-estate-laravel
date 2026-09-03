# Node Description Batch 25 of 212

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

- "components_chart_getindexangle": "getIndexAngle()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawLabels(), _f(), tt(), ut(), getPointPosition()]
- "components_chart_getminmax": "getMinMax()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, determineDataLimits(), at(), getMatchingVisibleMetas(), _getOtherScale(), getUserBounds()]
- "components_chart_getpointposition": "getPointPosition()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, drawGrid(), _f(), getIndexAngle(), getPointPositionForValue(), rl()]
- "components_chart_getprops": "getProps()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, fd(), getCenterPoint(), inRange(), Ka(), ma()]
- "components_chart_getstartofweek": "getStartOfWeek()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ar(), create(), getWeekSettings(), startOf(), weeksInLocalWeekYear()]
- "components_chart_hassame": "hasSame()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, endOf(), isEmpty(), minus(), setZone(), startOf()]
- "components_chart_hs": "hs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, bm(), Mm(), pm(), wm(), xm()]
- "components_chart_ie": "Ie()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, getPossibleOffsets(), minus(), plus(), reconfigure(), set()]
- "components_chart_isvisible": "_isVisible()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), draw(), fit(), getLineWidthForValue(), getMatchingVisibleMetas()]
- "components_chart_ka": "Ka()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, first(), getProps(), pathSegment(), Qi(), rd()]
- "components_chart_kt": "Kt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, alpha(), pn(), ps(), lo(), nh()]
- "components_chart_linkscales": "linkScales()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), initialize(), getDataset(), getScaleForId(), P()]
- "components_chart_ma": "ma()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, inXRange(), inYRange(), getProps(), N(), st()]
- "components_chart_me": "me()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, B(), E(), pe(), qu(), Tn()]
- "components_chart_ps": "ps()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, greyscale(), gs(), Kt(), toString(), ro()]
- "components_chart_resolveelementoptions": "_resolveElementOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, resolveDataElementOptions(), resolveDatasetElementOptions(), datasetElementScopeKeys(), getDataset(), getOptionScopes()]
- "components_chart_sf": "sf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ff(), addBox(), configure(), E(), getBasePixel()]
- "components_chart_sr": "sr()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, dataset(), index(), point(), inRange(), isPointInArea()]
- "components_chart_start": "start()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, render(), addBox(), configure(), get(), now()]
- "components_chart_tt": "tt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _f(), getIndexAngle(), uf(), wr(), xd()]
- "components_chart_un": "Un()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, dh(), sh(), add(), bo(), Ds()]
- "components_chart_vf": "Vf()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, buildTicks(), En(), gi(), I(), pi()]
- "components_chart_zs": "Zs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, sr(), xo(), xu(), yu(), getSortedVisibleDatasetMetas()]
- "components_code_editor_addleafelement": "addLeafElement()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, addNode(), _c(), finish(), writeElements(), complete()]
- "components_code_editor_addlinestart": "addLineStart()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, append(), find(), getBlockPos(), start(), addLineStartIfNotCovered()]
- "components_code_editor_addnamespaceobject": "addNamespaceObject()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, addNamespace(), addCompletion(), cg(), child(), replace()]
- "components_code_editor_addtext": "addText()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, append(), ensureMarks(), find(), flushBuffer(), isText()]
- "components_code_editor_baseindentfor": "baseIndentFor()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, baseIndent(), lineAt(), lineIndent(), resolve(), Fc()]
- "components_code_editor_bd": "bd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, facet(), get(), reduce(), TS(), keydown()]
- "components_code_editor_chunkend": "chunkEnd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, lineAt(), constructor(), gotoInner(), length(), next()]
- "components_code_editor_clear": "clear()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, processRecords(), ignore(), run(), setState(), update()]
- "components_code_editor_d": "_d()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, ch(), childBefore(), facet(), resolveInner(), W()]
- "components_code_editor_elementatheight": "elementAtHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, blockAt(), fromDOM(), readMeasured(), zi(), ja()]
- "components_code_editor_elt": "elt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, getNodeType(), finish(), nextLine(), parse(), resolveMarkers()]
- "components_code_editor_f1": "f1()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, composeDesc(), Du(), mapDesc(), mapEffects(), selection()]
- "components_code_editor_fencedcode": "FencedCode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L30 | neighbors=[code-editor.js, addNode(), finish(), nextLine(), prevLineEnd(), skipSpace()]
- "components_code_editor_ff": "ff()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, changes(), dispatch(), focus(), mapPos(), posAtCoords()]
- "components_code_editor_finishleaf": "finishLeaf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, advance(), addNode(), _c(), finish(), parseInline()]
- "components_code_editor_flushbuffer": "flushBuffer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, addInlineWidget(), addMark(), addText(), endLine(), append()]
- "components_code_editor_getactions": "getActions()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, advanceStack(), addActions(), pop(), setLookAhead(), stateSlot()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-024.json

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
