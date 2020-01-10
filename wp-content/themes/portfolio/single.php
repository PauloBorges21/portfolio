<?php
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


<?php
$title = get_the_title($post->ID, '', '', false);
 $content= get_the_content($post->ID, '', '', false);
  $categories = get_the_category($post->ID, '', '', false); 
?>
<div class="main-banner-interna">
<img src="<?php echo the_field('imagem_modal'); ?>" alt="" class="img-main-banner">
   
    <div class="content-main-banner">
      <div class="box-content-main-banner" data-ix="abrir-modal-slide-full-2">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/play-btn.png" alt="" class="btn-play-mainbanner image-2" data-ix="abrir-modal-video-reel-full">
        <h1 class="h1-internna"><?php echo $title ?></h1>
        <p><?php echo $content ?></p>
      </div>
    </div>
  </div>
  <?php
  $args = array(
                'numberposts' => -1,
                //'posts_per_page' => 1,
                'category' => $categories,
                //'orderby' => 'date',
                //'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                //'tag' => $getCliente,
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true,

                'offset' => 1
            );
?>

  <div id="midia-eletronica" class="section-veja-interna">
    <h2 class="h2-interna">veja também - <?php var_dump($categories) ?> </h2>
    <ul class="ul-veja-tambem interna w-clearfix w-list-unstyled">

                <?php $my_query= null;
                $my_query= new Wp_Query($args);

                if($my_query->have_posts()) :
                while ( $my_query-> have_posts()) : $my_query->the_post();
                ?>



      <li class="li-veja-tambem interna">
        <a href="<?php the_permalink( ) ?>" class="w-inline-block w--current">
          <img src="<?php echo the_field('thumb_veja_mais'); ?>" alt="" class="thumb-vejatbm">
        </a>
      </li>
      <?php endwhile;  endif; //fim do loop de posts ?>
    </ul>
  </div>


  <div class="modal-slide-full"><img src="images/btn-fechar.png" alt="" class="fechar-modal-videofull" data-ix="fechar-modal-slide-full-2">
    <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1" class="slider-full w-slider">
      <div class="mask-slider-full w-slider-mask">
        <div class="slide-full w-slide">
          <div class="content-slide-full"><img src="images/case-ex-01.jpg" srcset="images/case-ex-01-p-500.jpeg 500w, images/case-ex-01-p-800.jpeg 800w, images/case-ex-01-p-1080.jpeg 1080w, images/case-ex-01.jpg 1280w" sizes="100vw" alt="" class="img-slider-full"></div>
        </div>
        <div class="slide-full w-slide">
          <div class="content-slide-full"><img src="images/case-ex-02.jpg" srcset="images/case-ex-02-p-500.jpeg 500w, images/case-ex-02-p-800.jpeg 800w, images/case-ex-02-p-1080.jpeg 1080w, images/case-ex-02.jpg 1280w" sizes="100vw" alt="" class="img-slider-full"></div>
        </div>
        <div class="slide-full w-slide">
          <div class="content-slide-full"><img src="images/case-ex-03.jpg" srcset="images/case-ex-03-p-500.jpeg 500w, images/case-ex-03-p-800.jpeg 800w, images/case-ex-03-p-1080.jpeg 1080w, images/case-ex-03.jpg 1280w" sizes="100vw" alt="" class="img-slider-full"></div>
        </div>
        <div class="slide-full w-slide">
          <div class="container-video-slider">
            <div style="padding-top:56.17021276595745%" id="w-node-111f76d68e81-c09e084a" class="video-slider w-video w-embed"><iframe class="embedly-embed" src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FY8d-blNf1ZU%3Ffeature%3Doembed&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DY8d-blNf1ZU&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FY8d-blNf1ZU%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube" scrolling="no" frameborder="0" allow="autoplay; fullscreen" allowfullscreen="true"></iframe></div>
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