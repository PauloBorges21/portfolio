<?php

// Adicionar tamanhos de imagens
function my_custom_sizes() {
add_image_size( ‘grande’, 1400, 460, true );
add_image_size( ‘pequena’, 360, 260, true );
}
add_action( 'after_setup_theme', 'my_custom_sizes' );



function clwp_postsbycategory() {
// Defino o Nome da Categoria e a Quantidade de Posts a serem exibidos
    $the_query = new WP_Query(
        array(

            'numberposts' => 1,
            'category_name' => array('reel'),
            'orderby' => 'date',
            'order' => 'DESC',
            'include' => array(),
            'exclude' => array(),
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'suppress_filters' => true,
        )
    );
// O Loop
    if ( $the_query->have_posts() ) {

        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $cat_nome = get_the_category( $the_query->ID );
            //$post_categories = get_terms($the_query);
            $verificaCategoria = $cat_nome[1]->slug;

            //var_dump($verificaCategoria);
            if ( $verificaCategoria <> 'reel' ) {




              echo 'aqui';
                //  $string .= '<li>';
               // $string .= '<a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_post_thumbnail($post_id, array( 50, 50) ) . get_the_title() .'</a></li>';
            } else {
    echo' Se nenhuma imagem de destaque foi cadastrada, exibe apenas o título do post';
               // $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
            }
        }
    } else {
// Nada será exibido se nenhum Post Relacionado por Categoria foi encontrado
    }
    //$string .= '</ul>';
    //return $string;
    /* Restaura os dados originais do post */
    wp_reset_postdata();
}
// Adiciona um Shortcode
add_shortcode('categoryposts', 'clwp_postsbycategory');
// Ativa shortcodes em Widgets de Texto
add_filter('widget_text', 'do_shortcode');

