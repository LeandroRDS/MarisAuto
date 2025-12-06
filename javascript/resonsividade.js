
function responsividade() {
    let largura = window.innerWidth

    if (largura <= 480) {
    
    } else{
        window.location.href = ("../tela_media_mobile/index.html");
 
    }
}


window.addEventListener("resize", responsividade);
