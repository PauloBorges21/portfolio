<?php
$home = get_page_by_title('Home');

;?>


<div class="container-modal-premios">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-premios">
    <div class="box-modal">
        <h2 class="h2-modal">P r ê m i o s</h2>
        <ul class="ul-clientes w-clearfix w-list-unstyled">

            <?php if(have_rows('modal_de_premios',$home)): while(have_rows('modal_de_premios',$home)) : the_row(); ?>

                <li class="li-clientes">
                    <img src="<?php the_sub_field('imagem_logo_premio',$home)?>;" alt="" class="image"></li>


            <?php endwhile; else : endif; ?>
        </ul>
    </div>
</div>
