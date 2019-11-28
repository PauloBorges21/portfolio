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

<?php include(TEMPLATEPATH . '/includes/reel.php'); ?>




    <div class="nav-interna w-clearfix">
        <ul class="ul-nav-interna w-clearfix w-list-unstyled">
            <li class="li-nav-interna w-clearfix">
                <a href="#midia-eletronica" class="link-nav-interna">Mídia Eletrônica</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#cases-2019" class="link-nav-interna">cases</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#" class="link-nav-interna">Mídia Impressa</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#digital" class="link-nav-interna">Digital</a>
            </li>

            <li class="li-nav-interna w-clearfix">
                <a href="#" class="link-nav-interna">Design &amp; VM</a>
            </li>
        </ul>
        <a href="#" class="link-nav-interna" data-ix="abrir-modal-clientes">clientes</a>
    </div>

    <?php /**
 * * Clientes são inseridos manualmente*
  *  no include abaixo
  */?>

    <?php include(TEMPLATEPATH . '/includes/midia-eletronica.php'); ?>

    <?php /**
 * * Clientes são inseridos manualmente*
 *  no include abaixo
 */?>

    <?php include(TEMPLATEPATH . '/includes/digital.php'); ?>






                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-adidas.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-adidas.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kiss.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kiss.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-ricardo.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-ricardo.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->

                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->
                <!---->
                <!--        <div class="item-sllider-interna w-slide">-->
                <!--          <div class="content-slide" data-ix="hover-item-slide">-->
                <!--              <img src="images/img-prev-kop.jpg" alt="" class="img-slide-conteudos">-->
                <!--            <div class="logo-cliente-slide">-->
                <!--                <img src="images/logo-kop.png" alt="" class="logo-slide">-->
                <!--            </div>-->
                <!--          </div>-->
                <!--        </div>-->


    <div id="cases-2019" class="section-sliders">
        <h2 class="h2-interna">cases 2019</h2>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
            <div class="mask-sllider-interna w-slider-mask">
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-samsung.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-samsung.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-ache.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-ache.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-fogodecao.jpg"
                                                                               alt="" class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-swift.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-guardian.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-guardian.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-yakult.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-yakult.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-latam.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-latam.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-cbc.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-ofner.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
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
    <div id="cases-2018" class="section-sliders">
        <h2 class="h2-interna">cases 2018</h2>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
            <div class="mask-sllider-interna w-slider-mask">
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-samsung.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-samsung.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-ache.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-ache.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-fogodecao.jpg"
                                                                               alt="" class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-swift.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-guardian.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-guardian.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-yakult.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-yakult.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-latam.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-latam.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-cbc.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-ofner.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
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
    <div id="cases-2017" class="section-sliders">
        <h2 class="h2-interna">cases 2017</h2>
        <div data-animation="slide" data-duration="500" data-infinite="1" class="sllider-interna w-slider">
            <div class="mask-sllider-interna w-slider-mask">
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-samsung.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-samsung.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-ache.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-ache.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-fogodecao.jpg"
                                                                               alt="" class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-swift.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-guardian.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-guardian.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-yakult.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-yakult.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-latam.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-latam.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-cbc.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-ofner.png" alt="" class="logo-slide">
                        </div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
                <div class="item-sllider-interna w-slide">
                    <div class="content-slide" data-ix="hover-item-slide"><img src="images/img-prev-kop.jpg" alt=""
                                                                               class="img-slide-conteudos">
                        <div class="logo-cliente-slide"><img src="images/logo-kop.png" alt="" class="logo-slide"></div>
                    </div>
                </div>
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

    <div class="modal-conteudo-interna">
        <div class="box-content-modal">
            <div class="container-video-modal">
                <!--
      #################################
      #MODAL POPUP Puxa Imagem Título e Conteúdo
      #################################
      -->


                <?php
                //clwp_postsbycategory();
                //argumentos do loop de posts da categoria. Trazendo o ultimo projeto da Agencia
                $args = array(
                    'numberposts' => 1,
                    'category' => array(15),
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,

                    //'offset' => 1
                );
                $my_posts = get_posts($args);
                $post_categories = get_terms($args);
                //inicio do loop de posts
                //var_dump($post_categories);
                if ($my_posts) : foreach ($my_posts

                as $post) :
                setup_postdata($post);

                $title = get_the_title($post->ID, '', '', false);
                $content = get_the_content($post->ID, '', '', false);
                $cat_nome = get_the_category($post->ID);
                //$verificaCategoria = $cat_nome[1]->slug;
                //var_dump($my_posts);

                ?>


                <div class="box-destq-conteudo" data-ix="abrir-modal-video-full">
                    <img src="<?php echo the_field('imagem_modal') ?>" alt="" class="img-destq-conteudo">
                </div>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar.png" alt=""
                     class="btn-fechar-modal-conteudo" data-ix="fechar-modal-conteudo-interna">
            </div>
            <div class="desc-video-modal">
                <h2 class="h2-conteudo"><?= $title ?></h2>
                <div><?= $content ?> hhh</div>
            </div>

            <?php endforeach;
            endif; ?>
            <!--
    #################################
    #MODAL POPUP VEJA RELACIONADO A CATEGORIA RAI
    #################################
    -->
            <div class="container-videos-relacionados">
                <h3 class="h3-conteudo">Veja também</h3>
                <ul class="ul-veja-tambem w-clearfix w-list-unstyled">

                    <?php

                    //argumentos do loop de posts da categoria. Trazendo o ultimo projeto da Agencia
                    $args = array(
                        'numberposts' => 15,
                        'category' => array(15),
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'post',
                        'suppress_filters' => true,

                        //'offset' => 1
                    );
                    $my_query = new Wp_Query($args);

                    if ($my_query->have_posts()) :
                        while ($my_query->have_posts()) : $my_query->the_post();

