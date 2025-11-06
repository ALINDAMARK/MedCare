<!doctype html>
<html>
<head><meta charset="utf-8"><title>Create Supplier</title></head>
<body>
<h1>Create Supplier</h1>
@if(session('success'))<p style="color:green">{{ session('success') }}</p>@endif
<form method="POST" action="{{ route('suppliers.store') }}">
    @csrf
    <div><label>Name</label><input name="name" value="{{ old('name') }}" />@error('name')<div style="color:red">{{ $message }}</div>@enderror</div>
    <div><label>Contact</label><input name="contact_name" value="{{ old('contact_name') }}" /></div>
    <div><label>Email</label><input name="email" value="{{ old('email') }}" /></div>
    <div><label>Phone</label><input name="phone" value="{{ old('phone') }}" /></div>
    <div><label>Address</label><textarea name="address">{{ old('address') }}</textarea></div>
    <button type="submit">Create</button>
</form>
</body>
</html>
