<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare ERP Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2C5B9A", // Custom Primary Color
                        "secondary": "#36A872",
                        "background-light": "#F4F7F9",
                        "background-dark": "#101922",
                        "text-light": "#333333",
                        "text-dark": "#F4F7F9"
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
            font-size: 24px;
        }
    </style>
</head>
<body class="font-display bg-background-light dark:bg-background-dark">
<div class="relative flex h-auto min-h-screen w-full flex-col group/design-root overflow-x-hidden">
<div class="layout-container flex h-full grow flex-col">
<div class="flex flex-1 justify-center">
<div class="layout-content-container flex flex-col w-full flex-1">
<div class="grid grid-cols-1 lg:grid-cols-2 min-h-screen">
<!-- Left Branding Column -->
<div class="relative hidden lg:flex flex-col items-start justify-between p-12 bg-center bg-no-repeat bg-cover" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD975u81eSSoLYAxgV8Fw2ku6aUrfJJHeMZVpjhsCu3MyOqFSU6pNeGLWhvWdyPBJvqqlynHlxt0SGlGDaGPxNBPnHmHnYdJ3x2JwwNyRHECEdQOOlOHk9TTqkq2vDIpweRUmDu7ZwFSIdm5gxnmsIv0wniadldLJNmMYqG_T1fVfwspC1amXyaZHkVO1uGr5nNPQpts5iOg0Ua-GqAkO9lmWq5N0a84kc05TxJsMtu9CitP_3nhD-XInp4Rmanjr6GmZuX1IOsdFE");'>
<div class="absolute inset-0 bg-primary/80"></div>
<div class="relative z-10">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-white text-4xl">health_and_safety</span>
<h2 class="text-3xl font-bold text-white">Medcare ERP</h2>
</div>
</div>
<div class="relative z-10">
<h2 class="text-4xl font-bold leading-tight text-white max-w-md">Empowering Modern Healthcare.</h2>
<p class="text-white/80 mt-4 text-lg max-w-md">Streamlining pharmacy operations with precision and care.</p>
</div>
</div>
<!-- Right Login Form Column -->
<div class="flex flex-col justify-center items-center w-full bg-background-light dark:bg-background-dark p-6 sm:p-8 lg:p-12">
<div class="w-full max-w-md space-y-8">
<div class="flex flex-col items-center lg:hidden">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary dark:text-white text-3xl">health_and_safety</span>
<h2 class="text-2xl font-bold text-text-light dark:text-text-dark">Medcare ERP</h2>
</div>
</div>
<div class="bg-white dark:bg-gray-800 p-8 sm:p-10 rounded-xl shadow-lg w-full">
<h1 class="text-text-light dark:text-text-dark tracking-light text-[32px] font-bold leading-tight text-left pb-2">Log in to your Account</h1>
<p class="text-gray-500 dark:text-gray-400 text-base font-normal leading-normal pb-8">Welcome back! Please enter your details.</p>
<form method="POST" action="{{ route('login.post') }}" class="space-y-6">
                    @csrf

                    @if ($errors->any())
                        <div class="mb-4 p-3 rounded bg-red-50 border border-red-200 text-sm text-red-700">
                            <ul class="list-disc pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
<div class="flex w-full flex-wrap items-end gap-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Email Address</p>
<div class="flex w-full flex-1 items-stretch rounded-lg">
<div class="text-gray-500 dark:text-gray-400 flex border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-gray-700 items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">mail</span>
</div>
<input name="email" value="{{ old('email') }}" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-gray-700 h-14 placeholder:text-gray-500 dark:placeholder:text-gray-400 p-4 rounded-l-none text-base font-normal leading-normal" placeholder="Enter your email" type="email"/>
</div>
</label>
</div>
<div class="flex w-full flex-wrap items-end gap-4">
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-base font-medium leading-normal pb-2">Password</p>
<div class="flex w-full flex-1 items-stretch rounded-lg">
<div class="text-gray-500 dark:text-gray-400 flex border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-gray-700 items-center justify-center pl-4 rounded-l-lg border-r-0">
<span class="material-symbols-outlined">lock</span>
</div>
<input name="password" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-gray-300 dark:border-gray-600 bg-background-light dark:bg-gray-700 h-14 placeholder:text-gray-500 dark:placeholder:text-gray-400 p-4 rounded-l-none text-base font-normal leading-normal" placeholder="Enter your password" type="password"/>
</div>
</label>
</div>
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
    <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }}>
    <label for="remember" class="text-sm text-text-light dark:text-text-dark">Remember me</label>
</div>
<a class="text-primary hover:text-primary/80 dark:hover:text-primary/90 text-sm font-medium leading-normal underline" href="#">Forgot Password?</a>
</div>
<button class="w-full h-14 px-6 bg-primary text-white rounded-lg text-base font-semibold shadow-sm hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary" type="submit">Login</button>
</form>
</div>
                    <div class="text-center mt-4">
                        <p class="text-sm text-text-secondary-light dark:text-text-secondary-dark">Don't have an account? <a class="font-medium text-primary hover:underline" href="{{ route('register') }}">Sign up</a></p>
                    </div>

                    <div class="text-center mt-6">
                        <p class="text-gray-500 dark:text-gray-400 text-sm">© 2024 Medcare. All rights reserved. | <a class="text-primary hover:underline" href="#">Support</a></p>
                    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body></html>