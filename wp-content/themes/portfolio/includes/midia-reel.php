<?php
$args = array(
'numberposts' => 1,
//'posts_per_page' => 1,
'category' => array(40),
'orderby' => 'date',
'order' => 'DESC',
'include' => array(),
'exclude' => array(),
'tag' => 'reel',
'meta_key' => '',
'meta_value' => '',
'post_type' => 'post',
'suppress_filters' => true,

//'offset' => 1
);

?>



<?php    $my_query = new Wp_Query($args);

$my_posts = get_posts($args);
$post_categories = get_terms($args);
foreach ($my_posts as $post) : setup_postdata($post);

    $tags = wp_get_post_tags($post->ID);
    $my_query = new Wp_Query($args);
    $my_posts = get_posts($args);
    $post_categories = get_terms($args);
    $getLogo = get_sub_field('logo',102);
    ?>

    <input hidden="" value="<?php echo $post->ID?>">

    <div class="item-sllider-interna w-slide">

        <div class="content-slide" data-ix="hover-item-slide">
            <img src="<?php echo the_field('thumb_card_video','')?>" alt="" class="img-slide-conteudos">
            <div class="logo-cliente-slide">
                <img src="<?php echo $getLogo;?>" alt="" class="logo-slide">
            </div>
        </div>
    </div>


<?php
endforeach;?>
