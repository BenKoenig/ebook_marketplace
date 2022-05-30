<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Purchase;
use App\Models\Review;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;

// == https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller

class ProductController extends Controller
{

    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Home', [
            'featuredProducts' => Product::with('user')->get()->where('is_featured', true),
            'products' => Product::with('user')->get(),

        ]);

    }

    /**
     * @return \Inertia\Response
     */
    public function create()
    {

        return Inertia::render('Create', [
            'products' => Product::all(),
        ]);


    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:100'],
            'description' => ['required', 'max:50000'],
            'snippet' => ['required', 'max:1000'],
            'price' => ['required', 'numeric', 'between:0,150'],
            'cover' => ['required', 'max:10000', 'mimes:png,jpg,jpeg'],
            'epub' => ['required', 'max:1000000', 'mimes:epub'],

        ]);
        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'snippet' => $request->input('snippet'),
            'price' => $request->input('price'),
            'cover' => $request->file('cover')->store('covers', 'public'),
            'epub' => $request->file('epub')->store('epubs', 'public'),
            'user_id' => Auth::user()->id
        ]);

        /* logged in user */
        $user = Auth::user();

        /* Stores information to database */
        $order = Order::create([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);


        return redirect('/e/' . $product->slug)->with('success', 'You have successfully submitted your ebook. Please be patient while we review it.');
    }


    /**
     * @return \Inertia\Response
     */
    public function edit($slug)
    {
        $product = Product::with('user')->get()->where("slug", $slug)->firstOrFail();

        if(Auth::user()->id !== $product->user_id) {
            abort(403, 'You are not permitted to edit this product.');
        }

        return Inertia::render('Edit', [
            'product' => $product
        ]);
    }

    public function show($slug, Request $request)
    {
        $user = Auth::user();
        $product = Product::with('user')->get()->where("slug", $slug)->firstOrFail();
        /* checks if user has purchased the product */
        $userHasPurchased = $user && (bool)Order::where('user_id', $user->id)->where('product_id', $product->id)->first();
        /* checks if user has reviewd the product */
        $userHasReviewed = $user && (bool)Review::where('user_id', $user->id)->where('product_id', $product->id)->first();
        /* checks if the produc has reviews */
        $productHasReviews = (bool)Review::where('product_id', $product->id)->first();
        /* checks user is the author of this product */
        $userIsAuthor = $user && (bool)Order::where('user_id', $user->id)->where('product_id', $product->id)->get();

        $request->session()->put('store_product', $product->id);

        $all_reviews = Review::where('product_id', $product->id)->get();

        $reviews = Review::query()
            ->with('user')
            ->where('product_id', '=', $product->id)
            ->paginate(6)
            ->withQueryString()
            ->through(fn ($review) => [
                'name' => $review->name,
                'title' => $review->title,
                'review' => $review->review,
                'rating' => $review->rating,
                'product_id' => $review->product_id,
                'user_id' => $review->user_id,
                'user' => $review->user
            ]);

        /* aborts if user doesn't have access to products, that are hidden to the public */
        if(!$product->is_public && (!($user->is_admin) && !($user->id === $product->user_id)) ) {
            abort(403, 'Unauthorized action.');
        } else if (!$product) {
            abort("404", "Product doesn't exist.");
        }

        return Inertia::render('Show', array(
            'all_reviews' => $all_reviews,
            'reviews' => $reviews,
            'product' => $product,
            'userHasReviewed' => $userHasReviewed,
            'userHasPurchased' => $userHasPurchased,
            'productHasReviews' => $productHasReviews,
            'userIsAuthor' => $userIsAuthor,
        ));

    }
}
