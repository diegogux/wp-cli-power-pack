# Release Playbook

**Project:** WP-CLI Power Pack  
**Author:** James Bregenzer — Full-Stack Developer (https://jamesbregenzer.com)

## TL;DR (Releases)

1. Bump `VERSION` (SemVer).
2. Update `CHANGELOG.md` (date + bullets).
3. Commit: `docs: prepare release vX.Y.Z`
4. Tag `vX.Y.Z` (UI or `git tag vX.Y.Z && git push origin vX.Y.Z`).
5. GitHub → Releases → Draft → Title `vX.Y.Z` → paste CHANGELOG → Publish.
6. Verify badges (CI/Release) in README.

## Weekly Update Steps

1) Update `VERSION` to the new version (e.g. 0.1.0 -> 0.2.0).
2) Add a new section to `CHANGELOG.md` with the date and bullet points.
3) Zip the repo **contents** (not the parent folder).
4) Upload files to GitHub → commit → create tag (e.g., `v0.2.0`) → Draft GitHub Release.
5) Paste the `CHANGELOG` entry into the release notes.
6) Ensure README badges/links/demos are current.

## Conventional Commits
- feat: add new command or option
- fix: correct behavior or error message
- docs: update readme/examples
- chore(ci): adjust CI job
- refactor: internal code change
