<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function dashboard()
    {
        try {
            $totalInventoryValue = Product::select(DB::raw('SUM(price * quantity) as total'))->value('total') ?? 0;
            $pendingOrders = Order::where('status', 'pending')->count();
            $lowStock = Product::where('quantity', '<', 10)->count();
        } catch (\Throwable $e) {
            $totalInventoryValue = 0;
            $pendingOrders = 0;
            $lowStock = 0;
        }
        return view('dashboard', compact('totalInventoryValue', 'pendingOrders', 'lowStock'));
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
