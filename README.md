# WonderCMS + here.now Publishing Boilerplate

This repository is intended to become a bilingual WonderCMS starter that uses GitHub as the source of truth, GitHub Actions as the build/hydration pipeline, here.now Drive as the generated bundle/media storage layer, and here.now Sites as the final static publishing target.

## Target workflow

```text
GitHub repo
  -> GitHub Actions CI
  -> hydrate WonderCMS content and media
  -> boot PHP locally in CI
  -> generate/crawl static output
  -> collect images, video, audio, documents, fonts, JSON/XML assets
  -> upload /dist to here.now Drive
  -> publish the Drive version to here.now Sites
```

## Required architecture

- `/cms` contains a fresh copy of WonderCMS from `WonderCMS/wondercms`.
- `/content/en` contains English boilerplate content.
- `/content/ar` contains Arabic boilerplate content.
- `/media` contains source media files.
- `/dist` contains generated static output and must not be committed.
- `/scripts` contains hydration, build, media, validation, Drive upload, and publish scripts.
- `.github/workflows/publish.yml` builds and publishes the generated site.
- `docs/` contains full project documentation.

## Required secrets

Add these in GitHub repository settings before enabling publication:

```text
HERENOW_API_KEY
HERENOW_SLUG
```

## Important runtime rule

WonderCMS requires PHP for editing/building. The final live site published to here.now should be generated static output only.

## Codex task

Use the issue titled **Codex: Build WonderCMS bilingual here.now publishing pipeline** as the implementation brief.
