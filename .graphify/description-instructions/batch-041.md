# Node Description Batch 42 of 212

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
LANGUAGE: each entry has a `lang=` marker giving the language of its source.
Write that entry's description in EXACTLY that language. Do not translate to
a single common language — match each node's source language individually.
No marketing language.
Respond ONLY with a JSON object mapping each node id (as a string) to its
one-sentence description — no prose, no markdown fences.

- "columns_select_fi": "fi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, At(), ct(), Tt(), se()] | lang=en
- "columns_select_focusnextoption": "focusNextOption()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getVisibleOptions(), scrollOptionIntoView(), handleDropdownKeydown(), handleSelectButtonKeydown()] | lang=en
- "columns_select_focuspreviousoption": "focusPreviousOption()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, getVisibleOptions(), scrollOptionIntoView(), handleDropdownKeydown(), handleSelectButtonKeydown()] | lang=en
- "columns_select_handledropdownkeydown": "handleDropdownKeydown()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, closeDropdown(), focusNextOption(), focusPreviousOption(), getVisibleOptions()] | lang=en
- "columns_select_jn": "jn()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, E(), gt(), S(), ve()] | lang=en
- "columns_select_mi": "mi()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ct(), it(), lt(), xi()] | lang=en
- "columns_select_n": "_n()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, F(), $i(), je(), Rn()] | lang=en
- "columns_select_re": "re()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ci(), ct(), di(), Et()] | lang=en
- "columns_select_se": "se()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, gn(), fi(), Tt(), U()] | lang=en
- "columns_select_shownoresultsmessage": "showNoResultsMessage()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, filterOptions(), renderOptions(), deferPositionDropdown(), hideLoadingState()] | lang=en
- "columns_select_t": "$t()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, dn(), mn(), ui(), xi()] | lang=en
- "columns_select_te": "Te()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ni(), Le(), ut(), Ze()] | lang=en
- "columns_select_ti": "ti()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), F(), Ft(), oe()] | lang=en
- "columns_select_ut": "ut()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, fn(), ni(), sn(), Te()] | lang=en
- "columns_select_y": "Y()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, A(), ht(), Q(), x()] | lang=en
- "columns_select_zt": "zt()" | kind=code-symbol | source=public/js/filament/tables/components/columns/select.js:L1 | neighbors=[select.js, ei(), ni(), sn(), Ze()] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@3f517967228df7a51d90bc2ee99b8fa621ea281e": "3f51796 Merge pull request #1251 from liberu-real-estate/copilot/fix-phpunit-te…" | kind=Commit | source=git | neighbors=[main, 3da31ff Merge pull request #1252 from l…, 9672d83 Initial plan, de6d29d Merge pull request #1250 from l…, fd5f54a Add default values to GeneralSe…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@482a09370b9f269180b8f13cf5b83e77b5748036": "482a093 Implement core real estate product scope" | kind=Commit | source=git | neighbors=[main, 0b4ddca Expand real estate agency API s…, User.php, api.php, f630dc7 Fix security audit findings] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@6ea3c29a6bafbdbcf12fd34561d7939162196199": "6ea3c29 Add granular agency permissions and API tokens" | kind=Commit | source=git | neighbors=[main, bcedb3e Add unified property portal int…, User.php, api.php, 863be5b Add agency automation and notif…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@96fc310e30849152870656ba5bdfc6c93cdbba03": "96fc310 Add staff and department management APIs" | kind=Commit | source=git | neighbors=[8dbc079 Add property media management A…, main, 1dcc78a Add operational service integra…, User.php, api.php] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@afd0be1390d812950bd15b743be686b29a93d393": "afd0be1 Merge pull request #1254 from liberu-real-estate/copilot/fix-unique-con…" | kind=Commit | source=git | neighbors=[0bf65c2 Fix 4 test errors and 2 test fa…, a78602e Merge pull request #1253 from l…, main, 8210fc5 Initial plan, bdf23d6 Merge pull request #1255 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@d97e09ce7f0b2f94a8cd8b0b716cf1c626be6031": "d97e09c Update dependencies" | kind=Commit | source=git | neighbors=[main, 83ae8f9 Initial plan, a601264 Update workflows, da0ba47 Merge pull request #1256 from l…, f79fa72 Merge branch 'main' of github.c…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e8a6e6d205d3bd2181becaae963d8c68396996a7": "e8a6e6d fix(auth): render the socialstream buttons instead of throwing" | kind=Commit | source=git | neighbors=[cab7425 fix(valuation): scope the repor…, login.blade.php, register.blade.php, main, 7a789a0 feat(auth): put the sign-in jou…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f4845d1d44f6d1a5b732d411a412fdb1bdeb0785": "f4845d1 Complete real estate property mutation boundaries" | kind=Commit | source=git | neighbors=[2affb83 Lock published module package n…, DeleteProperty.php, UpdateProperty.php, main, 3f6a64e Route property adapters through…] | lang=en
- "components_chart_after": "after()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromDateTimes(), fromDurationLike(), plus(), fromISO()] | lang=en
- "components_chart_afterupdate": "afterUpdate()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, adjustHitBoxes(), buildLabels(), W(), _update()] | lang=en
- "components_chart_at": "at()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Y(), Bf(), getMinMax(), getUserBounds()] | lang=en
- "components_chart_before": "before()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, fromDateTimes(), fromDurationLike(), minus(), fromISO()] | lang=en
- "components_chart_bindevents": "bindEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, bindResponsiveEvents(), bindUserEvents(), _checkEventBindings(), initialize()] | lang=en
- "components_chart_bl": "bl()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, ac(), Qr(), fromObject(), set()] | lang=en
- "components_chart_bs": "bs()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, create(), get(), route(), Tn()] | lang=en
- "components_chart_circumference": "_circumference()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, calculateCircumference(), _getCircumference(), getDataVisibility(), updateElements()] | lang=en
- "components_chart_computeangle": "_computeAngle()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getDataVisibility(), resolveDataElementOptions(), ut(), updateElements()] | lang=en
- "components_chart_destroydatasetmeta": "_destroyDatasetMeta()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), _destroy(), stop(), _updateMetasets()] | lang=en
- "components_chart_dh": "dh()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Fo(), get(), Un(), E()] | lang=en
- "components_chart_drawborder": "drawBorder()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), getContext(), Ht(), isHorizontal()] | lang=en
- "components_chart_drawdatasets": "_drawDatasets()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, draw(), _drawDataset(), getSortedVisibleDatasetMetas(), notifyPlugins()] | lang=en
- "components_chart_drawfooter": "drawFooter()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, draw(), ne(), textAlign(), X()] | lang=en
- "components_chart_dt": "Dt()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, cf(), _getLegendItemAt(), inRange(), rr()] | lang=en
- "components_chart_equals": "equals()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, constructor(), valueOf(), fromFormatParser(), setZone()] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-041.json

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