//echo var_dump($my_query);
                            ?>

                            <!--    $title = get_the_title($post->ID, '', '', false);-->
                            <!--    $content = get_the_content($post->ID, '', '', false);-->
                            <!--    $cat_nome = get_the_category( $post->ID );-->
                            <!--    $verificaCategoria = $cat_nome[1]->slug;-->
                            <!--    var_dump($my_posts);-->
                            <!---->
                            <!--    ?>-->


                            <li class="li-veja-tambem">
                                <div class="box-img-vejatambem" data-ix="abrir-modal-video-full">
                                    <img src="<?php echo the_field('imagem_modal'); ?>" alt=""
                                         class="img-prev-veja-tambem">
                                </div>
                            </li>


                            <div class="modal-video-full" id="<?php echo the_field('dd') ?>">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/btn-fechar.png" alt=""
                                     class="fechar-modal-videofull" data-ix="fechar-modal-vid-full">
                                <div style="padding-top:56.17021276595745%" id="w-node-3618fab8c506-adef43ab"
                                     class="w-embed-youtubevideo videofull">
                                    <iframe src="https://www.youtube.com/embed/<?php echo the_field('url_youtube') ?>?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0"
                                            frameborder="0"
                                            style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto"
                                            allow="autoplay; encrypted-media" allowfullscreen="">

                                    </iframe>
                                </div>
                            </div>

                        <?php endwhile;; endif; //fim do loop de posts ?>

                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem" data-ix="abrir-modal-slide-full-2">-->
                    <!--                <img src="images/prev-veja-tambem-02.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->

                    <!---->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-03.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!---->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-04.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!---->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-05.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!---->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-06.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!---->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-07.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!---->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-08.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                    <!--          <li class="li-veja-tambem">-->
                    <!--            <div class="box-img-vejatambem">-->
                    <!--                <img src="images/prev-veja-tambem-09.jpg" alt="" class="img-prev-veja-tambem">-->
                    <!--            </div>-->
                    <!--          </li>-->
                </ul>
            </div>
        </div>
    </div>


    <div class="modal-video-full"><img src="images/btn-fechar.png" alt="" class="fechar-modal-videofull"
                                       data-ix="fechar-modal-vid-full">
        <div style="padding-top:56.17021276595745%" id="w-node-3618fab8c506-adef43ab"
             class="w-embed-youtubevideo videofull">
            <iframe src="https://www.youtube.com/embed/Y8d-blNf1ZU?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0"
                    frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto"
                    allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        </div>
    </div>



    <!--
    #################################
    #MODAL POPUP
    #################################
    -->

<?php
//clwp_postsbycategory();
//argumentos do loop de posts da categoria. Trazendo o ultimo projeto da Agencia
$args = array(
    'numberposts' => 1,
    'category' => array(15),
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => array(),
    'exclude' => array(),
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'suppress_filters' => true,

    //'offset' => 1
);
$my_posts = get_posts($args);
$post_categories = get_terms($args);
//inicio do loop de posts
//var_dump($post_categories);
if ($my_posts) : foreach ($my_posts as $post) : setup_postdata($post);

    $title = get_the_title($post->ID, '', '', false);
    $content = get_the_content($post->ID, '', '', false);
    $cat_nome = get_the_category($post->ID);
    //$verificaCategoria = $cat_nome[1]->slug;
