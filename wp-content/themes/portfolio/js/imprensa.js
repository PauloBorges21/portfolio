function removeFechar() {
    document.getElementById('modal-teste').style.display='none';
    var modalImg = document.querySelector(".mask-imprensa.w-slider-mask");

    if(modalImg.children.length > 0){
        var itensCriados = modalImg.querySelectorAll('.slide-imprensa.w-slide');
        for (var i = 0; i < itensCriados.length; i++) {
            modalImg.removeChild(itensCriados[i]);
        }
    }

    slideIndex = 1;
}

function abrirModal(obj){
    var idModal = obj.getAttribute('data-SpiderMan');
    var formImg = document.querySelector('[data-form="' + idModal + '"]');
    var nameImg = formImg.getElementsByTagName('input');
    var modalImg = document.querySelector(".mask-imprensa.w-slider-mask");

    if(modalImg.children.length > 0){
        var itensCriados = modalImg.querySelectorAll('.slide-imprensa.w-slide');
        for (var i = 0; i < itensCriados.length; i++) {
            modalImg.removeChild(itensCriados[i]);
        }
    }

    for(var i = 0; i < nameImg.length; i++){
        var div = document.createElement('div');
        div.classList.add("slide-imprensa");
        div.classList.add("w-slide");

        var img = document.createElement('img');
        img.classList.add("img-imprensa");
        img.src = nameImg[i].value;

        modalImg.appendChild(div);
        div.appendChild(img);
    }

    document.getElementById("modal-teste").style.display='block';
    document.getElementById("modal-teste").style.transformStyle='preserve-3d';
    document.getElementById("modal-teste").style.opacity='1';
    document.getElementById("modal-teste").style.transform='scaleX(1) scaleY(1) scaleZ(1)';
    document.getElementById("modal-teste").style.transition='transform 600ms ease 0s, opacity 350ms ease 0s';


    showSlidesMarvel(slideIndex);
};

var slideIndex = 1;
// showSlidesMarvel(slideIndex);

// Next/previous controls
function plusSlides(n) {
    showSlidesMarvel(slideIndex += n);
}
function showSlidesMarvel(n) {
    var i;
    var slides = document.querySelectorAll(".slide-imprensa.w-slide");
    // var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    // for (i = 0; i < dots.length; i++) {
    //     dots[i].className = dots[i].className.replace(" active-shazam", "");
    // }
    slides[slideIndex-1].style.display = "block";
    // dots[slideIndex-1].className += " active-shazam";
}






var nomeID;

function SliderModalPrincipal(obj){




    var idMidia = obj.getAttribute('data-slidermd');

    nomeID = obj.getAttribute('data-menu');


    var modal = document.getElementById(nomeID);

    var formCardMidia = document.querySelector('[data-form="' + idMidia + '"]');

    /*Imagem de destaque do Modal*/
    var imgDest = formCardMidia.querySelector("[name='imagemDestaque']");
    var criarImgDest = document.createElement('img');
    criarImgDest.classList.add("img-destq-conteudo");
    criarImgDest.src = imgDest.value;
    var nameFormSlider = "Slider-" + idMidia;

    criarImgDest.setAttribute('data-sliderModalCliente', nameFormSlider);
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
    criarContentDest.classList.add("p-conteudo");
    criarContentDest.innerHTML = contentDest.value;
    textoModal.appendChild(criarContentDest);

    modal.style.display='block';
    modal.style.transformStyle='preserve-3d';
    modal.style.opacity='1';
    modal.style.transform='scaleX(1) scaleY(1) scaleZ(1)';
    modal.style.transition='transform 600ms ease 0s, opacity 350ms ease 0s';

    return nomeID;
}

function fechaME(obj){


    var modalFechar = obj.getAttribute('data-rai');
    //modalFechar = innerHTML.display.none;
    document.getElementById(modalFechar).style.display='none';
    var boxModal = document.querySelector(".box-destq-conteudo");
    var textoModal = document.querySelector(".desc-video-modal");

    // || textoModal.children.length > 0
    if(boxModal.children.length > 0){
        var imgCriada = boxModal.querySelectorAll('.img-destq-conteudo');
        var tituloCriado = textoModal.querySelectorAll('.h2-conteudo');
        var txtCriado = textoModal.querySelectorAll('.p-conteudo');

        for (var i = 0; i < imgCriada.length; i++) {
            boxModal.removeChild(imgCriada[i]);
        }

        for (var i = 0; i < tituloCriado.length; i++) {
            textoModal.removeChild(tituloCriado[i]);
        }

        for (var i = 0; i < txtCriado.length; i++) {
            textoModal.removeChild(txtCriado[i]);
        }
    }

    window.location.reload();
}




