<section id="about" class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    
    <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">
        
        <!-- Left Visual Side -->
        <div class="w-full lg:w-5/12 flex justify-center">
            <div class="relative w-64 sm:w-80 group">
                <div class="absolute inset-0 bg-gradient-to-tr from-cyan-500 to-blue-600 rounded-3xl blur-xl opacity-30 group-hover:opacity-50 transition-opacity"></div>
                <div class="relative z-10 rounded-3xl overflow-hidden border-2 border-slate-700/80 group-hover:border-cyan-500/80 transition-colors shadow-2xl">
                    <img src="{{ asset('images/adama.png') }}" alt="Adama Traoré" class="w-full h-auto object-cover transform group-hover:scale-105 transition-transform duration-500">
                </div>
                <!-- Experience Badge floating -->
                <div class="absolute -bottom-4 -right-4 z-20 bg-slate-900 border border-slate-700/80 rounded-2xl p-4 shadow-xl flex items-center gap-3">
                    <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-bold text-lg">
                        <i class="fa-solid fa-graduation-cap"></i>
                    </div>
                    <div>
                        <span class="text-xs text-slate-400 block font-medium">Diplôme</span>
                        <span class="text-xs font-bold text-white leading-tight block">Ingénieur Génie Logiciel</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Content Side -->
        <div class="w-full lg:w-7/12 space-y-6">
            
            <div>
                <span class="text-xs font-extrabold uppercase tracking-widest text-cyan-400 block mb-1">À Propos De Moi</span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-white">Adama Traoré</h2>
                <h3 class="text-lg font-semibold text-cyan-400 mt-1">Ingénieur en Conception Logicielle</h3>
            </div>

            <!-- Concise Professional Intro -->
            <p class="text-slate-300 text-base leading-relaxed">
                Ingénieur en Génie Logiciel, je conçois et déploie des solutions digitales haute performance. 
                Alliant <strong class="text-white">rigueur architecturale</strong> et maîtrise des technologies modernes (<strong class="text-cyan-400">Laravel, Flutter, Node.js</strong>), j'accompagne la transformation d'idées stratégiques en logiciels fiables, évolutifs et sécurisés.
            </p>

            <!-- 3 Key Pillars -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                <div class="bg-slate-800/60 border border-slate-700/80 rounded-xl p-4 hover:border-cyan-500/50 transition-all">
                    <div class="text-cyan-400 text-lg mb-2">
                        <i class="fa-solid fa-compass-drafting"></i>
                    </div>
                    <h4 class="text-sm font-bold text-white mb-1">Architecture & Clean Code</h4>
                    <p class="text-slate-400 text-xs leading-normal">Conception logicielle structurée, modélisation objet et APIs REST scalables.</p>
                </div>

                <div class="bg-slate-800/60 border border-slate-700/80 rounded-xl p-4 hover:border-cyan-500/50 transition-all">
                    <div class="text-purple-400 text-lg mb-2">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>
                    <h4 class="text-sm font-bold text-white mb-1">Web & Mobile Multi-plateforme</h4>
                    <p class="text-slate-400 text-xs leading-normal">Applications fluides sur le web et les magasins d'applications mobiles (iOS/Android).</p>
                </div>

                <div class="bg-slate-800/60 border border-slate-700/80 rounded-xl p-4 hover:border-cyan-500/50 transition-all">
                    <div class="text-green-400 text-lg mb-2">
                        <i class="fa-solid fa-microchip"></i>
                    </div>
                    <h4 class="text-sm font-bold text-white mb-1">Innovation & Automation</h4>
                    <p class="text-slate-400 text-xs leading-normal">Intégration d'outils IA, protocoles Web3 et pipelines DevOps automatisés.</p>
                </div>
            </div>

            <!-- Call to Actions -->
            <div class="pt-4 flex flex-wrap items-center gap-4">
                <a href="#contact" class="px-6 py-3 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-xl transition-all text-sm inline-flex items-center gap-2 shadow-lg shadow-cyan-500/20">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>Me contacter</span>
                </a>
                <a href="https://github.com/adama-traore-github" target="_blank" rel="noopener noreferrer" class="px-6 py-3 bg-slate-800 hover:bg-slate-700 text-white font-semibold border border-slate-700 rounded-xl transition-all text-sm inline-flex items-center gap-2">
                    <i class="fa-brands fa-github"></i>
                    <span>Profil GitHub</span>
                </a>
            </div>

        </div>
    </div>

</section>
