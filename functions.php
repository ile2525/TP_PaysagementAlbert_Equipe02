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

// Charger le comportement des témoignages sur le site public.//
function paysagement_albert_charger_temoignages() {
    $fichier = '/assets/js/temoignages.js';
    $chemin = get_theme_file_path( $fichier );

    if ( ! file_exists( $chemin ) ) {
        return;
    }

    wp_enqueue_script(
        'paysagement-albert-temoignages',
        get_theme_file_uri( $fichier ),
        array(),
        (string) filemtime( $chemin ),
        true
    );
}

add_action(
    'wp_enqueue_scripts',
    'paysagement_albert_charger_temoignages'
);
