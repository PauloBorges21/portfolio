<?php

// Adicionar tamanhos de imagens
function my_custom_sizes() {
add_image_size( ‘grande’, 1400, 460, true );
add_image_size( ‘pequena’, 360, 260, true );
}
add_action( 'after_setup_theme', 'my_custom_sizes' );

//
//function custom_post_type_materiais() {
//    register_post_type('materiais', array(
//        'label' => 'Materiais',
//        'description' => 'Materiais',
//        'public' => true,
//        'show_ui' => true,
//        'show_in_menu' => true,
//        'capability_type' => 'post',
//        'map_meta_cap' => true,
//        'hierarchical' => false,
//        'rewrite' => array('slug' => 'materiais', 'with_front' => true),
//        'query_var' => true,
//        'supports' => array('title', 'editor', 'page-attributes','post-formats'),
//
//        'labels' => array (
//            'name' => 'Materiais',
//            'singular_name' => 'material',
//            'menu_name' => 'Materiais',
//            'add_new' => 'Adicionar Novo',
//            'add_new_item' => 'Adicionar Novo Material',
//            'edit' => 'Editar',
//            'edit_item' => 'Editar Material',
//            'new_item' => 'Novo Material',
//            'view' => 'Ver Material',
//            'view_item' => 'Ver Material',
//            'search_items' => 'Procurar Material',
//            'not_found' => 'Nenhum Material Encontrado',
//            'not_found_in_trash' => 'Nenhum Material Encontrado no Lixo',
//        )
//    ));
//}
//add_action('init', 'custom_post_type_materiais');
