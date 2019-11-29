<?php //var_dump($post_categories)  ?>
<div id="midia-eletronica" class="section-sliders">
    <h2 class="h2-interna">ROM</h2>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
        <div class="mask-sllider-interna w-slider-mask">

            <?php //include(TEMPLATEPATH . '/includes/midia-reel.php'); ?>

            <?php  if( have_rows('apresentaCards',116)){ //Se existir banner

                while ( have_rows('apresentaCards',116) ) { the_row(); //Percorre Todos os banners

                    $getCliente = get_sub_field('nome_do_cliente');
                    $getLogo = get_sub_field('logo',102);
                    $getCliente = preg_replace('/[ -]+/' , '-' , $getCliente);
                    $exibe = get_sub_field('midia_eletronica');



                    $args = array(
                        'numberposts' => 1,
                        //'posts_per_page' => 1,
                        'category' => array(16),
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

//inicio do loop de posts
//var_dump($post_categories);




                    if ($exibe == "Sim"){	// Se selecionado para exibir
//inicio do loop de posts

                        ?>



                        <?php    $my_query = new Wp_Query($args);

                        $my_posts = get_posts($args);
                        $post_categories = get_terms($args);
                        foreach ($my_posts as $post) : setup_postdata($post);

                            $tags = wp_get_post_tags($post->ID);
                            $my_query = new Wp_Query($args);
                            $my_posts = get_posts($args);
                            $post_categories = get_terms($args);


                            $getCliente = mb_strtolower($getCliente,'UTF-8');
                            $title = get_the_title($post->ID, '', '', false);
                            $content = get_the_content($post->ID, '', '', false);


                            ?>

                            <div class="item-sllider-interna w-slide" data-slidermd="<?php echo $getCliente?>-<?php echo $post->ID?>" onclick="teste(this)">

                                <!--            <div class="content-slide" data-ix="hover-item-slide">-->
                                <div class="content-slide">
                                    <img src="<?php echo the_field('thumb_card_video')?>" alt="" class="img-slide-conteudos">
                                    <div class="logo-cliente-slide">
                                        <img src="<?php echo $getLogo;?>" alt="" class="logo-slide">
                                    </div>
                                </div>

                                <form action="/" data-form="<?php echo $getCliente?>-<?php echo $post->ID?>">
                                    <input hidden="" name="imagemDestaque" value="<?php echo the_field('imagem_modal');?>">
                                    <input hidden="" name="tituloDestaque" value="<?php echo $title?>">
                                    <input hidden="" name="contentDestaque" value="<?php echo $content?>">
                                </form>
                            </div>


                        <?php
                        endforeach;?>


                        <?php

                    } //Fim Se selecionado para exibir
                    else{
                        ?>


                        <br/><br/>
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

<div class="modal-conteudo-interna" id="modal-midiaEletronica">
    <div class="box-content-modal">
        <div class="container-video-modal">
            <div class="box-destq-conteudo" data-ix="abrir-modal-video-full">
                <!--                <img src="" alt="" class="img-destq-conteudo">-->
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar.png" alt=""
                 class="btn-fechar-modal-conteudo" data-ix="fechar-modal-conteudo-interna">
        </div>
        <div class="desc-video-modal">
            <!--            <h2 class="h2-conteudo">Teste</h2>-->
            <!--            <div>Teste 2</div>-->
        </div>
    </div>
</div>