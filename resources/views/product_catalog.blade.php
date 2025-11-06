<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare Store - Product Catalog</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "primary": "#137fec",
              "secondary": "#28a745",
              "background-light": "#f6f7f8",
              "background-dark": "#101922",
              "text-light": "#343A40",
              "text-dark": "#e5e7eb",
              "card-light": "#ffffff",
              "card-dark": "#1f2937",
              "border-light": "#e7edf3",
              "border-dark": "#374151"
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
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col">
<!-- Top Navigation Bar -->
<header class="sticky top-0 z-20 w-full border-b border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark/80 backdrop-blur-sm">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex h-16 items-center justify-between">
<div class="flex items-center gap-8">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">health_and_safety</span>
<h2 class="text-xl font-bold leading-tight tracking-[-0.015em] text-text-light dark:text-text-dark">Medcare Store</h2>
</div>
<nav class="hidden md:flex items-center gap-6">
<a class="text-sm font-medium hover:text-primary" href="#">Home</a>
<a class="text-sm font-medium hover:text-primary" href="#">Prescriptions</a>
<a class="text-sm font-medium hover:text-primary" href="#">About Us</a>
</nav>
</div>
<div class="flex items-center justify-end gap-4">
<label class="relative hidden sm:block w-64">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-400">search</span>
<input class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg border border-border-light dark:border-border-dark bg-background-light dark:bg-background-dark h-10 placeholder:text-gray-400 pl-10 text-sm focus:border-primary focus:ring-primary" placeholder="Search for medicines..." value=""/>
</label>
<div class="flex items-center gap-2">
<button class="flex h-10 w-10 cursor-pointer items-center justify-center overflow-hidden rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
<span class="material-symbols-outlined">person</span>
</button>
<button class="relative flex h-10 w-10 cursor-pointer items-center justify-center overflow-hidden rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700">
<span class="material-symbols-outlined">shopping_cart</span>
<span class="absolute top-1 right-1 flex h-5 w-5 items-center justify-center rounded-full bg-red-500 text-xs font-bold text-white">2</span>
</button>
</div>
</div>
</div>
</div>
</header>
<!-- Main Content -->
<main class="container mx-auto flex flex-grow flex-col px-4 py-8 sm:px-6 lg:flex-row lg:gap-8 lg:px-8">
<!-- Left Sidebar -->
<aside class="w-full shrink-0 lg:w-64">
<div class="sticky top-24 rounded-lg bg-card-light dark:bg-card-dark p-4 shadow-sm border border-border-light dark:border-border-dark">
<div class="flex flex-col gap-6">
<div>
<h3 class="text-base font-bold leading-normal mb-3">Categories</h3>
<div class="flex flex-col gap-1">
<a class="flex items-center gap-3 rounded-lg bg-primary/20 px-3 py-2 text-primary" href="#">
<span class="material-symbols-outlined">pill</span>
<p class="text-sm font-medium">Pain Relief</p>
</a>
<a class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" href="#">
<span class="material-symbols-outlined">device_thermostat</span>
<p class="text-sm font-medium">Cold &amp; Flu</p>
</a>
<a class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" href="#">
<span class="material-symbols-outlined">nutrition</span>
<p class="text-sm font-medium">Vitamins &amp; Supplements</p>
</a>
<a class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" href="#">
<span class="material-symbols-outlined">spa</span>
<p class="text-sm font-medium">Skincare</p>
</a>
<a class="flex items-center gap-3 rounded-lg px-3 py-2 hover:bg-gray-100 dark:hover:bg-gray-700" href="#">
<span class="material-symbols-outlined">wounds_injuries</span>
<p class="text-sm font-medium">First Aid</p>
</a>
</div>
</div>
<div>
<h3 class="text-lg font-bold leading-tight tracking-[-0.015em] pb-2">Filter by</h3>
<div class="relative flex w-full flex-col items-start gap-3">
<p class="text-sm font-medium leading-normal w-full">Price Range</p>
<div class="flex h-[38px] w-full pt-1.5">
<div class="flex h-1 w-full rounded-sm bg-gray-200 dark:bg-gray-600 pl-[10%] pr-[30%]">
<div class="relative">
<div class="absolute -left-2.5 -top-1.5 flex flex-col items-center gap-1">
<div class="size-4 rounded-full bg-primary ring-2 ring-white dark:ring-card-dark"></div>
<p class="text-xs font-normal">$10</p>
</div>
</div>
<div class="h-1 flex-1 rounded-sm bg-primary"></div>
<div class="relative">
<div class="absolute -right-2.5 -top-1.5 flex flex-col items-center gap-1">
<div class="size-4 rounded-full bg-primary ring-2 ring-white dark:ring-card-dark"></div>
<p class="text-xs font-normal">$70</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="pt-2">
<button class="flex w-full min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary text-slate-50 text-sm font-bold leading-normal tracking-[0.015em] hover:bg-primary/90">
<span class="truncate">Apply Filters</span>
</button>
</div>
</div>
</div>
</aside>
<!-- Product Grid -->
<div class="flex-1 mt-8 lg:mt-0">
<!-- Header for Main Content -->
<div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between mb-6">
<div>
<nav class="text-sm text-gray-500 mb-1">
                            Home &gt; Pain Relief
                        </nav>
