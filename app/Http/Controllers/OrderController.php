<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;
use App\Models\Supplier;

class OrderController extends Controller
{
    public function index()
    {
        try {
            $orders = Order::with('product')->paginate(20);
        } catch (\Throwable $e) {
            $orders = collect();
        }

        return view('order_management', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('orders.create', compact('products', 'suppliers'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'order_number' => 'required|string|max:100',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total' => 'required|numeric',
            'status' => 'required|string|max:50',
        ]);

        Order::create($data);

        return redirect()->route('orders')->with('success', 'Order created');
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        return view('orders.edit', compact('order', 'products', 'suppliers'));
    }

    public function update(Request $request, Order $order)
    {
        $data = $request->validate([
            'order_number' => 'required|string|max:100',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'total' => 'required|numeric',
            'status' => 'required|string|max:50',
        ]);

        $order->update($data);

        return redirect()->route('orders')->with('success', 'Order updated');
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders')->with('success', 'Order deleted');
    }
}
