<?php
//Template Name: Dezoito

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

                    <?php include(TEMPLATEPATH . '/includes/Dezoito/post-destaque.php'); ?>





    <div class="nav-interna w-clearfix">
        <ul class="ul-nav-interna w-clearfix w-list-unstyled">
            <li class="li-nav-interna w-clearfix">
                <a href="#apresentacao-influen" class="link-nav-interna">Apresentação Influenciadores</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#apresentacao-pr" class="link-nav-interna">Apresentação PR</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#quem-somos" class="link-nav-interna">Quem Somos</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#cases-pr" class="link-nav-interna">Cases PR</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#cases-influenciadores" class="link-nav-interna">Cases Influenciadores</a>
            </li>
        </ul>

        <a href="#" class="link-nav-interna" data-ix="abrir-modal-clientes">clientes</a>

    </div>


                     <?php include(TEMPLATEPATH . '/includes/Dezoito/apresentacao-pr.php'); ?>



                    <?php include(TEMPLATEPATH . '/includes/Dezoito/apresentacao-influenciadores.php'); ?>



                    <?php include(TEMPLATEPATH . '/includes/Dezoito/quem-somos.php'); ?>

                    <?php include(TEMPLATEPATH . '/includes/Dezoito/cases-pr.php'); ?>


                    <?php include(TEMPLATEPATH . '/includes/Dezoito/cases-influenciadores.php'); ?>



                    <div class="section-footer">
        <div class="container-footer w-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt="" class="img-footer">
            <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
        </div>
    </div>


<?php get_footer(); ?>