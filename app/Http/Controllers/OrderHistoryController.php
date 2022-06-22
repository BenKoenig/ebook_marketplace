<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class OrderHistoryController extends Controller
{
    public function index(): \Inertia\Response
    {
        /* get purchased ebooks */
        $orders = DB::table('products')
            ->leftJoin('orders', 'orders.product_id', 'products.id')
            ->leftJoin('users', 'users.id', 'products.user_id')
            ->where('orders.user_id', '51')
            ->get();

        /* render purchased ebooks */
        return Inertia::render('OrderHistory', [
            'orders' => $orders,
        ]);
    }
}