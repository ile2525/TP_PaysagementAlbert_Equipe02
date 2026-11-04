function initialiserAvis() {
    document.querySelectorAll(
        '.carte-temoignage .texte-temoignage'
    ).forEach((texte, index) => {
        if (texte.dataset.avisInitialise) return;
        texte.dataset.avisInitialise = 'oui';

        const bouton = document.createElement('button');
        bouton.type = 'button';
        bouton.className = 'bouton-avis';
        bouton.hidden = true;

        if (!texte.id) {
            let numero = index + 1;
            while (document.getElementById(`texte-avis-${numero}`)) {
                numero++;
            }
            texte.id = `texte-avis-${numero}`;
        }

        bouton.setAttribute('aria-controls', texte.id);
        bouton.setAttribute('aria-expanded', 'false');
        bouton.textContent = 'Lire la suite';
        texte.after(bouton);

        function actualiser() {
            if (!texte.getBoundingClientRect().width) return;

            const hauteurLigne = parseFloat(
                getComputedStyle(texte).lineHeight
            );
            const limite = hauteurLigne * 5;
            const depasse = texte.scrollHeight > limite + 2;

            texte.classList.toggle('avis-repliable', depasse);
            bouton.hidden = !depasse;

            if (!depasse) {
                texte.classList.remove('avis-ouvert');
                bouton.textContent = 'Lire la suite';
                bouton.setAttribute('aria-expanded', 'false');
            }
        }

        bouton.addEventListener('click', () => {
            const ouvert = texte.classList.toggle('avis-ouvert');
            bouton.textContent = ouvert ? 'Réduire' : 'Lire la suite';
            bouton.setAttribute('aria-expanded', String(ouvert));

            requestAnimationFrame(() => {
                let parent = texte.parentElement;
                while (parent) {
                    if (parent.swiper) {
                        parent.swiper.update();
                        if (parent.swiper.params.autoHeight) {
                            parent.swiper.updateAutoHeight(0);
                        }
                        break;
                    }
                    parent = parent.parentElement;
                }
            });
        });

        actualiser();

        const observateur = new ResizeObserver(actualiser);
        observateur.observe(texte);

        if (document.fonts) {
            document.fonts.ready.then(actualiser);
        }
    });
}

if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initialiserAvis);
} else {
    initialiserAvis();
}
