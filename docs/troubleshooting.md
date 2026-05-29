# Troubleshooting

## The local server does not start

Check that PHP is installed and that port `8088` is free, or set a different port:

```bash
PORT=8090 bash scripts/dev-serve.sh
```

## Static validation fails

Run the full local build sequence again:

```bash
bash scripts/build-static.sh
bash scripts/collect-media.sh
bash scripts/validate-static.sh
```
