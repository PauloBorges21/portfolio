<?php
$home = get_page_by_title('Home');

;?>


<div class="container-modal-expertise">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/btn-fechar-modal.png" id="fecha-modal" alt="" class="btn-fechar-modal" data-ix="fechar-modal-expertise">
    <div class="box-videomodal w-embed w-iframe">
        <iframe class="youtube-video" width="100%" height="100%" src="https://www.youtube-nocookie.com/embed/<?php  the_field('link_do_video_expertise',$home);  ?>?enablejsapi=1&version=3&playerapiid=ytplayer"  frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
        </iframe>
    </div>
</div>