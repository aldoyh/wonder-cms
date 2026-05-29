#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
DIST_DIR="$ROOT_DIR/dist"
REQUIRED_FILES=(
    "index.html"
    "en/index.html"
    "en/about/index.html"
    "en/contact/index.html"
    "ar/index.html"
    "ar/about/index.html"
    "ar/contact/index.html"
)

for file in "${REQUIRED_FILES[@]}"; do
    if [[ ! -f "$DIST_DIR/$file" ]]; then
        echo "Missing dist/$file" >&2
        exit 1
    fi
done

if [[ ! -d "$DIST_DIR/assets/media" ]]; then
    echo "Missing dist/assets/media" >&2
    exit 1
fi

if find "$DIST_DIR" -type f -name '*.php' | read -r php_file; then
    echo "Generated output contains PHP source: $php_file" >&2
    exit 1
fi

if find "$DIST_DIR" -type f \( -name '.DS_Store' -o -name '*.tmp' -o -name '*.log' \) | read -r temp_file; then
    echo "Generated output contains temporary file: $temp_file" >&2
    exit 1
fi

echo "Static output validation passed."
