# Laravel guide for MERN developers

You know **MongoDB + Express + React + Node**. This project is **MySQL + Laravel (PHP) + Blade templates + static JS**. Same idea — a server handles HTTP, talks to a database, and returns HTML or JSON — but Laravel bundles a lot of what you would wire up manually in Express.

---

## MERN vs this stack (quick map)

| MERN concept | Laravel / this project equivalent |
|---|---|
| `package.json` | `composer.json` (PHP packages) + `package.json` (frontend tooling only) |
| `npm install` | `composer install` (PHP) and `npm install` (Vite/Tailwind) |
| `.env` | `.env` — same idea, different keys |
| Express app + routes | `routes/web.php` + Laravel router |
| Route handlers / controllers | `app/Http/Controllers/*.php` |
| Mongoose models / schemas | `app/Models/*.php` (Eloquent ORM) |
| React components | Blade views in `resources/views/` |
| `public/` static files | `public/` — **only folder browsers can hit directly** |
| `fetch('/api/...')` | Same, but many routes return **HTML fragments** instead of JSON |
| Next.js `getServerSideProps` | Controller method queries DB, passes data to a view |
| Middleware | `bootstrap/app.php` + middleware classes |
| Nodemon | `php artisan serve` or Laravel Sail (Docker) |
| Build step | Vite (`npm run dev` / `npm run build`) — lightly used here |

**PHP is not “inside React.”** The server renders HTML on the backend. JavaScript in `public/assets/js/` runs in the browser for interactivity (carousels, filters, mobile menu).

---

## What happens when someone visits the site

```
Browser  →  public/index.php  →  Laravel bootstrap  →  routes/web.php
                                                      →  Controller (optional)
                                                      →  Model / DB query (optional)
                                                      →  Blade view (HTML)
                                                      →  Browser
```

1. Every request hits **`public/index.php`** (like Express listening on a port, but via PHP-FPM/Apache in Docker).
2. Laravel loads **`bootstrap/app.php`**, which registers routes from **`routes/web.php`**.
3. A matching route runs a **controller method** or an inline closure.
4. The controller may query **MySQL** through **Eloquent models**.
5. Laravel renders a **Blade template** (`.blade.php`) into HTML and sends it back.

There is **no separate React SPA** in this repo. Pages are server-rendered HTML with sprinkles of jQuery/vanilla JS.

---

## Folder structure (what matters)

```
dairyBest-ECom/
├── app/
│   ├── Http/Controllers/     ← Express route handlers
│   │   ├── IndexController.php
│   │   └── TranslationController.php
│   └── Models/               ← Mongoose-style models (Eloquent)
│       ├── mProducts.php
│       ├── Mcategory.php
│       └── mBrands.php
├── bootstrap/app.php         ← App boot + route registration
├── config/                   ← App config (DB, session, etc.)
├── database/
│   └── dumps/                ← SQL dump import (this project uses a live DB dump)
├── public/                   ← Web root (like Express `public/`)
│   ├── index.php             ← Entry point
│   └── assets/               ← CSS, JS, images served directly
├── resources/views/          ← Blade templates (like JSX files that compile to HTML)
│   ├── welcome.blade.php     ← Home page
│   ├── innerpages/           ← About, contact, products, etc.
│   └── partials/             ← Reusable chunks (header, footer, product card)
├── routes/web.php            ← All page/API routes
├── storage/                  ← Logs, cache, compiled views (gitignored stuff)
├── vendor/                   ← Composer dependencies (like node_modules for PHP)
├── .env                      ← Secrets & config (not in git)
├── composer.json             ← PHP dependencies
├── package.json              ← Vite / Tailwind / npm scripts
└── docker-compose.yml        ← Laravel Sail (PHP + MySQL containers)
```

---

## Routes (`routes/web.php`)

This is the closest thing to Express routes.

```php
// GET /  →  IndexController@loadIndexDatas  →  named route "home"
Route::get('/', [IndexController::class, 'loadIndexDatas'])->name('home');

// GET /about-us  →  render a view directly (no controller)
Route::get('/about-us', function () {
    return view('innerpages.aboutus');
})->name('innerpages.about-us');
```

**Named routes** are like giving a route an ID so templates can link without hardcoding URLs:

```blade
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('innerpages.about-us') }}">About</a>
```

In Express you might write `href="/about-us"`. Here, `route('innerpages.about-us')` resolves to `/about-us` and stays correct if the path ever changes.

### Routes in this project

| URL | What runs |
|---|---|
| `/` | `IndexController@loadIndexDatas` — home page with categories, brands, products |
| `/product-listing` | All products |
| `/product-listing/{brandName}` | Products for one brand |
| `/product-listing/{brandName}/{slugid}` | Product detail |
| `/about-us` | Static Blade view |
| `/business-distribution` | Static Blade view |
| `/contact-us` | Static Blade view |
| `POST /products/by-type` | Returns JSON with HTML snippet (AJAX) |
| `POST /products/filter` | Filter products |
| `POST /get-translations` | Translation strings for EN/AR toggle |

