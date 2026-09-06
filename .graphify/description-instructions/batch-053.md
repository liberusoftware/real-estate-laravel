# Node Description Batch 54 of 212

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

- "pkg_real_estate_portals_reporting": "liberusoftware/real-estate-portals-reporting" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Portals and Rep…, liberusoftware/real-estate-portals-repo…, liberusoftware/real-estate-portals-repo…, liberusoftware/real-estate-portals-repo…]
- "pkg_real_estate_properties": "liberusoftware/real-estate-properties" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Properties, liberusoftware/real-estate-properties-a…, liberusoftware/real-estate-properties-f…, liberusoftware/real-estate-properties-l…]
- "pkg_real_estate_rightmove": "liberusoftware/real-estate-rightmove" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Core (domain) tier, Portal provider: Rightmove, liberusoftware/real-estate-rightmove-api, liberusoftware/real-estate-rightmove-fi…, liberusoftware/real-estate-rightmove-li…]
- "pkg_real_estate_sales_progression": "liberusoftware/real-estate-sales-progression" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Sales Progressi…, liberusoftware/real-estate-sales-progre…, liberusoftware/real-estate-sales-progre…, liberusoftware/real-estate-sales-progre…]
- "pkg_real_estate_valuations": "liberusoftware/real-estate-valuations" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Valuations, liberusoftware/real-estate-valuations-a…, liberusoftware/real-estate-valuations-f…, liberusoftware/real-estate-valuations-l…]
- "pkg_real_estate_viewings": "liberusoftware/real-estate-viewings" | kind=entity | source=projects/real-estate/core/README.md | neighbors=[Core (domain) tier, Real Estate capability: Viewings, liberusoftware/real-estate-viewings-api, liberusoftware/real-estate-viewings-fil…, liberusoftware/real-estate-viewings-liv…]
- "pkg_real_estate_zoopla": "liberusoftware/real-estate-zoopla" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[Core (domain) tier, Portal provider: Zoopla, liberusoftware/real-estate-zoopla-api, liberusoftware/real-estate-zoopla-filam…, liberusoftware/real-estate-zoopla-livew…]
- "portal_provider_onthemarket": "Portal provider: OnTheMarket" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[liberusoftware/real-estate-onthemarket, liberusoftware/real-estate-onthemarket-…, liberusoftware/real-estate-onthemarket-…, liberusoftware/real-estate-onthemarket-…, Portal integrations are independently r…]
- "portal_provider_rightmove": "Portal provider: Rightmove" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[liberusoftware/real-estate-rightmove, liberusoftware/real-estate-rightmove-api, liberusoftware/real-estate-rightmove-fi…, liberusoftware/real-estate-rightmove-li…, Portal integrations are independently r…]
- "portal_provider_zoopla": "Portal provider: Zoopla" | kind=entity | source=projects/real-estate/integrations/README.md | neighbors=[liberusoftware/real-estate-zoopla, liberusoftware/real-estate-zoopla-api, liberusoftware/real-estate-zoopla-filam…, liberusoftware/real-estate-zoopla-livew…, Portal integrations are independently r…]
- "providers_themeserviceprovider_themeserviceprovider": "ThemeServiceProvider" | kind=code-symbol | source=modules/theme-support/src/Providers/ThemeServiceProvider.php:L15 | neighbors=[ThemeServiceProvider.php, .boot(), .determineActiveTheme(), .register(), .registerBladeDirectives()]
- "queries_sessionreader_sessionreader": "SessionReader" | kind=code-symbol | source=modules/sessions-devices/src/Queries/SessionReader.php:L8 | neighbors=[SessionReader.php, .forActor(), .revoke(), .revokeOthers(), .summarizeIp()]
- "real_estate_core_livewire_module": "Real Estate Core Livewire" | kind=entity | source=modules/real-estate-core-livewire/README.md | neighbors=[Adapter Over One Matching Core Package, Livewire 4, Branch Resource, Real Estate Core, Team-Scoped Boundary]
- "real_estate_instructions_livewire_module": "Real Estate Instructions Livewire" | kind=entity | source=modules/real-estate-instructions-livewire/README.md | neighbors=[Adapter Over One Matching Core Package, Unprefixed Composer Name vs module- Git…, Livewire 4, Real Estate Instructions, Team-Scoped Boundary]
- "real_estate_parties_module": "Real Estate Parties (core module)" | kind=entity | source=modules/real-estate-parties/README.md | neighbors=[Real Estate Parties API, Real Estate Parties Filament, Real Estate Parties Livewire, Presentation-neutral domain core, Team-scoped domain records]
- "resources_instructionresource": "InstructionResource.php" | kind=code-symbol | source=modules/real-estate-instructions-filament/src/Resources/InstructionResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, InstructionResource]
- "resources_lettingresource": "LettingResource.php" | kind=code-symbol | source=modules/real-estate-lettings-filament/src/Resources/LettingResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3735f58 Complete letting and property m…, 8cf045c Implement real estate module co…, e8b93fc Implement remaining real estate…, LettingResource]
- "resources_listingresource": "ListingResource.php" | kind=code-symbol | source=modules/real-estate-listings-filament/src/Resources/ListingResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, b9f8ca5 Add real estate listings module…, ListingResource]
- "resources_managementrecordresource": "ManagementRecordResource.php" | kind=code-symbol | source=modules/real-estate-property-management-filament/src/Resources/ManagementRecordResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3735f58 Complete letting and property m…, bd5c605 Add explicit API response resou…, e8b93fc Implement remaining real estate…, ManagementRecordResource]
- "resources_marketingcampaignresource": "MarketingCampaignResource.php" | kind=code-symbol | source=modules/real-estate-marketing-filament/src/Resources/MarketingCampaignResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 4fd850d Add real estate marketing modul…, 5eb4712 Harden real estate Filament bou…, 8cf045c Implement real estate module co…, MarketingCampaignResource]
- "resources_matchprofileresource": "MatchProfileResource.php" | kind=code-symbol | source=modules/real-estate-matching-filament/src/Resources/MatchProfileResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, 8cf045c Implement real estate module co…, MatchProfileResource]
- "resources_mediadocumentresource": "MediaDocumentResource.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-filament/src/Resources/MediaDocumentResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, 8cf045c Implement real estate module co…, MediaDocumentResource]
- "resources_onthemarketsyncresource": "OnTheMarketSyncResource.php" | kind=code-symbol | source=modules/real-estate-onthemarket-filament/src/Resources/OnTheMarketSyncResource.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, bd5c605 Add explicit API response resou…, OnTheMarketSyncResource]
- "resources_partyresource": "PartyResource.php" | kind=code-symbol | source=modules/real-estate-parties-filament/src/Resources/PartyResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 73659b3 Add real estate parties module …, bd5c605 Add explicit API response resou…, PartyResource]
- "resources_portalreportresource": "PortalReportResource.php" | kind=code-symbol | source=modules/real-estate-portals-reporting-filament/src/Resources/PortalReportResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 3c98a2a Add real estate portals reporti…, 5eb4712 Harden real estate Filament bou…, bd5c605 Add explicit API response resou…, PortalReportResource]
- "resources_rightmovesyncresource": "RightmoveSyncResource.php" | kind=code-symbol | source=modules/real-estate-rightmove-filament/src/Resources/RightmoveSyncResource.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, bd5c605 Add explicit API response resou…, RightmoveSyncResource]
- "resources_salesprogressionresource": "SalesProgressionResource.php" | kind=code-symbol | source=modules/real-estate-sales-progression-filament/src/Resources/SalesProgressionResource.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, 6385f28 Add sales progression modules a…, bd5c605 Add explicit API response resou…, SalesProgressionResource]
- "resources_teamresource_teamresource": "TeamResource" | kind=code-symbol | source=modules/organizations-teams-filament/src/Resources/TeamResource.php:L23 | neighbors=[TeamResource.php, .form(), .getPages(), .isScopedToTenant(), .table()]
- "resources_zooplasyncresource": "ZooplaSyncResource.php" | kind=code-symbol | source=modules/real-estate-zoopla-filament/src/Resources/ZooplaSyncResource.php:L1 | neighbors=[1cdd121 Add independent property portal…, 2f18670 Conform real estate modules and…, 5eb4712 Harden real estate Filament bou…, bd5c605 Add explicit API response resou…, ZooplaSyncResource]
- "roles_permissions_filament_module": "Liberu Authorization Filament" | kind=entity | source=modules/roles-permissions-filament/README.md | neighbors=[Capability: foundation.authorization.fi…, Category: presentation, bezhansalleh/filament-shield ~4.0, filament/filament ^5.x, liberusoftware/roles-permissions]
- "routes_console": "console.php" | kind=code-symbol | source=routes/console.php:L1 | neighbors=[13a78a4 Schedule tenant portal synchron…, 3df11b3 Claude, 4b07ee8 Update main workflow Docker wit…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…]
- "seeders_rolesseeder": "RolesSeeder.php" | kind=code-symbol | source=database/seeders/RolesSeeder.php:L1 | neighbors=[10d943c Update UserSeeder and RoleSeeder, 750c68d Add socialstream, agent role, k…, 75f7818 Bootstrap application from Libe…, b16f206 Update dependencies including t…, RolesSeeder]
- "services_thememanager_thememanager_inheritancechain": ".inheritanceChain()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L153 | neighbors=[ThemeManager, .firstAsset(), .hasCustomLayout(), .loadThemes(), .registerThemePaths()]
- "services_thememanager_thememanager_settheme": ".setTheme()" | kind=code-symbol | source=modules/theme-support/src/Services/ThemeManager.php:L56 | neighbors=[ThemeManager, .persistTheme(), .selectForSurface(), .registerThemePaths(), .themeIsCompatible()]
- "socialstream_icons_provider_icon_blade": "provider-icon.blade.php" | kind=code-symbol | source=resources/views/components/socialstream-icons/provider-icon.blade.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…, 7a789a0 feat(auth): put the sign-in jou…, 98dde9e Merge pull request #1299 from l…, b16f206 Update dependencies including t…, f358830 chore: trim the comments, and w…]
- "src_identityfilamentplugin_identityfilamentplugin": "IdentityFilamentPlugin" | kind=code-symbol | source=modules/identity-core-filament/src/IdentityFilamentPlugin.php:L9 | neighbors=[IdentityFilamentPlugin.php, .boot(), .getId(), .make(), .register()]
- "src_instructionslivewireserviceprovider": "InstructionsLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-instructions-livewire/src/InstructionsLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 522809b Add real estate instructions mo…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, InstructionsLivewireServiceProvider]
- "src_listingslivewireserviceprovider": "ListingsLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-listings-livewire/src/ListingsLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 8cf045c Implement real estate module co…, b9f8ca5 Add real estate listings module…, ListingsLivewireServiceProvider]
- "src_matchinglivewireserviceprovider": "MatchingLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-matching-livewire/src/MatchingLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 64de88e Add real estate matching module…, 8cf045c Implement real estate module co…, MatchingLivewireServiceProvider]
- "src_mediaanddocumentslivewireserviceprovider": "MediaAndDocumentsLivewireServiceProvider.php" | kind=code-symbol | source=modules/real-estate-media-and-documents-livewire/src/MediaAndDocumentsLivewireServiceProvider.php:L1 | neighbors=[2f18670 Conform real estate modules and…, 6385f28 Add sales progression modules a…, 72d35f5 Add media documents Filament an…, 8cf045c Implement real estate module co…, MediaAndDocumentsLivewireServiceProvider]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-053.json

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
