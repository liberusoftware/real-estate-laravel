# Liberu Real Estate Default Theme

> A warm, responsive, accessible property portal experience for Liberu Real Estate.

[![PHP](https://img.shields.io/badge/PHP-8.5-777BB4?logo=php&logoColor=white)](https://www.php.net/) [![Latest release](https://img.shields.io/github/v/release/liberusoftware/theme-real-estate-default?sort=semver)](https://github.com/liberusoftware/theme-real-estate-default/releases/latest) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

## Purpose and scope

`theme-real-estate-default` is presentation only. It composes the Liberu `default` and `base` parent themes, owns real-estate visual identity and view composition, and never queries module tables, replaces policies, or implements domain workflows.

It is optimized for `liberusoftware/real-estate-laravel:^3.0` and remains compatible with Liberu hosts that provide the declared theme support contract. Missing optional modules fall back to empty, server-rendered states.

## Installation and selection

```bash
composer require liberusoftware/theme-real-estate-default
npm install
npm run build
```

The Liberu Composer installer places the package at `/themes/real-estate-default`. Commit that installed directory and the lockfile in a consuming application. Select it through trusted host configuration:

```dotenv
THEME_DEFAULT=real-estate-default
THEME_PUBLIC=real-estate-default
```

The theme inherits `default`, then `base`, and uses the host’s configured safe fallback when it is unavailable or incompatible.

## Surfaces and components

- `layouts.app`: semantic document structure, skip link, responsive navigation, metadata, content, and footer regions
- `pages.home`: property-focused hero, search, featured properties, and value proposition composition
- `modules/real-estate/properties/show`: property detail extension point
- `components/property-card`: image, price, location, bedrooms, bathrooms, status, and empty-image fallback
- `components/property-grid`: responsive collection and no-results state
- `components/search-form`: accessible location, type, budget, and progressive search controls
- `components/feature-card`: reusable content block for module-neutral value propositions

Stable extension points include `real-estate.properties.card`, `real-estate.properties.grid`, `real-estate.properties.search`, `modules.real-estate.properties.show`, and `module-extension-points`. Module actions, validation, authorization, API contracts, and Livewire state remain owned by their corresponding packages.

## Design system

Tailwind CSS v4 and CSS custom properties provide semantic tokens for canvas, surfaces, text, borders, primary action, focus, error, warning, success, disabled, typography, spacing, radius, motion, elevation, breakpoints, and layering. Components consume tokens rather than hard-coded brand values.

The package supports:

- light and dark color modes, including explicit `data-theme` overrides;
- high-contrast and forced-colors modes;
- responsive reflow at small, medium, large, and extra-large layouts;
- keyboard navigation, visible focus, skip links, semantic landmarks, labels, and status roles;
- reduced motion and graceful operation without JavaScript;
- LTR and RTL direction through logical CSS properties;
- translated visible strings and locale-aware host-provided values;
- responsive image dimensions, lazy loading below the fold, meaningful alternatives, and no third-party tracking or external media.

## Assets and performance

The manifest is the only asset entry-point index. `resources/css/app.css` and `resources/js/app.js` are built by Vite and Tailwind; generated output is not committed. The budgets are 80 KiB compressed CSS and 40 KiB compressed JavaScript. Logos are original SVG assets with light/dark variants under `resources/logos/`.

## Testing and quality

The canonical PHP runner is Pest 5. The package includes manifest, provider, asset, accessibility, responsive, parent-fallback, and boundary tests:

```bash
composer install
composer test
composer test:coverage
npm install
npm run build
```

The independent repository runs Install, Tests, Visual, and Compatibility workflows. Visual evidence covers responsive CSS, reduced motion, forced colors, RTL, and semantic markup; browser-level screenshots can be added as the host’s visual runner becomes available. Meaningful owned PHP is required to reach 100% line coverage.

## Compatibility and fallback

The optimized host is `liberusoftware/real-estate-laravel`. On a compatible non-optimized Liberu host, the theme requires the theme-support contract and parent themes; unavailable real-estate data renders an empty state, and unavailable optional assets use the parent or application fallback. It does not provide React, Vue, Nuxt, mobile, or other deferred adapters in this release.

## Security, privacy, and licensing

The theme contains no credentials, analytics, advertising, external embeds, or privileged data. Output is escaped by Blade by default. CSP, CSRF, consent, and secure asset delivery remain host responsibilities. Report security issues privately to `security@liberusoftware.com`. This package is MIT licensed; see [LICENSE.md](LICENSE.md).

## Contributing and releases

Use the existing token names and extension points, add render/accessibility evidence for visual changes, and update [CHANGELOG.md](CHANGELOG.md) and [UPGRADING.md](UPGRADING.md). Releases use semantic versioning; breaking changes to tokens, slots, view names, or asset entry points require a major version.
