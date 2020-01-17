<div id="sistemas" class="section-sliders">
    <h2 class="h2-interna">SISTEMAS</h2>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
        <div class="mask-sllider-interna w-slider-mask">

            <?php if (have_rows('apresentaCards', 116)) { //Se existir banner

                while (have_rows('apresentaCards', 116)) {
                    the_row(); //Percorre Todos os banners

                    $getCliente = get_sub_field('nome_do_cliente');
                    $getLogo = get_sub_field('logo', 116);
                    $getCliente = preg_replace('/[ -]+/', '-', $getCliente);
                    $str = strtolower($getCliente);
                    $exibe = get_sub_field('sistemas');
                    
        
        
                    $args = array(
                        'category_name' => $str,
                        'post_type' => array('sistemas'),
                        'numberposts' => 1,
                        //'posts_per_page' => 1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        // 'taxonomies' => array($getCliente),
                         'tag'=> array('or',$str) ,
                        //'meta_key' => $getCliente,
                       // 'meta_value' => $getCliente,
                        //'post_type' => 'clientes',
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
        
        
                    <div class="item-sllider-interna w-slide">
        
        
                        <a href="<?php the_permalink() ?>" class="content-slide w-inline-block">
                            <img src="<?php echo the_field('thumb_card_video') ?>" alt="" class="img-slide-conteudos">
                            <div class="logo-cliente-slide">
                                <img src="<?php echo $getLogo; ?>" alt="" class="logo-slide">
        
                            </div>
                        </a>
                    </div>
                        <?php endforeach;?>
        
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
        
        