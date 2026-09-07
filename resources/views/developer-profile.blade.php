<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Linkjobs - Developer Profile</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
          },
        },
      }
    </script>
<style>
        body {
            background-color: #0A192F;
            color: #CCD6F6;
        }
        .glass-panel {
            background: rgba(17, 34, 64, 0.8);
            backdrop-filter: blur(12px);
            border: 1px solid #233554;
        }
        .tech-chip {
            background-color: #112240;
            border: 1px solid rgba(100, 255, 218, 0.2);
        }
        .job-card {
            background-color: #112240;
            border: 1px solid #233554;
            transition: all 0.2s ease;
        }
        .job-card:hover {
            border-color: #64FFDA;
            transform: translateY(-4px);
        }
        .btn-primary {
            background-color: #64FFDA;
            color: #0A192F;
        }
        .btn-secondary {
            border: 1px solid #64FFDA;
            color: #64FFDA;
        }
        .btn-secondary:hover {
            background-color: rgba(100, 255, 218, 0.1);
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">
<!-- TopNavBar (Shared Component) -->
<nav class="bg-surface/80 dark:bg-surface/80 backdrop-blur-xl fixed top-0 w-full z-50 shadow-sm border-b border-outline-variant/20 dark:border-outline-variant/10">
<div class="flex justify-between items-center px-margin-desktop h-20 max-w-max-width mx-auto">
<div class="flex items-center gap-6">
<a class="font-headline-md text-headline-md font-bold text-primary-fixed dark:text-primary-fixed-dim tracking-tight flex items-center gap-2" href="/">
<img alt="Linkjobs Logo" class="h-8 w-8 object-contain rounded-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7pdvUHCWvFdCdudyEhI46xDExFm1M3ftLla1aMsn_i7iWQfwUVbNVnA2EhjKSr4cj8fQikNj1Fqb0old0ogOWIeg7sYZ1c_Bv2FXzSXDDwunAQIF-NBHgOYmcA9q30Cft8rydhGJxrqA7VDpsCz13NJMRE-8Xk1IA5pJWIs_UjPu9uoy8SptFhu12AdVZg77uwtArbJPbmjLFBpjtCK_dlwWe-13tvlfui8y1ybpT0jriLiR4Qslo"/>
                    Linkjobs
                </a>
<!-- Desktop Navigation -->
<div class="hidden md:flex gap-6 items-center font-label-caps text-label-caps">
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-all duration-200 active:scale-95 hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2" href="#">Find Jobs</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-all duration-200 active:scale-95 hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2" href="#">Companies</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-all duration-200 active:scale-95 hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2" href="#">Salaries</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-all duration-200 active:scale-95 hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-3 py-2" href="#">Resources</a>
</div>
</div>
<!-- Trailing Actions -->
<div class="flex items-center gap-4">
<a class="font-label-caps text-label-caps btn-secondary px-4 py-2 rounded-DEFAULT transition-colors hidden md:block" href="#">Sign In</a>
<a class="font-label-caps text-label-caps btn-primary px-4 py-2 rounded-DEFAULT font-medium transition-colors hidden md:block" href="#">Post a Job</a>
<!-- Mobile Menu Button -->
<button class="md:hidden text-primary-fixed p-2">
<span class="material-symbols-outlined">menu</span>
</button>
</div>
</div>
</nav>
<!-- Main Content Canvas -->
<main class="flex-grow pt-[100px] pb-xl px-margin-mobile md:px-margin-desktop max-w-max-width mx-auto w-full flex flex-col gap-xl">
<!-- Profile Header Bento -->
<section class="grid grid-cols-1 md:grid-cols-12 gap-md">
<!-- Main Info -->
<div class="glass-panel p-lg rounded-xl md:col-span-8 flex flex-col sm:flex-row gap-lg items-center sm:items-start text-center sm:text-left">
<div class="relative w-32 h-32 flex-shrink-0">
<img class="w-full h-full rounded-full object-cover border-2 border-primary-fixed shadow-[0_0_15px_rgba(100,255,218,0.2)]" data-alt="A professional headshot of a software engineer in a modern, dark-themed, sleek office environment. Lighting is dramatic but clean, highlighting confidence and technical expertise, with subtle blue and teal neon accents in the background to match the 'Linkjobs' minimalist-technic brand identity." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5kzn1GJI8Ht8Qou7vDRXY45PRqskhcuPqFsmlIwC3kkyIAlEsbWnBFSwIaxKPUbqxZ5zusrMizrsd0IzY3axqwEMlGotwUgt47mfWtRejE47rMrpITs5DVSWXa54qsnLAttLXr8iHt-KSP4A91eKKGXfdY3sYZkxVgL7PeK_XpgroIEFtgCp4_H_uZ30SEiO-xK2xKDIB9VtwmLM-E_JTiYlHg51PoJzX8RE0Vh1OqW5jvVtuhVEw"/>
<div class="absolute bottom-2 right-2 w-4 h-4 bg-primary-fixed rounded-full border-2 border-[#112240]" title="Available for hire"></div>
</div>
<div class="flex flex-col justify-center h-full">
<h1 class="font-headline-lg text-headline-lg text-primary mb-1">Alex Chen</h1>
<h2 class="font-headline-md text-headline-md text-[#8892b0] mb-4">Senior Frontend Engineer</h2>
<p class="font-body-md text-body-md text-[#a8b2d1] mb-4 max-w-2xl">
                        Specializing in building exceptional digital experiences. Currently focused on creating accessible, human-centered products using modern web technologies.
                    </p>
<div class="flex gap-4 justify-center sm:justify-start">
<a class="text-[#8892b0] hover:text-primary-fixed transition-colors flex items-center gap-1 font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined text-[20px]">link</span>
                            github.com/alexc
                        </a>
<a class="text-[#8892b0] hover:text-primary-fixed transition-colors flex items-center gap-1 font-body-sm text-body-sm" href="#">
<span class="material-symbols-outlined text-[20px]">work</span>
                            LinkedIn
                        </a>
</div>
</div>
</div>
<!-- Quick Stats/Actions -->
<div class="glass-panel p-lg rounded-xl md:col-span-4 flex flex-col justify-between">
<div>
<h3 class="font-label-caps text-label-caps text-primary-fixed mb-4">Current Status</h3>
<div class="font-body-md text-body-md text-[#a8b2d1] mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">location_on</span>
                        San Francisco, CA (Remote)
                    </div>
<div class="font-body-md text-body-md text-[#a8b2d1] mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">schedule</span>
                        Available in 2 weeks
                    </div>
</div>
<button class="w-full btn-primary font-label-caps text-label-caps py-3 rounded-DEFAULT transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[18px]">mail</span>
                    Contact Alex
                </button>
</div>
</section>
<!-- Two Column Layout: Skills & Projects -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-xl">
<!-- Left Column: Skills -->
<div class="flex flex-col gap-lg">
<div class="glass-panel p-lg rounded-xl">
<h3 class="font-headline-md text-headline-md text-primary mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary-fixed">code</span>
                        Technical Arsenal
                    </h3>
<div class="mb-6">
<h4 class="font-label-caps text-label-caps text-[#8892b0] mb-3">Languages</h4>
<div class="flex flex-wrap gap-2">
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">TypeScript</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">JavaScript (ES6+)</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">HTML/CSS</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Rust</span>
</div>
</div>
<div class="mb-6">
<h4 class="font-label-caps text-label-caps text-[#8892b0] mb-3">Frameworks &amp; Libraries</h4>
<div class="flex flex-wrap gap-2">
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">React</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Next.js</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Vue</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Tailwind CSS</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Redux</span>
</div>
</div>
<div>
<h4 class="font-label-caps text-label-caps text-[#8892b0] mb-3">Tools</h4>
<div class="flex flex-wrap gap-2">
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Git</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Webpack</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Docker</span>
<span class="tech-chip font-label-caps text-label-caps text-primary px-3 py-1 rounded-full">Figma</span>
</div>
</div>
</div>
</div>
<!-- Right Column: Projects -->
<div class="lg:col-span-2 flex flex-col gap-lg">
<h3 class="font-headline-md text-headline-md text-primary mb-2 flex items-center gap-2">
<span class="material-symbols-outlined text-primary-fixed">terminal</span>
                    Featured Projects
                </h3>
<div class="grid grid-cols-1 md:grid-cols-2 gap-md">
<!-- Project Card 1 -->
<div class="job-card p-lg rounded-xl flex flex-col h-full group cursor-pointer">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary-fixed text-[40px]">folder_open</span>
<a class="text-[#8892b0] hover:text-primary-fixed transition-colors" href="#">
<span class="material-symbols-outlined">open_in_new</span>
</a>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2 group-hover:text-primary-fixed transition-colors">DevFlow Dashboard</h4>
<p class="font-body-sm text-body-sm text-[#a8b2d1] mb-6 flex-grow">
                            A real-time developer productivity dashboard aggregating metrics from GitHub, Jira, and Slack. Built with React and WebSockets.
                        </p>
<div class="font-code-md text-code-md text-[#8892b0] text-[12px] flex gap-3">
<span>React</span>
<span>Node.js</span>
<span>Socket.io</span>
</div>
</div>
<!-- Project Card 2 -->
<div class="job-card p-lg rounded-xl flex flex-col h-full group cursor-pointer">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary-fixed text-[40px]">folder_open</span>
<a class="text-[#8892b0] hover:text-primary-fixed transition-colors" href="#">
<span class="material-symbols-outlined">open_in_new</span>
</a>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2 group-hover:text-primary-fixed transition-colors">Terminal Portfolio</h4>
<p class="font-body-sm text-body-sm text-[#a8b2d1] mb-6 flex-grow">
                            A CLI-themed interactive portfolio website. Features a custom parser for handling user commands and rendering markdown.
                        </p>
<div class="font-code-md text-code-md text-[#8892b0] text-[12px] flex gap-3">
<span>Vue.js</span>
<span>CSS Grid</span>
<span>Netlify</span>
</div>
</div>
<!-- Project Card 3 -->
<div class="job-card p-lg rounded-xl flex flex-col h-full group cursor-pointer md:col-span-2">
<div class="flex justify-between items-start mb-4">
<span class="material-symbols-outlined text-primary-fixed text-[40px]">folder_open</span>
<a class="text-[#8892b0] hover:text-primary-fixed transition-colors" href="#">
<span class="material-symbols-outlined">open_in_new</span>
</a>
</div>
<h4 class="font-headline-md text-headline-md text-primary mb-2 group-hover:text-primary-fixed transition-colors">AlgoVis</h4>
<p class="font-body-sm text-body-sm text-[#a8b2d1] mb-6 flex-grow">
                            An open-source visualization tool for common sorting and pathfinding algorithms. Used by over 10,000 CS students globally to understand complex data structures.
                        </p>
<div class="font-code-md text-code-md text-[#8892b0] text-[12px] flex gap-3">
<span>TypeScript</span>
<span>D3.js</span>
<span>Tailwind</span>
</div>
</div>
</div>
</div>
</section>
<!-- Experience Timeline -->
<section class="glass-panel p-lg rounded-xl w-full">
<h3 class="font-headline-md text-headline-md text-primary mb-8 flex items-center gap-2">
<span class="material-symbols-outlined text-primary-fixed">work_history</span>
                Professional Experience
            </h3>
<div class="relative border-l border-[#233554] ml-3 md:ml-6 flex flex-col gap-10">
<!-- Role 1 -->
<div class="relative pl-6 md:pl-8">
<div class="absolute w-3 h-3 bg-primary-fixed rounded-full -left-[6.5px] top-1.5 shadow-[0_0_10px_rgba(100,255,218,0.5)]"></div>
<div class="flex flex-col md:flex-row md:items-baseline justify-between mb-2">
<h4 class="font-headline-md text-headline-md text-primary">Senior Frontend Engineer <span class="text-primary-fixed">@ TechCorp</span></h4>
<span class="font-label-caps text-label-caps text-[#8892b0] mt-1 md:mt-0">2021 - Present</span>
</div>
<ul class="font-body-md text-body-md text-[#a8b2d1] list-disc list-outside ml-4 space-y-2 mt-4">
<li>Led the migration of a legacy monolithic frontend to a modern React/Next.js micro-frontend architecture, improving page load times by 40%.</li>
<li>Mentored a team of 4 junior developers, conducting code reviews and establishing best practices for state management.</li>
<li>Implemented a comprehensive design system in collaboration with UI/UX, resulting in a 30% reduction in development time for new features.</li>
</ul>
</div>
<!-- Role 2 -->
<div class="relative pl-6 md:pl-8">
<div class="absolute w-3 h-3 bg-[#233554] border-2 border-primary-fixed rounded-full -left-[6.5px] top-1.5"></div>
<div class="flex flex-col md:flex-row md:items-baseline justify-between mb-2">
<h4 class="font-headline-md text-headline-md text-primary">Frontend Developer <span class="text-primary-fixed">@ StartupX</span></h4>
<span class="font-label-caps text-label-caps text-[#8892b0] mt-1 md:mt-0">2018 - 2021</span>
</div>
<ul class="font-body-md text-body-md text-[#a8b2d1] list-disc list-outside ml-4 space-y-2 mt-4">
<li>Developed responsive, interactive user interfaces for a B2B SaaS platform using Vue.js and Vuex.</li>
<li>Integrated RESTful APIs and optimized data fetching strategies to handle large datasets efficiently.</li>
<li>Contributed to automated testing coverage, writing unit and end-to-end tests using Jest and Cypress.</li>
</ul>
</div>
</div>
</section>
</main>
<!-- Footer (Shared Component) -->
<footer class="bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/10 w-full mt-auto">
<div class="grid grid-cols-1 md:grid-cols-4 gap-lg px-margin-desktop py-xl max-w-max-width mx-auto">
<!-- Brand -->
<div class="flex flex-col gap-4">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-on-surface">Linkjobs</span>
<p class="font-body-sm text-body-sm text-[#8892b0]">© 2024 Linkjobs. Built for engineers.</p>
</div>
<!-- Links Column 1 -->
<div class="flex flex-col gap-2">
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-opacity duration-200 hover:opacity-80 hover:underline decoration-primary-fixed underline-offset-4" href="#">Browse Jobs</a>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-opacity duration-200 hover:opacity-80 hover:underline decoration-primary-fixed underline-offset-4" href="#">Remote Roles</a>
</div>
<!-- Links Column 2 -->
<div class="flex flex-col gap-2">
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-opacity duration-200 hover:opacity-80 hover:underline decoration-primary-fixed underline-offset-4" href="#">Stack Directory</a>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-opacity duration-200 hover:opacity-80 hover:underline decoration-primary-fixed underline-offset-4" href="#">Engineering Blog</a>
</div>
<!-- Links Column 3 -->
<div class="flex flex-col gap-2">
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-opacity duration-200 hover:opacity-80 hover:underline decoration-primary-fixed underline-offset-4" href="#">Privacy Policy</a>
<a class="font-body-sm text-body-sm text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors transition-opacity duration-200 hover:opacity-80 hover:underline decoration-primary-fixed underline-offset-4" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>