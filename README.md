# reMarkable Connector

Sync your reMarkable cloud documents with Nextcloud.

## Description

This Nextcloud app connects your Nextcloud instance with your reMarkable cloud account, allowing you to sync documents between both platforms.

## Status

🚧 **Work in Progress** - This app is currently under development.

## Features (Planned)

- Sync documents from reMarkable cloud to Nextcloud
- Bi-directional sync support
- Automatic sync scheduling
- Manual sync triggers

## Installation

Place this app in `nextcloud/apps/remarkableconnector` and enable it through the Nextcloud apps interface.

## Development

Based on the modern Nextcloud app template with:
- Vue 3 + TypeScript frontend
- PHP 8.1+ backend
- Vite for build tooling

### Building

```bash
npm install
npm run build
```

## Resources

- reMarkable API: https://github.com/splitbrain/ReMarkableAPI
- Nextcloud developer docs: https://docs.nextcloud.com/server/latest/developer_manual

## License

AGPL-3.0-or-later
