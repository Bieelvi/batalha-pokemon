function inimigo() {
    alteraMensagemSistema('computador');

    if (pokemonInimigo.vida < (50 / 100) * pokemonInimigo.vidaInicial) {
        curar(pokemonInimigo)
            .then(cura => {
                mensagem(
                    'computador', 
                    pokemonInimigo.nome, 
                    `${pokemonInimigo.nome} curou ${cura} pontos de vida`
                );

                alteraStatusTela('computador', pokemonInimigo);

                alteraMensagemSistema('usuario');

                if (derrotado(pokemonUsuario, pokemonInimigo) == true) {
                    return;
                }
                
                batalhando = false;
            });
    } else {
        atacar(pokemonInimigo, pokemonUsuario)
            .then(dano => { 
                mensagem(
                    'computador', 
                    pokemonInimigo.nome, 
                    `${pokemonInimigo.nome} causou ${dano} de dano no seu ${pokemonUsuario.nome}`
                );
                
                alteraStatusTela('usuario', pokemonUsuario);

                alteraMensagemSistema('usuario');

                if (derrotado(pokemonUsuario, pokemonInimigo) == true) {
                    return;
                }
                
                batalhando = false;
            }); 
    }
}