<!DOCTYPE html><html class="dark" lang="en" style=""><head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Linkjobs - Find your next 10x role</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet">
<script id="tailwind-config">
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
                      "body-sm": [
                              "Inter"
                      ],
                      "code-md": [
                              "JetBrains Mono"
                      ],
                      "headline-lg": [
                              "Inter"
                      ],
                      "headline-xl": [
                              "Inter"
                      ],
                      "body-md": [
                              "Inter"
                      ],
                      "headline-md": [
                              "Inter"
                      ],
                      "body-lg": [
                              "Inter"
                      ],
                      "label-caps": [
                              "JetBrains Mono"
                      ]
              },
              "fontSize": {
                      "body-sm": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ],
                      "code-md": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ],
                      "headline-lg": [
                              "32px",
                              {
                                      "lineHeight": "40px",
                                      "letterSpacing": "-0.01em",
                                      "fontWeight": "600"
                              }
                      ],
                      "headline-xl": [
                              "40px",
                              {
                                      "lineHeight": "48px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "24px",
                                      "fontWeight": "400"
                              }
                      ],
                      "headline-md": [
                              "24px",
                              {
                                      "lineHeight": "32px",
                                      "fontWeight": "600"
                              }
                      ],
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "28px",
                                      "fontWeight": "400"
                              }
                      ],
                      "label-caps": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "500"
                              }
                      ]
              }
            },
          },
        }
      </script>
<style>
        body {
            background-color: #0A192F;
            color: #d9e2ff;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .code-pattern {
            background-image: radial-gradient(circle at 2px 2px, rgba(100, 255, 218, 0.05) 1px, transparent 0);
            background-size: 24px 24px;
        }

        /* Glassmorphism utilities */
        .glass-panel {
            background: rgba(17, 34, 64, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(35, 53, 84, 0.5);
        }

        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0A192F; 
        }
        ::-webkit-scrollbar-thumb {
            background: #233554; 
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #3c4962; 
        }

        /* Nav Transition */
        #main-nav.scrolled {
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md overflow-x-hidden selection:bg-primary-fixed selection:text-on-primary-fixed min-h-screen flex flex-col">
<!-- Navigation -->
<nav class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 dark:border-outline-variant/10 shadow-sm transition-all duration-300" id="main-nav">
<div class="flex justify-between items-center px-margin-desktop h-20 max-w-max-width mx-auto">
<!-- Brand -->
<div class="flex items-center gap-4">
<img alt="Linkjobs Logo" class="h-10 w-10 rounded-DEFAULT object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7pdvUHCWvFdCdudyEhI46xDExFm1M3ftLla1aMsn_i7iWQfwUVbNVnA2EhjKSr4cj8fQikNj1Fqb0old0ogOWIeg7sYZ1c_Bv2FXzSXDDwunAQIF-NBHgOYmcA9q30Cft8rydhGJxrqA7VDpsCz13NJMRE-8Xk1IA5pJWIs_UjPu9uoy8SptFhu12AdVZg77uwtArbJPbmjLFBpjtCK_dlwWe-13tvlfui8y1ybpT0jriLiR4Qslo">
<span class="font-headline-md text-headline-md font-bold text-primary-fixed dark:text-primary-fixed-dim tracking-tight">Linkjobs</span>
</div>
<!-- Links (Desktop) -->
<div class="hidden md:flex items-center gap-8">
<a class="font-label-caps text-label-caps text-primary dark:text-primary-fixed-dim border-b-2 border-primary-fixed pb-1 transition-colors" href="#">Find Jobs</a>
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2 transition-all duration-200 active:scale-95" href="#">Companies</a>
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2 transition-all duration-200 active:scale-95" href="#">Salaries</a>
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2 transition-all duration-200 active:scale-95" href="#">Resources</a>
</div>
<!-- Actions (Desktop) -->
<div class="hidden md:flex items-center gap-4">
<button class="font-label-caps text-label-caps text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200">Sign In</button>
<button class="font-label-caps text-label-caps bg-primary-fixed text-[#0A192F] px-6 py-3 rounded-DEFAULT font-semibold hover:opacity-90 transition-opacity active:scale-95">Post a Job</button>
</div>
<!-- Mobile Menu Toggle -->
<button class="md:hidden text-primary-fixed p-2">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow pt-20">
<!-- Hero Section -->
<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden py-xl px-margin-mobile md:px-margin-desktop code-pattern">
<!-- Decorative gradient orb -->
<div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-primary-fixed/5 rounded-full blur-[100px] pointer-events-none"></div>
<div class="relative z-10 max-w-max-width mx-auto w-full flex flex-col items-center text-center gap-lg">
<h1 class="font-headline-xl text-headline-xl text-tertiary-fixed max-w-4xl tracking-tight leading-tight">
                    Find your next <span class="text-primary-fixed">10x</span> role
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
                    The premier job board for software engineers. Discover high-impact roles, transparent salaries, and tech stacks you actually want to work with.
                </p>
