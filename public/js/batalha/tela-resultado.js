function alteraTelaResultado (vitoria) {
    telaResultado.classList.remove('d-none');
    telaResultadoTitulo.classList.remove('d-none');

    if (vitoria == true) {
        telaResultado.classList.add('bg-white');
        telaResultadoTitulo.querySelector('#titulo-resultado').classList.add('text-success');
        telaResultadoTitulo.querySelector('#titulo-resultado').textContent = "VITÓRIA"
    }

    if (vitoria == false) {
        telaResultado.classList.add('bg-white');
        telaResultadoTitulo.querySelector('#titulo-resultado').classList.add('text-danger');
        telaResultadoTitulo.querySelector('#titulo-resultado').textContent = "DERROTA"
    }
}