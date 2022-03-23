<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;


// == https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */




    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Welcome', [

            'products' => Product::with('user')->get()->where('is_featured', true),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,

        ]);
    }


    /**
     * @return \Inertia\Response
     */
    public function create()
    {

        return Inertia::render('Products/Create/Create', [
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









    public function getPubliclyStorgeFile($filename)
    {

        $path = storage_path('app/public/upload/'. $filename);

        if (!File::exists($path)) {
            abort(404);
        }

        $file = File::get($path);
        $type = File::mimeType($path);

        $response = Response::make($file, 200);

        $response->header("Content-Type", $type);

        return $response;
    }



    public function show($id)
    {

        return Inertia::render('Products/Show', [
            /*'products' => Product::all()->where('is_featured', true)->with('user')->get*/
            /*'products' => Product::all(),*/


            'product' => Product::query()->where('id', '=', $id)->firstOrFail(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }


/*    public function startimport(Request $request) {
        return response()->json(['data' => $request->importfile]);
    }*/


    public function discover()
    {


        return Inertia::render('Discover', [
            'foo' => 'bar',
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            //'product' => Product::inRandomOrder()->with('user')->first(),

            //https://laracasts.com/discuss/channels/laravel/how-can-i-display-3-posts-in-slider-for-whole-day-and-changes-on-next-day-randomly-in-laravel-55

            'product' => Cache::remember('randProduct', 60*24, function () {
                return Product::inRandomOrder()->with('user')->first();

                //return Product::inRandomOrder()->take(3)->get();
            })

        ]);
    }








}













 /*   public function index(Request $request)
    {*/
        // == https://laravel.com/docs/8.x/queries

        /*$featuredProducts = Product::query()->featured()->with('user')->paginate(12);
        return Inertia::render('Welcome', [
            'featuredProducts' => $featuredProducts
        ]);*/







/*    }*/


