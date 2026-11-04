<?php
// Ajout des styles dans l'éditeur de blocs
add_theme_support( 'editor-styles' );
add_editor_style( 'style.css' );

// Ajout des styles du thème
wp_enqueue_style('theme-style', get_stylesheet_uri(), array(), null);

// Ajout des supports de base pour le thème
function theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
}
add_action( 'after_setup_theme', 'theme_setup' );


// Enregistrer les blocs personnalisés du thème.
function enregistrer_blocs() {
    $dossier = get_theme_file_path(
        '/blocs-personnalises/build'
    );

    $manifeste = $dossier . '/blocks-manifest.php';

    if ( ! file_exists( $manifeste ) ) {
        return;
    }

    wp_register_block_types_from_metadata_collection(
        $dossier,
        $manifeste
    );
}

add_action(
    'init',
    'enregistrer_blocs'
);


//Afficher la note ACF sous forme d'étoiles.
function afficher_etoiles(
    $contenu,
    $post_id,
    $champ,
    $valeur
) {
    // Modifie que le champ de note.
    if ( ( $champ['name'] ?? '' ) !== 'avis_note' ) {
        return $contenu;
    }

    // Conserver l'affichage initial si la valeur est invalide.
    if (
        ! is_numeric( $valeur )
        || $valeur < 1
        || $valeur > 5
        || (float) $valeur !== (float) (int) $valeur
    ) {
        return $contenu;
    }

    $note = (int) $valeur;

    // Construire une ligne de cinq étoiles.
    $etoiles = str_repeat( '★', $note );
    $etoiles .= str_repeat( '☆', 5 - $note );

    return sprintf(
        '<span role="img" aria-label="%s"><span aria-hidden="true">%s</span></span>',
        esc_attr( sprintf( 'Note : %d sur 5', $note ) ),
        esc_html( $etoiles )
    );
}

add_filter(
    'meta_field_block_get_acf_field',
    'afficher_etoiles',
    10,
    4
);

// Charger le comportement des cartes d'avis sur le site
function avis_cartes() {
    $chemin = get_theme_file_path( '/assets/js/avis-cartes.js' );

    if ( ! file_exists( $chemin ) ) {
        return;
    }

    wp_enqueue_script(
        'avis-cartes',
        get_theme_file_uri( '/assets/js/avis-cartes.js' ),
        array(),
        (string) filemtime( $chemin ),
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'avis_cartes'
);

// Commentaire remise TP2