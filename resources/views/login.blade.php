<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - Linkjobs</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                            "on-tertiary-fixed": "#091b39",
                            "error": "#ffb4ab",
                            "error-container": "#93000a",
                            "on-secondary-fixed-variant": "#39475f",
                            "surface-dim": "#07122a",
                            "secondary-fixed": "#d6e3ff",
                            "primary-fixed": "#5ffbd6",
                            "inverse-primary": "#006b58",
                            "outline-variant": "#3c4a45",
                            "on-error": "#690005",
                            "on-primary-fixed": "#002019",
                            "primary-container": "#5ffbd6",
                            "surface-container-low": "#101b33",
                            "tertiary-fixed-dim": "#b6c6ed",
                            "on-error-container": "#ffdad6",
                            "tertiary-container": "#d8e2ff",
                            "inverse-on-surface": "#263049",
                            "secondary-fixed-dim": "#b9c7e4",
                            "surface-bright": "#2f3952",
                            "on-tertiary-container": "#556486",
                            "on-secondary-container": "#abb9d6",
                            "on-primary-container": "#00725e",
                            "on-primary": "#00382d",
                            "surface-variant": "#2a344e",
                            "surface": "#07122a",
                            "secondary": "#b9c7e4",
                            "on-tertiary": "#20304f",
                            "outline": "#85948e",
                            "on-background": "#d9e2ff",
                            "tertiary": "#ffffff",
                            "surface-tint": "#38debb",
                            "on-tertiary-fixed-variant": "#374767",
                            "on-primary-fixed-variant": "#005142",
                            "inverse-surface": "#d9e2ff",
                            "on-secondary": "#233148",
                            "primary-fixed-dim": "#38debb",
                            "surface-container-highest": "#2a344e",
                            "surface-container": "#151f37",
                            "on-surface": "#d9e2ff",
                            "surface-container-high": "#1f2942",
                            "on-surface-variant": "#bacac3",
                            "surface-container-lowest": "#030d25",
                            "secondary-container": "#3c4962",
                            "tertiary-fixed": "#d8e2ff",
                            "on-secondary-fixed": "#0d1c32",
                            "background": "#07122a",
                            "primary": "#ffffff"
                    },
                    "borderRadius": {
                            "DEFAULT": "0.125rem",
                            "lg": "0.25rem",
                            "xl": "0.5rem",
                            "full": "0.75rem"
                    },
                    "spacing": {
                            "md": "16px",
                            "margin-mobile": "16px",
                            "gutter": "20px",
                            "xl": "32px",
                            "margin-desktop": "40px",
                            "unit": "4px",
                            "xs": "4px",
                            "sm": "8px",
                            "max-width": "1200px",
                            "lg": "24px"
                    },
                    "fontFamily": {
                            "body-sm": ["Inter"],
                            "headline-xl": ["Inter"],
                            "body-md": ["Inter"],
                            "body-lg": ["Inter"],
                            "label-caps": ["JetBrains Mono"],
                            "code-md": ["JetBrains Mono"],
                            "headline-lg": ["Inter"],
                            "headline-md": ["Inter"]
                    },
                    "fontSize": {
                            "body-sm": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                            "headline-xl": ["40px", {"lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700"}],
                            "body-md": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                            "body-lg": ["18px", {"lineHeight": "28px", "fontWeight": "400"}],
                            "label-caps": ["12px", {"lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500"}],
                            "code-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                            "headline-lg": ["32px", {"lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600"}],
                            "headline-md": ["24px", {"lineHeight": "32px", "fontWeight": "600"}]
                    }
                }
            }
        }
    </script>
