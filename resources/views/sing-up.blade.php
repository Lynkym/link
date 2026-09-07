<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Linkjobs - Create Account</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
          darkMode: "class",
          theme: {
            extend: {
              "colors": {
                      "primary-fixed": "#5ffbd6",
                      "primary-container": "#5ffbd6",
                      "inverse-surface": "#d9e2ff",
                      "secondary-fixed": "#d6e3ff",
                      "surface-container-lowest": "#030d25",
                      "tertiary-fixed": "#d8e2ff",
                      "on-tertiary-fixed": "#091b39",
                      "outline": "#85948e",
                      "surface-tint": "#38debb",
                      "on-tertiary-fixed-variant": "#374767",
                      "on-surface-variant": "#bacac3",
                      "on-primary-fixed-variant": "#005142",
                      "tertiary-fixed-dim": "#b6c6ed",
                      "primary-fixed-dim": "#38debb",
                      "inverse-primary": "#006b58",
                      "surface-container-highest": "#2a344e",
                      "tertiary": "#ffffff",
                      "surface": "#07122a",
                      "inverse-on-surface": "#263049",
                      "error": "#ffb4ab",
                      "secondary-fixed-dim": "#b9c7e4",
                      "error-container": "#93000a",
                      "on-secondary-fixed": "#0d1c32",
                      "on-surface": "#d9e2ff",
                      "on-secondary-container": "#abb9d6",
                      "surface-dim": "#07122a",
                      "on-primary-fixed": "#002019",
                      "outline-variant": "#3c4a45",
                      "secondary": "#b9c7e4",
                      "on-tertiary": "#20304f",
                      "on-background": "#d9e2ff",
                      "surface-variant": "#2a344e",
                      "on-error": "#690005",
                      "on-secondary-fixed-variant": "#39475f",
                      "on-error-container": "#ffdad6",
                      "secondary-container": "#3c4962",
                      "surface-container-high": "#1f2942",
                      "background": "#07122a",
                      "surface-container-low": "#101b33",
                      "on-primary-container": "#00725e",
                      "on-primary": "#00382d",
                      "surface-container": "#151f37",
                      "tertiary-container": "#d8e2ff",
                      "surface-bright": "#2f3952",
                      "on-tertiary-container": "#556486",
                      "on-secondary": "#233148",
                      "primary": "#ffffff"
              },
              "borderRadius": {
                      "DEFAULT": "0.125rem",
                      "lg": "0.25rem",
                      "xl": "0.5rem",
                      "full": "0.75rem"
              },
              "spacing": {
                      "sm": "8px",
                      "gutter": "20px",
                      "lg": "24px",
                      "xl": "32px",
                      "md": "16px",
                      "unit": "4px",
                      "max-width": "1200px",
                      "margin-desktop": "40px",
                      "margin-mobile": "16px",
                      "xs": "4px"
              },
              "fontFamily": {
                      "body-lg": [
                              "Inter"
                      ],
                      "headline-md": [
                              "Inter"
                      ],
                      "headline-xl": [
                              "Inter"
                      ],
                      "label-caps": [
                              "JetBrains Mono"
                      ],
                      "body-sm": [
                              "Inter"
                      ],
                      "body-md": [
                              "Inter"
                      ],
                      "code-md": [
                              "JetBrains Mono"
                      ],
                      "headline-lg": [
                              "Inter"
                      ]
              },
              "fontSize": {
                      "body-lg": [
                              "18px",
                              {
                                      "lineHeight": "28px",
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
                      "headline-xl": [
                              "40px",
                              {
                                      "lineHeight": "48px",
                                      "letterSpacing": "-0.02em",
                                      "fontWeight": "700"
                              }
                      ],
                      "label-caps": [
                              "12px",
                              {
                                      "lineHeight": "16px",
                                      "letterSpacing": "0.05em",
                                      "fontWeight": "500"
                              }
                      ],
                      "body-sm": [
                              "14px",
                              {
                                      "lineHeight": "20px",
                                      "fontWeight": "400"
                              }
                      ],
                      "body-md": [
                              "16px",
                              {
                                      "lineHeight": "24px",
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
                      ]
              }
      },
          },
        }
    </script>
<style>
        /* Custom glow utilities */
        .glow-hover:hover {
            box-shadow: 0 0 12px 0px rgba(95, 251, 214, 0.1);
        }
        .glow-focus:focus-within {
            box-shadow: inset 0 0 0 2px rgba(95, 251, 214, 0.2);
            border-color: #5ffbd6;
        }
    </style>
</head>
<body class="bg-background text-on-background min-h-screen flex items-center justify-center p-margin-mobile md:p-margin-desktop font-body-md relative overflow-hidden">
<!-- Abstract Tech Background Elements -->
<div class="absolute inset-0 pointer-events-none opacity-20">
<div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] rounded-full bg-primary-fixed blur-[120px] opacity-10"></div>
<div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] rounded-full bg-secondary-container blur-[120px] opacity-20"></div>
<!-- Grid overlay -->
<div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTYwIDBIMHY2MGg2MFYweiIgZmlsbD0ibm9uZSIvPjxwYXRoIGQ9Ik02MCAwaC0xdjYwaDFWMHoiIGZpbGw9IiMzYzRhNDUiIGZpbGwtb3BhY2l0eT0iMC4xIi8+PHBhdGggZD0iTTAgNjBWMDVoNjB2MUgweiIgZmlsbD0iIzNjNGE0NSIgZmlsbC1vcGFjaXR5PSIwLjEiLz48L3N2Zz4=')] opacity-50"></div>
</div>
<!-- Registration Canvas -->
<main class="w-full max-w-[440px] relative z-10">
<!-- Logo Header -->
<div class="flex flex-col items-center mb-xl">
<div class="w-16 h-16 rounded-xl bg-surface-container overflow-hidden border border-outline-variant/30 flex items-center justify-center mb-md glow-hover transition-all duration-300">
<img alt="Linkjobs Logo" class="w-full h-full object-contain p-2" src="https://lh3.googleusercontent.com/aida/AEtjO1WrDr53lOLjDXl4jYJLZyhEvMqhqnREpi230WL_diKoBTyDfwSA7ols2gzuZM5a9IG6cOAUk_dx7vTL6Dk5Gup9lDoApfV9JatctMdRDFy5Qx3WDDU_BmVvkMBvUjFPOLBlSGqMPHmYewqEUZ0wVxCZFtNfsE6U_a3yAy_EJlx7L8Xx7hJ8m9iNrKfiD7Bp1qHJO5Fpp81Wbs235mRCj45ZPuuc8IOrjKvBMJBsgND0wSTlwymfLHhQMfk"/>
</div>
<h1 class="font-headline-lg text-headline-lg text-on-surface text-center mb-xs tracking-tight">Create your account</h1>
<p class="font-body-md text-body-md text-on-surface-variant text-center">Join the network for software engineers.</p>
</div>
<!-- Main Card -->
<div class="bg-surface/80 backdrop-blur-xl border border-outline-variant/50 rounded-xl p-lg md:p-xl shadow-lg relative overflow-hidden">
<!-- Subtle top border highlight -->
<div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-primary-fixed/50 to-transparent"></div>
<form action="#" class="space-y-md" method="POST">
<!-- Full Name -->
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="fullName">Full Name</label>
<div class="relative group glow-focus rounded bg-background border border-outline-variant transition-all duration-200">
<div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
<span class="material-symbols-outlined" data-icon="person" style="font-size: 20px;">person</span>
</div>
<input class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-md text-body-md placeholder-on-surface-variant/50 focus:ring-0" id="fullName" name="fullName" placeholder="Ada Lovelace" required="" type="text"/>
</div>
</div>
<!-- Email -->
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="email">Email Address</label>
<div class="relative group glow-focus rounded bg-background border border-outline-variant transition-all duration-200">
<div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
<span class="material-symbols-outlined" data-icon="mail" style="font-size: 20px;">mail</span>
</div>
<input class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-md text-body-md placeholder-on-surface-variant/50 focus:ring-0" id="email" name="email" placeholder="ada@example.com" required="" type="email"/>
</div>
</div>
<!-- Password -->
<div>
<label class="block font-label-caps text-label-caps text-on-surface-variant mb-xs" for="password">Password</label>
<div class="relative group glow-focus rounded bg-background border border-outline-variant transition-all duration-200">
<div class="absolute inset-y-0 left-0 pl-sm flex items-center pointer-events-none text-on-surface-variant group-focus-within:text-primary-fixed transition-colors">
<span class="material-symbols-outlined" data-icon="lock" style="font-size: 20px;">lock</span>
</div>
<input class="block w-full pl-xl py-sm bg-transparent border-none text-on-surface font-body-md text-body-md placeholder-on-surface-variant/50 focus:ring-0" id="password" name="password" placeholder="••••••••" required="" type="password"/>
</div>
<p class="mt-xs font-body-sm text-body-sm text-on-surface-variant/70">Must be at least 8 characters long.</p>
</div>
<!-- Primary Action -->
<button class="w-full bg-primary-fixed text-surface font-headline-md text-body-md py-sm rounded border border-transparent hover:bg-primary-fixed/90 hover:-translate-y-[1px] transition-all duration-200 active:scale-95 flex items-center justify-center gap-xs mt-lg" type="submit">
                    Create Account
                    <span class="material-symbols-outlined" data-icon="arrow_forward" style="font-size: 18px;">arrow_forward</span>
