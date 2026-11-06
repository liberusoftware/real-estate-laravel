# Generic domain integration

Source: closed [PR #1371](https://github.com/liberusoftware/real-estate-laravel/pull/1371), through `50b4b14e34d782006cf80b42bf76ccdb02b60719`. The earlier PR #1355 was already merged. This integration adapts the later work to current dependencies and keeps the application's existing capabilities.

## Included behavior

- Theme capability checks avoid rebuilding the module dependency graph for every rendered view, including build-time Wayfinder templates.
- English, Russian, Tajik and Uzbek admin translations; locale-aware navigation middleware; unique module overview URLs; responsive public forms and property browsing.
- Configured application currency for Filament money formatting, optional cached exchange rates, USD API prices, and metric prices alongside existing square-foot values.
- Property amenities persisted on creation and update; deal types including daily rentals; geographic Region → City → District reference data and admin CRUD; optional property agent assignment; tabbed property forms.
- Map bounding-box search, including viewports crossing the date line, and storefront galleries backed by existing media documents and storage URLs. List galleries use one document query per page.
- Lead capture from contact enquiries; team-scoped assignment and pipeline transitions driven by matching viewings and offers. Anonymous activity cannot advance an unrelated lead.
- Price-alert emails, saved-search notification emails, email marketing campaigns and their schedules.
- Read-only audit administration and tamper-evident property/offer changes; complete news CRUD; team ownership and user role escalation fixes; shared user/team navigation cluster.
- Registration intents mapped to configured roles, bearer-authenticated user rehydration, Sanctum session SSO, optional Google/Telegram sign-in, optional CRM lead sync, API throttling and optional Sentry error reporting.
- Scheduled backups of databases and runtime uploads, retention cleanup and monitoring; configurable worker capacity and private Reverb publishing endpoint; test environment guard before database-refresh traits run.

## Compatibility decisions

AR tours, all VR design packages, neighborhood reviews, property disclosures, existing statuses, all supported languages, document template/signing workflows, and all property-management resources remain available. No destructive drop, status-remapping, category-seeding, or media-moving migrations from the fork are included. Geography and publication statuses are additive; existing records are not rewritten.

`area_sqft` retains its existing square-foot meaning. `price_per_square_foot` remains in API responses; the new `price_per_square_meter` converts the area correctly. Existing media documents remain the gallery source, avoiding a forced migration of users' uploaded files to a different library.

The fork's logos, branded identifiers, domain/CORS allowlists, cached knowledge-graph artifacts, machine-specific process counts and disabled modules are not application defaults. The shared cluster package is local and has no dependency on a personal fork repository. Existing dependency versions are retained, including the current permission-package major version.

## Configuration and deployment

Run the normal Composer install and application migrations when deploying. New migrations add the lead table, geographic reference tables, optional geographic/agent property columns, signup intent, and saved-search notification timestamp. Existing migrations are unchanged. Grant the appropriate `ViewAny`, `Create`, `Update` and `Delete` permissions for Region, City and District; grant `ViewAny:ActivityLogEntry` to audit readers. Regenerate permission definitions through the application's normal Shield workflow.

- `APP_CURRENCY` sets the money-formatting default. `APP_LOCALE` and `app.supported_locales` control locale behavior; the admin switcher uses the full configured locale list.
- `PROPERTY_REFERENCE_PREFIX` defaults to `RE`. Existing deployments can set their previous prefix to retain the same displayed references; the year and numeric identifier format are preserved.
- `EXCHANGE_RATES_ENABLED=true` opts into the public exchange-rate provider. `EXCHANGE_RATE_API_URL` supports a `{base}` placeholder. `EXCHANGE_RATE_API_FALLBACK_URL` (same placeholder and response shape, default: the keyless AllRatesToday ECB endpoint, credit "Exchange rates by AllRatesToday" where its rates are shown) is tried only when the primary URL returns no rates; set it empty to disable. Failed lookups are cached briefly so an unavailable provider does not delay every listing on a page.
- Google sign-in becomes visible when `GOOGLE_CLIENT_ID` is configured; supply its secret and registered redirect URI too. Telegram requires `TELEGRAM_BOT_USERNAME` and `TELEGRAM_BOT_TOKEN` and the `/oauth/telegram/verify` callback.
- Stateless clients continue using bearer tokens. For session SSO, configure Sanctum's stateful domains, normal session cookie settings and the SPA CSRF-cookie handshake. `CORS_ALLOWED_ORIGINS` accepts comma-separated additional origins; `CORS_SUPPORTS_CREDENTIALS` is opt-in. No login endpoints are exempted from CSRF protection when using session authentication.
- `FRONTEND_TOKEN_NAME` defaults to `frontend`. An OAuth request with `spa=1` redirects to `FRONTEND_OAUTH_CALLBACK_URL` (default `/account/oauth-callback`), returning `token`, `id`, `name`, and `email` in the URL fragment. Clients should consume and immediately clear that fragment. Ordinary web OAuth responses retain their existing destinations.
- `identity.signup_roles` maps public registration intents to roles. `PUBLIC_TEAM_ID` selects the public registration team; the existing first-team fallback remains supported.
- CRM sync requires both `CRM_API_BASE_URL` and `CRM_API_TOKEN`; `CRM_EXTERNAL_KEY_PREFIX` defaults to `user-`. Sentry requires `SENTRY_LARAVEL_DSN`. These integrations do nothing until configured.
- `REVERB_INTERNAL_HOST`, `REVERB_INTERNAL_PORT` and `REVERB_INTERNAL_SCHEME` optionally select an internal publishing endpoint independently of public websocket settings. `HORIZON_MAX_PROCESSES` optionally tunes production capacity; `HORIZON_MEMORY_LIMIT` defaults to 256 MB to avoid repeated supervisor restarts.

Ensure a queue worker and scheduler are running through the deployment's existing process manager. Scheduled jobs use locks to avoid overlaps. SMTP, backup destinations and the required database dump binaries must be configured for the deployment. No production data migration, external CRM request or email delivery is needed to review these changes locally.
