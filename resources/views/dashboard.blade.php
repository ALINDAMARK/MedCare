<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
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
              "success": "#28A745",
              "warning": "#FFC107",
              "danger": "#DC3545",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill {
             font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col">
<div class="flex h-full grow flex-row">
<!-- SideNavBar -->
<aside class="flex h-screen min-h-[700px] w-64 flex-col justify-between bg-white dark:bg-background-dark dark:border-r dark:border-slate-800 p-4 sticky top-0">
<div class="flex flex-col gap-4">
<div class="flex items-center gap-3 px-3 py-2">
<div class="size-8 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z" fill="currentColor"></path>
</svg>
</div>
<h1 class="text-slate-900 dark:text-white text-xl font-bold leading-normal">Medcare </h1>
</div>
<nav class="flex flex-col gap-2 mt-4">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 text-primary" href="{{ route('dashboard') }}">
<span class="material-symbols-outlined fill text-primary">dashboard</span>
<p class="text-sm font-semibold leading-normal">Dashboard</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('inventory') }}">
<span class="material-symbols-outlined">inventory_2</span>
<p class="text-sm font-medium leading-normal">Inventory</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('orders') }}">
<span class="material-symbols-outlined">shopping_cart</span>
<p class="text-sm font-medium leading-normal">Orders</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('suppliers') }}">
<span class="material-symbols-outlined">groups</span>
<p class="text-sm font-medium leading-normal">Suppliers</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800" href="{{ route('reporting') }}">
<span class="material-symbols-outlined">lab_profile</span>
<p class="text-sm font-medium leading-normal">Reports</p>
</a>
</nav>
</div>
<div class="flex flex-col gap-4">
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="flex items-center gap-3 px-3 py-2 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-800">
      <span class="material-symbols-outlined">logout</span>
      <p class="text-sm font-medium leading-normal">Logout</p>
    </button>
  </form>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col">
<!-- TopNavBar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark px-8 py-3 sticky top-0 z-10">
<div class="flex flex-1 items-center gap-4 text-slate-900 dark:text-white">
<label class="flex flex-col min-w-40 !h-10 max-w-sm w-full">
<div class="flex w-full flex-1 items-stretch rounded-lg h-full">
<div class="text-slate-500 flex bg-slate-100 dark:bg-slate-800 items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">search</span>
</div>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-slate-900 dark:text-white focus:outline-0 focus:ring-2 focus:ring-primary/50 border-none bg-slate-100 dark:bg-slate-800 h-full placeholder:text-slate-500 dark:placeholder:text-slate-400 px-4 rounded-l-none border-l-0 pl-2 text-base font-normal leading-normal" placeholder="Search medicines, orders..." value=""/>
</div>
</label>
</div>
<div class="flex items-center justify-end gap-4">
<div class="flex gap-2">
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">notifications</span>
</button>
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300">
<span class="material-symbols-outlined">settings</span>
</button>
</div>
<div class="flex items-center gap-3">
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10" data-alt="User avatar image" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAjL1fuL3mmoRPzTmhFQujMwlEwxLA5Mj8iI8rh8OtzD5OvkPzDmat_7FDrXglsCFuX0_0xjGoFGM0wFTXW5xDcy8CKYBuNXb_BC7UCmiRJ4st6h0BRx-K9ZTT0BCniwS0MqvAK2NGeNjEXOCDl2ZmzwKIDrk2BgSoKMWdShLeYuQxyzVoEdtXSqync39Sj4L2SBK3vpXE0lU11KqTFmYhHAqRDHt1Rt4SPcewj4dKPx67yH0iUQFTEtKlVbUC99c99rvjp2ZZEQwg");'></div>
<div class="flex flex-col text-sm text-left">
<p class="font-semibold text-slate-800 dark:text-slate-200">Mark Arinda</p>
<p class="text-slate-500 dark:text-slate-400">Pharmacist</p>
</div>
</div>
</div>
</header>
<div class="flex flex-col p-8 gap-8">
<!-- PageHeading -->
<div class="flex flex-wrap justify-between gap-4 items-center">
<div class="flex min-w-72 flex-col gap-1">
<p class="text-slate-900 dark:text-white text-3xl font-bold leading-tight tracking-[-0.03em]">Dashboard Overview</p>
<p class="text-slate-600 dark:text-slate-400 text-base font-normal leading-normal">Welcome back, here is a summary of your key operational metrics.</p>
</div>
<div class="flex gap-4">
<a href="{{ route('orders.create') }}" class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] gap-2 btn" role="button">
  <span class="material-symbols-outlined text-base">add</span>
  <span class="truncate">Add New Order</span>
