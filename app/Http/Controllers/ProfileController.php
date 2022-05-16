<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Inertia\Inertia;
use App\Models\User;


class ProfileController extends Controller
{
    public function index($username): \Inertia\Response
    {
        $user = User::where('username', $username)->firstOrFail();
        $products = Product::with('user')->get()->where('user_id', $user->id);



        return Inertia::render('Profile', array(
            'user' => $user,
            'products' => $products,
        ));

    }
}
