@include('cabecalho')    
@include('navegacao')

<div class="container">
    <div class="row">

        <div class="col-6 pb-3 border rounded scroll" style="height: 650px;">
            <div class="text-center fw-bold p-3 mb-3 sticky-top bg-white"><span class="fs-4 text">Escolha seu pokemon</span></div>
            <div class="d-flex flex-wrap justify-content-center gap-3">

                @foreach ($pokemons as $pokemon)   

                <div class="card bp-card-pokemon rounded">
                  <img src="{{ asset($pokemon->img) }}" class="card-img-top bp-img-pokemon" alt="imagem pokemon {{ $pokemon->nome }}">
                  <div class="card-body">
                    <p class="card-text text-center" id="nome-escolhido"> {{ $pokemon->nome }} </p>
                    <ul>
                      <li id="vida-escolhido"> Vida: {{ $pokemon->vida_base }} </li>
                      <li id="cura-escolhido"> Cura: {{ $pokemon->cura_base }} </li>
                      <li id="ataque-escolhido"> Ataque: {{ $pokemon->ataque_base }} </li>
                    </ul>
                  </div>
                </div>

                @endforeach
                
            </div>
        </div>

        <div class="col-6 border rounded d-flex flex-column">
            <div class="text-center fw-bold p-3 mb-3"><span class="fs-4 text">Batalha</span></div>
            <div class="border rounded flex-grow-1 scroll d-flex flex-column" id="mensagens" style="height: 500px;">
              
            </div>
            <div class="d-flex flex-wrap align-items-center justify-content-between flex-grow-1">
              <div class="d-flex gap-3">
                <button type="button" class="btn btn-secondary" id="atacar">Atacar</button>
                <button type="button" class="btn btn-secondary" id="curar">Curar</button>
                <button type="button" class="btn btn-secondary" id="fugir">Fugir</button>
              </div>
              <div id="vida-atual"></div>
            </div>            
        </div>

    </div>
</div>

@include('rodape')