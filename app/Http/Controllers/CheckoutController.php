<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;


class CheckoutController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index($slug): \Inertia\Response
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        session()->put('store_product', $product);


        return Inertia::render('Products/Checkout/Index', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'product' => $product,
        ]);
    }

    public function store() {
        $product = session()->get('store_product');

/*        $forget = $request->session()->forget('store_product');*/

        Order::create([
            'user_id' => Auth::user()->id,
            'product_id' => $product->id,
        ]);
        return redirect('/');
    }

}
