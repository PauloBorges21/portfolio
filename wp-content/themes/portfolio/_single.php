<?php
include('includes/variaveis.php');
get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php 
$imagem_id = get_field('background_interna');
$background_large = wp_get_attachment_image_src($imagem_id, 'large');
$background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
?>



<!-- Banner -->
<?php include(TEMPLATEPATH . '/includes/banner-post.php');?>

<script>
  var icoData, imgSrc, newSrc;

  function mudaImagemOver(obj) {
    icoData = $(obj).attr('data-w-id');
    imgSrc = $(obj).attr('src');
    newSrc = icoData + "_w";
    imgSrc = imgSrc.replace(icoData, newSrc);

    obj.src = imgSrc;
  }

  function mudaImagemOut(obj) {
    var oldSrc = newSrc.replace("_w", "");
    imgSrc = imgSrc.replace(newSrc, oldSrc);

    obj.src = imgSrc;
  }
</script>

<div class="section section-banner-interna"></div>
<div class="section section-container-interna">
  <div class="container-interna">
    <div class="row-conteudo w-row">

      <div class="col-conteudo col-conteudo1 w-col w-col-1" style="pointer-events: none; opacity:0">
        <a href="https://www.facebook.com/AbbottBrasil" class="btn-share w-inline-block">
          <img src="<?= $caminho_tema; ?>/images/icon-face.png" data-w-id="icon-face" alt="icone de facebook"
            onmouseover="mudaImagemOver(this)" onmouseout="mudaImagemOut(this)" class="icon-btn-share">
        </a>

        <a href="#" class="btn-share w-inline-block">
          <img src="<?= $caminho_tema; ?>/images/icon-twitter.png" data-w-id="icon-twitter" alt="icone de twitter"
            onmouseover="mudaImagemOver(this)" onmouseout="mudaImagemOut(this)" class="icon-btn-share">
        </a>

        <a href="#" class="btn-share w-inline-block">
          <img src="<?= $caminho_tema; ?>/images/icon-email.png" data-w-id="icon-email" alt="icone de email"
            onmouseover="mudaImagemOver(this)" onmouseout="mudaImagemOut(this)" class="icon-btn-share">
        </a>

        <a href="#" class="btn-share w-inline-block">
          <img src="<?= $caminho_tema; ?>/images/icon-whatsapp.png" data-w-id="icon-whatsapp" alt="icone de whatsapp"
            onmouseover="mudaImagemOver(this)" onmouseout="mudaImagemOut(this)" class="icon-btn-share">
        </a>

        <a href="#" class="btn-share w-inline-block">
          <img src="<?= $caminho_tema; ?>/images/icon-shareUp.png" data-w-id="icon-shareUp" alt="icone de compartilhamento"
            onmouseover="mudaImagemOver(this)" onmouseout="mudaImagemOut(this)" class="icon-btn-share">
        </a>
      </div>

      <div class="col-conteudo col-conteudo2 w-col w-col-7">



        <div class="box-post">
          <h1 class="h1-post"><?php the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        

            <div class="publicidade">
              
          </div> 
        </div>
      </div>

      <div class="col-conteudo col-conteudo3 w-col w-col-4">
        <h2 class="h2-confira">confira também</h2>
        <ul class="ul-confira w-list-unstyled">

          <?php
                //argumentos do loop de posts da categoria
                $args = array(
                  
                    'posts_per_page' => "3",
                    'category' =>$post->ID,
                    'orderby' => 'rand',
                    'order' => 'DES',
                    'include' => array(),
                    'exclude' => $post->ID, //não apresentando o atual 
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                    'offset' => -1
                );
                $my_query= null;
                $my_query= new Wp_Query($args);

                if($my_query->have_posts()) :
                while ( $my_query-> have_posts()) : $my_query->the_post();
                ?>

          <?php
                $title = get_the_title($post->ID, '', '', false);

                if(strlen($title) > 45){
                    $titulo = substr( $title, 0, 45 ) ."<strong>"." Leia Mais"."</strong>";
                }else{
                    $titulo = $title;
                }


                ?>

          <li class="li-confira">
            <a href="<?php the_permalink();?>" class="link-confira w-inline-block">
              <div class="w-row">
                
                <div class="w-col w-col-5">
                  <img src="<?php the_field('thumb_post' , $post->ID );?>" alt="imagem-post">
                </div>
                <div class="w-col w-col-7">
                  <h3 class="h3-confira"><?php echo $titulo;?>
                    <?php $categories = get_the_category(); ?>
                    <div class="tag-confira"><?= esc_html( $categories[0]->name); ?></div>
                </div>
              </div>
            </a>
          </li>
          <?php endwhile; ; endif; //fim do loop de posts ?>


        </ul>
       
      </div>
    </div>
  </div>

  <div class="container-interna confira">
    <h2 class="h2-confira">confira também</h2>
    <div class="row-vejamais w-row">

      <?php
                //argumentos do loop de posts da categoria
                $args = array(
                  
                    'posts_per_page' => "3",
                    'category' =>$post->ID,
                    'orderby' => 'rand',
                    'order' => 'DES',
                    'include' => array(),
                    'exclude' => $post->ID, //não apresentando o atual 
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                    'offset' => -1
                );
                $my_query= null;
                $my_query= new Wp_Query($args);

                if($my_query->have_posts()) :
                while ( $my_query-> have_posts()) : $my_query->the_post();
                    ?>
                      <?php $title = get_the_title($post->ID, '', '', false);
                        if(strlen($title) > 105){
                            $titulo = substr( $title, 0, 105 ) . " [...]";
                        }else{
                            $titulo = $title;
                        }


                      ?>

      <div class="col-vejamais w-clearfix w-col w-col-4 w-col-stack">
        <div class="img-veja">
          <a class="decotheper" href="<?php the_permalink()?>">
          <img src="<?php the_field('thumb_post' , $post->ID );?>" alt="imagem-post">
        </div>
        <div class="box-info-vejamais interna">
          <h2 class="h2-veja"><?php echo $titulo; ?></h2><br>
          <?php $content= get_the_content($post->ID, '', '', false);
                    // if(strlen($content) > 56){
                    //     $conteudo = substr( $content, 0, 56 ) . " [...]";
                    // }else{
                    //     $conteudo = $content;
                    // }
                    ?>
          <p class="text-info-vejamais text-info-vejamais-aj"><?php echo ($conteudo); ?></p>
          <?php $categories = get_the_category(); ?>
          <h3><?= esc_html( $categories[0]->name); ?></h3>
                  </a>
        </div>
      </div>

      <?php endwhile; ; endif; //fim do loop de posts ?>

    
    </div>

   
  </div>
</div>

<?php endwhile; else: endif;?>

<?php get_footer(); ?>