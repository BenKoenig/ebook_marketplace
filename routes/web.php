<?php

use App\Http\Controllers\ProductController;
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

/*Route::post('/startimport', [ProductController::class, 'startimport']);*/



Route::get('/', [ProductController::class, 'index', ])->name('home');


Route::inertia('/reader', 'Reader');

/*Route::get('/reader', function () {
    return Inertia::render('Reader', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
    ]) ;
})->name('discover');*/

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'products' => Product::with('user')->get()->where('is_featured', true)
    ]);
});*/



Route::get('/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('products.create');

Route::get('/create/success', [ProductController::class, 'createSuccess'])->middleware(['auth', 'verified'])->name('products.createSuccess');

/*Route::get('/create/success', 'Products/Create/Success')->name('products.create.success');*/

Route::post('/products', [ProductController::class, 'store'])->name('products.store');




// Route::post('/products', function() {
//     $attributes = Request::validate([
//         'name' => 'required',
//         'description' => 'required',
//         'snippet' => 'required',
//     ]);

//     Product::create($attributes);

//     return redirect('/');
// });


Route::get('image/{filename}', [ProductController::class,'getPubliclyStorgeFile'])->name('image.displayImage');


/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'foo' => 'bar',
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');*/

Route::get('/library', function () {
    return Inertia::render('Library', [
        'foo' => 'bar',
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->middleware(['auth', 'verified'])->name('library');



Route::get('/discover', [ProductController::class, 'discover'])->name('discover');

/*
Route::get('/discover', function () {
    return Inertia::render('Discover', [
        'foo' => 'bar',
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]) ;
})->name('discover');*/

// Route::get('/discover', function () {
//     return Inertia::render('Discover') ;
// })->name('discover');


// Route::get('/productPage', function () {
//     return Inertia::render('ProductPage', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,x
//         'phpVersion' => PHP_VERSION,
//     ]);
// });


Route::get('/@{user}/{slug}', [ProductController::class, 'show'])->name('products.show');


// Route::get('/products/{id}', function () {
//     return Inertia::render('Products/Show') ;
// })->name('products.show');


Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
