document.querySelectorAll('.btn_whasapp').forEach(btn => {
    btn.addEventListener('click', function () {
        let vendedor_id = this.dataset.vendedor;
        let descricao = this.dataset.descricao;
        let carro_id = this.dataset.carro_id;

        abrirWhatsapp(vendedor_id, descricao, carro_id);

    })
})

function abrirWhatsapp(vendedor_id, descricao, carro_id) {
    fetch("registrar_leads.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "vendedor_id=" + vendedor_id + "&descricao=" + descricao + "&carro_id=" + carro_id
    })
        .then(res => res.text())
        .then(data => {

            console.log(data); 
            let mensagem = "Olá, tenho interesse, pode me passar mais informações sobre:" + descricao + ". Consultor " + vendedor_id;
            let url = "https://wa.me/5547992643867?text=" + encodeURIComponent(mensagem);
            window.open(url, "_blank");
        });
}
