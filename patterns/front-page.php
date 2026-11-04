<?php
/**
 * Title: front-page
 * Slug: /front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"entete"} /-->

<!-- wp:group {"metadata":{"name":"Hero"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"custom-orange-02","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-orange-02-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"http://localhost:10004/wp-content/uploads/2026/11/image-resultat-hero-1024x678.png","alt":"image-resultat-hero","hasParallax":true,"isUserOverlayColor":true,"minHeight":500,"customGradient":"linear-gradient(117deg,rgb(241,234,217) 0%,rgb(241,234,217) 42%,rgba(255,255,255,0) 69%)","contentPosition":"bottom center","sizeSlug":"large","style":{"dimensions":{"aspectRatio":"auto"},"spacing":{"padding":{"top":"6rem","bottom":"6rem"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-parallax has-custom-content-position is-position-bottom-center" style="padding-top:6rem;padding-bottom:6rem;min-height:500px"><div role="img" aria-label="image-resultat-hero" class="wp-block-cover__image-background size-large has-parallax" style="background-position:50% 50%;background-image:url(http://localhost:10004/wp-content/uploads/2026/11/image-resultat-hero-1024x678.png)"></div><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(117deg,rgb(241,234,217) 0%,rgb(241,234,217) 42%,rgba(255,255,255,0) 69%)"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns are-vertically-aligned-bottom" style="margin-top:0;margin-bottom:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"spacing":{"padding":{"right":"0","left":"var:preset|spacing|70","top":"0"}},"typography":{"fontSize":"47px"}},"textColor":"custom-orange-06"} -->
<h1 class="wp-block-heading has-custom-orange-06-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-left:var(--wp--preset--spacing--70);font-size:47px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sVotre terrain entretenu comme si c’était le nôtre%2$s', '' ), '<strong>', '</strong>' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-02"}}},"spacing":{"padding":{"left":"0","right":"4.6rem"}},"typography":{"fontSize":"24px"}},"textColor":"custom-vert-02"} -->
<p class="has-custom-vert-02-color has-text-color has-link-color" style="padding-right:4.6rem;padding-left:0;font-size:24px"><?php esc_html_e('Tonte, plates-bandes, aménagement, taille de haies et arbustes, déneigement... ', '');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-02"}}},"spacing":{"padding":{"right":"4.88rem"}},"typography":{"fontSize":"24px"}},"textColor":"custom-vert-02"} -->
<p class="has-custom-vert-02-color has-text-color has-link-color" style="padding-right:4.88rem;font-size:24px"><?php esc_html_e('Paysagement Albert entretient les cours et les entrées de Saint-Hyacinthe et des environs depuis 12 ans.', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"3rem","left":"3rem"}},"typography":{"fontSize":"36px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:3rem;padding-left:3rem;font-size:36px"><!-- wp:image {"scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"70px"}}} -->
<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2026/11/icone-entreprise-famille.png" alt="<?php esc_attr_e('icone-entreprise-familiale', '');?>" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-04"}}},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"700"}},"textColor":"custom-vert-04","fontFamily":"kalam"} -->
<p class="has-custom-vert-04-color has-text-color has-link-color has-kalam-font-family" style="font-size:36px;font-style:normal;font-weight:700"><?php esc_html_e('Une entreprise familiale', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"3rem","left":"3rem"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-right:3rem;padding-left:3rem"><!-- wp:image {"scale":"cover","sizeSlug":"large","linkDestination":"none","style":{"layout":{"selfStretch":"fixedNoShrink","flexSize":"70px"}}} -->
<figure class="wp-block-image size-large"><img src="/wp-content/uploads/2026/11/icone-proximite-1.png" alt="<?php esc_attr_e('icone-proximite', '');?>" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-04"}}},"typography":{"fontSize":"36px","textAlign":"left","fontStyle":"normal","fontWeight":"700"}},"textColor":"custom-vert-04","fontFamily":"kalam"} -->
<p class="has-text-align-left has-custom-vert-04-color has-text-color has-link-color has-kalam-font-family" style="font-size:36px;font-style:normal;font-weight:700"><?php esc_html_e('Des experts d\'ici', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"","layout":{"type":"constrained"}} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:buttons {"layout":{"type":"flex","orientation":"vertical","justifyContent":"right"}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"custom-orange-05","className":"is-style-fill","style":{"spacing":{"padding":{"left":"32px","right":"32px","top":"16px","bottom":"16px"}},"typography":{"fontSize":"25px"}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-orange-05-background-color has-background has-custom-font-size wp-element-button" style="padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-size:25px"><?php esc_html_e('Demander une soumission', '');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"custom-orange-01","textColor":"custom-orange-06","className":"is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"spacing":{"padding":{"left":"32px","right":"32px","top":"15px","bottom":"15px"}},"typography":{"fontSize":"25px"}},"fontFamily":"kalam"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-orange-06-color has-custom-orange-01-background-color has-text-color has-background has-link-color has-kalam-font-family has-custom-font-size wp-element-button" style="padding-top:15px;padding-right:32px;padding-bottom:15px;padding-left:32px;font-size:25px"><?php /* Translators: 1. is the start of a 'img' HTML element */ 
echo sprintf( esc_html__( '%1$s Les conseils d\'Albert', '' ), '<img class="wp-image-192" style="width: 36px;" src="' . esc_url( get_stylesheet_directory_uri() ) . '/assets/images/Vector.png" alt>' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Services"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"3.75rem","right":"3.75rem"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:3.75rem;padding-bottom:var(--wp--preset--spacing--60);padding-left:3.75rem"><!-- wp:heading {"style":{"typography":{"fontSize":"47px"}}} -->
<h2 class="wp-block-heading" style="font-size:47px"><?php esc_html_e('Nos services', '');?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"typography":{"fontSize":"23px"}},"textColor":"custom-orange-06"} -->
<p class="has-custom-orange-06-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:23px"><?php esc_html_e('L\'entretien change selon la saison. Voici ce qu\'on offre l\'été et l\'hiver. ', '');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50","right":"0","left":"0"},"padding":{"right":"0rem","left":"0rem"}},"typography":{"fontSize":"23px"}},"textColor":"custom-orange-06"} -->
<p class="has-custom-orange-06-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:var(--wp--preset--spacing--50);margin-left:0;padding-right:0rem;padding-left:0rem;font-size:23px"><?php esc_html_e('Nos tarifs débutent à 45$/h. N\'hésitez pas à nous demander une soumission sur mesure pour une offre ajustée à votre projet.', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:tabs {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"6rem","right":"6rem"}},"css":"\u0026 .wp-block-tab-list {\n  width: fit-content;\n  max-width: 100%;\n  margin-inline: auto;\n  background: #526040;\n  border-radius: 999px;\n  padding: 3px;\n}\n\n\u0026 [role=\u0022tab\u0022] {\n  background: transparent;\n  color: #f1ead9;\n  border: 0;\n  border-radius: 999px;\n}\n\n\u0026 .wp-block-tab-list button[aria-selected=\u0022true\u0022]::before {\n  content: none;\n}\n\n\u0026 [role=\u0022tab\u0022][aria-selected=\u0022true\u0022] {\n  background: #f1ead9;\n  color: #526040;\n}\n\n\n/* tab */\n\u0026 [role=\u0022tab\u0022]:focus-visible {\n  outline: 2px solid #f1ead9;\n  outline-offset: -5px;\n}"}} -->
<div class="wp-block-tabs has-custom-css" style="padding-top:0;padding-right:6rem;padding-bottom:0;padding-left:6rem"><!-- wp:tab-list {"style":{"spacing":{"blockGap":"0px","padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"fontSize":"medium","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div role="tablist" class="wp-block-tab-list has-medium-font-size"><button style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--70)" type="button" role="tab">ÉTÉ</button><button style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--70)" type="button" role="tab">HIVER</button></div>
<!-- /wp:tab-list -->

<!-- wp:tab-panels -->
<div class="wp-block-tab-panels"><!-- wp:tab-panel {"label":"ÉTÉ"} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-04","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-04-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"full","style":{"border":{"radius":{"topLeft":"23px","topRight":"23px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image alignfull size-large has-custom-border"><img src="/wp-content/uploads/2026/11/image-tonte-de-pelouse.png" alt="<?php esc_attr_e('image-tonte-de-pelouse', '');?>" style="border-top-left-radius:23px;border-top-right-radius:23px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#24453a"}}},"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"text":"#24453a"}},"fontFamily":"mulish"} -->
<p class="has-text-align-center has-text-color has-link-color has-mulish-font-family" style="color:#24453a;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700"><?php esc_html_e('Tonte de pelouse', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-04","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-04-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"full","style":{"border":{"radius":{"topLeft":"23px","topRight":"23px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image alignfull size-large has-custom-border"><img src="/wp-content/uploads/2026/11/image-taille-haies-arbustes.png" alt="<?php esc_attr_e('image-taille-haies-arbustes', '');?>" style="border-top-left-radius:23px;border-top-right-radius:23px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#24453a"}}},"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"text":"#24453a"}},"fontFamily":"mulish"} -->
<p class="has-text-align-center has-text-color has-link-color has-mulish-font-family" style="color:#24453a;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700"><?php esc_html_e('Taille de haies et arbustes', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-04","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-04-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"full","style":{"border":{"radius":{"topLeft":"23px","topRight":"23px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image alignfull size-large has-custom-border"><img src="/wp-content/uploads/2026/11/image-amenagement-paysager.png" alt="<?php esc_attr_e('image-amenagement-paysager', '');?>" style="border-top-left-radius:23px;border-top-right-radius:23px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#24453a"}}},"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"color":{"text":"#24453a"}},"fontFamily":"mulish"} -->
<p class="has-text-align-center has-text-color has-link-color has-mulish-font-family" style="color:#24453a;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700"><?php esc_html_e('Aménagement paysager', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:tab-panel -->

<!-- wp:tab-panel {"label":"HIVER","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"23rem","right":"23rem"}}}} -->
<section role="tabpanel" tabindex="0" class="wp-block-tab-panel" style="padding-top:0;padding-right:23rem;padding-bottom:0;padding-left:23rem"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"css":"@media (max-width: 600px) {\n  \u0026 \u003e .wp-block-group {\n    width: 100%;\n    max-width: 100%;\n  }\n}"},"layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-css" style="border-style:none;border-width:0px;border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0","margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-04","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-04-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","linkDestination":"none","align":"full","style":{"border":{"width":"0px","style":"none","radius":{"topLeft":"23px","topRight":"23px","bottomLeft":"0px","bottomRight":"0px"}}}} -->
<figure class="wp-block-image alignfull size-large has-custom-border"><img src="http://localhost:10004/wp-content/uploads/2026/11/image-service-deneigement-1024x683.jpg" alt="<?php esc_attr_e('image-deneigement', '');?>"  style="border-style:none;border-width:0px;border-top-left-radius:23px;border-top-right-radius:23px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;aspect-ratio:1;object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-04"}}},"typography":{"textAlign":"center","fontStyle":"normal","fontWeight":"700"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"custom-vert-04","fontFamily":"mulish"} -->
<p class="has-text-align-center has-custom-vert-04-color has-text-color has-link-color has-mulish-font-family" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700"><?php esc_html_e('Déneigement résidentiel', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:tab-panel --></div>
<!-- /wp:tab-panels --></div>
<!-- /wp:tabs -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"right","fontSize":"19px","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"textColor":"custom-orange-06"} -->
<p class="has-text-align-right has-custom-orange-06-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--30);margin-right:0;margin-bottom:var(--wp--preset--spacing--30);margin-left:0;font-size:19px;text-decoration:underline"><?php esc_html_e('En savoir plus sur nos services', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"ReglesOr"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontSize":"47px"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:var(--wp--preset--spacing--60);font-size:47px"><?php esc_html_e('Nos règles d’or', '');?></h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-05","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-05-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-04"}}},"typography":{"textAlign":"center","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"textColor":"custom-orange-04"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-orange-04-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0;font-size:26px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sUn travail soigné%2$s', '' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-03"}}},"typography":{"textAlign":"center","fontSize":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}},"textColor":"custom-orange-03"} -->
<p class="has-text-align-center has-custom-orange-03-color has-text-color has-link-color" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20);font-size:22px"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Chaque taille, coupe et finition est réalisée avec%1$sprécision pour assurer un résultat harmonieux%2$set esthétique.', '' ), '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-bottom:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-05","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-05-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-04"}}},"typography":{"textAlign":"center","fontSize":"26px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"0","right":"0"}}},"textColor":"custom-orange-04"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-orange-04-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:0;padding-bottom:var(--wp--preset--spacing--30);padding-left:0;font-size:26px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$sRespect de votre propriété%3$s%4$s', '' ), '<strong>', '<strong>', '</strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-03"}}},"typography":{"textAlign":"center","fontSize":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"textColor":"custom-orange-03"} -->
<p class="has-text-align-center has-custom-orange-03-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20);font-size:22px"><?php esc_html_e('Nous prenons soin de votre terrain et de vos installations comme s’il s’agissait des nôtres, en laissant les lieux propres après chaque intervention.', '');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none","radius":{"topLeft":"25px","topRight":"25px","bottomLeft":"25px","bottomRight":"25px"}}},"backgroundColor":"custom-orange-05","fontSize":"medium","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-custom-orange-05-background-color has-background has-medium-font-size" style="border-style:none;border-width:0px;border-top-left-radius:25px;border-top-right-radius:25px;border-bottom-left-radius:25px;border-bottom-right-radius:25px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-04"}}},"typography":{"textAlign":"center","fontSize":"26px"},"spacing":{"padding":{"top":"0.87rem","bottom":"0rem","left":"0","right":"0"}}},"textColor":"custom-orange-04"} -->
<h2 class="wp-block-heading has-text-align-center has-custom-orange-04-color has-text-color has-link-color" style="padding-top:0.87rem;padding-right:0;padding-bottom:0rem;padding-left:0;font-size:26px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the start of a 'strong' HTML element, 3. is the end of a 'strong' HTML element, 4. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$sÀ l’écoute de nos clients%3$s%4$s', '' ), '<strong>', '<strong>', '</strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-03"}}},"typography":{"textAlign":"center","fontSize":"22px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"textColor":"custom-orange-03"} -->
<p class="has-text-align-center has-custom-orange-03-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40);font-size:22px"><?php /* Translators: 1. is a 'br' HTML element, 2. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Vos besoins et vos attentes sont au cœur de notre%1$stravail. Nous prenons le temps de bien comprendre%2$svotre projet afin de vous offrir un service adapté.', '' ), '<br>', '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Réalisations"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"background":{"backgroundImage":{"url":"http://localhost:10004/wp-content/uploads/2026/10/Group-41.png","id":95,"source":"file","title":"Group 41"},"backgroundSize":"cover"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontSize":"47px"},"spacing":{"margin":{"bottom":"2.25rem"}}}} -->
<h2 class="wp-block-heading" style="margin-bottom:2.25rem;font-size:47px"><?php esc_html_e('Réalisations : Avant / Après', '');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"typography":{"fontSize":"23px"},"spacing":{"padding":{"left":"20rem"}}},"textColor":"custom-orange-06"} -->
<p class="has-custom-orange-06-color has-text-color has-link-color" style="padding-left:20rem;font-size:23px"><?php esc_html_e('Voyez la différence avec l’équipe d’Albert', '');?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"largeur-slider"},"style":{"spacing":{"blockGap":"0","padding":{"top":"0px","bottom":"0px","left":"0px","right":"0px"},"margin":{"top":"19px","bottom":"19px"}}},"layout":{"type":"constrained","contentSize":"900px"}} -->
<div class="wp-block-group" style="margin-top:19px;margin-bottom:19px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"metadata":{"name":"bordure"},"className":"slider-realisations","style":{"border":{"radius":{"topLeft":"24px","topRight":"24px","bottomLeft":"24px","bottomRight":"24px"},"width":"9px"},"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"dimensions":{"minHeight":"0px"},"css":".slider-realisations .bafg-slider-info-wraper {\n    display: none;\n}"},"borderColor":"custom-orange-05","layout":{"type":"constrained"}} -->
<div class="wp-block-group slider-realisations has-border-color has-custom-orange-05-border-color has-custom-css" style="border-width:9px;border-top-left-radius:24px;border-top-right-radius:24px;border-bottom-left-radius:24px;border-bottom-right-radius:24px;min-height:0px;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:shortcode -->
[bafg id="115"]
<!-- /wp:shortcode --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:button {"textColor":"custom-orange-06","className":"is-style-fill","style":{"color":{"background":"#ffffff00"},"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"typography":{"textDecoration":"underline","fontSize":"19px"},"spacing":{"padding":{"left":"10rem","right":"10rem"}}}} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link has-custom-orange-06-color has-text-color has-background has-link-color has-custom-font-size wp-element-button" style="background-color:#ffffff00;padding-right:10rem;padding-left:10rem;font-size:19px;text-decoration:underline"><?php esc_html_e('On évalue vos besoins', '');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Témoignages"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"textAlign":"center","fontSize":"47px"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--50);font-size:47px"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( '%1$sTémoignages de nos clients%2$s', '' ), '<strong>', '</strong>' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"className":"carrousel-avis","layout":{"type":"constrained"}} -->
<div class="wp-block-group carrousel-avis"><!-- wp:query {"queryId":7,"query":{"perPage":3,"pages":0,"offset":0,"postType":"avis-client","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"excludeCurrent":null}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"carrousel-avis-piste","layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"carte-avis","style":{"css":".carte-avis {\n    border-radius: 36px;\n    background: #e8dbbb;\n    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);\n}","spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group carte-avis has-custom-css" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"avis-rangee","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group avis-rangee"><!-- wp:group {"className":"avis-contenu","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"},"border":{"width":"0px","style":"none"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group avis-contenu" style="border-style:none;border-width:0px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"avis_nom","fieldSettings":{"type":"text","key":"field_6aeabd562c802"},"metadata":{"name":"nom"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60","top":"var:preset|spacing|50"}}},"fontSize":"medium"} /-->

<!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"avis_ville","fieldSettings":{"type":"text","key":"field_6aeabb2509adb"},"metadata":{"name":"ville"},"style":{"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"fontSize":"small"} /-->

<!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"avis_note","fieldSettings":{"type":"number","key":"field_6aeabb4709adc"},"metadata":{"name":"note"},"style":{"typography":{"fontStyle":"normal","fontWeight":"1000"},"spacing":{"padding":{"right":"var:preset|spacing|60","left":"var:preset|spacing|60"}}},"textColor":"custom-vert-02","fontSize":"medium"} /-->

<!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"avis_commentaire","fieldSettings":{"type":"textarea","key":"field_6aeabb6b09add"},"metadata":{"name":"temoignage"},"className":"avis-commentaire","style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-04"}}},"spacing":{"padding":{"top":"var:preset|spacing|50"}}},"textColor":"custom-vert-04","fontFamily":"mulish"} /--></div>
<!-- /wp:group -->

<!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"avis_photo","fieldSettings":{"type":"image","key":"field_6aeabb7209ade"},"emptyMessage":"image-temoignage-resultat-du-travail-","className":"avis-visuel","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"css":"width: 80%;","border":{"radius":{"topLeft":"5rem","topRight":"5rem","bottomLeft":"5rem","bottomRight":"5rem"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-03"}}}},"fontSize":"small","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->

<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Ajouter un texte ou des blocs qui s’afficheront lorsqu’une requête ne renverra aucun résultat."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"pied-de-page","area":"uncategorized"} /-->