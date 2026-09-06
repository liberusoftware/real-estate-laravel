# Node Description Batch 8 of 212

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

- "components_chart_st": "st()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), _computeTitleHeight(), draw(), drawTitle(), I()]
- "components_chart_ut": "ut()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, aa(), _computeAngle(), _computeLabelItems(), computeTickLimit(), fit()]
- "components_chart_y": "Y()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, at(), determineDataLimits(), ff(), getAllParsedValues(), getUserBounds()]
- "components_code_editor_childbefore": "childBefore()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, child(), enterChild(), nextChild(), _d(), dX()]
- "components_code_editor_flush": "flush()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, fd(), readChange(), readSelectionRange(), requestMeasure(), span()]
- "components_code_editor_lineblockat": "lineBlockAt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, aO(), computeBlockGapDeco(), getDeco(), gP(), find()]
- "components_code_editor_mappos": "mapPos()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L4 | neighbors=[code-editor.js, apply(), changes(), computeVisibleRanges(), ff(), gu()]
- "components_code_editor_match": "match()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, add(), create(), De(), result(), ret()]
- "components_code_editor_move": "move()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L9 | neighbors=[code-editor.js, atLastNode(), destroy(), enterChild(), NP(), parent()]
- "components_code_editor_peek": "peek()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, Ah(), cg(), Lk(), nextOverlapping(), chunk()]
- "components_code_editor_phrase": "phrase()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, bu(), constructor(), createListBox(), dr(), Fe()]
- "components_code_editor_pq": "PQ()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, acceptToken(), advance(), allows(), childAfter(), childBefore()]
- "components_code_editor_qt": "Qt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, b1(), $f(), _i(), ot(), pt()]
- "components_code_editor_updateselection": "updateSelection()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, measure(), readSelectionRange(), setSelection(), update(), Ci()]
- "components_code_editor_yp": "yP()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L7 | neighbors=[code-editor.js, coordsIn(), childBefore(), Ex(), ld(), ln()]
- "components_markdown_editor_he": "he()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, _e(), f(), ge(), gl(), re()]
- "components_markdown_editor_md": "md()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, An(), dr(), _i(), Ie(), it()]
- "components_markdown_editor_mr": "mr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, bf(), Ae(), Ia(), Jr(), lo()]
- "components_markdown_editor_on": "on()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Bn(), Ae(), ce(), Do(), ir()]
- "components_markdown_editor_pf": "pf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, kf(), Ae(), An(), dl(), Fn()]
- "components_markdown_editor_w": "w()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, $c(), D(), _e(), ge(), j()]
- "components_markdown_editor_yl": "yl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ad(), de(), _i(), kt(), lr()]
- "components_rich_editor_addtextnode": "addTextNode()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, addDOM(), create(), findInside(), findInText(), findWrapping()]
- "components_rich_editor_ag": "ag()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, before(), contentMatchAt(), index(), Jc(), matchType()]
- "components_rich_editor_fg": "fg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, after(), before(), canReplaceWith(), deleteRange(), index()]
- "components_rich_editor_fillbefore": "fillBefore()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, close(), closeFrontierNode(), createAndFill(), dl(), findFittable()]
- "components_rich_editor_findwrapping": "findWrapping()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, addTextNode(), eg(), findFittable(), findPlace(), computeWrapping()]
- "components_rich_editor_matchfragment": "matchFragment()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, canReplace(), canReplaceWith(), contentMatchAt(), createAndFill(), findWrapping()]
- "components_rich_editor_near": "near()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, between(), bl(), $d(), flush(), insertText()]
- "components_rich_editor_pg": "pg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, deleteRange(), after(), before(), canReplace(), delete()]
- "components_rich_editor_placenodes": "placeNodes()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, fit(), allowedMarks(), child(), closeFrontierNode(), contentMatchAt()]
- "components_rich_editor_ps": "ps()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, co(), Oc(), child(), create(), createAndFill()]
- "components_rich_editor_qs": "qs()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, au(), closest(), colCount(), from(), get()]
- "components_rich_editor_sg": "sg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, append(), compatibleContent(), copy(), create(), En()]
- "components_rich_editor_tostring": "toString()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, check(), checkContent(), constructor(), toFormattedString(), toHref()]
- "components_rich_editor_up": "up()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, bt(), Cr(), done(), Gi(), Ne()]
- "components_select_xt": "Xt()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, de(), dn(), pn(), vn(), cn()]
- "identity_module": "Liberu Identity" | kind=entity | source=modules/identity-core/README.md | neighbors=[Liberu API Access, Liberu Identity Administration (identit…, Capability: identity.authenticate, Capability: identity.recover, Contract: InvitationValidator, Contract: RegistrationPolicy]
- "installation_not_enablement": "Installation Does Not Imply Enablement" | kind=entity | source=modules/module-manager/README.md | neighbors=[Capability Boundary Integration, Enabled By Default Declaration, Liberu Localization Livewire, Liberu Localization, Liberu MyMemory Translation, Liberu Module Manager Administration]
- "localization_core_livewire_module": "Liberu Localization Livewire" | kind=entity | source=modules/localization-core-livewire/README.md | neighbors=[Adapter Over One Matching Core Package, Capability: foundation.localization.liv…, Capability Declaration, liberusoftware/composer-installer, Declared Public Boundary, Enabled By Default Declaration]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-007.json

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
