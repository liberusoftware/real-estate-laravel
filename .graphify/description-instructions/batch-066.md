# Node Description Batch 67 of 212

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

- "components_code_editor_setbuffer": "setBuffer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, cursorSet(), set(), get()]
- "components_code_editor_setheight": "setHeight()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, balanced(), setMeasuredHeight(), updateHeight()]
- "components_code_editor_setlookahead": "setLookAhead()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, getActions(), reduce(), emitLookAhead()]
- "components_code_editor_setorder": "setOrder()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, constructor(), facet(), update()]
- "components_code_editor_setwindow": "setWindow()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, setRoot(), addWindowListeners(), removeWindowListeners()]
- "components_code_editor_skip": "skip()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, advance(), preserve(), run()]
- "components_code_editor_sm": "sm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L34 | neighbors=[code-editor.js, addGaps(), get(), toTree()]
- "components_code_editor_span": "span()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, flush(), point(), spans()]
- "components_code_editor_sq": "sQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, constructor(), B(), nQ()]
- "components_code_editor_ss": "sS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, constructor(), add(), addEventListener()]
- "components_code_editor_startparse": "startParse()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, parse(), startInner(), createParse()]
- "components_code_editor_startupdate": "startUpdate()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, facet(), field(), startQuery()]
- "components_code_editor_stopat": "stopAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, advance(), getSkippingParser(), takeTree()]
- "components_code_editor_suppresswidgetcursorchange": "suppressWidgetCursorChange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, Ci(), posFromDOM(), updateSelection()]
- "components_code_editor_t": "$T()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, get(), wordAt(), zt()]
- "components_code_editor_tc": "tc()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, add(), replace(), sort()]
- "components_code_editor_textafterpos": "textAfterPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, textAfter(), lineAt(), slice()]
- "components_code_editor_th": "th()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, advance(), eh(), YY()]
- "components_code_editor_tocontextpos": "toContextPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, constructor(), revertPending(), setSelection()]
- "components_code_editor_tokenbefore": "tokenBefore()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, resolveInner(), sliceDoc(), W()]
- "components_code_editor_ug": "ug()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, create(), split(), Y$()]
- "components_code_editor_unquote": "unquote()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), getReplacement(), replace()]
- "components_code_editor_updatelinegaps": "updateLineGaps()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure(), update(), same()]
- "components_code_editor_updaterange": "updateRange()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, updateDeco(), lineAt(), update()]
- "components_code_editor_updatescaler": "updateScaler()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure(), updateForViewport(), eq()]
- "components_code_editor_updatespacer": "updateSpacer()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, update(), ga(), Vf()]
- "components_code_editor_vd": "vd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, define(), of(), VS()]
- "components_code_editor_vi": "vi()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L38 | neighbors=[code-editor.js, cg(), LO(), peek()]
- "components_code_editor_viewportisappropriate": "viewportIsAppropriate()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, measure(), update(), lineAt()]
- "components_code_editor_wm": "wm()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L35 | neighbors=[code-editor.js, lineAt(), replace(), slice()]
- "components_code_editor_wp": "wP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, Hr(), Qo(), sliceDoc()]
- "components_code_editor_xd": "xd()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, keydown(), bd(), wd()]
- "components_code_editor_yf": "yf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, coordsAtPos(), posAtCoords(), yS()]
- "components_code_editor_yieldnode": "yieldNode()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), parent(), yield()]
- "components_code_editor_yu": "yu()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, su(), Xu(), of()]
- "components_code_editor_yy": "YY()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L37 | neighbors=[code-editor.js, advance(), GO(), th()]
- "components_file_upload_c": "c()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, o(), p(), s()]
- "components_file_upload_clickpercent": "clickPercent()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, getPosition(), mouseUp(), timelineClicked()]
- "components_file_upload_de": "De()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L3 | neighbors=[file-upload.js, le(), q(), yt()]
- "components_file_upload_moveplayhead": "movePlayhead()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L40 | neighbors=[file-upload.js, mouseUp(), getPosition(), timelineClicked()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-066.json

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
