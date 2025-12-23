@props(['title', 'tech', 'desc', 'link', 'mobileLink' => null, 'deploy' => null, 'color' => 'blue', 'showGithub' => true])

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
            @if($showGithub)
            <a href="{{ $link }}" target="_blank" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 font-medium transition-colors text-sm">
                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
                <span>GitHub</span>
            </a>
            @endif
            @if($deploy)
                <a href="{{ $deploy }}" target="_blank" class="inline-flex items-center text-cyan-400 hover:text-cyan-300 font-medium transition-colors text-sm">
                    <svg class="w-4 h-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                    </svg>
                    <span>Voir le site</span>
                </a>
            @endif
            
            @if($mobileLink)
            <a href="{{ $mobileLink }}" target="_blank" class="inline-flex items-center text-purple-400 hover:text-purple-300 font-medium transition-colors text-sm">
                <span class="mr-1">App Store</span>
                <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
            </a>
            @endif
        </div>
    </div>
</div>
