<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare ERP - Stock Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#137fec",
                        "background-light": "#f6f7f8",
                        "background-dark": "#101922",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-gray-800 dark:text-gray-200">
<div class="flex h-screen">
<!-- SideNavBar -->
<aside class="w-64 flex-shrink-0 bg-white dark:bg-background-dark border-r border-gray-200 dark:border-gray-800 flex flex-col">
<div class="flex items-center gap-3 p-4 border-b border-gray-200 dark:border-gray-800 h-16">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Medcare ERP Logo" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDdKQET3sbw7m9-TBexztJ15pWGavfZVsXHsFVX13IT6yPXJOq14VbogNfvACgL6GqXZBCmfq10JXosx_oycUQzN1PA8tdBUNbkka18OZ4e_SVPO-VHxYL9gnxoos3BzdquqS67412aPYVkHG19XyWzP9OqER_7tZhbmUGT9ESTRcvuS1C7njh8iq6zKWW_f0HeTq7_uixu1WPCixhnUv6LcCXvv9XDQXGA-OlEZ0nUFMOzbnlc4oeYnymyOsR_TvDh-gVMoM3Iacw');"></div>
<div class="flex flex-col">
<h1 class="text-base font-bold text-gray-900 dark:text-white">Medcare ERP</h1>
<p class="text-sm font-normal text-gray-500 dark:text-gray-400">Store Admin</p>
</div>
</div>
<nav class="flex-grow p-4">
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-medium">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-primary" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">inventory_2</span>
<p class="text-sm font-medium">Stock Management</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined">shopping_cart</span>
<p class="text-sm font-medium">Orders</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined">group</span>
<p class="text-sm font-medium">Suppliers</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined">assessment</span>
<p class="text-sm font-medium">Reports</p>
</a>
</div>
</nav>
<div class="p-4 border-t border-gray-200 dark:border-gray-800">
<div class="flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined">settings</span>
<p class="text-sm font-medium">Settings</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined">help</span>
<p class="text-sm font-medium">Help</p>
</a>
</div>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-hidden">
<!-- TopNavBar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark h-16 px-6">
<div class="flex items-center gap-8">
<h2 class="text-lg font-bold text-gray-900 dark:text-white">Stock Management</h2>
</div>
<div class="flex flex-1 items-center justify-center max-w-lg">
<label class="w-full">
<div class="relative flex items-center text-gray-500 dark:text-gray-400 focus-within:text-primary">
<span class="material-symbols-outlined absolute left-3">search</span>
<input class="form-input w-full rounded-lg bg-gray-100 dark:bg-gray-800 border-transparent focus:border-primary focus:ring-0 pl-10 h-10 text-sm" placeholder="Search products by name or batch ID..." type="text"/>
</div>
</label>
</div>
<div class="flex items-center gap-4">
<button class="flex min-w-[84px] cursor-pointer items-center justify-center rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold gap-2 hover:bg-primary/90">
<span class="material-symbols-outlined text-base">add</span>
<span class="truncate">Add New Product</span>
</button>
<button class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-400">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBXSQ0muu_9JYRb39qUtI4xk4GosEMOfQcGKaqhy9edhhQurqNlhi07DrFbRxExpJcG85a4wtmCjyMPsIIXS6xhnofFs0IZCDYzkB_uiNbVN6DCljYB_eb9qguEJDT0jU1d3Eq8cIfFEgmuxRgJs6_D2I735ubmoEUKblgrxxo7BLGsqL-gcHq7oMFJEheoDauEf8JozAZaty15ozZqDVRiMyy049u9Gf-8tXUruNfRbUW-iNNRYp3HvXXzvMqnvwFrw2oMmwu1pFc');"></div>
</div>
</header>
<div class="flex-1 overflow-y-auto p-6">
<!-- Stats -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
<div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900/50">
<p class="text-base font-medium text-gray-600 dark:text-gray-300">Total Products</p>
<p class="tracking-tight text-3xl font-bold text-gray-900 dark:text-white">1,482</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900/50">
<p class="text-base font-medium text-gray-600 dark:text-gray-300">Items Low on Stock</p>
<p class="tracking-tight text-3xl font-bold text-yellow-500">56</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900/50">
<p class="text-base font-medium text-gray-600 dark:text-gray-300">Expired Items</p>
<p class="tracking-tight text-3xl font-bold text-red-500">12</p>
</div>
</div>
<!-- Toolbar and Table -->
<div class="mt-6 bg-white dark:bg-gray-900/50 rounded-xl border border-gray-200 dark:border-gray-800">
<div class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-800">
<div class="flex items-center gap-2">
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-100 dark:bg-gray-800 px-3 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">
                                Category: All
                               <span class="material-symbols-outlined text-base">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-100 dark:bg-gray-800 px-3 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">
                                Status: All
                               <span class="material-symbols-outlined text-base">expand_more</span>
</button>
<button class="flex h-9 shrink-0 items-center justify-center gap-x-2 rounded-lg bg-gray-100 dark:bg-gray-800 px-3 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-700">
                                Location: All
                               <span class="material-symbols-outlined text-base">expand_more</span>
