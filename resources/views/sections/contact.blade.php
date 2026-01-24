<section id="contact" class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('Lets Talk') !!}
        </h2>
        <p class="text-slate-400 text-lg">Une idée ? Une question ? N'hésitez pas à m'écrire.</p>
    </div>

    <div class="bg-slate-800/50 backdrop-blur-md rounded-3xl p-8 md:p-12 border border-slate-700 shadow-xl">
        <div id="form-message" class="mt-4 text-center text-green-500 font-medium hidden">{{ __('Message sent!') }}</div>

        <form id="contact-form" class="space-y-6" onsubmit="return submitForm(event)">
            <input type="hidden" name="_subject" value="Nouveau message depuis votre portfolio">
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_next" value="{{ url('/#contact') }}" id="form-submit-success">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_autoresponse" value="Merci pour votre message. Je vous répondrai dès que possible !">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label for="name" class="block text-slate-300 mb-2 font-medium">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" required class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors" placeholder="John Doe">
                </div>
                <div>
                    <label for="email" class="block text-slate-300 mb-2 font-medium">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" required class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors" placeholder="john@example.com">
                </div>
            </div>

            <div>
                 <label for="subject" class="block text-slate-300 mb-2 font-medium">{{ __('Subject') }}</label>
                 <select id="subject" name="subject" required class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors">
                    <option value="Proposition de projet">{{ __('Project Proposal') }}</option>
                    <option value="Opportunité d'emploi">{{ __('Job Opportunity') }}</option>
                    <option value="Partenariat">{{ __('Partnership') }}</option>
                    <option value="Autre">{{ __('Other') }}</option>
                 </select>
            </div>

            <div>
                <label for="message" class="block text-slate-300 mb-2 font-medium">{{ __('Message') }}</label>
                <textarea id="message" name="message" rows="5" required class="w-full bg-slate-900/50 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors" placeholder="Décrivez votre besoin..."></textarea>
            </div>

            <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white font-bold py-4 rounded-lg hover:shadow-lg hover:shadow-cyan-500/30 transform hover:-translate-y-1 transition-all duration-300">
                {{ __('Send Message') }}
            </button>
        </form>
        
        <script>
            function submitForm(event) {
                event.preventDefault();
                const form = event.target;
                const submitButton = form.querySelector('button[type="submit"]');
                const originalButtonText = submitButton.innerHTML;
                
                // Afficher l'état de chargement
                submitButton.disabled = true;
                submitButton.innerHTML = '{{ __('Sending...') }}';
                
                // Récupérer l'email depuis la configuration Laravel
                const formSubmitEmail = '{{ config('services.formsubmit.email') }}';
                const formAction = `https://formsubmit.co/ajax/${formSubmitEmail}`;
                const formData = new FormData(form);
                
                // Envoyer le formulaire avec fetch
                fetch(formAction, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'Accept': 'application/json'
                    },
                    mode: 'no-cors' // Désactive CORS pour cette requête
                })
                .then(() => {
                    // Mise à jour du bouton en cas de succès
                    submitButton.textContent = '{{ __('Message sent!') }}';
                    submitButton.classList.remove('from-blue-600', 'to-cyan-600', 'hover:shadow-cyan-500/30');
                    submitButton.classList.add('from-green-500', 'to-emerald-500', 'cursor-not-allowed');
                    
                    // Réinitialiser le formulaire
                    form.reset();
                    
                   
                })
                .catch(error => {
                    console.error('Erreur:', error);
                    // Afficher une alerte d'erreur
                    alert('{{ __('Error occurred') }}');
                    
                    // Réactiver le bouton en cas d'erreur
                    submitButton.disabled = false;
                    submitButton.innerHTML = originalButtonText;
                });
                
                return false;
            }
        </script>

        <script>
            // Gestion de la navigation active
            document.addEventListener('DOMContentLoaded', function() {
                const sections = document.querySelectorAll('section[id]');
                const navLinks = document.querySelectorAll('nav a[href^="#"]');
                
                const observerOptions = {
                    root: null,
                    rootMargin: '0px',
                    threshold: 0.5
                };
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const id = entry.target.getAttribute('id');
                            navLinks.forEach(link => {
                                link.classList.remove('text-blue-400');
                                if (link.getAttribute('href') === `#${id}`) {
                                    link.classList.add('text-blue-400');
                                }
                            });
                        }
                    });
                }, observerOptions);
                
                sections.forEach(section => {
                    observer.observe(section);
                });
                
                // Gestion du clic sur les liens de navigation
                navLinks.forEach(link => {
                    link.addEventListener('click', function(e) {
                        navLinks.forEach(l => l.classList.remove('text-blue-400'));
                        this.classList.add('text-blue-400');
                    });
                });
            });
        </script>

        <div class="mt-12 w-full flex justify-center space-x-6">
            <a href="https://github.com/adama-traore-github" target="_blank" class="text-slate-400 hover:text-white transition-colors transform hover:scale-110">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" /></svg>
            </a>
            <a href="https://www.linkedin.com/in/adama-traore-9a6150315/" target="_blank" class="text-slate-400 hover:text-blue-500 transition-colors transform hover:scale-110">
                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </a>
            <a href="mailto:wwwnostra7@gmail.com" class="text-slate-400 hover:text-red-400 transition-colors transform hover:scale-110">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
            </a>
            <a href="https://wa.me/22602094932" target="_blank" class="text-slate-400 hover:text-green-500 transition-colors transform hover:scale-110">
                 <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/></svg>
             </a>
             <a href="https://youtube.com/@adamatraore-tg6bn?si=nOu6vnr8k_vyhPp1" target="_blank" class="text-slate-400 hover:text-red-600 transition-colors transform hover:scale-110">
                  <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
             </a>
         </div>
     </div>
 </section>
