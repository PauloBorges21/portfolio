<?php
//Template Name: Page Clientes

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

<?php include(TEMPLATEPATH . '/inc/menu-pages.php'); ?>

<style>
    .banner-clientes {
        height: 350px;
        background-image: url(<?php the_field('banner_imprensa')?>);
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
    }

</style>

<div class="banner-clientes">
    <div class="container-banner-imprensa w-container">
        <!--  Aqui é uma Tag <h1>    --><?php the_field('titulo_clientes') ?>
    </div>
</div>


<div class="section-imprensa">
    <div class="container-clientes w-container">
        <a href="javascript:history.go(-1)" class="link-voltar">Voltar</a>


        <?php
        $url = $_GET['getUrl'];
        echo $url;
        echo  $tag;
        
?>
<?php
        if ($url == 102) {
            // Rai
            $tag = 'rai';
            $postType = array('cases_rai','digital','design','midia_eletronica','midia_impressa');


        } 
        if ($url == 104){
            $tag = 'ani';
            // ANI
            $postType = array('filmes_ani','portfolio');

        }

        if ($url == 110) {
            // Awaken
            $tag = 'awaken';
            $postType = array('apresentacao','cases_aw');
        } 

        if ($url == 116) {
            // OR
                 
                 $tag = 'or';
                 $postType = array('sistemas','apps','sites');

        }
         if ($url == 119) {
            // NES
        } 
        if ($url == 116) {

        } 
        if ($url == 108) {
            // TEOLA
        } 
        if ($url == 112) {
                // TOV
        } 
        if ($url == 114) {
        // YAD
        }
        echo $url;
        echo  $tag;

        if (have_rows('apresentaCards', $url)) { //Se existir banner
            
               
            while (have_rows('apresentaCards', $url)) {
                the_row(); //Percorre Todos os banners
                
                $getCliente = get_sub_field('nome_do_cliente');
                $getLogo = get_sub_field('logo_pagina_de_clientes', $url);
                $getCliente = preg_replace('/[ -]+/', '-', $getCliente);
                $getCliente = mb_strtolower($getCliente, 'UTF-8');
                //$exibe = get_sub_field('midia_eletronica');
              
            
                foreach ($postType as $tipo) {
               
                   // var_dump($tipo);
               
                $args = array(
                    'category_name' => $getCliente,
                    'post_type' => array($postType[0],$postType[1],$postType[2],$postType[3],$postType[4]),
                    'numberposts' => 1,
                    //'posts_per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    
                    // 'taxonomies' => array($getCliente),
                     'tag'=> array($tag),
                    //'meta_key' => $getCliente,
                   // 'meta_value' => $getCliente,
                    //'post_type' => 'clientes',
                    'suppress_filters' => true,
    
                    //'offset' => 1
                );

            } //endforeach
//
//                        if ($exibe == "Sim") {    // Se selecionado para exibir
////inicio do loop de posts
//
//                            ?>


                <?php $my_query = new Wp_Query($args);

                $my_posts = get_posts($args);
                $post_categories = get_terms($args);
                foreach ($my_posts as $post) : setup_postdata($post);

                    $tags = wp_get_post_tags($post->ID);
                    $my_query = new Wp_Query($args);
                    $my_posts = get_posts($args);
                    $post_categories = get_terms($args);


                    $getCliente = mb_strtolower($getCliente, 'UTF-8');
                    $title = get_the_title($post->ID, '', '', false);
                    $content = get_the_content($post->ID, '', '', false);


                    ?>

                    <div class="item-sllider-interna w-slide"
                         data-slidermd="<?php echo $getCliente ?>-<?php echo $post->ID ?>"
                         onclick="SliderModalPrincipal(this)" data-menu="modal-midiaEletronica">

                        <!--            <div class="content-slide" data-ix="hover-item-slide">-->
                            <form action="<?php echo get_site_url(); ?>/clientes-agencia" method="POST" >
                        <input hidden="" name="getUrl" value="<?= $url ?>">
                        <input hidden="" name="postType" value="<?= $postType ?>">
                        <input hidden="" name="getCliente" value="<?= $getCliente ?>">
                        <input hidden="" name="idPost" value="<?= $post->ID ?>">
                        <input hidden="" name="imagemDestaque" value="<?php echo the_field('imagem_modal'); ?>">
                        <input hidden="" name="tituloDestaque" value="<?php echo $title ?>">
                        <input hidden="" name="contentDestaque" value="<?php echo $content ?>">
                        <div class="content-slide" style="padding-top:60px;">
                        
                            <input type="image" src="<?php echo $getLogo ?>" alt="" class="" style="width: 100%; display: inline-block;">
                            <div class="logo-cliente-slide"
                                 style="background-image: linear-gradient(180deg, transparent 60%, rgba(0, 0, 0, -0.1));">
                                <input type="image" src="<?php echo $getLogo; ?>" alt="" class="logo-slide" style="opacity: 0">
                            </div>
                            
                        </div>
                        </form>

                        <form action="/" data-form="<?php echo $getCliente ?>-<?php echo $post->ID ?>">
                            <input hidden="" name="imagemDestaque"
                                   value="<?php echo the_field('imagem_modal'); ?>">
                            <input hidden="" name="tituloDestaque" value="<?php echo $title ?>">
                            <input hidden="" name="contentDestaque" value="<?php echo $content ?>">

                        </form>
                     

                        <div class="container-videos-relacionados" id="modalSlideVejaMais" style="display: none" >
                            <h3 class="h3-conteudo">Veja também</h3>
                            <ul class="ul-veja-tambem w-clearfix w-list-unstyled">



                                <?php



                                $args = array(
                                    'numberposts' => -1,
                                    //'posts_per_page' => 1,
                                    'category' => array($category),
                                    'orderby' => 'date',
                                    'order' => 'DESC',
                                    'include' => array(),
                                    'exclude' => array(),
                                    'tag' => $getCliente,
                                    'meta_key' => '',
                                    'meta_value' => '',
                                    'post_type' => 'post',
                                    'suppress_filters' => true,

                                    'offset' => 1
                                );

                                $my_query = new Wp_Query($args);

                                $my_posts = get_posts($args);
                                $post_categories = get_terms($args);
                                foreach ($my_posts as $post) : setup_postdata($post);

                                    $tags = wp_get_post_tags($post->ID);
                                    $my_query = new Wp_Query($args);
                                    $my_posts = get_posts($args);
                                    $post_categories = get_terms($args);


                                    $getCliente = mb_strtolower($getCliente, 'UTF-8');
                                    $title = get_the_title($post->ID, '', '', false);
                                    $content = get_the_content($post->ID, '', '', false);


                                    ?>
                                    <form action="/" data-form="SliderVejaMais-<?php echo $post->ID ?>">

                                        <?php if (have_rows('slider_modal_post')): while (have_rows('slider_modal_post')) : the_row(); ?>

                                            <?php if (have_rows('imagem_slide_modal')): while (have_rows('imagem_slide_modal')) : the_row(); ?>

                                                <?php $imagemSliderModal = get_sub_field('imagem'); ?>

                                                <input hidden="" name="imagemModalVejaMais" value="<?php echo $imagemSliderModal ?>">

                                            <?php endwhile; else : endif; ?>

                                            <?php if (have_rows('url_slide_modal')): while (have_rows('url_slide_modal')) : the_row(); ?>
                                                <?php $urlSliderModal = get_sub_field('url'); ?>

                                                <input hidden="" name="urlVideoVejaMais" value="<?php echo $urlSliderModal ?>">

                                            <?php endwhile; else : endif; ?>
                                        <?php endwhile; else : endif; ?>

                                    </form>




                                <?php
                                endforeach;
                                // endforeach; ?>


                            </ul>
                        </div>

                        <form action="/"
                              data-form="Slider-<?php echo $getCliente ?>-<?php echo $post->ID ?>">

                            <?php if (have_rows('slider_modal_post')): while (have_rows('slider_modal_post')) : the_row(); ?>

                                <?php if (have_rows('imagem_slide_modal')): while (have_rows('imagem_slide_modal')) : the_row(); ?>

                                    <?php $imagemSliderModal = get_sub_field('imagem'); ?>

                                    <input hidden="" name="imagemModal"
                                           value="<?php echo $imagemSliderModal ?>">




                                <?php endwhile; else : endif; ?>

                                <?php if (have_rows('url_slide_modal')): while (have_rows('url_slide_modal')) : the_row(); ?>
                                    <?php $urlSliderModal = get_sub_field('url'); ?>

                                    <input hidden="" name="urlVideo"
                                           value="<?php echo $urlSliderModal ?>">

                                <?php endwhile; else : endif; ?>
                            <?php endwhile; else : endif; ?>

                        </form>


                    </div>





                <?php
                endforeach; ?>


                <!--        --><?php
//
//        } //Fim Se selecionado para exibir
//        else {
//        ?>


                <?php
            } //Fim else
            //}
        }

        //fim do loop de posts
        ?>
    </div>



</div>
</div>




<?php include(TEMPLATEPATH . '/inc/modalSlider.php'); ?>


<div class="section-footer">
    <div class="container-footer w-container"><img
                src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-rai-branco.png" alt=""
                class="img-footer">
        <div>copyright © 2019 grupo rái - todos os direitos reservados.</div>
    </div>
</div>








<?php
foreach (get_categories("child_of={$category}") as $cat) {
    list($post) = get_posts("numberposts=100&category={$cat->term_id}");
    // Faça o que quiser com o post aqui

    echo the_title();
    echo "<br>";
}
?>




<?php get_footer(); ?>
