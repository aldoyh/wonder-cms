# GitHub Actions

`.github/workflows/publish.yml` runs on pushes to `main` and manual dispatches. It installs PHP 8.3, hydrates WonderCMS content, builds static output, collects media, validates the result, uploads `dist/` as an artifact, and runs the here.now upload and publish scripts.