---

## Controllers (`app/Http/Controllers/`)

Controllers = your Express route handlers.

Example from **`IndexController.php`** (home page):

```php
public function loadIndexDatas()
{
    $categories = Mcategory::getAllCategories();
    $brands = mBrands::all();
    $products = mProducts::takeWithExistingImages(8);
    $aboutCarouselSlides = $this->aboutCarouselSlides();

    return view('welcome', compact('categories', 'brands', 'products', 'aboutCarouselSlides'));
}
```

MERN equivalent (conceptually):

```js
app.get('/', async (req, res) => {
  const categories = await Category.find();
  const brands = await Brand.find();
  const products = await Product.find().limit(8);
  res.render('welcome', { categories, brands, products });
});
```

- **`view('welcome', ...)`** → render `resources/views/welcome.blade.php`
- **`compact('categories', ...)`** → shorthand to pass variables to the view (like `res.render({ categories })`)

Some controller methods return **JSON** instead of a full page:

```php
return response()->json(['html' => $html]);
```

That pattern is used when JS on the page swaps product HTML without a full reload.

---

## Models (`app/Models/`)

Eloquent models ≈ Mongoose models. They map PHP classes to MySQL tables.

Example — **`mProducts.php`**:

```php
class mProducts extends Model
{
    protected $table = 'm_products';      // table name
    protected $primaryKey = 'pid';        // not default "id"
    public $timestamps = false;           // no created_at / updated_at columns
}
```

This project’s DB came from a **production dump**, so table/column names are legacy (`m_products`, `pid`, `bname`, etc.) — not Laravel’s default conventions.

### Useful queries (MERN → Eloquent)

| MERN (Mongoose) | Eloquent |
|---|---|
| `Product.find()` | `mProducts::all()` or `mProducts::get()` |
| `Product.findById(id)` | `mProducts::find($id)` |
| `Product.find({ brand: 'x' })` | `mProducts::where('bname', 'x')->get()` |
| `Product.find().limit(8)` | `mProducts::limit(8)->get()` |
| `.populate('category')` | Eloquent relationships: `$product->category` |

Custom helpers on this project’s models:

- **`mProducts::takeWithExistingImages(8)`** — only products whose image file exists on disk
- **`$product->imageUrl()`** — full URL to product image or placeholder
- **`Mcategory::getAllCategories()`** — categories for the home page

---

## Views / Blade (`resources/views/`)

Blade = HTML + template syntax. Think JSX-ish server templates, not React.

```blade
{{-- Output escaped variable (safe from XSS) --}}
<h1>{{ $product->name }}</h1>

{{-- Loop --}}
@foreach ($products as $product)
    @include('partials.product-item')
@endforeach

{{-- Include partial (like a React component import, but static) --}}
@include('partials.header')

{{-- Asset URL helper --}}
<img src="{{ asset('assets/images/home/logo.png') }}">

{{-- Link using named route --}}
<a href="{{ route('innerpages.about-us') }}">About</a>
```

**`@include('partials.header')`** pulls in `resources/views/partials/header.blade.php`. Header and footer are shared across pages.

Pages that need **no database data** (About, Contact, Business) skip the controller and return a view directly from `routes/web.php`.

---

## Frontend in this project

Unlike MERN, most UI is **not** a client-side app.

| Layer | Location | Role |
|---|---|---|
| Blade templates | `resources/views/` | Page structure + server data |
| Compiled CSS | `public/assets/dist/`, `public/assets/css/scilens.css` | Styling (Tailwind + custom) |
| JavaScript | `public/assets/js/main.js`, `scilens.js` | Swiper carousels, nav, AJAX filters |
| Images | `public/assets/images/` | Static files |
| About page photos | `public/assets/images/about-page-images/` | |

Vite (`npm run dev`) is set up for Laravel but **this theme mostly uses pre-built assets** in `public/assets/`. You usually edit CSS/JS there directly.

### AJAX example (how JS talks to Laravel)

Home page product tabs POST to `/products/by-type`. The controller returns JSON with an **`html`** string. JS injects it into the DOM — similar to fetching HTML from an Express endpoint instead of JSON props.

---

## Database

### MERN: MongoDB. This project: MySQL.

Config lives in **`.env`**:

```env
DB_CONNECTION=mysql
DB_HOST=mysql          # "mysql" inside Docker, not localhost
DB_DATABASE=laravel
DB_USERNAME=sail
DB_PASSWORD=password
```

### Important for this repo

The catalog data comes from a **SQL dump** (`database/dumps/local.sql`), not from Laravel migrations.

```bash
./database/dumps/import.sh --fresh
# or
./vendor/bin/sail artisan db:import-dump --force --fresh
```

**Do not run `php artisan migrate` after importing the full dump** — the live schema does not match Laravel’s default migrations and would conflict.

