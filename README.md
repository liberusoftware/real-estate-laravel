# Liberu Real Estate

> A professional, modular Laravel platform for property teams, listings, viewings, offers, progression, and portal publishing.

[Software](https://liberusoftware.com) · [Hosting](https://liberuhosting.com) · [Services](https://liberuservices.com) · [Liberu Group](https://liberugroup.com)

[![PHP](https://img.shields.io/badge/PHP-8.5-777BB4?logo=php&logoColor=white)](https://www.php.net/) [![Laravel](https://img.shields.io/badge/Laravel-13-FF2D20?logo=laravel&logoColor=white)](https://laravel.com/) [![Filament](https://img.shields.io/badge/Filament-5-FDAE4B)](https://filamentphp.com/) [![Livewire](https://img.shields.io/badge/Livewire-4-FB70A9)](https://livewire.laravel.com/)

[![Install](https://github.com/liberusoftware/real-estate-laravel/actions/workflows/install.yml/badge.svg?branch=main)](https://github.com/liberusoftware/real-estate-laravel/actions/workflows/install.yml) [![Tests](https://github.com/liberusoftware/real-estate-laravel/actions/workflows/tests.yml/badge.svg?branch=main)](https://github.com/liberusoftware/real-estate-laravel/actions/workflows/tests.yml) [![Docker](https://github.com/liberusoftware/real-estate-laravel/actions/workflows/docker.yml/badge.svg?branch=main)](https://github.com/liberusoftware/real-estate-laravel/actions/workflows/docker.yml) [![Coverage](https://codecov.io/gh/liberusoftware/real-estate-laravel/graph/badge.svg)](https://codecov.io/gh/liberusoftware/real-estate-laravel) [![Latest release](https://img.shields.io/github/v/release/liberusoftware/real-estate-laravel?sort=semver)](https://github.com/liberusoftware/real-estate-laravel/releases/latest) [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](LICENSE.md)

Liberu Real Estate is the deployable host application for a property business. It combines independently released domain, API, Filament, Livewire, and theme packages while keeping tenancy, teams, authentication, configuration, and application composition in one reliable host.

## What it provides

- Team-scoped properties, parties, instructions, listings, matching, viewings, offers, valuations, sales progression, marketing, and portal reporting
- Independent Rightmove, Zoopla, and OnTheMarket synchronization modules with provider-specific transport contracts
- Jetstream authentication, profiles, sessions, two-factor authentication, social login, teams, permissions, audit trails, settings, search, and notifications
- Filament administration and Livewire application surfaces assembled from optional presentation packages
- Responsive `theme-real-estate-default` styling with Tailwind CSS, accessible navigation, property cards, search, dark mode, RTL support, and safe fallback to the Liberu theme hierarchy
- Horizon, queues, scheduler, Pulse, Telescope, Octane, Reverb, Docker, Kubernetes, NGINX, and Supervisor deployment support

## Requirements

| Dependency | Supported version |
|---|---|
| PHP | 8.5 |
| Laravel | 13.x |
| Filament | 5.x |
| Livewire | 4.x |
| Composer | 2.x |
| Node.js | Latest stable release |
| Database | A Laravel-supported SQL database |

## Quick start

```bash
git clone https://github.com/liberusoftware/real-estate-laravel.git
cd real-estate-laravel
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run build
php artisan migrate
php artisan serve
```

Review `.env` before migrating. Use `php artisan migrate --seed` only when example data is wanted. Lerd users should follow the project’s `AGENTS.md` environment instructions.

## Package architecture

Each property capability is an independent Composer package with its own GitHub repository, release lifecycle, manifest, provider, documentation, and tests. Domain packages remain framework-neutral; API, Filament, and Livewire packages are optional adapters.

```text
Application composition
├── modules/       # Composer-installed real-estate and foundation modules
├── themes/        # Composer-installed themes, tracked for reproducibility
├── app/           # Host composition and integration
├── config/        # Enabled modules, themes, and application policy
└── tests/         # Cross-package and application tests
```

Real-estate package names use the `liberusoftware/real-estate-*` Composer and Packagist convention. Their independent GitHub source repositories use `liberusoftware/module-real-estate-*`. Themes use `liberusoftware/theme-*`; the featured theme is [`theme-real-estate-default`](https://github.com/liberusoftware/theme-real-estate-default).

Composer and `composer.lock` are the installation and version source of truth. Installed `/modules` and `/themes` contents are tracked so deployments and reviews can see the exact code that was resolved.

## Themes

The real-estate default theme extends the Liberu `default` and `base` themes through the manifest inheritance chain. Select it with:

```dotenv
THEME_DEFAULT=real-estate-default
THEME_PUBLIC=real-estate-default
```

It provides Blade and Livewire-compatible views, semantic design tokens, responsive Tailwind CSS, accessible states, progressive navigation JavaScript, localization, RTL and dark-mode behavior, and module extension points. See [theme architecture](docs/THEME_ARCHITECTURE.md) and the [theme package README](themes/real-estate-default/README.md).

## Development and verification

```bash
composer validate --strict
vendor/bin/pest
vendor/bin/pint --test
vendor/bin/phpstan analyse --no-progress --memory-limit=512M
XDEBUG_MODE=coverage php artisan test --coverage --min=100
composer test:coverage:expanded
npm audit
npm run build
```

Package repositories own their releases and CI. The application’s protected `main` branch requires Install, Tests, and Docker checks, while production releases use protected version tags or GitHub Releases.

## Documentation

- [Property architecture](docs/PROPERTY_ARCHITECTURE.md)
- [Module development](docs/MODULE_DEVELOPMENT.md)
- [Foundation compliance](docs/FOUNDATION_COMPLIANCE.md)
- [Theme architecture](docs/THEME_ARCHITECTURE.md)
- [Theme system](docs/THEME_SYSTEM.md)
- [Messaging architecture](docs/MESSAGING_ARCHITECTURE.md)
- [Search architecture](docs/SEARCH_ARCHITECTURE.md)
- [Localisation](docs/MULTI_LANGUAGE.md)
- [Notifications](docs/NOTIFICATIONS.md)

## Security

Do not report security vulnerabilities through public GitHub issues. Email `security@liberusoftware.com` with reproduction details and the affected version.

## License

This project is open-source software available under the [MIT License](LICENSE.md).

## Contributing

Focused, tested pull requests are welcome. Keep domain behavior in modules, presentation in the appropriate API/Filament/Livewire package or theme, update documentation and changelogs, and preserve tenant and team authorization boundaries.

## Contributors

Thank you to everyone who helps improve Liberu Real Estate. [View the contributors graph](https://github.com/liberusoftware/real-estate-laravel/graphs/contributors).


### Automatic module and theme publishing

`.github/workflows/sync-packages.yml` publishes packages changed under `modules/`
or `themes/` on pushes to `main`. A manual run reconciles all tracked packages.
Each package needs a `composer.json` with a `liberusoftware/*` name. Files are
copied from Git into the root of `liberusoftware/module-<directory>` or
`liberusoftware/theme-<directory>`. Where `.liberu-meta.json` defines a
`repositoryPrefix`, that design is authoritative (for example,
`modules/module-manager` becomes `module-module-manager`). Without a configured
prefix, an existing `module-` or `theme-` directory prefix is kept. Destination
history is preserved, deleted files are removed, and unchanged packages do not
receive another commit or release. Removing an entire package leaves its public
repository intact. This workflow makes tracked package edits publishable; install
checks still require the project's Composer dependencies to resolve to those
published package contents.

Configure these secrets in the `packagist` GitHub environment (or as repository
or organization secrets available to this repository):

- `MODULE_SYNC_TOKEN`: organization-authorized GitHub token able to create public
  repositories and read/write package contents and releases across the target
  repositories. Because package snapshots include `.github/workflows`, allow
  workflow writes too. A classic PAT needs `repo` and `workflow` scopes and an
  organization role permitted to create repositories. The default `GITHUB_TOKEN`
  cannot publish across these repositories.
- `PACKAGIST_USERNAME`: Packagist account that owns or maintains these packages.
- `PACKAGIST_API_TOKEN`: that account's **main** API token, required to submit
  new packages as well as update existing packages.

New packages start at their declared stable Composer version, or `v1.0.0`.
Existing packages use the highest stable repository tag: a higher declared
Composer version wins, `BREAKING CHANGE:` or `type!:` commits bump major,
`feat:` commits bump minor, and other changes bump patch. Only commits touching
the package since the last successful sync affect this decision. The first
automated run and manual runs reconcile all packages, so canceled or failed
runs cannot silently drop package changes. Tags and commits are
pushed atomically, then a GitHub release is created and the package is submitted
to or refreshed on Packagist. Rerunning a failed job completes publication
without issuing another release for the same contents. Concurrent pushes from
other projects are rejected instead of force-pushed; rerun the failed job.

The source project and its lockfile are not rewritten by publication. Different
projects publishing the same directory name share a destination repository;
coordinate their package contents. Run the publisher's local tests with
`python3 -m unittest discover -s .github/scripts -p 'test_sync_packages.py'`.
