@include('cabecalho')    
@include('navegacao')

<div id="tela-resultado" class="d-none"></div>

@include('pokemon.components.telaResultado')

<div class="container mt-3">
    <div class="row">

        <div class="col-12 pb-3 border rounded scroll" id="tela-escolha-pokemon" style="height: 650px;">
          @include('pokemon.components.escolhaPokemon')
        </div>        

        <div class="col-12 border rounded d-flex flex-column d-none" id="tela-batalha-pokemon">
          <div class="text-center fw-bold p-3 mb-3"><span class="fs-4 text">Arena Pokemon</span></div>

          <div class="row">

            <div class="col-5">            
              @include('pokemon.components.chatBatalha')              
            </div>
            
            <div class="col-7 d-flex flew-wrap flex-column justify-content-between">
                @include('pokemon.components.opcoesBatalha')
                
                @include('pokemon.components.botaoIniciarBatalha')

                @include('pokemon.components.informacaoBatalha')
                
                @include('pokemon.components.botoesBatalha')
            </div>

          </div>         
                      
        </div>

    </div>
</div>

@include('rodape')