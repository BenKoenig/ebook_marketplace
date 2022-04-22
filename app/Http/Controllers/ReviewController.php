<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Cviebrock\EloquentSluggable\Services\SlugService;

// == https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller


class ReviewController extends Controller
{

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        /* the id of the product, user wants to review*/
        $product_id = $request->session()->get('store_product');

        /* the id of logged in user */
        $user_id = Auth::user()->id;

        /* Checks if user has already left a review for this product */
        $userHasReviewed = DB::select('SELECT * FROM reviews WHERE user_id = ? AND product_id = ?', [$user_id, $request->session()->get('store_product')]);

        /* checks if user owns the product */
        $userOwnsProduct = DB::select('SELECT * FROM orders where user_id = ? AND product_id = ?', [$user_id, $product_id]);

        /* makes sure user hasn't already left a review and owns the product */
        if(!$userHasReviewed && $userOwnsProduct){
            $request->validate([
                'title' => ['required', 'max:100'],
                'review' => ['required', 'max:50000'],
                'rating' => ['required', 'numeric', 'between:1,5'],
            ]);

            Review::create([
                'title' => $request->input('title'),
                'review' => $request->input('review'),
                'rating' => $request->input('rating'),
                'product_id' => $product_id,
                'user_id' => $user_id
            ]);
            return redirect('/');
        } else {
            abort("403");
        }
    }
}
