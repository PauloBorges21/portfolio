
function teste(obj){
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
    var criarContentDest = document.createElement('div');
    criarContentDest.innerHTML = contentDest.value;
    textoModal.appendChild(criarContentDest);


    // var infoInputs = formCardMidia.getElementsByTagName('input');
    //
    //
    // for(var i = 0; i < infoInputs.length; i++){
    //
    //     if(infoInputs[i].getElementsByName == imagemDestaque ){
    //
    //     }
    //
    //
    //     var img = document.createElement('img');
    //     img.classList.add("img-destq-conteudo");
    //     img.src = nameImg[i].value;
    //
    //     modalImg.appendChild(div);
    //     div.appendChild(img);
    // }


    modal.style.display='block';
    modal.style.transformStyle='preserve-3d';
    modal.style.opacity='1';
    modal.style.transform='scaleX(1) scaleY(1) scaleZ(1)';
    modal.style.transition='transform 600ms ease 0s, opacity 350ms ease 0s';

    // console.log(infoInputs);
}


