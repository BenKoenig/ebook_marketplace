<?php

namespace App\Http\Controllers;
use App\Models\User;
use Inertia\Inertia;

// == https://laravel.com/docs/8.x/controllers#actions-handled-by-resource-controller





class ProfileController extends Controller
{

    /**
     * @return \Inertia\Response
     */
    public function index($username)
    {
        return Inertia::render('Profile', [
            'user' => User::where('username', $username)->firstOrFail()
        ]);

    }

}




