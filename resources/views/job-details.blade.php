<!DOCTYPE html>

<html class="dark" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Senior Fullstack Engineer - Linkjobs</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
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
                        "body-sm": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "code-md": ["14px", { "lineHeight": "20px", "fontWeight": "400" }],
                        "headline-lg": ["32px", { "lineHeight": "40px", "letterSpacing": "-0.01em", "fontWeight": "600" }],
                        "headline-xl": ["40px", { "lineHeight": "48px", "letterSpacing": "-0.02em", "fontWeight": "700" }],
                        "body-md": ["16px", { "lineHeight": "24px", "fontWeight": "400" }],
                        "headline-md": ["24px", { "lineHeight": "32px", "fontWeight": "600" }],
                        "body-lg": ["18px", { "lineHeight": "28px", "fontWeight": "400" }],
                        "label-caps": ["12px", { "lineHeight": "16px", "letterSpacing": "0.05em", "fontWeight": "500" }]
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
        .job-card-border {
            border-color: #233554;
        }
        .job-card-bg {
            background-color: #112240;
        }
        .text-primary-accent {
            color: #64FFDA;
        }
        .bg-primary-accent {
            background-color: #64FFDA;
        }
        .border-primary-accent {
            border-color: #64FFDA;
        }
        .tech-chip {
            background-color: #112240;
            border: 1px solid rgba(100, 255, 218, 0.2);
        }
        .code-bg {
            background-color: #172A45;
        }
    </style>
</head>
<body class="antialiased min-h-screen flex flex-col">
<!-- TopNavBar (Shared Component) -->
<header class="fixed top-0 w-full z-50 bg-surface/80 dark:bg-surface/80 backdrop-blur-xl border-b border-outline-variant/20 dark:border-outline-variant/10 shadow-sm transition-all duration-200">
<div class="flex justify-between items-center px-margin-desktop h-20 max-w-max-width mx-auto">
<div class="flex items-center gap-md">
<img alt="Linkjobs" class="h-8 w-8 object-contain" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA7pdvUHCWvFdCdudyEhI46xDExFm1M3ftLla1aMsn_i7iWQfwUVbNVnA2EhjKSr4cj8fQikNj1Fqb0old0ogOWIeg7sYZ1c_Bv2FXzSXDDwunAQIF-NBHgOYmcA9q30Cft8rydhGJxrqA7VDpsCz13NJMRE-8Xk1IA5pJWIs_UjPu9uoy8SptFhu12AdVZg77uwtArbJPbmjLFBpjtCK_dlwWe-13tvlfui8y1ybpT0jriLiR4Qslo"/>
<span class="font-headline-md text-headline-md font-bold text-primary-fixed dark:text-primary-fixed-dim tracking-tight">Linkjobs</span>
</div>
<nav class="hidden md:flex items-center gap-lg">
<a class="text-primary dark:text-primary-fixed-dim border-b-2 border-primary-fixed pb-1 font-label-caps text-label-caps" href="#">Find Jobs</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-2 py-1 font-label-caps text-label-caps" href="#">Companies</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-2 py-1 font-label-caps text-label-caps" href="#">Salaries</a>
<a class="text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:bg-secondary-container/50 dark:hover:bg-secondary-container/30 rounded-lg px-2 py-1 font-label-caps text-label-caps" href="#">Resources</a>
</nav>
<div class="flex items-center gap-md">
<button class="hidden md:block bg-transparent border border-primary-accent text-primary-accent px-4 py-2 rounded font-label-caps text-label-caps hover:bg-primary-accent/10 transition-colors">Sign In</button>
<button class="bg-primary-accent text-[#0A192F] px-4 py-2 rounded font-label-caps text-label-caps hover:opacity-90 transition-opacity">Post a Job</button>
</div>
</div>
</header>
<main class="flex-grow pt-32 pb-xl px-margin-desktop max-w-max-width mx-auto w-full flex flex-col gap-xl">
<!-- Job Header -->
<section class="job-card-bg border job-card-border rounded-lg p-lg flex flex-col gap-md">
<div class="flex justify-between items-start">
<div>
<h1 class="font-headline-xl text-headline-xl text-primary mb-sm">Senior Fullstack Engineer</h1>
<div class="flex items-center gap-md text-on-surface-variant font-body-md text-body-md">
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-sm">domain</span> TechCorp Inc.</span>
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-sm">location_on</span> San Francisco, CA (Hybrid)</span>
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-sm">schedule</span> Posted 2 days ago</span>
</div>
</div>
<div class="flex gap-sm">
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">Full-time</span>
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">$150k - $200k</span>
</div>
</div>
</section>
<!-- Main Content Area -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-xl">
<!-- Left Column: Description -->
<div class="md:col-span-2 flex flex-col gap-xl">
<section class="job-card-bg border job-card-border rounded-lg p-lg">
<h2 class="font-headline-md text-headline-md text-primary mb-md pb-sm border-b job-card-border">About the Role</h2>
<p class="font-body-md text-body-md text-on-surface mb-md">
                        We are looking for a Senior Fullstack Engineer to join our core product team. You will be responsible for architecting and building scalable web applications that serve millions of users daily. The ideal candidate has deep expertise in both frontend and backend technologies and a passion for delivering high-quality, performant code.
                    </p>
