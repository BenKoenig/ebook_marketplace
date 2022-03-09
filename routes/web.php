<?php

use App\Http\Controllers\ProductController;
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


/*Route::get('/test/', [ProductController::class, 'index'])
    ->name('Test');*/

/*Route::get('/', [ProductController::class, 'index'])
    ->name('Welcome');*/

Route::get('/', [ProductController::class, 'index'])
    ->name('home');



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
    return Inertia::render('Library');
})->middleware(['auth', 'verified'])->name('library');

Route::get('/discover', function () {
    return Inertia::render('Discover');
})->name('discover');

Route::get('/productPage', function () {
    return Inertia::render('ProductPage', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
