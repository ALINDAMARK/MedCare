<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\Product;
use App\Models\Supplier;
use App\Models\Order;

$product = Product::first();
$supplier = Supplier::first();

if (! $product || ! $supplier) {
    echo "Missing product or supplier, cannot create order.\n";
    exit(1);
}

$order = Order::create([
    'order_number' => 'TEST-' . time(),
    'product_id' => $product->id,
    'supplier_id' => $supplier->id,
    'quantity' => 2,
    'total' => ($product->price * 2),
    'status' => 'pending',
]);

echo "Created order id: {$order->id}\n";
