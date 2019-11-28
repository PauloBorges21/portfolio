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
