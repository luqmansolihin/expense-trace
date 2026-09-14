<!DOCTYPE html>
<html lang="id" class="h-full bg-slate-950 text-slate-100 antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('code', 'Error') - @yield('title', 'Terjadi Kesalahan') | ExpenseTrace</title>

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="alternate icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Local Fonts -->
    <link rel="stylesheet" href="{{ asset('vendor/fonts/fonts.css') }}">

    <!-- Local Tailwind CSS -->
    <script src="{{ asset('vendor/tailwindcss/tailwindcss.js') }}"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/all.min.css') }}">

    <style>
        .error-card {
            background: rgba(15, 23, 42, 0.85);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        .glow-orb-1 {
            position: absolute;
            top: -10%;
            left: 20%;
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(2, 132, 199, 0.25) 0%, rgba(0, 0, 0, 0) 70%);
            filter: blur(40px);
            z-index: 0;
        }
        .glow-orb-2 {
            position: absolute;
            bottom: -10%;
            right: 20%;
            width: 450px;
            height: 450px;
            background: radial-gradient(circle, rgba(13, 148, 136, 0.25) 0%, rgba(0, 0, 0, 0) 70%);
            filter: blur(40px);
            z-index: 0;
        }
    </style>
</head>
<body class="h-full bg-slate-950 flex flex-col justify-between relative overflow-hidden font-sans select-none">
    <!-- Ambient Glow Orbs -->
    <div class="glow-orb-1"></div>
    <div class="glow-orb-2"></div>

    <!-- Header Navigation -->
    <header class="relative z-10 w-full max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <a href="{{ url('/') }}" class="flex items-center gap-3 group">
            <div class="w-10 h-10 rounded-xl bg-gradient-to-tr from-sky-500 to-indigo-600 flex items-center justify-center text-white shadow-lg shadow-sky-500/20 group-hover:scale-105 transition-all">
                <i class="fa-solid fa-receipt text-lg"></i>
            </div>
            <div>
                <span class="font-display font-bold text-lg tracking-tight text-white block">ExpenseTrace</span>
                <span class="text-[11px] font-medium text-slate-400 block -mt-0.5">Perjalanan Dinas & Expense Management System</span>
            </div>
        </a>

        <div class="flex items-center gap-2">
            <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-slate-900/80 border border-slate-800 text-[11px] font-mono text-slate-400">
                <span class="w-2 h-2 rounded-full bg-rose-500 animate-ping"></span>
                HTTP @yield('code', 'ERR')
            </span>
        </div>
    </header>

    <!-- Main Content Container -->
    <main class="relative z-10 flex-1 flex items-center justify-center p-6 my-auto">
        <div class="error-card max-w-xl w-full p-8 sm:p-12 rounded-3xl text-center relative overflow-hidden border border-slate-800">
            <!-- Icon Highlight Header -->
            <div class="mb-6 inline-flex items-center justify-center w-20 h-20 rounded-2xl @yield('icon-bg', 'bg-sky-500/10 border-sky-500/20 text-sky-400') border text-3xl shadow-inner mx-auto">
                <i class="@yield('icon', 'fa-solid fa-triangle-exclamation')"></i>
            </div>

            <!-- Error Code Tag -->
            <div class="font-mono text-sm font-extrabold uppercase tracking-widest text-transparent bg-clip-text bg-gradient-to-r @yield('code-gradient', 'from-sky-400 to-teal-400') mb-2">
                ERROR @yield('code', '500')
            </div>

            <!-- Error Title -->
            <h1 class="font-display text-2xl sm:text-3xl font-bold text-white mb-3 leading-tight">
                @yield('title', 'Terjadi Kesalahan Pada Sistem')
            </h1>

            <!-- Description Message -->
            <p class="text-slate-400 text-xs sm:text-sm leading-relaxed max-w-md mx-auto mb-8">
                @yield('message', 'Halaman atau tindakan yang Anda minta tidak dapat diproses saat ini. Silakan coba kembali beberapa saat lagi.')
            </p>

            <!-- Action Buttons Toolbar -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                <a href="javascript:history.back()" class="w-full sm:w-auto px-5 py-2.5 rounded-xl bg-slate-800/80 hover:bg-slate-800 text-slate-300 hover:text-white border border-slate-700 text-xs font-semibold transition-all inline-flex items-center justify-center gap-2">
                    <i class="fa-solid fa-arrow-left"></i> Halaman Sebelumnya
                </a>

                <a href="{{ Auth::check() ? route('tickets.index') : url('/') }}" class="w-full sm:w-auto px-6 py-2.5 rounded-xl bg-gradient-to-r @yield('btn-gradient', 'from-sky-500 to-teal-500 hover:from-sky-400 hover:to-teal-400') text-white text-xs font-bold shadow-lg transition-all inline-flex items-center justify-center gap-2">
                    <i class="fa-solid fa-house"></i> Kembali ke {{ Auth::check() ? 'Dashboard' : 'Beranda' }}
                </a>
            </div>
        </div>
    </main>

    <!-- Footer Copyright -->
    <footer class="relative z-10 w-full max-w-6xl mx-auto px-6 py-4 text-center text-xs text-slate-600 font-mono">
        &copy; {{ date('Y') }} ExpenseTrace — Perjalanan Dinas & Expense Management System.
    </footer>
</body>
</html>
