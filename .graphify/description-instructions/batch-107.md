# Node Description Batch 108 of 212

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

- "pkg_real_estate_offers_livewire": "liberusoftware/real-estate-offers-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Offers, liberusoftware/real-estate-offers]
- "pkg_real_estate_onthemarket_api": "liberusoftware/real-estate-onthemarket-api" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[API adapter tier, liberusoftware/real-estate-onthemarket, Portal provider: OnTheMarket]
- "pkg_real_estate_onthemarket_filament": "liberusoftware/real-estate-onthemarket-filament" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Filament adapter tier, liberusoftware/real-estate-onthemarket, Portal provider: OnTheMarket]
- "pkg_real_estate_onthemarket_livewire": "liberusoftware/real-estate-onthemarket-livewire" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Livewire adapter tier, liberusoftware/real-estate-onthemarket, Portal provider: OnTheMarket]
- "pkg_real_estate_parties_api": "liberusoftware/real-estate-parties-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Parties, liberusoftware/real-estate-parties]
- "pkg_real_estate_parties_filament": "liberusoftware/real-estate-parties-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Parties, liberusoftware/real-estate-parties]
- "pkg_real_estate_parties_livewire": "liberusoftware/real-estate-parties-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Parties, liberusoftware/real-estate-parties]
- "pkg_real_estate_portals_reporting_api": "liberusoftware/real-estate-portals-reporting-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Portals and Rep…, liberusoftware/real-estate-portals-repo…]
- "pkg_real_estate_portals_reporting_filament": "liberusoftware/real-estate-portals-reporting-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Portals and Rep…, liberusoftware/real-estate-portals-repo…]
- "pkg_real_estate_portals_reporting_livewire": "liberusoftware/real-estate-portals-reporting-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Portals and Rep…, liberusoftware/real-estate-portals-repo…]
- "pkg_real_estate_properties_api": "liberusoftware/real-estate-properties-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Properties, liberusoftware/real-estate-properties]
- "pkg_real_estate_properties_filament": "liberusoftware/real-estate-properties-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Properties, liberusoftware/real-estate-properties]
- "pkg_real_estate_properties_livewire": "liberusoftware/real-estate-properties-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Properties, liberusoftware/real-estate-properties]
- "pkg_real_estate_rightmove_api": "liberusoftware/real-estate-rightmove-api" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[API adapter tier, liberusoftware/real-estate-rightmove, Portal provider: Rightmove]
- "pkg_real_estate_rightmove_filament": "liberusoftware/real-estate-rightmove-filament" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Filament adapter tier, liberusoftware/real-estate-rightmove, Portal provider: Rightmove]
- "pkg_real_estate_rightmove_livewire": "liberusoftware/real-estate-rightmove-livewire" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Livewire adapter tier, liberusoftware/real-estate-rightmove, Portal provider: Rightmove]
- "pkg_real_estate_sales_progression_api": "liberusoftware/real-estate-sales-progression-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Sales Progressi…, liberusoftware/real-estate-sales-progre…]
- "pkg_real_estate_sales_progression_filament": "liberusoftware/real-estate-sales-progression-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Sales Progressi…, liberusoftware/real-estate-sales-progre…]
- "pkg_real_estate_sales_progression_livewire": "liberusoftware/real-estate-sales-progression-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Sales Progressi…, liberusoftware/real-estate-sales-progre…]
- "pkg_real_estate_valuations_api": "liberusoftware/real-estate-valuations-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Valuations, liberusoftware/real-estate-valuations]
- "pkg_real_estate_valuations_filament": "liberusoftware/real-estate-valuations-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Valuations, liberusoftware/real-estate-valuations]
- "pkg_real_estate_valuations_livewire": "liberusoftware/real-estate-valuations-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Valuations, liberusoftware/real-estate-valuations]
- "pkg_real_estate_viewings_api": "liberusoftware/real-estate-viewings-api" | kind=entity | source=projects/real-estate/api/README.md | neighbors=[API adapter tier, Real Estate capability: Viewings, liberusoftware/real-estate-viewings]
- "pkg_real_estate_viewings_filament": "liberusoftware/real-estate-viewings-filament" | kind=entity | source=projects/real-estate/filament/README.md | neighbors=[Filament adapter tier, Real Estate capability: Viewings, liberusoftware/real-estate-viewings]
- "pkg_real_estate_viewings_livewire": "liberusoftware/real-estate-viewings-livewire" | kind=entity | source=projects/real-estate/livewire/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Viewings, liberusoftware/real-estate-viewings]
- "pkg_real_estate_zoopla_api": "liberusoftware/real-estate-zoopla-api" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[API adapter tier, liberusoftware/real-estate-zoopla, Portal provider: Zoopla]
- "pkg_real_estate_zoopla_filament": "liberusoftware/real-estate-zoopla-filament" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Filament adapter tier, liberusoftware/real-estate-zoopla, Portal provider: Zoopla]
- "pkg_real_estate_zoopla_livewire": "liberusoftware/real-estate-zoopla-livewire" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Livewire adapter tier, liberusoftware/real-estate-zoopla, Portal provider: Zoopla]
- "policies_lettingpolicy_lettingpolicy_view": ".view()" | kind=code-symbol | source=modules/real-estate-lettings/src/Policies/LettingPolicy.php:L11 | neighbors=[LettingPolicy, .delete(), .update()]
- "policies_managementrecordpolicy_managementrecordpolicy_view": ".view()" | kind=code-symbol | source=modules/real-estate-property-management/src/Policies/ManagementRecordPolicy.php:L11 | neighbors=[ManagementRecordPolicy, .delete(), .update()]
- "providers_fortifyserviceprovider_fortifyserviceprovider": "FortifyServiceProvider" | kind=code-symbol | source=modules/jetstream-bridge/src/Providers/FortifyServiceProvider.php:L18 | neighbors=[FortifyServiceProvider.php, .boot(), .register()]
- "providers_horizondashboardserviceprovider_horizondashboardserviceprovider": "HorizonDashboardServiceProvider" | kind=code-symbol | source=modules/observability/src/Providers/HorizonDashboardServiceProvider.php:L9 | neighbors=[HorizonDashboardServiceProvider.php, .boot(), .gate()]
- "providers_socialstreamserviceprovider_socialstreamserviceprovider": "SocialstreamServiceProvider" | kind=code-symbol | source=modules/identity-socialstream/src/Providers/SocialstreamServiceProvider.php:L18 | neighbors=[SocialstreamServiceProvider.php, .boot(), .register()]
- "providers_themeserviceprovider_themeserviceprovider_boot": ".boot()" | kind=code-symbol | source=modules/theme-support/src/Providers/ThemeServiceProvider.php:L32 | neighbors=[ThemeServiceProvider, .determineActiveTheme(), .registerBladeDirectives()]
- "quality_ratchet": "Upward-only quality ratchet" | kind=entity | source=scripts/README.md | neighbors=[Semantic versioning over tokens, slots,…, set-coverage-thresholds, set-phpstan-levels]
- "re_theme_design_tokens": "Semantic design tokens (Tailwind v4 + CSS custom properties)" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Light/dark, high-contrast and forced-co…, base theme (Liberu Base), real-estate-default theme]
- "re_theme_extension_points": "Real-estate theme extension points" | kind=entity | source=themes/real-estate-default/README.md | neighbors=[Livewire adapter tier, Real Estate capability: Properties, real-estate-default theme]
- "re_valuations_api_module": "Real Estate Valuations API Adapter" | kind=entity | source=modules/real-estate-valuations-api/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Valuations API v1 OpenAPI Spec, Real Estate Valuations Module]
- "re_valuations_filament_module": "Real Estate Valuations Filament Adapter" | kind=entity | source=modules/real-estate-valuations-filament/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Valuation Workflow Transitions, Real Estate Valuations Module]
- "re_viewings_api_module": "Real Estate Viewings API Adapter" | kind=entity | source=modules/real-estate-viewings-api/README.md | neighbors=[Unprefixed Composer Name vs module- Git…, Viewings API v1 OpenAPI Spec, Real Estate Viewings Module]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-107.json

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
