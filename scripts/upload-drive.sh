#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
DIST_DIR="$ROOT_DIR/dist"
MANIFEST="$DIST_DIR/herenow-manifest.json"
DRY_RUN="${HERENOW_DRY_RUN:-1}"

if [[ ! -d "$DIST_DIR" ]]; then
    echo "dist/ does not exist. Run scripts/build-static.sh first." >&2
    exit 1
fi

python3 - <<'PY' "$DIST_DIR" "$MANIFEST" "${HERENOW_SLUG:-}" "$DRY_RUN"
import hashlib, json, pathlib, sys, time

dist = pathlib.Path(sys.argv[1])
manifest = pathlib.Path(sys.argv[2])
slug = sys.argv[3]
dry_run = sys.argv[4] != '0'
files = []
for path in sorted(p for p in dist.rglob('*') if p.is_file()):
    if path.name == 'herenow-manifest.json':
        continue
    relative = path.relative_to(dist).as_posix()
    files.append({
        'path': relative,
        'bytes': path.stat().st_size,
        'sha256': hashlib.sha256(path.read_bytes()).hexdigest(),
    })
manifest.write_text(json.dumps({
    'slug': slug,
    'dryRun': dry_run,
    'generatedAt': time.strftime('%Y-%m-%dT%H:%M:%SZ', time.gmtime()),
    'fileCount': len(files),
    'files': files,
}, indent=2) + '\n')
print(f"Wrote {manifest.relative_to(dist.parent)} with {len(files)} files.")
PY

if [[ "$DRY_RUN" != "0" ]]; then
    echo "Dry run enabled; skipping here.now Drive upload."
    exit 0
fi

: "${HERENOW_API_KEY:?HERENOW_API_KEY is required when HERENOW_DRY_RUN=0}"
: "${HERENOW_SLUG:?HERENOW_SLUG is required when HERENOW_DRY_RUN=0}"
echo "Prepared here.now Drive upload for $HERENOW_SLUG. Add the production API call when endpoint details are available."
