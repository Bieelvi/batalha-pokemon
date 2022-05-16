let iniciarClass = document.querySelector('#iniciarId');
let mensagemSistema = document.querySelector('#mensagem-sistema');
let textoMensagemSistema = document.querySelector('#texto-mensagem-sistema');
let acoesBotoes = document.querySelector('#acoes-botoes');
let telaResultado = document.querySelector('#tela-resultado');
let telaResultadoTitulo = document.querySelector('#tela-resultado-titulo');
let cardEscolhido = null;
let iniciou = false;
let pokemonUsuario = false;
let pokemonInimigo = false;
let batalhando = false;

iniciarClass.addEventListener('click', function(event) { 
    event.preventDefault();
       
    iniciarClass.classList.add('d-none');
    mensagemSistema.classList.remove('d-none');
    acoesBotoes.classList.remove('d-none');

    pokemonUsuario = pokemonUsuarioObj();
    pokemonInimigo = pokemonInimigoObj();

    iniciou = true;

    cardEscolhido = document.querySelector('.sombra-selecionado');
});

function pokemonUsuarioObj() {
    let card = document.querySelector('.sombra-selecionado');    
    let nome = (card.querySelector('#nome-escolhido')).textContent;
    let vida = (card.querySelector('#vida-escolhido')).value;
    let cura = (card.querySelector('#cura-escolhido')).value;
    let ataque = (card.querySelector('#ataque-escolhido')).value;

    return new Pokemon(nome, vida, ataque, cura, "");
}

function pokemonInimigoObj() {
    let card = document.querySelector('.sombra-inimigo');
    let nome = (card.querySelector('#nome-inimigo')).textContent;
    let vida = (card.querySelector('#vida-inimigo')).value;
    let cura = (card.querySelector('#cura-inimigo')).value;
    let ataque = (card.querySelector('#ataque-inimigo')).value;

    return new Pokemon(nome, vida, ataque, cura, "");
}