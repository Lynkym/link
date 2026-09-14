<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Linkjobs</title>
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
        .glow-focus:focus-within {
            box-shadow: inset 0 0 0 2px rgba(95, 251, 214, 0.2);
            border-color: #5ffbd6;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-lg font-body-md relative overflow-hidden">
    {{-- Background Elements --}}
    <div class="absolute inset-0 pointer-events-none opacity-20">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-primary-fixed blur-[120px] opacity-10"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-secondary-container blur-[120px] opacity-20"></div>
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTYwIDBIMHY2MGg2MFYweiIgZmlsbD0ibm9uZSIvPjxwYXRoIGQ9Ik02MCAwaC0xdjYwaDFWMHoiIGZpbGw9IiMzYzRhNDUiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PHBhdGggZD0iTTAgNjBWMDVoNjB2MUgweiIgZmlsbD0iIzNjNGE0NSIgZmlsbC1vcGFjaXR5PSIwLjEiLz48L3N2Zz4=')] opacity-50"></div>
    </div>

    {{-- Login Card --}}
    <main class="w-full max-w-[440px] relative z-10">
        <div class="glass-panel rounded-xl p-xl shadow-lg relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary-fixed/50 to-transparent"></div>

            {{-- Header --}}
            <div class="text-center mb-xl">
                <div class="inline-flex items-center justify-center w-16 h-16 mb-md rounded-xl bg-primary-fixed/10 border border-primary-fixed/20">
                    <span class="material-symbols-outlined text-primary-fixed text-[32px]">shield</span>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-tertiary mb-xs">Admin Access</h1>
                <p class="font-body-md text-body-md text-on-surface-variant">Panel de administración de Linkjobs</p>
            </div>

            {{-- Error Message --}}
            @if($errors->any())
                <div class="mb-md p-md bg-error-container/10 border border-error-container/30 rounded-lg">
                    <p class="font-body-sm text-body-sm text-error">{{ $errors->first() }}</p>
                </div>
            @endif

            @if(session('error'))
                <div class="mb-md p-md bg-error-container/10 border border-error-container/30 rounded-lg">
                    <p class="font-body-sm text-body-sm text-error">{{ session('error') }}</p>
                </div>
            @endif

            {{-- Form --}}
            <form action="{{ route('admin.login.post') }}" method="POST" class="space-y-md">
                @csrf
                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="email">Email Address</label>
                    <div class="relative group glow-focus rounded bg-background border border-outline-variant transition-all duration-200">
                        <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 20px;">mail</span>
                        </div>
                        <input type="email" name="email" id="email" value="{{ old('email') }}"
                               class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-md text-body-md placeholder-on-surface-variant/50 focus:ring-0"
                               placeholder="admin@linkjobs.com" required autofocus>
                    </div>
                </div>

                <div>
                    <label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="password">Password</label>
                    <div class="relative group glow-focus rounded bg-background border border-outline-variant transition-all duration-200">
                        <div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
                            <span class="material-symbols-outlined" style="font-size: 20px;">lock</span>
                        </div>
                        <input type="password" name="password" id="password"
                               class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-md text-body-md placeholder-on-surface-variant/50 focus:ring-0"
                               placeholder="••••••••" required>
                    </div>
                </div>

                <div class="flex items-center justify-between">
                    <label class="flex items-center gap-sm cursor-pointer">
                        <input type="checkbox" name="remember" class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed">
                        <span class="font-body-sm text-body-sm text-on-surface-variant">Recordarme</span>
                    </label>
                </div>

                <button type="submit" class="w-full bg-primary-fixed text-surface font-headline-md text-body-md py-sm rounded border border-transparent hover:bg-primary-fixed/90 hover:-translate-y-[1px] transition-all duration-200 active:scale-95 flex items-center justify-center gap-xs">
                    Iniciar Sesión
                    <span class="material-symbols-outlined" style="font-size: 18px;">arrow_forward</span>
                </button>
            </form>

            <div class="mt-lg text-center">
                <a href="{{ route('home') }}" class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary-fixed transition-colors">
                    ← Volver al sitio principal
                </a>
            </div>
        </div>
    </main>
</body>
</html>
