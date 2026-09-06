# Node Description Batch 23 of 212

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

- "concept_architecture_boundary_rules": "Host architecture boundary rules" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[Explicit module enablement, No extra.laravel.providers auto-discove…, Theme parent inheritance chain, docs/CONFORMANCE.md, liberusoftware/package-testbench, Verify before asserting]
- "concept_conformance_spec": "docs/CONFORMANCE.md" | kind=entity | source=docs/handoffs/2026-08-04-conformance-map.md | neighbors=[Host architecture boundary rules, liberusoftware/composer-installer, liberusoftware vs liberu vendor prefix, Wayfinder map issue #612, §6.2 zero-diff gate, Single-context domain docs]
- "concept_message_encryption_at_rest": "Message encryption at rest" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[MessageController, messages table schema, Full-text search engine migration path, Implementation Summary, Private Messaging System (API reference), Private Messaging System Architecture]
- "concept_message_policy": "MessagePolicy" | kind=entity | source=docs/MESSAGING_DEVELOPER_NOTES.md | neighbors=[Layered authorization, MessageController, Filament Shield role-based access, Private user broadcast channels, Implementation Summary, Private Messaging System (API reference)]
- "concept_package_testbench": "liberusoftware/package-testbench" | kind=entity | source=docs/handoffs/2026-08-05-step-4-testbench-migration.md | neighbors=[scripts/migrate-testbench, Host architecture boundary rules, Package-owned tests, Packagist namespace registration blocker, liberusoftware/.github reusable workflo…, liberusoftware vs liberu vendor prefix]
- "concept_private_messaging_system": "Private Messaging System" | kind=entity | source=docs/MESSAGING.md | neighbors=[NewMessageNotification, MessageController, Messaging test suites, Real-time notification system, Implementation Summary, Private Messaging System (API reference)]
- "doc_multi_language": "Multi-Language Support Documentation" | kind=entity | source=docs/MULTI_LANGUAGE.md | neighbors=[LanguageSwitcher Livewire component, Localization module split, Multi-language support, SetLocale middleware, config('app.supported_locales'), translate:generate artisan command]
- "non_interactive_fail_fast_commands": "Non-interactive, fail-on-error commands" | kind=entity | source=scripts/README.md | neighbors=[scripts/fleet, measure-coverage, measure-phpstan, set-coverage-thresholds, set-phpstan-levels, setup.sh]
- "openapi_real_estate_rightmove_v1": "Rightmove Sync API v1 OpenAPI Spec" | kind=entity | source=modules/real-estate-rightmove-api/openapi/v1/real-estate-rightmove.yaml | neighbors=[Archive Instead of Hard Delete, Shared Error Schema, x-liberu-idempotency-header (Idempotenc…, OpenAPI 3.1.0 Versioned API Contract, Shared PaginationMeta Schema, Rightmove Sync Operation]
- "portal_integration_independence": "Portal integrations are independently releasable" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Real Estate Portal Integrations README, Real Estate capability: Portals and Rep…, Replaceable provider integration adapte…, Team-scoped, authorization-aware, audit…, Portal provider: OnTheMarket, Portal provider: Rightmove]
- "re_property_management_module": "Real Estate Property Management Module" | kind=entity | source=modules/real-estate-property-management/README.md | neighbors=[Core/API/Filament/Livewire Package Split, Team-scoped domain records, Unprefixed Composer Name vs module- Git…, Property Management API Specification, Property Management Domain Specification, Property Management Filament Specificat…]
- "real_estate_lettings_module": "Real Estate Lettings" | kind=entity | source=modules/real-estate-lettings/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Letting Lifecycle Capabilities, Lettings API Specification, Lettings Domain Specification, Lettings Filament Specification, Lettings Livewire Specification]
- "real_estate_portals_reporting_module": "Real Estate Portals and Reporting (core module)" | kind=entity | source=modules/real-estate-portals-reporting/README.md | neighbors=[OpenAPI v1: Real Estate OnTheMarket Syn…, Real Estate OnTheMarket (core module), Real Estate Portals and Reporting API, Real Estate Portals and Reporting Filam…, Real Estate Portals and Reporting Livew…, Presentation-neutral domain core]
- "roles_permissions_module": "liberusoftware/roles-permissions" | kind=entity | source=modules/identity-core-filament/README.md | neighbors=[Liberu Identity Administration (identit…, Liberu Authorization Filament, Capability: foundation.authorization, Category: foundation, liberu-module Composer package type, liberusoftware/module-manager]
- "settings_module": "Liberu Settings" | kind=entity | source=modules/settings/README.md | neighbors=[Liberu Core Modules Scope, Liberu Settings Administration, Capability: foundation.settings, Category: foundation, liberu-module Composer package type, liberusoftware/module-manager]
- "stat_chart_calculatelabelrotation": "calculateLabelRotation()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _getLabelSizes(), isHorizontal(), _isVisible(), q(), Se()]
- "stat_chart_callhooks": "_callHooks()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, afterBuildTicks(), afterDataLimits(), beforeBuildTicks(), beforeDataLimits(), getContext()]
- "stat_chart_datacheck": "_dataCheck()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, addElements(), buildOrUpdateElements(), di(), getDataset(), ka()]
- "stat_chart_destroy": "_destroy()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bi(), clearCache(), di(), notifyPlugins(), releaseContext()]
- "stat_chart_drawtitle": "drawTitle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, draw(), A(), ee(), fr(), kt()]
- "stat_chart_ei": "ei()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, describe(), Gt(), jr(), pathSegment(), rl()]
- "stat_chart_et": "et()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, A(), qt(), S(), po(), rgb()]
- "stat_chart_getlabelsizes": "_getLabelSizes()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, calculateLabelRotation(), _computeLabelItems(), fit(), _computeLabelSizes(), dn()]
- "stat_chart_getoptionscopes": "getOptionScopes()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, configure(), _cachedScopes(), get(), has(), _resolveAnimations()]
- "stat_chart_n": "N()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, bl(), ci(), getIndexAngle(), L(), notifyPlugins()]
- "stat_chart_ol": "ol()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), getDistanceFromCenterForValue(), getLabels(), getPointPositionForValue(), qr()]
- "stat_chart_resize": "resize()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, initialize(), getDevicePixelRatio(), getMaximumSize(), L(), notifyPlugins()]
- "stat_chart_resolvetickfontoptions": "_resolveTickFontOptions()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _computeLabelItems(), _computeLabelSizes(), computeTickLimit(), _getLabelSize(), _maxDigits()]
- "stat_chart_setstyle": "_setStyle()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, _removeDatasetHoverStyle(), removeHoverStyle(), _setDatasetHoverStyle(), setHoverStyle(), getSharedOptions()]
- "stat_chart_wt": "wt()" | kind=code-symbol | source=public/js/filament/widgets/components/stats-overview/stat/chart.js:L1 | neighbors=[chart.js, add(), diff(), endOf(), format(), formats()]
- "support_support_a": "_a()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, Bt(), ht(), I(), r(), ut()]
- "support_support_ae": "ae()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, pe(), Te(), ei(), kn(), ls()]
- "support_support_ar": "ar()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, J(), m(), S(), V(), y()]
- "support_support_dt": "dt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, cr(), At(), me(), V(), Ee()]
- "support_support_ei": "ei()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ae(), Pn(), Tr(), Ui(), fn()]
- "support_support_m": "m()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ar(), de(), y(), Or(), q()]
- "support_support_ma": "ma()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, fn(), br(), ht(), Nt(), Tn()]
- "support_support_nt": "Nt()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, ii(), Ji(), ma(), ct(), Vn()]
- "support_support_or": "Or()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, I(), m(), r(), S(), Vr()]
- "support_support_rn": "rn()" | kind=code-symbol | source=public/js/filament/support/support.js:L1 | neighbors=[support.js, br(), ca(), eo(), la(), qi()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-022.json

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
