<?php get_header(); ?>
<?php wp_title();
wp_list_categories(['taxonomy' => 'sport', 'title_li'=> '']);
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>
    <?php get_template_part('parts/card','post');?>


    
  <?php }
   the_posts_pagination(); 

} else { ?>
  <h1>Pas d'article</h1>
<?php } ?>

<?php get_footer(); ?>