const comprar = document.querySelectorAll(".div-btn-comprar"); 




function Comprar(event) {
    const idcomprar = this.id;
    const url = ("https://wa.me/5547992643867?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20informa%C3%A7%C3%B5es.%20" + idcomprar );
    window.location.href = url;   
}

comprar.forEach(function(botao) {
    botao.addEventListener("click", Comprar);
});



 const detalhes = document.querySelectorAll(".btn-detalhes"); //comando do botao detalhes

 detalhes.forEach(detalhes => {
     detalhes.addEventListener("click", function(event){
         event.preventDefault();
        //window.location.href = "../construcao.html"
         window.location.href = "../pagina-detalhes/detalhes.html"
         //window.location.href = "../imagens.html"
     });
 });div-btn-comprar

 window.addEventListener('resize', checkScreenSize);

 function checkScreenSize() {
    const width = window.innerWidth;

    if (width <=430) {
       
        // Chame sua função aqui
    } else {
       
        // Chame sua função aqui
        
    }
}

window.addEventListener('resize', checkScreenSize);

// Também é útil chamar a função uma vez para verificar o tamanho inicial
checkScreenSize();

