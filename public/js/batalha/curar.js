async function curar(pokemon) {   
    return new Promise(resolve => {
        setTimeout(() => {
            resolve(pokemon.curar);
        }, 2000);
    });
}