# Node Description Batch 79 of 212

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

- "stat_chart_sl": "sl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, el(), nl(), ol()]
- "stat_chart_start": "start()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, render(), get(), _refresh()]
- "stat_chart_ta": "ta()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Ls(), add(), getRange()]
- "stat_chart_te": "Te()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, mn(), Ns(), vi()]
- "stat_chart_tl": "tl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, qr(), hi(), interpolate()]
- "stat_chart_tn": "tn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateElements(), parse(), wa()]
- "stat_chart_tr": "tr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), L(), Le()]
- "stat_chart_ts": "ts()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, fo(), go(), Ls()]
- "stat_chart_ui": "Ui()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, path(), pathSegment(), wr()]
- "stat_chart_unbindevents": "unbindEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _checkEventBindings(), _destroy(), W()]
- "stat_chart_updatecontrolpoints": "updateControlPoints()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, beforeDraw(), draw(), js()]
- "stat_chart_updateelement": "updateElement()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _update(), _resolveAnimations(), updateElements()]
- "stat_chart_updatelayout": "_updateLayout()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _update(), notifyPlugins(), W()]
- "stat_chart_updatemetasets": "_updateMetasets()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), _destroyDatasetMeta(), xn()]
- "stat_chart_ur": "ur()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawTitle(), S(), T()]
- "stat_chart_va": "va()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _update(), ne(), nn()]
- "stat_chart_vn": "vn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, register(), unregister(), W()]
- "stat_chart_xe": "Xe()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, jr(), Pn(), sn()]
- "stat_chart_xn": "xn()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _update(), _updateMetasets(), P()]
- "stat_chart_xo": "Xo()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), Mt(), qo()]
- "stat_chart_xt": "Xt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, fo(), _o(), qt()]
- "stat_chart_y": "y()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, wi(), pt(), sn()]
- "stat_chart_yt": "yt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, da(), pt(), S()]
- "stat_chart_za": "za()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ba(), fi(), Re()]
- "stat_chart_zs": "zs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, kl(), T(), xi()]
- "support_configuredregistrationpolicy_configuredregistrationpolicy": "ConfiguredRegistrationPolicy" | kind=code-symbol | source=modules/identity-core/src/Support/ConfiguredRegistrationPolicy.php:L7 | neighbors=[ConfiguredRegistrationPolicy.php, .__construct(), .permitsSelfRegistration(), .requiresInvitation()]
- "support_destinationregistry_destinationregistry": "DestinationRegistry" | kind=code-symbol | source=modules/analytics-core/src/Support/DestinationRegistry.php:L9 | neighbors=[DestinationRegistry.php, .all(), .get(), .register()]
- "support_googledestination_googledestination": "GoogleDestination" | kind=code-symbol | source=modules/analytics-google/src/Support/GoogleDestination.php:L9 | neighbors=[GoogleDestination.php, .__construct(), .deliver(), .name()]
- "support_integrationregistry_integrationregistry": "IntegrationRegistry" | kind=code-symbol | source=modules/integrations/src/Support/IntegrationRegistry.php:L8 | neighbors=[IntegrationRegistry.php, .all(), .get(), .register()]
- "support_metacustomernormalizer_metacustomernormalizer": "MetaCustomerNormalizer" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaCustomerNormalizer.php:L5 | neighbors=[MetaCustomerNormalizer.php, .email(), .externalId(), .phone()]
- "support_metadestination_metadestination": "MetaDestination" | kind=code-symbol | source=modules/analytics-meta/src/Support/MetaDestination.php:L9 | neighbors=[MetaDestination.php, .__construct(), .deliver(), .name()]
- "support_support_aa": "aa()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, gr(), mr(), fn()]
- "support_support_at": "At()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, zt(), dt(), Wr()]
- "support_support_bi": "Bi()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ht(), Tt(), eo()]
- "support_support_cr": "cr()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, dt(), Qr(), xt()]
- "support_support_g": "g()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Hn(), S(), _o()]
- "support_support_ge": "Ge()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, dt(), J(), ve()]
- "support_support_gt": "Gt()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, c(), x(), Kt()]
- "support_support_ie": "Ie()" | kind=code-symbol | source=public/js/filament/support/support.js:L5 | neighbors=[support.js, Cn(), je(), pe()]
- "support_support_it": "it()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fs(), Mt(), _n()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-078.json

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
