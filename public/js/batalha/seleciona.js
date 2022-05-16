let cardPokemons = document.querySelectorAll('#bp-card-pokemon');
let telaEscolhaPokemon = document.querySelector('#tela-escolha-pokemon');                
let telaBatalhaPokemon = document.querySelector('#tela-batalha-pokemon');
let telaBatalha = document.querySelector('#batalha-selecionado');

// cardPokemons.forEach(cardPokemon => {
//     cardPokemon.addEventListener('click', function (event) {
//         event.preventDefault();

//         if (cardPokemon.classList.contains('sombra-selecionado')) {
//             let res = confirm("Deseja realmente desselecionar o pokemon?");

//             if (res) {
//                 cardPokemon.classList.remove('sombra-selecionado');
//                 return;
//             }
//         }

//         if (!cardPokemon.classList.contains('sombra-selecionado')) {
//             let alt = true;

//             cardPokemons.forEach(cardPokemon => {
//                 if (cardPokemon.classList.contains('sombra-selecionado')) {
//                     let res = confirm("Deseja realmente alterar o pokemon selecionado?");

//                     if (res) {
//                         cardPokemon.classList.remove('sombra-selecionado');
//                     } else {
//                         alt = false;
//                     }
//                 }
//             });

//             if (alt) {                               
//                 telaEscolhaPokemon.classList.add('d-none');             
//                 telaBatalhaPokemon.classList.remove('d-none');             
                
//                 let telaBatalha = document.querySelector('#batalha-selecionado');
                
//                 telaBatalha.appendChild(cardPokemon);
                
//                 cardPokemon.classList.add('sombra-selecionado');
//             }
//         }
//     });
// });

cardPokemons.forEach(cardPokemon => {
    cardPokemon.addEventListener('click', function (event) {
        event.preventDefault();

        cardPokemon.classList.add('sombra-selecionado');

        telaEscolhaPokemon.classList.add('d-none');             
        telaBatalhaPokemon.classList.remove('d-none');           
                
        telaBatalha.appendChild(cardPokemon);
    });
});
