<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Models\Product;
use Illuminate\Foundation\Application;
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


Route::get('/', [ProductController::class, 'index', ])->name('home');


Route::inertia('/reader', 'Reader');



Route::get('/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('products.create');

Route::get('/create/success', [ProductController::class, 'createSuccess'])->middleware(['auth', 'verified'])->name('products.createSuccess');

/*Route::get('/create/success', 'Products/Create/Success')->name('products.create.success');*/

Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');


Route::get('/library', [\App\Http\Controllers\LibraryController::class, 'index'])->middleware(['auth', 'verified'])->name('library');




Route::get('epubs/{filename}', [ProductController::class,'getPubliclyStorgeFile'])->name('image.displayImage');






Route::get('/discover', [ProductController::class, 'discover'])->name('discover');



Route::get('/@{user}/{slug}', [ProductController::class, 'show'])->name('products.show');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
