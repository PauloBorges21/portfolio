<div id="midia-impressa" class="section-sliders">
    <h2 class="h2-interna">Mídia Impressa</h2>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
        <div class="mask-sllider-interna w-slider-mask">

            <?php if (have_rows('apresentaCards', 102)) { //Se existir banner

                while (have_rows('apresentaCards', 102)) {
                    the_row(); //Percorre Todos os banners

                    $getCliente = get_sub_field('nome_do_cliente');
                    $getLogo = get_sub_field('logo', 102);
                    $getCliente = preg_replace('/[ -]+/', '-', $getCliente);
                    $exibe = get_sub_field('midia_impressa');


                    $args = array(
                        'numberposts' => 1,
                        //'posts_per_page' => 1,
                        'category' => array(18),
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



                    if ($exibe == "Sim") {    // Se selecionado para exibir
//inicio do loop de posts

                        ?>


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
                                 onclick="SliderModalPrincipal(this)"  data-menu="modal-midiaImpressa">

                                <!--            <div class="content-slide" data-ix="hover-item-slide">-->
                                <div class="content-slide">
                                    <img src="<?php echo the_field('thumb_card_video') ?>" alt=""
                                         class="img-slide-conteudos">
                                    <div class="logo-cliente-slide">
                                        <img src="<?php echo $getLogo; ?>" alt="" class="logo-slide">
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


                        <?php

                    } //Fim Se selecionado para exibir
                    else {
                        ?>



                        <?php
                    } //Fim else
                }
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


<div class="modal-conteudo-interna" id="modal-midiaImpressa">
    <div class="box-content-modal">
        <div class="container-video-modal">
            <!--            <div class="box-destq-conteudo" data-ix="abrir-modal-video-full" onclick="sliderModalSliders(obj)">-->
            <div class="box-destq-conteudo" data-ix="abrir-modal-video-full" onclick="sliderModalSliders(this)">
                <!--Imagem do Vídeo do CLiente via JavaScipt-->
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar.png" alt=""
                 class="btn-fechar-modal-conteudo" onclick="fechaME(this)" data-rai="modal-midiaImpressa">
        </div>
        <div class="desc-video-modal">
            <!--Aqui vai o título e o texto via JavaScript-->
        </div>

        <div class="container-videos-relacionados" id="modalSlideVejaMais">
            <h3 class="h3-conteudo">Veja também</h3>
            <ul class="ul-veja-tambem w-clearfix w-list-unstyled">

                <?php

                //argumentos do loop de posts da categoria. Trazendo o ultimo projeto da Agencia
                $args = array(
                    //'numberposts' => 1,
                    'category' => 15,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
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