function fechaM(obj) {


    var modalFechar = obj.getAttribute('data-fechar');
    //modalFechar = innerHTML.display.none;
    document.getElementById('modalSlideFull').style.display = 'none';


    var mask = document.querySelector(".mask-slider-full.w-slider-mask");


    //Pegar o Slide full a ser removido

    var removeFull = mask.querySelectorAll(".slide-full.w-slide");
    if(mask.children.length > 0){


         //var itens = removeFull.querySelectorAll('.slide-full.w-slide');
        // var txtCriado = textoModal.querySelectorAll('.p-conteudo');

        for (var i = 0; i < removeFull.length; i++) {
            mask.removeChild(removeFull[i]);

            window.location.reload();
        }


        //
        // for (var i = 0; i < tituloCriado.length; i++) {
        //     mask.removeChild(tituloCriado[i]);
        // }
        //
        // for (var i = 0; i < txtCriado.length; i++) {
        //     mask.removeChild(txtCriado[i]);
        // }
    }


}



function sliderModalSliders(obj){




   // var nomeIDFull = obj.getAttribute('data-video-full');

    var videoClicado = obj.children;
    videoClicado = videoClicado[0].getAttribute('data-sliderModalCliente');

    //Selecionar Modal para implementar os elementos
    var modal = document.getElementById('modalSlideFull');
    modal = modal.querySelector(".mask-slider-full");


    // Selecionar o Form
    var formItensSliders = document.querySelector('[data-form="' + videoClicado + '"]');
    // Selecionar as imagens dentro do Form
    var imagensModalSlider = formItensSliders.querySelectorAll("[name='imagemModal']");
    // Selecionar os vídeos dentro do Form
    var videosModalSlider = formItensSliders.querySelectorAll("[name='urlVideo']");

    // Soma os arrays para apresentar ou não as setas do slider
    var soma = imagensModalSlider.length + videosModalSlider.length;


    if(soma < 2){

        document.querySelector('.arrow-slide-full.esq.w-slider-arrow-left').style.display = "none";
        document.querySelector('.arrow-slide-full.dir.w-slider-arrow-right').style.display = "none";

    }

    if(imagensModalSlider.length >= 1){
        // Montar itens de imagem para o slide
        for(var i = 0; i < imagensModalSlider.length; i++){


            // Criar Div Para o Efeito de Slide
            var criarSlideFull = document.createElement('div');
            criarSlideFull.classList.add("slide-full");
            criarSlideFull.classList.add("w-slide");

            // Criar Div de Content para a imagem
            var criarContentSlide = document.createElement('div');
            criarContentSlide.classList.add("content-slide-full");
            criarSlideFull.appendChild(criarContentSlide);

            // Criar Imagem
            var criarImgSliderModal = document.createElement('img');
            criarImgSliderModal.classList.add("img-slider-full");
            criarImgSliderModal.src = imagensModalSlider[i].value;
            criarContentSlide.appendChild(criarImgSliderModal);

            //Inserir tudo no modal
            modal.appendChild(criarSlideFull);
        }
    }

    if(videosModalSlider.length >= 1){

        // Montar itens de imagem para o slide
        for(var i = 0; i < videosModalSlider.length; i++){


            // Criar Div Para o Efeito de Slide
            var criarSlideFull = document.createElement('div');
            criarSlideFull.classList.add("slide-full");
            criarSlideFull.classList.add("w-slide");


            // Criar Div de Container para o vídeo
            var criarContainerVideo = document.createElement('div');
            criarContainerVideo.classList.add("container-video-slider");
            criarSlideFull.appendChild(criarContainerVideo);

            // Criar Vídeo
            var criarIframeSliderModal = document.createElement('iframe');
            criarIframeSliderModal.setAttribute('frameborder', '0');
            criarIframeSliderModal.setAttribute('scrolling', '0');
            criarIframeSliderModal.setAttribute('allow', 'autoplay; fullscreen');
            criarIframeSliderModal.setAttribute('allowfullscreen', 'true');


            criarIframeSliderModal.style = "position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto";
            var src = 'https://www.youtube.com/embed/' + videosModalSlider[i].value + '?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0';



            criarIframeSliderModal.src = src;
            //alert("criando container");

            criarContainerVideo.appendChild(criarIframeSliderModal);
            modal.appendChild(criarSlideFull);
        }
    }


    //alert(document.getElementById("modalSlideFull").outerHTML);
    //criarContainerVideo.appendChild(criarIframeSliderModal);
    //modal.appendChild(criarSlideFull);

    //modal.parentElement.appendChild(criarSlideFull);
    //document.getElementById("modalSlideFull").style.display = "flex";
    //document.getElementById("modalSlideFull").style.opacity = "1";

    //teste.style.opacity = 0;


//    console.log(imagensModalSlider);
}




