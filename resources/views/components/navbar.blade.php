<nav class="fixed top-0 w-full z-50 transition-all duration-300 bg-slate-900/80 backdrop-blur-md border-b border-white/10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('home') }}" class="text-2xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent transform hover:scale-105 transition-transform duration-300">
                    Adama TRAORE
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex space-x-8">
                <x-nav-link href="#home" label="Accueil" />
                <x-nav-link href="#projects" label="Projets" />
                <x-nav-link href="#skills" label="Compétences" />
                <x-nav-link href="#experience" label="Expérience" />
                <x-nav-link href="#about" label="À propos" />
                <x-nav-link href="#contact" label="Contact" />
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center">
                <button id="mobile-menu-btn" class="text-gray-300 hover:text-white focus:outline-none">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Panel -->
    <div id="mobile-menu" class="hidden md:hidden bg-slate-900 border-b border-white/10">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 flex flex-col items-center">
            <x-mobile-nav-link href="#home" label="Accueil" />
            <x-mobile-nav-link href="#projects" label="Projets" />
            <x-mobile-nav-link href="#skills" label="Compétences" />
            <x-mobile-nav-link href="#experience" label="Expérience" />
            <x-mobile-nav-link href="#about" label="À propos" />
            <x-mobile-nav-link href="#contact" label="Contact" />
        </div>
    </div>
</nav>
