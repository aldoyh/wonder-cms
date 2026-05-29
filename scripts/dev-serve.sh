#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
HOST="${HOST:-127.0.0.1}"
PORT="${PORT:-8088}"

php "$ROOT_DIR/scripts/hydrate.php"
echo "Serving WonderCMS at http://$HOST:$PORT"
exec php -S "$HOST:$PORT" "$ROOT_DIR/scripts/router.php" -t "$ROOT_DIR/cms"
