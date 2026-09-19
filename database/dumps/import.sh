#!/usr/bin/env bash
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/../.." && pwd)"
cd "$ROOT"

DUMP="database/dumps/local.sql"
FRESH=0

for arg in "$@"; do
    case "$arg" in
        --fresh) FRESH=1 ;;
        *) DUMP="$arg" ;;
    esac
done

if [ ! -f "$DUMP" ]; then
    echo "Dump not found: $DUMP" >&2
    echo "Copy your MySQL dump to database/dumps/local.sql (see database/dumps/README.md)." >&2
    exit 1
fi

env_val() {
    local key="$1"
    local default="$2"
    if [ -f .env ]; then
        local line
        line="$(grep -E "^${key}=" .env | tail -n1 || true)"
        if [ -n "$line" ]; then
            echo "${line#*=}" | tr -d '"' | tr -d "'"
            return
        fi
    fi
    echo "$default"
}

DB_DATABASE="$(env_val DB_DATABASE laravel)"
DB_PASSWORD="$(env_val DB_PASSWORD password)"
DB_HOST="$(env_val DB_HOST mysql)"
DB_PORT="$(env_val DB_PORT 3306)"

# Root is required for triggers (SUPER / log_bin_trust_function_creators).
run_mysql() {
    if [ -n "${LARAVEL_SAIL:-}" ]; then
        mysql --host="$DB_HOST" --port="$DB_PORT" --user=root --password="$DB_PASSWORD" "$@"
    elif [ -x ./vendor/bin/sail ]; then
        ./vendor/bin/sail exec -T mysql mysql --user=root --password="$DB_PASSWORD" "$@"
    else
        echo "Sail is not available. Start Docker and run composer install first." >&2
        exit 1
    fi
}

echo "Importing $DUMP into ${DB_DATABASE} as root (no migrations will run)."

run_mysql -e "SET GLOBAL log_bin_trust_function_creators = 1;"

if [ "$FRESH" -eq 1 ]; then
    echo "Dropping and recreating database ${DB_DATABASE}."
    run_mysql -e "DROP DATABASE IF EXISTS \`${DB_DATABASE}\`; CREATE DATABASE \`${DB_DATABASE}\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
fi

run_mysql "$DB_DATABASE" < "$DUMP"

echo "Import finished. Do not run artisan migrate over this schema if catalog tables came from the dump."
