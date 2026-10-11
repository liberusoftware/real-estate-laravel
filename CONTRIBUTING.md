# Contributing to Liberu Real Estate

Thank you for your interest in contributing to Liberu Real Estate. This document provides guidelines and instructions for contributing.

## Before You Start

- Create a new branch from `main` for every change
- Keep changes focused on a single feature or fix
- Open an issue first for significant changes to discuss the approach

## Development Setup

1. Fork and clone the repository
2. Install PHP dependencies: `composer install`
3. Install JavaScript dependencies: `npm install`
4. Copy the environment file: `cp .env.example .env`
5. Generate the application key: `php artisan key:generate`
6. Run database migrations: `php artisan migrate`
7. Build frontend assets: `npm run build`

## Running Tests

- Run the full test suite: `vendor/bin/pest`
- Run code style checks: `vendor/bin/pint --test`
- Run static analysis: `vendor/bin/phpstan analyse`

## Code Style

- Code style is enforced by [Laravel Pint](https://laravel.com/docs/pint)
- Static analysis is performed by [PHPStan](https://phpstan.org/)
- Run `vendor/bin/pint` to automatically fix style issues

## Pull Request Process

1. Ensure all tests pass and code style checks are clean
2. Update documentation for any changed functionality
3. Reference any related issues in the PR description
4. A maintainer will review your PR and provide feedback

## Documentation Requirements

- Update relevant documentation in the `docs/` directory for any new features
- Include migration guides for breaking changes
- Document new configuration options

## Security

Please review our [SECURITY.md](SECURITY.md) for information on reporting vulnerabilities. Do not open public issues for security concerns.
