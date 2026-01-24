<section id="experience" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    <h2 class="text-4xl md:text-5xl font-bold text-white mb-16 text-center">
        {!! __('Professional Journey') !!}
    </h2>

    <div class="relative border-l-2 border-slate-700 ml-4 md:ml-0 space-y-16">
        
        <!-- Experience 1 -->
        <div class="relative pl-12 md:pl-0">
            <!-- Dot -->
            <div class="absolute -left-[9px] top-0 w-6 h-6 bg-slate-900 border-4 border-emerald-500 rounded-full z-10"></div>
            
            <div class="md:grid md:grid-cols-5 md:gap-8 items-start">
                <div class="md:col-span-1 md:text-right mb-2 md:mb-0">
                    <span class="text-emerald-400 font-bold block">8 mois</span>
                    <span class="text-slate-500 text-sm">{{ __('Safrimat Burkina') }}</span>
                </div>
                <div class="md:col-span-4 bg-slate-800 rounded-2xl p-8 border border-slate-700 shadow-lg relative">
                    <h3 class="text-2xl font-bold text-white mb-2">{{ __('full_stack_dev') }}</h3>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-2 py-1 bg-emerald-500/20 text-emerald-400 text-xs rounded">{{ __('full_time') }}</span>
                        <a href="https://www.linkedin.com/company/safrimat-burkina/" target="_blank" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                    <p class="text-slate-300 leading-relaxed">
                        {{ __('exp_desc_safrimat') }}
                    </p>
                </div>
            </div>
        </div>

        <!-- Experience 2 -->
        <div class="relative pl-12 md:pl-0">
            <div class="absolute -left-[9px] top-0 w-6 h-6 bg-slate-900 border-4 border-blue-500 rounded-full z-10"></div>
            
            <div class="md:grid md:grid-cols-5 md:gap-8 items-start">
                <div class="md:col-span-1 md:text-right mb-2 md:mb-0">
                    <span class="text-blue-400 font-bold block">1 an</span>
                    <span class="text-slate-500 text-sm">ETP4A</span>
                </div>
                <div class="md:col-span-4 bg-slate-800 rounded-2xl p-8 border border-slate-700 shadow-lg relative">
                    <h3 class="text-2xl font-bold text-white mb-2">{{ __('full_stack_dev') }}</h3>
                    <div class="flex items-center gap-2 mb-4">
                        <span class="px-2 py-1 bg-blue-500/20 text-blue-400 text-xs rounded">{{ __('part_time') }}</span>
                        <a href="https://www.linkedin.com/company/etp4africa/" target="_blank" class="text-slate-400 hover:text-white transition-colors">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                    <p class="text-slate-300 leading-relaxed">
                        {{ __('exp_desc_etp4a') }}
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
