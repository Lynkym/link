<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin') - Linkjobs Admin</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "on-secondary-fixed": "#0d1c32",
                        "tertiary-fixed": "#d8e2ff",
                        "surface-variant": "#2a344e",
                        "secondary-fixed-dim": "#b9c7e4",
                        "on-primary-fixed": "#002019",
                        "on-background": "#d9e2ff",
                        "outline": "#85948e",
                        "secondary-container": "#3c4962",
                        "inverse-on-surface": "#263049",
                        "tertiary": "#ffffff",
                        "on-tertiary-container": "#556486",
                        "inverse-surface": "#d9e2ff",
                        "on-primary-container": "#00725e",
                        "on-tertiary-fixed": "#091b39",
                        "on-error": "#690005",
                        "surface": "#07122a",
                        "outline-variant": "#3c4a45",
                        "surface-container-high": "#1f2942",
                        "primary": "#ffffff",
                        "tertiary-fixed-dim": "#b6c6ed",
                        "secondary": "#b9c7e4",
                        "surface-bright": "#2f3952",
                        "tertiary-container": "#d8e2ff",
                        "error-container": "#93000a",
                        "on-error-container": "#ffdad6",
                        "surface-container-low": "#101b33",
                        "on-secondary": "#233148",
                        "error": "#ffb4ab",
                        "primary-container": "#5ffbd6",
                        "on-surface-variant": "#bacac3",
                        "surface-dim": "#07122a",
                        "on-primary": "#00382d",
                        "on-tertiary-fixed-variant": "#374767",
                        "background": "#07122a",
                        "surface-container": "#151f37",
                        "on-surface": "#d9e2ff",
                        "surface-tint": "#38debb",
                        "primary-fixed-dim": "#38debb",
                        "inverse-primary": "#006b58",
                        "on-secondary-fixed-variant": "#39475f",
                        "secondary-fixed": "#d6e3ff",
                        "on-secondary-container": "#abb9d6",
                        "surface-container-highest": "#2a344e",
                        "surface-container-lowest": "#030d25",
                        "on-primary-fixed-variant": "#005142",
                        "primary-fixed": "#5ffbd6",
                        "on-tertiary": "#20304f"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "xl": "32px",
                        "max-width": "1200px",
                        "gutter": "20px",
                        "unit": "4px",
                        "xs": "4px",
                        "margin-mobile": "16px",
                        "lg": "24px",
                        "margin-desktop": "40px",
                        "md": "16px",
                        "sm": "8px"
                    },
                    "fontFamily": {
                        "body-sm": ["Inter"],
                        "code-md": ["JetBrains Mono"],
                        "headline-lg": ["Inter"],
                        "headline-xl": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-md": ["Inter"],
                        "body-lg": ["Inter"],
                        "label-caps": ["JetBrains Mono"]
                    },
                    "fontSize": {
                        "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "code-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                        "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                        "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}],
                        "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                        "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}]
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #07122a;
            color: #d9e2ff;
            -webkit-font-smoothing: antialiased;
        }

        .glass-panel {
            background: rgba(17, 34, 64, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(35, 53, 84, 0.5);
        }

        ::-webkit-scrollbar {
            width: 6px;
        }
        ::-webkit-scrollbar-track {
            background: #07122a;
        }
        ::-webkit-scrollbar-thumb {
            background: #233554;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3c4962;
        }

        .sidebar-link {
            transition: all 0.2s ease;
        }
        .sidebar-link:hover {
            background: rgba(31, 41, 66, 0.5);
            border-left: 2px solid #5ffbd6;
        }
        .sidebar-link.active {
            background: rgba(95, 251, 214, 0.1);
            border-left: 2px solid #5ffbd6;
            color: #5ffbd6;
        }
    </style>
    @stack('styles')
</head>
<body class="bg-background text-on-surface font-body-md min-h-screen flex">
    {{-- Sidebar --}}
    <aside class="w-64 bg-surface-container border-r border-outline-variant/20 fixed h-full flex flex-col">
        {{-- Logo --}}
        <div class="p-lg border-b border-outline-variant/20">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-sm">
                <div class="w-10 h-10 rounded-lg bg-primary-fixed/10 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary-fixed">shield</span>
                </div>
                <div>
                    <span class="font-headline-md text-headline-md font-bold text-primary-fixed tracking-tight">Linkjobs</span>
                    <span class="font-label-caps text-label-caps text-on-surface-variant block">Admin Panel</span>
                </div>
            </a>
        </div>

        {{-- Navigation --}}
        <nav class="flex-1 p-md space-y-xs overflow-y-auto">
            <a href="{{ route('home') }}" 
               class="sidebar-link flex items-center gap-sm px-md py-sm rounded-lg text-on-surface-variant hover:text-on-surface">
                <span class="material-symbols-outlined text-[20px]">home</span>
                <span class="font-body-sm text-body-sm">Homepage</span>
            </a>
            <div class="border-b border-outline-variant/20 my-sm"></div>
            <a href="{{ route('admin.dashboard') }}" 
               class="sidebar-link flex items-center gap-sm px-md py-sm rounded-lg text-on-surface-variant hover:text-on-surface {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                <span class="material-symbols-outlined text-[20px]">dashboard</span>
                <span class="font-body-sm text-body-sm">Dashboard</span>
            </a>
            <a href="{{ route('admin.users.index') }}" 
               class="sidebar-link flex items-center gap-sm px-md py-sm rounded-lg text-on-surface-variant hover:text-on-surface {{ request()->routeIs('admin.users.*') ? 'active' : '' }}">
                <span class="material-symbols-outlined text-[20px]">group</span>
                <span class="font-body-sm text-body-sm">Usuarios</span>
            </a>
            <a href="{{ route('admin.jobs.index') }}" 
               class="sidebar-link flex items-center gap-sm px-md py-sm rounded-lg text-on-surface-variant hover:text-on-surface {{ request()->routeIs('admin.jobs.*') ? 'active' : '' }}">
                <span class="material-symbols-outlined text-[20px]">work</span>
                <span class="font-body-sm text-body-sm">Empleos</span>
            </a>
            <a href="{{ route('admin.settings.index') }}" 
               class="sidebar-link flex items-center gap-sm px-md py-sm rounded-lg text-on-surface-variant hover:text-on-surface {{ request()->routeIs('admin.settings.*') ? 'active' : '' }}">
                <span class="material-symbols-outlined text-[20px]">settings</span>
                <span class="font-body-sm text-body-sm">Configuración</span>
            </a>
        </nav>

        {{-- User Info --}}
        <div class="p-lg border-t border-outline-variant/20">
            <div class="flex items-center gap-sm">
                <div class="w-9 h-9 rounded-full bg-primary-fixed/20 flex items-center justify-center">
                    <span class="material-symbols-outlined text-primary-fixed text-[18px]">person</span>
                </div>
                <div class="flex-1 min-w-0">
                    <p class="font-body-sm text-body-sm text-on-surface truncate">{{ Auth::guard('admin')->user()->name ?? 'Admin' }}</p>
                    <p class="font-label-caps text-label-caps text-on-surface-variant">{{ ucfirst(Auth::guard('admin')->user()->role ?? 'admin') }}</p>
                </div>
                <form action="{{ route('admin.logout') }}" method="POST" class="hidden">
                    @csrf
                </form>
                <button onclick="this.closest('form').submit()" class="text-on-surface-variant hover:text-error transition-colors">
                    <span class="material-symbols-outlined text-[20px]">logout</span>
                </button>
            </div>
        </div>
    </aside>

    {{-- Main Content --}}
    <main class="flex-1 ml-64 min-h-screen">
        {{-- Top Bar --}}
        <header class="bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 sticky top-0 z-40 h-16">
            <div class="flex items-center justify-between px-xl h-full max-w-max-width mx-auto">
                <div>
                    <h1 class="font-headline-md text-headline-md text-on-surface">@yield('header', 'Dashboard')</h1>
                </div>
                <div class="flex items-center gap-md">
                    @yield('actions')
                </div>
            </div>
        </header>

        {{-- Page Content --}}
        <div class="p-xl max-w-max-width mx-auto">
            {{-- Flash Messages --}}
            @if(session('success'))
                <div class="mb-lg p-md bg-primary-fixed/10 border border-primary-fixed/30 rounded-lg flex items-center gap-sm">
                    <span class="material-symbols-outlined text-primary-fixed">check_circle</span>
                    <span class="font-body-sm text-body-sm text-on-surface">{{ session('success') }}</span>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-lg p-md bg-error-container/10 border border-error-container/30 rounded-lg flex items-center gap-sm">
                    <span class="material-symbols-outlined text-error">error</span>
                    <span class="font-body-sm text-body-sm text-on-surface">{{ session('error') }}</span>
                </div>
            @endif

            @yield('content')
        </div>
    </main>

    @stack('scripts')
</body>
</html>
