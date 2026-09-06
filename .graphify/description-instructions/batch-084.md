# Node Description Batch 85 of 212

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

- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@daadd437e8a8941c5c7b5638c2f45a482a7dce82": "daadd43 Update test workflow for coverage" | kind=Commit | source=git | neighbors=[8a81cb0 Update dependencies including t…, main, 4b07ee8 Update main workflow Docker wit…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@dc5fd78e9f54e218624b5a3245addcd2850cddb3": "dc5fd78 fix(currency): one currency on screen at a time" | kind=Commit | source=git | neighbors=[8c6e464 fix: apply two rounds of review…, main, dca714d feat(listings): show what a pro…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@dc9f4b0d0c34c39d44001d907e3aab4efb48c683": "dc9f4b0 fix(design): the map only followed the filters on first load" | kind=Commit | source=git | neighbors=[1902f33 feat(design): search, applied f…, main, adf5fe2 feat(design): comparison table …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@dca714d8fa0be1bd38cdc7543e2bec39de7725a5": "dca714d feat(listings): show what a property costs to hold" | kind=Commit | source=git | neighbors=[dc5fd78 fix(currency): one currency on …, main, 1e71b40 fix: apply review findings acro…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@dcf8f88654adb781b1c68ac4ceb0cea5b7a29d2f": "dcf8f88 Pin API access idempotency source" | kind=Commit | source=git | neighbors=[main, c1e13bf Refresh Composer lock content h…, f95c7dd Pin published real estate modul…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e364fb33b0e0fd00541d18a7d0d772aa9517f920": "e364fb3 fix(design): remove a CDN regression, fix AA contrast, guard the scanne…" | kind=Commit | source=git | neighbors=[2acd19d feat(design): styleguide route …, main, 90298bd feat(design): property card and…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@e6bd4bd952520106e54c0448c642dc03863ff1c8": "e6bd4bd fix(booking): a viewing at 09:00 no longer closes the whole diary" | kind=Commit | source=git | neighbors=[main, c47d7e1 fix(listings): let a property b…, eff8257 fix(nav): open the menu dropdow…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@ee449c8d008cd3076ee91d7f171000d87eac7b29": "ee449c8 feat(design): content, news and legal pages" | kind=Commit | source=git | neighbors=[d85600d fix(design): complete the prima…, main, 5610609 fix(design): the tenancy POST f…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@eff825791868567dc06932868a53aeec67555785": "eff8257 fix(nav): open the menu dropdowns, which never had" | kind=Commit | source=git | neighbors=[7f9b2bf fix(booking): stop offering a d…, main, e6bd4bd fix(booking): a viewing at 09:0…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f0209b99ab399ee7c78bc1b7f8a7227cd9cd7219": "f0209b9 fix(design): bind dark: to the theme stamp, drop unconsumed component C…" | kind=Commit | source=git | neighbors=[d1188ad feat(design): Survey Sheet foun…, main, 2acd19d feat(design): styleguide route …] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f6d9c6823514c6398af2c5d2cb4ca2ad8e5e2098": "f6d9c68 Expand agency automation actions" | kind=Commit | source=git | neighbors=[719b3c1 Complete applicant property mat…, main, 81d1600 Add CRM document access controls] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f86f80a8cb91244a200b783b17f8550244c74ac5": "f86f80a Fix docker build" | kind=Commit | source=git | neighbors=[506ccda Fix test workflow, main, 052e63b Update dependencies] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f91ec3ae5a074272ddb06719170f35d0e9323b14": "f91ec3a Complete valuation workflow API" | kind=Commit | source=git | neighbors=[a579db4 Add contact relationship manage…, main, 748a88b Add multichannel notification d…] | lang=pt
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@f95c7dd76c0f552dc1e9a7592bd81bde0fee45a2": "f95c7dd Pin published real estate module sources" | kind=Commit | source=git | neighbors=[a2736f9 Merge main into real estate con…, main, dcf8f88 Pin API access idempotency sour…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@fc92cc85eadf6692601dd31844e72bceb0d4cd69": "fc92cc8 Initial plan" | kind=Commit | source=git | neighbors=[de6d29d Merge pull request #1250 from l…, main, 6abeb57 Fix phpunit test failures: remo…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@fd5f54a3a030273a3397226a812a138f269f1df0": "fd5f54a Add default values to GeneralSettings to prevent 500 errors in tests wi…" | kind=Commit | source=git | neighbors=[6abeb57 Fix phpunit test failures: remo…, main, 3f51796 Merge pull request #1251 from l…] | lang=en
- "commit:repo:github.com/liberu-real-estate/real-estate-laravel@fdd4bc0aceadf36d3ddcebe22d1b01e2834aa592": "fdd4bc0 Fix docker main.yml" | kind=Commit | source=git | neighbors=[77c8490 Update dependencies, main, 1555721 Fix docker main.yml] | lang=en
- "component_repos_source_of_truth": "Component repositories are the source of truth" | kind=entity | source=scripts/README.md | neighbors=[scripts/fleet, publish-components (removed), Do not edit installed files under theme…] | lang=en
- "components_chart_a": "$a()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Mu(), _update()] | lang=en
- "components_chart_aa": "aa()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ut(), cd()] | lang=en
- "components_chart_ac": "ac()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, bl(), yl()] | lang=en
- "components_chart_acquirecontext": "acquireContext()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getContext(), constructor()] | lang=en
- "components_chart_active": "active()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _createAnimations(), Zh()] | lang=en
- "components_chart_ad": "ad()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Xa(), xr()] | lang=en
- "components_chart_addbox": "addBox()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, sf(), start()] | lang=en
- "components_chart_af": "af()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, getMatchingVisibleMetas(), of()] | lang=en
- "components_chart_afterautoskip": "afterAutoSkip()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, initOffsets(), _update()] | lang=en
- "components_chart_afterbuildticks": "afterBuildTicks()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()] | lang=en
- "components_chart_aftercalculatelabelrotation": "afterCalculateLabelRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _update()] | lang=en
- "components_chart_afterdatalimits": "afterDataLimits()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()] | lang=en
- "components_chart_afterfit": "afterFit()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _update()] | lang=en
- "components_chart_aftersetdimensions": "afterSetDimensions()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _update()] | lang=en
- "components_chart_afterticktolabelconversion": "afterTickToLabelConversion()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _convertTicksToLabels()] | lang=en
- "components_chart_ag": "ag()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L3 | neighbors=[chart.js, get(), offset()] | lang=en
- "components_chart_ah": "ah()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, ye(), se()] | lang=en
- "components_chart_ao": "Ao()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, I(), X()] | lang=en
- "components_chart_au": "au()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, removeEventListener(), _calculateBarIndexPixels()] | lang=en
- "components_chart_be": "Be()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, Si(), color()] | lang=en
- "components_chart_beforebuildticks": "beforeBuildTicks()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, _callHooks(), _update()] | lang=en
- "components_chart_beforecalculatelabelrotation": "beforeCalculateLabelRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/chart.js:L1 | neighbors=[chart.js, W(), _update()] | lang=en

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-084.json

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
