<?php
//Template Name: Home
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
<body>

  <div class="w-layout-grid grid-home">

      <a id="w-node-46682964642c-ae858d38" data-w-id="d82193e6-f8cd-4a71-8926-46682964642c" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_equipe'); ?>" alt="" class="img-home" data-ix="abrir-modal-equipe">
          <div class="txt-link-home box-peq">Equipe</div>
      </a>

      <a id="w-node-b194e3f3f9b4-ae858d38" data-w-id="43faf20c-6f07-2e4e-fda2-b194e3f3f9b4" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_depoimentos'); ?>" alt="" class="img-home" data-ix="abrir-modal-depoimentos">
          <div class="txt-link-home">Depoimentos</div>
      </a>

      <a id="w-node-70f32b3eaea5-ae858d38" data-w-id="9bd6345c-39a1-cec9-cb1b-70f32b3eaea5" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_apresentacao'); ?>" alt="" class="img-home" data-ix="abrir-modal-apresentacao">
          <div class="txt-link-home">Apresentação</div>
      </a>

      <a id="w-node-dd0551e9809f-ae858d38" data-w-id="92021801-75e7-e58b-51ef-dd0551e9809f" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_como_pensamos'); ?>" alt="" class="img-home">
          <div class="txt-link-home">Como pensamos</div>
      </a>

      <a id="w-node-ba607e8ed88e-ae858d38" data-w-id="47b9f150-6934-ca36-2469-ba607e8ed88e" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_premio'); ?>" alt="" class="img-home" data-ix="abrir-modal-premios">
          <div class="txt-link-home">Prêmios</div>
      </a>

      <a id="w-node-807fae8d2414-ae858d38" data-w-id="fc3361f2-a999-ebbe-3386-807fae8d2414" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_expertise'); ?>" alt="" class="img-home" data-ix="abrir-modal-expertise">
          <div class="txt-link-home">Expertise</div>
      </a>

      <a id="w-node-27b06bfb4b91-ae858d38" data-w-id="eec2ee2b-3f16-8b36-cf9d-27b06bfb4b91" href="#" class="link-home w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_ranking'); ?>" alt="" class="img-home" data-ix="abrir-modal-ranking">
          <div class="txt-link-home">Ranking</div>
      </a>

      <a id="w-node-4d1d43d3175d-ae858d38" data-w-id="dad73026-bf28-5d69-f293-4d1d43d3175d" href="<?php echo get_site_url() ?>/menu-page" class="link-home logo w-inline-block w-clearfix" data-ix="hover-home">
          <img src="<?php the_field('imagem_card_logo'); ?>" alt="" class="img-home logo-rai">
      </a>
  </div>



  <!--  ############ Section Prêmios ################### -->
  <?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

<!--  ############ Section Ranking ################### -->
  <?php include(TEMPLATEPATH . '/inc/ranking.php'); ?>


  <?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

                            <!--############### Container Expertise  ###################-->

  <?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

                            <!--##################   Container Depoimento  #################################-->

  <div class="container-modal-depoimentos">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-depoimentos">
    <div class="box-videomodal w-embed w-iframe">
        <iframe class="youtube-video" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/<?php  the_field('link_do_video_depoimentos');  ?>?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
         </iframe>
    </div>
  </div>
  <!--##################   Container Apresentação  #################################-->
  <div class="container-modal-apresentacao">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-apresentacao">
    <div class="box-videomodal w-embed w-iframe">
        <iframe class="youtube-video" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/<?php  the_field('link_do_video_apresentacao');  ?>?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
        </iframe>
    </div>
  </div>
<?php get_footer() ;?>