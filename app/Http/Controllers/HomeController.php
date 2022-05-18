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
            'latestProducts' => Product::with('user')->where('is_public', true)->limit(6)->latest()->get(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'randomProduct' => Cache::remember('randomProduct', 60*24, function () {
                return Product::inRandomOrder()->with('user')->get()->where('is_public', true)->first();
            })
        ]);

    }
}




