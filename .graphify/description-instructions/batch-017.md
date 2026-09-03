# Node Description Batch 18 of 212

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

- "components_rich_editor_createchecked": "createChecked()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L2 | neighbors=[rich-editor.js, checkContent(), computeAttrs(), from(), setFrom(), is()]
- "components_rich_editor_dispatchtransaction": "dispatchTransaction()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, createView(), applyTransaction(), emit(), eq(), forEach()]
- "components_rich_editor_dw": "dw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addMaps(), addTransform(), getBookmark(), getMeta(), oa()]
- "components_rich_editor_emit": "emit()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, constructor(), createDoc(), destroy(), dispatchTransaction(), forEach()]
- "components_rich_editor_ensuremarks": "ensureMarks()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, addStoredMark(), marks(), sameSet(), setStoredMarks(), jy()]
- "components_rich_editor_findcell": "findCell()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, colSelection(), content(), ct(), Hs(), nextCell()]
- "components_rich_editor_findgapcursorfrom": "findGapCursorFrom()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, child(), index(), indexAfter(), isSelectable(), node()]
- "components_rich_editor_fw": "fw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, addTransform(), get(), getBookmark(), popEvent(), resolve()]
- "components_rich_editor_gy": "gy()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, child(), create(), eq(), from(), hasRequiredAttrs()]
- "components_rich_editor_hg": "hg()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, cg(), focus(), from(), iu(), ou()]
- "components_rich_editor_insert": "insert()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, AS(), replaceWith(), ps(), rm(), vp()]
- "components_rich_editor_invert": "invert()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, addTransform(), appendMappingInverted(), addToSet(), isInSet(), nodeAt()]
- "components_rich_editor_lk": "lk()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L138 | neighbors=[rich-editor.js, get(), kp(), split(), Ve(), We()]
- "components_rich_editor_marksacross": "marksAcross()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, insertText(), jy(), index(), isInSet(), maybeChild()]
- "components_rich_editor_move": "move()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, bt(), Cr(), create(), done(), eq()]
- "components_rich_editor_nearestdesc": "nearestDesc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L6 | neighbors=[rich-editor.js, constructor(), ignoreSelectionChange(), getDesc(), registerMutation(), vg()]
- "components_rich_editor_qc": "qc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, ag(), append(), contentMatchAt(), copy(), fillBefore()]
- "components_rich_editor_queryselector": "querySelector()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, addElementByRule(), node(), of(), py(), querySelectorAll()]
- "components_rich_editor_queryselectorall": "querySelectorAll()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, handlePaste(), my(), $nodes(), py(), qs()]
- "components_rich_editor_removefromset": "removeFromSet()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, apply(), gy(), marks(), marksAcross(), eq()]
- "components_rich_editor_resolvedepth": "resolveDepth()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, after(), before(), end(), index(), indexAfter()]
- "components_rich_editor_shareddepth": "sharedDepth()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, apply(), eb(), jy(), pg(), end()]
- "components_rich_editor_sn": "Sn()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L147 | neighbors=[rich-editor.js, Cs(), Ec(), kp(), $S(), before()]
- "components_rich_editor_sp": "Sp()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L146 | neighbors=[rich-editor.js, at(), fp(), hp(), Ne(), Ve()]
- "components_rich_editor_tc": "Tc()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, removeBetween(), append(), child(), copy(), cut()]
- "components_rich_editor_tr": "tr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, co(), Oc(), child(), Ee(), gn()]
- "components_rich_editor_tt": "tt()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, Bo(), Gl(), ta(), Ts(), apply()]
- "components_rich_editor_wr": "wr()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, pasteHTML(), pasteText(), replaceSelection(), replaceSelectionWith(), scrollIntoView()]
- "components_select_getvisibleoptions": "getVisibleOptions()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, closeDropdown(), focusNextOption(), focusPreviousOption(), handleDropdownKeydown(), handleSelectButtonKeydown()]
- "components_select_gi": "gi()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, Et(), fn(), it(), lt(), pn()]
- "components_select_gn": "gn()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, ae(), At(), it(), nt(), se()]
- "components_select_k": "k()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, $i(), b(), _n(), pe(), Rn()]
- "components_select_selectoption": "selectOption()" | kind=code-symbol | source=public/js/filament/forms/components/select.js:L1 | neighbors=[select.js, addSingleBadge(), closeDropdown(), deferPositionDropdown(), hideMaxItemsMessage(), maintainFocusInMultipleMode()]
- "components_slider_r": "R()" | kind=code-symbol | source=public/js/filament/forms/components/slider.js:L1 | neighbors=[slider.js, _e(), Fe(), He(), it(), Re()]
- "concept_idempotency_key_header": "x-liberu-idempotency-header (Idempotency-Key)" | kind=entity | source=modules/real-estate-parties-api/openapi/v1/real-estate-parties.yaml | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, OpenAPI v1: Real Estate Parties API, OpenAPI v1: Real Estate Portals and Rep…, OpenAPI v1: Real Estate Properties API, Offer qualification, negotiation, proof…, Rightmove Sync API v1 OpenAPI Spec]
- "concept_theme_manager": "ThemeManager service" | kind=entity | source=docs/THEME_QUICK_REFERENCE.md | neighbors=[Module manager (provider lifecycle auth…, Theme helper functions, Theme parent inheritance chain, theme.json manifest, Theme selection precedence, ThemeServiceProvider]
- "concept_unprefixed_composer_naming": "Unprefixed Composer Name vs module- GitHub Repo" | kind=entity | source=modules/real-estate-property-management/README.md | neighbors=[Real Estate Property Management Module, Real Estate Valuations API Adapter, Real Estate Valuations Filament Adapter, Real Estate Valuations Livewire Adapter, Real Estate Valuations Module, Real Estate Viewings API Adapter]
- "controllers_offercontroller_offercontroller": "OfferController" | kind=code-symbol | source=modules/real-estate-offers-api/src/Http/Controllers/OfferController.php:L20 | neighbors=[OfferController.php, .destroy(), .index(), .proof(), .show(), .store()]
- "doc_agents_md": "AGENTS.md" | kind=entity | source=AGENTS.md | neighbors=[Laravel Boost guidelines, lerd local PHP development environment, Driving optimisation from real traffic, lerd git worktree subdomains, lerd twelve grouped MCP tools, GitHub Copilot instructions]
- "filament_adminpanelprovider": "AdminPanelProvider.php" | kind=code-symbol | source=app/Providers/Filament/AdminPanelProvider.php:L1 | neighbors=[675053f Add modules system, security ha…, 75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, aca82ae Merge branch 'main' of github.c…, b16f206 Update dependencies including t…]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-017.json

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