<h3 class="font-headline-sm text-lg font-semibold text-primary mt-lg mb-sm">Responsibilities</h3>
<ul class="list-disc list-inside font-body-md text-body-md text-on-surface space-y-2 mb-md">
<li>Design, develop, and maintain robust APIs and backend services using Node.js and Python.</li>
<li>Build highly responsive and interactive user interfaces using React and modern CSS frameworks.</li>
<li>Optimize application performance for maximum speed and scalability.</li>
<li>Collaborate with cross-functional teams including designers, product managers, and other engineers.</li>
<li>Participate in code reviews and mentor junior developers.</li>
</ul>
<h3 class="font-headline-sm text-lg font-semibold text-primary mt-lg mb-sm">Requirements</h3>
<ul class="list-disc list-inside font-body-md text-body-md text-on-surface space-y-2 mb-md">
<li>5+ years of experience in full-stack web development.</li>
<li>Strong proficiency in JavaScript/TypeScript, React, and Node.js.</li>
<li>Experience with relational databases (PostgreSQL) and NoSQL (MongoDB).</li>
<li>Familiarity with cloud platforms (AWS, GCP) and containerization (Docker, Kubernetes).</li>
<li>Solid understanding of web security and performance best practices.</li>
</ul>
<h3 class="font-headline-sm text-lg font-semibold text-primary mt-lg mb-sm">Tech Stack</h3>
<div class="flex flex-wrap gap-sm mb-md">
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">React</span>
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">Node.js</span>
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">TypeScript</span>
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">PostgreSQL</span>
<span class="tech-chip px-3 py-1 rounded-full text-primary-accent font-label-caps text-label-caps">AWS</span>
</div>
</section>
</div>
<!-- Right Column: Company Info & Apply -->
<div class="flex flex-col gap-lg">
<section class="job-card-bg border job-card-border rounded-lg p-lg sticky top-28">
<button class="w-full bg-primary-accent text-[#0A192F] py-3 rounded font-label-caps text-label-caps hover:opacity-90 transition-opacity mb-md">Apply Now</button>
<button class="w-full bg-transparent border border-primary-accent text-primary-accent py-3 rounded font-label-caps text-label-caps hover:bg-primary-accent/10 transition-colors mb-lg">Save Job</button>
<div class="border-t job-card-border pt-md">
<div class="flex items-center gap-md mb-md">
<img class="h-12 w-12 rounded object-cover" data-alt="A sleek, modern corporate office building facade featuring expansive glass windows reflecting a bright, clear blue sky. The architecture is sharp and angular, typical of high-tech company headquarters. The lighting is crisp daylight, creating a professional, forward-thinking aesthetic with deep blue and subtle green environmental reflections." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCTn2pXTQs57083jdftjifyQXFWVC0SO_6LGE7leUxn-McpW-MYHNHD_IU-TL6R57UcPOnaJWxr0cV8EMH_INgcS-y7HFTHJ4VC5BDH104R3NEghkZ_-mA8c9ToiJKwEVOkpQf4GHbUFWzfbatfbZbZYD9r5PpRSV9cAG-BwkxwK9TnPcVQo5gwSmwkEf28y_md45ByeJW2g6AKcPWJYwYQHJ4BK5rXAMzhztlQnaOZ6odZoHnyhdJV"/>
<div>
<h3 class="font-headline-sm text-lg font-semibold text-primary">TechCorp Inc.</h3>
<a class="text-primary-accent font-body-sm text-body-sm hover:underline" href="#">View Company Profile</a>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-md">
                            TechCorp is a leading innovator in cloud infrastructure, providing cutting-edge solutions for enterprise businesses worldwide.
                        </p>
