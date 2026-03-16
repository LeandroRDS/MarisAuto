function abrirWhatsapp(vendedor, carro) {
    fetch("resistrar_leads.php?vendedor=" + vendedor + "&carro" + carro);
    let mensagem = "Olá, tenho interesse no carro " + carro + ". Consultor " + vendedor;
    let url = "https://wa.me/5531992643867?text=" + encodeURIComponent(mensagem);
    window.open(url, "_blank");
}


document.querySelectorAll('.btn_whasapp').forEach(btn => {
    btn.addEventListener('click', function () {
        let vendedor = this.dataset.vendedor;
        let descricao = this.dataser.descricao;

        abrirWhatsapp(vendedor, descricao);

    })
})
