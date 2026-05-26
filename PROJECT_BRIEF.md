# Project Brief

## Objective

Create a production-ready bilingual WonderCMS starter for a small static-published website.

WonderCMS is used as the PHP editing and generation source. The live public output is static HTML and assets generated into `dist/`.

## Source CMS

- Add fresh WonderCMS source under `cms/`.
- Keep WonderCMS core changes minimal.
- Put project-specific behavior in scripts, theme files, and content files.

## Languages

Create a sample bilingual site:

- English: `content/en/`
- Arabic: `content/ar/`

Required pages:

- Home
- About
- Contact

Required routes after export:

- `/`
- `/en/`
- `/en/about/`
- `/en/contact/`
- `/ar/`
- `/ar/about/`
- `/ar/contact/`

## Frontend requirements

- Clean minimal responsive layout.
- RTL support for Arabic.
- LTR support for English.
- Language switcher.
- SEO title and description per page.
- hreflang links for matching pages.
- Sensible default typography.

## Media workflow

- Put source media in `media/`.
- Copy publishable media into `dist/assets/media/`.
- Keep image, video, audio, document, font, JSON, XML, CSS, and JS assets intact.

## Scripts

Create:

- `scripts/dev-serve.sh`
- `scripts/hydrate.php`
- `scripts/build-static.sh`
- `scripts/collect-media.sh`
- `scripts/validate-static.sh`
- `scripts/upload-drive.sh`
- `scripts/publish-here-now.sh`
- `scripts/clean.sh`

## Build behavior

The build should:

1. Prepare content.
2. Start a local PHP server for WonderCMS.
3. Crawl the generated site.
4. Write static files to `dist/`.
5. Copy media files.
6. Validate generated output.

## Validation

Validation should confirm:

- `dist/index.html` exists.
- English pages exist.
- Arabic pages exist.
- media folder exists after collection.
- generated output does not contain PHP source files.
- generated output does not contain local temporary files.

## CI workflow

Create `.github/workflows/publish.yml`.

Workflow requirements:

- Run on push to `main`.
- Support manual workflow run.
- Use PHP 8.3.
- Install common shell tools required for crawling and copying.
- Run hydrate, build, media collection, and validation.
- Upload `dist/` as an artifact.
- Run here.now upload and release scripts.

## Documentation

Create:

- `docs/architecture.md`
- `docs/local-development.md`
- `docs/github-actions.md`
- `docs/herenow-deployment.md`
- `docs/bilingual-content.md`
- `docs/media-workflow.md`
- `docs/security.md`
- `docs/troubleshooting.md`

## Pull request

Create a branch and open a PR titled:

`Add WonderCMS bilingual here.now publishing pipeline`
