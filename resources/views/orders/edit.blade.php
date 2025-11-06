<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit Order</title></head>
<body>
<h1>Edit Order</h1>
@if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
<form method="POST" action="{{ route('orders.update', $order) }}">
    @csrf
    @method('PUT')
    <div><label>Order Number</label><input name="order_number" value="{{ old('order_number', $order->order_number) }}" /></div>
    <div><label>Product</label>
        <select name="product_id">
            @foreach($products as $p)
                <option value="{{ $p->id }}" @if($p->id == $order->product_id) selected @endif>{{ $p->name }}</option>
            @endforeach
        </select>
    </div>
    <div><label>Supplier</label>
        <select name="supplier_id">
            <option value="">-- none --</option>
            @foreach($suppliers as $s)
                <option value="{{ $s->id }}" @if($s->id == $order->supplier_id) selected @endif>{{ $s->name }}</option>
            @endforeach
        </select>
    </div>
    <div><label>Quantity</label><input name="quantity" value="{{ old('quantity', $order->quantity) }}" /></div>
    <div><label>Total</label><input name="total" value="{{ old('total', $order->total) }}" /></div>
    <div><label>Status</label><input name="status" value="{{ old('status', $order->status) }}" /></div>
    <button type="submit">Update</button>
</form>
<form method="POST" action="{{ route('orders.destroy', $order) }}" onsubmit="return confirm('Delete this order?')">
    @csrf
    @method('DELETE')
    <button type="submit" style="color:red">Delete</button>
</form>
</body>
</html>