</a>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-slate-200 dark:bg-slate-800 text-slate-900 dark:text-white text-sm font-bold leading-normal tracking-[0.015em]">
<span class="truncate">Generate Report</span>
</button>
</div>
</div>
<!-- Stats -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
<p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Total Inventory Value</p>
<p class="text-slate-900 dark:text-white tracking-tight text-3xl font-bold leading-tight">$1,250,400</p>
<p class="text-success text-sm font-medium leading-normal mt-1">+2.5% vs last month</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
<p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Pending Orders</p>
<p class="text-slate-900 dark:text-white tracking-tight text-3xl font-bold leading-tight">82</p>
<p class="text-success text-sm font-medium leading-normal mt-1">+5 from yesterday</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
<p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Low Stock Alerts</p>
<p class="text-slate-900 dark:text-white tracking-tight text-3xl font-bold leading-tight">15</p>
<p class="text-warning text-sm font-medium leading-normal mt-1">Action required</p>
</div>
<div class="flex flex-col gap-2 rounded-xl p-6 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800">
<p class="text-slate-600 dark:text-slate-400 text-base font-medium leading-normal">Items Expiring Soon</p>
<p class="text-slate-900 dark:text-white tracking-tight text-3xl font-bold leading-tight">8</p>
<p class="text-danger text-sm font-medium leading-normal mt-1">Within 30 days</p>
</div>
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
<!-- Inventory Status Section -->
<div class="lg:col-span-2 flex flex-col gap-4 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<h2 class="text-slate-900 dark:text-white text-lg font-bold">Inventory Status</h2>
<div class="h-64 w-full">
<img alt="A bar chart showing inventory levels of various medicines." class="w-full h-full object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDnUI8NL-20M1DUuRX2qw0Px1OR5TUtesbPvK9vs2BHF9r3BXEJEAS_seXytbFZF0gcnPYrsUrhgDYJvSWQMgj6Xhji16EQmD2vjrd3CeuCUTlQqoCPsOxWgejCBRmvgKR3-FPFFTSgwh5rPFarhUgXlo9MDSGNBQ1bm453QrFYmyo_Vnvz7KP-lktocwWkY_HmkD46tsHC91KPv1vTWPCW_UpuJhPBLRO35dbVMDTIdU41pYRGMDv2tPMyhYGuIL8qRbC5s-cz6go"/>
</div>
</div>
<!-- Supplier Information Section -->
<div class="flex flex-col gap-4 bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<h2 class="text-slate-900 dark:text-white text-lg font-bold">Supplier Information</h2>
<div class="flex flex-col gap-4">
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="bg-blue-100 text-blue-600 rounded-full size-10 flex items-center justify-center font-bold">AH</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-200">Andey Health Supplies Ltd</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Delivery in 2 days</p>
</div>
</div>
<span class="text-sm text-slate-500 dark:text-slate-400">PO #5678</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="bg-green-100 text-green-600 rounded-full size-10 flex items-center justify-center font-bold">MM</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-200">Maya Medec supplies Ltd</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Delivery tomorrow</p>
</div>
</div>
<span class="text-sm text-slate-500 dark:text-slate-400">PO #5679</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="bg-purple-100 text-purple-600 rounded-full size-10 flex items-center justify-center font-bold">VM</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-200">Vardy Medix Ltd</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Pending confirmation</p>
</div>
</div>
<span class="text-sm text-slate-500 dark:text-slate-400">PO #5680</span>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="bg-orange-100 text-orange-600 rounded-full size-10 flex items-center justify-center font-bold">KM</div>
<div>
<p class="font-medium text-slate-800 dark:text-slate-200">Kasozi Medtec Ltd</p>
<p class="text-sm text-slate-500 dark:text-slate-400">Delivered today</p>
</div>
</div>
<span class="text-sm text-success font-semibold">Complete</span>
</div>
</div>
</div>
</div>
<!-- Recent Orders Table -->
<div class="bg-white dark:bg-slate-900 p-6 rounded-xl border border-slate-200 dark:border-slate-800">
<h2 class="text-slate-900 dark:text-white text-lg font-bold mb-4">Recent Orders</h2>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="border-b border-slate-200 dark:border-slate-800">
<th class="p-3 text-sm font-semibold text-slate-500 dark:text-slate-400">Order ID</th>
<th class="p-3 text-sm font-semibold text-slate-500 dark:text-slate-400">Customer</th>
<th class="p-3 text-sm font-semibold text-slate-500 dark:text-slate-400">Date</th>
<th class="p-3 text-sm font-semibold text-slate-500 dark:text-slate-400">Status</th>
<th class="p-3 text-sm font-semibold text-slate-500 dark:text-slate-400 text-right">Amount</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-slate-100 dark:border-slate-800">
<td class="p-3 text-sm text-slate-700 dark:text-slate-300 font-medium">#10248</td>
<td class="p-3 text-sm text-slate-700 dark:text-slate-300">Andrew Ndduga</td>
<td class="p-3 text-sm text-slate-500 dark:text-slate-400">2023-10-26</td>
<td class="p-3 text-sm"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Delivered</span></td>
<td class="p-3 text-sm text-slate-800 dark:text-slate-200 font-medium text-right">$150.00</td>
</tr>
<tr class="border-b border-slate-100 dark:border-slate-800">
<td class="p-3 text-sm text-slate-700 dark:text-slate-300 font-medium">#10249</td>
<td class="p-3 text-sm text-slate-700 dark:text-slate-300">Kasozi Aloisius</td>
<td class="p-3 text-sm text-slate-500 dark:text-slate-400">2023-10-26</td>
<td class="p-3 text-sm"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-yellow-100 text-yellow-700">Pending</span></td>
<td class="p-3 text-sm text-slate-800 dark:text-slate-200 font-medium text-right">$85.50</td>
</tr>
<tr class="border-b border-slate-100 dark:border-slate-800">
<td class="p-3 text-sm text-slate-700 dark:text-slate-300 font-medium">#10250</td>
<td class="p-3 text-sm text-slate-700 dark:text-slate-300">Hasacha Hassan</td>
<td class="p-3 text-sm text-slate-500 dark:text-slate-400">2023-10-25</td>
<td class="p-3 text-sm"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">Shipped</span></td>
<td class="p-3 text-sm text-slate-800 dark:text-slate-200 font-medium text-right">$230.75</td>
</tr>
<tr class="border-b border-slate-100 dark:border-slate-800">
<td class="p-3 text-sm text-slate-700 dark:text-slate-300 font-medium">#10251</td>
<td class="p-3 text-sm text-slate-700 dark:text-slate-300">Mark Alinda</td>
<td class="p-3 text-sm text-slate-500 dark:text-slate-400">2023-10-25</td>
<td class="p-3 text-sm"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-700">Cancelled</span></td>
<td class="p-3 text-sm text-slate-800 dark:text-slate-200 font-medium text-right">$45.00</td>
</tr>
<tr>
<td class="p-3 text-sm text-slate-700 dark:text-slate-300 font-medium">#10252</td>
<td class="p-3 text-sm text-slate-700 dark:text-slate-300">Rahman Mayanja</td>
<td class="p-3 text-sm text-slate-500 dark:text-slate-400">2023-10-24</td>
<td class="p-3 text-sm"><span class="px-2 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">Delivered</span></td>
<td class="p-3 text-sm text-slate-800 dark:text-slate-200 font-medium text-right">$112.20</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>