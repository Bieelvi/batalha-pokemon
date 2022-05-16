@include('cabecalho')    
@include('navegacao')

<div id="tela-resultado" class="d-none"></div>

<div class="d-none text-center d-flex align-items-center justify-content-center" id="tela-resultado-titulo">
  <h1 class="fw-bold" id="titulo-resultado" style="font-size: 150px;"></h1>
</div>

<div class="container mt-3">
    <div class="row">

        <div class="col-12 pb-3 border rounded scroll" id="tela-escolha-pokemon" style="height: 650px;">
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
        </div>

        <div class="col-12 border rounded d-flex flex-column d-none" id="tela-batalha-pokemon">
          <div class="text-center fw-bold p-3 mb-3"><span class="fs-4 text">Batalha</span></div>

          <div class="row">

            <div class="col-6">            
              <div class="border rounded flex-grow-1 scroll d-flex flex-column mb-3" id="mensagens" style="height: 500px;">  
                {{-- chat da batalha --}}
              </div>               
            </div>

            <div class="col-6 d-flex flew-wrap flex-column justify-content-between">
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
            </div>

          </div>         
                      
        </div>

    </div>
</div>

@include('rodape')