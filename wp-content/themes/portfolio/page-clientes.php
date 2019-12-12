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




<?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

<?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

<?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

  <?php include(TEMPLATEPATH . '/inc/menu-pages.php'); ?>

<style>
    .banner-clientes {
        height: 350px;
        background-image: url(<?php the_field('banner_imprensa')?>);
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
    }

</style>

  <div class="banner-clientes">
    <div class="container-banner-imprensa w-container">
        <!--  Aqui é uma Tag <h1>    --><?php the_field('titulo_clientes') ?>
    </div>
  </div>



  <div class="section-imprensa">
    <div class="container-clientes w-container"><a href="javascript:history.go(-1)" class="link-voltar">Voltar</a>



<?php
          $url = $_POST['getUrl'];

          $category =0;



if($url == 102){
// Rai
    $category = 15;



}elseif ($url==104){
// ANI
    $category = 12;


}elseif ($url == 110){

}elseif ($url == 116){

}elseif ($url == 119){

}elseif ($url == 116){

}elseif ($url == 108){

}elseif ($url == 112){

}elseif ($url == 114){

}
 if (have_rows('apresentaCards', $url)) { //Se existir banner

                    while (have_rows('apresentaCards', $url)) {
                        the_row(); //Percorre Todos os banners

                        $getCliente = get_sub_field('nome_do_cliente');
                        $getLogo = get_sub_field('logo_pagina_de_clientes', $url);
                        $getCliente = preg_replace('/[ -]+/', '-', $getCliente);
                        //$exibe = get_sub_field('midia_eletronica');


                        $args = array(
                            'numberposts' => 1,
                            //'posts_per_page' => 1,
                            'category' => array($category),
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'include' => array(),
                            'exclude' => array(),
                            'tag' => $getCliente,
                            'meta_key' => '',
                            'meta_value' => '',
                            'post_type' => 'post',
                            'suppress_filters' => true,

                            //'offset' => 1
                        );


//
//                        if ($exibe == "Sim") {    // Se selecionado para exibir
////inicio do loop de posts
//
//                            ?>


        <?php $my_query = new Wp_Query($args);

        $my_posts = get_posts($args);
        $post_categories = get_terms($args);
        foreach ($my_posts as $post) : setup_postdata($post);

        $tags = wp_get_post_tags($post->ID);
        $my_query = new Wp_Query($args);
        $my_posts = get_posts($args);
        $post_categories = get_terms($args);


        $getCliente = mb_strtolower($getCliente, 'UTF-8');
        $title = get_the_title($post->ID, '', '', false);
        $content = get_the_content($post->ID, '', '', false);


        ?>

        <div class="item-sllider-interna w-slide"
             data-slidermd="<?php echo $getCliente ?>-<?php echo $post->ID ?>"
             onclick="SliderModalPrincipal(this)"  data-menu="modal-midiaEletronica">

            <!--            <div class="content-slide" data-ix="hover-item-slide">-->
            <div class="content-slide" style="padding-top:60px;">
                <img src="<?php  echo $getLogo ?>" alt=""
                     class="" style="max-width: 100%;
    vertical-align: middle;display: inline-block;">
                <div class="logo-cliente-slide" style="background-image: linear-gradient(180deg, transparent 60%, rgba(0, 0, 0, -0.1));">
                    <img src="<?php  $getLogo; ?>" alt="" class="logo-slide">
                </div>
            </div>


            <form action="/" data-form="<?php echo $getCliente ?>-<?php echo $post->ID ?>">
                <input hidden="" name="imagemDestaque"
                       value="<?php echo the_field('imagem_modal'); ?>">
                <input hidden="" name="tituloDestaque" value="<?php echo $title ?>">
                <input hidden="" name="contentDestaque" value="<?php echo $content ?>">

            </form>


            <form action="/"
                  data-form="Slider-<?php echo $getCliente ?>-<?php echo $post->ID ?>">

                <?php if (have_rows('slider_modal_post')): while (have_rows('slider_modal_post')) : the_row(); ?>

                    <?php if (have_rows('imagem_slide_modal')): while (have_rows('imagem_slide_modal')) : the_row(); ?>

                        <?php $imagemSliderModal = get_sub_field('imagem'); ?>

                        <input hidden="" name="imagemModal"
                               value="<?php echo $imagemSliderModal ?>">

                    <?php endwhile; else : endif; ?>

                    <?php if (have_rows('url_slide_modal')): while (have_rows('url_slide_modal')) : the_row(); ?>
                        <?php $urlSliderModal = get_sub_field('url'); ?>

                        <input hidden="" name="urlVideo"
                               value="<?php echo $urlSliderModal ?>">

                    <?php endwhile; else : endif; ?>
                <?php endwhile; else : endif; ?>

            </form>


        </div>


        <?php
        endforeach; ?>


<!--        --><?php
//
//        } //Fim Se selecionado para exibir
//        else {
//        ?>



        <?php
        } //Fim else
        //}
        }

        //fim do loop de posts
        ?>
    </div>

      <div class="arrow-sllider-interna left w-slider-arrow-left">
          <div class="w-icon-slider-left"></div>
      </div>
      <div class="arrow-sllider-interna right w-slider-arrow-right">
          <div class="w-icon-slider-right"></div>
      </div>
      <div class="nav-sllider-interna w-slider-nav w-round"></div>
  </div>
