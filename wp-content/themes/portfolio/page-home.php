<?php
//Template Name: Home
?>
<?php get_header() ?>
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
    <body>



<div class="w-layout-grid grid-home">
    <div id="w-node-46682964642c-ae858d38" data-w-id="d82193e6-f8cd-4a71-8926-46682964642c" class="link-home" data-ix="hover-home">
        <div class="txt-link-home box-peq">Equipe</div>
        <div data-delay="16000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="5000"
             data-infinite="1" class="slider-home w-slider" data-ix="abrir-modal-equipe">
            <div class="mask-slider-home w-slider-mask">

                <?php if (have_rows('imagem_card_equipe')): while (have_rows('imagem_card_equipe')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_equipe'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>

            </div>

            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>



    <div id="w-node-b194e3f3f9b4-ae858d38" data-w-id="43faf20c-6f07-2e4e-fda2-b194e3f3f9b4" class="link-home" data-ix="hover-home">
        <div class="txt-link-home">Depoimentos</div>
        <div data-delay="10000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="3000" data-infinite="1" class="slider-home w-slider" data-ix="abrir-modal-depoimentos">
            <div class="mask-slider-home w-slider-mask">
                <?php if (have_rows('imagem_card_depoimentos')): while (have_rows('imagem_card_depoimentos')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_depoimentos'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>
            </div>
            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>

    <div id="w-node-70f32b3eaea5-ae858d38" data-w-id="9bd6345c-39a1-cec9-cb1b-70f32b3eaea5" class="link-home" data-ix="hover-home">
        <div class="txt-link-home">Apresentação</div>
        <div data-delay="12000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="3500" data-infinite="1" class="slider-home w-slider" data-ix="abrir-modal-apresentacao">
            <div class="mask-slider-home w-slider-mask">
                <?php if (have_rows('imagem_card_apresentacao')): while (have_rows('imagem_card_apresentacao')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_apresentacao'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>
            </div>
            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>


    <div id="w-node-dd0551e9809f-ae858d38" data-w-id="92021801-75e7-e58b-51ef-dd0551e9809f" class="link-home" data-ix="hover-home">
        <div class="txt-link-home">Como pensamos</div>
        <div data-delay="11000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="3000" data-infinite="1" class="slider-home w-slider">
            <div class="mask-slider-home w-slider-mask">
                <?php if (have_rows('imagem_card_como_pensamos')): while (have_rows('imagem_card_como_pensamos')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_como_pensamos'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>
            </div>
            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>


    <div id="w-node-ba607e8ed88e-ae858d38" data-w-id="47b9f150-6934-ca36-2469-ba607e8ed88e" class="link-home" data-ix="hover-home">
        <div class="txt-link-home">Prêmios</div>
        <div data-delay="14000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="3250" data-infinite="1" class="slider-home w-slider" data-ix="abrir-modal-premios">
            <div class="mask-slider-home w-slider-mask">
                <?php if (have_rows('imagem_card_premio')): while (have_rows('imagem_card_premio')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_premio'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>
            </div>
            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>


    <div id="w-node-807fae8d2414-ae858d38" data-w-id="fc3361f2-a999-ebbe-3386-807fae8d2414" class="link-home" data-ix="hover-home">
        <div class="txt-link-home">Expertise</div>
        <div data-delay="15000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="4000" data-infinite="1" class="slider-home w-slider" data-ix="abrir-modal-expertise">
            <div class="mask-slider-home w-slider-mask">
                <?php if (have_rows('imagem_card_expertise')): while (have_rows('imagem_card_expertise')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_expertise'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>
            </div>
            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>


    <div id="w-node-27b06bfb4b91-ae858d38" data-w-id="eec2ee2b-3f16-8b36-cf9d-27b06bfb4b91" class="link-home" data-ix="abrir-modal-ranking">
        <div class="txt-link-home">Ranking</div>
        <div data-delay="13000" data-animation="cross" data-autoplay="1" data-disable-swipe="1" data-duration="4500" data-infinite="1" class="slider-home w-slider">
            <div class="mask-slider-home w-slider-mask">
                <?php if (have_rows('imagem_card_ranking')): while (have_rows('imagem_card_ranking')) : the_row(); ?>

                    <div class="w-clearfix w-slide">
                        <img src="<?php the_sub_field('imagens_ranking'); ?>" alt="" class="img-slider-home equipe">
                    </div>

                <?php endwhile; else : endif; ?>
            </div>
            <div class="arrow-slider-home w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slider-home w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slider-home w-slider-nav w-round"></div>
        </div>
    </div>


    <a id="w-node-4d1d43d3175d-ae858d38" data-w-id="dad73026-bf28-5d69-f293-4d1d43d3175d"
       href="<?php echo get_site_url() ?>/menu-page" class="link-home logo w-inline-block w-clearfix"
       data-ix="hover-home">
        <img src="<?php the_field('imagem_card_logo'); ?>" alt="" class="img-home logo-rai">
    </a>
</div>


<!--  ############ Section Prêmios ################### -->
<?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

<!--  ############ Section Ranking ################### -->
<?php include(TEMPLATEPATH . '/inc/ranking.php'); ?>

<!--  ############ Section Equipe ################### -->

<?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

<!--############### Container Expertise  ###################-->

<?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

<!--##################   Container Depoimento  #################################-->

<div class="container-modal-depoimentos">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt=""
         class="btn-fechar-modal" data-ix="fechar-modal-depoimentos">
    <div class="box-videomodal w-embed w-iframe">
        <iframe class="youtube-video" width="100%" height="100%"
                src="https://www.youtube-nocookie.com/embed/<?php the_field('link_do_video_depoimentos'); ?>?enablejsapi=1&version=3&playerapiid=ytplayer"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen="">
        </iframe>
    </div>
</div>

<!--##################   FINAL Container Depoimento  #################################-->


<!--##################   Container Apresentação  #################################-->

<div class="container-modal-apresentacao">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt=""
         class="btn-fechar-modal" data-ix="fechar-modal-apresentacao">
    <div class="box-videomodal w-embed w-iframe">
        <iframe class="youtube-video" width="100%" height="100%"
                src="https://www.youtube-nocookie.com/embed/<?php the_field('link_do_video_apresentacao'); ?>?enablejsapi=1&version=3&playerapiid=ytplayer"
                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen="">
        </iframe>
    </div>
</div>

<!--##################  FINAL Container Apresentação  #################################-->
<?php get_footer(); ?>