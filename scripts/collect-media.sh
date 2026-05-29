#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
SOURCE_DIR="$ROOT_DIR/media"
TARGET_DIR="$ROOT_DIR/dist/assets/media"

mkdir -p "$TARGET_DIR"
if [[ -d "$SOURCE_DIR" ]]; then
    cp -R "$SOURCE_DIR/." "$TARGET_DIR/"
fi

echo "Collected media into ${TARGET_DIR#$ROOT_DIR/}"
