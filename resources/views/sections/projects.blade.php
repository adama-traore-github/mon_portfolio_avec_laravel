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

<!-- Filter & Responsive Carousel/Grid Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const filterBtns = document.querySelectorAll('#project-filters .filter-btn');
        const projectCards = Array.from(document.querySelectorAll('#projects-grid .project-card'));
        const container = document.getElementById('projects-grid');
        const controlsContainer = document.getElementById('projects-controls');

        let currentFilter = 'all';
        let currentIndex = 0;
        let autoPlayTimer = null;
        let isHovered = false;
        let touchStartX = 0;
        let touchEndX = 0;

        function isMobile() {
            return window.innerWidth < 768;
        }

        function getFilteredCards() {
            if (currentFilter === 'all') {
                return projectCards;
            }
            return projectCards.filter(card => card.getAttribute('data-category') === currentFilter);
        }

        function stopAutoPlay() {
            if (autoPlayTimer) {
                clearInterval(autoPlayTimer);
                autoPlayTimer = null;
            }
        }

        function startAutoPlay() {
            stopAutoPlay();
            if (isMobile() && !isHovered) {
                autoPlayTimer = setInterval(() => {
                    const filteredCards = getFilteredCards();
                    if (filteredCards.length > 1) {
                        currentIndex = (currentIndex + 1) % filteredCards.length;
                        render();
                    }
                }, 4000);
            }
        }

        function render() {
            const filteredCards = getFilteredCards();
            if (currentIndex >= filteredCards.length) {
                currentIndex = 0;
            }

            if (isMobile()) {
                // Mode Carrousel Mobile
                projectCards.forEach(card => {
                    card.style.display = 'none';
                });

                if (filteredCards.length > 0) {
                    const activeCard = filteredCards[currentIndex];
                    activeCard.style.display = 'flex';
                }

                renderMobileControls(filteredCards.length);
            } else {
                // Mode Grille Desktop
                projectCards.forEach(card => {
                    card.style.display = 'none';
                });
                filteredCards.forEach(card => {
                    card.style.display = 'flex';
                });

                controlsContainer.innerHTML = ''; // Pas besoin de pagination sur PC s'il y a <= 6 projets
            }
        }

        function renderMobileControls(total) {
            controlsContainer.innerHTML = '';
            if (total <= 1) return;

            // Bouton Précédent
            const prevBtn = document.createElement('button');
            prevBtn.className = 'w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 text-slate-300 hover:text-white flex items-center justify-center font-bold text-sm shadow-md';
            prevBtn.innerHTML = '<i class="fa-solid fa-chevron-left"></i>';
            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + total) % total;
                render();
                startAutoPlay();
            });
            controlsContainer.appendChild(prevBtn);

            // Puces (Dots)
            const dotsWrapper = document.createElement('div');
            dotsWrapper.className = 'flex items-center gap-1.5 px-2';

            for (let i = 0; i < total; i++) {
                const dot = document.createElement('button');
                const isActive = i === currentIndex;
                dot.className = `h-2.5 rounded-full transition-all duration-300 ${
                    isActive ? 'w-7 bg-cyan-400 shadow-md shadow-cyan-400/30' : 'w-2.5 bg-slate-700 hover:bg-slate-500'
                }`;
                dot.addEventListener('click', () => {
                    currentIndex = i;
                    render();
                    startAutoPlay();
                });
                dotsWrapper.appendChild(dot);
            }
            controlsContainer.appendChild(dotsWrapper);

            // Bouton Suivant
            const nextBtn = document.createElement('button');
            nextBtn.className = 'w-10 h-10 rounded-xl bg-slate-800 border border-slate-700 text-slate-300 hover:text-white flex items-center justify-center font-bold text-sm shadow-md';
            nextBtn.innerHTML = '<i class="fa-solid fa-chevron-right"></i>';
            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % total;
                render();
                startAutoPlay();
            });
            controlsContainer.appendChild(nextBtn);
        }

        // Événements de Survol pour mettre en Pause l'AutoPlay
        container.addEventListener('mouseenter', () => {
            isHovered = true;
            stopAutoPlay();
        });

        container.addEventListener('mouseleave', () => {
            isHovered = false;
            startAutoPlay();
        });

        // Gestion du Swipe Tactile (Glissement avec le doigt)
        container.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
            stopAutoPlay();
        }, { passive: true });

        container.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
            startAutoPlay();
        }, { passive: true });

        function handleSwipe() {
            const filteredCards = getFilteredCards();
            const total = filteredCards.length;
            if (total <= 1) return;

            const diff = touchEndX - touchStartX;
            if (Math.abs(diff) > 40) { // Seuil minimum de glissement
                if (diff < 0) {
                    // Swipe vers la gauche -> Prochain projet
                    currentIndex = (currentIndex + 1) % total;
                } else {
                    // Swipe vers la droite -> Projet précédent
                    currentIndex = (currentIndex - 1 + total) % total;
                }
                render();
            }
        }

        // Filtres par Categorie
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                currentFilter = btn.getAttribute('data-filter');
                currentIndex = 0;

                filterBtns.forEach(b => {
                    b.classList.remove('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                    b.classList.add('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');
                });

                btn.classList.add('active', 'bg-cyan-500', 'text-slate-950', 'shadow-cyan-500/20');
                btn.classList.remove('bg-slate-800', 'text-slate-300', 'hover:bg-slate-700', 'border', 'border-slate-700');

                render();
                startAutoPlay();
            });
        });

        // Gestion du Redimensionnement
        window.addEventListener('resize', () => {
            render();
            startAutoPlay();
        });

        // Initialisation
        render();
        startAutoPlay();
    });
</script>
