<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare- Reports</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Inter"]
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
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#2C3E50] dark:text-slate-200">
<div class="relative flex h-auto min-h-screen w-full flex-col">
<!-- Top Navigation Bar -->
<header class="flex items-center justify-between whitespace-nowrap border-b border-solid border-slate-200 dark:border-slate-800 px-6 sm:px-10 py-3 bg-white dark:bg-background-dark sticky top-0 z-10">
<div class="flex items-center gap-4 text-slate-800 dark:text-white">
<div class="size-6 text-primary">
<svg fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M4 42.4379C4 42.4379 14.0962 36.0744 24 41.1692C35.0664 46.8624 44 42.2078 44 42.2078L44 7.01134C44 7.01134 35.068 11.6577 24.0031 5.96913C14.0971 0.876274 4 7.27094 4 7.27094L4 42.4379Z" fill="currentColor"></path>
</svg>
</div>
<h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Medcare</h2>
</div>
<div class="hidden md:flex flex-1 justify-center gap-8">
<div class="flex items-center gap-9">
<a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="{{ route('dashboard') }}">Dashboard</a>
<a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="{{ route('inventory') }}">Inventory</a>
<a class="text-sm font-medium leading-normal text-slate-600 dark:text-slate-300 hover:text-primary dark:hover:text-primary" href="{{ route('products') }}">Sales</a>
<a class="text-sm font-bold leading-normal text-primary" href="{{ route('reporting') }}">Reports</a>
</div>
</div>
<div class="flex flex-1 justify-end items-center gap-3">
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700">
<span class="material-symbols-outlined text-xl">notifications</span>
</button>
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700">
<span class="material-symbols-outlined text-xl">help</span>
</button>
<button class="flex max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 w-10 bg-slate-100 dark:bg-slate-800 text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-slate-700">
<span class="material-symbols-outlined text-xl">settings</span>
</button>
<div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10 ml-2" data-alt="User profile picture" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCgkfgFyYN0BPZA8NsQpSnzyswy5bJm6kYy-wJbg8nln5D5aGRD1mTiQiPDTpm7zgvcGc6hN4K0SPAYI8DR57cgt5pPIMVdw1-vV7DfQC8nmyMVj3JfNDTThcDYESF3ht5B2QIG2vA2P6JM_ggHRzfoBs7dmNHNQX689MZeGZ-gU8Hw5M74XkXvY_9XDpKL3PIbxjY1wQ83Yioc6XKRgkjFRumMjyRKW5178kkdRw8a_Of2syIh8EMNgeZtwYPgjy1IP6Z-QQ58TG8");'></div>
</div>
</header>
<!-- Main Content -->
<div class="flex flex-1">
<!-- Left Sidebar -->
<aside class="w-80 border-r border-slate-200 dark:border-slate-800 bg-white dark:bg-background-dark p-6 flex-shrink-0">
<div class="flex h-full flex-col justify-between">
<div class="flex flex-col gap-6">
<div class="flex items-center gap-3">
<div class="bg-primary/20 text-primary rounded-lg p-2">
<span class="material-symbols-outlined">summarize</span>
</div>
<div class="flex flex-col">
<h1 class="text-base font-bold text-slate-800 dark:text-white">Medcare Reports</h1>
<p class="text-sm font-normal text-slate-500 dark:text-slate-400">Filter &amp; Generate</p>
</div>
</div>
<div class="flex flex-col gap-2">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-primary/10 dark:bg-primary/20" href="#">
<span class="material-symbols-outlined text-primary text-xl">paid</span>
<p class="text-sm font-medium text-primary">Sales</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-600 dark:text-slate-300 text-xl">inventory_2</span>
<p class="text-sm font-medium text-slate-700 dark:text-slate-300">Inventory</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-600 dark:text-slate-300 text-xl">engineering</span>
<p class="text-sm font-medium text-slate-700 dark:text-slate-300">Operations</p>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-800" href="#">
<span class="material-symbols-outlined text-slate-600 dark:text-slate-300 text-xl">bar_chart</span>
<p class="text-sm font-medium text-slate-700 dark:text-slate-300">Custom</p>
</a>
</div>
<hr class="border-slate-200 dark:border-slate-800"/>
<h3 class="text-base font-bold leading-tight tracking-[-0.015em] text-slate-800 dark:text-white">Filters</h3>
<div class="flex flex-col gap-4">
<label class="flex flex-col w-full">
<p class="text-sm font-medium pb-2 text-slate-700 dark:text-slate-300">Report Type</p>
<select class="form-select flex w-full min-w-0 resize-none overflow-hidden rounded-lg text-slate-800 dark:text-slate-200 focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 h-11 placeholder:text-slate-400 px-3 text-sm font-normal">
<option>Daily Sales Summary</option>
<option>Monthly Sales Trend</option>
<option>Product Performance</option>
</select>
</label>
<p class="text-sm font-medium text-slate-700 dark:text-slate-300">Date Range</p>
<div class="flex min-w-72 max-w-[336px] flex-1 flex-col gap-0.5 border border-slate-200 dark:border-slate-700 rounded-lg p-2">
<div class="flex items-center p-1 justify-between">
<button class="text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-full">
<span class="material-symbols-outlined flex size-8 items-center justify-center">chevron_left</span>
</button>
<p class="text-sm font-bold leading-tight flex-1 text-center text-slate-800 dark:text-white">October 2023</p>
<button class="text-slate-600 dark:text-slate-300 hover:bg-slate-100 dark:hover:bg-slate-700 rounded-full">
<span class="material-symbols-outlined flex size-8 items-center justify-center">chevron_right</span>
</button>
</div>
<div class="grid grid-cols-7">
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">S</p>
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">M</p>
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">T</p>
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">W</p>
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">T</p>
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">F</p>
<p class="text-slate-500 text-xs font-bold flex h-8 w-full items-center justify-center">S</p>
<button class="h-8 w-full text-slate-500 dark:text-slate-400 col-start-4 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full">1</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">2</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">3</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">4</div></button>
<button class="h-8 w-full text-white rounded-l-full bg-primary/20 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full bg-primary">5</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">6</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">7</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">8</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">9</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">10</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">11</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">12</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">13</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">14</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">15</div></button>
<button class="h-8 w-full bg-primary/20 dark:bg-primary/30 text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center">16</div></button>
<button class="h-8 w-full text-white rounded-r-full bg-primary/20 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full bg-primary">17</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">18</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">19</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">20</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">21</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">22</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">23</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">24</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">25</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">26</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">27</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">28</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">29</div></button>
<button class="h-8 w-full text-slate-800 dark:text-slate-200 text-sm font-medium"><div class="flex size-full items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-700">30</div></button>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-2 pt-6">
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 px-4 bg-primary text-white text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
<span class="truncate">Generate Report</span>
</button>
<button class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-11 px-4 bg-transparent text-slate-600 dark:text-slate-300 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-slate-100 dark:hover:bg-slate-800">
<span class="truncate">Reset Filters</span>
</button>
</div>
</div>
</aside>
<!-- Report Content -->
<main class="flex-1 p-6 sm:p-10 bg-background-light dark:bg-background-dark">
<div class="flex flex-col gap-8">
<!-- Header Section -->
<div class="flex flex-col gap-4">
<div class="flex justify-between items-center">
<div>
<h1 class="text-2xl font-bold text-slate-800 dark:text-white">Daily Sales Summary</h1>
<p class="text-slate-500 dark:text-slate-400">For the period: October 5, 2023 - October 17, 2023</p>
</div>
<div class="flex gap-2">
<button class="flex cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-white dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm font-medium">
<span class="material-symbols-outlined text-base">print</span>
<span>Print</span>
</button>
<button class="flex cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-10 px-4 bg-white dark:bg-slate-800 border border-slate-300 dark:border-slate-700 text-slate-700 dark:text-slate-300 hover:bg-slate-50 dark:hover:bg-slate-700 text-sm font-medium">
<span class="material-symbols-outlined text-base">download</span>
<span>Export</span>
</button>
</div>
</div>
<!-- KPIs -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 flex flex-col gap-2">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Total Revenue</p>
<p class="text-3xl font-bold text-slate-800 dark:text-white">$42,733.00</p>
<p class="text-sm text-green-500 flex items-center gap-1">
<span class="material-symbols-outlined text-base">arrow_upward</span>
<span>12.5% vs. previous period</span>
</p>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 flex flex-col gap-2">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Profit Margin</p>
<p class="text-3xl font-bold text-slate-800 dark:text-white">24.8%</p>
<p class="text-sm text-red-500 flex items-center gap-1">
<span class="material-symbols-outlined text-base">arrow_downward</span>
<span>1.2% vs. previous period</span>
</p>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 flex flex-col gap-2">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Items Sold</p>
<p class="text-3xl font-bold text-slate-800 dark:text-white">1,204</p>
<p class="text-sm text-green-500 flex items-center gap-1">
<span class="material-symbols-outlined text-base">arrow_upward</span>
<span>8.9% vs. previous period</span>
</p>
</div>
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-5 flex flex-col gap-2">
<p class="text-sm font-medium text-slate-500 dark:text-slate-400">Avg. Sale Value</p>
<p class="text-3xl font-bold text-slate-800 dark:text-white">$35.50</p>
<p class="text-sm text-slate-500 dark:text-slate-400 flex items-center gap-1">
<span class="material-symbols-outlined text-base">horizontal_rule</span>
<span>-0.5% vs. previous period</span>
</p>
</div>
</div>
</div>
<!-- Data Visualization Panel -->
<div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
<div class="lg:col-span-3 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 flex flex-col gap-4">
<h3 class="text-lg font-bold text-slate-800 dark:text-white">Revenue Trend</h3>
<div class="aspect-[16/9] bg-slate-50 dark:bg-slate-800/50 rounded-lg flex items-center justify-center">
<img class="opacity-30 dark:invert dark:opacity-50 max-h-full" data-alt="A sample line chart showing revenue trend over time with peaks and valleys" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCDsF_kLAMIMd-iRob8NwxzQCD5G4znmR7i2-mEWvNyUkoruO3ZPiAUttwUbD_6vQKv-iHdhqwWVV3Lwz4jIeGQQpNsvwRTqA9jTAA1u-lTp41OaUwMrM2H1fsb8Ypk7bbIOkyltfgNbYHLSaGDO6WJb9pYsy2xZOPz-vNgCoDbY4_3FXPEkHzHWgsLxVegkviEuS8DBP7Ms3Ul1axBtpH_o5BYjxRnDduCinu1VnoJzcbtwJt59F19GnaoTieOnQhgOZt8gCMCxw"/>
</div>
</div>
<div class="lg:col-span-2 bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl p-6 flex flex-col gap-4">
<h3 class="text-lg font-bold text-slate-800 dark:text-white">Top 5 Selling Categories</h3>
<div class="aspect-[16/9] bg-slate-50 dark:bg-slate-800/50 rounded-lg flex items-center justify-center">
<img class="opacity-30 dark:invert dark:opacity-50 max-h-full" data-alt="A sample pie chart showing the distribution of sales across five categories" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCnAeKd0NK9oqqRsTsb-JyqpRCHoAFcoCokM5fYDacLzPFwKsHZTAkoIpoAGmCf5liKtQKJYf9ZOT_WpxkbUNms5z4HGnLbtBGeUe85C0KtiiPgJ7W9lzaJ_TtbHxKOQXLv2dT6a9TPItoMV_fVLmqOkWB2taayoLt1Arc6ayoODgzoTe0rM3vfZPWKSdaEiKK5ee7pCGCfPt36oHwv3HmJ9qlEQa72YEv3Wr0AH1m3Jxar1lvKjnYTlYXOgwnmkfnL2JY4_wgueQ4"/>
</div>
</div>
</div>
<!-- Data Table -->
<div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-xl overflow-hidden">
<div class="p-4 sm:p-6 border-b border-slate-200 dark:border-slate-800 flex justify-between items-center">
<h3 class="text-lg font-bold text-slate-800 dark:text-white">Detailed Transactions</h3>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
<input class="form-input w-64 rounded-lg border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 pl-10 h-10 text-sm focus:ring-primary/50 focus:border-primary" placeholder="Search product..." type="text"/>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
<thead class="text-xs text-slate-700 dark:text-slate-300 uppercase bg-slate-50 dark:bg-slate-800">
<tr>
<th class="px-6 py-3" scope="col">Product Name</th>
<th class="px-6 py-3" scope="col">Batch No.</th>
<th class="px-6 py-3" scope="col">Sale Date</th>
<th class="px-6 py-3" scope="col">Quantity</th>
<th class="px-6 py-3 text-right" scope="col">Unit Price</th>
<th class="px-6 py-3 text-right" scope="col">Total Price</th>
</tr>
</thead>
<tbody>
<tr class="border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 font-medium text-slate-900 dark:text-white whitespace-nowrap" scope="row">Paracetamol 500mg</th>
<td class="px-6 py-4">P789-A1</td>
<td class="px-6 py-4">2023-10-16</td>
<td class="px-6 py-4">2</td>
<td class="px-6 py-4 text-right">$5.99</td>
<td class="px-6 py-4 text-right">$11.98</td>
</tr>
<tr class="border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 font-medium text-slate-900 dark:text-white whitespace-nowrap" scope="row">Amoxicillin 250mg</th>
<td class="px-6 py-4">AMX-02B</td>
<td class="px-6 py-4">2023-10-16</td>
<td class="px-6 py-4">1</td>
<td class="px-6 py-4 text-right">$12.50</td>
<td class="px-6 py-4 text-right">$12.50</td>
</tr>
<tr class="border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 font-medium text-slate-900 dark:text-white whitespace-nowrap" scope="row">Vitamin C 1000mg</th>
<td class="px-6 py-4">VC10-C3</td>
<td class="px-6 py-4">2023-10-15</td>
<td class="px-6 py-4">5</td>
<td class="px-6 py-4 text-right">$9.75</td>
<td class="px-6 py-4 text-right">$48.75</td>
</tr>
<tr class="border-b border-slate-200 dark:border-slate-800">
<th class="px-6 py-4 font-medium text-slate-900 dark:text-white whitespace-nowrap" scope="row">Ibuprofen 200mg</th>
<td class="px-6 py-4">IB-PRO4D</td>
<td class="px-6 py-4">2023-10-15</td>
<td class="px-6 py-4">3</td>
<td class="px-6 py-4 text-right">$7.20</td>
<td class="px-6 py-4 text-right">$21.60</td>
</tr>
<tr>
<th class="px-6 py-4 font-medium text-slate-900 dark:text-white whitespace-nowrap" scope="row">Aspirin 81mg</th>
<td class="px-6 py-4">ASP-LOW5</td>
<td class="px-6 py-4">2023-10-14</td>
<td class="px-6 py-4">1</td>
<td class="px-6 py-4 text-right">$4.50</td>
<td class="px-6 py-4 text-right">$4.50</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 flex justify-between items-center text-sm text-slate-600 dark:text-slate-400">
<span>Showing 1 to 5 of 249 results</span>
<div class="inline-flex rounded-lg border border-slate-200 dark:border-slate-700 -space-x-px">
<button class="px-3 py-1.5 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-l-lg">Previous</button>
<button class="px-3 py-1.5 hover:bg-slate-50 dark:hover:bg-slate-800 bg-slate-100 dark:bg-slate-700 font-bold text-primary">1</button>
<button class="px-3 py-1.5 hover:bg-slate-50 dark:hover:bg-slate-800">2</button>
<button class="px-3 py-1.5 hover:bg-slate-50 dark:hover:bg-slate-800">3</button>
<span class="px-3 py-1.5">...</span>
<button class="px-3 py-1.5 hover:bg-slate-50 dark:hover:bg-slate-800">50</button>
<button class="px-3 py-1.5 hover:bg-slate-50 dark:hover:bg-slate-800 rounded-r-lg">Next</button>
</div>
</div>
</div>
</div>
</main>
</div>
</div>
</body></html>