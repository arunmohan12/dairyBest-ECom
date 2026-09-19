# DairyBest catalog

Laravel 12 product catalog (home, brand listing, product detail, about/contact). Local development uses **Laravel Sail** (Docker) and **MySQL**.

## Requirements

- Docker Engine with Compose
- A MySQL dump of the catalog database (not in git)

PHP, Composer, and Node are optional on the host. Sail’s containers provide them after `composer install`.

## First-time setup

From the project root:

```bash
# If you do not have PHP/Composer locally:
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    composer install --ignore-platform-reqs

cp .env.example .env

docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php84-composer:latest \
    php artisan key:generate

./vendor/bin/sail up -d
./vendor/bin/sail npm install
```

Copy your dump to `database/dumps/local.sql`, then import. **Do not run `artisan migrate` after a full dump** — catalog migrations do not match the live schema and would conflict with existing tables.

```bash
./database/dumps/import.sh --fresh
# or: ./vendor/bin/sail artisan db:import-dump --force --fresh
```

If the dump is catalog-only and Laravel `sessions` / `cache` / `jobs` tables are missing, create those tables from a dump that includes them, or ask before running any migrations.

## Everyday commands

```bash
./vendor/bin/sail up -d
./vendor/bin/sail npm run dev
# or, if Composer is available on the host:
composer run sail-dev
```

- App: http://localhost (`APP_PORT`, default 80)
- Vite: http://localhost:5173 (`VITE_PORT`)
- MySQL on the host: `127.0.0.1:3306` (`FORWARD_DB_PORT`), user `sail`, password `password`, database `laravel`

Inside containers, `DB_HOST` must stay `mysql`.

Stop with `./vendor/bin/sail stop`.

## Dump location

See [database/dumps/README.md](database/dumps/README.md). SQL files in that folder are gitignored.
