
<?php
//argumentos do loop de posts da categoria. Esse Filtro Exclusivo para Reel Caso não tenha Deixar o Menu principal para trazer sempre o ultimo vídeo
$args = array(
    'numberposts' => 1,
    //'category' => array(40),
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'filmes_ani',
    'suppress_filters' => true,

    //'offset' => 1
);
$my_posts = get_posts($args);
$post_categories = get_terms($args);
//inicio do loop de posts
//var_dump($post_categories);
if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);

$title = get_the_title($post->ID, '', '', false);
$content = get_the_content($post->ID, '', '', false);
$cat_nome = get_the_category($post->ID);
//$verificaCategoria = $cat_nome[1]->slug;
//var_dump($my_posts);

?>

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

<!--Imagem vindo de um custom field dos posts-->
<div class="main-banner-interna">
  <img src="<?php echo the_field('imagem_modal'); ?>" alt="" class="img-main-banner">

  <div class="content-main-banner">
    <div class="box-content-main-banner" onclick="sliderModalVejaMais(this)" data-ix="abrir-modal-video-full">
      <img src=" <?php echo get_stylesheet_directory_uri(); ?>/images/play-btn.png" alt=""
      class="btn-play-mainbanner image-2" data-sliderModalVeja="SliderVejaMais-<?php echo $post->ID ?>">
      <h1 class="h1-internna"><?php echo $title ?></h1>
      <p><?php echo $content ?></p>
     


    </div>
  </div>
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


<?php endforeach; endif; //fim do loop de posts ?>