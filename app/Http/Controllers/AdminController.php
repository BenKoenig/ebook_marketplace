<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;


class AdminController extends Controller
{
    /**
     * @return \Inertia\Response
     */
    public function index(): \Inertia\Response
    {
        if(!Auth::user() || Auth::user()->is_admin === 0) {
            abort(403, 'Unauthorized action.');
        }

        return Inertia::render('Admin', [
            'unapprovedProducts' => Product::with('user')->where('is_public', false)->get()
        ]);
    }

    /* accepts product */
    public function accept($id)
    {
        if(!Auth::user() || Auth::user()->is_admin === 0) {
            abort(403, 'Unauthorized action.');
        }

        $product = Product::findOrFail($id);
        $product->is_public = true;
        $product->save();
        return redirect('/admin');
    }

    /* rejects product */
    public function reject($id)
    {
        if(!Auth::user() || Auth::user()->is_admin === 0) {
            abort(403, 'Unauthorized action.');
        }

        $product = product::findOrFail($id);
        $product->delete();
        return redirect('/admin');
    }
}
