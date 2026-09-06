# Node Description Batch 35 of 212

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

- "components_code_editor_ye": "Ye()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L5 | neighbors=[code-editor.js, countColumn(), Gc(), kf(), tm(), ue()]
- "components_code_editor_yieldbuf": "yieldBuf()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L11 | neighbors=[code-editor.js, constructor(), enterChild(), parent(), sibling(), yield()]
- "components_code_editor_ys": "yS()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L10 | neighbors=[code-editor.js, forRange(), elementAtHeight(), kd(), lineAt(), yf()]
- "components_code_editor_zt": "zt()" | kind=code-symbol | source=public/js/filament/forms/components/code-editor.js:L12 | neighbors=[code-editor.js, EY(), mQ(), $T(), ws(), hasResult()]
- "components_file_upload_sl": "sl()" | kind=code-symbol | source=public/js/filament/forms/components/file-upload.js:L2 | neighbors=[file-upload.js, Cp(), Gp(), kp(), Np(), Vp()]
- "components_markdown_editor_ai": "ai()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ka(), Ic(), li(), Nc(), Ta()]
- "components_markdown_editor_al": "al()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, ne(), y(), zo(), co(), Tt()]
- "components_markdown_editor_do": "Do()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, cl(), Yt(), el(), on(), si()]
- "components_markdown_editor_fd": "fd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, Ae(), ne(), Pe(), Pt(), ye()]
- "components_markdown_editor_fi": "fi()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Ae(), ci(), Oa(), O(), vd()]
- "components_markdown_editor_gd": "gd()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, En(), rn(), se(), so(), xo()]
- "components_markdown_editor_gt": "Gt()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Fr(), ge(), R(), V(), y()]
- "components_markdown_editor_ho": "ho()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, ci(), Cn(), Zt(), ka(), lf()]
- "components_markdown_editor_ka": "ka()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, ai(), ho(), oo(), tr(), wa()]
- "components_markdown_editor_le": "Le()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, de(), H(), V(), y(), te()]
- "components_markdown_editor_m": "M()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, $c(), ge(), S(), x(), w()]
- "components_markdown_editor_nl": "nl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, An(), Ie(), se(), pd(), Tt()]
- "components_markdown_editor_nr": "nr()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L1 | neighbors=[markdown-editor.js, ht(), it(), ge(), V(), y()]
- "components_markdown_editor_ns": "ns()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L15 | neighbors=[markdown-editor.js, Ae(), ht(), Xn(), O(), vd()]
- "components_markdown_editor_qe": "qe()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, ge(), Oe(), Be(), y(), Tt()]
- "components_markdown_editor_rf": "rf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Qr(), V(), ye(), za(), Zt()]
- "components_markdown_editor_sa": "Sa()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, Ae(), ii(), oi(), ye(), Sn()]
- "components_markdown_editor_sf": "sf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, lf(), er(), ne(), vo(), Xt()]
- "components_markdown_editor_ta": "Ta()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, co(), Ae(), ai(), mr(), Zt()]
- "components_markdown_editor_tf": "tf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, de(), he(), O(), R(), tr()]
- "components_markdown_editor_tn": "tn()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Cn(), ki(), O(), mi(), vd()]
- "components_markdown_editor_u": "U()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, Oe(), te(), V(), y(), Z()]
- "components_markdown_editor_ud": "ud()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L12 | neighbors=[markdown-editor.js, sd(), _i(), Ie(), kt(), wo()]
- "components_markdown_editor_ue": "Ue()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L32 | neighbors=[markdown-editor.js, b(), ge(), S(), V(), y()]
- "components_markdown_editor_uo": "uo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, Jc(), ma(), qc(), Ln(), Yc()]
- "components_markdown_editor_ur": "Ur()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L4 | neighbors=[markdown-editor.js, R(), ge(), H(), V(), y()]
- "components_markdown_editor_vl": "vl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, io(), Ct(), it(), kt(), P()]
- "components_markdown_editor_wf": "wf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, fa(), Fn(), ro(), Vt(), wn()]
- "components_markdown_editor_wl": "wl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, Sn(), Ae(), jo(), kl(), Zt()]
- "components_markdown_editor_xf": "xf()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, vf(), Dn(), er(), hi(), Oa()]
- "components_markdown_editor_xl": "xl()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L10 | neighbors=[markdown-editor.js, kt(), lr(), ot(), rd(), yr()]
- "components_markdown_editor_xo": "xo()" | kind=code-symbol | source=public/js/filament/forms/components/markdown-editor.js:L5 | neighbors=[markdown-editor.js, gd(), pl(), vd(), Bt(), n()]
- "components_offerlist": "OfferList.php" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, d07b218 Harden real estate Livewire lis…, OfferList]
- "components_offerlist_offerlist": "OfferList" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L14 | neighbors=[OfferList.php, .acceptOffer(), .rejectOffer(), .render(), .submitOffer(), .transition()]
- "components_rich_editor_addinner": "addInner()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, add(), forEach(), Nu(), Ru(), valid()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-034.json

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