<div class="flex flex-col gap-sm font-body-sm text-body-sm text-on-surface-variant">
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-sm">group</span> 500-1000 Employees</span>
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-sm">public</span> Enterprise Software</span>
<span class="flex items-center gap-xs"><span class="material-symbols-outlined text-sm">link</span> techcorp.example.com</span>
</div>
</div>
</section>
</div>
</div>
<!-- Related Jobs -->
<section class="mt-xl border-t job-card-border pt-xl">
<h2 class="font-headline-lg text-headline-lg text-primary mb-lg">Related Jobs</h2>
<div class="grid grid-cols-1 md:grid-cols-3 gap-md">
<!-- Job Card 1 -->
<a class="job-card-bg border job-card-border rounded-lg p-md hover:border-primary-accent hover:-translate-y-1 transition-all duration-200 block group" href="#">
<div class="flex justify-between items-start mb-sm">
<h3 class="font-headline-sm text-lg font-semibold text-primary group-hover:text-primary-accent transition-colors">Frontend Developer</h3>
<span class="material-symbols-outlined text-on-surface-variant">bookmark_border</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-sm">Innovate LLC • Remote</p>
<div class="flex gap-2">
<span class="tech-chip px-2 py-1 rounded text-[10px] text-primary-accent">React</span>
<span class="tech-chip px-2 py-1 rounded text-[10px] text-primary-accent">CSS</span>
</div>
</a>
<!-- Job Card 2 -->
<a class="job-card-bg border job-card-border rounded-lg p-md hover:border-primary-accent hover:-translate-y-1 transition-all duration-200 block group" href="#">
<div class="flex justify-between items-start mb-sm">
<h3 class="font-headline-sm text-lg font-semibold text-primary group-hover:text-primary-accent transition-colors">Backend Engineer</h3>
<span class="material-symbols-outlined text-on-surface-variant">bookmark_border</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-sm">DataSys • New York, NY</p>
<div class="flex gap-2">
<span class="tech-chip px-2 py-1 rounded text-[10px] text-primary-accent">Python</span>
<span class="tech-chip px-2 py-1 rounded text-[10px] text-primary-accent">Django</span>
</div>
</a>
<!-- Job Card 3 -->
<a class="job-card-bg border job-card-border rounded-lg p-md hover:border-primary-accent hover:-translate-y-1 transition-all duration-200 block group" href="#">
<div class="flex justify-between items-start mb-sm">
<h3 class="font-headline-sm text-lg font-semibold text-primary group-hover:text-primary-accent transition-colors">Fullstack Dev</h3>
<span class="material-symbols-outlined text-on-surface-variant">bookmark_border</span>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-sm">StartupX • Austin, TX</p>
<div class="flex gap-2">
<span class="tech-chip px-2 py-1 rounded text-[10px] text-primary-accent">Vue</span>
<span class="tech-chip px-2 py-1 rounded text-[10px] text-primary-accent">Node</span>
</div>
</a>
</div>
</section>
</main>
<!-- Footer (Shared Component) -->
<footer class="w-full bg-surface-container-lowest dark:bg-surface-container-lowest border-t border-outline-variant/10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-lg px-margin-desktop py-xl max-w-max-width mx-auto">
<div class="flex flex-col gap-sm">
<span class="font-headline-sm text-headline-sm font-bold text-on-surface dark:text-on-surface">Linkjobs</span>
<span class="font-body-sm text-body-sm text-primary-fixed dark:text-primary-fixed-dim">© 2024 Linkjobs. Built for engineers.</span>
</div>
<div class="flex flex-col gap-sm">
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4" href="#">Browse Jobs</a>
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4" href="#">Remote Roles</a>
</div>
<div class="flex flex-col gap-sm">
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4" href="#">Stack Directory</a>
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4" href="#">Engineering Blog</a>
</div>
<div class="flex flex-col gap-sm">
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4" href="#">Privacy Policy</a>
<a class="font-label-caps text-label-caps text-on-surface-variant dark:text-on-surface-variant hover:text-primary transition-colors hover:underline decoration-primary-fixed underline-offset-4" href="#">Terms of Service</a>
</div>
</div>
</footer>
</body></html>