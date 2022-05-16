function verificaoes() {
    if (iniciou == false) {
        location.reload();
    }     

    if (cardEscolhido === null) {
        return 'Selecione um pokemon';
    }

    if (batalhando === true) {
        return 'Aguarde';
    }

    batalhando = true;

    return false;
}