<section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('My Achievements') !!}
        </h2>
        <p class="text-slate-400 max-w-2xl mx-auto text-base">
            Découvrez l'ensemble de mes réalisations : applications web en production, projets mobiles, architectures d'API et expérimentations Web3.
        </p>
    </div>

    <!-- Filter Buttons Navigation Tabs -->
    <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12" id="project-filters">
        <button data-filter="all" class="filter-btn active px-5 py-2.5 rounded-full font-semibold text-sm transition-all shadow-md bg-cyan-500 text-slate-950 shadow-cyan-500/20">
            <i class="fa-solid fa-layer-group mr-1.5"></i> Tous <span class="ml-1 text-xs px-2 py-0.5 rounded-full bg-slate-900/40 text-slate-900 font-bold">{{ count($projects) }}</span>
        </button>

        <button data-filter="web" class="filter-btn px-5 py-2.5 rounded-full font-semibold text-sm transition-all bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border border-slate-700">
            <i class="fa-solid fa-globe mr-1.5 text-cyan-400"></i> Web & SaaS
        </button>

        <button data-filter="mobile" class="filter-btn px-5 py-2.5 rounded-full font-semibold text-sm transition-all bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border border-slate-700">
            <i class="fa-solid fa-mobile-screen-button mr-1.5 text-purple-400"></i> Mobile
        </button>

        <button data-filter="backend" class="filter-btn px-5 py-2.5 rounded-full font-semibold text-sm transition-all bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border border-slate-700">
            <i class="fa-solid fa-server mr-1.5 text-green-400"></i> APIs & Backend
        </button>

        <button data-filter="blockchain" class="filter-btn px-5 py-2.5 rounded-full font-semibold text-sm transition-all bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border border-slate-700">
            <i class="fa-solid fa-cubes mr-1.5 text-yellow-400"></i> Web3 & Blockchain
        </button>
    </div>

    <!-- Projects Grid Container -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
        @foreach($projects as $project)
            <x-project-card 
                :title="__($project['title'])" 
                :tech="$project['tech']" 
                :color="$project['color']"
                :category="$project['category']"
                :categoryName="$project['category_name']"
                :statusBadge="$project['status_badge']"
                :statusLabel="$project['status_label']"
                :icon="$project['icon']"
                :desc="__($project['desc_key'])"
                :link="$project['link']"
                :deploy="$project['deploy'] ?? null"
                :mobileLink="$project['mobile_link'] ?? null"
                :showGithub="$project['show_github'] ?? true"
                :isFeatured="$project['is_featured'] ?? false"
            />
        @endforeach
    </div>
</section>

<!-- Filter Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('#project-filters .filter-btn');
        const projectCards = document.querySelectorAll('#projects-grid .project-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const filter = btn.getAttribute('data-filter');

                // Update active state
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                    b.classList.add('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');
                });

                btn.classList.add('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                btn.classList.remove('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');

                // Filter cards
                projectCards.forEach(card => {
                    const cardCat = card.getAttribute('data-category');
                    if (filter === 'all' || cardCat === filter) {
                        card.style.display = 'flex';
                        card.classList.add('animate-fadeIn');
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    });
</script>
