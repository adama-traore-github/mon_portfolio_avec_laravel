<section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    
    <!-- Section Header -->
    <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('My Achievements') !!}
        </h2>
        <p class="text-slate-400 max-w-2xl mx-auto text-base">
            Découvrez une sélection de mes réalisations majeures : applications web en production, solutions mobiles multi-plateformes et architectures d'APIs REST.
        </p>
    </div>

    <style>
        .filter-btn.active i {
            color: #020617 !important;
        }
    </style>

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
    </div>

    <!-- Projects Grid / Carousel Container -->
    <div class="relative overflow-hidden" id="projects-container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 transition-all duration-500 ease-out" id="projects-grid">
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
    </div>

    <!-- Controls Container (Pagination PC / Carrousel Mobile) -->
    <div class="mt-10 flex items-center justify-center gap-3" id="projects-controls">
        <!-- Généré dynamiquement par JavaScript -->
    </div>
</section>

<!-- Filter & Responsive Grid Pagination Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('#project-filters .filter-btn');
        const projectCards = Array.from(document.querySelectorAll('#projects-grid .project-card'));
        const controlsContainer = document.getElementById('projects-controls');

        const ITEMS_PER_PAGE = 6;
        let currentFilter = 'all';
        let currentPage = 1;

        function getFilteredCards() {
            if (currentFilter === 'all') {
                return projectCards;
            }
            return projectCards.filter(card => {
                const categories = (card.getAttribute('data-category') || '').split(' ');
                return categories.includes(currentFilter);
            });
        }

        function render() {
            const filteredCards = getFilteredCards();
            const totalPages = Math.ceil(filteredCards.length / ITEMS_PER_PAGE) || 1;

            if (currentPage > totalPages) {
                currentPage = totalPages;
            }
            if (currentPage < 1) {
                currentPage = 1;
            }

            // Masquer toutes les cartes
            projectCards.forEach(card => {
                card.style.display = 'none';
            });

            // Déterminer la tranche de la page courante (6 projets par page)
            const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;
            const pageCards = filteredCards.slice(startIndex, endIndex);

            // Afficher uniquement les cartes de la page active
            pageCards.forEach(card => {
                card.style.display = 'flex';
            });

            // Afficher les contrôles de pagination
            renderPaginationControls(totalPages);
        }

        function renderPaginationControls(totalPages) {
            controlsContainer.innerHTML = '';
            if (totalPages <= 1) return;

            // Bouton Précédent
            const prevBtn = document.createElement('button');
            const isFirst = currentPage === 1;
            prevBtn.disabled = isFirst;
            prevBtn.className = `px-4 py-2 rounded-xl border transition-all font-semibold text-sm inline-flex items-center gap-2 ${
                isFirst 
                    ? 'bg-slate-900/50 border-slate-800 text-slate-600 cursor-not-allowed' 
                    : 'bg-slate-800 border-slate-700 text-slate-300 hover:text-white hover:bg-slate-700 shadow-md'
            }`;
            prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left text-xs"></i> <span>Précédent</span>';
            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    render();
                    scrollToProjects();
                }
            });
            controlsContainer.appendChild(prevBtn);

            // Boutons de numéros de pages (1, 2, ...)
            const pagesWrapper = document.createElement('div');
            pagesWrapper.className = 'flex items-center gap-2 px-1';

            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('button');
                const isActive = i === currentPage;
                pageBtn.className = `w-10 h-10 rounded-xl font-bold text-sm transition-all duration-300 ${
                    isActive 
                        ? 'bg-cyan-500 text-slate-950 shadow-lg shadow-cyan-500/30 border border-cyan-400' 
                        : 'bg-slate-800 text-slate-300 hover:bg-slate-700 hover:text-white border border-slate-700'
                }`;
                pageBtn.textContent = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    render();
                    scrollToProjects();
                });
                pagesWrapper.appendChild(pageBtn);
            }
            controlsContainer.appendChild(pagesWrapper);

            // Bouton Suivant
            const nextBtn = document.createElement('button');
            const isLast = currentPage === totalPages;
            nextBtn.disabled = isLast;
            nextBtn.className = `px-4 py-2 rounded-xl border transition-all font-semibold text-sm inline-flex items-center gap-2 ${
                isLast 
                    ? 'bg-slate-900/50 border-slate-800 text-slate-600 cursor-not-allowed' 
                    : 'bg-slate-800 border-slate-700 text-slate-300 hover:text-white hover:bg-slate-700 shadow-md'
            }`;
            nextBtn.innerHTML = '<span>Suivant</span> <i class="fa-solid fa-chevron-right text-xs"></i>';
            nextBtn.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    render();
                    scrollToProjects();
                }
            });
            controlsContainer.appendChild(nextBtn);
        }

        function scrollToProjects() {
            const projectsSection = document.getElementById('projects');
            if (projectsSection) {
                projectsSection.scrollIntoView({ behavior: 'smooth' });
            }
        }

        // Filtres par Categorie
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentFilter = btn.getAttribute('data-filter');
                currentPage = 1;

                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                    b.classList.add('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');
                });

                btn.classList.add('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                btn.classList.remove('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');

                render();
            });
        });

        // Initialisation
        render();
    });
</script>
