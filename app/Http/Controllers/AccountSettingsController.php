<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AccountSettingsController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Settings', [
        ]);
    }

    /**
     * @return \Inertia\Response
     */
    public function delete(Request $request)
    {

/*         Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken(); */
        Order::destroy('user_id', Auth::user()->id);
        User::destroy(Auth::user()->id);


        return redirect('/')->with('success', 'Your account hass been deleted.');

    }

}
