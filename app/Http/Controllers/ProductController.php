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




    public function create()
    {

        return Inertia::render('Products/Create', [
            'products' => Product::all(),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
        ]);
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'snippet' => $request->input('snippet'),
            'price' => $request->input('price'),
            'cover' => $request->file('cover')->store('covers', 'public'),
            'epub' => $request->file('epub')->store('epubs', 'public'),
            'user_id' => Auth::user()->id
        ]);

        return redirect('/');
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


