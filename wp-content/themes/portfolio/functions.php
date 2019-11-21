<?php

// Adicionar tamanhos de imagens
function my_custom_sizes() {
add_image_size( ‘grande’, 1400, 460, true );
add_image_size( ‘pequena’, 360, 260, true );
}
add_action( 'after_setup_theme', 'my_custom_sizes' );

//
//
//function clientePostsByCategory($idCategoria)
//{
//
////clwp_postsbycategory();
////argumentos do loop de posts da categoria. Esse Filtro Exclusivo para Reel Caso não tenha Deixar o Menu principal para trazer sempre o ultimo vídeo
//    $args = array(
//        'numberposts' => 1,
//        'category' => array($idCategoria),
//        'orderby' => 'date',
//        'order' => 'DESC',
//        'include' => array(),
//        'exclude' => array(),
//        'meta_key' => '',
//        'meta_value' => '',
//        'post_type' => 'post',
//        'suppress_filters' => true,
//
//        //'offset' => 1
//    );
//    $my_posts = get_posts($args);
//    $post_categories = get_terms($args);
//}
//
//// Adiciona um Shortcode
//add_shortcode('categoryposts', 'clientePostsByCategory');
//// Ativa shortcodes em Widgets de Texto
//add_filter('widget_text', 'do_shortcode');

