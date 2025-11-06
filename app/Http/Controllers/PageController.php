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
        try {
            $products = Product::all();
        } catch (\Throwable $e) {
            // If DB isn't configured, return empty collection so the view can still render
            $products = collect();
        }

        return view('inventory_management', compact('products'));
    }

    public function orders()
    {
        try {
            $orders = Order::all();
        } catch (\Throwable $e) {
            $orders = collect();
        }

        return view('order_management', compact('orders'));
    }

    public function products()
    {
        try {
            $products = Product::all();
        } catch (\Throwable $e) {
            $products = collect();
        }

        return view('product_catalog', compact('products'));
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
        try {
            $suppliers = Supplier::all();
        } catch (\Throwable $e) {
            $suppliers = collect();
        }

        return view('suppliermanagement', compact('suppliers'));
    }
}