</div>


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

                <?php echo $getCliente; ?>

                <?php


                $args = array(
                    'numberposts' => 1,
                    //'posts_per_page' => 1,
                    'category' => array($category),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'tag' => $getCliente,
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,

                    //'offset' => 1
                );


                $my_query = new Wp_Query($args);

                $my_posts = get_posts($args);
                $post_categories = get_terms($args);
                foreach ($my_posts as $post) : setup_postdata($post);

                    $tags = wp_get_post_tags($post->ID);

                    $my_query = new Wp_Query($args);
                    $my_posts = get_posts($args);
                    $post_categories = get_terms($args);

                    $getCliente = $post_categories->name;
                    $getCliente = mb_strtolower($getCliente, 'UTF-8');
                    $title = get_the_title($post->ID, '', '', false);
                    $content = get_the_content($post->ID, '', '', false);

                    //var_dump($post_categories);
                    ?>
                    <form action="/" data-form="SliderVejaMais-<?php echo $post->ID ?>">

                        <?php if (have_rows('slider_modal_post')): while (have_rows('slider_modal_post')) : the_row(); ?>

                            <?php if (have_rows('imagem_slide_modal')): while (have_rows('imagem_slide_modal')) : the_row(); ?>

                                <?php $imagemSliderModal = get_sub_field('imagem'); ?>

                                <input hidden="" name="imagemModalVejaMais"
                                       value="<?php echo $imagemSliderModal ?>">

                            <?php endwhile; else : endif; ?>

                            <?php if (have_rows('url_slide_modal')): while (have_rows('url_slide_modal')) : the_row(); ?>
                                <?php $urlSliderModal = get_sub_field('url'); ?>

                                <input hidden="" name="urlVideoVejaMais"
                                       value="<?php echo $urlSliderModal ?>">

                            <?php endwhile; else : endif; ?>
                        <?php endwhile; else : endif; ?>

                    </form>


                    <li class="li-veja-tambem">

                        <div class="box-img-vejatambem"
                             onclick="sliderModalVejaMais(this)" data-ix="abrir-modal-video-full">
                            <img src="<?php echo the_field('thumb_veja_mais'); ?>" alt=""
                                 class="img-prev-veja-tambem" data-sliderModalVeja = "SliderVejaMais-<?php echo $post->ID ?>" >
                        </div>
                    </li>


                <?php
                endforeach; ?>

                <!--                                    <li class="li-veja-tambem">-->
                <!--                                        <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full"  onclick="sliderModalSliders(this)>-->
                <!--                                            <img src="images/prev-veja-tambem-02.jpg" alt="" class="img-prev-veja-tambem">-->
                <!--                                        </div>-->
                <!--                                    </li>-->


            </ul>
        </div>
    </div>
</div>


<?php include(TEMPLATEPATH . '/inc/modalSlider.php'); ?>









<!---->
<!---->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--        <li class="li-pg-clientes" data-ix="abrir-modal-cont-interna"><img src="images/logo-delicia.png" alt=""></li>-->
<!--      </ul>-->
<!--    </div>-->
<!--  </div>-->

<div class="section-footer">
    <div class="container-footer w-container"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                class="img-footer">
        <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
    </div>
</div>


<?php get_footer(); ?>
