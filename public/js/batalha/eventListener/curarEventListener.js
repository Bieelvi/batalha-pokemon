let curarClass = document.querySelector('#curarId');

curarClass.addEventListener('click', function(event) { 
    event.preventDefault();  

    if (derrotado(pokemonUsuario, pokemonInimigo) == true) {
        return;
    }
    
    if (verificaoes() != false) {
        mensagem('sistema', 'Sistema ', verificaoes());
        return;
    } else {        
        alteraMensagemSistema('usuario');

        curar(pokemonUsuario)
            .then(cura => { 
                mensagem(
                    'usuario', 
                    pokemonUsuario.nome, 
                    `${pokemonUsuario.nome} curou ${cura} pontos de vida`
                );                

                alteraStatusTela('usuario', pokemonUsuario);

                if (derrotado(pokemonUsuario, pokemonInimigo) == true) {
                    return;
                } else {
                    inimigo();
                }
            }); 
    }    
});