@props(['title', 'tech', 'desc', 'link', 'mobileLink' => null, 'color' => 'blue'])

@php
    $colors = [
        'blue' => 'text-blue-400 bg-blue-500/20 border-blue-500/30',
        'green' => 'text-green-400 bg-green-500/20 border-green-500/30',
        'orange' => 'text-orange-400 bg-orange-500/20 border-orange-500/30',
        'yellow' => 'text-yellow-400 bg-yellow-500/20 border-yellow-500/30',
        'red' => 'text-red-400 bg-red-500/20 border-red-500/30',
        'cyan' => 'text-cyan-400 bg-cyan-500/20 border-cyan-500/30',
        'purple' => 'text-purple-400 bg-purple-500/20 border-purple-500/30',
        'emerald' => 'text-emerald-400 bg-emerald-500/20 border-emerald-500/30',
    ];
    $theme = $colors[$color] ?? $colors['blue'];
@endphp

<div class="group relative bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-cyan-500 transition-all duration-300 hover:shadow-2xl hover:shadow-cyan-500/20 flex flex-col">
    <div class="h-40 bg-slate-700 w-full overflow-hidden flex items-center justify-center relative">
        <div class="absolute inset-0 bg-gradient-to-br from-slate-800 to-slate-900 opacity-50"></div>
        <div class="z-10 text-4xl font-bold text-slate-600 group-hover:text-cyan-500/50 transition-colors uppercase tracking-widest">
            {{ substr($title, 0, 2) }}
        </div>
    </div>
    
    <div class="p-6 flex-1 flex flex-col">
        <div class="flex justify-between items-start mb-4">
            <h3 class="text-xl font-bold text-white group-hover:text-cyan-400 transition-colors">{{ $title }}</h3>
            <span class="px-3 py-1 text-xs rounded-full border {{ $theme }}">
                {{ $tech }}
            </span>
        </div>
        
        <p class="text-slate-400 mb-6 line-clamp-3 text-sm flex-1">
            {{ $desc }}
        </p>
        
        <div class="flex gap-4 mt-auto">
            <a href="{{ $link }}" target="_blank" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 font-medium transition-colors text-sm">
                @if(str_contains($link, 'github')) <span class="mr-1">GitHub</span> @else <span class="mr-1">Voir</span> @endif
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" /></svg>
            </a>
            
            @if($mobileLink)
            <a href="{{ $mobileLink }}" target="_blank" class="inline-flex items-center text-purple-400 hover:text-purple-300 font-medium transition-colors text-sm">
                <span class="mr-1">App Store</span>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
            </a>
            @endif
        </div>
    </div>
</div>
