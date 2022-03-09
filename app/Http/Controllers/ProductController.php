<?php

namespace App\Http\Controllers;

use App\Models\Posting;
use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

// == https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index() {
        return Inertia::render('Welcome', [
            /*'products' => Product::all()->where('is_featured', true)->with('user')->get
            'products' => Product::all()*/
            'products' => Product::with('user')->get()->where('is_featured', true)

        ]);
    }






 /*   public function index(Request $request)
    {*/
        // == https://laravel.com/docs/8.x/queries

        /*$featuredProducts = Product::query()->featured()->with('user')->paginate(12);
        return Inertia::render('Welcome', [
            'featuredProducts' => $featuredProducts
        ]);*/







/*    }*/

}
