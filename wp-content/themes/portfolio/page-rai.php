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
                <a href="#midia-impressa" class="link-nav-interna">Mídia Impressa</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#digital" class="link-nav-interna">Digital</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#design" class="link-nav-interna">Design &amp; VM</a>
            </li>
        </ul>
        <form action="<?php echo get_site_url(); ?>/page-clientes" method="POST">
            <?php $urlPagina = 102; ?>


            <input hidden="" name="getUrl" value="<?= $urlPagina ?>">
            <input class="link-nav-interna btncliente" type="submit" value="Cliente">

        </form>
    </div>


<?php include(TEMPLATEPATH . '/includes/Rai/midia-eletronica.php'); ?>

<?php include(TEMPLATEPATH . '/includes/Rai/case.php'); ?>

<?php include(TEMPLATEPATH . '/includes/Rai/midia-impressa.php'); ?>

<?php include(TEMPLATEPATH . '/includes/Rai/digital.php'); ?>

<?php include(TEMPLATEPATH . '/includes/Rai/design.php'); ?>



<div class="section-footer">
        <div class="container-footer w-container"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                    class="img-footer">
            <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
        </div>
    </div>




<?php get_footer(); ?>