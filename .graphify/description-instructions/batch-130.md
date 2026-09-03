# Node Description Batch 131 of 212

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

- "components_mediadocumentlist_mediadocumentlist": "MediaDocumentList" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/src/Components/MediaDocumentList.php:L12 | neighbors=[MediaDocumentList.php, .render()]
- "components_offerlist_offerlist_acceptoffer": ".acceptOffer()" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L24 | neighbors=[OfferList, .transition()]
- "components_offerlist_offerlist_rejectoffer": ".rejectOffer()" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L29 | neighbors=[OfferList, .transition()]
- "components_offerlist_offerlist_submitoffer": ".submitOffer()" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/Components/OfferList.php:L19 | neighbors=[OfferList, .transition()]
- "components_onthemarketsynclist_onthemarketsynclist": "OnTheMarketSyncList" | kind=code-symbol | source=modules/real-estate-onthemarket-livewire/src/Components/OnTheMarketSyncList.php:L11 | neighbors=[OnTheMarketSyncList.php, .render()]
- "components_partylist_partylist": "PartyList" | kind=code-symbol | source=modules/real-estate-parties-livewire/src/Components/PartyList.php:L12 | neighbors=[PartyList.php, .render()]
- "components_portalreportlist_portalreportlist": "PortalReportList" | kind=code-symbol | source=modules/real-estate-portals-reporting-livewire/src/Components/PortalReportList.php:L11 | neighbors=[PortalReportList.php, .render()]
- "components_propertylist_propertylist": "PropertyList" | kind=code-symbol | source=modules/real-estate-properties-livewire/src/Components/PropertyList.php:L12 | neighbors=[PropertyList.php, .render()]
- "components_rich_editor_0": "_0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L32 | neighbors=[rich-editor.js, nodesBetween()]
- "components_rich_editor_addattributes": "addAttributes()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L110 | neighbors=[rich-editor.js, parent()]
- "components_rich_editor_addextensions": "addExtensions()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L136 | neighbors=[rich-editor.js, configure()]
- "components_rich_editor_addglobalattributes": "addGlobalAttributes()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L34 | neighbors=[rich-editor.js, dn()]
- "components_rich_editor_addnodemark": "addNodeMark()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, step()]
- "components_rich_editor_ak": "ak()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L142 | neighbors=[rich-editor.js, Ne()]
- "components_rich_editor_applyaspectratio": "applyAspectRatio()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, calculateNewDimensions()]
- "components_rich_editor_applyconstraints": "applyConstraints()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, handleResize()]
- "components_rich_editor_applyinitialsize": "applyInitialSize()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_b0": "B0()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L20 | neighbors=[rich-editor.js, join()]
- "components_rich_editor_b1": "b1()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L161 | neighbors=[rich-editor.js, virtualElement()]
- "components_rich_editor_bd": "Bd()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L7 | neighbors=[rich-editor.js, wt()]
- "components_rich_editor_br": "Br()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L14 | neighbors=[rich-editor.js, aa()]
- "components_rich_editor_bw": "bw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, ww()]
- "components_rich_editor_cf": "cf()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L20 | neighbors=[rich-editor.js, replace()]
- "components_rich_editor_changedrange": "changedRange()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, forEach()]
- "components_rich_editor_children": "children()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, forEach()]
- "components_rich_editor_clear": "clear()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, removeHandles()]
- "components_rich_editor_clearincompatible": "clearIncompatible()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L5 | neighbors=[rich-editor.js, Ts()]
- "components_rich_editor_commands": "commands()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, buildProps()]
- "components_rich_editor_compatible": "compatible()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, compatibleContent()]
- "components_rich_editor_createcan": "createCan()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L10 | neighbors=[rich-editor.js, buildProps()]
- "components_rich_editor_createcommandmanager": "createCommandManager()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_createcontainer": "createContainer()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_createnodeviews": "createNodeViews()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, setProps()]
- "components_rich_editor_createschema": "createSchema()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L104 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_createwrapper": "createWrapper()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, constructor()]
- "components_rich_editor_currentpos": "currentPos()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L4 | neighbors=[rich-editor.js, closeExtra()]
- "components_rich_editor_cw": "Cw()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L106 | neighbors=[rich-editor.js, aa()]
- "components_rich_editor_cx": "Cx()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L135 | neighbors=[rich-editor.js, addProseMirrorPlugins()]
- "components_rich_editor_defaultrender": "defaultRender()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L132 | neighbors=[rich-editor.js, render()]
- "components_rich_editor_defaulttype": "defaultType()" | kind=code-symbol | source=public/js/filament/forms/components/rich-editor.js:L1 | neighbors=[rich-editor.js, hasRequiredAttrs()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-130.json

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
