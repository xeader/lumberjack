# Lumberjack
A [Wordpress](https://www.wordpress.org) boilerplate with modern development tools, easier configuration, and an improved folder structure
based on [Bedrock](https://roots.io/bedrock) by [Roots](https://roots.io), made by [Xeader](https://www.xeader.com) with frontend theme boilerplate based on Blendid-plus

## Requirements

- PHP >= 7.2
- Composer - [Install](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
- memory_limit >= 512M
- upload_max_filesize >= 20M
- php-imagick >= 3.4.4 
- ImageMagick >= 7.0

## Setup

- Database variables
  - `DB_NAME` - Database name
  - `DB_USER` - Database user
  - `DB_PASSWORD` - Database password
  - `DB_HOST` - Database host
  - Optionally, you can define `DATABASE_URL` for using a DSN instead of using the variables above (e.g. `mysql://user:password@127.0.0.1:3306/db_name`)
- `WP_ENV` - Set to environment (`development`, `staging`, `production`)
- `WP_HOME` - Full URL to WordPress home (https://example.com)
- `WP_SITEURL` - Full URL to WordPress including subdirectory (https://example.com/wp)
- `AUTH_KEY`, `SECURE_AUTH_KEY`, `LOGGED_IN_KEY`, `NONCE_KEY`, `AUTH_SALT`, `SECURE_AUTH_SALT`, `LOGGED_IN_SALT`, `NONCE_SALT`
  - Generate with [wp-cli-dotenv-command](https://github.com/aaemnnosttv/wp-cli-dotenv-command)
  - Generate with [our WordPress salts generator](https://roots.io/salts.html)

## Frontend / Theme

*Compile frontend code to /frontend/public*  
```bash
yarn build
```

*Run a PHP server to /frontend/public*
```bash
yarn serve
```

*Build frontend project and watch for changes*
```bash
yarn watch
```

*Builds frontend project (and watch for changes) serving the Wordpress application*
```bash
yarn wordpress-hot
```

*Builds frontend project and deploy to Wordpress assets folder*
```bash
yarn wordpress
```