<h1 class="text-2xl font-bold text-text-light dark:text-text-dark">Pain Relief</h1>
</div>
<div class="flex items-center gap-2">
<label class="text-sm font-medium" for="sort-by">Sort by:</label>
<select class="form-select rounded-lg border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark text-sm focus:border-primary focus:ring-primary" id="sort-by">
<option>Popularity</option>
<option>Price: Low to High</option>
<option>Price: High to Low</option>
</select>
</div>
</div>
<!-- Product Cards -->
<div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3">
<!-- Product Card 1 -->
<div class="flex flex-col overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-sm transition-shadow hover:shadow-lg">
<div class="relative">
<img class="h-48 w-full object-cover" data-alt="White bottle with white pills" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBVXJFBbiCmk5acFz12O5HHaUhFJI7qzkY2H_Tqlq5a_HWsVHjn2Swzs-fEatDB-MZexOwug1RmPqRx192Rq5Yu2_xwNaFTrXhz409azIGvWtUqsjWPWvRtIbf_I4LgUjTHya3BTKfBubNZl29_4REnUBEA10TBX483E-auEdvHkf8Gv1iRwFE7q_9_zsJo4YL3UupzPgmmBRYeeCaTW5s87bdjezdW1gZms0xJYgpMpiJldvFMjCUmjj6NpzhodbPWh7nWhM-MrVI"/>
<span class="absolute top-3 left-3 rounded-full bg-orange-500 px-2 py-1 text-xs font-semibold text-white">On Sale</span>
</div>
<div class="flex flex-1 flex-col p-4">
<h3 class="text-base font-semibold text-text-light dark:text-text-dark">Ibuprofen Tablets</h3>
<p class="text-sm text-gray-500 mt-1">200mg, 50 Tablets</p>
<div class="mt-4 flex flex-1 items-end justify-between">
<p class="text-lg font-bold text-text-light dark:text-text-dark">$8.99</p>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-secondary text-white text-sm font-bold hover:bg-secondary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Product Card 2 -->
<div class="flex flex-col overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-sm transition-shadow hover:shadow-lg">
<div class="relative">
<img class="h-48 w-full object-cover" data-alt="Box of Acetaminophen with pills" src="https://lh3.googleusercontent.com/aida-public/AB6AXuABZVH0dZhppVnExrjYyD2QOcGY_MM80jSpe-AtX35JEcRPFlHlwYJYVwpKrlnRjNeQnfgRLHoLqXUUtj2XzO_c1wAy4DsLz6m2fWffs9dfpFB7Baj9EHvzxcQRjV4LMC7k0D_cPyyzLKUfxgDf55-tBLM7TL4Mcu6M6l4rOu5hvvp-tdp6MXaw2Ecan6fYnPAYlk08BWODPjP8xkp367qxW17bfb-kOMXxEZ-QkTkI8KYxHg2HGgDB1X90C-geCZ9eEtE3dwHzh-I"/>
<span class="absolute top-3 left-3 rounded-full bg-red-600 px-2 py-1 text-xs font-semibold text-white flex items-center gap-1"><span class="material-symbols-outlined !text-sm">prescriptions</span> Rx needed</span>
</div>
<div class="flex flex-1 flex-col p-4">
<h3 class="text-base font-semibold text-text-light dark:text-text-dark">Acetaminophen Extra Strength</h3>
<p class="text-sm text-gray-500 mt-1">500mg, 100 Tablets</p>
<div class="mt-4 flex flex-1 items-end justify-between">
<p class="text-lg font-bold text-text-light dark:text-text-dark">$12.50</p>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-secondary text-white text-sm font-bold hover:bg-secondary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Product Card 3 -->
<div class="flex flex-col overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-sm transition-shadow hover:shadow-lg">
<img class="h-48 w-full object-cover" data-alt="Bottle of Aspirin" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCek0lJz-h7_dVvZs12EmrAcPlPLiBPu7Q-aGhmx9rOAyp1PECuUb0PAmQJH9NkhdMY9Qx1C69sEbLvDSKxRbVJhOZYDkkYwTwZUDj6PgpEBzvny540bKGN0NWQsnN4txBG5WQshsGOppiRVOnvM4tHGmyhj8TneU1R8DN1ZxIdTpH5WT9wipYokEcagGOVh_Pn2yYRF7sgg51tcIJxXShkwZGb9VAOXfSRQgjHPVUDmMnDx_ISIJpxJ_7MxmG0s40LiSQGXcK3WQs"/>
<div class="flex flex-1 flex-col p-4">
<h3 class="text-base font-semibold text-text-light dark:text-text-dark">Aspirin Low Dose</h3>
<p class="text-sm text-gray-500 mt-1">81mg, 120 Tablets</p>
<div class="mt-4 flex flex-1 items-end justify-between">
<p class="text-lg font-bold text-text-light dark:text-text-dark">$6.75</p>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-secondary text-white text-sm font-bold hover:bg-secondary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Product Card 4 -->
<div class="flex flex-col overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-sm transition-shadow hover:shadow-lg">
<img class="h-48 w-full object-cover" data-alt="Pain relief gel tube" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA-U-etw3DjnljKJ0YGtQnCAotsTIdGfZas5bxURvNN4zp_r577CcCyNOQgOjJ5LS83ODZ_pftczcvX9wqckQGZm5Exzh9inijcVOzNu3ru1xfkFLB4OBkvJ6qsJ3ZfqyEva9kdCYfTOu6Ux0JNU3JWB5xbeq5DA8hVtjBSNTmK56-qKNyX6_A8pNMfcicE35UDaZgZF2l5YrUDPvIM9-UolEKAEcqlaJZrhNZ9qBcl5E6BUM1qOEg3OmDwSXtxs-eGw08DIFozCfo"/>
<div class="flex flex-1 flex-col p-4">
<h3 class="text-base font-semibold text-text-light dark:text-text-dark">Topical Pain Relief Gel</h3>
<p class="text-sm text-gray-500 mt-1">3 oz Tube</p>
<div class="mt-4 flex flex-1 items-end justify-between">
<p class="text-lg font-bold text-text-light dark:text-text-dark">$14.99</p>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-secondary text-white text-sm font-bold hover:bg-secondary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Product Card 5 -->
<div class="flex flex-col overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-sm transition-shadow hover:shadow-lg">
<img class="h-48 w-full object-cover" data-alt="Multivitamin bottle with colorful pills" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCbaYImaVCzhwyoe1mqV9zkyrvNCs9Am0xgpdC0IW1f_ZoRdLz37MZ6NcJb3twr1SwBE3h_e2rKJTYQdhDh2B5vyhJENMgDcZvYLEZgGy7b6aS79kNOEnwOQz-hPMCSAEXHOhP4BLN7K08qy2rZl9BkmqQ0H4y2qhRiXJhlAbrO3fkFiJc3u1St33g8W82FrKothNAEQrGnttVqegQjXiSjkprBQkY1QDf2s-97AWTx5_RQnQ0KoPf_SzYiHxsQ-F2ZU7pHpzoePAw"/>
<div class="flex flex-1 flex-col p-4">
<h3 class="text-base font-semibold text-text-light dark:text-text-dark">Daily Multivitamin</h3>
<p class="text-sm text-gray-500 mt-1">For Adults, 90 Tablets</p>
<div class="mt-4 flex flex-1 items-end justify-between">
<p class="text-lg font-bold text-text-light dark:text-text-dark">$19.95</p>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-secondary text-white text-sm font-bold hover:bg-secondary/90">Add to Cart</button>
</div>
</div>
</div>
<!-- Product Card 6 -->
<div class="flex flex-col overflow-hidden rounded-xl border border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark shadow-sm transition-shadow hover:shadow-lg">
<img class="h-48 w-full object-cover" data-alt="Allergy relief medication box" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHoRfJUc125ggQa9FcXcyTblnPDSDwan_tAX3wGBPr6sYHEHQDZWsNjexgnfsXX_xSxxs1mrHu1aQn-44qRMyNrtrJ-8v3bM1sUIKLyxfo89lSj38OXg5K58eTGQBgteUrS0weqySNMDSvbt-AYsr3RQciHJVjBYuoKfiF-0qolMfoKa6_UvdYNpPozE7cMpZKAHpo-RRMKZEWTiWoKNy4wO08PblLpiC8ESPpB0JhzV6FBarC5WdsIXZoCR5MJmaFWhTySLTIk-k"/>
<div class="flex flex-1 flex-col p-4">
<h3 class="text-base font-semibold text-text-light dark:text-text-dark">Allergy Relief Pills</h3>
<p class="text-sm text-gray-500 mt-1">24 Hour, 30 Tablets</p>
<div class="mt-4 flex flex-1 items-end justify-between">
<p class="text-lg font-bold text-text-light dark:text-text-dark">$22.49</p>
<button class="flex items-center justify-center rounded-lg h-10 px-4 bg-secondary text-white text-sm font-bold hover:bg-secondary/90">Add to Cart</button>
</div>
</div>
</div>
</div>
</div>
</main>
<!-- Footer -->
<footer class="w-full border-t border-border-light dark:border-border-dark bg-card-light dark:bg-card-dark mt-auto">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8">
<div class="grid grid-cols-2 md:grid-cols-4 gap-8">
<div class="col-span-2 md:col-span-1">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-3xl">health_and_safety</span>
<h2 class="text-xl font-bold">Medcare Store</h2>
</div>
<p class="mt-2 text-sm text-gray-500">Your trusted source for medicines and health products.</p>
</div>
<div>
<h4 class="font-semibold">Shop</h4>
<ul class="mt-2 space-y-2 text-sm">
<li><a class="text-gray-500 hover:text-primary" href="#">Vitamins</a></li>
<li><a class="text-gray-500 hover:text-primary" href="#">Pain Relief</a></li>
<li><a class="text-gray-500 hover:text-primary" href="#">First Aid</a></li>
</ul>
</div>
<div>
<h4 class="font-semibold">About</h4>
<ul class="mt-2 space-y-2 text-sm">
<li><a class="text-gray-500 hover:text-primary" href="#">About Us</a></li>
<li><a class="text-gray-500 hover:text-primary" href="#">Contact Us</a></li>
<li><a class="text-gray-500 hover:text-primary" href="#">FAQ</a></li>
</ul>
</div>
<div>
<h4 class="font-semibold">Legal</h4>
<ul class="mt-2 space-y-2 text-sm">
<li><a class="text-gray-500 hover:text-primary" href="#">Terms &amp; Conditions</a></li>
<li><a class="text-gray-500 hover:text-primary" href="#">Privacy Policy</a></li>
</ul>
</div>
</div>
<div class="mt-8 border-t border-border-light dark:border-border-dark pt-4 text-center text-sm text-gray-500">
                    © 2024 Medcare Store. All Rights Reserved.
                </div>
</div>
</footer>
</div>
</body></html>