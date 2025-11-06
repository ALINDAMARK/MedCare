<!doctype html>
<html>
<head><meta charset="utf-8"><title>Edit Supplier</title></head>
<body>
<h1>Edit Supplier</h1>
@if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
<form method="POST" action="{{ route('suppliers.update', $supplier) }}">
    @csrf
    @method('PUT')
    <div><label>Name</label><input name="name" value="{{ old('name', $supplier->name) }}" />@error('name')<div style="color:red">{{ $message }}</div>@enderror</div>
    <div><label>Contact</label><input name="contact_name" value="{{ old('contact_name', $supplier->contact_name) }}" /></div>
    <div><label>Email</label><input name="email" value="{{ old('email', $supplier->email) }}" /></div>
    <div><label>Phone</label><input name="phone" value="{{ old('phone', $supplier->phone) }}" /></div>
    <div><label>Address</label><textarea name="address">{{ old('address', $supplier->address) }}</textarea></div>
    <button type="submit">Update</button>
</form>
<form method="POST" action="{{ route('suppliers.destroy', $supplier) }}" onsubmit="return confirm('Delete this supplier?')">
    @csrf
    @method('DELETE')
    <button type="submit" style="color:red">Delete</button>
</form>
</body>
</html>