function sliderModalVejaMais(obj){



    var nomeIDFullVeja = obj.getAttribute('data-video-full');

    var videoClicado = obj.children;
    videoClicado = videoClicado[0].getAttribute('data-sliderModalVeja');

    //Selecionar Modal para implementar os elementos
    var modal = document.getElementById("modalSlideFull");
    modal = modal.querySelector(".mask-slider-full");

    // Selecionar o Form
    var formItensSlidersVeja = document.querySelector('[data-form="' + videoClicado + '"]');
    // Selecionar as imagens dentro do Form
    var imagensModalSliderVeja = formItensSlidersVeja.querySelectorAll("[name='imagemModalVejaMais']");
    // Selecionar os vídeos dentro do Form
    var videosModalSliderVeja = formItensSlidersVeja.querySelectorAll("[name='urlVideoVejaMais']");

    // Soma os arrays para apresentar ou não as setas do slider
    var soma = imagensModalSliderVeja.length + videosModalSliderVeja.length;
    if(soma < 2){
        document.querySelector('.arrow-slide-full.esq.w-slider-arrow-left').style.display = "none";
        document.querySelector('.arrow-slide-full.dir.w-slider-arrow-right').style.display = "none";
    }

    if(imagensModalSliderVeja.length >= 1){
        // Montar itens de imagem para o slide
        for(var i = 0; i < imagensModalSliderVeja.length; i++){

            // Criar Div Para o Efeito de Slide
            var criarSlideFullVeja = document.createElement('div');
            criarSlideFullVeja.classList.add("slide-full");
            criarSlideFullVeja.classList.add("w-slide");

            // Criar Div de Content para a imagem
            var criarContentSlideVeja = document.createElement('div');
            criarContentSlideVeja.classList.add("content-slide-full");
            criarSlideFullVeja.appendChild(criarContentSlideVeja);

            // Criar Imagem
            var criarImgSliderModalVeja = document.createElement('img');
            criarImgSliderModalVeja.classList.add("img-slider-full");
            criarImgSliderModalVeja.src = imagensModalSliderVeja[i].value;
            criarContentSlideVeja.appendChild(criarImgSliderModalVeja);

            //Inserir tudo no modal
            modal.appendChild(criarSlideFullVeja);
        }
    }

    if(videosModalSliderVeja.length >= 1){
        // Montar itens de imagem para o slide
        for(var i = 0; i < videosModalSliderVeja.length; i++){

            // Criar Div Para o Efeito de Slide
            var criarSlideFullVeja = document.createElement('div');
            criarSlideFullVeja.classList.add("slide-full");
            criarSlideFullVeja.classList.add("w-slide");

            // Criar Div de Container para o vídeo
            var criarContainerVideoVeja = document.createElement('div');
            criarContainerVideoVeja.classList.add("container-video-slider");
            criarSlideFullVeja.appendChild(criarContainerVideoVeja);

            // Criar Vídeo
            var criarIframeSliderModalVeja = document.createElement('iframe');
            criarIframeSliderModalVeja.setAttribute('frameborder', '0');
            criarIframeSliderModalVeja.setAttribute('scrolling', '0');
            criarIframeSliderModalVeja.setAttribute('allow', 'autoplay; fullscreen');
            criarIframeSliderModalVeja.setAttribute('allowfullscreen', 'true');
            criarIframeSliderModalVeja.style = "position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto";
            var src = 'https://www.youtube.com/embed/' + videosModalSliderVeja[i].value + '?rel=0&amp;controls=1&amp;autoplay=0&amp;mute=0&amp;start=0';
            criarIframeSliderModalVeja.src = src;

            criarContainerVideoVeja.appendChild(criarIframeSliderModalVeja);
            modal.appendChild(criarSlideFullVeja);
        }
    }

    console.log(imagensModalSliderVeja);
}