<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


class CheckoutController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index($slug): \Inertia\Response
    {


        return Inertia::render('Products/Checkout/Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'product' => Product::where('slug', $slug)->firstOrFail(),
        ]);
    }

}
