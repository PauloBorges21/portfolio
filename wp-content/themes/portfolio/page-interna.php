<?php
//Template Name: Page Interna
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
  <div class="navbar-menu"><a href="index.html" class="w-inline-block"><img src="images/logo-rai-branco.png" alt=""></a>
    <ul class="ul-navmenu w-clearfix w-list-unstyled">
      <li class="li-navmenu"><a href="#" class="link-navmenu">Como pensamos</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-premios">Prêmios</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-expertise">Expertise</a></li>
      <li class="li-navmenu"><a href="imprensa.html" class="link-navmenu">Imprensa</a></li>
    </ul><a href="http://javascript:history.go(-1)" class="w-inline-block"><img src="images/icon-nav.png" alt=""></a></div>
  <ul class="ul-menu w-clearfix w-list-unstyled">
    <li class="li-menu"><a href="rai-advertising.html" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-rai.png" alt=""><img src="images/hover-rai.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-18.png" alt=""><img src="images/hover-18.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-teola.png" alt=""><img src="images/hover-teola.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-awaken.png" alt=""><img src="images/hover-awaken.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-tov.png" alt=""><img src="images/hover-tov.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-yad.png" alt=""><img src="images/hover-yad.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-or.png" alt=""><img src="images/hover-or.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-ani.png" alt=""><img src="images/hover-ani.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-nes.png" alt=""><img src="images/hover-nes.jpg" alt="" class="img-hover-menu"></a></li>
    <li class="li-menu" data-ix="abrir-modal-equipe"><a href="#" class="link-menu w-inline-block" data-ix="hover-menu"><img src="images/logo-menu-equipe.png" alt=""><img src="images/hover-equipe.jpg" alt="" class="img-hover-menu"></a></li>
  </ul>
  <?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

  <?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>


  <div class="container-modal-expertise"><img src="images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-expertise">
    <div class="box-videomodal w-embed w-iframe"><iframe class="youtube-video" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/A4_DKWQtzE4?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
  </div>

<?php get_footer();?>