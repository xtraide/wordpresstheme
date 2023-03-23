<?php get_header();?>
<?php wp_title();
     if (have_posts()){
       while(have_posts()){
        the_post();?>
        <div class="card" style="width: 18rem;">
        <?php the_post_thumbnail("medium",['class' => 'card-img-top',"alt"=> "image du poste",'style' =>"height: auto"]);?>
        <div class="card-body">
            <h5 class="card-title"><?php the_title();?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php the_category();?></h6>
            <p class="card-text"><?php the_excerpt();?></p>
            <a href="<?php the_permalink()?>" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        </div>
       <?php } 
      }else { ?>
        <h1>Pas d'article</h1>
        <?php } ?>
        
 <?php get_footer(); ?>