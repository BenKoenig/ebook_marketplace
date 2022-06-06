<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Order;

class ReaderController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index($slug, Request $request)
    {
        $product = Product::where('slug', '=', $slug)->firstOrFail();
        $user = Auth::user();

        if(!$user) {
            return abort('403', "You must be logged in.");
        } else {

            /* Checks if user is admin */
            if(!$user->is_admin) {

                /* Checks if user has purchased the product */
                if(!Order::where('user_id', $user->id )->where('product_id', $product->id)->first()){
                    return abort(403, "You didn't purchase this product.");
                }
            }

        }



        return Inertia::render('Reader', [
            'product' => $product,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);

    }
}

