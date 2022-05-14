let cardPokemons = document.querySelectorAll('.bp-card-pokemon');

cardPokemons.forEach(cardPokemon => {
    cardPokemon.addEventListener('click', function(event) { 
        event.preventDefault();     

        let vidaAtual = document.querySelector('#vida-atual');
        
        if (cardPokemon.classList.contains('sombra-selecionado')) {            

            let res = confirm("Deseja realmente alterar o pokemon selecionado");            

            vidaAtual.textContent = '';

            cardPokemon.classList.remove('sombra-selecionado');
        } else {
            cardPokemon.classList.add('sombra-selecionado');

            let cardEscolhido = document.querySelector('.sombra-selecionado');
            let vidaEscolhido = (cardEscolhido.querySelector('#vida-escolhido')).textContent;

            vidaAtual.textContent = vidaEscolhido;
        }
    });
});

let atacar = document.querySelector('#atacar');

atacar.addEventListener('click', function(event) { 
    event.preventDefault();    

    let divMensagens = document.querySelector('#mensagens');    
    let cardEscolhido = document.querySelector('.sombra-selecionado');

    let vidaEscolhido = (cardEscolhido.querySelector('#vida-escolhido')).textContent;
    let curaEscolhido = (cardEscolhido.querySelector('#cura-escolhido')).textContent;
    let ataqueEscolhido = (cardEscolhido.querySelector('#ataque-escolhido')).textContent;
    let nomeEscolhido = (cardEscolhido.querySelector('#nome-escolhido')).textContent;

    let tagDiv = document.createElement('div');
    let tagSmall = document.createElement('small');
    let tagSpan = document.createElement('span');

    let data = new Date();

    let dataFormatada = data.getDate() + '/' + (data.getMonth() + 1) + '/' + data.getFullYear()

    tagSmall.textContent = nomeEscolhido + dataFormatada;

    tagDiv.appendChild(tagSmall);
    tagDiv.appendChild(tagSpan);
    tagDiv.classList.add('d-flex');
    tagDiv.classList.add('flex-column');
    tagDiv.classList.add('border');
    tagDiv.classList.add('rounded');
    tagDiv.classList.add('p-2');
    tagDiv.classList.add('m-3');

    divMensagens.appendChild(tagDiv);
    
    divMensagens.scrollTop = divMensagens.scrollHeight;
});