</button>
</form>
<!-- Divider -->
<div class="relative my-lg">
<div class="absolute inset-0 flex items-center">
<div class="w-full border-t border-outline-variant/50"></div>
</div>
<div class="relative flex justify-center text-sm">
<span class="px-sm bg-surface/80 font-label-caps text-label-caps text-on-surface-variant">OR CONTINUE WITH</span>
</div>
</div>
<!-- Social Logins -->
<div class="space-y-sm">
<button class="w-full flex items-center justify-center gap-sm bg-transparent border border-primary-fixed/30 text-on-surface font-body-md text-body-md py-sm rounded hover:bg-primary-fixed/10 hover:border-primary-fixed transition-all duration-200 active:scale-95" type="button">
<!-- Simple GitHub Icon SVG -->
<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 24 24">
<path clip-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" fill-rule="evenodd"></path>
</svg>
                    Sign up with GitHub
                </button>
<button class="w-full flex items-center justify-center gap-sm bg-transparent border border-outline-variant text-on-surface font-body-md text-body-md py-sm rounded hover:bg-surface-container-high transition-all duration-200 active:scale-95" type="button">
<!-- Simple Google Icon SVG -->
<svg class="w-5 h-5" fill="none" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
<path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"></path>
<path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"></path>
<path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"></path>
<path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"></path>
</svg>
                    Sign up with Google
                </button>
</div>
<div class="mt-lg text-center">
<p class="font-body-sm text-body-sm text-on-surface-variant">
                    Already have an account? 
                    <a class="text-primary-fixed hover:underline decoration-primary-fixed underline-offset-4 font-headline-md font-semibold transition-all" href="#">Sign In</a>
</p>
</div>
</div>
<!-- Footer Links -->
<div class="mt-xl text-center space-x-md">
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary-fixed transition-colors" href="#">Privacy Policy</a>
<span class="text-outline-variant">•</span>
<a class="font-label-caps text-label-caps text-on-surface-variant hover:text-primary-fixed transition-colors" href="#">Terms of Service</a>
</div>
</main>
</body></html>