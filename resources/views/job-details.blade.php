<!DOCTYPE html>
<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $job->title }} - Linkjobs</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet"/>
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
        .tech-chip {
            background-color: #112240;
            border: 1px solid rgba(100, 255, 218, 0.2);
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">
    <!-- Navigation -->
    <header class="fixed top-0 w-full z-50 bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 shadow-sm transition-all duration-200">
        <div class="flex justify-between items-center px-margin-desktop h-20 max-w-max-width mx-auto">
            <a class="flex items-center gap-sm" href="{{ route('home') }}">
                <span class="font-headline-md text-headline-md font-bold text-primary-fixed tracking-tight">Linkjobs</span>
            </a>
            <nav class="hidden md:flex items-center gap-lg font-label-caps text-label-caps">
                <a class="text-on-surface-variant hover:text-primary transition-colors rounded-lg px-sm py-xs" href="{{ route('jobs') }}">Find Jobs</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors rounded-lg px-sm py-xs" href="#">Companies</a>
                <a class="text-on-surface-variant hover:text-primary transition-colors rounded-lg px-sm py-xs" href="#">Salaries</a>
            </nav>
            <div class="flex items-center gap-md">
                <a href="{{ route('login') }}" class="hidden md:block font-label-caps text-label-caps text-secondary-fixed hover:underline decoration-primary-fixed underline-offset-4">Sign In</a>
                <a href="{{ route('jobs') }}" class="bg-primary-fixed text-surface font-label-caps text-label-caps px-md py-sm rounded hover:opacity-90 transition-opacity">Post a Job</a>
            </div>
        </div>
    </header>

    <main class="flex-grow pt-32 pb-xl px-margin-desktop max-w-max-width mx-auto w-full flex flex-col gap-xl">
        <!-- Job Header -->
        <section class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg flex flex-col gap-md">
            <div class="flex justify-between items-start">
                <div>
                    <h1 class="font-headline-xl text-headline-xl text-on-surface mb-sm">{{ $job->title }}</h1>
                    <div class="flex flex-wrap items-center gap-md text-on-surface-variant font-body-md text-body-md">
                        <span class="flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">domain</span>
                            {{ $job->company }}
                        </span>
                        <span class="flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">location_on</span>
                            {{ $job->location }} ({{ $job->work_mode_label }})
                        </span>
                        <span class="flex items-center gap-xs">
                            <span class="material-symbols-outlined text-[18px]">schedule</span>
                            Publicado {{ $job->created_at->diffForHumans() }}
                        </span>
                    </div>
                </div>
                <div class="flex gap-sm">
                    <span class="tech-chip px-3 py-1 rounded-full text-primary-fixed font-label-caps text-label-caps">{{ $job->work_mode_label }}</span>
                    @if($job->salary_range)
                        <span class="tech-chip px-3 py-1 rounded-full text-primary-fixed font-label-caps text-label-caps">{{ $job->salary_range }}</span>
                    @endif
                </div>
            </div>
        </section>

        <!-- Main Content Area -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-xl">
            <!-- Left Column: Description -->
            <div class="md:col-span-2 flex flex-col gap-xl">
                <section class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg">
                    <h2 class="font-headline-md text-headline-md text-on-surface mb-md pb-sm border-b border-outline-variant/20">Descripción del Puesto</h2>
                    <div class="font-body-md text-body-md text-on-surface whitespace-pre-wrap leading-relaxed">
                        {!! nl2br(e($job->description)) !!}
                    </div>

                    @if($job->stack && count($job->stack) > 0)
                        <h3 class="font-headline-md text-headline-md text-on-surface mt-xl mb-sm">Tech Stack</h3>
                        <div class="flex flex-wrap gap-sm">
                            @foreach($job->stack as $tech)
                                <span class="tech-chip px-3 py-1 rounded-full text-primary-fixed font-label-caps text-label-caps">{{ $tech }}</span>
                            @endforeach
                        </div>
                    @endif
                </section>
            </div>

            <!-- Right Column: Company Info & Apply -->
            <div class="flex flex-col gap-lg">
                <section class="bg-surface-container-high border border-outline-variant/20 rounded-lg p-lg sticky top-28">
                    @if($job->contact_email)
                        <a href="mailto:{{ $job->contact_email }}" class="w-full bg-primary-fixed text-surface py-3 rounded font-label-caps text-label-caps hover:opacity-90 transition-opacity mb-md block text-center">Apply Now</a>
                    @else
                        <button class="w-full bg-primary-fixed text-surface py-3 rounded font-label-caps text-label-caps hover:opacity-90 transition-opacity mb-md">Apply Now</button>
                    @endif
                    <button class="w-full bg-transparent border border-primary-fixed text-primary-fixed py-3 rounded font-label-caps text-label-caps hover:bg-primary-fixed/10 transition-colors mb-lg">Save Job</button>

                    <div class="border-t border-outline-variant/20 pt-md">
                        <div class="flex items-center gap-md mb-md">
                            <div class="h-12 w-12 rounded bg-surface-container flex items-center justify-center">
                                <span class="material-symbols-outlined text-on-surface-variant">business</span>
                            </div>
                            <div>
                                <h3 class="font-headline-md text-headline-md text-on-surface">{{ $job->company }}</h3>
                            </div>
                        </div>

                        <div class="flex flex-col gap-sm font-body-sm text-body-sm text-on-surface-variant">
                            <span class="flex items-center gap-xs">
                                <span class="material-symbols-outlined text-[16px]">location_on</span>
                                {{ $job->location }}
                            </span>
                            <span class="flex items-center gap-xs">
                                <span class="material-symbols-outlined text-[16px]">work</span>
                                {{ $job->work_mode_label }}
                            </span>
                            @if($job->contact_email)
                                <span class="flex items-center gap-xs">
                                    <span class="material-symbols-outlined text-[16px]">mail</span>
                                    {{ $job->contact_email }}
                                </span>
                            @endif
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="w-full bg-surface-container-lowest border-t border-outline-variant/10 mt-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-lg px-margin-desktop py-xl max-w-max-width mx-auto">
            <div class="flex flex-col gap-sm">
                <span class="font-headline-md text-headline-md font-bold text-on-surface">Linkjobs</span>
                <span class="font-body-sm text-body-sm text-on-surface-variant">© 2024 Linkjobs. Built for engineers.</span>
            </div>
            <div class="flex flex-col gap-sm">
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="{{ route('jobs') }}">Browse Jobs</a>
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#">Remote Roles</a>
            </div>
            <div class="flex flex-col gap-sm">
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#">Stack Directory</a>
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#">Engineering Blog</a>
            </div>
            <div class="flex flex-col gap-sm">
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#">Privacy Policy</a>
                <a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>
</html>
