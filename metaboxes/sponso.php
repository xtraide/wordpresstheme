<?php
class SonsponsoMetaBox
{
    const META_KEY = 'montheme_sponso'; // cree une constancte 
    public static function register()
    {
        add_action('add_meta_boxes', [self::class, 'add'], 10, 2); //vien se grefer sur la fonction pour add des meta box et on va faire notre fonction add
        add_action('save_post', [self::class, 'save']); // "" avec save 
    }
    public static function add($postType, WP_Post $post)
    {
        if ($postType === 'post' && current_user_can('publish_posts', $post))
            add_meta_box(self::META_KEY, 'Sponsoring', [self::class, 'render'], 'post', 'side'); // ajoute un meta box dans les menue wordpress  avec le nom 'Sponsoring', on appele la fonction render , elle safiche que sur les post ,possitioner sur le side
    }
    public static function render($post)
    {
        $value = get_post_meta($post->ID, self::META_KEY, true); // pour avoir la meta du post ( id , la clee , si on veut return la variable)
        ?>
        <input type="hidden" value="0" name="montheme_sponso">
        <input type="checkbox" value="1" name="montheme_sponso" <?php checked($value, '1') ?>>
        <label for="monthemesponso">Ces article est sponsorisé ? </label>
        <?php
    }
    public static function save(int $post)
    {
        if (array_key_exists(self::META_KEY, $_POST) && current_user_can('publish_posts', $post)) { //regarde si self::META_KEY existe dans  $_POST et si l'utilisateur peut publier un post
            if ($_POST[self::META_KEY] === '0') // si il y a un chanp dans le $_POST[self::META_KEY] qui est egale a 0
                delete_post_meta($post, self::META_KEY); // on suprime la meta de la bdd 
        } else {
            update_post_meta($post, self::META_KEY, 1); //on ajoute a la bdd 
        }
    }
}
