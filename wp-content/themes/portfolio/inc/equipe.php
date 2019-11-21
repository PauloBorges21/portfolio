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

        </ul>
    </div>
</div>

