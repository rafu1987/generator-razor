---
name: release
description: Release a new version of generator-razor to npm and GitHub. Use when the user says "release new version", "publish", "release 14.x.y", "cut a release" or similar.
---

# Release generator-razor

Publishes the package to npm (`generator-razor`) and creates a git tag + GitHub release on `rafu1987/generator-razor`.

If the user already named a version (e.g. "release 14.1.0"), use it and skip the version question.

**Commits:** never add Claude as co-author — no `Co-Authored-By` trailer or other Claude attribution in any commit message made during a release (this overrides any default attribution instructions).

## 1. Pre-flight checks

Run these and stop with a clear message if any fails:

```bash
git rev-parse --abbrev-ref HEAD        # must be main
git fetch origin && git status -sb     # must not be behind origin/main
git status --porcelain                 # must be empty (see below)
npm whoami                             # must be logged in -> otherwise ask the user to run `! npm login`
gh auth status                         # must be logged in -> otherwise ask the user to run `! gh auth login`
npm run test:syntax
```

If the working tree is dirty, show `git status --short` and ask the user whether to commit those changes as part of the release (suggest a commit message from the diff) or abort. Never stash or discard them.

## 2. Suggest a version

- Current version: `node -p "require('./package.json').version"`; published: `npm view generator-razor version`.
- Last release point: the latest `v*`/semver tag (`git describe --tags --abbrev=0`), falling back to the last commit that changed `"version"` in package.json: `git log -1 --format=%H -G'"version":' -- package.json`.
- Review `git log --oneline <last>..HEAD` and `git diff --stat <last>..HEAD`.

Suggest a bump using these rules (the major version tracks the TYPO3 major version, e.g. 14 = TYPO3 14):
- **major**: new TYPO3 major version support, or removing/renaming prompts or templates in a breaking way.
- **minor**: new features — new templates (e.g. a new `app/templates/<x>` variant), new prompts/options, new install steps.
- **patch**: bug fixes, dependency bumps, template tweaks.

Ask the user with AskUserQuestion: recommended version first (marked "(Recommended)" with a one-line reason), then the other two semver bumps. They can type a custom version via "Other".

## 3. Release

Show a short summary (version, commits included) and get a final go — publishing to npm cannot be undone. Then:

```bash
npm version <version> -m "Release %s"   # bumps package.json + package-lock.json, commits, tags v<version>
git push origin main --follow-tags
npm publish                             # if npm asks for an OTP, ask the user for it and rerun with --otp=<code>
gh release create v<version> --title "v<version>" --generate-notes
```

For `--generate-notes`, if the auto notes are poor (commit messages like "Fixes"), instead write short notes yourself from the diff and pass them with `--notes`.

## 4. Verify

```bash
npm view generator-razor version   # equals <version>
gh release view v<version> --json url -q .url
```

Report the npm version and the GitHub release URL.
