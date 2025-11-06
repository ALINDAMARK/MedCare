<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare ERP - Suppliers</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#4A90E2",
                        "background-light": "#F4F7FA",
                        "background-dark": "#101922",
                        "text-light": "#4A4A4A",
                        "text-dark": "#E0E0E0",
                        "accent-green": "#50E3C2",
                        "accent-red": "#D0021B",
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
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-text-light dark:text-text-dark">
<div class="relative flex min-h-screen w-full">
<!-- SideNavBar -->
<aside class="flex h-screen flex-col bg-white dark:bg-background-dark border-r border-gray-200 dark:border-gray-700 w-64 sticky top-0">
<div class="flex flex-col gap-4 p-4">
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="Medcare ERP logo" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuADqVTU_BZJ_-MXgUzA8AC8uKcREhZftgJzNWxiHz4POAfO_9mueHYiKRx24gxz8daEodJTMoAeY0Fy5BYsXM5NoYMGsFkoJhXwg94NcSm6DbqcEOVncqtOAHmmW7oE3NQ9GPFNznqjq4mUXgdHrLSQvfdpPkWky2B-6Bv4X3HfdLWXDoylAjl5vHz4bK7AiDspyq3Yc3ROX65okAQ1eOejXaV56XpaLrb-sysEOius7IhIamUAI7ZrJdGadAwWwkgu6YVYylysQfE");'></div>
<div class="flex flex-col">
<h1 class="text-gray-900 dark:text-white text-base font-medium leading-normal">Medcare ERP</h1>
<p class="text-gray-500 dark:text-gray-400 text-sm font-normal leading-normal">Store Admin</p>
</div>
</div>
<nav class="flex flex-col gap-2 mt-6">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined">dashboard</span>
<p class="text-sm font-medium leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="{{ route('inventory') }}">
<span class="material-symbols-outlined">inventory_2</span>
<p class="text-sm font-medium leading-normal">Inventory</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary dark:bg-primary/20 dark:text-white" href="{{ route('suppliers') }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">local_shipping</span>
<p class="text-sm font-medium leading-normal">Suppliers</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="{{ route('orders') }}">
<span class="material-symbols-outlined">receipt_long</span>
<p class="text-sm font-medium leading-normal">Orders</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800" href="{{ route('reporting') }}">
<span class="material-symbols-outlined">assessment</span>
<p class="text-sm font-medium leading-normal">Reports</p>
</a>
</nav>
</div>
</aside>
<!-- Main Content -->
<main class="flex flex-1 p-6 gap-6">
<!-- Master List Pane -->
<div class="flex-1 flex flex-col gap-4 max-w-5xl">
<!-- PageHeading -->
<div class="flex flex-wrap justify-between items-center gap-3">
<h1 class="text-gray-900 dark:text-white text-4xl font-black leading-tight tracking-[-0.033em]">Suppliers</h1>
<button class="flex min-w-[84px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="material-symbols-outlined text-base">add_circle</span>
<span class="truncate">Add New Supplier</span>
</button>
</div>
<!-- ToolBar -->
<div class="flex flex-wrap justify-between items-center gap-4 p-4 bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700">
<div class="flex items-center gap-2 flex-1 min-w-[200px]">
<span class="material-symbols-outlined text-gray-500">search</span>
<input class="w-full bg-transparent border-none focus:ring-0 p-0 text-sm text-gray-900 dark:text-white placeholder-gray-500" placeholder="Search by name or ID..." type="text"/>
</div>
<div class="flex items-center gap-4">
<div class="flex items-center gap-2">
<label class="text-sm text-gray-600 dark:text-gray-300" for="status-filter">Status:</label>
<select class="bg-gray-50 dark:bg-gray-700 border border-gray-300 dark:border-gray-600 text-gray-900 dark:text-white text-sm rounded-lg focus:ring-primary focus:border-primary block p-2" id="status-filter">
<option selected="">All</option>
<option value="active">Active</option>
<option value="inactive">Inactive</option>
</select>
</div>
<button class="p-2 text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-md">
<span class="material-symbols-outlined">file_upload</span>
</button>
</div>
</div>
<!-- Table -->
<div class="flex flex-col bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 overflow-hidden">
<table class="min-w-full">
<thead class="bg-gray-50 dark:bg-gray-700/50">
<tr>
<th class="p-4 w-12 text-left"><input class="h-4 w-4 rounded border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-primary focus:ring-primary/50" type="checkbox"/></th>
<th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Supplier Name</th>
<th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Supplier ID</th>
<th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Primary Contact</th>
<th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Status</th>
<th class="px-4 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-gray-200 dark:divide-gray-700">
<tr class="hover:bg-gray-50 dark:hover:bg-gray-700/40 bg-primary/10 dark:bg-primary/20">
<td class="p-4 w-12"><input class="h-4 w-4 rounded border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-primary focus:ring-primary/50" type="checkbox"/></td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">Global Pharma Inc.</td>
<td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">GP-10234</td>
<td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Sarah Johnson</td>
<td class="px-4 py-4 whitespace-nowrap"><span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-accent-green/20 text-green-800 dark:text-accent-green">Active</span></td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
<button class="p-1 text-gray-500 hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-primary"><span class="material-symbols-outlined text-lg">visibility</span></button>
</td>
</tr>
<tr>
<td class="p-4 w-12"><input class="h-4 w-4 rounded border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-primary focus:ring-primary/50" type="checkbox"/></td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">MedSupply Co.</td>
<td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">MS-58721</td>
<td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">David Chen</td>
<td class="px-4 py-4 whitespace-nowrap"><span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-accent-green/20 text-green-800 dark:text-accent-green">Active</span></td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
<button class="p-1 text-gray-500 hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-primary"><span class="material-symbols-outlined text-lg">visibility</span></button>
</td>
</tr>
<tr>
<td class="p-4 w-12"><input class="h-4 w-4 rounded border-gray-300 dark:border-gray-600 bg-gray-100 dark:bg-gray-700 text-primary focus:ring-primary/50" type="checkbox"/></td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">CareLogistics Ltd.</td>
<td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">CL-93456</td>
<td class="px-4 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400">Maria Garcia</td>
<td class="px-4 py-4 whitespace-nowrap"><span class="px-2.5 py-0.5 inline-flex text-xs leading-5 font-semibold rounded-full bg-accent-red/20 text-red-800 dark:text-accent-red">Inactive</span></td>
<td class="px-4 py-4 whitespace-nowrap text-sm font-medium">
<button class="p-1 text-gray-500 hover:text-primary"><span class="material-symbols-outlined text-lg">edit</span></button>
<button class="p-1 text-gray-500 hover:text-primary"><span class="material-symbols-outlined text-lg">visibility</span></button>
</td>
</tr>
</tbody>
</table>
<!-- Pagination -->
<div class="flex items-center justify-center p-4 border-t border-gray-200 dark:border-gray-700">
<a class="flex size-8 items-center justify-center rounded-md hover:bg-gray-100 dark:hover:bg-gray-700" href="#">
<span class="material-symbols-outlined text-lg">chevron_left</span>
</a>
<a class="text-sm font-bold flex size-8 items-center justify-center text-white rounded-full bg-primary" href="#">1</a>
<a class="text-sm font-normal flex size-8 items-center justify-center text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700" href="#">2</a>
<a class="text-sm font-normal flex size-8 items-center justify-center text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700" href="#">3</a>
<span class="text-sm font-normal flex size-8 items-center justify-center text-gray-500 dark:text-gray-400" href="#">...</span>
<a class="text-sm font-normal flex size-8 items-center justify-center text-gray-700 dark:text-gray-300 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700" href="#">10</a>
<a class="flex size-8 items-center justify-center rounded-md hover:bg-gray-100 dark:hover:bg-gray-700" href="#">
<span class="material-symbols-outlined text-lg">chevron_right</span>
</a>
</div>
</div>
</div>
<!-- Detail View Pane -->
<div class="w-full max-w-md flex flex-col bg-white dark:bg-gray-800 rounded-xl border border-gray-200 dark:border-gray-700 h-fit sticky top-6">
<div class="p-4 border-b border-gray-200 dark:border-gray-700">
<h2 class="text-lg font-bold text-gray-900 dark:text-white">Global Pharma Inc.</h2>
<p class="text-sm text-gray-500 dark:text-gray-400">ID: GP-10234</p>
</div>
<div class="flex border-b border-gray-200 dark:border-gray-700">
<button class="flex-1 p-3 text-sm font-medium border-b-2 border-primary text-primary">Supplier Info</button>
<button class="flex-1 p-3 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">Contacts</button>
<button class="flex-1 p-3 text-sm font-medium text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-700">History</button>
</div>
<div class="p-6 flex flex-col gap-6">
<div class="grid grid-cols-2 gap-4 text-sm">
<div>
<p class="text-gray-500 dark:text-gray-400">Legal Name</p>
<p class="font-medium text-gray-900 dark:text-white">Global Pharmaceuticals Incorporated</p>
</div>
<div>
<p class="text-gray-500 dark:text-gray-400">VAT Number</p>
<p class="font-medium text-gray-900 dark:text-white">VAT123456789</p>
</div>
<div>
<p class="text-gray-500 dark:text-gray-400">Account Manager</p>
<p class="font-medium text-gray-900 dark:text-white">John Doe</p>
</div>
<div>
<p class="text-gray-500 dark:text-gray-400">Payment Terms</p>
<p class="font-medium text-gray-900 dark:text-white">Net 30 Days</p>
</div>
</div>
<div>
<p class="text-sm text-gray-500 dark:text-gray-400">Business Address</p>
<p class="text-sm font-medium text-gray-900 dark:text-white">123 Pharma Lane, Medcity, MC 12345, USA</p>
</div>
<div>
<p class="text-sm text-gray-500 dark:text-gray-400">Banking Information</p>
<p class="text-sm font-medium text-gray-900 dark:text-white">Bank of Health, Acct: **** **** 1234</p>
</div>
<div class="flex gap-3 pt-4 border-t border-gray-200 dark:border-gray-700">
<button class="flex-1 flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary/10 dark:bg-primary/20 text-primary dark:text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Edit</span>
</button>
<button class="flex-1 flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-accent-red/10 dark:bg-accent-red/20 text-accent-red text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Deactivate</span>
</button>
</div>
</div>
</div>
</main>
</div>
</body></html>