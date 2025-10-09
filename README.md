# WP-CLI Power Pack

A small collection of pragmatic WP-CLI commands for everyday WordPress ops.

**Author:** James Bregenzer — Full-Stack Developer  
**Site:** https://jamesbregenzer.com  
**License:** MIT

---

## Why
This project explores opinionated, minimal commands that speed up common
diagnostics and environment checks, designed for clarity and portability.

## Quick Start

1. Ensure you have WP-CLI installed and working: `wp --info`
2. Clone or download this repo into your WordPress install (anywhere on the same filesystem).
3. Install dependencies (for autoloading when used via Composer, optional).

**Composer (optional):**
```bash
composer install
```

**Register commands (auto-loaded via bootstrap):**
- If used as a drop-in mu-plugin: copy `bootstrap/power-pack-loader.php` to `wp-content/mu-plugins/`.
- If used as a Composer package, the autoloader will include `bootstrap/cli.php`.

## Included Commands

### `wp site:summary`
Prints a concise overview of the current WordPress environment (versions, theme, users, multisite status).

**Examples**
```bash
wp site:summary
wp site:summary --format=json
```

**Options**
- `--format=<table|json>`  (default: `table`)

## Status
Actively maintained on a 4–6 week rotation. See [CHANGELOG](./CHANGELOG.md) and [ROADMAP](./ROADMAP.md).

## Contributing
Issues and PRs welcome. Keep changes small and focused; follow Conventional Commits.

## Security
This repo contains no network calls and reads public WordPress APIs only.
