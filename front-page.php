<?php get_header();
while(have_posts()){
        the_post();?>
       <h1> <?php the_title();?></h1>
<?php   the_content();?>
<a href="<?= get_post_type_archive_link('post')?>"> voir des actualiter</a>



<?php }
 get_footer(); ?>