# Release Playbook

**Project:** WP-CLI Power Pack  
**Author:** James Bregenzer — Full-Stack Developer (https://jamesbregenzer.com)

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
