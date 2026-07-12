<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saman Edirisinghe | Profile & Ventures</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind Configuration for Custom Theme -->
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f5f3ff',
                            100: '#e0e7ff',
                            200: '#ddd6fe',
                            300: '#c7d2fe',
                            500: '#6366f1',
                            600: '#4f46e5',
                            700: '#4338ca',
                            800: '#3730a3',
                            900: '#312e81',
                            950: '#0b0f19',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'Inter', 'sans-serif'],
                        display: ['Outfit', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- Custom CSS for Premium Animations and Styles -->
    <style>
        * {
            transition: background-color 0.3s cubic-bezier(0.4, 0, 0.2, 1), 
                        border-color 0.3s cubic-bezier(0.4, 0, 0.2, 1),
                        box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .custom-scrollbar::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }
        .dark .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #334155;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(24px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</head>
<body class="bg-slate-50 dark:bg-brand-950 text-slate-800 dark:text-slate-100 font-sans selection:bg-brand-500 selection:text-white pb-20 custom-scrollbar">

    <!-- Toast Notification System -->
    <div id="toast" class="fixed bottom-5 right-5 z-50 transform translate-y-2 opacity-0 bg-slate-900 text-white dark:bg-white dark:text-slate-900 px-5 py-3 rounded-2xl shadow-2xl flex items-center gap-3 transition-all duration-300 pointer-events-none">
        <i class="fa-solid fa-circle-check text-green-500 text-lg"></i>
        <span id="toast-message" class="text-sm font-medium">Copied to clipboard!</span>
    </div>

    <!-- Main Container -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 mt-10 animate-fade-in-up">
        
        <!-- Header Controls (Theme Toggle) -->
        <div class="flex justify-end gap-3 mb-4">
            <button onclick="toggleTheme()" class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 text-slate-600 dark:text-slate-300 w-11 h-11 rounded-2xl flex items-center justify-center hover:scale-105 active:scale-95 transition-all shadow-md hover:shadow-lg focus:outline-none" title="Toggle Light/Dark Theme">
                <i class="fa-solid fa-sun dark:hidden text-lg"></i>
                <i class="fa-solid fa-moon hidden dark:block text-lg"></i>
            </button>
        </div>

        <!-- Hero Card -->
        <div class="bg-white dark:bg-slate-900/60 backdrop-blur-xl border border-slate-200/80 dark:border-slate-800 rounded-3xl shadow-xl overflow-hidden mb-10">
            <!-- Hero Decorative Header -->
            <div class="h-48 sm:h-60 bg-gradient-to-r from-indigo-900 via-indigo-950 to-slate-950 relative overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_right,rgba(99,102,241,0.15),transparent_40%)]"></div>
                <div class="absolute -bottom-16 -left-16 w-64 h-64 bg-indigo-500/10 rounded-full blur-3xl"></div>
            </div>

            <!-- Profile Overview Section -->
            <div class="relative px-6 sm:px-10 pb-10 pt-4 flex flex-col items-center sm:items-start text-center sm:text-left">
                <!-- Avatar Overlapping -->
                <div class="relative -mt-24 sm:-mt-28 mb-4 sm:mb-0">
                    <div class="w-36 h-36 sm:w-40 sm:h-40 rounded-full border-4 border-white dark:border-slate-900 shadow-2xl overflow-hidden ring-4 ring-indigo-500/20">
                        <img src="2.jpeg" alt="Saman Edirisinghe" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    </div>
                </div>

                <div class="mt-4 sm:flex sm:items-end sm:justify-between w-full">
                    <div>
                        <div class="flex flex-col sm:flex-row sm:items-center gap-2">
                            <h1 class="text-3xl sm:text-4xl font-extrabold font-display tracking-tight text-slate-900 dark:text-white">
                                Saman Edirisinghe
                            </h1>
                            <span class="inline-flex items-center self-center sm:self-auto gap-1 px-3 py-1 rounded-full text-xs font-semibold bg-emerald-500/10 text-emerald-600 dark:text-emerald-400 border border-emerald-500/20">
                                <i class="fa-solid fa-circle-check"></i> Founder & Philanthropist
                            </span>
                        </div>
                        <p class="text-indigo-600 dark:text-indigo-400 font-medium text-lg mt-1 font-display">
                            Entrepreneur & Community Leader
                        </p>
                        <p class="text-slate-500 dark:text-slate-400 text-sm mt-2 flex items-center justify-center sm:justify-start gap-2">
                            <i class="fa-solid fa-map-marker-alt text-red-500"></i> Kegalle, Sri Lanka
                        </p>
                    </div>

                    <!-- CTA Button (Download Contact Excel) -->
                    <button onclick="exportToExcel()" class="mt-6 sm:mt-0 px-6 py-3.5 bg-gradient-to-r from-emerald-600 to-teal-600 hover:from-emerald-700 hover:to-teal-700 text-white font-bold rounded-2xl flex items-center justify-center gap-2.5 shadow-lg shadow-emerald-500/20 hover:shadow-xl hover:shadow-emerald-500/30 transform hover:-translate-y-0.5 active:translate-y-0 transition-all text-sm w-full sm:w-auto">
                        <i class="fa-solid fa-file-csv text-lg"></i>
                        <span>Export Profile & Portfolio</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Details Grid (About, Contacts, Impact Program) -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-12">
            <!-- About Me Card -->
            <div class="bg-white dark:bg-slate-900/60 backdrop-blur-xl border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-lg flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-950/50 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                            <i class="fa-solid fa-user-tie text-lg"></i>
                        </div>
                        <h2 class="text-xl font-bold font-display text-slate-900 dark:text-white">About Me</h2>
                    </div>
                    <p class="text-slate-600 dark:text-slate-300 text-sm leading-relaxed">
                        Dedicated to serving communities and providing relief to those affected by natural disasters. Passionate about sustainable development, professional education, and emergency response.
                    </p>
                </div>
                <div class="mt-6 pt-6 border-t border-slate-100 dark:border-slate-800/80">
                    <p class="text-xs text-slate-400 dark:text-slate-500 font-semibold uppercase tracking-wider">Mission Statement</p>
                    <p class="text-indigo-600 dark:text-indigo-400 text-sm font-semibold mt-1">"Empowering lives and building resilient communities."</p>
                </div>
            </div>

            <!-- Contact Details Card -->
            <div class="bg-white dark:bg-slate-900/60 backdrop-blur-xl border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-lg">
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl bg-indigo-50 dark:bg-indigo-950/50 flex items-center justify-center text-indigo-600 dark:text-indigo-400">
                        <i class="fa-solid fa-address-book text-lg"></i>
                    </div>
                    <h2 class="text-xl font-bold font-display text-slate-900 dark:text-white">Contact Details</h2>
                </div>
                
                <div class="space-y-4">
                    <!-- Email Copyable -->
                    <div onclick="copyToClipboard('seedceylon@gmail.com', 'Email address copied!')" class="flex items-center justify-between p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/40 hover:bg-indigo-50/50 dark:hover:bg-slate-800/80 cursor-pointer border border-transparent hover:border-indigo-100 dark:hover:border-slate-700 group transition-all">
                        <div class="flex items-center gap-3 overflow-hidden">
                            <i class="fa-solid fa-envelope text-indigo-500 text-lg w-5 shrink-0"></i>
                            <div class="overflow-hidden">
                                <p class="text-[10px] text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider">Email Address</p>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-200 truncate">seedceylon@gmail.com</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-copy text-slate-400 group-hover:text-indigo-500 text-sm shrink-0 transition-colors"></i>
                    </div>

                    <!-- Phone 1 Copyable -->
                    <div onclick="copyToClipboard('+94714342223', 'Primary phone copied!')" class="flex items-center justify-between p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/40 hover:bg-indigo-50/50 dark:hover:bg-slate-800/80 cursor-pointer border border-transparent hover:border-indigo-100 dark:hover:border-slate-700 group transition-all">
                        <div class="flex items-center gap-3 overflow-hidden">
                            <i class="fa-solid fa-phone text-indigo-500 text-lg w-5 shrink-0"></i>
                            <div class="overflow-hidden">
                                <p class="text-[10px] text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider">Primary Phone</p>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-200 truncate">+94 71 434 2223</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-copy text-slate-400 group-hover:text-indigo-500 text-sm shrink-0 transition-colors"></i>
                    </div>

                    <!-- Phone 2 Copyable -->
                    <div onclick="copyToClipboard('0705954445', 'Secondary phone copied!')" class="flex items-center justify-between p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/40 hover:bg-indigo-50/50 dark:hover:bg-slate-800/80 cursor-pointer border border-transparent hover:border-indigo-100 dark:hover:border-slate-700 group transition-all">
                        <div class="flex items-center gap-3 overflow-hidden">
                            <i class="fa-solid fa-mobile-screen text-indigo-500 text-lg w-5 shrink-0"></i>
                            <div class="overflow-hidden">
                                <p class="text-[10px] text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider">Alternate Phone</p>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-200 truncate">070 595 4445</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-copy text-slate-400 group-hover:text-indigo-500 text-sm shrink-0 transition-colors"></i>
                    </div>

                    <!-- Address Copyable -->
                    <div onclick="copyToClipboard('Head Office, Main Road, Kegalle', 'Address copied!')" class="flex items-center justify-between p-3 rounded-2xl bg-slate-50 dark:bg-slate-800/40 hover:bg-indigo-50/50 dark:hover:bg-slate-800/80 cursor-pointer border border-transparent hover:border-indigo-100 dark:hover:border-slate-700 group transition-all">
                        <div class="flex items-center gap-3 overflow-hidden">
                            <i class="fa-solid fa-map-location-dot text-indigo-500 text-lg w-5 shrink-0"></i>
                            <div class="overflow-hidden">
                                <p class="text-[10px] text-slate-400 dark:text-slate-500 font-bold uppercase tracking-wider">Head Office</p>
                                <p class="text-sm font-medium text-slate-700 dark:text-slate-200 truncate">Main Road, Kegalle</p>
                            </div>
                        </div>
                        <i class="fa-regular fa-copy text-slate-400 group-hover:text-indigo-500 text-sm shrink-0 transition-colors"></i>
                    </div>
                </div>
            </div>

            <!-- Relief Program Card -->
            <div class="bg-white dark:bg-slate-900/60 backdrop-blur-xl border border-slate-200/80 dark:border-slate-800 rounded-3xl p-8 shadow-lg flex flex-col justify-between">
                <div>
                    <div class="flex items-center gap-3 mb-5">
                        <div class="w-10 h-10 rounded-xl bg-rose-50 dark:bg-rose-950/30 flex items-center justify-center text-rose-500">
                            <i class="fa-solid fa-hands-holding-child text-lg"></i>
                        </div>
                        <h2 class="text-xl font-bold font-display text-slate-900 dark:text-white">Community & Relief</h2>
                    </div>
                    
                    <h3 class="text-sm font-semibold text-slate-800 dark:text-slate-200 mb-2">Supporting Families in Crisis</h3>
                    <p class="text-slate-600 dark:text-slate-350 text-xs leading-relaxed">
                        The recent storm impacts have severely displaced local families. We work actively across districts to distribute vital resources and establish emergency aid coordinates.
                    </p>
                </div>

                <!-- Stats Cards Inside Relief -->
                <div class="grid grid-cols-3 gap-2.5 mt-5">
                    <div class="bg-slate-50 dark:bg-slate-800/40 p-2.5 rounded-2xl text-center border border-slate-100 dark:border-slate-800/60">
                        <p class="text-lg font-extrabold text-indigo-650 dark:text-indigo-400 font-display">16k+</p>
                        <p class="text-[9px] text-slate-400 dark:text-slate-500 font-bold uppercase">Families</p>
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800/40 p-2.5 rounded-2xl text-center border border-slate-100 dark:border-slate-800/60">
                        <p class="text-lg font-extrabold text-indigo-650 dark:text-indigo-400 font-display">25</p>
                        <p class="text-[9px] text-slate-400 dark:text-slate-500 font-bold uppercase">Districts</p>
                    </div>
                    <div class="bg-slate-50 dark:bg-slate-800/40 p-2.5 rounded-2xl text-center border border-slate-100 dark:border-slate-800/60">
                        <p class="text-lg font-extrabold text-indigo-650 dark:text-indigo-400 font-display">14k+</p>
                        <p class="text-[9px] text-slate-400 dark:text-slate-500 font-bold uppercase">Packages</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section Title: Ventures & Projects -->
        <div class="mb-8">
            <h2 class="text-2xl sm:text-3xl font-extrabold font-display text-slate-900 dark:text-white flex items-center gap-3">
                <i class="fa-solid fa-rectangle-list text-indigo-500"></i>
                Associated Ventures & Projects
            </h2>
            <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">
                A diverse portfolio spanning hospitality, dining, education, engineering, and events.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            
            <!-- Card 1: King Castle by LAKSAM -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-rose-500/10 text-rose-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-hotel text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-rose-500/10 text-rose-600 dark:text-rose-455 border border-rose-500/20">
                            Hospitality
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        King Castle by LAKSAM
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        A luxurious colonial-style retreat nestled in the misty hills, offering high-end accommodation and fine dining.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Nuwara Eliya
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 2: Prison Park Restaurant -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-utensils text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-455 border border-amber-500/20">
                            Dining
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        Prison Park Restaurant
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        A themed dining experience set near the historical Bogambara jail, offering local fusion delicacies.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Bogambara, Kandy
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 3: SEA Education -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-blue-500/10 text-blue-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-graduation-cap text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-blue-500/10 text-blue-650 dark:text-blue-400 border border-blue-500/20">
                            Education
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        SEA Education
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        Leading academic institute in Kegalle offering professional training, languages, and higher education paths.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Kegalle
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 4: Pear Steps Shoe Company -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-emerald-500/10 text-emerald-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-shoe-prints text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-emerald-500/10 text-emerald-650 dark:text-emerald-400 border border-emerald-500/20">
                            Retail
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        Pear Steps Shoe Company
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        Exclusive designer footwear brand with a signature boutique store in Kandy, blending comfort and style.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Kandy
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 5: Eddys Big Bole Restaurant -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-burger text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-455 border border-amber-500/20">
                            Dining
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        Eddys Big Bole Restaurant
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        Kandy's favorite comfort food destination specializing in gourmet street food, burgers, and signature boles.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Kandy
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 6: Roster Cafe -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-amber-500/10 text-amber-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-mug-hot text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-amber-500/10 text-amber-600 dark:text-amber-455 border border-amber-500/20">
                            Dining & Cafe
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        Roster Cafe
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        A premium artisan specialty coffee shop and brunch spot in Kandy, featuring locally sourced brews.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Kandy
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 7: Eddys Engineering -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 text-cyan-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-compass-drafting text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-cyan-500/10 text-cyan-650 dark:text-cyan-400 border border-cyan-500/20">
                            Engineering
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        Eddys Engineering
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        High-quality civil engineering, structural steel contracting, and local infrastructure developments.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Kegalle
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

            <!-- Card 8: Eddys Events -->
            <div class="group bg-white dark:bg-slate-900/50 backdrop-blur-md border border-slate-200/80 dark:border-slate-850 rounded-3xl overflow-hidden shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-12 h-12 rounded-2xl bg-purple-500/10 text-purple-500 flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                            <i class="fa-solid fa-champagne-glasses text-xl"></i>
                        </div>
                        <span class="text-[10px] font-bold tracking-wider uppercase px-2.5 py-1 rounded-full bg-purple-500/10 text-purple-650 dark:text-purple-400 border border-purple-500/20">
                            Events
                        </span>
                    </div>
                    <h3 class="text-lg font-bold font-display text-slate-900 dark:text-white group-hover:text-indigo-500 dark:group-hover:text-indigo-400 transition-colors">
                        Eddys Events
                    </h3>
                    <p class="text-slate-500 dark:text-slate-400 text-xs mt-2 leading-relaxed">
                        Bespoke corporate planning, private celebrations, stage setups, and luxury floral design curation.
                    </p>
                </div>
                <div class="px-6 py-4 bg-slate-50 dark:bg-slate-800/30 border-t border-slate-100 dark:border-slate-800 flex items-center justify-between">
                    <span class="text-xs font-semibold text-slate-650 dark:text-slate-350 flex items-center gap-1.5">
                        <i class="fa-solid fa-map-pin text-red-500"></i> Kandy
                    </span>
                    <i class="fa-solid fa-arrow-right text-slate-400 group-hover:translate-x-1 transition-transform text-xs"></i>
                </div>
            </div>

        </div>
    </div>

    <!-- Footer Copyright -->
    <div class="text-center text-slate-400 dark:text-slate-500 text-xs mt-16">
        <p>&copy; 2026 Saman Edirisinghe. All rights reserved.</p>
    </div>

    <!-- JS Scripts for theme, toast & export -->
    <script>
        // Set Theme Mode Initial Load
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Toggle Theme Mode Function
        function toggleTheme() {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

        // Copy Contact to Clipboard Function
        function copyToClipboard(text, message) {
            navigator.clipboard.writeText(text).then(() => {
                showToast(message);
            }).catch(err => {
                console.error('Could not copy text: ', err);
            });
        }

        // Show Toast Toast Notification
        function showToast(message) {
            const toast = document.getElementById('toast');
            const toastMsg = document.getElementById('toast-message');
            toastMsg.innerText = message;
            toast.classList.remove('opacity-0', 'translate-y-2');
            toast.classList.add('opacity-100', 'translate-y-0');
            
            setTimeout(() => {
                toast.classList.remove('opacity-100', 'translate-y-0');
                toast.classList.add('opacity-0', 'translate-y-2');
            }, 2500);
        }

        // Upgraded CSV/Excel Exporter for Contacts and Ventures Portfolio
        function exportToExcel() {
            const header = "Category,Ventures & Contact Name,Location,Description / Detail\n";
            const rowPersonal = "Personal Contact,Saman Edirisinghe,Kegalle Sri Lanka,seedceylon@gmail.com | +94 71 434 2223 / 070 595 4445\n";
            
            const projects = [
                ["Hospitality", "King Castle by LAKSAM", "Nuwara Eliya", "Colonial-style retreat with high-end dining"],
                ["Dining", "Prison Park Restaurant", "Bogambara Kandy", "Themed restaurant offering fusion delicacies"],
                ["Education", "SEA Education", "Kegalle", "Academic professional development & language institute"],
                ["Retail", "Pear Steps Shoe Company", "Kandy", "Exclusive designer footwear brand & boutique"],
                ["Dining", "Eddys Big Bole Restaurant", "Kandy", "Gourmet comfort street food & burgers"],
                ["Dining & Cafe", "Roster Cafe", "Kandy", "Artisan coffee shop & specialty brunch"],
                ["Engineering", "Eddys Engineering", "Kegalle", "Civil engineering contracting & infrastructure developments"],
                ["Events", "Eddys Events", "Kandy", "Bespoke corporate planning & luxury styling"]
            ];

            let csvContent = header + rowPersonal;
            projects.forEach(p => {
                // Escape commas to ensure clean CSV import
                const category = `"${p[0]}"`;
                const name = `"${p[1]}"`;
                const loc = `"${p[2]}"`;
                const desc = `"${p[3]}"`;
                csvContent += `${category},${name},${loc},${desc}\n`;
            });

            const blob = new Blob([csvContent], { type: 'text/csv;charset=utf-8;' });
            const url = window.URL.createObjectURL(blob);
            const a = document.createElement('a');
            a.setAttribute('href', url);
            a.setAttribute('download', 'Saman_Edirisinghe_Portfolio.csv');
            a.click();
            showToast("Portfolio details downloaded successfully!");
        }
    </script>
</body>
</html>