Tables you will see include `m_products`, `mcategories`, `m_brands`, etc.

---

## Environment & running locally

### `.env`

Same role as in Node: database credentials, `APP_URL`, debug mode. Copy from `.env.example`:

```bash
cp .env.example .env
php artisan key:generate   # or via Sail container — sets APP_KEY
```

### Laravel Sail (Docker)

This project uses **Sail** so you don’t need PHP/MySQL installed on your machine.

```bash
./vendor/bin/sail up -d          # start PHP + MySQL
./vendor/bin/sail npm run dev    # Vite dev server (optional)
./vendor/bin/sail stop           # stop containers
```

- App: http://localhost (port 80)
- MySQL from host: `127.0.0.1:3306`, user `sail`, password `password`

Inside Docker, **`DB_HOST=mysql`** (the Compose service name). On your laptop outside Docker, you use `127.0.0.1`.

---

## Common tasks (MERN dev cheat sheet)

### Add a new static page

1. Create `resources/views/innerpages/my-page.blade.php`
2. Add to `routes/web.php`:

```php
Route::get('/my-page', function () {
    return view('innerpages.my-page');
})->name('innerpages.my-page');
```

3. Link in `resources/views/partials/header.blade.php`:

```blade
<a href="{{ route('innerpages.my-page') }}">My Page</a>
```

### Add a page with database data

1. Add a controller method (or create a new controller)
2. Query models, `return view('...', compact('data'))`
3. Register the route pointing to that method

### Change home page data

Edit **`IndexController@loadIndexDatas`** and/or **`resources/views/welcome.blade.php`**.

### Change styles

- Site-wide custom CSS: **`public/assets/css/scilens.css`**
- Theme CSS: `public/assets/css/style.css`, `public/assets/dist/output-tailwind.css`

### Change client-side behavior

- **`public/assets/js/main.js`** — Swiper, general UI
- **`public/assets/js/scilens.js`** — filters, translations, product tabs

---

## PHP syntax crash course (just enough)

```php
<?php                          // PHP opening tag (every .php file)
$variable = 'hello';           // $ for variables
$arr = ['a', 'b'];             // arrays
$obj->property                 // object property
$obj->method()                 // method call
use App\Models\mProducts;      // import (like ES import)

// Types are loose compared to TS; Laravel adds structure via classes/namespaces
```

Namespaces mirror folders: `App\Http\Controllers\IndexController` → `app/Http/Controllers/IndexController.php`.

---

## Artisan CLI (`php artisan`)

Laravel’s CLI — like a mix of npm scripts and framework tools.

```bash
./vendor/bin/sail artisan route:list    # list all routes (like printing Express stack)
./vendor/bin/sail artisan tinker        # REPL — poke models in real time
./vendor/bin/sail artisan db:import-dump --force --fresh
./vendor/bin/sail artisan cache:clear
```

Run via Sail prefix when using Docker: `./vendor/bin/sail artisan ...`

---

## Request types in this app

```
┌─────────────────────────────────────────────────────────┐
│  Full page load (traditional)                           │
│  GET /about-us → view → HTML document                   │
└─────────────────────────────────────────────────────────┘

┌─────────────────────────────────────────────────────────┐
│  Partial update (AJAX)                                  │
│  POST /products/by-type → JSON { html: "..." }          │
│  JS replaces a section of the page                      │
└─────────────────────────────────────────────────────────┘
```

There is **no `/api` prefix** and no separate API server. Routes in `web.php` serve both HTML pages and JSON-ish endpoints.

---

## Mental model summary

1. **`routes/web.php`** — URL → code mapping (Express routes)
2. **Controllers** — business logic + fetch data (route handlers)
3. **Models** — database access (Mongoose)
4. **Blade views** — HTML templates (SSR instead of React)
5. **`public/`** — static assets + `index.php` entry
6. **`.env`** — configuration
7. **Sail / Docker** — run PHP + MySQL without local installs

When you are stuck, ask: *“Where is this URL defined, what controller runs, what view does it render, and what model/query feeds the data?”* — that chain covers almost every page in this project.

---

## Files worth opening first

| File | Why |
|---|---|
| `routes/web.php` | See every URL |
| `app/Http/Controllers/IndexController.php` | Main catalog logic |
| `app/Models/mProducts.php` | Product DB + image helpers |
| `resources/views/welcome.blade.php` | Home page template |
| `resources/views/partials/header.blade.php` | Nav + layout start |
| `public/assets/js/scilens.js` | Client-side behavior |
| `README.md` | Docker setup & DB import |

---

## Further reading

- [Laravel docs — Routing](https://laravel.com/docs/routing)
- [Laravel docs — Eloquent](https://laravel.com/docs/eloquent)
- [Laravel docs — Blade](https://laravel.com/docs/blade)
- [Laravel Sail](https://laravel.com/docs/sail)
