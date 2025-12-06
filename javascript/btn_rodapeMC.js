const whatsapp_mc = document.querySelectorAll(".span_contato_whatsapp_MC");

whatsapp_mc.forEach(whatsapp_mc => {
    whatsapp_mc.addEventListener("click", function(event){
        event.preventDefault();
        window.location.href = "https://wa.me/554796947300?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20seus%20servi%C3%A7os!"
    });
});

const intagram_mc = document.querySelectorAll(".span_contato_intagram_mc");

intagram_mc.forEach(intagram_mc => {
    intagram_mc.addEventListener("click", function(event){
        event.preventDefault();
        window.location.href = "https://www.instagram.com/mcmotorsitj?igsh=bmd1MXVwZmptY25z"
    });
});

const avaliacoes = document.querySelectorAll(".span_contato_avaliacoes");

avaliacoes.forEach(avaliacoes => {
    avaliacoes.addEventListener("click", function(event){
        event.preventDefault();
        window.location.href = "https://g.co/kgs/NhQDYYn"
    });
});