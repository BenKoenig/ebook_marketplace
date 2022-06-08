<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
            /* displays top purchased products, using a ranking system */
            'topRankedProducts' => Product::with('user')->orderBy('score', 'desc')->limit(6)->get(),

            /* displays featured products */
            'featuredProducts' => Product::with('user')->get()->where('is_featured', true),

            /* displays 6 recent added products */
            'latestProducts' => Product::with('user')->where('is_public', true)->limit(6)->latest()->get(),

            /* checks if the user can log in */
            'canLogin' => Route::has('login'),

            /* checks if the user can register */
            'canRegister' => Route::has('register'),

            /* selects a random product and saves it for 24 hours*/
            'randomProduct' => Cache::remember('randProduct', 60*24, function () {
                return Product::inRandomOrder()->with('user')->get()->where('is_public', true)->first();
            })
        ]);
    }

}
