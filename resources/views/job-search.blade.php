<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Linkjobs - Find Jobs</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
</head>
<body class="bg-background text-on-surface font-body-md text-body-md min-h-screen flex flex-col">
<!-- TopNavBar -->
<header class="bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 dark:border-outline-variant/10 shadow-sm fixed top-0 w-full z-50 transition-all duration-200">
<div class="flex justify-between items-center px-margin-desktop h-20 max-w-max-width mx-auto">
<div class="flex items-center gap-lg">
<a class="flex items-center gap-sm font-headline-md text-headline-md font-bold text-primary-fixed dark:text-primary-fixed-dim tracking-tight" href="{{ route('home') }}">
<img alt="Linkjobs Logo" class="h-8 w-8 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7pdvUHCWvFdCdudyEhI46xDExFm1M3ftLla1aMsn_i7iWQfwUVbNVnA2EhjKSr4cj8fQikNj1Fqb0old0ogOWIeg7sYZ1c_Bv2FXzSXDDwunAQIF-NBHgOYmcA9q30Cft8rydhGJxrqA7VDpsCz13NJMRE-8Xk1IA5pJWIs_UjPu9uoy8SptFhu12AdVZg77uwtArbJPbmjLFBpjtCK_dlwWe-13tvlfui8y1ybpT0jriLiR4Qslo"/>
                    Linkjobs
                </a>
