<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Order;

$products = Product::limit(100)->get()->toArray();
$suppliers = Supplier::limit(100)->get()->toArray();
$orders = Order::with(['product','supplier'])->limit(100)->get()->map(function($o){
    return [
        'id' => $o->id,
        'order_number' => $o->order_number,
        'product' => $o->product ? ['id'=>$o->product->id,'name'=>$o->product->name,'price'=>$o->product->price] : null,
        'supplier' => $o->supplier ? ['id'=>$o->supplier->id,'name'=>$o->supplier->name] : null,
        'quantity' => $o->quantity,
        'total' => $o->total,
        'status' => $o->status,
        'created_at' => $o->created_at ? $o->created_at->toDateTimeString() : null,
    ];
})->toArray();

$out = [
    'products_count' => count($products),
    'suppliers_count' => count($suppliers),
    'orders_count' => count($orders),
    'products' => $products,
    'suppliers' => $suppliers,
    'orders' => $orders,
];

echo json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n";
