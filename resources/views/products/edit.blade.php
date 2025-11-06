<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
    <h1>Edit Product</h1>
    @if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
    <form method="POST" action="{{ route('products.update', $product) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Name</label>
            <input name="name" value="{{ old('name', $product->name) }}" />
            @error('name')<div style="color:red">{{ $message }}</div>@enderror
        </div>
        <div>
            <label>SKU</label>
            <input name="sku" value="{{ old('sku', $product->sku) }}" />
        </div>
        <div>
            <label>Price</label>
            <input name="price" value="{{ old('price', $product->price) }}" />
        </div>
        <div>
            <label>Quantity</label>
            <input name="quantity" value="{{ old('quantity', $product->quantity) }}" />
        </div>
        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>
        <button type="submit">Update</button>
    </form>
    <form method="POST" action="{{ route('products.destroy', $product) }}" onsubmit="return confirm('Delete this product?')">
        @csrf
        @method('DELETE')
        <button type="submit" style="color:red">Delete</button>
    </form>
    <script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
