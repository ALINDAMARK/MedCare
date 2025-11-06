<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare ERP - Order Management</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
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
            font-variation-settings:
                'FILL' 0,
                'wght' 400,
                'GRAD' 0,
                'opsz' 24
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-gray-800 dark:text-gray-200">
<div class="flex h-screen w-full">
<!-- SideNavBar -->
<aside class="flex w-64 flex-col border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark p-4">
<div class="flex items-center gap-3 mb-8">
<div class="bg-primary/20 rounded-lg p-2 text-primary">
<span class="material-symbols-outlined">health_and_safety</span>
</div>
<div class="flex flex-col">
<h1 class="text-gray-900 dark:text-white text-base font-bold leading-normal">Medcare ERP</h1>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Main Menu</p>
</div>
</div>
<nav class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined text-lg">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/20 text-primary dark:bg-primary/30 dark:text-white" href="#">
<span class="material-symbols-outlined text-lg">shopping_cart</span>
<p class="text-sm font-medium leading-normal">Order Management</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined text-lg">inventory_2</span>
<p class="text-sm font-medium leading-normal">Inventory</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined text-lg">groups</span>
<p class="text-sm font-medium leading-normal">Suppliers</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined text-lg">assessment</span>
<p class="text-sm font-medium leading-normal">Reports</p>
</a>
</nav>
<div class="mt-auto flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined text-lg">settings</span>
<p class="text-sm font-medium leading-normal">Settings</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="#">
<span class="material-symbols-outlined text-lg">logout</span>
<p class="text-sm font-medium leading-normal">Logout</p>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col bg-background-light dark:bg-background-dark overflow-hidden">
<!-- TopNavBar -->
<header class="flex h-16 items-center justify-between whitespace-nowrap border-b border-gray-200 dark:border-gray-800 bg-white dark:bg-background-dark px-6">
<h2 class="text-lg font-bold text-gray-900 dark:text-white">Order Management</h2>
<div class="flex items-center gap-4">
<button class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-xl">notifications</span>
</button>
<button class="flex h-10 w-10 cursor-pointer items-center justify-center rounded-full bg-gray-100 dark:bg-gray-800 text-gray-600 dark:text-gray-300">
<span class="material-symbols-outlined text-xl">help</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAcbnkqKuBxUVy5k5bwt1OTzHOP6Juz4Z_yjurewu6zRCI8HUYJWA07zhqzi59-G81QZfklMH6GvBhrI-dQI3k9sDL6iBQLF4NDn5w9ptXkPMHOTU97ObXYdCPrtM1oWKD2sWyAJ935zEJdtear7UjqNTjg52RSpT1alg1QjwEUBIEngWXBi8JphrYeAEuoM1u_ZGmx25WlyPYlg2HMMYJXe7Rg9cR2SIYzxJWK_ctI8maSDd2p0tKTw0iJFE0BCEvBqB9vCo1Ty4o");'></div>
</div>
</header>
<div class="flex-1 overflow-y-auto p-6">
<div class="flex flex-col gap-4">
<!-- Action Bar -->
<div class="flex items-center justify-between">
<!-- ButtonGroup -->
<div class="flex gap-3">
<button class="flex min-w-[84px] items-center justify-center gap-2 rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold">
<span class="material-symbols-outlined text-base">add</span>
<span class="truncate">Create New Order</span>
</button>
<button class="flex min-w-[84px] items-center justify-center rounded-lg h-10 px-4 bg-gray-200 dark:bg-gray-800 text-gray-800 dark:text-gray-200 text-sm font-bold">
<span class="truncate">New Internal Requisition</span>
</button>
</div>
<!-- SearchBar -->
<div class="w-full max-w-md">
<div class="relative">
<div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
<span class="material-symbols-outlined text-gray-500 dark:text-gray-400">search</span>
</div>
<input class="form-input block w-full rounded-lg border-none bg-gray-100 dark:bg-gray-800 py-2.5 pl-10 text-sm text-gray-900 dark:text-gray-100 placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:outline-none focus:ring-2 focus:ring-primary/50" placeholder="Search by Order ID, Supplier, or Item" type="text"/>
</div>
</div>
</div>
<!-- Filter Chips -->
<div class="flex gap-3 overflow-x-auto pb-2">
<button class="flex h-8 shrink-0 items-center justify-center gap-x-1.5 rounded-lg bg-gray-200 dark:bg-gray-800 px-3">
<p class="text-gray-800 dark:text-gray-200 text-sm font-medium">Status: All</p>
<span class="material-symbols-outlined text-base">arrow_drop_down</span>
</button>
<button class="flex h-8 shrink-0 items-center justify-center gap-x-1.5 rounded-lg bg-gray-200 dark:bg-gray-800 px-3">
<p class="text-gray-800 dark:text-gray-200 text-sm font-medium">Order Type: All</p>
<span class="material-symbols-outlined text-base">arrow_drop_down</span>
</button>
<button class="flex h-8 shrink-0 items-center justify-center gap-x-1.5 rounded-lg bg-gray-200 dark:bg-gray-800 px-3">
<p class="text-gray-800 dark:text-gray-200 text-sm font-medium">Date Range</p>
<span class="material-symbols-outlined text-base">arrow_drop_down</span>
</button>
<button class="flex h-8 shrink-0 items-center justify-center gap-x-1.5 rounded-lg bg-gray-200 dark:bg-gray-800 px-3">
<p class="text-gray-800 dark:text-gray-200 text-sm font-medium">Supplier: All</p>
<span class="material-symbols-outlined text-base">arrow_drop_down</span>
</button>
</div>
<!-- Orders Table -->
<div class="w-full overflow-hidden rounded-xl border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900/50">
<div class="overflow-x-auto">
<table class="w-full text-left text-sm">
<thead class="border-b border-gray-200 dark:border-gray-800 bg-gray-50 dark:bg-gray-800/50 text-xs uppercase text-gray-500 dark:text-gray-400">
<tr>
<th class="p-4" scope="col"><input class="form-checkbox h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary/50 bg-gray-100 dark:bg-gray-700" type="checkbox"/></th>
<th class="px-4 py-3" scope="col">Order ID</th>
<th class="px-4 py-3" scope="col">Supplier/Requester</th>
<th class="px-4 py-3" scope="col">Date</th>
<th class="px-4 py-3" scope="col">Status</th>
<th class="px-4 py-3" scope="col">Total</th>
<th class="px-4 py-3 text-right" scope="col">Actions</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/20">
<td class="w-4 p-4"><input class="form-checkbox h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary/50 bg-gray-100 dark:bg-gray-700" type="checkbox"/></td>
<td class="px-4 py-3 font-medium text-gray-900 dark:text-white">#PO-00754</td>
<td class="px-4 py-3">Global Pharma Inc.</td>
<td class="px-4 py-3">2024-05-22</td>
<td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-green-100 dark:bg-green-900/50 px-2 py-0.5 text-xs font-medium text-green-800 dark:text-green-300">Received</span></td>
<td class="px-4 py-3">$1,250.00</td>
<td class="px-4 py-3 text-right"><button class="text-gray-500 dark:text-gray-400"><span class="material-symbols-outlined">more_horiz</span></button></td>
</tr>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/20">
<td class="w-4 p-4"><input class="form-checkbox h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary/50 bg-gray-100 dark:bg-gray-700" type="checkbox"/></td>
<td class="px-4 py-3 font-medium text-gray-900 dark:text-white">#PO-00753</td>
<td class="px-4 py-3">Cardiology Dept.</td>
<td class="px-4 py-3">2024-05-21</td>
<td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-blue-100 dark:bg-blue-900/50 px-2 py-0.5 text-xs font-medium text-blue-800 dark:text-blue-300">Shipped</span></td>
<td class="px-4 py-3">$875.50</td>
<td class="px-4 py-3 text-right"><button class="text-gray-500 dark:text-gray-400"><span class="material-symbols-outlined">more_horiz</span></button></td>
</tr>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/20">
<td class="w-4 p-4"><input class="form-checkbox h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary/50 bg-gray-100 dark:bg-gray-700" type="checkbox"/></td>
<td class="px-4 py-3 font-medium text-gray-900 dark:text-white">#PO-00752</td>
<td class="px-4 py-3">Wellness Supplies</td>
<td class="px-4 py-3">2024-05-20</td>
<td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-yellow-100 dark:bg-yellow-900/50 px-2 py-0.5 text-xs font-medium text-yellow-800 dark:text-yellow-300">Pending</span></td>
<td class="px-4 py-3">$3,420.00</td>
<td class="px-4 py-3 text-right"><button class="text-gray-500 dark:text-gray-400"><span class="material-symbols-outlined">more_horiz</span></button></td>
</tr>
<tr class="border-b border-gray-200 dark:border-gray-800 hover:bg-gray-50 dark:hover:bg-gray-800/20">
<td class="w-4 p-4"><input class="form-checkbox h-4 w-4 rounded border-gray-300 dark:border-gray-600 text-primary focus:ring-primary/50 bg-gray-100 dark:bg-gray-700" type="checkbox"/></td>
<td class="px-4 py-3 font-medium text-gray-900 dark:text-white">#PO-00751</td>
<td class="px-4 py-3">Pediatrics Ward</td>
<td class="px-4 py-3">2024-05-19</td>
<td class="px-4 py-3"><span class="inline-flex items-center rounded-full bg-red-100 dark:bg-red-900/50 px-2 py-0.5 text-xs font-medium text-red-800 dark:text-red-300">Cancelled</span></td>
<td class="px-4 py-3">$450.00</td>
<td class="px-4 py-3 text-right"><button class="text-gray-500 dark:text-gray-400"><span class="material-symbols-outlined">more_horiz</span></button></td>
</tr>
</tbody>
</table>
</div>
<nav aria-label="Table navigation" class="flex items-center justify-between p-4">
<span class="text-sm font-normal text-gray-500 dark:text-gray-400">Showing <span class="font-semibold text-gray-900 dark:text-white">1-4</span> of <span class="font-semibold text-gray-900 dark:text-white">100</span></span>
<ul class="inline-flex -space-x-px text-sm h-8">
<li><a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-l-lg hover:bg-gray-100 dark:hover:bg-gray-700" href="#">Previous</a></li>
<li><a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700" href="#">1</a></li>
<li><a class="flex items-center justify-center px-3 h-8 leading-tight text-primary bg-primary/20 dark:bg-primary/30 border border-primary/50" href="#">2</a></li>
<li><a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-700" href="#">3</a></li>
<li><a class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 rounded-r-lg hover:bg-gray-100 dark:hover:bg-gray-700" href="#">Next</a></li>
</ul>
</nav>
</div>
</div>
</div>
</main>
</div>
</body></html>