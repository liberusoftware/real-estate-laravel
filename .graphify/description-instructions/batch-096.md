# Node Description Batch 97 of 212

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

- "components_markdown_editor_os": "os()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L15 | neighbors=[markdown-editor.js, _l(), y()]
- "components_markdown_editor_pa": "pa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ro(), va()]
- "components_markdown_editor_pi": "pi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, b(), S()]
- "components_markdown_editor_po": "po()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ls(), Qr()]
- "components_markdown_editor_qa": "qa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Jc(), Vc()]
- "components_markdown_editor_rl": "Rl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L11 | neighbors=[markdown-editor.js, ad(), hl()]
- "components_markdown_editor_sc": "Sc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, je(), ne()]
- "components_markdown_editor_un": "un()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L11 | neighbors=[markdown-editor.js, ed(), n()]
- "components_markdown_editor_vo": "vo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, lf(), sf()]
- "components_markdown_editor_we": "we()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Me(), y()]
- "components_markdown_editor_wr": "Wr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, to(), y()]
- "components_markdown_editor_xa": "xa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Oc(), Pc()]
- "components_markdown_editor_yr": "yr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, uf(), xl()]
- "components_markdown_editor_zf": "zf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Ie(), sl()]
- "components_markdown_editor_zn": "zn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Eo(), il()]
- "components_markdown_editor_zr": "Zr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Yt(), ye()]
- "components_rich_editor_aa": "aa()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, Br(), Cw()]
- "components_rich_editor_accepts": "accepts()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L131 | neighbors=[rich-editor.js, Ch(), mx()]
- "components_rich_editor_addhacknode": "addHackNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, matchesHack(), addTextblockHacks()]
- "components_rich_editor_addkeyboardshortcuts": "addKeyboardShortcuts()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, an(), zl()]
- "components_rich_editor_addmaps": "addMaps()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, append(), dw()]
- "components_rich_editor_addmark": "addMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Xm(), jy()]
- "components_rich_editor_addnode": "addNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, create(), updateChildren()]
- "components_rich_editor_addpasterules": "addPasteRules()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L110 | neighbors=[rich-editor.js, ge(), Ox()]
- "components_rich_editor_addtextblockhacks": "addTextblockHacks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, addHackNode(), updateChildren()]
- "components_rich_editor_ah": "Ah()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, Ax(), Th()]
- "components_rich_editor_ao": "ao()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, eq(), hasMarkup()]
- "components_rich_editor_appendmapping": "appendMapping()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, appendMap(), getMirror()]
- "components_rich_editor_atend": "atEnd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Nn(), Bo()]
- "components_rich_editor_ax": "Ax()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, Ah(), Th()]
- "components_rich_editor_bc": "Bc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, validate(), checkAttrs()]
- "components_rich_editor_bg": "Bg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, ou(), updateStateInner()]
- "components_rich_editor_c1": "c1()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, replace(), slice()]
- "components_rich_editor_calculatenewdimensions": "calculateNewDimensions()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, applyAspectRatio(), handleResize()]
- "components_rich_editor_canappend": "canAppend()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, canReplace(), compatibleContent()]
- "components_rich_editor_connectselection": "connectSelection()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, start(), wt()]
- "components_rich_editor_createextensionmanager": "createExtensionManager()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, constructor(), configure()]
- "components_rich_editor_delayselupdate": "delaySelUpdate()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, updateStateInner(), wt()]
- "components_rich_editor_deselectnode": "deselectNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, remove(), zd()]
- "components_rich_editor_destroypluginviews": "destroyPluginViews()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, destroy(), updatePluginViews()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-096.json

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
