<?php
//Template Name: Imprensa

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
    <body>
<?php include(TEMPLATEPATH . '/inc/expertise.php'); ?>

<?php include(TEMPLATEPATH . '/inc/premios.php'); ?>

<?php include(TEMPLATEPATH . '/inc/equipe.php'); ?>

<?php include(TEMPLATEPATH . '/inc/menu-internas.php'); ?>


    <style>
        .banner-imprensa {
            height: 350px;
            background-image: url(<?php the_field('banner_imprensa')?>);
            background-position: 50% 50%;
            background-size: cover;
            background-repeat: no-repeat;
        }

    </style>


    <div class="banner-imprensa">
        <div class="container-banner-imprensa w-container">
            <!--  Aqui é uma Tag <h1>    --><?php the_field('titulo_imprensa') ?>
        </div>
    </div>
    <div class="section-imprensa">
        <div class="container-imprensa w-container">
            <a href="<?php echo get_site_url() ?>/menu-page" class="link-voltar">Voltar</a>
            <ul class="ul-imprensa w-clearfix w-list-unstyled">

                <?php if (have_rows('adicionar_slider')): while (have_rows('adicionar_slider')) : the_row(); ?>

                    <li class="li-imprensa">
                        <div class="data-news"><?php the_sub_field('data') ?></div>
                        <h2 class="titu-news"><?php the_sub_field('titulo_news') ?></h2>
<!--                        <a href="#" class="btn-news w-button" data-ix="abrir-modal-imprensa"</a>-->
                        <a href="#" class="btn-news w-button" data-ix="abrir-modal-imprensa" data-teste="modal-<?php the_sub_field('data') ?>">Leia mais</a>

                        <div class="itens-modal">
                            <?php if (have_rows('adicionar_imagens_imprensa')): while (have_rows('adicionar_imagens_imprensa')) : the_row(); ?>

                            <input type="hidden" value="<?php the_sub_field('imagem_slider') ?>">
                            <?php endwhile; else : endif; ?>

                        </div>

                        <div class="container-modal-imprensa" id="modal-<?php the_sub_field('data') ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png"
                                 id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-imprensa">
                            <div class="box-modal imprensa">
                                <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1"
                                     class="slider-imprensa w-slider">
                                    <div class="mask-imprensa w-slider-mask">

                                        <?php if (have_rows('adicionar_imagens_imprensa')): while (have_rows('adicionar_imagens_imprensa')) : the_row(); ?>

                                            <div class="slide-imprensa w-slide">
                                                <img src="<?php the_sub_field('imagem_slider') ?>" class="img-imprensa">
                                            </div>
                                        <?php endwhile; else : endif; ?>

                                    </div>
                                    <div class="arrow-imprensa w-slider-arrow-left">
                                        <div class="w-icon-slider-left"></div>
                                    </div>
                                    <div class="arrow-imprensa w-slider-arrow-right">
                                        <div class="w-icon-slider-right"></div>
                                    </div>
                                    <div class="nav-imprensa w-slider-nav w-round" style="display: block"></div>
                                </div>
                            </div>
                        </div>

                    </li>

                <?php endwhile; else : endif; ?>

            </ul>
        </div>
    </div>
    <div class="section-footer">
        <div class="container-footer w-container"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                    class="img-footer">
            <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
        </div>
    </div>



<?php get_footer(); ?>

<script>
    $( document ).ready(function() {
        $('.btn-news').click(function(obj) {
            debugger;

            var nameData = obj.target.dataset.teste;
            var modal = document.getElementById(nameData);
            // modal.style.transformStyle = "preserve-3d";
            // modal.style.display = "block";
            // modal.style.opacity = "1";
            // modal.style.transform = "scaleX(1) scaleY(1) scaleZ(1)";
            // modal.style.transition = "transform 600ms ease 0s, opacity 350ms ease 0s";
            //
            // var parObj = obj.target.parentElement;
            // var setaLeft = parObj.querySelector(".slider-arrow-left");
            // setaLeft.classList.remove("slider-arrow-left");
            // setaLeft.classList.add("w-slider-arrow-left");
            //
            // var setaRight = parObj.querySelector(".slider-arrow-right");
            // setaRight.classList.remove("slider-arrow-right");
            // setaRight.classList.add("w-slider-arrow-right");

            var teste = document.getElementsByClassName("container-modal-imprensa");
            for(var i = 0; i < teste.length; i++){
                var testeId = teste[i].id;
                if(testeId != nameData){
                    modal.style.display = "none";
                } else{
                    modal.style.display = "block";
                }
            }
        });
    });
</script>