<style>
        body {
            background-color: #07122a; /* background color */
            color: #d9e2ff; /* on-background */
        }
        
        .glass-panel {
            background-color: rgba(17, 34, 64, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid #233554;
        }

        .btn-primary {
            background-color: #64FFDA;
            color: #0A192F;
        }

        .btn-secondary {
            border: 1px solid #64FFDA;
            color: #64FFDA;
            transition: background-color 0.2s;
        }
        
        .btn-secondary:hover {
            background-color: rgba(100, 255, 218, 0.1);
        }

        .input-field {
            background-color: #0A192F;
            border: 1px solid #233554;
            color: #d9e2ff;
        }
        
        .input-field:focus {
            border-color: #64FFDA;
            box-shadow: inset 0 0 0 2px rgba(100, 255, 218, 0.2);
            outline: none;
        }
        
        .social-btn {
            background-color: #112240;
            border: 1px solid #233554;
            transition: border-color 0.2s;
        }
        
        .social-btn:hover {
            border-color: #64FFDA;
        }
    </style>
</head>
<body class="min-h-screen flex flex-col font-body-md text-body-md antialiased selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- TopNavBar (Suppressed for transactional page, but retained per instructions) -->
<header class="bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/30 shadow-sm fixed top-0 w-full z-50 h-16">
<div class="flex justify-between items-center px-margin-desktop h-16 max-w-max-width mx-auto">
<div class="font-headline-md text-headline-md font-bold text-primary-fixed dark:text-primary-fixed-dim tracking-tight">
                Linkjobs
            </div>
<nav class="hidden md:flex space-x-lg">
<!-- Navigation links suppressed for login/transactional intent to focus on the canvas -->
</nav>
<div>
<a class="text-on-surface-variant hover:text-primary-fixed transition-colors font-body-sm text-body-sm active:scale-95 transition-transform" href="#">
                    Back to Home
                </a>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-grow flex items-center justify-center p-gutter pt-24 pb-xl">
<div class="w-full max-w-[440px] glass-panel rounded-xl p-lg shadow-lg relative overflow-hidden">
<!-- Subtle decorative glow -->
<div class="absolute -top-20 -right-20 w-40 h-40 bg-primary-fixed/10 rounded-full blur-3xl pointer-events-none"></div>
<!-- Header -->
<div class="text-center mb-xl">
<div class="inline-block w-16 h-16 mb-md rounded-lg overflow-hidden border border-outline-variant/30">
<img alt="Linkjobs Logo" class="w-full h-full object-cover" src="https://lh3.googleusercontent.com/aida/AEtjO1WrDr53lOLjDXl4jYJLZyhEvMqhqnREpi230WL_diKoBTyDfwSA7ols2gzuZM5a9IG6cOAUk_dx7vTL6Dk5Gup9lDoApfV9JatctMdRDFy5Qx3WDDU_BmVvkMBvUjFPOLBlSGqMPHmYewqEUZ0wVxCZFtNfsE6U_a3yAy_EJlx7L8Xx7hJ8m9iNrKfiD7Bp1qHJO5Fpp81Wbs235mRCj45ZPuuc8IOrjKvBMJBsgND0wSTlwymfLHhQMfk"/>
</div>
<h1 class="font-headline-lg text-headline-lg text-tertiary mb-sm">Welcome Back</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Sign in to access your developer profile</p>
</div>
<!-- Form -->
<form class="space-y-md">
<div class="space-y-sm">
<label class="font-label-caps text-label-caps text-on-surface-variant block" for="email">Email Address</label>
<input class="input-field w-full rounded-lg px-md py-sm font-body-md text-body-md transition-all duration-200" id="email" placeholder="engineer@example.com" required="" type="email"/>
</div>
<div class="space-y-sm">
<div class="flex justify-between items-center">
<label class="font-label-caps text-label-caps text-on-surface-variant block" for="password">Password</label>
<a class="font-body-sm text-body-sm text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 transition-all" href="#">Forgot Password?</a>
</div>
<input class="input-field w-full rounded-lg px-md py-sm font-body-md text-body-md transition-all duration-200" id="password" placeholder="••••••••" required="" type="password"/>
</div>
<button class="btn-primary w-full rounded-lg py-sm font-label-caps text-label-caps font-bold mt-md active:scale-95 transition-transform flex justify-center items-center gap-sm" type="submit">
                    Sign In
                    <span class="material-symbols-outlined text-[18px]" data-icon="arrow_forward">arrow_forward</span>
</button>
</form>
<div class="my-lg flex items-center gap-md">
<div class="h-px bg-outline-variant/30 flex-grow"></div>
<span class="font-label-caps text-label-caps text-on-surface-variant">OR CONTINUE WITH</span>
<div class="h-px bg-outline-variant/30 flex-grow"></div>
</div>
<!-- Social Logins -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<button class="social-btn rounded-lg py-sm px-md flex items-center justify-center gap-sm w-full">
<svg aria-hidden="true" class="w-5 h-5 text-tertiary" fill="currentColor" viewbox="0 0 24 24"><path clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" fill-rule="evenodd"></path></svg>
<span class="font-body-sm text-body-sm text-tertiary">GitHub</span>
</button>
<button class="social-btn rounded-lg py-sm px-md flex items-center justify-center gap-sm w-full">
<svg class="w-5 h-5 text-tertiary" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path></svg>
<span class="font-body-sm text-body-sm text-tertiary">Google</span>
</button>
</div>
<!-- Footer Link -->
<div class="mt-lg text-center">
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Don't have an account? 
                    <a class="text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 transition-all font-semibold" href="#">Sign Up</a>
</p>
</div>
</div>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest w-full py-xl border-t border-outline-variant/20">
<div class="flex flex-col md:flex-row justify-between items-center px-margin-desktop max-w-max-width mx-auto gap-md">
<div class="font-label-caps text-label-caps text-primary-fixed">
                © 2024 Linkjobs. Built for engineers.
            </div>
<nav class="flex flex-wrap justify-center gap-md">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Terms of Service</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Help Center</a>
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 opacity-80 hover:opacity-100 transition-opacity" href="#">Engineering Blog</a>
</nav>
</div>
</footer>
</body></html>