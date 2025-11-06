<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function inventory()
    {
        return redirect()->route('inventory');
    }

    public function orders()
    {
        return redirect()->route('orders');
    }

    public function products()
    {
        return redirect()->route('products');
    }

    public function reporting()
    {
        // Reporting may need multiple datasets; pass empty sets safely
        try {
            $products = Product::all();
            $orders = Order::all();
            $suppliers = Supplier::all();
        } catch (\Throwable $e) {
            $products = collect();
            $orders = collect();
            $suppliers = collect();
        }

        return view('reporting_analytics', compact('products', 'orders', 'suppliers'));
    }

    public function suppliers()
    {
        return redirect()->route('suppliers');
    }
}
