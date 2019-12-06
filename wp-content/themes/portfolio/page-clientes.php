<?php
//Template Name: Clientes

get_header();

?>
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
  <div class="container-modal-expertise">
      <img src="images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-expertise">
    <div class="box-videomodal w-embed w-iframe"><iframe class="youtube-video" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/A4_DKWQtzE4?enablejsapi=1&version=3&playerapiid=ytplayer" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe></div>
  </div>

  <?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

  <div class="container-modal-equipe"><img src="images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-equipe">
    <div class="box-modal equipe">
      <ul class="ul-equipe w-clearfix w-list-unstyled">
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-01.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Fabio Burg</h2>
            <h3 class="cargo-equipe">CEO</h3>
            <div class="desc-equipe">Fabio sabe como poucos entender o mercado e as suas demandas. Um dos seus maiores talentos é tirar marcas da zona de conforto com muita criatividade e eficiência</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-02.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">sérgio nakano</h2>
            <h3 class="cargo-equipe">VP</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-03.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">cleia barros</h2>
            <h3 class="cargo-equipe">VP de Atendimento e Integração</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-04.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Mauricio Cavalcanti</h2>
            <h3 class="cargo-equipe">VP de Criação</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-05.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Guilherme Fleury</h2>
            <h3 class="cargo-equipe">Diretor de Criação</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-06.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Renata Amarello</h2>
            <h3 class="cargo-equipe">Diretora de Mídia</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-07.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Roberta Mendes</h2>
            <h3 class="cargo-equipe">Diretora de Atendimento</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-08.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Guilherme Correia</h2>
            <h3 class="cargo-equipe">Diretor de Tecnologia</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-09.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Ricardo Domingues</h2>
            <h3 class="cargo-equipe">Diretor de Criação</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-10.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Roger Nunes</h2>
            <h3 class="cargo-equipe">Diretor de interação e Processos</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-11.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Alessandra Inson</h2>
            <h3 class="cargo-equipe">Diretora de Atendimento</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-12.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Carlos Passos</h2>
            <h3 class="cargo-equipe">Diretor de Criação</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-13.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Clóvis Gonzales</h2>
            <h3 class="cargo-equipe">Diretor de Produção</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-14.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Marcos Dyonisio</h2>
            <h3 class="cargo-equipe">Diretor de Criação</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-15.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Marcus Hoenen</h2>
            <h3 class="cargo-equipe">VP TOV</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-16.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Min Park</h2>
            <h3 class="cargo-equipe">Diretor de Criação</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-17.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Priscilla Marcossi</h2>
            <h3 class="cargo-equipe">Gerente de B.I.</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-18.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Sandro Costa</h2>
            <h3 class="cargo-equipe">Gerente de Logística</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-20.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Cássio Guiot</h2>
            <h3 class="cargo-equipe">Head de redação criativa</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-21.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Fernando Veiga</h2>
            <h3 class="cargo-equipe">Diretor de Produção Gráfica</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-22.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Kauana Neves</h2>
            <h3 class="cargo-equipe">Gerente de PR</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-19.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Camila Maschietto</h2>
            <h3 class="cargo-equipe">VP ANI</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
        <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-23.jpg" alt="" class="img-equipe">
          <div class="hover-equipe">
            <h2 class="nome-equipe">Adilson Poá</h2>
            <h3 class="cargo-equipe">Coordenador de finalização</h3>
            <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <div class="navbar-menu interna"><a href="index.html" class="w-inline-block"><img src="images/logo-rai-branco.png" alt=""></a>
    <ul class="ul-navmenu interna w-clearfix w-list-unstyled">
      <li class="li-navmenu"><a href="#" class="link-navmenu">Como pensamos</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-premios">Prêmios</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-expertise">Expertise</a></li>
      <li class="li-navmenu"><a href="imprensa.html" class="link-navmenu">Imprensa</a></li>
      <li class="li-navmenu"><a href="#" class="link-navmenu" data-ix="abrir-modal-equipe">equipe</a></li>
    </ul><a href="menu-page.html" class="w-inline-block"><img src="images/icon-nav.png" alt=""></a></div>
  <div class="banner-clientes">
    <div class="container-banner-imprensa w-container">
      <h1>Clientes</h1>
    </div>
  </div>
  <div class="section-imprensa">
    <div class="container-clientes w-container"><a href="http://javascript:history.go(-1)" class="link-voltar">Voltar</a>
      <ul class="ul-pg-clientes w-clearfix w-list-unstyled">
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>
      </ul>
    </div>
  </div>
  <div class="section-footer">
    <div class="container-footer w-container"><img src="images/logo-rai-branco.png" alt="" class="img-footer">
      <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
    </div>
  </div>
  <div class="modal-conteudo-interna">
    <div class="box-content-modal">
      <div class="container-video-modal">
        <div class="box-destq-conteudo" data-ix="abrir-modal-slide-full-2"><img src="images/prev-usa-leticias.jpg" srcset="images/prev-usa-leticias-p-800.jpeg 800w, images/prev-usa-leticias.jpg 960w" sizes="100vw" alt="" class="img-destq-conteudo"></div><img src="images/btn-fechar.png" alt="" class="btn-fechar-modal-conteudo" data-ix="fechar-modal-conteudo-interna"></div>
      <div class="desc-video-modal" data-ix="abrir-modal-slide-full-2">
        <h2 class="h2-conteudo">Rái Advertising - Reel</h2>
        <div>Lorem Ipsum aenean sollicitudin  lorem quis bibendum auctor<br>ipsum nec sagittis sem nibh id elit duis sed nibh vulputate.</div>
      </div>
      <div class="container-videos-relacionados">
        <h3 class="h3-conteudo">Veja também</h3>
        <ul class="ul-veja-tambem w-clearfix w-list-unstyled">
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-01.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-02.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-03.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-04.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-05.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-06.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-07.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-08.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
          <li class="li-veja-tambem">
            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2"><img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem"></div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="modal-slide-full"><img src="images/btn-fechar.png" alt="" class="fechar-modal-videofull" data-ix="fechar-modal-slide-full-2">
    <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-full w-slider">
      <div class="mask-slider-full w-slider-mask">
        <div class="slide-full w-slide">
          <div class="container-video-slider">
            <div style="padding-top:56.17021276595745%" id="w-node-9b0e3e5d3ac6-bea67616" class="video-slider w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FY8d-blNf1ZU%3Ffeature%3Doembed&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DY8d-blNf1ZU&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FY8d-blNf1ZU%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
          </div>
        </div>
      </div>
      <div class="arrow-slide-full esq w-slider-arrow-left">
        <div class="w-icon-slider-left"></div>
      </div>
      <div class="arrow-slide-full dir w-slider-arrow-right">
        <div class="w-icon-slider-right"></div>
      </div>
      <div class="nav-slide-full w-slider-nav w-round"></div>
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