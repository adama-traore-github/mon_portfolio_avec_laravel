@props([
    'title', 
    'tech', 
    'desc', 
    'link' => '#', 
    'category' => 'web',
    'categoryName' => 'Application',
    'statusBadge' => 'repo',
    'statusLabel' => 'Code Source',
    'icon' => 'fa-laptop-code',
    'mobileLink' => null, 
    'deploy' => null, 
    'color' => 'blue', 
    'showGithub' => true,
    'isFeatured' => false
])

@php
    $colorClasses = [
        'blue' => [
            'badge' => 'text-blue-400 bg-blue-500/20 border-blue-500/30',
            'gradient' => 'from-blue-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-blue-400',
        ],
        'green' => [
            'badge' => 'text-green-400 bg-green-500/20 border-green-500/30',
            'gradient' => 'from-green-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-green-400',
        ],
        'orange' => [
            'badge' => 'text-orange-400 bg-orange-500/20 border-orange-500/30',
            'gradient' => 'from-orange-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-orange-400',
        ],
        'yellow' => [
            'badge' => 'text-yellow-400 bg-yellow-500/20 border-yellow-500/30',
            'gradient' => 'from-yellow-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-yellow-400',
        ],
        'red' => [
            'badge' => 'text-red-400 bg-red-500/20 border-red-500/30',
            'gradient' => 'from-red-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-red-400',
        ],
        'cyan' => [
            'badge' => 'text-cyan-400 bg-cyan-500/20 border-cyan-500/30',
            'gradient' => 'from-cyan-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-cyan-400',
        ],
        'purple' => [
            'badge' => 'text-purple-400 bg-purple-500/20 border-purple-500/30',
            'gradient' => 'from-purple-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-purple-400',
        ],
        'emerald' => [
            'badge' => 'text-emerald-400 bg-emerald-500/20 border-emerald-500/30',
            'gradient' => 'from-emerald-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-emerald-400',
        ],
        'indigo' => [
            'badge' => 'text-indigo-400 bg-indigo-500/20 border-indigo-500/30',
            'gradient' => 'from-indigo-600/30 via-slate-800 to-slate-900',
            'icon' => 'text-indigo-400',
        ],
    ];
    $theme = $colorClasses[$color] ?? $colorClasses['cyan'];
@endphp

<div data-category="{{ $category }}" class="project-card group relative bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-cyan-500 transition-all duration-300 hover:shadow-2xl hover:shadow-cyan-500/20 flex flex-col transform hover:-translate-y-2 z-10">
    
    <!-- Top Header Banner -->
    <div class="h-44 w-full bg-gradient-to-br {{ $theme['gradient'] }} p-6 flex flex-col justify-between relative overflow-hidden">
        
        <!-- Status & Category Badges Top Row -->
        <div class="flex items-center justify-between z-10">
            <!-- Category Badge -->
            <span class="text-xs font-semibold uppercase tracking-wider px-3 py-1 rounded-full bg-slate-900/80 text-slate-300 border border-slate-700/50 backdrop-blur-sm">
                <i class="fa-solid {{ $icon }} mr-1.5 {{ $theme['icon'] }}"></i>{{ $categoryName }}
            </span>

            <!-- Status Indicator -->
            @if($statusBadge === 'live')
                <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1 rounded-full bg-green-500/20 text-green-400 border border-green-500/30 backdrop-blur-sm shadow-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                    </span>
                    {{ $statusLabel }}
                </span>
            @elseif($statusBadge === 'mobile')
                <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1 rounded-full bg-purple-500/20 text-purple-300 border border-purple-500/30 backdrop-blur-sm">
                    <i class="fa-solid fa-mobile-screen"></i> {{ $statusLabel }}
                </span>
            @else
                <span class="inline-flex items-center gap-1.5 text-xs font-medium px-3 py-1 rounded-full bg-cyan-500/10 text-cyan-400 border border-cyan-500/20 backdrop-blur-sm">
                    <i class="fa-brands fa-github"></i> {{ $statusLabel }}
                </span>
            @endif
        </div>

        <!-- Big Icon Center / Background Watermark -->
        <div class="z-10 flex items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-slate-900/90 border border-slate-700/60 flex items-center justify-center text-2xl {{ $theme['icon'] }} shadow-md group-hover:scale-110 transition-transform">
                <i class="fa-solid {{ $icon }}"></i>
            </div>
            <div>
                <h3 class="text-xl font-extrabold text-white group-hover:text-cyan-400 transition-colors line-clamp-1">{{ $title }}</h3>
                <span class="text-xs font-medium px-2.5 py-0.5 rounded-full border {{ $theme['badge'] }}">
                    {{ $tech }}
                </span>
            </div>
        </div>

        <!-- Decorative background icon -->
        <i class="fa-solid {{ $icon }} absolute -right-4 -bottom-6 text-8xl text-white/5 pointer-events-none group-hover:scale-125 transition-transform duration-500"></i>
    </div>
    
    <!-- Body Content -->
    <div class="p-6 flex-1 flex flex-col justify-between">
        <p class="text-slate-300 mb-6 text-sm leading-relaxed flex-1">
            {{ $desc }}
        </p>
        
        <!-- Action Buttons Footer -->
        <div class="pt-4 border-t border-slate-700/60 flex items-center justify-between gap-3 mt-auto">
            @if($deploy)
                <a href="{{ $deploy }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold rounded-lg transition-all text-xs inline-flex items-center gap-2 shadow-lg shadow-cyan-500/20 hover:-translate-y-0.5">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                    <span>Voir le site</span>
                </a>
            @endif

            @if($mobileLink)
                <a href="{{ $mobileLink }}" target="_blank" rel="noopener noreferrer" class="px-4 py-2 bg-purple-600 hover:bg-purple-500 text-white font-bold rounded-lg transition-all text-xs inline-flex items-center gap-2 shadow-lg shadow-purple-600/20 hover:-translate-y-0.5">
                    <i class="fa-brands fa-google-play"></i>
                    <span>Play Store</span>
                </a>
            @endif

            @if($showGithub && $link && $link !== '#')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer" class="px-3 py-2 bg-slate-900 hover:bg-slate-700 text-slate-300 hover:text-white border border-slate-700 rounded-lg transition-colors text-xs inline-flex items-center gap-1.5 ml-auto">
                    <i class="fa-brands fa-github text-sm"></i>
                    <span>Code</span>
                </a>
            @endif
        </div>
    </div>
</div>
