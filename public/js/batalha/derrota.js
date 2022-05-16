function derrotado(pokemonUsuario, pokemonInimigo) {
    let finalizado = false;

    if (pokemonUsuario.vida <= 0) {       
        finalizado = true;

        setInterval(() => {
            alteraTelaResultado(false);
        }, 1000);

        setInterval(() => {
            location.reload();
        }, 5000);
    }

    if (pokemonInimigo.vida <= 0) {
        finalizado = true;

        setInterval(() => {
            alteraTelaResultado(true);
        }, 1000);

        setInterval(() => {
            location.reload();
        }, 5000);
    }

    return finalizado;
}