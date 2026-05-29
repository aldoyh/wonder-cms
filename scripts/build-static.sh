#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
DIST_DIR="$ROOT_DIR/dist"
HOST="${HOST:-127.0.0.1}"
PORT="${PORT:-8088}"
BASE_URL="http://$HOST:$PORT"
ROUTES=("/" "/en/" "/en/about/" "/en/contact/" "/ar/" "/ar/about/" "/ar/contact/")

rm -rf "$DIST_DIR"
mkdir -p "$DIST_DIR"

php "$ROOT_DIR/scripts/hydrate.php"
SERVER_LOG="$(mktemp)"
php -S "$HOST:$PORT" "$ROOT_DIR/scripts/router.php" -t "$ROOT_DIR/cms" > "$SERVER_LOG" 2>&1 &
SERVER_PID=$!
trap 'kill "$SERVER_PID" >/dev/null 2>&1 || true; rm -f "$SERVER_LOG"' EXIT

for attempt in {1..40}; do
    if curl -fsS "$BASE_URL/" >/dev/null 2>&1; then
        break
    fi

    if [[ "$attempt" == "40" ]]; then
        echo "PHP preview server did not become ready." >&2
        exit 1
    fi

    sleep 0.1
done

for route in "${ROUTES[@]}"; do
    if [[ "$route" == "/" ]]; then
        target="$DIST_DIR/index.html"
    else
        target="$DIST_DIR${route}index.html"
    fi

    mkdir -p "$(dirname "$target")"
    curl -fsS "$BASE_URL$route" | sed "s#$BASE_URL##g" > "$target"
    echo "Exported $route -> ${target#$ROOT_DIR/}"
done

mkdir -p "$DIST_DIR/themes/herenow/css"
cp -R "$ROOT_DIR/cms/themes/herenow/css/." "$DIST_DIR/themes/herenow/css/"
mkdir -p "$DIST_DIR/files"
cp -R "$ROOT_DIR/cms/data/files/." "$DIST_DIR/files/" 2>/dev/null || true
