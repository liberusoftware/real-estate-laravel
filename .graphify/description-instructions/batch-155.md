# Node Description Batch 156 of 212

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

- "stat_chart_releasecontext": "releaseContext()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _destroy()]
- "stat_chart_removecontrollers": "removeControllers()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each()]
- "stat_chart_removedatasethoverstyle": "_removeDatasetHoverStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _setStyle()]
- "stat_chart_removehoverstyle": "removeHoverStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _setStyle()]
- "stat_chart_removeplugins": "removePlugins()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each()]
- "stat_chart_removescales": "removeScales()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _each()]
- "stat_chart_removeunreferencedmetasets": "_removeUnreferencedMetasets()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers()]
- "stat_chart_rgbstring": "rgbString()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, yo()]
- "stat_chart_rl": "rl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ei()]
- "stat_chart_ro": "ro()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, describe()]
- "stat_chart_rr": "Rr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _handleEvent()]
- "stat_chart_rs": "Rs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Jo()]
- "stat_chart_segments": "segments()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, qs()]
- "stat_chart_set": "set()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ei()]
- "stat_chart_setdatasethoverstyle": "_setDatasetHoverStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _setStyle()]
- "stat_chart_sethoverstyle": "setHoverStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _setStyle()]
- "stat_chart_show": "show()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _updateVisibility()]
- "stat_chart_so": "so()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor()]
- "stat_chart_tooltipposition": "tooltipPosition()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getProps()]
- "stat_chart_ul": "ul()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, fl()]
- "stat_chart_updateconfig": "updateConfig()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor()]
- "stat_chart_updateindex": "updateIndex()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers()]
- "stat_chart_updaterangefromparsed": "updateRangeFromParsed()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getMinMax()]
- "stat_chart_vl": "vl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bl()]
- "stat_chart_vr": "vr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, path()]
- "stat_chart_vs": "vs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildTicks()]
- "stat_chart_wait": "wait()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A()]
- "stat_chart_we": "we()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _exec()]
- "stat_chart_ws": "ws()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, normalize()]
- "stat_chart_xa": "Xa()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, pt()]
- "stat_chart_xr": "xr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _r()]
- "stat_chart_xs": "xs()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ct()]
- "stat_chart_ye": "ye()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ba()]
- "stat_chart_yl": "yl()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bl()]
- "stat_chart_zt": "Zt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, parseObjectData()]
- "support_auditcontext": "AuditContext.php" | kind=code-symbol | source=modules/audit/src/Support/AuditContext.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, AuditContext]
- "support_auditcontext_auditcontext": "AuditContext" | kind=code-symbol | source=modules/audit/src/Support/AuditContext.php:L5 | neighbors=[AuditContext.php, .__construct()]
- "support_configuredregistrationpolicy": "ConfiguredRegistrationPolicy.php" | kind=code-symbol | source=modules/identity-core/src/Support/ConfiguredRegistrationPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ConfiguredRegistrationPolicy]
- "support_consentpolicy": "ConsentPolicy.php" | kind=code-symbol | source=modules/analytics-core/src/Support/ConsentPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ConsentPolicy]
- "support_consentpolicy_consentpolicy": "ConsentPolicy" | kind=code-symbol | source=modules/analytics-core/src/Support/ConsentPolicy.php:L5 | neighbors=[ConsentPolicy.php, .permits()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-155.json

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
