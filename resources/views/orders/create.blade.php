<!doctype html>
<html>
<head><meta charset="utf-8"><title>Create Order</title></head>
<body>
<h1>Create Order</h1>
@if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
<form method="POST" action="{{ route('orders.store') }}">
    @csrf
    <div><label>Order Number</label><input name="order_number" value="{{ old('order_number') }}" /></div>
    <div><label>Product</label>
        <select name="product_id">
            @foreach($products as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
            @endforeach
        </select>
    </div>
    <div><label>Quantity</label><input name="quantity" value="{{ old('quantity',1) }}" /></div>
    <div><label>Total</label><input name="total" value="{{ old('total') }}" /></div>
    <div><label>Status</label><input name="status" value="{{ old('status','pending') }}" /></div>
    <button type="submit">Create</button>
</form>
</body>
</html>
