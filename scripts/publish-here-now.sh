#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
MANIFEST="$ROOT_DIR/dist/herenow-manifest.json"
DRY_RUN="${HERENOW_DRY_RUN:-1}"

if [[ ! -f "$MANIFEST" ]]; then
    echo "Missing dist/herenow-manifest.json. Run scripts/upload-drive.sh first." >&2
    exit 1
fi

if [[ "$DRY_RUN" != "0" ]]; then
    echo "Dry run enabled; skipping here.now Sites release."
    exit 0
fi

: "${HERENOW_API_KEY:?HERENOW_API_KEY is required when HERENOW_DRY_RUN=0}"
: "${HERENOW_SLUG:?HERENOW_SLUG is required when HERENOW_DRY_RUN=0}"
echo "Prepared here.now Sites release for $HERENOW_SLUG. Add the production API call when endpoint details are available."
