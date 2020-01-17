<?php
//Template Name: Or

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

<?php include(TEMPLATEPATH . '/includes/Or/post-destaque.php'); ?>  <!-- Destaque da página -->

<!-- Inicio do menu  -->

    <div class="nav-interna w-clearfix">
        <ul class="ul-nav-interna w-clearfix w-list-unstyled">
            <li class="li-nav-interna w-clearfix">
                <a href="#apps" class="link-nav-interna">Apps</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#sistemas" class="link-nav-interna">Sistemas</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#sites" class="link-nav-interna">Sites & E-COMMERCE</a>
            </li>

        </ul>
        <form action="<?php echo get_site_url(); ?>/page-clientes" method="GET">
            <?php $urlPagina = 116; ?>


            <input hidden="" name="getUrl" value="<?= $urlPagina ?>">
            <input class="link-nav-interna btncliente" type="submit" value="Cliente">

        </form>
    </div>

    <!-- Final do menu  -->

<!-- Inicio do Conteudo dos cards -->

<?php include(TEMPLATEPATH . '/includes/Or/apps.php'); ?>

<?php include(TEMPLATEPATH . '/includes/Or/sistemas.php'); ?>

<?php include(TEMPLATEPATH . '/includes/Or/ecommerce.php'); ?>




<div class="section-footer">
        <div class="container-footer w-container"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                    class="img-footer">
            <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
        </div>
    </div>





<?php get_footer(); ?>