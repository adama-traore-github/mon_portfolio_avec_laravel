<section id="projects" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    <h2 class="text-4xl md:text-5xl font-bold text-white mb-12 text-center">
        {!! __('My Achievements') !!}
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Project: Portfolio (This site) -->
        <x-project-card 
            title="{{ __('Portfolio Personnel') }}" 
            tech="Laravel / TailwindCSS" 
            color="red"
            desc="{{ __('desc_portfolio') }}"
            link="https://github.com/adama-traore-github/mon_portfolio_avec_laravel"
        />
        <!-- Project: ShopEasy -->
        <x-project-card 
            title="{{ __('ShopEasy') }}" 
            tech="Flutter / Dart" 
            color="indigo"
            desc="{{ __('desc_shopeasy') }}"
            link="https://github.com/adama-traore-github/shopeasy"
        />
        <!-- Project: Coopérative Agricole -->
        <x-project-card 
            title="{{ __('SCOOPS FAB') }}" 
            tech="HTML / CSS / JavaScript" 
            color="emerald"
            desc="{{ __('desc_scoops') }}"
            link="#"
            deploy="https://scoopsfab.com/"
            :showGithub="false"
        />

        <!-- Project: Application de Gestion d'Événements (Java) -->
        <x-project-card 
            title="{{ __('App Gestion Événements') }}" 
            tech="Java" 
            color="orange"
            desc="{{ __('desc_event_app') }}"
            link="https://github.com/adama-traore-github/EventApp"
        />

        <!-- Project: Gestion d'Événements (Backend API) -->
        <x-project-card 
            title="{{ __('API Événements') }}" 
            tech="Node.js / Stripe" 
            color="green"
            desc="{{ __('desc_event_api') }}"
            link="https://github.com/adama-traore-github/_site_d_evenement_backend_nodes_js"
        />

        <!-- Project: Token Manager -->
        <x-project-card 
            title="{{ __('Token Manager') }}" 
            tech="Blockchain / JS" 
            color="yellow"
            desc="{{ __('desc_token_manager') }}"
            link="https://github.com/adama-traore-github/Token_Manager_online"
            deploy="https://web-part-of-the-token-project.vercel.app/"
        />

        <!-- Project: Gestion de Tâches (Frontend) -->
        <x-project-card 
            title="{{ __('Gestion Tâches (UI)') }}" 
            tech="HTML / CSS / JS" 
            color="blue"
            desc="{{ __('desc_task_ui') }}"
            link="https://github.com/adama-traore-github/frontend_du_projet_gestion_de_tache"
        />

         <!-- Project: Gestion de Tâches (Backend) -->
         <x-project-card 
            title="{{ __('API Gestion Tâches') }}" 
            tech="Node.js / Express" 
            color="green"
            desc="{{ __('desc_task_api') }}"
            link="https://github.com/adama-traore-github/backend_nodes_js_gestion_de_tache"
        />

        <!-- Project: Safrimat Immo -->
        <x-project-card 
            title="{{ __('Safrimat Immo') }}" 
            tech="Flutter / Supabase" 
            color="cyan"
            desc="{{ __('desc_safrimat_immo') }}"
            link="https://safrimo.com/"
            mobileLink="https://play.google.com/store/apps/details?id=com.safrimat.safrimat_immo&hl=fr_CH&pli=1"
        />

        <!-- Project: Gestion d'Événements (Rails) -->
        <x-project-card 
            title="{{ __('Event Manager Postgres') }}" 
            tech="Ruby on Rails" 
            color="red"
            desc="{{ __('desc_event_postgres') }}"
            link="https://github.com/adama-traore-github/event_freka_avec_postgresql"
        />

        <!-- Project: Gestion de Projet (Django) -->
        <x-project-card 
            title="{{ __('Project Planner') }}" 
            tech="Django / Python" 
            color="emerald"
            desc="{{ __('desc_project_planner') }}"
            link="https://github.com/adama-traore-github/application_de_gestion_de_projet"
        />

        <!-- Project: Vente aux Enchères -->
        <x-project-card 
            title="{{ __('Vente aux Enchères') }}" 
            tech="Ruby on Rails" 
            color="red"
            desc="{{ __('desc_auction') }}"
            link="https://github.com/adama-traore-github/Biding_war_par_Rahim_et_moi"
        />

        <!-- Project: Gestion de Tâches (Mobile) -->
        <x-project-card 
            title="{{ __('Task Manager Mobile') }}" 
            tech="Flutter" 
            color="cyan"
            desc="{{ __('desc_task_mobile') }}"
            link="https://github.com/adama-traore-github/apllication_de_gestion_de-tache_avec-fluter"
        />

    </div>
</section>
