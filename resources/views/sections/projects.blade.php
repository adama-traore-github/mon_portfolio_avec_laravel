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

    <!-- Projects Grid Container (2 rows of 3 columns max per page = 6 cards) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 min-h-[520px]" id="projects-grid">
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

    <!-- Pagination Controls (2 Lignes = 6 Projets par Page avec Marqueurs 1, 2, 3, 4) -->
    <div class="mt-14 flex items-center justify-center gap-2" id="projects-pagination">
        <!-- Generé dynamiquement par JavaScript -->
    </div>
</section>

<!-- Filter & Client-Side Pagination Script (6 projets par page) -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('#project-filters .filter-btn');
        const projectCards = Array.from(document.querySelectorAll('#projects-grid .project-card'));
        const paginationContainer = document.getElementById('projects-pagination');
        const projectsSection = document.getElementById('projects');

        const ITEMS_PER_PAGE = 6; // 2 lignes de 3 colonnes sur PC
        let currentFilter = 'all';
        let currentPage = 1;

        function getFilteredCards() {
            if (currentFilter === 'all') {
                return projectCards;
            }
            return projectCards.filter(card => card.getAttribute('data-category') === currentFilter);
        }

        function render() {
            const filteredCards = getFilteredCards();
            const totalPages = Math.ceil(filteredCards.length / ITEMS_PER_PAGE) || 1;

            if (currentPage > totalPages) {
                currentPage = 1;
            }

            const startIndex = (currentPage - 1) * ITEMS_PER_PAGE;
            const endIndex = startIndex + ITEMS_PER_PAGE;

            // Masquer ou afficher chaque carte selon le filtre et la page active
            projectCards.forEach(card => {
                card.style.display = 'none';
            });

            filteredCards.forEach((card, index) => {
                if (index >= startIndex && index < endIndex) {
                    card.style.display = 'flex';
                }
            });

            // Générer la pagination
            renderPagination(totalPages);
        }

        function renderPagination(totalPages) {
            paginationContainer.innerHTML = '';

            if (totalPages <= 1) {
                return; // Cacher la pagination s'il n'y a qu'une seule page
            }

            // Bouton Précédent
            const prevBtn = document.createElement('button');
            prevBtn.className = `w-10 h-10 rounded-xl font-bold flex items-center justify-center transition-all border ${
                currentPage === 1 
                ? 'bg-slate-900/50 border-slate-800 text-slate-600 cursor-not-allowed' 
                : 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border-slate-700'
            }`;
            prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left text-xs"></i>';
            prevBtn.disabled = currentPage === 1;
            prevBtn.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    render();
                    scrollToSection();
                }
            });
            paginationContainer.appendChild(prevBtn);

            // Boutons de numéros de page (1, 2, 3, 4...)
            for (let i = 1; i <= totalPages; i++) {
                const pageBtn = document.createElement('button');
                const isActive = i === currentPage;

                pageBtn.className = `w-10 h-10 rounded-xl font-bold text-sm transition-all border ${
                    isActive 
                    ? 'bg-cyan-500 text-slate-950 border-cyan-500 shadow-md shadow-cyan-500/20' 
                    : 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border-slate-700'
                }`;
                pageBtn.textContent = i;
                pageBtn.addEventListener('click', () => {
                    currentPage = i;
                    render();
                    scrollToSection();
                });
                paginationContainer.appendChild(pageBtn);
            }

            // Bouton Suivant
            const nextBtn = document.createElement('button');
            nextBtn.className = `w-10 h-10 rounded-xl font-bold flex items-center justify-center transition-all border ${
                currentPage === totalPages 
                ? 'bg-slate-900/50 border-slate-800 text-slate-600 cursor-not-allowed' 
                : 'bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white border-slate-700'
            }`;
            nextBtn.innerHTML = '<i class="fa-solid fa-chevron-right text-xs"></i>';
            nextBtn.disabled = currentPage === totalPages;
            nextBtn.addEventListener('click', () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    render();
                    scrollToSection();
                }
            });
            paginationContainer.appendChild(nextBtn);
        }

        function scrollToSection() {
            projectsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }

        // Événements sur les onglets de filtre
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentFilter = btn.getAttribute('data-filter');
                currentPage = 1; // Réinitialiser à la page 1

                // Mettre à jour les styles des onglets
                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                    b.classList.add('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');
                });

                btn.classList.add('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                btn.classList.remove('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');

                render();
            });
        });

        // Premier rendu au chargement
        render();
    });
</script>
