<?php get_header(); ?><h1>VOIR TOUT LES BIEN  </h1>
<?php 
if (have_posts()) {
  while (have_posts()) {
    the_post(); ?>
    <div class="row">
    <div class="col-sm-4">
        <?php get_template_part('parts/card','post');?>
    </div>
    </div>
    <?php the_posts_pagination(); ?>
  <?php }
} else { ?>
  <h1>Pas d'article</h1>
<?php } ?>

<?php get_footer(); ?>