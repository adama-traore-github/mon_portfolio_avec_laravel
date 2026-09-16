<section id="skills" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('Technical Arsenal') !!}
        </h2>
        <p class="text-slate-400 max-w-2xl mx-auto text-base">
            Une combinaison d'outils modernes pour concrétiser des projets robustes, du backend au mobile.
        </p>
    </div>
    <!-- 1. CORE TECH STACK (Top 6 Technologies) -->
    <div class="mb-14">
        <div class="flex items-center justify-center gap-2 mb-6">
            <span class="w-8 h-px bg-cyan-500/40"></span>
            <span class="text-xs font-bold uppercase tracking-widest text-cyan-400">Technologies au Quotidien</span>
            <span class="w-8 h-px bg-cyan-500/40"></span>
        </div>

        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3">
            @foreach($coreStack as $tech)
                @php
                    $colors = [
                        'red' => 'border-red-500/30 text-red-400 hover:border-red-500',
                        'cyan' => 'border-cyan-500/30 text-cyan-400 hover:border-cyan-500',
                        'green' => 'border-green-500/30 text-green-400 hover:border-green-500',
                        'emerald' => 'border-emerald-500/30 text-emerald-400 hover:border-emerald-500',
                        'blue' => 'border-blue-500/30 text-blue-400 hover:border-blue-500',
                    ];
                    $theme = $colors[$tech['color']] ?? $colors['cyan'];
                @endphp
                <div class="group bg-slate-800/80 rounded-xl p-3 border border-slate-700/80 hover:bg-slate-800 transition-all duration-300 transform hover:-translate-y-1 flex items-center gap-3 shadow-md">
                    <div class="w-10 h-10 rounded-lg bg-slate-900/90 flex items-center justify-center text-lg {{ explode(' ', $theme)[1] }} group-hover:scale-110 transition-transform border border-slate-700/50">
                        @if($tech['icon'] === 'fa-flutter')
                            <svg width="20" height="20" viewBox="0 0 256 314" class="fill-current"><path d="M157.666 0L0 160.013l48.272 48.27 48.27-48.27L78.54 83.03l29.002-29.002 50.124 50.124 50.124-50.124L157.666 0z"/><path d="M157.666 0L78.54 79.126l29.002 29.002 50.124-50.124 50.124 50.124 29.002-29.002L157.666 0z"/><path d="M96.542 160.013l-48.27 48.27L96.54 256.4l29.002-48.117 32.124-48.27-53.124 0z"/></svg>
                        @elseif($tech['icon_type'] === 'brand')
                            <i class="fa-brands {{ $tech['icon'] }}"></i>
                        @else
                            <i class="fa-solid {{ $tech['icon'] }}"></i>
                        @endif
                    </div>
                    <span class="text-sm font-bold text-white group-hover:text-cyan-400 transition-colors line-clamp-1">{{ $tech['name'] }}</span>
                </div>
            @endforeach
        </div>
    </div>

    <!-- 2. STREAMLINED CATEGORIES (4 Clean Cards with Pills) -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        @foreach($skillCategories as $cat)
            @php
                $catThemes = [
                    'green' => 'text-green-400 border-green-500/30',
                    'cyan' => 'text-cyan-400 border-cyan-500/30',
                    'emerald' => 'text-emerald-400 border-emerald-500/30',
                    'purple' => 'text-purple-400 border-purple-500/30',
                ];
                $theme = $catThemes[$cat['color']] ?? $catThemes['cyan'];
            @endphp
            <div class="bg-slate-800/60 rounded-2xl p-6 border border-slate-700/80 backdrop-blur-md hover:border-slate-600 transition-all">
                <h3 class="text-lg font-bold text-white mb-5 flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-slate-900/90 border border-slate-700/60 flex items-center justify-center text-sm {{ explode(' ', $theme)[0] }}">
                        <i class="fa-solid {{ $cat['icon'] }}"></i>
                    </div>
                    <span>{{ __($cat['title']) }}</span>
                </h3>

                <!-- Horizontal Pills List -->
                <div class="flex flex-wrap gap-2.5">
                    @foreach($cat['skills'] as $skill)
                        <div class="group inline-flex items-center gap-2 bg-slate-900/90 border border-slate-700/60 hover:border-cyan-500/70 px-3 py-1.5 rounded-xl text-xs font-semibold text-slate-300 hover:text-white transition-all transform hover:-translate-y-0.5 shadow-sm">
                            <span class="text-slate-400 group-hover:text-cyan-400 transition-colors">
                                @if(isset($skill['custom']) && $skill['custom'])
                                    <svg width="14" height="14" viewBox="0 0 256 314" class="fill-current"><path d="M157.666 0L0 160.013l48.272 48.27 48.27-48.27L78.54 83.03l29.002-29.002 50.124 50.124 50.124-50.124L157.666 0z"/><path d="M157.666 0L78.54 79.126l29.002 29.002 50.124-50.124 50.124 50.124 29.002-29.002L157.666 0z"/><path d="M96.542 160.013l-48.27 48.27L96.54 256.4l29.002-48.117 32.124-48.27-53.124 0z"/></svg>
                                @elseif($skill['brand'])
                                    <i class="fa-brands {{ $skill['icon'] }}"></i>
                                @else
                                    <i class="fa-solid {{ $skill['icon'] }}"></i>
                                @endif
                            </span>
                            <span>{{ $skill['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

</section>
