function initialiserAvis() {

    const commentaires = document.querySelectorAll(
        ".carte-avis .avis-commentaire"
    );

    commentaires.forEach((commentaire, index) => {

        if (commentaire.dataset.avisInitialise) {
            return;
        }

        // Marquer le commentaire comme déjà préparé.
        commentaire.dataset.avisInitialise = "true";
        commentaire.classList.add("est-replie"); // Classe CSS

        // - scrollHeight : la hauteur intérieure du contenu ;
        // - clientHeight : la hauteur intérieure actuellement visible.
        if (commentaire.scrollHeight <= commentaire.clientHeight + 1) {
            commentaire.classList.remove("est-replie"); // Afficher normalement le commentaire court.
            return;
        }

        if (!commentaire.id) {
            let identifiant = `avis-commentaire-${index + 1}`;

            // Vérifier que cet identifiant n'est pas déjà utilisé
            while (document.getElementById(identifiant)) {
                identifiant += "-suite";
            }

            commentaire.id = identifiant;
        }

        const bouton = document.createElement("button");
        bouton.type = "button";
        bouton.className = "avis-lire-suite";
        bouton.textContent = "Lire la suite";

        bouton.setAttribute("aria-expanded", "false"); // Indique que le commentaire est initialement replié.
        bouton.setAttribute("aria-controls", commentaire.id); // Associe le bouton à l'identifiant
        commentaire.after(bouton); // Met le bouton dans la page

        bouton.addEventListener("click", () => {

            const estOuvert = bouton.getAttribute("aria-expanded") === "true";

            commentaire.classList.toggle("est-replie", estOuvert);
            bouton.setAttribute("aria-expanded", String(!estOuvert)); // Enregistrer le nouvel état, inverse de l'ancien.

            // Definit le texte du bouton à l'état :
            bouton.textContent = estOuvert
                ? "Lire la suite"
                : "Réduire";
        });
    });
}

if (document.readyState === "complete") {
    initialiserAvis();
} else {
    window.addEventListener("load", initialiserAvis, { once: true });
}