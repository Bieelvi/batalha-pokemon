<div class="d-flex flex-wrap justify-content-center gap-3" id="batalha-selecionado">

    <div class="row">
        <div class="col-12 d-flex justify-content-end" id="img-pokemon-inimigo">
            <div>
                <img src="{{ asset($pokemonInimigo->img) }}" style="width: 250px" id="pokemon-inimigo" alt="imagem pokemon {{ $pokemonInimigo->nome }}">
                @include('pokemon.components.utilities.progressoVida')
            </div>
          

          <div class="card-body d-none sombra-inimigo">
            <p class="card-text text-center" id="nome-inimigo"> {{ $pokemonInimigo->nome }} </p>
            <ul>
              <li id="vida-inimigo" value="{{ $pokemonInimigo->vida_base }}"> Vida: {{ $pokemonInimigo->vida_base }} </li>
              <li id="cura-inimigo" value="{{ $pokemonInimigo->cura_base }}"> Cura: {{ $pokemonInimigo->cura_base }} </li>
              <li id="ataque-inimigo" value="{{ $pokemonInimigo->ataque_base }}"> Ataque: {{ $pokemonInimigo->ataque_base }} </li>
            </ul>
          </div>

        </div>
        <div class="col-12 d-flex justify-content-start">   
            <div>
                <div id="img-pokemon-usuario">
                </div>
                @include('pokemon.components.utilities.progressoVida')
            </div>         
        </div>
    </div>

</div> 