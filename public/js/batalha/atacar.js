async function atacar(pokemonAtacante, pokemonAtacado) {
    let ataque = pokemonAtacante.ataque;

    pokemonAtacado.dano(ataque);

    return new Promise(resolve => {
        setTimeout(() => {
            resolve(ataque);
        }, 2000);
    });
}