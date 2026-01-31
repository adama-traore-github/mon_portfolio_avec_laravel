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
                <x-nav-link href="#home" label="{{ __('Home') }}" />
                <x-nav-link href="#projects" label="{{ __('Projects') }}" />
                <x-nav-link href="#skills" label="{{ __('Skills') }}" />
                <x-nav-link href="#experience" label="{{ __('Experience') }}" />
                <x-nav-link href="#about" label="{{ __('About') }}" />
                <x-nav-link href="#contact" label="{{ __('Contact') }}" />
                
                <!-- Desktop Theme Toggle -->
                <button id="desktop-theme-btn" onclick="toggleTheme()" class="text-gray-300 hover:text-white focus:outline-none transition-colors" title="Changer le thème">
                    <i class="fas fa-sun text-xl"></i>
                </button>
                
                <!-- Language Switcher -->
                <a href="{{ route('lang.switch', app()->getLocale() == 'fr' ? 'en' : 'fr') }}" class="flex items-center space-x-2 text-gray-300 hover:text-white transition-colors" title="{{ app()->getLocale() == 'fr' ? 'Switch to English' : 'Passer en Français' }}">
                    <i class="fas fa-globe text-xl"></i>
                    <span class="text-sm font-bold">{{ strtoupper(app()->getLocale()) }}</span>
                </a>
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
            <x-mobile-nav-link href="#home" label="{{ __('Home') }}" />
            <x-mobile-nav-link href="#projects" label="{{ __('Projects') }}" />
            <x-mobile-nav-link href="#skills" label="{{ __('Skills') }}" />
            <x-mobile-nav-link href="#experience" label="{{ __('Experience') }}" />
            <x-mobile-nav-link href="#about" label="{{ __('About') }}" />
            <x-mobile-nav-link href="#contact" label="{{ __('Contact') }}" />
            
            <!-- Mobile Theme Toggle -->
            <button onclick="toggleTheme()" class="mt-4 px-4 py-2 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors flex items-center gap-2">
                <i id="mobile-theme-icon" class="fas fa-sun"></i>
                <span id="mobile-theme-text">{{ __('Light Mode') }}</span>
            </button>
            
            <!-- Mobile Language Switcher -->
            <a href="{{ route('lang.switch', app()->getLocale() == 'fr' ? 'en' : 'fr') }}" class="mt-4 px-4 py-2 rounded-full bg-white/10 text-white hover:bg-white/20 transition-colors flex items-center gap-2">
                <i class="fas fa-globe"></i>
                <span>{{ app()->getLocale() == 'fr' ? 'Français' : 'English' }}</span>
            </a>
        </div>
    </div>

    <script>
        function toggleTheme() {
            const html = document.documentElement;
            html.classList.toggle('theme-light');
            
            const isLight = html.classList.contains('theme-light');
            
            if (isLight) {
                localStorage.setItem('theme', 'light');
            } else {
                localStorage.removeItem('theme');
            }
            
            updateThemeIcons(isLight);
        }
        
        function updateThemeIcons(isLight) {
            const desktopIcon = document.querySelector('#desktop-theme-btn i');
            const mobileIcon = document.querySelector('#mobile-theme-icon');
            const mobileText = document.querySelector('#mobile-theme-text');
            
            if (isLight) {
                desktopIcon?.classList.replace('fa-sun', 'fa-moon');
                mobileIcon?.classList.replace('fa-sun', 'fa-moon');
                if (mobileText) mobileText.textContent = "{{ __('Dark Mode') }}";
            } else {
                desktopIcon?.classList.replace('fa-moon', 'fa-sun');
                mobileIcon?.classList.replace('fa-moon', 'fa-sun');
                if (mobileText) mobileText.textContent = "{{ __('Light Mode') }}";
            }
        }
        
        // Initialize icons on load
        document.addEventListener('DOMContentLoaded', () => {
             const isLight = document.documentElement.classList.contains('theme-light');
             updateThemeIcons(isLight);
        });
    </script>
</nav>
