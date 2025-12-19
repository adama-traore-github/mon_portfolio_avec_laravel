<section id="home" class="relative min-h-[92vh] flex items-center justify-center overflow-hidden pt-20">
    
    <!-- Background Gradient (Light) -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-[-20%] right-[-10%] w-[600px] h-[600px] bg-cyan-500/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-20%] left-[-10%] w-[600px] h-[600px] bg-blue-600/5 rounded-full blur-[120px]"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-8 lg:gap-12">
            
            <!-- Left Column: Typography -->
            <div class="w-full lg:w-1/2 text-center lg:text-left">
                <h1 class="text-5xl sm:text-6xl md:text-7xl font-extrabold text-white leading-[1.1] mb-6 tracking-tight">
                    Développeur <br/>
                    Full-Stack <br/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-400 to-blue-500">Passionné</span>
                </h1>

                <p class="text-lg text-slate-300 mb-8 max-w-lg mx-auto lg:mx-0">
                    Je transforme vos idées en solutions web performantes et élégantes, en alliant expertise technique et créativité pour des résultats qui dépassent vos attentes.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                    <!-- Modern Blue Button -->
                    <a href="#projets" class="px-7 py-3.5 bg-[#0ea5e9] hover:bg-[#0284c7] text-white rounded-full font-bold transition-all shadow-[0_4px_14px_0_rgba(14,165,233,0.39)] hover:shadow-[0_6px_20px_rgba(14,165,233,0.23)] hover:-translate-y-0.5 w-full sm:w-auto">
                        Voir mes travaux
                    </a>
                    
                    <!-- Outline Button -->
                    <a href="#contact" class="px-7 py-3.5 rounded-full text-slate-300 border border-slate-700 hover:border-cyan-500 hover:text-white transition-all font-medium w-full sm:w-auto">
                        Me contacter
                    </a>
                </div>
            </div>

            <!-- Right Column: Visual -->
            <div class="w-full lg:w-1/2 flex justify-center lg:justify-end mt-8 lg:mt-0">
                <div class="relative w-80 h-80 sm:w-[400px] sm:h-[400px] lg:w-[500px] lg:h-[500px]">
                    <!-- Main Image Circle with Glow Effect -->
                    <div class="absolute inset-0 rounded-full bg-gradient-to-br from-cyan-400 via-blue-500 to-purple-600 p-1 animate-rotate">
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

                    <!-- Floating Badge (Bottom Left) -->
                    <div class="absolute bottom-[10%] -left-[5%] z-20 animate-bounce-slow">
                        <div class="bg-black/80 border border-cyan-500/30 rounded-xl py-3 px-5 flex items-center gap-3 shadow-lg backdrop-blur-md">
                            <span class="relative flex h-2.5 w-2.5">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-green-500"></span>
                            </span>
                            <div class="flex flex-col">
                                <span class="text-xs text-cyan-400 uppercase tracking-wider font-medium">Status</span>
                                <span class="text-sm font-bold text-white leading-none">Full-Stack Dev</span>
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
        50% { transform: translateY(-10px); }
    }
    .animate-bounce-slow {
        animation: bounce-slow 4s infinite ease-in-out;
    }
</style>