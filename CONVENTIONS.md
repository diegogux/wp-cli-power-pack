# CONVENTIONS (JB)

These conventions keep all personal projects consistent and company‑neutral.

**Author:** James Bregenzer — Full‑Stack Developer  
**Site:** https://jamesbregenzer.com

---

## 1) Namespaces & Prefixes
- **PHP Namespace:** `JB\<Project>\...` (e.g., `JB\WPPowerPack\Commands`)
- **Composer Autoload:** PSR‑4 → `"JB\\<Project>\\": "src/"`
- **WordPress Functions:** `jb_<slug>_` (e.g., `jb_power_pack_register()`)
- **CSS:** `jb-<block>` (e.g., `.jb-card`, `.jb-focus-ring`)
- **JS/Node Package:** `jb-<slug>`
- **CLI env vars/flags:** `JB_<UPPERCASE_NAME>` (e.g., `JB_DRY_RUN=1`)

## 2) Repo & Files
- Root includes: `README.md`, `CHANGELOG.md`, `ROADMAP.md`, `VERSION`, `LICENSE`, `.github/`, `src/`, `tests/`
- **Semantic Versioning** with tags (`v0.1.0`, `v0.2.0`, …)
- Keep `CHANGELOG.md` human‑readable (Added/Changed/Fixed)

## 3) Commits
Use **Conventional Commits**:
- `feat: add <thing>`
- `fix: correct <issue>`
- `docs: update readme/examples`
- `chore(ci): adjust workflow`
- `refactor: internal change`

## 4) Coding Notes
- PHP ≥ 8.0; strict types when practical; small classes
- Avoid singletons; prefer DI or static factories for CLI commands
- Provide `--format=json` for commands that print tabular data
- Respect `WP_CLI` best practices; `@when after_wp_load` where needed

## 5) Docs & Badges
At top of `README.md`:
```md
![CI](https://github.com/<USER>/<REPO>/actions/workflows/ci.yml/badge.svg)
![Release](https://img.shields.io/github/v/release/<USER>/<REPO>?display_name=tag)
![License: MIT](https://img.shields.io/badge/License-MIT-blue.svg)
```
Replace `<USER>/<REPO>` accordingly.

## 6) Privacy & Branding
- Never reference client/company names.
- Use only: **James Bregenzer — Full‑Stack Developer**, `https://jamesbregenzer.com`.

## 7) Release Playbook (short)
1. Update `VERSION` and `CHANGELOG.md`.
2. Zip **repo contents** (not parent folder) if uploading via UI.
3. Commit & tag (e.g., `v0.2.0`).
4. Draft GitHub Release and paste changelog.

---

### Example: Command Registration
```php
namespace JB\WPPowerPack;

final class Bootstrap {
    public static function register_commands(): void {
        if ( ! class_exists('\\WP_CLI') ) { return; }
        \WP_CLI::add_command( 'site:summary', Commands\SiteSummaryCommand::class );
    }
}
```
