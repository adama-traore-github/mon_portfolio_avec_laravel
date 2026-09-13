<section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    
    <!-- Section Header -->
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('Technical Arsenal') !!}
        </h2>
        <p class="text-slate-400 max-w-2xl mx-auto text-base">
            {{ __('The tools and technologies I use daily to build robust solutions.') }}
        </p>
    </div>

    <!-- 1. CORE STACK SHOWCASE (Stack Phare) -->
    <div class="mb-20">
        <h3 class="text-xs font-extrabold uppercase tracking-widest text-cyan-400 mb-6 text-center flex items-center justify-center gap-2">
            <span class="w-8 h-px bg-cyan-500/50"></span>
            <i class="fa-solid fa-star text-amber-400"></i> Core Tech Stack (Technologies Principales)
            <span class="w-8 h-px bg-cyan-500/50"></span>
        </h3>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
            @foreach($coreStack as $tech)
                @php
                    $colors = [
                        'red' => 'border-red-500/30 shadow-red-500/10 text-red-400 bg-red-500/10',
                        'cyan' => 'border-cyan-500/30 shadow-cyan-500/10 text-cyan-400 bg-cyan-500/10',
                        'green' => 'border-green-500/30 shadow-green-500/10 text-green-400 bg-green-500/10',
                        'emerald' => 'border-emerald-500/30 shadow-emerald-500/10 text-emerald-400 bg-emerald-500/10',
                        'blue' => 'border-blue-500/30 shadow-blue-500/10 text-blue-400 bg-blue-500/10',
                    ];
                    $badgeTheme = $colors[$tech['color']] ?? $colors['cyan'];
                @endphp
                <div class="group bg-slate-900/90 rounded-2xl p-4 border border-slate-800 hover:border-cyan-500/60 transition-all duration-300 transform hover:-translate-y-1.5 hover:shadow-xl text-center flex flex-col items-center justify-between">
                    <div class="w-12 h-12 rounded-xl flex items-center justify-center text-2xl mb-3 {{ $badgeTheme }} group-hover:scale-110 transition-transform">
                        @if($tech['icon'] === 'fa-flutter')
                            <svg width="24" height="24" viewBox="0 0 256 314" class="fill-current"><path d="M157.666 0L0 160.013l48.272 48.27 48.27-48.27L78.54 83.03l29.002-29.002 50.124 50.124 50.124-50.124L157.666 0z"/><path d="M157.666 0L78.54 79.126l29.002 29.002 50.124-50.124 50.124 50.124 29.002-29.002L157.666 0z"/><path d="M96.542 160.013l-48.27 48.27L96.54 256.4l29.002-48.117 32.124-48.27-53.124 0z"/></svg>
                        @elseif($tech['icon_type'] === 'brand')
                            <i class="fa-brands {{ $tech['icon'] }}"></i>
                        @else
                            <i class="fa-solid {{ $tech['icon'] }}"></i>
                        @endif
                    </div>
                    <div>
                        <h4 class="text-sm font-bold text-white group-hover:text-cyan-400 transition-colors">{{ $tech['name'] }}</h4>
                        <span class="text-[11px] font-semibold text-slate-400 block mt-0.5">{{ $tech['level'] }}</span>
                    </div>
                    <span class="mt-2 text-[10px] uppercase tracking-wider font-semibold px-2 py-0.5 rounded-full bg-slate-800 text-slate-400 border border-slate-700/50">
                        {{ $tech['experience'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- 2. SKILL CATEGORIES GRID -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-24">
        @foreach($skillCategories as $cat)
            @php
                $catColors = [
                    'blue' => 'text-blue-400 border-blue-500/30 hover:border-blue-500 hover:shadow-blue-500/20',
                    'green' => 'text-green-400 border-green-500/30 hover:border-green-500 hover:shadow-green-500/20',
                    'purple' => 'text-purple-400 border-purple-500/30 hover:border-purple-500 hover:shadow-purple-500/20',
                    'emerald' => 'text-emerald-400 border-emerald-500/30 hover:border-emerald-500 hover:shadow-emerald-500/20',
                    'cyan' => 'text-cyan-400 border-cyan-500/30 hover:border-cyan-500 hover:shadow-cyan-500/20',
                ];
                $themeClass = $catColors[$cat['color']] ?? $catColors['cyan'];
            @endphp
            <div class="bg-slate-800/60 rounded-2xl p-6 border border-slate-700/80 transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl flex flex-col justify-between backdrop-blur-md">
                <div>
                    <h3 class="text-xl font-bold text-white mb-6 flex items-center justify-between">
                        <span class="flex items-center gap-2">
                            <i class="fa-solid {{ $cat['icon'] }} {{ explode(' ', $themeClass)[0] }}"></i>
                            {{ __($cat['title']) }}
                        </span>
                        <span class="text-xs px-2.5 py-0.5 rounded-full bg-slate-900/90 text-slate-400 border border-slate-700/50">
                            {{ count($cat['items']) }}
                        </span>
                    </h3>

                    <ul class="space-y-3">
                        @foreach($cat['items'] as $item)
                            <li class="flex items-center justify-between group p-1.5 rounded-lg hover:bg-slate-900/50 transition-colors">
                                <div class="flex items-center">
                                    <span class="w-8 h-8 flex items-center justify-center bg-slate-900 rounded-lg mr-3 text-slate-300 group-hover:text-cyan-400 group-hover:scale-110 transition-all border border-slate-700/50">
                                        @if(str_contains($item['icon'], 'fa-'))
                                            @if(in_array($item['icon'], ['fa-js', 'fa-php', 'fa-html5', 'fa-python', 'fa-laravel', 'fa-node-js', 'fa-docker', 'fa-git-alt', 'fa-trello']))
                                                <i class="fa-brands {{ $item['icon'] }}"></i>
                                            @else
                                                <i class="fa-solid {{ $item['icon'] }}"></i>
                                            @endif
                                        @else
                                            <i class="fa-solid fa-code"></i>
                                        @endif
                                    </span>
                                    <span class="text-sm font-medium text-slate-200 group-hover:text-white transition-colors">{{ $item['name'] }}</span>
                                </div>
                                <span class="text-xs font-semibold px-2 py-0.5 rounded bg-slate-900/80 text-slate-400 border border-slate-800">
                                    {{ $item['level'] }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endforeach
    </div>

    <!-- 3. SAVOIR-FAIRE & EXPERTISE GRID -->
    <div class="pt-8">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 text-center">{!! __('What I know') !!}</h2>
        <p class="text-slate-400 text-center mb-12 max-w-2xl mx-auto text-sm">
            Mon expertise métier va au-delà des lignes de code : conception globale, sécurité, passage à l'échelle et intégrations complexes.
        </p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($knowhows as $item)
                @php
                    $glowColors = [
                        'cyan' => 'hover:border-cyan-500/80 hover:shadow-cyan-500/20 text-cyan-400',
                        'green' => 'hover:border-green-500/80 hover:shadow-green-500/20 text-green-400',
                        'purple' => 'hover:border-purple-500/80 hover:shadow-purple-500/20 text-purple-400',
                        'yellow' => 'hover:border-yellow-500/80 hover:shadow-yellow-500/20 text-yellow-400',
                        'emerald' => 'hover:border-emerald-500/80 hover:shadow-emerald-500/20 text-emerald-400',
                        'blue' => 'hover:border-blue-500/80 hover:shadow-blue-500/20 text-blue-400',
                    ];
                    $glowTheme = $glowColors[$item['color']] ?? $glowColors['cyan'];
                @endphp
                <div class="group bg-slate-900/90 border border-slate-800 p-6 rounded-2xl transition-all duration-300 transform hover:-translate-y-1 hover:shadow-2xl {{ $glowTheme }}">
                    <div class="w-12 h-12 rounded-xl bg-slate-800 flex items-center justify-center text-xl mb-4 {{ explode(' ', $glowTheme)[2] }} group-hover:scale-110 transition-transform">
                        <i class="fa-solid {{ $item['icon'] }}"></i>
                    </div>
                    <h3 class="text-lg font-bold text-white mb-2 group-hover:text-cyan-400 transition-colors">{{ $item['title'] }}</h3>
                    <p class="text-slate-400 text-sm leading-relaxed group-hover:text-slate-300 transition-colors">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>

</section>
