<?php
//Template Name: Nes

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

<?php include(TEMPLATEPATH . '/includes/NES/post-destaque.php'); ?>  <!-- Destaque da página -->

<!-- Inicio do menu  -->

    <div class="nav-interna w-clearfix">
        <ul class="ul-nav-interna w-clearfix w-list-unstyled">
            <li class="li-nav-interna w-clearfix">
                <a href="#cases" class="link-nav-interna">Cases</a>
            </li>

    
        </ul>
        <form action="<?php echo get_site_url(); ?>/page-clientes" method="GET">
            <?php $urlPagina = 119; ?>


            <input hidden="" name="getUrl" value="<?= $urlPagina ?>">
            <input class="link-nav-interna btncliente" type="submit" value="Cliente">

        </form>
    </div>

    <!-- Final do menu  -->

<!-- Inicio do Conteudo dos cards -->

<?php include(TEMPLATEPATH . '/includes/NES/cases.php'); ?>
 
<div class="section-footer">
        <div class="container-footer w-container"><img
                    src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                    class="img-footer">
            <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
        </div>
    </div>






<?php get_footer(); ?>