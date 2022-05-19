let cardPokemons = document.querySelectorAll('#bp-card-pokemon');
let telaEscolhaPokemon = document.querySelector('#tela-escolha-pokemon');                
let telaBatalhaPokemon = document.querySelector('#tela-batalha-pokemon');
let telaBatalha = document.querySelector('#batalha-selecionado');

cardPokemons.forEach(cardPokemon => {
    cardPokemon.addEventListener('click', function (event) {
        event.preventDefault();

        cardPokemon.classList.add('sombra-selecionado');

        telaEscolhaPokemon.classList.add('d-none');             
        telaBatalhaPokemon.classList.remove('d-none');

        let imgCardPokemon = cardPokemon.querySelector('.bp-img-pokemon');
        imgCardPokemon.classList.remove('card-img-top');
        imgCardPokemon.classList.remove('bp-img-pokemon');
        imgCardPokemon.style.width = '250px';
        
        document.querySelector('#img-pokemon-usuario').appendChild(imgCardPokemon);
    });
});
