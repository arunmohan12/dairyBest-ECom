# Local MySQL dumps

Place your catalog dump here as `local.sql`. It is gitignored.

The dump is the source of truth for products, brands, categories, and translations. App migrations do not match the live schema; **do not run `artisan migrate` after importing** if those tables already exist in the dump.

```bash
# from the project root, with Sail running
./database/dumps/import.sh
# drop existing tables first if a previous import failed halfway:
./database/dumps/import.sh --fresh
# or
./vendor/bin/sail artisan db:import-dump --force --fresh
```

If the dump uses a different database name than `laravel`, either edit the dump’s `USE`/`CREATE DATABASE` statements or pass credentials via `.env` (`DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

If the dump is catalog-only and Laravel’s `sessions`, `cache`, `jobs`, and `users` tables are missing, create those with the default Laravel migrations *before* importing, or add those tables to the dump. Do not re-run the catalog table migrations (`m_products`, `mcategories`, `m_brands`, `languages`, `subcategories`) over an imported schema.
