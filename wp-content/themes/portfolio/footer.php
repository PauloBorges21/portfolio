

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/portfolio-rai-2020.js" type="text/javascript"></script>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/imprensa.js" type="text/javascript"></script> 

<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js">

</script><![endif] -->

<script>
    $('.btn-fechar-modal').click(function(){
        $('.youtube-video')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
    });
</script>
</body>
</html>




