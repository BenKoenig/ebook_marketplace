<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Support\Facades\Cache;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;



class HomeController extends Controller
{

    /**
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        return Inertia::render('Home', [
            'featuredProducts' => Product::with('user')->get()->where('is_featured', true),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'randomProduct' => Cache::remember('randProduct', 60*24, function () {
                return Product::inRandomOrder()->with('user')->first();
            })
        ]);

    }
}