<div class="hidden md:flex items-center bg-surface-container-high rounded-full px-md py-sm border border-outline-variant/30 focus-within:border-primary-fixed transition-colors">
<span class="material-symbols-outlined text-on-surface-variant mr-sm" data-icon="search">search</span>
<input class="bg-transparent border-none outline-none text-on-surface placeholder:text-on-surface-variant font-body-sm text-body-sm w-64 focus:ring-0" placeholder="Search jobs, skills, companies..." type="text"/>
</div>
</div>
<nav class="hidden md:flex items-center gap-xl font-label-caps text-label-caps">
<a class="text-primary dark:text-primary-fixed-dim border-b-2 border-primary-fixed pb-1 hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-sm active:scale-95 transition-all duration-200" href="{{ route('jobs') }}">Find Jobs</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-sm py-xs active:scale-95 duration-200" href="#">Companies</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-sm py-xs active:scale-95 duration-200" href="#">Salaries</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-sm py-xs active:scale-95 duration-200" href="#">Resources</a>
</nav>
<div class="flex items-center gap-md">
<a href="{{ route('login') }}" class="hidden md:block font-label-caps text-label-caps text-secondary-fixed hover:underline decoration-primary-fixed underline-offset-4 transition-all">Sign In</a>
<button class="bg-primary-fixed text-on-primary-fixed font-label-caps text-label-caps px-md py-sm rounded hover:bg-primary-fixed-dim transition-colors active:scale-95 shadow-sm">Post a Job</button>
<img alt="Developer Profile" class="w-8 h-8 rounded-full border border-outline-variant/30 hidden md:block" data-alt="A small, circular avatar portrait of a diverse software engineer with a neutral expression, viewed in a professional but casual tech environment. Deep navy background with subtle electric blue rim lighting to match the tech-focused, dark mode aesthetic of the UI." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCDOffYeOfK_NE8T44PytZDkl-MEpVXohc9B368boVz2E1G8iAC9TOjaQyWBt-tv2YYQW2zv_Syv58q3H1txi1O2u9CrOkhq5KsPTCpvBfslh7x5xQbLnlRMSnJ5QcFLzRyy3ExDwb_FQ8SvDKN-42shljDYayxvqIXSCKKf9fHBLYLDWYpYmbj7l_wdoQULM3jf3IeJoUcpzwa9Wx1E4TzBnHfaWWQqi6A176KotDBNc_2RyNRoBJt"/>
<button class="md:hidden text-on-surface">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
</div>
</header>
<main class="flex-grow pt-24 pb-xl px-margin-mobile md:px-margin-desktop max-w-max-width mx-auto w-full flex flex-col md:flex-row gap-xl">
<!-- Sidebar Filters -->
<aside class="w-full md:w-64 flex-shrink-0 space-y-lg">
<div class="bg-surface-container-high rounded-lg p-md border border-outline-variant/20 sticky top-28">
<h2 class="font-headline-md text-headline-md mb-md text-on-surface border-b border-outline-variant/20 pb-sm">Filters</h2>
<!-- Role Filter -->
<div class="mb-lg">
<h3 class="font-label-caps text-label-caps text-on-surface-variant mb-sm">Role</h3>
<div class="space-y-sm">
<label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-xs rounded transition-colors">
<input checked="" class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed focus:ring-offset-background" type="checkbox"/>
<span class="font-body-sm text-body-sm">Frontend Developer</span>
</label>
<label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-xs rounded transition-colors">
<input class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed focus:ring-offset-background" type="checkbox"/>
<span class="font-body-sm text-body-sm">Backend Developer</span>
</label>
<label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-xs rounded transition-colors">
<input class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed focus:ring-offset-background" type="checkbox"/>
<span class="font-body-sm text-body-sm">Fullstack Developer</span>
</label>
</div>
</div>
<!-- Tech Stack Filter -->
<div class="mb-lg">
<h3 class="font-label-caps text-label-caps text-on-surface-variant mb-sm">Tech Stack</h3>
<div class="flex flex-wrap gap-xs">
<button class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full hover:border-primary-fixed transition-colors bg-primary-fixed/10 text-primary-fixed">React</button>
<button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full hover:border-primary-fixed/50 hover:text-on-surface transition-colors">TypeScript</button>
<button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full hover:border-primary-fixed/50 hover:text-on-surface transition-colors">Node.js</button>
<button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full hover:border-primary-fixed/50 hover:text-on-surface transition-colors">Python</button>
<button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full hover:border-primary-fixed/50 hover:text-on-surface transition-colors">Go</button>
<button class="bg-surface border border-outline-variant/30 text-on-surface-variant font-label-caps text-label-caps px-sm py-xs rounded-full hover:border-primary-fixed/50 hover:text-on-surface transition-colors">Rust</button>
</div>
</div>
<!-- Salary Range -->
<div class="mb-lg">
<h3 class="font-label-caps text-label-caps text-on-surface-variant mb-sm">Salary Range (USD)</h3>
<input class="w-full accent-primary-fixed bg-surface-container h-1 rounded-full appearance-none outline-none cursor-pointer" max="250000" min="50000" step="10000" type="range"/>
<div class="flex justify-between font-code-md text-code-md text-on-surface-variant mt-sm">
<span>$50k</span>
<span>$250k+</span>
</div>
</div>
<!-- Work Mode -->
<div>
<h3 class="font-label-caps text-label-caps text-on-surface-variant mb-sm">Work Mode</h3>
<div class="space-y-sm">
<label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-xs rounded transition-colors">
<input checked="" class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed focus:ring-offset-background" type="checkbox"/>
<span class="font-body-sm text-body-sm">Remote</span>
</label>
<label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-xs rounded transition-colors">
<input class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed focus:ring-offset-background" type="checkbox"/>
<span class="font-body-sm text-body-sm">On-site</span>
</label>
<label class="flex items-center gap-sm cursor-pointer hover:bg-surface-container/50 p-xs rounded transition-colors">
<input class="form-checkbox text-primary-fixed bg-surface-container border-outline-variant rounded-sm focus:ring-primary-fixed focus:ring-offset-background" type="checkbox"/>
<span class="font-body-sm text-body-sm">Hybrid</span>
</label>
</div>
</div>
</div>
</aside>
<!-- Main Job List -->
<section class="flex-grow space-y-md">
<!-- Job Card 1 -->
<article class="bg-surface-container-high border border-outline-variant/30 rounded-lg p-lg hover:border-primary-fixed hover:-translate-y-1 transition-all duration-300 group flex flex-col md:flex-row gap-md relative overflow-hidden">
<div class="absolute inset-0 bg-primary-fixed/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
<div class="flex-shrink-0">
<img alt="Company Logo" class="w-16 h-16 rounded bg-surface border border-outline-variant/20 p-xs object-contain" data-alt="A sleek, modern tech startup logo featuring a geometric 'V' shape in white and teal, set against a dark, minimalist background. The style is sharp, clean, and highly professional, typical of a cutting-edge SaaS company." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBuOZoaTzWPSFuaEzbPqwOmyaRKkOFA5Qn2uSw_doEBN7CfYRxi8hhGn8y3uKe6ysnsWOuVYMpT7CQHR2OqIo4n9_6WwgvsCJ6Q-HYkd2qEQBPxZxp8iQfHTb9096P7huGrYjIpZc9azD3siCULOt6Z9BKX7hCGkRyIpw1R6f1rhyxzqYHvNw5dXerkc69No0k6vPrxeqAzQzVgtqNVf-_EvfwnHtERK8_xS5utblVnM4CnsslYSUE0"/>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start mb-sm">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary-fixed transition-colors">Senior Frontend Engineer</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-sm">
<span class="font-medium text-secondary-fixed">Vercel</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-[16px]" data-icon="location_on">location_on</span> Remote, US</span>
</p>
</div>
<button class="text-on-surface-variant hover:text-primary-fixed transition-colors"><span class="material-symbols-outlined" data-icon="bookmark_border">bookmark_border</span></button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant/80 mb-md line-clamp-2">We are looking for a Senior Frontend Engineer to help us build the next generation of our web platform. You will work closely with design and product to create seamless developer experiences.</p>
<div class="flex flex-wrap items-center gap-sm mb-md">
<span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full">React</span>
<span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full">Next.js</span>
<span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full">TypeScript</span>
</div>
<div class="flex justify-between items-center mt-auto border-t border-outline-variant/10 pt-md">
<span class="font-code-md text-code-md text-primary-fixed-dim">$150k - $180k</span>
<button class="bg-transparent border border-primary-fixed text-primary-fixed hover:bg-primary-fixed/10 font-label-caps text-label-caps px-md py-sm rounded transition-colors">Apply Now</button>
</div>
</div>
</article>
<!-- Job Card 2 -->
<article class="bg-surface-container-high border border-outline-variant/30 rounded-lg p-lg hover:border-primary-fixed hover:-translate-y-1 transition-all duration-300 group flex flex-col md:flex-row gap-md relative overflow-hidden">
<div class="absolute inset-0 bg-primary-fixed/5 opacity-0 group-hover:opacity-100 transition-opacity pointer-events-none"></div>
<div class="flex-shrink-0">
<img alt="Company Logo" class="w-16 h-16 rounded bg-surface border border-outline-variant/20 p-xs object-contain" data-alt="A minimalist logo design for a cloud infrastructure company, depicting abstract overlapping clouds or server racks in subtle shades of slate gray and electric blue, set against a dark background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBI1WGYe0scA1nuBih3ZgUTDOdUL53D4kB0KBoU1H3ZL0WmnRckrnZD_ltGS6WgXAyaR0lg5HQtktsAkLnFSIPE1AvYV_eKi8vZrDlY1LxAdMa2QK8yXRJFOYJxW1g9Xl1FzMS_W44ArsPQrjIhEjtUDbFyYUEWHCtMu7og2qfnxZ-4nS9rsLn70OV0k38aK1CEy-z_ZRBRIqr0o5W4235oCE7rgqYLVbM6a8a8j4lvh-MV9Rd3hk_P"/>
</div>
<div class="flex-grow">
<div class="flex justify-between items-start mb-sm">
<div>
<h3 class="font-headline-md text-headline-md text-on-surface group-hover:text-primary-fixed transition-colors">React UI Developer</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-sm">
<span class="font-medium text-secondary-fixed">CloudScale</span>
<span class="w-1 h-1 rounded-full bg-outline-variant"></span>
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-[16px]" data-icon="location_on">location_on</span> New York, NY (Hybrid)</span>
</p>
</div>
<button class="text-on-surface-variant hover:text-primary-fixed transition-colors"><span class="material-symbols-outlined" data-icon="bookmark_border">bookmark_border</span></button>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant/80 mb-md line-clamp-2">Join our core platform team to build complex, data-heavy dashboards for enterprise clients. Focus on performance optimization and reusable component architecture.</p>
<div class="flex flex-wrap items-center gap-sm mb-md">
<span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full">React</span>
<span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full">Redux</span>
<span class="bg-surface border border-primary-fixed/20 text-on-surface font-label-caps text-label-caps px-sm py-xs rounded-full">Tailwind CSS</span>
</div>
<div class="flex justify-between items-center mt-auto border-t border-outline-variant/10 pt-md">
<span class="font-code-md text-code-md text-primary-fixed-dim">$130k - $160k</span>
<button class="bg-transparent border border-primary-fixed text-primary-fixed hover:bg-primary-fixed/10 font-label-caps text-label-caps px-md py-sm rounded transition-colors">Apply Now</button>
</div>
</div>
</article>
<!-- Load More -->
<div class="flex justify-center pt-md">
<button class="text-secondary-fixed font-label-caps text-label-caps hover:underline decoration-primary-fixed underline-offset-4 transition-all flex items-center gap-xs">
                    Load More Jobs <span class="material-symbols-outlined text-[18px]" data-icon="expand_more">expand_more</span>
</button>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/10 w-full mt-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-lg px-margin-desktop py-xl max-w-max-width mx-auto">
<div class="col-span-1 md:col-span-1 flex flex-col gap-sm">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-on-surface">Linkjobs</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">© 2024 Linkjobs. Built for engineers.</p>
</div>
<div class="col-span-1 flex flex-col gap-sm">
<h4 class="font-label-caps text-label-caps text-primary-fixed mb-xs">Platform</h4>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4 opacity-100 hover:opacity-80" href="#">Browse Jobs</a>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4 opacity-100 hover:opacity-80" href="#">Remote Roles</a>
</div>
<div class="col-span-1 flex flex-col gap-sm">
<h4 class="font-label-caps text-label-caps text-primary-fixed mb-xs">Community</h4>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4 opacity-100 hover:opacity-80" href="#">Stack Directory</a>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4 opacity-100 hover:opacity-80" href="#">Engineering Blog</a>
</div>
<div class="col-span-1 flex flex-col gap-sm">
<h4 class="font-label-caps text-label-caps text-primary-fixed mb-xs">Legal</h4>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4 opacity-100 hover:opacity-80" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4 opacity-100 hover:opacity-80" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>