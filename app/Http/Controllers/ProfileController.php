<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Models\User;


class ProfileController extends Controller
{
    public function index($username): \Inertia\Response
    {
        $user = User::where('username', $username)->firstOrFail();

        /* hides products that are not public yet, except from the author and admins*/
        if(Auth::user()->username === $username || Auth::user()->is_admin) {
            $products = Product::with('user')->get()->where('user_id', $user->id);
        } else {
            $products = Product::with('user')->get()->where('user_id', $user->id)->where('is_public', 1);
        }

        return Inertia::render('Profile', array(
            'user' => $user,
            'products' => $products,
        ));

    }
}
