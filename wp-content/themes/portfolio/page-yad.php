<?php
//Template Name: YAD

get_header();

?>
<style>
    .box-modal.equipe {
        -ms-overflow-style: none;
        / / IE 10+overflow: -moz-scrollbars-none;
        / / Firefox
    }

    .box-modal.equipe::-webkit-scrollbar {
        display: none;
        / / Safari and Chrome
    }

    .box-modal.clientes {
        -ms-overflow-style: none;
        / / IE 10+overflow: -moz-scrollbars-none;
        / / Firefox
    }

    .box-modal.clientes::-webkit-scrollbar {
        display: none;
        / / Safari and Chrome
    }

    .box-modal.ranking {
        -ms-overflow-style: none;
        / / IE 10+overflow: -moz-scrollbars-none;
        / / Firefox
    }

    .box-modal.ranking::-webkit-scrollbar {
        display: none;
        / / Safari and Chrome
    }

    .modal-conteudo-interna {
        -ms-overflow-style: none;
        / / IE 10+overflow: -moz-scrollbars-none;
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

    <?php include(TEMPLATEPATH . '/includes/YAD/post-destaque.php'); ?>



<!-- Não terá menu com cards -->

    <!-- <div class="nav-interna w-clearfix">
        <ul class="ul-nav-interna w-clearfix w-list-unstyled">
            <li class="li-nav-interna w-clearfix">
                <a href="#logistica" class="link-nav-interna">Logistica</a>
            </li>

        </ul>
      
    </div> -->


   

    <?php /**
 * * Clientes são inseridos manualmente*
 *  no include abaixo
 */?>



    <?php //include(TEMPLATEPATH . '/includes/YAD/logistica.php'); ?>


    <div class="section-footer">
        <div class="container-footer w-container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                class="img-footer">
            <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
        </div>
    </div>


    <?php get_footer(); ?>