function alteraStatusTela(quem, pokemon) {
    // if (quem == 'usuario') {
    //     cardEscolhido.querySelector('#vida-escolhido').textContent = `Vida: ${pokemon.vida}`;
    //     cardEscolhido.querySelector('#vida-escolhido').value = pokemon.vida;
    // }

    // if (quem == 'computador') {
    //     document.querySelector('#vida-inimigo').textContent = `Vida: ${pokemon.vida}`;
    //     document.querySelector('#vida-inimigo').value = pokemon.vida;
    // }
}

function alteraMensagemSistema(quem) {
    if (quem == 'computador') {
        textoMensagemSistema.textContent = "Vez do oponente";
    }
    
    if (quem == 'usuario') {
        textoMensagemSistema.textContent = "Sua vez";
    }
}