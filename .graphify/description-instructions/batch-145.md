# Node Description Batch 146 of 212

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

- "pages_listmediadocuments_listmediadocuments": "ListMediaDocuments" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource/Pages/ListMediaDocuments.php:L9 | neighbors=[ListMediaDocuments.php, .getHeaderActions()]
- "pages_listoffers_listoffers": "ListOffers" | kind=code-symbol | source=modules/real-estate-offers-filament/src/Resources/OfferResource/Pages/ListOffers.php:L9 | neighbors=[ListOffers.php, .getHeaderActions()]
- "pages_listonthemarketsyncs": "ListOnTheMarketSyncs.php" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource/Pages/ListOnTheMarketSyncs.php:L1 | neighbors=[1cdd121 Add independent property portal…, ListOnTheMarketSyncs]
- "pages_listparties": "ListParties.php" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource/Pages/ListParties.php:L1 | neighbors=[73659b3 Add real estate parties module …, ListParties]
- "pages_listportalreports": "ListPortalReports.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource/Pages/ListPortalReports.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…, ListPortalReports]
- "pages_listproperties": "ListProperties.php" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/ListProperties.php:L1 | neighbors=[75d6371 Add real estate properties modu…, ListProperties]
- "pages_listproperties_listproperties": "ListProperties" | kind=code-symbol | source=modules/real-estate-properties-filament/src/Resources/PropertyResource/Pages/ListProperties.php:L11 | neighbors=[ListProperties.php, .getHeaderActions()]
- "pages_listrightmovesyncs": "ListRightmoveSyncs.php" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource/Pages/ListRightmoveSyncs.php:L1 | neighbors=[1cdd121 Add independent property portal…, ListRightmoveSyncs]
- "pages_listsalesprogressions": "ListSalesProgressions.php" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource/Pages/ListSalesProgressions.php:L1 | neighbors=[6385f28 Add sales progression modules a…, ListSalesProgressions]
- "pages_listteams": "ListTeams.php" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/ListTeams.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ListTeams]
- "pages_listteams_listteams": "ListTeams" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource/Pages/ListTeams.php:L9 | neighbors=[ListTeams.php, .getHeaderActions()]
- "pages_listusers": "ListUsers.php" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/ListUsers.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ListUsers]
- "pages_listusers_listusers": "ListUsers" | kind=code-symbol | source=modules/identity-core-filament/src/Resources/UserResource/Pages/ListUsers.php:L9 | neighbors=[ListUsers.php, .getHeaderActions()]
- "pages_listvaluations_listvaluations": "ListValuations" | kind=code-symbol | source=modules/real-estate-valuations-filament/src/Resources/ValuationResource/Pages/ListValuations.php:L9 | neighbors=[ListValuations.php, .getHeaderActions()]
- "pages_listviewings_listviewings": "ListViewings" | kind=code-symbol | source=modules/real-estate-viewings-filament/src/Resources/ViewingResource/Pages/ListViewings.php:L9 | neighbors=[ListViewings.php, .getHeaderActions()]
- "pages_listzooplasyncs": "ListZooplaSyncs.php" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource/Pages/ListZooplaSyncs.php:L1 | neighbors=[1cdd121 Add independent property portal…, ListZooplaSyncs]
- "pages_managesitesettings": "ManageSiteSettings.php" | kind=code-symbol | source=modules/settings-filament/src/Pages/ManageSiteSettings.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ManageSiteSettings]
- "pages_managesitesettings_managesitesettings": "ManageSiteSettings" | kind=code-symbol | source=modules/settings-filament/src/Pages/ManageSiteSettings.php:L14 | neighbors=[ManageSiteSettings.php, .form()]
- "pagination_meta_schema": "PaginationMeta Schema" | kind=entity | source=modules/real-estate-core-api/openapi/v1/real-estate-core.yaml | neighbors=[Real Estate Core OpenAPI v1, Real Estate Instructions OpenAPI v1]
- "phpstan_tsv": "storage/app/phpstan.tsv" | kind=entity | source=scripts/README.md | neighbors=[measure-phpstan, set-phpstan-levels]
- "pkg_liberusoftware_organizations_teams": "liberusoftware/organizations-teams" | kind=entity | source=modules/roles-permissions/README.md:Requirements and installation | neighbors=[Liberu Core Modules Scope, liberusoftware/roles-permissions]
- "pkg_livewire_livewire": "livewire/livewire ^4.0" | kind=entity | source=modules/theme-support/README.md:Requirements and installation | neighbors=[Liberu Theme Support Livewire, Liberu Theme Support]
- "policies_connectedaccountpolicy": "ConnectedAccountPolicy.php" | kind=code-symbol | source=modules/identity-socialstream/src/Policies/ConnectedAccountPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, ConnectedAccountPolicy]
- "policies_lettingpolicy": "LettingPolicy.php" | kind=code-symbol | source=modules/real-estate-lettings/src/Policies/LettingPolicy.php:L1 | neighbors=[3735f58 Complete letting and property m…, LettingPolicy]
- "policies_lettingpolicy_lettingpolicy_delete": ".delete()" | kind=code-symbol | source=modules/real-estate-lettings/src/Policies/LettingPolicy.php:L21 | neighbors=[LettingPolicy, .view()]
- "policies_lettingpolicy_lettingpolicy_update": ".update()" | kind=code-symbol | source=modules/real-estate-lettings/src/Policies/LettingPolicy.php:L16 | neighbors=[LettingPolicy, .view()]
- "policies_managementrecordpolicy": "ManagementRecordPolicy.php" | kind=code-symbol | source=modules/real-estate-property-management/src/Policies/ManagementRecordPolicy.php:L1 | neighbors=[3735f58 Complete letting and property m…, ManagementRecordPolicy]
- "policies_managementrecordpolicy_managementrecordpolicy_delete": ".delete()" | kind=code-symbol | source=modules/real-estate-property-management/src/Policies/ManagementRecordPolicy.php:L21 | neighbors=[ManagementRecordPolicy, .view()]
- "policies_managementrecordpolicy_managementrecordpolicy_update": ".update()" | kind=code-symbol | source=modules/real-estate-property-management/src/Policies/ManagementRecordPolicy.php:L16 | neighbors=[ManagementRecordPolicy, .view()]
- "policies_rolepolicy": "RolePolicy.php" | kind=code-symbol | source=modules/roles-permissions/src/Policies/RolePolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, RolePolicy]
- "policies_teampolicy": "TeamPolicy.php" | kind=code-symbol | source=modules/organizations-teams/src/Policies/TeamPolicy.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TeamPolicy]
- "profile_connected_accounts_form_blade": "connected-accounts-form.blade.php" | kind=code-symbol | source=resources/views/profile/connected-accounts-form.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "profile_show_blade": "show.blade.php" | kind=code-symbol | source=resources/views/profile/show.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "provider_credentials_replaceable_transport": "Replaceable provider credentials and transport" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Portal integrations are independently r…, Safe theme fallback]
- "providers_fortifyserviceprovider": "FortifyServiceProvider.php" | kind=code-symbol | source=modules/jetstream-bridge/src/Providers/FortifyServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, FortifyServiceProvider]
- "providers_horizondashboardserviceprovider": "HorizonDashboardServiceProvider.php" | kind=code-symbol | source=modules/observability/src/Providers/HorizonDashboardServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, HorizonDashboardServiceProvider]
- "providers_socialstreamserviceprovider": "SocialstreamServiceProvider.php" | kind=code-symbol | source=modules/identity-socialstream/src/Providers/SocialstreamServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, SocialstreamServiceProvider]
- "providers_telescopedashboardserviceprovider": "TelescopeDashboardServiceProvider.php" | kind=code-symbol | source=modules/observability/src/Providers/TelescopeDashboardServiceProvider.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, TelescopeDashboardServiceProvider]
- "providers_telescopedashboardserviceprovider_telescopedashboardserviceprovider_hidesensitiverequestdetails": ".hideSensitiveRequestDetails()" | kind=code-symbol | source=modules/observability/src/Providers/TelescopeDashboardServiceProvider.php:L37 | neighbors=[TelescopeDashboardServiceProvider, .register()]
- "providers_telescopedashboardserviceprovider_telescopedashboardserviceprovider_register": ".register()" | kind=code-symbol | source=modules/observability/src/Providers/TelescopeDashboardServiceProvider.php:L16 | neighbors=[TelescopeDashboardServiceProvider, .hideSensitiveRequestDetails()]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-145.json

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
