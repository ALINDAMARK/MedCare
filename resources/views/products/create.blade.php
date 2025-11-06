<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    @if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <div>
            <label>Name</label>
            <input name="name" value="{{ old('name') }}" />
            @error('name')<div style="color:red">{{ $message }}</div>@enderror
        </div>
        <div>
            <label>SKU</label>
            <input name="sku" value="{{ old('sku') }}" />
        </div>
        <div>
            <label>Price</label>
            <input name="price" value="{{ old('price') }}" />
        </div>
        <div>
            <label>Quantity</label>
            <input name="quantity" value="{{ old('quantity') }}" />
        </div>
        <div>
            <label>Description</label>
            <textarea name="description">{{ old('description') }}</textarea>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>
