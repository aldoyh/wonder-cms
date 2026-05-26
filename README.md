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

## Target layout

```text
cms/                         WonderCMS source
content/en/                  English source pages
content/ar/                  Arabic source pages
media/                       Source media
scripts/                     Build helpers
docs/                        Documentation
dist/                        Generated output
.github/workflows/publish.yml
```

## Goals

- Fresh WonderCMS source in `cms/`.
- English and Arabic boilerplate pages.
- RTL support for Arabic.
- LTR support for English.
- Language switcher.
- SEO and hreflang metadata.
- Static export into `dist/`.
- Media copied into `dist/assets/media/`.
- GitHub Actions build workflow.
- here.now Drive upload and Sites release scripts.

## Local target commands

```bash
bash scripts/dev-serve.sh
bash scripts/build-static.sh
bash scripts/collect-media.sh
bash scripts/validate-static.sh
```

## Implementation brief

See `PROJECT_BRIEF.md`.