//var_dump($my_posts);

    ?>


    <div class="modal-video-full">
        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/btn-fechar.png" alt=""
             class="fechar-modal-videofull" data-ix="fechar-modal-vid-full">
        <div style="padding-top:56.17021276595745%" id="w-node-3618fab8c506-adef43ab"
             class="w-embed-youtubevideo videofull">
            <iframe src="https://www.youtube.com/embed/<?php echo the_field('url_youtube') ?>?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0"
                    frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto"
                    allow="autoplay; encrypted-media" allowfullscreen="">

            </iframe>
        </div>
    </div>
<?php endforeach; endif; ?>
    <!--
    #################################
    #MODAL POPUP Final
    #################################
     -->


    <div class="modal-slide-full"><img src="images/btn-fechar.png" alt="" class="fechar-modal-videofull"
                                       data-ix="fechar-modal-slide-full-2">
        <div data-animation="slide" data-duration="500" data-infinite="1" class="slider-full w-slider">
            <div class="mask-slider-full w-slider-mask">
                <div class="slide-full w-slide">
                    <div class="content-slide-full"><img src="images/case-ex-01.jpg"
                                                         srcset="images/case-ex-01.jpg 500w, images/case-ex-01.jpg 800w, images/case-ex-01.jpg 1080w, images/case-ex-01.jpg 1280w"
                                                         sizes="100vw" alt="" class="img-slider-full"></div>
                </div>
                <div class="slide-full w-slide">
                    <div class="content-slide-full"><img src="images/case-ex-02.jpg"
                                                         srcset="images/case-ex-02.jpg 500w, images/case-ex-02.jpg 800w, images/case-ex-02.jpg 1080w, images/case-ex-02.jpg 1280w"
                                                         sizes="100vw" alt="" class="img-slider-full"></div>
                </div>
                <div class="slide-full w-slide">
                    <div class="content-slide-full"><img src="images/case-ex-03.jpg"
                                                         srcset="images/case-ex-03.jpg 500w, images/case-ex-03.jpg 800w, images/case-ex-03.jpg 1080w, images/case-ex-03.jpg 1280w"
                                                         sizes="100vw" alt="" class="img-slider-full"></div>
                </div>
                <div class="slide-full w-slide">
                    <div class="container-video-slider">
                        <div style="padding-top:56.17021276595745%" id="w-node-ca5029a2a8fd-adef43ab"
                             class="video-slider w-video w-embed">
                            <iframe class="embedly-embed"
                                    src="https://cdn.embedly.com/widgets/media.html?src=https%3A%2F%2Fwww.youtube.com%2Fembed%2FY8d-blNf1ZU%3Ffeature%3Doembed&url=https%3A%2F%2Fwww.youtube.com%2Fwatch%3Fv%3DY8d-blNf1ZU&image=https%3A%2F%2Fi.ytimg.com%2Fvi%2FY8d-blNf1ZU%2Fhqdefault.jpg&key=96f1f04c5f4143bcb0f2e68c87d65feb&type=text%2Fhtml&schema=youtube"
                                    scrolling="no" frameborder="0" allow="autoplay; fullscreen"
                                    allowfullscreen="true"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="arrow-slide-full esq w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="arrow-slide-full dir w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="nav-slide-full w-slider-nav w-round"></div>
        </div>
    </div>
    <div class="container-modal-clientes"><img src="images/btn-fechar-modal.png" id="fecha-modal" alt=""
                                               class="btn-fechar-modal" data-ix="fechar-modal-clientes">
        <div class="box-modal clientes">
            <h2 class="h2-modal">G l o b a i s</h2>
            <ul class="ul-clientes w-clearfix w-list-unstyled">
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
            </ul>
            <h2 class="h2-modal">L o c a i s</h2>
            <ul class="ul-clientes w-clearfix w-list-unstyled">
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
                <li class="li-clientes"><img src="images/logo-subway.png" alt=""></li>
            </ul>
            <h2 class="h2-modal">principais clientes atendidos</h2>
            <ul class="ul-clientes w-clearfix w-list-unstyled">
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
                <li class="li-clientes principais"><img src="images/logo-subway.png" alt="">
                    <div>x anos</div>
                </li>
            </ul>
        </div>
    </div>


<?php get_footer(); ?>