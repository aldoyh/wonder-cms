# WonderCMS Bilingual Static Publisher

A bilingual WonderCMS starter that uses GitHub as the source repository, GitHub Actions as the build runner, and here.now as the final static publishing target.

## Architecture

```text
GitHub repository
  -> GitHub Actions
  -> PHP local build server
  -> static export into dist
  -> media copy into dist/assets/media
  -> here.now Drive storage
  -> here.now Sites release
```

## Layout

```text
cms/                         WonderCMS source and custom theme
content/en/                  English source pages
content/ar/                  Arabic source pages
media/                       Source media
scripts/                     Build helpers
docs/                        Documentation
dist/                        Generated output, not committed
.github/workflows/publish.yml
```

## Local commands

```bash
bash scripts/dev-serve.sh
bash scripts/build-static.sh
bash scripts/collect-media.sh
bash scripts/validate-static.sh
HERENOW_DRY_RUN=1 bash scripts/upload-drive.sh
HERENOW_DRY_RUN=1 bash scripts/publish-here-now.sh
```

The generated routes are `/`, `/en/`, `/en/about/`, `/en/contact/`, `/ar/`, `/ar/about/`, and `/ar/contact/`.

## Implementation brief

See `PROJECT_BRIEF.md`.
