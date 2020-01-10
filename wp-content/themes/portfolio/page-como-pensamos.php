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

  <div class="navbar-menu interna"><a href="index.html" class="w-inline-block"><img src="images/logo-rai-branco.png" alt=""></a>
    <ul class="ul-navmenu interna w-clearfix w-list-unstyled">
      <li class="li-navmenu"><a href="como-pensamos.html" class="link-navmenu w--current">Como pensamos</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-premios">Prêmios</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-expertise">Expertise</a></li>
      <li class="li-navmenu"><a href="imprensa.html" class="link-navmenu">Imprensa</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-equipe">equipe</a></li>
    </ul><a href="menu-page.html" class="w-inline-block"><img src="images/icon-nav.png" alt=""></a></div>
  <div class="banner-clientes">
    <div class="container-banner-imprensa w-container">
      <h1>Como pensamos</h1>
    </div>
  </div>
  <div class="section-como-pensamos">
    <div class="container-clientes w-container"><a href="http://javascript:history.go(-1)" class="link-voltar">Voltar</a>
      <div class="container-mandala"><img src="images/mandala_v2.png" srcset="images/mandala_v2-p-500.png 500w, images/mandala_v2-p-800.png 800w, images/mandala_v2.png 936w" sizes="100vw" alt="" class="mandala"><img src="images/arrow-mandala-r.png" data-w-id="0254c0b6-f4f1-98b6-8b1f-d759f44f348d" alt="" class="controle-mandala">
        <div class="row-zoom w-row">
          <div class="col-zoom w-col w-col-6"><img src="images/zoom-in.jpg" alt="" class="btn-zoom-in" data-ix="open-modal-mandala"></div>
          <div class="col-zoom w-col w-col-6"></div>
        </div>
      </div>
    </div>
    <div class="modal-mandala">
      <div class="container-mandala modal"><img src="images/mandala-big-v2.png" srcset="images/mandala-big-v2-p-500.png 500w, images/mandala-big-v2-p-800.png 800w, images/mandala-big-v2-p-1080.png 1080w, images/mandala-big-v2-p-1600.png 1600w, images/mandala-big-v2.png 1800w" sizes="100vw" alt="" class="mandala big"><img src="images/arrow-mandala-r.png" alt="" class="controle-mandala">
        <div class="row-zoom w-row">
          <div class="col-zoom w-col w-col-6"></div>
          <div class="col-zoom w-col w-col-6"><img src="images/zoom-out.jpg" alt="" class="btn-zoom-out" data-ix="close-modal-mandala"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="section-footer">
    <div class="container-footer w-container"><img src="images/logo-rai-branco.png" alt="" class="img-footer">
      <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/portfolio-rai-2019.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script>
$('.btn-fechar-modal').click(function(){
	$('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
});
</script>
</body>
</html>