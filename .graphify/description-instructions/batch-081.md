# Node Description Batch 82 of 212

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

- "application_schedulevaluation": "ScheduleValuation.php" | kind=code-symbol | source=modules/real-estate-valuations/src/Application/ScheduleValuation.php:L1 | neighbors=[ScheduleValuation, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_synconthemarketlisting": "SyncOnTheMarketListing.php" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/SyncOnTheMarketListing.php:L1 | neighbors=[SyncOnTheMarketListing, bd4b1dc Add independent property portal…, e9bffaf Apply complete module formatting]
- "application_synconthemarketlisting_synconthemarketlisting": "SyncOnTheMarketListing" | kind=code-symbol | source=modules/real-estate-onthemarket/src/Application/SyncOnTheMarketListing.php:L10 | neighbors=[SyncOnTheMarketListing.php, .__construct(), .handle()]
- "application_syncrightmovelisting": "SyncRightmoveListing.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/SyncRightmoveListing.php:L1 | neighbors=[SyncRightmoveListing, bd4b1dc Add independent property portal…, e9bffaf Apply complete module formatting]
- "application_syncrightmovelisting_syncrightmovelisting": "SyncRightmoveListing" | kind=code-symbol | source=modules/real-estate-rightmove/src/Application/SyncRightmoveListing.php:L10 | neighbors=[SyncRightmoveListing.php, .__construct(), .handle()]
- "application_synczooplalisting": "SyncZooplaListing.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/SyncZooplaListing.php:L1 | neighbors=[SyncZooplaListing, bd4b1dc Add independent property portal…, e9bffaf Apply complete module formatting]
- "application_synczooplalisting_synczooplalisting": "SyncZooplaListing" | kind=code-symbol | source=modules/real-estate-zoopla/src/Application/SyncZooplaListing.php:L10 | neighbors=[SyncZooplaListing.php, .__construct(), .handle()]
- "application_transitionletting": "TransitionLetting.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/TransitionLetting.php:L1 | neighbors=[TransitionLetting, 3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…]
- "application_transitionmanagementrecord": "TransitionManagementRecord.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/TransitionManagementRecord.php:L1 | neighbors=[TransitionManagementRecord, 3735f58 Complete letting and property m…, e8b93fc Implement remaining real estate…]
- "application_transitionoffer": "TransitionOffer.php" | kind=code-symbol | source=modules/real-estate-offers/src/Application/TransitionOffer.php:L1 | neighbors=[TransitionOffer, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_updateagency": "UpdateAgency.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateAgency.php:L1 | neighbors=[UpdateAgency, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_updateinstruction": "UpdateInstruction.php" | kind=code-symbol | source=modules/real-estate-instructions/src/Application/UpdateInstruction.php:L1 | neighbors=[UpdateInstruction, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…]
- "application_updateletting": "UpdateLetting.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLetting.php:L1 | neighbors=[UpdateLetting, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_updateletting_updateletting": "UpdateLetting" | kind=code-symbol | source=modules/real-estate-lettings/src/Application/UpdateLetting.php:L12 | neighbors=[UpdateLetting.php, .__construct(), .handle()]
- "application_updatelisting": "UpdateListing.php" | kind=code-symbol | source=modules/real-estate-listings/src/Application/UpdateListing.php:L1 | neighbors=[UpdateListing, 6385f28 Add sales progression modules a…, b9f8ca5 Add real estate listings module…]
- "application_updatemanagementrecord": "UpdateManagementRecord.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementRecord.php:L1 | neighbors=[UpdateManagementRecord, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "application_updatemanagementrecord_updatemanagementrecord": "UpdateManagementRecord" | kind=code-symbol | source=modules/real-estate-property-management/src/Application/UpdateManagementRecord.php:L12 | neighbors=[UpdateManagementRecord.php, .__construct(), .handle()]
- "application_updatematchprofile": "UpdateMatchProfile.php" | kind=code-symbol | source=modules/real-estate-matching/src/Application/UpdateMatchProfile.php:L1 | neighbors=[UpdateMatchProfile, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…]
- "application_updatemediadocument": "UpdateMediaDocument.php" | kind=code-symbol | source=modules/real-estate-media-and-documents/src/Application/UpdateMediaDocument.php:L1 | neighbors=[UpdateMediaDocument, 0910e2b Add real estate media and docum…, 6385f28 Add sales progression modules a…]
- "application_updateoffer": "UpdateOffer.php" | kind=code-symbol | source=modules/real-estate-offers/src/Application/UpdateOffer.php:L1 | neighbors=[UpdateOffer, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…]
- "application_updateterritory": "UpdateTerritory.php" | kind=code-symbol | source=modules/real-estate-core/src/Application/UpdateTerritory.php:L1 | neighbors=[UpdateTerritory, 2f18670 Conform real estate modules and…, 8cf045c Implement real estate module co…]
- "capability_foundation_theme_support": "Optional capability: foundation.theme-support" | kind=entity | source=themes/default/README.md | neighbors=[clear-signal theme (Clear Signal), dark theme (Liberu Dark), default theme (Liberu Default)]
- "columns_checkbox": "checkbox.js" | kind=code-symbol | source=public/js/filament/tables/components/columns/checkbox.js:L1 | neighbors=[a(), 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "columns_select_a": "A()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, nt(), Y()]
- "columns_select_cn": "cn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, U(), Xt()]
- "columns_select_constructor": "constructor()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, render(), setUpEventListeners()]
- "columns_select_createbadgeelement": "createBadgeElement()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, addSingleBadge(), createRemoveButton()]
- "columns_select_disable": "disable()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, applyDisabledState(), closeDropdown()]
- "columns_select_e": "E()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, jn(), v()]
- "columns_select_en": "en()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, On(), ii()]
- "columns_select_getlabelforsingleselection": "getLabelForSingleSelection()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getSelectedOptionLabel(), updateSelectedDisplay()]
- "columns_select_getlabelsformultipleselection": "getLabelsForMultipleSelection()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getSelectedOptionLabels(), updateSelectedDisplay()]
- "columns_select_getselectedoptionlabel": "getSelectedOptionLabel()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, addSingleBadge(), getLabelForSingleSelection()]
- "columns_select_gt": "gt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, jn(), v()]
- "columns_select_handlesearch": "handleSearch()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, filterOptions(), renderOptions()]
- "columns_select_hi": "hi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, Dt(), xi()]
- "columns_select_ie": "Ie()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ni(), Ze()]
- "columns_select_ii": "ii()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, en(), oi()]
- "columns_select_le": "Le()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), Te()]
- "columns_select_maintainfocusinmultiplemode": "maintainFocusInMultipleMode()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getVisibleOptions(), selectOption()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-081.json

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
