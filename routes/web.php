<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TranslationController;

// routes/web.php

Route::get('/', [IndexController::class, 'loadIndexDatas'])->name('home');
Route::post('/products/by-type', [IndexController::class, 'getProductsHtmlByType'])->name('products.byType');

Route::post('/get-translations', [TranslationController::class, 'getTranslations']);

Route::get('/product-listing/{brandName}', [IndexController::class, 'loadProductsByBrand'])
    ->name('innerpages.product-listing');

    Route::get('/product-listing', [IndexController::class, 'loadAllProducts'])
    ->name('innerpages.Allproducts');
// Route::get('/product-description', [IndexController::class, 'ShowProductDescription'])
//     ->name('innerpages.product-description');

Route::get('/product-listing/{brandName}/{slugid}', [IndexController::class, 'ShowProductDescription'])

->name('innerpages.product-details');


Route::get('/about-us', function () {
    return view('innerpages.aboutus');
})->name('innerpages.about-us');

Route::get('/contact-us', function () {
    return view('innerpages.contactus');
})->name('innerpages.contact-us');

Route::post('/product/view', [IndexController::class, 'show'])->name('product.show');




Route::post('/products/filter', [IndexController::class, 'filterProducts'])->name('products.filter');
Route::post('/categories/filter', [IndexController::class, 'filterCategories']);



//unwanted
// Route::get('/product-listing', [IndexController::class, 'loadProducts'])
//     ->name('innerpages.product-listing');