<?php
//Template Name: Como Pensamos
get_header();

?>

<style>
    .box-modal.equipe {
        -ms-overflow-style: none;
    / / IE 10 + overflow: -moz-scrollbars-none;
    / / Firefox
    }

    .box-modal.equipe::-webkit-scrollbar {
        display: none;
    / / Safari and Chrome
    }

    .box-modal.clientes {
        -ms-overflow-style: none;
    / / IE 10 + overflow: -moz-scrollbars-none;
    / / Firefox
    }

    .box-modal.clientes::-webkit-scrollbar {
        display: none;
    / / Safari and Chrome
    }

    .box-modal.ranking {
        -ms-overflow-style: none;
    / / IE 10 + overflow: -moz-scrollbars-none;
    / / Firefox
    }

    .box-modal.ranking::-webkit-scrollbar {
        display: none;
    / / Safari and Chrome
    }

    .modal-conteudo-interna {
        -ms-overflow-style: none;
    / / IE 10 + overflow: -moz-scrollbars-none;
    / / Firefox
    }

    .modal-conteudo-interna::-webkit-scrollbar {
        display: none;
    / / Safari and Chrome
    }
</style>
</head>


<?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

<?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

<?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

<?php include(TEMPLATEPATH . '/inc/menu-pages.php'); ?>

  
  <div class="banner-clientes">
    <div class="container-banner-imprensa w-container">
      <h1>Como pensamos</h1>
    </div>
  </div>
  <div class="section-como-pensamos">
    <div class="container-clientes w-container">
      <a href="http://javascript:history.go(-1)" class="link-voltar">Voltar</a>
      <div class="container-mandala"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mandala_v2.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/mandala_v2-p-500.png 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/mandala_v2-p-800.png 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/mandala_v2.png 936w" sizes="100vw" alt="" class="mandala">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-mandala-r.png" data-w-id="0254c0b6-f4f1-98b6-8b1f-d759f44f348d" alt="" class="controle-mandala">
        <div class="row-zoom w-row">
          <div class="col-zoom w-col w-col-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zoom-in.jpg" alt="" class="btn-zoom-in" data-ix="open-modal-mandala"></div>
          <div class="col-zoom w-col w-col-6"></div>
        </div>
      </div>
    </div>
    <div class="modal-mandala">
      <div class="container-mandala modal">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/mandala-big-v2.png" srcset="<?php echo get_stylesheet_directory_uri(); ?>/images/mandala-big-v2-p-500.png 500w, <?php echo get_stylesheet_directory_uri(); ?>/images/mandala-big-v2-p-800.png 800w, <?php echo get_stylesheet_directory_uri(); ?>/images/mandala-big-v2-p-1080.png 1080w, <?php echo get_stylesheet_directory_uri(); ?>/images/mandala-big-v2-p-1600.png 1600w, <?php echo get_stylesheet_directory_uri(); ?>/images/mandala-big-v2.png 1800w" sizes="100vw" alt="" class="mandala big">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/arrow-mandala-r.png" alt="" class="controle-mandala">
        <div class="row-zoom w-row">
          <div class="col-zoom w-col w-col-6"></div>
          <div class="col-zoom w-col w-col-6"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zoom-out.jpg" alt="" class="btn-zoom-out" data-ix="close-modal-mandala">
          </div>
        </div>
      </div>
    </div>
  </div>

  
<div class="section-footer">
    <div class="container-footer w-container"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                class="img-footer">
        <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
    </div>
</div>

  <?php get_footer(); ?>