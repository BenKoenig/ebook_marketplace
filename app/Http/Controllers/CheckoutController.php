<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;


class CheckoutController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index($slug): \Inertia\Response
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        session()->put('store_product', $product);

        return Inertia::render('Checkout', [
            'product' => $product,
        ]);
    }

    /**
     * @return Application|RedirectResponse|Redirector
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function store() {
        /* Gets the product information */
        $product = session()->get('store_product');

        /* logged in user */
        $user = Auth::user(); 

        /* checks if user has purchased this product */
        $userHasPurchased = $user && (bool)Order::where('user_id', $user->id)->where('product_id', $product->id)->first();


        if(!empty($hasPurchased)) {
          abort(404);
        }

        $price = $product->sale_price === 0.0 ? $product->price : $product->sale_price;

        /* Stores information to database */
        Order::create([
            'purchased_price' => $price,
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        /* increases the product ranking by 1 */
        $product->score++;

        /* returns user back to library */
        return redirect('/library')->with('success', 'The product has been added to your library.');

        /* Forgets the product information */
        session()->forget('store_product');
    }
}
