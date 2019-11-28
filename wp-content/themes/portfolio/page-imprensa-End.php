<?php
//Template Name: Imprensa3

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


        /*style modal*/
        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container-batman {
            display: block;
            width: 100%;
            height: 100%;
            padding: 70px 60px 100px;
            background-color: #f4f4f4;
            text-align: center;
        }

        .container-modal-imprensa {
            position: fixed;
            left: 0%;
            top: 0%;
            right: 0%;
            bottom: 0%;
            z-index: 999999999;
            display: none;
            width: 100%;
            height: 100%;
            padding: 60px 110px;
            background-color: rgba(0, 0, 0, 0.75);
            opacity: 0;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }

        /* Hide the images by default */
        .mySlides-robin {
            display: none;
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
        .next-WW {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev-WW:hover, .next-WW:hover {
            background-color: rgba(0,0,0,0.8);
        }

        .w3-modal{
            position: fixed;
            left: 0%;
            top: 0%;
            right: 0%;
            bottom: 0%;
            z-index: 999999999;
            width: 100%;
            height: 100%;
            padding: 60px 110px;
            background-color: rgba(0, 0, 0, 0.75);
            opacity: 0;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
        }
        .w3-modal-content{
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            overflow: hidden;
            width: auto;
            margin-right: auto;
            margin-left: auto;
            padding: 0px;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: transparent;
        }
        .w3-container{
            position: relative;
            display: block;
            overflow: hidden;
            z-index: 1;
            left: 0;
            right: 0;
            height: 100%;
            white-space: nowrap;
        }
        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active-shazam, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
            opacity: 1;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
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

                ?>



                    <li class="li-imprensa">
                        <div class="data-news"><?php echo $dataPost; ?></div>
                        <h2 class="titu-news"><?php echo $tituloNews; ?></h2>
<!--                        <a href="#" class="btn-news w-button" data-ix="abrir-modal-imprensa"</a>-->
<!--                        <a href="#" class="btn-news w-button" data-ix="abrir-modal-imprensa" data-teste="modal---><?php //the_sub_field('data') ?><!--">Leia mais</a>-->
                        <button onclick="abrirModal(this);" data-SpiderMan="modal-<?php echo $dataPost; ?>" class="w3-button w3-black">Open Modal</button>

                        <form action="/" class="f-imagens" name="formImagens" data-form="modal-<?php echo $dataPost; ?>">

                            <?php if (have_rows('adicionar_imagens_imprensa')): while (have_rows('adicionar_imagens_imprensa')) : the_row();
                                $imagemSlider = get_sub_field('imagem_slider');

                                ?>
                                <input type="hidden" value="<?php echo $imagemSlider; ?>">
                            <?php endwhile; else : endif; ?>
                        </form>
                    </li>
                <?php endwhile; else : endif; ?>

            </ul>


            <div id="modal-teste" class="w3-modal" style="display: none;">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png"
                     id="fecha-modal" alt="" class="btn-fechar-modal" onclick="removeFechar()">
<!--                <span onclick="removeFechar()" class="w3-button w3-display-topright" style="font-size: 30px;">&times;</span>-->
                <div class="w3-modal-content">
                    <div class="w3-container">

                        <!-- Slideshow container -->
                        <div class="slideshow-container-batman">
                            <!-- Full-width images with number and caption text -->


                            <!-- Next and previous buttons -->
                            <a class="prev-WW" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next-WW" onclick="plusSlides(1)">&#10095;</a>
                        </div>
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
