<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;

class EpubFileController extends Controller
{

    public function index($id)
    {
        /* Get the logged-in user */
        $user = \auth()->user();
        $product = Product::where('id', '=', $id)->firstOrFail();
        $filename = $product->epub;
        return response()->download(Storage::path('public/' . $filename));
    }


/*    public function d($id)
    {

        $user = \auth()->user();

        $product = Product::where('id', '=', $id)->firstOrFail();

        $filename = $product->epub;

        $full_path = Storage::path('public/'. $filename);

        $base64 = base64_encode(Storage::get($filename));

        $file = Storage::get($full_path);


        $image_data = 'data:'.mime_content_type($full_path) . ';base64,' . $base64;

        $response = Response::make($file, 200);
        $response->header("Content-Type", $image_data);
        return $response;
    }*/


}
