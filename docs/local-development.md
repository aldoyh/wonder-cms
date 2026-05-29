# Local development

Run the editable PHP preview:

```bash
bash scripts/dev-serve.sh
```

The script hydrates `cms/data/database.js` from `content/site.php` and starts PHP at `http://127.0.0.1:8088`.

Build static output locally:

```bash
bash scripts/build-static.sh
bash scripts/collect-media.sh
bash scripts/validate-static.sh
```
