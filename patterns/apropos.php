<?php
/**
 * Title: apropos
 * Slug: /apropos
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"entete"} /-->

<!-- wp:image {"width":"1920px","height":"673px","scale":"cover","sizeSlug":"large","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<figure class="wp-block-image size-large is-resized" style="margin-top:0;margin-bottom:0"><img src="https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/96/9c/8f/969c8f97-1a31-2cd6-2e7c-23fa560b1c6a/AppIcon-0-0-1x_U007emarketing-0-11-0-0-85-220.png/1200x630wa.png" alt="<?php esc_attr_e('image de l\'équipe Paysagement Albert', '');?>" style="object-fit:cover;width:1920px;height:673px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-orange-06"}}},"typography":{"textAlign":"center"}},"textColor":"custom-orange-06","fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-center has-custom-orange-06-color has-text-color has-link-color has-large-font-size"><?php esc_html_e('Une histoire de famille', '');?></h1>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-03"}}}},"textColor":"custom-vert-03","fontFamily":"mulish"} -->
<h2 class="wp-block-heading has-custom-vert-03-color has-text-color has-link-color has-mulish-font-family"><?php esc_html_e('Paysagement Albert, ça fait 12 ans qu\'on existe', '');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-vert-03"}}}},"textColor":"custom-vert-03","fontFamily":"mulish"} -->
<p class="has-custom-vert-03-color has-text-color has-link-color has-mulish-font-family"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element, 3. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'J\'ai commencé ça tout seul avec une tondeuse et une remorque et aujourd\'hui on a 2 employés l\'été et un camion de déneigement l\'hiver. On est une %1$sentreprise familiale%2$s, mon fils vient parfois m\'aider les fins de semaine même s’il n’est pas officiellement employé.%3$sOn connait bien la région de Saint-Hyacinthe et les alentours parce qu\'on y habite depuis toujours et on est fier du travail qu\'on fait. Chaque cour qu\'on touche, on la traite comme si c\'était la nôtre.', '' ), '<strong>', '</strong>', '<br>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"sizeSlug":"large"} -->
<figure class="wp-block-image size-large"><img src="https://is1-ssl.mzstatic.com/image/thumb/Purple221/v4/96/9c/8f/969c8f97-1a31-2cd6-2e7c-23fa560b1c6a/AppIcon-0-0-1x_U007emarketing-0-11-0-0-85-220.png/1200x630wa.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:template-part {"slug":"pied-de-page"} /-->