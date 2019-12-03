<?php
//Template Name: Rai

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


    <body class="body-interna">

                    <?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

                    <?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

                    <?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

                    <?php include(TEMPLATEPATH . '/inc/menu-pages.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Rai/reel.php'); ?>





    <div class="nav-interna w-clearfix">
        <ul class="ul-nav-interna w-clearfix w-list-unstyled">
            <li class="li-nav-interna w-clearfix">
                <a href="#midia-eletronica" class="link-nav-interna">Mídia Eletrônica</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#cases-2019" class="link-nav-interna">cases</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#" class="link-nav-interna">Mídia Impressa</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#digital" class="link-nav-interna">Digital</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#" class="link-nav-interna">Design &amp; VM</a>
            </li>
        </ul>
        <a href="#" class="link-nav-interna" data-ix="abrir-modal-clientes">clientes</a>
    </div>


                    <?php include(TEMPLATEPATH . '/includes/Rai/midia-eletronica.php'); ?>





                    <?php include(TEMPLATEPATH . '/includes/Rai/case2019.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Rai/case2018.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Rai/case2017.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Rai/midia-impressa.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Rai/digital.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Rai/design.php'); ?>





    <div class="modal-conteudo-interna">
        <div class="box-content-modal">
            <div class="container-video-modal">
                <!--
      #################################
      #MODAL POPUP Puxa Imagem Título e Conteúdo
      #################################
      -->


                <?php

                //argumentos do loop de posts da categoria. Trazendo o ultimo projeto da Agencia
                $args = array(
                    'numberposts' => 1,
                    'category' => array(15),
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
                $my_posts = get_posts($args);
                $post_categories = get_terms($args);
                //inicio do loop de posts
                //var_dump($post_categories);
                if ($my_posts) : foreach ($my_posts

                as $post) :
                setup_postdata($post);

                $title = get_the_title($post->ID, '', '', false);
                $content = get_the_content($post->ID, '', '', false);
                $cat_nome = get_the_category($post->ID);
                //$verificaCategoria = $cat_nome[1]->slug;
                //var_dump($my_posts);

                ?>


                <div class="box-destq-conteudo" data-ix="abrir-modal-video-full">
                    <img src="<?php echo the_field('imagem_modal') ?>" alt="" class="img-destq-conteudo">
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar.png" alt=""
                     class="btn-fechar-modal-conteudo" data-ix="fechar-modal-conteudo-interna">
            </div>
            <div class="desc-video-modal">
                <h2 class="h2-conteudo"><?= $title ?></h2>
                <div><?= $content ?> hhh</div>
            </div>

            <?php endforeach;
            endif; ?>


    <div class="container-modal-clientes">
        <img src="<?php echo get_stylesheet_directory_uri()?>/images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-clientes">
        <div class="box-modal clientes">
            <h2 class="h2-modal">G l o b a i s</h2>
            <ul class="ul-clientes w-clearfix w-list-unstyled">

                <?php if(have_rows('logos_clientes_globais',102)): while(have_rows('logos_clientes_globais',102)) : the_row(); ?>

                <li class="li-clientes" data-ix="abrir-modal-cont-interna">
                    <img src="<?php the_sub_field('imagem_logo',102);?>" alt="">
                </li>

                <?php endwhile; else : endif; ?>

            </ul>

            <h2 class="h2-modal">L o c a i s</h2>
            <ul class="ul-clientes w-clearfix w-list-unstyled">

                <?php if(have_rows('logos_clientes_locais',102)): while(have_rows('logos_clientes_locais',102)) : the_row(); ?>

                    <li class="li-clientes" data-ix="abrir-modal-cont-interna">
                        <img src="<?php the_sub_field('imagem_logo',102);?>" alt="">
                    </li>

                <?php endwhile; else : endif; ?>


            </ul>

            <h2 class="h2-modal">principais clientes atendidos</h2>
            <ul class="ul-clientes w-clearfix w-list-unstyled">

            <?php if(have_rows('logos_principais_clientes_atendidos',102)): while(have_rows('logos_principais_clientes_atendidos',102)) : the_row();

                $pega_data = get_sub_field('data_de_entrada_na_casa');
                $data_sistema = date('Y-m-d');
                $pega_data_Time = new DateTime($pega_data);
                $data_sistema_Time = new DateTime($data_sistema);
                $pega_diferenca = $data_sistema_Time->diff($pega_data_Time);

            ?>

                <li class="li-clientes principais" data-ix="abrir-modal-cont-interna">
                    <img src="<?php the_sub_field('imagem_logo',102);?>" alt="">
                    <div><?php echo $pega_diferenca->y ?> x anos</div>
                </li>
                <?php endwhile; else : endif; ?>



            </ul>
        </div>
    </div>


<?php get_footer(); ?>