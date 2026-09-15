<section id="home" class="relative min-h-[92vh] flex items-center justify-center overflow-hidden pt-20">
    
    <!-- Background Gradient (Light) -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-[-20%] right-[-10%] w-[600px] h-[600px] bg-cyan-500/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-20%] left-[-10%] w-[600px] h-[600px] bg-blue-600/5 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 w-full">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
            
            <!-- Left Column: Typography & Positioning -->
            <div class="w-full lg:w-7/12 text-center lg:text-left">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/30 text-cyan-400 text-xs font-bold uppercase tracking-wider mb-6">
                    <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                    Adama Traoré
                </div>

                <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold text-white leading-[1.15] mb-6 tracking-tight">
                    Ingénieur Logiciel Full-Stack
                </h1>

                <!-- Core Tech Pills Headline -->
                <div class="flex flex-wrap items-center justify-center lg:justify-start gap-2 mb-6">
                    <span class="px-3 py-1 rounded-lg bg-slate-800 border border-slate-700/80 text-cyan-400 font-bold text-xs">Laravel</span>
                    <span class="px-3 py-1 rounded-lg bg-slate-800 border border-slate-700/80 text-cyan-400 font-bold text-xs">Flutter</span>
                    <span class="px-3 py-1 rounded-lg bg-slate-800 border border-slate-700/80 text-green-400 font-bold text-xs">Node.js</span>
                    <span class="px-3 py-1 rounded-lg bg-slate-800 border border-slate-700/80 text-emerald-400 font-bold text-xs">PostgreSQL</span>
                </div>

                <p class="text-base sm:text-lg text-slate-300 mb-8 max-w-xl mx-auto lg:mx-0 leading-relaxed">
                    {{ __('Hero Description') }}
                </p>

                <!-- Action Buttons & Quick Links -->
                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 mb-8">
                    <!-- Primary CTA -->
                    <a href="#projects" class="px-7 py-3.5 bg-cyan-500 hover:bg-cyan-400 text-slate-950 rounded-xl font-bold transition-all shadow-[0_4px_14px_0_rgba(14,165,233,0.39)] hover:shadow-[0_6px_20px_rgba(14,165,233,0.23)] hover:-translate-y-0.5 w-full sm:w-auto inline-flex items-center justify-center gap-2 text-sm">
                        <i class="fa-solid fa-rocket"></i>
                        <span>{{ __('View my work') }}</span>
                    </a>
                    
                    <!-- CV Download Button -->
                    <a href="{{ asset('cv/CV_Adama_Traore.pdf') }}" target="_blank" download class="px-7 py-3.5 rounded-xl text-white bg-slate-800 hover:bg-slate-700 border border-slate-700 hover:border-cyan-500 transition-all font-semibold w-full sm:w-auto inline-flex items-center justify-center gap-2 text-sm">
                        <i class="fa-solid fa-file-arrow-down text-cyan-400"></i>
                        <span>{{ __('Download CV') }}</span>
                    </a>
                </div>

                <!-- Direct Social Icons Row -->
                <div class="flex items-center justify-center lg:justify-start gap-4 text-slate-400 pt-2 border-t border-slate-800/80">
                    <span class="text-xs uppercase font-bold tracking-wider text-slate-500">Contact rapide :</span>
                    <a href="https://github.com/adama-traore-github" target="_blank" rel="noopener noreferrer" class="hover:text-cyan-400 transition-colors" title="GitHub">
                        <i class="fa-brands fa-github text-lg"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/adama-traore-dev/" target="_blank" rel="noopener noreferrer" class="hover:text-cyan-400 transition-colors" title="LinkedIn">
                        <i class="fa-brands fa-linkedin text-lg"></i>
                    </a>
                    <a href="mailto:traoreadama.dev@gmail.com" class="hover:text-cyan-400 transition-colors" title="Email">
                        <i class="fa-solid fa-envelope text-lg"></i>
                    </a>
                </div>
            </div>

            <!-- Right Column: Visual -->
            <div class="w-full lg:w-5/12 flex justify-center lg:justify-end mt-8 lg:mt-0">
                <div class="relative w-72 h-72 sm:w-[360px] sm:h-[360px] lg:w-[420px] lg:h-[420px]">
                    <!-- Main Image Circle with Glow Effect -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-cyan-400 via-blue-500 to-emerald-500 p-1 animate-rotate">
                        <div class="w-full h-full rounded-full bg-slate-900 p-1">
                            <div class="relative w-full h-full rounded-full overflow-hidden border-2 border-cyan-400/50">
                                <img 
                                    src="{{ asset('images/adama.png') }}" 
                                    alt="Adama Traoré" 
                                    class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Floating Status Badge (Bottom Left) -->
                    <div class="absolute -bottom-2 -left-4 z-20 animate-bounce-slow">
                        <div class="bg-slate-900 border border-cyan-500/40 rounded-2xl py-3 px-4 flex items-center gap-3 shadow-xl backdrop-blur-md">
                            <span class="relative flex h-3 w-3">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                            </span>
                            <div class="flex flex-col">
                                <span class="text-[10px] text-cyan-400 uppercase tracking-wider font-extrabold">Statut</span>
                                <span class="text-xs font-bold text-white leading-tight">Ouvert aux opportunités <br/><span class="text-slate-400 font-normal">Full-Stack Web & Mobile</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    @keyframes bounce-slow {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-8px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 4s infinite ease-in-out;
    }
</style>