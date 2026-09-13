<section id="experience" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('Professional Journey') !!}
        </h2>
        <p class="text-slate-400 max-w-2xl mx-auto text-base">
            Mon parcours en ingénierie logicielle et développement d'applications au sein d'entreprises innovantes.
        </p>
    </div>

    <div class="relative border-l-2 border-slate-700/80 ml-4 md:ml-8 space-y-12">
        @foreach($experiences as $exp)
            <div class="relative pl-8 md:pl-12 group">
                <!-- Timeline Dot Indicator -->
                <div class="absolute -left-[9px] top-1.5 w-5 h-5 bg-slate-900 border-4 border-{{ $exp['color'] }}-500 rounded-full z-10 group-hover:scale-125 transition-transform shadow-md shadow-{{ $exp['color'] }}-500/30"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 items-start">
                    
                    <!-- Left Sidebar Meta (Company & Dates) -->
                    <div class="lg:col-span-3">
                        <span class="text-{{ $exp['color'] }}-400 font-extrabold text-lg block">{{ $exp['duration'] }}</span>
                        <h4 class="text-white font-bold text-base mt-0.5">{{ $exp['company'] }}</h4>
                        @if(!empty($exp['period']))
                            <span class="text-slate-400 text-xs block font-medium mt-1">{{ $exp['period'] }}</span>
                        @endif
                    </div>

                    <!-- Right Card Description -->
                    <div class="lg:col-span-9 bg-slate-800/80 rounded-2xl p-6 md:p-8 border border-slate-700/80 shadow-xl backdrop-blur-md hover:border-slate-600 transition-all">
                        <div class="flex flex-wrap items-center justify-between gap-4 mb-4">
                            <h3 class="text-xl md:text-2xl font-bold text-white">{{ __($exp['role_key']) }}</h3>
                            
                            <div class="flex items-center gap-2">
                                <span class="px-3 py-1 bg-{{ $exp['color'] }}-500/20 text-{{ $exp['color'] }}-400 text-xs rounded-full border border-{{ $exp['color'] }}-500/30 font-semibold">
                                    {{ __($exp['type_key']) }}
                                </span>
                                @if(!empty($exp['location_type']))
                                    <span class="px-3 py-1 bg-slate-900/90 text-slate-300 text-xs rounded-full border border-slate-700/60 font-medium inline-flex items-center gap-1">
                                        <i class="fa-solid fa-house-laptop text-cyan-400"></i> {{ $exp['location_type'] }}
                                    </span>
                                @endif
                                @if(!empty($exp['linkedin']))
                                    <a href="{{ $exp['linkedin'] }}" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-white transition-colors p-1" aria-label="LinkedIn">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                                    </a>
                                @endif
                            </div>
                        </div>

                        <p class="text-slate-300 leading-relaxed text-sm md:text-base">
                            {{ __($exp['desc_key']) }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
