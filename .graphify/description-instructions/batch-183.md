# Node Description Batch 184 of 212

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

- "domain_partiescapabilitydefinition_partiescapabilitydefinition_behaviors": ".behaviors()" | kind=code-symbol | source=modules/real-estate-parties/src/Domain/PartiesCapabilityDefinition.php:L23 | neighbors=[PartiesCapabilityDefinition]
- "domain_partytype": "PartyType.php" | kind=code-symbol | source=modules/real-estate-parties/src/Domain/PartyType.php:L1 | neighbors=[73659b3 Add real estate parties module …]
- "domain_portalreportstatus": "PortalReportStatus.php" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Domain/PortalReportStatus.php:L1 | neighbors=[3c98a2a Add real estate portals reporti…]
- "domain_portalsreportingcapabilitydefinition_portalsreportingcapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-portals-reporting/src/Domain/PortalsReportingCapabilityDefinition.php:L10 | neighbors=[PortalsReportingCapabilityDefinition]
- "domain_propertiescapabilitydefinition_propertiescapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-properties/src/Domain/PropertiesCapabilityDefinition.php:L10 | neighbors=[PropertiesCapabilityDefinition]
- "domain_propertiescapabilitydefinition_propertiescapabilitydefinition_behaviors": ".behaviors()" | kind=code-symbol | source=modules/real-estate-properties/src/Domain/PropertiesCapabilityDefinition.php:L23 | neighbors=[PropertiesCapabilityDefinition]
- "domain_propertystatus_ispublic": "isPublic()" | kind=code-symbol | source=modules/real-estate-properties/src/Domain/PropertyStatus.php:L16 | neighbors=[PropertyStatus.php]
- "domain_rightmovesyncstatus": "RightmoveSyncStatus.php" | kind=code-symbol | source=modules/real-estate-rightmove/src/Domain/RightmoveSyncStatus.php:L1 | neighbors=[1cdd121 Add independent property portal…]
- "domain_salesprogressioncapabilitydefinition_salesprogressioncapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Domain/SalesProgressionCapabilityDefinition.php:L10 | neighbors=[SalesProgressionCapabilityDefinition]
- "domain_salesprogressionstatus": "SalesProgressionStatus.php" | kind=code-symbol | source=modules/real-estate-sales-progression/src/Domain/SalesProgressionStatus.php:L1 | neighbors=[6385f28 Add sales progression modules a…]
- "domain_valuationscapabilitydefinition_valuationscapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php:L10 | neighbors=[ValuationsCapabilityDefinition]
- "domain_valuationscapabilitydefinition_valuationscapabilitydefinition_define": ".define()" | kind=code-symbol | source=modules/real-estate-valuations/src/Domain/ValuationsCapabilityDefinition.php:L16 | neighbors=[ValuationsCapabilityDefinition]
- "domain_viewingscapabilitydefinition_viewingscapabilitydefinition_all": ".all()" | kind=code-symbol | source=modules/real-estate-viewings/src/Domain/ViewingsCapabilityDefinition.php:L10 | neighbors=[ViewingsCapabilityDefinition]
- "domain_zooplasyncstatus": "ZooplaSyncStatus.php" | kind=code-symbol | source=modules/real-estate-zoopla/src/Domain/ZooplaSyncStatus.php:L1 | neighbors=[1cdd121 Add independent property portal…]
- "en_messages": "messages.php" | kind=code-symbol | source=themes/real-estate-default/resources/lang/en/messages.php:L1 | neighbors=[2d8dfb2 Integrate real estate theme and…]
- "enforcement_twofactorpolicy_twofactorpolicy_requiredfor": ".requiredFor()" | kind=code-symbol | source=modules/two-factor-authentication/src/Enforcement/TwoFactorPolicy.php:L10 | neighbors=[TwoFactorPolicy]
- "entity_composer_installer": "liberusoftware/composer-installer" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Module-repo-first source of truth (§3.1)]
- "entity_coverage_scripts": "scripts/measure-coverage and set-coverage-thresholds" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Per-package coverage ratchet]
- "entity_migrate_testbench_script": "scripts/migrate-testbench" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[Per-package coverage ratchet]
- "entity_searcher_registry": "SearcherRegistry" | kind=entity | source=docs/CONFORMANCE.md | neighbors=[search-demo package]
- "entity_set_locale_middleware": "SetLocale middleware" | kind=entity | source=CLAUDE.md | neighbors=[LanguageSwitcher (localization-core-liv…]
- "entity_sweep_ai": "Sweep AI automation" | kind=entity | source=sweep.yaml | neighbors=[Sweep issue template]
- "entity_tests_gitkeep": "tests/.gitkeep is load-bearing" | kind=entity | source=CLAUDE.md | neighbors=[Packages are standalone-testable]
- "enums_currencyrole": "CurrencyRole.php" | kind=code-symbol | source=modules/currency-context/src/Enums/CurrencyRole.php:L1 | neighbors=[75f7818 Bootstrap application from Libe…]
- "events_identityevent_identityevent_construct": ".__construct()" | kind=code-symbol | source=modules/identity-core/src/Events/IdentityEvent.php:L12 | neighbors=[IdentityEvent]
- "events_lettingcreated_lettingcreated_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/Events/LettingCreated.php:L11 | neighbors=[LettingCreated]
- "events_lettingstatuschanged_lettingstatuschanged_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-lettings/src/Domain/Events/LettingStatusChanged.php:L12 | neighbors=[LettingStatusChanged]
- "events_managementrecordcreated_managementrecordcreated_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/Events/ManagementRecordCreated.php:L11 | neighbors=[ManagementRecordCreated]
- "events_managementrecordstatuschanged_managementrecordstatuschanged_construct": ".__construct()" | kind=code-symbol | source=modules/real-estate-property-management/src/Domain/Events/ManagementRecordStatusChanged.php:L12 | neighbors=[ManagementRecordStatusChanged]
- "exceptions_currencymismatch_currencymismatch": "CurrencyMismatch" | kind=code-symbol | source=modules/currency-context/src/Exceptions/CurrencyMismatch.php:L7 | neighbors=[CurrencyMismatch.php]
- "exceptions_dependencyresolutionfailed_dependencyresolutionfailed": "DependencyResolutionFailed" | kind=code-symbol | source=modules/module-manager/src/Exceptions/DependencyResolutionFailed.php:L7 | neighbors=[DependencyResolutionFailed.php]
- "exceptions_invalidmanifest_invalidmanifest": "InvalidManifest" | kind=code-symbol | source=modules/module-manager/src/Exceptions/InvalidManifest.php:L7 | neighbors=[InvalidManifest.php]
- "exceptions_invalidtheme_invalidtheme": "InvalidTheme" | kind=code-symbol | source=modules/theme-support/src/Exceptions/InvalidTheme.php:L7 | neighbors=[InvalidTheme.php]
- "exceptions_unknowncurrency_unknowncurrency": "UnknownCurrency" | kind=code-symbol | source=modules/currency-context/src/Exceptions/UnknownCurrency.php:L7 | neighbors=[UnknownCurrency.php]
- "factories_connectedaccountfactory_connectedaccountfactory_definition": ".definition()" | kind=code-symbol | source=modules/identity-socialstream/database/factories/ConnectedAccountFactory.php:L17 | neighbors=[ConnectedAccountFactory]
- "factories_teamfactory_teamfactory_definition": ".definition()" | kind=code-symbol | source=modules/organizations-teams/database/factories/TeamFactory.php:L25 | neighbors=[TeamFactory]
- "factories_userfactory_userfactory_definition": ".definition()" | kind=code-symbol | source=database/factories/UserFactory.php:L23 | neighbors=[UserFactory]
- "factories_userfactory_userfactory_unverified": ".unverified()" | kind=code-symbol | source=database/factories/UserFactory.php:L41 | neighbors=[UserFactory]
- "factories_userfactory_userfactory_withconnectedaccount": ".withConnectedAccount()" | kind=code-symbol | source=database/factories/UserFactory.php:L72 | neighbors=[UserFactory]
- "factories_userfactory_userfactory_withpersonalteam": ".withPersonalTeam()" | kind=code-symbol | source=database/factories/UserFactory.php:L51 | neighbors=[UserFactory]

## Instructions

Write a single JSON object mapping each node id to a one-sentence description
to: /home/adminj0n/ihona/.graphify/description-instructions/batch-183.json

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
