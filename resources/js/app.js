import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // Gestion du menu mobile
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    if (btn && menu) {
        btn.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    }

    // Gestion du défilement en douceur pour les ancres
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            
            const targetElement = document.querySelector(targetId);
            if (targetElement) {
                // Fermer le menu mobile si ouvert
                if (menu && !menu.classList.contains('hidden')) {
                    menu.classList.add('hidden');
                }
                
                // Faire défiler jusqu'à l'élément cible
                window.scrollTo({
                    top: targetElement.offsetTop - 80, // Ajustement pour la hauteur de la navbar
                    behavior: 'smooth'
                });
                
                // Mettre à jour l'URL sans recharger la page
                if (history.pushState) {
                    history.pushState(null, null, targetId);
                } else {
                    window.location.hash = targetId;
                }
            }
        });
    });
});
