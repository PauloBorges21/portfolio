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

        /* Next & previous buttons */
        .prev-WW, .next-WW {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .prev-WW {
            left: -50px;
            border-radius: 0 3px 3px 0;
        }
        .next-WW {
            right: -50px;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev-WW:hover, .next-WW:hover {
            background-color: rgba(0,0,0,0.8);
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

                <?php if (have_rows('adicionar_slider')): while (have_rows('adicionar_slider')) : the_row();

                    $dataPost = get_sub_field('data');
                    $tituloNews = get_sub_field('titulo_news');
                    $idClass = explode(' ', $tituloNews);
                     $idClass[0];
                    ?>



                    <li class="li-imprensa">
                        <div class="data-news"><?php echo $dataPost; ?></div>
                        <h2 class="titu-news"><?php echo $tituloNews; ?></h2>
                        <!--                        <a href="#" class="btn-news w-button" data-ix="abrir-modal-imprensa"</a>-->
                        <!--                        <a href="#" class="btn-news w-button" data-ix="abrir-modal-imprensa" data-teste="modal---><?php //the_sub_field('data') ?><!--">Leia mais</a>-->
                        <button onclick="abrirModal(this);" data-SpiderMan="modal-<?php echo $dataPost . $idClass[0]; ?>" class="btn-news w-button">Leia Mais</button>

                        <form action="/" class="f-imagens" name="formImagens" data-form="modal-<?php echo $dataPost . $idClass[0] ?>">

                            <?php if (have_rows('adicionar_imagens_imprensa')): while (have_rows('adicionar_imagens_imprensa')) : the_row();
                                $imagemSlider = get_sub_field('imagem_slider');

                                ?>
                                <input type="hidden" value="<?php echo $imagemSlider; ?>">
                            <?php endwhile; else : endif; ?>
                        </form>
                    </li>
                <?php endwhile; else : endif; ?>

            </ul>
            <div class="container-modal-imprensa" id="modal-teste">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png"
                     id="fecha-modal" alt="" class="btn-fechar-modal" onclick="removeFechar()">
                <div class="box-modal imprensa">
                    <div data-animation="slide" data-hide-arrows="1" data-duration="500" data-infinite="1"
                         class="slider-imprensa w-slider">
                        <div class="mask-imprensa w-slider-mask">



                        </div>
                        <a class="prev-WW" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next-WW" onclick="plusSlides(1)">&#10095;</a>
                    </div>
                </div>
            </div>
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

</script>
