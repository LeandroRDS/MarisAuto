document.querySelectorAll('.btn_whasapp').entriesforEach(btn => {
    btn.addEventListener('click', function () {
        let vendedor_id = this.dataset.vendedor;
        let descricao = this.dataset.descricao;
        let carro_id = this.dataset.carro_id;


        abrirWhatsapp(vendedor, descricao, carro_id);

       
    })
})

function abrirWhatsapp(vendedor_id, descricao, carro_id ) {
    fetch("registrar_leads.php", {
        method: "POST",
        headers: {
            "content-Type": "application/x-www-form-urlencode"
        },
        body: "vendedor_id" + vendedor_id + "descricao" + descricao + "carro_id" + carro_id
    });

    let mensagem = "Olá, tenho interesse no carro " + carro + ". Consultor " + vendedor;

    let url = "https://wa.me/5547992643867?text=" + encodeURIComponent(mensagem);
    window.open(url, "_blank");
}
