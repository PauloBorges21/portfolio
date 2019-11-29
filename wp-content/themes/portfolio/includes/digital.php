<div id="digital" class="section-sliders">
    <h2 class="h2-interna">digital</h2>
    <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
        <div class="mask-sllider-interna w-slider-mask">


            <?php  if( have_rows('apresentaCards',102)){ //Se existir banner

                while ( have_rows('apresentaCards',102) ) { the_row(); //Percorre Todos os banners

                    $getCliente = get_sub_field('nome_do_cliente');
                    $getLogo = get_sub_field('logo',102);
                    $getCliente = preg_replace('/[ -]+/' , '-' , $getCliente);
                    $exibe = get_sub_field('digital');



                    $args = array(
                        'numberposts' => 1,
                        //'posts_per_page' => 1,
                        'category' => array(19),
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        'tag' => $getCliente,
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'post',
                        'suppress_filters' => true,

                        //'offset' => 1
                    );

//inicio do loop de posts
//var_dump($post_categories);




                    if ($exibe == "Sim"){	// Se selecionado para exibir
//inicio do loop de posts

                        ?>



                        <?php    $my_query = new Wp_Query($args);

                        $my_posts = get_posts($args);
                        $post_categories = get_terms($args);
                        foreach ($my_posts as $post) : setup_postdata($post);

                            $tags = wp_get_post_tags($post->ID);
                            $my_query = new Wp_Query($args);
                            $my_posts = get_posts($args);
                            $post_categories = get_terms($args);


                            $getCliente = mb_strtolower($getCliente,'UTF-8');
                            $title = get_the_title($post->ID, '', '', false);
                            $content = get_the_content($post->ID, '', '', false);


                            ?>

                            <div class="item-sllider-interna w-slide" data-slidermd="<?php echo $getCliente?>-<?php echo $post->ID?>" onclick="teste(this)">

                                <!--            <div class="content-slide" data-ix="hover-item-slide">-->
                                <div class="content-slide">
                                    <img src="<?php echo the_field('thumb_card_video')?>" alt="" class="img-slide-conteudos">
                                    <div class="logo-cliente-slide">
                                        <img src="<?php echo $getLogo;?>" alt="" class="logo-slide">
                                    </div>
                                </div>

                                <form action="/" data-form="<?php echo $getCliente?>-<?php echo $post->ID?>">
                                    <input hidden="" name="imagemDestaque" value="<?php echo the_field('imagem_modal');?>">
                                    <input hidden="" name="tituloDestaque" value="<?php echo $title?>">
                                    <input hidden="" name="contentDestaque" value="<?php echo $content?>">
                                </form>
                            </div>


                        <?php
                        endforeach;?>


                        <?php

                    } //Fim Se selecionado para exibir
                    else{
                        ?>


                        <br/><br/>
                        <?php
                    } //Fim else
                }
            }

            //fim do loop de posts
            ?>
        </div>
        <div class="arrow-sllider-interna left w-slider-arrow-left">
            <div class="w-icon-slider-left"></div>
        </div>
        <div class="arrow-sllider-interna right w-slider-arrow-right">
            <div class="w-icon-slider-right"></div>
        </div>
        <div class="nav-sllider-interna w-slider-nav w-round"></div>
    </div>
</div>

<div class="modal-conteudo-interna" id="modal-midiaEletronica">
    <div class="box-content-modal">
        <div class="container-video-modal">
            <div class="box-destq-conteudo" data-ix="abrir-modal-video-full">
                <!--                <img src="" alt="" class="img-destq-conteudo">-->
            </div>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar.png" alt=""
                 class="btn-fechar-modal-conteudo" data-ix="fechar-modal-conteudo-interna">
        </div>
        <div class="desc-video-modal">
            <!--            <h2 class="h2-conteudo">Teste</h2>-->
            <!--            <div>Teste 2</div>-->
        </div>
    </div>
</div>

<script>
    function teste(obj){
        debugger;
        var idMidia = obj.getAttribute('data-slidermd');

        var modal = document.getElementById("modal-midiaEletronica");

        var formCardMidia = document.querySelector('[data-form="' + idMidia + '"]');

        /*Imagem de destaque do Modal*/
        var imgDest = formCardMidia.querySelector("[name='imagemDestaque']");
        var criarImgDest = document.createElement('img');
        criarImgDest.classList.add("img-destq-conteudo");
        criarImgDest.src = imgDest.value;
        var boxModal = modal.querySelector(".box-destq-conteudo");
        boxModal.appendChild(criarImgDest);


        /*Título de destaque do Modal*/
        var tituloDest = formCardMidia.querySelector("[name='tituloDestaque']");
        var criarTituloDest = document.createElement('h2');
        criarTituloDest.classList.add("h2-conteudo");
        criarTituloDest.innerText = tituloDest.value;
        var textoModal = modal.querySelector(".desc-video-modal");
        textoModal.appendChild(criarTituloDest);


        /*Content de destaque do Modal*/
        var contentDest = formCardMidia.querySelector("[name='contentDestaque']");
        var criarContentDest = document.createElement('div');
        criarContentDest.innerHTML = contentDest.value;
        textoModal.appendChild(criarContentDest);


        // var infoInputs = formCardMidia.getElementsByTagName('input');
        //
        //
        // for(var i = 0; i < infoInputs.length; i++){
        //
        //     if(infoInputs[i].getElementsByName == imagemDestaque ){
        //
        //     }
        //
        //
        //     var img = document.createElement('img');
        //     img.classList.add("img-destq-conteudo");
        //     img.src = nameImg[i].value;
        //
        //     modalImg.appendChild(div);
        //     div.appendChild(img);
        // }


        modal.style.display='block';
        modal.style.transformStyle='preserve-3d';
        modal.style.opacity='1';
        modal.style.transform='scaleX(1) scaleY(1) scaleZ(1)';
        modal.style.transition='transform 600ms ease 0s, opacity 350ms ease 0s';

        // console.log(infoInputs);
    }
</script>

























<!---->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide">-->
<!--                 <img src="images/img-prev-warren.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide">-->
<!--                    <img src="images/logo-warren.png" alt="" class="logo-slide">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-usaflex.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-usaflex.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-adidas.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-adidas.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kiss.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kiss.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-ricardo.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-ricardo.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item-sllider-interna w-slide">-->
<!--            <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
<!--                <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
