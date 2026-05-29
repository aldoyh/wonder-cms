# Architecture

WonderCMS is committed under `cms/` and used as the PHP editing and rendering layer. Project-specific behavior lives in source content, scripts, and the custom `herenow` theme so WonderCMS core stays easy to update.

The public site is generated into `dist/` and contains static HTML plus copied assets only.
