    <?php get_header();

    if (have_posts()) { // si il y a un post
        while (have_posts()) { //tan quil y a un post
            the_post(); // pour avoir le post charger
            ?> <h1><?php the_title(); ?></h1><?php //choppe le titre du post
            if (get_post_meta(get_the_ID(), SonsponsoMetaBox::META_KEY, true) === '1') { // si le dans la bdd id du post a la clee SonsponsoMetaBox::META_KEY(=='montheme_sponso')  et quelle est a 1 
                ?><div class="aler alert-info"></div><?php
            }
            the_post_thumbnail();
            the_content();
        }
    } else { ?>
        <h1>Pas d'article</h1>
    <?php } ?>
    <?php get_footer(); ?>