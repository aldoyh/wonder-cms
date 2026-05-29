#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
rm -rf "$ROOT_DIR/dist" "$ROOT_DIR/.cache" "$ROOT_DIR/.tmp" "$ROOT_DIR/tmp" "$ROOT_DIR/logs"
echo "Removed generated build directories."
