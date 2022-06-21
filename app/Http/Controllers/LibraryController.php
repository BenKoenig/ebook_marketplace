<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class LibraryController extends Controller
{
    public function index(): \Inertia\Response
    {

        /* Get the logged-in user */
        $user = \auth()->user();


        /* Get the purchased products from the logged-in user */
        $products = DB::select('SELECT products.id, products.name, products.cover, products.epub, products.slug
            FROM products
            LEFT JOIN orders
            ON orders.product_id = products.id
            LEFT JOIN users
            ON orders.user_id = ?
            WHERE users.id = ?', [$user->id, $user->id]);


        return Inertia::render('Library', [
            'user' => \auth()->user(),
            'products' => $products,
        ]);
    }
}





