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
        $isPurchased = Auth::user() ? (bool)Order::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first() : false;

        /* Checks if user has purchased the product */
        if(!$isPurchased) {
            return abort('403', "You don't have access to this product.");
        } else {

            /* Checks if user is admin */
            if(!Auth::user()->is_admin) {

                /* Checks if user has purchased the product */
                if(!Order::where('user_id', Auth::user()->id )->where('product_id', $product->id)->first()){
                    return abort(403, "You didn't purchase this product.");
                }
            }

        }

        return Inertia::render('Reader', [
            'product' => $product
        ]);

    }
}

