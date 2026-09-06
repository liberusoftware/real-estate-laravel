# Node Description Batch 55 of 212

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

- "src_modulemanagerfilamentplugin_modulemanagerfilamentplugin": "ModuleManagerFilamentPlugin" | kind=code-symbol | source=modules/module-manager-filament/src/ModuleManagerFilamentPlugin.php:L9 | neighbors=[ModuleManagerFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_offerslivewireserviceprovider": "OffersLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-offers-livewire/src/OffersLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 42c9c7f Add real estate offers module s…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, OffersLivewireServiceProvider]
- "src_organizationsfilamentplugin_organizationsfilamentplugin": "OrganizationsFilamentPlugin" | kind=code-symbol | source=modules/organizations-teams-filament/src/OrganizationsFilamentPlugin.php:L9 | neighbors=[OrganizationsFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_partiesfilamentplugin_partiesfilamentplugin": "PartiesFilamentPlugin" | kind=code-symbol | source=modules/real-estate-parties-filament/src/PartiesFilamentPlugin.php:L11 | neighbors=[PartiesFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_propertiesfilamentplugin_propertiesfilamentplugin": "PropertiesFilamentPlugin" | kind=code-symbol | source=modules/real-estate-properties-filament/src/PropertiesFilamentPlugin.php:L11 | neighbors=[PropertiesFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_realestatecorefilamentplugin_realestatecorefilamentplugin": "RealEstateCoreFilamentPlugin" | kind=code-symbol | source=modules/real-estate-core-filament/src/RealEstateCoreFilamentPlugin.php:L13 | neighbors=[RealEstateCoreFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_sessionsdevicesfilamentplugin_sessionsdevicesfilamentplugin": "SessionsDevicesFilamentPlugin" | kind=code-symbol | source=modules/sessions-devices-filament/src/SessionsDevicesFilamentPlugin.php:L9 | neighbors=[SessionsDevicesFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_settingsfilamentplugin_settingsfilamentplugin": "SettingsFilamentPlugin" | kind=code-symbol | source=modules/settings-filament/src/SettingsFilamentPlugin.php:L9 | neighbors=[SettingsFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_valuationslivewireserviceprovider": "ValuationsLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-valuations-livewire/src/ValuationsLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3172546 Add valuations Filament and Liv…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, ValuationsLivewireServiceProvider]
- "src_valuationsserviceprovider": "ValuationsServiceProvider.php" | kind=code-symbol | source=modules/real-estate-valuations/src/ValuationsServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 44c2353 Add real estate valuations core…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, ValuationsServiceProvider]
- "src_viewingslivewireserviceprovider": "ViewingsLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-viewings-livewire/src/ViewingsLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, ViewingsLivewireServiceProvider]
- "src_viewingsserviceprovider": "ViewingsServiceProvider.php" | kind=code-symbol | source=modules/real-estate-viewings/src/ViewingsServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 6ad060b Add real estate viewings module…, 8cf045c Implement real estate module co…, ViewingsServiceProvider]
- "stat_chart_ai": "ai()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, inRange(), isPointInArea(), Z(), dl()]
- "stat_chart_apply": "apply()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, constructor(), L(), parse(), Ss()]
- "stat_chart_bindevents": "bindEvents()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bindResponsiveEvents(), bindUserEvents(), _checkEventBindings(), initialize()]
- "stat_chart_bt": "Bt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, En(), _generate(), hasValue(), updateElements()]
- "stat_chart_cancel": "cancel()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _notify(), tick(), _createAnimations(), stop()]
- "stat_chart_computeticklimit": "computeTickLimit()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, isHorizontal(), nt(), _resolveTickFontOptions(), getTickLimit()]
- "stat_chart_converttickstolabels": "_convertTicksToLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, afterTickToLabelConversion(), beforeTickToLabelConversion(), generateTickLabels(), _update()]
- "stat_chart_cr": "cr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeLabelSizes(), A(), _i(), W()]
- "stat_chart_da": "da()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, ke(), Re(), yt(), S()]
- "stat_chart_de": "De()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, format(), getSortedVisibleDatasetMetas(), getLabelForValue(), numeric()]
- "stat_chart_destroydatasetmeta": "_destroyDatasetMeta()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, buildOrUpdateControllers(), _destroy(), stop(), _updateMetasets()]
- "stat_chart_drawborder": "drawBorder()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, draw(), ft(), getContext(), isHorizontal()]
- "stat_chart_drawdatasets": "_drawDatasets()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, draw(), _drawDataset(), getSortedVisibleDatasetMetas(), notifyPlugins()]
- "stat_chart_ds": "Ds()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getPixelForValue(), getUserBounds(), q(), _update()]
- "stat_chart_format": "format()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, De(), wt(), getLabelForValue(), _tickFormatFunction()]
- "stat_chart_fr": "fr()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawTitle(), getPixelForValue(), isHorizontal(), S()]
- "stat_chart_generateticklabels": "generateTickLabels()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _convertTicksToLabels(), getLabels(), L(), _tickFormatFunction()]
- "stat_chart_getanims": "_getAnims()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), get(), has(), listen()]
- "stat_chart_getbasepixel": "getBasePixel()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getBaseValue(), getPixelForValue(), kr(), updateElements()]
- "stat_chart_getdistancefromcenterforvalue": "getDistanceFromCenterForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawBackground(), drawGrid(), getPointPositionForValue(), ol()]
- "stat_chart_getlabelsize": "_getLabelSize()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _getLabelCapacity(), isHorizontal(), nt(), _resolveTickFontOptions()]
- "stat_chart_getpixelfortick": "getPixelForTick()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _calculatePadding(), _computeLabelItems(), getPixelForValue(), lr()]
- "stat_chart_getpointlabelcontext": "getPointLabelContext()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, drawGrid(), getContext(), pl(), wl()]
- "stat_chart_getpointpositionforvalue": "getPointPositionForValue()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getBasePosition(), getDistanceFromCenterForValue(), getPointPosition(), ol()]
- "stat_chart_getprops": "getProps()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getCenterPoint(), inRange(), mn(), tooltipPosition()]
- "stat_chart_getsharedoptions": "getSharedOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, includeOptions(), resolveDataElementOptions(), updateSharedOptions(), _setStyle()]
- "stat_chart_gettimestampsfortable": "_getTimestampsForTable()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, getDataTimestamps(), getLabelTimestamps(), normalize(), initOffsets()]
- "stat_chart_go": "go()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, Je(), Qe(), ts(), rotate()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-054.json

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
