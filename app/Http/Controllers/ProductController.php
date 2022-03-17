<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
            /*'products' => Product::all()->where('is_featured', true)->with('user')->get*/
            /*'products' => Product::all(),*/
            'products' => Product::with('user')->get()->where('is_featured', true),
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,

        ]);
    }

    




    public function create()
    {
        return Inertia::render('Products/Create');
    }

    public function store(Request $request)
    {
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'snippet' => $request->input('snippet'),
            'price' => $request->input('price'),
            'sale_price' => $request->input('sale_price'),
            'is_featured' => $request->input('is_featured'),
            'book_cover' => $request->file('book_cover') ? $request->file('book_cover')->store('covers', 'public') : null,
        ]);

        return Redirect::route('Welcome');
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


    public function discover()
    {
        $product = Cache::remember('randomPost', 60*24, function () {
            return Product::inRandomOrder()->with('user')->first;
        });
        
        return Inertia::render('Discover', [
            'foo' => 'bar',
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'laravelVersion' => Application::VERSION,
            'phpVersion' => PHP_VERSION,
            //'product' => Product::inRandomOrder()->with('user')->first(),
            'product' => Cache::remember('randProduct', 60*24, function () {
                return Product::inRandomOrder()->with('user')->first();
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


