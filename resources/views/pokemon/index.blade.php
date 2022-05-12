@include('cabecalho')    
@include('navegacao')

<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="text-center fw-bold p-3 mb-3"><span class="fs-4 text">Escolha seu pokemon</span></div>
            <div class="d-flex flew-wrap bp-list-pokemon">
                <div class="card bp-card-pokemon">
                    <img src="<?= asset('img/pokemons/bulbasaur.png') ?>" class="card-img-top bp-img-pokemon" alt="...">
                    <div class="card-body">
                      <p class="card-text">Bulbasaur</p>
                    </div>
                </div>
                <div class="card bp-card-pokemon">
                  <img src="<?= asset('img/pokemons/squirtle.png') ?>" class="card-img-top bp-img-pokemon" alt="...">
                  <div class="card-body">
                    <p class="card-text">Squirtle</p>
                  </div>
                </div>
                <div class="card bp-card-pokemon">
                  <img src="<?= asset('img/pokemons/charmander.png') ?>" class="card-img-top bp-img-pokemon" alt="...">
                  <div class="card-body">
                    <p class="card-text">Charmander</p>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="text-center fw-bold"><span class="fs-4 text">Batalha</span></div>
        </div>
    </div>
</div>

@include('rodape')