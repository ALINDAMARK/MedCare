<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Medcare ERP - Sign Up</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet"/>
<script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#2563EB",
                        "background-light": "#F3F4F6",
                        "background-dark": "#1F2937",
                        "text-light": "#1F2937",
                        "text-dark": "#F3F4F6",
                        "text-secondary-light": "#6B7280",
                        "text-secondary-dark": "#9CA3AF"
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.5rem",
                        "lg": "0.75rem",
                        "xl": "1rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24
        }
    </style>
</head>
<body class="font-display">
<div class="relative flex h-auto min-h-screen w-full flex-col bg-background-light dark:bg-background-dark group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
<div class="layout-container flex h-full grow flex-col">
<div class="flex flex-1 justify-center items-center">
<div class="layout-content-container flex flex-col w-full max-w-6xl flex-1">
<div class="grid grid-cols-1 lg:grid-cols-2 min-h-[80vh] w-full">
<div class="relative hidden lg:flex flex-col justify-between p-12 bg-primary/10 dark:bg-primary/20 rounded-l-xl">
<div class="z-10">
<h2 class="text-2xl font-bold text-text-light dark:text-text-dark">Medcare</h2>
<p class="text-text-secondary-light dark:text-text-secondary-dark mt-2">Streamlining Your Pharmacy Operations.</p>
</div>
<div class="relative w-full aspect-square flex items-center justify-center">
<div class="w-full h-full bg-center bg-no-repeat bg-contain" data-alt="An abstract graphic representing data and health, showing interconnected nodes and lines in a clean, modern style." style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBNMXRVE4sKidQAgn0-iEZRgPwhys_WkIA2lgwFNrQtrOwZ2nssuE7U3n0YzHiqpfEbiMYIzfqFSJB2lneK8DqpHwbRIQg0YsO1umGcxstvvrenE7ZR1ZMa-8HmUTUIYU-ZAsWDvTPM5aIdbmI-mZrkZLhD2iVisJRu8aWsOR92Qa-VdTKh7lylb29XHvCMRfBzsO_-eLfBJpff_TLehHC3delMrtbERabxNrGMLN-WpPrbm8ZxpcEC-4PnU9ZXUyn30ZyST1E77VA"); background-size: cover; border-radius: 0.75rem;'></div>
</div>
<div class="z-10"></div>
</div>
<div class="flex flex-col justify-center bg-white dark:bg-black/20 p-8 sm:p-12 rounded-xl lg:rounded-l-none">
<div class="w-full max-w-md mx-auto">
<div class="flex flex-col gap-2 mb-8">
<p class="text-text-light dark:text-text-dark text-3xl font-black leading-tight tracking-[-0.033em]">Create Your Account</p>
<p class="text-text-secondary-light dark:text-text-secondary-dark text-base font-normal leading-normal">Get started with Medcare's all-in-one ERP solution.</p>
</div>
<form method="POST" action="{{ route('register.post') }}" class="flex flex-col gap-4">
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
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-sm font-medium leading-normal pb-2">Full Name</p>
<input name="name" value="{{ old('name') }}" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-background-light dark:bg-slate-800 focus:border-primary h-12 placeholder:text-text-secondary-light dark:placeholder:text-text-secondary-dark p-[15px] text-base font-normal leading-normal" placeholder="Enter your full name" type="text" />
</label>
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-sm font-medium leading-normal pb-2">Work Email</p>
<input name="email" value="{{ old('email') }}" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-background-light dark:bg-slate-800 focus:border-primary h-12 placeholder:text-text-secondary-light dark:placeholder:text-text-secondary-dark p-[15px] text-base font-normal leading-normal" placeholder="Enter your work email" type="email" />
</label>
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-sm font-medium leading-normal pb-2">Create Password</p>
<div class="relative flex w-full flex-1 items-stretch">
<input name="password" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-background-light dark:bg-slate-800 focus:border-primary h-12 placeholder:text-text-secondary-light dark:placeholder:text-text-secondary-dark p-[15px] text-base font-normal leading-normal pr-12" placeholder="Enter your password" type="password" value=""/>
<button class="absolute inset-y-0 right-0 flex items-center pr-3 text-text-secondary-light dark:text-text-secondary-dark" data-alt="Toggle password visibility" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</label>
<label class="flex flex-col min-w-40 flex-1">
<p class="text-text-light dark:text-text-dark text-sm font-medium leading-normal pb-2">Confirm Password</p>
<input name="password_confirmation" class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-text-light dark:text-text-dark focus:outline-0 focus:ring-2 focus:ring-primary/50 border border-slate-300 dark:border-slate-700 bg-background-light dark:bg-slate-800 focus:border-primary h-12 placeholder:text-text-secondary-light dark:placeholder:text-text-secondary-dark p-[15px] text-base font-normal leading-normal" placeholder="Confirm your password" type="password" value=""/>
</label>
<button class="flex items-center justify-center w-full bg-primary text-white font-semibold h-12 rounded-lg mt-4 hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary/50 dark:focus:ring-offset-background-dark" type="submit">Sign Up</button>
</form>
<div class="text-center mt-6">
<p class="text-sm text-text-secondary-light dark:text-text-secondary-dark">
                                        Already have an account? <a class="font-medium text-primary hover:underline" href="{{ route('login') }}">Log In</a>
</p>
<p class="text-xs text-text-secondary-light/80 dark:text-text-secondary-dark/80 mt-4">
                                        By signing up, you agree to our <a class="underline hover:text-primary" href="#">Terms of Service</a> &amp; <a class="underline hover:text-primary" href="#">Privacy Policy</a>.
                                    </p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body></html>