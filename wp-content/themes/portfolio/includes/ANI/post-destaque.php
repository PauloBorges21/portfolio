
<?php
//argumentos do loop de posts da categoria. Esse Filtro Exclusivo para Reel Caso não tenha Deixar o Menu principal para trazer sempre o ultimo vídeo
$args = array(
    'numberposts' => 1,
    'category' => array(28),
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true,

    //'offset' => 1
);
$my_posts = get_posts($args);
$post_categories = get_terms($args);
//inicio do loop de posts
//var_dump($post_categories);
if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);

$title = get_the_title($post->ID, '', '', false);
$content = get_the_content($post->ID, '', '', false);
$cat_nome = get_the_category($post->ID);
//$verificaCategoria = $cat_nome[1]->slug;
//var_dump($my_posts);

?>


<!--Imagem vindo de um custom field dos posts-->
<div class="main-banner-interna">
    <img src="<?php the_field('fundo_principal') ?>" alt="" class="img-main-banner">
    <div class="content-main-banner">

        <div class="box-content-main-banner">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/play-btn.png" alt=""
                 class="btn-play-mainbanner" data-ix="abrir-modal-video-reel-full">
            <h1 class="h1-internna"><?= $title; ?></h1>
            <p><?= $content; ?>  </p>
        </div>
    </div>
</div>

    <div class="modal-video-reel-full">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/btn-fechar.png" alt="" class="fechar-modal-videofull" data-ix="fechar-modal-vid-full-2">
        <div style="padding-top:56.17021276595745%" id="w-node-037b54e34f33-adef43ab"
             class="w-embed-youtubevideo videofull">
            <iframe src="https://www.youtube.com/embed/<?php echo the_field('url_youtube'); ?>?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0"
                    frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto"
                    allow="autoplay; encrypted-media" allowfullscreen="">

            </iframe>
        </div>
    </div>


<?php endforeach; endif; //fim do loop de posts ?>