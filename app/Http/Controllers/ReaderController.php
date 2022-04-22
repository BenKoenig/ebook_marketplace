<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class ReaderController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index($slug, Request $request)
    {


        $product = Product::where('slug', '=', $slug)->firstOrFail();


        return Inertia::render('Reader', [
            'product' => $product,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);

    }
}

