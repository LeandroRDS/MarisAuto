const whatsapp = document.querySelectorAll(".span_contato_whatsapp");

whatsapp.forEach(whatsapp => {
    whatsapp.addEventListener("click", function(event){
        event.preventDefault();
        window.location.href = "https://wa.me/5547992643867?text=Ol%C3%A1%2C%20gostaria%20de%20saber%20mais%20sobre%20seus%20servi%C3%A7os!"
    });
});


const instagram = document.querySelectorAll(".span_contato_instagram");

instagram.forEach(instagram => {
    instagram.addEventListener("click", function(event){
        event.preventDefault();
        window.location.href = "https://www.instagram.com/infinitysistem_inc?igsh=MW44ajdrZmFoMzBkYw=="
    });
});

const linkedin = document.querySelectorAll(".span_contato_linkedin");

linkedin.forEach(linkedin => {
    linkedin.addEventListener("click", function(event){
        event.preventDefault();
        window.location.href = "https://www.linkedin.com/in/leandro-r-silva-335b57256/"
    });
});



