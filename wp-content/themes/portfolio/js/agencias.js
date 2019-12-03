
function teste(obj) {
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
    // var criarContentDest = document.createElement('div');
    // criarContentDest.classList.add("p-conteudo");
    var criarContentDest = '<div id="p-conteudo">' + contentDest.value + '</div>';
    // criarContentDest.innerText = contentDest.value;
    // modal.querySelector(".desc-video-modal").appendChild(criarContentDest);

    modal.style.display = 'block';
    modal.style.transformStyle = 'preserve-3d';
    modal.style.opacity = '1';
    modal.style.transform = 'scaleX(1) scaleY(1) scaleZ(1)';
    modal.style.transition = 'transform 600ms ease 0s, opacity 350ms ease 0s';
}

function fechaME() {
    debugger;
    document.getElementById('modal-midiaEletronica').style.display = 'none';
    var boxModal = document.querySelector(".box-destq-conteudo");
    var textoModal = document.querySelector(".desc-video-modal");

    // || textoModal.children.length > 0
    if (boxModal.children.length > 0) {
        var imgCriada = boxModal.querySelectorAll('.img-destq-conteudo');
        var tituloCriado = textoModal.querySelectorAll('.h2-conteudo');
        var txtCriado = textoModal.document.getElementById('p-conteudo');

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

    slideIndex = 1;
}

