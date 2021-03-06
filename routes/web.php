<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\OrderHistoryController;
use App\Http\Controllers\FileAccessController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [HomeController::class, 'index', ])->name('home');

/* Create a product*/
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/d/{id}.epub', [FileAccessController::class, 'index']);

Route::get('/serve/{id}', [FileAccessController::class, 'serve']);

/* Create a review*/
Route::post('/reviews/', [ReviewController::class, 'store'])->name('reviews.store');

/* Order History */
Route::get('/order-history/', [OrderHistoryController::class, 'index'])->name('orders.history');

/* Accept a product */
Route::post('/accept/{id}', [AdminController::class, 'accept'])->middleware(['auth', 'verified'])->name('admin.accept');

/* Reject a product */
Route::post('/reject/{id}', [AdminController::class, 'reject'])->middleware(['auth', 'verified'])->name('admin.reject');

/* Purchased eBooks from the user */
Route::get('/library', [\App\Http\Controllers\LibraryController::class, 'index'])->middleware(['auth', 'verified'])->name('library');

/* Create Product Page */
Route::get('/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('products.create');

/* Edit Product Page */
Route::get('/edit/{slug}', [ProductController::class, 'edit'])->name('products.create');

/* update product */
Route::put('products/{product}', [ProductController::class, 'update'])->name('products.update');

/* Profile */
Route::get('/u/{username}', [ProfileController::class, 'index'])->name('profile');

/* All Products */
Route::get('/all-products', [ProductController::class, 'all'])->name('products.all');

/* Individual product page */
Route::get('/e/{slug}', [ProductController::class, 'show'])->name('show');

/* Individual product page */
Route::get('/e/{slug}/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

/* Create a product*/
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');

/* Uses ePub file content to display eBook */
Route::get('/read/{slug}', [ReaderController::class, 'index'])->name('reader');

/* Guidelines page */
Route::inertia('/guidelines', 'Guidelines')->name('guidelines');

/* ToS */
Route::inertia('/terms-of-service', 'TOS')->name('termsofservice');

/* PrivacyPolicy */
Route::inertia('/privacy-policy', 'PrivacyPolicy')->name('privacypolicy');

/* Admin Page */
Route::get('/admin', [AdminController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');

require __DIR__.'/auth.php';
