<?php get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        the_post_thumbnail(); ?>

        <h1><?php the_title(); ?></h1>
        <?php the_content(); 
     }
} else { ?>
    <h1>Pas d'article</h1>
<?php } ?>

<?php get_footer(); ?>