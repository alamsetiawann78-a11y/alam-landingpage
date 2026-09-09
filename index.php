<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alam Setiawan | Web Developer & Student at SMK Cefada</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        nature: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            300: '#86efac',
                            400: '#4ade80',
                            500: '#22c55e',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                            950: '#052e16',
                        },
                        earth: {
                            800: '#2a1a08',
                            900: '#1c1004',
                        }
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'glow': 'glow 3s infinite alternate',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0px)' },
                            '50%': { transform: 'translateY(-12px)' },
                        },
                        glow: {
                            '0%': { filter: 'drop-shadow(0 0 5px rgba(34, 197, 94, 0.4))' },
                            '100%': { filter: 'drop-shadow(0 0 20px rgba(34, 197, 94, 0.8))' }
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
            background-color: #022c22;
            color: #f0fdf4;
        }

        /* Glassmorphism Styles */
        .glass-card {
            background: rgba(6, 78, 59, 0.35);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.12);
        }

        .glass-nav {
            background: rgba(2, 44, 34, 0.75);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(34, 197, 94, 0.2);
        }

        /* Custom Nature Gradient Text */
        .text-nature-gradient {
            background: linear-gradient(135deg, #4ade80 0%, #facc15 50%, #34d399 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gold-gradient {
            background: linear-gradient(135deg, #fef08a 0%, #f59e0b 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: #022c22;
        }
        ::-webkit-scrollbar-thumb {
            background: #15803d;
            border-radius: 5px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #22c55e;
        }

        /* Theme Atmosphere Presets */
        .theme-emerald {
            --bg-gradient: linear-gradient(to bottom, #022c22, #064e3b, #022c22);
        }
        .theme-sunset {
            --bg-gradient: linear-gradient(to bottom, #451a03, #78350f, #022c22);
        }
        .theme-night {
            --bg-gradient: linear-gradient(to bottom, #030712, #065f46, #022c22);
        }

        /* Background Mountains SVG Overlay */
        .mountain-bg {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 1440 320'%3E%3Cpath fill='%23064e3b' fill-opacity='0.4' d='M0,192L48,176C96,160,192,128,288,138.7C384,149,480,203,576,218.7C672,235,768,213,864,181.3C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3Cpath fill='%23022c22' fill-opacity='0.8' d='M0,256L48,240C96,224,192,192,288,197.3C384,203,480,245,576,245.3C672,245,768,203,864,181.3C960,160,1056,160,1152,176C1248,192,1344,224,1392,240L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z'%3E%3C/path%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: bottom;
            background-size: cover;
        }
    </style>
</head>
<body class="transition-colors duration-700 ease-in-out bg-slate-950 text-slate-100 relative">

    <!-- Nature Particle Interactive Canvas -->
    <canvas id="natureCanvas" class="fixed inset-0 pointer-events-none z-0 opacity-70"></canvas>

    <!-- Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="#hero" class="flex items-center gap-3 group">
                    <div class="w-10 h-10 rounded-full bg-gradient-to-tr from-emerald-500 to-green-300 flex items-center justify-center text-slate-950 font-bold text-xl shadow-lg shadow-emerald-500/30 group-hover:scale-110 transition-transform">
                        <i class="fa-solid font-bold fa-leaf text-slate-900"></i>
                    </div>
                    <div class="flex flex-col">
                        <span class="font-extrabold text-lg tracking-tight text-white group-hover:text-emerald-400 transition-colors">ALAM SETIAWAN</span>
                        <span class="text-xs text-emerald-400 font-medium tracking-widest uppercase">SMK CEFADA • RPL</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8 font-medium text-sm">
                    <a href="#about" class="text-emerald-100 hover:text-emerald-400 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-[#22c55e] fa-user-gear text-emerald-400"></i> Profil
                    </a>
                    <a href="#skills" class="text-emerald-100 hover:text-emerald-400 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-code text-emerald-400"></i> Keahlian
                    </a>
                    <a href="#projects" class="text-emerald-100 hover:text-emerald-400 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-gamepad text-emerald-400"></i> Project Game
                    </a>
                    <a href="#contact" class="text-emerald-100 hover:text-emerald-400 transition-colors flex items-center gap-2">
                        <i class="fa-solid fa-envelope text-emerald-400"></i> Kontak
                    </a>
                </div>

                <!-- Right Controls (Atmosphere Theme & Audio Toggle) -->
                <div class="flex items-center gap-3">
                    <!-- Ambient Sound Button -->
                    <button id="soundToggle" onclick="toggleAmbientSound()" title="Putar Musik Suasana Alam" class="p-2.5 rounded-full bg-emerald-900/60 border border-emerald-500/30 text-emerald-300 hover:bg-emerald-700/50 hover:text-white transition-all shadow-md">
                        <i id="soundIcon" class="fa-solid fa-volume-xmark"></i>
                    </button>

                    <!-- Nature Theme Selector Dropdown -->
                    <div class="relative inline-block text-left">
                        <button id="themeDropdownBtn" onclick="toggleThemeMenu()" class="flex items-center gap-2 px-3 py-2 rounded-xl bg-emerald-900/60 border border-emerald-500/30 text-xs font-semibold text-emerald-200 hover:bg-emerald-800/60 transition-all">
                            <i class="fa-solid fa-mountain-sun text-emerald-400"></i>
                            <span id="currentThemeLabel" class="hidden sm:inline">Suasana Alam</span>
                            <i class="fa-solid fa-chevron-down text-[10px]"></i>
                        </button>
                        <!-- Dropdown items -->
                        <div id="themeMenu" class="hidden absolute right-0 mt-2 w-44 rounded-2xl glass-card shadow-2xl py-2 z-50 border border-emerald-500/30">
                            <button onclick="changeAtmosphere('emerald')" class="w-full text-left px-4 py-2 text-xs text-emerald-200 hover:bg-emerald-600/30 flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-emerald-500"></span> Hutan Emerald (Default)
                            </button>
                            <button onclick="changeAtmosphere('sunset')" class="w-full text-left px-4 py-2 text-xs text-amber-200 hover:bg-amber-600/30 flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-amber-500"></span> Senja Pegunungan
                            </button>
                            <button onclick="changeAtmosphere('night')" class="w-full text-left px-4 py-2 text-xs text-indigo-200 hover:bg-indigo-600/30 flex items-center gap-2">
                                <span class="w-3 h-3 rounded-full bg-indigo-500"></span> Malam Berbintang
                            </button>
                        </div>
                    </div>

                    <!-- Mobile Menu Toggle Button -->
                    <button onclick="toggleMobileMenu()" class="md:hidden p-2 rounded-xl text-emerald-300 hover:text-white hover:bg-emerald-800/50">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Container -->
        <div id="mobileMenu" class="hidden md:hidden px-4 pt-2 pb-6 glass-card border-b border-emerald-500/20">
            <div class="flex flex-col gap-4 text-sm font-medium pt-2">
                <a href="#about" onclick="toggleMobileMenu()" class="text-emerald-200 hover:text-white py-2 border-b border-emerald-800/40 flex items-center gap-3">
                    <i class="fa-solid fa-user text-emerald-400"></i> Profil & Pendidikan
                </a>
                <a href="#skills" onclick="toggleMobileMenu()" class="text-emerald-200 hover:text-white py-2 border-b border-emerald-800/40 flex items-center gap-3">
                    <i class="fa-solid fa-code text-emerald-400"></i> Keahlian RPL
                </a>
                <a href="#projects" onclick="toggleMobileMenu()" class="text-emerald-200 hover:text-white py-2 border-b border-emerald-800/40 flex items-center gap-3">
                    <i class="fa-solid fa-gamepad text-emerald-400"></i> Project Game Interaktif
                </a>
                <a href="#contact" onclick="toggleMobileMenu()" class="text-emerald-200 hover:text-white py-2 flex items-center gap-3">
                    <i class="fa-solid fa-envelope text-emerald-400"></i> Hubungi Saya
                </a>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="hero" class="relative min-h-screen pt-28 pb-20 flex items-center justify-center overflow-hidden mountain-bg">
        <!-- Floating Eco Elements -->
        <div class="absolute top-24 left-10 text-emerald-500/20 text-6xl animate-float pointer-events-none">
            <i class="fa-solid fa-tree"></i>
        </div>
        <div class="absolute bottom-20 right-10 text-emerald-400/20 text-7xl animate-float pointer-events-none" style="animation-delay: 2s;">
            <i class="fa-solid fa-seedling"></i>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <!-- Hero Text Left -->
                <div class="lg:col-span-7 text-center lg:text-left space-y-6">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card border border-emerald-400/30 text-emerald-300 text-xs sm:text-sm font-semibold tracking-wide">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
                        <span>Siswa Rekayasa Perangkat Lunak (RPL)</span>
                    </div>

                    <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight text-white leading-tight">
                        Halo, Saya <br>
                        <span class="text-nature-gradient">ALAM SETIAWAN</span>
                    </h1>

                    <p class="text-base sm:text-lg text-emerald-100/90 max-w-2xl leading-relaxed">
                        Pengembang Web & Game Interaktif dari <strong class="text-emerald-300 font-semibold">SMK Cefada</strong>. Mengombinasikan logika pemrograman dengan keindahan estetika alam untuk menciptakan pengalaman digital yang menarik.
                    </p>

                    <!-- Tech Stack Pills -->
                    <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 pt-2">
                        <span class="px-3 py-1.5 rounded-lg bg-emerald-950/80 border border-emerald-600/40 text-xs font-semibold text-emerald-300 flex items-center gap-1.5 shadow-sm">
                            <i class="fa-brands fa-laravel text-red-400"></i> Laravel
                        </span>
                        <span class="px-3 py-1.5 rounded-lg bg-emerald-950/80 border border-emerald-600/40 text-xs font-semibold text-emerald-300 flex items-center gap-1.5 shadow-sm">
                            <i class="fa-brands fa-php text-indigo-300"></i> PHP
                        </span>
                        <span class="px-3 py-1.5 rounded-lg bg-emerald-950/80 border border-emerald-600/40 text-xs font-semibold text-emerald-300 flex items-center gap-1.5 shadow-sm">
                            <i class="fa-solid fa-database text-amber-400"></i> MySQL
                        </span>
                        <span class="px-3 py-1.5 rounded-lg bg-emerald-950/80 border border-emerald-600/40 text-xs font-semibold text-emerald-300 flex items-center gap-1.5 shadow-sm">
                            <i class="fa-brands fa-html5 text-orange-400"></i> HTML5
                        </span>
                        <span class="px-3 py-1.5 rounded-lg bg-emerald-950/80 border border-emerald-600/40 text-xs font-semibold text-emerald-300 flex items-center gap-1.5 shadow-sm">
                            <i class="fa-brands fa-css3-alt text-blue-400"></i> CSS3
                        </span>
                    </div>

                    <!-- Call To Actions -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-4">
                        <a href="#projects" class="w-full sm:w-auto px-8 py-4 rounded-2xl bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-400 hover:to-green-500 text-slate-950 font-bold text-sm sm:text-base shadow-xl shadow-emerald-600/30 hover:scale-105 transition-all flex items-center justify-center gap-3 group">
                            <i class="fa-solid fa-gamepad text-lg group-hover:rotate-12 transition-transform"></i>
                            <span>Mainkan Game Saya</span>
                        </a>
                        <a href="#contact" class="w-full sm:w-auto px-8 py-4 rounded-2xl glass-card hover:bg-emerald-800/40 text-emerald-200 font-semibold text-sm sm:text-base border border-emerald-500/40 hover:scale-105 transition-all flex items-center justify-center gap-3">
                            <i class="fa-solid fa-paper-plane"></i>
                            <span>Hubungi Alam</span>
                        </a>
                    </div>
                </div>

                <!-- Hero Illustration / Card Right -->
                <div class="lg:col-span-5 flex justify-center">
                    <div class="relative w-full max-w-md">
                        <!-- Background Glow Aura -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-emerald-500 to-teal-400 rounded-3xl blur-2xl opacity-40 animate-pulse-slow"></div>

                        <div class="relative glass-card p-8 rounded-3xl border border-emerald-400/30 shadow-2xl space-y-6">
                            <!-- Avatar Illustration / User Photo -->
                            <div class="relative mx-auto w-36 h-36 rounded-full bg-gradient-to-br from-emerald-400 via-teal-600 to-green-900 p-1 shadow-2xl flex items-center justify-center group cursor-pointer" onclick="openPhotoModal()" title="Klik untuk mengunggah / mengganti foto Anda">
                                <div class="w-full h-full rounded-full bg-emerald-950 overflow-hidden flex items-center justify-center relative">
                                    <img id="heroProfileImg" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=400&auto=format&fit=crop" alt="Foto Alam Setiawan" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" onerror="this.onerror=null; this.src='https://placehold.co/400x400/064e3b/4ade80?text=Alam+Setiawan';">
                                    <div class="absolute bottom-0 inset-x-0 h-10 bg-gradient-to-t from-emerald-900/80 to-transparent pointer-events-none"></div>
                                </div>
                                <!-- Hover Overlay for Photo Edit -->
                                <div class="absolute inset-0 rounded-full bg-slate-950/60 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center text-white text-xs font-semibold gap-1 backdrop-blur-sm">
                                    <i class="fa-solid fa-camera text-emerald-400 text-lg"></i>
                                    <span>Ganti Foto</span>
                                </div>
                                <span class="absolute bottom-1 right-2 w-6 h-6 rounded-full bg-emerald-400 border-2 border-emerald-950 flex items-center justify-center text-[10px] text-slate-950 font-bold z-10" title="Status Online">
                                    <i class="fa-solid fa-check"></i>
                                </span>
                            </div>

                            <div class="text-center space-y-1">
                                <div class="flex items-center justify-center gap-2">
                                    <h3 class="text-xl font-bold text-white">Alam Setiawan</h3>
                                    <button onclick="openPhotoModal()" class="text-emerald-400 hover:text-emerald-300 text-xs p-1" title="Ganti Foto Profil">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </button>
                                </div>
                                <p class="text-xs text-emerald-300 font-medium"><i class="fa-solid fa-graduation-cap text-emerald-400 mr-1"></i> SMK Cefada - Jurusan RPL</p>
                            </div>

                            <!-- Live Quote / Philosophy Card -->
                            <div class="p-4 rounded-2xl bg-emerald-950/70 border border-emerald-800/50 text-xs text-emerald-200/90 italic leading-relaxed relative">
                                <i class="fa-solid fa-quote-left text-emerald-500/40 text-2xl absolute top-2 left-2"></i>
                                <p class="pl-5 pt-1">
                                    "seperti alam yang tumbuh konsisten, kode yang baik dibangun dengan ketelitian, ketenangan, dan keberlanjutan."
                                </p>
                            </div>

                            <!-- Quick Stats -->
                            <div class="grid grid-cols-2 gap-3 text-center">
                                <div class="p-3 rounded-xl bg-emerald-900/40 border border-emerald-600/20">
                                    <div class="text-xl font-extrabold text-emerald-300">RPL</div>
                                    <div class="text-[11px] text-emerald-200/70">Jurusan</div>
                                </div>
                                <div class="p-3 rounded-xl bg-emerald-900/40 border border-emerald-600/20">
                                    <div class="text-xl font-extrabold text-emerald-300">5+</div>
                                    <div class="text-[11px] text-emerald-200/70">Tech Stack</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-24 relative z-10 border-t border-emerald-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2">Tentang Saya</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-white">Profil & Latar Belakang Pendidikan</p>
                <div class="w-16 h-1 bg-gradient-to-r from-emerald-400 to-green-300 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                
                <!-- Card 1: Biodata -->
                <div class="glass-card p-8 rounded-3xl border border-emerald-500/20 hover:border-emerald-400/40 transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center gap-4 mb-6">
                            <div class="relative w-16 h-16 rounded-2xl bg-emerald-800/50 border border-emerald-500/30 overflow-hidden shrink-0 shadow-md group cursor-pointer" onclick="openPhotoModal()" title="Klik untuk Ganti Foto">
                                <img id="aboutProfileImg" src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?q=80&w=400&auto=format&fit=crop" alt="Alam Setiawan" class="w-full h-full object-cover group-hover:scale-105 transition-transform" onerror="this.onerror=null; this.src='https://placehold.co/400x400/064e3b/4ade80?text=Alam';">
                                <div class="absolute inset-0 bg-slate-950/50 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-emerald-300 text-xs">
                                    <i class="fa-solid fa-camera"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-white">Mengenal Alam Setiawan</h3>
                                <p class="text-xs text-emerald-300 font-medium">Siswa RPL • SMK Cefada</p>
                            </div>
                        </div>
                        <p class="text-emerald-100/80 leading-relaxed mb-6 text-sm sm:text-base">
                            Saya adalah siswa di <strong class="text-emerald-300">SMK Cefada</strong> yang mengambil peminatan keahlian <strong class="text-emerald-300">Rekayasa Perangkat Lunak (RPL)</strong>. Memiliki ketertarikan mendalam pada dunia pemrograman web back-end, database management, dan pengembangan aplikasi/game interaktif yang intuitif.
                        </p>
                    </div>

                    <div class="space-y-3 pt-4 border-t border-emerald-800/50 text-xs sm:text-sm">
                        <div class="flex items-center justify-between py-1">
                            <span class="text-emerald-200/60">Nama Lengkap</span>
                            <span class="font-semibold text-white">Alam Setiawan</span>
                        </div>
                        <div class="flex items-center justify-between py-1">
                            <span class="text-emerald-200/60">Sekolah</span>
                            <span class="font-semibold text-emerald-300">SMK Cefada</span>
                        </div>
                        <div class="flex items-center justify-between py-1">
                            <span class="text-emerald-200/60">Jurusan</span>
                            <span class="font-semibold text-emerald-300">Rekayasa Perangkat Lunak (RPL)</span>
                        </div>
                        <div class="flex items-center justify-between py-1">
                            <span class="text-emerald-200/60">Fokus Keahlian</span>
                            <span class="font-semibold text-white">Web Development & Game Web</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Education & Values -->
                <div class="glass-card p-8 rounded-3xl border border-emerald-500/20 hover:border-emerald-400/40 transition-all flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-2xl bg-emerald-800/50 border border-emerald-500/30 flex items-center justify-center text-emerald-300 text-xl mb-6 shadow-md">
                            <i class="fa-solid fa-school"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-white mb-4">Pendidikan & Fokus RPL</h3>
                        <p class="text-emerald-100/80 leading-relaxed mb-6 text-sm sm:text-base">
                            Selama menempuh pendidikan RPL di SMK Cefada, saya aktif mempelajari alur logika logika program, arsitektur database relasional, skema pemrograman berorientasi objek (OOP), hingga pembuatan antarmuka web yang responsif.
                        </p>
                    </div>

                    <!-- Highlight Highlights -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 pt-2">
                        <div class="p-4 rounded-2xl bg-emerald-950/60 border border-emerald-700/30">
                            <i class="fa-solid fa-brain text-emerald-400 text-lg mb-2"></i>
                            <h4 class="font-bold text-white text-sm">Problem Solving</h4>
                            <p class="text-xs text-emerald-200/70 mt-1">Mengasah logika pemrograman dan algoritma dalam pembuatan kode yang efisien.</p>
                        </div>
                        <div class="p-4 rounded-2xl bg-emerald-950/60 border border-emerald-700/30">
                            <i class="fa-solid fa-laptop-code text-emerald-400 text-lg mb-2"></i>
                            <h4 class="font-bold text-white text-sm">Praktik Proyek</h4>
                            <p class="text-xs text-emerald-200/70 mt-1">Mengembangkan proyek nyata berbasis web dan game interaktif.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SKILLS SECTION -->
    <section id="skills" class="py-24 relative z-10 bg-emerald-950/40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2">Kemampuan Teknis</h2>
                <p class="text-3xl sm:text-4xl font-extrabold text-white">Skill & Teknologi yang Dikuasai</p>
                <p class="text-sm text-emerald-200/80 mt-2">Daftar bahasa pemrograman dan alat pengembangan web yang dipelajari di RPL</p>
                <div class="w-16 h-1 bg-gradient-to-r from-emerald-400 to-green-300 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Skills Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Skill Item: Laravel -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:scale-105 transition-all group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-red-500/10 border border-red-500/30 flex items-center justify-center text-red-400 text-2xl group-hover:scale-110 transition-transform">
                                <i class="fa-brands fa-laravel"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg">Laravel</h4>
                                <span class="text-xs text-emerald-300">PHP Framework</span>
                            </div>
                        </div>
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-600/30">Backend</span>
                    </div>
                    <p class="text-xs text-emerald-100/70 mb-4">Pembuatan REST API, MVC architecture, Eloquent ORM, dan routing aplikasi web.</p>
                    <div class="w-full bg-emerald-950 rounded-full h-2 overflow-hidden border border-emerald-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-red-400 h-2 rounded-full w-[80%]"></div>
                    </div>
                </div>

                <!-- Skill Item: PHP -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:scale-105 transition-all group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-indigo-500/10 border border-indigo-500/30 flex items-center justify-center text-indigo-400 text-2xl group-hover:scale-110 transition-transform">
                                <i class="fa-brands fa-php"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg">PHP Native</h4>
                                <span class="text-xs text-emerald-300">Server Language</span>
                            </div>
                        </div>
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-600/30">Backend</span>
                    </div>
                    <p class="text-xs text-emerald-100/70 mb-4">Sintaks dasar PHP, manajemen Session/Cookie, logika server-side, dan integrasi form.</p>
                    <div class="w-full bg-emerald-950 rounded-full h-2 overflow-hidden border border-emerald-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-indigo-400 h-2 rounded-full w-[85%]"></div>
                    </div>
                </div>

                <!-- Skill Item: MySQL -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:scale-105 transition-all group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 text-2xl group-hover:scale-110 transition-transform">
                                <i class="fa-solid fa-database"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg">MySQL</h4>
                                <span class="text-xs text-emerald-300">Database Relasional</span>
                            </div>
                        </div>
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-600/30">Database</span>
                    </div>
                    <p class="text-xs text-emerald-100/70 mb-4">Perancangan skema DB, DDL/DML, Join Table, relasi data, dan optimasi query.</p>
                    <div class="w-full bg-emerald-950 rounded-full h-2 overflow-hidden border border-emerald-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-amber-400 h-2 rounded-full w-[82%]"></div>
                    </div>
                </div>

                <!-- Skill Item: HTML5 -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:scale-105 transition-all group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-orange-500/10 border border-orange-500/30 flex items-center justify-center text-orange-400 text-2xl group-hover:scale-110 transition-transform">
                                <i class="fa-brands fa-html5"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg">HTML5</h4>
                                <span class="text-xs text-emerald-300">Markup Language</span>
                            </div>
                        </div>
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-600/30">Frontend</span>
                    </div>
                    <p class="text-xs text-emerald-100/70 mb-4">Struktur semantik web modern, aksesibilitas (A11y), form interaktif, dan media tag.</p>
                    <div class="w-full bg-emerald-950 rounded-full h-2 overflow-hidden border border-emerald-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-orange-400 h-2 rounded-full w-[90%]"></div>
                    </div>
                </div>

                <!-- Skill Item: CSS3 & Tailwind -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:scale-105 transition-all group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 text-2xl group-hover:scale-110 transition-transform">
                                <i class="fa-brands fa-css3-alt"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg">CSS3 & Styling</h4>
                                <span class="text-xs text-emerald-300">Flexbox, Grid, Animasi</span>
                            </div>
                        </div>
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-600/30">Frontend</span>
                    </div>
                    <p class="text-xs text-emerald-100/70 mb-4">Desain responsif layout, efek visual modern glassmorphism, dan Tailwind CSS.</p>
                    <div class="w-full bg-emerald-950 rounded-full h-2 overflow-hidden border border-emerald-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-blue-400 h-2 rounded-full w-[88%]"></div>
                    </div>
                </div>

                <!-- Skill Item: JavaScript -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:scale-105 transition-all group">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-yellow-500/10 border border-yellow-500/30 flex items-center justify-center text-yellow-400 text-2xl group-hover:scale-110 transition-transform">
                                <i class="fa-brands fa-square-js"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-white text-lg">JavaScript</h4>
                                <span class="text-xs text-emerald-300">Interaktivitas & Game</span>
                            </div>
                        </div>
                        <span class="text-xs font-bold px-2.5 py-1 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-600/30">Frontend</span>
                    </div>
                    <p class="text-xs text-emerald-100/70 mb-4">Manipulasi DOM, Event handling, logika Canvas 2D untuk pengembangan Game web.</p>
                    <div class="w-full bg-emerald-950 rounded-full h-2 overflow-hidden border border-emerald-800">
                        <div class="bg-gradient-to-r from-emerald-500 to-yellow-400 h-2 rounded-full w-[80%]"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PROJECTS SECTION -->
    <section id="projects" class="py-24 relative z-10 border-t border-emerald-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-900/80 border border-emerald-500/30 text-emerald-300 text-xs font-semibold mb-3">
                    <i class="fa-solid fa-gamepad"></i> Featured Portfolio
                </div>
                <h2 class="text-3xl sm:text-5xl font-extrabold text-white">Project Game Interaktif</h2>
                <p class="text-sm text-emerald-200/80 mt-3">Hasil karya game berbasis web yang dikembangkan oleh Alam Setiawan</p>
                <div class="w-16 h-1 bg-gradient-to-r from-emerald-400 to-green-300 mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Main Featured Project Card (Game Interaktif) -->
            <div class="glass-card rounded-3xl border-2 border-emerald-500/40 overflow-hidden shadow-2xl mb-12 hover:border-emerald-400 transition-all">
                <div class="grid grid-cols-1 lg:grid-cols-12">
                    
                    <!-- Left: Interactive Game Preview Visual -->
                    <div class="lg:col-span-7 bg-emerald-950/80 p-6 sm:p-8 flex flex-col justify-between relative overflow-hidden min-h-[320px]">
                        <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/40 via-teal-900/20 to-slate-950 pointer-events-none"></div>
                        
                        <!-- Decorative Game Screen Frame -->
                        <div class="relative z-10 h-full flex flex-col justify-between">
                            <div class="flex items-center justify-between pb-4 border-b border-emerald-800/60">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-red-500/80 inline-block"></span>
                                    <span class="w-3 h-3 rounded-full bg-yellow-500/80 inline-block"></span>
                                    <span class="w-3 h-3 rounded-full bg-green-500/80 inline-block"></span>
                                    <span class="text-xs text-emerald-300 font-mono ml-2">alam-game / github-pages</span>
                                </div>
                                <span class="text-xs px-2.5 py-1 rounded-full bg-emerald-800/80 text-emerald-200 border border-emerald-500/40 font-semibold">
                                    <i class="fa-solid fa-signal text-green-400 animate-pulse mr-1"></i> Live Web Game
                                </span>
                            </div>

                            <!-- Big Interactive Banner graphic inside card -->
                            <div class="my-8 text-center space-y-4">
                                <div class="w-20 h-20 mx-auto rounded-3xl bg-gradient-to-tr from-emerald-500 to-teal-300 flex items-center justify-center text-slate-950 text-4xl shadow-xl shadow-emerald-500/30 animate-bounce">
                                    <i class="fa-solid fa-gamepad"></i>
                                </div>
                                <h3 class="text-2xl sm:text-3xl font-extrabold text-white">Game Interaktif Alam</h3>
                                <p class="text-xs sm:text-sm text-emerald-200/80 max-w-md mx-auto">
                                    Game interaktif buatan Alam Setiawan yang dirancang dengan aksesibilitas web (A11y) dan kontrol yang menyenangkan.
                                </p>
                            </div>

                            <div class="flex items-center justify-center gap-3 pt-2">
                                <a href="https://alamsetiawann78-a11y.github.io/alam-game/" target="_blank" rel="noopener noreferrer" class="px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs sm:text-sm shadow-lg shadow-emerald-500/30 flex items-center gap-2 transition-all">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i> Buka Game di Tab Baru
                                </a>
                                <button onclick="openGameModal()" class="px-5 py-3 rounded-xl bg-emerald-900/80 hover:bg-emerald-800 text-emerald-200 font-semibold text-xs sm:text-sm border border-emerald-600/40 flex items-center gap-2 transition-all">
                                    <i class="fa-solid fa-expand"></i> Preview Langsung
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Right: Project Description & Details -->
                    <div class="lg:col-span-5 p-6 sm:p-8 flex flex-col justify-between space-y-6">
                        <div class="space-y-4">
                            <span class="text-xs font-bold tracking-wider text-emerald-400 uppercase">Project Utama</span>
                            <h3 class="text-2xl font-bold text-white">Interactive Web Game Showcase</h3>
                            
                            <p class="text-emerald-100/80 text-sm leading-relaxed">
                                Proyek ini merupakan game interaktif yang di-hosting langsung melalui GitHub Pages. Berfokus pada kemudahan aksesibilitas (A11y), respon kontrol cepat, serta antarmuka yang menarik.
                            </p>

                            <div class="space-y-2 pt-2">
                                <h4 class="text-xs font-bold text-emerald-300 uppercase tracking-wider">Teknologi Digunakan:</h4>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-2.5 py-1 rounded-lg bg-emerald-900/80 text-emerald-200 text-xs border border-emerald-700/40">HTML5 Canvas</span>
                                    <span class="px-2.5 py-1 rounded-lg bg-emerald-900/80 text-emerald-200 text-xs border border-emerald-700/40">JavaScript (ES6)</span>
                                    <span class="px-2.5 py-1 rounded-lg bg-emerald-900/80 text-emerald-200 text-xs border border-emerald-700/40">A11y Accessible</span>
                                    <span class="px-2.5 py-1 rounded-lg bg-emerald-900/80 text-emerald-200 text-xs border border-emerald-700/40">CSS3 Animations</span>
                                </div>
                            </div>

                            <div class="p-4 rounded-xl bg-emerald-950/60 border border-emerald-800/40 text-xs text-emerald-200/90 space-y-1">
                                <div class="font-bold text-emerald-400"><i class="fa-solid fa-link mr-1"></i> URL Game Official:</div>
                                <a href="https://alamsetiawann78-a11y.github.io/alam-game/" target="_blank" class="text-emerald-300 underline break-all hover:text-white transition-colors">
                                    https://alamsetiawann78-a11y.github.io/alam-game/
                                </a>
                            </div>
                        </div>

                        <div class="pt-4 border-t border-emerald-800/50">
                            <a href="https://alamsetiawann78-a11y.github.io/alam-game/" target="_blank" class="w-full py-3.5 rounded-xl bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-400 hover:to-green-500 text-slate-950 font-bold text-sm shadow-lg flex items-center justify-center gap-2 transition-all">
                                <i class="fa-solid fa-play"></i> Mainkan Sekarang
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Secondary Upcoming/Concept Project Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Project 2 -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:border-emerald-400/40 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-800/60 flex items-center justify-center text-emerald-300">
                            <i class="fa-brands fa-laravel text-xl"></i>
                        </div>
                        <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-700/40">Web App Project</span>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Sistem Informasi Sekolah / RPL</h4>
                    <p class="text-xs text-emerald-100/70 leading-relaxed mb-4">
                        Konsep proyek pengelolaan data siswa dan tugas berbasis framework Laravel dan database MySQL dengan fitur autentikasi multi-user.
                    </p>
                    <div class="flex flex-wrap gap-1.5 text-[11px]">
                        <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800">Laravel</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800">PHP</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800">MySQL</span>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="glass-card p-6 rounded-2xl border border-emerald-500/20 hover:border-emerald-400/40 transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-800/60 flex items-center justify-center text-emerald-300">
                            <i class="fa-solid fa-cash-register text-xl"></i>
                        </div>
                        <span class="text-[11px] font-semibold px-2.5 py-0.5 rounded-full bg-emerald-900/80 text-emerald-300 border border-emerald-700/40">Kasir Project</span>
                    </div>
                    <h4 class="text-xl font-bold text-white mb-2">Aplikasi Kasir & Inventaris toko</h4>
                    <p class="text-xs text-emerald-100/70 leading-relaxed mb-4">
                        Aplikasi pencatatan transaksi barang penjualan berbasis web dengan pencetakan struk dan laporan stok barang otomatis.
                    </p>
                    <div class="flex flex-wrap gap-1.5 text-[11px]">
                        <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800">PHP Native</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800">MySQL</span>
                        <span class="px-2 py-0.5 rounded bg-emerald-950 text-emerald-300 border border-emerald-800">Bootstrap/CSS</span>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTACT SECTION -->
    <section id="contact" class="py-24 relative z-10 bg-emerald-950/60 border-t border-emerald-800/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
                
                <!-- Contact Info Left -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <h2 class="text-xs font-bold uppercase tracking-widest text-emerald-400 mb-2">Hubungi Saya</h2>
                        <h3 class="text-3xl sm:text-4xl font-extrabold text-white">Mari Berkolaborasi!</h3>
                        <p class="text-sm text-emerald-100/80 mt-3 leading-relaxed">
                            Punya pertanyaan seputar project, diskusi dunia web & RPL, atau ingin berkenalan lebih jauh dengan saya? Silakan kirim pesan melalui form atau media sosial di bawah.
                        </p>
                    </div>

                    <div class="space-y-4 pt-4">
                        <div class="flex items-center gap-4 p-4 rounded-2xl glass-card border border-emerald-500/20">
                            <div class="w-12 h-12 rounded-xl bg-emerald-800/60 border border-emerald-500/30 flex items-center justify-center text-emerald-300 text-xl">
                                <i class="fa-solid fa-graduation-cap"></i>
                            </div>
                            <div>
                                <span class="text-xs text-emerald-300 block">Institusi Sekolah</span>
                                <span class="font-bold text-white text-sm">SMK Cefada - Lampung</span>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 rounded-2xl glass-card border border-emerald-500/20">
                            <div class="w-12 h-12 rounded-xl bg-emerald-800/60 border border-emerald-500/30 flex items-center justify-center text-emerald-300 text-xl">
                                <i class="fa-brands fa-github"></i>
                            </div>
                            <div>
                                <span class="text-xs text-emerald-300 block">GitHub Profile</span>
                                <a href="https://github.com/alamsetiawann78-a11y" target="_blank" class="font-bold text-white text-sm hover:text-emerald-400 transition-colors">
                                    alamsetiawann78-a11y
                                </a>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 p-4 rounded-2xl glass-card border border-emerald-500/20">
                            <div class="w-12 h-12 rounded-xl bg-emerald-800/60 border border-emerald-500/30 flex items-center justify-center text-emerald-300 text-xl">
                                <i class="fa-solid fa-gamepad"></i>
                            </div>
                            <div>
                                <span class="text-xs text-emerald-300 block">Proyek Game</span>
                                <span class="font-bold text-white text-sm">alam-game (GitHub Pages)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Right -->
                <div class="lg:col-span-7">
                    <div class="glass-card p-8 rounded-3xl border border-emerald-500/30 shadow-2xl">
                        <h4 class="text-xl font-bold text-white mb-6 flex items-center gap-2">
                            <i class="fa-solid fa-paper-plane text-emerald-400"></i> Kirim Pesan Langsung
                        </h4>

                        <form id="contactForm" onsubmit="handleFormSubmit(event)" class="space-y-5">
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                                <div>
                                    <label class="block text-xs font-semibold text-emerald-200 mb-2">Nama Anda</label>
                                    <input type="text" required placeholder="Masukkan nama..." class="w-full px-4 py-3 rounded-xl bg-emerald-950/80 border border-emerald-700/50 text-white placeholder-emerald-600 focus:outline-none focus:border-emerald-400 text-sm transition-all">
                                </div>
                                <div>
                                    <label class="block text-xs font-semibold text-emerald-200 mb-2">Email Anda</label>
                                    <input type="email" required placeholder="email@domain.com" class="w-full px-4 py-3 rounded-xl bg-emerald-950/80 border border-emerald-700/50 text-white placeholder-emerald-600 focus:outline-none focus:border-emerald-400 text-sm transition-all">
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-emerald-200 mb-2">Subjek Pesan</label>
                                <input type="text" required placeholder="Topik diskusi / pertanyaan..." class="w-full px-4 py-3 rounded-xl bg-emerald-950/80 border border-emerald-700/50 text-white placeholder-emerald-600 focus:outline-none focus:border-emerald-400 text-sm transition-all">
                            </div>

                            <div>
                                <label class="block text-xs font-semibold text-emerald-200 mb-2">Pesan Anda</label>
                                <textarea rows="4" required placeholder="Tuliskan pesan Anda di sini..." class="w-full px-4 py-3 rounded-xl bg-emerald-950/80 border border-emerald-700/50 text-white placeholder-emerald-600 focus:outline-none focus:border-emerald-400 text-sm transition-all"></textarea>
                            </div>

                            <button type="submit" class="w-full py-4 rounded-xl bg-gradient-to-r from-emerald-500 to-green-600 hover:from-emerald-400 hover:to-green-500 text-slate-950 font-bold text-sm shadow-xl shadow-emerald-600/20 hover:scale-[1.01] transition-all flex items-center justify-center gap-2">
                                <i class="fa-solid fa-paper-plane"></i> Kirim Pesan Ke Alam
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- FOOTER SECTION -->
    <footer class="py-12 relative z-10 border-t border-emerald-800/40 bg-slate-950 text-center">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-6">
            <div class="flex items-center justify-center gap-3">
                <div class="w-8 h-8 rounded-full bg-emerald-500 flex items-center justify-center text-slate-950 font-bold text-sm">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <span class="font-extrabold text-lg text-white tracking-tight">ALAM SETIAWAN</span>
            </div>

            <p class="text-xs text-emerald-300/70 max-w-md mx-auto">
                Siswa SMK Cefada • Jurusan Rekayasa Perangkat Lunak (RPL) <br>
                Laravel • PHP • MySQL • HTML • CSS • Game Web Interaktif
            </p>

            <div class="flex justify-center items-center gap-6 text-emerald-400 text-lg">
                <a href="https://github.com/alamsetiawann78-a11y" target="_blank" class="hover:text-white transition-colors" title="GitHub">
                    <i class="fa-brands fa-github"></i>
                </a>
                <a href="https://alamsetiawann78-a11y.github.io/alam-game/" target="_blank" class="hover:text-white transition-colors" title="Project Game">
                    <i class="fa-solid fa-gamepad"></i>
                </a>
                <a href="#hero" class="hover:text-white transition-colors" title="Kembali ke atas">
                    <i class="fa-solid fa-arrow-up"></i>
                </a>
            </div>

            <div class="text-[11px] text-emerald-500/60 border-t border-emerald-900/50 pt-6">
                &copy; <span id="year"></span> Alam Setiawan. Tema Pemandangan Indah Alam. Dibuat dengan semangat RPL.
            </div>
        </div>
    </footer>

    <!-- LIVE GAME MODAL PREVIEW -->
    <div id="gameModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
        <div class="glass-card w-full max-w-4xl h-[85vh] rounded-3xl border border-emerald-500/40 flex flex-col overflow-hidden shadow-2xl animate-fade-in">
            <!-- Modal Header -->
            <div class="px-6 py-4 bg-emerald-950/90 border-b border-emerald-800/60 flex items-center justify-between">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-gamepad text-emerald-400 text-xl"></i>
                    <div>
                        <h3 class="text-sm font-bold text-white">Live Preview: Game Interaktif Alam</h3>
                        <p class="text-[11px] text-emerald-300">alamsetiawann78-a11y.github.io/alam-game/</p>
                    </div>
                </div>
                <div class="flex items-center gap-3">
                    <a href="https://alamsetiawann78-a11y.github.io/alam-game/" target="_blank" class="text-xs px-3 py-1.5 rounded-lg bg-emerald-800 hover:bg-emerald-700 text-white font-semibold transition-colors">
                        <i class="fa-solid fa-external-link"></i> Buka Penuh
                    </a>
                    <button onclick="closeGameModal()" class="w-8 h-8 rounded-full bg-emerald-900/80 hover:bg-red-500/80 text-white flex items-center justify-center transition-colors">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>
            </div>
            <!-- Modal Iframe Body -->
            <div class="flex-1 bg-black relative">
                <iframe id="gameIframe" src="" class="w-full h-full border-0" title="Game Interaktif Preview"></iframe>
            </div>
        </div>
    </div>

    <!-- MODAL GANTI FOTO PROFIL -->
    <div id="photoModal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4 bg-slate-950/80 backdrop-blur-md">
        <div class="glass-card w-full max-w-md rounded-3xl border border-emerald-500/40 p-6 space-y-6 shadow-2xl relative">
            <div class="flex items-center justify-between pb-4 border-b border-emerald-800/60">
                <div class="flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-emerald-800/60 text-emerald-400 flex items-center justify-center text-lg">
                        <i class="fa-solid fa-image"></i>
                    </div>
                    <div>
                        <h3 class="text-base font-bold text-white">Ganti Foto Profil</h3>
                        <p class="text-xs text-emerald-300">Pilih file atau masukkan link foto Alam</p>
                    </div>
                </div>
                <button onclick="closePhotoModal()" class="w-8 h-8 rounded-full bg-emerald-900/80 hover:bg-red-500/80 text-white flex items-center justify-center transition-colors">
                    <i class="fa-solid fa-xmark"></i>
                </button>
            </div>

            <!-- Option 1: File Upload -->
            <div class="space-y-3">
                <label class="block text-xs font-semibold text-emerald-200">1. Upload File dari Perangkat (HP / Laptop)</label>
                <div onclick="document.getElementById('fileInput').click()" class="border-2 border-dashed border-emerald-500/40 hover:border-emerald-400 rounded-2xl p-6 text-center bg-emerald-950/50 cursor-pointer transition-colors group">
                    <i class="fa-solid fa-cloud-arrow-up text-3xl text-emerald-400 group-hover:scale-110 transition-transform mb-2"></i>
                    <p class="text-xs font-semibold text-white">Klik untuk Pilih Foto</p>
                    <p class="text-[10px] text-emerald-300/70 mt-1">Format JPG, PNG, WEBP, atau GIF</p>
                </div>
                <input type="file" id="fileInput" accept="image/*" class="hidden" onchange="handleFileSelect(event)">
            </div>

            <div class="flex items-center gap-3">
                <div class="h-px bg-emerald-800/60 flex-1"></div>
                <span class="text-xs text-emerald-400 font-bold uppercase">Atau</span>
                <div class="h-px bg-emerald-800/60 flex-1"></div>
            </div>

            <!-- Option 2: Image URL Input -->
            <form onsubmit="handleUrlSubmit(event)" class="space-y-3">
                <label class="block text-xs font-semibold text-emerald-200">2. Masukkan Link / URL Gambar</label>
                <div class="flex gap-2">
                    <input type="url" id="photoUrlInput" placeholder="https://domain.com/foto-anda.jpg" class="flex-1 px-4 py-2.5 rounded-xl bg-emerald-950/80 border border-emerald-700/50 text-white text-xs placeholder-emerald-600 focus:outline-none focus:border-emerald-400">
                    <button type="submit" class="px-4 py-2.5 rounded-xl bg-emerald-500 hover:bg-emerald-400 text-slate-950 font-bold text-xs transition-colors">
                        Terapkan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- TOAST NOTIFICATION CONTAINER -->
    <div id="toast" class="fixed bottom-6 right-6 z-50 hidden max-w-sm px-5 py-4 rounded-2xl glass-card border border-emerald-400/50 shadow-2xl flex items-center gap-3 transition-all duration-300">
        <div id="toastIcon" class="w-8 h-8 rounded-full bg-emerald-500/20 text-emerald-400 flex items-center justify-center text-lg">
            <i class="fa-solid fa-circle-check"></i>
        </div>
        <div class="text-xs">
            <h5 id="toastTitle" class="font-bold text-white">Berhasil!</h5>
            <p id="toastMessage" class="text-emerald-200/80">Pesan Anda telah terkirim.</p>
        </div>
    </div>

    <script>
        // Set dynamic current year
        document.getElementById('year').textContent = new Date().getFullYear();

        // Photo Modal Controller
        function openPhotoModal() {
            document.getElementById('photoModal').classList.remove('hidden');
        }

        function closePhotoModal() {
            document.getElementById('photoModal').classList.add('hidden');
        }

        function updateProfileImages(src) {
            document.getElementById('heroProfileImg').src = src;
            document.getElementById('aboutProfileImg').src = src;
            showToast("Foto Diperbarui!", "Foto profil Anda berhasil dipasang di website.");
        }

        // Handle File Upload from device
        function handleFileSelect(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    updateProfileImages(e.target.result);
                    closePhotoModal();
                };
                reader.readAsDataURL(file);
            }
        }

        // Handle Image URL input
        function handleUrlSubmit(event) {
            event.preventDefault();
            const url = document.getElementById('photoUrlInput').value.trim();
            if (url) {
                updateProfileImages(url);
                document.getElementById('photoUrlInput').value = '';
                closePhotoModal();
            }
        }

        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Atmosphere Theme Selector Switcher
        function toggleThemeMenu() {
            const menu = document.getElementById('themeMenu');
            menu.classList.toggle('hidden');
        }

        function changeAtmosphere(theme) {
            const body = document.body;
            const label = document.getElementById('currentThemeLabel');
            
            body.classList.remove('theme-emerald', 'theme-sunset', 'theme-night');
            
            if (theme === 'emerald') {
                body.style.backgroundColor = '#022c22';
                label.textContent = 'Hutan Emerald';
                particleColor = 'rgba(52, 211, 153, ';
            } else if (theme === 'sunset') {
                body.style.backgroundColor = '#2a1205';
                label.textContent = 'Senja Pegunungan';
                particleColor = 'rgba(251, 191, 36, ';
            } else if (theme === 'night') {
                body.style.backgroundColor = '#030712';
                label.textContent = 'Malam Berbintang';
                particleColor = 'rgba(129, 140, 248, ';
            }

            toggleThemeMenu();
            showToast("Suasana Diubah", `Tema pemandangan disesuaikan ke mode ${label.textContent}`);
        }

        // Game Preview Modal Controller
        function openGameModal() {
            const modal = document.getElementById('gameModal');
            const iframe = document.getElementById('gameIframe');
            iframe.src = "https://alamsetiawann78-a11y.github.io/alam-game/";
            modal.classList.remove('hidden');
        }

        function closeGameModal() {
            const modal = document.getElementById('gameModal');
            const iframe = document.getElementById('gameIframe');
            iframe.src = "";
            modal.classList.add('hidden');
        }

        // Contact Form Custom Handler
        function handleFormSubmit(e) {
            e.preventDefault();
            showToast("Pesan Terkirim!", "Terima kasih sudah menghubungi Alam. Pesan Anda telah diterima!");
            document.getElementById('contactForm').reset();
        }

        // Custom Toast Notification System (No alert used)
        function showToast(title, message) {
            const toast = document.getElementById('toast');
            document.getElementById('toastTitle').textContent = title;
            document.getElementById('toastMessage').textContent = message;

            toast.classList.remove('hidden');
            toast.classList.add('animate-bounce');

            setTimeout(() => {
                toast.classList.remove('animate-bounce');
            }, 1000);

            setTimeout(() => {
                toast.classList.add('hidden');
            }, 4000);
        }

        // Web Audio API Synth Ambient Nature Sound Generator (No external audio files needed)
        let audioCtx = null;
        let isSoundPlaying = false;
        let noiseNode = null;

        function toggleAmbientSound() {
            const icon = document.getElementById('soundIcon');
            
            if (!isSoundPlaying) {
                try {
                    const AudioContext = window.AudioContext || window.webkitAudioContext;
                    audioCtx = new AudioContext();

                    // Create white noise for gentle wind/breeze simulation
                    const bufferSize = audioCtx.sampleRate * 2;
                    const buffer = audioCtx.createBuffer(1, bufferSize, audioCtx.sampleRate);
                    const output = buffer.getChannelData(0);

                    for (let i = 0; i < bufferSize; i++) {
                        output[i] = Math.random() * 2 - 1;
                    }

                    noiseNode = audioCtx.createBufferSource();
                    noiseNode.buffer = buffer;
                    noiseNode.loop = true;

                    // Filter for soft wind sound
                    const filter = audioCtx.createBiquadFilter();
                    filter.type = 'lowpass';
                    filter.frequency.value = 400;

                    // Gain Node for gentle volume
                    const gainNode = audioCtx.createGain();
                    gainNode.gain.value = 0.04;

                    noiseNode.connect(filter);
                    filter.connect(gainNode);
                    gainNode.connect(audioCtx.destination);

                    noiseNode.start();
                    isSoundPlaying = true;
                    icon.className = "fa-solid fa-volume-high text-emerald-400";
                    showToast("Suara Alam Aktif", "Memutar efek gemerisik angin dan angin malam yang menenangkan.");
                } catch (e) {
                    showToast("Info Audio", "Audio tidak didukung di browser ini.");
                }
            } else {
                if (noiseNode) {
                    noiseNode.stop();
                    noiseNode.disconnect();
                }
                if (audioCtx) {
                    audioCtx.close();
                }
                isSoundPlaying = false;
                icon.className = "fa-solid fa-volume-xmark";
                showToast("Audio Dimatikan", "Efek suara ambient alam telah dinonaktifkan.");
            }
        }

        // Nature Leaves & Light Particles Canvas Animation
        const canvas = document.getElementById('natureCanvas');
        const ctx = canvas.getContext('2d');

        let particles = [];
        let particleColor = 'rgba(52, 211, 153, ';

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        class NatureParticle {
            constructor() {
                this.reset();
            }

            reset() {
                this.x = Math.random() * canvas.width;
                this.y = -20;
                this.size = Math.random() * 6 + 2;
                this.speedY = Math.random() * 1.2 + 0.4;
                this.speedX = Math.sin(Math.random() * Math.PI) * 0.8;
                this.opacity = Math.random() * 0.5 + 0.2;
                this.rotation = Math.random() * 360;
                this.rotationSpeed = (Math.random() - 0.5) * 2;
                this.isLeaf = Math.random() > 0.4; // 60% chance leaf shape
            }

            update() {
                this.y += this.speedY;
                this.x += Math.sin(this.y * 0.01) + this.speedX;
                this.rotation += this.rotationSpeed;

                if (this.y > canvas.height + 20 || this.x < -20 || this.x > canvas.width + 20) {
                    this.reset();
                }
            }

            draw() {
                ctx.save();
                ctx.translate(this.x, this.y);
                ctx.rotate((this.rotation * Math.PI) / 180);
                ctx.fillStyle = particleColor + this.opacity + ')';

                if (this.isLeaf) {
                    // Draw leaf shape
                    ctx.beginPath();
                    ctx.ellipse(0, 0, this.size, this.size / 2, 0, 0, 2 * Math.PI);
                    ctx.fill();
                } else {
                    // Draw floating glowing pollen dot
                    ctx.beginPath();
                    ctx.arc(0, 0, this.size / 2, 0, Math.PI * 2);
                    ctx.fill();
                }

                ctx.restore();
            }
        }

        function initParticles() {
            particles = [];
            const count = Math.floor((window.innerWidth * window.innerHeight) / 18000);
            for (let i = 0; i < Math.min(count, 50); i++) {
                const p = new NatureParticle();
                p.y = Math.random() * canvas.height; // initial spread
                particles.push(p);
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            particles.forEach(p => {
                p.update();
                p.draw();
            });
            requestAnimationFrame(animateParticles);
        }

        window.onload = function() {
            initParticles();
            animateParticles();
        };
    </script>
</body>
</html>
