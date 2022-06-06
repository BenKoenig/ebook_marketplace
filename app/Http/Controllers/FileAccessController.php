<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FileAccessController extends Controller
{

    public function index($id)
    {
        $user = Auth::user();
        $product = Product::where('id', $id)->first();
        $contents = Storage::get($product->epub);

        $filepath = storage_path('app'.DIRECTORY_SEPARATOR.($product->epub));

        return response()->file($filepath);


        // We should do our authentication/authorization checks here
        // We assume you have a FileModel with a defined belongs to User relationship.
/*         if(Order::where('user_id', $user->id )->where('product_id', $product->id)->first()){ */
            // filename should be a relative path inside storage/app to your file like 'userfiles/report1253.pdf'
            

                /*             $filepath = storage_path('app'); */
                
/*                 return response()->file($contents); */
                /*             return response()->file(Storage::path($product->epub)); */
 /*        }else{
            return abort('403');
        } */
    }

    public function serve($id)
    {
        $user = Auth::user();
        $product = Product::where('id', $id)->first();

        if($user) {
            // Here we don't use the Storage facade that assumes the storage/app folder
            // So filename should be a relative path inside storage to your file like 'app/userfiles/report1253.pdf'
            $filepath = storage_path('app'.DIRECTORY_SEPARATOR.($product->epub));
 
            return response()->download($filepath);
        }else{
            return abort('404');
        }
    }


}
