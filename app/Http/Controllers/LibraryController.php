<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Review;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;


class LibraryController extends Controller
{
    public function index(): \Inertia\Response
    {

        /* Get the logged-in user */
        $user = \auth()->user();

        /* Get the purchased products from the logged-in user */
        $products = DB::select('SELECT products.id, products.name, products.cover, products.epub
            FROM products
            LEFT JOIN orders
            ON orders.product_id = products.id
            LEFT JOIN users
            ON orders.user_id = ?
            WHERE users.id = ?', [$user->id, $user->id]);



        return Inertia::render('Products/Library', [
            'user' => \auth()->user(),
            'products' => $products,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }
}





