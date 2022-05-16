let atacarClass = document.querySelector('#atacarId');

atacarClass.addEventListener('click', function(event) { 
    event.preventDefault();

    if (derrotado(pokemonUsuario, pokemonInimigo) == true) {
        return;
    }
    
    if (verificaoes() != false) {
        mensagem('sistema', 'Sistema ', verificaoes());
        return;
    } else {        
        atacar(pokemonUsuario, pokemonInimigo)
            .then(dano => { 
                mensagem(
                    'usuario', 
                    pokemonUsuario.nome, 
                    `${pokemonUsuario.nome} causou ${dano} de dano no ${pokemonInimigo.nome} inimigo`
                );                

                alteraStatusTela('computador', pokemonInimigo);

                if (derrotado(pokemonUsuario, pokemonInimigo) == true) {
                    return;
                } else {
                    inimigo();
                }                 
            }); 
    }    
});