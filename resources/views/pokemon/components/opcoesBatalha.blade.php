<div class="d-flex flex-wrap justify-content-center gap-3" id="batalha-selecionado">

    <div class="card bp-card-pokemon rounded sombra-inimigo">
    <img src="{{ asset($pokemonInimigo->img) }}" class="card-img-top bp-img-pokemon" alt="imagem pokemon {{ $pokemonInimigo->nome }}">
    <div class="card-body">
        <p class="card-text text-center" id="nome-inimigo"> {{ $pokemonInimigo->nome }} </p>
        <ul>
            <li id="vida-inimigo" value="{{ $pokemonInimigo->vida_base }}"> Vida: {{ $pokemonInimigo->vida_base }} </li>
            <li id="cura-inimigo" value="{{ $pokemonInimigo->cura_base }}"> Cura: {{ $pokemonInimigo->cura_base }} </li>
            <li id="ataque-inimigo" value="{{ $pokemonInimigo->ataque_base }}"> Ataque: {{ $pokemonInimigo->ataque_base }} </li>
        </ul>
    </div>
    </div>

</div> 

<div class="w-100 d-flex justify-content-center mb-3">
  <input type="button" class="btn btn-secondary w-75" id="iniciarId" value="Iniciar Batalha">
</div> 

<div class="w-100 d-flex justify-content-center mb-3 d-none" id="mensagem-sistema">
  <span class="text-primay fw-bold fs-3" id="texto-mensagem-sistema">Sua vez</span>
</div> 

<div class="d-flex flex-wrap justify-content-center gap-2 m-3 d-none" id="acoes-botoes">
  <input type="button" class="btn btn-secondary" id="atacarId" value="Atacar">
  <input type="button" class="btn btn-secondary" id="curarId" value="Curar">
  <input type="button" class="btn btn-secondary" id="fugirId" value="Fugir">
</div> 