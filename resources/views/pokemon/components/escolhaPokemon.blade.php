<div class="text-center fw-bold p-3 mb-3 sticky-top bg-white"><span class="fs-4 text">Escolha seu pokemon</span></div>

<div class="d-flex flex-wrap justify-content-center gap-3">

    @foreach ($pokemons as $pokemon)  
     
    <div class="card bp-card-pokemon rounded" id="bp-card-pokemon">
      <img src="{{ asset($pokemon->img) }}" class="card-img-top bp-img-pokemon" alt="imagem pokemon {{ $pokemon->nome }}">
      <div class="card-body">
        <p class="card-text text-center" id="nome-escolhido"> {{ $pokemon->nome }} </p>
        <ul>
          <li id="vida-escolhido" value="{{ $pokemon->vida_base }}"> Vida: {{ $pokemon->vida_base }} </li>
          <li id="cura-escolhido" value="{{ $pokemon->cura_base }}"> Cura: {{ $pokemon->cura_base }} </li>
          <li id="ataque-escolhido" value="{{ $pokemon->ataque_base }}"> Ataque: {{ $pokemon->ataque_base }} </li>
        </ul>
      </div>
    </div>

    @endforeach

</div>