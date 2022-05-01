<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use App\Models\Review;
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
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);

    }


    /**
     * @return \Inertia\Response
     */
    public function create()
    {

        return Inertia::render('Create', [
            'products' => Product::all(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'description' => ['required', 'max:50000'],
            'snippet' => ['required', 'max:1000'],
            'price' => ['required', 'numeric', 'between:0,150'],
            'cover' => ['required', 'max:10000', 'mimes:png,jpg,jpeg'],
            'banner' => ['required', 'max:10000', 'mimes:png,jpg,jpeg'],
            'epub' => ['required', 'max:1000000', 'mimes:epub'],

        ]);
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'snippet' => $request->input('snippet'),
            'price' => $request->input('price'),
            'cover' => $request->file('cover')->store('covers', 'public'),
            'banner' => $request->file('banner')->store('banners', 'public'),
            'epub' => $request->file('epub')->store('epubs', 'public'),
            'user_id' => Auth::user()->id
        ]);
        $request->session()->put('store_token', 'value');
        return redirect('/create/success');
    }


    /**
     * @param Request $request
     * @return \Inertia\Response|void
     */
    public function createSuccess(Request $request)
    {
        /**
         * Checks session token,
         * so the user can only access this page if they have successfully created a product
         */
        $value = $request->session()->get('store_token');

        /**
         * Forgets session token,
         * so the user can't access this page again, once they leave.
         */
        $forget = $request->session()->forget('store_token');


        if($value) {
            $forget;
            return Inertia::render('Products/Create/Success', [
                'products' => Product::all(),
                'canLogin' => Route::has('login'),
                'canRegister' => Route::has('register'),
            ]);
        } else {
            abort('404');
        }

    }


    public function show($slug, Request $request)
    {
        /*Convert slug to id*/
        $product_id = DB::select('SELECT id FROM products WHERE slug = ?', [$slug]);
        /*Convert Object to array*/
        $product_id = @json_decode(json_encode($product_id[0]), true);
        /*Convert array to string*/
        $product_id = implode(" ",$product_id);

        $request->session()->put('store_product', $product_id);

        $reviews = Review::query()
            ->with('user')
            ->where('product_id', '=', $product_id)
            ->paginate(6)
            ->withQueryString()
            ->through(fn ($review) => [
                'name' => $review->name,
                'title' => $review->title,
                'review' => $review->review,
                'rating' => $review->rating,
                'product_id' => $review->product_id,
                'user_id' => $review->user_id,
            ]);

        $product = Product::with('user')->get()->where("slug", $slug)->firstOrFail();

        $userHasReviewed = auth::user() ? DB::select('SELECT * FROM reviews WHERE user_id = ? AND product_id = ?', [auth::user()->id, $request->session()->get('store_product')]) : 0;

        if(!$product) {
            abort("404");
        }
        return Inertia::render('Show', array(
            'reviews' => $reviews,
            'product' => $product,
            'userHasReviewed' => $userHasReviewed,
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ));

    }
}




