<nav class="bp-bg-nav p-3 mb-3">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <a href="#">
            <img src="<?= asset('img/pokemon-logo-8.png') ?>" alt="logo-home-pokemon" class="bp-img-logo-nav">
        </a>
        <ul class="nav">
            <li class="nav-item">
                @if (true)
                    <a href="" class="nav-link btn-success rounded">
                        <span class="text-white fw-bold">Entrar</span>
                    </a>                    
                @else
                    <a href="" class="nav-link btn-success rounded">
                        <span class="text-white fw-bold">Sair</span>
                    </a>                    
                @endif
            </li>
        </ul>
    </div>
</nav>