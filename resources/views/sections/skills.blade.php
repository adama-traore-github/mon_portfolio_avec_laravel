<section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    
    <!-- Section Technique -->
    <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 text-center">
        {!! __('Technical Arsenal') !!}
    </h2>
    <p class="text-slate-400 text-center mb-16 max-w-2xl mx-auto">{{ __('The tools and technologies I use daily to build robust solutions.') }}</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-24">
        <!-- Langages -->
        <div class="bg-slate-800/50 rounded-2xl p-6 border border-slate-700 hover:border-blue-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/20">
            <h3 class="text-xl font-bold text-blue-400 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
                {{ __('Languages') }}
            </h3>
            <ul class="space-y-3 text-slate-300">
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-yellow-400/10 rounded-lg mr-3 group-hover:bg-yellow-400/20 transition-colors">
                        <i class="fab fa-js text-yellow-400"></i>
                    </span>
                    <span>JavaScript</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-orange-500/10 rounded-lg mr-3 group-hover:bg-orange-500/20 transition-colors">
                        <i class="fab fa-php text-orange-500"></i>
                    </span>
                    <span>PHP</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-orange-600/10 rounded-lg mr-3 group-hover:bg-orange-600/20 transition-colors">
                        <i class="fab fa-html5 text-orange-600"></i>
                    </span>
                    <span>HTML5</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-600/10 rounded-lg mr-3 group-hover:bg-blue-600/20 transition-colors">
                        <i class="fab fa-css3-alt text-blue-600"></i>
                    </span>
                    <span>CSS3</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-red-700/10 rounded-lg mr-3 group-hover:bg-red-700/20 transition-colors">
                        <i class="fas fa-gem text-red-700"></i>
                    </span>
                    <span>Ruby</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-500/10 rounded-lg mr-3 group-hover:bg-blue-500/20 transition-colors">
                        <i class="fab fa-python text-blue-500"></i>
                    </span>
                    <span>Python</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-white/80 rounded-lg mr-3 group-hover:bg-blue-50 transition-colors">
                        <i class="fas fa-code text-blue-600"></i>
                    </span>
                    <span>Dart</span>
                </li>
            </ul>
        </div>

        <!-- Frameworks -->
        <div class="bg-slate-800/50 rounded-2xl p-6 border border-slate-700 hover:border-green-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-green-500/20">
            <h3 class="text-xl font-bold text-green-400 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                Frameworks
            </h3>
            <ul class="space-y-3 text-slate-300">
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-red-600/10 rounded-lg mr-3 group-hover:bg-red-600/20 transition-colors">
                        <i class="fab fa-laravel text-red-600"></i>
                    </span>
                    <span>Laravel</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-green-600/10 rounded-lg mr-3 group-hover:bg-green-600/20 transition-colors">
                        <i class="fab fa-node-js text-green-600"></i>
                    </span>
                    <span>Node.js</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-gray-700/10 rounded-lg mr-3 group-hover:bg-gray-700/20 transition-colors">
                        <i class="fab fa-node text-gray-700"></i>
                    </span>
                    <span>Express.js</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-red-700/10 rounded-lg mr-3 group-hover:bg-red-700/20 transition-colors">
                        <i class="fas fa-gem text-red-700"></i>
                    </span>
                    <span>Ruby on Rails</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-500 rounded-lg mr-3 group-hover:bg-blue-600 transition-colors">
                        <svg width="16" height="16" viewBox="0 0 256 314" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid">
                            <path d="M157.666 0L0 160.013l48.272 48.27 48.27-48.27L78.54 83.03l29.002-29.002 50.124 50.124 50.124-50.124L157.666 0z" fill="#fff"/>
                            <path d="M157.666 0L78.54 79.126l29.002 29.002 50.124-50.124 50.124 50.124 29.002-29.002L157.666 0z" fill="#03A9F4"/>
                            <path d="M96.542 160.013l-48.27 48.27L96.54 256.4l29.002-48.117 32.124-48.27-53.124 0z" fill="#01579B"/>
                            <path d="M157.666 221.137l-32.124 48.27L157.666 314l78.126-78.126-29.002-29.002-19.124 19.124 10.124 10.124-10.124 10.124-19.124-19.123-19.124 19.123-10.124-10.124 10.124-10.124-10.124-10.124 10.124-10.124 19.124 19.123 19.124-19.123 10.124 10.124-10.124 10.124 10.124 10.124z" fill="#03A9F4"/>
                        </svg>
                    </span>
                    <span>Flutter</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-purple-600/10 rounded-lg mr-3 group-hover:bg-purple-600/20 transition-colors">
                        <i class="fab fa-bootstrap text-purple-600"></i>
                    </span>
                    <span>Bootstrap</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-cyan-400/10 rounded-lg mr-3 group-hover:bg-cyan-400/20 transition-colors">
                        <i class="fab fa-css3-alt text-cyan-400"></i>
                    </span>
                    <span>Tailwind CSS</span>
                </li>
            </ul>
        </div>

        <!-- Blockchain -->
        <div class="bg-slate-800/50 rounded-2xl p-6 border border-slate-700 hover:border-purple-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
            <h3 class="text-xl font-bold text-purple-400 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                Blockchain
            </h3>
            <ul class="space-y-3 text-slate-300">
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-yellow-500/10 rounded-lg mr-3 group-hover:bg-yellow-500/20 transition-colors">
                        <i class="fas fa-file-contract text-yellow-500"></i>
                    </span>
                    <span>{{ __('Smart Contracts') }}</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-500/10 rounded-lg mr-3 group-hover:bg-blue-500/20 transition-colors">
                        <i class="fas fa-cube text-blue-500"></i>
                    </span>
                    <span>{{ __('Web3 Integration') }}</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-green-500/10 rounded-lg mr-3 group-hover:bg-green-500/20 transition-colors">
                        <i class="fas fa-coins text-green-500"></i>
                    </span>
                    <span>{{ __('Token Management') }}</span>
                </li>
            </ul>
        </div>

        <!-- Bases de données -->
        <div class="bg-slate-800/50 rounded-2xl p-6 border border-slate-700 hover:border-emerald-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-emerald-500/20">
            <h3 class="text-xl font-bold text-emerald-400 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" /></svg>
                Bases de données
            </h3>
            <ul class="space-y-3 text-slate-300">
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-green-500/10 rounded-lg mr-3 group-hover:bg-green-500/20 transition-colors">
                        <i class="fas fa-database text-green-500"></i>
                    </span>
                    <span>Supabase</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-700/10 rounded-lg mr-3 group-hover:bg-blue-700/20 transition-colors">
                        <i class="fas fa-database text-blue-700"></i>
                    </span>
                    <span>PostgreSQL</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-orange-500/10 rounded-lg mr-3 group-hover:bg-orange-500/20 transition-colors">
                        <i class="fas fa-database text-orange-500"></i>
                    </span>
                    <span>MySQL</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-amber-500/10 rounded-lg mr-3 group-hover:bg-amber-500/20 transition-colors">
                        <i class="fas fa-fire text-amber-500"></i>
                    </span>
                    <span>Firebase</span>
                </li>
            </ul>
        </div>

        <!-- Outils -->
        <div class="bg-slate-800/50 rounded-2xl p-6 border border-slate-700 hover:border-cyan-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20">
            <h3 class="text-xl font-bold text-cyan-400 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </svg>
                Outils
            </h3>
            <ul class="space-y-3 text-slate-300">
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-orange-500/10 rounded-lg mr-3 group-hover:bg-orange-500/20 transition-colors">
                        <i class="fab fa-git-alt text-orange-500"></i>
                    </span>
                    <span>Git & GitHub</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-500/10 rounded-lg mr-3 group-hover:bg-blue-500/20 transition-colors">
                        <i class="fab fa-github text-blue-500"></i>
                    </span>
                    <span>GitHub</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-amber-500/10 rounded-lg mr-3 group-hover:bg-amber-500/20 transition-colors">
                        <i class="fas fa-tools text-amber-500"></i>
                    </span>
                    <span>CI/CD</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-600/10 rounded-lg mr-3 group-hover:bg-blue-600/20 transition-colors">
                        <i class="fab fa-trello text-blue-600"></i>
                    </span>
                    <span>Trello</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-white border border-gray-200 rounded-lg mr-3 group-hover:border-blue-400 transition-colors">
                        <i class="fab fa-docker text-blue-400"></i>
                    </span>
                    <span>Docker</span>
                </li>
            </ul>
        </div>

        <!-- Process -->
        <div class="bg-slate-800/50 rounded-2xl p-6 border border-slate-700 hover:border-purple-500 transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-purple-500/20">
            <h3 class="text-xl font-bold text-purple-400 mb-6 flex items-center">
                <svg class="w-6 h-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                </svg>
                Process
            </h3>
            <ul class="space-y-3 text-slate-300">
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-purple-600/10 rounded-lg mr-3 group-hover:bg-purple-600/20 transition-colors">
                        <i class="fas fa-sync-alt text-purple-600"></i>
                    </span>
                    <span>{{ __('Agile Methodology') }}</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-blue-500/10 rounded-lg mr-3 group-hover:bg-blue-500/20 transition-colors">
                        <i class="fas fa-project-diagram text-blue-500"></i>
                    </span>
                    <span>{{ __('Project Management') }}</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-green-500/10 rounded-lg mr-3 group-hover:bg-green-500/20 transition-colors">
                        <i class="fas fa-code-branch text-green-500"></i>
                    </span>
                    <span>{{ __('Code Reviews') }}</span>
                </li>
                <li class="flex items-center group">
                    <span class="w-8 h-8 flex items-center justify-center bg-yellow-500/10 rounded-lg mr-3 group-hover:bg-yellow-500/20 transition-colors">
                        <i class="fas fa-comments text-yellow-500"></i>
                    </span>
                    <span>{{ __('Retrospectives') }}</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Section Savoir-faire -->
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-12 text-center">{!! __('What I know') !!}</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @php
            $knowhows = [
                ['title' => __('Solutions Complètes'), 'desc' => __('desc_Solutions Complètes')],
                ['title' => __('Agile Methodology'), 'desc' => __('desc_Méthodologie Agile')],
                ['title' => __('Intégration Blockchain'), 'desc' => __('desc_Intégration Blockchain')],
                ['title' => __('Maîtrise des Bases de Données'), 'desc' => __('desc_Maîtrise des Bases de Données')],
                ['title' => __('DevOps & CI/CD'), 'desc' => __('desc_DevOps & CI/CD')],
                ['title' => __('Logique Backend'), 'desc' => __('desc_Logique Backend')],
                ['title' => __('UX Frontend'), 'desc' => __('desc_UX Frontend')],
                ['title' => __('Architecture du Code'), 'desc' => __('desc_Architecture du Code')],
                ['title' => __('Boost IA'), 'desc' => __('desc_Boost IA')],
            ];
        @endphp

        @foreach($knowhows as $item)
        <div class="bg-slate-900 border border-slate-800 p-6 rounded-xl transition-all duration-300 transform hover:-translate-y-1 hover:scale-105 hover:shadow-2xl hover:shadow-cyan-500/20 hover:border-cyan-500">
            <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">{{ $item['title'] }}</h3>
            <p class="text-slate-400 text-sm group-hover:text-slate-300 transition-colors">{{ $item['desc'] }}</p>
        </div>
        @endforeach
    </div>

</section>
