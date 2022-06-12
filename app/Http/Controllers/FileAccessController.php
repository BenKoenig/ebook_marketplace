<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Order;

class FileAccessController extends Controller
{

    public function index($id)
    {
        /* Variables:
        $product: searches for specific product using $id as a parameter
        $filepath: finds the path to the file of the epub
        $isPurchased: boolean, which displays if the item is purchased or not
        */
        
        $product = Product::where('id', $id)->first();
        $filepath = Storage::path($product->epub);
        $isPurchased = Auth::user() ? (bool)Order::where('product_id', $product->id)->where('user_id', Auth::user()->id)->first() : false;

        /* checks if user is logged in and owns the product */
        if(!$isPurchased) {
            abort('403', 'You do not have access to this file.');
        } 
        
        /* if everything is alright, the file is returned */
        return response()->file($filepath);


    }   
}