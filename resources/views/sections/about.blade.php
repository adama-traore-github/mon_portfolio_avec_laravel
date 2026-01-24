<section id="about" class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 flex flex-col md:flex-row gap-12 items-center min-h-screen justify-center scroll-mt-20">
    
    <div class="w-full md:w-1/3">
        <div class="relative">
            <div class="absolute inset-0 bg-blue-500 blur-2xl opacity-20 transform rotate-12 rounded-3xl"></div>
            <img src="{{ asset('images/adama.png') }}" alt="Adama Traoré" class="relative z-10 rounded-3xl shadow-2xl border-2 border-white/10 w-full object-cover">
        </div>
    </div>

    <div class="w-full md:w-2/3 space-y-8 text-left">
        <div>
            <h2 class="text-4xl font-bold text-white mb-2">Adama Traoré</h2>
            <h3 class="text-2xl text-cyan-400 font-medium">Développeur Full-Stack & Blockchain</h3>
        </div>

        <div class="bg-slate-800/50 p-8 rounded-2xl border-l-4 border-cyan-500 backdrop-blur-sm">
            <p class="text-slate-300 text-lg leading-relaxed text-justify">
                <strong class="text-white">Développeur Full-Stack</strong> avec une expertise avérée dans la conception et le déploiement d'applications web et mobiles performantes. Ma maîtrise de <strong class="text-white">Flutter</strong> me permet de développer des applications cross-plateforme fluides, tandis que mon expertise en développement web frontend (<strong class="text-white">HTML5, CSS3, JavaScript/TypeScript</strong>) et backend (<strong class="text-white">Node.js, Ruby on Rails, Django</strong>) assure des solutions complètes et évolutives.
                <br><br>
                J'ai approfondi mes compétences dans des domaines stratégiques comme l'<strong class="text-white">intelligence artificielle</strong>, l'automatisation des processus, et la <strong class="text-white">blockchain</strong> (développement de smart contracts et intégration de solutions décentralisées). Mon expérience avec les bases de données relationnelles (<strong class="text-white">PostgreSQL, MySQL</strong>) et les solutions cloud comme <strong class="text-white">Supabase</strong> me permet de concevoir des architectures robustes et sécurisées.
                <br><br>
                Guidé par une curiosité intellectuelle constante, je m'engage dans un processus d'apprentissage continu pour maîtriser les dernières avancées technologiques. Mon approche centrée sur l'utilisateur et mon souci du détail technique font de moi un partenaire idéal pour transformer des idées innovantes en solutions logicielles performantes et évolutives.
            </p>
        </div>

        <div class="flex gap-4">
            <a href="#contact" class="px-6 py-3 bg-white text-slate-900 font-bold rounded-lg hover:bg-slate-200 transition-colors">
                {{ __('Contact me') }}
            </a>
            <a href="https://github.com/adama-traore-github" target="_blank" class="px-6 py-3 border border-slate-600 text-white font-bold rounded-lg hover:border-white transition-colors flex items-center">
                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
                Github
            </a>
        </div>
    </div>
</section>
