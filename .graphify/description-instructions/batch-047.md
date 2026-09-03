# Node Description Batch 48 of 212

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

- "components_markdown_editor_ao": "ao()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ae(), Zt(), co(), di()]
- "components_markdown_editor_as": "as()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L17 | neighbors=[markdown-editor.js, de(), mo(), Vr(), vd()]
- "components_markdown_editor_be": "Be()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, ke(), Oe(), qe(), R()]
- "components_markdown_editor_bo": "bo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ne(), yo(), co(), Qr()]
- "components_markdown_editor_cf": "cf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, j(), Jc(), si(), co()]
- "components_markdown_editor_ct": "Ct()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, R(), y(), ot(), vl()]
- "components_markdown_editor_ef": "ef()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, G(), ll(), y(), fa()]
- "components_markdown_editor_ei": "ei()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ca(), de(), V(), y()]
- "components_markdown_editor_fe": "fe()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, Me(), y(), Oe(), te()]
- "components_markdown_editor_ia": "Ia()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ff(), V(), y(), mr()]
- "components_markdown_editor_ir": "ir()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, io(), V(), vf(), on()]
- "components_markdown_editor_jc": "Jc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, cf(), Aa(), qa(), uo()]
- "components_markdown_editor_jl": "jl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L11 | neighbors=[markdown-editor.js, dd(), lr(), ot(), kn()]
- "components_markdown_editor_kl": "kl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ki(), ht(), Rt(), wl()]
- "components_markdown_editor_li": "li()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ai(), wa(), pf(), so()]
- "components_markdown_editor_mf": "Mf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, fl(), ne(), xr(), ye()]
- "components_markdown_editor_ni": "ni()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ac(), Dc(), io(), Sn()]
- "components_markdown_editor_nn": "Nn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ce(), Fn(), pd(), qo()]
- "components_markdown_editor_no": "no()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ga(), ye(), ro(), va()]
- "components_markdown_editor_oa": "Oa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, fi(), Qr(), tr(), xf()]
- "components_markdown_editor_p": "P()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, gi(), mo(), vd(), vl()]
- "components_markdown_editor_pr": "pr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ca(), j(), V(), y()]
- "components_markdown_editor_qc": "qc()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, An(), Aa(), uo(), ye()]
- "components_markdown_editor_ql": "ql()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ar(), je(), n(), ne()]
- "components_markdown_editor_ra": "Ra()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, En(), j(), ja(), vd()]
- "components_markdown_editor_sl": "sl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, wi(), Yt(), ul(), zf()]
- "components_markdown_editor_tl": "tl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, rn(), Ae(), je(), ne()]
- "components_markdown_editor_ua": "ua()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Pn(), Ha(), T(), vd()]
- "components_markdown_editor_ui": "ui()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, _a(), ci(), df(), gi()]
- "components_markdown_editor_vt": "Vt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, da(), ga(), y(), wf()]
- "components_markdown_editor_wi": "wi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, go(), on(), sl(), ne()]
- "components_markdown_editor_wt": "Wt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, vd(), Ie(), ki(), V()]
- "components_markdown_editor_xd": "xd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L19 | neighbors=[markdown-editor.js, mi(), ce(), ne(), O()]
- "components_markdown_editor_xi": "xi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ff(), ml(), si(), ce()]
- "components_markdown_editor_yn": "yn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, lr(), mr(), yl(), V()]
- "components_markdown_editor_zo": "zo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, al(), ll(), vd(), ht()]
- "components_matchprofilelist": "MatchProfileList.php" | kind=code-symbol | source=modules/real-estate-matching-livewire/src/Components/MatchProfileList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, d07b218 Harden real estate Livewire lis…, MatchProfileList]
- "components_mediadocumentlist": "MediaDocumentList.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/src/Components/MediaDocumentList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, d07b218 Harden real estate Livewire lis…, MediaDocumentList]
- "components_propertylist": "PropertyList.php" | kind=code-symbol | source=modules/real-estate-properties-livewire/src/Components/PropertyList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3f6a64e Route property adapters through…, 75d6371 Add real estate properties modu…, d07b218 Harden real estate Livewire lis…, PropertyList]
- "components_rich_editor_ad": "Ad()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, mt(), nl(), someProp(), scrollToSelection()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-047.json

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