<!-- Search Container -->
<div class="w-full max-w-3xl mt-8 glass-panel rounded-xl p-2 shadow-2xl flex flex-col md:flex-row gap-2">
<div class="flex-grow flex items-center bg-[#0A192F] border border-[#233554] rounded-lg px-4 focus-within:border-primary-fixed focus-within:shadow-[inset_0_0_0_2px_rgba(100,255,218,0.2)] transition-all">
<span class="material-symbols-outlined text-on-surface-variant mr-3" data-icon="search">search</span>
<input class="w-full bg-transparent border-none text-tertiary-fixed font-body-md placeholder:text-on-surface-variant/50 focus:ring-0 py-4 outline-none" placeholder="Job title, keyword, or company" type="text">
</div>
<div class="flex-grow flex items-center bg-[#0A192F] border border-[#233554] rounded-lg px-4 focus-within:border-primary-fixed focus-within:shadow-[inset_0_0_0_2px_rgba(100,255,218,0.2)] transition-all">
<span class="material-symbols-outlined text-on-surface-variant mr-3" data-icon="location_on">location_on</span>
<input class="w-full bg-transparent border-none text-tertiary-fixed font-body-md placeholder:text-on-surface-variant/50 focus:ring-0 py-4 outline-none" placeholder="City, state, or 'Remote'" type="text">
</div>
<button class="bg-primary-fixed text-[#0A192F] font-label-caps text-label-caps font-bold px-8 py-4 rounded-lg hover:opacity-90 transition-all active:scale-95 whitespace-nowrap">
                        Search Jobs
                    </button>
</div>
<!-- Quick tags -->
<div class="flex flex-wrap justify-center gap-3 mt-6">
<span class="text-on-surface-variant text-body-sm font-body-sm mr-2 self-center">Popular:</span>
<a class="font-label-caps text-label-caps bg-[#112240] border border-primary-fixed/20 text-tertiary-fixed px-3 py-1.5 rounded-full hover:border-primary-fixed hover:bg-primary-fixed/10 transition-colors" href="#">Frontend</a>
<a class="font-label-caps text-label-caps bg-[#112240] border border-primary-fixed/20 text-tertiary-fixed px-3 py-1.5 rounded-full hover:border-primary-fixed hover:bg-primary-fixed/10 transition-colors" href="#">Backend</a>
<a class="font-label-caps text-label-caps bg-[#112240] border border-primary-fixed/20 text-tertiary-fixed px-3 py-1.5 rounded-full hover:border-primary-fixed hover:bg-primary-fixed/10 transition-colors" href="#">Rust</a>
<a class="font-label-caps text-label-caps bg-[#112240] border border-primary-fixed/20 text-tertiary-fixed px-3 py-1.5 rounded-full hover:border-primary-fixed hover:bg-primary-fixed/10 transition-colors" href="#">Remote</a>
</div>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/10 mt-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-lg px-margin-desktop py-xl max-w-max-width mx-auto">
<!-- Brand Column -->
<div class="flex flex-col gap-4">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-on-surface tracking-tight">Link</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 Linkjobs. Built for engineers.</p>
</div>
<!-- Links -->
<div class="flex flex-col gap-3">
<h4 class="font-label-caps text-label-caps text-primary-fixed mb-2">Platform</h4>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200" href="#">Browse Jobs</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200" href="#">Remote Roles</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200" href="#">Stack Directory</a>
</div>
<div class="flex flex-col gap-3">
<h4 class="font-label-caps text-label-caps text-primary-fixed mb-2">Company</h4>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200" href="#">Engineering Blog</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary hover:underline decoration-primary-fixed underline-offset-4 transition-all duration-200" href="#">Terms of Service</a>
</div>
<div class="flex flex-col gap-3">
<h4 class="font-label-caps text-label-caps text-primary-fixed mb-2">Connect</h4>
<div class="flex gap-4">
<a class="text-on-surface-variant hover:text-primary-fixed transition-colors" href="#"><span class="material-symbols-outlined" data-icon="code">code</span></a>
<a class="text-on-surface-variant hover:text-primary-fixed transition-colors" href="#"><span class="material-symbols-outlined" data-icon="forum">forum</span></a>
</div>
</div>
</div>
</footer>
<script>
        // Simple script to add background to nav on scroll
        const nav = document.getElementById('main-nav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                nav.classList.add('scrolled');
                nav.classList.replace('bg-surface/80', 'bg-[#0A192F]/95');
            } else {
                nav.classList.remove('scrolled');
                nav.classList.replace('bg-[#0A192F]/95', 'bg-surface/80');
            }
        });
    </script>


</body></html>