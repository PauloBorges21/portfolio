<?php
$home = get_page_by_title('Home');

;?>
<div class="container-modal-equipe">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-equipe">
    <div class="box-modal equipe">
        <ul class="ul-equipe w-clearfix w-list-unstyled">

            <?php if(have_rows('editar_equipe', $home)): while(have_rows('editar_equipe', $home)) : the_row(); ?>

                <li class="li-equipe" data-ix="hover-equipe">
                    <img src="<?php the_sub_field('imagem_do_fun', $home)?>" alt="" class="img-equipe">
                    <div class="hover-equipe">
                        <h2 class="nome-equipe"><?php the_sub_field('nome_do_func' , $home)?></h2>
                        <h3 class="cargo-equipe"><?php the_sub_field('cargo' , $home)?></h3>
                        <div class="desc-equipe"><?php the_sub_field('descricao' , $home)?></div>
                    </div>
                </li>
            <?php endwhile; else : endif; ?>

            <li class="li-equipe" data-ix="hover-equipe">
                <img src="images/equipe-02.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">sérgio nakano</h2>
                    <h3 class="cargo-equipe">VP</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe">
                <img src="images/equipe-03.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">cleia barros</h2>
                    <h3 class="cargo-equipe">VP de Atendimento e Integração</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-04.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Mauricio Cavalcanti</h2>
                    <h3 class="cargo-equipe">VP de Criação</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-05.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Guilherme Fleury</h2>
                    <h3 class="cargo-equipe">Diretor de Criação</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-06.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Renata Amarello</h2>
                    <h3 class="cargo-equipe">Diretora de Mídia</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-07.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Roberta Mendes</h2>
                    <h3 class="cargo-equipe">Diretora de Atendimento</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-08.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Guilherme Correia</h2>
                    <h3 class="cargo-equipe">Diretor de Tecnologia</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-09.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Ricardo Domingues</h2>
                    <h3 class="cargo-equipe">Diretor de Criação</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-10.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Roger Nunes</h2>
                    <h3 class="cargo-equipe">Diretor de interação e Processos</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-11.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Alessandra Inson</h2>
                    <h3 class="cargo-equipe">Diretora de Atendimento</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-12.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Carlos Passos</h2>
                    <h3 class="cargo-equipe">Diretor de Criação</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-13.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Clóvis Gonzales</h2>
                    <h3 class="cargo-equipe">Diretor de Produção</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-14.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Marcos Dyonisio</h2>
                    <h3 class="cargo-equipe">Diretor de Criação</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-15.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Marcus Hoenen</h2>
                    <h3 class="cargo-equipe">VP TOV</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-16.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Min Park</h2>
                    <h3 class="cargo-equipe">Diretor de Criação</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-17.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Priscilla Marcossi</h2>
                    <h3 class="cargo-equipe">Gerente de B.I.</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-18.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Sandro Costa</h2>
                    <h3 class="cargo-equipe">Gerente de Logística</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-20.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Cássio Guiot</h2>
                    <h3 class="cargo-equipe">Head de redação criativa</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-21.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Fernando Veiga</h2>
                    <h3 class="cargo-equipe">Diretor de Produção Gráfica</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-22.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Kauana Neves</h2>
                    <h3 class="cargo-equipe">Gerente de PR</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-19.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Camila Maschietto</h2>
                    <h3 class="cargo-equipe">VP ANI</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
            <li class="li-equipe" data-ix="hover-equipe"><img src="images/equipe-23.jpg" alt="" class="img-equipe">
                <div class="hover-equipe">
                    <h2 class="nome-equipe">Adilson Poá</h2>
                    <h3 class="cargo-equipe">Coordenador de finalização</h3>
                    <div class="desc-equipe">Lorem Ipsum  nibh vel velit auctor aliquet sollicitudin lorem quis bibendum auctor nisi elit consequat ipsum nec sagittis sem nibh id elit.</div>
                </div>
            </li>
        </ul>
    </div>
</div>