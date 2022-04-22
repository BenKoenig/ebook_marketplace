<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscoverController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\EpubFileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Home page*/
Route::get('/', [ProductController::class, 'index', ])->name('home');



/* Create a product*/
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

/* Create a review*/
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');

/* Purchased eBooks from the user */
Route::get('/library', [\App\Http\Controllers\LibraryController::class, 'index'])->middleware(['auth', 'verified'])->name('library');

/* Product Pages*/
Route::get('/discover', [DiscoverController::class, 'index'])->name('discover');

/* Create Product Page */
Route::get('/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('products.create');

/* Product create success page*/
Route::get('/create/success', [ProductController::class, 'createSuccess'])->middleware(['auth', 'verified'])->name('products.createSuccess');

/* Individual product page */
Route::get('/e/{slug}', [ProductController::class, 'show'])->name('products.show');

/* Individual product page */
Route::get('/e/{slug}/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

/* Create a product*/
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

/* ePub file direct links */
Route::get('epubs/{id}', [EpubFileController::class,'index'])->name('image.displayImage');

/* Uses ePub file content to display eBook */
Route::get('/read/{slug}', [ReaderController::class, 'index'])->name('reader');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
