
function resonsividade() {
    let largura = window.innerWidth
    let header_medio = document.getElementById("header_medio");
    if (largura <= 480) {
        if (header_medio.href = "style_medio/header.css"){
            header_medio.setAttribute("href", "style/header.css")
        };
    } if (largura > 481 && largura < 768) {

        header_medio.setAttribute("href", "style_medio/header.css")
    };if (largura > 769 && largura <= 1200) {

        header_medio.setAttribute("href", "style/header.css")
    };
};

window.addEventListener('resize', resonsividade);
window.addEventListener('load', resonsividade);

