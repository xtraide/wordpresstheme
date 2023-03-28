<?php

/**
 * Template Name: Page avec baniere
 * Template Post Type: page,post
 */
get_header();
echo "Page avec baniere";
if (have_posts()) {
    while (have_posts()) {
        the_post();?>
        <p>ICI LA BANIERE </p>
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail(); 

        
    the_content();
    }
} else { ?>
    <h1>Pas d'article</h1>
<?php } ?>

<?php get_footer(); ?>