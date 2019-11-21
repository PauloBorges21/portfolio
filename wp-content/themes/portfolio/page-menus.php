<?php
//Template Name: Page Menus
?>

<?php get_header() ?>

  <style>
.box-modal.equipe {
    -ms-overflow-style: none;  // IE 10+
    overflow: -moz-scrollbars-none;  // Firefox
}
.box-modal.equipe::-webkit-scrollbar {
    display: none; // Safari and Chrome
}
.box-modal.clientes {
    -ms-overflow-style: none;  // IE 10+
    overflow: -moz-scrollbars-none;  // Firefox
}
.box-modal.clientes::-webkit-scrollbar {
    display: none; // Safari and Chrome
}
.box-modal.ranking {
    -ms-overflow-style: none;  // IE 10+
    overflow: -moz-scrollbars-none;  // Firefox
}
.box-modal.ranking::-webkit-scrollbar {
    display: none; // Safari and Chrome
}
.modal-conteudo-interna {
    -ms-overflow-style: none;  // IE 10+
    overflow: -moz-scrollbars-none;  // Firefox
}
.modal-conteudo-interna::-webkit-scrollbar {
    display: none; // Safari and Chrome
}
</style>
</head>
<body class="body-menupage">
<?php include(TEMPLATEPATH . '/inc/menu-internas.php'); ?>

  <ul class="ul-menu w-clearfix w-list-unstyled">

<?php if(have_rows('menus_page_principal')): while(have_rows('menus_page_principal')) : the_row(); ?>

    <li class="li-menu">
        <a href="<?php echo get_site_url() ?>/<?php the_sub_field('url');?>" class="link-menu w-inline-block" data-ix="hover-menu">
            <img src="<?php the_sub_field('imagem_logo');?>" alt="">
            <img src="<?php the_sub_field('imagem_hover');?>" alt="" class="img-hover-menu">
        </a>
    </li>

<?php endwhile; else : endif; ?>

    <li class="li-menu" data-ix="abrir-modal-equipe">
        <a href="#" class="link-menu w-inline-block" data-ix="hover-menu">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-menu-equipe.png" alt="">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/hover-equipe.jpg" alt="" class="img-hover-menu">
        </a>
    </li>

  </ul>
  <?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

  <?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

    <!--############### Container Expertise  ###################-->

<?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

<?php get_footer();?>