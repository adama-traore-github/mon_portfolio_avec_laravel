<section id="contact" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 min-h-screen flex flex-col justify-center scroll-mt-20">
    <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">
            {!! __('Lets Talk') !!}
        </h2>
        <p class="text-slate-400 max-w-2xl mx-auto text-base">Une idée de projet ? Une opportunité d'ingénierie ? N'hésitez pas à me contacter.</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
        
        <!-- Left Side: Contact Direct Details -->
        <div class="lg:col-span-5 space-y-6">
            <div class="bg-slate-800/80 backdrop-blur-md rounded-3xl p-8 border border-slate-700/80 shadow-xl space-y-6">
                <h3 class="text-2xl font-bold text-white">Discutons de votre projet</h3>
                <p class="text-slate-300 text-sm leading-relaxed">
                    Je suis toujours ouvert à de nouvelles opportunités de collaboration, de conception logicielle ou de développement d'applications.
                </p>

                <div class="space-y-4 pt-2">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-cyan-500/10 text-cyan-400 flex items-center justify-center text-xl border border-cyan-500/20">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Email Direct</span>
                            <a href="mailto:traoreadama.dev@gmail.com" class="text-sm font-bold text-white hover:text-cyan-400 transition-colors">
                                traoreadama.dev@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-green-500/10 text-green-400 flex items-center justify-center text-xl border border-green-500/20">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Statut Actuel</span>
                            <span class="text-sm font-bold text-white">Disponible pour projets & opportunités</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-2xl bg-purple-500/10 text-purple-400 flex items-center justify-center text-xl border border-purple-500/20">
                            <i class="fa-solid fa-globe"></i>
                        </div>
                        <div>
                            <span class="text-xs text-slate-400 block font-medium">Localisation</span>
                            <span class="text-sm font-bold text-white">Burkina Faso (Disponible en Remote)</span>
                        </div>
                    </div>
                </div>

                <!-- Social Links -->
                <div class="pt-4 border-t border-slate-700/60 flex items-center gap-3">
                    <a href="https://github.com/adama-traore-github" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-900 flex items-center justify-center text-slate-300 hover:text-white border border-slate-700 hover:border-cyan-500 transition-all">
                        <i class="fa-brands fa-github text-base"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/adama-traore-dev/" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-xl bg-slate-900 flex items-center justify-center text-slate-300 hover:text-white border border-slate-700 hover:border-cyan-500 transition-all">
                        <i class="fa-brands fa-linkedin-in text-base"></i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Side: Contact Form Card -->
        <div class="lg:col-span-7 bg-slate-800/80 backdrop-blur-md rounded-3xl p-8 md:p-10 border border-slate-700/80 shadow-xl">
            <div id="form-message" class="mb-4 text-center text-green-500 font-medium hidden">{{ __('Message sent!') }}</div>

            <form id="contact-form" class="space-y-5" onsubmit="return submitForm(event)">
                <input type="hidden" name="_subject" value="Nouveau message depuis votre portfolio">
                <input type="hidden" name="_template" value="table">
                <input type="hidden" name="_next" value="{{ url('/#contact') }}" id="form-submit-success">
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_autoresponse" value="Merci pour votre message. Je vous répondrai dès que possible !">
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div>
                        <label for="name" class="block text-slate-300 mb-2 text-sm font-medium">{{ __('Name') }}</label>
                        <input type="text" id="name" name="name" required class="w-full bg-slate-900/90 border border-slate-700/80 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors text-sm" placeholder="Moussa Ouédraogo">
                    </div>
                    <div>
                        <label for="email" class="block text-slate-300 mb-2 text-sm font-medium">{{ __('Email') }}</label>
                        <input type="email" id="email" name="email" required class="w-full bg-slate-900/90 border border-slate-700/80 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors text-sm" placeholder="ouedraogo@example.com">
                    </div>
                </div>

                <div>
                     <label for="subject" class="block text-slate-300 mb-2 text-sm font-medium">{{ __('Subject') }}</label>
                     <select id="subject" name="subject" required class="w-full bg-slate-900/90 border border-slate-700/80 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors text-sm">
                        <option value="Proposition de projet">{{ __('Project Proposal') }}</option>
                        <option value="Opportunité d'emploi">{{ __('Job Opportunity') }}</option>
                        <option value="Partenariat">{{ __('Partnership') }}</option>
                        <option value="Autre">{{ __('Other') }}</option>
                     </select>
                </div>

                <div>
                    <label for="message" class="block text-slate-300 mb-2 text-sm font-medium">{{ __('Message') }}</label>
                    <textarea id="message" name="message" rows="4" required class="w-full bg-slate-900/90 border border-slate-700/80 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-cyan-500 focus:ring-1 focus:ring-cyan-500 transition-colors text-sm" placeholder="Décrivez votre besoin..."></textarea>
                </div>

                <button type="submit" class="w-full bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-bold py-3.5 rounded-xl hover:shadow-lg hover:shadow-cyan-500/20 transform hover:-translate-y-0.5 transition-all text-sm inline-flex items-center justify-center gap-2 shadow-md">
                    <i class="fa-solid fa-paper-plane"></i>
                    <span>{{ __('Send Message') }}</span>
                </button>
            </form>
            
            <script>
                function submitForm(event) {
                    event.preventDefault();
                    const form = event.target;
                    const submitButton = form.querySelector('button[type="submit"]');
                    
                    submitButton.disabled = true;
                    submitButton.innerHTML = '<i class="fa-solid fa-spinner animate-spin"></i> {{ __("Sending...") }}';
                    
                    fetch("https://formsubmit.co/ajax/traoreadama.dev@gmail.com", {
                        method: "POST",
                        body: new FormData(form),
                        headers: {
                            'Accept': 'application/json'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('form-message').classList.remove('hidden');
                        form.reset();
                        submitButton.disabled = false;
                        submitButton.innerHTML = '<i class="fa-solid fa-paper-plane"></i> {{ __("Send Message") }}';
                    })
                    .catch(error => {
                        console.error('Erreur:', error);
                        alert('Une erreur s\'est produite. Veuillez réessayer.');
                        submitButton.disabled = false;
                        submitButton.innerHTML = '<i class="fa-solid fa-paper-plane"></i> {{ __("Send Message") }}';
                    });
                    
                    return false;
                }
            </script>
        </div>

    </div>
</section>
