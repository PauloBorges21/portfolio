<?php
get_header();
//Template Name: Page Post Cases
?>

<style>
  .box-modal.equipe {
    -ms-overflow-style: none;
    / / IE 10+overflow: -moz-scrollbars-none;
    / / Firefox
  }

  .box-modal.equipe::-webkit-scrollbar {
    display: none;
    / / Safari and Chrome
  }

  .box-modal.clientes {
    -ms-overflow-style: none;
    / / IE 10+overflow: -moz-scrollbars-none;
    / / Firefox
  }

  .box-modal.clientes::-webkit-scrollbar {
    display: none;
    / / Safari and Chrome
  }

  .box-modal.ranking {
    -ms-overflow-style: none;
    / / IE 10+overflow: -moz-scrollbars-none;
    / / Firefox
  }

  .box-modal.ranking::-webkit-scrollbar {
    display: none;
    / / Safari and Chrome
  }

  .modal-conteudo-interna {
    -ms-overflow-style: none;
    / / IE 10+overflow: -moz-scrollbars-none;
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
    <div class="box-content-main-banner" onclick="sliderModalVejaMais(this)" data-ix="abrir-modal-video-full">
      <img src=" <?php echo get_stylesheet_directory_uri(); ?>/images/play-btn.png" alt=""
      class="btn-play-mainbanner image-2" data-sliderModalVeja="SliderVejaMais-<?php echo $post->ID ?>">
      <h1 class="h1-internna"><?php echo $title ?></h1>
      <p><?php echo $content ?> HAHAHAHAHA</p>
      <p> <?php echo $listCat ?></p>

      <p><?php echo $categoriesNew ?></p>


    </div>
  </div>
</div>

<form action="/" data-form="SliderVejaMais-<?php echo $post->ID ?>">

<?php if (have_rows('slider_modal_post')): while (have_rows('slider_modal_post')) : the_row(); ?>

    <?php if (have_rows('imagem_slide_modal')): while (have_rows('imagem_slide_modal')) : the_row(); ?>

        <?php $imagemSliderModal = get_sub_field('imagem'); ?>

        <input hidden="" name="imagemModalVejaMais" value="<?php echo $imagemSliderModal ?>">

    <?php endwhile; else : endif; ?>

    <?php if (have_rows('url_slide_modal')): while (have_rows('url_slide_modal')) : the_row(); ?>
        <?php $urlSliderModal = get_sub_field('url'); ?>

        <input hidden="" name="urlVideoVejaMais" value="<?php echo $urlSliderModal ?>">

    <?php endwhile; else : endif; ?>
<?php endwhile; else : endif; ?>

</form>

<?php
$args = array(
                'category_name' => $getCliente,
                'post_type' => array('cases'),
                'numberposts' => 8,
                //'posts_per_page' => 1,
                'orderby' => 'rand',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array($post->ID),
                'post__not_in'   => array($post->ID),
                // 'taxonomies' => array($getCliente),
                 'tag'=> array('rai',$getCliente) ,
                //'meta_key' => $getCliente,
               // 'meta_value' => $getCliente,
                //'post_type' => 'clientes',
                'suppress_filters' => true,

                //'offset' => -1
            );

?>

<div id="midia-eletronica" class="section-veja-interna">
  <h2 class="h2-interna">veja também </h2>
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





<form action="/" data-form="Slider-<?php echo $getCliente ?>-<?php echo $post->ID ?>">

  <?php if (have_rows('slider_modal_post')): while (have_rows('slider_modal_post')) : the_row(); ?>

  <?php if (have_rows('imagem_slide_modal')): while (have_rows('imagem_slide_modal')) : the_row(); ?>

  <?php $imagemSliderModal = get_sub_field('imagem'); ?>

  <input hidden="" name="imagemModal" value="<?php echo $imagemSliderModal ?>">

  <?php endwhile; else : endif; ?>

  <?php if (have_rows('url_slide_modal')): while (have_rows('url_slide_modal')) : the_row(); ?>
  <?php $urlSliderModal = get_sub_field('url'); ?>

  <input hidden="" name="urlVideo" value="<?php echo $urlSliderModal ?>">

  <?php endwhile; else : endif; ?>
  <?php endwhile; else : endif; ?>

</form>

</div>
</li>






<div class="modal-conteudo-interna" id="modal-midiaEletronica">
  <div class="box-content-modal">
    <div class="container-video-modal">
      <!--            <div class="box-destq-conteudo" data-ix="abrir-modal-video-full" onclick="sliderModalSliders(obj)">-->
      <div class="box-destq-conteudo" data-ix="abrir-modal-video-full" onclick="sliderModalSliders(this)">
        <!--Imagem do Vídeo do CLiente via JavaScipt-->
      </div>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar.png" alt=""
        class="btn-fechar-modal-conteudo" onclick="fechaME(this)" data-rai="modal-midiaEletronica">



    </div>
    <div class="desc-video-modal">
      <!--Aqui vai o título e o texto via JavaScript-->
    </div>


    <div class="container-videos-relacionados" id="modalSlideVejaMais">
      <h3 class="h3-conteudo">Veja também</h3>
      <ul class="ul-veja-tambem w-clearfix w-list-unstyled">
      </ul>
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

<?php include(TEMPLATEPATH . '/inc/modalSlider.php'); ?>

<?php get_footer(); ?>