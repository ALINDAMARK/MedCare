<!DOCTYPE html>
<html lang="en"><head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Edit Order</title>
        <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
        <script id="tailwind-config">
            tailwind.config = {
                darkMode: "class",
                theme: {
                    extend: {
                        colors: {
                            "primary": "#137fec",
                            "background-light": "#f6f7f8",
                            "background-dark": "#101922",
                        },
                        fontFamily: {"display": ["Inter", "sans-serif"]},
                        borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                    },
                },
            }
        </script>
        <style>
                .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col">
    <div class="flex h-full grow flex-row">
        <!-- SideNav -->
        <aside class="flex h-screen min-h-[700px] w-64 flex-col justify-between bg-white dark:bg-background-dark dark:border-r dark:border-slate-800 p-4 sticky top-0">
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-3 px-3 py-2">
                    <div class="size-8 text-primary">
                        <svg fill="none" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"><path d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z" fill="currentColor"></path></svg>
                    </div>
                    <h1 class="text-slate-900 dark:text-white text-xl font-bold">Medcare</h1>
                </div>
                <nav class="flex flex-col gap-2 mt-4">
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('dashboard') }}">
                        <span class="material-symbols-outlined">dashboard</span>
                        <p class="text-sm font-medium">Dashboard</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('inventory') }}">
                        <span class="material-symbols-outlined">inventory_2</span>
                        <p class="text-sm font-medium">Inventory</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary" href="{{ route('orders') }}">
                        <span class="material-symbols-outlined fill text-primary">shopping_cart</span>
                        <p class="text-sm font-semibold">Orders</p>
                    </a>
                    <a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('suppliers') }}">
                        <span class="material-symbols-outlined">groups</span>
                        <p class="text-sm font-medium">Suppliers</p>
                    </a>
                </nav>
            </div>
            <div class="flex flex-col gap-4">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center gap-2 px-3 py-2 text-sm text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">
                        <span class="material-symbols-outlined">logout</span>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 flex flex-col">
            <!-- Header -->
            <header class="flex items-center justify-between border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark px-8 py-3 sticky top-0 z-10">
                <div class="flex flex-1 items-center gap-4 text-slate-900 dark:text-white">
                    <label class="flex flex-col min-w-40 !h-10 max-w-sm w-full">
                        <div class="flex w-full flex-1 items-stretch rounded-lg h-full">
                            <div class="text-slate-500 flex bg-slate-100 dark:bg-slate-800 items-center justify-center pl-4 rounded-l-lg border-r-0">
                                <span class="material-symbols-outlined">search</span>
                            </div>
                            <input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border-none bg-slate-100 dark:bg-slate-800 h-full placeholder:text-slate-500 dark:placeholder:text-slate-400 px-4 rounded-l-none" placeholder="Search medicines, orders..." value="" />
                        </div>
                    </label>
                </div>
                <div class="flex items-center justify-end gap-4">
                    <div class="flex gap-2">
                        <button class="flex items-center justify-center rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600">
                            <span class="material-symbols-outlined">notifications</span>
                        </button>
                    </div>
                </div>
            </header>

            <div class="flex flex-col p-8 gap-8">
                <div class="flex flex-wrap justify-between gap-4 items-center">
                    <div class="flex min-w-72 flex-col gap-1">
                        <p class="text-slate-900 dark:text-white text-3xl font-bold">Edit Order</p>
                        <p class="text-slate-600 dark:text-slate-400 text-base">Update the order details below.</p>
                    </div>
                </div>

                <div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800 max-w-3xl">
                    @if(session('success'))
                        <div class="mb-4 p-3 rounded bg-green-50 border border-green-200 text-sm text-green-700">{{ session('success') }}</div>
                    @endif

                    @if($errors->any())
                        <div class="mb-4 p-3 rounded bg-red-50 border border-red-200 text-sm text-red-700">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('orders.update', $order) }}" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-200">Order Number</label>
                            <input name="order_number" value="{{ old('order_number', $order->order_number) }}" class="mt-1 block w-full rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-3 text-sm text-slate-900 dark:text-white" />
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-200">Product</label>
                            <select name="product_id" class="mt-1 block w-full rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-3 text-sm text-slate-900 dark:text-white">
                                @foreach($products as $p)
                                    <option value="{{ $p->id }}" {{ (old('product_id', $order->product_id) == $p->id) ? 'selected' : '' }}>{{ $p->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-200">Supplier</label>
                            <select name="supplier_id" class="mt-1 block w-full rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-3 text-sm text-slate-900 dark:text-white">
                                <option value="">-- none --</option>
                                @foreach($suppliers as $s)
                                    <option value="{{ $s->id }}" {{ (old('supplier_id', $order->supplier_id) == $s->id) ? 'selected' : '' }}>{{ $s->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label class="text-sm font-medium text-slate-700 dark:text-slate-200">Quantity</label>
                                <input name="quantity" value="{{ old('quantity', $order->quantity) }}" class="mt-1 block w-full rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-3 text-sm text-slate-900 dark:text-white" />
                            </div>
                            <div>
                                <label class="text-sm font-medium text-slate-700 dark:text-slate-200">Total</label>
                                <input name="total" value="{{ old('total', $order->total) }}" class="mt-1 block w-full rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-3 text-sm text-slate-900 dark:text-white" />
                            </div>
                        </div>

                        <div>
                            <label class="text-sm font-medium text-slate-700 dark:text-slate-200">Status</label>
                            <input name="status" value="{{ old('status', $order->status) }}" class="mt-1 block w-full rounded-lg border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-3 text-sm text-slate-900 dark:text-white" />
                        </div>

                        <div class="flex items-center gap-3">
                            <button type="submit" class="bg-primary text-white px-4 py-2 rounded-lg font-semibold">Update Order</button>
                            <a href="{{ route('orders') }}" class="text-sm text-slate-600 dark:text-slate-400">Cancel</a>
                            <form method="POST" action="{{ route('orders.destroy', $order) }}" onsubmit="return confirm('Delete this order?')" class="ml-auto">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-sm text-red-600 hover:underline">Delete</button>
                            </form>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>
<script src="{{ asset('js/form.js') }}"></script>
</body>
</html>