</button>
</div>
<div class="flex gap-2">
<button class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-400">
<span class="material-symbols-outlined">filter_list</span>
</button>
<button class="p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 text-gray-600 dark:text-gray-400">
<span class="material-symbols-outlined">swap_vert</span>
</button>
</div>
</div>
<!-- Data Table -->
<div class="overflow-x-auto">
<table class="w-full text-sm text-left">
<thead class="text-xs text-gray-500 dark:text-gray-400 uppercase bg-gray-50 dark:bg-gray-800">
<tr>
<th class="p-4" scope="col"><input class="form-checkbox rounded border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-primary focus:ring-primary" type="checkbox"/></th>
<th class="px-6 py-3" scope="col">Product Name</th>
<th class="px-6 py-3" scope="col">Batch ID</th>
<th class="px-6 py-3" scope="col">Quantity</th>
<th class="px-6 py-3" scope="col">Expiry Date</th>
<th class="px-6 py-3" scope="col">Status</th>
<th class="px-6 py-3" scope="col">Location</th>
<th class="px-6 py-3 text-right" scope="col">Actions</th>
</tr>
</thead>
<tbody>
<tr class="border-b dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="p-4"><input class="form-checkbox rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary" type="checkbox"/></td>
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Paracetamol 500mg</td>
<td class="px-6 py-4">P500-A123</td>
<td class="px-6 py-4">850</td>
<td class="px-6 py-4">12/2025</td>
<td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">In Stock</span></td>
<td class="px-6 py-4">Shelf A-12</td>
<td class="px-6 py-4 text-right">
<button class="p-1 text-gray-500 hover:text-primary dark:hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-red-500 dark:hover:text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
</td>
</tr>
<tr class="border-b dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="p-4"><input class="form-checkbox rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary" type="checkbox"/></td>
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Ibuprofen 200mg</td>
<td class="px-6 py-4">IB200-B456</td>
<td class="px-6 py-4">45</td>
<td class="px-6 py-4">08/2024</td>
<td class="px-6 py-4"><span class="bg-yellow-100 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Low Stock</span></td>
<td class="px-6 py-4">Shelf C-03</td>
<td class="px-6 py-4 text-right">
<button class="p-1 text-gray-500 hover:text-primary dark:hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-red-500 dark:hover:text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
</td>
</tr>
<tr class="border-b dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="p-4"><input class="form-checkbox rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary" type="checkbox"/></td>
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Aspirin 81mg</td>
<td class="px-6 py-4">ASP81-C789</td>
<td class="px-6 py-4">1200</td>
<td class="px-6 py-4">02/2026</td>
<td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">In Stock</span></td>
<td class="px-6 py-4">Shelf A-15</td>
<td class="px-6 py-4 text-right">
<button class="p-1 text-gray-500 hover:text-primary dark:hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-red-500 dark:hover:text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
</td>
</tr>
<tr class="border-b dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="p-4"><input class="form-checkbox rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary" type="checkbox"/></td>
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Amoxicillin 250mg</td>
<td class="px-6 py-4">AMX250-D101</td>
<td class="px-6 py-4">320</td>
<td class="px-6 py-4">03/2023</td>
<td class="px-6 py-4"><span class="bg-red-100 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">Expired</span></td>
<td class="px-6 py-4">Disposal Bin</td>
<td class="px-6 py-4 text-right">
<button class="p-1 text-gray-500 hover:text-primary dark:hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-red-500 dark:hover:text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
</td>
</tr>
<tr class="border-b dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/50">
<td class="p-4"><input class="form-checkbox rounded border-gray-300 dark:border-gray-600 bg-transparent text-primary focus:ring-primary" type="checkbox"/></td>
<td class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">Loratadine 10mg</td>
<td class="px-6 py-4">LOR10-E212</td>
<td class="px-6 py-4">250</td>
<td class="px-6 py-4">11/2027</td>
<td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">In Stock</span></td>
<td class="px-6 py-4">Shelf B-08</td>
<td class="px-6 py-4 text-right">
<button class="p-1 text-gray-500 hover:text-primary dark:hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-red-500 dark:hover:text-red-500"><span class="material-symbols-outlined text-lg">delete</span></button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<nav aria-label="Table navigation" class="flex items-center justify-between p-4">
<span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-5</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
<ul class="inline-flex -space-x-px text-sm h-8">
<li>
<a class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="#">Previous</a>
</li>
<li>
<a aria-current="page" class="flex items-center justify-center px-3 h-8 text-primary border border-gray-300 bg-primary/10 hover:bg-primary/20 hover:text-primary dark:border-gray-700 dark:bg-gray-700 dark:text-white" href="#">1</a>
</li>
<li>
<a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="#">2</a>
</li>
<li>
<a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="#">3</a>
</li>
<li>
<a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white" href="#">Next</a>
</li>
</ul>
</nav>
</div>
</div>
</main>
</div>
</body></html>