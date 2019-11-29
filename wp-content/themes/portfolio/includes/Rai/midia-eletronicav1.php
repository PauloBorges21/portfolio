

<div id="midia-eletronica" class="section-sliders">
    <h2 class="h2-interna">Mídia Eletrônica</h2>

    <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
        <div class="mask-sllider-interna w-slider-mask">

            <?php /**
             * * Por necessidades(falta de tempo) deixamos manualmente a inserção de novos clientes nos Moldais *
             * Não esquecer *
             * Colocar tag nos post com o nome dos clientes
             * patronizar a escrita das imagens dos logos para funcionar o logo
             *
             */

            ?>


            <!--
                                        ##############          ###################
                                        #############   SAMSUNG ###################
                                        ##############          ###################
            -->

            <?php
            $args = array(
                'numberposts' => 1,
                //'posts_per_page' => 1,
                'category' => array(16),
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'tag' => 'samsung',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true,

                //'offset' => 1
            );

            $my_query = new Wp_Query($args);

            $my_posts = get_posts($args);
            $post_categories = get_terms($args);


            //inicio do loop de posts
            //var_dump($post_categories);
            if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);

                $tags = wp_get_post_tags($post->ID);

                ?>


                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide">

                        <img src="<?php echo the_field('thumb_card_video') ?>" alt="" class="img-slide-conteudos">

                        <div class="logo-cliente-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-<?php echo $tags[0]->name ?>.png"
                                 alt="" class="logo-slide">
                        </div>
                    </div>
                </div>


            <?php

            endforeach; endif; //fim do loop de posts
            ?>


            <!--
                              ##############          ###################
                              #############   Diniz   ###################
                              ##############          ###################
  -->

            <?php
            $args = array(
                'numberposts' => 1,
                //'posts_per_page' => 1,
                'category' => array(16),
                'orderby' => 'date',
                'order' => 'DESC',
                'include' => array(),
                'exclude' => array(),
                'tag' => 'diniz',
                'meta_key' => '',
                'meta_value' => '',
                'post_type' => 'post',
                'suppress_filters' => true,

                //'offset' => 1
            );

            $my_query = new Wp_Query($args);

            $my_posts = get_posts($args);
            $post_categories = get_terms($args);


            //inicio do loop de posts
            //var_dump($post_categories);
            if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);

                $tags = wp_get_post_tags($post->ID);

                ?>


                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide">

                        <img src="<?php echo the_field('thumb_card_video') ?>" alt="" class="img-slide-conteudos">

                        <div class="logo-cliente-slide">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-<?php echo $tags[0]->name ?>.png"
                                 alt="" class="logo-slide">
                        </div>
                    </div>
                </div>


            <?php

            endforeach; endif; //fim do loop de posts
            ?>
