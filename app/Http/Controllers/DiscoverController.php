<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class DiscoverController extends Controller
{



    public function index()
    {
        return Inertia::render('Discover', [
            'foo' => 'bar',
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,


            'product' => Cache::remember('randProduct', 60*24, function () {
                return Product::inRandomOrder()->with('user')->first();

            })

        ]);
    }

}
