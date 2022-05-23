<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class EpubFileController extends Controller
{

    public function index($id)
    {
        /* Get the logged-in user */
        $user = Auth::user();

        /* Get the product */
        $product = Product::where('id', '=', $id)->firstOrFail();

        /* Checks if user is logged in */
        if(!$user) {
            abort('403', "You must be logged in.");
        } else {

            /* Checks if user is admin */
            if(!$user->is_admin) {

                /* Checks if user has purchased the product */
                if(!Order::where('user_id', $user->id )->where('product_id', $product->id)->first()){
                    abort(403, "You didn't purchase this product.");
                }
            }

        }

        $filename = $product->epub;
        return response()->download(Storage::path('public/' . $filename));
    }
}
