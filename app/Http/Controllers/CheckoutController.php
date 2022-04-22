<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function store() {
        /* Gets the product information */
        $product = session()->get('store_product');

        /* logged in user */
        $user = Auth::user();

        /* checks if user has purchased this product */
        $hasPurchased = DB::select('SELECT * FROM orders WHERE user_id = ? AND product_id = ?', [$user->id, $product->id]);

        if(!empty($hasPurchased)) {
          abort(404);
        }

        /* Stores information to database */
        Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);
        return redirect('/library');

        /* Forgets the product information */
        session()->forget('store_product');
    }
}
